<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bui-bootstrap/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bui-bootstrap/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bui-bootstrap/Css/style.css" />
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/jquery.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/bootstrap.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/ckform.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/common.js"></script>
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
<form id="addVideo" action="<?php echo U('Admin/Video/addVideoHandle');?>" method="post" class="definewidth m20">
    <table class="table table-bordered table-hover definewidth m10">
        <tr>
            <td class="tableleft">视频标题</td>
            <td><input type="text" name="title"/></td>
        </tr>
        <tr>
            <td class="tableleft">视频介绍</td>
            <td><textarea type="text" name="content"/></textarea></td>
        </tr>
        <tr>
            <td class="tableleft">视频Flash地址</td>
            <td><textarea type="text" name="url"/></textarea></td>
        </tr>
        <tr>
            <td class="tableleft">状态</td>
            <td>
                <input type="radio" name="effective" value="1" checked/> 启用  
                <input type="radio" name="effective" value="0"/> 禁用
            </td>
        </tr>
        <tr>
            <td class="tableleft">标签</td>
            <td><input type="text" name="category"/></td>
        </tr>
        <tr>
            <td class="tableleft"></td>
            <td>
                <button type="submit" class="btn btn-primary" type="button">保存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<script>
    $(document).ready(function(){
    $("#addVideo").submit(function(){
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
                            }, 2000);
                            parent.location.reload();
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