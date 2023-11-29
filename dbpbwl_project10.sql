/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : dbpbwl_project10

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 29/11/2023 19:29:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_golongan
-- ----------------------------
DROP TABLE IF EXISTS `tb_golongan`;
CREATE TABLE `tb_golongan`  (
  `gol_id` tinyint NOT NULL AUTO_INCREMENT,
  `gol_kode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gol_nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`gol_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_golongan
-- ----------------------------
INSERT INTO `tb_golongan` VALUES (3, 'G-1', 'I-A', '2023-11-29 11:53:14', '2023-11-29 18:53:14');

-- ----------------------------
-- Table structure for tb_pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pelanggan`;
CREATE TABLE `tb_pelanggan`  (
  `pel_id` int NOT NULL,
  `pel_id_gol` tinyint NOT NULL,
  `pel_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pel_nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pel_alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pel_hp` int NOT NULL,
  `pel_ktp` int NOT NULL,
  `pel_seri` int NOT NULL,
  `pel_meteran` int NOT NULL,
  `pel_aktif` int NOT NULL,
  `pel_id_user` int NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`pel_id`) USING BTREE,
  INDEX `Pelanggan_FK1`(`pel_id_gol` ASC) USING BTREE,
  INDEX `Pelanggan_FK2`(`pel_id_user` ASC) USING BTREE,
  CONSTRAINT `Pelanggan_FK1` FOREIGN KEY (`pel_id_gol`) REFERENCES `tb_golongan` (`gol_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `Pelanggan_FK2` FOREIGN KEY (`pel_id_user`) REFERENCES `tb_users` (`user_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pelanggan
-- ----------------------------
INSERT INTO `tb_pelanggan` VALUES (0, 3, '0101', 'Andi', 'tes', 8121212, 121212121, 2147483647, 4541321, 1, 1, '2023-11-29 19:29:37', '2023-11-29 19:29:37');

-- ----------------------------
-- Table structure for tb_users
-- ----------------------------
DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE `tb_users`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_hp` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_pos` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_role` tinyint NOT NULL,
  `user_aktif` tinyint NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_users
-- ----------------------------
INSERT INTO `tb_users` VALUES (1, 'admin@gmail.com', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'Admin', '-', '', '', 1, 0, '2023-11-29 11:54:20', '0000-00-00 00:00:00');
INSERT INTO `tb_users` VALUES (3, 'admin2@gmail.com', '*0E6FD44C7B722784DAE6E67EF8C06FB1ACB3E0A6', 'Admin2', 'Jl. Cempaka', '08121212', '20228', 1, 1, '2023-11-29 11:58:28', '2023-11-29 18:58:28');

SET FOREIGN_KEY_CHECKS = 1;
