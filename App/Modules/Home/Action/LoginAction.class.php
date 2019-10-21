<?php
/**
 * 后台登陆控制器
 */
Class LoginAction extends Action{
	/**
	 * 登陆视图
	 */
	Public function index(){
		$this->redirect('newlogin');
		$this->display();
	}
    Public function newlogin(){
		$this->display();
	}
	Public function login(){
		if(!IS_POST) halt('页面不存在');
		
		if(I('code','','md5')!=$_SESSION['verify']){
			$this->ajaxReturn('codeerror','json');
			$this->error('验证码错误');
		}
		$username = I('username');
		$pwd = I('password','','md5');

		$user = M('user')->where(array('username'=>$username,'email'=>$username,'_logic'=>'OR'))->find();
		if(!$user||$user['password'] !=$pwd){
			$this->ajaxReturn('loginfail','json');
			$this->error('账户或密码错误');
		}

		if($user['lock']==1) {$this->ajaxReturn('locked','json');$this->error('用户还没被激活');}

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
     
        $rid = M('role')->where($manager)->getField('id');
        //p($role);die;
        $isManager = M('role_user')->where(array('role_id'=>$rid,
        		                           'user_id'=>$_SESSION['uid'],
        		                           '_logic' =>'AND'
        		                     ))->find();
        		
      
        //p();die;
        if($_SESSION[C('ADMIN_AUTH_KEY')] == true){
        	$this->ajaxReturn(U('Admin/Index/index'),'json');
        	$this->redirect(U('Admin/Index/index'));
        }else if($isManager == true){
        	$this->ajaxReturn(U('Admin/Index/index').'#200/201','json');
			$this->redirect(U('Admin/Index/index').'#200/201');
		}else{
			$this->ajaxReturn(U('Index/Index/index'),'json');
			$this->redirect(U('Index/Index/index'));
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
	
	Public function logout(){
			session_unset();
			session_destroy();
			$this->redirect('Home/Login/index');
		}
    //邮箱注册
	public function emailregister(){
		if(Config('checkemail')==0) redirect(U('register'));
		$this->show();
	}
	public function emailregisterHandle(){
		   //sendMail('xupingxx@qq.com','党建系统用户注册','测试$sendContent');
		    $email = I('email');
			$code = randCode();
			$url = U('Home/Login/sysredirect',array('code'=>$code),'','',true);
			$sendContent = '点击下面的链接完成注册过程并激活账户<br/><a href="'.$url.'">'.$url.'</a>
							<br/>如果你不知道这是什么东西，说明该邮件为误发，请忽略。';
			$user = M('user')->where(array('email'=>$email))->find();
			if(!$user || $user['lock']==1){
				if( M('user')->add(array('email'=>$email,'username'=>$code,'code'=>$code,'type'=>1)) ||
                    M('user')->where(array('email'=>$email))->save(array('code'=>$code,'type'=>1))
				){//type=1 为用户注册
						if(sendMail($email,'党建系统用户注册',$sendContent)){
							$this->ajaxReturn('sended','json');
						}else{
							$this->ajaxReturn('sendfail','json');
						}
					}else{
						$this->ajaxReturn('dbfail','json');
					}
					
			}else{
				$this->ajaxReturn('hademail','json');
			}
			
	}
		
    public function register(){
    	$code = I('code');
    	$checkemail = Config('checkemail');
    	if($checkemail==1&&$code=='') redirect(U('emailregister'));
    	
		//获取学院专业年级的信息
		$this->college = M('class')->where(array('flag'=>1))->select();
		//p($college);

        //将学院专业班级的id转换为名字
		$userinfo = class_convert($userinfo);
		$begin = freshman();
		$entrance = array($begin,$begin-1,$begin-2,$begin-3) ;
		//p($entrance);
		$this->checkemail = $checkemail;
		$this->code = $code;
		$this->entrance = $entrance;
    	$this->show();
    	
    }
    public function college(){
		$col=M('class')->where(array('fid'=>I('col')))->select();
		$this->ajaxReturn($col,'json');
	}
}
?>