<?php
class TaskAction extends CommonAction {
	//显示所有任务
	public function showTask(){
		$task=M('task')->order(task_order)->select();
		$this->task = task_merge($task);
		//p($task);die;
		$this->display();
	}
	
	//通用线下任务完成页
	public function showTaskContent() {
		$uid = $_SESSION['uid'];
		$task_id = I('task_id');
		$this->task = M('task')->where(array('id'=>$task_id))->find();
		$this->task_ok = M('task_ok')->where(array('uid'=>$uid,'task_id'=>$task_id))->find();
		$this->show();
	}
    public function showTaskHandle(){
    	$uid = $_SESSION['uid'];
		$task_id = I('task_id');
		$data=array(
			'task_id'=>$task_id,
			'uid'=>$uid,
			'post_time'=>time(),
			'task_comp'=>0,
			'online'=>0
			);
		if(I("editing")==1){

			if(M('task_ok')->where(array('task_id'=>I('task_id')))->save($data))
				$this->ajaxReturn(1,'json');
			else
				$this->ajaxReturn(0,'json');

		}else{
				if(M('task_ok')->add($data))
				$this->ajaxReturn(1,'json');
			else
				$this->ajaxReturn(0,'json');

		}

    }
	//通用线上任务完成页
	//任务内容显示
	public function doTask() {
		$uid = $_SESSION['uid'];
		$task_id = I('task_id');
		$this->task = M('task')->where(array('id'=>$task_id))->find();
		$this->task_ok = M('task_ok')->where(array('uid'=>$uid,'task_id'=>$task_id))->find();
		//p($task_ok);die;
		$this->show();
	}

	public function doTaskHandle(){
		$uid = $_SESSION['uid'];
		$data=array(
			'task_id'=>I('task_id'),
			'uid'=>$uid,
			'post_time'=>time(),
			'content'=>$_POST['editorValue'],
			'task_comp'=>0
			);
		if(I("editing")==1){

			if(M('task_ok')->where(array('task_id'=>I('task_id')))->save($data))
				$this->ajaxReturn(1,'json');
			else
				$this->ajaxReturn(0,'json');

		}else{
				if(M('task_ok')->add($data))
				$this->ajaxReturn(1,'json');
			else
				$this->ajaxReturn(0,'json');

		}
		

	}

	//个人添加活动
	public function addActivity() {
		//type为1则修改
		//$type = $_GET['type'];
		$activity;
		$id = $_GET['id'];
		if($id) {
			$activity = M('activity')->where(array('id'=>$id))->find();
			$this->editing = 1;//识别添加和修改
		}
		$this->edit  = $activity;
		$this->show();

	}
	//个人添加活动
	public function addFeeling() {
		$this->show();

	}
	//个人添加活动
	public function addHonor() {
		$this->show();

	}
	//ajax添加活动
	public function addActivityHandle() {
		$type = $_GET['type'];
		//p($type);die;
		$id = I('id');
		//echo $_POST['editorValue'];die;
		$uid = $_SESSION['uid'];
		$data = array(
			'uid' => $uid,
			'title'=> I('title'),
			'content'=> $_POST['editorValue'],
			'post_time'=>time(),
			'date' => I('date'),
			'type'=>$type
			);
		$ok;
		if($id>0) $ok = M('activity')->where(array('id'=>$id))->save($data);
		 else $ok = M('activity')->add($data);
		if($ok){
			//$this->success("保存成功");
			$this->ajaxReturn(1,'json');
		}else{
			//$this->error("保存失败了！！");
			$this->ajaxReturn(0,'json');
		}
		
	}
	//活动列表
    public function	ActivityList(){
    	//type为1活动记录，2为荣誉记录，3为心得体会
    	$uid = $_SESSION['uid'];
    	$type = I('type',1,'intval');

    	$activity = M('activity')->where(array('type'=>$type,'uid'=>$uid))->select();
    	//p($type);die;
    	$this->list = $activity;
    	$this->type = $type;
    	$this->show();

    }
?>