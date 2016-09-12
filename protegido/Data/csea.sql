/*
Navicat MySQL Data Transfer

Source Server         : Local wamp
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : csea

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-09-12 08:31:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_accidentes
-- ----------------------------
DROP TABLE IF EXISTS `tbl_accidentes`;
CREATE TABLE `tbl_accidentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_accidentes
-- ----------------------------
INSERT INTO `tbl_accidentes` VALUES ('1', 'Accidente', 'Este es un accidente');

-- ----------------------------
-- Table structure for tbl_cargos
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cargos`;
CREATE TABLE `tbl_cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `nivel_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_nivel_riesgo` (`nivel_id`),
  CONSTRAINT `fk_nivel_riesgo` FOREIGN KEY (`nivel_id`) REFERENCES `tbl_nivel` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_cargos
-- ----------------------------
INSERT INTO `tbl_cargos` VALUES ('1', 'Tornero', null, '1');

-- ----------------------------
-- Table structure for tbl_empleados
-- ----------------------------
DROP TABLE IF EXISTS `tbl_empleados`;
CREATE TABLE `tbl_empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `profesion_id` int(11) NOT NULL,
  `salario` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cargo_empleados` (`cargo_id`),
  KEY `fk_profesion_empleado` (`profesion_id`),
  CONSTRAINT `fk_cargo_empleados` FOREIGN KEY (`cargo_id`) REFERENCES `tbl_cargos` (`id`),
  CONSTRAINT `fk_profesion_empleado` FOREIGN KEY (`profesion_id`) REFERENCES `tbl_profesiones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_empleados
-- ----------------------------
INSERT INTO `tbl_empleados` VALUES ('1', 'Alejo', 'Quiroz', '14256654', '1', 'Sur', '1', '1000000');
INSERT INTO `tbl_empleados` VALUES ('2', 'Mario', 'Bros', '123579456', '1', 'Sur', '1', '864000');

-- ----------------------------
-- Table structure for tbl_enfermedades
-- ----------------------------
DROP TABLE IF EXISTS `tbl_enfermedades`;
CREATE TABLE `tbl_enfermedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `gurpo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_enfermedad_grupo` (`gurpo_id`),
  CONSTRAINT `fk_enfermedad_grupo` FOREIGN KEY (`gurpo_id`) REFERENCES `tbl_grupos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_enfermedades
-- ----------------------------
INSERT INTO `tbl_enfermedades` VALUES ('1', 'Nueva enfermedad', 'Esta es  una enfermedad', null);

-- ----------------------------
-- Table structure for tbl_grupos
-- ----------------------------
DROP TABLE IF EXISTS `tbl_grupos`;
CREATE TABLE `tbl_grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_grupos
-- ----------------------------
INSERT INTO `tbl_grupos` VALUES ('1', 'grupo1', null);

-- ----------------------------
-- Table structure for tbl_incapacidades
-- ----------------------------
DROP TABLE IF EXISTS `tbl_incapacidades`;
CREATE TABLE `tbl_incapacidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empleado_id` int(11) NOT NULL,
  `dias` int(11) NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `enfermedad_id` int(11) DEFAULT NULL,
  `accidente_id` int(11) DEFAULT NULL,
  `total_empresa` double DEFAULT NULL,
  `total_eps` double DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`id`),
  KEY `fk_incapacidad_enfermedad` (`enfermedad_id`),
  KEY `fk_incapacidad_accidente` (`accidente_id`),
  KEY `fk_incapacidad_empleado` (`empleado_id`),
  CONSTRAINT `fk_incapacidad_accidente` FOREIGN KEY (`accidente_id`) REFERENCES `tbl_accidentes` (`id`),
  CONSTRAINT `fk_incapacidad_empleado` FOREIGN KEY (`empleado_id`) REFERENCES `tbl_empleados` (`id`),
  CONSTRAINT `fk_incapacidad_enfermedad` FOREIGN KEY (`enfermedad_id`) REFERENCES `tbl_enfermedades` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100002 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_incapacidades
-- ----------------------------
INSERT INTO `tbl_incapacidades` VALUES ('6', '1', '0', '0', '1', null, '100000', '90000.00000000001', '2016-09-22 00:00:00', 'asdfasdf');
INSERT INTO `tbl_incapacidades` VALUES ('100001', '1', '6', '0', '1', null, '100000', '90000.00000000001', '2016-09-22 00:00:00', 'asdfasdf');

-- ----------------------------
-- Table structure for tbl_nivel
-- ----------------------------
DROP TABLE IF EXISTS `tbl_nivel`;
CREATE TABLE `tbl_nivel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(255) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `porcentaje` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_nivel
-- ----------------------------
INSERT INTO `tbl_nivel` VALUES ('1', 'I', 'NIVEL UNO', '90');
INSERT INTO `tbl_nivel` VALUES ('2', 'II', 'NIVEL DOS', '80');
INSERT INTO `tbl_nivel` VALUES ('3', 'III', 'NIVEL TRES', '70');
INSERT INTO `tbl_nivel` VALUES ('4', 'IV', 'NIVEL CUATRO', '60');
INSERT INTO `tbl_nivel` VALUES ('5', 'V', 'NIVEL CINCO', '40');

-- ----------------------------
-- Table structure for tbl_profesiones
-- ----------------------------
DROP TABLE IF EXISTS `tbl_profesiones`;
CREATE TABLE `tbl_profesiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_profesiones
-- ----------------------------
INSERT INTO `tbl_profesiones` VALUES ('1', 'TECNICO INDUSTRIAL', null);
