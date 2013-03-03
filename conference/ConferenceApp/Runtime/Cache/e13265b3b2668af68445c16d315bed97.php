<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主页</title>
<link href="../Public/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="../Public/sidebar.css" rel="stylesheet" type="text/css" />
</head>
<body>
<link href="../Public/templatemo_style.css" rel="stylesheet" type="text/css" />

<div id="templatemo_header_wrapper">
  <div id="templatemo_header">
    <div id="site_logo"></div>

	</div>
  <!-- end of header -->
</div>
<div class="daohang">
   <div class="daohang_in">
    <ul>
	<?php if($menu == 'Home'): ?><li><a href="__ROOT__/index.php" class="current">首页</a></li>
	 <?php else: ?>
	  <li><a href="__ROOT__/index.php">首页</a></li><?php endif; ?>
	
	<?php if($menu == 'ScientificCommittee'): ?><li><a href="__ROOT__/index.php/committee/index/type/sci/" class="current">学术委员会</a></li>
	<?php else: ?>
	  <li><a href="__ROOT__/index.php/committee/index/type/sci/">学术委员会</a></li><?php endif; ?>
		
	<?php if($menu == 'ExecutiveCommittee'): ?><li><a href="__ROOT__/index.php/committee/index/type/exe/" class="current">执行委员会</a></li>
	<?php else: ?>
		<li><a href="__ROOT__/index.php/committee/index/type/exe/">执行委员会</a></li><?php endif; ?>
	
	<?php if($menu == 'OrganizingCommittee'): ?><li><a href="__ROOT__/index.php/committee/index/type/org/" class="current">组织委员会</a></li>
	<?php else: ?>
		<li><a href="__ROOT__/index.php/committee/index/type/org/">组织委员会</a></li><?php endif; ?>
	
	<?php if($menu == 'InvitedSpeaker'): ?><li><a href="__ROOT__/index.php/invitedspeaker/" class="current">邀请的演讲者</a></li>
	<?php else: ?>
		<li><a href="__ROOT__/index.php/invitedspeaker/">邀请的演讲者</a></li><?php endif; ?>
	
	<?php if($menu == 'Program'): ?><li><a href="__ROOT__/index.php/program/" class="current">会议流程</a></li>
	<?php else: ?>
		<li><a href="__ROOT__/index.php/program/">会议流程</a></li><?php endif; ?>
	
    <?php if($menu == 'Venue'): ?><li><a href="__ROOT__/index.php/venue" class="current">会议地点</a></li>
	<?php else: ?>
		<li><a href="__ROOT__/index.php/venue">会议地点</a></li><?php endif; ?>
	
	<?php if($menu == 'Accommodation'): ?><li><a href="__ROOT__/index.php/accommodation" class="current">住宿</a></li>
	<?php else: ?>
		<li><a href="__ROOT__/index.php/accommodation">住宿</a></li><?php endif; ?>
	
	<?php if($menu == 'Registration'): ?><li><a href="__ROOT__/index.php/registration" class="current">注册</a></li>
	<?php else: ?>
		<li><a href="__ROOT__/index.php/registration">注册</a></li><?php endif; ?>
    </ul>
  </div>
  <!-- end of menu -->
</div>

<title>会议地点</title>
<table border="1" bgcolor="#f5f6f5" style="margin-top:15px" bordercolor="#a8aca3">
<?php if(is_array($place)): $i = 0; $__LIST__ = $place;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr><td rowspan="3"><image src="__ROOT__/Attachments/photo/<?php echo ($vo["photo"]); ?>"></td><td><h4><?php echo ($vo["confname"]); ?>(<?php echo ($vo["time"]); ?>)</h4></td></tr>
	<tr><td><h4><?php echo ($vo["place"]); ?></h4></td></tr>
	<tr><td><h4><?php echo ($vo["note"]); ?></h4></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div id="templatemo_footer">
		<p style="text-align:center"><br>地址：<?php echo ($address); ?><br/>
			电话：<?php echo ($phone1); ?>, <?php echo ($phone2); ?>, <?php echo ($phone3); ?><br/>
			传真：<?php echo ($fax); ?></p>
</div>
</body>
</html>