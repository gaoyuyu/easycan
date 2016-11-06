<?php

namespace Home\Controller;


use Org\Util\Rbac;
use Think\Controller;

class CommonController extends Controller
{
    public function _initialize()
    {
        //登录过滤
        $this->filterLogin();

        //权限过滤
        $this->filterAccess();

        //获取左侧导航菜单
        $node = $this->getMenuNode();
        $this->assign("node", $this->unsetHiddenNodeOperation($node));
    }

    /**
     * 获取左侧导航菜单
     * @return mixed
     */
    public function getMenuNode()
    {
        if (session(C("ADMIN_AUTH_KEY")))
        {
            $node = D("node")->where("level = 2 and hidden = 1")->order("sort")->relation(true)->select();
            return $node;
        }
        else
        {
            $node = D("node")->where("level = 2 and hidden = 1")->order("sort")->relation(true)->select();
            $module = "";
            $node_id = "";
            $accessList = $_SESSION["_ACCESS_LIST"];
            foreach ($accessList as $key => $value)
            {
                foreach ($value as $key1 => $value1)
                {
                    $module = $module . ',' . $key1;
                    foreach ($value1 as $key2 => $value2)
                    {
                        $node_id = $node_id . ',' . $value2;
                    }
                }
            }
            $moduleArr = explode(",", $module);
            $nodeIdArr = explode(",", $node_id);
            unset($moduleArr[0]);
            unset($nodeIdArr[0]);
            foreach ($node as $key => $value)
            {
                if (!in_array(strtoupper($value["name"]), $moduleArr))
                {
                    unset($node[$key]);
                }
                else
                {
                    foreach ($value["node"] as $nkey => $nvalue)
                        if (!in_array($nvalue["id"], $nodeIdArr))
                        {
                            unset($node[$key]["node"][$nkey]);
                        }
                }
            }
            return $node;
        }
    }

    /**
     * 过滤节点中隐藏的操作
     * @param $node
     * @return mixed
     */
    public function unsetHiddenNodeOperation($node)
    {
        foreach ($node as $key=>$value)
        {
            foreach ($value["node"] as $nodeKey=>$nodeValue)
            {
                if($nodeValue["hidden"] == 0)
                {
                    unset($node[$key]["node"][$nodeKey]);
                }
            }
        }
        return $node;
    }


    /**
     * 登录过滤
     */
    public function filterLogin()
    {
        $noLoginModules = explode(',', C('NOT_LOGIN_MODULES'));
        if (!in_array(CONTROLLER_NAME, $noLoginModules))
        {
            //检查session中是否存在USER_AUTH_KEY，存在即已登录，否则未登录，跳转到登录页
            if (!isset($_SESSION[C('USER_AUTH_KEY')]))
            {
                $this->redirect("Public/index");
            }
        }
    }

    /**
     * 权限过滤
     */
    public function filterAccess()
    {
        $notAuth = in_array(MODULE_NAME, explode(',', C('NOT_AUTH_MODULE'))) || in_array(ACTION_NAME, explode(',', C('NOT_AUTH_ACTION')));
        if (C("USER_AUTH_ON") && !$notAuth)
        {
            if (!Rbac::AccessDecision())
            {
                $this->error("您没有权限执行该操作!");
            }
        }
    }

    public function alertAjax($value,$message,$code = 3)
    {
        if(empty($value))
        {
            $json["code"] = $code;
            $json["info"] = $message;
            $this->ajaxReturn($json, "JSON");
        }
    }
}