<?php
namespace app\index\controller;

use think\helper\Time;

// Time类库的使用，时间戳操作类
class Index
{
	public function index(){
		// 今日开始和结束的时间戳
		$time = Time::today();
		print('今日开始和结束的时间戳：');
		dump($time);

		// 昨日开始和结束的时间戳
		$time = Time::yesterday();
		print('昨日开始和结束的时间戳：');
		dump($time);

		// 本周开始和结束的时间戳
		$time = Time::week();
		print('本周开始和结束的时间戳：');
		dump($time);

		// 上周开始和结束的时间戳
		$time = Time::lastWeek();
		print('上周开始和结束的时间戳：');
		dump($time);

		// 本月开始和结束的时间戳
		$time = Time::month();
		print('本月开始和结束的时间戳：');
		dump($time);

		// 上月开始和结束的时间戳
		$time = Time::lastMonth();
		print('上月开始和结束的时间戳：');
		dump($time);

		// 今年开始和结束的时间戳
		$time = Time::year();
		print('今年开始和结束的时间戳：');
		dump($time);

		// 去年开始和结束的时间戳
		$time = Time::lastYear();
		print('去年开始和结束的时间戳：');
		dump($time);

		// 获取7天前零点到现在的时间戳
		$time = Time::dayToNow(7);
		print('获取7天前零点到现在的时间戳：');
		dump($time);

		// 获取7天前零点到昨日结束的时间戳
		$time = Time::dayToNow(7, true);
		print('获取7天前零点到昨日结束的时间戳：');
		dump($time);

		// 获取7天前的时间戳（以下是7天前的时间戳）
		$time = Time::daysAgo(7);
		print('获取7天前的时间戳（以下是7天前的时间戳）：');
		dump($time);

		//  获取n天后的时间戳（以下是7天后的时间戳）
		$time = Time::daysAfter(7);
		print('获取n天后的时间戳（以下是7天后的时间戳）：');
		dump($time);


		// 天数转换成秒数(以下是将5天换成秒数)
		$time = Time::daysToSecond(5);
		print('天数转换成秒数(以下是将5天换成秒数)：');
		dump($time);

		// 周数转换成秒数(以下是将3周换成秒数)
		$time = Time::weekToSecond(3);
		print('周数转换成秒数(以下是将3周换成秒数)：');
		dump($time);
	}

}
