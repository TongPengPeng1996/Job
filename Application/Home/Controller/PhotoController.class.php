<?php
namespace Home\Controller;
use Think\Controller;
/*
	H5拍照
 */
class PhotoController extends BaseController {

	/**
     * 功能描述:展示首页
     * 作者:俠名
     * 日期：2017-11-17
     */
    public function index()
    {
    	$this->display();  
    }

    public function upload()
    {
        $base64 = I('url');

        $base64=str_replace('data:image/png;base64,','',$base64);
        $img = base64_decode($base64);
        $a = file_put_contents(getcwd().C('TMPL_PARSE_STRING')['__PUBLIC__'].'/test.jpg', $img);//返回的是字节数
        if ($a > 0) {
            $this->success('上传成功，到Public查看');
        } else {
            $this->error('上传失败');
        }
    }
}