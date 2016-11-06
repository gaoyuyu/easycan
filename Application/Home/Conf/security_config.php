<?php
return array(
    // 表单令牌
    'TOKEN_ON'      =>  false,
    'TOKEN_NAME'    =>  '__hash__',
    'TOKEN_TYPE'    =>  'md5',
    'TOKEN_RESET'   =>  true,

    // 配置文件增加设置
    'RBAC_SUPERADMIN'   =>  'admin',          // 超级管理员名称，对应用户表中某一个用户名username
    'ADMIN_AUTH_KEY'    =>  'superadmin',       // 自己定义，超级管理员识别
    'USER_AUTH_ON'      =>  true,               // 是否需要认证
    'USER_AUTH_TYPE'    =>  1,                  // 认证类型，1为登陆后才认证，2为实时认证
    'USER_AUTH_KEY'     =>  'authId',           // 认证识别号,此名称可以自己定义
    'USER_AUTH_GATEWAY' =>  'Public/login',     // 认证网关
    'NOT_LOGIN_MODULES' =>  'Public',           // 无需认证登录的模块

    'GROUP_AUTH_NAME'   =>  'Home',             // 权限组模块名称

    //'REQUIRE_AUTH_MODULE'                     // 需要认证模块
    'NOT_AUTH_MODULE'   =>  'Public',           // 无需认证模块，和上面重复，用其中一个即可
    'NOT_AUTH_ACTION'   =>  'login',            // 无需认证操作
    //'USER_AUTH_GATEWAY'                       // 认证网关
    //'RBAC_DB_DSN'                             // 数据库连接DSN，与config中的DSN配置相同，这里采用默认的，不填
    'RBAC_ROLE_TABLE'   =>  'can_role',        // 角色表名称
    'RBAC_USER_TABLE'   =>  'can_role_user',   // 用户表名称
    'RBAC_ACCESS_TABLE' =>  'can_access',      // 权限表名称
    'RBAC_NODE_TABLE'   =>  'can_node',        // 节点表名称

);