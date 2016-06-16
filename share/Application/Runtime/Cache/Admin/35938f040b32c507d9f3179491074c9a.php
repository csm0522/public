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
<div style="margin-left:180px;">
	<div class="alert alert-info" role="alert">
		<h1>商家列表</h1></div>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>序号</th>
				<th>商家名字</th>
				<th>联系方式</th>
				<th>商家类型</th>
				<th>登陆次数</th>
				<th>注册时间</th>
				<th>最后登陆IP</th>
				<th>商家审核</th>
				<th>删除</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $k=>$C): ?><tr>
					<td><?php echo ($k+1); ?></td>
					<td><?php echo ($C["companyname"]); ?></td>
					<td><?php echo ($C["companyphone"]); ?></td>
					<td><?php echo ($C["companytype"]); ?></td>
					<td><?php echo ($C["loginnum"]); ?></td>
					<td><?php echo ($C["regtime"]); ?></td>
					<td><?php echo ($C["loginip"]); ?></td>
					<td><?php echo ($C["companyright"]); ?></td>
					<td><button class="btn btn-primary" type="button">删除用户</button></td>
				</tr><?php endforeach; endif; ?>

		</tbody>

	</table>
	<?php echo ($page); ?>
</div>

</body>

</html>