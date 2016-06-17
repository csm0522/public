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

<link href="/share/Public/Home/css/punlish.css" rel="stylesheet" media="all" />
 <script type="text/javascript" src="/share/Public/Home/js/jquery-2.0.2.js"></script>
 <script type="text/javascript" src="/share/Public/Home/ueditor/ueditor.config.js"></script>
 <script type="text/javascript" src="/share/Public/Home/ueditor/ueditor.all.min.js"></script>
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
                var layer1 = document.getElementById("layer1");
                layer1.style.display = "none";
                var img1 = document.getElementById("img1");
                img1.style.display = "none";
                var title = document.getElementById("title1");
                title1.style.color = "#8e8e8e";
                var layer2 = document.getElementById("layer2");
                layer2.style.display = "none";
                var img2 = document.getElementById("img2");
                img2.style.display = "none";
                var title = document.getElementById("title2");
                title2.style.color = "#8e8e8e";
                var layer3 = document.getElementById("layer3");
                layer3.style.display = "none";
                var img3 = document.getElementById("img3");
                img3.style.display = "none";
                var title = document.getElementById("title3");
                title3.style.color = "#8e8e8e";
                var layer4 = document.getElementById("layer4");
                layer4.style.display = "none";
                var img4 = document.getElementById("img4");
                img4.style.display = "none";
                var title = document.getElementById("title4");
                title4.style.color = "#8e8e8e";
                var layer = document.getElementById("layer" + i);
                $("#layer" + i).slideDown().fadeIn("slow");
                var title = document.getElementById("title" + i);
                title.style.color = "#e52938";
                var img = document.getElementById("img" + i);
                img.style.display = "block";
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
        <style type="text/css">
            div.nice_right {
                display: none;
            }

            input {
                border: none;
                outline: none;
            }
        </style>


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
<!--注册百度ueditor-->
<script type="text/javascript">
  var editor = new baidu.editor.ui.Editor({
  	//PUBLIC HOME UEDITOR PHP CONFIG.JSON修改图片路径
    toolbars:[['fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment','insertcode', 'background', '|',
            'horizontal', 'date', 'time', 'spechars']],//自定义ueditor工具栏
    initialContent: '<span style="color:#ccc"></span>',
    minFrameHeight: 100,//初始化框架大小
    zIndex:10,
    autoFloatEnabled: false,//工具栏自动浮动-》关闭
    textarea:'content'//form表单将通过该参数获得表单提交的数据
  });
  editor.render("Vent");
</script>
<!--百度Ueditor注册完毕-->
            <!--内容主题 -->
            <div id="main_punlish">
            <div class="title_p">
            <ul>
            <li style="border-top: 3px solid #96424a;background:white;"><a href="<?php echo U('User/pshWorksPag');?>">作品发布</a></li>
             <li><a href="<?php echo U('User/pshArtPag');?>">文章发表</a></li>
            </ul>
            </div>
            <form action="<?php echo U('User/pubWorks');?>" id="pubWorks" name="pubWorks" method="POST" enctype="multipart/form-data">
            <div class="punlish_d">
            <table>
            <tr>
                <th style="height:70px;" >作品名称<span style="color:red">*</span></th>
                <td style="height:70px;"><input maxlength="50" type="text" value="" class="newTxt" name="worksname" >
                <span>最多只能输入50个字</span></td>
            </tr>
             <tr>
                <th style="height:70px;" >作品分类<span style="color:red">*</span></th>
                <td style="height:70px;">
                <select name="fenlei" style="font-size:14px;font-family:幼圆;color:#666">
                    <option value="UI">UI/UX</option>
                    <option value="PM">平面设计</option>
                    <option value="MH">漫画/插画</option>
                    <option value="WY">网页设计</option>
                    <option value="MD">3D模型</option>
                    <option value="DP">创意短片</option>
                    <option value="PT">摄影</option>
                    <option value="OTHER">其他</option>

                </select>
                </td>
            </tr>
            <tr>
                <th style="height:70px;" >封面图片</th>
                <td style="height:70px;"><input  type="file" name="worksImg" style="cursor: pointer; opacity:100;height:20px;"/>
                <span style="width:400px;font-size:14px;">支持jpg/gif/png格式,</span></td>
            </tr>

            <tr>
                <th style="height:70px;vertical-align: top;padding-top:22px;" >作品详情<span style="color:red">*</span></th>
                <td style="height:70px;">
                	<script type="text/plain" id="Vent" style="width:800px;height:400px;"></script>
                </td>
            </tr>
            <tr>
                <th style="height:70px;" >外链地址</th>
                <td style="height:70px;"><input type="text" value="" class="newTxt" name="worksLink">
            </tr>
                <input type="hidden" value="1" class="newTxt" name="upLoadType">
            </table>

            <div class="Take"><input type="submit"  id="fsub" value="确认"></div>
            </div>
</form>

</div>
			<script type="text/javascript">
			window.onload = function(){
				document.getElementById('fsub').onclick=function(){
					document.getElementById('pubWorks').submit();
				};
			}

			</script>
      <div class="clear"></div>
			<div class="clear"></div>
			<div id="footer">
				<div class="wrapper">
					版权所有：大学生作品发布平台
				</div>
			</div>

	</body>
</html>