-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: client
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_code` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL,
  `regional_code_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_people` int(11) NOT NULL,
  `type_of_ownership` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` VALUES (1,81400,16,'14','Самбірський','Самбір','Шевченка','23','20',0,1),(2,81400,19,'14','Самбірський','Самбір','Шевченка','23','20',0,1),(3,81400,20,'14','Самбірський','Самбір','Шевченка','23','20',0,1),(4,81400,24,'14','Самбірський','Самбір','Шевченка','23','20',0,1),(5,81400,27,'14','Самбірський','Самбір','Шевченка','23','20',0,1),(6,81400,28,'14','Самбірський','Самбір','Шевченка','23','20',0,1),(7,81400,29,'14','Самбірський','Самбір','Шевченка','23','20',0,1),(8,81400,30,'14','Самбірський','Самбір','Шевченка','23','20',0,1),(9,81400,31,'14','Самбірський','Самбір','Шевченка','23','20',0,1),(10,81400,32,'14','Самбірський','Самбір','Шевченка','23','20',0,1);
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manager_mark_id` int(11) NOT NULL,
  `down_payment_amount` double NOT NULL,
  `requested_loan_amount` double NOT NULL,
  `purchase_loan_request` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `requested_loan_term` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application`
--

LOCK TABLES `application` WRITE;
/*!40000 ALTER TABLE `application` DISABLE KEYS */;
INSERT INTO `application` VALUES (1,1,0,5798,'a:2:{i:0;a:3:{s:14:\"purchaseTypeId\";s:1:\"8\";s:13:\"purchasePrice\";s:7:\"4999.00\";s:12:\"purchaseName\";s:38:\"Марка: samsung Модель: j510\";}i:1;a:3:{s:14:\"purchaseTypeId\";s:1:\"0\";s:13:\"purchasePrice\";s:6:\"799.00\";s:12:\"purchaseName\";s:97:\"Марка: Програмний продукт Модель: Програмний продукт\";}}',6,27),(2,1,0,5798,'a:2:{i:0;a:3:{s:14:\"purchaseTypeId\";s:1:\"8\";s:13:\"purchasePrice\";s:7:\"4999.00\";s:12:\"purchaseName\";s:38:\"Марка: samsung Модель: j510\";}i:1;a:3:{s:14:\"purchaseTypeId\";s:1:\"0\";s:13:\"purchasePrice\";s:6:\"799.00\";s:12:\"purchaseName\";s:97:\"Марка: Програмний продукт Модель: Програмний продукт\";}}',6,28),(3,1,0,5798,'a:2:{i:0;a:3:{s:14:\"purchaseTypeId\";s:1:\"8\";s:13:\"purchasePrice\";s:7:\"4999.00\";s:12:\"purchaseName\";s:38:\"Марка: samsung Модель: j510\";}i:1;a:3:{s:14:\"purchaseTypeId\";s:1:\"0\";s:13:\"purchasePrice\";s:6:\"799.00\";s:12:\"purchaseName\";s:97:\"Марка: Програмний продукт Модель: Програмний продукт\";}}',6,29),(4,1,0,5798,'a:2:{i:0;a:3:{s:14:\"purchaseTypeId\";s:1:\"8\";s:13:\"purchasePrice\";s:7:\"4999.00\";s:12:\"purchaseName\";s:38:\"Марка: samsung Модель: j510\";}i:1;a:3:{s:14:\"purchaseTypeId\";s:1:\"0\";s:13:\"purchasePrice\";s:6:\"799.00\";s:12:\"purchaseName\";s:97:\"Марка: Програмний продукт Модель: Програмний продукт\";}}',6,30),(5,1,0,5798,'a:2:{i:0;a:3:{s:14:\"purchaseTypeId\";s:1:\"8\";s:13:\"purchasePrice\";s:7:\"4999.00\";s:12:\"purchaseName\";s:38:\"Марка: samsung Модель: j510\";}i:1;a:3:{s:14:\"purchaseTypeId\";s:1:\"0\";s:13:\"purchasePrice\";s:6:\"799.00\";s:12:\"purchaseName\";s:97:\"Марка: Програмний продукт Модель: Програмний продукт\";}}',6,31),(6,1,0,5798,'a:2:{i:0;a:3:{s:14:\"purchaseTypeId\";s:1:\"8\";s:13:\"purchasePrice\";s:7:\"4999.00\";s:12:\"purchaseName\";s:38:\"Марка: samsung Модель: j510\";}i:1;a:3:{s:14:\"purchaseTypeId\";s:1:\"0\";s:13:\"purchasePrice\";s:6:\"799.00\";s:12:\"purchaseName\";s:97:\"Марка: Програмний продукт Модель: Програмний продукт\";}}',6,32);
/*!40000 ALTER TABLE `application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personal_id` int(11) NOT NULL,
  `client_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_persons_contacts` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,13,'','some contact persons contacts'),(2,16,'','some contact persons contacts'),(3,19,'','some contact persons contacts'),(4,20,'','some contact persons contacts'),(5,24,'','some contact persons contacts'),(6,27,'','some contact persons contacts'),(7,28,'','a:2:{i:0;a:4:{s:18:\"contactPersonPhone\";s:12:\"380652589544\";s:18:\"contactPersonSname\";s:40:\"Партика Іван Ігорович\";s:27:\"contactPersonRelationTypeId\";s:2:\"12\";s:29:\"contactPersonRelationTypeName\";s:12:\"Колега\";}i:1;a:4:{s:18:\"contactPersonPhone\";s:12:\"380734556258\";s:18:\"contactPersonSname\";s:40:\"бабірад Олег Іванович\";s:27:\"contactPersonRelationTypeId\";s:1:\"6\";s:29:\"contactPersonRelationTypeName\";s:8:\"Друг\";}}'),(8,29,'','a:2:{i:0;a:4:{s:18:\"contactPersonPhone\";s:12:\"380652589544\";s:18:\"contactPersonSname\";s:40:\"Партика Іван Ігорович\";s:27:\"contactPersonRelationTypeId\";s:2:\"12\";s:29:\"contactPersonRelationTypeName\";s:12:\"Колега\";}i:1;a:4:{s:18:\"contactPersonPhone\";s:12:\"380734556258\";s:18:\"contactPersonSname\";s:40:\"бабірад Олег Іванович\";s:27:\"contactPersonRelationTypeId\";s:1:\"6\";s:29:\"contactPersonRelationTypeName\";s:8:\"Друг\";}}'),(9,30,'','a:2:{i:0;a:4:{s:18:\"contactPersonPhone\";s:12:\"380652589544\";s:18:\"contactPersonSname\";s:40:\"Партика Іван Ігорович\";s:27:\"contactPersonRelationTypeId\";s:2:\"12\";s:29:\"contactPersonRelationTypeName\";s:12:\"Колега\";}i:1;a:4:{s:18:\"contactPersonPhone\";s:12:\"380734556258\";s:18:\"contactPersonSname\";s:40:\"бабірад Олег Іванович\";s:27:\"contactPersonRelationTypeId\";s:1:\"6\";s:29:\"contactPersonRelationTypeName\";s:8:\"Друг\";}}'),(10,31,'','a:2:{i:0;a:4:{s:18:\"contactPersonPhone\";s:12:\"380652589544\";s:18:\"contactPersonSname\";s:40:\"Партика Іван Ігорович\";s:27:\"contactPersonRelationTypeId\";s:2:\"12\";s:29:\"contactPersonRelationTypeName\";s:12:\"Колега\";}i:1;a:4:{s:18:\"contactPersonPhone\";s:12:\"380734556258\";s:18:\"contactPersonSname\";s:40:\"бабірад Олег Іванович\";s:27:\"contactPersonRelationTypeId\";s:1:\"6\";s:29:\"contactPersonRelationTypeName\";s:8:\"Друг\";}}'),(11,32,'','a:2:{i:0;a:4:{s:18:\"contactPersonPhone\";s:12:\"380652589544\";s:18:\"contactPersonSname\";s:40:\"Партика Іван Ігорович\";s:27:\"contactPersonRelationTypeId\";s:2:\"12\";s:29:\"contactPersonRelationTypeName\";s:12:\"Колега\";}i:1;a:4:{s:18:\"contactPersonPhone\";s:12:\"380734556258\";s:18:\"contactPersonSname\";s:40:\"бабірад Олег Іванович\";s:27:\"contactPersonRelationTypeId\";s:1:\"6\";s:29:\"contactPersonRelationTypeName\";s:8:\"Друг\";}}');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credit_products`
--

DROP TABLE IF EXISTS `credit_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credit_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conditions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credit_products`
--

LOCK TABLES `credit_products` WRITE;
/*!40000 ALTER TABLE `credit_products` DISABLE KEYS */;
INSERT INTO `credit_products` VALUES (1,'simple','credit','simple speed credit'),(2,'optimal','credit','optimal normal credit'),(3,'premium','credit','premiun credit');
/*!40000 ALTER TABLE `credit_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_selection`
--

DROP TABLE IF EXISTS `customer_selection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_selection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL,
  `confirmed` tinyint(1) DEFAULT NULL,
  `print_form_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_selection`
--

LOCK TABLES `customer_selection` WRITE;
/*!40000 ALTER TABLE `customer_selection` DISABLE KEYS */;
INSERT INTO `customer_selection` VALUES (1,2,3,1,1),(2,2,5,0,NULL);
/*!40000 ALTER TABLE `customer_selection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_place_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_place_tax_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_place_area_id` int(11) NOT NULL,
  `work_position_type_id` int(11) NOT NULL,
  `work_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_addr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_schedule_id` int(11) NOT NULL,
  `work_start_date` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pyfxtybt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_general_experience` int(11) NOT NULL,
  `education_level_id` int(11) NOT NULL,
  `prev_work_place_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prev_work_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experience`
--

LOCK TABLES `experience` WRITE;
/*!40000 ALTER TABLE `experience` DISABLE KEYS */;
INSERT INTO `experience` VALUES (1,'магазин Арсен','3352110010',7,7,'складовщик','м. Самбір, пл. Ринок','380980525666',1,'20.06.2017','9','1',60,4,'','',19),(2,'магазин Арсен','3352110010',7,7,'складовщик','м. Самбір, пл. Ринок','380980525666',1,'20.06.2017','9','1',60,4,'','',20),(3,'магазин Арсен','3352110010',7,7,'складовщик','м. Самбір, пл. Ринок','380980525666',1,'20.06.2017','9','1',60,4,'','',24),(4,'магазин Арсен','3352110010',7,7,'складовщик','м. Самбір, пл. Ринок','380980525666',1,'20.06.2017','9','1',60,4,'','',27),(5,'магазин Арсен','3352110010',7,7,'складовщик','м. Самбір, пл. Ринок','380980525666',1,'20.06.2017','9','1',60,4,'','',28),(6,'магазин Арсен','3352110010',7,7,'складовщик','м. Самбір, пл. Ринок','380980525666',1,'20.06.2017','9','1',60,4,'','',29),(7,'магазин Арсен','3352110010',7,7,'складовщик','м. Самбір, пл. Ринок','380980525666',1,'20.06.2017','9','1',60,4,'','',30),(8,'магазин Арсен','3352110010',7,7,'складовщик','м. Самбір, пл. Ринок','380980525666',1,'20.06.2017','9','1',60,4,'','',31),(9,'магазин Арсен','3352110010',7,7,'складовщик','м. Самбір, пл. Ринок','380980525666',1,'20.06.2017','9','1',60,4,'','',32);
/*!40000 ALTER TABLE `experience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `family_status`
--

DROP TABLE IF EXISTS `family_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `family_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personal_id` int(11) NOT NULL,
  `family_status_id` int(11) NOT NULL,
  `spouse_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_second_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spouse_birth_day` date DEFAULT NULL,
  `spouse_date_of_marriage` date DEFAULT NULL,
  `dependant_number` int(11) NOT NULL,
  `children_under18number_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `family_status`
--

LOCK TABLES `family_status` WRITE;
/*!40000 ALTER TABLE `family_status` DISABLE KEYS */;
INSERT INTO `family_status` VALUES (1,13,3,'','','',NULL,NULL,1,1),(2,16,3,'','','',NULL,NULL,1,1),(3,19,3,'','','',NULL,NULL,1,1),(4,20,3,'','','',NULL,NULL,1,1),(5,24,3,'','','',NULL,NULL,1,1),(6,27,3,'','','',NULL,NULL,1,1),(7,28,3,'','','',NULL,NULL,1,1),(8,29,3,'','','',NULL,NULL,1,1),(9,30,3,'','','',NULL,NULL,1,1),(10,31,3,'','','',NULL,NULL,1,1),(11,32,3,'','','',NULL,NULL,1,1);
/*!40000 ALTER TABLE `family_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financial_debts`
--

DROP TABLE IF EXISTS `financial_debts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `financial_debts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residual_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesonal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financial_debts`
--

LOCK TABLES `financial_debts` WRITE;
/*!40000 ALTER TABLE `financial_debts` DISABLE KEYS */;
INSERT INTO `financial_debts` VALUES (1,'','','','','','','','','',24),(2,'','','','','','','','','',27),(3,'','','','','','','','','',28),(4,'','','','','','','','','',29),(5,'','','','','','','','','',30),(6,'','','','','','','','','',31),(7,'','','','','','','','','',32);
/*!40000 ALTER TABLE `financial_debts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financial_expences`
--

DROP TABLE IF EXISTS `financial_expences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `financial_expences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monthly_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `monthly_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `personal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financial_expences`
--

LOCK TABLES `financial_expences` WRITE;
/*!40000 ALTER TABLE `financial_expences` DISABLE KEYS */;
INSERT INTO `financial_expences` VALUES (1,'Some monthly Amount','Some monthly type Id',20),(2,'Some monthly Amount','Some monthly type Id',24),(3,'Some monthly Amount','Some monthly type Id',27),(4,'Some monthly Amount','Some monthly type Id',28),(5,'Some monthly Amount','Some monthly type Id',29),(6,'Some monthly Amount','Some monthly type Id',30),(7,'1','800',31),(8,'2','0',31),(9,'1','800',32),(10,'2','0',32);
/*!40000 ALTER TABLE `financial_expences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financial_incomes`
--

DROP TABLE IF EXISTS `financial_incomes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `financial_incomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monthly_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `monthly_type_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `pesonal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financial_incomes`
--

LOCK TABLES `financial_incomes` WRITE;
/*!40000 ALTER TABLE `financial_incomes` DISABLE KEYS */;
INSERT INTO `financial_incomes` VALUES (1,'some monthly amount','some monthly type Id',20),(2,'some monthly amount','some monthly type Id',24),(3,'some monthly amount','some monthly type Id',27),(4,'some monthly amount','some monthly type Id',28),(5,'some monthly amount','some monthly type Id',29),(6,'5000.00','1',30),(7,'1500.00','3',30),(8,'5000.00','1',31),(9,'1500.00','3',31),(10,'5000.00','1',32),(11,'1500.00','3',32);
/*!40000 ALTER TABLE `financial_incomes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financial_property`
--

DROP TABLE IF EXISTS `financial_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `financial_property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_ownership_id` int(11) NOT NULL,
  `is_collateral` tinyint(1) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financial_property`
--

LOCK TABLES `financial_property` WRITE;
/*!40000 ALTER TABLE `financial_property` DISABLE KEYS */;
INSERT INTO `financial_property` VALUES (1,1,'Квартира',1,1,'шевченка',20),(2,1,'Квартира',1,1,'шевченка',24),(3,1,'Квартира',1,1,'шевченка',27),(4,1,'Квартира',1,1,'шевченка',28),(5,1,'Квартира',1,1,'шевченка',29),(6,1,'Квартира',1,1,'шевченка',30),(7,1,'Квартира',1,1,'шевченка',31),(8,1,'Квартира',1,1,'шевченка',32);
/*!40000 ALTER TABLE `financial_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `identification`
--

DROP TABLE IF EXISTS `identification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `identification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personal_id` int(11) NOT NULL,
  `passport_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport_issue_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nalog_register_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `identification`
--

LOCK TABLES `identification` WRITE;
/*!40000 ALTER TABLE `identification` DISABLE KEYS */;
INSERT INTO `identification` VALUES (1,11,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(2,12,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(3,13,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(4,16,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(5,19,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(6,20,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(7,24,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(8,27,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(9,28,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(10,29,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(11,30,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(12,31,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007'),(13,32,'АР545021','23.10.2007','РУ ГУ МВД України','3352110010','19.10.2007');
/*!40000 ALTER TABLE `identification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jur_address`
--

DROP TABLE IF EXISTS `jur_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jur_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personal_id` int(11) NOT NULL,
  `post_code` int(11) NOT NULL,
  `regional_code_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jur_address_is_address` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jur_address`
--

LOCK TABLES `jur_address` WRITE;
/*!40000 ALTER TABLE `jur_address` DISABLE KEYS */;
INSERT INTO `jur_address` VALUES (1,16,81400,'14','Самбірський','Самбір','Шевченка','23','20',1),(2,19,81400,'14','Самбірський','Самбір','Шевченка','23','20',1),(3,20,81400,'14','Самбірський','Самбір','Шевченка','23','20',1),(4,24,81400,'14','Самбірський','Самбір','Шевченка','23','20',1),(5,27,81400,'14','Самбірський','Самбір','Шевченка','23','20',1),(6,28,81400,'14','Самбірський','Самбір','Шевченка','23','20',1),(7,29,81400,'14','Самбірський','Самбір','Шевченка','23','20',1),(8,30,81400,'14','Самбірський','Самбір','Шевченка','23','20',1),(9,31,81400,'14','Самбірський','Самбір','Шевченка','23','20',1),(10,32,81400,'14','Самбірський','Самбір','Шевченка','23','20',1);
/*!40000 ALTER TABLE `jur_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20180825053808'),('20180825073213'),('20180825073713'),('20180825194946'),('20180826004524'),('20180826021806'),('20180826035227');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship_country_id` int(11) NOT NULL,
  `has_green_card` tinyint(1) NOT NULL,
  `name_was_changed` tinyint(1) NOT NULL,
  `previous_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_second_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_date_of_change` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (1,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','1991-10-11','м. Чернівці, Украина',804,1,1,'','','',NULL),(2,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(3,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(4,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(5,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(6,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(7,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(8,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(9,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(10,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(11,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(12,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(13,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(14,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(15,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(16,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(17,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(18,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(19,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(20,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(21,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(22,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(23,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(24,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(25,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(26,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(27,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(28,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(29,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(30,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(31,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL),(32,'Данил','Андрійович','Зубченко','ZUBChENKO DANYL','591988','M','11.10.1991','м. Чернівці, Украина',804,1,1,'','','',NULL);
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-26  7:11:10
