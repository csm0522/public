<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>

	<head runat="server">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>index</title>
		<link href="/share/Public/Home/css/websjy.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="/share/Public/Home/javascript/websjy.js"></script>
		<script src="/share/Public/Home/javascript/jquery-1.11.1.min.js"></script>
		<script src="/share/Public/Home/javascript/js.js"></script>
		<link href="/share/Public/Home/css/index.css" rel="stylesheet" media="all" />


		<style type="text/css">
			div.nice_right {
				display: none;
			}

			input {
				border: none;
				outline: none;
			}
		</style>
		<script>
		var i = 1;
			function showM(){
				if(i==1)
				{
					$("#mean2").show();
					i = 0;
				}
				else if(i==0)
				{
					$("#mean2").hide();
					i = 1;
				}
			}
		var j = 1;
			function showLogin(){
				if(j==1)
				{
					$("#LoginMean").show();
					j = 0;
				}
				else if(j==0)
				{
					$("#LoginMean").hide();
					j = 1;
				}
			}
		</script>
	</head>

	<body>
		<div id="container" class="container-min-width">
			<div id="header">
				<div class="menu-bar">

					<div class="left-part">
						<a class="logo" href="<?php echo U('Index/index');?>"><img src="/share/Public/Home/image/index/logo.png" alt="" /></a>
					</div>
					<form id="form1" runat="server" method="get" action="" style="height:100%;float: left;">
						<div class="middle-part">

							<div class="middle_s">
								<input type="text" name="" placeholder="搜索你喜欢的作品" />
								<input type="submit" value="搜索" />
							</div>

						</div>
					</form>
					<div class="right-part">
						<div class="title">


							<span  name="outA" href="#" id="btn_1">
								<div type="button" id="btn11" onclick="showM();">作品</div>
								<ul id="mean2">
									<a href="/share/index.php/Home/Works/showList/type/1"><li>UI/UX</li></a>
									<a href="/share/index.php/Home/Works/showList/type/2"><li>平面设计</li></a>
									<a href="/share/index.php/Home/Works/showList/type/3"><li>漫画/插画</li></a>
									<a href=""><li>网页设计</li></a>
									<a href=""><li>3D模型</li></a>
									<a href=""><li>创意短片</li></a>
									<a href=""><li>摄影</li></a>
									<a href=""><li>其他</li></a>
								</ul>
							</span>
							<a name="outA"  href="<?php echo U('Essay/index');?>" id="btn_1"><div type="button" class="btn" id="btn11" value="文章" >文章</div></a>
							<a name="outA"  href="<?php echo U('Ksq/index');?>"><div type="button" class="btn" id="btn3" value="口水区" >口水区</div></a>
							<a name="outA"  href="<?php echo U('Zhaop/index');?>"><div type="button" class="btn" id="btn4" value="招聘" >招聘</div></a>
							<a name="outA"  href="<?php echo U('About/index');?>"><div type="button" class="btn" id="btn5"  value="关于我们" >关于我们</div></a>

						</div>
						<script>

						</script>
						<div class="login">
							<div id="loginAndLO" onclick="showLogin()" style="float: left;"><img src="/share/Public/Home/image/index/user.png" width="18px" style="margin-left:18px;" />
								<ul id="LoginMean" style="display: none;">
									<?php if(empty(session('userInfo'))){?>
									<li><a href="/share/index.php/Home/User/loginPage">登录</a></li>
									<?php }else{?>
									<li><a href="/share/index.php/Home/User/personal">个人中心</a></li>
									<li><a href="/share/index.php/Home/User/logout">退出登录</a></li>
									<?php }?>
								</ul>
							</div>
							<a href="<?php echo U('User/pshWorksPag');?>"><img src="/share/Public/Home/image/index/add.png" width="18px" style="margin-left:18px;" /></a>
							<!--<img src="/share/Public/Home/image/index/more.png" style="cursor:pointer;margin-left:10px;width:12px;" onclick="openShutManager2(this,'box2',false)" />-->

						</div>
					</div>

				</div>
			</div>
		</div>

<link href="/share/Public/Home/css/work.css" rel="stylesheet" media="all" />
<script type="text/javascript">
	window.onload=function(){
		document.getElementById('subCom').click=function() {
			var now = new Date();
			var layer = document.getElementById("layer");
			var divlayer = document.createElement("div");
			var con = document.getElementById("content").value;
			con = con.replace(/\n/g, "<br />");
			divlayer.innerHTML = "<img src='/share/Public/Home/image/index/person_2.png' width='40px' class='header'/>" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
			divlayer.className = "content";
			layer.appendChild(divlayer);
			document.getElementById("content").value = "";
		}
	}

	</script>
		<div id="container" class="container-min-width" style="display: block;">
			<div class="dynamic">
				<div class="background_top"></div>
				<div class="background_middle">


					<?php if(is_array($ArticalMain)): $i = 0; $__LIST__ = $ArticalMain;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="content2">

						<div class="author">
							<a href="">
								<img src="/share/Public/Home/image/index/person_1.png" width="100%" />
							</a>
						</div>

						<div class="author_name">
							<h><?php echo ($vo["username"]); ?></h>
						</div>

						<div class="work_bottom">
						<div class="bottom_1"></div>
						<div class="bottom_2"></div>
						</div>

						<div class="author_title">
							<h style="color: black!important;"><?php echo ($vo["title"]); ?></h>
						</div>

						<div class="author_content">
							<?php echo (htmlspecialchars_decode($vo["content"])); ?>
						</div>

						<div class="follower">
								<input type="button" class="follower_btn" onclick="alert('赞');" /><span>55</span>
						</div>

						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<div class="recommend-line">
						<a>评论</a>
					</div>

					<div class="view">

						<div class="view_me">
							<a href="">
								<img src="/share/Public/Home/image/index/person_1.png" width="80%" />
							</a>
						</div>

						<textarea id="content" rows="1" cols="100" placeholder="添加评论" name="caption" style="runat：server；"></textarea>

						<div id="view_submit" >
							<input type="button" value="提交" class="submit" id="subCom"/>
						</div>
					</div>

				</div>



							<div class="clear"></div>
					<div class="clear"></div>
			<div id="footer">
				<div class="wrapper">
					版权所有：大学生作品发布平台
				</div>
			</div>

	</body>
</html>