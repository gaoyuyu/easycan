<?php
/**
 * User: xiaohang
 * Date: 15/5/27
 */

$Menu = include('model_config.php');

if (false == $Menu) {
    $Menu = array();
}

// 系统菜单配置
$systemMenu = array(
    // 后台管理
    'Manage' => array(
        'name' => '后台管理',
        'target' => 'Manage/index',
        'style' => 'admin_icon',
        'sub_menu' => array(
            array('item' => array('Manage/index' => '后台管理首页'), 'hidden' => true),
            array('item' => array('Manage/addRole' => '添加角色')),
            array('item' => array('Manage/createRole' => '保存角色信息'), 'hidden' => true),
            array('item' => array('Manage/manageRole' => '角色管理')),
            array('item' => array('Manage/assignAccess' => '分配角色权限'), 'hidden' => true),
            array('item' => array('Manage/updateAssignAccess' => '更新角色分配权限'), 'hidden' => true),
            array('item' => array('Manage/deleteRole' => '删除角色'), 'hidden' => true),
            array('item' => array('Manage/updateRole' => '更新角色'), 'hidden' => true),
            array('item' => array('Manage/addNode' => '添加权限节点')),
            array('item' => array('Manage/createNode' => '保存权限节点信息'), 'hidden' => true),
            array('item' => array('Manage/manageNode' => '权限节点管理')),
            array('item' => array('Manage/updateNode' => '更新权限节点信息'), 'hidden' => true),
            array('item' => array('Manage/addUser' => '添加用户')),
            array('item' => array('Manage/createUser' => '保存用户信息'), 'hidden' => true),
            array('item' => array('Manage/manageUser' => '用户管理')),
            array('item' => array('Manage/checkUser' => '检查用户是否存在'), 'hidden' => true),
            array('item' => array('Manage/checkRealName' => '检查真实姓名是否重复'), 'hidden' => true),
            array('item' => array('Manage/editUser' => '编辑用户'), 'hidden' => true),
            array('item' => array('Manage/updateUser' => '更新用户信息'), 'hidden' => true),
            array('item' => array('Manage/disabledUser' => '禁用用户'), 'hidden' => true),
            array('item' => array('Manage/enabledUser' => '启用用户'), 'hidden' => true),
        ),
    ),
);

return array_merge($Menu, $systemMenu);
