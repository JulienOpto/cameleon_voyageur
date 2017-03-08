-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: cameleon
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bagels`
--

DROP TABLE IF EXISTS `bagels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bagels` (
  `id_bagels` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(25) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_bagels`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bagels`
--

LOCK TABLES `bagels` WRITE;
/*!40000 ALTER TABLE `bagels` DISABLE KEYS */;
INSERT INTO `bagels` VALUES (1,'Feta valise','Feta, tomates, concombres, olives, oignons, roquette, basilic, câpres, huile d\'olive','6.60€','img/Menu/Feta.r.png'),(2,'Lox on the road','Cream cheese, roquette, pulpe de citron, ciboulette, oignons rouges, saumon fumé, cream cheese','6.60€','img/Menu/lox.r.png'),(3,'Serano de Bergerac','Cream cheese, roquette, tomates, jambon cru, chèvre gratiné au miel','6.60€','img/Menu/Serano.r.png'),(4,'Dinde de toi','Roquette, oignons frits, tomates, pickles, cheddar, dinde, cream cheese, moutarde au miel','6.60€','img/Menu/dinde.r.png'),(5,'Poulet voyageur','Oignons frits, roquette, tomates, pickles, cheddar, blanc de poulet, cream cheese, sauce moutarde au miel','6.60€','img/Menu/poulet.r.png'),(6,'Manhattan maboul','Salade, tomates, oignons, cheddar, steack haché, sauce \"blood on fire\" (épicé)','6.60€','img/Menu/manhattan.r.png');
/*!40000 ALTER TABLE `bagels` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-08 18:04:57
