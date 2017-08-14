<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    // 执行普通SQL语句，增加name为Shary，age为10的记录
    public function index()
    {
        $status = Db::execute("insert into tp5_user(name,age) values('Shary','10')");
        dump($status);
        $this->select('Shary');
    }
    // 查看有无某个名字的记录
    public function select($name = 'Tommy')
    {
        $data = Db::table('tp5_user')->where('name',$name)->select();
        dump($data);
    }
    // 参数绑定,实际开发中，可能某些数据使用的是外部传入的变量，为了让查询操作更加安全，我们建议使用参数绑定机制，例如上面的操作可以改为：
    public function one()
    {
        $name = 'Jim';
        $age = 11;
        $status = Db::execute('insert into tp5_user(name,age) values(?,?)',[$name,$age]);
        dump($status);
        $this->select($name);
    }
    // 使用查询构造器增添一条数据
    public function two()
    {   
        $data = [
            'name' => 'Litt',
            'age'  =>  23
        ];
        $status = Db::table('tp5_user')->insert($data);
        dump($status);
        $this->select($data['name']);
    }

    // 使用查询构造器增加多条数据
    public function three()
    {   
        $data = [
            ['name' => 'Danny','age'  =>  20],
            ['name' => 'Yenny','age'  =>  21],
            ['name' => 'Jey','age'  =>  22],
            ['name' => 'Joe','age'  =>  23]
        ];
        $status = Db::table('tp5_user')->insertAll($data);
        dump($status);
    }
    // 使用db助手函数添加单条
    public function four()
    {   
        $data = [
            'name' => 'M',
            'age'  =>  23
        ];
        $status = db('tp5_user')->insert($data);
        dump($status);
        $this->select($data['name']);
    }
    // 使用db助手函数添加多条
    public function five()
    {
        $data = [
            ['name' => 'D','age'  =>  20],
            ['name' => 'Y','age'  =>  21],
            ['name' => 'J','age'  =>  22],
            ['name' => 'J','age'  =>  23]
        ];
        $status = db('tp5_user')->insertAll($data);
        dump($status);
    }
}
