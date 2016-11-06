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
            $("a[href=\"/easycan/index.php/Home/Rbac/roleList\"]").parent().attr("class","active");
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
                            序号
                        </th>
                        <th>
                            角色名称
                        </th>
                        <th>
                            角色描述
                        </th>
                        <th>
                            开启状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($roleList)): $i = 0; $__LIST__ = $roleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                                <?php echo ($vo["id"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["name"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["remark"]); ?>
                            </td>
                            <td>
                                <?php if($vo['status'] == 1): ?>开启
                                    <?php else: ?>
                                    关闭<?php endif; ?>

                            </td>
                            <td>
                                <a href="<?php echo U('Rbac/access',array('rid'=>$vo['id']));?>">【配置权限】</a>
                                <a href="" data-toggle="modal" data-target="#myModal" onclick="setModalData(<?php echo ($vo['id']); ?>,'<?php echo ($vo['name']); ?>','<?php echo ($vo['remark']); ?>','<?php echo ($vo['status']); ?>')">【修改】</a>
                                <a href="" onclick="deleteRole(<?php echo ($vo['id']); ?>)">【删除】</a>
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
                                    修改角色信息
                                </h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal " role="form">
                                    <div class="form-group">
                                        <label class=" control-label ">
                                            <div style="display: inline;font-weight: bold;color: Red;"> *</div>
                                            角色名称：</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="rolename"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" control-label">角色描述：</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="roleremark"/>
                                        </div>
                                    </div>
                                    <div class="form-group" id="status">
                                        <label class=" control-label">是否开启：</label>
                                        <div class=" checkbox">
                                            <label>
                                                <input name="status" type="radio" value="1" checked/>开启
                                                <input name="status" type="radio" value="0"/>关闭
                                            </label>
                                        </div>
                                    </div>
                                    <input type="hidden" value="0" id="pid"/>
                                    <input type="hidden"  id="rid"/>
                                    <div id="alert" class="alert alert-error">
                                        <strong id="message"></strong>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                                </button>
                                <button type="button" class="btn btn-primary" onclick="updateRole()">
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
        
        function setModalData(id,name,remark,status)
        {
            $("#rolename").val(name);
            $("#roleremark").val(remark);
            $("#rid").val(id);
            $("#status input[value="+status+"]").attr("checked","true");
        }
        function updateRole()
        {
            var rid = $("#rid").val();
            var roleName = $("#rolename").val();
            var roleRemark = $("#roleremark").val();
            var status = $('#status input[name="status"]:checked ').val();
            var pid = $("#pid").val();
            var data = {
                "rid":rid,
                "rolename": roleName,
                "roleremark": roleRemark,
                "status": status,
                "pid": pid,
            };
            var url = "<?php echo U('Rbac/updateRole');?>";
            var result = commonAjaxSubmit(url, data);
            if (result.code != 3)
            {
                alert(result.info);
                window.location.href = "<?php echo U('Rbac/roleList');?>";
            }
            else
            {
                $("#message").text(result.info);
                $("#alert").show();
                setTimeout("setAlertHide()",3000);
            }
        }
        function deleteRole(id)
        {
            if(!confirm("确定要删除该角色吗？"))
            {
                return false;
            }
            var data = {
                "rid":id,
            };
            var url = "<?php echo U('Rbac/deleteRole');?>";
            var result = commonAjaxSubmit(url, data);
            if (result.code != 3)
            {
                alert(result.info);
                window.location.href = "<?php echo U('Rbac/roleList');?>";
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