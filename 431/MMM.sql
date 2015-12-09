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
  `addressid` varchar(30) NOT NULL DEFAULT '',
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
INSERT INTO `address` VALUES ('',12,'north atherton','state college','16803'),('1',101,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),('10',110,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),('11',111,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),('12',112,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),('13',113,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),('14',114,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),('15',115,' \'North Atherton\'',' \'Bellfonte\'',' \'16823\'\r'),('16',120,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),('17',197,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),('18',604,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),('19',405,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),('2',102,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),('20',203,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),('21',205,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),('22',258,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),('23',366,' \'Park Avenue\'',' \'Altoona\'',' \'16601\'\r'),('24',462,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),('25',100,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),('26',56,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),('27',952,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),('28',236,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),('29',177,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),('3',103,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),('30',444,' \'Beaver Avenue\'',' \'State College\'',' \'16803\'\r'),('4',104,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),('5',105,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),('6',106,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),('7',107,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),('8',108,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),('9',109,' \'College Avenue\'',' \'State College\'',' \'16803\'\r'),('aaa',12,'north atherton','state college','16803'),('myname',156,'College Ave','State College','16803');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adminid` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','admin'),('eyi5011','aoyama0118'),('hello',''),('kkk','987987'),('new',''),('now ','what');
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
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES ('978-0756639723',0,'Andrew Graham-Dixon','Art: Over 2,500 Works from Cave to Contemporary','art','ART, the ultimate visual guide to 2,000 of the world\'s most revered paintings and sculptures, begins with a short section on how to look at paintings and sculpture, explaining the simple steps of formal analysis that swiftly become automatic and greatly increase and inform your enjoyment of art. The main part of the book is a 540-page chronological look at more than 700 artists. This section is subdivided into the main periods of art history with introductions to each period or art movement that explain the key elements and influences of the time. With several paintings by each major artist, this section is a joy to dip into or study in more depth. Key paintings are examined in detail to help you understand the artist\'s intentions, style, and method. Thematic galleries are interspersed, showing how artists from different periods and places treat the same subject matter, such as landscape, nudes, or animals.','http://www.amazon.com/Art-Over-Works-Cave-Contemporary/dp/0756639727/ref=sr_1_8?s=books&ie=UTF8&qid=1430272864&sr=1-8&keywords=art','DK (October 20, 2008)',6),('978-1400064168',0,'Laura Hillenbrand','Unbroken: A World War II Story of Survival, Resilience, and Redemption','art','On a May afternoon in 1943, an Army Air Forces bomber crashed into the Pacific Ocean and disappeared, leaving only a spray of debris and a slick of oil, gasoline, and blood. Then, on the ocean surface, a face appeared. It was that of a young lieutenant, the plane’s bombardier, who was struggling to a life raft and pulling himself aboard. So began one of the most extraordinary odysseys of the Second World War.\r\n\r\nThe lieutenant’s name was Louis Zamperini. In boyhood, he’d been a cunning and incorrigible delinquent, breaking into houses, brawling, and fleeing his home to ride the rails. As a teenager, he had channeled his defiance into running, discovering a prodigious talent that had carried him to the Berlin Olympics and within sight of the four-minute mile. But when war had come, the athlete had become an airman, embarking on a journey that led to his doomed flight, a tiny raft, and a drift into the unknown.\r\n','http://www.amazon.com/Unbroken-World-Survival-Resilience-Redemption/dp/1400064163/ref=sr_1_2?s=books&ie=UTF8&qid=1430272557&sr=1-2&keywords=art','Random House; 1st edition (November 16, 2010)',8),('978-1400079155',0,'Dan Brown','Inferno (Robert Langdon)','art','Harvard professor of symbology Robert Langdon awakens in an Italian hospital, disoriented and with no recollection of the past thirty-six hours, including the origin of the macabre object hidden in his belongings. With a relentless female assassin trailing them through Florence, he and his resourceful doctor, Sienna Brooks, are forced to flee. Embarking on a harrowing journey, they must unravel a series of codes, which are the work of a brilliant scientist whose obsession with the end of the world is matched only by his passion for one of the most influential masterpieces ever written, Dante Alighieri\'s The Inferno. ','http://www.amazon.com/Inferno-Robert-Langdon-Dan-Brown/dp/1400079152/ref=sr_1_4?s=books&ie=UTF8&qid=1430272673&sr=1-4&keywords=art','1st Printing edition (May 6, 2014)',4),('978-1606064290',0,'Victoria Finlay','The Brilliant History of Color in Art','art','The history of art is inseparable from the history of color. And what a fascinating story they tell together: one that brims with an all-star cast of characters, eye-opening details, and unexpected detours through the annals of human civilization and scientific discovery.\r\n \r\nEnter critically acclaimed writer and popular journalist Victoria Finlay, who here takes readers across the globe and over the centuries on an unforgettable tour through the brilliant history of color in art. Written for newcomers to the subject and aspiring young artists alike, Finlay’s quest to uncover the origins and science of color will beguile readers of all ages with its warm and conversational style. Her rich narrative is illustrated in full color throughout with 166 major works of art—most from the collections of the J. Paul Getty Museum.','http://www.amazon.com/Brilliant-History-Color-Art/dp/1606064290/ref=sr_1_12?s=books&ie=UTF8&qid=1430272932&sr=1-12&keywords=art','J. Paul Getty Museum; 1 edition (November 1, 2014)',8);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery` (
  `deliveryid` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery`
--

LOCK TABLES `delivery` WRITE;
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
INSERT INTO `delivery` VALUES ('eyi5011',''),('now what',''),('now /','what'),('eyi5011','aoyama0118');
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;
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
  `memberid` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES ('weidi@psu.edu','shen','male','1991-10-19',0,'WeiDi','aaa'),('eyi5011@psu.edu','aoyama0118','male','1993-01-18',10,'Eiji','eyi5011'),('second@psu.edu','hellohello','female','1985-12-12',0,'Emily Lincoln','hello'),('jackson@psu.edu','dump','male','1992-05-09',0,'Jackson','myname'),('example@psu.edu','thing','male','1990-05-22',0,'Moon','some'),('weidi@psu.edu','shen','male','1989-05-05',0,'WeiDi Shen','weidi'),('weidi@psu.edu','shen','male','1991-10-19',0,'WeiDi','weidia');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `ratingid` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(30) DEFAULT NULL,
  `starPoint` double DEFAULT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `memberid` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ratingid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` VALUES (6,'978-1400064168',6,'actually bad','eyi5011');
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rents`
--

DROP TABLE IF EXISTS `rents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rents` (
  `transactionid` int(11) NOT NULL AUTO_INCREMENT,
  `memberid` varchar(30) DEFAULT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `returnConfirm` int(11) DEFAULT NULL,
  `returnDate` date DEFAULT NULL,
  `rentDate` date DEFAULT NULL,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rents`
--

LOCK TABLES `rents` WRITE;
/*!40000 ALTER TABLE `rents` DISABLE KEYS */;
INSERT INTO `rents` VALUES (1,'eyi5011','978-1400064168',1,'2015-04-29','2015-04-29'),(2,'eyi5011','978-0756639723',1,'2015-04-29','2015-04-29'),(3,'eyi5011','978-1400079155',1,'2015-04-29','2015-04-29'),(4,'eyi5011','978-1606064290',1,'2015-04-29','2015-04-29'),(5,'eyi5011','978-1400079155',1,'2015-04-29','2015-04-29'),(6,'eyi5011','978-0756639723',1,'2015-04-29','2015-04-29'),(7,'eyi5011','978-1400079155',1,'2015-04-29','2015-04-29'),(8,'eyi5011','978-1400064168',1,'2015-04-29','2015-04-29'),(9,'eyi5011','978-1400079155',1,'2015-04-29','2015-04-29');
/*!40000 ALTER TABLE `rents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `memberid` varchar(30) DEFAULT NULL,
  `isbn` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `reserveid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`reserveid`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telemarket`
--

DROP TABLE IF EXISTS `telemarket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telemarket` (
  `telemarketid` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telemarket`
--

LOCK TABLES `telemarket` WRITE;
/*!40000 ALTER TABLE `telemarket` DISABLE KEYS */;
INSERT INTO `telemarket` VALUES ('okok','okokok'),('eyi5011','aoyama0118');
/*!40000 ALTER TABLE `telemarket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userrating`
--

DROP TABLE IF EXISTS `userrating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userrating` (
  `userRatingid` int(11) NOT NULL AUTO_INCREMENT,
  `rating` double DEFAULT NULL,
  `transactionid` int(11) DEFAULT NULL,
  PRIMARY KEY (`userRatingid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userrating`
--

LOCK TABLES `userrating` WRITE;
/*!40000 ALTER TABLE `userrating` DISABLE KEYS */;
INSERT INTO `userrating` VALUES (1,6,6),(20,7,7),(21,4,8),(22,2,9);
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

-- Dump completed on 2015-04-30  0:02:04
