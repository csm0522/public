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

<link href="/share/Public/Home/css/word.css" rel="stylesheet" type="text/css"/>

<div class="Search">
    <div class="search-area container ">
        <p style="padding-top:100px;letter-spacing:18px;font-size:40px; color:#434345;">口水区，欢迎你</p>
        <p style="margin-top:24px;font-size:20px; color:#434345;">有问题，有话说，有时间，你都可以来这里！</p>

    </div>

</div>
<div class="take">
    <form id="searchform " class="in" method="Post" action="<?php echo U('Ksq/addTopic');?>" target="_blank" style="height:143px;margin-bottom:20px;">
        <select class="search-select"
                style="width:10%;height: 45px;background-color: #923030;color:white;padding-left:10px;outline:none;text-align: center;"
                name="types">
            <option value="0">学校生活</option>
            <option value="1">八卦新闻</option>
            <option value="2">闲谈闲聊</option>
            <option value="3">失物招领</option>
            <option value="4">比赛宣传</option>
            <option value="5">寻求伙伴</option>
            <option value="6">寻找兼职</option>
        </select>
        <input class="search-term required" style="width:70%;height:45px;margin-top:20px;padding-left:35px;"
               type="text " id="s " name="sword" placeholder="请输入你想说的 " title="* Please enter a search term! "/>
        <input class="search-btn " style="width:70px;height:40px;margin-top:46px;text-align:center;" type="submit"
               value="发送 "/>
    </form>
</div>
<div class="main4">
    <div class="leftpart">
        <p>话题分类</p>
        <div id="trid">
            <ul>
                <li><img src="/share/Public/Home/image/word/standard.png" alt="" style="margin-bottom: 10px;"><a href="/share/index.php/Home/Ksq/showtype/id/0" style="margin-top: 23px;">学校生活</a></li><hr>
                <li><img src="/share/Public/Home/image/word/standard.png" alt="" style="margin-bottom: 10px;"><a href="/share/index.php/Home/Ksq/showtype/id/1" style="margin-top: 23px;">八卦新闻</a></li><hr>
                <li><img src="/share/Public/Home/image/word/standard.png" alt="" style="margin-bottom: 10px;"><a href="/share/index.php/Home/Ksq/showtype/id/2" style="margin-top: 23px;">闲谈闲聊</a></li><hr>
                <li><img src="/share/Public/Home/image/word/standard.png" alt="" style="margin-bottom: 10px;"><a href="/share/index.php/Home/Ksq/showtype/id/3" style="margin-top: 23px;">失物招领</a></li><hr>
                <li><img src="/share/Public/Home/image/word/standard.png" alt="" style="margin-bottom: 10px;"><a href="/share/index.php/Home/Ksq/showtype/id/4" style="margin-top: 23px;">比赛宣传</a></li><hr>
                <li><img src="/share/Public/Home/image/word/standard.png" alt="" style="margin-bottom: 10px;"><a href="/share/index.php/Home/Ksq/showtype/id/5" style="margin-top: 23px;">寻求伙伴</a></li><hr>
                <li><img src="/share/Public/Home/image/word/standard.png" alt="" style="margin-bottom: 10px;"><a href="/share/index.php/Home/Ksq/showtype/id/6" style="margin-top: 23px;">寻找兼职</a></li><hr>
                <li><img src="/share/Public/Home/image/word/standard.png" alt="" style="margin-bottom: 10px;"><a href="/share/index.php/Home/Ksq/index" style="margin-top: 23px;">暂不分类</a></li><hr>
            </ul>
        </div>
    </div>
    <div class="rightpart">
        <!--<?php dump($topis) ?>-->
        <?php if(is_array($topis)): $i = 0; $__LIST__ = $topis;if( count($__LIST__)==0 ) : echo "暂无数据" ;else: foreach($__LIST__ as $key=>$datas): $mod = ($i % 2 );++$i;?><article class="format-standard type-post hentry clearfix " style="padding-left:50px;padding-top:38px;padding-bottom:25px;height:auto;background:white;margin-top:5px;">

                <header class="clearfix ">

                    <h3 class="post-title ">
                        <a href="#" style="sincolor: #814e51;color: #814e51; "><?php echo ($datas['content']); ?></a>
                        <a href="#" style="color:#814e51;font-size: 14px;float:right;margin-bottom:5px;margin-right: 5%;"><?php echo ($datas['username']); ?></a>
                        <div class="clear"></div>
                    </h3>
                    <div class="post-meta clearfix ">
                        <span class="date" style="color:#814e51;"><?php echo ($datas['creattime']); ?></span>
                        <span class="category"><a href="# " ><?php echo ($datas['type']); ?></a></span>
                        <!--<span class="comments"><a href="# " ><?php echo ($datas['topicid']); ?> 回复</a></span>-->
                        <span class="like-count">66</span>
                    </div>
                </header>
            </article><?php endforeach; endif; else: echo "暂无数据" ;endif; ?>

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