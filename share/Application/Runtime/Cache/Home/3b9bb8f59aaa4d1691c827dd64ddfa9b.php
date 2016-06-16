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
									<li><a href="/share/index.php/Home/User/personalPage">个人中心</a></li>
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

<link href="/share/Public/Home/css/about.css" rel="stylesheet" type="text/css" />

			<script type="text/javascript">
function chanshaomin(){
    document.getElementById("a1").style.display="block";
     document.getElementById("a2").style.display="none";
      document.getElementById("a3").style.display="none";
       document.getElementById("a4").style.display="none";
}
function liuzeshan(){
    document.getElementById("a1").style.display="none";
     document.getElementById("a2").style.display="block";
      document.getElementById("a3").style.display="none";
       document.getElementById("a4").style.display="none";
}
function wuxin(){
    document.getElementById("a1").style.display="none";
     document.getElementById("a2").style.display="none";
      document.getElementById("a3").style.display="block";
       document.getElementById("a4").style.display="none";
}
function yanghaiqiang(){
    document.getElementById("a1").style.display="none";
     document.getElementById("a2").style.display="none";
      document.getElementById("a3").style.display="none";
       document.getElementById("a4").style.display="block";
}

  </script>
			<div id="banner">
				<img src="/share/Public/Home/image/about/lize.jpg" width="100%" />
			</div>

			<div id="main">

				<div class="impor">
					<div class="title2">
						<div class="picture" onmouseover="chanshaomin()"><img src="/share/Public/Home/image/about/a1.png">
							<p>后台小能手</p>
						</div>
						<div class="picture" onmouseover="liuzeshan()"><img src="/share/Public/Home/image/about/a2.png">
							<p>深圳小魔女</p>
						</div>
						<div class="picture" onmouseover="wuxin()"><img src="/share/Public/Home/image/about/a4.png">
							<p>我是无心</p>
						</div>
						<div class="picture" onmouseover="yanghaiqiang()"><img src="/share/Public/Home/image/about/a3.png">
							<p>技术担当</p>
						</div>
					</div>
				</div>

				<div class="article0">
					<div class="article1" id="a1">
						<div class="left"><img src="/share/Public/Home/image/about/cm_user_home.jpg"></div>
						<div class="middle">
							<h2>陈少敏</h2>
							<hr>
							<p>数字媒体技术大三的小鲜肉，单身，擅长于后台的搭建，是一个比较典型的吃货，最喜欢烧仙草</p>
						</div>
						<div class="right">
							<div class="big"><img src="/share/Public/Home/image/about/t1.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t2.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t3.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t4.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t5.jpg"></div>
						</div>
					</div>

					<div class="article1" id="a2">
						<div class="left"><img src="/share/Public/Home/image/about/cm_user_gift.jpg"></div>
						<div class="middle">
							<h2>刘泽珊</h2>
							<hr>
							<p>数字媒体技术的童鞋，来自深圳的一位小魔女，擅长于画画，爱吃爱笑爱玩，哈哈哈哈哈哈哈哈哈哈哈哈哈哈</p>
						</div>
						<div class="right">
							<div class="big"><img src="/share/Public/Home/image/about/t1.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t2.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t3.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t4.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t5.jpg"></div>
						</div>
					</div>

					<div class="article1" id="a3">
						<div class="left"><img src="/share/Public/Home/image/about/cm_user_foods.jpg"></div>
						<div class="middle">
							<h2>吴欣</h2>
							<hr>
							<p>数字媒体技术的童鞋，别名就是无心，哈哈哈哈哈哈哈哈哈哈哈哈哈</p>
						</div>
						<div class="right">
							<div class="big"><img src="/share/Public/Home/image/about/t1.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t2.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t3.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t4.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t5.jpg"></div>
						</div>
					</div>

					<div class="article1" id="a4">
						<div class="left"><img src="/share/Public/Home/image/about/cm_user_nicepic.jpg"></div>
						<div class="middle">
							<h2>杨海强</h2>
							<hr>
							<p>数字媒体技术大三的小鲜肉，班级的好男银，哈哈哈哈哈哈哈哈哈哈哈哈哈</p>
						</div>
						<div class="right">
							<div class="big"><img src="/share/Public/Home/image/about/t1.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t2.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t3.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t4.jpg"></div>
							<div class="small"><img src="/share/Public/Home/image/about/t5.jpg"></div>
						</div>
					</div>
				</div>
			</div>
			<div clear:both></div>
	</body>

</html>