<?php
/**
 * Created by PhpStorm.
 * User: xiaohang
 * Date: 15/2/11
 * Time: 上午10:46
 */
return array(
    // 添加下面一行定义即可
    //'view_filter' => array('Behavior\TokenBuild'),
    // 如果是3.2.1以上版本 需要改成
    'view_filter' => array('Behavior\TokenBuildBehavior'),
    //'app_init' => array('Snowair\Think\Behavior\HookAgent'),
);
