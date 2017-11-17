<?php
namespace Home\Controller;
use Think\Controller;
use OSS\OssClient;
use OSS\Core\OssException;

/*
	OSS
 */
class OssController extends BaseController {

	/**
     * 功能描述:展示首页
     * 作者:俠名
     * 日期：2017-11-17
     */
    public function index()
    {
    	$this->display();  
    }
    /**
     * 功能描述:接收图片内容
     * 作者:俠名
     * 日期：2017-11-17
     * @param [file] 
     */
    public function sendFile()
    {
        $files = $_FILES['picture']['tmp_name'];
        $end=$_FILES['picture']['name'];

        $OSS_ACCESS_ID = '';
        $OSS_ACCESS_KEY = '';
        $OSS_ENDPOINT = '';
        $OSS_PATH = '';
        if (empty($OSS_ACCESS_ID) || empty($OSS_ACCESS_KEY) || empty($OSS_ENDPOINT) || empty($OSS_PATH) ) {
            $this->error('请自主设置配置项');
        }
        $oss = new OssClient($OSS_ACCESS_ID, $OSS_ACCESS_KEY, $OSS_ENDPOINT);

        $filename = $OSS_PATH . 'video/' . time().$end;
        try {
            $oss->uploadFile(C('OSS_BUCKET'), $filename, $files);
        } catch (OssException $e) {
            $this->error('上传失败');
        }
        $this->success('上传成功');
    }
}