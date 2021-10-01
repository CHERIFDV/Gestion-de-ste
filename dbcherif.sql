-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: cherif
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `employes`
--

DROP TABLE IF EXISTS `employes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employes` (
  `num` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` int(20) DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `nationalite` varchar(20) DEFAULT NULL,
  `situationf` varchar(10) DEFAULT NULL,
  `nbancaire` int(20) DEFAULT NULL,
  `naissanced` date DEFAULT NULL,
  `cin` int(20) DEFAULT NULL,
  `passeport` varchar(20) DEFAULT NULL,
  `lieu` varchar(20) DEFAULT NULL,
  `dapartement` int(6) DEFAULT NULL,
  `nbsejour` int(3) DEFAULT NULL,
  `salaryh` int(3) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `specialite` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `ta` varchar(50) DEFAULT NULL,
  `pad` varchar(50) DEFAULT NULL,
  `Datdrang` date DEFAULT NULL,
  `Recrutement` varchar(50) DEFAULT NULL,
  `Datafect` date DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employes`
--

LOCK TABLES `employes` WRITE;
/*!40000 ALTER TABLE `employes` DISABLE KEYS */;
INSERT INTO `employes` VALUES (4,'cfgh','rytreyt','sfgdrdfrg@gmail.com',485278,'m','australian','marié',654654564,'2020-01-02',485678,'7867','rtyrty',12,255,5,'secretariat','trhftg','dthdrf','permanent','directe','2020-01-08','hdtrfdr','2020-01-23'),(5,'cherif','salim','tfhfterj@gmail.com',555,'f','azerbaijani','divorcé',54564654,'2020-01-18',47874857,'0857857857','tgdt',12,20,500,'Chef de Departement','ergfr','erger','permanent','directe','2020-01-10','rege','2020-01-23'),(6,'erferf','erfer','hjftyf4y@gmail.com',55454555,'f','','marié',35313366,'2020-01-11',0,'0','5445454',12,300,5,'secretariat','erferfr','dthdrf','permanent','indirecte','2020-01-17','dfgdf','2020-01-24');
/*!40000 ALTER TABLE `employes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `esejoure`
--

DROP TABLE IF EXISTS `esejoure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `esejoure` (
  `num` int(20) DEFAULT NULL,
  `nbsejour` int(3) DEFAULT NULL,
  `datedebutsjour` date NOT NULL,
  `datefinsjour` date NOT NULL,
  `datejour` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `esejoure`
--

LOCK TABLES `esejoure` WRITE;
/*!40000 ALTER TABLE `esejoure` DISABLE KEYS */;
INSERT INTO `esejoure` VALUES (4,50,'2020-01-16','2020-01-09','2020-01-23'),(4,50,'2020-01-01','2020-02-09','2020-01-23'),(4,1,'2020-01-01','2020-01-02','2020-01-27'),(4,3,'2020-01-30','2020-01-09','2020-01-27'),(4,2,'2020-01-30','2020-01-19','2020-01-27'),(4,3,'2020-01-30','2020-02-02','2020-01-27'),(4,12,'2020-01-22','2020-02-03','2020-01-28'),(5,12,'2020-01-29','2020-02-10','2020-01-28'),(4,11,'2020-01-29','2020-02-09','2020-01-28'),(4,45,'2020-01-22','2020-03-07','2020-01-31');
/*!40000 ALTER TABLE `esejoure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gestionpointage`
--

DROP TABLE IF EXISTS `gestionpointage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gestionpointage` (
  `num` int(2) NOT NULL,
  `entre` time DEFAULT NULL,
  `sorti` time DEFAULT NULL,
  `datejour` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gestionpointage`
--

LOCK TABLES `gestionpointage` WRITE;
/*!40000 ALTER TABLE `gestionpointage` DISABLE KEYS */;
INSERT INTO `gestionpointage` VALUES (1,'08:00:00','12:00:00','2020-01-23'),(1,'12:00:00','16:00:00','2020-01-23'),(4,'08:00:00',NULL,'2020-01-27'),(4,'12:00:00',NULL,'2020-01-31');
/*!40000 ALTER TABLE `gestionpointage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history_employes`
--

DROP TABLE IF EXISTS `history_employes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history_employes` (
  `num` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` int(20) DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `nationalite` varchar(20) DEFAULT NULL,
  `situationf` varchar(10) DEFAULT NULL,
  `nbancaire` int(20) DEFAULT NULL,
  `naissanced` date DEFAULT NULL,
  `cin` int(20) DEFAULT NULL,
  `passeport` varchar(20) DEFAULT NULL,
  `lieu` varchar(20) DEFAULT NULL,
  `dapartement` int(6) DEFAULT NULL,
  `nbsejour` int(3) DEFAULT NULL,
  `salaryh` int(3) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `specialite` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `ta` varchar(50) DEFAULT NULL,
  `pad` varchar(50) DEFAULT NULL,
  `Datdrang` date DEFAULT NULL,
  `Recrutement` varchar(50) DEFAULT NULL,
  `Datafect` date DEFAULT NULL,
  `weekend` int(3) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history_employes`
--

LOCK TABLES `history_employes` WRITE;
/*!40000 ALTER TABLE `history_employes` DISABLE KEYS */;
/*!40000 ALTER TABLE `history_employes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `num` int(5) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'1579786059_Capture d’écran de 2020-01-23 12-21-09.png'),(2,'1579786254_'),(3,'1579786353_'),(4,'1580232224_index.jpeg'),(5,'1580320864_Capture d’écran de 2020-01-23 12-21-09.png'),(6,'1579858868_logo_Tunisie.jpg'),(7,'1579801283_'),(8,'1579801334_'),(9,'1579804878_kljh.jpeg'),(10,'1579810493_kljh.jpeg'),(11,'1579810549_'),(12,'1579858230_'),(13,'1579858248_'),(14,'1579858428_'),(15,'1579858456_'),(16,'1579858471_'),(17,'1579858521_'),(18,'1579858574_'),(19,'1579858849_logo_Tunisie.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `user` varchar(50) NOT NULL,
  `pasword` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('admin','admin');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nbhparjour`
--

DROP TABLE IF EXISTS `nbhparjour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nbhparjour` (
  `num` int(5) NOT NULL,
  `nbh` float DEFAULT NULL,
  `datejour` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nbhparjour`
--

LOCK TABLES `nbhparjour` WRITE;
/*!40000 ALTER TABLE `nbhparjour` DISABLE KEYS */;
INSERT INTO `nbhparjour` VALUES (1,8,'2020-01-23'),(4,0,'2020-01-27'),(4,0,'2020-01-31');
/*!40000 ALTER TABLE `nbhparjour` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `noms` varchar(100) DEFAULT NULL,
  `sg` varchar(30) DEFAULT NULL,
  `fax` int(30) DEFAULT NULL,
  `tel` int(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `adressa` varchar(30) DEFAULT NULL,
  `adressf` varchar(30) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `num` int(1) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES ('iset sousse','persone',52333022,26655880,'sfgdrdfrg@gmail.com','site riathe 4000 sousse','site riathe 400 sousse','1580810549_Capture du 2020FDFGDFGss-01-29 18-45-18.png',1);
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poste`
--

DROP TABLE IF EXISTS `poste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `poste` (
  `npost` varchar(50) NOT NULL,
  `nbsejourfix` int(5) DEFAULT NULL,
  `salaire_par_h` int(3) DEFAULT NULL,
  PRIMARY KEY (`npost`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poste`
--

LOCK TABLES `poste` WRITE;
/*!40000 ALTER TABLE `poste` DISABLE KEYS */;
INSERT INTO `poste` VALUES ('Chef de Departement',20,500),('ouvrier',30,4),('secretariat',300,5),('technicien supérieur',70,300);
/*!40000 ALTER TABLE `poste` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salaireemployes`
--

DROP TABLE IF EXISTS `salaireemployes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salaireemployes` (
  `num` int(20) unsigned NOT NULL,
  `salaire` int(20) NOT NULL,
  `dates` date NOT NULL,
  `nbher` int(5) NOT NULL,
  PRIMARY KEY (`num`),
  CONSTRAINT `salaireemployes_ibfk_1` FOREIGN KEY (`num`) REFERENCES `employes` (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salaireemployes`
--

LOCK TABLES `salaireemployes` WRITE;
/*!40000 ALTER TABLE `salaireemployes` DISABLE KEYS */;
/*!40000 ALTER TABLE `salaireemployes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-10 18:02:55
