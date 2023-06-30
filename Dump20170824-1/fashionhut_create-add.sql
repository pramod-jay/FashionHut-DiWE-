-- MySQL dump 10.13  Distrib 5.7.9, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: fashionhut
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `create-add`
--

DROP TABLE IF EXISTS `create-add`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `create-add` (
  `idcreate-add` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `whom` varchar(10) DEFAULT NULL,
  `category` varchar(15) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idcreate-add`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `create-add`
--

LOCK TABLES `create-add` WRITE;
/*!40000 ALTER TABLE `create-add` DISABLE KEYS */;
INSERT INTO `create-add` VALUES (1,'Black & White Frock','Kids','Frocks',500,'S','86.jpg'),(2,'Casual Shirt','Gents','Shirts',800,'M,L','0d050172e51d58ef57794c3b1fa46805.jpg'),(3,'Office Blouse','Ladies','Blouses',650,'M,L,XL','Blouse2_1697523a.jpg'),(4,'Circle Skirt','Ladies','Skirts',700,'Any Size','circle-skirt-4.jpg'),(5,'Casual Jeans','Gents','Trousers',1300,'25-32inches','Male-casual-pants-male-men-s-clothing-trousers-men-s-slim-straight-casual-trousers.jpg_640x640.jpg'),(6,'Sport T-Shirt','Ladies','T-Shirts',500,'M,L','images (1).jpg'),(7,'Digital Watch','Kids','Watches',1100,'S','Caref-GPS-tracking-watches-for-kids-300x300.jpg'),(8,'Lighting Shoes','Kids','Foot Wares',2500,'S','61DND-fQPML._UY395_.jpg'),(9,'Printed Jeans','Ladies','Trousers',1100,'25-32inches','Printed-Jeans-Pants-300x300.jpg'),(12,'Office Shoes','Ladies','Foot Wares',1100,'35-40cm','download (1).jpg'),(13,'CK Watch','Gents','Watches',1500,'20cm','CK-watches-Men-2014-I-Bold-Style-Calvin-Klein-Watches-for-Men-Fashion-Rely-7.jpg'),(14,'Vacheron Watch','Gents','Watches',5002,'20cm','gallery-1462889898-vacheron-constantin-patrimony-grand-taille-white-gold-black-alligator-mens-watch-81180000g9117-81180000g9117.jpg'),(15,'Fairy Watch','Ladies','Watches',1000,'15cm','85873bcb2398a5c985a0ab985b8ca733.jpg'),(16,'Office Shoes','Gents','Foot Wares',2000,'7-10inches','download.jpg'),(17,'Wedding Suits','Gents','Suits',3500,'M,L,XL','368d907658419f235873040cc63bc4ba.jpg'),(18,'Office Suit','Gents','Suits',4000,'M,L,XL','images (3).jpg'),(19,'Exercise Leggins','Gents','Trousers',700,'25-30inches','-font-b-Mens-b-font-compression-pants-bodybuilding-jogger-fitness-exercise-skinny-leggings-comperssion-tights.jpg'),(20,'Adidas T-Shirt','Gents','T-Shirts',1200,'M,L','b67159e3c8d3ca76cdd075ce42f20279.jpg'),(21,'Printed T-Shirt','Gents','T-Shirts',700,'M,L','download (2).jpg'),(22,'Cartoon T-Shirt','Kids','T-Shirts',300,'S','2-6T-blue-t-shirts-for-girls-brand-girl-t-shirt-kids-t-shirt-children-t.jpg_640x640.jpg'),(23,'NY T-Shirt','Kids','T-Shirts',400,'S','4011655088e437f8366696f2ee3e197c.jpg'),(24,'Fashion Jeans','Kids','Trousers',600,'24-28inches','2017-New-Fashion-Brand-font-b-Kids-b-font-Boys-Pants-Letter-Print-Cotton-font-b.jpg'),(25,'Corduroy Trouser','Kids','Trousers',300,'23-25inches','Boys-Beige-Corduroy-Trousers.fw_-800x600.png'),(26,'Office Skirt','Ladies','Skirts',600,'M','images (2).jpg'),(27,'Party Skirt','Ladies','Skirts',1200,'M','s-l225 (1).jpg');
/*!40000 ALTER TABLE `create-add` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-24 22:35:59
