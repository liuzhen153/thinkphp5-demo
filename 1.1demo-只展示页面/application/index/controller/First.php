<?php
namespace app\index\controller;
// 使用并继承think\Controller类
use think\Controller;

class First extends Controller
{
    //不传参数的$this->fetch();
    //这个方法将加载application/index/view/first/one.html
    public function one()
    {
    	return $this->fetch();
    }
}
