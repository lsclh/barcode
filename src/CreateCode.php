<?php
// +----------------------------------------------------------------------
// | Created by PhpStorm.©️
// +----------------------------------------------------------------------
// | User: 程立弘©️
// +----------------------------------------------------------------------
// | Date: 2019-03-03 12:09
// +----------------------------------------------------------------------
// | Author: 程立弘 <1019759208@qq.com>©️
// +----------------------------------------------------------------------

namespace Lsclh\Barcode;
use EasySwoole\http\Response;

/**
 * 二维码使用入口
 * Class CreateCode
 * @package Utility\Code\Barcode
 */
class CreateCode
{
    /**
     * 创建条形码
     * @param $data 条形码内的数据
     * @param Response $response EASYSWOOLE Response对象
     * @param null $filename 需要保存时 保存的文件名 不传则返回图片流
     * @return bool
     */
    public function createCode($data,Response $response,$filename = null){
        $code =  (new Pwd(10))->encode($data);
        return (new Barcode($code))->draw($filename,$response);
    }

    /**
     * 读取二维码
     */
    public function readCode($data){
        return (new Pwd(10))->decode($data);
    }
}