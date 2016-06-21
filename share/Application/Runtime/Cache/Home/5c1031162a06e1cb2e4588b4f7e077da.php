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
        var ii = 1;
        function showM() {
            if (ii == 1) {
                $("#mean2").show();
                ii = 0;
            }
            else if (ii == 0) {
                $("#mean2").hide();
                ii = 1;
            }
        }
        var jj = 1;
        function showLogin() {
            if (jj == 1) {
                $("#LoginMean").show();
                jj = 0;
            }
            else if (jj == 0) {
                $("#LoginMean").hide();
                jj = 1;
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
                <div class="login">
                    <div id="loginAndLO" onclick="showLogin()" style="float: left;"><img
                            src="/share/Public/Home/image/index/personal.png" width="30px" style="margin-left:4px;vertical-align: middle;"/><p style="font-size:16px!important ;padding-top:4px;color:#40220f;">
                            	 <?php if(empty(session('userInfo.UN'))){?>
                            	游客
                            	<?php }else{?>

                            		<?php }?>	<?php echo (substr($_SESSION['userInfo']['UN'],0,12)); ?>
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

<link href="/share/Public/Home/css/work.css" rel="stylesheet" media="all"/>
<script type="text/javascript">
    window.onload = function () {
        document.getElementById('subCom').click = function () {
            var now = new Date();
            var layer = document.getElementById("layer");
            var divlayer = document.createElement("div");
            var con = document.getElementById("content").value;
            con = con.replace(/\n/g, "<br />");
            divlayer.innerHTML = "<img src='/share/Public/Home/image/index/person_2.png' width='40px' class='header'/>" + con + "<div class='stime'>" + now.toLocaleString() + "</div><div class='clear'></div>";
            divlayer.className = "content";
            layer.appendChild(divlayer);
            document.getElementById("content").value = "";
        }
    }

</script>
<div id="container" class="container-min-width" style="display: block;">
    <div class="dynamic">
        <!--<div class="background_top"></div>-->
        <div class="background_middle">


            <?php if(is_array($ArticalMain)): $i = 0; $__LIST__ = $ArticalMain;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="atrid" style="display:none"><?php echo ($vo["ariticalid"]); ?></div>

                <div class="content2">

                    <div class="author">
                        <a href="/share/index.php/Home/user/personone/id/<?php echo ($vo["userid"]); ?>">
                            <img src="/share/Public/Home/image/index/person_1.png" width="100%"/>
                        </a>
                    </div>

                    <div class="author_name">
                        <h><?php echo ($vo["username"]); ?></h>
                    </div>

                    <div class="work_bottom">
                        <div class="bottom_1"></div>
                        <div class="bottom_2"></div>
                    </div>

                    <div class="author_title">
                        <h style="color: black!important;"><?php echo ($vo["title"]); ?></h>
                    </div>

                    <div class="author_content">
                        <?php echo (htmlspecialchars_decode($vo["content"])); ?>
                    </div>
                    <!--<?php dump($nums) ?>-->
                    <div class="follower">
                        <input type="button" class="follower_btn" onclick="uper()"/><span id="nums" name="nums"><?php echo ($nums["num"]); ?></span>

                    </div>

                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="recommend-line">
                <a>评论</a>
            </div>

            <div class="view">

                <div class="view_me">
                    <a href="">
                        <img src="/share/Public/Home/image/index/person_1.png" width="80%"/>
                    </a>
                </div>

                <textarea id="content" rows="1" cols="100" placeholder="添加评论" name="caption"
                          style=""></textarea>

                <div id="view_submit">
                    <input type="button" value="提交" class="submit" style="background-color: #814e51;" id="subCom" onclick="addcomment()"/>
                    <input type="button" id="report" class="submit" style="background-color: #F59319;" value="举报" onclick="report()">
                </div>
            </div>

        </div>
        <div style="width: 90%;margin: auto;">
            <?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$com): $mod = ($i % 2 );++$i;?><div class="other">
                    <div class="view_top">

                        <div class="view_l">
                            <a href=""><img src="/share/Public/Home/image/index/person_2.png" width="40px"/></a>
                        </div>

                        <!--<div class="other_name" >-->
                        <span style="font-size:16px;color:#666;float: left;margin-left: 5%;margin-top: 10px;"><?php echo ($com["username"]); ?></span>
                        <div style="float: right;font-size: 14px;color:#aaa;display: inline-block;margin-top: 10px;">
                            <?php echo ($com["creattime"]); ?>
                        </div>
                        <!--</div>-->

                        <div style="clear: both"></div>
                    </div>

                    <div class="view_m">
                        <h style="font-size:14px;color:#aaa;"><?php echo ($com["content"]); ?></h>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div style="clear: both"></div>
    </div>
    <div style="clear: both"></div>
</div>
<div style="clear: both"></div>
<script>
    var url = window.location.href;
    var st = url.split("/");
    var i = st.length;
    var j = st[i - 1];
    function uper() {
        alert("谢谢关注!");

        $.ajax({
            type: "get", //请求的方式
//                    dataType: "json", //数据的格式 建议大家使用json格式
            url: "/share/index.php/Home/Essay/upessay/id/" + j, //请求的url地址
            success: function (data) { //请求成功时，处理返回来的数据
                var numbers = data.num;
                $("#nums").html(numbers);
//                        alert(url)
            }
        })
    }
    function addcomment() {
        var comment = {id: j, comment: $("#content").val()};
        if ($("#content").val() == "") {
            alert("请输入吐槽内容");
        }
        else {
            $.ajax({
                type: "post", //请求的方式
                dataType: "json", //数据的格式 建议大家使用json格式
                data: comment,
                url: "/share/index.php/Home/Essay/addcomment", //请求的url地址
                success: function (data) {
                    if (data == 0) {
                        window.location.href = window.location.href;
                    }
                    else {
                        alert("网络繁忙,请稍后再试。");
                    }
                }
            })
        }
    }
    function report(){
        $.ajax({
            type: "get", //请求的方式
            url: "/share/index.php/Home/Essay/report/id/" + j, //请求的url地址
            success: function (data) { //请求成功时，处理返回来的数据
                var msg = data.msg;
//                $("#report").backgroundColor=gray;
                alert(msg)
            }
        })
    }
</script>
<div style="clear: both"></div>
			<div id="footer" style="margin-top:10px;width:100%;background: #333131;margin-top:200px;">
				<div class="wrapper">
					<p style="font-size:14px;margin-top:5px;">版权所有：大学生作品发布平台</p>
					<p style="font-size:14px;margin-top: 5px;">开发团队:杨海强、吴欣、刘泽珊、陈少敏</p>
				</div>
			</div>

	</body>
</html>