/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : webthptdb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-11-08 23:27:05
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `resources`
-- ----------------------------
DROP TABLE IF EXISTS `resources`;
CREATE TABLE `resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `view_link` varchar(300) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_create` varchar(100) DEFAULT NULL,
  `resource_type` int(11) DEFAULT NULL,
  `description` tinytext,
  `ext` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of resources
-- ----------------------------
INSERT INTO resources VALUES ('1', 'NH Pronunciation Elementary', 'nh-pronunciation-elementary', 'https://www.dropbox.com/s/xd54xuohvf7ow8d/NH%20Pronunciation%20Elementary.pdf', 'https://dl.dropbox.com/s/xd54xuohvf7ow8d/NH%20Pronunciation%20Elementary.pdf', '2013-11-08 10:15:16', '2013-11-08 11:18:22', 'Admin', '3', 'NH Pronunciation Elementary', 'pdf');
INSERT INTO resources VALUES ('2', 'Test doc file', 'test-doc-file', 'https://www.dropbox.com/s/f1as6tcvpd1smcn/VIETTELSTUDY.doc', 'https://dl.dropbox.com/s/f1as6tcvpd1smcn/VIETTELSTUDY.doc?convert_doc_to_pdf=1', '2013-11-08 10:18:41', '2013-11-08 11:18:27', 'Admin', '1', 'Test doc file', 'doc');
INSERT INTO resources VALUES ('3', 'Test doc file 2', 'test-doc-file-2', 'https://www.dropbox.com/s/f1as6tcvpd1smcn/VIETTELSTUDY.doc', 'https://dl.dropbox.com/s/f1as6tcvpd1smcn/VIETTELSTUDY.doc?convert_doc_to_pdf=1', '2013-11-08 10:19:40', '2013-11-08 11:18:31', 'Admin', '1', 'Test doc file 2', 'doc');
