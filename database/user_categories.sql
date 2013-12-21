/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : webthptdb

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-12-21 14:27:00
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `user_categories`
-- ----------------------------
DROP TABLE IF EXISTS `user_categories`;
CREATE TABLE `user_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_categories
-- ----------------------------
INSERT INTO user_categories VALUES ('1', '8', '8');
INSERT INTO user_categories VALUES ('2', '8', '9');
INSERT INTO user_categories VALUES ('3', '8', '10');
INSERT INTO user_categories VALUES ('4', '8', '11');
INSERT INTO user_categories VALUES ('5', '8', '12');
INSERT INTO user_categories VALUES ('6', '8', '13');
INSERT INTO user_categories VALUES ('7', '8', '20');
INSERT INTO user_categories VALUES ('8', '8', '21');
INSERT INTO user_categories VALUES ('9', '8', '22');
INSERT INTO user_categories VALUES ('10', '8', '23');
INSERT INTO user_categories VALUES ('11', '8', '24');
INSERT INTO user_categories VALUES ('12', '8', '25');
INSERT INTO user_categories VALUES ('13', '8', '16');
INSERT INTO user_categories VALUES ('14', '8', '17');
INSERT INTO user_categories VALUES ('15', '8', '18');
INSERT INTO user_categories VALUES ('16', '8', '19');
INSERT INTO user_categories VALUES ('17', '8', '26');
