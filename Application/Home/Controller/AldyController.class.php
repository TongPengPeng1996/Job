<?php
namespace Home\Controller;
use Think\Controller;
/*
    阿里大鱼发送短信
 */
class AldyController extends BaseController {

    /**
     * 功能描述:发送短信 展示首页
     * 作者:俠名
     * 日期：2017-11-17
     */
    public function index()
    {
    	$this->display();  
    }

    /**
     * 功能描述:发送邮件
     * 作者:俠名
     * 日期：2017-11-17
     * @param [phone] 
     */
    public function sendPhone ()
    {
        $phone = I('phone');
        if (empty($phone) ) {
            $this->error('缺少参数');   
        }
        if (!is_phone($phone) ) {
            $this->error('手机号非法');
        }
        $code=randNum(6);;
        $res=$this->sendCode($phone,$code);
        if ($res) {
            $this->success('短信发送成功');
        } else {
            $this->error('短信发送失败');
        }
    }


    /**
       * [sendCode description]
       * @param  [type] $phone [description]
       * @param  [type] $code  [description]
       * @return [type]        [description]
       */
    protected function sendCode($phone,$code)
    {
        Vendor('aldy.TopSdk');
        $appkey = ""; //你的appkey
        $secret = '';//你的secret
        $name = '';//你的应用名称
        $sms = '';//你的模板号
        if (empty($appkey) || empty($secret) || empty($name) || empty($sms) ) {
            $this->error('请自主设置配置项'); 
        } else {
            $c = new \TopClient; 
            $c ->appkey = $appkey ;
            $c ->secretKey = $secret ;
            $req = new \AlibabaAliqinFcSmsNumSendRequest;
            $req ->setExtend( "" );
            $req ->setSmsType( "normal" );
            $req ->setSmsFreeSignName( $name ); 
            $req ->setSmsParam( "{code:'".$code."'}" );
            $req ->setRecNum( $phone );
            $req ->setSmsTemplateCode( $sms );
            $resp = $c ->execute( $req );
            $arr=$this->objectArray($resp);
            if( strtolower($arr['result']['msg']) == 'ok' && $arr['result']['success'] =='true' ){
                return true;
            }else{
                return false;
            }
        }
        
    }

    /**
     * [objectArray 递归的将对象转成数组] 
     * @param  [type] $array [description]
     * @return [type]        [description]
     */
    public function objectArray($array){
        if(is_object($array)){
            $array = (array)$array;
        }
        if(is_array($array)){
            foreach($array as $key=>$value){
                $array[$key] = $this->objectArray($value);
            }
        }
        return $array;
    }
}