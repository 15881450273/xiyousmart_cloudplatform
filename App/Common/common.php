<?php
function p($array){
	dump($array,1,'<pre>',0);
}


/**
 * [task_merge description]
 * @param  [type]  $task [要处理的任务数组]
 * @param  integer $ok   [该任务该用户是否已经完成]
 * @param  integer $pid  [父级ID]
 * @return [type]        [任务的多维数组]
 */
function task_merge($task,$ok=null,$fid =0){
	$arr = array();
	foreach ($task as $v){
		if(is_array($ok)){
			$v['ok'] = in_array($v['id'],$ok) ? 1 : 0;
		}
		if($v['fid']==$fid){
			$v['child'] = task_merge($task,$ok,$v['id']);
			$arr[]=$v;
		}
	}
return $arr;
}

/**
 * [class_merge description]
 * @param  [type]  $class [学院专业班级数组]
 * @return [type]         [数组]
 */
function class_convert($userinfo){
	if($userinfo['college']&&$userinfo['major']&&$userinfo['class']){
		$userinfo['college'] = M('class')->where('id='.$userinfo['college'])->getField('name');
		$userinfo['major'] = M('class')->where('id='.$userinfo['major'])->getField('name');
		$userinfo['class'] = M('class')->where('id='.$userinfo['class'])->getField('name');
	}
return $userinfo;
}
/**
 * [operation description]
 * @param  [type] $score [成绩]
 * @param  [type] $operation [运算式]
 * @return [type]        [汇总字段值]
 */
function operation($score,$operation){
	    $i =-1;
	    $result = 0;
		$field = array();
		foreach ($score as $v) {
			$field[$i]=$v;$i++;
		}
		eval('$result='.$operation.';');
		return $result;

}
//获得当前在校生年级数
function freshman(){
	if(Config('basedsystime')==1){
		$thisyear = date('Y',time());
		$thismouth = date('m',time());
		if($thismouth<8){
			$thisyear = $thisyear - 1;
			}
			return $thisyear;
		}else{
			return Config('freshman');
		}

}
function senior(){
	return freshman()-3;
}

?>