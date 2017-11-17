<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">

<head>
    <!-- 原始地址：//webapi.amap.com/ui/1.0/ui/misc/PathSimplifier/examples/simple-demo.html -->
    <base href="//webapi.amap.com/ui/1.0/ui/misc/PathSimplifier/examples/" />
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>简单路径</title>
    <style>
    html,
    body,
    #container {
        width: 100%;
        height: 100%;
        margin: 0px;
    }
    </style>
</head>

<body>
    <div id="container"></div>
    <script type="text/javascript" src='//webapi.amap.com/maps?v=1.4.0&key=您申请的key值'></script>
    <!-- UI组件库 1.0 -->
    <script src="//webapi.amap.com/ui/1.0/main.js?v=1.0.11"></script>
    <script type="text/javascript">
    //创建地图
    var map = new AMap.Map('container', {
        zoom: 4
    });

    AMapUI.load(['ui/misc/PathSimplifier', 'lib/$'], function(PathSimplifier, $) {

        if (!PathSimplifier.supportCanvas) {
            alert('当前环境不支持 Canvas！');
            return;
        }

        var pathSimplifierIns = new PathSimplifier({
            zIndex: 100,
            //autoSetFitView:false,
            map: map, //所属的地图实例

            getPath: function(pathData, pathIndex) {

                return pathData.path;
            },
            getHoverTitle: function(pathData, pathIndex, pointIndex) {

                if (pointIndex >= 0) {
                    //point 
                    return pathData.name + '，点：' + pointIndex + '/' + pathData.path.length;
                }

                return pathData.name + '，点数量' + pathData.path.length;
            },
            renderOptions: {

                renderAllPointsIfNumberBelow: 100 //绘制路线节点，如不需要可设置为-1
            }
        });

        window.pathSimplifierIns = pathSimplifierIns;

        //设置数据
        pathSimplifierIns.setData([{
            name: '路线0',
            path: [
                // [116.41, 39.90],
                // [113.96, 40.55],
                // [111.48, 41.14],
                // [108.95, 41.67],
                // [106.38, 42.15],
                // [103.77, 42.57],
                // [101.14, 42.93],
                // [98.47, 43.23],
                // [95.78, 43.47],
                // [93.07, 43.64],
                // [90.35, 43.75],
                // [87.62, 43.79]
                [115.6904983520508,37.7482337951660],
                [115.6952133178711,37.7475471496582],
                [115.6907119750977,37.7892494201660],
                [115.6420516967773,37.8029060363770],   
                [115.6196060180664,37.7563972473145],
                [115.6737518310547,37.7475471496582],
                [115.6734085083008,37.7501983642578]
            ]


        }]);

        //对第一条线路（即索引 0）创建一个巡航器
        var navg1 = pathSimplifierIns.createPathNavigator(0, {
            loop: true, //循环播放
            speed: 10000 //巡航速度，单位千米/小时
        });

        navg1.start();
    });
    </script>
</body>

</html>