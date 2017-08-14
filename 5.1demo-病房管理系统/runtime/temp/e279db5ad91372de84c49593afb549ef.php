<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"F:\www\hostpital_tp\public/../application/index\view\index\login.html";i:1488357422;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
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
      <div class="col-md-12" style="height:50px;"></div>
    </div>
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 hui-margin-top-30 hui-padding-all-20 hui-background-color-white">
        <form role="form" action="<?php echo url('login_check'); ?>" method="post">
          <div class="form-group">
            <label for="zh">工号：</label>
            <input type="text" name="work" class="form-control" id="zh" placeholder="账号">
          </div>
          <div class="form-group">
            <label for="mm">密码</label>
            <input type="password" name="password" class="form-control" id="mm" placeholder="密码">
          </div>
          <button type="submit" class="btn btn-primary btn-block">登录</button>
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
