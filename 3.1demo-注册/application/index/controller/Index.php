<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    // 进入注册页面
    public function index()
    {
        return view('login');
    }
    // 接收注册提交的信息
    public function signup_check()
    {
        // dump(input());
        // echo input('username');
        // dump(input('username'));
        // 接收用户名和密码，并将各个数据两边空格去掉
        $username = trim(input('username'));
        $password = trim(input('password'));
        $password1 = trim(input('password1'));
        // 判断用户名或密码的长度是否不小于6
        if (strlen($username) < 6 || strlen($password) < 6) {
          $this->error('用户名或密码长度不得小于6位！');
        }
        // 两次密码必须相同
        if ($password != $password1) {
          $this->error('两次密码输入不相同！');
        }
        // 判断用户名是否已经被注册
        $username_data = Db::name('user')->where('username',$username)->select();
        if ($username_data) {
          $this->error('该用户名已经存在，请换一个重试！');
        }
        $data = [
          'username' => $username,
          'password' => md5($password)
        ];
        $status = Db::name('user')->insert($data);
        if ($status == 1) {
          $this->success('恭喜您注册成功，现在前往登录页！','loginup');
        }else{
          $this->error('注册时出现问题，请重试或联系管理员！');
        }
    }
    // 注册成功后跳转到的登录页
    public function loginup()
    {
      echo '嗨，我是登录页！';
    }
}
