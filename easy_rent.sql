/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50548
Source Host           : localhost:3306
Source Database       : dreamuprentacar

Target Server Type    : MYSQL
Target Server Version : 50548
File Encoding         : 65001

Date: 2017-07-31 01:35:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cars
-- ----------------------------
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_maker_company` varchar(200) DEFAULT NULL,
  `car_brand` varchar(200) DEFAULT NULL,
  `car_model` varchar(200) DEFAULT NULL,
  `car_color` varchar(200) DEFAULT NULL,
  `car_cc` varchar(200) DEFAULT NULL,
  `car_code` varchar(100) DEFAULT NULL,
  `car_availability` varchar(50) DEFAULT NULL,
  `car_image` text,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cars
-- ----------------------------
INSERT INTO `cars` VALUES ('17', 'mitsubisi', 'prado', '2009', 'blue', '3000', '123', 'Available', 'images_2.jpg');
INSERT INTO `cars` VALUES ('19', 'a', 'b', 'cdfdf', 'edfdfdf', '20', 'qsadsd', 'Unavailable', 'images-23.jpg');
INSERT INTO `cars` VALUES ('20', 'Toyota', 'Allion', '2007', 'Red', '1500', '56ty', 'Unavailable', 'images-1.jpg');

-- ----------------------------
-- Table structure for car_rent
-- ----------------------------
DROP TABLE IF EXISTS `car_rent`;
CREATE TABLE `car_rent` (
  `rent_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) DEFAULT NULL,
  `user_address` varchar(200) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_phone` varchar(50) DEFAULT NULL,
  `service_type` varchar(50) DEFAULT NULL,
  `number_of_car` int(5) DEFAULT NULL,
  `service_date` date DEFAULT NULL,
  `car_using_area` varchar(200) DEFAULT NULL,
  `car_type` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `user_NID` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of car_rent
-- ----------------------------
INSERT INTO `car_rent` VALUES ('72', 'rubiyats', 'a', 'rus@gmail.com', '01676700207', 'Day Rental', '2', '2016-08-03', 'a', 'Sendan Car 4000', 'Approve', 'a', '0');
INSERT INTO `car_rent` VALUES ('73', 'rubiyats', 'b', 'rus@gmail.com', '01676700207', 'Day Rental', '3', '2016-08-03', 'b', 'Noah Van 4500', 'Approve', 'b', '0');
INSERT INTO `car_rent` VALUES ('74', 'rubiyats', 'xczxc', 'rus@gmail.com', '01676700207', 'Day Rental', '4', '2016-08-03', 'sadad', 'Noah Van 4500', 'Unapprove', 'cxzcxzc', '0');
INSERT INTO `car_rent` VALUES ('75', 'rubiyats', 'xczxc', 'rus@gmail.com', '01676700207', 'Day Rental', '4', '2016-08-03', 'sadad', 'Noah Van 4500', 'Unapprove', 'cxzcxzc', '0');
INSERT INTO `car_rent` VALUES ('76', 'rubiyats', 'xczxc', 'rus@gmail.com', '01676700207', 'Day Rental', '4', '2016-08-03', 'sadad', 'Noah Van 4500', 'Unapprove', 'cxzcxzc', '0');
INSERT INTO `car_rent` VALUES ('77', 'admin', 'czxcxz', 'g@gmail.com', '01676700207', 'Day Rental', '3', '2016-08-03', 'cbvcb', 'Sendan Car 4000', 'Approve', 'zcczxc', '2147483647');
INSERT INTO `car_rent` VALUES ('78', 'rumisss', 'sdfsdf', 'g@gmail.com', '01676700207', 'Day Rental', '3', '2016-08-26', 'xvcxvxcvxcvxcv', 'Noah Van 4500', 'Unapprove', 'czcxz', '1234567890123');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `message` text,
  `date` date DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  `rent_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('8', 'gazi', 'a@gmail.com', '01676700207', 'root', '2016-07-26', null, null, null, null);
INSERT INTO `contact` VALUES ('9', 'raju', 'raju@gamil.com', '3456778', 'taka drkr', '2016-07-26', null, null, null, null);
INSERT INTO `contact` VALUES ('10', 'arman', 'a@gmail.com', '0191234567', 'good ert', '2016-07-29', null, null, null, null);
INSERT INTO `contact` VALUES ('11', 'dsadasd', 'r@gmail.com', '01676700207', 'fgdfgfdgfdgfdgfd', '2017-06-25', null, null, null, null);
INSERT INTO `contact` VALUES ('12', 'hello', 'rubiyatrumi@gmail.com', '01676700207', 'sadsadadasdsad', '2017-07-08', '2017-07-08', 'Sendan Car 4000', null, null);
INSERT INTO `contact` VALUES ('13', 'rumisss', 'rubiyat21@gmail.com', '01676700207', 'tuytyuytutyut', '2017-07-30', '2017-07-30', 'Sendan Car 4000', '77', 'Approve');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(200) DEFAULT NULL,
  `user_lastname` varchar(200) DEFAULT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('4', 'rumisss', 'siddik', 'gazi', 'g@gmail.com', '7', 'Admin');
INSERT INTO `user` VALUES ('5', 'rubiyats', 'siddik', 'hasan', 'rus@gmail.com', '12', 'Admin');
INSERT INTO `user` VALUES ('15', 'raju', 'khan', 'raju', 'raju@gmail.com', '123', 'User');
INSERT INTO `user` VALUES ('16', 'raju', 'khan', 'raju', 'raju@gmail.com', '123', 'User');
INSERT INTO `user` VALUES ('18', 'arman', 'ahmed', 'ar', 'ar@gmail.com', '1', 'Admin');
INSERT INTO `user` VALUES ('19', 'jasim', 'khan', 'jasim', 'ru@gmail.com', '123', 'User');
INSERT INTO `user` VALUES ('20', 'aziz', 'khan', 'aziz', 'a@gmail.com', '123', 'User');
INSERT INTO `user` VALUES ('21', 'aziz', 'khan', 'aziz', 'a@gmail.com', '123', 'User');
INSERT INTO `user` VALUES ('22', 'runmi', 'khan', 'raju', 'a@gmail.com', '123', 'User');
INSERT INTO `user` VALUES ('23', 'rumi', 'khan', 'rumi', 'ru@gmail.com', '123', 'User');
INSERT INTO `user` VALUES ('24', 'fdffdsf', 'sdfddfdf', 'dfdfdf', 'df@gmail.com', '123', 'User');
INSERT INTO `user` VALUES ('25', 'fdffdsf', 'sdfddfdf', 'dfdfdf', 'df@gmail.com', '123', 'User');
INSERT INTO `user` VALUES ('26', 'fdffdsf', 'sdfddfdf', 'dfdfdf', 'df@gmail.com', '123', 'User');
