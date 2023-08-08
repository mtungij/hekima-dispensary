CREATE DATABASE  IF NOT EXISTS `hekima_hs` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `hekima_hs`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: hekima_hs
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointment` (
  `appointment_id` int NOT NULL,
  `patient_id` int DEFAULT NULL,
  `appointment_date` datetime DEFAULT NULL,
  `staff_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`appointment_id`),
  KEY `a_patient_id_idx` (`patient_id`),
  KEY `a_staff_id_idx` (`staff_id`),
  CONSTRAINT `a_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `a_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment`
--

LOCK TABLES `appointment` WRITE;
/*!40000 ALTER TABLE `appointment` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departiment`
--

DROP TABLE IF EXISTS `departiment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `departiment` (
  `departiment_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`departiment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departiment`
--

LOCK TABLES `departiment` WRITE;
/*!40000 ALTER TABLE `departiment` DISABLE KEYS */;
INSERT INTO `departiment` VALUES (1,'DOCTOR','2023-06-24 12:59:39'),(3,'RECEPTION','2023-06-24 13:04:56'),(5,'PHARMACY','2023-07-05 07:26:40'),(19,'RECEPTION','2023-08-04 10:43:01'),(20,'LABORATORY','2023-08-07 15:53:06'),(21,'SURGERY','2023-08-07 15:54:11');
/*!40000 ALTER TABLE `departiment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `duration`
--

DROP TABLE IF EXISTS `duration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `duration` (
  `duration_id` int NOT NULL AUTO_INCREMENT,
  `description` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`duration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `duration`
--

LOCK TABLES `duration` WRITE;
/*!40000 ALTER TABLE `duration` DISABLE KEYS */;
/*!40000 ALTER TABLE `duration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frequency`
--

DROP TABLE IF EXISTS `frequency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `frequency` (
  `frequency_id` int NOT NULL AUTO_INCREMENT,
  `description` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`frequency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frequency`
--

LOCK TABLES `frequency` WRITE;
/*!40000 ALTER TABLE `frequency` DISABLE KEYS */;
/*!40000 ALTER TABLE `frequency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general_examination`
--

DROP TABLE IF EXISTS `general_examination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `general_examination` (
  `general_examination_id` int NOT NULL AUTO_INCREMENT,
  `description` text,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`general_examination_id`),
  KEY `ge_staff_id_idx` (`staff_id`),
  KEY `ge_patient_id_idx` (`patient_id`),
  CONSTRAINT `ge_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `ge_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general_examination`
--

LOCK TABLES `general_examination` WRITE;
/*!40000 ALTER TABLE `general_examination` DISABLE KEYS */;
/*!40000 ALTER TABLE `general_examination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gynacological_history`
--

DROP TABLE IF EXISTS `gynacological_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gynacological_history` (
  `gynacological_history_id` int NOT NULL AUTO_INCREMENT,
  `decription` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  PRIMARY KEY (`gynacological_history_id`),
  KEY `gh_staff_id_idx` (`staff_id`),
  KEY `gh_patient_id_idx` (`patient_id`),
  CONSTRAINT `gh_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `gh_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gynacological_history`
--

LOCK TABLES `gynacological_history` WRITE;
/*!40000 ALTER TABLE `gynacological_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `gynacological_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `investigation`
--

DROP TABLE IF EXISTS `investigation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `investigation` (
  `investigation_id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(45) DEFAULT NULL,
  `subcategory` varchar(45) DEFAULT NULL,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `result` text,
  PRIMARY KEY (`investigation_id`),
  KEY `investigation_staff_id_idx` (`staff_id`),
  KEY `investigation_patient_id_idx` (`patient_id`),
  CONSTRAINT `investigation_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `investigation_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `investigation`
--

LOCK TABLES `investigation` WRITE;
/*!40000 ALTER TABLE `investigation` DISABLE KEYS */;
/*!40000 ALTER TABLE `investigation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main_complaint`
--

DROP TABLE IF EXISTS `main_complaint`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `main_complaint` (
  `main_complaint_id` int NOT NULL AUTO_INCREMENT,
  `description` text,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`main_complaint_id`),
  KEY `mc_staff_id_idx` (`staff_id`),
  KEY `mc_patient_id_idx` (`patient_id`),
  CONSTRAINT `mc_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `mc_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main_complaint`
--

LOCK TABLES `main_complaint` WRITE;
/*!40000 ALTER TABLE `main_complaint` DISABLE KEYS */;
/*!40000 ALTER TABLE `main_complaint` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicine` (
  `medicine_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `route` varchar(45) DEFAULT NULL,
  `frequency` int DEFAULT NULL,
  `duration` int DEFAULT NULL,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`medicine_id`),
  KEY `medicine_staff_id_idx` (`staff_id`),
  KEY `medicine_patient_id_idx` (`patient_id`),
  CONSTRAINT `medicine_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `medicine_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicine`
--

LOCK TABLES `medicine` WRITE;
/*!40000 ALTER TABLE `medicine` DISABLE KEYS */;
/*!40000 ALTER TABLE `medicine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `past_medical`
--

DROP TABLE IF EXISTS `past_medical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `past_medical` (
  `past_medical_id` int NOT NULL AUTO_INCREMENT,
  `description` text,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`past_medical_id`),
  KEY `pm_staff_id_idx` (`staff_id`),
  KEY `pm_patient_id_idx` (`patient_id`),
  CONSTRAINT `pm_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `pm_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `past_medical`
--

LOCK TABLES `past_medical` WRITE;
/*!40000 ALTER TABLE `past_medical` DISABLE KEYS */;
/*!40000 ALTER TABLE `past_medical` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient` (
  `patient_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `phone_number` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (1,'Alkado','h','hs',43,753871034,'2023-06-30 07:02:56','Male');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_history`
--

DROP TABLE IF EXISTS `patient_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patient_history` (
  `patient_history_id` int NOT NULL AUTO_INCREMENT,
  `description` text,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`patient_history_id`),
  KEY `ph_staff_id_idx` (`staff_id`),
  KEY `ph_patient_id_idx` (`patient_id`),
  CONSTRAINT `ph_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `ph_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_history`
--

LOCK TABLES `patient_history` WRITE;
/*!40000 ALTER TABLE `patient_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `position` (
  `position_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `position`
--

LOCK TABLES `position` WRITE;
/*!40000 ALTER TABLE `position` DISABLE KEYS */;
INSERT INTO `position` VALUES (3,'Medical Doctor','2023-08-07 16:12:29'),(4,'Doctor of Medicine','2023-08-07 16:13:44'),(5,'Clinical Oficer','2023-08-07 16:14:24'),(6,'Nurse','2023-08-07 16:22:40');
/*!40000 ALTER TABLE `position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procedure`
--

DROP TABLE IF EXISTS `procedure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `procedure` (
  `procedure_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `staff_id` int DEFAULT NULL,
  PRIMARY KEY (`procedure_id`),
  KEY `procedure_staff_id_idx` (`staff_id`),
  CONSTRAINT `procedure_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procedure`
--

LOCK TABLES `procedure` WRITE;
/*!40000 ALTER TABLE `procedure` DISABLE KEYS */;
INSERT INTO `procedure` VALUES (2,'Healing',10000,NULL),(3,'Procedure 1',544,NULL),(4,'Procedure 2',5400,NULL);
/*!40000 ALTER TABLE `procedure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review_other_system`
--

DROP TABLE IF EXISTS `review_other_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review_other_system` (
  `review_other_system_id` int NOT NULL AUTO_INCREMENT,
  `description` text,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`review_other_system_id`),
  KEY `ros_staff_id_idx` (`staff_id`),
  KEY `ros_patient_id_idx` (`patient_id`),
  CONSTRAINT `ros_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `ros_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review_other_system`
--

LOCK TABLES `review_other_system` WRITE;
/*!40000 ALTER TABLE `review_other_system` DISABLE KEYS */;
/*!40000 ALTER TABLE `review_other_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `route`
--

DROP TABLE IF EXISTS `route`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `route` (
  `route_id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`route_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `route`
--

LOCK TABLES `route` WRITE;
/*!40000 ALTER TABLE `route` DISABLE KEYS */;
/*!40000 ALTER TABLE `route` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setting` (
  `setting_id` int NOT NULL AUTO_INCREMENT,
  `center_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `phone_number` int DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone_number` int DEFAULT NULL,
  `departiment` varchar(255) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `image_url` varchar(200) DEFAULT NULL,
  `attachment_url` varchar(200) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (9,'alkado',NULL,'kado','alkadohs@gmail.com',878675,'DOCTOR','Medical Doctor','1234','Male',NULL,NULL,'active','2023-08-08 09:00:03'),(10,'Mangalita','sichone','mangalita','mangalita@gmail.com',9878765,'PHARMACY','NURSE','1234','Female',NULL,NULL,'active','2023-08-08 09:00:03'),(11,'kadols','Kado3','kado25','alkadosichone@gmail.com',755467654,'RECEPTION','Medical Doctor','1234','Male','pubic/uploads/Screenshot_2023-07-03_173345.png',NULL,'active','2023-08-08 09:21:49'),(12,'kado','academy','kadoacademy','me@gmail.com',456787654,'PHARMACY','Clinical Oficer','1234','Male','pubic/uploads/slide1.png',NULL,'active','2023-08-08 09:28:09'),(14,'mengi','solina','kado7654','me@gmail.com',987654,'RECEPTION','Clinical Oficer','1234','Male','pubic/uploads/',NULL,'active','2023-08-08 10:12:37'),(15,'Minara','soall','minara','forspotify401@gmail.com',8767544,'PHARMACY','Nurse','1234','Male','1691489767',NULL,'active','2023-08-08 10:16:07');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surgical`
--

DROP TABLE IF EXISTS `surgical`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `surgical` (
  `surgical_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `staff_id` int DEFAULT NULL,
  PRIMARY KEY (`surgical_id`),
  KEY `surgical_staff_id_idx` (`staff_id`),
  CONSTRAINT `s_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surgical`
--

LOCK TABLES `surgical` WRITE;
/*!40000 ALTER TABLE `surgical` DISABLE KEYS */;
INSERT INTO `surgical` VALUES (1,'step 1',50000,'2023-06-24 13:08:27',NULL),(4,'Step 12',800000,'2023-08-07 17:12:54',NULL),(5,'step 3',10000,'2023-08-07 17:13:16',NULL);
/*!40000 ALTER TABLE `surgical` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_category`
--

DROP TABLE IF EXISTS `test_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test_category` (
  `test_category_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`test_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_category`
--

LOCK TABLES `test_category` WRITE;
/*!40000 ALTER TABLE `test_category` DISABLE KEYS */;
INSERT INTO `test_category` VALUES (3,'Category 1','2023-08-08 06:15:55'),(4,'Category 2','2023-08-08 06:16:08'),(5,'Category 3','2023-08-08 06:21:31');
/*!40000 ALTER TABLE `test_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_subcategory`
--

DROP TABLE IF EXISTS `test_subcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test_subcategory` (
  `test_subcategory_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `test_category_id` int DEFAULT NULL,
  PRIMARY KEY (`test_subcategory_id`),
  KEY `lt_category_id_idx` (`test_category_id`),
  CONSTRAINT `lt_subcategory_id` FOREIGN KEY (`test_category_id`) REFERENCES `test_category` (`test_category_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_subcategory`
--

LOCK TABLES `test_subcategory` WRITE;
/*!40000 ALTER TABLE `test_subcategory` DISABLE KEYS */;
INSERT INTO `test_subcategory` VALUES (7,'Test0',5000,'2023-08-08 06:47:32',4),(8,'Test 1',7000,'2023-08-08 07:04:56',5),(9,'Test0',8000,'2023-08-08 07:05:41',3);
/*!40000 ALTER TABLE `test_subcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfer`
--

DROP TABLE IF EXISTS `transfer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transfer` (
  `transfer_id` int NOT NULL AUTO_INCREMENT,
  `from` varchar(45) DEFAULT NULL,
  `to` varchar(45) DEFAULT NULL,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transfer_id`),
  KEY `t_staff_id_idx` (`staff_id`),
  KEY `t_patient_id_idx` (`patient_id`),
  CONSTRAINT `t_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `t_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfer`
--

LOCK TABLES `transfer` WRITE;
/*!40000 ALTER TABLE `transfer` DISABLE KEYS */;
/*!40000 ALTER TABLE `transfer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vitual_sign`
--

DROP TABLE IF EXISTS `vitual_sign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vitual_sign` (
  `vitual_sign_id` int NOT NULL AUTO_INCREMENT,
  `body_temperature` varchar(45) DEFAULT NULL,
  `blood_pressure` varchar(45) DEFAULT NULL,
  `pulse_rate` varchar(45) DEFAULT NULL,
  `repiratory_rate` varchar(45) DEFAULT NULL,
  `oxygen_saturation` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `height` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `staff_id` int DEFAULT NULL,
  `patient_id` int DEFAULT NULL,
  PRIMARY KEY (`vitual_sign_id`),
  KEY `surgical_staff_id_idx` (`staff_id`),
  KEY `vs_patient_id_idx` (`patient_id`),
  CONSTRAINT `vs_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`),
  CONSTRAINT `vs_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vitual_sign`
--

LOCK TABLES `vitual_sign` WRITE;
/*!40000 ALTER TABLE `vitual_sign` DISABLE KEYS */;
/*!40000 ALTER TABLE `vitual_sign` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-08 13:21:50
