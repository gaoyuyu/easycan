<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Can. Pc</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="/easycan/Public/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/easycan/Public/lib/font-awesome/css/font-awesome.css">


    <script src="/easycan/Public/common/common.js" type="text/javascript"></script>
    <script src="/easycan/Public/common/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
//            $(".knob").knob();
        });
    </script>


    <link rel="stylesheet" type="text/css" href="/easycan/Public/stylesheets/theme.css">
    <link rel="stylesheet" type="text/css" href="/easycan/Public/stylesheets/premium.css">

</head>
<body class=" theme-blue">

<!-- Demo page code -->

<script type="text/javascript">
    $(function () {
        var match = document.cookie.match(new RegExp('color=([^;]+)'));
        if (match) var color = match[1];
        if (color) {
            $('body').removeClass(function (index, css) {
                return (css.match(/\btheme-\S+/g) || []).join(' ')
            })
            $('body').addClass('theme-' + color);
        }

        $('[data-popover="true"]').popover({html: true});

    });
</script>
<style type="text/css">
    #line-chart {
        height: 300px;
        width: 800px;
        margin: 0px auto;
        margin-top: 1em;
    }

    .navbar-default .navbar-brand, .navbar-default .navbar-brand:hover {
        color: #fff;
    }
</style>

<script type="text/javascript">
    $(function () {
        var uls = $('.sidebar-nav > ul > *').clone();
        uls.addClass('visible-xs');
        $('#main-menu').append(uls.clone());
    });
</script>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!--[if lt IE 7 ]>
<body class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>
<body class="ie ie7 "> <![endif]-->
<!--[if IE 8 ]>
<body class="ie ie8 "> <![endif]-->
<!--[if IE 9 ]>
<body class="ie ie9 "> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<!--<![endif]-->

<!-- 顶部-->

    <!-- 顶部-->
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="" href="index.html"><span class="navbar-brand"><span class="fa fa-paper-plane"></span> Can.</span></a>
    </div>

    <div class="navbar-collapse collapse" style="height: 1px;">
        <ul id="main-menu" class="nav navbar-nav navbar-right">
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user padding-right-small"
                          style="position:relative;top: 3px;"></span><?php echo ($_SESSION["user"]["username"]); ?>
                    <i class="fa fa-caret-down"></i>
                </a>

                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="<?php echo U('Public/logout');?>">Logout</a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>


<!-- 左侧列表 -->

    <!-- 左侧列表-->
<div class="sidebar-nav">
    <ul>
        <?php if(is_array($node)): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <a href="#" data-target=".<?php echo ($vo["title"]); ?>-menu" class="nav-header" data-toggle="collapse">
                    <i class="fa fa-fw fa-dashboard"></i> <?php echo ($vo["title"]); ?><i class="fa fa-collapse"></i>
                </a>
            </li>
            <li>

                <ul class="<?php echo ($vo["title"]); ?>-menu nav nav-list collapse in">
                    <?php if(is_array($vo['node'])): $i = 0; $__LIST__ = $vo['node'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a href="/easycan/index.php/Home/<?php echo ($vo["name"]); ?>/<?php echo ($sub["name"]); ?>"><span class="fa fa-caret-right"></span> <?php echo ($sub["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>


    <script type="text/javascript">
        $(function ()
        {
            $("a[href=\"/easycan/index.php/Home/Order/orderList\"]").parent().attr("class","active");
        });
    </script>


<!-- 右侧功能展示 -->

    <div class="content">
        <div class="main-content">
            <div class="page-content">

                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>
                            订单ID
                        </th>
                        <th>
                            调度员
                        </th>
                        <th>
                            接收员
                        </th>
                        <th>
                            客户电话
                        </th>
                        <th>
                            客户地址
                        </th>
                        <th>
                            价格
                        </th>
                        <th>
                            客户留言
                        </th>
                        <th>
                            订单状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($orderList)): $i = 0; $__LIST__ = $orderList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                                <?php echo ($vo["id"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["dispatcher"]); ?>
                            </td>
                            <td>
                                <?php if($vo['receiver'] == ''): ?><span style="color: Red">暂无</span>
                                    <?php else: ?>
                                    <?php echo ($vo["receiver"]); endif; ?>
                            </td>
                            <td>
                                <?php echo ($vo["customer_phone"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["customer_address"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["price"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["remark"]); ?>
                            </td>
                            <td>
                                <?php if($vo['value'] == 0): ?><span style="color:#d58512 ">等待</span><?php endif; ?>
                                <?php if($vo['value'] == 1): ?><span style="color: #1155CC">接受</span><?php endif; ?>
                                <?php if($vo['value'] == 2): ?><span style="color: #269abc ">派送</span><?php endif; ?>
                                <?php if($vo['value'] == 3): ?><span style="color: #4cae4c">完成</span><?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo U('Order/getRealTimeLocation',array('address'=>$vo['customer_address']));?>">实时位置</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>

                <div><?php echo ($pageIndex); ?></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function ()
        {
            setAlertHide();

            //高亮当前选中li
            $(".pagination li").click(function ()
            {
                var currentIndex = $(".pagination li[class='active']").find("a").html();
                if ($(this).find("a").attr("id") == "left")
                {
                    //左箭头分页
                    if (parseInt(currentIndex) - 1 == 0)
                    {
                        alert("当前已经是第一页");
                        return false;
                    }
                    else
                    {
                        var index = parseInt(currentIndex) - 1;
                        $(".pagination li[class='active']").removeAttr("class");
                        pageIndex(index);
                        $(".pagination li a:contains(" + index + ")").parent().addClass("active");
                    }
                }
                else if ($(this).find("a").attr("id") == "right")
                {
                    //右箭头分页
                    if (parseInt(currentIndex) + 1 > ($(".pagination li").length - 2))
                    {
                        alert("当前已经是最后页");
                        return false;
                    }
                    else
                    {
                        var index = parseInt(currentIndex) + 1;
                        $(".pagination li[class='active']").removeAttr("class");
                        pageIndex(index);
                        $(".pagination li a:contains(" + index + ")").parent().addClass("active");
                    }
                }
                else
                {
                    $(".pagination li[class='active']").removeAttr("class");
                    $(this).addClass("active");
                }
            });


        });
        function pageIndex(index)
        {
            var data = {
                "index": index,
            };
            var url = "<?php echo U('Order/pageIndex');?>";
            var result = commonAjaxSubmit(url, data);
            if (result.code != 0)
            {
                $("tbody").html(result.orderhtml)
            }
            else
            {
                alert(result.info);
            }
        }


    </script>


<!-- 登陆 -->





<script src="/easycan/Public/lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $("[rel=tooltip]").tooltip();
    $(function () {
        $('.demo-cancel-click').click(function () {
            return false;
        });
    });
    /**
     * 默认隐藏表单下的警告框
     */
    function setAlertHide()
    {
        $("#alert").hide();
    }
</script>


</body>
</html>