<?php if (!defined('THINK_PATH')) exit();?><html>
<image src="__PUBLIC__/logo.jpg" />
<style type="text/css">
body,ul,li{margin:0;padding:0;}
li{ list-style:none;}
.daohang{width:150px;margin:0 auto;}
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
<title><?php echo ($type); ?>委员会</title>
<table border="1">
<?php if(is_array($people)): $i = 0; $__LIST__ = $people;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr><td><?php echo ($vo["englishname"]); ?>(<?php echo ($vo["chinesename"]); ?>)</td><td><?php echo ($vo["introduction"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div>
地址：<?php echo ($address); ?><br/>
电话：<?php echo ($phone1); ?>,<?php echo ($phone2); ?>,<?php echo ($phone3); ?><br/>
传真：<?php echo ($fax); ?>
</div>
</html>