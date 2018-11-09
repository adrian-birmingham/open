-- MySQL dump 10.13  Distrib 5.6.35, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: open
-- ------------------------------------------------------
-- Server version	5.6.35-1+deb.sury.org~xenial+0.1

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
-- Table structure for table `attractions`
--

DROP TABLE IF EXISTS `attractions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attractions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attractions`
--

LOCK TABLES `attractions` WRITE;
/*!40000 ALTER TABLE `attractions` DISABLE KEYS */;
INSERT INTO `attractions` VALUES (1,'2018-11-04 16:38:26','2018-11-06 06:49:31','Solo: A Star Wars Story',1),(2,'2018-11-04 16:38:26','2018-11-07 12:29:53','Black Panther',1),(3,'2018-11-04 16:38:26','2018-11-07 12:30:02','Paddington 2',1),(4,'2018-11-04 16:38:26','2018-11-07 12:30:14','First Reformed',1),(5,'2018-11-04 16:38:26','2018-11-07 17:20:28','The Death of Stalin',1),(7,'2018-11-04 16:38:27','2018-11-06 07:10:46','The Rider',1),(8,'2018-11-07 17:21:58','2018-11-07 17:22:08','Mission: Impossible - Fallout',1),(9,'2018-11-07 17:22:43','2018-11-07 17:22:43','Searching (III)',0),(10,'2018-11-07 17:23:09','2018-11-07 17:24:58','A Star Is Born',1),(11,'2018-11-07 17:23:31','2018-11-07 17:24:51','Deadpool 2',1),(12,'2018-11-07 17:24:33','2018-11-07 17:24:44','Avengers: Infinity War',1);
/*!40000 ALTER TABLE `attractions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (12,'2014_10_12_000000_create_users_table',1),(13,'2014_10_12_100000_create_password_resets_table',1),(14,'2018_11_03_233740_create_attractions_table',1),(20,'2018_11_04_150644_create_reviews_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attraction_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rating` int(10) unsigned NOT NULL DEFAULT '0',
  `approved` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,'2018-11-07 13:17:57','2018-11-07 14:29:38','Top notch!!!',1,1,5,1),(2,'2018-11-07 13:20:31','2018-11-07 14:29:28','pinky review from bones update to 2',2,2,1,1),(3,'2018-11-07 17:14:08','2018-11-07 17:14:08','top movie',7,3,5,0),(4,'2018-11-07 17:14:25','2018-11-07 17:14:25','drab',1,3,1,0),(5,'2018-11-07 17:14:43','2018-11-07 17:27:10','not my cup of tea',4,3,1,1),(6,'2018-11-07 17:15:51','2018-11-07 17:15:51','poor',3,3,1,0),(7,'2018-11-07 17:16:16','2018-11-07 17:26:58','not too good',2,3,2,1),(8,'2018-11-07 17:17:31','2018-11-07 17:26:49','Top Ride',7,4,5,1),(9,'2018-11-07 17:18:01','2018-11-07 17:26:37','What was this about?????',4,4,1,1),(10,'2018-11-07 17:18:25','2018-11-07 17:26:26','not so cool',2,4,3,1),(11,'2018-11-07 17:18:42','2018-11-07 17:26:17','OK I guess',1,4,3,1),(12,'2018-11-08 05:30:50','2018-11-08 05:31:36','War war war',12,2,5,0);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(10) unsigned NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Adrian Jones','adrian.jones@uk2.net',NULL,'$2y$10$YV65v9fFAcRddlWSF60Sd.r3m7QcK../4EVoek1EJe5fNpPUKgA/m',1,'OPg1nvey52dKSqYBLjN5RxjeWdQ9Dwk1mSDWdBc5SC54YacwzEtuIXHoqEf7','2018-11-04 16:39:21','2018-11-04 16:39:21'),(2,'Bag O Bones','adrian_abroad@hotmail.com',NULL,'$2y$10$x42yEhbJA6vW5VmWEE40HuV1rQiGSfRhuzFCaHZpnTdDPeC.HGGAK',0,'jLYUfyv9zOyIkdkkf4Og7YB8oARpT9uhLrCDst8HzKLdfmCplb1mrVBloin3','2018-11-04 16:40:41','2018-11-04 16:40:41'),(3,'Mr A Jones','ajones@flo.co.uk',NULL,'$2y$10$JDFqxNPquBii9Pg0vBUND.u0OYV4U7./kHyHDwwziJngtBwg7kI7y',0,'EqSXNybDcNM7MvJh8HQHVAhWezLlScvlr3lbuuCJI7SecfxOvCfZI0RiZ29R','2018-11-04 16:41:48','2018-11-04 16:41:48'),(4,'A.J','ajones@warwick.ac.uk',NULL,'$2y$10$FUAWfZKGWJSYEnCAFJobW.3B4MvmwoRYDzvAXyEl3PC55GbfDO1P2',0,'7rVl4VDSEqLKkKZP5ghjLptu3ZJ47gVku8Ia0HZcwcK4KosJtXVOX9spa3G2','2018-11-07 17:17:12','2018-11-07 17:17:12'),(5,'Open Admin','open@study.com',NULL,'$2y$10$Zsn2.0FoQmmigMrL/SKOy.RzF3b39pBDLr7zOYVm2iLO3KRq1xr3C',1,'RnRLAP2z8KSiPM7BwsOaz8A2p6Eiuj4ChjKTtNTOp3x8WJLfKKwxJzpLKmVO','2018-11-09 11:08:42','2018-11-09 11:08:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'open'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-09 11:26:40
