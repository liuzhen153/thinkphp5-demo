<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"E:\wamp64\www\tp5\public/../application/admin\view\index\index.html";i:1482672859;s:67:"E:\wamp64\www\tp5\public/../application/admin\view\base\header.html";i:1483771414;s:65:"E:\wamp64\www\tp5\public/../application/admin\view\base\left.html";i:1483842704;}*/ ?>
<!DOCTYPE html>
<html><head>
      <meta charset="utf-8">
    <title>后台管理</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/css/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.css" rel="stylesheet">
    <link href="/static/admin/css/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/css/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin/css/demo.css" rel="stylesheet">
    <link href="/static/admin/css/typicons.css" rel="stylesheet">
    <link href="/static/admin/css/animate.css" rel="stylesheet">
    
</head>
<body>
  <!-- 头部 -->
  <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
			<?php $left = get_left();?>
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <?php if(is_array($left) || $left instanceof \think\Collection): $i = 0; $__LIST__ = $left;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa <?php echo $v['icon']; ?>"></i>
                            <span class="menu-text"><?php echo $v['title']; ?></span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                        	<?php if(!(empty($v['_child']) || ($v['_child'] instanceof \think\Collection && $v['_child']->isEmpty()))): if(is_array($v['_child']) || $v['_child'] instanceof \think\Collection): $i = 0; $__LIST__ = $v['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a class="js_main" href="<?php echo url($vo['link']); ?>">
                              	<span class="menu-text"><?php echo $vo['title']; ?></span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                        </ul>                            
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <!-- /Sidebar Menu -->
			</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
				<!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active">欢迎使用！</li>
                        </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Body -->
                <div class="page-body">
                	
                </div>
                 <!-- /Page Body -->	
            </div>
            <!-- /Page Content -->
	</div>	
    <!--Basic Scripts-->
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/jquery_002.js"></script>
    <script src="/static/admin/js/bootstrap.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin/js/beyond.js"></script>
    <script src="/static/admin/js/jquery.form.js"></script>
    <script src="/static/admin/js/layer/layer.js"></script>
<!--     // <script src="../js/fileinput.js" type="text/javascript"></script>
    // <script src="../js/fileinput_locale_fr.js" type="text/javascript"></script>
    // <script src="../js/fileinput_locale_es.js" type="text/javascript"></script> -->
  <script src="/static/admin/js/ueditor/ueditor.config.js"></script>
    <script src="/static/admin/js/ueditor/ueditor.all.js"></script>
 <script type="text/javascript" charset="utf-8" src="/static/admin/js/ueditor/lang/zh-cn/zh-cn.js"></script>

</body></html>
<script>
    //加载右边界面
	$(function(){
		$('.js_main').click(function(){
			var url = $(this).attr('href');
			$.post(url,{"_method":"get"},function(e){
				$('.page-content').html(e);
			})
			return false;
		})
	})
</script>
