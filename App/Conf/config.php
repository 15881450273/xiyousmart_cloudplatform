<?php
return array(


	//数据库连接参数
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST' => '101.37.174.140',
	'DB_USER' => 'root',
	'DB_PORT'   => 3306, // 端口
	'DB_PWD' => 'Zwj19991102!',
	'DB_NAME' => 'pmd',
	'DB_PREFIX'=> '',

	// 配置邮件发送服务器,以下为默认配置，以数据库中配置为最高优先级
    'MAIL_SMTP'                     =>TRUE,
    'MAIL_HOST'                     =>'',
    'MAIL_PORT'                     =>'',
    'MAIL_SMTPAUTH'                 =>TRUE,
    'MAIL_USERNAME'                 =>'',
    'MAIL_PASSWORD'                 =>'',
    'MAIL_SECURE'                   =>'tls',
    'MAIL_CHARSET'                  =>'utf-8',
    'MAIL_ISHTML'                   =>TRUE,




	//开启应用分组
	'APP_GROUP_LIST' => 'Index,Admin,Home',
	//默认分组
	'DEFAULT_GROUP' =>'Index',
	//开启独立分组
	'APP_GROUP_MODE' => 1,
	//独立分组文件夹名称
	'APP_GROUP_PATH' => 'Modules',


	

	//点语法默认解析
	'TMPL_VAR_IDENTIFY'=>'array',
	//Index_index类型模板路径
	//'TMPL_FILE_DEPR' => '_',
	
	//自定义SESSION类型
	'SESSION_TYPE'=>'db',
	'SESSION_OPTIONS' => array('expire'=>3600),

    //开启页面trace
	//'SHOW_PAGE_TRACE'=>true,
	//'URL_CASE_INSENSITIVE' =>true,





	 //RBAC验证
    'RBAC_SUPERADMIN' => 'admin',
    'ADMIN_AUTH_KEY' => 'superadmin',
    'USER_AUTH_ON' => true,
    'USER_AUTH_TYPE' => 1,               //验证类型（1:登陆验证，2：时时验证）
    'USER_AUTH_KEY' => 'uid',
    'RBAC_ROLE_TABLE' => 'role',
    'RBAC_USER_TABLE' => 'role_user',
    'RBAC_ACCESS_TABLE' => 'access',
    'RBAC_NODE_TABLE' => 'node',


    






);
?>