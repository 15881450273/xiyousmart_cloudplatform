<?php if (!defined('THINK_PATH')) exit();?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>个人汇总信息</title>
	<!--jquery资源引入-->
  <script type="text/javascript" src="__PUBLIC__/lib/jquery-1.10.1.min.js"></script> 
  <!--bootstrap3资源引入-->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap3/css/bootstrap.min.css" />
	   <!--fancybox资源引入-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/fancybox/source/jquery.fancybox.css" />
  <script type="text/javascript" src="__PUBLIC__/fancybox/source/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="__PUBLIC__/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	 <script type="text/javascript" src="__PUBLIC__/bootstrap3/js/bootstrap.min.js"></script> 

<link type="text/css" rel="stylesheet" href="__PUBLIC__/list/style/common.css">
<link type="text/css" rel="stylesheet" href="__PUBLIC__/list/style/helpcenter.css">
<script type="text/javascript" src="__PUBLIC__/list/script/helpcenter.js" language="javascript"></script>

    
    <style type="text/css">
        body {
            padding: 0 15px;
            width: 900px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<!--container begin-->
<div id="container" class="w990 mlrauto clearfix">
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
			    <td><?php echo ($v["check_time"]); ?></td>
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
			    <td><?php echo ($v["check_time"]); ?></td>
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
			    <td><?php echo ($v["check_time"]); ?></td>
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
			    <td><?php echo ($v["check_time"]); ?></td>
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
    
      
    });
   /* $(".various").fancybox({
      maxWidth  : 1024,
      maxHeight : 700,
      fitToView : true,
      
      autoSize  : false,
      closeClick  : true,
      openEffect  : 'elastic',
      closeEffect : 'elastic',
      openSpeed  : 150,
      closeSpeed  : 150,
      scrolling : 'no',
      preload   : true
      
    });*/ 
});
</script>
</body>
</html>