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
            $("a[href=\"/easycan/index.php/Home/Rbac/nodeList\"]").parent().attr("class","active");
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
                            权限ID
                        </th>
                        <th>
                            权限结构
                        </th>
                        <th>
                            名称
                        </th>
                        <th>
                            排序
                        </th>
                        <th>
                            类型
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($nodeList)): $i = 0; $__LIST__ = $nodeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td>
                            <?php echo ($vo["id"]); ?>
                        </td>
                        <td>
                            <div style="text-indent:<?php echo ($vo['level']*30); ?>px;">|-&#45;&#45;
                                <?php echo ($vo["title"]); ?>
                            </div>
                        </td>
                        <td>
                            <?php echo ($vo["name"]); ?>
                        </td>
                        <td>
                            <?php echo ($vo["sort"]); ?>
                        </td>
                        <td>
                            <?php if($vo['level'] == 1): ?><div>项目</div>
                                <?php elseif($vo['level'] == 2): ?>
                                <div style="color: #1773ca">模块</div>
                                <?php else: ?>
                                <div style="color:forestgreen">操作</div><?php endif; ?>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#myModal" onclick="setModalData(<?php echo ($vo['id']); ?>,'<?php echo ($vo['title']); ?>','<?php echo ($vo['name']); ?>','<?php echo ($vo['sort']); ?>')">【修改】</a>
                            <a href="" onclick="deleteNode('<?php echo ($vo["title"]); ?>',<?php echo ($vo['id']); ?>)">【删除】</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>


                <!-- 模态框（Modal） -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title" id="myModalLabel">
                                    修改权限信息
                                </h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal " role="form">
                                    <div class="form-group">
                                        <label class=" control-label ">
                                            中文名称：
                                        </label>
                                        <div class="">
                                            <input type="text" class="form-control" id="title"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">英文名称：</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="name"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">排序：</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="sort"/>
                                        </div>
                                    </div>
                                    <input type="hidden" id="rid" />
                                    <div id="alert" class="alert alert-error">
                                        <strong id="message"></strong>
                                    </div>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                </button>
                                <button type="button" class="btn btn-primary" onclick="updateNode()">
                                    提交更改
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(function ()
        {
            setAlertHide();
        });
        function setModalData(rid,title,name,sort)
        {
            $("#rid").val(rid);
            $("#title").val(title);
            $("#name").val(name);
            $("#sort").val(sort);

        }
        function updateNode()
        {
            var rid = $("#rid").val();
            var title = $("#title").val();
            var name = $("#name").val();
            var sort = $("#sort").val();
            var data = {
                "id":rid,
                "title":title,
                "name":name,
                "sort":sort,
            };
            var url = "<?php echo U('Rbac/updateNode');?>";
            var result = commonAjaxSubmit(url, data);
            if (result.code != 3)
            {
                alert(result.info);
                window.location.href = "<?php echo U('Rbac/nodeList');?>";
            }
            else
            {
                $("#message").text(result.info);
                $("#alert").show();
                setTimeout("setAlertHide()",3000);
            }
        }
        function deleteNode(title,id)
        {
            if(!confirm("确定要删除【"+title+"】权限吗？"))
            {
                return false;
            }
            var data = {
                "nid":id,
            };
            var url = "<?php echo U('Rbac/deleteNode');?>";
            var result = commonAjaxSubmit(url, data);
            if (result.code != 3)
            {
                alert(result.info);
                window.location.href = "<?php echo U('Rbac/nodeList');?>";
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