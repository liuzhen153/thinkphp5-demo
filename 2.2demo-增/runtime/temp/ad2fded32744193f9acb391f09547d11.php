<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:74:"D:\www\tp5-demo\1.4demo\public/../application/index\view\index\layout.html";i:1484409444;s:75:"D:\www\tp5-demo\1.4demo\public/../application/index\view\commen\layout.html";i:1484411889;s:75:"D:\www\tp5-demo\1.4demo\public/../application/index\view\commen\header.html";i:1484323580;s:75:"D:\www\tp5-demo\1.4demo\public/../application/index\view\commen\footer.html";i:1484323590;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>使用公共模板</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container">

  	<div class="row">
  		<div class="col-md-2"></div>
	  	<div class="col-md-8">
	  		<h1>公共模板</h1>
	    	<code>可以把模板的公共头部和尾部分离出来，便于维护。我们把模板文件拆分为三部分：<br>
          application/index/view/commen/header.html<br>
          application/index/view/index/one.html<br>
          application/index/view/commen/footer.html
        </code>
        <div class="alert alert-success" role="alert">  
            one.html页面代码十分简洁，头部和尾部这类公共部分可以复用，也易于维护
        </div>
	  	</div>
	  	<div class="col-md-2"></div>
  	</div>   
	<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  			<div class="jumbotron">
			  	<h1>ThinkPHP5从入门到努力</h1>
			  	<p>每天晚上10点左右更新，节假日除外。</p>
			  	<p>
			  		<a class="btn btn-primary btn-lg" href="http://www.kancloud.cn/liuzhen153/tp5-demo" role="button">去看看</a>
			  	</p>
			</div>
  		</div>
  		<div class="col-md-2"></div>
  	</div>
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </body>
</html>