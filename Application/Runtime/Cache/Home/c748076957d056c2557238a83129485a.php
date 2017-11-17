<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>图片验证码</title>
</head>
<body>
	<form action="<?php echo U('Verify/sendVerify');?>" method="post">
		 <img src="<?php echo U('Verify/selfVerify');?>" alt="captcha" title="验证码" height="48" width="125" id="img_verify" onclick="this.src=this.src+'?'+Math.random()" >
		<input type="text" name="code" placeholder="请填写验证码">
		<input type="submit" value="发送">
	</form>
	<a href="<?php echo U('Index/index');?>" style="font-size: 20px;">返回</a>
</body>
</html>