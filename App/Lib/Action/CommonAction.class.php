<?php
Class CommonAction extends Action{
	Public function _initialize(){
		if(!isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->redirect('Home/Login/index');
		}

		//设置cookie
		setcookie('pmduserid',$_SESSION['uid']);

        $notAuth = in_array(MODULE_NAME,explode(',',C('NOT_AUTH_MODULE'))) || 
              in_array(ACTION_NAME, explode(',', C('NOT_AUTH_ACTION'))) || 
              strstr(ACTION_NAME,"Handle");

              //var_dump($notAuth);die;

               




		if(C('USER_AUTH_ON') && !$notAuth) {
			import('ORG.Util.RBAC');
			RBAC::AccessDecision(GROUP_NAME) || $this->error('没有权限','#');
		}


		//当前阶段任务完成后更新status
		$uid = $_SESSION['uid'];
		$user_status = M("userinfo")->where(array('uid'=>$uid))->find();
		$task = M("task")->where('status='.$user_status['status'].' AND fid!=0')->getField('id',true);
		$ok = 1;//当前阶段的任务是否全部完成
		foreach ($task as $v) {
			if(!M('task_ok')->where(array('uid'=>$uid,'task_id'=>$v,'task_comp'=>2))->select())
				$ok = 0;
			
		}
		$status = M('status')->where('id='.$user_status['status'])->select();
		//p($status);die;
		$maxstatus = M('status')->max('id');
		if($ok==1&&$user_status['status']<$maxstatus&&$user_status['status']!=0) M('userinfo')->where('uid='.$uid)->save(array('status'=>$user_status['status']+1));
	}
}  
?>