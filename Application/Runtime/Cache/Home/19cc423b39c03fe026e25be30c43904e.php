<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
  <link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>

<body>
  <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
  poster="MY_VIDEO_POSTER.jpg" data-setup="{}" src="http://gslb.miaopai.com/stream/t~gB32Ha~0TyT3~Uju8bqQ__.mp4?ssig=a0aa3fb5eff88f48f125e0e6417da52a&time_stamp=1493374830250&cookie_id=&vend=1&os=3&partner=4&platform=2&cookie_id=&refer=miaopai&scid=t%7EgB32Ha%7E0TyT3%7EUju8bqQ__">
    <source src="http://gslb.miaopai.com/stream/t~gB32Ha~0TyT3~Uju8bqQ__.mp4?ssig=a0aa3fb5eff88f48f125e0e6417da52a&time_stamp=1493374830250&cookie_id=&vend=1&os=3&partner=4&platform=2&cookie_id=&refer=miaopai&scid=t%7EgB32Ha%7E0TyT3%7EUju8bqQ__" type='video/mp4' id="videoplay">
    <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>
<a href="javascript:cca()">asaasd</a>
<a href="<?php echo U('Index/index');?>">返回</a>
  <script src="http://vjs.zencdn.net/5.8.8/video.js"></script>
  <script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript">
  		var video = $('#my-video')[0];
  		var a = video.currentTime = 40;
  		// video.currentTime; 播放时间 起始位置 当前播放位置   video.currentTime = 20; 在第几秒开始播放
  		// video.preload;   图片 false	:不显示  true 显示
  		// video.controls; 播放按钮  false:不显示  true 显示
  		// video.volume 0：静音 1：开启声音
  		// video.poster 图片路径
  		// video.play 开始 次数获取 
  		// video.pause 暂停 次数获取 
  		// video.paused  验证是否开始 暂停 true == 暂停
   		// console.log(video);


		var video2 = $('#my-video')[0];
        console.log(video.currentTime);

   		// setTimeout(function(){
   			
   			// video2.src =  'http://cloud.video.taobao.com/play/u/262359412/p/1/e/6/t/1/42947575.mp4';
   		// 	console.log(video2.src);
   		// },2000)
   		
   		// console.log(video2.src);

   		function cca(){
        console.log(video);
        console.log(video.currentTime);
        video.pause();

      
   		}
      // setTimeout(cca,3000);


        function demo(){
          if (document.exitFullscreen) {

            document.exitFullscreen();

          }
        }


         function exitFullscreen() {
             var de = document;
             if (de.exitFullscreen) {
                 de.exitFullscreen();
             } else if (de.mozCancelFullScreen) {
                 de.mozCancelFullScreen();
             } else if (de.webkitCancelFullScreen) {
                 de.webkitCancelFullScreen();
             }
         }
      // setTimeout(exitFullscreen,8000);


  //  window.onbeforeunload=function (event){
  //   // alert("===onbeforeunload===");
  //   console.log('===onbeforeunload===');
  //     console.log(event);
  //     console.log(document.body.clientWidth);
  //   if(event.clientX>document.body.clientWidth && event.clientY < 0 || event.altKey){
  //     // alert("你关闭了浏览器");
  //     console.log("你关闭了浏览器");
  //   }else{
  //     // alert("你正在刷新页面");
  //     console.log("你正在刷新页面");

  //   }
  //   return '123123';
  // }
// $(window).bind('beforeunload', function(event){
//     // 只有在标识变量is_confirm不为false时，才弹出确认提示
    
//     console.log((event || window.event));
//     if(window.is_confirm !== false){     
//            return '您可能有数据没有保存';
//     }
// });

// window.open(' ', '_self', '');
// window.close();
// window.parent.close(); 
function keyDown(e){ 
 var keycode = 115;
 //IE浏览器
 if(CheckBrowserIsIE()){
  keycode = event.keyCode;
 }else{
 //火狐浏览器
 keycode = e.which;
 // console.log(keycode);
 }
 if (keycode == 13 ) //回车键是13
 {
  //document.getElementById("login").click();
  document.getElementById("loginform").submit();
 }
}
function keyDown2(e){ 
 var keycode = 17;
 //IE浏览器
 if(CheckBrowserIsIE()){
  keycode = event.keyCode;
 }else{
 //火狐浏览器
 keycode = e.which;
 }
 if (keycode == 13 ) //回车键是13
 {
  //document.getElementById("login").click();
  document.getElementById("loginform").submit();
 }
}
//判断访问者的浏览器是否是IE
function CheckBrowserIsIE(){
 var result = false;
 var browser = navigator.appName;
 if(browser == "Microsoft Internet Explorer"){
  result = true;
 }
 return result;
}

// F4:115  ctrl:17
var a = CheckBrowserIsIE();
// console.log(a);
// keyDown(window);
// keyDown2();
$(document).ready(function(){
  $(window).keydown(function(e){
    console.log(e.keyCode);
      if(e.keyCode==83&&e.ctrlKey){
            e.preventDefault();
            alert("按下了ctrl+S`````");
      }
  });
  var e = jQuery.Event("keydown");
  e.keyCode=83,e.ctrlKey=true;
  $("button").click(function(){
    $(window).trigger(e);
  });
});


  </script>

  <script>  

var locator = new ActiveXObject ("WbemScripting.SWbemLocator");   
var service = locator.ConnectServer(".");  
console.log(locator);
   
  
//获取浏览器相关信息  
function allinfo(){  
    var userLanguage = navigator.userLanguage;     // 用户在自己的操作系统上设置的语言（火狐没有）  
    var userAgent = navigator.userAgent;   //包含以下属性中所有或一部分的字符串：appCodeName,appName,appVersion,language,platform  
    var systemLanguage = navigator.systemLanguage;    // 用户操作系统支持的默认语言（火狐没有）  
  
  
  
    info+="浏览器属性信息： "+userAgent+"<br />";  
    info+="用户设置的操作系统语言： "+userLanguage+"<br />";  
    info+="操作系统支持的默认语言： "+systemLanguage+"<br />";  
    return info;  
}  
  
/******************************************以上为浏览器信息，以下为pc信息************************************************/  
  
  
function cpuInfo()    
}
</script>
</body>
</html>