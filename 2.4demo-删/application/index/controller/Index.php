<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    // 执行普通SQL语句，删除id为16的数据
    public function index()
    {
        $status = Db::execute("delete from tp5_user where id = 16");
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
        $status = Db::execute("delete from tp5_user where id = ?" , [17]);
        dump($status);
        $this->select('id',17);
    }
    // 根据主键删除id为18的数据
    public function two()
    {   
        $status = Db::table('tp5_user')->delete(18);
        dump($status);
        $this->select('id',18);
    }

    // 根据主键删除id为19,20,24的数据
    public function three()
    {   
        $status = Db::table('tp5_user')->delete([19,20,24]);
        dump($status);
        $this->select('id',19);
        $this->select('id',20);
        $this->select('id',24);
    }
    // 条件删除id为25的数据
    public function four()
    {   
        $status = Db::table('tp5_user')->where('id',25)->delete();
        dump($status);
        $this->select('id',25);
    }
    // 条件删除id在10到12之间包含边界的数据
    public function five()
    {   
        $status = Db::table('tp5_user')->where('id','>=',10)->where('id','<=',12)->delete();
        dump($status);
    }
    // db助手函数根据主键删除id为9的数据
    public function six()
    {   
        $status = db('tp5_user')->delete(9);
        dump($status);
        $this->select('id',9);
    }
    // db助手函数根据条件删除id为8的数据
    public function seven()
    {   
        $status = db('tp5_user')->where('id',8)->delete();
        dump($status);
        $this->select('id',8);
    }
    
}
