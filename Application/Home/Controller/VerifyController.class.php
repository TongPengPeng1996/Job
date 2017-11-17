<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;

/*
    图片验证码
 */
class VerifyController extends BaseController {

    /**
     * 功能描述:图片验证码 展示首页
     * 作者:俠名
     * 日期：2017-11-17
     */
    public function index()
    {
    	$this->display();  
    }

    /**
     * 功能描述:接收验证码
     * 作者:俠名
     * 日期：2017-11-17
     * @param [code] 
     */
    public function sendVerify ()
    {
        $code = I('code');
        if (empty($code) ) {
            $this->error('缺少参数');   
        }
        if ($this->checkcode($code) ) {
            $this->success('验证码正确'); 
        } else {
            $this->error('验证码不一致'); 
        }
        
    }

    /**
     * 功能描述:验证码的生成
     * 作者:俠名
     * 日期：2017-11-17
     */
    public function selfVerify()
    {
        $config = array(
            'fontSize' => 30, // 验证码字体大小
            'length' => 4,// 验证码位数
            'useNoise' => false ,// 关闭验证码复杂点
            'useCurve'=>false //关闭线条
        );
        $Verify = new Verify($config);
        $Verify->entry();
    }
    /**
     * 功能描述:验证码的验证
     * 作者:俠名
     * 日期：2017-11-17
     * @param [code] 
     */
    public function checkcode($code)
    {
        $Verify = new Verify();
        return $Verify->check($code);
    }
}