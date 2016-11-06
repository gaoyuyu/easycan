<?php
namespace Home\Controller;

use Think\Controller;
use Home\Common\Tree;

/**
 * 权限管理
 * Class RbacController
 * @package Home\Controller
 */
class RbacController extends CommonController
{
    /**
     * 添加角色
     */
    public function addRole()
    {
        $this->display("addrole");
    }

    public function addRoleHandle()
    {
        $roleName = trim($_POST["rolename"]);
        $roleRemark = trim($_POST["roleremark"]);
        $status = trim($_POST["status"]);
        $pid = trim($_POST["pid"]);


        $this->alertAjax($roleName,"请填写角色名称");

        $data = array(
            "name" => $roleName,
            "remark" => $roleRemark,
            "status" => $status,
            "pid" => $pid,
        );

        $rm = M("role");
        $rm->startTrans();
        $rm->add($data);
        if ($rm->getDbError())
        {
            $rm->rollback();
            $json["code"] = 0;
            $json["info"] = "添加失败";
        }
        else
        {
            $rm->commit();
            $json["code"] = 1;
            $json["info"] = "添加成功";
        }
        $this->ajaxReturn($json, "JSON");
    }

    /**
     * 角色管理
     */
    public function roleList()
    {
        $rm = M("role");
        $roleList = $rm->select();
        $this->assign("roleList", $roleList);
        $this->display("rolelist");
    }

    /**
     * 修改角色信息
     */
    public function updateRole()
    {
        $rid = trim($_POST["rid"]);
        $roleName = trim($_POST["rolename"]);
        $roleRemark = trim($_POST["roleremark"]);
        $status = trim($_POST["status"]);
        $pid = trim($_POST["pid"]);

        $this->alertAjax($roleName,"请填写角色名称");

        $data = array(
            "name" => $roleName,
            "remark" => $roleRemark,
            "status" => $status,
            "pid" => $pid,
        );

        $rm = M("role");
        $rm->startTrans();
        $rm->where("id={$rid}")->save($data);
        if($rm->getDbError())
        {
            $rm->rollback();
            $json["code"] = 0;
            $json["info"] = "修改失败";
        }
        else
        {
            $rm->commit();
            $json["code"] = 1;
            $json["info"] = "修改成功";
        }
        $this->ajaxReturn($json, "JSON");
    }

    /**
     * 删除角色
     */
    public function deleteRole()
    {
        $id = trim($_POST["rid"]);
        $rm = M("role");
        $rm->startTrans();
        $rm->where("id={$id}")->delete();
        if($rm->getDbError())
        {
            $rm->rollback();
            $json["code"] = 0;
            $json["info"] = "删除失败";
        }
        else
        {
            $rm->commit();
            $json["code"] = 1;
            $json["info"] = "删除成功";
        }
        $this->ajaxReturn($json, "JSON");

    }


    /**
     * 添加权限
     */
    public function addNode()
    {
        $nm = M("node");
        $nodeList = $nm->where("level !=3")->order("sort")->select();
        $this->assign("nodeList", $nodeList);
        $this->display("addnode");
    }

    public function addNodeHandle()
    {
        $name = trim($_POST["name"]);
        $title = trim($_POST["title"]);
        $status = trim($_POST["status"]);
        $level = trim($_POST["level"]);
        $pid = trim($_POST["pid"]);
        $sort = trim($_POST["sort"]);
        $hidden = trim($_POST["hidden"]);

        $this->alertAjax($name,"请填写英文名称");
        $this->alertAjax($title,"请填写中文名称");
        $this->alertAjax($sort,"请填写排序值");


        $data = array(
            "name" => $name,
            "title" => $title,
            "status" => $status,
            "level" => $level,
            "pid" => $pid,
            "sort" => $sort,
            "hidden"=>$hidden,
        );
        $nm = M("node");
        $nm->startTrans();
        $nm->add($data);
        if ($nm->getDbError())
        {
            $nm->rollback();
            $json["code"] = 0;
            $json["info"] = "添加失败";
        }
        else
        {
            $nm->commit();
            $json["code"] = 1;
            $json["info"] = "添加成功";
        }
        $this->ajaxReturn($json, "JSON");
    }

    /**
     * 权限管理
     */
    public function nodeList()
    {
        $nm = M("node");
        $nodeList = $nm->order("sort")->select();
        $this->assign("nodeList", Tree::create($nodeList));
        $this->display("nodelist");
    }

    /**
     * 删除权限
     */
    public function deleteNode()
    {
        $id = trim($_POST["nid"]);
        if(empty($id))
        {
            $json["code"] = 0;
            $json["info"] = "参数不正确";
            $this->ajaxReturn($json,"JSON");
        }
        $nm = M("node");
        $result = Tree::delete($nm, $id);
        if($result)
        {
            $json["code"] = 1;
            $json["info"] = "删除成功";
        }
        else
        {
            $json["code"] = 0;
            $json["info"] = "删除失败";
        }
        $this->ajaxReturn($json,"JSON");

    }

    /**
     * 修改权限信息
     */
    public function updateNode()
    {
        $id = trim($_POST["id"]);
        $name = trim($_POST["name"]);
        $title = trim($_POST["title"]);
        $sort = trim($_POST["sort"]);

        $this->alertAjax($title,"请填写中文名称");
        $this->alertAjax($name,"请填写英文名称");
        $this->alertAjax($sort,"请填写排序");

        $update =array(
            "name"=>$name,
            "title"=>$title,
            "sort"=>$sort,
        );
        $nm = M("node");
        $nm->startTrans();
        $nm->where("id={$id}")->save($update);
        if($nm->getDbError())
        {
            $nm->rollback();
            $json["code"] = 0;
            $json["info"] = "修改失败";
        }
        else
        {
            $nm->commit();
            $json["code"] = 1;
            $json["info"] = "修改成功";
        }
        $this->ajaxReturn($json, "JSON");
    }

    /**
     * 添加用户
     */
    public function addUser()
    {
        $roleList = M("role")->select();
        $this->assign("roleList", $roleList);
        $this->display("adduser");
    }

    public function addUserHandle()
    {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $roleId = trim($_POST["role_id"]);

        $this->alertAjax($username,"请填写用户名");
        $this->alertAjax($password,"请填写密码");

        $userData = array(
            "username" => $username,
            "password" => md5($password),//md5加密
            "logintime" => time(),
            "loginip" => get_client_ip(),
            "status" => 1
        );
        $uid = M("user")->add($userData);
        if ($uid)
        {
            $roleData = array(
                "role_id" => $roleId,
                "user_id" => $uid,
            );
            M("role_user")->add($roleData);
            $json["code"] = 1;
            $json["info"] = "添加成功";
        }
        else
        {
            $json["code"] = 0;
            $json["info"] = "添加失败";
        }
        $this->ajaxReturn($json, "JSON");
    }

    /**
     * 用户管理
     */
    public function userList()
    {
        $userList = D("user")->field("password", true)->relation(true)->select();
        $this->assign("userList", $userList);
        $this->display("userlist");
    }

    /**
     * 修改用户信息（包括用户组）
     */
    public function updateUser()
    {
        $roleId = trim($_POST["role_id"]);
        $userId = trim($_POST["user_id"]);
        $username = trim($_POST["username"]);


        $this->alertAjax($username,"请填写用户名");


        $um = M("user");
        $um->startTrans();
        $um->where("id = {$userId}")->setField("username",$username);


        $rum = M("role_user");
        $rum->where("user_id={$userId}")->setField("role_id",$roleId);

        if($um->getDbError() || $rum->getDbError())
        {
            $um->rollback();
            $json["code"] = 0;
            $json["info"] = "修改失败";
        }
        else
        {
            $um->commit();
            $json["code"] = 1;
            $json["info"] = "修改成功";
        }
        $this->ajaxReturn($json, "JSON");
    }

    /**
     * 获取角色l列表
     */
    public function getRoleList()
    {
        $roleList = M("role")->select();
        $this->ajaxReturn($roleList, "JSON");
    }


    /**
     * 配置权限
     */
    public function access()
    {
        $rid = $_GET["rid"];
        $name = M("role")->where("id = $rid")->getField("name");
        $node = M("node")->order("sort")->select();
        $data = array();
        $access = M("access");
        foreach ($node as $value)
        {
            $count = $access->where("role_id = $rid and node_id = {$value['id']}")->count();
            if ($count)
            {
                $value["access"] = 1;
            }
            else
            {
                $value["access"] = 0;
            }
            $data[] = $value;
        }
        $nodeList = $data;
        $this->assign("name", $name);
        $this->assign("rid", $rid);
        $this->assign("nodeList", Tree::create($nodeList));
        $this->display("access");
    }

    /**
     * 为角色设置权限
     */
    public function setAccess()
    {
        $rid = I("rid", "", int);
        $am = M("access");
        $am->where("role_id={$rid}")->delete();
        if (isset($_POST["access"]))
        {
            foreach ($_POST["access"] as $value)
            {
                $tmp = explode("_", $value);
                $data[] = array(
                    "role_id" => $rid,
                    "node_id" => $tmp[0],
                    "level" => $tmp[1],
                );
                $am->addAll($data);
                if ($am->getDbError())
                {
                    $json["code"] = 0;
                    $json["info"] = "修改失败";
                }
                else
                {
                    $json["code"] = 1;
                    $json["info"] = "修改成功";
                }
            }
        }
        else
        {
            $json["code"] = 0;
            $json["info"] = "你未选中任何项";
        }
        $this->ajaxReturn($json, "JSON");

    }
}