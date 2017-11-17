<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>OSS</title>
</head>
<body>
	<form action="<?php echo U('Oss/sendFile');?>" method="post" enctype="multipart/form-data">
		<input type="file" name="picture">
		<input type="submit" value="发送">
	</form>
	<a href="<?php echo U('Index/index');?>" style="font-size: 20px;">返回</a>
</body>
</html>