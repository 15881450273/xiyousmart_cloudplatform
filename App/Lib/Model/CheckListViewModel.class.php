<?php
class CheckListViewModel extends ViewModel {
	
	public $viewFields = array(
     'User'=>array('id'=>'uid','username'),
     'Userinfo'=>array('name', 'status'=>'user_status','sex','number','entrance','college','major','class','_on'=>'Userinfo.uid=User.id'),
     'task_ok'=>array('id'=>'task_ok_id','content','check_result','post_time','task_comp','check_feedback','task_id','check_time','checker_id', '_on'=>'task_ok.uid=User.id'),
     'task' =>array('title','check_url','status','_on'=>'task.id=task_ok.task_id'),
     'status' =>array('name'=>'status_name','_on'=>'userinfo.status=status.id')
   );
}
?>