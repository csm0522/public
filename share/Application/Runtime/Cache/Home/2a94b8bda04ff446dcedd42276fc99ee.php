<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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

<!--<link href="/share/Public/Home/css/index.css" rel="stylesheet" media="all" />-->
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
		if (i == 1) {
			$('#img1').show().siblings().hide();
			$('#layer1').show();
			$('#layer2').hide();
			$('#layer3').hide();
			$('#layer4').hide();
			$('#all1').show().siblings().hide();
		} else if (i == 2) {
			$('#img2').show().siblings().hide();
			$('#layer2').show();
			$('#layer1').hide();
			$('#layer3').hide();
			$('#layer4').hide();
			$('#all2').show().siblings().hide();
		} else if (i == 3) {
			$('#img3').show().siblings().hide();
			$('#layer3').show();
			$('#layer1').hide();
			$('#layer2').hide();
			$('#layer4').hide();
			$('#all3').show().siblings().hide();
		} else if (i == 4) {
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
		<?php if(empty($userTX)): ?><div id="worker">
				<img src="/share/Public/upload/userTX/default/person.png" alt="" style="width: 76px;height:76px;border-radius: 90px;" />
			</div>
			<?php else: ?>
			<div id="worker">
				<img src="/share/Public<?php echo ($userTX); ?>" alt="" style="width: 76px;height:76px;border-radius: 90px;" />
			</div><?php endif; ?>
	</a>

	<div class="dynamic_2">
		<img src="/share/Public/Home/image/index/bg2.png" width="100%" />
	</div>

</div>
<div style="width:100%;text-align: center;">
	<img src="/share/Public/Home/image/index/all.png" width="10%" id="all1" />
	<img src="/share/Public/Home/image/index/all_article.png" width="10%" id="all2" style="display: none;" />
	<img src="/share/Public/Home/image/index/all_user.png" width="10%" id="all3" style="display: none;" />
	<img src="/share/Public/Home/image/index/all_enterprise.png" width="10%" id="all4" style="display: none;" />
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

							<?php if(empty($vo["indeximgpath"])): ?><a href="/share/index.php/Home/Works/works/id/<?php echo ($vo["ariticalid"]); ?>" class="userAImg">
									<img src="/share/Public/upload/ArticalIndexImg/defaultImg.jpg" alt="" width="380px" height="200px" />
								</a>
								<?php else: ?>
								<a href="/share/index.php/Home/Works/works/id/<?php echo ($vo["ariticalid"]); ?>" class="a-block">
									<img src="/share/Public/<?php echo ($vo["indeximgpath"]); ?>" width="380px" height="200px" class="u_post_img" />
								</a><?php endif; ?>
							<div class="a-title">
								<div class="a-info">
									<h2><a href="/share/index.php/Home/Works/works/id/<?php echo ($vo["ariticalid"]); ?>"><?php echo (htmlspecialchars_decode($vo["title"])); ?></a></h2>
									<div class="works-info">
										<span class="works-author">
										<a href=""><?php echo ($vo["username"]); ?></a>&nbsp;/&nbsp;
									</span>
										<span class="works-time">
										<?php echo (substr($vo["createtime"],0,10)); ?>
									</span> &nbsp;/&nbsp;
										<span class="works-like"><img src="/share/Public/Home/image/index/love.png" alt="" />&nbsp;&nbsp;<?php echo ($vo["num"]); ?> &nbsp;
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
							<?php if(empty($vo["indeximgpath"])): ?><a href="/share/index.php/Home/essay/essay/id/<?php echo ($vo["ariticalid"]); ?>" class="userAImg">
									<img src="/share/Public/upload/ArticalIndexImg/defaultImg.jpg" alt="" width="260px" height="auto" />
								</a>
								<?php else: ?>
								<a href="/share/index.php/Home/essay/essay/id/<?php echo ($vo["ariticalid"]); ?>" class="userAImg">
									<img src="/share/Public/<?php echo ($vo["indeximgpath"]); ?>" alt="" width="260px" height="auto" />
								</a><?php endif; ?>
							<div class="userAInfo">
								<div class="userATitle">
									<a href="/share/index.php/Home/essay/essay/id/<?php echo ($vo["ariticalid"]); ?>"><?php echo ($vo["title"]); ?></a>
								</div>
								<div class="sortCo">
									<span><?php echo ($vo["ArticalType"]); ?></span>
								</div>
								<div class="userAupTime"><span class="userA_Name" style="color:pink"><?php echo ($vo["username"]); ?></span> / <span style="color:brown"><?php echo ($vo["createtime"]); ?></span></div>
								<span class="userAintro">
								<?php echo (htmlspecialchars_decode($vo["intro"])); ?>
							</span>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>

	<div id="layer3" style="display:none;">
		<ul>
			<?php if(is_array($userlist)): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>

					<div class="person">
						<?php if(empty($vo["usertx"])): ?><img src="/share/Public/upload/usertx/default/person.png" alt="" width="120" height="120" style="border-radius: 90px;border:1px solid #eee;margin:20px;"/>
						<?php else: ?>
							<img src="/share/Public/<?php echo ($vo["usertx"]); ?>" alt="" width="120" height="120"  style="border-radius: 90px;border:1px solid #eee;margin:20px;"/><?php endif; ?>
						<div class="person_2">
							<span><?php echo ($vo["username"]); ?></span>
						</div>
						<div class="person_3">
							<span>作品 32</span>
							<span>关注 6</span>
							<span>被关注 3459</span>
						</div>
						<div class="person_4">
							<input type="button" name="follow" value="" placeholder="" class="p_btn" />
						</div>
					</div>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>

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
			<div id="footer" style="margin-bottom:0px;width:100%;background: #333131;">
				<div class="wrapper">
					<p style="font-size:14px;margin-top:5px;">版权所有：大学生作品发布平台</p>
					<p style="font-size:14px;margin-top: 5px;">开发团队:杨海强、吴欣、刘泽珊、陈少敏</p>
				</div>
			</div>

	</body>
</html>