/*
 Navicat Premium Data Transfer

 Source Server         : LocalDB
 Source Server Type    : MySQL
 Source Server Version : 100420
 Source Host           : localhost:3306
 Source Schema         : newdb

 Target Server Type    : MySQL
 Target Server Version : 100420
 File Encoding         : 65001

 Date: 16/09/2021 14:31:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for maps
-- ----------------------------
DROP TABLE IF EXISTS `maps`;
CREATE TABLE `maps`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lat` double NULL DEFAULT NULL,
  `lng` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `is_admin` tinyint(255) NULL DEFAULT 0
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'diepcd@gmail.com', 'aa', 1);
INSERT INTO `users` VALUES (2, 'diepcd@gmail.com', '123456', 0);
INSERT INTO `users` VALUES (3, 'diepcd@gmail.com', '123456', 0);
INSERT INTO `users` VALUES (4, 'diepcd@gmail.com', '123456', 0);
INSERT INTO `users` VALUES (2, 'diepcd@gmail.com', 'sdsa', 0);
INSERT INTO `users` VALUES (2, 'diepcd@gmail.com', 'ada', 0);
INSERT INTO `users` VALUES (3, 'diepcd@gmail.com', 'asada', 0);
INSERT INTO `users` VALUES (4554645, 'chuthanhha208@gmail.com', 'dasd', 0);
INSERT INTO `users` VALUES (1111, 'diepcd3333@gmail.com', 'admin@2021', 0);

SET FOREIGN_KEY_CHECKS = 1;
