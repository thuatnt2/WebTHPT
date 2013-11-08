/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : webthptdb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-11-09 01:00:58
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `user_group_permissions`
-- ----------------------------
DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=232 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_group_permissions
-- ----------------------------
INSERT INTO user_group_permissions VALUES ('1', '1', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('2', '2', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('3', '3', 'Pages', 'display', '1');
INSERT INTO user_group_permissions VALUES ('4', '1', 'UserGroupPermissions', 'index', '1');
INSERT INTO user_group_permissions VALUES ('5', '2', 'UserGroupPermissions', 'index', '0');
INSERT INTO user_group_permissions VALUES ('6', '3', 'UserGroupPermissions', 'index', '0');
INSERT INTO user_group_permissions VALUES ('7', '1', 'UserGroupPermissions', 'update', '1');
INSERT INTO user_group_permissions VALUES ('8', '2', 'UserGroupPermissions', 'update', '0');
INSERT INTO user_group_permissions VALUES ('9', '3', 'UserGroupPermissions', 'update', '0');
INSERT INTO user_group_permissions VALUES ('10', '1', 'UserGroups', 'index', '1');
INSERT INTO user_group_permissions VALUES ('11', '2', 'UserGroups', 'index', '0');
INSERT INTO user_group_permissions VALUES ('12', '3', 'UserGroups', 'index', '0');
INSERT INTO user_group_permissions VALUES ('13', '1', 'UserGroups', 'addGroup', '1');
INSERT INTO user_group_permissions VALUES ('14', '2', 'UserGroups', 'addGroup', '0');
INSERT INTO user_group_permissions VALUES ('15', '3', 'UserGroups', 'addGroup', '0');
INSERT INTO user_group_permissions VALUES ('16', '1', 'UserGroups', 'editGroup', '1');
INSERT INTO user_group_permissions VALUES ('17', '2', 'UserGroups', 'editGroup', '0');
INSERT INTO user_group_permissions VALUES ('18', '3', 'UserGroups', 'editGroup', '0');
INSERT INTO user_group_permissions VALUES ('19', '1', 'UserGroups', 'deleteGroup', '1');
INSERT INTO user_group_permissions VALUES ('20', '2', 'UserGroups', 'deleteGroup', '0');
INSERT INTO user_group_permissions VALUES ('21', '3', 'UserGroups', 'deleteGroup', '0');
INSERT INTO user_group_permissions VALUES ('22', '1', 'Users', 'index', '1');
INSERT INTO user_group_permissions VALUES ('23', '2', 'Users', 'index', '0');
INSERT INTO user_group_permissions VALUES ('24', '3', 'Users', 'index', '0');
INSERT INTO user_group_permissions VALUES ('25', '1', 'Users', 'viewUser', '1');
INSERT INTO user_group_permissions VALUES ('26', '2', 'Users', 'viewUser', '0');
INSERT INTO user_group_permissions VALUES ('27', '3', 'Users', 'viewUser', '0');
INSERT INTO user_group_permissions VALUES ('28', '1', 'Users', 'myprofile', '1');
INSERT INTO user_group_permissions VALUES ('29', '2', 'Users', 'myprofile', '1');
INSERT INTO user_group_permissions VALUES ('30', '3', 'Users', 'myprofile', '0');
INSERT INTO user_group_permissions VALUES ('31', '1', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('32', '2', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('33', '3', 'Users', 'login', '1');
INSERT INTO user_group_permissions VALUES ('34', '1', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('35', '2', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('36', '3', 'Users', 'logout', '1');
INSERT INTO user_group_permissions VALUES ('37', '1', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('38', '2', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('39', '3', 'Users', 'register', '1');
INSERT INTO user_group_permissions VALUES ('40', '1', 'Users', 'changePassword', '1');
INSERT INTO user_group_permissions VALUES ('41', '2', 'Users', 'changePassword', '1');
INSERT INTO user_group_permissions VALUES ('42', '3', 'Users', 'changePassword', '0');
INSERT INTO user_group_permissions VALUES ('43', '1', 'Users', 'changeUserPassword', '1');
INSERT INTO user_group_permissions VALUES ('44', '2', 'Users', 'changeUserPassword', '0');
INSERT INTO user_group_permissions VALUES ('45', '3', 'Users', 'changeUserPassword', '0');
INSERT INTO user_group_permissions VALUES ('46', '1', 'Users', 'addUser', '1');
INSERT INTO user_group_permissions VALUES ('47', '2', 'Users', 'addUser', '0');
INSERT INTO user_group_permissions VALUES ('48', '3', 'Users', 'addUser', '0');
INSERT INTO user_group_permissions VALUES ('49', '1', 'Users', 'editUser', '1');
INSERT INTO user_group_permissions VALUES ('50', '2', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('51', '3', 'Users', 'editUser', '0');
INSERT INTO user_group_permissions VALUES ('52', '1', 'Users', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('53', '2', 'Users', 'dashboard', '1');
INSERT INTO user_group_permissions VALUES ('54', '3', 'Users', 'dashboard', '0');
INSERT INTO user_group_permissions VALUES ('55', '1', 'Users', 'deleteUser', '1');
INSERT INTO user_group_permissions VALUES ('56', '2', 'Users', 'deleteUser', '0');
INSERT INTO user_group_permissions VALUES ('57', '3', 'Users', 'deleteUser', '0');
INSERT INTO user_group_permissions VALUES ('58', '1', 'Users', 'makeActive', '1');
INSERT INTO user_group_permissions VALUES ('59', '2', 'Users', 'makeActive', '0');
INSERT INTO user_group_permissions VALUES ('60', '3', 'Users', 'makeActive', '0');
INSERT INTO user_group_permissions VALUES ('61', '1', 'Users', 'accessDenied', '1');
INSERT INTO user_group_permissions VALUES ('62', '2', 'Users', 'accessDenied', '1');
INSERT INTO user_group_permissions VALUES ('63', '3', 'Users', 'accessDenied', '1');
INSERT INTO user_group_permissions VALUES ('64', '1', 'Users', 'userVerification', '1');
INSERT INTO user_group_permissions VALUES ('65', '2', 'Users', 'userVerification', '1');
INSERT INTO user_group_permissions VALUES ('66', '3', 'Users', 'userVerification', '1');
INSERT INTO user_group_permissions VALUES ('67', '1', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('68', '2', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('69', '3', 'Users', 'forgotPassword', '1');
INSERT INTO user_group_permissions VALUES ('70', '1', 'Users', 'makeActiveInactive', '1');
INSERT INTO user_group_permissions VALUES ('71', '2', 'Users', 'makeActiveInactive', '0');
INSERT INTO user_group_permissions VALUES ('72', '3', 'Users', 'makeActiveInactive', '0');
INSERT INTO user_group_permissions VALUES ('73', '1', 'Users', 'verifyEmail', '1');
INSERT INTO user_group_permissions VALUES ('74', '2', 'Users', 'verifyEmail', '0');
INSERT INTO user_group_permissions VALUES ('75', '3', 'Users', 'verifyEmail', '0');
INSERT INTO user_group_permissions VALUES ('76', '1', 'Users', 'activatePassword', '1');
INSERT INTO user_group_permissions VALUES ('77', '2', 'Users', 'activatePassword', '1');
INSERT INTO user_group_permissions VALUES ('78', '3', 'Users', 'activatePassword', '1');
INSERT INTO user_group_permissions VALUES ('79', '1', 'Admin', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('80', '2', 'Admin', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('81', '3', 'Admin', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('82', '1', 'Albums', 'index', '1');
INSERT INTO user_group_permissions VALUES ('83', '2', 'Albums', 'index', '1');
INSERT INTO user_group_permissions VALUES ('84', '3', 'Albums', 'index', '1');
INSERT INTO user_group_permissions VALUES ('85', '1', 'Albums', 'view', '1');
INSERT INTO user_group_permissions VALUES ('86', '2', 'Albums', 'view', '1');
INSERT INTO user_group_permissions VALUES ('87', '3', 'Albums', 'view', '1');
INSERT INTO user_group_permissions VALUES ('88', '1', 'Albums', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('89', '2', 'Albums', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('90', '3', 'Albums', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('91', '1', 'Albums', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('92', '2', 'Albums', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('93', '3', 'Albums', 'admin_view', '0');
INSERT INTO user_group_permissions VALUES ('94', '1', 'Albums', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('95', '2', 'Albums', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('96', '3', 'Albums', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('97', '1', 'Albums', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('98', '2', 'Albums', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('99', '3', 'Albums', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('100', '1', 'Albums', 'admin_upload', '1');
INSERT INTO user_group_permissions VALUES ('101', '2', 'Albums', 'admin_upload', '1');
INSERT INTO user_group_permissions VALUES ('102', '3', 'Albums', 'admin_upload', '0');
INSERT INTO user_group_permissions VALUES ('103', '1', 'Albums', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('104', '2', 'Albums', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('105', '3', 'Albums', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('106', '1', 'Albums', 'admin_deletePhoto', '1');
INSERT INTO user_group_permissions VALUES ('107', '2', 'Albums', 'admin_deletePhoto', '1');
INSERT INTO user_group_permissions VALUES ('108', '3', 'Albums', 'admin_deletePhoto', '0');
INSERT INTO user_group_permissions VALUES ('109', '1', 'App', 'admin_active', '1');
INSERT INTO user_group_permissions VALUES ('110', '2', 'App', 'admin_active', '1');
INSERT INTO user_group_permissions VALUES ('111', '3', 'App', 'admin_active', '0');
INSERT INTO user_group_permissions VALUES ('112', '1', 'Articles', 'index', '1');
INSERT INTO user_group_permissions VALUES ('113', '2', 'Articles', 'index', '1');
INSERT INTO user_group_permissions VALUES ('114', '3', 'Articles', 'index', '1');
INSERT INTO user_group_permissions VALUES ('115', '1', 'Articles', 'view', '1');
INSERT INTO user_group_permissions VALUES ('116', '2', 'Articles', 'view', '1');
INSERT INTO user_group_permissions VALUES ('117', '3', 'Articles', 'view', '1');
INSERT INTO user_group_permissions VALUES ('118', '1', 'Articles', 'add', '1');
INSERT INTO user_group_permissions VALUES ('119', '2', 'Articles', 'add', '1');
INSERT INTO user_group_permissions VALUES ('120', '3', 'Articles', 'add', '0');
INSERT INTO user_group_permissions VALUES ('121', '1', 'Articles', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('122', '2', 'Articles', 'edit', '1');
INSERT INTO user_group_permissions VALUES ('123', '3', 'Articles', 'edit', '0');
INSERT INTO user_group_permissions VALUES ('124', '1', 'Articles', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('125', '2', 'Articles', 'delete', '1');
INSERT INTO user_group_permissions VALUES ('126', '3', 'Articles', 'delete', '0');
INSERT INTO user_group_permissions VALUES ('127', '1', 'Blogs', 'index', '1');
INSERT INTO user_group_permissions VALUES ('128', '2', 'Blogs', 'index', '1');
INSERT INTO user_group_permissions VALUES ('129', '3', 'Blogs', 'index', '1');
INSERT INTO user_group_permissions VALUES ('130', '1', 'Blogs', 'viewArticle', '0');
INSERT INTO user_group_permissions VALUES ('131', '2', 'Blogs', 'viewArticle', '1');
INSERT INTO user_group_permissions VALUES ('132', '3', 'Blogs', 'viewArticle', '1');
INSERT INTO user_group_permissions VALUES ('133', '1', 'Blogs', 'add', '1');
INSERT INTO user_group_permissions VALUES ('134', '2', 'Blogs', 'add', '1');
INSERT INTO user_group_permissions VALUES ('135', '3', 'Blogs', 'add', '0');
INSERT INTO user_group_permissions VALUES ('136', '1', 'Blogs', 'view', '1');
INSERT INTO user_group_permissions VALUES ('137', '2', 'Blogs', 'view', '1');
INSERT INTO user_group_permissions VALUES ('138', '3', 'Blogs', 'view', '0');
INSERT INTO user_group_permissions VALUES ('139', '1', 'Categories', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('140', '2', 'Categories', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('141', '3', 'Categories', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('142', '1', 'Categories', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('143', '2', 'Categories', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('144', '3', 'Categories', 'admin_view', '0');
INSERT INTO user_group_permissions VALUES ('145', '1', 'Categories', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('146', '2', 'Categories', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('147', '3', 'Categories', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('148', '1', 'Categories', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('149', '2', 'Categories', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('150', '3', 'Categories', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('151', '1', 'Categories', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('152', '2', 'Categories', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('153', '3', 'Categories', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('154', '1', 'Categories', 'makeActive', '1');
INSERT INTO user_group_permissions VALUES ('155', '2', 'Categories', 'makeActive', '1');
INSERT INTO user_group_permissions VALUES ('156', '3', 'Categories', 'makeActive', '0');
INSERT INTO user_group_permissions VALUES ('157', '1', 'Categories', 'getMainMenu', '1');
INSERT INTO user_group_permissions VALUES ('158', '2', 'Categories', 'getMainMenu', '1');
INSERT INTO user_group_permissions VALUES ('159', '3', 'Categories', 'getMainMenu', '1');
INSERT INTO user_group_permissions VALUES ('160', '1', 'Categories', 'firstMenuItem', '1');
INSERT INTO user_group_permissions VALUES ('161', '2', 'Categories', 'firstMenuItem', '1');
INSERT INTO user_group_permissions VALUES ('162', '3', 'Categories', 'firstMenuItem', '1');
INSERT INTO user_group_permissions VALUES ('163', '1', 'Posts', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('164', '2', 'Posts', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('165', '3', 'Posts', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('166', '1', 'Posts', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('167', '2', 'Posts', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('168', '3', 'Posts', 'admin_view', '0');
INSERT INTO user_group_permissions VALUES ('169', '1', 'Posts', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('170', '2', 'Posts', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('171', '3', 'Posts', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('172', '1', 'Posts', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('173', '2', 'Posts', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('174', '3', 'Posts', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('175', '1', 'Posts', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('176', '2', 'Posts', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('177', '3', 'Posts', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('178', '1', 'Posts', 'posts', '1');
INSERT INTO user_group_permissions VALUES ('179', '2', 'Posts', 'posts', '1');
INSERT INTO user_group_permissions VALUES ('180', '3', 'Posts', 'posts', '1');
INSERT INTO user_group_permissions VALUES ('181', '1', 'Posts', 'recent', '1');
INSERT INTO user_group_permissions VALUES ('182', '2', 'Posts', 'recent', '1');
INSERT INTO user_group_permissions VALUES ('183', '3', 'Posts', 'recent', '1');
INSERT INTO user_group_permissions VALUES ('184', '1', 'Resources', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('185', '2', 'Resources', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('186', '3', 'Resources', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('187', '1', 'Resources', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('188', '2', 'Resources', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('189', '3', 'Resources', 'admin_view', '0');
INSERT INTO user_group_permissions VALUES ('190', '1', 'Resources', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('191', '2', 'Resources', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('192', '3', 'Resources', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('193', '1', 'Resources', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('194', '2', 'Resources', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('195', '3', 'Resources', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('196', '1', 'Resources', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('197', '2', 'Resources', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('198', '3', 'Resources', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('199', '1', 'Resources', 'getResourceType', '1');
INSERT INTO user_group_permissions VALUES ('200', '2', 'Resources', 'getResourceType', '1');
INSERT INTO user_group_permissions VALUES ('201', '3', 'Resources', 'getResourceType', '1');
INSERT INTO user_group_permissions VALUES ('202', '1', 'Resources', 'listResources', '0');
INSERT INTO user_group_permissions VALUES ('203', '2', 'Resources', 'listResources', '1');
INSERT INTO user_group_permissions VALUES ('204', '3', 'Resources', 'listResources', '1');
INSERT INTO user_group_permissions VALUES ('205', '1', 'Resources', 'view', '1');
INSERT INTO user_group_permissions VALUES ('206', '2', 'Resources', 'view', '1');
INSERT INTO user_group_permissions VALUES ('207', '3', 'Resources', 'view', '1');
INSERT INTO user_group_permissions VALUES ('208', '1', 'Videos', 'index', '1');
INSERT INTO user_group_permissions VALUES ('209', '2', 'Videos', 'index', '1');
INSERT INTO user_group_permissions VALUES ('210', '3', 'Videos', 'index', '1');
INSERT INTO user_group_permissions VALUES ('211', '1', 'Videos', 'view', '1');
INSERT INTO user_group_permissions VALUES ('212', '2', 'Videos', 'view', '1');
INSERT INTO user_group_permissions VALUES ('213', '3', 'Videos', 'view', '1');
INSERT INTO user_group_permissions VALUES ('214', '1', 'Videos', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('215', '2', 'Videos', 'admin_index', '1');
INSERT INTO user_group_permissions VALUES ('216', '3', 'Videos', 'admin_index', '0');
INSERT INTO user_group_permissions VALUES ('217', '1', 'Videos', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('218', '2', 'Videos', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('219', '3', 'Videos', 'admin_view', '1');
INSERT INTO user_group_permissions VALUES ('220', '1', 'Videos', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('221', '2', 'Videos', 'admin_add', '1');
INSERT INTO user_group_permissions VALUES ('222', '3', 'Videos', 'admin_add', '0');
INSERT INTO user_group_permissions VALUES ('223', '1', 'Videos', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('224', '2', 'Videos', 'admin_edit', '1');
INSERT INTO user_group_permissions VALUES ('225', '3', 'Videos', 'admin_edit', '0');
INSERT INTO user_group_permissions VALUES ('226', '1', 'Videos', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('227', '2', 'Videos', 'admin_delete', '1');
INSERT INTO user_group_permissions VALUES ('228', '3', 'Videos', 'admin_delete', '0');
INSERT INTO user_group_permissions VALUES ('229', '1', 'Videos', 'admin_videoActive', '1');
INSERT INTO user_group_permissions VALUES ('230', '2', 'Videos', 'admin_videoActive', '1');
INSERT INTO user_group_permissions VALUES ('231', '3', 'Videos', 'admin_videoActive', '0');
