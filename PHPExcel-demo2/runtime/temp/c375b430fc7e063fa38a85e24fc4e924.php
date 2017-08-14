<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"E:\wamp64\www\tp5\public/../application/admin\view\index\add_cate.html";i:1483845923;}*/ ?>
<!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="#">栏目管理</a>
                    </li>
                    <li class="active">添加栏目</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">新增栏目</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal js_form" role="form" action="<?=url('add_cate')?>" method="post">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label no-padding-right">标题</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="title" name="title" required="" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>
                        <div class="form-group">
                            <label for="pid" class="col-sm-2 control-label no-padding-right">栏目类型</label>
                            <div class="col-sm-6">
                                <select name="link" id="link" style="width: 100%;">
                                    <option selected="selected" value="content">单页</option>
                                    <option value="news">文章</option>
                                    <option value="pic">图片</option>
                                    <option value="link">链接</option>
                                    <option value="show_link">跳转链接</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group show_link">
                            <label for="sort" class="col-sm-2 control-label no-padding-right">跳转链接</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="sort" placeholder="http://" name="show_link" value="" type="text">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="pid" class="col-sm-2 control-label no-padding-right">所属分类</label>
                            <div class="col-sm-6">
                                <select name="pid" style="width: 100%;">
                                    <option selected="selected" value="0">顶级分类</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label no-padding-right">排序</label>
                            <div class="col-sm-6">
                                <input class="form-control" id="sort" name="sort" value="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label no-padding-right">关键字</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="keywords" value="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-2 control-label no-padding-right">描述</label>
                            <div class="col-sm-6">
                                <textarea name="description" id="" cols="100" rows="5"></textarea>
                            </div>
                        </div>                         
                        <div class="form-group">
                            <label for="pid" class="col-sm-2 control-label no-padding-right">图片</label>
                            <div class="col-md-9">
                                <input type="file" name="pic">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="condition" class="col-sm-2 control-label no-padding-right">栏目内容</label>
                            <div class="col-md-9">
                                <?=ueditor('content','1234')?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pid" class="col-sm-2 control-label no-padding-right">是否导航</label>
                            <div class="col-md-9">
                            <div class="switch" data-on="success" data-off="warning">
                                <input type="checkbox" checked />
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">提交</button>
                                <button type="reset" class="btn btn-danger">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(function(){
        ck_show_link();
        $('#link').on('change','',function(){
            ck_show_link();
        })
    })
    function ck_show_link(){
        var val=$("#link option:selected").val();
        if(val=='show_link'){
            $(".show_link").show();
        }else{
            $(".show_link").hide();
        }
    }
    $(".js_form").ajaxForm({
        //定义返回JSON数据，还包括xml和script格式
        dataType: 'json',
        beforeSend: function() {
            // var index = layer.load();
            // $("#layer_cache").attr("data-id", index);
        },
        beforeSerialize:function(){
            
        },
        success: function(data) {
            //提交成功后调用
            // index = $("#layer_cache").attr("data-id");
            // layer.close(index);
            if(data.code == 1) {
                layer.alert(data.msg, {
                    icon: 1
                });
            } else {
                layer.alert(data.msg, {
                    icon: 2
                });
            }
        }
    });
</script>
