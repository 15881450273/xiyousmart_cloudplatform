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
		  <li role="presentation"><a href="<?php echo U('Home/Account/userinfo');?>">账户</a></li>
		  <li role="presentation" <?php if($type == 'username'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Home/Account/updateinfo');?>?type=username">修改用户名</a></li>
		  <li role="presentation" <?php if($type == 'email'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Home/Account/updateinfo');?>?type=email">修改邮箱</a></li>
		  
		  <li role="presentation"  <?php if($type == 'password'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Home/Account/updateinfo');?>?type=password">修改密码</a></li>
		  </ul>
		  </div>
		  <div class="panel-body">
		  <form class="form-group" action="<?php echo U('Home/Account/updateInfoHandle');?>" method="post">
	<table>
	    <?php if($type == 'username'): ?><tr>
				<td>
					新用户名：
				</td>
				<td>
					<input type="text" class="form-control" name="username" />
				</td>
			</tr><?php endif; ?>
		<?php if($type == 'email'): ?><tr>
				<td>
					邮箱：
				</td>
				<td>
					<input type="text" class="form-control" name="email" />
				</td>
			</tr><?php endif; ?>
		<tr>
			<td>
				验证密码：
			</td>
			<td>
				<input type="password" class="form-control" name="password" />
			</td>
		</tr>
		<?php if($type == 'password'): ?><tr>
				<td>
					新密码：
				</td>
				<td>
					<input type="password" class="form-control" name="password1" />
				</td>
			</tr>
			<tr>
				<td>
					重复新密码：
				</td>
				<td>
					<input type="password" class="form-control" name="password2" />
				</td>
			</tr><?php endif; ?>
	</table>
	<button type="submit" class="btn btn-default">提交</button>
  </form>
		 
			  </div>   
		</div>
	  </div>
	</div>
</div>
</body>
</html>