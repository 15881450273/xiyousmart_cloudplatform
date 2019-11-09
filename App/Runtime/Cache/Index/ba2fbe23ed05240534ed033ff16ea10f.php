<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	
	<title>showTaskContent</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap3/css/bootstrap.min.css" />
	<script type="text/javascript" src="__PUBLIC__/lib/jquery-1.8.1.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/bootstrap3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/lib/jquery.form.js"></script>
    <!--弹出对话框-->
    <link rel="stylesheet" href="__PUBLIC__/artDialog/css/ui-dialog.css">
    <script src="__PUBLIC__/artDialog/dist/dialog-min.js"></script>
	<!-- 引入ueditor -->
       <script type="text/javascript">
        window.UEDITOR_HOME_URL = '__ROOT__/Data/ueditor/';
         editing  = '<?php echo ($task_ok["task_comp"]); ?>';

        window.onload = function(){
            window.UEDITOR_CONFIG.initialFrameWidth = 900;
            window.UEDITOR_CONFIG.initialFrameHeight = 300;
            //window.UEDITOR_CONFIG.initialFrameHeight
             
     		var ue = UE.getEditor('content');
            var content = '<?php echo ($task_ok["content"]); ?>';
            ue.ready(function() {
            //设置编辑器的内容
            if(editing!=2){
            	ue.setContent(content);
            }
            
            //获取html内容，返回: <p>hello</p>
            //var html = ue.getContent();
            //获取纯文本内容，返回: hello
            //var txt = ue.getContentTxt();
       		 });

        }

       </script>
    <script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.all.min.js"></script>
    <style>
    #main{
    	width:960px;
    	margin:0 auto;
    }
    </style>
</head>
<body>
<div id="main">
	<div class="panel panel-primary">
  <div class="panel-heading" id="title"><font style="font-size:22px;">线上任务 -- 
  <?php echo ($task['title']); ?></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php if($task_ok): ?><font style="color:red;">你已提交本任务</font>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <?php if($task_ok['task_comp'] == 1): ?><font style="color:#FFFF37;font-size:20px;">(审核未通过)</font><?php endif; ?>
	  <?php if($task_ok["task_comp"] == 0): ?><font style="color:#FFFF37;font-size:20px;">(待审核)</font><?php endif; ?>
	  <?php if($task_ok["task_comp"] == 2): ?><font style="color:#FFFF37;font-size:20px;">(审核通过)</font><?php endif; endif; ?>
  <a style="color:white;" href="<?php echo U('Index/Task/doTask');?>?task_id=<?php echo ($task['id']); ?>" target="_blank">在新窗口中打开</a>
  </div>
  <div class="panel-body">
    <?php echo ($task['content']); ?>
  </div>
 </div>
 <div class="panel panel-primary">
  <div class="panel-heading" id="title">
  在下面富文本编辑中完成相关要求
  </div>
  <div class="panel-body">
     <form id="add" action="<?php echo U('Index/Task/doTaskHandle');?>" method="post"  enctype="multipart/form-data">
     <input type="hidden" name="task_id" value="<?php echo ($task['id']); ?>"/>
     <?php if($task_ok): if($task_ok['task_comp'] == 2): echo ($task_ok['content']); ?>
	     <?php else: ?>
	     
	     <input name="editing" type="hidden" value="1"/>
	    <script id="content" type="text/plain" ></script>
      <button type="submit" class="btn btn-primary" type="button">保存</button><?php endif; ?>
	   <?php else: ?>
	   <script id="content" type="text/plain" ></script>
     <button type="submit" class="btn btn-primary" type="button">保存</button><?php endif; ?>
     
  </div>
 </div>
 </div>
 <script>
    $(document).ready(function(){
        $("#add").submit(function(){
                var options = {
                    target : '#output1',
                    dataType : 'json',
                    success:function(data){
                        if(data){
                            var d = dialog({
                                content: '恭喜，保存成功咯;-)'
                            });
                            d.show();
                            setTimeout(function () {
                                d.close().remove();
                                //parent.$.fancybox.close();
                                //关闭浏览器窗口
                                parent.location.reload();
                                  
                                    
                            }, 2000);
                            
                        }
                        else {
                            var d = dialog({
                                content: '哎呀，保存失败啦-_-!'
                            });
                            d.show();
                            setTimeout(function () {
                                d.close().remove();

                            }, 2000);
                        }
                    }
                }
                $(this).ajaxSubmit(options);  
               return false; //阻止表单默认提交  
            });

});

</script>
</body>
</html>