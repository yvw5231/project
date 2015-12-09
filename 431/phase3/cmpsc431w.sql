-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: lib_system
-- ------------------------------------------------------
-- Server version	5.5.16

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `addressid` int(11) NOT NULL,
  `aptNumber` int(11) DEFAULT NULL,
  `street` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`addressid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,101,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),(2,102,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),(3,103,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),(4,104,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),(5,105,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),(6,106,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),(7,107,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),(8,108,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),(9,109,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),(10,110,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),(11,111,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),(12,112,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),(13,113,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),(14,114,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),(15,115,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),(16,120,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),(17,197,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),(18,604,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),(19,405,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),(20,203,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),(21,205,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),(22,258,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),(23,366,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),(24,462,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),(25,100,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),(26,56,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),(27,952,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),(28,236,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),(29,177,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),(30,444,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `isbn` varchar(30) NOT NULL,
  `rating` double DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `category` varchar(300) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `publisher` varchar(300) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `cover` blob,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES ('978-0495391326',2.5,' Susanna S. Epp',' Discrete Mathematics with Application',' Discrete Mathematics',' Susanna Epp\'s DISCRETE MATHEMATICS WITH APPLICATIONS  FOURTH EDITION provides a clear introduction to discrete mathematics. Renowned for her lucid accessible prose Epp explains complex  abstract concepts with clarity and precision.',' http://www.amazon.com/Discrete-Mathematics-Applications-Susanna-Epp/dp/0495391328/ref=sr_1_1?s=books&ie=UTF8&qid=1428262554&sr=1-1&keywords=discrete+mathematics',' Cengage Learning; 4 edition (August 4  2010)',30,' image\r'),('978-0590353427',3.3,' J.K. Rowling Mary GrandPré',' Harry Potter and the Sorcerer\'s Stone',' Literature & Fiction',' Harry Potter has no idea how famous he is. That\'s because he\'s being raised by his miserable aunt and uncle who are terrified Harry will learn that he\'s really a wizard just as his parents were.',' http://www.amazon.com/Harry-Potter-Sorcerers-Stone-Rowling/dp/059035342X/ref=sr_1_1?s=books&ie=UTF8&qid=1428262847&sr=1-1&keywords=harry+potter','  Scholastic (September 1998)',20,' image\r');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `reserveCount` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `memberid` int(11) NOT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES ('\'sample_user1@hotmail.com\'',' \'123456\'',' \'male\'','1989-01-18',0,' \'foo\'',1),('\'i_dont_know@gmail.com\'',' \'654321\'',' \'male\'','1995-10-25',0,' \'bar\'',2),('\'somebody@psu.edu\'',' \'abc1029384756\'',' \'female\'','1990-05-23',1,' \'kit-kat\'',3),('\'another@comcast.net\'',' \'~~123~~\'',' \'male\'','1991-08-01',2,' \'the_reader\'',4),('\'sample_user2@gmail.com\'',' \'123456\'',' \'male\'','1991-12-31',0,' \'red_hat\'',5),('\'acc_1@hotmail.com\'',' \'654321\'',' \'female\'','1985-05-21',0,' \'abc\'',6),('\'xiaohong@gmail.com\'',' \'www.google.com\'',' \'female\'','1990-03-21',15,' \'hong\'',7);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `ratingid` int(11) NOT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `starPoint` double DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `category` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ratingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rents`
--

DROP TABLE IF EXISTS `rents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rents` (
  `transactionid` int(11) NOT NULL,
  `memberid` int(11) DEFAULT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `returnConfirm` int(11) DEFAULT NULL,
  `returnDate` date DEFAULT NULL,
  `rentDate` date DEFAULT NULL,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rents`
--

LOCK TABLES `rents` WRITE;
/*!40000 ALTER TABLE `rents` DISABLE KEYS */;
/*!40000 ALTER TABLE `rents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `memberid` int(11) DEFAULT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `reserveid` int(11) NOT NULL,
  PRIMARY KEY (`reserveid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userrating`
--

DROP TABLE IF EXISTS `userrating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userrating` (
  `userRatingid` int(11) NOT NULL,
  `rating` double DEFAULT NULL,
  PRIMARY KEY (`userRatingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userrating`
--

LOCK TABLES `userrating` WRITE;
/*!40000 ALTER TABLE `userrating` DISABLE KEYS */;
INSERT INTO `userrating` VALUES (1,0),(2,1.2),(3,4.6),(4,5),(5,4.6),(6,1.8),(7,1.7),(8,2.9),(9,2.1),(10,3),(11,2.1),(12,3.6),(13,4.4),(15,4),(16,4),(17,4.8),(18,1.1),(19,1.2),(20,1.9),(21,1.5),(22,3.5),(23,3.9),(24,3),(25,2.2),(26,3.3),(27,4.6),(28,0.6),(29,0.9),(30,1.8),(31,4.7),(32,4.2),(33,4.3),(34,1.3),(35,0.6);
/*!40000 ALTER TABLE `userrating` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-22 22:26:38
