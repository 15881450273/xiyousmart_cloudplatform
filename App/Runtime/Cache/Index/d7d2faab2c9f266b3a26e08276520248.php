<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo ($show["title"]); ?></title>
</head>
<body>
<center><a style="font-size:13px;" href="<?php echo U('Index/Task/contentShow');?>?id=<?php echo ($show["id"]); ?>" target="_blank">新窗口中打开</a></center>
<h4><?php echo ($show["title"]); ?></h4>
	<?php echo ($show["content"]); ?>
</body>
</html>