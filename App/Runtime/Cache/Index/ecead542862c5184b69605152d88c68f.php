<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <!--bui资源引入-->
<link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/page-min.css" rel="stylesheet" type="text/css" />
    <!--jquery资源引入-->
  <script type="text/javascript" src="__PUBLIC__/lib/jquery-1.10.1.min.js"></script>
  <style>
  body{
    width: 1024px;
    margin: 0 auto;
  }
  </style>
</head>

<body>

<style type="text/css" media=print>    
.noprint{display : none }    
</style> 
<br/>
<center>   
      <input id="btnPrint" class="button button-success" type="button" value="打印" onclick=preview(1) />    
</center>

    
<script>    
function preview(oper)           
{    
if (oper < 10)    
{    
bdhtml=window.document.body.innerHTML;//获取当前页的html代码    
sprnstr="<!--startprint"+oper+"-->";//设置打印开始区域    
eprnstr="<!--endprint"+oper+"-->";//设置打印结束区域    
prnhtml=bdhtml.substring(bdhtml.indexOf(sprnstr)+18); //从开始代码向后取html    
    
prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));//从结束代码向前取html    
window.document.body.innerHTML=prnhtml;    
window.print();    
window.document.body.innerHTML=bdhtml;    
} else {    
window.print();    
}    
}    
</script>   
<!--startprint1-->
<div class="container">
    <div class="detail-page">
      <h1>信息汇总</h1> 
      <br/>
      <div class="detail-section">  
        <h3>基本信息</h3>
       
        <div class="row detail-row">
        <div class="span8">
            <label>姓名：</label><span class="detail-text"><?php echo ($user['name']); ?></span>
          </div>
          <div class="span8">
            <label>学号：</label><span class="detail-text"><?php echo ($user['number']); ?></span>
          </div>
          <div class="span8">
            <label>性别：</label><span class="detail-text"><?php echo ($user['sex']); ?></span>
          </div>
          <div class="span8">
            <label>学院：</label><span class="detail-text"><?php echo ($user['college']); ?></span>
          </div>
          <div class="span8">
            
            <label>专业：</label><span class="detail-text"><?php echo ($user['major']); ?></span>
           
          </div>
          <div class="span8">
            
            <label>班级：</label><span class="detail-text"><?php echo ($user['class']); ?></span>
          </div>
          <div class="span8">
            <label>入学时间：</label><span class="detail-text"><?php echo ($user['entrance']); ?></span>
          </div>
           <div class="span8">
            <label>家庭住址：</label><span class="detail-text"><?php echo ($user['home']); ?></span>
          </div>
           <div class="span8">
            <label>出生日期：</label><span class="detail-text"><?php echo ($user['home']); ?></span>
          </div>
           <div class="span8">
            <label>身份证号：</label><span class="detail-text"><?php echo ($user['home']); ?></span>
          </div>
        </div>
      </div>
     
     <div id="taskline" class="panel panel-info">
  <div class="panel-heading" style="font-size:22px;"><span class="glyphicon glyphicon-tasks"></span>
  个人信息汇总</div>

 <!--container begin-->
<div id="container" style="padding-left:15px;" class="w990 mlrauto clearfix">
<h2>视频学习时长：<?php echo ($video); ?>小时</h2>
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
          <td><?php echo ($v['user_status']); ?></td>
          <td><?php echo date('Y-m-d',$v['post_time']);?></td>
          <td>
            <?php if($v['check_result'] == 5): ?>A+<?php endif; ?>
           <?php if($v['check_result'] == 4): ?>A<?php endif; ?>
           <?php if($v['check_result'] == 3): ?>B+<?php endif; ?>
           <?php if($v['check_result'] == 2): ?>B<?php endif; ?>
           <?php if($v['check_result'] == 1): ?>C+<?php endif; ?>
           <?php if($v['check_comp'] == 1): ?>不合格<?php endif; ?>
           <?php if($v['check_comp'] == 0): ?>未审核<?php endif; ?>
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
          <font style="font-size:20px;">活动记录</font>
        </h5>
        <div class="foldContent">
          <table class="table table-bordered" style="font-size:13px;">
          <tr>
          <th>标题</th>
          <th>日期</th>
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
           <?php if($v['check_comp'] == 1): ?>不合格<?php endif; ?>
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
          <font style="font-size:20px;">荣誉记录</font>
        </h5>
        <div class="foldContent">
          <table class="table table-bordered" style="font-size:13px;">
          <tr>
          <th>标题</th>
          <th>日期</th>
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
           <?php if($v['check_comp'] == 1): ?>不合格<?php endif; ?>
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
          <font style="font-size:20px;">心得体会</font>
        </h5>
        <div class="foldContent">
          <table class="table table-bordered" style="font-size:13px;">
          <tr>
          <th>标题</th>
          <th>日期</th>
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
           <?php if($v['check_comp'] == 1): ?>不合格<?php endif; ?>
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
     
    </div>
  </div>
打印日期：<?php echo date("Y-m-d H:i:s");?>
<!--endprint1-->
</body>
</html>