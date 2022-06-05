-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: AppNgine
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chatrooms`
--

DROP TABLE IF EXISTS `chatrooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chatrooms` (
  `cid` bigint(255) DEFAULT NULL,
  `cat` int(6) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chatrooms`
--

LOCK TABLES `chatrooms` WRITE;
/*!40000 ALTER TABLE `chatrooms` DISABLE KEYS */;
INSERT INTO `chatrooms` VALUES (320856676,13,'./www-img/chatHotelLobby.jpg','Hotel Lobby','2020-10-28 20:46:19',NULL),(427605729,13,'./www-img/chatHookaLounge.jpg','Hooka Lounge','2020-10-28 20:52:45',NULL),(260378078,13,'./www-img/chatKeyWest.jpg','Duval Street','2020-10-28 22:11:30',NULL),(294103304,13,'./www-img/chatStaplesCenter.jpg','Staples Center','2020-10-28 22:15:39',NULL),(211663712,13,'./www-img/chatSohoDistrict2.jpg','Soho District','2020-10-28 22:22:34',NULL),(340606648,13,'./www-img/chatClubDubai2.jpg','Club Dubai','2020-10-28 22:30:26',NULL),(918776718,13,'./www-img/chatLondonFollies.jpg','Club London','2020-10-29 17:22:35',NULL),(70474403,13,'./www-img/chatRedSquare.jpg','Red Square','2020-10-28 22:43:43',NULL),(151616707,13,'./www-img/chatHongKong2.jpg','Hong Kong','2020-10-28 22:49:04',NULL),(955299353,13,'./www-img/chatAustraila2.jpg','Down Under','2020-10-28 22:54:09',NULL),(981002184,13,'./www-img/chatTheGalleria.jpg','The Galleria','2020-10-28 22:57:59',NULL),(926242046,13,'./www-img/chatEastBerlin.jpg','East Berlin','2020-10-28 22:58:16',NULL),(277356660,13,'./www-img/chatStTropez.jpg','ST. Tropez','2020-10-28 23:01:58',NULL),(999554329,666,'./www-img/chatTemptationIsland4.jpg','Temptation Island','2020-11-08 00:04:38',NULL),(567840926,666,'./www-img/chatSexySingles3.jpg','Sexy Singles','2020-11-07 23:49:28',NULL),(363543290,666,'./www-img/chatVoodoo1.jpg','Voodoo Lounge','2020-10-29 18:34:52',NULL),(143489553,666,'./www-img/chatViperRoom1.jpg','Viper Room','2020-10-29 18:52:13',NULL),(239914410,666,'./www-img/chatFightClub1.jpg','Fight Club','2020-10-29 18:55:58',NULL),(395805867,666,'./www-img/chatTreasureIsland1.jpg','Treasure Island','2020-10-29 19:02:09',NULL),(477906357,666,'./www-img/chatHotelZaZa1.jpg','Hotel ZaZa','2020-10-29 19:06:50',NULL),(52593788,666,'./www-img/chatRedLightDistrict1.jpg','Red Light District','2020-10-29 20:25:36',NULL),(497223002,666,'./www-img/chatMonteCarlo1.jpg','Monte Carlo','2020-10-29 20:29:41',NULL);
/*!40000 ALTER TABLE `chatrooms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-26 13:30:58
