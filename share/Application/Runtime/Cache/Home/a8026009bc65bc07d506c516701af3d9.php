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

<link href="/share/Public/Home/css/essay.css" rel="stylesheet" type="text/css" />
		<div class="body">

		<div id="main">
			<div id="main_head">
				Hi，看了童鞋们的设计文章涨姿势了吗？马上&nbsp;<a href="<?php echo U('User/pshWorksPag');?>">上传一篇</a>&nbsp;你的原创文章，和大家一起分享吧！
			</div>
			<div class="borderTop">
				<table width="100%">
					<tbody>
						<tr>
							<td>
								<div class="sort">
									<dl>
										<dt>类别：</dt>
										<dd>
											<a href="" class="select">原创教程</a>
											<a href="">设计资讯</a>
											<a href="">小伙伴观点/经验</a>
										</dd>

									</dl>
									<dl>
										<dt>排序：</dt>
										<dd>
											<a href="" class="select">上传时间</a>
											<a href="">推荐最多</a>
											<a href="">人气最高</a>
											<a href="">评论最多</a>
										</dd>
									</dl>
									<dl>
										<dt>时间：</dt>
										<dd>
											<a href="" class="select">不限</a>
											<a href="">1天内</a>
											<a href="">1周内</a>
											<a href="">1个月内</a>
											<a href="">一年内</a>
										</dd>
									</dl>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="main_body">
				<div id="main_left">
					<ul>
						<li>
							<a href="" class="userAImg"><img src="/share/Public/Home/image/essay/1.png" alt="" /></a>
							<div class="userAInfo">
								<div class="userATitle">
										<a href="">最终，你成为了具有“独立思考”能力的人</a>
								</div>
								<div  class="sortCo">
									<span>设计文章</span>
									<span> - 小伙伴经验</span>
								</div>
								<div class="userAupTime">2小时前上传 / <span class="cf30">201</span> 人气/ <span class="cf30">16</span> 评论 </div>
								<div class="userAintro">
									人天生就渴求信息，像需要空气和水一样。信息也的确像空气和水一样包裹着我们.我
									们吸入，我们呼出.我们无法造一个玻璃盒子来屏蔽这一切.只能身处于这个庞大的体系
									中,慢慢找到真实的自己.
								</div>
							</div>
						</li>
						<li>
							<a href="" class="userAImg"><img src="/share/Public/Home/image/essay/2.jpg" alt="" /></a>
							<div class="userAInfo">
								<div class="userATitle">
										<a href="">矢量骷髅兵插画简易教程</a>
								</div>
								<div  class="sortCo">
									<span>设计文章</span>
									<span> - 原创教程</span>
								</div>
								<div class="userAupTime">2小时前上传 / <span class="cf30">201</span> 人气/ <span class="cf30">16</span> 评论 </div>
								<div class="userAintro">
									因酷友对矢量插画都比较感兴趣，上次出完视频后还有很多人想了解，所以这次为大家在制作一个小视频，欢迎大家一起来探讨。
									由于经验不足，录制视频的时候声音不是特别的好，望大家见谅
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
									<span> - 小伙伴经验</span>
								</div>
								<div class="userAupTime">2小时前上传 / <span class="cf30">201</span> 人气/ <span class="cf30">16</span> 评论 </div>
								<div class="userAintro">
									人天生就渴求信息，像需要空气和水一样。信息也的确像空气和水一样包裹着我们.我
									们吸入，我们呼出.我们无法造一个玻璃盒子来屏蔽这一切.只能身处于这个庞大的体系
									中,慢慢找到真实的自己.
								</div>
							</div>
						</li>
						<li>
							<a href="" class="userAImg"><img src="/share/Public/Home/image/essay/2.jpg" alt="" /></a>
							<div class="userAInfo">
								<div class="userATitle">
										<a href="">矢量骷髅兵插画简易教程</a>
								</div>
								<div  class="sortCo">
									<span>设计文章</span>
									<span> - 原创教程</span>
								</div>
								<div class="userAupTime">2小时前上传 / <span class="cf30">201</span> 人气/ <span class="cf30">16</span> 评论 </div>
								<div class="userAintro">
									因酷友对矢量插画都比较感兴趣，上次出完视频后还有很多人想了解，所以这次为大家在制作一个小视频，欢迎大家一起来探讨。
									由于经验不足，录制视频的时候声音不是特别的好，望大家见谅
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
									<span> - 小伙伴经验</span>
								</div>
								<div class="userAupTime">2小时前上传 / <span class="cf30">201</span> 人气/ <span class="cf30">16</span> 评论 </div>
								<div class="userAintro">
									人天生就渴求信息，像需要空气和水一样。信息也的确像空气和水一样包裹着我们.我
									们吸入，我们呼出.我们无法造一个玻璃盒子来屏蔽这一切.只能身处于这个庞大的体系
									中,慢慢找到真实的自己.
								</div>
							</div>
						</li>
						<li>
							<a href="" class="userAImg"><img src="/share/Public/Home/image/essay/2.jpg" alt="" /></a>
							<div class="userAInfo">
								<div class="userATitle">
										<a href="">矢量骷髅兵插画简易教程</a>
								</div>
								<div  class="sortCo">
									<span>设计文章</span>
									<span> - 原创教程</span>
								</div>
								<div class="userAupTime">2小时前上传 / <span class="cf30">201</span> 人气/ <span class="cf30">16</span> 评论 </div>
								<div class="userAintro">
									因酷友对矢量插画都比较感兴趣，上次出完视频后还有很多人想了解，所以这次为大家在制作一个小视频，欢迎大家一起来探讨。
									由于经验不足，录制视频的时候声音不是特别的好，望大家见谅
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div id="main_right">
					<div  id="main_right_title">
						本周热门文章
					</div>
					<div  id="main_right_container">
						<ul>
							<li>
								<a href=""><img src="/share/Public/Home/image/essay/3.jpg" alt="枯水生 - 东方风格的UI"/> </a>
								<div>
									<p>枯水生 - 东方风格的UI</p>
									<p>人气: <span style="color:red">2650</span></p>
								</div>
							</li>
							<li>
								<a href=""><img src="/share/Public/Home/image/essay/2.jpg"/> </a>
								<div>
									<p>2016-设计大事件</p>
									<p>人气: <span style="color:red">2650</span></p>
								</div>
							</li>
							<li>
								<a href=""><img src="/share/Public/Home/image/essay/1.png"/> </a>
								<div>
									<p>【字言字语】设计中常用的手写体总结</p>
									<p>人气: <span style="color:red">2650</span></p>
								</div>
							</li>
							<li>
								<a href=""><img src="/share/Public/Home/image/essay/3.jpg"/> </a>
								<div>
									<p >最新研发——设计师防窥神器，打造全新工作体验！</p>
									<p>人气: <span style="color:red">2650</span></p>
								</div>
							</li>
						</ul>
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