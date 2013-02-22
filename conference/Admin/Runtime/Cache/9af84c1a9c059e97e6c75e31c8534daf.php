<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='Refresh' content='<?php echo ($waitSecond); ?>;URL=<?php echo ($jumpUrl); ?>' />
<link href="../Public/images/style.css" rel="stylesheet" type="text/css" />
<title><?php echo ($msgTitle); ?></title>
</head>
<body>
	<table border="0" align="center" cellspacing="1" class="msgbody" <?php if(isset($toolmsg)): ?>style="margin:50px auto;"<?php endif; ?>>
		<tr>
			<td class="msg-ico t_c">!</td>
			<td class="msg-con">
				<p><b><?php echo ($message); ?></b></p>
				<p><a href="<?php echo ($jumpUrl); ?>">如果你的浏览器没有跳转请点击这里</a></p>
			</td>
		</tr>
	</table>
</body>
</html>