<?php
class VideoAction extends CommonAction {
	public function index() {
		$this->video=M('video')->where(array('effective'=>1))->select();
		$this->show(); 
	}
	public function play(){
		$this->url = I('url');
		$this->vid = I('vid');
		$this->show();

	}
	public function recorder() { 
		$uid = $_SESSION['uid'];
		$vid = I('vid');
		$day = date("Y-m-d",time());
		$add = I('add');
		$type = I('type');
		$increase = true;
		$ok = 1;
		$recorder = M('video_recorder')->where(array('uid'=>$uid,'day'=>$day,'vid'=>$vid))->find();
		//p($recorder);die;
		if($recorder){
			$recorder['duration'] += $add;
			if(!M('video_recorder')->save($recorder))
				$ok = 0;

		}else{
			$recorder = array(
				'uid'=>$uid,
				'vid'=>$vid,
				'day'=>$day,
				'duration'=>$add
				);
			if(!M('video_recorder')->add($recorder))
				$ok = 0;
		}

		$this->ajaxReturn($ok,'json');
		
		
	}
?>