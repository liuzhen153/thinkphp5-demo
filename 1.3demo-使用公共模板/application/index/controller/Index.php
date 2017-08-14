<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function one()
    {
    	// 本页面只展示公共模板的应用，对应one.html
    	return view();
    }
    public function two()
    {
    	// 本页面只展示模板的应用时传入参数，对应two.html
    	return view();
    }
}
