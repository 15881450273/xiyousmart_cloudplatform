<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>CheckList</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bui-bootstrap/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bui-bootstrap/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bui-bootstrap/Css/style.css" />
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/jquery.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/bootstrap.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/ckform.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/common.js"></script>
    <!--fancybox资源引入-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/fancybox/source/jquery.fancybox.css" />
  <script type="text/javascript" src="__PUBLIC__/fancybox/source/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="__PUBLIC__/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
  <!--弹出对话框-->
    <link rel="stylesheet" href="__PUBLIC__/artDialog/css/ui-dialog.css">
    <script src="__PUBLIC__/artDialog/dist/dialog-plus.js"></script>
    <script type="text/javascript" src="__PUBLIC__/lib/jquery.form.js"></script>
    <style type="text/css">
        body {
            padding-bottom: 40px;
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
	<table class="table table-bordered table-hover definewidth m10">
			<tr>
				<th>姓名</th>
				<th>学号</th>
				<th>年级</th>
				<th>活动名</th>
                <th>专业</th>
                <th>班级</th>
                <th>审核状态</th>
                <th>操作</th>
			</tr>
		<?php if(is_array($check)): foreach($check as $key=>$v): ?><tr>
				<td><?php echo ($v["name"]); ?></td>
                <td><?php echo ($v["number"]); ?></td>
                <td><?php echo ($v["entrance"]); ?></td>
                <td><?php echo ($v["title"]); ?></td>
                <td><?php echo M('class')->where(array('id'=>$v['major']))->getField('name');?></td>
                <td><?php echo M('class')->where(array('id'=>$v['class']))->getField('name');?></td>
                <td>
                    <?php if($v["check_comp"] == 0): ?>未审核<?php endif; ?>
                    <?php if($v["check_comp"] == 1): ?>审核未通过<?php endif; ?>
                    <?php if($v["check_comp"] == 2): ?>审核通过<?php endif; ?>

                </td>
                <td>
                <?php if($v['check_comp'] == 0): ?><else>
                        <a type="button" href="<?php echo U('Admin/Check/activitycheck');?>?uid=<?php echo ($v['uid']); ?>&aid=<?php echo ($v['aid']); ?>" class="check btn btn-success" target="_self" >审核</a><?php endif; ?>
                </td>	
			</tr><?php endforeach; endif; ?>
	</table>
    <?php echo ($page); ?>
</body>
</html>