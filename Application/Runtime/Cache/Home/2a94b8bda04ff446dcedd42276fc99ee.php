<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>工具List</title>
</head>
<style type="text/css">
	ul li a {
		font-size: 20px;
		text-decoration:none;
		color:black;
	}
	ul li {
		margin-top: 10px;
	}
</style>
<body>
	<ul>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				<a href="<?php echo U($vo['url']);?>"><?php echo ($vo["name"]); ?></a>		
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
		
	</ul>
</body>
</html>