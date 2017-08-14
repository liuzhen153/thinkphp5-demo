<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    // 使用模板布局
    public function layout()
    {
        return view();
    }
    // 使用自定义标签的模板布局
    public function one_layout()
    {
        return view();
    }
    // 使用模板布局，布局文件为'commen/new_layout'，替换标签为'[TOMMY]'
    public function two_layout()
    {
        $this->view->engine->layout('commen/new_layout','[TOMMY]');
        return view();
    }
}
