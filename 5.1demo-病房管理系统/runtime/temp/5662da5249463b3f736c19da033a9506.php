<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"F:\www\hostpital_tp\public/../application/index\view\index\index.html";i:1488357431;}*/ ?>
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

  <body class="hui-background-color-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 hui-center-all hui-height-120">
          <img class="hui-circle hui-width-height-70" src="http://liuzhen.cug.biz/tommy/wp-content/uploads/2015/11/touxiang.jpg" alt="Tommy">
        </div>
      </div>
    </div>
    <div class="hui-category hui-col-middle hui-padding-all-10">
        <div class="hui-category-rowline hui-flexbox-item hui-border-top-turquoise"></div>
        <div class="hui-category-title hui-font-color-turquoise hui-font-size-16 hui-padding-col-10">
            终于等到你，我的小伙伴！
        </div>
        <div class="hui-category-rowline hui-flexbox-item hui-border-top-turquoise"></div>
    </div>
    <div class="hui-width-full hui-padding-all-20">
      <p class="hui-font-color-emerald">
        本系统起源于最近编写的《零点起飞学数据库》一书，所有代码解释权归本书编写组所有，转载和使用请标注转载来源，谢谢！
      </p>
      <p class="hui-font-color-emerald">
        本实例根据原“病房管理系统”改编，由原生改为TP5编写。
      </p>
    </div>
    <div class="hui-category hui-col-middle hui-padding-all-10">
        <div class="hui-category-rowline hui-flexbox-item hui-border-top-turquoise"></div>
        <div class="hui-category-title hui-font-color-turquoise hui-font-size-16 hui-padding-col-10">
            需要查阅的文档介绍
        </div>
        <div class="hui-category-rowline hui-flexbox-item hui-border-top-turquoise"></div>
    </div>
    <div class="row">
      <div id="table" class="col-md-12 hui-padding-all-30">
        <table class="table table-bordered">
          <tr class="hui-text-align-center">
            <td>项目名</td>
            <td>地址</td>
            <td>简介</td>
          </tr>
          <tr v-for="item in items">
            <td v-cloak>{{ item.project }}</td>
            <td>
              <a :href="item.url" v-cloak>{{ item.url }}</a>
            </td>
            <td v-cloak>{{ item.message }}</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="hui-category hui-col-middle hui-padding-all-10">
        <div class="hui-category-rowline hui-flexbox-item hui-border-top-turquoise"></div>
        <div class="hui-category-title hui-font-color-turquoise hui-font-size-16 hui-padding-col-10">
            好啦，让我们开始吧！
        </div>
        <div class="hui-category-rowline hui-flexbox-item hui-border-top-turquoise"></div>
    </div>
    <div class="hui-width-full hui-padding-all-30">
      <ul>
        <li>1.将本系统根目录的SQL文件到命令行中执行进行建库和建表。</li>
        <li>2.<a href="<?php echo url('login'); ?>">点此访问登录页面。</a></li>
      </ul>
    </div>
    <script src="https://unpkg.com/vue@2.2.1/dist/vue.js"></script>
    <script type="text/javascript">
      var table = new Vue({
        el:'#table',
        data:{
          items:[
            {project:'ThinkPHP5',url:'http://www.thinkphp.cn/',message:'ThinkPHP是一个免费开源的，快速、简单的面向对象的轻量级PHP开发框架，是为了敏捷WEB应用开发和简化企业应用开发而诞生的。ThinkPHP从诞生以来一直秉承简洁实用的设计原则，在保持出色的性能和至简的代码的同时，也注重易用性。遵循Apache2开源许可协议发布，意味着你可以免费使用ThinkPHP，甚至允许把你基于ThinkPHP开发的应用开源或商业产品发布/销售。'},
            {project:'ThinkPHP5从入门到努力',url:'http://www.kancloud.cn/liuzhen153/tp5-demo',message:'一步步学会使用PHP基础，学会使用ThinkPHP5。对于实战部分，每个章节都有代码DEMO，随意下载学习。该文档开始于2017年1月11日，并没有完成，属于工作之余编写，每天至少更新一节。作者：Tommy'},
            {project:'Bootstarp v3',url:'http://v3.bootcss.com/',message:'Bootstrap 是最受欢迎的 HTML、CSS 和 JS 框架，用于开发响应式布局、移动设备优先的 WEB 项目。'},
            {project:'vue.js',url:'https://cn.vuejs.org/',message:'国人开发的最火的渐进式JavaScript框架'},
            {project:'hui2.x',url:'https://git.oschina.net/baisoft_org/Hui-2.x',message:'Tommy非常佩服的一个全栈大神开发的手机端适配UI框架。'}
          ]
        }
      });
    </script>
  </body>
</html>
