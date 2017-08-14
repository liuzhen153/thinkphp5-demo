<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    // 普通查询
    public function index()
    {
        $result = Db::query('select * from tp5_user where id = 1');
        dump($result);
    }
    // 参数绑定,实际开发中，可能某些数据使用的是外部传入的变量，为了让查询操作更加安全，我们建议使用参数绑定机制，例如上面的操作可以改为：
    public function one()
    {
        $id = 1;
        $result = Db::query('select * from tp5_user where id = ?',[$id]);
        dump($result);
    }
    // 如果传入更多变量，请用?代替，并在后面传值时顺序传入
    public function two()
    {
        $id = 1;
        $result = Db::query('select * from tp5_user where id = ? || name = ?',[$id,'Tom']);
        dump($result);
    }

    // 使用查询构造器
    public function three()
    {
        $result = Db::table('tp5_user')
            ->where('id' , 1)
            ->select();
        dump($result);
    }
    // 使用db助手函数
    public function four()
    {
        $result = db('tp5_user')->where('id' , 1)->select();
        dump($result);
    }
}
