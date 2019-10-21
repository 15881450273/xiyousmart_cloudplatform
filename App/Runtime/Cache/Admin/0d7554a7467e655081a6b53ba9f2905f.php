<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>注册审核</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/bs3/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="__PUBLIC__/bui-bootstrap/assets/css/page-min.css" rel="stylesheet" type="text/css" />

 </head>
 <body>
  
  <div class="container">
    <div class="search-grid-container">
      <div id="grid"></div>
    </div>
  </div>

  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/bui-min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/bui-bootstrap/assets/js/config-min.js"></script>
<script type="text/javascript">
   
  BUI.use(['common/search','common/page'],function (Search) {
    var enumObj = {"0":"待审核","1":"审核未通过","2":"审核通过"},
      columns = [
          {title:'姓名',dataIndex:'name',width:60,renderer:function(v){
            return Search.createLink({
              id : 'detail' + v,
              title : '学生信息',
              text : v,
              href : 'detail/example.html'
            });
          }},
          {title:'学号',dataIndex:'number',width:100},
          {title:'年级',dataIndex:'entrance',width:50},
          {title:'学院',dataIndex:'college',width:100},
          {title:'专业',dataIndex:'major',width:150},
          {title:'班级',dataIndex:'class',width:100},
          {title:'电话',dataIndex:'phone',width:100},
          {title:'QQ',dataIndex:'qq',width:100},
          {title:'操作',dataIndex:'',width:200,renderer : function(value,obj){
               
              checkStr = '<span class="registerCheck grid-command" title="注册审核">审核</span>';//页面操作不需要使用Search.createLink
             return checkStr;
             
          }}
        ],
      store = Search.createStore("<?php echo U('Admin/Check/registerList');?>"),
      gridCfg = Search.createGridCfg(columns,{
        tbar : {
          items : [
		            {text : '<i class="icon-edit"></i>批量审核',btnCls : 'button button-small',handler:registerFunction},
                {text : '<i class="icon-remove"></i>删除记录',btnCls : 'button button-small',handler:delFunction},
          		  ]
        },
        plugins : [BUI.Grid.Plugins.CheckSelection,BUI.Grid.Plugins.AutoFit], // 插件形式引入多选表格

      });
 
    var  search = new Search({
        store : store,
        gridCfg : gridCfg
      }),
      grid = search.get('grid');
    
    //单个审核操作
     $(".registerCheck").live('click',function(event){
     	var selections = grid.getSelection();
        registerItems(selections);
     });
    //审核操作
    function registerFunction(){
      var selections = grid.getSelection();
      registerItems(selections);
    }
    
    function registerItems(items){
      var ids = [];
      BUI.each(items,function(item){
        ids.push(item.uid);
      });
 
      if(ids.length){
        BUI.Message.Confirm('确认要审核选中的记录么？',function(){
          $.ajax({
            url : '<?php echo U('Admin/Check/registerCheckHandle');?>',
            dataType : 'json',
            data : {ids : ids},
            success : function(data){
              if(data){ //操作成功
                search.load();
              }else{ //操作失败
                BUI.Message.Alert('操作失败！');
              }
            }
        });
        },'question');
      }
    }
 
//删除操作
    function delFunction(){
      var selections = grid.getSelection();
      delItems(selections);
    }
    
    function delItems(items){
      var ids = [];
      BUI.each(items,function(item){
        ids.push(item.uid);
      });
 
      if(ids.length){
        BUI.Message.Confirm('确认要删除选中的记录么？',function(){
          $.ajax({
            url : '<?php echo U('Admin/Check/delCheckHandle');?>',
            dataType : 'json',
            data : {ids : ids},
            success : function(data){
              if(data){ //操作成功
                search.load();
              }else{ //操作失败
                BUI.Message.Alert('操作失败！');
              }
            }
        });
        },'question');
      }
    }
    //监听事件，删除一条记录
    grid.on('cellclick',function(ev){
      var sender = $(ev.domTarget); //点击的Dom
      if(sender.hasClass('btn-del')){
        var record = ev.record;
        delItems([record]);
      }
    });
  });


</script>
 
<body>
</html>