<?php

$db_config = include('db_config.php');
$security_config = include('security_config.php');
//$menu_config = include('menu_config.php');

$app_config = array(

    // 开启调试
    'SHOW_PAGE_TRACE' => true,

//    'URL_MODEL'         =>  2,
//    'URL_CASE_INSENSITIVE' =>   false,
    // 日志管理
    'LOG_RECORD' => true,
    'LOG_LEVEL'  => 'EMERG,ALERT,CRIT,ERR',
    'LOG_TYPE'   => 'File',

//    // 验证盐值
//    'AUTH_SALT' =>  '8f!0#Rsv',
//
//    // 菜单配置
//    'MENU'  =>  $menu_config,
//
//    // AES key
//    'SECRET_KEY' => '6f41ffa8e42e91a3e9d34e41b1ba63e5',

);

//return array_merge($app_config, $db_config, $security_config, $menu_config);
return array_merge($app_config, $db_config,$security_config);
