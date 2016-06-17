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

<link href="/share/Public/Home/css/recruit.css" rel="stylesheet" type="text/css" />
<link href="/share/Public/Home/css/lunbo.css" rel="stylesheet" type="text/css" />

			<script language="JavaScript">
				var s1 = 0;
				var s2 = 0;

				function show1() {
					if (s1 == 0) {
						document.getElementById('hangye').style.display = "block";
						s1 = 1;
					} else {
						document.getElementById('hangye').style.display = "none";
						s1 = 0;
					}
				}

				function show2() {
					if (s2 == 0) {
						document.getElementById('diqu').style.display = "block";
						s2 = 1;
					} else {
						document.getElementById('diqu').style.display = "none";
						s2 = 0;
					}
				}
			</script>
			<!--内容主题 -->
			<div id="job_main">
				<div class="left_200">
					<div class="seletion_1">
						<div onmouseover="show1()" onmouseout="show1()">
							<a href="">行业选择<i></i></a>
							<ul id="hangye">
								<li><a href="">互联网</a></li>
								<li><a href="">游戏</a></li>
								<li><a href="">软件开发</a></li>
								<li><a href="">电子商务</a></li>
								<li><a href="">影视媒体</a></li>
								<li><a href="">摄像摄影</a></li>
							</ul>
						</div>
						<div onmouseover="show2()" onmouseout="show2()">
							<a href="">地区选择<i></i></a>
							<ul id="diqu">
								<li><a href="">北京</a></li>
								<li><a href="">深圳</a></li>
								<li><a href="">上海</a></li>
								<li><a href="">广东</a></li>
								<li><a href="">浙江</a></li>
								<li><a href="">广州</a></li>
							</ul>
						</div>
					</div>

					<ul>
						<li><a href="">网页方向</a></li>
						<li><a href="">交互方向</a></li>
						<li><a href="">平面方向</a></li>
						<li><a href="">3D方向</a></li>
						<li><a href="">原画方向</a></li>
						<li><a href="">插画方向</a></li>
					</ul>
				</div>
				<div class="middle_760">

					<div id="rt-showcase" class="slider-container rt-overlay-dark">
						<div class="rt-container slider-container">
							<div class="rt-grid-12 rt-alpha rt-omega">
								<div class="csslider1 autoplay">
									<input name="cs_anchor1" autocomplete="off" id="cs_slide1_0" type="radio" class="cs_anchor slide">
									<input name="cs_anchor1" autocomplete="off" id="cs_slide1_1" type="radio" class="cs_anchor slide">
									<input name="cs_anchor1" autocomplete="off" id="cs_slide1_2" type="radio" class="cs_anchor slide">
									<input name="cs_anchor1" autocomplete="off" id="cs_play1" type="radio" class="cs_anchor" checked>
									<input name="cs_anchor1" autocomplete="off" id="cs_pause1" type="radio" class="cs_anchor">
									<ul>
										<div style="width: 100%;height:300px;font-size: 0px; line-height: 0;">
											<img src="/share/Public/Home/image/job/1.jpg" style="width: 100%;">
										</div>
										<li class="num0 img">
											<img src="/share/Public/Home/image/job/1.jpg" alt="Clouds" title="Clouds" />
										</li>
										<li class="num1 img">
											<img src="/share/Public/Home/image/job/2.jpg" alt="Typewriter" title="Typewriter" />
										</li>
										<li class="num2 img">
											<img src="/share/Public/Home/image/job/3.jpg" alt="Bicycle" title="Bicycle" />
										</li>

									</ul>

									<div class="cs_arrowprev">
										<label class="num0" for="cs_slide1_0"></label>
										<label class="num1" for="cs_slide1_1"></label>
										<label class="num2" for="cs_slide1_2"></label>
									</div>
									<div class="cs_arrownext">
										<label class="num0" for="cs_slide1_0"></label>
										<label class="num1" for="cs_slide1_1"></label>
										<label class="num2" for="cs_slide1_2"></label>
									</div>

								</div>

							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div id="job_list">
						<div class="job_list_title">
							最新招聘
						</div>
						<div id="zuixinzhaopin">
							<div class="zxzpitem">
								<a href="" class="item_link"></a>
								<div class="pic_box">
									<a href=""><img src="/share/Public/Home/image/job/1.jpg" alt="" /></a>
								</div>
								<div class="text_box">
									<p class="title_bar">
									<span class="title1">守望者设计-深圳 招 </span>
									<span class="title2">高级视觉设计师</span>
									</p>
									<p class="salary_bar">
									<span class="c-999">月薪:</span>
									<strong>10K-16K</strong>
									</p>
									<p class="scale_bar">
										广告 / 公关 / 会展  规模:1-50人
									</p>
								</div>
							</div>
							<div class="zxzpitem">
								<a href="" class="item_link"></a>
								<div class="pic_box">
									<a href=""><img src="/share/Public/Home/image/job/2.jpg" alt="" /></a>
								</div>
								<div class="text_box">
									<p class="title_bar">
									<span class="title1">守望者设计-深圳 招 </span>
									<span class="title2">高级视觉设计师</span>
									</p>
									<p class="salary_bar">
									<span class="c-999">月薪:</span>
									<strong>10K-16K</strong>
									</p>
									<p class="scale_bar">
										广告 / 公关 / 会展  规模:1-50人
									</p>
								</div>
							</div>
							<div class="zxzpitem">
								<a href="" class="item_link"></a>
								<div class="pic_box">
									<a href=""><img src="/share/Public/Home/image/job/3.jpg" alt="" /></a>
								</div>
								<div class="text_box">
									<p class="title_bar">
									<span class="title1">守望者设计-深圳 招 </span>
									<span class="title2">高级视觉设计师</span>
									</p>
									<p class="salary_bar">
									<span class="c-999">月薪:</span>
									<strong>10K-16K</strong>
									</p>
									<p class="scale_bar">
										广告 / 公关 / 会展  规模:1-50人
									</p>
								</div>
							</div>
							<div class="zxzpitem">
								<a href="" class="item_link"></a>
								<div class="pic_box">
									<a href=""><img src="/share/Public/Home/image/job/1.jpg" alt="" /></a>
								</div>
								<div class="text_box">
									<p class="title_bar">
									<span class="title1">守望者设计-深圳 招 </span>
									<span class="title2">高级视觉设计师</span>
									</p>
									<p class="salary_bar">
									<span class="c-999">月薪:</span>
									<strong>10K-16K</strong>
									</p>
									<p class="scale_bar">
										广告 / 公关 / 会展  规模:1-50人
									</p>
								</div>
							</div><div class="zxzpitem">
								<a href="" class="item_link"></a>
								<div class="pic_box">
									<a href=""><img src="/share/Public/Home/image/job/2.jpg" alt="" /></a>
								</div>
								<div class="text_box">
									<p class="title_bar">
									<span class="title1">守望者设计-深圳 招 </span>
									<span class="title2">高级视觉设计师</span>
									</p>
									<p class="salary_bar">
									<span class="c-999">月薪:</span>
									<strong>10K-16K</strong>
									</p>
									<p class="scale_bar">
										广告 / 公关 / 会展  规模:1-50人
									</p>
								</div>
							</div>
							<div class="zxzpitem">
								<a href="" class="item_link"></a>
								<div class="pic_box">
									<a href=""><img src="/share/Public/Home/image/job/3.jpg" alt="" /></a>
								</div>
								<div class="text_box">
									<p class="title_bar">
									<span class="title1">守望者设计-深圳 招 </span>
									<span class="title2">高级视觉设计师</span>
									</p>
									<p class="salary_bar">
									<span class="c-999">月薪:</span>
									<strong>10K-16K</strong>
									</p>
									<p class="scale_bar">
										广告 / 公关 / 会展  规模:1-50人
									</p>
								</div>
							</div>
							<div class="zxzpitem">
								<a href="" class="item_link"></a>
								<div class="pic_box">
									<a href=""><img src="/share/Public/Home/image/job/1.jpg" alt="" /></a>
								</div>
								<div class="text_box">
									<p class="title_bar">
									<span class="title1">守望者设计-深圳 招 </span>
									<span class="title2">高级视觉设计师</span>
									</p>
									<p class="salary_bar">
									<span class="c-999">月薪:</span>
									<strong>10K-16K</strong>
									</p>
									<p class="scale_bar">
										广告 / 公关 / 会展  规模:1-50人
									</p>
								</div>
							</div>
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