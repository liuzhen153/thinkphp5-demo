<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    // 进入登录页面
    public function index()
    {
        if (session('?userinfo')) {
            $this->success('您已经登录了，直接跳转到成功页！','is_login');
        }else{
            return view('login');
        }
    }

    // 验证登录
    public function login_check()
    {
        // 接收用户名和密码，并将各个数据两边空格去掉
        $username = trim(input('username'));
        $password = md5(trim(input('password'))); //进行md5加密
        // 判断用户名是否存在
        $data = Db::name('user')->where('username',$username)->select();
        // dump($data);exit;
        if (!$data) {
          $this->error('用户名不存在，请确认后重试！');
        }
        // 判断密码是否正确
        if ($data[0]['password'] == $password) {
            // 一般把用户信息存入session，记录登录状态
            session('userinfo',$data[0]);
            $this->success('登录成功！','is_login');
        }else{
            $this->error('用户名和密码不匹配，请确认后重试！');
        }
    }

    // 登录成功后跳转页面
    public function is_login()
    {
        $info = session('userinfo');
        // dump($info);
        echo '嗨，登录成功！' . '<br>';
        echo '用户名：' . $info['username'] . '<br>';
        echo '昵称：' . $info['nickname'] . '<br>';
        echo '密码：' . $info['password'] . '<br>';
    }
}
