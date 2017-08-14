/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : tp5-demo

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-02-18 23:47:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '学生姓名',
  `age` int(4) DEFAULT NULL COMMENT '年龄',
  `class` varchar(32) DEFAULT NULL COMMENT '班级',
  `tel` varchar(20) DEFAULT NULL COMMENT '电话',
  `email` varchar(20) DEFAULT NULL COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', '张三', '18', '2班', '18311111111', '12345678@qq.com');
INSERT INTO `student` VALUES ('2', '李四', '20', '2班', '18311111112', '12345678@qq.com');
INSERT INTO `student` VALUES ('3', '王五', '19', '3班', '18311111113', '12345678@qq.com');
INSERT INTO `student` VALUES ('4', '张三', '18', '2班', '18311111114', '12345678@qq.com');
INSERT INTO `student` VALUES ('5', '李四', '20', '2班', '18311111115', '12345678@qq.com');
INSERT INTO `student` VALUES ('6', '王五', '19', '3班', '18311111116', '12345678@qq.com');
INSERT INTO `student` VALUES ('7', '张三', '18', '2班', '18311111117', '12345678@qq.com');
INSERT INTO `student` VALUES ('8', '李四', '20', '2班', '18311111118', '12345678@qq.com');
INSERT INTO `student` VALUES ('9', '王五', '19', '3班', '18311111119', '12345678@qq.com');
