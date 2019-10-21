<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title> 业务审核</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/page-min.css" rel="stylesheet" type="text/css" />

 </head>
 <body>
  
  <div class="container">
 
    <form id="searchForm" action="<?php echo U('Admin/Check/checklist');?>" method="post" target="query-show" class="form-horizontal well">
      <table>
	    <tr>
            
            <td>
                <select name="task_comp">
                    <option value="-1">所有</option>
                    <option value="0" selected="selected">待审核</option>
                    <option value="1">审核未通过</option>
                    <option value="2">审核通过</option> 
                </select>&nbsp;&nbsp;
                
                <select name="entrance">
                    <option value="-1">所有年级</option>
                    <?php if(is_array($entranceRange)): foreach($entranceRange as $key=>$v): ?><option value="<?php echo ($v); ?>"><?php echo ($v); ?></option><?php endforeach; endif; ?>
                </select>
                
                <?php if($college): ?><select name="college" id="college">
                <option value="-1" >所有学院</option>
                    <?php if(is_array($college)): foreach($college as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"<?php if($userinfo['college']==$v['name']): ?>selected="selected"<?php endif; ?>><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
                </select>&nbsp;&nbsp;<?php endif; ?>
                <?php if($major): ?><select name="major" id="major">
                <option value="-1"  class="stay">所有专业</option>
                    <?php if(is_array($major)): foreach($major as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
                </select>&nbsp;&nbsp;<?php endif; ?>

                <?php if($class): ?><select name="class" id="class">
                <option value="-1" <?php if($userinfo['class']==null): ?>selected="selected"<?php endif; ?> class="stay">所有班级</option>
                    <?php if(is_array($class)): foreach($class as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"<?php if($userinfo['class']==$v['name']): ?>selected="selected"<?php endif; ?>><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
                </select>&nbsp;&nbsp;<?php endif; ?>
            </td>
            <td>
            
          	<button style="margin-left:30px;" type="button" id="btnSearch" class="button button-primary">搜索</button>
        	
        	</td>
	    </tr>
	</table>
        
      </div>
    </form>
 
    <div class="search-grid-container">
      <div id="grid"></div>
    </div>
  </div>

  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/bui-min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/config-min.js"></script>
<script type="text/javascript">
  var showdetail;
  BUI.use(['common/search','common/page'],function (Search) {
    var enumObj = {"0":"待审核","1":"审核未通过","2":"审核通过"},
      columns = [
          {title:'姓名',dataIndex:'name',width:60},
          {title:'学号',dataIndex:'number',width:100},
          {title:'年级',dataIndex:'entrance',width:50},
          {title:'任务名',dataIndex:'title',width:200},
          //
          {title:'学院',dataIndex:'college',width:100},
          {title:'专业',dataIndex:'major',width:150},
          {title:'班级',dataIndex:'class',width:100},
          {title:'任务阶段',dataIndex:'status',width:100},
          {title:'审核状态',dataIndex:'task_comp',width:100,renderer:BUI.Grid.Format.enumRenderer(enumObj)},
          {title:'操作',dataIndex:'',width:50,renderer : function(value,obj){

              checkStr =  '<span  class="singlecheck grid-command" title="审核">审核</span>';
               
              cancelStr = '<span class="cancelchecked grid-command" title="取消审核通过">取消审核</span>';//页面操作不需要使用Search.

             if(obj.task_comp==0) return checkStr;
             if(obj.task_comp==1) return checkStr;
             if(obj.task_comp==2) return cancelStr;
          }},
          //详情按钮
          {title:'详情',dataIndex:'',width:50,renderer : function(value,obj){
              detailStr = '<span class="detailchecked grid-command" title="详情">详情</span>';
             return detailStr;
            
          }},
        ],
      store = Search.createStore("<?php echo U('Admin/Check/checklist');?>"),
      gridCfg = Search.createGridCfg(columns,{
        tbar : {
          items : [
		            {text : '<i class="icon-edit"></i>批量审核',btnCls : 'button button-small',handler:checkFunction},
		            {text : '<i class="icon-remove"></i>取消审核',btnCls : 'button button-small',handler : cancleFunction}
          		  ]
        },
        plugins : [BUI.Grid.Plugins.CheckSelection,BUI.Grid.Plugins.AutoFit], // 插件形式引入多选表格
       
      });
 
    var  search = new Search({
        store : store,
        gridCfg : gridCfg
      }),
      grid = search.get('grid');
      
    //批量审核操作
    function checkFunction(){
    	var selections = grid.getSelection();
    	checkItems(selections);
    	   
    }
    function checkItems(items){
    	var ids = [];
        BUI.each(items,function(item){
        ids.push(item.task_ok_id);
      });
        if(ids.length){
			        	BUI.use('bui/overlay',function(Overlay){
			            
			          var dialog = new Overlay.Dialog({
			            title:'批量审核操作',
			            width:500,
			            height:320,
			            closeAction : 'destroy', //每次关闭dialog释放
			            //配置DOM容器的编号
			            contentId:'content',
			            success:function () {
			            	//alert($("[name='check_result']").val());
			            	var check_result = $("[name='check_result']").val();
			            	var check_feedback= $("[name='check_feedback']").val();
			            	 $.ajax({
					            url : '<?php echo U("Admin/Check/checkHandle");?>',
					            dataType : 'json',
					            data : {ids : ids,check_result:check_result,check_feedback:check_feedback},
					            success : function(data){
					              if(data){ //审核成功
					              	BUI.Message.Show({
							          msg : '批量审核成功',
							          icon : 'success',
							          buttons : [],
							          autoHide : true,
							          autoHideDelay : 2000
							        });
					                search.load();
					              }else{ //审核失败
					                BUI.Message.Alert('批量审核失败或部分审核失败！');
					              }
					            }
					        });

			              this.close();
			            },

			          });
			          dialog.show();
			          dialog.on('afterDestroy',function(ev){
						    $("#content").attr("type","hidden")
						  });
			        
			      });
        }
    }
    //详情页
    
    $(".detailchecked").live('click',function(event){
        var ids = [];ids.length = 0;
        var items = grid.getSelection();
        BUI.each(items,function(item){
        ids.push(item.task_ok_id);
        });
        $.ajax({
                    url : '<?php echo U("Admin/Check/checkshowdetail");?>',
                    dataType : 'json',
                    data : {ids: ids},
                    success : function(data){
                        if(data) {
                             BUI.use('bui/overlay',function(Overlay){
                              var dialog = new Overlay.Dialog({
                                title:'详情页',
                                closeAction : 'destroy', //每次关闭dialog释放
                                //配置DOM容器的编号
                                mask:false,  //设置是否模态
                                buttons:[],
                                bodyContent:data
                              });
                              dialog.show();
                             /* dialog.on('afterDestroy',function(ev){
                              $("#detail").attr("type","hidden")
                            });*/
                            
                          });
                        }
                        else ;
                    }
                  });
      
     grid.clearSelection();//动作完成移出选项
     });
    //单个审核操作
    $(".singlecheck").live('click',function(event){
     	var selections = grid.getSelection();
        checkItems(selections);
        grid.clearSelection();//动作完成移出选项
     });
    //单个取消审核操作
     $(".cancelchecked").live('click',function(event){
     	var selections = grid.getSelection();
        cancleItems(selections);
        grid.clearSelection();//动作完成移出选项
     });
    //取消审核操作
    function cancleFunction(){
      var selections = grid.getSelection();
      cancleItems(selections);
    }
  });
</script>
 
<body>

<!-- 此节点内部的内容会在弹出框内显示,默认隐藏此节点-->
    <div id="content" class="hidden" style="display:none">
      <form id="checkform" class="form-horizontal" type="hidden" action="<?php echo U('Admin/Check/checkHandle');?>">
        <div class="row">
          
          <div class="control-group span8">
            <label class="control-label">审核结果：</label>
            <div class="controls">
            <select name="check_result" class="input-normal" >
              <option value="0">请选择</option>
              <option value="5">A+</option>
              <option value="4">A</option>
              <option value="3">B+</option>
              <option value="2">B</option>
              <option value="1">C</option>
            </select>
             
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="control-group span15">
            <label class="control-label">审核意见：</label>
            <div class="controls control-row4">
              <textarea name="check_feedback" class="input-large " type="text"></textarea>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- 此节点内部的内容会在弹出框内显示,默认隐藏此节点END-->
    <!-- 详细页  此节点内部的内容会在弹出框内显示,默认隐藏此节点-->
    <div id="detail" class="hidden" style="display:none">
     
    </div>
    <!-- 此节点内部的内容会在弹出框内显示,默认隐藏此节点END-->
</html>