<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    // 执行普通SQL语句，修改id为1的用户的年龄为22
    public function index()
    {
        $status = Db::execute("update tp5_user set age = 22 where id = 1");
        dump($status);
    }
    // 查看指定内容
    public function select($key,$val)
    {
        $data = Db::table('tp5_user')->where($key,$val)->select();
        dump($data);
    }
    // 参数绑定,实际开发中，可能某些数据使用的是外部传入的变量，为了让查询操作更加安全，我们建议使用参数绑定机制，例如上面的操作可以改为：
    public function one()
    {
        $status = Db::execute("update tp5_user set age = ? where id = ?" , [20,1]);
        dump($status);
        $this->select('id',1);
    }
    // 使用查询构造器进行修改，将name 改为 Joy，age改为23
    public function two()
    {   
        $data = [
            'name' => 'Joy',
            'age'  =>  23
        ];
        $status = Db::table('tp5_user')->where('id',1)->update($data);
        dump($status);
        $this->select('id',1);
    }

    // 使用db助手函数进行修改操作
    public function three()
    {   
        $data = [
            'name' => 'Jone',
            'age'  =>  20
        ];
        $status = db('tp5_user')->where('id',1)->update($data);
        dump($status);
        $this->select('id',1);
    }
    
}
