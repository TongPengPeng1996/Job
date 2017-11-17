<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>发送手机短信</title>
</head>
<body>
	<form action="<?php echo U('Aldy/sendPhone');?>" method="post">
		<input type="text" name="phone" placeholder="请填写手机号">
		<input type="submit" value="发送">
	</form>
	<a href="<?php echo U('Index/index');?>" style="font-size: 20px;">返回</a>
</body>
</html>