<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>作品分享管理后台</title>

		<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/css/common.css" type="text/css" media="screen" />
		<script type="text/javascript" src="/share/Application/Admin/View/Public/Admin/js/jquery.min.js"></script>
		<script type="text/javascript" src="/share/Application/Admin/View/Public/Admin/js/tendina.min.js"></script>
		<script type="text/javascript" src="/share/Application/Admin/View/Public/Admin/js/common.js"></script>
		<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/font-awesome/css/font-awesome.min.css">
		<script src="/share/Application/Admin/View/Public/Admin/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/css/index.css" type="text/css" media="screen" />


	</head>

	<body style="overflow: auto;">
		<!--顶部-->
		<div class="top" style="position: fixed;top:0;z-index: 999;">
			<div style="float: left"><span>作品分享管理中心</span></div>
			<div id="ad_setting" class="ad_setting">
				<span style="margin-right:14px;font-size: 1.8rem;">欢迎您：<?php echo ($_SESSION['Admin']['admin']); ?></span>
				<a class="ad_setting_a" style="font-size: 1.8rem;" href="<?php echo U('User/logout');?>">注销</a>

			</div>
		</div>
		<!--顶部结束-->
		<!--菜单-->
		<div class="left-menu" style="margin-top:60px;">
			<ul id="menu">
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta" href="<?php echo U('Index/Index');?>" ><span class="glyphicon glyphicon-home"></span>欢迎</a>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-user"></span>用户管理</a>
					<ul>
						<li><a href="<?php echo U('User/UserList');?>">个人用户列表</a></li>
						<li><a href="">商家用户列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-th-list"></span>作品文章管理</a>
					<ul><li><a href="<?php echo U('Works/worksList');?>" >作品列表</a></li>
						<li><a href="<?php echo U('Works/essaysList');?>" >文章列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-comment"></span>评论管理</a>
					<ul><li><a href="#" >评论列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-edit"></span>口水区管理</a>
					<!--<ul><li><a href="#" >列表项</a></li>
						<li><a href="#" >列表项</a></li>
					</ul>-->
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
<div style="margin-left:180px;margin-top:60px;padding-bottom:50px;overflow: hidden;">
	<div class="alert alert-info" role="alert">
		<h1>用户列表</h1></div>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>序号</th>
				<th>用户名</th>
				<th>昵称</th>
				<th>用户邮箱</th>
				<th>创建时间</th>
				<th>登录次数</th>
				<th>最后登陆IP</th>
				<th >审核</th>
				<th >锁定用户</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): foreach($list as $k=>$C): ?><tr>
					<td><?php echo ($k+1); ?></td>
					<td><?php echo ($C["loginname"]); ?></td>
					<td><?php echo ($C["username"]); ?></td>
					<td><?php echo ($C["useremail"]); ?></td>
					<td><?php echo ($C["regdate"]); ?></td>
					<td><?php echo ($C["loginnum"]); ?></td>
					<td><?php echo ($C["lastip"]); ?></td>
					<td>
						<?php if($C['quantitystatus'] == 0 ): ?><label class="btn btn-primary"  style="background: orange;width: 82px;">未审核</lable>
							<?php elseif($C['quantitystatus'] == 1 ): ?> <label class="btn btn-primary"  style="background: green;">审核通过</lable>
							<?php elseif($C['quantitystatus'] == 2 ): ?> <label class="btn btn-primary" style="background: red;">审核失败</lable><?php endif; ?>

					</td>
					<td>
						<?php if($C['tag'] == 0 ): ?><label class="btn btn-primary" type="button" style="background: black;color:white;width: 82px;">已锁定</label> |
							<a href="/share/index.php/Admin/User/userUnLock/id/<?php echo ($C['loginid']); ?>" class="primary" ><button class="btn btn-primary" type="button"style="background: orange;color:white;width: 82px;">解除</button></a>
							<?php elseif($C['tag'] == 1 ): ?> <a href="/share/index.php/Admin/User/userDel/id/<?php echo ($C['loginid']); ?>" class="primary" ><button class="btn btn-primary" type="button">删除用户</button></a><?php endif; ?>
					</td>
				</tr><?php endforeach; endif; ?>

		</tbody>

	</table>
	<?php echo ($page); ?>
</div>

</body>

</html>