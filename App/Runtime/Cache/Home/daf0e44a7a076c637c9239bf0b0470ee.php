<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>账户</title>
	<!--jquery资源引入--><!-- 
  <script type="text/javascript" src="__PUBLIC__/lib/jquery-1.10.1.min.js"></script> -->
  <!--bootstrap3资源引入-->
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap3/css/bootstrap.min.css" />

	<!-- <script type="text/javascript" src="__PUBLIC__/bootstrap3/js/bootstrap.min.js"></script> -->
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
  <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> &nbsp;个人中心 <small style="float:right;">西柚智慧党建云平台</small></h1>
</div>
	<div class="row">
	  <div class="col-md-2">
		 <ul class="nav nav-pills nav-stacked">
		  <li role="presentation"><a href="<?php echo U('Index/Index/index');?>">主页</a></li>
		  <li role="presentation"  ><a href="<?php echo U('Home/Index/index');?>">业务</a></li>
		  <li role="presentation"  ><a href="<?php echo U('Index/Video/index');?>">视频学习</a></li>
		  <li role="presentation"><a href="<?php echo U('Index/Task/activityList');?>?type=1">活动/荣誉/心得</a></li>
		  <li role="presentation" class="active"><a href="<?php echo U('Home/Account/userinfo');?>">账户</a></li>
		 
		  </ul>


	  </div>
	  <div class="col-md-10">

	  <div class="panel panel-success">
		  <div class="panel-heading">
		  <ul class="nav nav-tabs">
		 <li role="presentation" class="active"><a href="<?php echo U('Home/Account/userinfo');?>">账户</a></li>
		 <li role="presentation"><a href="<?php echo U('Home/Account/updateinfo');?>?type=username">修改用户名</a></li>
		  <li role="presentation"><a href="<?php echo U('Home/Account/updateinfo');?>?type=email">修改邮箱</a></li>
		  
		  <li role="presentation"><a href="<?php echo U('Home/Account/updateinfo');?>?type=password">修改密码</a></li>
		  </ul>
		  </div>
		  <div class="panel-body">
		  <table>
		<tr>
			<td>用户名：</td>
			<td><?php echo ($user["username"]); ?></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Home/Account/updateInfo');?>?type=username">修改用户名</a></td>
		</tr>
		<tr>
			<td>邮&nbsp;&nbsp;&nbsp;箱：</td>
			<td><?php echo ($user["email"]); ?></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Home/Account/updateInfo');?>?type=email">修改邮箱</a></td>
		</tr>
		<tr>
			<td>锁&nbsp;&nbsp;&nbsp;定：</td>
			<td><?php if($user['lock']): ?>是<?php else: ?>否<?php endif; ?></td>
		</tr>
		<tr>
			<td colspan="2"><a href="<?php echo U('Home/Account/updateInfo');?>?type=password">修改密码</a></td>
		</tr>
	</table>
		    
	
		   
			   
			  </div>   
		</div>
	  </div>
	</div>
</div>
</body>
</html>