<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<script type="text/javascript" src="__PUBLIC__/lib/jquery-1.10.1.min.js"></script>
	<title>Document</title>
	<style>
	body{
		margin: 0 auto;
	}
	#youkuplayer{
		margin: 0 auto;
	}
	</style>
</head>
<body>
<div id="youkuplayer" style="width:960px;height:550px"></div>
<script>
 var Videoid = <?php echo ($vid); ?>;
 var t;
 var increace = true; //是否可以往数据库增加时间
 var count = -1; //计时器
 var time1=-1,time2=0;
 function recorder(){
    count++;
    if(count%2 == 0){  //间隔一段时间取样当前播放时间，若相同则为暂停状态
      	time1 = player.currentTime();
    }else{
    	time2 = player.currentTime();
    }
    if(time1==time2) increace = false;
    else increace = true;
    if(count >= 30){
	    count = 0;
	    	if(increace){
			jQuery.post("<?php echo U('Index/Video/recorder','','');?>",{add:1,vid:Videoid},function(ok){
				if(!ok) alert("播放异常，请刷新重试");
			});	
	 	}
    }
    t = setTimeout("recorder()",2000);

   }
</script>
<script type="text/javascript" src="http://player.youku.com/jsapi">

player = new YKU.Player('youkuplayer',{

styleid: '7',

client_id: 'e78f66d96a9b4bed',

vid: '<?php echo ($url); ?>',

autoplay: true,

show_related: true,

events:{

onPlayStart: function(){ recorder() },

onPlayerReady: function(){ /*your code*/ },

onPlayEnd: function(){ increace = false; }

}

});

</script>






</script>


</body>
</html>