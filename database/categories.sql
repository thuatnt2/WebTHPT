/*
Navicat MySQL Data Transfer

Source Server         : vienlemai
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : webthptdb

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2013-11-08 21:21:47
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
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `ordering` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_tab` tinyint(4) DEFAULT NULL,
  `is_right` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO categories VALUES ('1', null, 'Giới thiệu', 'gioi-thieu', '1', null, '2013-11-07 10:19:11', '2013-11-07 10:38:32', '0', '0');
INSERT INTO categories VALUES ('2', null, 'Tin tức', 'tin-tuc', '1', null, '2013-11-07 10:19:22', '2013-11-07 10:19:22', '0', '0');
INSERT INTO categories VALUES ('4', null, 'Tuyển sinh', 'tuyen-sinh', '1', null, '2013-11-07 10:19:47', '2013-11-07 10:19:47', '0', '0');
INSERT INTO categories VALUES ('5', null, 'Tổ chức đoàn thể', 'to-chuc-doan-the', '1', null, '2013-11-07 10:20:00', '2013-11-07 10:20:00', '0', '0');
INSERT INTO categories VALUES ('8', '1', 'Lịch sử phát triển', 'lich-su-phat-trien', '1', null, '2013-11-07 10:43:20', '2013-11-07 16:43:40', '0', '0');
INSERT INTO categories VALUES ('9', '1', 'Sứ mệnh tầm nhìn', 'su-menh-tam-nhin', '1', null, '2013-11-07 10:43:59', '2013-11-07 10:43:59', '0', '0');
INSERT INTO categories VALUES ('10', '1', 'Cơ cấu tổ chức', 'co-cau-to-chuc', '1', null, '2013-11-07 10:44:10', '2013-11-07 10:44:10', '0', '0');
INSERT INTO categories VALUES ('11', '1', 'Cơ sở vật chất', 'co-so-vat-chat', '1', null, '2013-11-07 10:44:23', '2013-11-07 10:44:23', '0', '0');
INSERT INTO categories VALUES ('12', '2', 'Bảng tin trường', 'bang-tin-truong', '1', null, '2013-11-07 10:45:00', '2013-11-07 10:45:00', '0', '0');
INSERT INTO categories VALUES ('13', '2', 'Đoàn thanh niên', 'doan-thanh-nien', '1', null, '2013-11-07 10:45:17', '2013-11-07 10:45:17', '0', '0');
INSERT INTO categories VALUES ('16', '4', 'Tuyển sinh khối 10', 'tuyen-sinh-khoi-10', '1', null, '2013-11-07 10:47:32', '2013-11-07 10:47:32', '0', '0');
INSERT INTO categories VALUES ('17', '4', 'Tuyển sinh đại học', 'tuyen-sinh-dai-hoc', '1', null, '2013-11-07 10:47:42', '2013-11-07 10:47:42', '0', '0');
INSERT INTO categories VALUES ('18', '5', 'Hội khuyến học', 'hoi-khuyen-hoc', '1', null, '2013-11-07 10:48:20', '2013-11-07 10:48:20', '0', '0');
INSERT INTO categories VALUES ('19', '5', 'Hội phụ huynh', 'hoi-phu-huynh', '1', null, '2013-11-07 10:49:12', '2013-11-07 10:49:12', '0', '0');
INSERT INTO categories VALUES ('20', '2', 'Bản tin Internet', 'ban-tin-internet', '1', null, '2013-11-07 23:33:09', '2013-11-07 23:33:09', '0', '0');
INSERT INTO categories VALUES ('21', '2', 'Hoạt động - sự kiên', 'hoat-dong-su-kien', '1', null, '2013-11-07 23:33:44', '2013-11-07 23:33:44', '1', '0');
INSERT INTO categories VALUES ('22', '2', 'Tin tức chung', 'tin-tuc-chung', '1', null, '2013-11-07 23:34:05', '2013-11-07 23:34:05', '1', '0');
INSERT INTO categories VALUES ('23', '2', 'Gương mặt tiêu biểu', 'guong-mat-tieu-bieu', '1', null, '2013-11-07 23:34:21', '2013-11-07 23:34:21', '1', '0');
INSERT INTO categories VALUES ('24', '2', 'Tin học sinh', 'tin-hoc-sinh', '1', null, '2013-11-07 23:34:34', '2013-11-07 23:34:34', '0', '1');
INSERT INTO categories VALUES ('25', '2', 'Tin giáo viên', 'tin-giao-vien', '1', null, '2013-11-07 23:34:44', '2013-11-07 23:34:44', '0', '1');
