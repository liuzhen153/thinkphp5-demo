<?php
namespace app\index\controller;
// 使用UEditor示例
class Index
{
   
    public function index()
    {
      return view();
    }
    // 获取编辑器传过来的内容
    public function get_content()
    {
    	dump(input('content'));
    }
}
