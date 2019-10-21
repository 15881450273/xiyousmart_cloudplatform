<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="sdfdsd" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<!--jquery资源引入-->
	<script type="text/javascript" src="__PUBLIC__/lib/jquery-1.10.1.min.js"></script>
	<!--bootstrap3资源引入-->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap3/css/bootstrap.min.css" />
	<script type="text/javascript" src="__PUBLIC__/bootstrap3/js/bootstrap.min.js"></script>
	<title>微党课</title>
	<script> 
	
		function isIE() { //ie?  
		    if (!!window.ActiveXObject || "ActiveXObject" in window)  
		        return true;  
		    else  
		        return false;  
		}
		if(isIE()){
			window.stop ? window.stop() : document.execCommand("Stop");
			alert('微软都放弃IE了，你还不放弃吗？兄弟，出门左拐找Chrome、Firefox吧，360、百度、腾讯、UC这些浏览器也是可以的哦，不然你看视频没记录的。怪我太懒，不想适配IE，见谅哈-_-');
			history.back();
		}
		//阻止退出
	    window.onbeforeunload = function(event) {
		 return confirm("确定退出吗");
		 }
	</script>
	
	<style>
	body{
			width: 800px;
			margin: 0 auto;
      		height: auto;
		}
	.card{
		width: 180px;
		height:200px;
		margin:auto 10px;
		overflow: hidden;
		float: left;
		display: block;
	}
	.content{
		padding: 0px 8px;
	}
	</style>
</head>
<body>

<div class="container-fluid">
<div class="page-header">
  <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;入党之路 <small style="float:right;">西柚智慧党建云平台</small></h1>
</div>
	<div class="row">
	  <div class="col-md-2">
		  <ul class="nav nav-pills nav-stacked">
		  <li role="presentation"><a href="<?php echo U('Index/Index/index');?>">主页</a></li>
		  <li role="presentation"><a href="<?php echo U('Home/Index/index');?>">业务</a></li>
		  <li role="presentation"  class="active"><a href="<?php echo U('Index/Video/index');?>">视频学习</a></li>
		  <li role="presentation"><a href="<?php echo U('Index/Task/activityList');?>?type=1">活动/荣誉/心得</a></li>
		  <li role="presentation" ><a href="<?php echo U('Home/Account/userinfo');?>">账户</a></li>
		 
		  </ul>


	  </div>
	  <div class="col-md-10">

	  <div class="panel panel-success">
		  <div class="panel-heading">
		  <ul class="nav nav-tabs">
		 <li role="presentation" class="active"><a href="<?php echo U('Index/Video/index');?>">在线学习</a></li>
		 <li role="presentation"><a href="<?php echo U('Index/Video/watched');?>">学习记录</a></li>
		  
		  </ul>
		  </div>
		  <div class="panel-body">
		  <?php if(is_array($video)): foreach($video as $key=>$v): ?><div class="card">
			<h4>
				<a id="youkuplayer" href="<?php echo U('Index/Video/play');?>?vid=<?php echo ($v['id']); ?>&url=<?php echo ($v['url']); ?>" class="list-group-item swf" data-fancybox-type="swf"><?php echo ($v['title']); ?></a>
			</h4>
				<div class="content">
				<?php echo ($v['content']); ?>


				</div>
			</div><?php endforeach; endif; ?>
			
				
		  
		    
	
		   
			   
		  </div>   
		</div>
	  </div>
	</div>
</div>
</body>
</html>