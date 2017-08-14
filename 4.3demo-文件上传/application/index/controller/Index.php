<?php
namespace app\index\controller;
// 文件上传demo
class Index
{
    // 文件上传视图
    public function index()
    {
      return view();
    }
    // 文件上传，不带验证规则
    public function single_upload()
    {
        $file = request()->file('img');
        // dump($file);exit;
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        // 上面的move方法返回的是上述对象中的info值，具体如下
        if($info){
            // 成功上传后 获取上传信息
            echo $info->getExtension();// 输出后缀名，如：png
            echo $info->getSaveName();// 输出保存的路径名称，如： 20170619/409320d8af726bbbd5b512357d591ab7.png
            echo $info->getFilename();// 输出文件保存的名字，如： 409320d8af726bbbd5b512357d591ab7.png
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }
    // 文件上传，指定文件类型为jpg或gif格式视图
    public function jpg()
    {
      return view();
    }
    // 文件上传，指定文件类型为jpg或gif格式
    public function only_jpg()
    {
        $file = request()->file('img');
        // 用Controller类的validate方法指定过滤
        $info = $file->validate(['ext'=>'jpg,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
        // 还可以指定文件大小 'size'=>15678
        if($info){
            // 成功上传后 获取上传信息
            echo 'success';
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }

}
