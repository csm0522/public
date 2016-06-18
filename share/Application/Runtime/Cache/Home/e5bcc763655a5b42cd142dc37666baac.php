<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>

	<head runat="server">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>Publish大学生作品分享平台</title>
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
								<input type="text" name="" placeholder="搜索你喜欢的作品" id="artname" />
								<input type="submit" value="搜索" id="searchingbtn"/>
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
		<script>
			$('#searchingbtn').click(function (){
				var j = $("#artname").val();
				$.ajax({
					url:"<?php echo U('Public/SearchArt');?>",
					type:'post',
					data:j,
					success:function(){
						alert("<?php echo U('Public/SearchArt');?>");
					}
				})
			});

		</script>
<link href="/share/Public/Home/css/personal.css" rel="stylesheet" media="all" />
<script type="text/javascript" language="javascript">

			function title_color(i) {
				var title = document.getElementById("title" + i);
				title.style.color = "#e52938";
			}

			function title_back(i) {
				var title = document.getElementById("title" + i);
				title.style.color = "#8e8e8e";
			}

			function show(i) {
				var layer = document.getElementById("layer" + i);
				layer.style.display = "block";
			}

			function search_btn() {
				var search_btn1 = document.getElementById("search_btn1");
				search_btn1.style.color = "#e52938";
			}
		</script>
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
<script type="text/javascript">
			function show(i) {
				if(i==1)
				{
					$('#layer1').show();
					$('#layer2').hide();
					$('#layer3').hide();
					$('#layer4').hide();
				}
				if(i==2)
				{
					$('#layer1').hide();
					$('#layer2').show();
					$('#layer3').hide();
					$('#layer4').hide();
				}
				if(i==3)
				{
					$('#layer1').hide();
					$('#layer2').hide();
					$('#layer3').show();
					$('#layer4').hide();
				}
				if(i==4)
				{
					$('#layer1').hide();
					$('#layer2').hide();
					$('#layer3').hide();
					$('#layer4').show();
				}
			}

			function open_c() {
				var layer3_a = document.getElementById("layer3_a");
				layer3_a.style.display = "none";
				var layer3_b = document.getElementById("layer3_b");
				layer3_b.style.display = "block";
			}

			function close_c() {
				var layer3_a = document.getElementById("layer3_a");
				layer3_a.style.display = "block";
				var layer3_b = document.getElementById("layer3_b");
				layer3_b.style.display = "none";
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
				<div class="dynamic">
						<?php if(empty($userTX)): ?><div class="d_head" style="width: 110px;height:110px;margin:0 auto;">
								<img src="/share/Public/upload/userTX/default/person.png" width="110px" height="110px" style="border-radius: 90px;margin-top:150px;;">
							</div>
						<?php else: ?>
							<div class="d_head" style="width: 110px;height:110px;margin:0 auto;">
								<img src="/share/Public<?php echo ($userTX); ?>" width="110px" height="110px" style="border-radius: 90px;margin-top:150px;">
							</div><?php endif; ?>

				</div>
				<div class="category">

					<div class="dynamic_2" style="margin-top:3%;">
						<div class="myname">
							<div class="recommend-line">
								<a href="" style="text-decoration: none;">
									<h style="font-size:28px;color:#444;font-weight:bolder;">
										<?php
 if($userInfo == '') { echo('昵称'); } else{ echo $userInfo[username]; } ?>
									</h>
								</a>
							</div>
						</div>
						<div class="info">
							<h style="font-size:14px;color:#666;padding-top:5%;">简介:介绍一下自己</h>
						</div>
						<div class="more">
								<a href="<?php echo U('User/infoEdit');?>"><span>编辑信息</span></a>
						</div>
					</div>

					<div class="c_box">

						<div class="c_title">
							<div class="t_1" id="title1" onclick="show(1)">

								<input type="button" class="c_btn" value="<?php echo ($userWorksNum); ?>" />
								<h class="c_text" id="title1">作品</h>

							</div>

							<div class="t_1" id="title2" onclick="show(2)">

								<input type="button" class="c_btn" value="<?php echo ($userArticalNum); ?>" />
								<h class="c_text" id="title2">文章</h>

							</div>


							<div class="t_1" id="title4" onclick="show(4)">
								<input type="button" class="c_btn" value="45" />
								<h class="c_text" id="title4">关注</h>
							</div>

							<div class="t_1" id="title5" onclick="show(5)">
								<input type="button" class="c_btn" value="231" />
								<h class="c_text" id="title5">粉丝</h>
							</div>

						</div>

					</div>

					<div id="layer1" style="padding:2% 5%;box-sizing: border-box;width: 100%;">
						<ul style="width: 100%;margin:0 auto;text-align: left;">
							<?php if(is_array($userWorks)): $i = 0; $__LIST__ = $userWorks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="width: 380px;height:290px;display: inline-block;margin:0 20px 20px 0;border:1px solid #eee;text-align: left;">

						<?php if(empty($vo["indeximgpath"])): ?><a href="http://localhost:8080/share/index.php/Home/Works/works/id/<?php echo ($vo["ariticalid"]); ?>" class="userAImg">
							<img src="/share/Public/upload/ArticalIndexImg/defaultImg.jpg" alt="" width="380px" height="200px" />
							</a>
						<?php else: ?>
						<a href="http://localhost:8080/share/index.php/Home/Works/works/id/<?php echo ($vo["ariticalid"]); ?>" class="a-block">
							<img src="/share/Public/<?php echo ($vo["indeximgpath"]); ?>" width="380px" height="200px" class="u_post_img"/>
						</a><?php endif; ?>
						<div class="a-title">
							<div class="a-info">
								<h2><a href="http://localhost:8080/share/index.php/Home/Works/works/id/<?php echo ($vo["ariticalid"]); ?>"><?php echo (htmlspecialchars_decode($vo["title"])); ?></a></h2>
								<div class="works-info">
									<span class="works-author">
										<a href=""><?php echo ($vo["username"]); ?></a>&nbsp;/&nbsp;
									</span>
									<span class="works-time">
										<?php echo (substr($vo["createtime"],0,10)); ?>
									</span>
									&nbsp;/&nbsp;
									<span class="works-like"><img src="/share/Public/Home/image/index/love.png" alt="" /> 6 &nbsp;
									</span>
								</div>
							</div>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
					</div>















					<div id="layer2" style="display:none;">

	    <div class="artcle">
			<div class="artical-info">
				<ul>
					<li>
						<a href="" class="userAImg"><img src="/share/Public/Home/image/essay/1.png" alt="" /></a>
						<div class="userAInfo">
							<div class="userATitle">
									<a href="">最终，你成为了具有“独立思考”能力的人</a>
							</div>
							<div  class="sortCo">
								<span>设计文章</span>
							</div>
							<div class="userAupTime"><span class="userA_Name">用户昵称</span> / 2016-06-05</div>
							<div class="userAintro">
								人天生就渴求信息，像需要空气和水一样。信息也的确像空气和水一样包裹着我们.我
								们吸入，我们呼出.我们无法造一个玻璃盒子来屏蔽这一切.只能身处于这个庞大的体系
								中,慢慢找到真实的自己.
							</div>
						</div>
					</li>
					<li>
						<a href="" class="userAImg"><img src="/share/Public/Home/image/essay/1.png" alt="" /></a>
						<div class="userAInfo">
							<div class="userATitle">
									<a href="">最终，你成为了具有“独立思考”能力的人</a>
							</div>
							<div  class="sortCo">
								<span>设计文章</span>
							</div>
							<div class="userAupTime"><span class="userA_Name">用户昵称</span> / 2016-06-05</div>
							<div class="userAintro">
								人天生就渴求信息，像需要空气和水一样。信息也的确像空气和水一样包裹着我们.我
								们吸入，我们呼出.我们无法造一个玻璃盒子来屏蔽这一切.只能身处于这个庞大的体系
								中,慢慢找到真实的自己.
							</div>
						</div>
					</li>
					<li>
						<a href="" class="userAImg"><img src="/share/Public/Home/image/essay/1.png" alt="" /></a>
						<div class="userAInfo">
							<div class="userATitle">
									<a href="">最终，你成为了具有“独立思考”能力的人</a>
							</div>
							<div  class="sortCo">
								<span>设计文章</span>
							</div>
							<div class="userAupTime"><span class="userA_Name">用户昵称</span> / 2016-06-05</div>
							<div class="userAintro">
								人天生就渴求信息，像需要空气和水一样。信息也的确像空气和水一样包裹着我们.我
								们吸入，我们呼出.我们无法造一个玻璃盒子来屏蔽这一切.只能身处于这个庞大的体系
								中,慢慢找到真实的自己.
							</div>
						</div>
					</li>
					<li>
						<a href="" class="userAImg"><img src="/share/Public/Home/image/essay/1.png" alt="" /></a>
						<div class="userAInfo">
							<div class="userATitle">
									<a href="">最终，你成为了具有“独立思考”能力的人</a>
							</div>
							<div  class="sortCo">
								<span>设计文章</span>
							</div>
							<div class="userAupTime"><span class="userA_Name">用户昵称</span> / 2016-06-05</div>
							<div class="userAintro">
								人天生就渴求信息，像需要空气和水一样。信息也的确像空气和水一样包裹着我们.我
								们吸入，我们呼出.我们无法造一个玻璃盒子来屏蔽这一切.只能身处于这个庞大的体系
								中,慢慢找到真实的自己.
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>`


					</div>



					<div id="layer4" style="display:none;">

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