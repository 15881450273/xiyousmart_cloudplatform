<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>活动/荣誉/心得</title>
	<!--jquery资源引入-->
  <script type="text/javascript" src="__PUBLIC__/lib/jquery-1.10.1.min.js"></script> 
  <!--bootstrap3资源引入-->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap3/css/bootstrap.min.css" />
	   <!--fancybox资源引入-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/fancybox/source/jquery.fancybox.css" />
  <script type="text/javascript" src="__PUBLIC__/fancybox/source/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="__PUBLIC__/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	 <script type="text/javascript" src="__PUBLIC__/bootstrap3/js/bootstrap.min.js"></script> 
	 <!--弹出对话框-->
    <link rel="stylesheet" href="__PUBLIC__/artDialog/css/ui-dialog.css">
    <script src="__PUBLIC__/artDialog/dist/dialog-plus.js"></script>
	<!-- <link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/dpl-min.css" rel="stylesheet" type="text/css" />
	    <link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/bui.css" rel="stylesheet" type="text/css" />
	    <link href="__PUBLIC__/bui-bootstrap/assets/css/page-min.css" rel="stylesheet" type="text/css" /> -->
	<style>
	body{
			width: 800px;
			margin: 0 auto;
      		height: auto;
		}
	.bui-grid-hd-inner{
		overflow: visible;
	}
	tr th {
		height: 40px;
	}
	</style>
</head>
<body>
<div class="container-fluid">
<div class="page-header">
  <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;个人中心 <small style="float:right;"> 党员发展评估系统</small></h1>
</div>
	<div class="row">
	  <div class="col-md-2">
		  <ul class="nav nav-pills nav-stacked">
		  <li role="presentation"><a href="<?php echo U('Index/Index/index');?>">主页</a></li>
		  <li role="presentation"><a href="<?php echo U('Home/Index/index');?>">业务</a></li>
		  <li role="presentation"><a href="<?php echo U('Index/Video/index');?>">视频学习</a></li>
		  <li role="presentation" class="active"><a href="<?php echo U('Index/Task/activityList');?>?type=1">活动/荣誉/心得</a></li>
		  <li role="presentation" ><a href="<?php echo U('Home/Account/userinfo');?>">账户</a></li>
		 
		  </ul>


	  </div>
	  <div class="col-md-10">

	  <div class="panel panel-success">
		  <div class="panel-heading">
		  <ul class="nav nav-tabs">
		 <li role="presentation" <?php if($type == 1): ?>class="active"<?php endif; ?>> <a href="<?php echo U('Index/Task/activityList');?>?type=1" >活动记录</a></li>
		 <li role="presentation" <?php if($type == 2): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/Task/activityList');?>?type=2">荣誉记录</a></li>
		  <li role="presentation" <?php if($type == 3): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/Task/activityList');?>?type=3">心得体会</a></li>
		 
		  </ul>
		  </div>
		  <div class="panel-body">
		  <table class="table table-striped table-bordered">
			  <tr>
			  	<th>标题</th>
			  	<th>提交时间</th>
			  	<th>审核结果</th>
			  	<th>审核意见</th>
			  	<th>操作</th>
			  </tr>
			  <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
			   <td><a href="<?php echo U('Index/Task/contentShow');?>?id=<?php echo ($v['id']); ?>" class="various" data-fancybox-type="iframe"><?php echo ($v['title']); ?></a></td>
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
			   <td><?php echo ($v['check_feedback']); ?></td>
			   <td>
			   	   <?php if($v["check_comp"] < 2): ?><a href="<?php echo U('Index/Task/addActivity');?>?id=<?php echo ($v["id"]); ?>" target="_blank">修改</a> <a delid="<?php echo ($v["id"]); ?>" class="del">删除</a>
					   <?php else: ?> 审核已通过<br/>不可修改<?php endif; ?>
				</td>
				   
				</tr><?php endforeach; endif; ?>
		 </table>
		 
			  </div>   
		</div>
	  </div>
	</div>
</div>
<script>
$(document).ready(function(){
    $(".various").fancybox({
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
      
    });
     //删除流程信息
   $(".del").click(function(){
     var delid = $(this).attr("delid");
         var d = dialog({
              title: '提示',
              content: '确定要删除？？',
              okValue: '确定',
              ok: function () {
                 $.ajax({
             type: 'POST',
             url: '<?php echo U("Index/Task/delActivity");?>' ,
             data: {delid:delid} ,
             dataType: 'json',
             success:function(data){
               if(data){
                            var d = dialog({
                                content: '恭喜，删除成功咯;-)'
                            });
                            d.show();
                            setTimeout(function () {
                                d.close().remove();
                                location.reload();
                                
                            }, 2000);
                            
                        }
                        else {
                            var d = dialog({
                                content: '哎呀，删除失败啦-_-!'
                            });
                            d.show();
                            setTimeout(function () {
                                d.close().remove();
                            }, 2000);
                        }

             }
        });
          return;
              },
              cancelValue: '取消',
              cancel: function () {}
          });
        d.show();

      
   });
});
</script>

</body>
</html>