<?php
/**
 * Created by PhpStorm.
 * User: gaoyy
 * Date: 2016/10/24 0024
 * Time: 23:39
 */
namespace Api\Controller;

use Think\Controller;

class UserController extends AppController
{
    public function index()
    {
        //        $a = M("user")->select();
        //        $this->returnResponseOK($a);

        $a = array(
            "a" => $_POST,
        );
        $this->returnResponseOK($a);

    }

    public function login()
    {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
//        $username = trim($_GET["username"]);
//        $password = trim($_GET["password"]);

        if (empty($username) || empty($password))
        {
            $this->returnResponseError("请检查用户名和密码！");
        }
        $user = D("user")->where("username = '{$username}'")->relation(true)->find();

        if ($user)
        {
            if (md5($password) == $user["password"])
            {
                $this->returnResponseOK($user);
            } else
            {
                $this->returnResponseError("密码错误！");
            }

        } else
        {
            $this->returnResponseError("用户不存在！");
        }
    }

}