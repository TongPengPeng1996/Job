<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">	
		.gmaps {
			height: 500px;
			width: 100%
		}
	</style>
</head>
<body>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">电子围栏设置</h4>
			</div>
			<div class="modal-body">
				<div id="draw-note" class="alert alert-info" style="display: none;"><strong>提示:</strong> 点击后移动鼠标开始绘制围栏，双击或右键结束围栏绘制</div>
				<div id="edit-note" class="alert alert-info" style="display: none;"><strong>提示:</strong> 鼠标拖动顶端编辑围栏坐标, 点击清除重新绘制围栏</div>
				<div id="amap_polygons" class="gmaps"></div>
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btn-default button-clear">清除</a>
				<button type="submit" class="btn yellow-casablanca">保存</button>
			</div>
		</div>
	</div>
</body>
<script src="http://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="http://webapi.amap.com/maps?v=1.3&plugin=AMap.ToolBar,AMap.MouseTool,AMap.PolyEditor"></script>
<script src="/Public/Home/polygon.min.js"></script>
</html>