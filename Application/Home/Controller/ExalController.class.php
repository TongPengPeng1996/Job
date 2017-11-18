<?php
namespace Home\Controller;
use Think\Controller;
/*
	Exal表格操作
 */
class ExalController extends BaseController {

	/**
     * 功能描述:展示首页
     * 作者:俠名
     * 日期：2017-11-18
     */
    public function index()
    {
    	$this->display();  
    }

    /**
     * 功能描述:exal导出数据
     * 作者:俠名
     * 日期：2017-11-18
     */
    public function export()
    {
        ini_set('max_execution_time', '0');
        ini_set('memory_limit', '1024M');

        $result = array(
            array(
                'name' => '姓名',
                'sex' => '男',
                'age' => '18',
                'height' => '188',
                'marriage' => 'dog',
            )
        );
        $subject="作者信息";
        $title=array('name','sex','age','height','marriage');
        exportExcel($result,$title,$subject); 
    }

    /**
     * 功能描述:exal导入数据
     * 作者:俠名
     * 日期：2017-11-18
     */
    public function import()
    {
        ini_set('max_execution_time', '0');
        ini_set('memory_limit', '1024M');

        $title = array('name','sex','age','height','marriage');
        $tableName = '表名';
        $result = importExcel($tableName,$title);
        if ($result['code'] == 'false') {
            // 没成功
            $this->error($result['msg']);
        } else {
            $this->success($result['msg']);
        }
    }
}