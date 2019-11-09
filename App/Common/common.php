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

//评估数据整合,得到一个二维数组，$arr[uid][time][item_id] = value

function assess_merge($assess,$type){
	$arr = array();
	if($type==1){
		foreach ($assess as $key => $value) {

			$arr[$value['time']][$value['uid']][$value['item_id']] = $value['value'];
			$arr[$value['time']][$value['uid']]['number'] = $value['number'];
			$arr[$value['time']][$value['uid']]['name'] = $value['user_name'];
			$arr[$value['time']][$value['uid']]['uid'] = $value['uid'];
			$arr[$value['time']][$value['uid']]['time'] = $value['time'];
			$arr[$value['time']][$value['uid']]['date'] = $value['date'];
			
		}

		return $arr;
}
if($type==2){
		foreach ($assess as $key => $value) {

			$arr[$value['date']][$value['uid']][$value['item_id']] = $value['value'];
			$arr[$value['date']][$value['uid']]['number'] = $value['number'];
			$arr[$value['date']][$value['uid']]['name'] = $value['user_name'];
			$arr[$value['date']][$value['uid']]['uid'] = $value['uid'];
			$arr[$value['date']][$value['uid']]['time'] = $value['time'];
			$arr[$value['date']][$value['uid']]['date'] = $value['date'];
			
		}

		return $arr;
}
}
//多维数组搜索
function array_search_re($needle, $haystack, $a=0, $nodes_temp=array()){
global $nodes_found;
$a++;
foreach ($haystack as $key1=>$value1) {
    $nodes_temp[$a] = $key1;
    if (is_array($value1)){   
      array_search_re($needle, $value1, $a, $nodes_temp);
    }
    else if ($value1 === $needle){
      $nodes_found[] = $nodes_temp;
    }
}
return $nodes_found;
}


//获取评估表头
function getGridItems($type){
	$assess_item = M("assess_item")->where(array('type'=>$type))->order('sort')->select();
	F("griditems", $assess_item);
	return $assess_item;
}

function classAccess($class){ //参数class可以为class数组或者直接为class的id
	//判断权限信息
		$manager = D('UserManageView')->where(array('user_id'=>$_SESSION['uid']))->select();
		foreach ($manager as $key => $value) {
			$haveclass[]=$value['class_id']; //将拥有的权限放入$haveclass数组
		}
		
		$ma = array();
		if(is_array($class)){
			foreach ($class as $key => $value) {
				if(in_array($value['id'], $haveclass))
					$ma[] = $class[$key]; 
				}
		}else{
			if(!in_array($class, $haveclass))
				return 0;
			else return 1; 
		}
		
		//p($class);die;
		return $ma;
}

//邮件发送
function sendMail($to, $subject, $content){
	vendor("PHPMailer.PHPMailerAutoload");
	$mail = new PHPMailer();
    // 装配邮件服务器
    if (C('MAIL_SMTP')) {
        $mail->IsSMTP();
    }

    Config();//使数据库中配置生效
    
	$mail->Host = C('MAIL_HOST');
    $mail->SMTPAuth = C('MAIL_SMTPAUTH');
    $mail->Port = C('MAIL_PORT');
    $mail->Username = C('MAIL_USERNAME');
    $mail->Password =  C('MAIL_PASSWORD');
    $mail->SMTPSecure = C('MAIL_SECURE');
    $mail->CharSet = C('MAIL_CHARSET');
    // 装配邮件头信息
    $mail->From =  C('MAIL_USERNAME');
    $mail->AddAddress($to);
    $mail->FromName = 'SWPU计算机科学学院党员发展评估系统';
    $mail->IsHTML(C('MAIL_ISHTML'));
    // 装配邮件正文信息
    $mail->Subject = $subject;
    $mail->Body = $content;
    // 发送邮件
    if (!$mail->Send()) {
        return FALSE;
    } else {
        return TRUE;
    }
}

//系统配置函数
function Config($name,$value,$title){
	//p($value);die;
	$config = M('config')->select();
	$conf = array();
	foreach ($config as $k => $v) {
		$conf[$v['name']] = $v['value'];
	}
	if($name == null){ //没有参数直接返回整个配置
		$sysconfig = array_change_key_case($conf, CASE_UPPER);
		C($sysconfig);
		return $conf;
	}else if($value==null){ //如果有name参数，返回对应值
		C(strtoupper($name),$conf[$name]);
		return $conf[$name];
	}else{    //如果name、value 有值为写入
		//p($conf[$name]);die;
		if(array_key_exists($name,$conf)) 
		  return M('config')->where(array('name'=>$name))->save(array('value'=>$value,'title'=>$title));
		else return M('config')->add(array('name'=>$name,'value'=>$value,'title'=>$title));
	}

}

//验证码生成器
function randCode(){
  $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()+-';
  $random = $chars[mt_rand(0,73)].$chars[mt_rand(0,73)].$chars[mt_rand(0,73)].$chars[
mt_rand(0,73)].$chars[mt_rand(0,73)];//Random 5 times
  $content = uniqid().$random;  // 类似 5443e09c27bf4aB4uT
  return md5($content); 
}
?>