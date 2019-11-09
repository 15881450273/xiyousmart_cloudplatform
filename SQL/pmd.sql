--
-- 数据库: `pmd`
--

DELIMITER $$
--
-- 存储过程
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `fk_v_vr`()
ALTER TABLE `pmd`.`video_recorder` ADD CONSTRAINT `fk_v_vr` FOREIGN KEY (`vid`) REFERENCES `pmd`.`video` (`id`)   ON UPDATE CASCADE ON DELETE CASCADE$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 表的结构 `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `access`
--

INSERT INTO `access` (`role_id`, `node_id`, `level`, `module`) VALUES
(5, 90, 2, NULL),
(5, 93, 3, NULL),
(5, 94, 3, NULL),
(5, 92, 3, NULL),
(5, 91, 3, NULL),
(5, 50, 2, NULL),
(5, 55, 3, NULL),
(5, 54, 3, NULL),
(5, 53, 3, NULL),
(5, 52, 3, NULL),
(5, 49, 2, NULL),
(5, 89, 3, NULL),
(5, 57, 3, NULL),
(5, 56, 3, NULL),
(5, 48, 2, NULL),
(5, 87, 3, NULL),
(5, 97, 3, NULL),
(5, 96, 3, NULL),
(5, 95, 3, NULL),
(5, 88, 3, NULL),
(5, 65, 3, NULL),
(5, 58, 3, NULL),
(5, 64, 3, NULL),
(5, 63, 3, NULL),
(5, 61, 3, NULL),
(5, 60, 3, NULL),
(5, 59, 3, NULL),
(5, 42, 2, NULL),
(5, 51, 3, NULL),
(5, 98, 2, NULL),
(5, 100, 3, NULL),
(5, 99, 3, NULL),
(5, 41, 1, NULL),
(7, 81, 1, NULL),
(7, 39, 1, NULL),
(7, 90, 2, NULL),
(7, 93, 3, NULL),
(7, 94, 3, NULL),
(7, 92, 3, NULL),
(7, 91, 3, NULL),
(7, 50, 2, NULL),
(7, 55, 3, NULL),
(7, 54, 3, NULL),
(7, 53, 3, NULL),
(7, 52, 3, NULL),
(7, 49, 2, NULL),
(7, 89, 3, NULL),
(7, 57, 3, NULL),
(7, 56, 3, NULL),
(7, 48, 2, NULL),
(7, 87, 3, NULL),
(7, 97, 3, NULL),
(7, 96, 3, NULL),
(7, 95, 3, NULL),
(7, 88, 3, NULL),
(7, 65, 3, NULL),
(7, 58, 3, NULL),
(7, 64, 3, NULL),
(7, 63, 3, NULL),
(7, 61, 3, NULL),
(7, 60, 3, NULL),
(7, 59, 3, NULL),
(7, 43, 2, NULL),
(7, 85, 3, NULL),
(7, 84, 3, NULL),
(7, 83, 3, NULL),
(7, 82, 3, NULL),
(7, 72, 3, NULL),
(7, 86, 3, NULL),
(7, 73, 3, NULL),
(7, 70, 3, NULL),
(7, 74, 3, NULL),
(7, 76, 3, NULL),
(7, 45, 3, NULL),
(7, 79, 3, NULL),
(7, 77, 3, NULL),
(7, 78, 3, NULL),
(7, 44, 3, NULL),
(7, 71, 3, NULL),
(7, 80, 3, NULL),
(7, 42, 2, NULL),
(7, 51, 3, NULL),
(7, 98, 2, NULL),
(7, 100, 3, NULL),
(7, 99, 3, NULL),
(7, 41, 1, NULL),
(2, 39, 1, NULL),
(2, 90, 2, NULL),
(2, 93, 3, NULL),
(2, 94, 3, NULL),
(2, 92, 3, NULL),
(2, 91, 3, NULL),
(2, 50, 2, NULL),
(2, 55, 3, NULL),
(2, 54, 3, NULL),
(2, 53, 3, NULL),
(2, 52, 3, NULL),
(2, 49, 2, NULL),
(2, 89, 3, NULL),
(2, 57, 3, NULL),
(2, 56, 3, NULL),
(2, 48, 2, NULL),
(2, 87, 3, NULL),
(2, 97, 3, NULL),
(2, 96, 3, NULL),
(2, 95, 3, NULL),
(2, 88, 3, NULL),
(2, 65, 3, NULL),
(2, 58, 3, NULL),
(2, 64, 3, NULL),
(2, 63, 3, NULL),
(2, 61, 3, NULL),
(2, 60, 3, NULL),
(2, 59, 3, NULL),
(2, 42, 2, NULL),
(2, 51, 3, NULL),
(2, 98, 2, NULL),
(2, 100, 3, NULL),
(2, 99, 3, NULL),
(2, 41, 1, NULL),
(3, 39, 1, NULL),
(3, 90, 2, NULL),
(3, 93, 3, NULL),
(3, 94, 3, NULL),
(3, 92, 3, NULL),
(3, 91, 3, NULL),
(3, 50, 2, NULL),
(3, 55, 3, NULL),
(3, 54, 3, NULL),
(3, 53, 3, NULL),
(3, 52, 3, NULL),
(3, 49, 2, NULL),
(3, 89, 3, NULL),
(3, 57, 3, NULL),
(3, 56, 3, NULL),
(3, 48, 2, NULL),
(3, 87, 3, NULL),
(3, 97, 3, NULL),
(3, 96, 3, NULL),
(3, 95, 3, NULL),
(3, 88, 3, NULL),
(3, 65, 3, NULL),
(3, 58, 3, NULL),
(3, 64, 3, NULL),
(3, 63, 3, NULL),
(3, 61, 3, NULL),
(3, 60, 3, NULL),
(3, 59, 3, NULL),
(3, 42, 2, NULL),
(3, 51, 3, NULL),
(3, 98, 2, NULL),
(3, 100, 3, NULL),
(3, 99, 3, NULL),
(4, 39, 1, NULL),
(4, 90, 2, NULL),
(4, 93, 3, NULL),
(4, 94, 3, NULL),
(4, 92, 3, NULL),
(4, 91, 3, NULL),
(4, 50, 2, NULL),
(4, 55, 3, NULL),
(4, 54, 3, NULL),
(4, 53, 3, NULL),
(4, 52, 3, NULL),
(4, 49, 2, NULL),
(4, 89, 3, NULL),
(4, 57, 3, NULL),
(4, 56, 3, NULL),
(4, 48, 2, NULL),
(4, 87, 3, NULL),
(4, 97, 3, NULL),
(4, 96, 3, NULL),
(4, 95, 3, NULL),
(4, 88, 3, NULL),
(4, 65, 3, NULL),
(4, 58, 3, NULL),
(4, 64, 3, NULL),
(4, 63, 3, NULL),
(4, 61, 3, NULL),
(4, 60, 3, NULL),
(4, 59, 3, NULL),
(4, 42, 2, NULL),
(4, 51, 3, NULL),
(4, 98, 2, NULL),
(4, 100, 3, NULL),
(4, 99, 3, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(15) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `post_time` int(10) DEFAULT NULL,
  `checker_id` int(15) DEFAULT NULL,
  `check_time` int(10) DEFAULT NULL,
  `check_result` int(1) DEFAULT NULL COMMENT '任务完成情况评定，5为A+，4为A，3为B+，2为B，1为C，0为不合格',
  `check_comp` int(1) DEFAULT '0' COMMENT '0为待审核，1为审核未通过，2为审核通过',
  `check_feedback` varchar(255) DEFAULT NULL,
  `type` int(1) NOT NULL DEFAULT '1' COMMENT '1为活动，2为荣誉，3为心得体会',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `activity`
--

INSERT INTO `activity` (`id`, `uid`, `title`, `content`, `date`, `post_time`, `checker_id`, `check_time`, `check_result`, `check_comp`, `check_feedback`, `type`) VALUES
(37, 106, '我的活动啊啊', '<p>我的活动啊啊</p>', '2015-06-17', 1434646957, 104, 1434647076, 5, 2, '不错的', 1),
(38, 106, '优秀班干部', '<p>&nbsp;优秀班干部</p>', '2015-06-03', 1434859688, 104, 1434860250, 4, 2, '还可以', 2),
(39, 106, '我的心得体会', '<p>&nbsp;我的心得体会我的心得体会</p>', '2015-06-02', 1434860016, NULL, NULL, NULL, 0, NULL, 3),
(41, 106, '中国航母辽宁舰穿越宫古海峡进入太平洋', '<p>发送发送付水电费第三方士大夫士大夫爽肤水</p>', '2019-11-01', 1572846792, 1, 1572878051, 5, 2, '可以', 1);

-- --------------------------------------------------------

--
-- 替换视图以便查看 `activitylistview`
--
CREATE TABLE IF NOT EXISTS `activitylistview` (
`uid` int(11)
,`name` char(10)
,`entrance` int(4)
,`title` varchar(50)
,`check_comp` int(1)
,`class` int(5)
,`number` int(10)
,`college` int(5)
,`major` int(5)
,`aid` int(20)
);
-- --------------------------------------------------------

--
-- 表的结构 `assess`
--

CREATE TABLE IF NOT EXISTS `assess` (
  `item_id` int(5) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `value` int(3) DEFAULT NULL COMMENT '评估值',
  `time` int(3) DEFAULT NULL COMMENT '次数',
  `date` char(30) DEFAULT NULL COMMENT '日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `assess_item`
--

CREATE TABLE IF NOT EXISTS `assess_item` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL COMMENT '评估项目',
  `type` int(1) DEFAULT '1' COMMENT '字段类型：1为学习栏目，2为思想栏目',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `sort` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `assess_item`
--

INSERT INTO `assess_item` (`id`, `name`, `weight`, `type`, `remark`, `sort`) VALUES
(1, 'pingjunfen', 0, 1, '平均分', 1),
(2, 'guakemenshu', 0, 1, '挂科门数', 2),
(3, 'susheweisheng', 0, 2, '宿舍卫生(不合格)', 1),
(4, 'zuidifen', 0, 1, '最低分', 1),
(5, 'zongheceping', 0, 1, '综合测评', 1),
(6, 'wanguicishu', 0, 2, '晚归次数', 1),
(7, 'yebuguisu', 0, 2, '夜不归宿', 1),
(8, 'zaocaobudao', 0, 2, '早操不到', 1),
(9, 'kuangkecishu', 0, 1, '旷课次数', 1);

-- --------------------------------------------------------

--
-- 表的结构 `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL COMMENT '学院、专业、班级 名字',
  `fid` int(5) DEFAULT NULL COMMENT '父id',
  `order` int(5) NOT NULL DEFAULT '0',
  `flag` int(1) DEFAULT NULL COMMENT '1为学院，2为主业，3为班级',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `class`
--

INSERT INTO `class` (`id`, `name`, `fid`, `order`, `flag`) VALUES
(1, '信息科学与技术', 0, 1, 1),
(3, '计算机科学与技术', 1, 0, 2),
(4, '电子信息工程', 1, 0, 2),
(5, '信息管理', 1, 0, 2),
(6, '计科1班', 3, 0, 3),
(7, '计科2班', 3, 0, 3),
(8, '计科3班', 3, 0, 3),
(9, '电信1班', 4, 0, 3),
(10, '电信2班', 4, 0, 3),
(11, '信管1班', 5, 0, 3),
(19, '信管2班', 5, 2, 3);

-- --------------------------------------------------------

--
-- 表的结构 `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `config`
--

INSERT INTO `config` (`name`, `title`, `value`) VALUES
('basedsystime', NULL, '1'),
('checkemail', NULL, '1'),
('freshman', NULL, '2012'),
('mail_host', NULL, 'smtp.qq.com'),
('mail_password', NULL, 'gzfzfelzqiezhijc'),
('mail_port', NULL, '25'),
('mail_username', NULL, '1432678283@qq.com'),
('senior', '大四入学年份', '2011');

-- --------------------------------------------------------

--
-- 表的结构 `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(15) NOT NULL COMMENT '用户id',
  `name` varchar(255) DEFAULT NULL COMMENT '文件名',
  `type` varchar(30) DEFAULT NULL COMMENT '文件名类型',
  `size` int(15) DEFAULT NULL COMMENT '文件大小',
  `extension` varchar(10) DEFAULT NULL COMMENT '文件扩展名',
  `savepath` varchar(260) DEFAULT NULL COMMENT '文件路径',
  `savename` varchar(255) DEFAULT NULL COMMENT '下载次数',
  `hash` char(255) DEFAULT NULL,
  `savetime` int(10) DEFAULT NULL COMMENT '上传时间',
  `download` int(15) DEFAULT '0' COMMENT '下载次数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='上传文件信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `manage`
--

CREATE TABLE IF NOT EXISTS `manage` (
  `role_id` smallint(6) unsigned NOT NULL,
  `class_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manage`
--

INSERT INTO `manage` (`role_id`, `class_id`, `level`) VALUES
(3, 4, 2),
(3, 9, 3),
(3, 10, 3),
(4, 5, 2),
(4, 11, 3),
(4, 19, 3),
(6, 1, 1),
(6, 3, 2),
(6, 6, 3),
(6, 7, 3),
(6, 8, 3),
(6, 4, 2),
(6, 9, 3),
(6, 10, 3),
(6, 5, 2),
(6, 11, 3),
(6, 19, 3),
(7, 1, 1),
(7, 3, 2),
(7, 6, 3),
(7, 7, 3),
(7, 8, 3),
(7, 4, 2),
(7, 9, 3),
(7, 10, 3),
(7, 5, 2),
(7, 11, 3),
(7, 19, 3),
(2, 3, 2),
(2, 6, 3),
(2, 7, 3),
(2, 8, 3);

-- --------------------------------------------------------

--
-- 表的结构 `node`
--

CREATE TABLE IF NOT EXISTS `node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- 转存表中的数据 `node`
--

INSERT INTO `node` (`id`, `name`, `title`, `status`, `remark`, `sort`, `pid`, `level`) VALUES
(39, 'Admin', '后台应用', 1, '', 1, 0, 1),
(41, 'Index', '前台应用', 1, '', 2, 0, 1),
(42, 'index', '后台首页', 1, '', 1, 39, 2),
(43, 'Rbac', '权限控制', 1, '', 1, 39, 2),
(44, 'addUser', '添加用户', 1, '', 8, 43, 3),
(45, 'addRole', '添加角色', 1, '', 5, 43, 3),
(47, 'collect', '字段汇总', 1, '', 2, 46, 3),
(48, 'Check', '任务审核', 1, '', 1, 39, 2),
(49, 'Query', '查询业务', 1, '', 1, 39, 2),
(50, 'Video', '在线视频', 1, '', 1, 39, 2),
(51, 'index', '后台页面', 1, '', 1, 42, 3),
(52, 'index', '视频首页', 1, '', 1, 50, 3),
(53, 'addVideo', '添加视频', 1, '', 1, 50, 3),
(54, 'editVideo', '修改视频', 1, '', 1, 50, 3),
(55, 'delVideo', '删除视频', 1, '', 1, 50, 3),
(56, 'index', '查询_首页', 1, '', 1, 49, 3),
(57, 'query', '查询结果', 1, '', 1, 49, 3),
(58, 'index', '审核首页', 1, '', 1, 48, 3),
(59, 'checklist', '审核列表', 1, '', 1, 48, 3),
(60, 'check', '审核评定', 1, '', 1, 48, 3),
(61, 'checkUserinfo', '审核用户信息', 1, '', 1, 48, 3),
(63, 'activity', '活动审核', 1, '', 1, 48, 3),
(64, 'activitylist', '活动审核列表', 1, '', 1, 48, 3),
(65, 'activitycheck', '活动审核评定', 1, '', 1, 48, 3),
(66, 'index', '管理首页', 1, '', 1, 46, 3),
(67, 'addField', '添加字段', 1, '', 1, 46, 3),
(68, 'editCollect', '编辑汇总', 1, '', 1, 46, 3),
(69, 'delCollect', '删除汇总', 1, '', 1, 46, 3),
(70, 'addNode', '添加节点', 1, '', 2, 43, 3),
(71, 'delUser', '删除用户', 1, '', 9, 43, 3),
(72, 'node', '节点列表', 1, '', 1, 43, 3),
(73, 'editNode', '修改节点', 1, '', 2, 43, 3),
(74, 'delNode', '删除节点', 1, '', 3, 43, 3),
(76, 'role', '角色列表', 1, '', 4, 43, 3),
(77, 'delRole', '删除角色', 1, '', 6, 43, 3),
(78, 'user', '用户列表', 1, '', 7, 43, 3),
(79, 'editRole', '修改角色', 1, '', 6, 43, 3),
(80, 'access', '配置权限', 1, '', 11, 43, 3),
(81, 'guanlifanwei', '管理范围', 1, '', 1, 0, 1),
(82, 'addClasses', '添加学院/专业/班级', 1, '', 1, 43, 3),
(83, 'addtask', '添加流程', 1, '', 1, 43, 3),
(84, 'classes', '专业班级管理页', 1, '', 1, 43, 3),
(85, 'manage', '管理范围', 1, '', 1, 43, 3),
(86, 'task', '流程任务页', 1, '', 1, 43, 3),
(87, 'registerCheck', '注册审核', 1, '', 1, 48, 3),
(88, 'showContent', '提交内容显示', 1, '', 1, 48, 3),
(89, 'userpage', '用户详情页', 1, '', 1, 49, 3),
(90, 'Assess', '评估管理', 1, '', 1, 39, 2),
(91, 'addStudy', '学习相关-添加修改', 1, '', 1, 90, 3),
(92, 'addThink', '思想相关-添加修改', 1, '', 1, 90, 3),
(93, 'importStudy', '学习相关-导入', 1, '', 1, 90, 3),
(94, 'importThink', '思想相关-导入', 1, '', 1, 90, 3),
(95, 'checklist', '注册审核列表', 1, '', 1, 48, 3),
(96, 'checkCancel', '审核取消', 1, '', 1, 48, 3),
(97, 'registerList', '注册列表', 1, '', 1, 48, 3),
(98, 'Notice', '通知公告', 1, '', 2, 39, 2),
(99, 'index', '通知公告--主页', 1, '', 1, 98, 3),
(100, 'editNotice', '通知公告--编辑', 1, '', 1, 98, 3);

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '通知公告',
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `poster` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `notice`
--

INSERT INTO `notice` (`id`, `title`, `content`, `time`, `poster`, `status`) VALUES
(7, '电信通知-所有人', '<p>电信通知-所有人</p>', 1434645330, 104, -1),
(8, '电信通知-未认证用户', '<p>电信通知-未认证用户</p>', 1434645371, 104, 0),
(9, '电信通知-普通学生', '<p>电信通知-普通学生</p>', 1434645400, 104, 1),
(10, '电信通知--入党积极分子', '<p>电信通知--入党积极分子</p>', 1434645437, 104, 2),
(11, '电信通知-预备党员', '<p>电信通知-预备党员</p>', 1434645467, 104, 3),
(12, '电信通知-党员', '<p>电信通知-党员</p>', 1434645492, 104, 4),
(13, '信管通知-所有人', '<p>信管通知-所有人</p>', 1434854307, 105, -1),
(14, '信管通知-未认证用户', '<p>信管通知-未认证用户</p>', 1434854338, 105, 0),
(15, '信管通知-普通学生', '<p>信管通知-普通学生</p>', 1434854369, 105, 1),
(16, '信管通知-入党积极分子', '<p>信管通知-入党积极分子<br/></p>', 1434854401, 105, 2),
(17, '信管通知-预备党员', '<p>信管通知-预备党员</p>', 1434854431, 105, 3),
(18, '信管通知-党员', '<p>信管通知-党员</p>', 1434854447, 105, 4),
(19, '计科通知-所有人', '<p>计科通知-所有人</p>', 1434854623, 97, -1),
(20, '计科通知-未认证用户', '<p>计科通知-未认证用户</p>', 1434854649, 97, 0),
(21, '计科通知-普通学生', '<p>计科通知-普通学生</p>', 1434854683, 97, 1),
(22, '计科通知-入党积极分子', '<p>计科通知-入党积极分子</p>', 1434854703, 97, 2),
(23, '计科通知-预备党员', '<p>计科通知-预备党员</p>', 1434854753, 97, 3),
(24, '计科通知-党员', '<p>计科通知-党员</p>', 1434854766, 97, 4),
(25, '超级管理员通知，所有年级可见', '<p>大家好这是一条来自超级管理员的通知</p>', 1572922500, 1, -1);

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_name` (`name`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`id`, `name`, `pid`, `status`, `remark`) VALUES
(1, 'student', NULL, 1, '学生'),
(2, 'jike', NULL, 1, '计科团支部'),
(3, 'dianxin', NULL, 1, '电信团支部'),
(4, 'xinguan', NULL, 1, '信管团支部'),
(5, 'manager', NULL, 1, '管理员'),
(7, 'superadmin', NULL, 1, '超级管理员');

-- --------------------------------------------------------

--
-- 表的结构 `role_class`
--

CREATE TABLE IF NOT EXISTS `role_class` (
  `role_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` smallint(6) unsigned DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(2, 97),
(3, 104),
(5, 104),
(4, 105),
(5, 105),
(7, 1),
(5, 97),
(5, 1),
(1, 1),
(1, 106),
(1, 162);

-- --------------------------------------------------------

--
-- 表的结构 `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `session_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `session`
--

INSERT INTO `session` (`session_id`, `session_expire`, `session_data`) VALUES
('8p4ff3nadh11akpcb1u8le28p0', 1572926191, 0x7665726966797c733a33323a223331383537623434396334303732303337343961653332646430653764363461223b7569647c733a333a22313036223b757365726e616d657c733a31303a2232303132303030313030223b6c6f67696e74696d657c733a31393a22323031392d31312d30352031303a33393a3232223b5f4143434553535f4c4953547c613a303a7b7d);

-- --------------------------------------------------------

--
-- 表的结构 `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(2) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `status`
--

INSERT INTO `status` (`id`, `name`, `content`) VALUES
(0, '未认证用户', '请等待管理员认证'),
(1, '普通学生', '加油哦,完成本阶段的任务就可以成为预备党员了哟'),
(2, '入党积极分子', '加油哦，离成功越来越近了'),
(3, '预备党员', '只有一步之遥了，千万不要放弃'),
(4, '党员', '虽然已经成功，但路还很长，努力走下去');

-- --------------------------------------------------------

--
-- 表的结构 `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL COMMENT '任务标题',
  `content` text COMMENT '任务内容',
  `effective` int(1) DEFAULT '1' COMMENT '任务是否有效',
  `releaser_id` int(11) DEFAULT NULL COMMENT '发布者id',
  `releaser_time` int(10) DEFAULT NULL COMMENT 'release_time',
  `task_path` varchar(255) DEFAULT NULL COMMENT '任务文件目录',
  `task_type` int(1) NOT NULL DEFAULT '0' COMMENT '任务类型，-1为线下任务，0为默认线上，1为表单，2为文件上传，3为在线视频，4为其他',
  `fid` int(5) DEFAULT NULL COMMENT '父任务id',
  `task_order` int(5) DEFAULT '1' COMMENT '此任务在同级中的顺序，值越小越朝前',
  `task_url` varchar(225) DEFAULT NULL,
  `check_url` varchar(225) DEFAULT NULL COMMENT '审核地址',
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `releaser_id` (`releaser_id`),
  KEY `fid` (`fid`),
  KEY `fk_task_status` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `task`
--

INSERT INTO `task` (`id`, `title`, `content`, `effective`, `releaser_id`, `releaser_time`, `task_path`, `task_type`, `fid`, `task_order`, `task_url`, `check_url`, `status`) VALUES
(1, '确定入党积极分子', '<p>确定入党积极分子</p>', 0, NULL, 1434455513, NULL, 0, 0, 1, 'Index/Task/dotask', NULL, 1),
(2, '提交入党志愿书', '<p>13312提交入党志愿书3534师哥<br/></p>', 1, NULL, 1427037972, NULL, 0, 3, 2, 'Index/Task/dotask', NULL, 2),
(3, '培养教育考察', '<p>培养教育考察</p>', 0, NULL, 1434457941, NULL, 0, 0, 2, 'Index/Task/dotask', NULL, 2),
(4, '提交培训总结', '<p>提交培训总结32</p>', 1, NULL, 1427034817, NULL, 0, 3, 2, 'Index/Task/dotask', 'Admin/Check/checkfile', 2),
(5, '上党课', '<p>上党课高少废话</p>', 1, NULL, 1434456840, NULL, -1, 3, 1, 'Index/Task/showTaskContent', NULL, 2),
(7, '提交入党申请书', '<p>243提交入党申请书35343<br/></p>', 1, NULL, 1427038184, NULL, 0, 1, 1, 'Index/Task/dotask', NULL, 1),
(8, '预备党员', '<p>请完成预备党员任务<br/></p>', 0, NULL, 1434456780, NULL, 0, 0, 3, 'Index/Task/dotask', NULL, 3),
(9, '预备党员任务1', '<p>预备党员任务1</p>', 1, NULL, 1434456869, NULL, 0, 8, 1, 'Index/Task/dotask', NULL, 3),
(10, '党员', '<p>请完成党员任务<br/></p>', 0, NULL, 1434453568, NULL, 0, 0, 4, 'Index/Task/dotask', NULL, 4),
(11, '党员任务1', '<p>党员任务11</p>', 1, NULL, 1434453604, NULL, 0, 10, 1, 'Index/Task/dotask', NULL, 4);

-- --------------------------------------------------------

--
-- 表的结构 `task_ok`
--

CREATE TABLE IF NOT EXISTS `task_ok` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `task_id` int(5) DEFAULT NULL COMMENT '任务id',
  `uid` int(11) DEFAULT NULL COMMENT 'user用户 id',
  `checker_id` int(11) DEFAULT NULL COMMENT '审核人id',
  `check_time` int(10) DEFAULT NULL COMMENT '审核时间',
  `check_result` int(3) DEFAULT NULL COMMENT '任务完成情况评定，5为A+，4为A，3为B+，2为B，1为C+，0为不合格',
  `task_comp` int(1) DEFAULT '0' COMMENT '0为待审核，1为审核未通过，2为审核通过',
  `check_feedback` varchar(255) DEFAULT NULL COMMENT '审核反馈',
  `post_time` int(10) DEFAULT NULL,
  `online` int(1) NOT NULL DEFAULT '1',
  `content` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `task_id` (`task_id`),
  KEY `uid` (`uid`),
  KEY `ver_id` (`checker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- 转存表中的数据 `task_ok`
--

INSERT INTO `task_ok` (`id`, `task_id`, `uid`, `checker_id`, `check_time`, `check_result`, `task_comp`, `check_feedback`, `post_time`, `online`, `content`) VALUES
(51, 5, 106, 104, 1434858433, 5, 2, '不错啊', 1434855898, 0, NULL),
(52, 2, 106, 104, 1434895150, 5, 2, '生多个地方', 1434858476, 1, '<p>&nbsp;</p><p style="line-height: 16px;"><img style="margin-right: 2px; vertical-align: middle;" src="/pmd/Data/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif"/><a title="1434646781688336.docx" style="color: rgb(0, 102, 204); font-size: 12px;" href="/pmd/Data/ueditor/php/unknowuser/ueditor/file/20150619/1434646781688336.docx">1434646781688336.docx</a></p><p></p>'),
(53, 4, 106, 1, 1434890192, 5, 2, 'OKKK', 1434859594, 1, '<p>&nbsp;总结：从培训中我学到了很多啊&nbsp;</p>'),
(54, 9, 106, 1, 1434894087, 5, 2, '通过是否是', 1434894062, 1, '<p><span style="color: rgb(51, 51, 51); font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);">预备党员任务1上发个</span></p>'),
(55, 11, 106, 1, 1572921833, 5, 2, '挺好的', 1572921640, 1, '<p>这是一个新的的那个圆任务</p>');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) DEFAULT '' COMMENT '用户/账户名',
  `password` char(32) DEFAULT '',
  `logintime` int(10) unsigned DEFAULT NULL,
  `loginip` varchar(30) DEFAULT NULL,
  `lock` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `email` varchar(30) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `type` int(1) DEFAULT NULL COMMENT 'code的用途，1为注册，2为找回密码',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`email`) USING BTREE,
  UNIQUE KEY `username` (`username`) USING BTREE,
  UNIQUE KEY `code` (`code`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=165 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `logintime`, `loginip`, `lock`, `email`, `code`, `type`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1572922437, '', 0, 'sdfsd555@qq.com', NULL, NULL),
(97, 'jike1', '93c73499b887695ff0032c1a3ed467b5', 1434943091, NULL, 0, '', NULL, NULL),
(104, 'dianxin1', 'f37ade3dc83a3a34e424cc1a337145db', 1572846856, NULL, 0, 'dianxin1', NULL, NULL),
(105, 'xinguan1', 'd404f575a86bd7f5ace3ebd5148f3635', 1572356220, NULL, 0, 'xinguan1', NULL, NULL),
(106, '2012000100', 'e10adc3949ba59abbe56e057f20f883e', 1572922566, NULL, 0, 'xx1@mnbvcxz', NULL, NULL),
(107, '2013000200', 'e10adc3949ba59abbe56e057f20f883e', 1434893802, NULL, 0, 'xinguan', NULL, NULL),
(160, '2012000051', 'e10adc3949ba59abbe56e057f20f883e', 1572921520, NULL, 0, 'xupingxx@qq.com', '', 0),
(162, '201731062312', 'f47042fb3d8db920882f4b32be670112', 1566222626, NULL, 0, '804862438@qq.com', NULL, NULL),
(164, '532e991ea8105da7dcdd', '', NULL, NULL, 1, '947462494@qq.com', 'd0705c6ec9bfa0da4fc0cc8056b2b6a3', 1);

-- --------------------------------------------------------

--
-- 表的结构 `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `uid` int(11) NOT NULL COMMENT 'user表的id',
  `name` char(10) DEFAULT NULL COMMENT '姓名',
  `sex` int(1) DEFAULT NULL COMMENT '性别，0为男，1为女',
  `nation` varchar(10) DEFAULT NULL COMMENT '民族',
  `number` int(10) NOT NULL COMMENT '学号',
  `entrance` int(4) DEFAULT '0' COMMENT '入学年份',
  `college` int(5) DEFAULT '0' COMMENT '学院,class表的id值',
  `major` int(5) DEFAULT '0' COMMENT '专业，class表的id值',
  `class` int(5) DEFAULT '0' COMMENT '班级，class表的id值',
  `birthday` date DEFAULT NULL COMMENT '出生日期',
  `idcard` varchar(20) DEFAULT NULL COMMENT '身份证号',
  `home` varchar(30) DEFAULT NULL COMMENT '家庭住址',
  `post` varchar(20) DEFAULT NULL COMMENT '担任职务',
  `phone` varchar(15) DEFAULT NULL COMMENT '手机号',
  `qq` int(15) DEFAULT NULL COMMENT 'qq号',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '用户状态status表id',
  PRIMARY KEY (`uid`,`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='用户信息表';

--
-- 转存表中的数据 `userinfo`
--

INSERT INTO `userinfo` (`uid`, `name`, `sex`, `nation`, `number`, `entrance`, `college`, `major`, `class`, `birthday`, `idcard`, `home`, `post`, `phone`, `qq`, `status`) VALUES
(1, '管理员', 0, '汉', 0, NULL, 1, 3, 7, '2015-03-11', '', '', '', '', NULL, 1),
(97, 'jike1', NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(104, 'dianxin1', NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(105, 'xinguan1', NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(106, '电信学生1', 0, NULL, 2012000100, 2019, 1, 4, 9, NULL, NULL, NULL, NULL, NULL, 123456, 4),
(107, '信管学生1', 1, NULL, 2013000200, 2013, 1, 5, 11, NULL, NULL, NULL, NULL, NULL, 123456, 0),
(160, '徐平', 0, NULL, 2012000051, 2012, 1, 3, 7, NULL, NULL, NULL, NULL, NULL, 123456, 0),
(162, 'vchopin', 0, NULL, 2147483647, 2016, 1, 3, 6, NULL, NULL, NULL, NULL, NULL, 804862438, 1);

-- --------------------------------------------------------

--
-- 表的结构 `user_files`
--

CREATE TABLE IF NOT EXISTS `user_files` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(15) NOT NULL,
  `file_id` int(20) NOT NULL,
  `task_id` int(5) DEFAULT NULL,
  `effective` int(1) DEFAULT '0' COMMENT '为1有效，表示当前用户的本文件在当前任务中有效',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `file_id` (`file_id`),
  KEY `task_id` (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `releaser_id` int(15) DEFAULT NULL,
  `releaser_time` int(10) DEFAULT NULL,
  `effective` int(1) DEFAULT '1',
  `category` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `video`
--

INSERT INTO `video` (`id`, `title`, `content`, `url`, `releaser_id`, `releaser_time`, `effective`, `category`) VALUES
(3, '末日崩塌', '[预告片]超级地震掀起末日海啸 主演：道恩·强森 ', 'http://player.youku.com/player.php/Type/Folder/Fid/23545867/Ob/1/sid/XOTA5NDA4NTMy/v.swf', 104, 1434856599, 0, ''),
(4, '末日崩塌', '[预告片]超级地震掀起末日海啸 主演：道恩·强森 ', 'http://player.youku.com/player.php/Type/Folder/Fid/23545867/Ob/1/sid/XOTA5NDA4NTMy/v.swf', 1, 1426137723, 1, ''),
(5, '末日崩塌', '[预告片]超级地震掀起末日海啸 主演：道恩·强森 ', 'http://player.youku.com/player.php/Type/Folder/Fid/23545867/Ob/1/sid/XOTA5NDA4NTMy/v.swf', 1, 1426137724, 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `video_recorder`
--

CREATE TABLE IF NOT EXISTS `video_recorder` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(15) DEFAULT NULL,
  `vid` int(5) DEFAULT NULL,
  `day` date DEFAULT NULL,
  `duration` int(5) DEFAULT NULL COMMENT '时长，单位分钟',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `vid` (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `video_recorder`
--

INSERT INTO `video_recorder` (`id`, `uid`, `vid`, `day`, `duration`) VALUES
(1, 106, 3, '2015-06-21', 2);

-- --------------------------------------------------------

--
-- 视图结构 `activitylistview`
--
DROP TABLE IF EXISTS `activitylistview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `activitylistview` AS select `userinfo`.`uid` AS `uid`,`userinfo`.`name` AS `name`,`userinfo`.`entrance` AS `entrance`,`activity`.`title` AS `title`,`activity`.`check_comp` AS `check_comp`,`userinfo`.`class` AS `class`,`userinfo`.`number` AS `number`,`userinfo`.`college` AS `college`,`userinfo`.`major` AS `major`,`activity`.`id` AS `aid` from (`userinfo` join `activity`) where (`userinfo`.`uid` = `activity`.`uid`);

--
-- 限制导出的表
--

--
-- 限制表 `access`
--
ALTER TABLE `access`
  ADD CONSTRAINT `fk_access_nodeid` FOREIGN KEY (`node_id`) REFERENCES `node` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_access_roleid` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `fk_activity_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `fk_role_user_roleid` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_role_user_userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `task_ok`
--
ALTER TABLE `task_ok`
  ADD CONSTRAINT `fk_task_ok_checkerid` FOREIGN KEY (`checker_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_task_ok_taskid` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_task_ok_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `user_files`
--
ALTER TABLE `user_files`
  ADD CONSTRAINT `fk_user_files_fileid` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_files_taskid` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_files_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `video_recorder`
--
ALTER TABLE `video_recorder`
  ADD CONSTRAINT `fk_vr_user_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vr_v_vid` FOREIGN KEY (`vid`) REFERENCES `video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
