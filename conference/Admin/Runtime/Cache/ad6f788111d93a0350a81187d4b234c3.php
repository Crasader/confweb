<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
table.info
{
}
</style>
<script language="javascript">
function check(){
	var iter = document.getElementsByName("chinesename")
	var i = iter[0].value
	if(i == "")
	{
		alert("中文名不能为空！")
		return false
	}
	iter = document.getElementsByName("englishname")
	i = iter[0].value
	if(i == "")
	{
		alert("英文名不能为空！")
		return false
	}
	iter = document.getElementsByName("introduction")
	i = iter[0].value
	if(i == "")
	{
		alert("简介不能为空！")
		return false
	}
	iter = document.getElementsByName("rank")
	i = iter[0].value
	if(isNaN(i))
	{
		alert("排名必须为数字！")
		return false
	}
	return true
}
</script>
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
<script type="text/javascript" src="__ROOT__/Public/Js/personreview.js"></script>
<div class="cbody b-box blank10">
	<ul class="sidebar f_l">
	<?php if($menu == 'Index'): ?><li><a href="__APP__/Index" class="home-link">管理首页</a></li>
	<?php else: ?>
	<li><a href="__APP__/Index">管理首页</a></li><?php endif; ?>
	
	<?php if($menu == 'Home'): ?><li><a href="__APP__/Home" class="home-link">首页管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Home">首页管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Committee'): ?><li><a href="__APP__/Allcommittee" class="home-link">委员会管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Allcommittee">委员会管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Speaker'): ?><li><a href="__APP__/InvitedSpeaker" class="home-link">演讲者管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/InvitedSpeaker">演讲者管理</a></li><?php endif; ?>	
	
	<?php if($menu == 'Agenda'): ?><li><a href="__APP__/Agenda" class="home-link">会议流程管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Agenda">会议流程管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Venue'): ?><li><a href="__APP__/Venue" class="home-link">会议地点管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Venue">会议地点管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Accomondation'): ?><li><a href="__APP__/Accomondation" class="home-link">住宿管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Accomondation">住宿管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Registrant'): ?><li><a href="__APP__/Registrant" class="home-link">会员管理</a></li>
	<?php else: ?>
	<li><a href="__APP__/Registrant">会员管理</a></li><?php endif; ?>
	
	<?php if($menu == 'Toolbox'): ?><li><a href="__APP__/Toolbox" class="home-link">网站设置</a></li>
	<?php else: ?>
	<li><a href="__APP__/Toolbox">网站设置</a></li><?php endif; ?>
	
	<?php if($menu == 'Setting'): ?><li><a href="__APP__/Setting" class="home-link">系统设置</a></li>
	<?php else: ?>
	<li><a href="__APP__/Setting">系统设置</a></li><?php endif; ?>
</ul>

	<div class="b-area-w f_r">
	<?php switch($dsp): ?><?php case "detail":  ?><h4><a href="__APP__/Members">委员会管理</a>>><?php echo ($typename); ?>委员会<a href="__URL__/"></a>>><?php echo ($title); ?></h4>
			<form name="memberform" method="post" enctype="multipart/form-data" action="__URL__/<?php echo ($action); ?>">
			<table>
			<tr><th>中文名</th><td><input type="text" name="chinesename" value="<?php echo ($person["chinesename"]); ?>" /></td></tr>
			<tr><th>英文名</th><td><input type="text" name="englishname" value="<?php echo ($person["englishname"]); ?>" /></td></tr>
			<tr><th>简介</th><td><input type="text" name="introduction" value="<?php echo ($person["introduction"]); ?>" /></td></tr>
			<tr><th>排名</th><td><input type="text" name="rank" value="<?php echo ($person["rank"]); ?>" />
			<input type="hidden" name="type" value="<?php echo ($type); ?>"><input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>"></td></tr>
			</table>
			<div align="center"><input type="submit" value="提交" class="input-btn-b" onclick="return check()"/></div>
		</form><?php break;?>
		
		<?php default: ?>
		<h4><a href="__APP__/Members">委员会管理</a>>><?php echo ($typename); ?>委员会</h4>
				<div>
			<a href="__URL__/add/type/<?php echo ($type); ?>"><div class="b-btn f_l blank5_r">添加/发布</div></a>
			<!--
			<form name="search" method="post" action="__URL__" class="search f_l">
				<input type="text" name="keyword" value="<?php echo ($keyword); ?>" class="search-input p_n m_n" />
				<input type="submit" value="搜索" class="search-btn p_n m_n" />
			</form>
			-->
			<div class="clear"></div>
		</div>
		<form name="memberform" method="post" action="__URL__/batch">
		<table width="100%" border="0" cellspacing="1" class="tb-a blank5">
			<tr>
				<th width="20"><input name="checkbox" type="checkbox" class="input-cb" onClick="selAll(this)" /></th>
				<th width="150">ID</th>
				<th>姓名</th>
				<th width="240">操作</th>
			</tr>
			<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): ++$i;$mod = ($i % 2 )?><tr>
				<td><input name="id[]" type="checkbox" id="id[]" value="<?php echo ($u["id"]); ?>" class="input-cb" /></td>
				<td id=<?php echo ($u["id"]); ?>><?php echo ($u["id"]); ?></td>
				<td><?php echo ($u["englishname"]); ?>(<?php echo ($u["chinesename"]); ?>)</td>
				<script language="javascript">
					function confirmDel(value) {
						var items=value.split("/");
						var newsid=items[items.length-1];
						var title=document.getElementById(newsid).innerText;
						if (!confirm("确认要删除记录:"+title)) {
							window.event.returnValue = false;
						}
					}
				</script>
				<td><a href="__URL__/edit/id/<?php echo ($u["id"]); ?>">编辑</a>  <a href="__URL__/batch/act/delete/id/<?php echo ($u["id"]); ?>" onClick="confirmDel(this.href)">删除</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			<tr>
				<td colspan="6" align="left">
					<input name="act" type="radio" value="delete" />删除
					<input type="submit" value="提交" class="input-btn-c" />
				</td>
			</tr>
		</table>
		</form><?php endswitch;?>
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