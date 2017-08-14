<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    /* 渲染视图的时候给页面传递参数
		1.可以用assign()方法来绑定数据，它会将数据绑定到接下来你要渲染的页面上，绑定内容为数组；
		2.直接使用fetch()或view()方法，在第二个参数传入要绑定的数据，也是数组模式；
	*/

	// 1.使用assign + 助手函数
	public function one()
	{
		$data = [
			'title'=> '使用assign + 助手函数',
			'way'  => '$this->assign($data);<br>return view();<br>',
			'name' => 'Tommy',
			'sex'  => 'male',
			'age'  => '24'
		];
		$this->assign($data);
		return view();
	}

	// 2.使用assign + fetch
	public function two()
	{
		$data = [
			'title'=> '使用assign + fetch',
			'way'  => '$this->assign($data);<br>return $this->fetch(\'one\');<br>',
			'name' => 'Tommy',
			'sex'  => 'male',
			'age'  => '24'
		];
		$this->assign($data);
		return $this->fetch('one');
	}

	// 3.只使用view()，不用assign()
	public function three()
	{
		$data = [
			'title'=> '只使用view()，不用assign()',
			'way'  => 'return view(\'one\',$data);<br>',
			'name' => 'Tommy',
			'sex'  => 'male',
			'age'  => '24'
		];
		return view('one',$data);
	}

	// 4.只使用fetch()，不用assign()
	public function four()
	{
		$data = [
			'title'=> '只使用fetch()，不用assign()',
			'way'  => 'return $this->fetch(\'one\',$data);<br>',
			'name' => 'Tommy',
			'sex'  => 'male',
			'age'  => '24'
		];
		return $this->fetch('one',$data);
	}
	
	// 5.如果数据少的时候，可以直接写到方法里，个人不推荐这种写法
	public function five()
	{
		return view('one',['title'=>'直接写到方法里','way'  => '直接写到方法里<br>','name'=>'Tommy','sex'=>'male','age'=>24]);
		// 或 return $this->fetch('one',['name'=>'Tommy','sex'=>'male','age'=>24]);
	}
}
