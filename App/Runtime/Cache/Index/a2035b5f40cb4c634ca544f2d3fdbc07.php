<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <!--jquery资源引入-->
  <script type="text/javascript" src="__PUBLIC__/lib/jquery-1.10.1.min.js"></script>
  
  <!--fancybox资源引入-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/fancybox/source/jquery.fancybox.css" />
  <script type="text/javascript" src="__PUBLIC__/fancybox/source/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="__PUBLIC__/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
  <!--bootstrap3资源引入-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap3/css/bootstrap.min.css" />

  <script type="text/javascript" src="__PUBLIC__/bootstrap3/js/bootstrap.min.js"></script>
  <!--bui资源引入-->
<link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/page-min.css" rel="stylesheet" type="text/css" />


<link type="text/css" rel="stylesheet" href="__PUBLIC__/list/style/common.css">
<link type="text/css" rel="stylesheet" href="__PUBLIC__/list/style/helpcenter.css">
<script type="text/javascript" src="__PUBLIC__/list/script/helpcenter.js" language="javascript"></script>
	<title>用户主页</title>
	<style>
		#main{
			width: 900px;
			margin: 0 auto;
      height: auto;
		}
		#statusText{
			text-align: center;
			margin: 0 auto;
		}
    #taskline{ 
      margin: 5 auto;
      margin-top:10px;
      clear: both;
    }
    #line iframe{
      width: 1024px;
      margin: 0 auto;

    }
    .navbox{
      width: 160px;
      font-size:15px;
      height: auto;
      position: fixed;
      left:10px; 
      top: 100px;
      background-color: #F5F5DC;
      padding:8px 15px;
      line-height: 35px;
    }
    .flow-steps .num4 li{
      width:200px;
    }
    .row{
      margin:auto 0;
    }
	</style>
</head>

<body>
<div id="main">
<div class="navbox">
    <h3 style="font-size:24px">发展流程</h3><br/>
    <?php if(is_array($showTask)): foreach($showTask as $key=>$t1): ?><strong><a class="various" href="<?php echo U('Index/Index/showTask');?>?task_id=<?php echo ($t1["id"]); ?>"><?php echo ($t1["title"]); ?></a></strong><br/>
    <?php if(is_array($t1['child'])): foreach($t1['child'] as $key=>$t2): ?>└ <a class="various" href="<?php echo U('Index/Index/showTask');?>?task_id=<?php echo ($t2["id"]); ?>"><?php echo ($t2["title"]); ?></a><br/><?php endforeach; endif; endforeach; endif; ?>
</div>
<center><h2 style="font-size:30px;"> 共产党员发展管理系统</h2></center>
<div style="float:right">
     <a href="<?php echo U('Home/Login/logout');?>">退出</a>
</div>
<div class="jumbotron" style="padding-top:5px;background-color:#F7F7F7;">
    <div id="statusText" class="page-header">
   <h2  style="font-size:24px;">亲，你现在是<?php echo ($status[0]["name"]); ?></h2>
   
   </div>
   Tips:<?php echo ($status[0]["content"]); ?><br/><br/>
   <?php if($status[0][id] == 1): ?><div class="row">
        <div class="flow-steps">
            <ol class="num4 unstyled">
                <li class="first current">
                    1. 普通学生
                </li>
                <li class="">
                    2. 入党积极分子
                </li>
                <li class="">
                    3. 预备党员
                </li>
                <li class="last">
                    4. 正式党员
                </li>
            </ol>
        </div>
    </div><?php endif; ?>
    <?php if($status[0][id] == 2): ?><div class="row">
        <div class="flow-steps">
            <ol class="num4 unstyled">
                <li class="first current-prev">
                    <i class="icon-ok"></i>1. 普通学生
                </li>
                <li class="current">
                    2. 入党积极分子
                </li>
                <li class="">
                    3. 预备党员
                </li>
                <li class="last">
                    4. 正式党员
                </li>
            </ol>
        </div>
    </div><?php endif; ?>
    <?php if($status[0][id] == 3): ?><div class="row">
        <div class="flow-steps">
            <ol class="num4 unstyled">
                <li class="first done">
                    <i class="icon-ok"></i>1. 普通学生
                </li>
                <li class="current-prev">
                    <i class="icon-ok"></i>2. 入党积极分子
                </li>
                <li class="current">
                    3. 预备党员
                </li>
                <li class="last">
                    4. 正式党员
                </li>
            </ol>
        </div>
    </div><?php endif; ?>
    <?php if($status[0][id] == 4): ?><div class="row">
        <div class="flow-steps">
            <ol class="num4 unstyled">
                <li class="first done">
                    <i class="icon-ok"></i>1. 普通学生
                </li>
                <li class="done">
                    <i class="icon-ok"></i>2. 入党积极分子
                </li>
                <li class="current-prev">
                    <i class="icon-ok"></i>3. 预备党员
                </li>
                <li class="last current">
                    4. 正式党员
                </li>
            </ol>
        </div>
    </div><?php endif; ?>
  

<!-- <div class="progress" id="status">
   <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo ($status[0]["percent"]); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($status[0]["percent"]); ?>%">
   <?php echo ($status[0]["percent"]); ?>%
   
</div>
</div> --><br/>
  <div style="padding-left:80px;">
  <a href="<?php echo U('Index/Video/index');?>" class="btn btn-primary btn-lg " role="button" <?php if($status[0][id] == 0): ?>disabled="disabled"<?php endif; ?>>在线视频学习</a>
  &nbsp;&nbsp;&nbsp;
  <a href="<?php echo U('Index/Task/addActivity');?>" target="_blank"  name="addActivity" class="btn btn-primary btn-lg "   <?php if($status[0][id] == 0): ?>disabled="disabled"<?php endif; ?>>添加活动</a>
  &nbsp;&nbsp;&nbsp;
  <a href="<?php echo U('Index/Task/addFeeling');?>" target="_blank"  name="addActivity" class="btn btn-primary btn-lg  "   <?php if($status[0][id] == 0): ?>disabled="disabled"<?php endif; ?>>心得体会</a>
  &nbsp;&nbsp;&nbsp;
  <a href="<?php echo U('Index/Task/addHonor');?>" target="_blank" class="btn btn-primary btn-lg " role="button" <?php if($status[0][id] == 0): ?>disabled="disabled"<?php endif; ?>>添加荣誉</a>
  &nbsp;&nbsp;&nbsp;
  <a href="<?php echo U('Home/Index/index');?>" class="btn btn-primary btn-lg " role="button">个人中心</a>
  &nbsp;&nbsp;&nbsp;
  </div>
</div>
<!--当前需要完成的任务面板-->
 <div id="needTodo" class="panel panel-info" style="width:49%;float:left;">
  <!-- Default panel contents -->
  <div class="panel-heading" style="font-size:22px;"><span class="glyphicon glyphicon-tasks"></span>
当前任务</div>

  <!-- List group -->
  <ul id="current_list" class="list-group" >
  <?php if(is_array($current_task)): foreach($current_task as $key=>$cur): ?><a  href="<?php echo U($cur['task_url']);?>?task_id=<?php echo ($cur['id']); ?>" class="list-group-item various" data-fancybox-type="iframe"><?php echo ($cur["title"]); ?><span class="badge"></span></a><?php endforeach; endif; ?>
  </ul>
  
 
</div>
<!--通知公告任务面板************-->
<div id="" class="panel panel-info" style="width:49%;float:right;">
  <!-- Default panel contents -->
  <div class="panel-heading" style="font-size:22px;"><span class="glyphicon glyphicon-tasks"></span>
通知公告</div>

  <ul class="list-group" >
  <?php if(is_array($notice)): foreach($notice as $key=>$v): ?><a  href="<?php echo U('Index/Index/showNotice');?>?notice_id=<?php echo ($v['id']); ?>" class="list-group-item various" data-fancybox-type="iframe"><?php echo ($v["title"]); ?> <span class="badge"><?php echo date('Y-m-d',$v['time']);?></span></a><?php endforeach; endif; ?>
  </ul>
 
</div>
<!--个人信息汇总-->
<div id="taskline" class="panel panel-info">
  <div class="panel-heading" style="font-size:22px;"><span class="glyphicon glyphicon-tasks"></span>
  个人信息汇总
  <a style="float:right;font-size:16px;color:black;" href="<?php echo U('Index/Index/printpage');?>" target="_blank" style>打印</a>

  </div>

 <!--container begin-->
<div id="container" style="padding-left:15px;" class="w990 mlrauto clearfix">
<font style="font-size:20px;">姓名：<?php echo ($user['name']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;学号：<?php echo ($user['number']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;视频学习时长：<?php echo ($video); ?>小时</font>
  <!--menu begin-->
  <!--menu end-->
    <!--questions begin-->
<div id="questions">
    <ul id="questionList" class="foldList clearfix">
    <li class="clearfix">
        <h5>
          <b class="UI-ask"></b>
          <font style="font-size:20px;">任务记录</font>
        </h5>
        <div class="foldContent">
          <table class="table table-bordered" style="font-size:13px;">
          <tr>
          <th>任务名</th>
          <th>任务阶段</th>
          <th>提交时间</th>
          <th>审核结果</th>
          <th>审核意见</th>
          <th>审核时间</th>
          <th>审核人</th>
          </tr>
          <?php if(is_array($task)): foreach($task as $key=>$v): ?><tr>
          <td><a href="<?php echo U('Index/Task/contentShow');?>?id=<?php echo ($v['task_ok_id']); ?>&&task=1" class="various" data-fancybox-type="iframe"><?php echo ($v['title']); ?></a></td>
          <td><?php echo ($v['status_name']); ?></td>
          <td><?php echo date('Y-m-d',$v['post_time']);?></td>
          <td>
            <?php if($v['check_result'] == 5): ?>A+<?php endif; ?>
           <?php if($v['check_result'] == 4): ?>A<?php endif; ?>
           <?php if($v['check_result'] == 3): ?>B+<?php endif; ?>
           <?php if($v['check_result'] == 2): ?>B<?php endif; ?>
           <?php if($v['check_result'] == 1): ?>C+<?php endif; ?>
           <?php if($v['check_result'] == 0 && $v['task_comp'] == 1): ?>不合格<?php endif; ?>
           <?php if($v['task_comp'] == 0): ?>待审核<?php endif; ?>
          </td>
          <td><?php echo ($v['check_feedback']); ?></td>
          <td><?php if($v['task_comp'] != 0): echo date("Y-m-d",$v['check_time']); endif; ?></td>
          <td><?php echo M('userinfo')->where(array('uid'=>$v['checker_id']))->getField('name');?></td>
          <tr><?php endforeach; endif; ?>

        </table>
        </div>
      </li>
      <li class="clearfix">
        <h5>
          <b class="UI-ask"></b>
          <font style="font-size:20px;">活动记录</font>
        </h5>
        <div class="foldContent">
          <table class="table table-bordered" style="font-size:13px;">
          <tr>
          <th>标题</th>
          <th>提交日期</th>
          <th>审核结果</th>
          <th>审核意见</th>
          <th>审核时间</th>
          <th>审核人</th>
          </tr>
          <?php if(is_array($activity)): foreach($activity as $key=>$v): ?><tr>
          <td><a href="<?php echo U('Index/Task/contentShow');?>?id=<?php echo ($v['id']); ?>" class="various" data-fancybox-type="iframe"><?php echo ($v['title']); ?></a></td>
          <td><?php echo date('Y-m-d',$v['post_time']);?></td>
          <td>
            <?php if($v['check_result'] == 5): ?>A+<?php endif; ?>
           <?php if($v['check_result'] == 4): ?>A<?php endif; ?>
           <?php if($v['check_result'] == 3): ?>B+<?php endif; ?>
           <?php if($v['check_result'] == 2): ?>B<?php endif; ?>
           <?php if($v['check_result'] == 1): ?>C+<?php endif; ?>
           <?php if($v['check_result'] == 0 && $v['check_comp'] == 1): ?>不合格<?php endif; ?>
           <?php if($v['check_comp'] == 0): ?>待审核<?php endif; ?>
          </td>
          <td><?php echo ($v["check_feedback"]); ?></td>
          <td><?php if($v['check_comp'] != 0): echo date("Y-m-d",$v['check_time']); endif; ?></td>
          <td><?php echo M('userinfo')->where(array('uid'=>$v['checker_id']))->getField('name');?></td>
          <tr><?php endforeach; endif; ?>

        </table>
        </div>
      </li>
      <li class="clearfix">
        <h5>
          <b class="UI-ask"></b>
          <font style="font-size:20px;">荣誉记录</font>
        </h5>
        <div class="foldContent">
          <table class="table table-bordered" style="font-size:13px;">
          <tr>
          <th>标题</th>
          <th>提交日期</th>
          <th>审核结果</th>
          <th>审核意见</th>
          <th>审核时间</th>
          <th>审核人</th>
          </tr>
          <?php if(is_array($honor)): foreach($honor as $key=>$v): ?><tr>
          <td><a href="<?php echo U('Index/Task/contentShow');?>?id=<?php echo ($v['id']); ?>" class="various" data-fancybox-type="iframe"><?php echo ($v['title']); ?></a></td>
          <td><?php echo date('Y-m-d',$v['post_time']);?></td>
          <td>
            <?php if($v['check_result'] == 5): ?>A+<?php endif; ?>
           <?php if($v['check_result'] == 4): ?>A<?php endif; ?>
           <?php if($v['check_result'] == 3): ?>B+<?php endif; ?>
           <?php if($v['check_result'] == 2): ?>B<?php endif; ?>
           <?php if($v['check_result'] == 1): ?>C+<?php endif; ?>
           <?php if($v['check_result'] == 0 && $v['check_comp'] == 1): ?>不合格<?php endif; ?>
           <?php if($v['check_comp'] == 0): ?>待审核<?php endif; ?>
          </td>
          <td><?php echo ($v["check_feedback"]); ?></td>
          <td><?php if($v['check_comp'] != 0): echo date("Y-m-d",$v['check_time']); endif; ?></td>
          <td><?php echo M('userinfo')->where(array('uid'=>$v['checker_id']))->getField('name');?></td>
          <tr><?php endforeach; endif; ?>

        </table>
        </div>
      </li>
      <li class="clearfix">
        <h5>
          <b class="UI-ask"></b>
          <font style="font-size:20px;">心得体会</font>
        </h5>
        <div class="foldContent">
          <table class="table table-bordered" style="font-size:13px;">
          <tr>
          <th>标题</th>
          <th>提交日期</th>
          <th>审核结果</th>
          <th>审核意见</th>
          <th>审核时间</th>
          <th>审核人</th>
          </tr>
          <?php if(is_array($feeling)): foreach($feeling as $key=>$v): ?><tr>
          <td><a href="<?php echo U('Index/Task/contentShow');?>?id=<?php echo ($v['id']); ?>" class="various" data-fancybox-type="iframe"><?php echo ($v['title']); ?></a></td>
          <td><?php echo date('Y-m-d',$v['post_time']);?></td>
          <td>
            <?php if($v['check_result'] == 5): ?>A+<?php endif; ?>
           <?php if($v['check_result'] == 4): ?>A<?php endif; ?>
           <?php if($v['check_result'] == 3): ?>B+<?php endif; ?>
           <?php if($v['check_result'] == 2): ?>B<?php endif; ?>
           <?php if($v['check_result'] == 1): ?>C+<?php endif; ?>
           <?php if($v['check_result'] == 0 && $v['check_comp'] == 1): ?>不合格<?php endif; ?>
           <?php if($v['check_comp'] == 0): ?>待审核<?php endif; ?>
          </td>
          </td>
          <td><?php echo ($v["check_feedback"]); ?></td>
          <td><?php echo date("Y-m-d",$v['check_time']);?></td>
          <td><?php echo M('userinfo')->where(array('uid'=>$v['checker_id']))->getField('name');?></td>
          <tr><?php endforeach; endif; ?>

        </table>
        </div>
      </li>
      <li class="clearfix">
        <h5>
          <b class="UI-ask"></b>
          <font style="font-size:20px;">学习相关</font>
        </h5>
        <div class="foldContent">
          <table class="table table-bordered" style="font-size:13px;">
          <tr>
          <th>学期</th>
          <?php if(is_array($assess_item1)): foreach($assess_item1 as $key=>$v): ?><th><?php echo ($v['remark']); echo ($v['id']); ?></th><?php endforeach; endif; ?>
          </tr>
          <tr>
          <td>第1学期</td>
          <?php if(is_array($assess_item1)): foreach($assess_item1 as $key=>$vv): ?><th>
                <?php echo ($item1[$vv['id']]); ?>
             </th><?php endforeach; endif; ?>
          </tr>
          <tr>
          <td>第2学期</td>
          <?php if(is_array($assess_item1)): foreach($assess_item1 as $key=>$vv): ?><th>
                <?php echo ($item2[$vv['id']]); ?>
             </th><?php endforeach; endif; ?>
          </tr>
          <tr>
          <td>第3学期</td>
          <?php if(is_array($assess_item1)): foreach($assess_item1 as $key=>$vv): ?><th>
                <?php echo ($item3[$vv['id']]); ?>
             </th><?php endforeach; endif; ?>
          </tr>
          <tr>
          <td>第4学期</td>
          <?php if(is_array($assess_item1)): foreach($assess_item1 as $key=>$vv): ?><th>
                <?php echo ($item4[$vv['id']]); ?>
             </th><?php endforeach; endif; ?>
          </tr>
          <tr>
          <td>第5学期</td>
          <?php if(is_array($assess_item1)): foreach($assess_item1 as $key=>$vv): ?><th>
                <?php echo ($item5[$vv['id']]); ?>
             </th><?php endforeach; endif; ?>
          </tr>
          <tr>
          <td>第6学期</td>
          <?php if(is_array($assess_item1)): foreach($assess_item1 as $key=>$vv): ?><th>
                <?php echo ($item6[$vv['id']]); ?>
             </th><?php endforeach; endif; ?>
          </tr>
          <tr>
          <td>第7学期</td>
          <?php if(is_array($assess_item1)): foreach($assess_item1 as $key=>$vv): ?><th>
                <?php echo ($item7[$vv['id']]); ?>
             </th><?php endforeach; endif; ?>
          </tr>
          <tr>
          <td>第8学期</td>
          <?php if(is_array($assess_item1)): foreach($assess_item1 as $key=>$vv): ?><th>
                <?php echo ($item8[$vv['id']]); ?>
             </th><?php endforeach; endif; ?>
          </tr>

        </table>
        </div>
      </li>
      <li class="clearfix">
        <h5>
          <b class="UI-ask"></b>
          <font style="font-size:20px;">思想相关</font>
        </h5>
        <div class="foldContent">
          <table class="table table-bordered" style="font-size:13px;">
          <tr>
          <th>日期</th>
          <?php if(is_array($assess_item2)): foreach($assess_item2 as $key=>$v): ?><th><?php echo ($v['remark']); echo ($v['id']); ?></th><?php endforeach; endif; ?>
          </tr>
          <?php
 foreach ($think as $k => $v) { echo '<tr>'; echo '<td>'.$k.'</td>'; foreach ($v as $key => $value) { foreach ($assess_item2 as $kk => $vv) { echo '<td>'; echo $value[$vv['id']]; echo '</td>'; } } echo '</tr>'; } ?>
         
          

        </table>
        </div>
      </li>
    </ul>

  </div>
  <!--questions end-->
  <div class="cb"></div>
</div>
</div>
  <!-- <iframe  src="<?php echo U('Index/Index/taskline');?>" id="iframe" width="700" height="300" frameborder="0" scrolling="no"></iframe>
  </div> -->

<!--个人信息汇总***********-->
<script>
$(document).ready(function(){
    $(".various").fancybox({
    padding: 5,
    openEffect : 'elastic',
    openSpeed  : 150,
    closeEffect : 'elastic',
    closeSpeed  : 150,
    closeClick : true,
    scrolling : 'no', 
    'width'       : '960px',
    'height'      : '600px',
    'autoScale'       : false,
    'transitionIn'    : 'none',
    'transitionOut'   : 'none',
    'type'        : 'iframe',
    helpers : {
          overlay : null
        },
      
    });
});
</script>

</body>
</html>