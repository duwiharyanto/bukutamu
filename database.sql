/*
Navicat MySQL Data Transfer

Source Server         : mysq on localhost
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : registration_db

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2018-08-09 15:55:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for datadiri
-- ----------------------------
DROP TABLE IF EXISTS `datadiri`;
CREATE TABLE `datadiri` (
  `datadiri_id` int(11) NOT NULL AUTO_INCREMENT,
  `datadiri_iduser` int(10) DEFAULT NULL,
  `datadiri_nama` text,
  `datadiri_tgllahir` date DEFAULT NULL,
  `datadiri_notelp` varchar(20) DEFAULT NULL,
  `datadiri_alamat` text,
  `datadiri_keterangan` text,
  `datadiri_foto` text,
  PRIMARY KEY (`datadiri_id`),
  KEY `fk_userid_datadiri` (`datadiri_iduser`),
  CONSTRAINT `fk_userid_datadiri` FOREIGN KEY (`datadiri_iduser`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of datadiri
-- ----------------------------
INSERT INTO `datadiri` VALUES ('1', '2', 'Ray kazuha', '2018-07-27', '085725818424', 'Pedak Wijirejo Pandak Bantul', 'Keterangan Tambahan', '94bb1c7485aa41bfe6c3cd0924249ca1.jpg');
INSERT INTO `datadiri` VALUES ('2', '4', 'Duwi haryanto', '2018-07-27', '085725818424', 'Pedak wijirejo pandak bantul', 'IST AKPRIND', '6c648c2cd1469ed10753341d864f25c2.jpg');
INSERT INTO `datadiri` VALUES ('3', '6', 'Liliana Haryanto', '1991-03-09', '085725818545', 'Pedak Wijirejo Pandak Bantul', '-', '9a8b10080a054b89353fb5d4eda0102e.jpg');

-- ----------------------------
-- Table structure for kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan` (
  `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT,
  `kegiatan_userid` int(11) DEFAULT NULL,
  `kegiatan_tgl` date DEFAULT NULL,
  `kegiatan_judul` text,
  `kegiatan_keterangan` text,
  `kegiatan_file` text,
  `kegiatan_tersimpan` date DEFAULT NULL,
  PRIMARY KEY (`kegiatan_id`),
  KEY `fk_userid_kegiatan` (`kegiatan_userid`),
  CONSTRAINT `fk_userid_kegiatan` FOREIGN KEY (`kegiatan_userid`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kegiatan
-- ----------------------------
INSERT INTO `kegiatan` VALUES ('1', '2', '2018-07-24', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Nulla Tortor Lorem, Rhoncus Non Lorem Vitae, Ullamcorper Finibus Tellus.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tortor lorem, rhoncus non lorem vitae, ullamcorper finibus tellus. Donec id lectus et justo facilisis sagittis. Donec eget neque tempor, fermentum sem id, ultricies arcu. Curabitur tincidunt gravida faucibus. Sed varius arcu enim, et scelerisque leo euismod quis. Nullam ac pretium mi, in mattis purus. Sed congue eu neque sed imperdiet. Integer vestibulum vitae sapien nec imperdiet. Aliquam vel eleifend ligula. Curabitur dapibus nec mi sit amet aliquam. In sed volutpat neque. Etiam sed mi ligula. Proin consectetur tincidunt feugiat. Sed a ipsum neque. Suspendisse potenti. Pellentesque cursus feugiat nisl non accumsan.</p>\r\n', 'a0d5ae42804e7b40c462301b72b2e8ab.pdf', '2018-07-26');
INSERT INTO `kegiatan` VALUES ('2', '1', '2018-07-24', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tortor lorem, rhoncus non lorem vitae, ullamcorper finibus tellus.</p>\r\n', 'b5db27489394fd368db65cec5dbf0607.pdf', '2018-07-24');
INSERT INTO `kegiatan` VALUES ('4', '2', '2018-07-26', 'Instalasi Jaringan Wireless', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tortor lorem, rhoncus non lorem vitae, ullamcorper finibus tellus. Donec id lectus et justo facilisis sagittis. Donec eget neque tempor, fermentum sem id, ultricies arcu. Curabitur tincidunt gravida faucibus. Sed varius arcu enim, et scelerisque leo euismod quis. Nullam ac pretium mi, in mattis purus. Sed congue eu neque sed imperdiet. Integer vestibulum vitae sapien nec imperdiet. Aliquam vel eleifend ligula. Curabitur dapibus nec mi sit amet aliquam. In sed volutpat neque. Etiam sed mi ligula. Proin consectetur tincidunt feugiat. Sed a ipsum neque. Suspendisse potenti. Pellentesque cursus feugiat nisl non accumsan.</p>\r\n\r\n<p>&nbsp;</p>\r\n', null, '2018-07-27');
INSERT INTO `kegiatan` VALUES ('6', '2', '2018-07-27', 'Koding Sistem Kegiatan', '<p>Membuat frontend untuk user dan fungsi untuk merubah password</p>\r\n', null, '2018-07-30');
INSERT INTO `kegiatan` VALUES ('7', '4', '2018-07-29', 'Melakukan instalasi win 7', '<p>Melakukan instalasi win 7 di komputer lab statistika dan ergonomi</p>\r\n', '7e4ae055d89d60242c74f656c3239dcc.pdf', '2018-07-29');
INSERT INTO `kegiatan` VALUES ('10', '6', '2018-07-14', 'testing sistem kegiatan', '<p>melakukan testing sistem informasi mencatat kegiatan(frontend user)</p>\r\n', null, '2018-07-26');
INSERT INTO `kegiatan` VALUES ('11', '4', '2018-07-30', 'Melengkapi tampilan grafik', '<p>Memperbaiki menampilkan grafik chart js.</p>\r\n\r\n<p>Kesalahan pada char.js yang perlu diupdate</p>\r\n', null, '2018-07-30');

-- ----------------------------
-- Table structure for level
-- ----------------------------
DROP TABLE IF EXISTS `level`;
CREATE TABLE `level` (
  `level_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_keterangan` text,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of level
-- ----------------------------
INSERT INTO `level` VALUES ('1', 'admin');
INSERT INTO `level` VALUES ('2', 'user');

-- ----------------------------
-- Table structure for registrasi
-- ----------------------------
DROP TABLE IF EXISTS `registrasi`;
CREATE TABLE `registrasi` (
  `registrasi_id` int(11) NOT NULL AUTO_INCREMENT,
  `registrasi_nama` varchar(255) DEFAULT NULL,
  `registrasi_tempatlahir` text,
  `registrasi_tgllahir` date DEFAULT NULL,
  `registrasi_alamat` text,
  `registrasi_kota` varchar(255) DEFAULT NULL,
  `registrasi_negara` varchar(255) DEFAULT NULL,
  `registrasi_kodepos` varchar(10) DEFAULT NULL,
  `registrasi_nohp` varchar(20) DEFAULT NULL,
  `registrasi_email` varchar(255) DEFAULT NULL,
  `registrasi_tinggibadan` varchar(5) DEFAULT NULL,
  `registrasi_beratbadan` varchar(5) DEFAULT NULL,
  `registrasi_foto` text,
  PRIMARY KEY (`registrasi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of registrasi
-- ----------------------------
INSERT INTO `registrasi` VALUES ('2', 'duwi haryanto', 'bantul', '2018-08-09', 'pedak wijijreo pandak bantul', 'Bantul', 'Indonesia', '55761', '085725818424', 'haryanto.duwi@gmail.com', '160', '50', null);
INSERT INTO `registrasi` VALUES ('3', 'duwi haryanto', 'bantul', '2018-08-09', 'pedak wijijreo pandak bantul', 'Bantul', 'Indonesia', '55761', '085725818424', 'haryanto.duwi@gmail.com', '160', '50', null);
INSERT INTO `registrasi` VALUES ('4', 'duwi haryanto', 'bantul', '2018-08-09', 'pedak wijijreo pandak bantul', 'Bantul', 'Indonesia', '55761', '085725818424', 'haryanto.duwi@gmail.com', '160', '50', null);
INSERT INTO `registrasi` VALUES ('5', 'duwi haryanto', 'bantul', '2018-08-09', 'pedak wijijreo pandak bantul', 'Bantul', 'Indonesia', '55761', '085725818424', 'haryanto.duwi@gmail.com', '160', '50', null);
INSERT INTO `registrasi` VALUES ('8', 'duwi haryanto', 'bantul', '2018-08-09', 'pedak wijijreo pandak bantul', 'Bantul', 'Indonesia', '55761', '085725818424', 'haryanto.duwi@gmail.com', '160', '50', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` text,
  `user_email` text,
  `user_levelid` int(255) DEFAULT NULL,
  `user_terdaftar` date DEFAULT NULL,
  `user_param` bit(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `fk_levelid_user` (`user_levelid`),
  CONSTRAINT `fk_levelid_user` FOREIGN KEY (`user_levelid`) REFERENCES `level` (`level_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'haryanto.duwi@gmail.com', '1', '2018-07-24', '');
INSERT INTO `user` VALUES ('2', 'ray', '070dd72385b8b2b205db53237da57200', 'ray@gmail.com', '2', '2018-07-24', '\0');
INSERT INTO `user` VALUES ('3', 'kazua', '56f00c182acf468ebedb43e147670a0f', 'kazua@gmail.com', '2', '2018-07-24', null);
INSERT INTO `user` VALUES ('4', 'duwi', '3155e562d357a7c301d2ccafadb05e17', 'haryanto.duwi@gmail.com', '2', '2018-07-27', null);
INSERT INTO `user` VALUES ('6', 'liliana', '22113d5561c167c117d38d6a2fbacf0b', 'liliana@gmail.com', '2', '2018-07-29', null);
