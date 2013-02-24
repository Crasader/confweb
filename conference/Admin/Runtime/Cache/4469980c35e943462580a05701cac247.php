<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DCD后台管理系统</title>
<link href="../Public/images/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="__ROOT__/Public/Css/linktips.css" type="text/css" />
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.js"></script>
<script type="text/javascript" src="../Public/js/common.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/common.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/linktips.js"></script>
</head>
<body>
<div class="b-div">
	<div class="header b-box">
		<a href="__APP__"><div class="logo f_l"></div></a>
		<div class="userinfo f_r"><?php if(Session::get(C('USER_AUTH_KEY')) != ''): ?>欢迎回来！ <?php echo ($_SESSION['admin']); ?> | <a href="__APP__/Toolbox/modify">修改帐户信息</a> | <a href="__ROOT__/index.php" target="_blank">网站主页</a> | <a href="__APP__/Public/logout">注销登陆</a><?php else: ?><a href="__ROOT__/index.php" target="_blank">网站主页</a><?php endif; ?></div>
	</div>
</div>
<div class="cbody b-box blank10">
	<ul class="sidebar f_l">
	<?php if($menu == 'Index'): ?><li><a href="__APP__/Index" class="home-link">管理首页</a></li>
	<?php else: ?>
	<li><a href="__APP__/Index">管理首页</a></li><?php endif; ?>
	
	<?php if($menu == 'Members'): ?><li><a href="__APP__/Members" class="home-link">首页管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Members">首页管理</a></li><?php endif; ?>
	
	<?php if($menu == 'News'): ?><li><a href="__APP__/News" class="home-link">委员会管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/News">委员会管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Products'): ?><li><a href="__APP__/Products" class="home-link">演讲者管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Products">演讲者管理</a></li><?php endif; ?>	
	
	<?php if($menu == 'Pages'): ?><li><a href="__APP__/Pages" class="home-link">会议流程管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Pages">会议流程管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Pages'): ?><li><a href="__APP__/Pages" class="home-link">会议地点管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Pages">会议地点管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Pages'): ?><li><a href="__APP__/Pages" class="home-link">住宿管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Pages">住宿管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Pages'): ?><li><a href="__APP__/Pages" class="home-link">会员管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Pages">会员管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Toolbox'): ?><li><a href="__APP__/Toolbox" class="home-link">网站设置</a></li>
	<?php else: ?>
	<li><a href="__APP__/Toolbox">网站设置</a></li><?php endif; ?>
	
	<?php if($menu == 'Setting'): ?><li><a href="__APP__/Setting" class="home-link">系统设置</a></li>
	<?php else: ?>
	<li><a href="__APP__/Setting">系统设置</a></li><?php endif; ?>
</ul>

	<div class="b-area-w f_r">
		<h4>主页内容编辑</h4>
		<form name="pagesform" method="post" action="__URL__/edits">
		<table border="0" cellspacing="1" class="tb-b">
			<tr>
				<th>标题</th>
				<td><input type="text" name="title" value="<?php echo ($title); ?>" class="input-long" /></td>
			</tr>
			<tr>
				<th>内容</th>
				<td><!-- 编辑器调用开始 --><script type="text/javascript" src="__ROOT__/Public/Js/FCKeditor/fckeditor.js"></script><textarea id="editor" name="content"><?php echo ($content); ?></textarea><script type="text/javascript"> var oFCKeditor = new FCKeditor( "editor","100%","520px" ) ; oFCKeditor.BasePath = "__ROOT__/Public/Js/FCKeditor/" ; oFCKeditor.ReplaceTextarea() ;function resetEditor(){setContents("editor",document.getElementById("editor").value)}; function saveEditor(){document.getElementById("editor").value = getContents("editor");} function InsertHTML(html){ var oEditor = FCKeditorAPI.GetInstance("editor") ;if (oEditor.EditMode == FCK_EDITMODE_WYSIWYG ){oEditor.InsertHtml(html) ;}else	alert( "FCK必须处于WYSIWYG模式!" ) ;}</script> <!-- 编辑器调用结束 --></td>
			</tr>
		</table>
		<div align="center"><input type="submit" value="提交" class="input-btn-b" onclick="return validate_form()"/></div>
		</form>
	</div>
	<div class="clear"></div>
</div>
<div class="b-div">
	<div class="footer b-box blank10">
		<p>Copyright © 2012       Digital Media Computing & Design Lab</p>
	</div>
</div>
</body>
</html>