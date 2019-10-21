<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>用户注册</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/bui-bootstrap/Css/bootstrap.css" />
    
    <script src="__PUBLIC__/bui-bootstrap/assets/js/jquery-1.8.1.min.js"></script>
    <script src="__PUBLIC__/bui-bootstrap/assets/js/bui-min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/bootstrap.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/ckform.js"></script>
    <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/Js/common.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/area.js"></script>
    <script type="text/javascript" src="__PUBLIC__/lib/jquery.form.js"></script>
    <style type="text/css">
       
            body{
            width: 800px;
            margin: 0 auto;
            height: auto;
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
<div class="page-header" style="background-color:">
  <h1>用户注册 <small style="float:right;">党员发展评估系统</small></h1>
</div>
<form id="userinfo" action="<?php echo U('Home/Login/registerHandle');?>" method="post" class="definewidth m20">
    <?php if($checkemail == 1): ?><input name="code" type="hidden" id="code" value="<?php echo ($code); ?>"><?php endif; ?>
    <table name="userinfo" class="table table-bordered table-hover definewidth m10">
        <tr>
            <td width="15%" class="tableleft">姓名<font color="red">*</font></td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td class="tableleft">性别<font color="red">*</font></td>
            <td>
                男&nbsp;<input type="radio" name="sex" value="0"/> &nbsp;&nbsp;&nbsp;
                女&nbsp;<input type="radio" name="sex" value="1"/> 
            </td>
        </tr>
        <tr>
            <td class="tableleft">学号<font color="red">*</font></td>
            <td><input type="text" name="number" id="number"/></td>
        </tr>
        <tr>
            <td class="tableleft">入学年份<font color="red">*</font></td>
            <td>
                <select name="entrance" id="entrance">
                <option >请选择入学时间</option>
                <?php if(is_array($entrance)): foreach($entrance as $key=>$en): ?><option value="<?php echo ($en); ?>"><?php echo ($en); ?> </option><?php endforeach; endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="tableleft">学院专业年级<font color="red">*</font></td>
            <td>
                <select name="college" id="college" style="width:30%;">
                <option class="stay">请选择学院</option>
                    <?php if(is_array($college)): foreach($college as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
                </select>&nbsp;&nbsp;
                <select name="major" id="major" style="width:30%;">
                <option class="stay">请选择专业</option>
                    <?php if(is_array($major)): foreach($major as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
                </select>&nbsp;&nbsp;
                <select name="class" id="class" style="width:30%;">
                <option class="stay">请选择班级</option>
                    <?php if(is_array($class)): foreach($class as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
                </select>&nbsp;&nbsp;
            </td>
        </tr>
       <?php if($checkemail == 0): ?><tr>
            <td class="tableleft">邮箱号<font color="red">*</font></td>
            <td><input type="text" name="email" /></td>
        </tr><?php endif; ?>
        <tr>
            <td class="tableleft">QQ号<font color="red">*</font></td>
            <td><input type="text" name="qq" class="form-control" id="qq1" placeholder="QQ号作为默认密码"/>  
                <input type="text" class="form-control" id="qq2" placeholder="请再次输入QQ号">
            </td>
        </tr>
        <!-- <tr>
            <td class="tableleft">E-mail<font color="red">*</font></td>
            <td><input type="text" name="email"/></td>
        </tr> -->
        <tr><td colspan="2">
        <button id="submit" class="btn btn-primary" type="submit">完成注册并激活</button>
         <div id="output1"></div>
        </td></tr>
    </table>
</form>
</body>
</html>
<script src="__PUBLIC__/bui-bootstrap/assets/js/bui-min.js"></script>
<script>

   
    $(document).ready(function(){

        //填了学号后自动填写入学年份
         $("#number").blur(function(){
            var entrance = $(this).val().substring(0,4);
            var en = $("select[name='entrance']");
            //alert(en.val());
            //改变选择框
              var kk = document.getElementById("entrance").options;  
              for (var i=0; i<kk.length; i++) {  
              if (kk[i].value==entrance) {  
               kk[i].selected=true;  }}
         });
    
        //选择了学院后的动作
        $("select[name='college']").change(function(){
            $("#major").children().remove("[class!='stay']");
            $("#class").children().remove("[class!='stay']");
            $.post("<?php echo U('Home/Login/college','','');?>",{col:$(this).val().trim()},function(data){
                    //alert(data[0].name);
                    var circle = '' ;
                    for(var i=0;data[i]!=null;i++){
                        circle+="<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                    }
                    //alert(circle);
                    $("#major").append(circle);

            })
         });
    //选择了专业后的动作
        $("#major").change(function(){
            $("#class").children().remove("[class!='stay']");
            $.post("<?php echo U('Home/Login/major','','');?>",{col:$(this).val().trim()},function(data){
                    //alert(data[0].name);
                    var circle = '' ;
                    for(var i=0;data[i]!=null;i++){
                        circle+="<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                    }
                    //alert(circle);
                    $("#class").append(circle);

            })
        });

        var dosave = null;
      function validate(formData, jqForm, options){
        for (var i=0; i < formData.length; i++) { 
            if (!formData[i].value) { 
                alert('你的 '+formData[i].name+' 栏目没有填写哦！'); 
                return false;  } 
                } 
                //正在发送对话框
                 dosave = dialog({content: '正在完成激活，请稍等下啊-)'});
                 dosave.show();
            }        
            $("#userinfo").submit(function(){

                //验证两次QQ输入一致
                if($("#qq1").val()!=$("#qq2").val()){
                    alert("两次输入的QQ号不一致，请重新输入");
                    return false;
                }
                
                var options = {
                    target : '#output1',
                    dataType : 'json',
                    beforeSubmit : validate,
                    success:function(data){
                        dosave.close().remove();
                        if(data == 'sended'){
                            var d = dialog({
                                content: '恭喜，注册成功咯，快去登陆吧;-)'
                            });
                            d.show();
                            setTimeout(function () {
                                d.close().remove();
                                location.href = "<?php echo U('Index/Index/index');?>";
                            }, 3000);
                            
                        }
                        else if(data == 'sendfail') {
                            var d = dialog({
                                content: '<font color="blue">注册成功，但这个好消息你的邮箱却收不到</font>'
                            });
                            d.show();
                            setTimeout(function () {
                                d.close().remove();
                                location.href = "<?php echo U('Index/Index/index');?>";
                            }, 2000);
                        }else{
                            var d = dialog({
                                content: '<font color="red">很不幸的告诉你，注册失败了，再试试吧</font>'
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