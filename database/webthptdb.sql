/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : webthptdb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-11-03 15:01:19
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `actived` tinyint(1) NOT NULL DEFAULT '1',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for `login_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `login_tokens`;
CREATE TABLE `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `actived` int(1) NOT NULL DEFAULT '1',
  `published` int(1) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image_thumb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `intro_text` text CHARACTER SET utf8 NOT NULL,
  `full_text` text CHARACTER SET utf8 NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `language` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO users VALUES ('1', '1', 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', 'Admin', '', '1', '1', '', '2013-11-03 15:00:36', '2013-11-03 15:00:36');

-- ----------------------------
-- Table structure for `user_groups`
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO user_groups VALUES ('1', 'Admin', 'Admin', '0', '2013-11-03 15:00:36', '2013-11-03 15:00:36');
INSERT INTO user_groups VALUES ('2', 'User', 'User', '1', '2013-11-03 15:00:36', '2013-11-03 15:00:36');
INSERT INTO user_groups VALUES ('3', 'Guest', 'Guest', '0', '2013-11-03 15:00:36', '2013-11-03 15:00:36');

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
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

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
