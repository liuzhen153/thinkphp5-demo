<?php
namespace app\index\controller;
// 使用并继承think\Controller类
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    //不传参数的$this->fetch();
    //这个方法将加载application/index/view/index/fetchnothing.html
    public function fetchNothing()
    {
    	return $this->fetch();
    }

    /*带参数，系统会按照规则来定位模板文件，其规则是： 
    模块/默认视图目录/控制器（小写）/操作（小写）.html*/
    // 只带一个参数，模板地址为：application/index/view/index/something.html
    public function fetchThis()
    {
        return $this->fetch('something');
    }
    // 带两个参数，模板地址为：application/index/view/first/one.html
    public function fetchOne()
    {
        return $this->fetch('first/one');
    }
    /*带三个参数，fetch([模块@][控制器/][操作]);
    模板地址为：application/login/view/index/login.html*/
    public function fetchMore()
    {
        return $this->fetch('login@index/login');
    }
    // 使用助手函数，用法同fetch
    public function viewOne(){
        return view('first/one');
    }
}
