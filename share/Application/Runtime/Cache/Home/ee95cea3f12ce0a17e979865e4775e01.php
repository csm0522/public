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

<link href="/share/Public/Home/css/information-edit.css" rel="stylesheet" media="all" />
		<script type="text/javascript" language="javascript">
			function btn_color(i) {
				var btn = document.getElementById("btn" + i);
				btn.style.color = "#e52938";
			}

			function btn_back(i) {
				var btn = document.getElementById("btn" + i);
				btn.style.color = "#533333";
			}

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
					$('#box1').show();
					$('#box3').hide();
				}
				if(i==3)
				{
					$('#box1').hide();
					$('#box3').show();
				}
			}
			function sss(i) {
				var more1 = document.getElementById("more1");
				more1.style.display = "none";
				var more2 = document.getElementById("more2");
				more2.style.display = "none";
				var more = document.getElementById("more" + i);
				$("#more" + i).slideDown().fadeIn("slow");
			}
		</script>

		<script type="text/javascript">
		window.onload=function(){
			var area = [
				["职位1", "职位2", "职位3", "职位3", "职位3", "职位3", "职位3"],
				["专业1", "专业2", "专业3", "专业3", "专业3", "专业3"]
			]

			function selecttxt() {
				var strcity = document.getElementById("zhiwei");
				var strca = area[strcity.selectedIndex - 1];
				strarea.length = 1;
				for (var x = 0; x < strca.length; x++) {
					strarea[x] = new Option(strca[x], strca[x]);
				}
			}

		}
		</script>
		<style type="text/css">
			div.nice_right {
				display: none;
			}
		</style>


		<div id="layer1" style="margin-top:70px;background-color: white;">
			<div class="layer_left">
				<a href="#set_1" style="text-decoration:none">
					<div class="option" onclick="show(1)">
						<div class="option_1"><img src="/share/Public/Home/image/index/user.png" height="15" width="13" /></div>
						<div class="option_2" id="title1">个人信息</div>
					</div>
				</a				<a href="#set_3" style="text-decoration:none">
					<div class="option" onclick="show(3)">
						<div class="option_1"><img src="/share/Public/Home/image/index/user.png" height="15" width="13" /></div>
						<div class="option_2" id="title3">通知/留言</div>
					</div>
				</a>

				<div class="save">
					<a href="<?php echo U('Index/index');?>"><input type="button" class="s_cancle" value="取消"></a>
					<input type="submit" class="s_save" value="保存" id="s_save" />
				</div>
			</div>


			<form method='post' id="form123" name="form1" action="<?php echo U('User/Editinfo');?>" enctype="multipart/form-data">
			<div class="layer_right" style="margin-bottom:180px;">


				<div class="r_1" id="box1" style="display:block;margin-top:0">

					<div class="r_title">
						<h style="color:#e52938;padding-top:4%;margin-left:3%;">个人信息</h>
					</div>
					<div class="r_form">
						<div class="f_left">昵称：</div>
						<div class="f_right"><input type="text" name="UserName" class="f_text" value="<?php echo ($userInfo["username"]); ?>"/></div>
					</div>

					<div class="r_form">
						<div class="f_left">头像：</div>
						<div class="f_right">
							<input type="file" name="userTX" value="选择图片" />
						</div>
					</div>

					<div class="r_form">
						<div class="f_left">性别：</div>
						<div class="f_right">
							<input type="radio" id="nan" checked="checked" name="Sex" value="male" /><label for="nan">男</label>
							<input type="radio" id="nv" name="Sex" value="female" /><label for="nv">女</label>
							<input type="radio" id="null" name="Sex" value="null" /><label for="null">不告诉你</label>
						</div>
					</div>
					<div class="r_form">
						<div class="f_left">联系方式：</div>
						<div class="f_right"><input type="text" maxlength="12" name="userConnect" class="f_text"  value="<?php echo ($userInfo["userphone"]); ?>"/></div>
					</div>
					<div class="r_form">
						<div class="f_left">电子邮箱：</div>
						<div class="f_right"><input type="email" name="userEmail" class="f_text" value="<?php echo ($userInfo["useremail"]); ?>"/></div>
					</div>
					<div class="r_form">
						<div class="f_left">身份：</div>
						<div class="f_right">
							<select onselect="checktxt()" name="zhiwei" id="zhiwei" onchange="selecttxt()">
                                        <option value="0">请选择职位</option>
                                        <option value="peo">校外人士</option>
                                        <option value="stu">在校学生</option>
                                  </select>
						</div>
					</div>
					<div class="r_form">
						<div class="f_left">身份证明：</div>
						<div class="f_right">
							<img src="/share/Public/Home/image/index/user.png" weight="50px" height="50px" />
							<input type="file" name="" value="选择图片" placeholder="" class="f_touxiang" />
						</div>
					</div>
					<div class="r_form" style="height: 90px;">
						<div class="f_left">个人简介：</div>
						<div class="f_right">
							<textarea id="content" placeholder="说点什么.." name="Resume" value="" style="color:black;"><?php echo ($userInfo["userintro"]); ?></textarea>
						</div>
					</div>
				</div>



				<div class="r_1" id="box3" style="display:none;margin-top:0">
					<div class="r_title">
						<h style="color:#e52938;padding-top:4%;margin-left:3%;">通知</h>
					</div>
					<div id="notices">
						<ul>
							<li>
								<div class="NameTime">
									<span class="MesName">管理员</span>
									<span class="MesTime">2016-05-01</span>
								</div>
								<div class="content">
									珍惜过往，记录点滴，试着用照片去讲述属于你的2015故事， 让影像伴随你生活的每一天。新版咔嚓日记值此圣诞前夕，珍惜过往，记录点滴.
								</div>
							</li>
							<li>
								<div class="NameTime">
									<span class="MesName">管理员</span>
									<span class="MesTime">2016-05-01</span>
								</div>
								<div class="content">
									珍惜过往，去讲述属于你的20去讲述属于你的20去讲述属于你的20去讲述属于你的20，去讲述属于你于你于你的20， 让影像伴随你生活的每一天。新版咔嚓日记值此圣诞前夕，珍惜过往，记录点滴.
								</div>
							</li>
							<li>
								<div class="NameTime">
									<span class="MesName">管理员</span>
									<span class="MesTime">2016-05-01</span>
								</div>
								<div class="content">
									珍惜过往，记录点滴，试着用照片去讲述属于你的2015故事， 让影像伴随你生活的每一天。新版咔嚓日记值此圣诞前夕，珍惜过往，记录点滴.
								</div>
							</li>
							<li>
								<div class="NameTime">
									<span class="MesName">管理员</span>
									<span class="MesTime">2016-05-01</span>
								</div>
								<div class="content">
									珍惜过往，去讲述属于你的20去讲述属于你的20去讲述属于你的20去讲述属于你的20，去讲述属于你于你于你的20， 让影像伴随你生活的每一天。新版咔嚓日记值此圣诞前夕，珍惜过往，记录点滴.
								</div>
							</li>
						</ul>
					</div>

				</div>


			</div>
			</form>
		</div>

		<script>
			window.onload = function(){
					document.getElementById('s_save').onclick=function(){
					document.getElementById('form123').submit();
				};
			}
		</script>


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