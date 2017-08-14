<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\wamp64\www\tp5-demo\public/../application/admin\view\index\index.html";i:1487167407;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>tp5-demo</title>
    <link href="/static/admin/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <form action="<?php echo url('Index/import'); ?>" enctype="multipart/form-data" method="post">
      <div class="form-group">
        <label for="exampleInputFile">导入Excel表格</label>
        <input type="file" name="file" id="exampleInputFile">
      </div>
      <button type="submit" class="btn btn-default">提交</button>
    </form>
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/bootstrap.js"></script>
  </body>
</html>