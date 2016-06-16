<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="/share/Public/Admin/css/bootstrap.min.css">
		<script src="/share/Public/Admin/js/jquery.min.js"></script>
		<script src="/share/Public/Admin/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="/share/Public/Admin/css/reset.css" />
		<link rel="stylesheet" href="/share/Public/Admin/css/index.css" />
		<style type="text/css">
			div.page a,
			span {
				color: white;
				font-size: 1rem;
				background: lightskyblue;
				padding: 8px 14px;
				border: 1px solid white;
				text-decoration: none;
				margin-right: 4px;
			}

			div.page span:hover {
				color: black;
				padding: 10px 16px;
			}

			div.page a:hover {
				color: black;
				padding: 10px 16px;
			}

			div.page {
				width: 100%;
				text-align: center;
			}
		</style>
	</head>

	<body>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>序号</th>
					<th>用户名</th>
					<th>注册IP</th>
					<th>创建时间</th>
					<th>登录次数</th>
					<th>用户详情</th>
					<th>是否禁用</th>
					<th>删除</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($list)): foreach($list as $key=>$k): ?><tr>
						<td><?php echo ($k["username"]); ?></td>
						<td><?php echo ($k["userphone"]); ?></td>
						<td><?php echo ($k["loginname"]); ?></td>
						<td><?php echo ($k["useruniversity"]); ?></td>
						<td><?php echo ($k["loginid"]); ?></td>
						<!--<td><button class="btn btn-primary" type="button">删除用户</button></td>-->

						<td><a href="/share/index.php/Admin/User/userDel?id=<?php echo ($k["loginid"]); ?>" class="primary" onclick="if(confirm('你确定要删除吗?')==false){return false;}" class="btn btn-link">删除</a></td>
					</tr><?php endforeach; endif; ?>

			</tbody>

		</table>
		<?php echo ($page); ?>
		<!--<nav style="text-align: center;">
			<ul class="pagination">
				<li>
					<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<li><a href="h12h.html">1</a></li>
				<li><a href="hh.html">2</a></li>
				<li><a href="h12h.html">3</a></li>
				<li><a href="hh.html">4</a></li>
				<li><a href="h12h.html">5</a></li>
				<li>
					<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>-->

	</body>

</html>