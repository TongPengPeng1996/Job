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
}