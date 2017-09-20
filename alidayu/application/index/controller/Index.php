<?php
namespace app\index\controller;
use alidayu\Sms;

// 使用阿里大于短信服务实例
class Index
{
	protected $accessKeyId = '';  //这里填你自己的accessKeyId
	protected $accessKeySecret = ''; //这里填你自己的accessKeySecret
	protected $region = ''; // 短信模板编号

    public function index($tel = '13163317827')
    {
		// 生成验证码
		$code = mt_rand(1000,9999);
		// 实例化短信发送类
		$sms = new Sms(
		  $this->accessKeyId,
		  $this->accessKeySecret
		);
		// 发送短信
		$response = $sms->sendSms(
		  "存包柜预约", 			// 短信签名
		  $this->region, 		// 短信模板编号
		  $tel,					 // 短信接收者
		 [ "code"=>$code  ]				// 短信模板中字段的值
		);
		// 判断发送结果
		if ($response) {
			echo '发送成功！';
		}
    }

}
