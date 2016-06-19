<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>

<head runat="server">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Publish大学生作品分享平台</title>
    <link href="/share/Public/Home/css/websjy.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/share/Public/Home/javascript/websjy.js"></script>
    <script src="/share/Public/Home/javascript/jquery-1.11.1.min.js"></script>
    <script src="/share/Public/Home/javascript/js.js"></script>
    <link href="/share/Public/Home/css/index.css" rel="stylesheet" media="all"/>


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
        function showM() {
            if (i == 1) {
                $("#mean2").show();
                i = 0;
            }
            else if (i == 0) {
                $("#mean2").hide();
                i = 1;
            }
        }
        var j = 1;
        function showLogin() {
            if (j == 1) {
                $("#LoginMean").show();
                j = 0;
            }
            else if (j == 0) {
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
                <a class="logo" href="<?php echo U('Index/index');?>"><img src="/share/Public/Home/image/index/logo.png" alt=""/></a>
            </div>
            <form id="form1" method="get" action="<?php echo U('Public/SearchArt');?>" style="height:100%;float: left;">
                <div class="middle-part">

                        <div class="middle_s">
                            <input type="text" name="seaid" placeholder="搜索你喜欢的作品<?php echo (session('user')); ?>" id="artname"/>
                            <input type="submit" value="搜索" id="searchingbtn"/>
                        </div>

                </div>
            </form>
            <div class="right-part">
                <div class="title">

							<span name="outA" href="#" id="btn_1">
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
                    <a name="outA" href="<?php echo U('Essay/index');?>" id="btn_1">
                        <div type="button" class="btn" id="btn11" value="文章">文章</div>
                    </a>
                    <a name="outA" href="<?php echo U('Ksq/index');?>">
                        <div type="button" class="btn" id="btn3" value="口水区">口水区</div>
                    </a>
                    <a name="outA" href="<?php echo U('Zhaop/index');?>">
                        <div type="button" class="btn" id="btn4" value="招聘">招聘</div>
                    </a>
                    <a name="outA" href="<?php echo U('About/index');?>">
                        <div type="button" class="btn" id="btn5" value="关于我们">关于我们</div>
                    </a>

                </div>
                <script>

                </script>
                <div class="login">
                    <div id="loginAndLO" onclick="showLogin()" style="float: left;"><img
                            src="/share/Public/Home/image/index/personal.png" width="30px" style="margin-left:4px;vertical-align: middle;"/><p style="font-size:16px!important ;padding-top:4px;color:#40220f;">
                            	 <?php if(empty(session('userInfo.UN'))){?>
                            	游客
                            	<?php }else{?>

                            		<?php }?>	<?php echo (substr($_SESSION['userInfo']['UN'],0,5)); ?>
                            </p>
                        <ul id="LoginMean" style="display: none;">
                            <?php if(empty(session('userInfo'))){?>
                            <li><a href="/share/index.php/Home/User/loginPage">登录</a></li>
                            <?php }else{?>
                            <li><a href="/share/index.php/Home/User/personal">个人中心</a></li>
                            <li><a href="/share/index.php/Home/User/logout">退出登录</a></li>
                            <?php }?>
                        </ul>
                    </div>
                    <a href="<?php echo U('User/pshWorksPag');?>"><img  src="/share/Public/Home/image/index/add.png" width="34px" style="margin-left:30px;padding-top:8px;"/></a>
                    <!--<img src="/share/Public/Home/image/index/more.png" style="cursor:pointer;margin-left:10px;width:12px;" onclick="openShutManager2(this,'box2',false)" />-->

                </div>
            </div>

        </div>
    </div>
</div>

<link href="/share/Public/Home/css/i_illustration.css" rel="stylesheet" media="all" />

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
		<div class="body">
			<div id="container" class="container-min-width" style="display: block;">
			</div>
		</div>



		<div class="title_img">

			<img src="/share/Public/Home/image/index/<?php if( $type == 1) { echo 'UI.png'; } else if( $type == 2) { echo 'graphic_design.png'; } else if( $type == 3) { echo 'illustration.png';} ?>" alt="" />



		</div>

		<div class="category">
			<div class="c_1">
				<img src="/share/Public/Home/image/index/c1.png" height="20" width="80" class="c_img1" id="img1" style="display: block;right:0;" />

			</div>
			<div class="c_title">
				<input type="button" class="c_btn" id="title1" value="作品" onclick="show(1)" />

			</div>

			<div id="layer1">

			<ul class="allBoxUI">
			<?php if(is_array($WorksMain)): $i = 0; $__LIST__ = $WorksMain;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li >
					<?php if(empty($vo["indeximgpath"])): ?><a href="/share/index.php/Home/Works/works/id/<?php echo ($vo["ariticalid"]); ?>" class="userAImg">
							<img src="/share/Public/upload/ArticalIndexImg/defaultImg.jpg" alt="" width="380px" height="200px" />
							</a>
						<?php else: ?>
						<a href="/share/index.php/Home/Works/works/id/<?php echo ($vo["ariticalid"]); ?>" class="a-block">
							<img src="/share/Public/<?php echo ($vo["indeximgpath"]); ?>" width="380px" height="200px" class="u_post_img"/>
						</a><?php endif; ?>
						<div class="a-title">
							<div class="a-info">
								<h2  style="text-align: left;"><a href="/share/index.php/Home/Works/works/id/<?php echo ($vo["ariticalid"]); ?>"><?php echo (htmlspecialchars_decode($vo["title"])); ?></a></h2>
								<div class="works-info" style="text-align: left;">
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

		<div class="clear"></div>
					<div class="clear"></div>
			<div id="footer" style="margin-bottom:0px;width:100%;background: #333131;">
				<div class="wrapper">
					<p class="font-size:14px;">版权所有：大学生作品发布平台</p>
					<p class="font-size:14px;"style="margin-top: 5px;">开者团队:杨海强、吴欣、刘泽珊、陈少敏</p>
				</div>
			</div>

	</body>
</html>