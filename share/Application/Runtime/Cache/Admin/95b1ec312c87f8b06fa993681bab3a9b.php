<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>作品分享管理后台</title>

		<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/css/common.css" type="text/css" media="screen" />
		<script type="text/javascript" src="/share/Application/Admin/View/Public/Admin/js/jquery.min.js"></script>
		<script type="text/javascript" src="/share/Application/Admin/View/Public/Admin/js/tendina.min.js"></script>
		<script type="text/javascript" src="/share/Application/Admin/View/Public/Admin/js/common.js"></script>
		<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/font-awesome/css/font-awesome.min.css">
		<script src="/share/Application/Admin/View/Public/Admin/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="/share/Application/Admin/View/Public/Admin/css/index.css" type="text/css" media="screen" />


	</head>

	<body style="overflow: auto;">
		<!--顶部-->
		<div class="top" style="position: fixed;top:0;z-index: 999;">
			<div style="float: left"><span>作品分享管理中心</span></div>
			<div id="ad_setting" class="ad_setting">
				<span style="margin-right:14px;font-size: 1.8rem;">欢迎您：<?php echo ($_SESSION['Admin']['admin']); ?></span>
				<a class="ad_setting_a" style="font-size: 1.8rem;" href="<?php echo U('User/logout');?>">注销</a>

			</div>
		</div>
		<!--顶部结束-->
		<!--菜单-->
		<div class="left-menu" style="margin-top:60px;">
			<ul id="menu">
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta" href="<?php echo U('Index/Index');?>" ><span class="glyphicon glyphicon-home"></span>欢迎</a>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-user"></span>用户管理</a>
					<ul>
						<li><a href="<?php echo U('User/UserList');?>">个人用户列表</a></li>
						<li><a href="">商家用户列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-th-list"></span>作品文章管理</a>
					<ul><li><a href="<?php echo U('Works/worksList');?>" >作品列表</a></li>
						<li><a href="<?php echo U('Works/essaysList');?>" >文章列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-comment"></span>评论管理</a>
					<ul><li><a href="#" >评论列表</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-edit"></span>口水区管理</a>
					<!--<ul><li><a href="#" >列表项</a></li>
						<li><a href="#" >列表项</a></li>
					</ul>-->
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-leaf"></span>企业管理</a>
					<ul><li><a href="#" >招聘信息列表</a></li>
						<li><a href="#" >招聘信息类型</a></li>
					</ul>
				</li>
				<li class="menu-list">
					<a style="cursor:pointer" class="firsta"><span  class="glyphicon glyphicon-warning-sign"></span>系统管理</a>
					<ul><li><a href="#" >系统通知</a></li>
						<li><a href="#" >意见反馈</a></li>
					</ul>
				</li>
			</ul>
		</div>
 <!--<script type="text/javascript" src="/share/Public/Admin/js/jquery-2.0.2.js"></script>-->
 <script type="text/javascript" src="/share/Public/Admin/ueditor/ueditor.config.js"></script>
 <script type="text/javascript" src="/share/Public/Admin/ueditor/ueditor.all.min.js"></script>
<div style="margin-left:180px;margin-top:60px;padding-bottom:50px;overflow: hidden;">
	<div class="alert alert-info" role="alert">
		<h1>作品编辑</h1>
	</div>
	<form action="<?php echo U('Works/editWorks');?>" method="post">
		<table class="table table-striped" style="">
			<tr>
				<td style="width: 200px;height:60px;line-height:60px;font-size:24px;text-align: right;">标题 :</td>
				<td style="height:60px;line-height:60px;font-size:20px;text-align: left;"><input name="title" type="text" style="height:40px;width:400px;border-radius: 4px; padding:4px;" value="<?php echo ($data["title"]); ?>"/></td>
			</tr>
			<tr>
				<td style="width: 200px;height:60px;line-height:60px;font-size:24px;text-align: right;">分类 :</td>
				<td style="height:60px;line-height:60px;font-size:20px;text-align: left;"><select name="fenlei" style="font-size:14px;height:40px;width:120px;color:#666">
                     <option value="UI">UI/UX</option>
                    <option value="PM">平面设计</option>
                    <option value="MH">漫画/插画</option>
                    <option value="WY">网页设计</option>
                    <option value="MD">3D模型</option>
                    <option value="DP">创意短片</option>
                    <option value="PT">摄影</option>
                    <option value="OTHER">其他</option>
                </select></td>
			</tr>
			<tr>
				<td style="width: 200px;height:60px;line-height:60px;font-size:24px;text-align: right;">作品内容 :</td>
				<td><script type="text/plain" id="Vent" style="width:800px;height:400px;"></script></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="hidden" name="hiddenid" value="<?php echo ($data["ariticalid"]); ?>"/><input type="submit"  class="btn btn-info" value="提交编辑"/></td>
			</tr>
		</table>
	</form>
</div>
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
    initialContent: '<?php echo (htmlspecialchars_decode($data["content"])); ?>',
    minFrameHeight: 100,//初始化框架大小
    zIndex:1,
    maximumWords:10000,
    autoFloatEnabled: true,//工具栏自动浮动-》关闭
    autoHeightEnabled: false,
    textarea:'content'//form表单将通过该参数获得表单提交的数据
  });
  editor.render("Vent");
</script>
<!--百度Ueditor注册完毕-->
</body>

</html>