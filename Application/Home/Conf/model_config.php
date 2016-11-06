<?php
/**
 * @Describtion
 *
 * @User: xiaohang
 * @CreateTime: 16/5/4 下午2:32
 */

return array(
    // 工单管理
    'Index' => array(
        'name' => '工单管理',
        'target' => 'Index/index',
        'style' => 'website_icon',
        'sub_menu' => array(
            // 此处填写对应权限
            array('item' => array('Index/index' => '工单管理首页'), 'hidden' => true),
            array('item' => array('Index/gdtx' => '工单填写')),
            array('item' => array('Index/gdck' => '工单查看')),
            array('item' => array('Index/gdgd' => '工单归档')),
            array('item' => array('Index/mygd' => '我的工单')),
            array('item' => array('Index/orderMore' => '更多工单列表'), 'hidden' => true),
            array('item' => array('Index/orderDetail' => '工单详情描述'), 'hidden' => true),
            array('item' => array('Index/submitOrder' => '提交工单'), 'hidden' => true),
            array('item' => array('Index/getSubType' => '获取故障细分类型'), 'hidden' => true),
            array('item' => array('Index/updateOrder' => '更新工单'), 'hidden' => true),
            array('item' => array('Index/deleteOrder' => '删除工单'), 'hidden' => true),
            array('item' => array('Index/printOrder' => '打印工单'), 'hidden' => true),
        ),
    ),

    // 报表统计管理
    'Report' => array(
        'name' => '报表统计管理',
        'target' => 'Report/index',
        'style' => 'set_icon',
        'sub_menu' => array(
            // 此处填写对应权限
            array('item' => array('Report/queryCount' => '按人员统计')),
            array('item' => array('Report/queryDetail' => '按人员统计工单明细')),
            array('item' => array('Report/queryByDepartment' => '报障部门统计')),
            array('item' => array('Report/queryByOrderType' => '报障类型统计')),
            array('item' => array('Report/advancedQuery' => '高级查询')),
            array('item' => array('Report/submitQueryCount' => '提交时间段按人员统计'), 'hidden' => true),
            array('item' => array('Report/submitQueryDetail' => '提交时间段按人员统计工单明细'), 'hidden' => true),
            array('item' => array('Report/submitQueryByDepartment' => ' 提交时间段报障部门统计'), 'hidden' => true),
            array('item' => array('Report/submitQueryByOrderType' => ' 提交时间段报障类型统计'), 'hidden' => true),
            array('item' => array('Report/submitAdvancedQuery' => ' 提交查询字段'), 'hidden' => true),
            array('item' => array('Report/exportExcel' => ' 导出报表'), 'hidden' => true),

        ),
    ),
);