<?php
class ActivityListViewModel extends ViewModel {
	
	public $viewFields = array(
     'Userinfo'=>array('uid','name', 'sex','number','entrance','college','major','class'),
     'Activity'=>array('id'=>'aid','title','check_comp', '_on'=>'Activity.uid=Userinfo.uid')
     
   );
}
?>