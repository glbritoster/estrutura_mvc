# Host: localhost  (Version 8.0.21)
# Date: 2020-09-22 15:53:31
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "anuncios"
#

DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE `anuncios` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "anuncios"
#

INSERT INTO `anuncios` VALUES (1,'teste'),(2,'teste2'),(3,'teste3'),(4,'teste4');
