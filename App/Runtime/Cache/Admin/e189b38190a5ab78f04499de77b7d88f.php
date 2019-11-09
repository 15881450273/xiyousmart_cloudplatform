<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>node</title>
  <!--jquery资源引入-->
  <script type="text/javascript" src="__PUBLIC__/lib/jquery-1.10.1.min.js"></script>
  <!--bootstrap3资源引入-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap3/css/bootstrap.min.css" />
  <script type="text/javascript" src="__PUBLIC__/bootstrap3/js/bootstrap.min.js"></script>
  <!--fancybox资源引入-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/fancybox/source/jquery.fancybox.css" />
  <script type="text/javascript" src="__PUBLIC__/fancybox/source/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="__PUBLIC__/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
  <!--弹出对话框-->
    <link rel="stylesheet" href="__PUBLIC__/artDialog/css/ui-dialog.css">
    <script src="__PUBLIC__/artDialog/dist/dialog-plus.js"></script>
</head>
<body>
    <div id="wrap"><center>
        <a type="button" href="<?php echo U('Admin/Rbac/addClasses');?>" class='add-app various btn btn-danger' data-fancybox-type="iframe" style="margin-top:5px;margin-bottom:5px;">添加学院</a></center>
        <?php if(is_array($classes)): foreach($classes as $key=>$app): ?><div class="app panel panel-primary">
               <div class="panel-heading" >
                   <strong>◆<?php echo ($app["name"]); ?></strong>
          
                    【<a style="color:white;" href="<?php echo U('Admin/Rbac/addClasses',array('fid'=>$app['id'],'flag'=>2));?>" class='various' data-fancybox-type="iframe">添加专业</a>】
                    【<a style="color:white;" href="<?php echo U('Admin/Rbac/editClasses',array('id'=>$app['id'],'flag'=>1));?>" class='various' data-fancybox-type="iframe">修改</a>】
                    【<a style="color:white;"  nodeid="<?php echo ($app['id']); ?>" class="del">删除</a>】
               </div>
            
            <?php if(is_array($app['child'])): foreach($app['child'] as $key=>$action): ?><dl class="panel panel-success" style="margin-left:10px;margin-right:10px;">
                    <dt class="panel-heading" >
                    ★<?php echo ($action["name"]); ?>
                    【<a href="<?php echo U('Admin/Rbac/addClasses',array('fid' =>$action['id'],'flag'=>3));?>" class='various' data-fancybox-type="iframe">添加班级</a>】
                    【<a href="<?php echo U('Admin/Rbac/editClasses',array('id' =>$action['id'],'flag'=>2));?>" class='various' data-fancybox-type="iframe">修改</a>】
                    【<a nodeid="<?php echo ($action['id']); ?>" class="del">删除</a>】
                    </dt>
                    
                    <dd class="panel panel-warning" style="margin-left:10px;margin-right:10px;">
                      <div class="panel-heading" >
                        <?php if(is_array($action['child'])): foreach($action['child'] as $key=>$method): ?>●<?php echo ($method["name"]); ?>
                        【<a href="<?php echo U('Admin/Rbac/editClasses',array('id' =>$method['id'],'flag'=>3));?>" class='various' data-fancybox-type="iframe">修改</a>】
                        【<a nodeid="<?php echo ($method['id']); ?>" class="del">删除</a>】&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
                      </div>
                    </dd>
                </dl><?php endforeach; endif; ?>
            </div><?php endforeach; endif; ?>

    </div>
<script>
$(document).ready(function() {
    $(".various").fancybox({
      maxWidth  : 800,
      maxHeight : 600,
      fitToView : false,
      width   : '50%',
      height    : '80%',
      autoSize  : false,
      closeClick  : true,
      openEffect  : 'elastic',
      closeEffect : 'elastic',
      openSpeed  : 150,
      closeSpeed  : 150,
      scrolling : 'no',
      preload   : true
      
    });
    $(".del").click(function(){
       var nodeid = $(this).attr("nodeid");
      var d = dialog({
        title: '提示',
        content: '确定要删除？？',
        okValue: '确定',
        ok: function () {
                $.post("<?php echo U('Admin/Rbac/delClasses','','');?>",{id:""+nodeid+""},function(status){
                    if(status){
                        var d = dialog({
                                            content: '恭喜，删除成功咯;-)'
                                        });
                                        d.show();
                                        setTimeout(function () {
                                            d.close().remove();
                                            location.reload();
                                        }, 2000);
                                        
                    }else{
                        var d = dialog({
                                            content: '哎呀，删除失败啦-_-!'
                                        });
                                        d.show();
                                        setTimeout(function () {
                                            d.close().remove();
                                        }, 2000);
                                        location.reload();
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