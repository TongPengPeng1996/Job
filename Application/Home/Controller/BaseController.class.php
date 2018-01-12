<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {

	/**
	 * 继承构造
	 */
    public function __construct()
    {
        // 构造验证用户
        parent::__construct();
    	
    }
    /*用于安全的url传输 
     */
    protected function strToHex($string)   
    {   
      $hex="";   
      for   ($i=0;$i<strlen($string);$i++)   
      $hex.=dechex(ord($string[$i]));   
      $hex=strtoupper($hex);   
      return   $hex;   
   	}
   
   /**
    * [hexToStr 将16进制转为字符串]
    * @param  [type] $hex [十六进制]
    * @return [type]      [字符串]
    * 用于安全的url传输
    */
   	protected function hexToStr($hex)   
   	{   
      $string="";   
      for   ($i=0;$i<strlen($hex)-1;$i+=2)   
      $string.=chr(hexdec($hex[$i].$hex[$i+1]));   
      return   $string;   
    }

    public function test()
    {
    	$a = '1/1/1/2';
	    $b = strToHex($a);
	    print_r($b);
	    echo "\r\n";
	    $c = hexToStr($b);
	    print_r($c);
    }
}