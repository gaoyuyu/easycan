<?php
/**
 * @Describtion 用户模型控制器
 *
 * @User: xiaohang
 * @CreateTime: 16/3/1 下午4:54
 */

namespace Home\Model;

use Think\Model\RelationModel;

class UserModel extends  RelationModel
{

    // 关联模型
    protected $_link = array(
        'Role' => array(
            'mapping_type' => self::MANY_TO_MANY,
            'foreign_key' => 'user_id',
            'relation_foreign_key' => 'role_id',
            'relation_table' => 'can_role_user', //此处应显式定义中间表名称，且不能使用C函数读取表前缀
            'mapping_fields' => 'id,name',
        )
    );

    // 自动验证
//    protected $_validate = array(
//        array('username', 'require', '用户域账户必填'),
//        //array('password', 'require', '密码必填'),
//    );
//
//    // 自动完成
//    protected $_auto = array(
//        array('status', '1'),                           // 新增的时候把status字段设置为1
//        array('logintime', 'time', 1, 'function'),      // 登录时间
//        array('loginip', 'getclientip', 3, 'callback'), // 获取登录IP
//    );
//
//    /**
//     * @return mixed
//     * 获取登录IP
//     */
//    protected function getclientip()
//    {
//        return get_client_ip();
//    }
}
