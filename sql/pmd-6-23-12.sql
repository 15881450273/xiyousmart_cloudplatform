/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : pmd

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-06-23 12:45:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for access
-- ----------------------------
DROP TABLE IF EXISTS `access`;
CREATE TABLE `access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`),
  CONSTRAINT `fk_access_nodeid` FOREIGN KEY (`node_id`) REFERENCES `node` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_access_roleid` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of access
-- ----------------------------
INSERT INTO `access` VALUES ('5', '90', '2', null);
INSERT INTO `access` VALUES ('5', '93', '3', null);
INSERT INTO `access` VALUES ('5', '94', '3', null);
INSERT INTO `access` VALUES ('5', '92', '3', null);
INSERT INTO `access` VALUES ('5', '91', '3', null);
INSERT INTO `access` VALUES ('5', '50', '2', null);
INSERT INTO `access` VALUES ('5', '55', '3', null);
INSERT INTO `access` VALUES ('5', '54', '3', null);
INSERT INTO `access` VALUES ('5', '53', '3', null);
INSERT INTO `access` VALUES ('5', '52', '3', null);
INSERT INTO `access` VALUES ('5', '49', '2', null);
INSERT INTO `access` VALUES ('5', '89', '3', null);
INSERT INTO `access` VALUES ('5', '57', '3', null);
INSERT INTO `access` VALUES ('5', '56', '3', null);
INSERT INTO `access` VALUES ('5', '48', '2', null);
INSERT INTO `access` VALUES ('5', '87', '3', null);
INSERT INTO `access` VALUES ('5', '97', '3', null);
INSERT INTO `access` VALUES ('5', '96', '3', null);
INSERT INTO `access` VALUES ('5', '95', '3', null);
INSERT INTO `access` VALUES ('5', '88', '3', null);
INSERT INTO `access` VALUES ('5', '65', '3', null);
INSERT INTO `access` VALUES ('5', '58', '3', null);
INSERT INTO `access` VALUES ('5', '64', '3', null);
INSERT INTO `access` VALUES ('5', '63', '3', null);
INSERT INTO `access` VALUES ('5', '61', '3', null);
INSERT INTO `access` VALUES ('5', '60', '3', null);
INSERT INTO `access` VALUES ('5', '59', '3', null);
INSERT INTO `access` VALUES ('5', '42', '2', null);
INSERT INTO `access` VALUES ('5', '51', '3', null);
INSERT INTO `access` VALUES ('5', '98', '2', null);
INSERT INTO `access` VALUES ('5', '100', '3', null);
INSERT INTO `access` VALUES ('5', '99', '3', null);
INSERT INTO `access` VALUES ('5', '41', '1', null);
INSERT INTO `access` VALUES ('7', '81', '1', null);
INSERT INTO `access` VALUES ('7', '39', '1', null);
INSERT INTO `access` VALUES ('7', '90', '2', null);
INSERT INTO `access` VALUES ('7', '93', '3', null);
INSERT INTO `access` VALUES ('7', '94', '3', null);
INSERT INTO `access` VALUES ('7', '92', '3', null);
INSERT INTO `access` VALUES ('7', '91', '3', null);
INSERT INTO `access` VALUES ('7', '50', '2', null);
INSERT INTO `access` VALUES ('7', '55', '3', null);
INSERT INTO `access` VALUES ('7', '54', '3', null);
INSERT INTO `access` VALUES ('7', '53', '3', null);
INSERT INTO `access` VALUES ('7', '52', '3', null);
INSERT INTO `access` VALUES ('7', '49', '2', null);
INSERT INTO `access` VALUES ('7', '89', '3', null);
INSERT INTO `access` VALUES ('7', '57', '3', null);
INSERT INTO `access` VALUES ('7', '56', '3', null);
INSERT INTO `access` VALUES ('7', '48', '2', null);
INSERT INTO `access` VALUES ('7', '87', '3', null);
INSERT INTO `access` VALUES ('7', '97', '3', null);
INSERT INTO `access` VALUES ('7', '96', '3', null);
INSERT INTO `access` VALUES ('7', '95', '3', null);
INSERT INTO `access` VALUES ('7', '88', '3', null);
INSERT INTO `access` VALUES ('7', '65', '3', null);
INSERT INTO `access` VALUES ('7', '58', '3', null);
INSERT INTO `access` VALUES ('7', '64', '3', null);
INSERT INTO `access` VALUES ('7', '63', '3', null);
INSERT INTO `access` VALUES ('7', '61', '3', null);
INSERT INTO `access` VALUES ('7', '60', '3', null);
INSERT INTO `access` VALUES ('7', '59', '3', null);
INSERT INTO `access` VALUES ('7', '43', '2', null);
INSERT INTO `access` VALUES ('7', '85', '3', null);
INSERT INTO `access` VALUES ('7', '84', '3', null);
INSERT INTO `access` VALUES ('7', '83', '3', null);
INSERT INTO `access` VALUES ('7', '82', '3', null);
INSERT INTO `access` VALUES ('7', '72', '3', null);
INSERT INTO `access` VALUES ('7', '86', '3', null);
INSERT INTO `access` VALUES ('7', '73', '3', null);
INSERT INTO `access` VALUES ('7', '70', '3', null);
INSERT INTO `access` VALUES ('7', '74', '3', null);
INSERT INTO `access` VALUES ('7', '76', '3', null);
INSERT INTO `access` VALUES ('7', '45', '3', null);
INSERT INTO `access` VALUES ('7', '79', '3', null);
INSERT INTO `access` VALUES ('7', '77', '3', null);
INSERT INTO `access` VALUES ('7', '78', '3', null);
INSERT INTO `access` VALUES ('7', '44', '3', null);
INSERT INTO `access` VALUES ('7', '71', '3', null);
INSERT INTO `access` VALUES ('7', '80', '3', null);
INSERT INTO `access` VALUES ('7', '42', '2', null);
INSERT INTO `access` VALUES ('7', '51', '3', null);
INSERT INTO `access` VALUES ('7', '98', '2', null);
INSERT INTO `access` VALUES ('7', '100', '3', null);
INSERT INTO `access` VALUES ('7', '99', '3', null);
INSERT INTO `access` VALUES ('7', '41', '1', null);
INSERT INTO `access` VALUES ('2', '39', '1', null);
INSERT INTO `access` VALUES ('2', '90', '2', null);
INSERT INTO `access` VALUES ('2', '93', '3', null);
INSERT INTO `access` VALUES ('2', '94', '3', null);
INSERT INTO `access` VALUES ('2', '92', '3', null);
INSERT INTO `access` VALUES ('2', '91', '3', null);
INSERT INTO `access` VALUES ('2', '50', '2', null);
INSERT INTO `access` VALUES ('2', '55', '3', null);
INSERT INTO `access` VALUES ('2', '54', '3', null);
INSERT INTO `access` VALUES ('2', '53', '3', null);
INSERT INTO `access` VALUES ('2', '52', '3', null);
INSERT INTO `access` VALUES ('2', '49', '2', null);
INSERT INTO `access` VALUES ('2', '89', '3', null);
INSERT INTO `access` VALUES ('2', '57', '3', null);
INSERT INTO `access` VALUES ('2', '56', '3', null);
INSERT INTO `access` VALUES ('2', '48', '2', null);
INSERT INTO `access` VALUES ('2', '87', '3', null);
INSERT INTO `access` VALUES ('2', '97', '3', null);
INSERT INTO `access` VALUES ('2', '96', '3', null);
INSERT INTO `access` VALUES ('2', '95', '3', null);
INSERT INTO `access` VALUES ('2', '88', '3', null);
INSERT INTO `access` VALUES ('2', '65', '3', null);
INSERT INTO `access` VALUES ('2', '58', '3', null);
INSERT INTO `access` VALUES ('2', '64', '3', null);
INSERT INTO `access` VALUES ('2', '63', '3', null);
INSERT INTO `access` VALUES ('2', '61', '3', null);
INSERT INTO `access` VALUES ('2', '60', '3', null);
INSERT INTO `access` VALUES ('2', '59', '3', null);
INSERT INTO `access` VALUES ('2', '42', '2', null);
INSERT INTO `access` VALUES ('2', '51', '3', null);
INSERT INTO `access` VALUES ('2', '98', '2', null);
INSERT INTO `access` VALUES ('2', '100', '3', null);
INSERT INTO `access` VALUES ('2', '99', '3', null);
INSERT INTO `access` VALUES ('2', '41', '1', null);
INSERT INTO `access` VALUES ('3', '39', '1', null);
INSERT INTO `access` VALUES ('3', '90', '2', null);
INSERT INTO `access` VALUES ('3', '93', '3', null);
INSERT INTO `access` VALUES ('3', '94', '3', null);
INSERT INTO `access` VALUES ('3', '92', '3', null);
INSERT INTO `access` VALUES ('3', '91', '3', null);
INSERT INTO `access` VALUES ('3', '50', '2', null);
INSERT INTO `access` VALUES ('3', '55', '3', null);
INSERT INTO `access` VALUES ('3', '54', '3', null);
INSERT INTO `access` VALUES ('3', '53', '3', null);
INSERT INTO `access` VALUES ('3', '52', '3', null);
INSERT INTO `access` VALUES ('3', '49', '2', null);
INSERT INTO `access` VALUES ('3', '89', '3', null);
INSERT INTO `access` VALUES ('3', '57', '3', null);
INSERT INTO `access` VALUES ('3', '56', '3', null);
INSERT INTO `access` VALUES ('3', '48', '2', null);
INSERT INTO `access` VALUES ('3', '87', '3', null);
INSERT INTO `access` VALUES ('3', '97', '3', null);
INSERT INTO `access` VALUES ('3', '96', '3', null);
INSERT INTO `access` VALUES ('3', '95', '3', null);
INSERT INTO `access` VALUES ('3', '88', '3', null);
INSERT INTO `access` VALUES ('3', '65', '3', null);
INSERT INTO `access` VALUES ('3', '58', '3', null);
INSERT INTO `access` VALUES ('3', '64', '3', null);
INSERT INTO `access` VALUES ('3', '63', '3', null);
INSERT INTO `access` VALUES ('3', '61', '3', null);
INSERT INTO `access` VALUES ('3', '60', '3', null);
INSERT INTO `access` VALUES ('3', '59', '3', null);
INSERT INTO `access` VALUES ('3', '42', '2', null);
INSERT INTO `access` VALUES ('3', '51', '3', null);
INSERT INTO `access` VALUES ('3', '98', '2', null);
INSERT INTO `access` VALUES ('3', '100', '3', null);
INSERT INTO `access` VALUES ('3', '99', '3', null);
INSERT INTO `access` VALUES ('4', '39', '1', null);
INSERT INTO `access` VALUES ('4', '90', '2', null);
INSERT INTO `access` VALUES ('4', '93', '3', null);
INSERT INTO `access` VALUES ('4', '94', '3', null);
INSERT INTO `access` VALUES ('4', '92', '3', null);
INSERT INTO `access` VALUES ('4', '91', '3', null);
INSERT INTO `access` VALUES ('4', '50', '2', null);
INSERT INTO `access` VALUES ('4', '55', '3', null);
INSERT INTO `access` VALUES ('4', '54', '3', null);
INSERT INTO `access` VALUES ('4', '53', '3', null);
INSERT INTO `access` VALUES ('4', '52', '3', null);
INSERT INTO `access` VALUES ('4', '49', '2', null);
INSERT INTO `access` VALUES ('4', '89', '3', null);
INSERT INTO `access` VALUES ('4', '57', '3', null);
INSERT INTO `access` VALUES ('4', '56', '3', null);
INSERT INTO `access` VALUES ('4', '48', '2', null);
INSERT INTO `access` VALUES ('4', '87', '3', null);
INSERT INTO `access` VALUES ('4', '97', '3', null);
INSERT INTO `access` VALUES ('4', '96', '3', null);
INSERT INTO `access` VALUES ('4', '95', '3', null);
INSERT INTO `access` VALUES ('4', '88', '3', null);
INSERT INTO `access` VALUES ('4', '65', '3', null);
INSERT INTO `access` VALUES ('4', '58', '3', null);
INSERT INTO `access` VALUES ('4', '64', '3', null);
INSERT INTO `access` VALUES ('4', '63', '3', null);
INSERT INTO `access` VALUES ('4', '61', '3', null);
INSERT INTO `access` VALUES ('4', '60', '3', null);
INSERT INTO `access` VALUES ('4', '59', '3', null);
INSERT INTO `access` VALUES ('4', '42', '2', null);
INSERT INTO `access` VALUES ('4', '51', '3', null);
INSERT INTO `access` VALUES ('4', '98', '2', null);
INSERT INTO `access` VALUES ('4', '100', '3', null);
INSERT INTO `access` VALUES ('4', '99', '3', null);

-- ----------------------------
-- Table structure for activity
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
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
  KEY `uid` (`uid`),
  CONSTRAINT `fk_activity_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of activity
-- ----------------------------
INSERT INTO `activity` VALUES ('37', '106', '我的活动啊啊', '<p>我的活动啊啊</p>', '2015-06-17', '1434646957', '104', '1434647076', '5', '2', '不错的', '1');
INSERT INTO `activity` VALUES ('38', '106', '优秀班干部', '<p>&nbsp;优秀班干部</p>', '2015-06-03', '1434859688', '104', '1434860250', '4', '2', '还可以', '2');
INSERT INTO `activity` VALUES ('39', '106', '我的心得体会', '<p>&nbsp;我的心得体会我的心得体会</p>', '2015-06-02', '1434860016', null, null, null, '0', null, '3');

-- ----------------------------
-- Table structure for assess
-- ----------------------------
DROP TABLE IF EXISTS `assess`;
CREATE TABLE `assess` (
  `item_id` int(5) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `value` int(3) DEFAULT NULL COMMENT '评估值',
  `time` int(3) DEFAULT NULL COMMENT '次数',
  `date` char(30) DEFAULT NULL COMMENT '日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of assess
-- ----------------------------

-- ----------------------------
-- Table structure for assess_item
-- ----------------------------
DROP TABLE IF EXISTS `assess_item`;
CREATE TABLE `assess_item` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL COMMENT '评估项目',
  `type` int(1) DEFAULT '1' COMMENT '字段类型：1为学习栏目，2为思想栏目',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `sort` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of assess_item
-- ----------------------------
INSERT INTO `assess_item` VALUES ('1', 'pingjunfen', '0', '1', '平均分', '1');
INSERT INTO `assess_item` VALUES ('2', 'guakemenshu', '0', '1', '挂科门数', '2');
INSERT INTO `assess_item` VALUES ('3', 'susheweisheng', '0', '2', '宿舍卫生(不合格)', '1');
INSERT INTO `assess_item` VALUES ('4', 'zuidifen', '0', '1', '最低分', '1');
INSERT INTO `assess_item` VALUES ('5', 'zongheceping', '0', '1', '综合测评', '1');
INSERT INTO `assess_item` VALUES ('6', 'wanguicishu', '0', '2', '晚归次数', '1');
INSERT INTO `assess_item` VALUES ('7', 'yebuguisu', '0', '2', '夜不归宿', '1');
INSERT INTO `assess_item` VALUES ('8', 'zaocaobudao', '0', '2', '早操不到', '1');
INSERT INTO `assess_item` VALUES ('9', 'kuangkecishu', '0', '1', '旷课次数', '1');

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL COMMENT '学院、专业、班级 名字',
  `fid` int(5) DEFAULT NULL COMMENT '父id',
  `order` int(5) NOT NULL DEFAULT '0',
  `flag` int(1) DEFAULT NULL COMMENT '1为学院，2为主业，3为班级',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', '信息科学与技术', '0', '1', '1');
INSERT INTO `class` VALUES ('3', '计算机科学与技术', '1', '0', '2');
INSERT INTO `class` VALUES ('4', '电子信息工程', '1', '0', '2');
INSERT INTO `class` VALUES ('5', '信息管理', '1', '0', '2');
INSERT INTO `class` VALUES ('6', '计科1班', '3', '0', '3');
INSERT INTO `class` VALUES ('7', '计科2班', '3', '0', '3');
INSERT INTO `class` VALUES ('8', '计科3班', '3', '0', '3');
INSERT INTO `class` VALUES ('9', '电信1班', '4', '0', '3');
INSERT INTO `class` VALUES ('10', '电信2班', '4', '0', '3');
INSERT INTO `class` VALUES ('11', '信管1班', '5', '0', '3');
INSERT INTO `class` VALUES ('19', '信管2班', '5', '2', '3');

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('basedsystime', null, '1');
INSERT INTO `config` VALUES ('checkemail', null, '1');
INSERT INTO `config` VALUES ('freshman', null, '2012');
INSERT INTO `config` VALUES ('mail_host', null, 'smtp.qq.com');
INSERT INTO `config` VALUES ('mail_password', null, 'qx940812pq!');
INSERT INTO `config` VALUES ('mail_port', null, '25');
INSERT INTO `config` VALUES ('mail_username', null, '269832017@qq.com');
INSERT INTO `config` VALUES ('senior', '大四入学年份', '2011');

-- ----------------------------
-- Table structure for files
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='上传文件信息';

-- ----------------------------
-- Records of files
-- ----------------------------

-- ----------------------------
-- Table structure for manage
-- ----------------------------
DROP TABLE IF EXISTS `manage`;
CREATE TABLE `manage` (
  `role_id` smallint(6) unsigned NOT NULL,
  `class_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage
-- ----------------------------
INSERT INTO `manage` VALUES ('3', '4', '2');
INSERT INTO `manage` VALUES ('3', '9', '3');
INSERT INTO `manage` VALUES ('3', '10', '3');
INSERT INTO `manage` VALUES ('4', '5', '2');
INSERT INTO `manage` VALUES ('4', '11', '3');
INSERT INTO `manage` VALUES ('4', '19', '3');
INSERT INTO `manage` VALUES ('6', '1', '1');
INSERT INTO `manage` VALUES ('6', '3', '2');
INSERT INTO `manage` VALUES ('6', '6', '3');
INSERT INTO `manage` VALUES ('6', '7', '3');
INSERT INTO `manage` VALUES ('6', '8', '3');
INSERT INTO `manage` VALUES ('6', '4', '2');
INSERT INTO `manage` VALUES ('6', '9', '3');
INSERT INTO `manage` VALUES ('6', '10', '3');
INSERT INTO `manage` VALUES ('6', '5', '2');
INSERT INTO `manage` VALUES ('6', '11', '3');
INSERT INTO `manage` VALUES ('6', '19', '3');
INSERT INTO `manage` VALUES ('7', '1', '1');
INSERT INTO `manage` VALUES ('7', '3', '2');
INSERT INTO `manage` VALUES ('7', '6', '3');
INSERT INTO `manage` VALUES ('7', '7', '3');
INSERT INTO `manage` VALUES ('7', '8', '3');
INSERT INTO `manage` VALUES ('7', '4', '2');
INSERT INTO `manage` VALUES ('7', '9', '3');
INSERT INTO `manage` VALUES ('7', '10', '3');
INSERT INTO `manage` VALUES ('7', '5', '2');
INSERT INTO `manage` VALUES ('7', '11', '3');
INSERT INTO `manage` VALUES ('7', '19', '3');
INSERT INTO `manage` VALUES ('2', '3', '2');
INSERT INTO `manage` VALUES ('2', '6', '3');
INSERT INTO `manage` VALUES ('2', '7', '3');
INSERT INTO `manage` VALUES ('2', '8', '3');

-- ----------------------------
-- Table structure for node
-- ----------------------------
DROP TABLE IF EXISTS `node`;
CREATE TABLE `node` (
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
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of node
-- ----------------------------
INSERT INTO `node` VALUES ('39', 'Admin', '后台应用', '1', '', '1', '0', '1');
INSERT INTO `node` VALUES ('41', 'Index', '前台应用', '1', '', '2', '0', '1');
INSERT INTO `node` VALUES ('42', 'index', '后台首页', '1', '', '1', '39', '2');
INSERT INTO `node` VALUES ('43', 'Rbac', '权限控制', '1', '', '1', '39', '2');
INSERT INTO `node` VALUES ('44', 'addUser', '添加用户', '1', '', '8', '43', '3');
INSERT INTO `node` VALUES ('45', 'addRole', '添加角色', '1', '', '5', '43', '3');
INSERT INTO `node` VALUES ('47', 'collect', '字段汇总', '1', '', '2', '46', '3');
INSERT INTO `node` VALUES ('48', 'Check', '任务审核', '1', '', '1', '39', '2');
INSERT INTO `node` VALUES ('49', 'Query', '查询业务', '1', '', '1', '39', '2');
INSERT INTO `node` VALUES ('50', 'Video', '在线视频', '1', '', '1', '39', '2');
INSERT INTO `node` VALUES ('51', 'index', '后台页面', '1', '', '1', '42', '3');
INSERT INTO `node` VALUES ('52', 'index', '视频首页', '1', '', '1', '50', '3');
INSERT INTO `node` VALUES ('53', 'addVideo', '添加视频', '1', '', '1', '50', '3');
INSERT INTO `node` VALUES ('54', 'editVideo', '修改视频', '1', '', '1', '50', '3');
INSERT INTO `node` VALUES ('55', 'delVideo', '删除视频', '1', '', '1', '50', '3');
INSERT INTO `node` VALUES ('56', 'index', '查询_首页', '1', '', '1', '49', '3');
INSERT INTO `node` VALUES ('57', 'query', '查询结果', '1', '', '1', '49', '3');
INSERT INTO `node` VALUES ('58', 'index', '审核首页', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('59', 'checklist', '审核列表', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('60', 'check', '审核评定', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('61', 'checkUserinfo', '审核用户信息', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('63', 'activity', '活动审核', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('64', 'activitylist', '活动审核列表', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('65', 'activitycheck', '活动审核评定', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('66', 'index', '管理首页', '1', '', '1', '46', '3');
INSERT INTO `node` VALUES ('67', 'addField', '添加字段', '1', '', '1', '46', '3');
INSERT INTO `node` VALUES ('68', 'editCollect', '编辑汇总', '1', '', '1', '46', '3');
INSERT INTO `node` VALUES ('69', 'delCollect', '删除汇总', '1', '', '1', '46', '3');
INSERT INTO `node` VALUES ('70', 'addNode', '添加节点', '1', '', '2', '43', '3');
INSERT INTO `node` VALUES ('71', 'delUser', '删除用户', '1', '', '9', '43', '3');
INSERT INTO `node` VALUES ('72', 'node', '节点列表', '1', '', '1', '43', '3');
INSERT INTO `node` VALUES ('73', 'editNode', '修改节点', '1', '', '2', '43', '3');
INSERT INTO `node` VALUES ('74', 'delNode', '删除节点', '1', '', '3', '43', '3');
INSERT INTO `node` VALUES ('76', 'role', '角色列表', '1', '', '4', '43', '3');
INSERT INTO `node` VALUES ('77', 'delRole', '删除角色', '1', '', '6', '43', '3');
INSERT INTO `node` VALUES ('78', 'user', '用户列表', '1', '', '7', '43', '3');
INSERT INTO `node` VALUES ('79', 'editRole', '修改角色', '1', '', '6', '43', '3');
INSERT INTO `node` VALUES ('80', 'access', '配置权限', '1', '', '11', '43', '3');
INSERT INTO `node` VALUES ('81', 'guanlifanwei', '管理范围', '1', '', '1', '0', '1');
INSERT INTO `node` VALUES ('82', 'addClasses', '添加学院/专业/班级', '1', '', '1', '43', '3');
INSERT INTO `node` VALUES ('83', 'addtask', '添加流程', '1', '', '1', '43', '3');
INSERT INTO `node` VALUES ('84', 'classes', '专业班级管理页', '1', '', '1', '43', '3');
INSERT INTO `node` VALUES ('85', 'manage', '管理范围', '1', '', '1', '43', '3');
INSERT INTO `node` VALUES ('86', 'task', '流程任务页', '1', '', '1', '43', '3');
INSERT INTO `node` VALUES ('87', 'registerCheck', '注册审核', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('88', 'showContent', '提交内容显示', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('89', 'userpage', '用户详情页', '1', '', '1', '49', '3');
INSERT INTO `node` VALUES ('90', 'Assess', '评估管理', '1', '', '1', '39', '2');
INSERT INTO `node` VALUES ('91', 'addStudy', '学习相关-添加修改', '1', '', '1', '90', '3');
INSERT INTO `node` VALUES ('92', 'addThink', '思想相关-添加修改', '1', '', '1', '90', '3');
INSERT INTO `node` VALUES ('93', 'importStudy', '学习相关-导入', '1', '', '1', '90', '3');
INSERT INTO `node` VALUES ('94', 'importThink', '思想相关-导入', '1', '', '1', '90', '3');
INSERT INTO `node` VALUES ('95', 'checklist', '注册审核列表', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('96', 'checkCancel', '审核取消', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('97', 'registerList', '注册列表', '1', '', '1', '48', '3');
INSERT INTO `node` VALUES ('98', 'Notice', '通知公告', '1', '', '2', '39', '2');
INSERT INTO `node` VALUES ('99', 'index', '通知公告--主页', '1', '', '1', '98', '3');
INSERT INTO `node` VALUES ('100', 'editNotice', '通知公告--编辑', '1', '', '1', '98', '3');

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '通知公告',
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `poster` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of notice
-- ----------------------------
INSERT INTO `notice` VALUES ('7', '电信通知-所有人', '<p>电信通知-所有人</p>', '1434645330', '104', '-1');
INSERT INTO `notice` VALUES ('8', '电信通知-未认证用户', '<p>电信通知-未认证用户</p>', '1434645371', '104', '0');
INSERT INTO `notice` VALUES ('9', '电信通知-普通学生', '<p>电信通知-普通学生</p>', '1434645400', '104', '1');
INSERT INTO `notice` VALUES ('10', '电信通知--入党积极分子', '<p>电信通知--入党积极分子</p>', '1434645437', '104', '2');
INSERT INTO `notice` VALUES ('11', '电信通知-预备党员', '<p>电信通知-预备党员</p>', '1434645467', '104', '3');
INSERT INTO `notice` VALUES ('12', '电信通知-党员', '<p>电信通知-党员</p>', '1434645492', '104', '4');
INSERT INTO `notice` VALUES ('13', '信管通知-所有人', '<p>信管通知-所有人</p>', '1434854307', '105', '-1');
INSERT INTO `notice` VALUES ('14', '信管通知-未认证用户', '<p>信管通知-未认证用户</p>', '1434854338', '105', '0');
INSERT INTO `notice` VALUES ('15', '信管通知-普通学生', '<p>信管通知-普通学生</p>', '1434854369', '105', '1');
INSERT INTO `notice` VALUES ('16', '信管通知-入党积极分子', '<p>信管通知-入党积极分子<br/></p>', '1434854401', '105', '2');
INSERT INTO `notice` VALUES ('17', '信管通知-预备党员', '<p>信管通知-预备党员</p>', '1434854431', '105', '3');
INSERT INTO `notice` VALUES ('18', '信管通知-党员', '<p>信管通知-党员</p>', '1434854447', '105', '4');
INSERT INTO `notice` VALUES ('19', '计科通知-所有人', '<p>计科通知-所有人</p>', '1434854623', '97', '-1');
INSERT INTO `notice` VALUES ('20', '计科通知-未认证用户', '<p>计科通知-未认证用户</p>', '1434854649', '97', '0');
INSERT INTO `notice` VALUES ('21', '计科通知-普通学生', '<p>计科通知-普通学生</p>', '1434854683', '97', '1');
INSERT INTO `notice` VALUES ('22', '计科通知-入党积极分子', '<p>计科通知-入党积极分子</p>', '1434854703', '97', '2');
INSERT INTO `notice` VALUES ('23', '计科通知-预备党员', '<p>计科通知-预备党员</p>', '1434854753', '97', '3');
INSERT INTO `notice` VALUES ('24', '计科通知-党员', '<p>计科通知-党员</p>', '1434854766', '97', '4');
INSERT INTO `notice` VALUES ('25', '超级管理员通知，所有年级可见', '<p>超级管理员通知，所有年级可见</p>', '1434893746', '1', '-1');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES ('1', 'student', null, '1', '学生');
INSERT INTO `role` VALUES ('2', 'jike', null, '1', '计科团支部');
INSERT INTO `role` VALUES ('3', 'dianxin', null, '1', '电信团支部');
INSERT INTO `role` VALUES ('4', 'xinguan', null, '1', '信管团支部');
INSERT INTO `role` VALUES ('5', 'manager', null, '1', '管理员');
INSERT INTO `role` VALUES ('7', 'superadmin', null, '1', '超级管理员');

-- ----------------------------
-- Table structure for role_class
-- ----------------------------
DROP TABLE IF EXISTS `role_class`;
CREATE TABLE `role_class` (
  `role_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_class
-- ----------------------------

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `role_id` smallint(6) unsigned DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `fk_role_user_roleid` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_role_user_userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES ('2', '97');
INSERT INTO `role_user` VALUES ('3', '104');
INSERT INTO `role_user` VALUES ('5', '104');
INSERT INTO `role_user` VALUES ('4', '105');
INSERT INTO `role_user` VALUES ('5', '105');
INSERT INTO `role_user` VALUES ('7', '1');
INSERT INTO `role_user` VALUES ('5', '97');
INSERT INTO `role_user` VALUES ('5', '1');
INSERT INTO `role_user` VALUES ('1', '1');
INSERT INTO `role_user` VALUES ('1', '106');

-- ----------------------------
-- Table structure for session
-- ----------------------------
DROP TABLE IF EXISTS `session`;
CREATE TABLE `session` (
  `session_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `session_expire` int(11) NOT NULL,
  `session_data` blob,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of session
-- ----------------------------
INSERT INTO `session` VALUES ('1rke66e9555u4uhb35ce2pm817', '1434956757', 0x7665726966797C733A33323A226434363462356163393965373434363266333231633036636361636334626666223B);
INSERT INTO `session` VALUES ('8ihvua15e29fpkv9poevtoudv2', '1434954643', 0x7665726966797C733A33323A226364313438323164616232313965613036653266643161326466326533353832223B);

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(2) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES ('0', '未认证用户', '请等待管理员认证');
INSERT INTO `status` VALUES ('1', '普通学生', '加油哦,完成本阶段的任务就可以成为预备党员了哟');
INSERT INTO `status` VALUES ('2', '入党积极分子', '加油哦，离成功越来越近了');
INSERT INTO `status` VALUES ('3', '预备党员', '只有一步之遥了，千万不要放弃');
INSERT INTO `status` VALUES ('4', '党员', '虽然已经成功，但路还很长，努力走下去');

-- ----------------------------
-- Table structure for task
-- ----------------------------
DROP TABLE IF EXISTS `task`;
CREATE TABLE `task` (
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of task
-- ----------------------------
INSERT INTO `task` VALUES ('1', '确定入党积极分子', '<p>确定入党积极分子</p>', '0', null, '1434455513', null, '0', '0', '1', 'Index/Task/dotask', null, '1');
INSERT INTO `task` VALUES ('2', '提交入党志愿书', '<p>13312提交入党志愿书3534师哥<br/></p>', '1', null, '1427037972', null, '0', '3', '2', 'Index/Task/dotask', null, '2');
INSERT INTO `task` VALUES ('3', '培养教育考察', '<p>培养教育考察</p>', '0', null, '1434457941', null, '0', '0', '2', 'Index/Task/dotask', null, '2');
INSERT INTO `task` VALUES ('4', '提交培训总结', '<p>提交培训总结32</p>', '1', null, '1427034817', null, '0', '3', '2', 'Index/Task/dotask', 'Admin/Check/checkfile', '2');
INSERT INTO `task` VALUES ('5', '上党课', '<p>上党课高少废话</p>', '1', null, '1434456840', null, '-1', '3', '1', 'Index/Task/showTaskContent', null, '2');
INSERT INTO `task` VALUES ('7', '提交入党申请书', '<p>243提交入党申请书35343<br/></p>', '1', null, '1427038184', null, '0', '1', '1', 'Index/Task/dotask', null, '1');
INSERT INTO `task` VALUES ('8', '预备党员', '<p>请完成预备党员任务<br/></p>', '0', null, '1434456780', null, '0', '0', '3', 'Index/Task/dotask', null, '3');
INSERT INTO `task` VALUES ('9', '预备党员任务1', '<p>预备党员任务1</p>', '1', null, '1434456869', null, '0', '8', '1', 'Index/Task/dotask', null, '3');
INSERT INTO `task` VALUES ('10', '党员', '<p>请完成党员任务<br/></p>', '0', null, '1434453568', null, '0', '0', '4', 'Index/Task/dotask', null, '4');
INSERT INTO `task` VALUES ('11', '党员任务1', '<p>党员任务11</p>', '1', null, '1434453604', null, '0', '10', '1', 'Index/Task/dotask', null, '4');

-- ----------------------------
-- Table structure for task_ok
-- ----------------------------
DROP TABLE IF EXISTS `task_ok`;
CREATE TABLE `task_ok` (
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
  KEY `ver_id` (`checker_id`),
  CONSTRAINT `fk_task_ok_checkerid` FOREIGN KEY (`checker_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_task_ok_taskid` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_task_ok_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of task_ok
-- ----------------------------
INSERT INTO `task_ok` VALUES ('51', '5', '106', '104', '1434858433', '5', '2', '不错啊', '1434855898', '0', null);
INSERT INTO `task_ok` VALUES ('52', '2', '106', '104', '1434895150', '5', '2', '生多个地方', '1434858476', '1', '<p>&nbsp;</p><p style=\"line-height: 16px;\"><img style=\"margin-right: 2px; vertical-align: middle;\" src=\"/pmd/Data/ueditor/dialogs/attachment/fileTypeImages/icon_doc.gif\"/><a title=\"1434646781688336.docx\" style=\"color: rgb(0, 102, 204); font-size: 12px;\" href=\"/pmd/Data/ueditor/php/unknowuser/ueditor/file/20150619/1434646781688336.docx\">1434646781688336.docx</a></p><p></p>');
INSERT INTO `task_ok` VALUES ('53', '4', '106', '1', '1434890192', '5', '2', 'OKKK', '1434859594', '1', '<p>&nbsp;总结：从培训中我学到了很多啊&nbsp;</p>');
INSERT INTO `task_ok` VALUES ('54', '9', '106', '1', '1434894087', '5', '2', '通过是否是', '1434894062', '1', '<p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Helvetica Neue&#39;, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; background-color: rgb(255, 255, 255);\">预备党员任务1上发个</span></p>');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
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
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1434943111', '', '0', 'sdfsd555@qq.com', null, null);
INSERT INTO `user` VALUES ('97', 'jike1', '93c73499b887695ff0032c1a3ed467b5', '1434943091', null, '0', '', null, null);
INSERT INTO `user` VALUES ('104', 'dianxin1', 'f37ade3dc83a3a34e424cc1a337145db', '1434894171', null, '0', 'dianxin1', null, null);
INSERT INTO `user` VALUES ('105', 'xinguan1', 'd404f575a86bd7f5ace3ebd5148f3635', '1434853948', null, '0', 'xinguan1', null, null);
INSERT INTO `user` VALUES ('106', '2012000100', 'e10adc3949ba59abbe56e057f20f883e', '1434950449', null, '0', 'xx1@mnbvcxz', null, null);
INSERT INTO `user` VALUES ('107', '2013000200', 'e10adc3949ba59abbe56e057f20f883e', '1434893802', null, '0', 'xinguan', null, null);
INSERT INTO `user` VALUES ('160', '2012000051', 'e10adc3949ba59abbe56e057f20f883e', null, null, '0', 'xupingxx@qq.com', '', '0');

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
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

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('1', '管理员', '0', '汉', '0', null, '1', '3', '7', '2015-03-11', '', '', '', '', null, '1');
INSERT INTO `userinfo` VALUES ('97', 'jike1', null, null, '0', '0', '0', '0', '0', null, null, null, null, null, null, '0');
INSERT INTO `userinfo` VALUES ('104', 'dianxin1', null, null, '0', '0', '0', '0', '0', null, null, null, null, null, null, '0');
INSERT INTO `userinfo` VALUES ('105', 'xinguan1', null, null, '0', '0', '0', '0', '0', null, null, null, null, null, null, '0');
INSERT INTO `userinfo` VALUES ('106', '电信学生1', '0', null, '2012000100', '2012', '1', '4', '9', null, null, null, null, null, '123456', '4');
INSERT INTO `userinfo` VALUES ('107', '信管学生1', '1', null, '2013000200', '2013', '1', '5', '11', null, null, null, null, null, '123456', '0');
INSERT INTO `userinfo` VALUES ('160', '徐平', '0', null, '2012000051', '2012', '1', '3', '7', null, null, null, null, null, '123456', '0');

-- ----------------------------
-- Table structure for user_files
-- ----------------------------
DROP TABLE IF EXISTS `user_files`;
CREATE TABLE `user_files` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(15) NOT NULL,
  `file_id` int(20) NOT NULL,
  `task_id` int(5) DEFAULT NULL,
  `effective` int(1) DEFAULT '0' COMMENT '为1有效，表示当前用户的本文件在当前任务中有效',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `file_id` (`file_id`),
  KEY `task_id` (`task_id`),
  CONSTRAINT `fk_user_files_fileid` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_files_taskid` FOREIGN KEY (`task_id`) REFERENCES `task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_files_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_files
-- ----------------------------

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('3', '末日崩塌', '[预告片]超级地震掀起末日海啸 主演：道恩·强森 ', 'http://player.youku.com/player.php/Type/Folder/Fid/23545867/Ob/1/sid/XOTA5NDA4NTMy/v.swf', '104', '1434856599', '0', '');
INSERT INTO `video` VALUES ('4', '末日崩塌', '[预告片]超级地震掀起末日海啸 主演：道恩·强森 ', 'http://player.youku.com/player.php/Type/Folder/Fid/23545867/Ob/1/sid/XOTA5NDA4NTMy/v.swf', '1', '1426137723', '1', '');
INSERT INTO `video` VALUES ('5', '末日崩塌', '[预告片]超级地震掀起末日海啸 主演：道恩·强森 ', 'http://player.youku.com/player.php/Type/Folder/Fid/23545867/Ob/1/sid/XOTA5NDA4NTMy/v.swf', '1', '1426137724', '1', '');

-- ----------------------------
-- Table structure for video_recorder
-- ----------------------------
DROP TABLE IF EXISTS `video_recorder`;
CREATE TABLE `video_recorder` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(15) DEFAULT NULL,
  `vid` int(5) DEFAULT NULL,
  `day` date DEFAULT NULL,
  `duration` int(5) DEFAULT NULL COMMENT '时长，单位分钟',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `vid` (`vid`),
  CONSTRAINT `fk_vr_user_uid` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_vr_v_vid` FOREIGN KEY (`vid`) REFERENCES `video` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of video_recorder
-- ----------------------------
INSERT INTO `video_recorder` VALUES ('1', '106', '3', '2015-06-21', '2');

-- ----------------------------
-- Procedure structure for fk_v_vr
-- ----------------------------
DROP PROCEDURE IF EXISTS `fk_v_vr`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `fk_v_vr`()
ALTER TABLE `pmd`.`video_recorder` ADD CONSTRAINT `fk_v_vr` FOREIGN KEY (`vid`) REFERENCES `pmd`.`video` (`id`)   ON UPDATE CASCADE ON DELETE CASCADE
;;
DELIMITER ;
