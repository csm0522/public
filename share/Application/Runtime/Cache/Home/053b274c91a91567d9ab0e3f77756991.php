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
									<a href="<?php echo U('Works/showUi');?>"><li>UI/UX</li></a>
									<a href="<?php echo U('Works/showGDesign');?>"><li>平面设计</li></a>
									<a href="<?php echo U('Works/showCartoon');?>"><li>漫画/插画</li></a>
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
									<li><a href="/share/index.php/Home/User/loginPage">登陆</a></li>
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

<link href="/share/Public/Home/css/i_illustration.css" rel="stylesheet" media="all" />

		<script src="../javascript/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".nice_left").click(function() {
					$(".nice_right").slideToggle(100);
				});
				$(".nice_right").click(function() {
					$(".nice_left").slideToggle(500);
				});
				$(".nice_right").click(function() {
					$(".nice_right").slideToggle(100);
				});
				$(".nice_left").click(function() {
					$(".nice_left").slideToggle(500);
				});
			});
		</script>

		<script src="../javascript/login.js"></script>
		<script type="text/javascript">
			function show(i) {
				var layer1 = document.getElementById("layer1");
				layer1.style.display = "none";
				var img1 = document.getElementById("img1");
				img1.style.display = "none";
				var title = document.getElementById("title1");
				title1.style.color = "#8e8e8e";
				var layer2 = document.getElementById("layer2");
				layer2.style.display = "none";
				var img2 = document.getElementById("img2");
				img2.style.display = "none";
				var title = document.getElementById("title2");
				title2.style.color = "#8e8e8e";
				var layer3 = document.getElementById("layer3");
				layer3.style.display = "none";
				var img3 = document.getElementById("img3");
				img3.style.display = "none";
				var title = document.getElementById("title3");
				title3.style.color = "#8e8e8e";
				var layer = document.getElementById("layer" + i);
				layer.style.display = "block";
				var title = document.getElementById("title" + i);
				title.style.color = "#e52938";
				var img = document.getElementById("img" + i);
				img.style.display = "block";
			}

			function sss(i) {
				var more1 = document.getElementById("more1");
				more1.style.display = "none";
				var more2 = document.getElementById("more2");
				more2.style.display = "none";
				var more = document.getElementById("more" + i);
				$("#more" + i).slideDown().fadeIn("slow");
			}

			function like_show(i) {
				var like = document.getElementById("like" + i);
				like.style.display = "block";
			}

			function like_back(i) {
				var like = document.getElementById("like" + i);
				like.style.display = "none";
			}

			function like_article_show(i) {
				var like_article = document.getElementById("like_article" + i);
				like_article.style.display = "block";
			}

			function like_article_back(i) {
				var like_article = document.getElementById("like_article" + i);
				like_article.style.display = "none";
			}

			function worker_show(i) {
				var worker_name = document.getElementById("worker_name" + i);
				worker_name.style.display = "block";
			}

			function worker_back(i) {
				var worker_name = document.getElementById("worker_name" + i);
				worker_name.style.display = "none";
			}
		</script>

		<style type="text/css">
			div.nice_right {
				display: none;
			}
		</style>
	</head>

	<body>
		<div class="body">
			<div id="container" class="container-min-width" style="display: block;">
				<!-- <uc1:ucHeader ID="ucHeader" runat="server" /> -->
			</div>
		</div>

		<div class="title_img"><img src="/share/Public/Home/image/index/graphic_design.png" alt="" /></div>

		<div class="category">
			<div class="c_1">
				<img src="/share/Public/Home/image/index/c1.png" height="20" width="80" class="c_img1" id="img1" style="display: block;" />

			</div>
			<div class="c_title">
				<input type="button" class="c_btn" id="title1" value="作品" onclick="show(1)" />

			</div>

			<div id="layer1">


				<div class="work">
					<a href="work.html">
						<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(1)" onmouseout="like_back(1)">
							<div id="like1" class="likepin" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>

							</div>

						</div>
					</a>
					<div class="work_title">
						<div class="title_1">
							<a href="work.html" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="user.html" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="i_illustration.html" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>
				<div class="work">
					<a href="">
						<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(2)" onmouseout="like_back(2)">
							<div id="like2" class="likepin" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>

							</div>

						</div>
					</a>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<a href="">
						<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(3)" onmouseout="like_back(3)">
							<div id="like3" class="likepin" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>
							</div>

						</div>
					</a>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<a href="">
						<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(4)" onmouseout="like_back(4)">
							<div id="like4" class="likepin" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>
							</div>

						</div>
					</a>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<a href="">
						<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(5)" onmouseout="like_back(5)">
							<div id="like5" class="likepin" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>
							</div>

						</div>
					</a>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<a href="">
						<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(6)" onmouseout="like_back(6)">
							<div id="like6" class="likepin" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>
							</div>

						</div>
					</a>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<a href="">
						<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(7)" onmouseout="like_back(7)">
							<div id="like7" class="likepin" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>
							</div>

						</div>
					</a>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<a href="">
						<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(8)" onmouseout="like_back(8)">
							<div id="like8" class="likepin" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>
							</div>

						</div>
					</a>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<a href="">
						<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat" onmouseover="
                        like_show(9)" onmouseout="like_back(9)">
							<div id="like9" class="likepin" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>
							</div>

						</div>
					</a>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>
			</div>

			<div id="layer2" style="display:none;">
				<div class="recommend-line">
					<a>新作 </a>
				</div>
				<div class="new_artcle">

					<div class="article">
						<a href="">
							<div class="a_left" style="background:url(/share/Public/Home/image/index/article_1.png) no-repeat;" onmouseover="
                        like_article_show(1)" onmouseout="like_article_back(1)">

								<div id="like_article1" class="likepin_article" style="display:none">
									<div class="like_1"></div>
									<div class="like_2"></div>
									<div class="like_3"></div>

								</div>
							</div>
						</a>
						<div class="a_right">
							<div class="r_1">
								<h style="font-size:18px;margin-left:10px;margin-left:5px;">UI/UX 工具 Top10！</h>
							</div>
							<div class="r_2">
								<p style="font-size:12px;color:#808080;">原创/自译教程：【自译】善其事，利其器——UI/UX 工具 Top10！(翻译理论)UX/UI 设计工具 Top 10! ps:本人英语水平 so poor，还请各位 don't care.</p>
							</div>
							<div class="r_3">
								<h style="font-size:12px;"><a href="" style="text-decoration: none;color:#247f8e;margin-left:15px;">设计文章</a>-原创-<a href="" style="text-decoration: none;color:#247f8e;">GUI</a></h><br/>
								<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" style="margin-left:15px;" />
								<h style="font-size:12px;color:#808080;">111</h>
								<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
								<h style="font-size:12px;color:#808080;">234</h>
							</div>
							<div class="r_4">
								<a href="" style="text-decoration: none;">
									<div class="r_touxiang">
										<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-left:15px;" />
									</div>
									<div class="r_name">
										<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
										<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="article">
						<a href="">
							<div class="a_left" style="background:url(/share/Public/Home/image/index/article_1.png) no-repeat;" onmouseover="
                        like_article_show(2)" onmouseout="like_article_back(2)">

								<div id="like_article2" class="likepin_article" style="display:none">
									<div class="like_1"></div>
									<div class="like_2"></div>
									<div class="like_3"></div>

								</div>
							</div>
						</a>
						<div class="a_right">
							<div class="r_1">
								<h style="font-size:18px;margin-left:10px;margin-left:5px;">UI/UX 工具 Top10！</h>
							</div>
							<div class="r_2">
								<p style="font-size:12px;color:#808080;">原创/自译教程：【自译】善其事，利其器——UI/UX 工具 Top10！(翻译理论)UX/UI 设计工具 Top 10! ps:本人英语水平 so poor，还请各位 don't care.</p>
							</div>
							<div class="r_3">
								<h style="font-size:12px;"><a href="" style="text-decoration: none;color:#247f8e;margin-left:15px;">设计文章</a>-原创-<a href="" style="text-decoration: none;color:#247f8e;">GUI</a></h><br/>
								<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" style="margin-left:15px;" />
								<h style="font-size:12px;color:#808080;">111</h>
								<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
								<h style="font-size:12px;color:#808080;">234</h>
							</div>
							<div class="r_4">
								<a href="" style="text-decoration: none;">
									<div class="r_touxiang">
										<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-left:15px;" />
									</div>
									<div class="r_name">
										<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
										<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="article">
						<a href="">
							<div class="a_left" style="background:url(/share/Public/Home/image/index/article_1.png) no-repeat;" onmouseover="
                        like_article_show(3)" onmouseout="like_article_back(3)">

								<div id="like_article3" class="likepin_article" style="display:none">
									<div class="like_1"></div>
									<div class="like_2"></div>
									<div class="like_3"></div>

								</div>
							</div>
						</a>
						<div class="a_right">
							<div class="r_1">
								<h style="font-size:18px;margin-left:10px;margin-left:5px;">UI/UX 工具 Top10！</h>
							</div>
							<div class="r_2">
								<p style="font-size:12px;color:#808080;">原创/自译教程：【自译】善其事，利其器——UI/UX 工具 Top10！(翻译理论)UX/UI 设计工具 Top 10! ps:本人英语水平 so poor，还请各位 don't care.</p>
							</div>
							<div class="r_3">
								<h style="font-size:12px;"><a href="" style="text-decoration: none;color:#247f8e;margin-left:15px;">设计文章</a>-原创-<a href="" style="text-decoration: none;color:#247f8e;">GUI</a></h><br/>
								<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" style="margin-left:15px;" />
								<h style="font-size:12px;color:#808080;">111</h>
								<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
								<h style="font-size:12px;color:#808080;">234</h>
							</div>
							<div class="r_4">
								<a href="" style="text-decoration: none;">
									<div class="r_touxiang">
										<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-left:15px;" />
									</div>
									<div class="r_name">
										<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
										<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="article">
						<a href="">
							<div class="a_left" style="background:url(/share/Public/Home/image/index/article_1.png) no-repeat;" onmouseover="
                        like_article_show(4)" onmouseout="like_article_back(4)">

								<div id="like_article4" class="likepin_article" style="display:none">
									<div class="like_1"></div>
									<div class="like_2"></div>
									<div class="like_3"></div>

								</div>
							</div>
						</a>
						<div class="a_right">
							<div class="r_1">
								<h style="font-size:18px;margin-left:10px;margin-left:5px;">UI/UX 工具 Top10！</h>
							</div>
							<div class="r_2">
								<p style="font-size:12px;color:#808080;">原创/自译教程：【自译】善其事，利其器——UI/UX 工具 Top10！(翻译理论)UX/UI 设计工具 Top 10! ps:本人英语水平 so poor，还请各位 don't care.</p>
							</div>
							<div class="r_3">
								<h style="font-size:12px;"><a href="" style="text-decoration: none;color:#247f8e;margin-left:15px;">设计文章</a>-原创-<a href="" style="text-decoration: none;color:#247f8e;">GUI</a></h><br/>
								<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" style="margin-left:15px;" />
								<h style="font-size:12px;color:#808080;">111</h>
								<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
								<h style="font-size:12px;color:#808080;">234</h>
							</div>
							<div class="r_4">
								<a href="" style="text-decoration: none;">
									<div class="r_touxiang">
										<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-left:15px;" />
									</div>
									<div class="r_name">
										<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
										<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="work_all">
					<div class="all_article"></div>
				</div>

				<div class="article">
					<a href="">
						<div class="a_left" style="background:url(/share/Public/Home/image/index/article_1.png) no-repeat;" onmouseover="
                        like_article_show(5)" onmouseout="like_article_back(5)">

							<div id="like_article5" class="likepin_article" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>

							</div>
						</div>
					</a>
					<div class="a_right">
						<div class="r_1">
							<h style="font-size:18px;margin-left:10px;margin-left:5px;">UI/UX 工具 Top10！</h>
						</div>
						<div class="r_2">
							<p style="font-size:12px;color:#808080;">原创/自译教程：【自译】善其事，利其器——UI/UX 工具 Top10！(翻译理论)UX/UI 设计工具 Top 10! ps:本人英语水平 so poor，还请各位 don't care.</p>
						</div>
						<div class="r_3">
							<h style="font-size:12px;"><a href="" style="text-decoration: none;color:#247f8e;margin-left:15px;">设计文章</a>-原创-<a href="" style="text-decoration: none;color:#247f8e;">GUI</a></h><br/>
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" style="margin-left:15px;" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
						<div class="r_4">
							<a href="" style="text-decoration: none;">
								<div class="r_touxiang">
									<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-left:15px;" />
								</div>
								<div class="r_name">
									<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
									<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="article">
					<a href="">
						<div class="a_left" style="background:url(/share/Public/Home/image/index/article_1.png) no-repeat;" onmouseover="
                        like_article_show(6)" onmouseout="like_article_back(6)">

							<div id="like_article6" class="likepin_article" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>

							</div>
						</div>
					</a>
					<div class="a_right">
						<div class="r_1">
							<h style="font-size:18px;margin-left:10px;margin-left:5px;">UI/UX 工具 Top10！</h>
						</div>
						<div class="r_2">
							<p style="font-size:12px;color:#808080;">原创/自译教程：【自译】善其事，利其器——UI/UX 工具 Top10！(翻译理论)UX/UI 设计工具 Top 10! ps:本人英语水平 so poor，还请各位 don't care.</p>
						</div>
						<div class="r_3">
							<h style="font-size:12px;"><a href="" style="text-decoration: none;color:#247f8e;margin-left:15px;">设计文章</a>-原创-<a href="" style="text-decoration: none;color:#247f8e;">GUI</a></h><br/>
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" style="margin-left:15px;" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
						<div class="r_4">
							<a href="" style="text-decoration: none;">
								<div class="r_touxiang">
									<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-left:15px;" />
								</div>
								<div class="r_name">
									<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
									<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="article">
					<a href="">
						<div class="a_left" style="background:url(/share/Public/Home/image/index/article_1.png) no-repeat;" onmouseover="
                        like_article_show(7)" onmouseout="like_article_back(7)">

							<div id="like_article7" class="likepin_article" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>

							</div>
						</div>
					</a>
					<div class="a_right">
						<div class="r_1">
							<h style="font-size:18px;margin-left:10px;margin-left:5px;">UI/UX 工具 Top10！</h>
						</div>
						<div class="r_2">
							<p style="font-size:12px;color:#808080;">原创/自译教程：【自译】善其事，利其器——UI/UX 工具 Top10！(翻译理论)UX/UI 设计工具 Top 10! ps:本人英语水平 so poor，还请各位 don't care.</p>
						</div>
						<div class="r_3">
							<h style="font-size:12px;"><a href="" style="text-decoration: none;color:#247f8e;margin-left:15px;">设计文章</a>-原创-<a href="" style="text-decoration: none;color:#247f8e;">GUI</a></h><br/>
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" style="margin-left:15px;" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
						<div class="r_4">
							<a href="" style="text-decoration: none;">
								<div class="r_touxiang">
									<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-left:15px;" />
								</div>
								<div class="r_name">
									<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
									<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="article">
					<a href="">
						<div class="a_left" style="background:url(/share/Public/Home/image/index/article_1.png) no-repeat;" onmouseover="
                        like_article_show(8)" onmouseout="like_article_back(8)">

							<div id="like_article8" class="likepin_article" style="display:none">
								<div class="like_1"></div>
								<div class="like_2"></div>
								<div class="like_3"></div>

							</div>
						</div>
					</a>
					<div class="a_right">
						<div class="r_1">
							<h style="font-size:18px;margin-left:10px;margin-left:5px;">UI/UX 工具 Top10！</h>
						</div>
						<div class="r_2">
							<p style="font-size:12px;color:#808080;">原创/自译教程：【自译】善其事，利其器——UI/UX 工具 Top10！(翻译理论)UX/UI 设计工具 Top 10! ps:本人英语水平 so poor，还请各位 don't care.</p>
						</div>
						<div class="r_3">
							<h style="font-size:12px;"><a href="" style="text-decoration: none;color:#247f8e;margin-left:15px;">设计文章</a>-原创-<a href="" style="text-decoration: none;color:#247f8e;">GUI</a></h><br/>
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" style="margin-left:15px;" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
						<div class="r_4">
							<a href="" style="text-decoration: none;">
								<div class="r_touxiang">
									<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-left:15px;" />
								</div>
								<div class="r_name">
									<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
									<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
								</div>
							</a>
						</div>
					</div>
				</div>

			</div>

			<div id="layer3" style="display:none;">
				<div class="recommend-line">
					<a>最新 3</a>
				</div>

				<div class="person">
					<div class="person_1">
						<img src="/share/Public/Home/image/index/person_1.png" height="109" width="110" style="margin-top:20px;">
					</div>
					<div class="person_2">
						<h style="font-size:18px;color:#3a3a3a;font-weight:bolder;">Sonia</h>
						<h style="font-size:14px;color:#808080;">程序猿</h>
					</div>
					<div class="person_3">
						<h style="font-size:12px;color:#808080;">作品 32</h>
						<h style="font-size:12px;color:#808080;">文章 6</h>
						<h style="font-size:12px;color:#808080;">人气 3459</h>
					</div>
					<div class="person_4">
						<input type="button" name="follow" value="" placeholder="" class="p_btn" />
					</div>
				</div>

				<div class="person"></div>
				<div class="person"></div>
				<div class="person"></div>
				<div class="person"></div>

			</div>

			<div id="layer4" style="display:none;">
				<div class="recommend-line">
					<a>最新 12</a>
				</div>
				<div class="work">
					<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat"></div>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat"></div>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat"></div>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat"></div>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>

				<div class="work">
					<div class="work_img" style="background: url(/share/Public/Home/image/index/work_img1.jpg) no-repeat"></div>
					<div class="work_title">
						<div class="title_1">
							<a href="" style="text-decoration: none;color:#000">
								<h style="font-size:18px;margin-left:10px;font-weight:bolder;">Title</h>
							</a>
						</div>
						<div class="title_2">
							<h style="font-size:12px;margin-left:10px;color:#808080;">describedescribedescribedesc</h>
						</div>
						<div class="title_3">
							<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
							<h style="font-size:12px;color:#808080;">111</h>
							<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
							<h style="font-size:12px;color:#808080;">234</h>
						</div>
					</div>
					<div class="work_p">
						<a href="" style="text-decoration: none;">
							<div class="p_1">
								<img src="/share/Public/Home/image/index/touxiang.png" height="40" width="40" style="margin-top:5px;" />
							</div>
							<div class="p_2">
								<h style="font-size:14px;color:#3a3a3a;margin-left:10px">Sonia</h><br/>
								<h style="font-size:12px;color:#808080;margin-left:10px">程序猿</h>
							</div>
						</a>
						<a href="" style="text-decoration: none;">
							<div class="p_3">
								<h style="font-size:12px;color:#808080;margin-left:10px">插画</h>
							</div>
						</a>

					</div>
				</div>
			</div>

		</div>
			<div class="clear"></div>
			<div id="footer">
				<div class="wrapper">
					版权所有：大学生作品发布平台
				</div>
			</div>

	</body>
</html>