<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\index\model\Up;
use app\index\model\Ato;
use app\index\model\Bed;
use app\index\model\Doctor;
use app\index\model\Patient;
/**
 * 这是登录后的管理控制器
 */
 /*
 * ThinkPHP5入门请查看http://www.kancloud.cn/liuzhen153/tp5-demo
 * 默认访问index时并不是病房管理系统的界面，我做了一个新手引导。
 * 本实例前端用到基础的vue.js的知识，页面搭建使用bootstrap，想引导大家感受下最新的js工具的潮流发展。感兴趣的可以根据引导页去往vue看一看，或许将来的你就是一个前端大神了呢！
 */
class Admin extends Controller
{

  // 初始化控制器，判断是否登录
  public function _initialize()
  {
    if (!session('?Uname')) {
      $this->error('请先登录！','index/login');
    }
  }

 // 注销登录
  public function login_out()
  {
    session('Uname',null);
    $this->success('注销成功！','index/login');
  }

  // 管理首页
  public function index()
  {
    $this->assign(
      ['title'=>'病房管理系统-首页']
    );
    return view();
  }


  // 工作模块
  public function work()
  {
    $this->assign(['title'=>'病房管理系统-工作模块']);
    return view();
  }


  // 修改密码
  public function charge_pwd()
  {
    $this->assign(['title'=>'病房管理系统-修改密码']);
    return view();
  }


  // 修改密码验证
  public function charge_pwd_check()
  {
    $old_password = trim(input('old_password'));
    $new_password = trim(input('new_password'));
    $uname = trim(input('uname'));
    // 验证旧密码对不对
    $data = Up::get($uname);
    // dump($data['Password']);exit;
    if ($old_password != $data['Password']) {
      $this->error('原密码错误，请确认后再重试！');
    }
    $data['Password'] = $new_password;
    $status = $data->save();
    // dump($status);
    ($status == 1) ? $this->success('恭喜您！修改成功！','index') : $this->error('修改失败或一次修改了多条！');
  }

  /*
  * ---------------------------------------------以下是员工信息管理部分----------------------------------------------------------------------------------
  */


  // 医院信息管理
  public function hospital()
  {
    $this->assign(['title'=>'病房管理系统-医院信息管理']);
    return view();
  }


  // 员工信息注册
  public function add_doctor()
  {
    $ato = Ato::all();
    $data = [
      'title' => '病房管理系统-员工信息注册',
      'ato'   => $ato
    ];
    // dump($ato);exit;
    $this->assign($data);
    return view();
  }


  // 员工信息注册验证
  public function add_doctor_check()
  {
    $work = trim(input('work'));
    $name = trim(input('name'));
    if (empty($work) || empty($name)) {
      $this->error('工号或姓名不能为空！');
    }
    $data = [
      'Dno'     => $work,
      'Dname'   => $name,
      'Dsex'    => input('sex'),
      'Dzc'     => input('dzc'),
      'lz_Aname'=> input('keshi'),
      'Dstate'  => 1
    ];
    $status = Doctor::create($data);
    // dump($status);exit;
    $status ? $this->success('恭喜您，添加成功！','hospital') : $this->error('添加失败，请重试！');
  }


  // 员工信息更新
  public function update_doctor()
  {
    $ato = Ato::all();
    $doctor = Doctor::all(['Dstate'=>1]);
    $data = [
      'title'     => '病房管理系统-员工信息更新',
      'doctor'    => $doctor,
      'ato'       => $ato
    ];
    // dump($data);exit;
    $this->assign($data);
    return view();
  }
  // 员工信息更新验证
  public function update_doctor_check()
  {
    $data = [
      'Dno'      => input('dno'),
      'Dzc'      => input('dzc'),
      'lz_Aname' => input('keshi')
    ];
    $status = Doctor::update($data);
    $status ? $this->success('恭喜您，更新成功！','hospital') : $this->error('更新失败，请重试！');
  }

  // 员工信息删除
  public function del_doctor()
  {
    $doctor = Doctor::all(['Dstate'=>1]);
    $data = [
      'title'     => '病房管理系统-员工信息删除',
      'doctor'    => $doctor
    ];
    $this->assign($data);
    return view();
  }

  // 员工信息删除验证
  public function del_doctor_check()
  {
    $status = Doctor::destroy(input('dno'));
    ($status == 1) ? $this->success('恭喜您，删除成功！','hospital') : $this->error('删除失败，请重试！');
  }


/*
* ---------------------------------------------以下是病人信息管理部分----------------------------------------------------------------------------------
*/

  // 病人信息管理
  public function patient()
  {
    $this->assign(['title'=>'病房管理系统-病人信息管理']);
    return view();
  }

  // 病人信息注册
  public function add_patient()
  {
    $doctordata = new Doctor;
    $doctor = $doctordata
            ->where('Dstate',1)
            ->where('Dzc','医生')
            ->whereOr('Dzc','科主任')
            ->select();
    $bed = Bed::all(['Cuse'=>0]);
    $data = [
      'title'   =>'病房管理系统-病人信息注册',
      'doctor'  => $doctor,
      'bed'     => $bed
    ];
    // dump($data);exit;
    $this->assign($data);
    return view();
  }

  // 病人信息注册验证
  public function add_patient_check()
  {
    $data = [
      'Pno'         => trim(input('pno')),
      'Pname'       => trim(input('name')),
      'Psex'        => trim(input('sex')),
      'Pbirth'      => trim(input('birthday')),
      'Padd'        => trim(input('address')),
      'Ptele'       => trim(input('tel')),
      'Dno'         => trim(input('dno')),
      'Cno'         => trim(input('cno')),
      'Idate'       => trim(input('idate')),
      'Pmark'       => trim(input('mark')),
      'Odate'      => trim(input('odate'))
    ];
    // dump($data);
    (Patient::create($data)) ? $this->success('恭喜您，添加成功！','patient') : $this->error('添加失败，请重试！');
  }

  // 病历信息更新
  public function update_patient()
  {
    $patient = Patient::all(['Odate'=>'00000000']);
    $this->assign([
      'title'  => '病历信息更新',
      'patient'=> $patient
    ]);
    return view();
  }

  // 病历信息更新验证
  public function update_patient_check()
  {
    $data = [
      'Pmark' => trim(input('mark'))
    ];
    (Patient::get(input('pno'))->save($data)) ? $this->success('恭喜您，修改成功！','patient') : $this->error('修改失败，请重试！');
  }

  // 出院手续办理
  public function out_patient()
  {
    $patient = Patient::all(['Odate'=>'00000000']);
    $this->assign([
      'title'  => '出院手续办理',
      'patient'=> $patient
    ]);
    return view();
  }

  // 出院手续办理验证
  public function out_patient_check()
  {
    $data = [
      'Pno'   => input('pno'),
      'Odate' => input('odate')
    ];
    (Patient::update($data)) ? $this->success('恭喜您，办理出院成功！','patient') : $this->error('操作失败，请重试！');
  }

  // 病人信息删除
  public function del_patient()
  {
    $patient = Patient::all(['Odate'=>'00000000']);
    $this->assign([
      'title'  => '病人信息删除',
      'patient'=> $patient
    ]);
    return view();
  }

  // 病人信息删除验证
  public function del_patient_check()
  {
    (Patient::destroy(input('pno')) == 1) ? $this->success('恭喜您，删除成功！','patient') : $this->error('操作失败，请重试！');
  }
  /*
  * ---------------------------------------------以下是信息查询部分----------------------------------------------------------------------------------
  */

  // 信息查询服务
  public function search()
  {
    $this->assign(['title'=>'病房管理系统-信息查询服务']);
    return view();
  }

  // 科室信息查询
  public function search_keshi()
  {
    $ato = Ato::all();
    $this->assign([
      'title'  => '科室信息查询',
      'ato'    => $ato
    ]);
    return view();
  }

  // 展示查询的科室
  public  function search_keshi_view()
  {
    $ato = Db::name('kesearch')
          ->where('lz_Aname',input('aname'))
          ->select();
    if (empty($ato)) {
      $this->error('查询出现错误，请重试');
    }
    // dump($ato);exit;
    $this->assign([
      'title'  => '科室信息查询-'.input('aname'),
      'ato'    => $ato
    ]);
    return view();
  }

  // 医护信息查询
  public function search_doctor(){
    $doctor = Doctor::all();
    $this->assign([
      'title'     => '医护信息查询',
      'doctor'    => $doctor
    ]);
    return view();
  }

  // 医护信息查询结果展示
  public function search_doctor_view()
  {
    $doctor = Db::name('Doctorsearch')
          ->where('Dno',input('dno'))
          ->select();
    if (empty($doctor)) {
      $this->error('查询出现错误，请重试');
    }
    // dump($ato);exit;
    $this->assign([
      'title'     => '医护信息查询-'.input('dno'),
      'doctor'    => $doctor
    ]);
    return view();
  }

  // 病房信息查询
  public function search_bed(){
    $this->assign([
      'title'  => '病房信息查询'
    ]);
    return view();
  }
  // 空床位
  public function search_bed_null()
  {
    $bed = Bed::all(['Cuse'=>0]);
    $this->assign([
      'title'  => '病房信息查询-空床位',
      'bed'    => $bed
    ]);
    return view();
  }
  // 非空床位
  public function search_bed_fill()
  {
    $bed = Bed::all(['Cuse'=>1]);
    $this->assign([
      'title'  => '病房信息查询-非空床位',
      'bed'    => $bed
    ]);
    return view();
  }

  // 病历信息查询
  public function search_patient()
  {
    $patient = Patient::all();
    $this->assign([
      'title'       => '病历信息查询',
      'patient'     => $patient
    ]);
    return view();
  }
  // 病历信息查询展示
  public function search_patient_view()
  {
    $patient = Db::name('Patientsearch')
          ->where('Pno',input('pno'))
          ->select();
    if (empty($patient)) {
      $this->error('查询出现错误，请重试');
    }
    // dump($ato);exit;
    $this->assign([
      'title'      => '病历信息查询-'.input('pno'),
      'patient'    => $patient
    ]);
    return view();
  }
}
