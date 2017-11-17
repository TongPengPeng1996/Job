<?php
namespace Home\Controller;
use Think\Controller;
/*
	高德地图围栏
 */
class GaodeController extends BaseController {

	/**
     * 功能描述:电子围栏
     * 作者:俠名
     * 日期：2017-11-17
     */
    public function index()
    {
    	$this->display();  
    }

    /**
     * 功能描述:路线图
     * 作者:俠名
     * 日期：2017-11-17
     */
    public function route()
    {
        $this->display();  
    }
}