<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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

<link href="/share/Public/Home/css/index.css" rel="stylesheet" media="all" />
		<style type="text/css">
			div.nice_right {
				display: none;
			}

			input {
				border: none;
				outline: none;
			}
			.c_title {
    float: top;
    width: 500px;
    height: 50px;
    margin: 0 auto;
    text-align: center;
}
.c_btn {
    height: 40px;
    width: 80px;
    background-color: #fff;
    font-size: 14px;
    position: relative;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    /* text-shadow: 2px 4px 2px #235677; */
}
	</style>
		<script type="text/javascript">
			function show(i) {
				if(i==1)
				{
					$('#img1').show().siblings().hide();
					$('#layer1').show();
					$('#layer2').hide();
					$('#layer3').hide();
					$('#layer4').hide();
					$('#all1').show().siblings().hide();
				}
				else if(i==2)
				{
					$('#img2').show().siblings().hide();
					$('#layer2').show();
					$('#layer1').hide();
					$('#layer3').hide();
					$('#layer4').hide();
					$('#all2').show().siblings().hide();
				}
				else if(i==3)
				{
					$('#img3').show().siblings().hide();
					$('#layer3').show();
					$('#layer1').hide();
					$('#layer2').hide();
					$('#layer4').hide();
					$('#all3').show().siblings().hide();
				}
				else if(i==4)
				{
					$('#img4').show().siblings().hide();
					$('#layer4').show();
					$('#layer2').hide();
					$('#layer3').hide();
					$('#layer1').hide();
					$('#all4').show().siblings().hide();
				}

			}
			</script>
<div id="dynamic">

	<div class="dynamic_1">

		<div class="ind">

			<img src="/share/Public/Home/image/index/title_2.png" />
		</div>


	</div>

	<a href="<?php echo U('User/personal');?>">
		<div id="worker">
			<img src="/share/Public/Home/image/index/worker.png" alt="" />
		</div>
	</a>

	<div class="dynamic_2">
		<img src="/share/Public/Home/image/index/bg2.png" width="100%"/>
	</div>

</div>
<div style="width:100%;text-align: center;">
<img src="/share/Public/Home/image/index/all.png" width="10%" id="all1"/>
<img src="/share/Public/Home/image/index/all_article.png" width="10%" id="all2" style="display: none;"/>
<img src="/share/Public/Home/image/index/all_user.png" width="10%" id="all3" style="display: none;"/>
<img src="/share/Public/Home/image/index/all_enterprise.png" width="10%" id="all4" style="display: none;"/>
</div>
<div class="category">
	<div class="c_1" id="c_1">
		<img src="/share/Public/Home/image/index/c1.png" height="20" width="80" class="c_img1" id="img1" style="display: block;" />
		<img src="/share/Public/Home/image/index/c1.png" height="20" width="80" class="c_img2" id="img2" style="display: none;" />
		<img src="/share/Public/Home/image/index/c1.png" height="20" width="80" class="c_img3" id="img3" style="display: none;" />
		<img src="/share/Public/Home/image/index/c1.png" height="20" width="80" class="c_img4" id="img4" style="display: none;" />
	</div>
	<div class="c_title">
		<input type="button" class="c_btn" id="title1" value="作品 " onclick="show(1)" />/
		<input type="button" class="c_btn" id="title2" value="文章" onclick="show(2)" />/
		<input type="button" class="c_btn" id="title3" value="推荐用户" onclick="show(3)" />/
		<input type="button" class="c_btn" id="title4" value="公司" onclick="show(4)" />
	</div>

	<div id="layer1">
		<div class="worksList">
			<div class="allBox">
				<ul class="allBoxUI">

					<?php if(is_array($Workslist)): $i = 0; $__LIST__ = $Workslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<a href="#" class="a-block"><img src="/share/Public/<?php echo ($vo["indeximgpath"]); ?>" width="380px" height="200px" class="u_post_img"/></a>
						<div class="a-title">
							<div class="a-info">
								<h2><a href=""><?php echo (htmlspecialchars_decode($vo["title"])); ?></a></h2>
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
		</div>


	</div>
	<div id="layer2" style="display:none;">
		<div class="artcle">
			<div class="artical-info">
				<ul>
					<?php if(is_array($Articallist)): $i = 0; $__LIST__ = $Articallist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<?php if(empty($$vo["indeximgpath"])): ?><a href="" class="userAImg">
							<img src="/share/Public/upload/ArticalIndexImg/defaultImg.jpg" alt="" width="100%" />
							</a>
						<?php else: ?>
						<a href="" class="userAImg">
							<img src="<?php echo ($vo["indeximgpath"]); ?>" alt="" />
						</a><?php endif; ?>
						<div class="userAInfo">
							<div class="userATitle">
									<a href=""><?php echo ($vo["title"]); ?></a>
							</div>
							<div  class="sortCo">
								<span><?php echo ($vo["ArticalType"]); ?></span>
							</div>
							<div class="userAupTime"><span class="userA_Name"><?php echo ($vo["username"]); ?></span> / <?php echo ($vo["createtime"]); ?></div>
							<div class="userAintro">
								<?php echo (htmlspecialchars_decode($vo["content"])); ?>
							</div>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
					<!--<li>
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
					</li>-->
				</ul>
			</div>
		</div>
	</div>

	<div id="layer3" style="display:none;">
	<ul><li>
		<div class="person">
			<a href="#">
				<div class="person_1">
					<img src="/share/Public/Home/image/index/person_1.png" >
				</div>
			</a>
			<div class="person_2">
				<span>Sonia</span>
				<span>程序猿</span>
			</div>
			<div class="person_3">
				<span >作品 32</span>
				<span >关注 6</span>
				<span >被关注 3459</span>
			</div>
			<div class="person_4">
				<input type="button" name="follow" value="" placeholder="" class="p_btn" />
			</div>
		</div>
	</li>
	<li>
		<div class="person">
			<a href="#">
				<div class="person_1">
					<img src="/share/Public/Home/image/index/person_1.png" >
				</div>
			</a>
			<div class="person_2">
				<span>Sonia</span>
				<span>程序猿</span>
			</div>
			<div class="person_3">
				<span >作品 32</span>
				<span >关注 6</span>
				<span >被关注 3459</span>
			</div>
			<div class="person_4">
				<input type="button" name="follow" value="" placeholder="" class="p_btn" />
			</div>
		</div>
	</li>
	<li>
		<div class="person">
			<a href="#">
				<div class="person_1">
					<img src="/share/Public/Home/image/index/person_1.png" >
				</div>
			</a>
			<div class="person_2">
				<span>Sonia</span>
				<span>程序猿</span>
			</div>
			<div class="person_3">
				<span >作品 32</span>
				<span >关注 6</span>
				<span >被关注 3459</span>
			</div>
			<div class="person_4">
				<input type="button" name="follow" value="" placeholder="" class="p_btn" />
			</div>
		</div>
	</li>
	<li>
		<div class="person">
			<a href="#">
				<div class="person_1">
					<img src="/share/Public/Home/image/index/person_1.png" >
				</div>
			</a>
			<div class="person_2">
				<span>Sonia</span>
				<span>程序猿</span>
			</div>
			<div class="person_3">
				<span >作品 32</span>
				<span >关注 6</span>
				<span >被关注 3459</span>
			</div>
			<div class="person_4">
				<input type="button" name="follow" value="" placeholder="" class="p_btn" />
			</div>
		</div>
	</li>
	<li>
		<div class="person">
			<a href="#">
				<div class="person_1">
					<img src="/share/Public/Home/image/index/person_1.png" >
				</div>
			</a>
			<div class="person_2">
				<span>Sonia</span>
				<span>程序猿</span>
			</div>
			<div class="person_3">
				<span >作品 32</span>
				<span >关注 6</span>
				<span >被关注 3459</span>
			</div>
			<div class="person_4">
				<input type="button" name="follow" value="" placeholder="" class="p_btn" />
			</div>
		</div>
	</li>
	<li>
		<div class="person">
			<a href="#">
				<div class="person_1">
					<img src="/share/Public/Home/image/index/person_1.png" >
				</div>
			</a>
			<div class="person_2">
				<span>Sonia</span>
				<span>程序猿</span>
			</div>
			<div class="person_3">
				<span >作品 32</span>
				<span >关注 6</span>
				<span >被关注 3459</span>
			</div>
			<div class="person_4">
				<input type="button" name="follow" value="" placeholder="" class="p_btn" />
			</div>
		</div>
	</li>
	</ul>
	</div>

	<div id="layer4" style="display:none;">
		<div class="work_r">
			<a href="">
				<div class="work_img_r">
					<div class="img_r"></div>
				</div>
			</a>
			<div class="work_title_r">
				<div class="title_1_r">
					<a href="" style="text-decoration: none; color:#3e2410;">
						<h style="font-size:16px;margin-left:10px;font-weight:bolder;font-family:" 微软雅黑 "；">北京米糖招平面设计师</h>
					</a>
				</div>
				<div class="title_2_r">
					<h style="font-size:12px;margin-left:10px;color:#808080;">月薪：8k-12k</h>
				</div>
				<div class="title_3_r">
					<img src="/share/Public/Home/image/index/pint.png" height="13" width="13" />
					<h style="font-size:12px;color:#808080;">111</h>
					<img src="/share/Public/Home/image/index/love.png" height="8" width="13" style="margin-left:20px;" />
					<h style="font-size:12px;color:#808080;">234</h>
				</div>
			</div>
			<div class="work_p_r">
				<a href="" style="text-decoration: none;">

					<div class="p_2_r">
						<h style="font-size:14px;color:#8e8e8e;margin-left:10px">互联网/规模:30-50人</h><br/>

					</div>
				</a>
				<a href="" style="text-decoration: none;">
					<div class="p_3_r">
						<h style="font-size:12px;color:#808080;margin-left:10px">创意/设计</h>
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