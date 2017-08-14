<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"F:\www\hostpital_tp\public/../application/index\view\admin\charge_pwd.html";i:1488357785;s:71:"F:\www\hostpital_tp\public/../application/index\view\common\header.html";i:1488433553;s:71:"F:\www\hostpital_tp\public/../application/index\view\common\footer.html";i:1488460877;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>病房管理系统-修改密码</title>
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


          <form role="form" action="<?php echo url('charge_pwd_check'); ?>" method="post">
            <div class="form-group">
              <label for="zh">原密码：</label>
              <input type="hidden" name="uname" class="form-control" value="<?php echo \think\Session::get('Uname'); ?>">
              <input type="text" name="old_password" class="form-control" id="zh" placeholder="原密码">
            </div>
            <div class="form-group">
              <label for="mm">新密码</label>
              <input type="password" name="new_password" class="form-control" id="mm" placeholder="新密码">
            </div>
            <button type="submit" class="btn btn-primary btn-block">确认修改</button>
          </form>

  </div>
<div class="col-md-4"></div>
</div>
</div>

<div style="height: 100px;"></div>
<footer style="bottom: 0;width: 100%;">
    &copy;2017 Tommy
</footer>
<script src="https://unpkg.com/vue@2.2.1/dist/vue.js"></script>
</body>
</html>

