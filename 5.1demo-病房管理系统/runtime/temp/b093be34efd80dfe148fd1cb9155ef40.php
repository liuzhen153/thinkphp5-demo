<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"E:\shujuku\hostpital_tp\public/../application/index\view\admin\add_patient.html";i:1488441851;s:75:"E:\shujuku\hostpital_tp\public/../application/index\view\common\header.html";i:1488433553;s:75:"E:\shujuku\hostpital_tp\public/../application/index\view\common\footer.html";i:1488357494;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>病房管理系统-病人信息注册</title>
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

<form role="form" action="<?php echo url('add_patient_check'); ?>" method="post">
          <div class="form-group">
            <label for="zh">住院号：</label>
            <input type="text" name="pno" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label for="zh">姓名：</label>
            <input type="text" name="name" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label for="mm">性别：</label>
            <label class="radio-inline">
              <input type="radio" name="sex" value="男" checked> 男
            </label>
            <label class="radio-inline">
              <input type="radio" name="sex" value="女"> 女
            </label>
          </div>
          <div class="form-group">
            <label for="zh">出生日期：</label>
            <input type="text" name="birthday" class="form-control" placeholder="格式：1993-10-22">
          </div>
          <div class="form-group">
            <label for="zh">家庭住址：</label>
            <input type="text" name="address" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label for="zh">联系电话：</label>
            <input type="text" name="tel" class="form-control" placeholder="">
          </div>
         <div class="form-group">
            <label for="mm">主治医生：</label>
            <select class="form-control" name="dno">
              <?php if(is_array($doctor) || $doctor instanceof \think\Collection || $doctor instanceof \think\Paginator): $i = 0; $__LIST__ = $doctor;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value='<?php echo $vo['Dno']; ?>'><?php echo $vo['Dname']; ?>.<?php echo $vo['lz_Aname']; ?></option>
              <?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
          </div>
          <div class="form-group">
            <label for="mm">病床号：</label>
            <select class="form-control" name="cno">
              <?php if(is_array($bed) || $bed instanceof \think\Collection || $bed instanceof \think\Paginator): $i = 0; $__LIST__ = $bed;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <option value='<?php echo $vo['Cno']; ?>'><?php echo $vo['Cno']; ?>.<?php echo $vo['bc_Aname']; ?></option>
              <?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
          </div>
          <div class="form-group">
            <label for="zh">入院日期：</label>
            <input type="text" name="idate" class="form-control" placeholder="格式：1993-10-22">
          </div>
          <div class="form-group">
            <label for="zh">治疗备注：</label>
            <input type="text" name="mark" class="form-control" placeholder="">
          </div>
          <div class="form-group">
            <label for="zh">出院日期：</label>
            <input type="text" name="odate" class="form-control" placeholder="格式：1993-10-22">
          </div>
          <button type="submit" class="btn btn-primary btn-block">提交</button>
        </form>
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

