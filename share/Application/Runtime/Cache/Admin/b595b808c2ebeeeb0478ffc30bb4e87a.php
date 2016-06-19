<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>作品分享管理后台</title>
		<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/css/index.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/css/common.css" type="text/css" media="screen" />
		<script type="text/javascript" src="/share/Application/Admin/View/Public/Admin/js/jquery.min.js"></script>
		<script type="text/javascript" src="/share/Application/Admin/View/Public/Admin/js/tendina.min.js"></script>
		<script type="text/javascript" src="/share/Application/Admin/View/Public/Admin/js/common.js"></script>
		<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/font-awesome/css/font-awesome.min.css">
		<script src="/share/Application/Admin/View/Public/Admin/js/bootstrap.min.js"></script>

	</head>

	<body>
		<!--顶部-->
		<div class="top">
			<div style="float: left"><span>作品分享管理中心</span></div>
			<div id="ad_setting" class="ad_setting">
				<span style="margin-right:14px;font-size: 1.8rem;">欢迎您：<?php echo ($_SESSION['Admin']['admin']); ?></span>
				<a class="ad_setting_a" style="font-size: 1.8rem;" href="<?php echo U('User/logout');?>">注销</a>

			</div>
		</div>
		<!--顶部结束-->
		<!--菜单-->
		<div class="left-menu">
			<ul id="menu">
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta" href="<?php echo U('Index/Index');?>" ><span class="glyphicon glyphicon-home"></span>欢迎</a>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-user"></span>用户管理</a>
					<ul>
						<li><a href="<?php echo U('User/UserList');?>">个人用户列表</a></li>
						<li><a href="<?php echo U('Business/BusinessList');?>">商家用户列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-th-list"></span>作品文章管理</a>
					<ul><li><a href="#" >作品列表</a></li>
						<li><a href="#" >文章列表</a></li>
						<li><a href="#" >作品文章类型</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-comment"></span>评论管理</a>
					<ul><li><a href="#" >评论列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-edit"></span>口水区管理</a>
					<ul><li><a href="#" >列表项</a></li>
						<li><a href="#" >列表项</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-leaf"></span>企业管理</a>
					<ul><li><a href="#" >招聘信息列表</a></li>
						<li><a href="#" >招聘信息类型</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-warning-sign"></span>系统管理</a>
					<ul><li><a href="#" >系统通知</a></li>
						<li><a href="#" >意见反馈</a></li>
					</ul>
				</li>
			</ul>
		</div>
<div style="margin-left:180px;padding:15px;">
		<div class="jumbotron" style="padding: 30px;">
			<h1>Admin</h1>

			<p>欢迎登陆XX网站后台管理系统.</p>

		</div>




    <div class="row" style="margin-left:0;">

        <div class="col-lg-3" style="width: 25%;margin-bottom:10px;">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-center" style="margin-left:0;margin-top:10px;">
                            <p class="announcement-heading"><?php echo (count($list)); ?></p>
                            <p class="announcement-text">用户</p>
                        </div>
                    </div>
                </div>


                <a href="#">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                管理用户
                            </div>
                           <div class="col-xs-6 text-center" style="margin-left:0;">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <div class="col-lg-3" style="width: 25%;margin-bottom:10px;">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <i class="fa fa-edit fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-center" style="margin-left:0;margin-top:10px;">
                            <p class="announcement-heading"><?php echo (count($essayNum)); ?></p>
                            <p class="announcement-text">文章</p>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                管理文章
                            </div>
                            <div class="col-xs-6 text-center" style="margin-left:0;">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3" style="width: 25%;margin-bottom:10px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 text-center">
                            <i class="glyphicon glyphicon-th" style="font-size: 68px"></i>
                        </div>
                        <div class="col-xs-6 text-center" style="margin-left:0;margin-top:10px;">
                            <p class="announcement-heading"><?php echo (count($worksNum)); ?></p>
                            <p class="announcement-text">作品</p>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                管理链接
                            </div>
                            <div class="col-xs-6 text-center" style="margin-left:0;">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3" style="width: 25%;margin-bottom:10px;">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 text-center" >
                            <i class="fa  fa-comment fa-5x"></i>
                        </div>
                        <div class="col-xs-6 text-center" style="margin-left:0;margin-top:10px;">
                            <p class="announcement-heading">456</p>
                            <p class="announcement-text">留言</p>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer announcement-bottom">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                查看留言
                            </div>
                            <div class="col-xs-6 text-center" style="margin-left:0;">
                                <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

		<div class="alert alert-success" role="alert" style="width: 40%;">最后登陆时间:&nbsp;<span style="color:black;"><?php echo ($adminInfo["lastdate"]); ?></span></div>
		<div class="alert alert-info" role="alert" style="width: 40%;">最后登陆IP:&nbsp;<span style="color:black;"><?php echo ($adminInfo["lastip"]); ?></span></div>
		<div class="alert alert-warning" role="alert" style="width: 40%;">登陆次数:&nbsp;<span style="color:black;"><?php echo ($adminInfo["loginnum"]); ?></span></div>

</div>

</body>
</html>