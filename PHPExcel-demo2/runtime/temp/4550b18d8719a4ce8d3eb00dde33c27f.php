<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\wamp64\www\tp5-demo\public/../application/admin\view\index\student.html";i:1487429130;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>PHPExcel表格导出</title>
    <link href="/static/admin/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
      <table class="table table-bordered" width="60%">
          <thead>
              <tr>
                <th width="30">ID</th>
                <th width="50">姓名</th>
                <th width="30">年龄</th>
                <th width="30">班级</th>
                <th width="30">电话</th>
                <th width="30">邮箱</th>
             </tr>
          </thead>
        <tbody>
            <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
              <tr>
                <td><?php echo $v['id']; ?></td>
                <td><?php echo $v['name']; ?></td>
                <td><?php echo $v['age']; ?></td>
                <td><?php echo $v['class']; ?></td>
                <td><?php echo $v['tel']; ?></td>
                <td><?php echo $v['email']; ?></td>
              </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
      <button type="button" onclick="window.open('<?php echo url('export'); ?>')">导出Excel</button>
  </div>
  </body>
  <script src="/static/admin/js/jquery.js"></script>
  <script src="/static/admin/js/bootstrap.js"></script>
</html>