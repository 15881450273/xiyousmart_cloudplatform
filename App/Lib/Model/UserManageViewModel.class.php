<?php

class UserManageViewModel extends ViewModel{
	public $viewFields = array(
     'role_user'=>array('user_id','role_id'),
     'manage'=>array('level','class_id', '_on'=>'role_user.role_id=manage.role_id')
     
   );

}

?>