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

						<?php if(is_array($Articallist)): $i = 0; $__LIST__ = $Articallist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<?php if(empty($vo["indeximgpath"])): ?><a href="http://localhost:8080/share/index.php/Home/essay/essay/id/<?php echo ($vo["ariticalid"]); ?>" class="userAImg"><img src="/share/Public/upload/ArticalIndexImg/defaultImg.jpg" alt="" width="260px" height="auto" /></a>
						<?php else: ?>
						<a href="http://localhost:8080/share/index.php/Home/essay/essay/id/<?php echo ($vo["ariticalid"]); ?>" class="userAImg">
							<img src="/share/Public/<?php echo ($vo["indeximgpath"]); ?>" alt="" width="260px" height="auto" />
						</a><?php endif; ?>

						<div class="userAInfo" style="padding:0px 10px 10px 10px;box-sizing: border-box;">
							<div class="userATitle" style="margin-top: 8px;">
									<a href="http://localhost:8080/share/index.php/Home/essay/essay/id/<?php echo ($vo["ariticalid"]); ?>">
										<?php echo ($vo["title"]); ?>

									</a>
							</div>
							<div class="userAupTime" style="margin: 8px 0 0 0;"><span class="userA_Name" style="color:pink;"><?php echo ($vo["username"]); ?></span> / <span style="color:brown;"><?php echo (substr($vo["createtime"],0,10)); ?></span></div>
							<div  class="sortCo" style="margin-top: 8px;font-size: 12px;">
								<span style="color:orange;">
									<?php if( $vo['articaltype'] == 1) { echo '原创教程'; } else if( $vo['articaltype'] == 2) { echo '观点/见解'; } else if( $vo['articaltype'] == 3) { echo '设计资讯'; } else { echo '其他'; } ?>
								</span>
							</div>

							<span class="userAintro" style="width: 100%;font-size: 18px;margin-top: 8px;">
								<?php echo (htmlspecialchars_decode($vo["intro"])); ?>
							</span>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
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