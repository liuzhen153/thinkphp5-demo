<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
		return view();
    }

	// 进行验证码验证
	public function captcha_check()
	{
		return captcha_check(input('captcha')) ? $this->success('验证码正确！') : $this->error('验证码错误！');
	}
}
