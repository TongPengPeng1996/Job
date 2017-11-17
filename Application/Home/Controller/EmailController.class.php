<?php
namespace Home\Controller;
use Think\Controller;
/*
    发送邮件
 */
class EmailController extends BaseController {

    /**
     * 功能描述:发送邮件 展示首页
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
     * @param [email] 
     */
    public function sendMail ()
    {
        $email = I('email');
        if (empty($email) ) {
            $this->error('缺少参数');   
        }
        if (!is_email($email) ) {
            $this->error('Email非法');
        }
        $title = '找回密码';
        $key = randNum();   //公共方法
        $content = '测试发送验证码：'.$key.''; //邮件主体内容
        $from=""; //修改为你的发送邮箱 例：1111111@163.com
        if (empty($from) ) {
            $this->error('请自主设置发件人邮箱');  
        } else {
            $status = send_mail ( $title,$content,$from,$email);   //公共方法
            if ($status == 1) {
                $this->success('Email发送成功');
            } else {
                $this->error('Email发送失败');
            }    
        }
        
    }
}