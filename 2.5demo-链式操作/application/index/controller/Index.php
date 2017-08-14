<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    // 链式操作查询三条`id`不小于1的数据的名字
    public function index()
    {
        $data = Db::table('tp5_user')
            ->where('id','>=',1)
            ->field('name')
            ->limit(3)
            ->select();
        dump($data);
    }
    // 查询`id`为1的数据，只查询其`name`和`age`
    public function one()
    {
        $data = Db::table('tp5_user')
            ->where('id',1)
            ->field('name','age')
            ->find();
        dump($data);
    }
    
    
}
