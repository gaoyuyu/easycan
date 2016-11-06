/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : easycan

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-11-06 23:39:14
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
  `status` int(11) DEFAULT '0' COMMENT '订单状态，0-等待，1-接受，2-派送中，3-完成',
  `create_time` varchar(255) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of can_order
-- ----------------------------
INSERT INTO `can_order` VALUES ('1', '10', '11', '13802724236', '5902 Rue Hamilton, MONTREAL, QC, Canada', '66', 'order1', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('2', '10', null, '13802724236', '1600 Amphitheatre Parkway, Mountain View, CA 94043, USA', '77', 'order2', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('3', '10', null, '18822664456', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('4', '10', null, '18822664457', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('5', '10', null, '18822664458', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('6', '10', null, '18822664459', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('7', '10', null, '18822664460', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('8', '10', null, '18822664461', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('9', '10', null, '18822664462', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('10', '10', null, '18822664463', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('11', '10', null, '18822664464', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('12', '10', null, '18822664465', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('13', '10', null, '18822664466', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('14', '10', null, '18822664467', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('15', '10', null, '18822664468', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('16', '10', null, '18822664469', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('17', '10', null, '18822664470', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('18', '10', null, '18822664471', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('19', '10', null, '18822664472', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('20', '10', null, '18822664473', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('21', '10', null, '18822664474', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('22', '10', null, '18822664475', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('23', '10', null, '18822664476', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('24', '10', null, '18822664477', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('25', '10', null, '18822664478', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('26', '10', null, '18822664479', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('27', '10', null, '18822664480', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('28', '10', null, '18822664481', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('29', '10', null, '18822664482', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('30', '10', null, '18822664483', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('31', '10', null, '18822664484', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('32', '10', null, '18822664485', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('33', '10', null, '18822664486', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('34', '10', null, '18822664487', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('35', '10', null, '18822664488', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('36', '10', null, '18822664489', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('37', '10', null, '18822664490', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('38', '10', null, '18822664491', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('39', '10', null, '18822664492', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('40', '10', null, '18822664493', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('41', '10', null, '18822664494', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('42', '10', null, '18822664495', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('43', '10', null, '18822664496', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('44', '10', null, '18822664497', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('45', '10', null, '18822664498', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('46', '10', null, '18822664499', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('47', '10', null, '18822664500', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('48', '10', null, '18822664501', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('49', '10', null, '18822664502', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('50', '10', null, '18822664503', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('51', '10', null, '18822664504', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('52', '10', null, '18822664505', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('53', '10', null, '18822664505', '5902 Rue Hamilton, MONTREAL, QC, Canada', '45', 'page', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('54', '10', null, '123', 'USA', '12', 'oppo', '0', '2016-11-06 11:57:32');
INSERT INTO `can_order` VALUES ('55', '0', null, '', '', '', '', '0', '2016-11-06 12:53:37');
INSERT INTO `can_order` VALUES ('56', '0', null, '', '', '', '', '0', '2016-11-06 12:53:51');
INSERT INTO `can_order` VALUES ('57', '10', null, '13802724236', 'US', '45', 'Fast', '0', '2016-11-06 12:55:07');

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
