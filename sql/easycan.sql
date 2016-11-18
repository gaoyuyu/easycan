/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : easycan

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-11-18 17:07:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `can_access`
-- ----------------------------
DROP TABLE IF EXISTS `can_access`;
CREATE TABLE `can_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of can_access
-- ----------------------------
INSERT INTO `can_access` VALUES ('12', '39', '3', null);
INSERT INTO `can_access` VALUES ('12', '38', '3', null);
INSERT INTO `can_access` VALUES ('12', '37', '3', null);
INSERT INTO `can_access` VALUES ('12', '36', '3', null);
INSERT INTO `can_access` VALUES ('12', '35', '3', null);
INSERT INTO `can_access` VALUES ('12', '34', '3', null);
INSERT INTO `can_access` VALUES ('12', '33', '3', null);
INSERT INTO `can_access` VALUES ('12', '32', '3', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '38', '3', null);
INSERT INTO `can_access` VALUES ('12', '37', '3', null);
INSERT INTO `can_access` VALUES ('12', '36', '3', null);
INSERT INTO `can_access` VALUES ('12', '35', '3', null);
INSERT INTO `can_access` VALUES ('12', '34', '3', null);
INSERT INTO `can_access` VALUES ('12', '33', '3', null);
INSERT INTO `can_access` VALUES ('12', '32', '3', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '37', '3', null);
INSERT INTO `can_access` VALUES ('12', '36', '3', null);
INSERT INTO `can_access` VALUES ('12', '35', '3', null);
INSERT INTO `can_access` VALUES ('12', '34', '3', null);
INSERT INTO `can_access` VALUES ('12', '33', '3', null);
INSERT INTO `can_access` VALUES ('12', '32', '3', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '36', '3', null);
INSERT INTO `can_access` VALUES ('12', '35', '3', null);
INSERT INTO `can_access` VALUES ('12', '34', '3', null);
INSERT INTO `can_access` VALUES ('12', '33', '3', null);
INSERT INTO `can_access` VALUES ('12', '32', '3', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '35', '3', null);
INSERT INTO `can_access` VALUES ('12', '34', '3', null);
INSERT INTO `can_access` VALUES ('12', '33', '3', null);
INSERT INTO `can_access` VALUES ('12', '32', '3', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '34', '3', null);
INSERT INTO `can_access` VALUES ('12', '33', '3', null);
INSERT INTO `can_access` VALUES ('12', '32', '3', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '33', '3', null);
INSERT INTO `can_access` VALUES ('12', '32', '3', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '32', '3', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '17', '1', null);
INSERT INTO `can_access` VALUES ('12', '18', '2', null);
INSERT INTO `can_access` VALUES ('12', '19', '3', null);
INSERT INTO `can_access` VALUES ('12', '20', '3', null);
INSERT INTO `can_access` VALUES ('12', '21', '3', null);
INSERT INTO `can_access` VALUES ('12', '22', '3', null);
INSERT INTO `can_access` VALUES ('12', '23', '3', null);
INSERT INTO `can_access` VALUES ('12', '24', '3', null);
INSERT INTO `can_access` VALUES ('12', '31', '3', null);
INSERT INTO `can_access` VALUES ('12', '32', '3', null);
INSERT INTO `can_access` VALUES ('12', '33', '3', null);
INSERT INTO `can_access` VALUES ('12', '34', '3', null);
INSERT INTO `can_access` VALUES ('12', '35', '3', null);
INSERT INTO `can_access` VALUES ('12', '36', '3', null);
INSERT INTO `can_access` VALUES ('12', '37', '3', null);
INSERT INTO `can_access` VALUES ('12', '38', '3', null);
INSERT INTO `can_access` VALUES ('12', '39', '3', null);
INSERT INTO `can_access` VALUES ('12', '45', '3', null);

-- ----------------------------
-- Table structure for `can_node`
-- ----------------------------
DROP TABLE IF EXISTS `can_node`;
CREATE TABLE `can_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `hidden` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否在左侧隐藏，0-隐藏，1-不隐藏',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of can_node
-- ----------------------------
INSERT INTO `can_node` VALUES ('17', 'Home', '后台管理', '1', null, '0', '0', '1', '1');
INSERT INTO `can_node` VALUES ('18', 'Rbac', '权限管理', '1', null, '1', '17', '2', '1');
INSERT INTO `can_node` VALUES ('19', 'addRole', '添加角色', '1', null, '1', '18', '3', '1');
INSERT INTO `can_node` VALUES ('20', 'roleList', '角色管理', '1', null, '2', '18', '3', '1');
INSERT INTO `can_node` VALUES ('21', 'addNode', '添加权限', '1', null, '3', '18', '3', '1');
INSERT INTO `can_node` VALUES ('22', 'nodeList', '权限管理', '1', null, '4', '18', '3', '1');
INSERT INTO `can_node` VALUES ('23', 'addUser', '添加用户', '1', null, '5', '18', '3', '1');
INSERT INTO `can_node` VALUES ('24', 'userList', '用户管理', '1', null, '6', '18', '3', '1');
INSERT INTO `can_node` VALUES ('45', 'deleteNode', '删除权限', '1', null, '16', '18', '3', '0');
INSERT INTO `can_node` VALUES ('46', 'Order', '订单管理', '1', null, '2', '17', '2', '1');
INSERT INTO `can_node` VALUES ('47', 'addOrder', '添加订单', '1', null, '1', '46', '3', '1');
INSERT INTO `can_node` VALUES ('48', 'orderList', '订单管理', '1', null, '2', '46', '3', '1');
INSERT INTO `can_node` VALUES ('31', 'addRoleHandle', '提交添加角色', '1', null, '7', '18', '3', '0');
INSERT INTO `can_node` VALUES ('32', 'updateRole', '修改角色信息', '1', null, '8', '18', '3', '0');
INSERT INTO `can_node` VALUES ('33', 'deleteRole', '删除角色', '1', null, '9', '18', '3', '0');
INSERT INTO `can_node` VALUES ('34', 'addNodeHandle', '提交添加权限', '1', null, '10', '18', '3', '0');
INSERT INTO `can_node` VALUES ('35', 'addUserHandle', '提交添加用户', '1', null, '11', '18', '3', '0');
INSERT INTO `can_node` VALUES ('36', 'updateUser', '修改用户信息', '1', null, '12', '18', '3', '0');
INSERT INTO `can_node` VALUES ('37', 'getRoleList', '获取角色列表', '1', null, '13', '18', '3', '0');
INSERT INTO `can_node` VALUES ('38', 'access', '配置权限', '1', null, '14', '18', '3', '0');
INSERT INTO `can_node` VALUES ('39', 'setAccess', '为角色设置权限', '1', null, '15', '18', '3', '0');

-- ----------------------------
-- Table structure for `can_order`
-- ----------------------------
DROP TABLE IF EXISTS `can_order`;
CREATE TABLE `can_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dispatcher` int(11) DEFAULT NULL COMMENT '分配员（饭店老板）',
  `receiver` int(11) DEFAULT NULL COMMENT '接受员（司机）',
  `customer_phone` varchar(255) DEFAULT NULL COMMENT '客户电话',
  `customer_address` varchar(255) DEFAULT NULL COMMENT '客户地址',
  `price` varchar(255) DEFAULT NULL COMMENT '订单价格',
  `remark` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '订单状态，0-等待，1-派送中，2-完成',
  `create_time` varchar(255) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of can_order
-- ----------------------------
INSERT INTO `can_order` VALUES ('66', '10', null, '13802724236', 'USA', '22', 'none', '0', '2016-11-09 17:42:02');
INSERT INTO `can_order` VALUES ('67', '10', null, '15662354236', 'French', '123', 'none', '0', '2016-11-09 17:42:20');
INSERT INTO `can_order` VALUES ('68', '10', null, '17866669898', 'Korea', '75', 'none', '0', '2016-11-09 17:42:42');
INSERT INTO `can_order` VALUES ('69', '10', null, '15662224236', 'HSA', '78', 'none', '0', '2016-11-09 18:47:43');
INSERT INTO `can_order` VALUES ('70', '10', null, '13802724236', 'Oct', '55', 'none', '0', '2016-11-09 18:47:58');
INSERT INTO `can_order` VALUES ('71', '10', null, '14233335656', 'French', '45', 'none', '0', '2016-11-09 18:52:36');
INSERT INTO `can_order` VALUES ('72', '10', '11', '12344446666', 'Ivy', '45', 'none', '1', '2016-11-09 18:52:54');

-- ----------------------------
-- Table structure for `can_order_location`
-- ----------------------------
DROP TABLE IF EXISTS `can_order_location`;
CREATE TABLE `can_order_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL COMMENT '订单ID',
  `longitude` double DEFAULT NULL COMMENT '经度',
  `latitude` double DEFAULT NULL COMMENT '维度',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of can_order_location
-- ----------------------------

-- ----------------------------
-- Table structure for `can_role`
-- ----------------------------
DROP TABLE IF EXISTS `can_role`;
CREATE TABLE `can_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of can_role
-- ----------------------------
INSERT INTO `can_role` VALUES ('11', '超级管理员', '0', '1', '超级管理员');
INSERT INTO `can_role` VALUES ('12', '司机', '0', '1', '司机端');
INSERT INTO `can_role` VALUES ('16', '饭店', '0', '1', '饭店端');

-- ----------------------------
-- Table structure for `can_role_user`
-- ----------------------------
DROP TABLE IF EXISTS `can_role_user`;
CREATE TABLE `can_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of can_role_user
-- ----------------------------
INSERT INTO `can_role_user` VALUES ('11', '10');
INSERT INTO `can_role_user` VALUES ('12', '11');
INSERT INTO `can_role_user` VALUES ('16', '12');

-- ----------------------------
-- Table structure for `can_user`
-- ----------------------------
DROP TABLE IF EXISTS `can_user`;
CREATE TABLE `can_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `logintime` int(11) DEFAULT NULL,
  `loginip` varchar(30) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of can_user
-- ----------------------------
INSERT INTO `can_user` VALUES ('10', 'admin', 'dbc50ecb629ac64cc2fdad7bede9daf2', '1478400438', '0.0.0.0', '1');
INSERT INTO `can_user` VALUES ('11', 'driver', 'dbc50ecb629ac64cc2fdad7bede9daf2', '1477548439', '0.0.0.0', '1');
INSERT INTO `can_user` VALUES ('12', 'rest', 'dbc50ecb629ac64cc2fdad7bede9daf2', '1477546171', '127.0.0.1', '1');
