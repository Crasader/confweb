<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主页</title>
<link href="../Public/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_header_wrapper">
  	<image src="__PUBLIC__/logo.jpg" />
	
  <!-- end of header -->
</div>
<style type="text/css">
body,ul,li{margin:0;padding:0;}
li{ list-style:none;}
.daohang{width:150px;margin:10px;float:left;}
.daohang_in{width:150px;float:left;}
.daohang_in ul{width:150px;float:left;}
.daohang_in li{width:150px;float:left; line-height:27px; height:27px; background:url(http://cssdh.mianfeimoban.com/uploadfile/2011/1207/20111207125442468.gif) no-repeat;margin:1px 0; display:inline;}
.daohang_in li a{ font-size:12px; color:#439800; text-decoration:none; padding-left:15px;} 
</style>
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
	
	<?php if($menu == 'Accommodation'): ?><li><a href="__ROOT__/index.php/registration" class="current">注册</a></li>
	<?php else: ?>
		<li><a href="__ROOT__/index.php/registration">注册</a></li><?php endif; ?>
    </ul>
  </div>
  <!-- end of menu -->
</div>

<script language="javascript">
function Check()
{
	var iter = document.getElementsByName("name")
	var i = iter[0].value
	if(i == "")
	{
		alert("姓名不能为空！")
		return false
	}
	iter = document.getElementsByName("email")
	i = iter[0].value
	if(i == "")
	{
		alert("邮箱不能为空！")
		return false
	}
	iter = document.getElementsByName("organization")
	i = iter[0].value
	if(i == "")
	{
		alert("学校/组织不能为空！")
		return false
	}
	iter = document.getElementsByName("address")
	i = iter[0].value
	if(i == "")
	{
		alert("地址不能为空！")
		return false
	}
	iter = document.getElementsByName("zipcode")
	i = iter[0].value
	if(i == "")
	{
		alert("邮编不能为空！")
		return false
	}	
	iter = document.getElementsByName("phone")
	i = iter[0].value
	if(i == "")
	{
		alert("电话不能为空！")
		return false
	}
	iter = document.getElementsByName("fax")
	i = iter[0].value
	if(i == "")
	{
		alert("传真不能为空！")
		return false
	}
	var p = document.getElementsByName("password")
	var pwd = p[0].value
	var p = document.getElementsByName("confirmpassword")
	var cpwd = p[0].value
	if(pwd == "")
	{
		alert("密码不能为空！")
		return false
	}
	if(pwd != cpwd)
	{
		alert("两次输入的密码不一致！")
		return false
	}
	var m = document.getElementsByName("arrmonth")
	var m1 = m[0].value
	m = document.getElementsByName("depmonth")
	var m2 = m[0].value
	var d = document.getElementsByName("arrdate")
	var d1 = d[0].value
	d = document.getElementsByName("depdate")
	var d2 = d[0].value
	var re = /^[1-9]+[0-9]*]*$/ 
	if(!re.test(m1) || !re.test(m2) || !re.test(d1) || !re.test(d2))
	{
		alert("日期必须为正整数！")
		return false
	}
	if(m1 > 12 || m1 < 1 || m2 > 12 || m2 < 1 || d1 > 31 || d1 < 1 || d2 > 31 || d2 < 1)
	{
		alert("请注意日期范围！")
		return false
	}
	if(m1 < m2 || (m1 == m2 && d1 < d2))
	{
		alert("到达日期早于出发日期！")
		return false
	}
	return true
}
</script>
<form name="reg" method="post" action="__URL__/dealreg">
<table>
<tr><td>职业</td><td>
			<select name="occupation">
				<option value="教授">教授</option>
				<option value="副教授">副教授</option>
				<option value="讲师">讲师</option>
				<option value="博士后">博士后</option>
			</select><font color="red">*</font>
			</td></tr>
<tr><td>姓名</td><td><input name="name" type="text" /><font color="red">*</font></td></tr>
<tr><td>性别</td><td><select name="gender">
				<option value="男">男</option>
				<option value="女">女</option>
			</select>
			<font color="red">*</font></td></tr>
<tr><td>密码</td><td><input name="password" type="password" /><font color="red">*</font></td></tr>
<tr><td>确认密码</td><td><input name="confirmpassword" type="password" /><font color="red">*</font></td></tr>
<tr><td>邮箱</td><td><input name="email" type="text" /><font color="red">*</font></td></tr>
<tr><td>学校/组织</td><td><input name="organization" type="text" /><font color="red">*</font></td></tr>
<tr><td>地址</td><td><input name="address" type="text" /><font color="red">*</font></td></tr>
<tr><td>邮编</td><td><input name="zipcode" type="text" /><font color="red">*</font></td></tr>
<tr><td>电话</td><td><input name="phone" type="text" /><font color="red">*</font></td></tr>
<tr><td>传真</td><td><input name="fax" type="text" /><font color="red">*</font></td></tr>
<tr><td>报告</td><td><select name="report">
				<option value="是">是</option>
				<option value="否">否</option>
			</select></td></tr>
<tr><td>到达日期</td><td><input name="arrmonth" type="text" />月<input name="arrdate" type="text" />日<font color="red">*</font></td></tr>
<tr><td>启程日期</td><td><input name="depmonth" type="text" />月<input name="depdate" type="text" />日<font color="red">*</font></td></tr>
<tr><td>预定房间</td><td><select name="book">
				<option value="是">是</option>
				<option value="否">否</option>
			</select></td></tr>
<tr><td>单人间</td><td><select name="single">
				<option value="是">是</option>
				<option value="否">否</option>
			</select></td></tr>
<tr><td>特殊要求</td><td><input name="special" type="text" /></td></tr>
<tr><td><input type="submit" value="提交" onClick="Check()" /></td><td><input type="reset" value="重置" /></td></tr>
</table>
</form>
<div id="templatemo_footer">
		<p style="text-align:center"><br><a href="__ROOT__/admin.php" >地址：<?php echo ($address); ?><br/>
			电话：<?php echo ($phone1); ?>,<?php echo ($phone2); ?>,<?php echo ($phone3); ?><br/>
			传真：<?php echo ($fax); ?></a></p>
</div>
</body>
</html>