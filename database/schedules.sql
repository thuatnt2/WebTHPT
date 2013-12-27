/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : webthptdb

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-12-27 22:54:39
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `schedules`
-- ----------------------------
DROP TABLE IF EXISTS `schedules`;
CREATE TABLE `schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `description` text,
  `ext` varchar(5) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `file_absolute_path` varchar(255) DEFAULT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of schedules
-- ----------------------------
INSERT INTO schedules VALUES ('1', 'Thời khóa biểu tuần 1', 'http://dev.thpt.com/schedules/1387770215_0205000943.pdf', '1387770215_0205000943.pdf', null, 'pdf', '0.447882 MB', 'D:\\web\\htdocs\\WebTHPT\\app\\webroot\\schedules\\1387770215_0205000943.pdf', 'Admin', '2013-12-22 22:43:38', '2013-12-22 22:43:38', '1');
INSERT INTO schedules VALUES ('2', 'Thời khóa biểu tuần 2', 'http://dev.thpt.com/schedules/1387770243_cotuongkhaicuoccamnang-100527022422-phpapp01.pdf', '1387770243_cotuongkhaicuoccamnang-100527022422-phpapp01.pdf', null, 'pdf', '6.194732 MB', 'D:\\web\\htdocs\\WebTHPT\\app\\webroot\\schedules\\1387770243_cotuongkhaicuoccamnang-100527022422-phpapp01.pdf', 'Admin', '2013-12-22 22:44:04', '2013-12-22 22:44:04', '2');
