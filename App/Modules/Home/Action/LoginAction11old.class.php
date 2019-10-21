<?php
/**
 * 后台登陆控制器
 */
Class LoginAction extends Action{
	/**
	 * 登陆视图
	 */
	Public function index(){
		$this->display();
	}

	Public function login(){
		if(!IS_POST) halt('页面不存在');
		
		if(I('code','','md5')!=$_SESSION['verify']){
			$this->error('验证码错误');
		}
		$username = I('username');
		$pwd = I('password','','md5');

		$user = M('user')->where(array('username'=>$username,'email'=>$username,'_logic'=>'OR'))->find();
		if(!$user||$user['password'] !=$pwd){
			$this->error('账户或密码错误');
		}

		if($user['lock']==1) $this->error('用户被锁定');

		$data = array(
			'id'=> $user['id'],
			'login_ip' => get_client_ip(),
			'logintime' => time(),
			);

		M('user')->save($data);

		session(C('USER_AUTH_KEY'),$user['id']);
		session('username',$user['username']);
		session('logintime',date('Y-m-d H:i:s',$user['logintime']));
		session('loginip',$user['loginip']);


        //超级管理员识别
		if ($user['username']==C('RBAC_SUPERADMIN')) {
			session(C('ADMIN_AUTH_KEY'),true);
		}


		import('ORG.Util.RBAC');
		RBAC::saveAccessList();

        $manager['_query'] = 'name=manager&_logic=or';
        $isManager = false;
        $role = M('role')->where($manager)->getField('id',true);
        foreach ($role as $v) {
        	if(M('role_user')->where(array('role_id'=>$v,
        		                           'user_id'=>$_SESSION['uid'],
        		                           '_logic' =>'AND'
        		                     ))->find())
        		$isManager = true;
        }
        //var_dump($isManager);die;
		if($isManager == true){
			$this->redirect('Admin/Index/index');
		}else{
			$this->redirect('Index/Index/index');
		}

		


	}

	Public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify(4,1,'png',80,25,'verify');// 参数：长度，类型，图片格式，宽，高，session名称

	}
	//Ajax验证
	public function ckusername(){
		
		if(M('user')->where(array('username'=>I('username'),'email'=>I('username'),'_logic'=>'OR'))->find())
			$stat=1;
		else $stat=0; 
		$this->ajaxReturn($stat,'json');
		
	}
	public function ckpassword(){
		$pwd = I('password','','md5');
		$user = M('user')->where(array('username'=>I('username'),'email'=>I('username'),'_logic'=>'OR'))->find();
		if($user['password'] == $pwd){
			$stat=1;
		}else{
			$stat=0;
		}
		$this->ajaxReturn($stat,'json');

		
	}
	public function ckverify(){
		if(I('code','','md5')!=$_SESSION['verify'])
			$stat=0;
		else $stat=1;
		$this->ajaxReturn($stat,'json');
		
	}
	
	public function logout(){
			session_unset();
			session_destroy();
			$this->redirect('Home/Login/index');
		}
}
?>   