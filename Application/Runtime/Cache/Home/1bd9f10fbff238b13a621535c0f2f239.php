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
            $("a[href=\"/easycan/index.php/Home/Rbac/addNode\"]").parent().attr("class","active");
        });
    </script>


<!-- 右侧功能展示 -->

    <div class="content">
        <div class="main-content">
            <div class="page-content">

                <!-- boostrap 样式-->
                <form class="form-horizontal col-lg-6" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label"><div style="display: inline;font-weight: bold;color: Red;"> * </div>英文名称：</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label"><div style="display: inline;font-weight: bold;color: Red;"> * </div>显示中文名称：</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="title" />
                        </div>
                    </div>
                    <div class="form-group" id="status">
                        <label class="col-lg-3 control-label">状态：</label>
                        <div class="col-lg-5 checkbox">
                            <label>
                                <input name="status" type="radio" value="1" checked/>开启
                                <input name="status" type="radio" value="0"/>关闭
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">类型：</label>
                        <div class="col-lg-5">
                            <select  id="level" class="form-control">
                                <option value="1">项目</option>
                                <option value="2">模块</option>
                                <option value="3">操作</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">父节点：</label>
                        <div class="col-lg-5">
                            <select id="pid" class="form-control">
                                <option value="0">根节点</option>
                                <?php if(is_array($nodeList)): $i = 0; $__LIST__ = $nodeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["level"] == 1): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo ($vo["id"]); ?>">&nbsp;&nbsp;|&#45;&#45;&nbsp;&nbsp;<?php echo ($vo["title"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label"><div style="display: inline;font-weight: bold;color: Red;"> * </div>排序：</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="sort" />
                        </div>
                    </div>
                    <div class="form-group" id="hidden">
                        <label class="col-lg-3 control-label">是否在左侧隐藏：</label>
                        <div class="col-lg-5 checkbox">
                            <label>
                                <input name="hidden" type="radio" value="0" />是
                                <input name="hidden" type="radio" value="1" checked/>否
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3">
                            <button type="button" class="btn btn-primary" onclick="addNodeHandle()">保存添加</button>
                        </div>
                    </div>
                    <div id="alert" class="alert alert-error">
                        <strong id="message"></strong>
                    </div>
                </form>


                <!--<div>英文名称：<input type="text" id="name"/></div>-->
                <!--<div>显示中文名称：<input type="text" id="title"/></div>-->
                <!--<div style="font-weight:bolder; " id="status">-->
                    <!--状态：-->
                    <!--<input name="status" type="radio" value="1" checked/>开启-->
                    <!--<input name="status" type="radio" value="0"/>关闭-->
                <!--</div>-->
                <!--<div>-->
                    <!--类型：-->
                    <!--<select  id="level" >-->
                        <!--<option value="1">项目</option>-->
                        <!--<option value="2">模块</option>-->
                        <!--<option value="3">操作</option>-->
                    <!--</select>-->
                <!--</div>-->
                <!--<div>-->
                    <!--父节点：-->
                    <!--<select id="pid" >-->
                        <!--<option value="0">根节点</option>-->
                        <!--<?php if(is_array($nodeList)): $i = 0; $__LIST__ = $nodeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                            <!--<?php if($vo["level"] == 1): ?>-->
                                <!--<option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option>-->
                                <!--<?php else: ?>-->
                                <!--<option value="<?php echo ($vo["id"]); ?>">&nbsp;&nbsp;|&#45;&#45;&nbsp;&nbsp;<?php echo ($vo["title"]); ?></option>-->
                            <!--<?php endif; ?>-->
                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                    <!--</select>-->
                <!--</div>-->
                <!--<div>排序：<input type="text" id="sort"/></div>-->
                <!--<input type="button" value="保存添加" onclick="addNodeHandle()"/>-->



            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(function ()
        {
            setAlertHide();

        });
        function addNodeHandle()
        {
            var name = $("#name").val();
            var title = $("#title").val();
            var status = $('#status input[name="status"]:checked ').val();
            var level = $("#level").val();
            var pid = $("#pid").val();
            var sort = $("#sort").val();
            var hidden = $('#hidden input[name="hidden"]:checked ').val();
            var data = {
                "name": name,
                "title": title,
                "status": status,
                "level": level,
                "pid": pid,
                "sort": sort,
                "hidden":hidden,
            };
            var url = "<?php echo U('Rbac/addNodeHandle');?>";
            var result = commonAjaxSubmit(url, data);
            if (result.code != 3)
            {
                alert(result.info);
                window.location.href = "<?php echo U('Rbac/addNode');?>";
            }
            else
            {
                $("#message").text(result.info);
                $("#alert").show();
                setTimeout("setAlertHide()",3000);
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