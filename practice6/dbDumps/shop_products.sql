-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: shop
-- ------------------------------------------------------
-- Server version	5.6.43

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `desc` mediumtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Mango T-shirt','images/Layer_43.jpg','52','BINBURHAN','COTTON',' Compellingly actualize fully researched processes before proactive outsourcing.'),(2,'People T-shirt','images/Layer_4.jpg','50','BINBURHAN','COTTON',' Compellingly actualize fully researched processes before proactive outsourcing.'),(3,'Mango','images/Layer_44.jpg','52','BINBURHAN','COTTON',' Compellingly actualize fully researched processes before proactive outsourcing.'),(4,'Mango T-shirt','images/Layer_45.jpg','52','BINBURHAN','COTTON',' Compellingly actualize fully researched processes before proactive outsourcing.'),(5,'Mango T-shirt','images/Layer_46.jpg','52','BINBURHAN','COTTON',' Compellingly actualize fully researched processes before proactive outsourcing.'),(6,'Mango T-shirt','images/Layer_47.jpg','52','BINBURHAN','COTTON',' Compellingly actualize fully researched processes before proactive outsourcing.'),(7,'Mango T-shirt','images/Layer_48.jpg','52','BINBURHAN','COTTON',' Compellingly actualize fully researched processes before proactive outsourcing.'),(8,'Mango T-shirt','images/Layer_49.jpg','52','BINBURHAN','COTTON',' Compellingly actualize fully researched processes before proactive outsourcing.'),(9,'Mango T-shirt','images/Layer_50.jpg','52','BINBURHAN','COTTON',' Compellingly actualize fully researched processes before proactive outsourcing.'),(10,'','','',NULL,NULL,' Compellingly actualize fully researched processes before proactive outsourcing.');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-22 14:58:55
