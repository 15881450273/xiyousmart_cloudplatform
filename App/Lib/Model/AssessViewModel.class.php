<?php
class AssessViewModel extends ViewModel {
	
	public $viewFields = array(
     'assess'=>array('item_id','uid','value','time','date'),
     'assess_item'=>array('name', 'weight','type','remark','sort','_on'=>'assess_item.id=assess.item_id'),
     'userinfo' =>array('number','name'=>'user_name','entrance','college','major','class','_on'=>'userinfo.uid=assess.uid')
   );
}
?>