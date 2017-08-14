<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"E:\shujuku\hostpital_tp\public/../application/index\view\admin\search_patient_view.html";i:1488450068;s:75:"E:\shujuku\hostpital_tp\public/../application/index\view\common\header.html";i:1488433553;s:75:"E:\shujuku\hostpital_tp\public/../application/index\view\common\footer.html";i:1488357494;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>病历信息查询-2011111</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/main.css">
    <link rel="stylesheet" href="/static/hui.css">
    <style type="text/css">
      [v-cloak]{
        display: none;
      }
    </style>
  </head>
  <body>
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 header">
          工号<?php echo \think\Session::get('Uname'); ?>，您现在的位置是：<?php echo $title; ?> <span class="pull-right hui-font-color-alizarin hui-margin-left-15" onclick="location.href='<?php echo url('admin/login_out'); ?>'" style="cursor:pointer;"> 注销登录 </span> <span class="pull-right" onclick="location.href='<?php echo url('index'); ?>'" style="cursor:pointer;"> 返回首页 </span>
        </div>
      </div>
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 hui-margin-top-30 hui-padding-all-20 hui-background-color-white">

<table class="table table-bordered">
    <tr class="info">
      <td>住院号</td>
      <td>姓名</td>
      <td>性别</td>
      <td>出生年月</td>
      <td>家庭住址</td>
      <td>联系电话</td>
      <td>床位号</td>
      <td>主治医生</td>
      <td>所属科室</td>
      <td>住院日期</td>
      <td>治疗备注</td>
      <td>出院日期</td>
    </tr>
    <?php if(is_array($patient) || $patient instanceof \think\Collection || $patient instanceof \think\Paginator): $i = 0; $__LIST__ = $patient;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><?php echo $vo['Pno']; ?></td>
      <td><?php echo $vo['Pname']; ?></td>
      <td><?php echo $vo['Psex']; ?></td>
      <td><?php echo $vo['Pbirth']; ?></td>
      <td><?php echo $vo['Padd']; ?></td>
      <td><?php echo $vo['Ptele']; ?></td>
      <td><?php echo $vo['Cno']; ?></td>
      <td><?php echo $vo['Dno']; ?></td>
      <td><?php echo $vo['lz_Aname']; ?></td>
      <td><?php echo $vo['Idate']; ?></td>
      <td><?php echo $vo['Pmark']; ?></td>
      <td><?php echo $vo['Odate']; ?></td>
    </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>
<div class="col-md-4"></div>
</div>
</div>

<div style="height: 100px;"></div>
<footer style="bottom: 0;width: 100%;">
    &copy;2017 中国地质大学（武汉）校医院
</footer>
<script src="https://unpkg.com/vue@2.2.1/dist/vue.js"></script>
</body>
</html>

