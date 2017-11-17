<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>发送邮件</title>
</head>
<body>
	<form action="<?php echo U('Email/sendMail');?>" method="post">
		<input type="email" name="email" placeholder="请填写邮箱">
		<input type="submit" value="发送">
	</form>
	<a href="<?php echo U('Index/index');?>" style="font-size: 20px;">返回</a>
</body>
</html>