-- MySQL dump 10.13  Distrib 8.0.46, for Win64 (x86_64)
--
-- Host: localhost    Database: kostic
-- ------------------------------------------------------
-- Server version	8.0.46

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_10_12_105733_create_products_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usd_price` double DEFAULT NULL,
  `zar_price` double DEFAULT NULL,
  `extra_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Mechanical Keyboard','Electronics','RGB mechanical keyboard with blue switches',NULL,45,'keyboard, gaming, RGB',49.99,899.99,'New',NULL,NULL),(2,'Wireless Mouse','Electronics','Ergonomic wireless mouse with adjustable DPI',NULL,80,'mouse, wireless, computer',19.99,359.99,'New',NULL,NULL),(3,'USB-C Hub','Electronics','Seven-in-one USB-C hub with HDMI and USB ports',NULL,30,'USB-C, adapter, laptop',34.99,629.99,'Trending',NULL,NULL),(4,'Gaming Headset','Electronics','Over-ear gaming headset with microphone',NULL,25,'gaming, audio, headset',39.99,719.99,'New',NULL,NULL),(5,'Bluetooth Speaker','Electronics','Portable speaker with rechargeable battery',NULL,40,'speaker, Bluetooth, audio',29.99,539.99,'New',NULL,NULL),(6,'Webcam HD','Electronics','1080p webcam for meetings and streaming',NULL,22,'webcam, streaming, USB',44.99,809.99,'New',NULL,NULL),(7,'Flash Drive 64GB','Electronics','USB 3.0 flash drive with 64GB storage',NULL,100,'USB, storage, flash drive',9.99,179.99,'Trending',NULL,NULL),(8,'External SSD 1TB','Electronics','Portable solid-state drive with 1TB capacity',NULL,15,'SSD, storage, portable',99.99,1799.99,'New',NULL,NULL),(9,'Laptop Stand','Accessories','Adjustable aluminium laptop stand',NULL,35,'laptop, stand, aluminium',24.99,449.99,'New',NULL,NULL),(10,'HDMI Cable','Accessories','Two-metre HDMI cable supporting 4K video',NULL,90,'HDMI, cable, display',7.99,143.99,'New',NULL,NULL),(11,'USB-C Cable','Accessories','Durable one-metre USB-C charging cable',NULL,120,'USB-C, charging, cable',5.99,107.99,'New',NULL,NULL),(12,'Power Bank 20000mAh','Electronics','High-capacity portable charging power bank',NULL,28,'power bank, charging, mobile',32.99,593.99,'Trending',NULL,NULL),(13,'Smartphone Stand','Accessories','Adjustable desktop stand for smartphones',NULL,55,'phone, stand, desk',8.99,161.99,'New',NULL,NULL),(14,'Wireless Earbuds','Electronics','Compact Bluetooth earbuds with charging case',NULL,38,'earbuds, Bluetooth, audio',27.99,503.99,'New',NULL,NULL),(15,'Gaming Mouse Pad','Accessories','Large mouse pad with non-slip rubber base',NULL,60,'gaming, mouse pad, desk',12.99,233.99,'New',NULL,NULL),(16,'Laptop Backpack','Accessories','Water-resistant backpack with laptop compartment',NULL,20,'backpack, laptop, travel',39.99,719.99,'New',NULL,NULL),(17,'Desk Lamp','Home','LED desk lamp with adjustable brightness',NULL,32,'lamp, LED, office',18.99,341.99,'Trending',NULL,NULL),(18,'Office Chair','Furniture','Ergonomic office chair with adjustable height',NULL,12,'chair, office, ergonomic',129.99,2339.99,'New',NULL,NULL),(19,'Study Desk','Furniture','Compact wooden desk for home offices',NULL,8,'desk, furniture, office',149.99,2699.99,'New',NULL,NULL),(20,'Notebook A5','Stationery','A5 ruled notebook with 200 pages',NULL,100,'notebook, writing, school',3.99,71.99,'Trending',NULL,NULL),(21,'Ballpoint Pens Pack','Stationery','Pack of ten smooth-writing ballpoint pens',NULL,75,'pens, stationery, school',4.99,89.99,'New',NULL,NULL),(22,'Calculator','Stationery','Scientific calculator for students',NULL,40,'calculator, mathematics, school',14.99,269.99,'New',NULL,NULL),(23,'USB Microphone','Electronics','Condenser microphone for recording and streaming',NULL,18,'microphone, audio, recording',59.99,1079.99,'New',NULL,NULL),(24,'Ring Light','Electronics','LED ring light for photography and video calls',NULL,24,'ring light, photography, video',22.99,413.99,'New',NULL,NULL),(25,'Tripod Stand','Accessories','Adjustable tripod for cameras and smartphones',NULL,19,'tripod, camera, photography',26.99,485.99,'New',NULL,NULL),(26,'Phone Charger 25W','Electronics','Fast USB-C wall charger',NULL,65,'charger, phone, USB-C',14.99,269.99,'New',NULL,NULL),(27,'Wireless Router','Networking','Dual-band wireless router for home networks',NULL,16,'router, Wi-Fi, networking',54.99,989.99,'New',NULL,NULL),(28,'Ethernet Cable 5m','Networking','Cat6 Ethernet cable for wired connections',NULL,70,'Ethernet, networking, cable',6.99,125.99,'New',NULL,NULL),(29,'Network Switch 8-Port','Networking','Eight-port gigabit Ethernet network switch',NULL,14,'switch, networking, gigabit',39.99,719.99,'New',NULL,NULL),(30,'Laptop Cooling Pad','Accessories','Cooling pad with dual fans for laptops',NULL,21,'cooling, laptop, fans',23.99,431.99,'New',NULL,NULL),(31,'Cotton T-Shirt','Clothing','Plain cotton crew-neck T-shirt',NULL,50,'shirt, cotton, casual',12.99,233.99,'New',NULL,NULL),(32,'Hoodie','Clothing','Comfortable pullover hoodie with front pocket',NULL,35,'hoodie, clothing, casual',29.99,539.99,'New',NULL,NULL),(33,'Baseball Cap','Clothing','Adjustable everyday baseball cap',NULL,42,'cap, hat, fashion',9.99,179.99,'New',NULL,NULL),(34,'Sneakers','Footwear','Casual lightweight everyday sneakers',NULL,18,'shoes, sneakers, casual',49.99,899.99,'New',NULL,NULL),(35,'Leather Wallet','Accessories','Compact wallet with multiple card slots',NULL,26,'wallet, leather, fashion',19.99,359.99,'New',NULL,NULL),(36,'Wrist Watch','Accessories','Minimalist wristwatch with quartz movement',NULL,15,'watch, fashion, accessories',34.99,629.99,'New',NULL,NULL),(37,'Water Bottle','Home','Reusable stainless-steel water bottle',NULL,48,'bottle, reusable, drinkware',11.99,215.99,'New',NULL,NULL),(38,'Travel Mug','Home','Insulated travel mug for hot and cold drinks',NULL,30,'mug, travel, insulated',13.99,251.99,'New',NULL,NULL),(39,'LED Bulb Pack','Home','Pack of four energy-efficient LED bulbs',NULL,55,'LED, lighting, home',8.99,161.99,'New',NULL,NULL),(40,'Extension Cable','Electronics','Four-outlet extension cable for home and office',NULL,33,'extension, power, electrical',16.99,305.99,'New',NULL,NULL),(41,'Electric Kettle','Home','1.7-litre electric kettle with automatic shut-off',NULL,17,'kettle, kitchen, appliance',24.99,449.99,'New',NULL,NULL),(42,'Blender','Home','Countertop blender for smoothies and food preparation',NULL,10,'blender, kitchen, appliance',44.99,809.99,'New',NULL,NULL),(43,'Non-Stick Frying Pan','Home','Non-stick frying pan with heat-resistant handle',NULL,23,'pan, cooking, kitchen',21.99,395.99,'New',NULL,NULL),(44,'Storage Box','Home','Stackable plastic storage box with lid',NULL,36,'storage, organisation, home',10.99,197.99,'New',NULL,NULL),(45,'Wall Clock','Home','Modern minimalist wall clock',NULL,19,'clock, wall, decor',17.99,323.99,'New',NULL,NULL),(46,'Sunglasses','Accessories','UV-protection sunglasses with lightweight frame',NULL,29,'sunglasses, fashion, UV',15.99,287.99,'New',NULL,NULL),(47,'Perfume 100ml','Personal Care','Fresh everyday fragrance in a 100ml bottle',NULL,13,'perfume, fragrance, personal care',35.99,647.99,'New',NULL,NULL),(48,'Hair Dryer','Personal Care','Compact hair dryer with two heat settings',NULL,16,'hair dryer, grooming, appliance',27.99,503.99,'New',NULL,NULL),(49,'Yoga Mat','Fitness','Non-slip exercise mat for yoga and workouts',NULL,25,'yoga, fitness, exercise',19.99,359.99,'New',NULL,NULL),(50,'Dumbbell Set','Fitness','Adjustable dumbbell set for home workouts',NULL,9,'dumbbells, fitness, weights',69.99,1259.99,'New',NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('GxM6qM2NCQMQf6yMRsVYjIGFxjAXF8oEA9erYokV',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/155.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJRVEpDOFVTMXBrR29OWEtuM2t0b2pncWl4ZWt6Nk1TOWd2cVlJWEpCIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOm51bGx9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19',1791965549);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Promise','Siafwiyo','Male','3769 Magwegwe North','primevaldigitals@gmail.com','0789880071','manager','promise','$2y$12$VxoyD//GhQaY8sLATo47L.Js3twKMX.40Fkfl8Smx0Cc9GJ4T4orG','20025',NULL,'2026-10-08 23:53:25','2026-10-12 23:53:25'),(2,'Blaunx','Prime','male','Lobengula West','primevaldigitals@gmail.com','0789880071','customer','blaunx','$2y$12$xfxTwKKzNj7IZOTuLsyLpu0SsfhQpxw8C2452JiOHsqzm7t8QtTb.','2005',NULL,'2026-10-12 23:53:25','2026-10-12 23:53:25');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-10-14 10:16:09
