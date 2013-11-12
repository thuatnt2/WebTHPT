/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : webthptdb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-11-12 23:18:53
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `videos`
-- ----------------------------
DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `youtube_id` varchar(50) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of videos
-- ----------------------------
INSERT INTO videos VALUES ('1', 'somebody that i used to know', 'somebody-that-i-used-to-know', 'http://www.youtube.com/watch?v=8UVNT4wvIGY', '8UVNT4wvIGY', '0', 'somebody that i used to know', '2013-11-06 01:01:48', '2013-11-12 10:46:26', '0');
INSERT INTO videos VALUES ('2', 'canon in d', 'canon-in-d', 'http://www.youtube.com/watch?v=jXC9tuumjiA', 'jXC9tuumjiA', '0', 'canon in d', '2013-11-06 01:06:37', '2013-11-12 11:07:18', '1');
INSERT INTO videos VALUES ('3', 'what makes you beautiful', 'what-makes-you-beautiful', 'http://www.youtube.com/watch?v=QJO3ROT-A4E', 'QJO3ROT-A4E', '0', 'what makes you beautiful', '2013-11-06 12:20:01', '2013-11-12 11:07:18', '0');
INSERT INTO videos VALUES ('4', 'canon in d', 'canon-in-d', 'http://www.youtube.com/watch?v=jXC9tuumjiA', 'jXC9tuumjiA', null, 'canon in d', '2013-11-12 10:32:26', '2013-11-12 10:44:21', '0');
