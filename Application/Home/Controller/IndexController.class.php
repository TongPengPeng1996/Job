<?php
namespace Home\Controller;
use Think\Controller;
/*
	listFuntion
 */
class IndexController extends BaseController {

	/**
     * 功能描述:展示首页
     * 作者:俠名
     * 日期：2017-11-17
     */
    public function index()
    {
    	$list = array(
    		array(
    			'name' => '发送邮件',
    			'url' => 'Email/index'
    		),
    		array(
    			'name'=>'发送短信',
    			'url' => 'Aldy/index'
    		),
    		array(
    			'name'=>'图片验证码',
    			'url' => 'Verify/index'
    		),
    		array(
    			'name'=>'OSS上传图片',
    			'url' => 'Oss/index'
    		),
    		array(
    			'name'=>'Git',
    			'url' => 'Git/index'
    		),
    		array(
    			'name'=>'高德围栏',
    			'url' => 'Gaode/index'
    		)
    	);
    	$this->assign('list',$list);
    	$this->display();  
    }
}