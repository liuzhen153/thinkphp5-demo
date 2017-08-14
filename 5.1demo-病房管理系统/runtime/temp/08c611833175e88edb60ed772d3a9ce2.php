<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:86:"E:\shujuku\hostpital_tp\public/../application/index\view\admin\search_doctor_view.html";i:1488448881;s:75:"E:\shujuku\hostpital_tp\public/../application/index\view\common\header.html";i:1488433553;s:75:"E:\shujuku\hostpital_tp\public/../application/index\view\common\footer.html";i:1488357494;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>科室信息查询-</title>
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
      <td>工号</td>
      <td>姓名</td>
      <td>性别</td>
      <td>职称</td>
      <td>所属科室</td>
      <td>工作状态</td>
      <td>主治病人</td>
    </tr>
    <?php if(is_array($doctor) || $doctor instanceof \think\Collection || $doctor instanceof \think\Paginator): $i = 0; $__LIST__ = $doctor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><?php echo $vo['Dno']; ?></td>
      <td><?php echo $vo['Dname']; ?></td>
      <td><?php echo $vo['Dsex']; ?></td>
      <td><?php echo $vo['Dzc']; ?></td>
      <td><?php echo $vo['lz_Aname']; ?></td>
      <td><?php echo $vo['Dstate']; ?></td>
      <td><?php echo $vo['Pname']; ?></td>
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

