/*
Navicat MySQL Data Transfer

Source Server         : lokal
Source Server Version : 50724
Source Host           : 127.0.0.1:3306
Source Database       : crud

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2020-08-07 23:53:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES ('1', 'YUNI KHOIRUNNISSAH', 'Perempuan', 'Islam', 'Bekasi', '2020-08-07');
INSERT INTO `siswa` VALUES ('3', 'Neprianto', 'Laki-Laki', 'Islam', 'Medan', '2020-08-07');
