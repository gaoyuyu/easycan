<?php
namespace Home\Controller;

use Org\Util\Rbac;
use Think\Controller;

/**
 * 公共
 * Class PublicController
 * @package Home\Controller
 */
class PublicController extends CommonController
{

    /**
     * 初始化
     */
    public function _initialize()
    {

        parent::_initialize();

        // 需要登录才能访问的action
        $filterLogin = array('logout');
        if (in_array(ACTION_NAME, $filterLogin))
        {
            $this->filterLogin();
        }

        // 登录后不可访问的action
        $filterAction = array('index', 'login');
        if (in_array(ACTION_NAME, $filterAction) && $this->hasLogin())
        {
            return $this->redirect('Public/main');
        }
    }

    public function hasLogin()
    {
        return isset($_SESSION[C('USER_AUTH_KEY')]);
    }


    /**
     * 登录页
     */
    public function index()
    {
        $this->display("login");
    }

    /**
     * 主页
     */
    public function main()
    {
        $this->display("main");
    }


    public function login()
    {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        

        if (empty($username))
        {
            return $this->error("请填写用户名", "index", 2);
        }
        if (empty($password))
        {
            return $this->error("请填写密码", "index", 2);
        }

        $um = M("user");
        $where["username"] = $username;
        $where["password"] = md5($password);
        $user = $um->where($where)->find();
        if ($user)
        {
            session("user", $user);
            session(C("USER_AUTH_KEY"), $user["id"]);
            if ($_SESSION["user"]["username"] == C("RBAC_SUPERADMIN"))
            {
                session(C("ADMIN_AUTH_KEY"), true);
            }
            Rbac::saveAccessList();
            //更新登录时间和IP
            $update = array(
                "logintime" => time(),
                "loginip" => get_client_ip(),
            );
            $um->where("id={$user["id"]}")->save($update);
            $this->redirect("Public/main");
        }
        else
        {
            $this->error("登录失败，请检查用户名和密码", "index", 3);
        }
    }

    /**
     * 退出
     */
    public function logout()
    {
        $_SESSION = array();
        if (isset($_COOKIE[session_name()]))
        {
            setcookie(session_name(), '', time() - 1, '/');
        }
        session_destroy();
        $this->redirect("Public/index");
    }
}