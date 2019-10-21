<?php
class NoticeAction extends CommonAction{
	function index(){
		$uid = $_SESSION['uid'];
		$this->status = M('status')->select();
        $this->notice = M('notice')->where(array('poster'=>$uid))->select();
		$this->show();
	}

	//修改业务流程
	public function editNotice(){
		$task_id = I("task_id");
		$task = M("notice")->where(array('id'=>$task_id))->find();
		$this->ajaxReturn($task,'json');
	} 
	
		
		

	}
}
?>