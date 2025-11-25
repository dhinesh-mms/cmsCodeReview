-- MySQL dump 10.13  Distrib 8.0.41, for Linux (x86_64)
--
-- Host: localhost    Database: cms412
-- ------------------------------------------------------
-- Server version	8.0.41-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `action`
--

DROP TABLE IF EXISTS `action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `action` (
  `actionId` int NOT NULL AUTO_INCREMENT,
  `ownerId` int NOT NULL,
  `triggerType` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `triggerCode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actionType` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sourceId` int DEFAULT NULL,
  `target` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `targetId` int DEFAULT NULL,
  `widgetId` int DEFAULT NULL,
  `layoutCode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layoutId` int DEFAULT NULL,
  PRIMARY KEY (`actionId`),
  KEY `ownerId` (`ownerId`),
  CONSTRAINT `action_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action`
--

LOCK TABLES `action` WRITE;
/*!40000 ALTER TABLE `action` DISABLE KEYS */;
INSERT INTO `action` VALUES (1,1,NULL,NULL,'next',NULL,NULL,'screen',NULL,NULL,NULL,53),(2,1,NULL,NULL,'previous',NULL,NULL,'screen',NULL,NULL,NULL,53),(3,1,NULL,NULL,'navLayout',NULL,NULL,'screen',NULL,NULL,NULL,88),(4,1,NULL,NULL,'next',NULL,NULL,'screen',NULL,NULL,NULL,88),(5,1,NULL,NULL,'navLayout',NULL,NULL,'screen',NULL,NULL,NULL,88);
/*!40000 ALTER TABLE `action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application_requests_history`
--

DROP TABLE IF EXISTS `application_requests_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `application_requests_history` (
  `requestId` int NOT NULL AUTO_INCREMENT,
  `userId` int DEFAULT NULL,
  `applicationId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startTime` datetime DEFAULT NULL,
  `endTime` datetime DEFAULT NULL,
  `duration` int DEFAULT NULL,
  PRIMARY KEY (`requestId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_requests_history`
--

LOCK TABLES `application_requests_history` WRITE;
/*!40000 ALTER TABLE `application_requests_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `application_requests_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditlog`
--

DROP TABLE IF EXISTS `auditlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `auditlog` (
  `logId` int NOT NULL AUTO_INCREMENT,
  `logDate` int NOT NULL,
  `userId` int NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entityId` int NOT NULL,
  `objectAfter` text COLLATE utf8mb4_unicode_ci,
  `ipAddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sessionHistoryId` int DEFAULT NULL,
  `requestId` int DEFAULT NULL,
  PRIMARY KEY (`logId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditlog`
--

LOCK TABLES `auditlog` WRITE;
/*!40000 ALTER TABLE `auditlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `auditlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bandwidth`
--

DROP TABLE IF EXISTS `bandwidth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bandwidth` (
  `displayId` int NOT NULL,
  `type` int NOT NULL,
  `month` int NOT NULL,
  `size` bigint NOT NULL,
  PRIMARY KEY (`displayId`,`type`,`month`),
  KEY `type` (`type`),
  CONSTRAINT `bandwidth_ibfk_1` FOREIGN KEY (`type`) REFERENCES `bandwidthtype` (`bandwidthTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bandwidth`
--

LOCK TABLES `bandwidth` WRITE;
/*!40000 ALTER TABLE `bandwidth` DISABLE KEYS */;
INSERT INTO `bandwidth` VALUES (1,1,1733077800,181),(1,2,1733077800,23423),(1,3,1733077800,3087),(2,1,1733077800,113136),(2,2,1733077800,10909),(2,3,1733077800,9103),(2,6,1733077800,3696),(2,7,1733077800,544),(3,1,1733077800,1313),(4,1,1733077800,10054),(5,1,1733077800,5162),(5,2,1733077800,2817),(5,3,1733077800,353),(5,5,1733077800,5259),(6,1,1733077800,234),(7,1,1733077800,234),(8,1,1733077800,1083),(9,1,1733077800,800),(10,1,1733077800,376753),(10,1,1735756200,1860614),(10,2,1733077800,312354),(10,2,1735756200,1757930),(10,3,1733077800,163201),(10,3,1735756200,1606975),(10,5,1733077800,237725),(10,5,1735756200,495573),(10,6,1733077800,54562),(10,6,1735756200,336422),(10,7,1733077800,8840),(10,7,1735756200,5848),(10,8,1733077800,336841),(10,8,1735756200,507096),(10,13,1733077800,193343782),(10,13,1735756200,9431404),(11,1,1735756200,2740198),(11,2,1735756200,2327787),(11,3,1735756200,1922625),(11,5,1735756200,296481),(11,6,1735756200,266892),(11,7,1735756200,5896),(11,8,1735756200,1306393),(11,13,1735756200,18862808),(12,1,1735756200,1250632),(12,2,1735756200,1336170),(12,3,1735756200,1288168),(12,5,1735756200,59708),(12,6,1735756200,156649),(12,7,1735756200,2176),(12,8,1735756200,401266),(12,13,1735756200,7073553);
/*!40000 ALTER TABLE `bandwidth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bandwidthtype`
--

DROP TABLE IF EXISTS `bandwidthtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bandwidthtype` (
  `bandwidthTypeId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`bandwidthTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bandwidthtype`
--

LOCK TABLES `bandwidthtype` WRITE;
/*!40000 ALTER TABLE `bandwidthtype` DISABLE KEYS */;
INSERT INTO `bandwidthtype` VALUES (1,'Register'),(2,'Required Files'),(3,'Schedule'),(4,'Get File'),(5,'Get Resource'),(6,'Media Inventory'),(7,'Notify Status'),(8,'Submit Stats'),(9,'Submit Log'),(10,'Report Fault'),(11,'Screen Shot'),(12,'Get Data'),(13,'Get Dependency');
/*!40000 ALTER TABLE `bandwidthtype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campaign`
--

DROP TABLE IF EXISTS `campaign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campaign` (
  `campaignId` int NOT NULL AUTO_INCREMENT,
  `campaign` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isLayoutSpecific` tinyint NOT NULL,
  `userId` int NOT NULL,
  `folderId` int NOT NULL DEFAULT '1',
  `permissionsFolderId` int NOT NULL DEFAULT '1',
  `cyclePlaybackEnabled` tinyint NOT NULL DEFAULT '0',
  `playCount` int DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'list',
  `startDt` int DEFAULT NULL,
  `endDt` int DEFAULT NULL,
  `targetType` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` int DEFAULT NULL,
  `plays` int NOT NULL DEFAULT '0',
  `spend` decimal(30,4) NOT NULL DEFAULT '0.0000',
  `impressions` decimal(30,4) NOT NULL DEFAULT '0.0000',
  `lastPopId` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `listPlayOrder` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'round',
  `ref1` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref2` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref3` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref4` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref5` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifiedAt` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modifiedBy` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`campaignId`),
  KEY `userId` (`userId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `campaign_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `campaign_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campaign`
--

LOCK TABLES `campaign` WRITE;
/*!40000 ALTER TABLE `campaign` DISABLE KEYS */;
INSERT INTO `campaign` VALUES (1,'test layout with scrolling text',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-20 06:55:14','2024-12-24 05:35:47',0),(3,'video layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-24 12:12:39','2024-12-24 12:15:32',0),(4,'multiple layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-24 12:42:50','2024-12-24 12:44:44',0),(6,'ayutha pooja layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-27 12:07:49','2024-12-27 12:08:36',0),(8,'two image dec layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-27 12:09:50','2024-12-27 12:12:15',0),(9,'sbi compress image layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-27 12:09:51','2024-12-27 12:11:59',0),(10,'aug sbi video layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-27 12:09:51','2024-12-27 12:09:57',0),(11,'sept combination layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-27 12:13:07','2024-12-27 12:13:15',0),(12,'sept demo layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-27 12:13:09','2024-12-27 12:13:26',0),(13,'sept child play layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-27 12:15:52','2024-12-27 12:16:07',0),(14,'oasys office video',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-27 12:15:55','2024-12-27 12:16:01',0),(15,'duration check layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2024-12-31 05:35:03','2024-12-31 05:35:54',0),(16,'Untitled 2025-01-07 17:12:44',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-01-07 11:42:44','2025-01-07 11:42:44',0),(17,'test1',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-01-07 11:55:56','2025-01-07 11:56:35',0),(19,'test2',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-01-07 12:22:41','2025-01-07 12:22:48',0),(20,'test3',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-01-08 05:15:25','2025-01-08 05:24:27',0),(22,'test5',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-01-08 06:03:54','2025-01-08 06:04:16',0),(24,'new test layout',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-01-22 06:18:00','2025-01-22 06:20:04',0),(25,'test layout two',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-01-22 06:30:53','2025-01-22 06:37:00',0),(26,'Untitled 2025-01-22 16:19:08',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-01-22 10:49:08','2025-01-22 10:49:08',0),(27,'Untitled 2025-01-28 16:21:32',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-01-28 10:51:32','2025-01-28 10:51:32',0),(28,'Untitled 2025-02-03 10:44:52',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-02-03 05:14:52','2025-02-03 05:14:52',0),(29,'test',1,1,1,1,0,0,'list',NULL,NULL,NULL,NULL,0,0.0000,0.0000,NULL,'round',NULL,NULL,NULL,NULL,NULL,'2025-02-03 05:15:19','2025-02-03 05:15:19',0);
/*!40000 ALTER TABLE `campaign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `command`
--

DROP TABLE IF EXISTS `command`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `command` (
  `commandId` int NOT NULL AUTO_INCREMENT,
  `command` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userId` int NOT NULL,
  `availableOn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commandString` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validationString` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createAlertOn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'never',
  PRIMARY KEY (`commandId`),
  KEY `userId` (`userId`),
  CONSTRAINT `command_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `command`
--

LOCK TABLES `command` WRITE;
/*!40000 ALTER TABLE `command` DISABLE KEYS */;
/*!40000 ALTER TABLE `command` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `connectors`
--

DROP TABLE IF EXISTS `connectors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `connectors` (
  `connectorId` int NOT NULL AUTO_INCREMENT,
  `className` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `isEnabled` tinyint NOT NULL DEFAULT '0',
  `isVisible` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`connectorId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `connectors`
--

LOCK TABLES `connectors` WRITE;
/*!40000 ALTER TABLE `connectors` DISABLE KEYS */;
INSERT INTO `connectors` VALUES (1,'\\Xibo\\Connector\\PixabayConnector',NULL,0,1),(2,'\\Xibo\\Connector\\XiboExchangeConnector',NULL,0,1),(3,'\\Xibo\\Connector\\XiboDashboardConnector',NULL,0,1),(4,'\\Xibo\\Connector\\XiboSspConnector',NULL,0,1),(5,'\\Xibo\\Connector\\XiboAudienceReportingConnector',NULL,0,1),(6,'\\Xibo\\Connector\\AlphaVantageConnector',NULL,0,1),(7,'\\Xibo\\Connector\\OpenWeatherMapConnector',NULL,0,1);
/*!40000 ALTER TABLE `connectors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dataset`
--

DROP TABLE IF EXISTS `dataset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dataset` (
  `dataSetId` int NOT NULL AUTO_INCREMENT,
  `dataSet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userId` int NOT NULL,
  `lastDataEdit` int NOT NULL DEFAULT '0',
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isLookup` tinyint NOT NULL,
  `isRemote` tinyint NOT NULL DEFAULT '0',
  `method` enum('GET','POST') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postData` text COLLATE utf8mb4_unicode_ci,
  `authentication` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customHeaders` text COLLATE utf8mb4_unicode_ci,
  `userAgent` text COLLATE utf8mb4_unicode_ci,
  `refreshRate` int NOT NULL DEFAULT '86400',
  `clearRate` int NOT NULL DEFAULT '0',
  `truncateOnEmpty` tinyint NOT NULL DEFAULT '0',
  `runsAfter` int DEFAULT NULL,
  `dataRoot` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastSync` int NOT NULL DEFAULT '0',
  `summarize` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summarizeField` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastClear` int NOT NULL DEFAULT '0',
  `ignoreFirstRow` tinyint DEFAULT NULL,
  `sourceId` tinyint DEFAULT NULL,
  `rowLimit` int DEFAULT NULL,
  `limitPolicy` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csvSeparator` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folderId` int NOT NULL DEFAULT '1',
  `permissionsFolderId` int NOT NULL DEFAULT '1',
  `isRealTime` tinyint NOT NULL DEFAULT '0',
  `dataConnectorSource` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`dataSetId`),
  KEY `userId` (`userId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `dataset_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `dataset_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dataset`
--

LOCK TABLES `dataset` WRITE;
/*!40000 ALTER TABLE `dataset` DISABLE KEYS */;
/*!40000 ALTER TABLE `dataset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datasetcolumn`
--

DROP TABLE IF EXISTS `datasetcolumn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datasetcolumn` (
  `dataSetColumnId` int NOT NULL AUTO_INCREMENT,
  `dataSetId` int NOT NULL,
  `heading` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataTypeId` int NOT NULL,
  `dataSetColumnTypeId` int NOT NULL,
  `listContent` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `columnOrder` smallint NOT NULL,
  `formula` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remoteField` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `showFilter` tinyint NOT NULL DEFAULT '1',
  `showSort` tinyint NOT NULL DEFAULT '1',
  `tooltip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isRequired` tinyint NOT NULL DEFAULT '0',
  `dateFormat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`dataSetColumnId`),
  KEY `dataSetId` (`dataSetId`),
  KEY `dataTypeId` (`dataTypeId`),
  KEY `dataSetColumnTypeId` (`dataSetColumnTypeId`),
  CONSTRAINT `datasetcolumn_ibfk_1` FOREIGN KEY (`dataSetId`) REFERENCES `dataset` (`dataSetId`),
  CONSTRAINT `datasetcolumn_ibfk_2` FOREIGN KEY (`dataTypeId`) REFERENCES `datatype` (`dataTypeId`),
  CONSTRAINT `datasetcolumn_ibfk_3` FOREIGN KEY (`dataSetColumnTypeId`) REFERENCES `datasetcolumntype` (`dataSetColumnTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datasetcolumn`
--

LOCK TABLES `datasetcolumn` WRITE;
/*!40000 ALTER TABLE `datasetcolumn` DISABLE KEYS */;
/*!40000 ALTER TABLE `datasetcolumn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datasetcolumntype`
--

DROP TABLE IF EXISTS `datasetcolumntype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datasetcolumntype` (
  `dataSetColumnTypeId` int NOT NULL AUTO_INCREMENT,
  `dataSetColumnType` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`dataSetColumnTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datasetcolumntype`
--

LOCK TABLES `datasetcolumntype` WRITE;
/*!40000 ALTER TABLE `datasetcolumntype` DISABLE KEYS */;
INSERT INTO `datasetcolumntype` VALUES (1,'Value'),(2,'Formula'),(3,'Remote');
/*!40000 ALTER TABLE `datasetcolumntype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datasetrss`
--

DROP TABLE IF EXISTS `datasetrss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datasetrss` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dataSetId` int NOT NULL,
  `psk` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleColumnId` int DEFAULT NULL,
  `summaryColumnId` int DEFAULT NULL,
  `contentColumnId` int DEFAULT NULL,
  `publishedDateColumnId` int DEFAULT NULL,
  `sort` text COLLATE utf8mb4_unicode_ci,
  `filter` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `dataSetId` (`dataSetId`),
  CONSTRAINT `datasetrss_ibfk_1` FOREIGN KEY (`dataSetId`) REFERENCES `dataset` (`dataSetId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datasetrss`
--

LOCK TABLES `datasetrss` WRITE;
/*!40000 ALTER TABLE `datasetrss` DISABLE KEYS */;
/*!40000 ALTER TABLE `datasetrss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datatype`
--

DROP TABLE IF EXISTS `datatype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datatype` (
  `dataTypeId` int NOT NULL AUTO_INCREMENT,
  `dataType` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`dataTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datatype`
--

LOCK TABLES `datatype` WRITE;
/*!40000 ALTER TABLE `datatype` DISABLE KEYS */;
INSERT INTO `datatype` VALUES (1,'String'),(2,'Number'),(3,'Date'),(4,'External Image'),(5,'Library Image'),(6,'HTML');
/*!40000 ALTER TABLE `datatype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daypart`
--

DROP TABLE IF EXISTS `daypart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `daypart` (
  `dayPartId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isRetired` tinyint NOT NULL DEFAULT '0',
  `userId` int NOT NULL,
  `startTime` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00:00:00',
  `endTime` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00:00:00',
  `exceptions` text COLLATE utf8mb4_unicode_ci,
  `isAlways` tinyint NOT NULL DEFAULT '0',
  `isCustom` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`dayPartId`),
  KEY `userId` (`userId`),
  CONSTRAINT `daypart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daypart`
--

LOCK TABLES `daypart` WRITE;
/*!40000 ALTER TABLE `daypart` DISABLE KEYS */;
INSERT INTO `daypart` VALUES (1,'Custom','User specifies the from/to date',0,1,'','','',0,1),(2,'Always','Event runs always',0,1,'','','',1,0),(3,'test','',0,1,'17:00:00','17:10:00','[]',0,0);
/*!40000 ALTER TABLE `daypart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `display`
--

DROP TABLE IF EXISTS `display`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `display` (
  `displayId` int NOT NULL AUTO_INCREMENT,
  `display` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `displayTypeId` int DEFAULT NULL,
  `screenSize` int DEFAULT NULL,
  `languages` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `isMobile` tinyint NOT NULL DEFAULT '0',
  `venueId` int DEFAULT NULL,
  `auditingUntil` int NOT NULL DEFAULT '0',
  `defaultLayoutId` int NOT NULL,
  `license` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licensed` tinyint NOT NULL DEFAULT '0',
  `loggedIn` tinyint NOT NULL DEFAULT '0',
  `lastaccessed` int DEFAULT NULL,
  `inc_schedule` tinyint NOT NULL DEFAULT '0',
  `email_alert` int DEFAULT '0',
  `alert_timeout` int DEFAULT '0',
  `clientAddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mediaInventoryStatus` tinyint NOT NULL DEFAULT '0',
  `macAddress` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastChanged` int DEFAULT NULL,
  `numberOfMacAddressChanges` int DEFAULT '0',
  `lastWakeOnLanCommandSent` int DEFAULT NULL,
  `wakeOnLan` tinyint NOT NULL DEFAULT '0',
  `wakeOnLanTime` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `broadCastAddress` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secureOn` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidr` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `geoLocation` point DEFAULT NULL,
  `client_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_version` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_code` smallint DEFAULT NULL,
  `displayProfileId` int DEFAULT NULL,
  `screenShotRequested` tinyint NOT NULL DEFAULT '0',
  `storageAvailableSpace` bigint DEFAULT NULL,
  `storageTotalSpace` bigint DEFAULT NULL,
  `xmrChannel` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xmrPubKey` text COLLATE utf8mb4_unicode_ci,
  `lastCommandSuccess` tinyint NOT NULL DEFAULT '2',
  `deviceName` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeZone` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `overrideConfig` text COLLATE utf8mb4_unicode_ci,
  `newCmsAddress` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newCmsKey` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orientation` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resolution` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commercialLicence` tinyint DEFAULT NULL,
  `teamViewerSerial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webkeySerial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lanIpAddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customId` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isOutdoor` tinyint NOT NULL DEFAULT '0',
  `costPerPlay` decimal(10,4) DEFAULT NULL,
  `impressionsPerPlay` decimal(10,4) DEFAULT NULL,
  `syncGroupId` int DEFAULT NULL,
  `osVersion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `osSdk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`displayId`),
  UNIQUE KEY `license` (`license`),
  KEY `defaultLayoutId` (`defaultLayoutId`),
  KEY `displayProfileId` (`displayProfileId`),
  KEY `displayTypeId` (`displayTypeId`),
  KEY `syncGroupId` (`syncGroupId`),
  CONSTRAINT `display_ibfk_1` FOREIGN KEY (`displayProfileId`) REFERENCES `displayprofile` (`displayProfileId`),
  CONSTRAINT `display_ibfk_2` FOREIGN KEY (`displayTypeId`) REFERENCES `display_types` (`displayTypeId`),
  CONSTRAINT `display_ibfk_3` FOREIGN KEY (`syncGroupId`) REFERENCES `syncgroup` (`syncGroupId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `display`
--

LOCK TABLES `display` WRITE;
/*!40000 ALTER TABLE `display` DISABLE KEYS */;
INSERT INTO `display` VALUES (10,'123654',NULL,NULL,NULL,NULL,0,NULL,0,73,'56:53:54:50:97:0E',1,0,1736512187,0,0,0,'192.168.4.34',3,'56:53:54:50:97:0E',0,0,0,0,NULL,NULL,NULL,NULL,NULL,'android','4',400,NULL,0,2810630144,5056299008,'e81a3307331aedd48d907cfa3c5043f1','-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmgHqYbhShqOlhGh827EBAEwsXHqrM5WX\n20ZLrNv6M99Hdvh/HENXfdt85exxzyv9N3wUxX8rl3jrPyKOAEh2VBZntsQRTYMFa0p42ao1xefe\nl+S3vSNOfJCqBya1C5ZhtOfgc2sLuNkkCmQCRG4eXWEHyY+wXjJhoNpf0t2/fZsqGyncWoBlZW21\nODDYvWIlmvPVRwVin7wcmGrhxUJhowowQoQVs6CnWYCHDwcSSW86pMcHM2hp1InxoygGu/ld3wgn\noSqK60zSdp2/klTWKDF4Skpp1PRIYGAHkFWwwnp6wXzEntpVCcxC4tcJy/PYiqhCkXh3P4Ju4tkE\nrRpEHQIDAQAB\n\n-----END PUBLIC KEY-----\n',0,'mt9255t','Asia/Kolkata','[]',NULL,NULL,'landscape','1280x720',0,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,'Android',NULL,NULL,NULL,NULL),(11,'1147583',NULL,NULL,NULL,NULL,0,NULL,0,93,'F4:ED:5F:55:AF:10',1,0,1737972653,0,0,0,'192.168.3.66',1,'F4:ED:5F:55:AF:10',0,0,0,0,NULL,NULL,NULL,NULL,NULL,'android','4',400,NULL,0,4410564608,5347760128,'2f78f9ad47f4ec2807815d8cd1708cdb','-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA6hiFtmBpwVeSzVhnTmIrQFaqE5vo8+/g\nJYbywVjXOoBRKDRUsTMiAwziavWD3OUEbTkdfrlkoF9cjC8j33bFzFPCQ2AYqd2cmUH+VbXldYy/\npMl3FNpKSk4aQQ9Z/fsmStqkiKVnFsGisY85+h181q5UnEiIAI57L11/1ZkNqQ95B4Y8UNR1PB5k\nx2pphcZDuth08WlqNZTxnwJesfT9WKHGrFUXDqiB3hmIXX2bMv1iTzlxnWWcb8CRdjBw+MMhmr+9\n/y815IKUE+g0I04J01S4tqvJKdj7/VBOm5Gg6VzGpznJbzFzzvVwSndRkDTKaDorMRdkV4vPtfl/\nt1yIYQIDAQAB\n\n-----END PUBLIC KEY-----\n',0,'TV338','Asia/Kolkata','[]',NULL,NULL,'landscape','1280x720',0,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,'Android',NULL,NULL,NULL,NULL),(12,'new bush tv',NULL,NULL,NULL,'',0,NULL,0,92,'56:53:54:9E:74:05',1,0,1737712147,0,0,0,'192.168.2.155',1,'56:53:54:9E:74:05',0,0,0,0,'','','','',NULL,'android','4',400,NULL,0,3734654976,5056299008,'1058747f5e72a4a771fd81db3b697283','-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxuQqdhuXXhphP1LRVITH/hjupM4Goc/8\nFwgih4Y3pUFo7TRfZ+HqyXbo6x7LHCjtRO7yWTJkVuXF5Arm1JPdveSK46rLreNiO9CtlRfZT/HR\nXjmlYhLB3960tzcn1tnoh8E5xw8yqaTnQuUW0H6PwlmWoOvZFeVfUAQEyr/4HXMHUZhAcNA8UHUq\ne5Dkq3Q9gKv23PqDS5isdsw3oPnf5pNEgNPfVR4FOD8eFdX/qtwLSmIFu06ncXi+dH8t/facpsHh\nNrAvcA2+Ei/wz9iYf/nziaQ9BAksNzNwOAfSQ6piMNcvxNYKPVD4Zl1xPA26RDWDTekqAozRryZH\nugy7IwIDAQAB\n\n-----END PUBLIC KEY-----\n',0,'mt9255t','Asia/Kolkata','[]',NULL,NULL,'landscape','1280x720',0,NULL,NULL,NULL,'',0,NULL,NULL,NULL,'Android',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `display` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `display_media`
--

DROP TABLE IF EXISTS `display_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `display_media` (
  `id` int NOT NULL AUTO_INCREMENT,
  `displayId` int NOT NULL,
  `mediaId` int NOT NULL,
  `modifiedAt` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `displayId` (`displayId`,`mediaId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `display_media_ibfk_1` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`),
  CONSTRAINT `display_media_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `display_media`
--

LOCK TABLES `display_media` WRITE;
/*!40000 ALTER TABLE `display_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `display_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `display_types`
--

DROP TABLE IF EXISTS `display_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `display_types` (
  `displayTypeId` int NOT NULL AUTO_INCREMENT,
  `displayType` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`displayTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `display_types`
--

LOCK TABLES `display_types` WRITE;
/*!40000 ALTER TABLE `display_types` DISABLE KEYS */;
INSERT INTO `display_types` VALUES (1,'Billboard'),(2,'Kiosk'),(3,'LED Matrix / LED Video Wall'),(4,'Monitor / Other'),(5,'Projector'),(6,'Shelf-edge Display'),(7,'Smart Mirror'),(8,'TV / Panel'),(9,'Tablet'),(10,'Totem');
/*!40000 ALTER TABLE `display_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `displayevent`
--

DROP TABLE IF EXISTS `displayevent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `displayevent` (
  `displayEventId` int NOT NULL AUTO_INCREMENT,
  `eventDate` int NOT NULL,
  `displayId` int NOT NULL,
  `start` int DEFAULT NULL,
  `end` int DEFAULT NULL,
  `eventTypeId` int NOT NULL DEFAULT '1',
  `refId` int DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`displayEventId`),
  KEY `eventDate` (`eventDate`),
  KEY `displayId` (`displayId`,`end`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `displayevent`
--

LOCK TABLES `displayevent` WRITE;
/*!40000 ALTER TABLE `displayevent` DISABLE KEYS */;
INSERT INTO `displayevent` VALUES (1,1735187628,10,1735044701,1735189605,1,NULL,''),(2,1735623361,10,1735304512,1735799248,1,NULL,''),(3,1735907104,10,1735906749,1735907349,1,NULL,''),(4,1736142228,10,1735909390,1736159671,1,NULL,''),(5,1736166057,10,1736163748,1736251017,1,NULL,''),(6,1736228471,11,1736165832,1736229217,1,NULL,''),(7,1736233205,11,1736232823,1736248243,1,NULL,''),(8,1736251001,11,1736250649,1736252350,1,NULL,''),(9,1736314498,11,1736253236,1736318176,1,NULL,''),(10,1736314498,10,1736254817,1736314633,1,NULL,''),(11,1736399298,11,1736339930,1736485409,1,NULL,''),(12,1736399298,10,1736339910,1736485426,1,NULL,''),(13,1736503271,11,1736502902,1736504548,1,NULL,''),(14,1737001569,11,1736512176,1737452800,1,NULL,''),(15,1737001569,10,1736512187,NULL,1,NULL,NULL),(16,1737092745,12,1737091395,1737092776,1,NULL,''),(17,1737107194,12,1737093283,1737452721,1,NULL,''),(18,1737455534,11,1737453279,1737456720,1,NULL,''),(19,1737457805,11,1737456720,1737458247,1,NULL,''),(20,1737522167,11,1737465419,1737527142,1,NULL,''),(21,1737522167,12,1737465447,1737522523,1,NULL,''),(22,1737524499,12,1737524083,1737524572,1,NULL,''),(23,1737548688,11,1737546452,1737609195,1,NULL,''),(24,1737695611,11,1737622033,1737697119,1,NULL,''),(25,1737695611,12,1737622045,1737697116,1,NULL,''),(26,1737955415,12,1737712147,NULL,1,NULL,NULL),(27,1738044322,11,1737972653,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `displayevent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `displaygroup`
--

DROP TABLE IF EXISTS `displaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `displaygroup` (
  `displayGroupId` int NOT NULL AUTO_INCREMENT,
  `displayGroup` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isDisplaySpecific` tinyint NOT NULL DEFAULT '0',
  `isDynamic` tinyint NOT NULL DEFAULT '0',
  `dynamicCriteria` text COLLATE utf8mb4_unicode_ci,
  `dynamicCriteriaLogicalOperator` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'OR',
  `userId` int NOT NULL,
  `dynamicCriteriaTags` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dynamicCriteriaExactTags` tinyint NOT NULL DEFAULT '0',
  `dynamicCriteriaTagsLogicalOperator` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'OR',
  `bandwidthLimit` int NOT NULL DEFAULT '0',
  `ref1` text COLLATE utf8mb4_unicode_ci,
  `ref2` text COLLATE utf8mb4_unicode_ci,
  `ref3` text COLLATE utf8mb4_unicode_ci,
  `ref4` text COLLATE utf8mb4_unicode_ci,
  `ref5` text COLLATE utf8mb4_unicode_ci,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  `folderId` int NOT NULL DEFAULT '1',
  `permissionsFolderId` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`displayGroupId`),
  KEY `userId` (`userId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `displaygroup_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `displaygroup_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `displaygroup`
--

LOCK TABLES `displaygroup` WRITE;
/*!40000 ALTER TABLE `displaygroup` DISABLE KEYS */;
INSERT INTO `displaygroup` VALUES (10,'123654',NULL,1,0,NULL,'OR',1,NULL,0,'OR',0,NULL,NULL,NULL,NULL,NULL,'2024-12-24 17:23:53','2025-01-08 11:38:46',1,1),(11,'test','',0,0,'','OR',1,'',0,'OR',0,'','','','','','2025-01-03 17:39:51','2025-01-23 11:34:38',1,1),(12,'1147583',NULL,1,0,NULL,'OR',1,NULL,0,'OR',0,NULL,NULL,NULL,NULL,NULL,'2025-01-06 12:53:18','2025-01-21 17:32:27',1,1),(13,'new bush tv','',1,0,NULL,'OR',1,NULL,0,'OR',0,'','','','','','2025-01-17 10:52:59','2025-01-22 11:13:09',1,1),(14,'test1','',0,0,'','OR',1,'',0,'OR',0,'','','','','','2025-01-23 12:23:49','2025-01-23 12:23:57',1,1);
/*!40000 ALTER TABLE `displaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `displayprofile`
--

DROP TABLE IF EXISTS `displayprofile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `displayprofile` (
  `displayProfileId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config` text COLLATE utf8mb4_unicode_ci,
  `isDefault` tinyint NOT NULL DEFAULT '0',
  `userId` int NOT NULL,
  `isCustom` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`displayProfileId`),
  KEY `userId` (`userId`),
  CONSTRAINT `displayprofile_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `displayprofile`
--

LOCK TABLES `displayprofile` WRITE;
/*!40000 ALTER TABLE `displayprofile` DISABLE KEYS */;
INSERT INTO `displayprofile` VALUES (1,'Windows','windows','[]',1,1,0),(2,'Android','android','[]',1,1,0),(3,'webOS','lg','[]',1,1,0),(4,'Tizen','sssp','[]',1,1,0),(5,'Linux','linux','[]',1,1,0);
/*!40000 ALTER TABLE `displayprofile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folder`
--

DROP TABLE IF EXISTS `folder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `folder` (
  `folderId` int NOT NULL AUTO_INCREMENT,
  `folderName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentId` int DEFAULT NULL,
  `isRoot` int NOT NULL DEFAULT '0',
  `children` text COLLATE utf8mb4_unicode_ci,
  `permissionsFolderId` int DEFAULT '1',
  PRIMARY KEY (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folder`
--

LOCK TABLES `folder` WRITE;
/*!40000 ALTER TABLE `folder` DISABLE KEYS */;
INSERT INTO `folder` VALUES (1,'/',NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `folder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fonts`
--

DROP TABLE IF EXISTS `fonts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fonts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `createdAt` datetime DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `modifiedBy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `familyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint DEFAULT NULL,
  `md5` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fonts`
--

LOCK TABLES `fonts` WRITE;
/*!40000 ALTER TABLE `fonts` DISABLE KEYS */;
/*!40000 ALTER TABLE `fonts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `group` (
  `groupId` int NOT NULL AUTO_INCREMENT,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isUserSpecific` tinyint NOT NULL DEFAULT '0',
  `isEveryone` tinyint NOT NULL DEFAULT '0',
  `libraryQuota` int DEFAULT NULL,
  `isSystemNotification` tinyint NOT NULL DEFAULT '0',
  `isDisplayNotification` tinyint NOT NULL DEFAULT '0',
  `features` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isShownForAddUser` tinyint NOT NULL DEFAULT '0',
  `defaultHomepageId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isDataSetNotification` tinyint NOT NULL DEFAULT '0',
  `isLayoutNotification` tinyint NOT NULL DEFAULT '0',
  `isLibraryNotification` tinyint NOT NULL DEFAULT '0',
  `isReportNotification` tinyint NOT NULL DEFAULT '0',
  `isScheduleNotification` tinyint NOT NULL DEFAULT '0',
  `isCustomNotification` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` VALUES (1,'Users',0,0,NULL,0,0,'[\"icondashboard.view\",\"icondashboard.add\",\"icondashboard.modify\",\"layout.view\",\"layout.add\",\"layout.modify\",\"library.view\",\"library.add\",\"library.modify\",\"mediamanager.view\",\"mediamanager.add\",\"mediamanager.modify\",\"playlist.view\",\"playlist.add\",\"playlist.modify\",\"preview.view\",\"preview.add\",\"preview.modify\",\"region.view\",\"region.add\",\"region.modify\",\"schedule.view\",\"schedule.add\",\"schedule.modify\",\"statusdashboard.view\",\"statusdashboard.add\",\"statusdashboard.modify\",\"users.view\",\"users.add\",\"users.modify\",\"schedule.now\",\"user.sharing\"]',NULL,0,NULL,0,0,0,0,0,0),(2,'Everyone',0,1,NULL,0,0,NULL,NULL,0,NULL,0,0,0,0,0,0),(3,'root',1,0,0,1,0,'[\"schedule.now\"]',NULL,0,NULL,0,0,0,0,0,0),(4,'System Notifications',0,0,NULL,1,0,'[\"schedule.now\"]',NULL,0,NULL,0,0,0,0,0,0),(5,'Content Manager',0,0,NULL,0,0,'[\"folder.view\",\"folder.add\",\"folder.modify\",\"library.view\",\"library.add\",\"library.modify\",\"dataset.view\",\"dataset.add\",\"dataset.modify\",\"dataset.data\",\"playlist.view\",\"playlist.add\",\"playlist.modify\",\"layout.view\",\"layout.add\",\"layout.modify\",\"layout.export\",\"template.view\",\"template.add\",\"template.modify\",\"resolution.view\",\"resolution.add\",\"resolution.modify\",\"campaign.view\",\"campaign.add\",\"campaign.modify\",\"tag.view\",\"tag.tagging\",\"user.profile\"]','Management of all features related to Content Creation only.',1,'icondashboard.view',0,0,0,0,0,0),(6,'Playlist Manager',0,0,NULL,0,0,'[\"user.profile\",\"dashboard.playlist\"]','Management of specific Playlists to edit / replace Media only.',1,'playlistdashboard.view',0,0,0,0,0,0),(7,'Schedule Manager',0,0,NULL,0,0,'[\"folder.view\",\"schedule.view\",\"schedule.agenda\",\"schedule.add\",\"schedule.modify\",\"schedule.now\",\"daypart.view\",\"daypart.add\",\"daypart.modify\",\"user.profile\"]','Management of all features for the purpose of Event Scheduling only.',1,'icondashboard.view',0,0,0,0,0,0),(8,'Display Manager',0,0,0,0,1,'[\"tag.tagging\",\"displays.view\",\"displays.add\",\"displays.modify\",\"displays.limitedView\",\"displaygroup.view\",\"displaygroup.add\",\"displaygroup.modify\",\"displaygroup.limitedView\",\"displayprofile.view\",\"displayprofile.add\",\"displayprofile.modify\",\"playersoftware.view\",\"command.view\",\"display.syncView\",\"display.syncAdd\",\"display.syncModify\",\"user.profile\",\"notification.centre\",\"notification.add\",\"notification.modify\",\"dashboard.status\",\"log.view\"]','Management of all features for the purpose of Display Administration only.',0,'statusdashboard.view',0,0,0,0,0,0),(9,'displayuser',1,0,0,0,0,'[]',NULL,0,NULL,0,0,0,0,0,0);
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `layout`
--

DROP TABLE IF EXISTS `layout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `layout` (
  `layoutId` int NOT NULL AUTO_INCREMENT,
  `layout` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int NOT NULL,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  `description` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retired` tinyint NOT NULL DEFAULT '0',
  `duration` int NOT NULL,
  `backgroundImageId` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `width` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `backgroundColor` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backgroundzIndex` int NOT NULL DEFAULT '1',
  `schemaVersion` tinyint NOT NULL DEFAULT '2',
  `statusMessage` text COLLATE utf8mb4_unicode_ci,
  `parentId` int DEFAULT NULL,
  `publishedStatusId` int NOT NULL DEFAULT '1',
  `enableStat` int DEFAULT NULL,
  `publishedDate` datetime DEFAULT NULL,
  `autoApplyTransitions` tinyint NOT NULL DEFAULT '0',
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`layoutId`),
  KEY `userId` (`userId`),
  KEY `backgroundImageId` (`backgroundImageId`),
  KEY `publishedStatusId` (`publishedStatusId`),
  CONSTRAINT `layout_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `layout_ibfk_2` FOREIGN KEY (`backgroundImageId`) REFERENCES `media` (`mediaId`),
  CONSTRAINT `layout_ibfk_3` FOREIGN KEY (`publishedStatusId`) REFERENCES `status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `layout`
--

LOCK TABLES `layout` WRITE;
/*!40000 ALTER TABLE `layout` DISABLE KEYS */;
INSERT INTO `layout` VALUES (12,'video layout',1,'2024-12-24 18:04:53','2024-12-24 18:04:57','',0,100,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,1,NULL,0,NULL),(28,'sept demo layout',1,'2024-12-27 17:43:09','2025-01-02 12:24:22','',0,496,NULL,1,1920,1080,'#000',0,4,NULL,NULL,2,0,NULL,1,NULL),(30,'oasys office video',1,'2024-12-27 17:45:55','2024-12-27 17:45:55','',0,987,NULL,1,1920,1080,'#000000',0,4,NULL,NULL,1,0,NULL,0,NULL),(31,'ayutha pooja layout',1,'2024-12-27 17:53:17','2024-12-27 17:53:37','',0,51,NULL,1,1920,1080,'#000000',0,4,NULL,NULL,1,0,NULL,1,NULL),(33,'multiple layout',1,'2024-12-27 18:16:03','2024-12-27 18:17:00','',0,40,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,1,NULL,0,NULL),(37,'duration check layout',1,'2024-12-31 11:08:29','2024-12-31 11:09:25','',0,54,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,0,NULL,0,NULL),(39,'sept demo layout',1,'2025-01-02 12:24:22','2025-01-02 12:24:22','',0,0,NULL,3,1920,1080,'#000',0,4,NULL,28,2,0,NULL,1,NULL),(43,'sept combination layout',1,'2025-01-02 13:01:34','2025-01-02 13:02:09','',0,412,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,1,NULL,1,NULL),(44,'sept child play layout',1,'2025-01-02 13:02:26','2025-01-02 13:02:46','',0,277,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,1,NULL,1,NULL),(45,'two image dec layout',1,'2025-01-07 12:30:22','2025-01-07 12:33:18','',0,45,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,0,NULL,1,NULL),(48,'Untitled 2025-01-07 17:12:44',1,'2025-01-07 17:19:20','2025-01-07 17:23:55',NULL,0,40,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,0,NULL,0,NULL),(51,'test1',1,'2025-01-07 17:41:06','2025-01-08 11:18:07','',0,40,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,0,NULL,0,NULL),(59,'test3',1,'2025-01-08 10:54:16','2025-01-08 10:55:23','',0,40,NULL,1,1920,1080,'#000',0,4,NULL,NULL,2,1,NULL,0,NULL),(60,'test3',1,'2025-01-08 10:55:23','2025-01-08 11:26:45','',0,40,NULL,1,1920,1080,'#000',0,4,NULL,59,2,1,NULL,0,NULL),(63,'test2',1,'2025-01-08 11:02:32','2025-01-08 11:08:21','',0,10,NULL,1,1920,1080,'#000',0,4,NULL,NULL,2,0,NULL,0,NULL),(64,'test2',1,'2025-01-08 11:08:21','2025-01-08 11:08:29','',0,10,NULL,1,1920,1080,'#000',0,4,NULL,63,2,0,NULL,0,NULL),(73,'test5',1,'2025-01-08 12:57:37','2025-01-08 12:57:44','',0,40,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,0,NULL,0,NULL),(74,'test layout with scrolling text',1,'2025-01-09 17:13:22','2025-01-09 17:15:36','',0,10,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,1,NULL,0,NULL),(86,'test layout two',1,'2025-01-22 12:00:53','2025-01-22 14:40:46','',0,82,NULL,1,1920,1080,'#000',0,4,NULL,NULL,2,1,NULL,0,NULL),(88,'test layout two',1,'2025-01-22 14:40:46','2025-01-22 14:57:27','',0,0,NULL,0,1920,1080,'#000',0,4,NULL,86,2,1,NULL,0,NULL),(89,'new test layout',1,'2025-01-22 15:02:17','2025-01-22 15:04:32','',0,40,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,0,NULL,0,NULL),(90,'Untitled 2025-01-22 16:19:08',1,'2025-01-22 16:19:08','2025-01-22 16:19:08',NULL,0,0,NULL,3,1920,1080,'#000',0,4,NULL,NULL,2,0,NULL,0,NULL),(91,'Untitled 2025-01-22 16:19:08',1,'2025-01-22 16:19:08','2025-01-22 16:19:09',NULL,0,0,NULL,0,1920,1080,'#000',0,4,NULL,90,2,0,NULL,0,NULL),(92,'sbi compress image layout',1,'2025-01-22 17:55:42','2025-01-22 17:55:42','',0,274,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,1,NULL,1,NULL),(93,'aug sbi video layout',1,'2025-01-23 11:23:39','2025-01-23 11:23:39','',0,70,NULL,1,1920,1080,'#000',0,4,NULL,NULL,1,1,NULL,1,NULL),(94,'Untitled 2025-01-28 16:21:32',1,'2025-01-28 16:21:32','2025-01-28 16:21:50','',0,0,NULL,3,1920,1080,'#000',0,4,NULL,NULL,2,0,NULL,0,'qq'),(95,'Untitled 2025-01-28 16:21:32',1,'2025-01-28 16:21:32','2025-01-28 16:21:33',NULL,0,0,NULL,3,1920,1080,'#000',0,4,NULL,94,2,0,NULL,0,NULL),(96,'Untitled 2025-02-03 10:44:52',1,'2025-02-03 10:44:52','2025-02-03 10:44:52',NULL,0,0,NULL,3,1920,1080,'#000',0,4,NULL,NULL,2,0,NULL,0,NULL),(97,'Untitled 2025-02-03 10:44:52',1,'2025-02-03 10:44:52','2025-02-03 10:44:53',NULL,0,0,NULL,0,1920,1080,'#000',0,4,NULL,96,2,0,NULL,0,NULL),(98,'test',1,'2025-02-03 10:45:19','2025-02-03 10:45:19','',0,0,NULL,3,1920,1080,'#000',0,4,NULL,NULL,2,0,NULL,0,NULL),(99,'test',1,'2025-02-03 10:45:19','2025-02-03 10:45:19','',0,0,NULL,4,1920,1080,'#000',0,4,'[\"Empty Region\"]',98,2,0,NULL,0,NULL);
/*!40000 ALTER TABLE `layout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `layouthistory`
--

DROP TABLE IF EXISTS `layouthistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `layouthistory` (
  `layoutHistoryId` int NOT NULL AUTO_INCREMENT,
  `campaignId` int NOT NULL,
  `layoutId` int NOT NULL,
  `publishedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`layoutHistoryId`),
  KEY `campaignId` (`campaignId`),
  CONSTRAINT `layouthistory_ibfk_1` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `layouthistory`
--

LOCK TABLES `layouthistory` WRITE;
/*!40000 ALTER TABLE `layouthistory` DISABLE KEYS */;
INSERT INTO `layouthistory` VALUES (1,1,1,'2024-12-20 12:25:14'),(2,1,2,'2024-12-20 12:35:07'),(3,1,3,'2024-12-20 12:38:05'),(4,1,4,'2024-12-20 12:39:16'),(5,1,5,'2024-12-23 19:12:52'),(6,1,6,'2024-12-23 19:17:40'),(9,3,10,'2024-12-24 17:42:39'),(10,3,11,'2024-12-24 17:45:15'),(11,3,12,'2024-12-24 18:05:01'),(12,1,7,'2024-12-24 18:11:33'),(13,4,13,'2024-12-24 18:12:50'),(14,4,14,'2024-12-24 18:14:27'),(15,4,15,'2024-12-24 18:19:55'),(17,6,18,'2024-12-27 17:37:49'),(19,8,22,'2024-12-27 17:39:50'),(20,9,23,'2024-12-27 17:39:51'),(21,10,24,'2024-12-27 17:39:51'),(22,10,25,'2024-12-27 17:40:19'),(23,8,26,'2024-12-27 17:42:19'),(24,6,21,'2024-12-27 17:42:27'),(25,11,27,'2024-12-27 17:43:07'),(26,12,28,'2024-12-27 17:43:09'),(27,13,29,'2024-12-27 17:45:52'),(28,14,30,'2024-12-27 17:45:55'),(29,6,31,'2024-12-27 17:53:39'),(30,4,33,'2024-12-27 18:17:06'),(31,11,34,'2024-12-27 18:25:14'),(32,15,35,'2024-12-31 11:05:03'),(33,15,36,'2024-12-31 11:05:31'),(34,15,37,'2024-12-31 11:09:35'),(35,13,38,'2025-01-02 12:24:31'),(36,11,40,'2025-01-02 12:24:45'),(37,11,41,'2025-01-02 12:46:16'),(38,13,42,'2025-01-02 12:50:08'),(39,11,43,'2025-01-02 13:02:18'),(40,13,44,'2025-01-02 13:02:54'),(41,8,45,'2025-01-07 12:33:31'),(42,1,32,'2025-01-07 16:23:31'),(43,16,46,'2025-01-07 17:12:44'),(44,16,47,'2025-01-07 17:14:59'),(45,16,48,'2025-01-07 17:24:00'),(46,17,49,'2025-01-07 17:25:56'),(47,17,50,'2025-01-07 17:26:27'),(49,19,54,'2025-01-07 17:52:41'),(50,19,55,'2025-01-07 17:53:07'),(51,20,57,'2025-01-08 10:45:25'),(52,20,58,'2025-01-08 10:51:31'),(53,20,59,'2025-01-08 10:55:08'),(55,19,63,'2025-01-08 11:04:51'),(56,17,51,'2025-01-08 11:18:11'),(57,22,65,'2025-01-08 11:33:54'),(58,22,66,'2025-01-08 11:38:19'),(59,22,67,'2025-01-08 12:40:27'),(60,22,68,'2025-01-08 12:48:45'),(61,22,69,'2025-01-08 12:53:07'),(62,22,70,'2025-01-08 12:54:29'),(63,22,71,'2025-01-08 12:55:33'),(64,22,72,'2025-01-08 12:56:55'),(65,22,73,'2025-01-08 12:57:46'),(66,1,74,'2025-01-09 17:15:40'),(72,24,80,'2025-01-22 11:48:00'),(73,24,81,'2025-01-22 11:49:47'),(74,24,82,'2025-01-22 11:55:14'),(75,24,83,'2025-01-22 11:58:21'),(76,24,84,'2025-01-22 12:00:32'),(77,25,85,'2025-01-22 12:00:53'),(78,24,87,'2025-01-22 12:04:10'),(79,25,86,'2025-01-22 12:06:42'),(80,24,89,'2025-01-22 15:04:37'),(81,26,90,'2025-01-22 16:19:08'),(82,9,92,'2025-01-22 17:55:47'),(83,10,93,'2025-01-23 11:23:42'),(84,27,94,'2025-01-28 16:21:32'),(85,28,96,'2025-02-03 10:44:52'),(86,29,98,'2025-02-03 10:45:19');
/*!40000 ALTER TABLE `layouthistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkcampaigndisplaygroup`
--

DROP TABLE IF EXISTS `lkcampaigndisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkcampaigndisplaygroup` (
  `campaignId` int NOT NULL,
  `displayGroupId` int NOT NULL,
  PRIMARY KEY (`campaignId`,`displayGroupId`),
  KEY `displayGroupId` (`displayGroupId`),
  CONSTRAINT `lkcampaigndisplaygroup_ibfk_1` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`),
  CONSTRAINT `lkcampaigndisplaygroup_ibfk_2` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkcampaigndisplaygroup`
--

LOCK TABLES `lkcampaigndisplaygroup` WRITE;
/*!40000 ALTER TABLE `lkcampaigndisplaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkcampaigndisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkcampaignlayout`
--

DROP TABLE IF EXISTS `lkcampaignlayout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkcampaignlayout` (
  `lkCampaignLayoutId` int NOT NULL AUTO_INCREMENT,
  `campaignId` int NOT NULL,
  `layoutId` int NOT NULL,
  `displayOrder` int NOT NULL,
  `dayPartId` int DEFAULT NULL,
  `daysOfWeek` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `geoFence` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lkCampaignLayoutId`),
  UNIQUE KEY `campaignId` (`campaignId`,`layoutId`,`displayOrder`),
  KEY `layoutId` (`layoutId`),
  CONSTRAINT `lkcampaignlayout_ibfk_1` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`),
  CONSTRAINT `lkcampaignlayout_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkcampaignlayout`
--

LOCK TABLES `lkcampaignlayout` WRITE;
/*!40000 ALTER TABLE `lkcampaignlayout` DISABLE KEYS */;
INSERT INTO `lkcampaignlayout` VALUES (21,3,12,2,NULL,NULL,NULL),(46,14,30,1,NULL,NULL,NULL),(48,6,31,2,NULL,NULL,NULL),(52,4,33,2,NULL,NULL,NULL),(59,15,37,2,NULL,NULL,NULL),(62,12,28,1,NULL,NULL,NULL),(63,12,39,2,NULL,NULL,NULL),(71,11,43,2,NULL,NULL,NULL),(73,13,44,2,NULL,NULL,NULL),(75,8,45,2,NULL,NULL,NULL),(80,16,48,2,NULL,NULL,NULL),(85,17,51,2,NULL,NULL,NULL),(99,20,59,1,NULL,NULL,NULL),(100,20,60,2,NULL,NULL,NULL),(106,19,63,1,NULL,NULL,NULL),(107,19,64,2,NULL,NULL,NULL),(124,22,73,2,NULL,NULL,NULL),(126,1,74,2,NULL,NULL,NULL),(150,25,86,1,NULL,NULL,NULL),(151,25,88,2,NULL,NULL,NULL),(153,24,89,2,NULL,NULL,NULL),(155,26,90,1,NULL,NULL,NULL),(156,26,91,2,NULL,NULL,NULL),(158,9,92,2,NULL,NULL,NULL),(160,10,93,2,NULL,NULL,NULL),(162,27,94,1,NULL,NULL,NULL),(163,27,95,2,NULL,NULL,NULL),(165,28,96,1,NULL,NULL,NULL),(166,28,97,2,NULL,NULL,NULL),(168,29,98,1,NULL,NULL,NULL),(169,29,99,2,NULL,NULL,NULL);
/*!40000 ALTER TABLE `lkcampaignlayout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkcommanddisplayprofile`
--

DROP TABLE IF EXISTS `lkcommanddisplayprofile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkcommanddisplayprofile` (
  `commandId` int NOT NULL,
  `displayProfileId` int NOT NULL,
  `commandString` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validationString` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createAlertOn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`commandId`,`displayProfileId`),
  KEY `displayProfileId` (`displayProfileId`),
  CONSTRAINT `lkcommanddisplayprofile_ibfk_1` FOREIGN KEY (`commandId`) REFERENCES `command` (`commandId`),
  CONSTRAINT `lkcommanddisplayprofile_ibfk_2` FOREIGN KEY (`displayProfileId`) REFERENCES `displayprofile` (`displayProfileId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkcommanddisplayprofile`
--

LOCK TABLES `lkcommanddisplayprofile` WRITE;
/*!40000 ALTER TABLE `lkcommanddisplayprofile` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkcommanddisplayprofile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkdgdg`
--

DROP TABLE IF EXISTS `lkdgdg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkdgdg` (
  `parentId` int NOT NULL,
  `childId` int NOT NULL,
  `depth` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `parentId` (`parentId`,`childId`,`depth`),
  KEY `childId` (`childId`,`parentId`,`depth`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkdgdg`
--

LOCK TABLES `lkdgdg` WRITE;
/*!40000 ALTER TABLE `lkdgdg` DISABLE KEYS */;
INSERT INTO `lkdgdg` VALUES (10,10,0,10),(11,11,0,11),(12,12,0,12),(13,13,0,13),(14,14,0,14);
/*!40000 ALTER TABLE `lkdgdg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkdisplaydg`
--

DROP TABLE IF EXISTS `lkdisplaydg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkdisplaydg` (
  `LkDisplayDGID` int NOT NULL AUTO_INCREMENT,
  `displayGroupId` int NOT NULL,
  `displayId` int NOT NULL,
  PRIMARY KEY (`LkDisplayDGID`),
  UNIQUE KEY `displayGroupId` (`displayGroupId`,`displayId`),
  KEY `displayId` (`displayId`),
  CONSTRAINT `lkdisplaydg_ibfk_1` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`),
  CONSTRAINT `lkdisplaydg_ibfk_2` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkdisplaydg`
--

LOCK TABLES `lkdisplaydg` WRITE;
/*!40000 ALTER TABLE `lkdisplaydg` DISABLE KEYS */;
INSERT INTO `lkdisplaydg` VALUES (10,10,10),(13,11,10),(12,12,11),(15,13,12),(22,14,10),(23,14,11),(24,14,12);
/*!40000 ALTER TABLE `lkdisplaydg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lklayoutdisplaygroup`
--

DROP TABLE IF EXISTS `lklayoutdisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lklayoutdisplaygroup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `displayGroupId` int NOT NULL,
  `layoutId` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `displayGroupId` (`displayGroupId`,`layoutId`),
  KEY `layoutId` (`layoutId`),
  CONSTRAINT `lklayoutdisplaygroup_ibfk_1` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`),
  CONSTRAINT `lklayoutdisplaygroup_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lklayoutdisplaygroup`
--

LOCK TABLES `lklayoutdisplaygroup` WRITE;
/*!40000 ALTER TABLE `lklayoutdisplaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lklayoutdisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkmediadisplaygroup`
--

DROP TABLE IF EXISTS `lkmediadisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkmediadisplaygroup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `displayGroupId` int NOT NULL,
  `mediaId` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `displayGroupId` (`displayGroupId`,`mediaId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `lkmediadisplaygroup_ibfk_1` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`),
  CONSTRAINT `lkmediadisplaygroup_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkmediadisplaygroup`
--

LOCK TABLES `lkmediadisplaygroup` WRITE;
/*!40000 ALTER TABLE `lkmediadisplaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkmediadisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lknotificationdg`
--

DROP TABLE IF EXISTS `lknotificationdg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lknotificationdg` (
  `lkNotificationDgId` int NOT NULL AUTO_INCREMENT,
  `notificationId` int NOT NULL,
  `displayGroupId` int NOT NULL,
  PRIMARY KEY (`lkNotificationDgId`),
  UNIQUE KEY `notificationId` (`notificationId`,`displayGroupId`),
  CONSTRAINT `lknotificationdg_ibfk_1` FOREIGN KEY (`notificationId`) REFERENCES `notification` (`notificationId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lknotificationdg`
--

LOCK TABLES `lknotificationdg` WRITE;
/*!40000 ALTER TABLE `lknotificationdg` DISABLE KEYS */;
/*!40000 ALTER TABLE `lknotificationdg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lknotificationgroup`
--

DROP TABLE IF EXISTS `lknotificationgroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lknotificationgroup` (
  `lkNotificationGroupId` int NOT NULL AUTO_INCREMENT,
  `notificationId` int NOT NULL,
  `groupId` int NOT NULL,
  PRIMARY KEY (`lkNotificationGroupId`),
  UNIQUE KEY `notificationId` (`notificationId`,`groupId`),
  KEY `groupId` (`groupId`),
  CONSTRAINT `lknotificationgroup_ibfk_1` FOREIGN KEY (`notificationId`) REFERENCES `notification` (`notificationId`),
  CONSTRAINT `lknotificationgroup_ibfk_2` FOREIGN KEY (`groupId`) REFERENCES `group` (`groupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lknotificationgroup`
--

LOCK TABLES `lknotificationgroup` WRITE;
/*!40000 ALTER TABLE `lknotificationgroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lknotificationgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lknotificationuser`
--

DROP TABLE IF EXISTS `lknotificationuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lknotificationuser` (
  `lkNotificationUserId` int NOT NULL AUTO_INCREMENT,
  `notificationId` int NOT NULL,
  `userId` int NOT NULL,
  `read` tinyint NOT NULL,
  `readDt` int NOT NULL,
  `emailDt` int NOT NULL,
  PRIMARY KEY (`lkNotificationUserId`),
  UNIQUE KEY `notificationId` (`notificationId`,`userId`),
  KEY `userId` (`userId`),
  CONSTRAINT `lknotificationuser_ibfk_1` FOREIGN KEY (`notificationId`) REFERENCES `notification` (`notificationId`),
  CONSTRAINT `lknotificationuser_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lknotificationuser`
--

LOCK TABLES `lknotificationuser` WRITE;
/*!40000 ALTER TABLE `lknotificationuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `lknotificationuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkplaylistplaylist`
--

DROP TABLE IF EXISTS `lkplaylistplaylist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkplaylistplaylist` (
  `parentId` int NOT NULL,
  `childId` int NOT NULL,
  `depth` int NOT NULL,
  PRIMARY KEY (`parentId`,`childId`,`depth`),
  UNIQUE KEY `childId` (`childId`,`parentId`,`depth`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkplaylistplaylist`
--

LOCK TABLES `lkplaylistplaylist` WRITE;
/*!40000 ALTER TABLE `lkplaylistplaylist` DISABLE KEYS */;
INSERT INTO `lkplaylistplaylist` VALUES (21,21,0),(22,22,0),(45,45,0),(46,46,0),(48,48,0),(49,49,0),(50,50,0),(51,51,0),(55,55,0),(56,56,0),(57,57,0),(64,64,0),(65,65,0),(68,68,0),(69,69,0),(80,80,0),(81,81,0),(82,82,0),(83,83,0),(84,84,0),(85,85,0),(87,87,0),(89,89,0),(90,90,0),(93,93,0),(94,94,0),(97,97,0),(98,98,0),(107,107,0),(108,108,0),(109,109,0),(110,110,0),(111,111,0),(112,112,0),(116,116,0),(117,117,0),(118,118,0),(119,119,0),(120,120,0),(121,121,0),(137,137,0),(138,138,0),(139,139,0),(140,140,0),(141,141,0),(183,183,0),(188,188,0),(189,189,0),(190,190,0),(194,194,0),(198,198,0),(199,199,0),(200,200,0),(201,201,0),(202,202,0),(203,203,0),(204,204,0),(205,205,0),(206,206,0),(207,207,0),(208,208,0),(209,209,0),(210,210,0);
/*!40000 ALTER TABLE `lkplaylistplaylist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkscheduledisplaygroup`
--

DROP TABLE IF EXISTS `lkscheduledisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkscheduledisplaygroup` (
  `eventId` int NOT NULL,
  `displayGroupId` int NOT NULL,
  PRIMARY KEY (`eventId`,`displayGroupId`),
  KEY `displayGroupId` (`displayGroupId`),
  CONSTRAINT `lkscheduledisplaygroup_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`),
  CONSTRAINT `lkscheduledisplaygroup_ibfk_2` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkscheduledisplaygroup`
--

LOCK TABLES `lkscheduledisplaygroup` WRITE;
/*!40000 ALTER TABLE `lkscheduledisplaygroup` DISABLE KEYS */;
INSERT INTO `lkscheduledisplaygroup` VALUES (23,10),(18,13);
/*!40000 ALTER TABLE `lkscheduledisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktagcampaign`
--

DROP TABLE IF EXISTS `lktagcampaign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lktagcampaign` (
  `lkTagCampaignId` int NOT NULL AUTO_INCREMENT,
  `tagId` int NOT NULL,
  `campaignId` int NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lkTagCampaignId`),
  UNIQUE KEY `tagId` (`tagId`,`campaignId`),
  KEY `campaignId` (`campaignId`),
  CONSTRAINT `lktagcampaign_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktagcampaign_ibfk_2` FOREIGN KEY (`campaignId`) REFERENCES `campaign` (`campaignId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktagcampaign`
--

LOCK TABLES `lktagcampaign` WRITE;
/*!40000 ALTER TABLE `lktagcampaign` DISABLE KEYS */;
/*!40000 ALTER TABLE `lktagcampaign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktagdisplaygroup`
--

DROP TABLE IF EXISTS `lktagdisplaygroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lktagdisplaygroup` (
  `lkTagDisplayGroupId` int NOT NULL AUTO_INCREMENT,
  `tagId` int NOT NULL,
  `displayGroupId` int NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lkTagDisplayGroupId`),
  UNIQUE KEY `tagId` (`tagId`,`displayGroupId`),
  KEY `displayGroupId` (`displayGroupId`),
  CONSTRAINT `lktagdisplaygroup_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktagdisplaygroup_ibfk_2` FOREIGN KEY (`displayGroupId`) REFERENCES `displaygroup` (`displayGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktagdisplaygroup`
--

LOCK TABLES `lktagdisplaygroup` WRITE;
/*!40000 ALTER TABLE `lktagdisplaygroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `lktagdisplaygroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktaglayout`
--

DROP TABLE IF EXISTS `lktaglayout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lktaglayout` (
  `lkTagLayoutId` int NOT NULL AUTO_INCREMENT,
  `tagId` int NOT NULL,
  `layoutId` int NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lkTagLayoutId`),
  UNIQUE KEY `tagId` (`tagId`,`layoutId`),
  KEY `layoutId` (`layoutId`),
  CONSTRAINT `lktaglayout_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktaglayout_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktaglayout`
--

LOCK TABLES `lktaglayout` WRITE;
/*!40000 ALTER TABLE `lktaglayout` DISABLE KEYS */;
INSERT INTO `lktaglayout` VALUES (1,4,31,''),(2,4,45,''),(3,4,92,''),(4,4,93,''),(5,4,43,''),(6,4,28,''),(7,4,44,''),(8,4,30,''),(9,1,98,'');
/*!40000 ALTER TABLE `lktaglayout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktagmedia`
--

DROP TABLE IF EXISTS `lktagmedia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lktagmedia` (
  `lkTagMediaId` int NOT NULL AUTO_INCREMENT,
  `tagId` int NOT NULL,
  `mediaId` int NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lkTagMediaId`),
  UNIQUE KEY `tagId` (`tagId`,`mediaId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `lktagmedia_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktagmedia_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktagmedia`
--

LOCK TABLES `lktagmedia` WRITE;
/*!40000 ALTER TABLE `lktagmedia` DISABLE KEYS */;
INSERT INTO `lktagmedia` VALUES (1,4,7,''),(2,4,8,''),(3,4,9,''),(4,4,10,''),(5,4,11,''),(6,4,12,''),(7,4,13,''),(8,4,14,''),(9,4,15,''),(10,4,16,''),(11,4,17,''),(12,4,18,''),(13,4,19,''),(14,4,20,''),(15,4,21,''),(16,4,22,''),(17,4,23,''),(18,4,24,''),(19,4,25,''),(20,4,26,''),(21,4,27,''),(22,4,28,''),(23,4,29,''),(24,4,30,''),(25,4,32,''),(26,4,31,''),(27,4,33,''),(28,4,34,''),(29,4,35,''),(30,4,36,''),(31,4,37,''),(32,4,39,''),(33,4,38,''),(34,4,40,''),(35,4,41,''),(36,4,43,''),(37,4,44,''),(38,4,45,''),(39,4,42,''),(40,4,46,''),(41,4,47,''),(42,4,48,''),(43,4,49,''),(44,4,50,''),(45,4,51,''),(46,4,52,''),(47,4,53,''),(48,4,54,''),(49,4,55,''),(50,4,56,''),(51,4,57,''),(52,4,58,''),(53,4,59,''),(54,4,60,''),(55,4,61,''),(56,4,62,''),(57,4,63,''),(58,4,64,''),(59,4,65,''),(60,4,66,''),(61,4,67,''),(62,4,68,''),(63,4,69,''),(64,4,70,''),(65,4,71,''),(66,4,72,''),(67,4,73,''),(68,4,74,''),(69,4,75,''),(70,4,76,''),(71,4,77,''),(72,4,78,''),(73,4,79,''),(74,4,80,''),(75,4,81,''),(76,4,82,''),(77,4,83,''),(78,4,84,''),(79,4,85,''),(80,4,86,''),(81,4,87,''),(82,4,88,'');
/*!40000 ALTER TABLE `lktagmedia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lktagplaylist`
--

DROP TABLE IF EXISTS `lktagplaylist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lktagplaylist` (
  `lkTagPlaylistId` int NOT NULL AUTO_INCREMENT,
  `tagId` int NOT NULL,
  `playlistId` int NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`lkTagPlaylistId`),
  UNIQUE KEY `tagId` (`tagId`,`playlistId`),
  KEY `lktagplaylist_ibfk_2` (`playlistId`),
  CONSTRAINT `lktagplaylist_ibfk_1` FOREIGN KEY (`tagId`) REFERENCES `tag` (`tagId`),
  CONSTRAINT `lktagplaylist_ibfk_2` FOREIGN KEY (`playlistId`) REFERENCES `playlist` (`playlistId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lktagplaylist`
--

LOCK TABLES `lktagplaylist` WRITE;
/*!40000 ALTER TABLE `lktagplaylist` DISABLE KEYS */;
/*!40000 ALTER TABLE `lktagplaylist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkusergroup`
--

DROP TABLE IF EXISTS `lkusergroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkusergroup` (
  `lkUserGroupID` int NOT NULL AUTO_INCREMENT,
  `groupId` int NOT NULL,
  `userId` int NOT NULL,
  PRIMARY KEY (`lkUserGroupID`),
  UNIQUE KEY `groupId` (`groupId`,`userId`),
  KEY `userId` (`userId`),
  CONSTRAINT `lkusergroup_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `group` (`groupId`),
  CONSTRAINT `lkusergroup_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkusergroup`
--

LOCK TABLES `lkusergroup` WRITE;
/*!40000 ALTER TABLE `lkusergroup` DISABLE KEYS */;
INSERT INTO `lkusergroup` VALUES (1,3,1),(3,8,2),(2,9,2);
/*!40000 ALTER TABLE `lkusergroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkwidgetaudio`
--

DROP TABLE IF EXISTS `lkwidgetaudio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkwidgetaudio` (
  `widgetId` int NOT NULL,
  `mediaId` int NOT NULL,
  `volume` tinyint NOT NULL,
  `loop` tinyint NOT NULL,
  PRIMARY KEY (`widgetId`,`mediaId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `lkwidgetaudio_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`),
  CONSTRAINT `lkwidgetaudio_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkwidgetaudio`
--

LOCK TABLES `lkwidgetaudio` WRITE;
/*!40000 ALTER TABLE `lkwidgetaudio` DISABLE KEYS */;
/*!40000 ALTER TABLE `lkwidgetaudio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lkwidgetmedia`
--

DROP TABLE IF EXISTS `lkwidgetmedia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lkwidgetmedia` (
  `widgetId` int NOT NULL,
  `mediaId` int NOT NULL,
  PRIMARY KEY (`widgetId`,`mediaId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `lkwidgetmedia_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`),
  CONSTRAINT `lkwidgetmedia_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lkwidgetmedia`
--

LOCK TABLES `lkwidgetmedia` WRITE;
/*!40000 ALTER TABLE `lkwidgetmedia` DISABLE KEYS */;
INSERT INTO `lkwidgetmedia` VALUES (323,2),(16,3),(134,4),(135,6),(130,7),(289,8),(322,8),(404,8),(138,9),(290,9),(303,9),(306,9),(386,9),(405,9),(294,10),(302,10),(305,10),(392,10),(296,11),(397,11),(158,12),(389,12),(393,12),(391,13),(396,14),(394,15),(398,16),(395,17),(400,18),(399,19),(402,20),(139,21),(157,21),(385,21),(406,21),(401,22),(403,23),(257,24),(269,25),(377,25),(88,26),(194,26),(387,26),(261,27),(90,28),(196,28),(77,29),(183,29),(388,29),(266,30),(91,31),(159,31),(197,31),(259,32),(80,33),(186,33),(263,34),(74,35),(180,35),(267,36),(264,37),(76,38),(182,38),(258,39),(256,40),(84,41),(190,41),(268,42),(92,43),(198,43),(79,44),(185,44),(89,45),(195,45),(262,46),(72,47),(178,47),(260,48),(73,49),(179,49),(265,50),(81,51),(187,51),(78,52),(184,52),(75,53),(181,53),(95,54),(201,54),(82,55),(188,55),(83,56),(189,56),(86,57),(192,57),(85,58),(191,58),(93,59),(199,59),(87,60),(193,60),(97,61),(203,61),(94,62),(200,62),(96,63),(202,63),(271,64),(310,64),(312,64),(288,65),(287,66),(272,67),(286,68),(285,69),(284,70),(276,71),(283,72),(281,73),(279,74),(278,75),(273,76),(280,77),(274,78),(275,79),(282,80),(277,81),(120,82),(124,83),(122,84),(128,85),(118,86),(126,87),(117,88),(119,88),(121,88),(123,88),(125,88),(127,88),(129,88);
/*!40000 ALTER TABLE `lkwidgetmedia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log` (
  `logId` int NOT NULL AUTO_INCREMENT,
  `runNo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logDate` datetime DEFAULT NULL,
  `channel` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int NOT NULL DEFAULT '0',
  `displayId` int DEFAULT NULL,
  `sessionHistoryId` int DEFAULT NULL,
  `requestId` int DEFAULT NULL,
  PRIMARY KEY (`logId`),
  KEY `logDate` (`logDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media` (
  `mediaId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int NOT NULL,
  `originalFileName` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storedAs` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `md5` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fileSize` bigint DEFAULT NULL,
  `userId` int NOT NULL,
  `retired` tinyint NOT NULL DEFAULT '0',
  `isEdited` tinyint NOT NULL DEFAULT '0',
  `editedMediaId` int DEFAULT NULL,
  `moduleSystemFile` tinyint NOT NULL DEFAULT '0',
  `valid` tinyint NOT NULL DEFAULT '1',
  `expires` int DEFAULT NULL,
  `released` tinyint NOT NULL DEFAULT '1',
  `apiRef` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  `enableStat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folderId` int NOT NULL DEFAULT '1',
  `permissionsFolderId` int NOT NULL DEFAULT '1',
  `orientation` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` mediumint DEFAULT NULL,
  `height` mediumint DEFAULT NULL,
  PRIMARY KEY (`mediaId`),
  KEY `userId` (`userId`),
  KEY `editedMediaId` (`editedMediaId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `media_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `media_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'Screenshot from 2024-12-19 10-58-11.png','image',10,'Screenshot from 2024-12-19 10-58-11.png','1.png','317f52aee4d85950e107836bb372c2b0',487443,1,0,0,NULL,0,1,NULL,1,NULL,'2024-12-20 12:25:42','2024-12-20 12:25:42','Inherit',1,1,'landscape',1920,1080),(2,'Screenshot from 2024-12-18 11-41-51.png','image',10,'Screenshot from 2024-12-18 11-41-51.png','2.png','14801ec4f7295272d117dc285dbf5c8b',344473,1,0,0,NULL,0,1,NULL,1,NULL,'2024-12-20 12:25:42','2024-12-20 12:25:42','Inherit',1,1,'landscape',1920,1080),(3,'Airtel 4G –The Fastest Network Ever.mp4','video',100,'Airtel 4G –The Fastest Network Ever.mp4','3.mp4','1bc6d679ed6e4c5ca61fe2e2d85026ed',24534911,1,0,0,0,0,1,0,1,NULL,'2024-12-24 17:43:40','2024-12-24 17:43:40','Inherit',1,1,'landscape',1280,720),(4,'Screenshot from 2024-12-20 14-31-52.png','image',10,'Screenshot from 2024-12-20 14-31-52.png','4.png','8f8e20c24b503a10067e40e30bf838c0',230083,1,0,0,NULL,0,1,NULL,1,NULL,'2024-12-24 18:13:38','2024-12-24 18:13:38','Inherit',1,1,'landscape',1920,1080),(6,'Screenshot from 2024-12-20 14-42-44.png','image',10,'Screenshot from 2024-12-20 14-42-44.png','6.png','cc9f5a2c74d6aa3ee689ab73b20ccdb6',982970,1,0,0,NULL,0,1,NULL,1,NULL,'2024-12-24 18:13:38','2024-12-24 18:13:38','Inherit',1,1,'landscape',1920,1080),(7,'VID-20241003-WA0023.mp4','video',51,'VID-20241003-WA0023.mp4','7.mp4','9ce7fda9d83668413c3f6caac2139cf3',11203784,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:37:49','2024-12-27 17:37:49','Inherit',1,1,NULL,NULL,NULL),(8,'272050.jpg','image',10,'272050.jpg','8.jpg','295f9bb91b54c469678576bc418c36c0',221413,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:50','2024-12-27 17:39:50','Inherit',1,1,'landscape',1920,1080),(9,'272214.jpg','image',10,'272214.jpg','9.jpg','19f6fc792e96b72a62be210748e65f9d',150885,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:50','2024-12-27 17:39:50','Inherit',1,1,'landscape',1920,1080),(10,'277.jpg','image',10,'277.jpg','10.jpg','ed6a8d951a36303152aefa6028e619a0',146403,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:50','2024-12-27 17:39:50','Inherit',1,1,'landscape',1920,1080),(11,'278.jpg','image',10,'278.jpg','11.jpg','c5e8a1f1c6c2bfbc9f1d6598f43cf0d7',135608,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'landscape',1920,1080),(12,'279.jpg','image',10,'279.jpg','12.jpg','8afb187a1a738d0a83b2063f98d0dd5c',106116,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'landscape',1920,1080),(13,'280.jpg','image',10,'280.jpg','13.jpg','49cd2a1898939fc74700e984b3ddd9a5',111947,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'landscape',1920,1080),(14,'281.jpg','image',10,'281.jpg','14.jpg','b940e06a287cea85c9f1457ba96a12d5',105611,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'landscape',1920,1080),(15,'282.jpg','image',10,'282.jpg','15.jpg','eb4b5af1a4bb586b50fb78c38c1dc5e1',174219,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'landscape',1920,1080),(16,'288.png','image',10,'288.png','16.png','e36acce6b8c4daf5cd87c2b48b0e214d',258957,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'landscape',1920,1165),(17,'290.png','image',10,'290.png','17.png','5a59876a6c31b9b220a9d6cd4f7dddea',357189,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'portrait',1080,1920),(18,'demo.mp4','video',30,'demo.mp4','18.mp4','d9061d3da8601932e98f79ec8ba1c877',1570024,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,NULL,NULL,NULL),(19,'SBI_demo_video.mp4','video',164,'SBI_demo_video.mp4','19.mp4','39167187f050dcd907efb7492b349b9c',4643506,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,NULL,NULL,NULL),(20,'271963.jpg','image',10,'271963.jpg','20.jpg','bc73e40650f21b438e313087646ad3bf',204785,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'landscape',1920,1080),(21,'272126.jpg','image',10,'272126.jpg','21.jpg','71553901c04730ed221b13762caa7dfd',434397,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'landscape',1920,1080),(22,'SBI EDUCATION 20SEC REV (1).mp4','video',20,'SBI EDUCATION 20SEC REV (1).mp4','22.mp4','6bcf64145ae14fbe5c06526e74717000',60990364,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,NULL,NULL,NULL),(23,'tim-marshall.jpg','image',10,'tim-marshall.jpg','23.jpg','a4245038bef6e4a8035e7a486491dec1',556164,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:39:51','2024-12-27 17:39:51','Inherit',1,1,'landscape',1920,1080),(24,'1350196-hd_1920_1080_30fps.mp4','video',7,'1350196-hd_1920_1080_30fps.mp4','24.mp4','cd772bc05ec5a937f6cf735810b3f89e',5018007,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(25,'1826896-hd_1920_1080_24fps.mp4','video',82,'1826896-hd_1920_1080_24fps.mp4','25.mp4','98fa763b3ea219a8d536871ea2a273d9',57794812,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(26,'1151329-hd_1920_1080_30fps.mp4','video',21,'1151329-hd_1920_1080_30fps.mp4','26.mp4','08bf254ce1f0fed8140bb69ec5160f5a',13660234,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(27,'1908424-hd_1920_1080_25fps.mp4','video',8,'1908424-hd_1920_1080_25fps.mp4','27.mp4','8f3cb2c729474fcde3feadc1db2446fa',5705150,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(28,'1151962-hd_1920_1080_30fps.mp4','video',16,'1151962-hd_1920_1080_30fps.mp4','28.mp4','42075c863c750fef9ba322a9a7205478',10398215,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(29,'1345932-hd_1920_1080_30fps.mp4','video',9,'1345932-hd_1920_1080_30fps.mp4','29.mp4','68e391e94a83482c8cf0e200c4b1f0c0',5909459,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(30,'2088290-hd_1920_1080_30fps.mp4','video',37,'2088290-hd_1920_1080_30fps.mp4','30.mp4','ba68dd0eb13a0b3f9bc782aed24f4f70',26760832,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(31,'1676150-hd_1920_1080_30fps.mp4','video',34,'1676150-hd_1920_1080_30fps.mp4','31.mp4','1bcb55c680a6b448ada98955947a7bd3',24735336,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(32,'2252797-hd_1920_1080_30fps.mp4','video',17,'2252797-hd_1920_1080_30fps.mp4','32.mp4','c676355db006970cab76e6b2aa1e5f43',7394775,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(33,'1908426-hd_1920_1080_25fps.mp4','video',8,'1908426-hd_1920_1080_25fps.mp4','33.mp4','c2b909edbc0ebaac0e414ce7584a73b9',4874033,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(34,'2324274-hd_1920_1080_25fps.mp4','video',21,'2324274-hd_1920_1080_25fps.mp4','34.mp4','4fa3458ef400a839a0596ddcbf1dfdca',13291031,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(35,'2019791-hd_1920_1080_30fps.mp4','video',20,'2019791-hd_1920_1080_30fps.mp4','35.mp4','7434762ec56d6e0a6d8c4c6e72f91e8f',6621875,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(36,'2675508-hd_1920_1080_24fps.mp4','video',12,'2675508-hd_1920_1080_24fps.mp4','36.mp4','0b01e575a8f9a84aca415cf8fa26f43d',7319971,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(37,'2836030-hd_1920_1080_24fps.mp4','video',15,'2836030-hd_1920_1080_24fps.mp4','37.mp4','917a7d237894f686f608b08d2e98d5af',11294055,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(38,'2098988-hd_1920_1080_30fps.mp4','video',33,'2098988-hd_1920_1080_30fps.mp4','38.mp4','1e1f0ec77f0b2285215211853db6fd94',24162791,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(39,'3015510-hd_1920_1080_24fps.mp4','video',19,'3015510-hd_1920_1080_24fps.mp4','39.mp4','bfff9edb4923d7f8b26239e10efdbee6',6234342,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(40,'3826855-hd_1920_1080_24fps.mp4','video',11,'3826855-hd_1920_1080_24fps.mp4','40.mp4','a9c190c40eb679fcc457099c5c4ebe03',5540670,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(41,'2098989-hd_1920_1080_30fps.mp4','video',36,'2098989-hd_1920_1080_30fps.mp4','41.mp4','19d501330abafdf000f5cc6b654eee28',26098035,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:06','2024-12-27 17:43:06','Inherit',1,1,NULL,NULL,NULL),(42,'855431-hd_1920_1080_24fps.mp4','video',133,'855431-hd_1920_1080_24fps.mp4','42.mp4','fa0443bc7d02210c0f8189f08d379fc0',45805387,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(43,'2365383-hd_1920_1080_24fps.mp4','video',19,'2365383-hd_1920_1080_24fps.mp4','43.mp4','7bc36f59473105a2c789e4a2fa7a2fd5',8881254,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(44,'2376809-hd_1920_1080_24fps.mp4','video',6,'2376809-hd_1920_1080_24fps.mp4','44.mp4','9e0cf0d4b09b8172f35003f5099d0236',3689110,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(45,'2557356-hd_1920_1080_25fps.mp4','video',4,'2557356-hd_1920_1080_25fps.mp4','45.mp4','820d0c2acc95e253f0d74ff26a8665bc',2674720,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(46,'855633-hd_1920_1080_25fps.mp4','video',20,'855633-hd_1920_1080_25fps.mp4','46.mp4','749a4161121524e81dfd328b84ca2e58',12056087,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(47,'2616637-hd_1920_1080_30fps.mp4','video',30,'2616637-hd_1920_1080_30fps.mp4','47.mp4','02a552e5e0229327b1e156b566fed289',21819255,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(48,'857018-hd_1920_1080_30fps.mp4','video',16,'857018-hd_1920_1080_30fps.mp4','48.mp4','6239d06d288a585e1ee50e2ae12d0ba5',9539385,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(49,'2675509-hd_1920_1080_24fps.mp4','video',13,'2675509-hd_1920_1080_24fps.mp4','49.mp4','b4b0e7d7d320868080f347c4b33cc399',7385702,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(50,'8686025-hd_1920_1080_30fps.mp4','video',14,'8686025-hd_1920_1080_30fps.mp4','50.mp4','3070a544f1e616ac9cb102dee2520a92',9507754,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(51,'2924583-hd_1920_1080_30fps.mp4','video',38,'2924583-hd_1920_1080_30fps.mp4','51.mp4','fabbd3134b90561a74da1615214f0b0e',27888037,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(52,'3009375-hd_1920_1080_30fps.mp4','video',21,'3009375-hd_1920_1080_30fps.mp4','52.mp4','d0f8630befeae30108db6cda1ea8233a',13915628,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(53,'3048880-hd_1920_1080_24fps.mp4','video',7,'3048880-hd_1920_1080_24fps.mp4','53.mp4','4efa27589b658e1acdf90db9493dc796',4820499,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(54,'3125396-hd_1920_1080_25fps.mp4','video',10,'3125396-hd_1920_1080_25fps.mp4','54.mp4','2b527531564496f635aad34d2d6e9ca1',5316058,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(55,'3195945-hd_1920_1080_25fps.mp4','video',22,'3195945-hd_1920_1080_25fps.mp4','55.mp4','e68c9658f3288bc65c4163a58ff7a93f',12718979,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:07','2024-12-27 17:43:07','Inherit',1,1,NULL,NULL,NULL),(56,'3196566-hd_1920_1080_25fps.mp4','video',15,'3196566-hd_1920_1080_25fps.mp4','56.mp4','0a139f5378f80f1d10b629d7634979e1',10812904,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:08','2024-12-27 17:43:08','Inherit',1,1,NULL,NULL,NULL),(57,'3209213-hd_1920_1080_25fps.mp4','video',14,'3209213-hd_1920_1080_25fps.mp4','57.mp4','8203bd6131aa0f9e309e950eed4b9e1f',7189828,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:08','2024-12-27 17:43:08','Inherit',1,1,NULL,NULL,NULL),(58,'3695949-hd_1920_1080_24fps.mp4','video',16,'3695949-hd_1920_1080_24fps.mp4','58.mp4','f22e374d0a11a1d4ca7a6eb1eb1a41f5',10609984,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:08','2024-12-27 17:43:08','Inherit',1,1,NULL,NULL,NULL),(59,'3743517-hd_1920_1080_30fps.mp4','video',10,'3743517-hd_1920_1080_30fps.mp4','59.mp4','0d1c7b4d068e8d22c3c912212d283f53',4985562,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:08','2024-12-27 17:43:08','Inherit',1,1,NULL,NULL,NULL),(60,'6035932-hd_1920_1080_25fps.mp4','video',22,'6035932-hd_1920_1080_25fps.mp4','60.mp4','643a5daa5532e7e5a2cd1af7fb42c6c0',15078782,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:08','2024-12-27 17:43:08','Inherit',1,1,NULL,NULL,NULL),(61,'7246228-hd_1920_1080_24fps.mp4','video',27,'7246228-hd_1920_1080_24fps.mp4','61.mp4','46be3d874b744bd820ef7188b209220a',19966679,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:08','2024-12-27 17:43:08','Inherit',1,1,NULL,NULL,NULL),(62,'8435471-hd_1920_1080_25fps.mp4','video',16,'8435471-hd_1920_1080_25fps.mp4','62.mp4','5c7a07ffb4c9456a2728acec7711fbd8',2900408,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:08','2024-12-27 17:43:08','Inherit',1,1,NULL,NULL,NULL),(63,'855436-hd_1920_1080_30fps.mp4','video',29,'855436-hd_1920_1080_30fps.mp4','63.mp4','a62c58412df4efd33d46e80f00b09457',17544602,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:43:09','2024-12-27 17:43:09','Inherit',1,1,NULL,NULL,NULL),(64,'11460615-hd_1920_1080_25fps.mp4','video',10,'11460615-hd_1920_1080_25fps.mp4','64.mp4','4b58e7348dd11b80993bba45aea1f262',7933792,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(65,'1908423-uhd_3840_2160_25fps.mp4','video',8,'1908423-uhd_3840_2160_25fps.mp4','65.mp4','db1ca1298b9ed8892aff1fbf360337cd',23746941,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(66,'2480792-hd_1920_1080_24fps.mp4','video',41,'2480792-hd_1920_1080_24fps.mp4','66.mp4','74f8c83246ddea155cb61eb88d064fa5',29700973,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(67,'2863422-hd_1920_1080_24fps.mp4','video',12,'2863422-hd_1920_1080_24fps.mp4','67.mp4','11ee1aff7dfccfe8fc56999c1a50a554',8349849,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(68,'3042473-hd_1920_1080_30fps.mp4','video',17,'3042473-hd_1920_1080_30fps.mp4','68.mp4','6d43b00d8ad64959ca1c636af4d18749',11801745,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(69,'3196565-hd_1920_1080_25fps.mp4','video',11,'3196565-hd_1920_1080_25fps.mp4','69.mp4','1a8d08e4b08f6a9ce9c2ce76b6eeaea4',7693052,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(70,'3326745-hd_1920_1080_24fps.mp4','video',11,'3326745-hd_1920_1080_24fps.mp4','70.mp4','660350a35ee734316b3b3d55ebe3040a',6179296,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(71,'3571264-hd_1920_1080_30fps.mp4','video',33,'3571264-hd_1920_1080_30fps.mp4','71.mp4','226a168c084bba35ed8de65c5eea0473',12645253,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(72,'3875283-hd_1920_1080_25fps.mp4','video',5,'3875283-hd_1920_1080_25fps.mp4','72.mp4','8a346398c0bb526e5f34de90f4774006',3490839,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(73,'4104890-hd_1920_1080_30fps.mp4','video',10,'4104890-hd_1920_1080_30fps.mp4','73.mp4','7742a01782cddfba6673f5f45d0f6aba',4336305,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(74,'4174024-hd_1920_1080_24fps.mp4','video',32,'4174024-hd_1920_1080_24fps.mp4','74.mp4','7dc4807fa0680d182e1195a5506d946a',23354366,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(75,'4625207-hd_1920_1080_25fps.mp4','video',7,'4625207-hd_1920_1080_25fps.mp4','75.mp4','9ad170090cacb35cc9473adad527425a',4662194,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(76,'4961699-hd_1920_1080_25fps.mp4','video',17,'4961699-hd_1920_1080_25fps.mp4','76.mp4','7720fbef0a544903f9d0503452f9553e',6901895,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(77,'5200358-hd_1920_1080_25fps.mp4','video',15,'5200358-hd_1920_1080_25fps.mp4','77.mp4','b5ff6021909f094aec7ac66311d76c81',10931334,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(78,'6263625-hd_1920_1080_25fps.mp4','video',7,'6263625-hd_1920_1080_25fps.mp4','78.mp4','251a976f1560356a6eb2b03478ff17fa',4741191,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(79,'8065080-hd_1920_1080_24fps.mp4','video',17,'8065080-hd_1920_1080_24fps.mp4','79.mp4','f893741e228eacd042a735b6d66ffd0c',11439176,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(80,'8088627-hd_1920_1080_30fps.mp4','video',14,'8088627-hd_1920_1080_30fps.mp4','80.mp4','8146d63675cedf618055c75bf25c236f',10216342,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(81,'8363879-hd_1920_1080_30fps.mp4','video',10,'8363879-hd_1920_1080_30fps.mp4','81.mp4','fe712587b348c552fa8ef4b6950e9612',6960987,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:52','2024-12-27 17:45:52','Inherit',1,1,NULL,NULL,NULL),(82,'DSS.mp4','video',55,'DSS.mp4','82.mp4','da5f869aa43d5a6b5f546676844e4ac4',22609189,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:53','2024-12-27 17:45:53','Inherit',1,1,NULL,NULL,NULL),(83,'iris scanner final (1).mp4','video',45,'iris scanner final (1).mp4','83.mp4','2c9da4e5cce0bf4755dc280ec48f44f1',56032510,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:53','2024-12-27 17:45:53','Inherit',1,1,NULL,NULL,NULL),(84,'OAS-OFF-VID','video',484,'Sequence 01.mp4','84.mp4','1b658eddfe3c4042aa8f20d19dd5d05c',303082284,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:54','2024-12-27 17:45:54','Inherit',1,1,NULL,NULL,NULL),(85,'OASYS ALL PRODUCT VIDEO ANIMATION.mp4','video',22,'OASYS ALL PRODUCT VIDEO ANIMATION.mp4','85.mp4','815e99beb3748c01cc9e471a91044f6c',9025269,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:55','2024-12-27 17:45:55','Inherit',1,1,NULL,NULL,NULL),(86,'Oasys Intro Points  Final.mp4','video',48,'Oasys Intro Points  Final.mp4','86.mp4','bf7927f42ee018c794dc12abf9f8164e',46915912,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:55','2024-12-27 17:45:55','Inherit',1,1,NULL,NULL,NULL),(87,'Oasys Milestone Video Animation Finnal 002_1 (2).mp4','video',89,'Oasys Milestone Video Animation Finnal 002_1 (2).mp4','87.mp4','45c424cdd60518fc9981f8e01feef64a',34668634,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:55','2024-12-27 17:45:55','Inherit',1,1,NULL,NULL,NULL),(88,'office_navarathri_decorationvideo.mp4','video',34,'office_navarathri_decorationvideo.mp4','88.mp4','193c0c6b507237520c97b558c6b01055',43748174,1,0,0,NULL,0,1,0,1,NULL,'2024-12-27 17:45:55','2024-12-27 17:45:55','Inherit',1,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_board`
--

DROP TABLE IF EXISTS `menu_board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_board` (
  `menuId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userId` int NOT NULL,
  `modifiedDt` int NOT NULL DEFAULT '0',
  `folderId` int NOT NULL DEFAULT '1',
  `permissionsFolderId` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`menuId`),
  KEY `folderId` (`folderId`),
  KEY `userId` (`userId`),
  CONSTRAINT `menu_board_ibfk_1` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`),
  CONSTRAINT `menu_board_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_board`
--

LOCK TABLES `menu_board` WRITE;
/*!40000 ALTER TABLE `menu_board` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_category`
--

DROP TABLE IF EXISTS `menu_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_category` (
  `menuCategoryId` int NOT NULL AUTO_INCREMENT,
  `menuId` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediaId` int DEFAULT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`menuCategoryId`),
  KEY `menuId` (`menuId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `menu_category_ibfk_1` FOREIGN KEY (`menuId`) REFERENCES `menu_board` (`menuId`),
  CONSTRAINT `menu_category_ibfk_2` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_category`
--

LOCK TABLES `menu_category` WRITE;
/*!40000 ALTER TABLE `menu_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_product`
--

DROP TABLE IF EXISTS `menu_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_product` (
  `menuProductId` int NOT NULL AUTO_INCREMENT,
  `menuCategoryId` int NOT NULL,
  `menuId` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,4) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `mediaId` int DEFAULT NULL,
  `availability` tinyint NOT NULL,
  `allergyInfo` text COLLATE utf8mb4_unicode_ci,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calories` smallint DEFAULT NULL,
  `displayOrder` mediumint NOT NULL DEFAULT '0',
  PRIMARY KEY (`menuProductId`),
  KEY `menuId` (`menuId`),
  KEY `menuCategoryId` (`menuCategoryId`),
  KEY `mediaId` (`mediaId`),
  CONSTRAINT `menu_product_ibfk_1` FOREIGN KEY (`menuId`) REFERENCES `menu_board` (`menuId`),
  CONSTRAINT `menu_product_ibfk_2` FOREIGN KEY (`menuCategoryId`) REFERENCES `menu_category` (`menuCategoryId`),
  CONSTRAINT `menu_product_ibfk_3` FOREIGN KEY (`mediaId`) REFERENCES `media` (`mediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_product`
--

LOCK TABLES `menu_product` WRITE;
/*!40000 ALTER TABLE `menu_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_product_options`
--

DROP TABLE IF EXISTS `menu_product_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_product_options` (
  `menuProductId` int NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`menuProductId`,`option`),
  CONSTRAINT `menu_product_options_ibfk_1` FOREIGN KEY (`menuProductId`) REFERENCES `menu_product` (`menuProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_product_options`
--

LOCK TABLES `menu_product_options` WRITE;
/*!40000 ALTER TABLE `menu_product_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_product_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `module` (
  `moduleId` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint NOT NULL DEFAULT '0',
  `previewEnabled` tinyint NOT NULL DEFAULT '1',
  `defaultDuration` int NOT NULL DEFAULT '60',
  `settings` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`moduleId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module`
--

LOCK TABLES `module` WRITE;
/*!40000 ALTER TABLE `module` DISABLE KEYS */;
INSERT INTO `module` VALUES ('core-audio',0,0,0,'{\"validExtensions\":\"mp3,wav\"}'),('core-calendar',0,0,60,'{\"cachePeriod\":1440}'),('core-calendaradvanced',1,1,60,NULL),('core-canvas',1,1,1,'[]'),('core-chart',1,1,240,NULL),('core-clock-analogue',0,0,5,'[]'),('core-clock-digital',0,0,5,'[]'),('core-clock-flip',0,0,5,'[]'),('core-countdown-clock',0,0,60,'[]'),('core-countdown-custom',0,0,60,'[]'),('core-countdown-days',0,0,60,'[]'),('core-countdown-table',0,0,60,'[]'),('core-countdown-text',0,0,60,'[]'),('core-dataset',0,0,10,'[]'),('core-embedded',0,0,60,'[]'),('core-flash',0,0,10,'{\"validExtensions\":\"swf\"}'),('core-genericfile',1,0,10,NULL),('core-hls',0,0,60,'{\"defaultMute\":1}'),('core-htmlpackage',0,0,60,'{\"validExtensions\":\"htz\"}'),('core-image',1,1,10,'{\"validExtensions\":\"jpg,jpeg,png,bmp,gif\",\"defaultScaleTypeId\":\"center\"}'),('core-localvideo',0,0,60,'{\"defaultMute\":1}'),('core-mastodon',0,0,60,'{\"defaultServerUrl\":\"https:\\/\\/mastodon.social\",\"cachePeriodImages\":24,\"cachePeriod\":3600}'),('core-menuboard-category',0,0,60,'[]'),('core-menuboard-product',0,0,60,'[]'),('core-notificationview',0,0,10,'[]'),('core-pdf',0,0,60,'{\"validExtensions\":\"pdf\"}'),('core-powerpoint',0,0,10,'{\"validExtensions\":\"ppt,pps,pptx\"}'),('core-rss-ticker',0,0,5,'{\"updateIntervalImages\":240,\"cachePeriod\":1440}'),('core-savedreport',1,0,10,NULL),('core-shellcommand',0,0,3,'[]'),('core-spacer',0,0,60,'[]'),('core-subplaylist',1,1,10,NULL),('core-text',1,1,5,NULL),('core-video',1,1,0,NULL),('core-videoin',0,0,60,'[]'),('core-webpage',0,0,60,'[]'),('core-worldclock-analogue',0,0,60,'[]'),('core-worldclock-custom',0,0,60,'[]'),('core-worldclock-digital-date',0,0,60,'[]'),('core-worldclock-digital-text',0,0,60,'[]');
/*!40000 ALTER TABLE `module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `module_templates`
--

DROP TABLE IF EXISTS `module_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `module_templates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `templateId` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataType` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xml` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint NOT NULL DEFAULT '1',
  `ownerId` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ownerId` (`ownerId`),
  CONSTRAINT `module_templates_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `module_templates`
--

LOCK TABLES `module_templates` WRITE;
/*!40000 ALTER TABLE `module_templates` DISABLE KEYS */;
INSERT INTO `module_templates` VALUES (1,'custom_','message','<?xml version=\"1.0\"?>\n<template>\n        <id>custom_</id>\n        <type>static</type>\n        <dataType>message</dataType>\n        <showIn>both</showIn>\n        <properties>\n            <property id=\"dateFormat\" type=\"text\" variant=\"dateFormat\">\n                <title>Custom Template</title>\n                <helpText>The format to apply to all dates returned by the Widget.</helpText>\n                <default>#DATE_FORMAT#</default>\n            </property>\n            <property id=\"template\" type=\"richText\" allowLibraryRefs=\"true\" variant=\"html\">\n                <title>Main Template</title>\n                <helpText>The template for formatting your notifications. Enter [Subject] and [Body] with your desired formatting. Enter text or HTML in the box below.</helpText>\n            </property>\n            <property id=\"dateFormatSnippets\" type=\"snippet\" mode=\"options\" target=\"template\">\n                <title>Snippets</title>\n                <helpText>Choose element to add to template</helpText>\n                <options>\n                    <option name=\"Subject\">Subject</option>\n                    <option name=\"Body\">Body</option>\n                    <option name=\"Date\">Date</option>\n                </options>\n            </property>\n            <property id=\"embedStyle\" type=\"code\" allowLibraryRefs=\"true\" variant=\"css\">\n                <title>Custom Style Sheets</title>\n            </property>\n            <property id=\"noDataMessage\" type=\"richText\" allowLibraryRefs=\"true\" variant=\"html\">\n                <title>No data message</title>\n                <helpText>A message to display when there are no notifications to show. Enter text or HTML in the box below.</helpText>\n            </property>\n            <property id=\"effect\" type=\"effectSelector\" variant=\"all\">\n                <title>Effect</title>\n                <helpText>Please select the effect that will be used to transition between items.</helpText>\n                <default>noTransition</default>\n            </property>\n            <property id=\"speed\" type=\"number\">\n                <title>Speed</title>\n                <helpText>The transition speed of the selected effect in milliseconds (normal = 1000) or the Marquee Speed in a low to high scale (normal = 1).</helpText>\n                <visibility>\n                    <test>\n                        <condition field=\"effect\" type=\"neq\">noTransition</condition>\n                    </test>\n                </visibility>\n            </property>\n        </properties>\n        <stencil>\n            <twig><![CDATA[\n{% if javaScript %}\n<script type=\"text/javascript\">\n    {{javaScript|raw}}\n</script>\n{% endif %}\n        ]]></twig>\n        <style><![CDATA[\n{{embedStyle|raw}}\n        ]]></style>\n        </stencil>\n        <onTemplateRender><![CDATA[\n// id: The id of the widget\n// target: The target element to render\n// items: The items to render\n// properties: The properties for the widget\n// -------------------------------------------\n\n// Adjust some misformed template options.\nif (properties.template && properties.template.indexOf(\'[Body]\') >= 0) {\n    properties.template = properties.template.replace(\'[Body]\', \'[body]\');\n}\nif (properties.template && properties.template.indexOf(\'[Subject]\') >= 0) {\n    properties.template = properties.template.replace(\'[Subject]\', \'[subject]\');\n}\nif (properties.template && properties.template.indexOf(\'[Date]\') >= 0) {\n    properties.template = properties.template.replace(\'[Date]\', \'[date]\');\n}\n\nif (items.length > 0) {\n    items = $(items).xiboSubstitutesParser(properties.template, properties.dateFormat, [\'date\', \'createdAt\']);\n}\n\n// No data message\nif (items.length <= 0 && properties.noDataMessage && properties.noDataMessage !== \'\') {\n    items.push(properties.noDataMessage);\n}\n\n// Clear container\n$(target).find(\'#content\').empty();\n\n// Add items to container\nfor (var index = 0; index < items.length; index++) {\n  $(items[index]).appendTo($(target).find(\'#content\'));\n}\n\n// Render\n$(target).xiboLayoutScaler(properties);\n$(target).xiboTextRender(properties, $(target).find(\'#content > *\'));\n$(target).find(\'img\').xiboImageRender(properties);\n        ]]></onTemplateRender>\n        <onTemplateVisible><![CDATA[\n// Start effects for this template\n$(target).xiboLayoutAnimate(properties);\n        ]]></onTemplateVisible>\n    </template>\n',1,1);
/*!40000 ALTER TABLE `module_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notification` (
  `notificationId` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `createDt` int NOT NULL,
  `releaseDt` int NOT NULL,
  `isInterrupt` tinyint NOT NULL,
  `isSystem` tinyint NOT NULL,
  `userId` int NOT NULL,
  `filename` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nonusers` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `originalFileName` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unknown',
  PRIMARY KEY (`notificationId`),
  KEY `userId` (`userId`),
  CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_client_redirect_uris`
--

DROP TABLE IF EXISTS `oauth_client_redirect_uris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_client_redirect_uris` (
  `id` int NOT NULL AUTO_INCREMENT,
  `client_id` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_uri` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_client_redirect_uris`
--

LOCK TABLES `oauth_client_redirect_uris` WRITE;
/*!40000 ALTER TABLE `oauth_client_redirect_uris` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_client_redirect_uris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_client_scopes`
--

DROP TABLE IF EXISTS `oauth_client_scopes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_client_scopes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `clientId` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopeId` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clientId` (`clientId`,`scopeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_client_scopes`
--

LOCK TABLES `oauth_client_scopes` WRITE;
/*!40000 ALTER TABLE `oauth_client_scopes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_client_scopes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_clients` (
  `id` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int NOT NULL,
  `authCode` tinyint NOT NULL,
  `clientCredentials` tinyint NOT NULL,
  `isConfidential` tinyint NOT NULL DEFAULT '1',
  `description` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverImage` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyName` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termsUrl` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacyUrl` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `oauth_clients_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_lkclientuser`
--

DROP TABLE IF EXISTS `oauth_lkclientuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_lkclientuser` (
  `lkClientUserId` int NOT NULL AUTO_INCREMENT,
  `clientId` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int NOT NULL,
  `approvedDate` datetime DEFAULT NULL,
  `approvedIp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lkClientUserId`),
  UNIQUE KEY `clientId` (`clientId`,`userId`),
  KEY `userId` (`userId`),
  CONSTRAINT `oauth_lkclientuser_ibfk_1` FOREIGN KEY (`clientId`) REFERENCES `oauth_clients` (`id`),
  CONSTRAINT `oauth_lkclientuser_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_lkclientuser`
--

LOCK TABLES `oauth_lkclientuser` WRITE;
/*!40000 ALTER TABLE `oauth_lkclientuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_lkclientuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_scope_routes`
--

DROP TABLE IF EXISTS `oauth_scope_routes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_scope_routes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `scopeId` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_scope_routes`
--

LOCK TABLES `oauth_scope_routes` WRITE;
/*!40000 ALTER TABLE `oauth_scope_routes` DISABLE KEYS */;
INSERT INTO `oauth_scope_routes` VALUES (1,'mcaas','/','GET'),(2,'mcaas','/library/download/{id}[/{type}]','GET'),(3,'mcaas','/library/mcaas/{id}','POST'),(4,'design','/library','GET,POST,PUT'),(5,'design','/layout','GET,POST,PUT'),(6,'design','/playlist','GET,POST,PUT'),(7,'designDelete','/library','DELETE'),(8,'designDelete','/layout','DELETE'),(9,'designDelete','/playlist','DELETE'),(10,'displays','/display','GET,POST,PUT'),(11,'displays','/displaygroup','GET,POST,PUT'),(12,'displaysDelete','/display/{id}','DELETE'),(13,'displaysDelete','/displaygroup/{id}','DELETE'),(14,'schedule','/schedule','GET,POST,PUT'),(15,'scheduleDelete','/schedule','DELETE'),(16,'datasets','/dataset','GET,POST,PUT'),(17,'datasetsDelete','/dataset','DELETE'),(18,'design','/resolution','GET,POST,PUT'),(19,'designDelete','/resolution','DELETE');
/*!40000 ALTER TABLE `oauth_scope_routes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_scopes`
--

DROP TABLE IF EXISTS `oauth_scopes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oauth_scopes` (
  `id` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `useRegex` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_scopes`
--

LOCK TABLES `oauth_scopes` WRITE;
/*!40000 ALTER TABLE `oauth_scopes` DISABLE KEYS */;
INSERT INTO `oauth_scopes` VALUES ('all','Full account access',0),('datasets','Access to DataSets',1),('datasetsDelete','Access to deleting DataSets',1),('design','Access to Library, Layouts, Playlists, Widgets and Resolutions',1),('designDelete','Access to deleting content from Library, Layouts, Playlists, Widgets and Resolutions',1),('displays','Access to Displays and Display Groups',1),('displaysDelete','Access to deleting Displays and Display Groups',0),('mcaas','Media Conversion as a Service',0),('schedule','Access to Scheduling',1),('scheduleDelete','Access to deleting Scheduled Events',1);
/*!40000 ALTER TABLE `oauth_scopes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission` (
  `permissionId` int NOT NULL AUTO_INCREMENT,
  `entityId` int NOT NULL,
  `groupId` int NOT NULL,
  `objectId` int NOT NULL,
  `view` tinyint NOT NULL,
  `edit` tinyint NOT NULL,
  `delete` tinyint NOT NULL,
  PRIMARY KEY (`permissionId`),
  KEY `permission_ibfk_1` (`groupId`),
  KEY `permission_ibfk_2` (`entityId`),
  KEY `permission_objectId_index` (`objectId`),
  CONSTRAINT `permission_ibfk_1` FOREIGN KEY (`groupId`) REFERENCES `group` (`groupId`),
  CONSTRAINT `permission_ibfk_2` FOREIGN KEY (`entityId`) REFERENCES `permissionentity` (`entityId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission`
--

LOCK TABLES `permission` WRITE;
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` VALUES (12,11,2,1,1,0,0),(13,11,2,2,1,0,0);
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissionentity`
--

DROP TABLE IF EXISTS `permissionentity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissionentity` (
  `entityId` int NOT NULL AUTO_INCREMENT,
  `entity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`entityId`),
  UNIQUE KEY `entity` (`entity`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissionentity`
--

LOCK TABLES `permissionentity` WRITE;
/*!40000 ALTER TABLE `permissionentity` DISABLE KEYS */;
INSERT INTO `permissionentity` VALUES (4,'Xibo\\Entity\\Campaign'),(12,'Xibo\\Entity\\Command'),(9,'Xibo\\Entity\\DataSet'),(11,'Xibo\\Entity\\DayPart'),(2,'Xibo\\Entity\\DisplayGroup'),(13,'Xibo\\Entity\\Folder'),(3,'Xibo\\Entity\\Media'),(14,'Xibo\\Entity\\MenuBoard'),(16,'Xibo\\Entity\\ModuleTemplate'),(10,'Xibo\\Entity\\Notification'),(8,'Xibo\\Entity\\Playlist'),(7,'Xibo\\Entity\\Region'),(15,'Xibo\\Entity\\SyncGroup'),(5,'Xibo\\Entity\\Widget');
/*!40000 ALTER TABLE `permissionentity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phinxlog` (
  `version` bigint NOT NULL,
  `migration_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phinxlog`
--

LOCK TABLES `phinxlog` WRITE;
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;
INSERT INTO `phinxlog` VALUES (20180130073838,'InstallMigration','2024-12-20 06:38:44','2024-12-20 06:38:46',0),(20180131113100,'OldUpgradeStep85Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131113853,'OldUpgradeStep86Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131113941,'OldUpgradeStep87Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131113948,'OldUpgradeStep88Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131113952,'OldUpgradeStep92Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131113957,'OldUpgradeStep120Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114002,'OldUpgradeStep121Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114007,'OldUpgradeStep122Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114013,'OldUpgradeStep123Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114017,'OldUpgradeStep124Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114021,'OldUpgradeStep125Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114025,'OldUpgradeStep126Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114030,'OldUpgradeStep127Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114050,'OldUpgradeStep128Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114058,'OldUpgradeStep129Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114103,'OldUpgradeStep130Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114107,'OldUpgradeStep131Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114110,'OldUpgradeStep132Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114114,'OldUpgradeStep133Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114118,'OldUpgradeStep134Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131114123,'OldUpgradeStep135Migration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131122645,'OneRegionPerPlaylistMigration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131123038,'PlaylistTagsMigration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180131123248,'WidgetFromToDtMigration','2024-12-20 06:38:46','2024-12-20 06:38:46',0),(20180212143336,'DaypartSystemEntriesAsRecords','2024-12-20 06:38:46','2024-12-20 06:38:47',0),(20180213173846,'MailFromNameSettingMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180219141257,'DisplayGroupClosureIndexToNonUnique','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180223180534,'DataSetColumnFilterAndSortOptionsMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180302182421,'WidgetCreatedAndModifiedDtMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180313085749,'MediaTableEditedIdIndexMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180320154652,'PlaylistAddDynamicFilterMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180327153325,'RemoveUserLoggedInMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180514114415,'FixCaseOnHelpTextFieldMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180515123835,'LayoutPublishDraftMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180529065816,'DataSetTruncateFixMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180529073531,'DisplayAsVncLinkMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180621134013,'AddWidgetSyncTaskMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180621134250,'EventLayoutPermissionSettingMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180906115552,'AddForeignKeysToTagsMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180906115606,'AddForeignKeysToPermissionsMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180906115712,'AddForeignKeysToWidgetMediaMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180906131643,'ForgottenPasswordReminderMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20180906131716,'DataSetRssMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20181011160130,'SimpleSettingsMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20181113173310,'RemoveFinanceModuleMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20181113180337,'SplitTickerModuleMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20181126113231,'Release1812Migration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20181210092443,'RemoveImageUriModuleMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20181212114400,'CreatePlayerVersionsTableMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20181217135044,'EventSyncMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190121092556,'PlayerUpgradeAndOverrideConfigMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190125170130,'PlayerSoftwareVersionFieldMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190129103831,'AddLinuxDisplayProfileMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190212112534,'AddProofOfPlayStatsDurationAndCountMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190212115432,'AddDefaultTransitionDurationSettingMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190213160914,'AddGlobalStatSettingMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190213162212,'AddHorizontalMenuSettingMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190214102508,'AddLayoutEnableStat','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190214102516,'AddMediaEnableStat','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190220165703,'AddScheduleRecurrenceMonthlyRepeatsOnMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190227101705,'MakeDisplayLicenseColumnUniqueMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190228120603,'AddDynamicCriteriaTagsMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190301115046,'AdjustGenericfileValidExtensionsMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190315134628,'AddBandwidthLimitColumnToDisplaygroupMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190322162052,'AddPublishedDateColumnMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190326163016,'CreateLayoutHistoryTableMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190328111718,'AddCampaignStatMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190401150256,'AddScheduleNowPageMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190509101525,'CreateReportScheduleTableMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190509102648,'CreateSavedReportTableMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190509113001,'AddReportPageMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190510140126,'TwoFactorAuthMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190514134430,'NullableTextFieldsMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190515094133,'AddHtmlDatatypeMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190515105624,'InstallAdditionalStandardModulesMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190517080033,'AddForeignKeysToLktagTablesMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190521092700,'AddReportScheduleTaskMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190521092930,'AddPreviousRunDateReportScheduleMigration','2024-12-20 06:38:47','2024-12-20 06:38:47',0),(20190521102635,'PlaylistDurationUpdateAtTimestamp','2024-12-20 06:38:47','2024-12-20 06:38:48',0),(20190603083836,'ChangeStatTableStartEndColumnMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190610150331,'TagsWithValuesMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190611145607,'RemoveOldVersionTableMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190612140955,'DisplayTableDatabaseSchemaAdjustmentsMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190620112611,'MoveTidyStatsToStatsArchiveTaskMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190620142655,'AddPlaylistEnableStatMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190626091331,'WidgetHistoryMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190626110359,'CreateStatTableMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190628083649,'AddStatsMigrationTaskMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190710213414,'AddIsActiveReportScheduleMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190717101342,'NullableCommandValidationStringMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190719074601,'MissingDefaultValueMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190725115532,'AddScheduleReminderTaskMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190801102042,'DisplayProfileCommandLinkFixMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190801141737,'DatasetAddCustomHeadersColumnMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190801142302,'AddDoohUserTypeMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190802145636,'CreateScheduleReminderTableMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190806144729,'AddShowContentFromMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190823081448,'AddImageProcessingTaskMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190828123735,'AddDefaultSettingResizeLimitResizeThresholdMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190903083314,'AddGlobalSettingForCascadePermissionsMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190905084201,'AddSettingForDefaultTransitionTypeMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190905084642,'AddSettingForAutoLayoutPublishMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190910132520,'DisplayMoveCmsMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190917093141,'InterruptLayoutMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190918090608,'AddDefaultSettingQuickChartMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190919154513,'AddNotificationAttachmentFilenameNonUsersMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190926135518,'AddSettingForTransitionAutoApplyToLayoutMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20190926140809,'InstallSavedReportsAndSpacerModulesMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20191001092651,'AddNotificationOriginalFilenameMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20191022101141,'AddCommandEntityToPermissionEntityMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20191024152519,'AddScheduleExclusionsTableMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20191122114104,'FixDuplicateModuleFilesMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20191126103120,'GeoScheduleMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20191126141140,'RemoteDataSetCsvSourceMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20191205180116,'AddPlaylistDashboardPageUserMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200107082625,'DisplayAddResolutionMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200115115935,'AddReportScheduleMessageMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200122143630,'AddReleasedRequiredFileMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200122191232,'AddCommercialLicenceColumnMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200129104944,'AddEngagementsStatsMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200130165443,'CountdownModuleAddMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200311110512,'AddIsDrawerColumnMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200311110535,'CreateActionTableMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200319093235,'ChangeInterruptLayoutMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200401121544,'AddSystemUserSettingMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200407143200,'AddCodeColumnToLayoutMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200422101006,'AddDataSetRowLimitMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200427085958,'AddReportScheduleStartEndMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200530103029,'DisplayRemoteLinksMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200604103141,'CommandImprovementsMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200612141755,'OauthUpgradeMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200720092246,'AddSavedReportSchemaVersionMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200916134817,'RemoveOldScreenshotsMigration','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20200917140227,'DisplayGroupCreatedModifiedDates','2024-12-20 06:38:48','2024-12-20 06:38:48',0),(20201007080829,'AddFoldersMigration','2024-12-20 06:38:48','2024-12-20 06:38:49',0),(20201007093511,'FeaturesMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20201025153753,'RemoveOldPermissionSettingsMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210105105646,'AddMcaasScopeAndRouteMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210113134628,'EnableUserSharingFeatureOnUsersGroupMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210128143602,'MenuBoardsMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210201150259,'UserOnboardingMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210305131937,'FixDuplicateTagsMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210407111756,'RemoveReportNameColumnFromSavedReportMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210421142731,'RemoveMaintenanceKeyMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210601104441,'AddUserAgentToDataSetMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210603114231,'NewCalendarTypeMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210608142925,'AddOrientationToResolutionAndMediaMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210611122809,'AddPurgeListTableMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210806122814,'AddNumberOfItemsToPlaylistMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210813094723,'AddCycleBasedPlaybackOptionToCampaignMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210817105702,'AddCustomSeparatorToDatasetMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210820100520,'AddActionEventTypeMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210901134913,'AddIpAddressColumnToAuditLogMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20210901150615,'AddTooltipAndIsRequiredColumnsMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20211109130951,'FixOrphanedDisplayGroupsMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20211109134929,'FixPlaylistManagerUserGroupMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20211109141925,'DatasetAddOptionToTruncateOnNoNewDataMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20211116153103,'ConnectorsMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20211231141457,'AddMoreTagFilteringOptionsMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20211231153355,'AddIsCustomToDisplayProfileMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220117150212,'AddLayoutExchangeConnectorMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220119124436,'AddCodeColumnToMenuBoardsMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220131151346,'AddDateFormatToDataSetColumnMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220201163832,'ReportLogoMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220203145712,'ApplicationsTweaksMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220207160047,'TidyCalendarModuleTypes','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220224130122,'AddResolutionRoutesToDesignScopeMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220225105237,'MergeWeatherWidgets','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220302152503,'LayoutRemoveOrientationMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220307134554,'AddWorldClockMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220330111440,'ModulesTableVerFourMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220512130000,'AddTwitterConnectorMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220512155400,'RegionTypeMigration','2024-12-20 06:38:49','2024-12-20 06:38:49',0),(20220520175400,'DisplayMediaMigration','2024-12-20 06:38:49','2024-12-20 06:38:50',0),(20220903153600,'RequiredfileDependencyMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20220906085300,'ThreeTwoZeroMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20220907135653,'AddLogicalOperatorNameMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20220907143500,'UserHomeFolderMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20220915100902,'AddFontsTableMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20220928091249,'PlayerSoftwareRefactorMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20221013103000,'AdvertisingConnectorsMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20221024082400,'AdCampaignMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20221101090337,'CreateDisplayTypeTableMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20221101130018,'AddDisplayMetaDataMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20221104095722,'CreateDisplayLocationTypeTableMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20221124120259,'AddLayoutIdToActionTableMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230118151031,'AddAlphaVantageConnectorMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230130114907,'UpdateCampaignDisplayColumnDataTypeMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230209132720,'AddOpenWeatherMapConnectorMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230214135035,'RemoveDoohUserTypeMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230220213618,'UpdatePlayListTimelineHelpLinkMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230310143321,'SavedReportMoveOutMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230321105750,'AddSchemaVersionWidgetMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230411090410,'AddWidgetCompatibilityTaskMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230509113820,'ContentSyncMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230530124400,'WidgetOptionSizeMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230706103000,'AddSyncKeyToZoneMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230718163600,'RemoveHelpLinksMigration','2024-12-20 06:38:50','2024-12-20 06:38:50',0),(20230719154200,'CollationToUtfmb4Migration','2024-12-20 06:38:50','2024-12-20 06:38:51',0),(20230725141000,'ScheduleMetaDataMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20230727102500,'MenuboardAdditionalFieldsMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20230731194700,'LkdgdgPrimaryKeyMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20231128144300,'RealTimeDataMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20231213120700,'ScheduleCriteriaMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20231220155800,'UserModuleTemplatesMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20240227100600,'MenuboardFieldLengthsMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20240227102400,'MissingIndexesMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20240408121908,'DisplayAlertsMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20240422111609,'NotificationTypesMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20240430112500,'CanvasDurationFixMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20240501111721,'SessionHistoryMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20240605101251,'AuditingApiRequestsMigration','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20240612112949,'AddSwitchDelayAndVideoPauseDelayToSyncGroup','2024-12-20 06:38:51','2024-12-20 06:38:51',0),(20240614031633,'UpdateSwitchDelayAndVideoPauseDelayMigration','2024-12-20 06:38:51','2024-12-20 06:38:52',0),(20240615155000,'WidgetFallbackDataMigration','2024-12-20 06:38:52','2024-12-20 06:38:52',0),(20240617040320,'AddOSDetailsToDisplayTableMigration','2024-12-20 06:38:52','2024-12-20 06:38:52',0),(20240717043020,'AddDataConnectorSourceToDatasetTableMigration','2024-12-20 06:38:52','2024-12-20 06:38:52',0),(20240717113400,'AddLastUsedTimeToSessionHistoryTableMigration','2024-12-20 06:38:52','2024-12-20 06:38:52',0);
/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_faults`
--

DROP TABLE IF EXISTS `player_faults`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_faults` (
  `playerFaultId` int NOT NULL AUTO_INCREMENT,
  `displayId` int NOT NULL,
  `incidentDt` datetime DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scheduleId` int DEFAULT NULL,
  `layoutId` int DEFAULT NULL,
  `regionId` int DEFAULT NULL,
  `mediaId` int DEFAULT NULL,
  `widgetId` int DEFAULT NULL,
  PRIMARY KEY (`playerFaultId`),
  KEY `displayId` (`displayId`),
  CONSTRAINT `player_faults_ibfk_1` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player_faults`
--

LOCK TABLES `player_faults` WRITE;
/*!40000 ALTER TABLE `player_faults` DISABLE KEYS */;
/*!40000 ALTER TABLE `player_faults` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_software`
--

DROP TABLE IF EXISTS `player_software`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `player_software` (
  `versionId` int NOT NULL AUTO_INCREMENT,
  `player_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_version` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_code` smallint DEFAULT NULL,
  `playerShowVersion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL,
  `modifiedBy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fileName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint DEFAULT NULL,
  `md5` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`versionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player_software`
--

LOCK TABLES `player_software` WRITE;
/*!40000 ALTER TABLE `player_software` DISABLE KEYS */;
/*!40000 ALTER TABLE `player_software` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `playlist` (
  `playlistId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownerId` int NOT NULL,
  `regionId` int DEFAULT NULL,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  `duration` int NOT NULL DEFAULT '0',
  `requiresDurationUpdate` int NOT NULL DEFAULT '0',
  `isDynamic` tinyint NOT NULL DEFAULT '0',
  `filterMediaName` text COLLATE utf8mb4_unicode_ci,
  `filterMediaNameLogicalOperator` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'OR',
  `filterMediaTags` text COLLATE utf8mb4_unicode_ci,
  `filterExactTags` tinyint NOT NULL DEFAULT '0',
  `filterMediaTagsLogicalOperator` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'OR',
  `maxNumberOfItems` int DEFAULT NULL,
  `enableStat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folderId` int NOT NULL DEFAULT '1',
  `permissionsFolderId` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`playlistId`),
  KEY `ownerId` (`ownerId`),
  KEY `regionId` (`regionId`),
  KEY `folderId` (`folderId`),
  CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`),
  CONSTRAINT `playlist_ibfk_2` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playlist`
--

LOCK TABLES `playlist` WRITE;
/*!40000 ALTER TABLE `playlist` DISABLE KEYS */;
INSERT INTO `playlist` VALUES (21,'',1,21,'2024-12-24 18:04:53','2024-12-24 18:04:53',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(22,'Untitled 2024-12-24 17:42:39-1 - drawer',1,22,'2024-12-24 18:04:53','2024-12-24 18:04:53',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(45,'sept demo layout-1',1,45,'2024-12-27 17:43:09','2024-12-27 17:43:26',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(46,'sept demo layout-2',1,46,'2024-12-27 17:43:09','2024-12-27 17:43:26',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(48,'OAS-OFF-VID with logo-1',1,48,'2024-12-27 17:45:55','2024-12-27 17:46:01',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(49,'ayutha pooja layout-1',1,49,'2024-12-27 17:53:17','2024-12-27 17:53:17',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(50,'ayutha pooja layout-2',1,50,'2024-12-27 17:53:17','2024-12-27 17:53:17',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(51,'ayutha pooja layout-3 - drawer',1,51,'2024-12-27 17:53:17','2024-12-27 17:53:17',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(55,'',1,55,'2024-12-27 18:16:03','2024-12-27 18:17:03',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(56,'',1,56,'2024-12-27 18:16:03','2024-12-27 18:16:04',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(57,'Untitled 2024-12-24 18:12:50-1 - drawer',1,57,'2024-12-27 18:16:03','2024-12-27 18:16:03',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(64,'Untitled 2024-12-31 11:05:03-1 - drawer',1,64,'2024-12-31 11:08:29','2024-12-31 11:08:29',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(65,'',1,65,'2024-12-31 11:08:52','2024-12-31 11:09:27',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(68,'sept demo layout-1',1,68,'2025-01-02 12:24:22','2025-01-02 12:24:22',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(69,'sept demo layout-2',1,69,'2025-01-02 12:24:22','2025-01-02 12:24:22',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(80,'',1,80,'2025-01-02 13:01:34','2025-01-02 13:02:04',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(81,'sept combination layout-1',1,81,'2025-01-02 13:01:34','2025-01-02 13:02:09',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(82,'sept combination layout-3 - drawer',1,82,'2025-01-02 13:01:34','2025-01-02 13:01:34',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(83,'',1,83,'2025-01-02 13:02:26','2025-01-02 13:02:46',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(84,'sept child play layout-1',1,84,'2025-01-02 13:02:26','2025-01-02 13:02:42',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(85,'sept child play layout-2 - drawer',1,85,'2025-01-02 13:02:26','2025-01-02 13:02:26',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(87,'two image dec layout-1',1,86,'2025-01-07 12:30:22','2025-01-07 12:30:49',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(89,'two image dec layout-3 - drawer',1,88,'2025-01-07 12:30:22','2025-01-07 12:30:22',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(90,'',1,89,'2025-01-07 12:31:09','2025-01-07 12:32:54',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(93,'',1,92,'2025-01-07 17:19:20','2025-01-07 17:19:21',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(94,'Untitled 2025-01-07 17:12:44-1 - drawer',1,93,'2025-01-07 17:19:20','2025-01-07 17:19:20',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(97,'',1,96,'2025-01-07 17:41:06','2025-01-08 11:18:07',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(98,'Untitled 2025-01-07 17:25:56-1 - drawer',1,97,'2025-01-07 17:41:06','2025-01-07 17:41:06',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(107,'',1,106,'2025-01-08 10:54:16','2025-01-08 10:54:16',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(108,'',1,107,'2025-01-08 10:54:16','2025-01-08 10:54:16',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(109,'Untitled 2025-01-08 10:45:25-1 - drawer',1,108,'2025-01-08 10:54:16','2025-01-08 10:54:16',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(110,'',1,109,'2025-01-08 10:55:23','2025-01-08 10:55:23',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(111,'',1,110,'2025-01-08 10:55:23','2025-01-08 10:55:23',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(112,'Untitled 2025-01-08 10:45:25-1 - drawer',1,111,'2025-01-08 10:55:23','2025-01-08 10:55:23',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(116,'',1,115,'2025-01-08 11:02:32','2025-01-08 11:03:55',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(117,'Untitled 2025-01-07 17:52:41-1 - drawer',1,116,'2025-01-08 11:02:32','2025-01-08 11:02:32',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(118,'',1,117,'2025-01-08 11:04:08','2025-01-08 11:04:49',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(119,'',1,118,'2025-01-08 11:08:21','2025-01-08 11:08:22',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(120,'',1,119,'2025-01-08 11:08:21','2025-01-08 11:08:22',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(121,'Untitled 2025-01-07 17:52:41-1 - drawer',1,120,'2025-01-08 11:08:21','2025-01-08 11:08:21',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(137,'',1,136,'2025-01-08 12:57:37','2025-01-08 12:57:44',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(138,'Untitled 2025-01-08 11:33:54-1 - drawer',1,137,'2025-01-08 12:57:37','2025-01-08 12:57:37',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(139,'',1,138,'2025-01-09 17:13:22','2025-01-09 17:13:22',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(140,'',1,139,'2025-01-09 17:13:22','2025-01-09 17:13:22',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(141,'Untitled 2024-12-20 12:25:14-1 - drawer',1,140,'2025-01-09 17:13:22','2025-01-09 17:13:22',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(183,'Untitled 2025-01-22 12:00:53-1 - drawer',1,182,'2025-01-22 12:00:53','2025-01-22 12:00:53',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(188,'',1,187,'2025-01-22 12:04:52','2025-01-22 12:04:58',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(189,'',1,188,'2025-01-22 12:05:46','2025-01-22 12:05:54',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(190,'',1,189,'2025-01-22 12:06:09','2025-01-22 12:06:14',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(194,'Untitled 2025-01-22 12:00:53-1 - drawer',1,193,'2025-01-22 14:40:46','2025-01-22 14:40:46',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(198,'',1,197,'2025-01-22 15:02:17','2025-01-22 15:02:34',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(199,'',1,198,'2025-01-22 15:02:17','2025-01-22 15:02:59',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(200,'Untitled 2025-01-22 11:48:00-1 - drawer',1,199,'2025-01-22 15:02:17','2025-01-22 15:02:17',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(201,'',1,200,'2025-01-22 15:03:03','2025-01-22 15:04:32',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(202,'Untitled 2025-01-22 16:19:08-1 - drawer',1,201,'2025-01-22 16:19:09','2025-01-22 16:19:09',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(203,'sbi compress image layout-1',1,202,'2025-01-22 17:55:42','2025-01-22 17:55:47',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(204,'aug sbi video layout-1',1,203,'2025-01-23 11:23:39','2025-01-23 11:23:42',0,1,0,NULL,'OR',NULL,0,'OR',0,NULL,1,1),(205,'aug sbi video layout-2 - drawer',1,204,'2025-01-23 11:23:39','2025-01-23 11:23:39',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(206,'Untitled 2025-01-28 16:21:32-1 - drawer',1,205,'2025-01-28 16:21:33','2025-01-28 16:21:33',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(207,'Untitled 2025-02-03 10:44:52-1 - drawer',1,206,'2025-02-03 10:44:53','2025-02-03 10:44:53',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(208,'test-1',1,207,'2025-02-03 10:45:19','2025-02-03 10:45:19',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(209,'test-1',1,208,'2025-02-03 10:45:19','2025-02-03 10:45:19',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1),(210,'test-2 - drawer',1,209,'2025-02-03 10:45:19','2025-02-03 10:45:19',0,1,0,NULL,'OR',NULL,0,'OR',NULL,NULL,1,1);
/*!40000 ALTER TABLE `playlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purge_list`
--

DROP TABLE IF EXISTS `purge_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `purge_list` (
  `purgeListId` int NOT NULL AUTO_INCREMENT,
  `mediaId` int NOT NULL,
  `storedAs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiryDate` datetime DEFAULT NULL,
  PRIMARY KEY (`purgeListId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purge_list`
--

LOCK TABLES `purge_list` WRITE;
/*!40000 ALTER TABLE `purge_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `purge_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `region` (
  `regionId` int NOT NULL AUTO_INCREMENT,
  `layoutId` int NOT NULL,
  `ownerId` int NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` decimal(10,0) NOT NULL,
  `height` decimal(10,0) NOT NULL,
  `top` decimal(10,0) NOT NULL,
  `left` decimal(10,0) NOT NULL,
  `zIndex` smallint NOT NULL,
  `duration` int NOT NULL DEFAULT '0',
  `isDrawer` tinyint NOT NULL DEFAULT '0',
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'playlist',
  `syncKey` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`regionId`),
  KEY `ownerId` (`ownerId`),
  KEY `layoutId` (`layoutId`),
  CONSTRAINT `region_ibfk_1` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`),
  CONSTRAINT `region_ibfk_2` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (21,12,1,'',1909,1080,0,10,0,100,0,'frame',NULL),(22,12,1,'Untitled 2024-12-24 17:42:39-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(45,28,1,'sept demo layout-1',1920,1080,0,0,0,496,0,'playlist',NULL),(46,28,1,'sept demo layout-2',1920,117,963,0,0,49,0,'frame',NULL),(48,30,1,'OAS-OFF-VID with logo-1',1920,1080,0,0,0,987,0,'playlist',NULL),(49,31,1,'ayutha pooja layout-1',1920,1080,0,0,0,51,0,'frame',NULL),(50,31,1,'ayutha pooja layout-2',1920,112,968,0,0,40,0,'frame',NULL),(51,31,1,'ayutha pooja layout-3 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(55,33,1,'',1920,1080,0,0,0,40,0,'playlist',NULL),(56,33,1,'',1920,117,959,0,1,40,0,'playlist',NULL),(57,33,1,'Untitled 2024-12-24 18:12:50-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(64,37,1,'Untitled 2024-12-31 11:05:03-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(65,37,1,'',1920,1080,0,0,0,54,0,'playlist',NULL),(68,39,1,'sept demo layout-1',1920,1080,0,0,0,0,0,'playlist',NULL),(69,39,1,'sept demo layout-2',1920,117,963,0,0,0,0,'frame',NULL),(80,43,1,'',1920,108,971,0,1,40,0,'playlist',NULL),(81,43,1,'sept combination layout-1',1930,1078,-118,-9,0,412,0,'playlist',NULL),(82,43,1,'sept combination layout-3 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(83,44,1,'',1920,101,979,0,1,50,0,'playlist',NULL),(84,44,1,'sept child play layout-1',1920,980,0,0,0,277,0,'playlist',NULL),(85,44,1,'sept child play layout-2 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(86,45,1,'two image dec layout-1',1920,1080,0,0,0,45,0,'playlist',NULL),(88,45,1,'two image dec layout-3 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(89,45,1,'',1920,100,980,0,1,40,0,'playlist',NULL),(92,48,1,'',1920,1080,0,0,0,40,0,'canvas',NULL),(93,48,1,'Untitled 2025-01-07 17:12:44-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(96,51,1,'',1920,1080,0,0,0,40,0,'canvas',NULL),(97,51,1,'Untitled 2025-01-07 17:25:56-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(106,59,1,'',1920,1112,-13,0,0,20,0,'playlist',NULL),(107,59,1,'',1920,88,991,0,1,40,0,'playlist',NULL),(108,59,1,'Untitled 2025-01-08 10:45:25-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(109,60,1,'',1920,1112,-13,0,0,20,0,'playlist',NULL),(110,60,1,'',1920,88,991,0,1,40,0,'playlist',NULL),(111,60,1,'Untitled 2025-01-08 10:45:25-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(115,63,1,'',1918,1080,0,1,0,10,0,'frame',NULL),(116,63,1,'Untitled 2025-01-07 17:52:41-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(117,63,1,'',1920,1080,0,0,1,10,0,'canvas',NULL),(118,64,1,'',1918,1080,0,1,0,10,0,'frame',NULL),(119,64,1,'',1920,1080,0,0,1,10,0,'canvas',NULL),(120,64,1,'Untitled 2025-01-07 17:52:41-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(136,73,1,'',1920,1080,0,0,0,40,0,'canvas',NULL),(137,73,1,'Untitled 2025-01-08 11:33:54-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(138,74,1,'',1920,1080,0,0,0,4,0,'canvas',NULL),(139,74,1,'',1950,120,958,-10,1,10,0,'playlist',NULL),(140,74,1,'Untitled 2024-12-20 12:25:14-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(182,86,1,'Untitled 2025-01-22 12:00:53-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(187,86,1,'',1920,1080,0,0,0,82,0,'frame',NULL),(188,86,1,'',308,248,817,1602,1,5,0,'frame',NULL),(189,86,1,'',300,180,900,0,2,60,0,'frame',NULL),(193,88,1,'Untitled 2025-01-22 12:00:53-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(197,89,1,'',890,1080,0,0,1,20,0,'playlist',NULL),(198,89,1,'',1029,1080,0,891,2,40,0,'playlist',NULL),(199,89,1,'Untitled 2025-01-22 11:48:00-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(200,89,1,'',1920,88,992,0,3,30,0,'playlist',NULL),(201,91,1,'Untitled 2025-01-22 16:19:08-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(202,92,1,'sbi compress image layout-1',1920,1080,0,0,0,274,0,'playlist',NULL),(203,93,1,'aug sbi video layout-1',1920,1080,0,0,0,70,0,'playlist',NULL),(204,93,1,'aug sbi video layout-2 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(205,95,1,'Untitled 2025-01-28 16:21:32-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(206,97,1,'Untitled 2025-02-03 10:44:52-1 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL),(207,98,1,'test-1',1920,1080,0,0,0,0,0,'zone',NULL),(208,99,1,'test-1',1920,1080,0,0,0,0,0,'zone',NULL),(209,99,1,'test-2 - drawer',1920,1080,0,0,0,0,1,'drawer',NULL);
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regionoption`
--

DROP TABLE IF EXISTS `regionoption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `regionoption` (
  `regionId` int NOT NULL,
  `option` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`regionId`,`option`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regionoption`
--

LOCK TABLES `regionoption` WRITE;
/*!40000 ALTER TABLE `regionoption` DISABLE KEYS */;
INSERT INTO `regionoption` VALUES (21,'loop','0'),(21,'transitionDirection',NULL),(21,'transitionDuration',NULL),(21,'transitionType',NULL),(46,'loop','0'),(46,'transitionDirection','N'),(46,'transitionDuration',NULL),(46,'transitionType',NULL),(48,'loop','0'),(48,'transitionDirection','N'),(48,'transitionDuration',''),(48,'transitionType',''),(50,'loop','0'),(50,'transitionDirection','N'),(50,'transitionDuration',NULL),(50,'transitionType',NULL),(55,'loop','0'),(55,'transitionDirection',NULL),(55,'transitionDuration',NULL),(55,'transitionType',''),(56,'loop','0'),(56,'transitionDirection',NULL),(56,'transitionDuration',NULL),(56,'transitionType',''),(65,'loop','0'),(65,'transitionDirection',NULL),(65,'transitionDuration',NULL),(65,'transitionType',''),(69,'loop','0'),(69,'transitionDirection','N'),(69,'transitionDuration',NULL),(69,'transitionType',NULL),(80,'loop','0'),(80,'transitionDirection',NULL),(80,'transitionDuration',NULL),(80,'transitionType',''),(81,'loop','0'),(81,'transitionDirection',NULL),(81,'transitionDuration',NULL),(81,'transitionType',''),(83,'loop','0'),(83,'transitionDirection',NULL),(83,'transitionDuration',NULL),(83,'transitionType',''),(84,'loop','0'),(84,'transitionDirection',NULL),(84,'transitionDuration',NULL),(84,'transitionType',''),(86,'loop','0'),(86,'transitionDirection',NULL),(86,'transitionDuration',NULL),(86,'transitionType',''),(89,'loop','0'),(89,'transitionDirection',NULL),(89,'transitionDuration',NULL),(89,'transitionType',''),(106,'loop','0'),(106,'transitionDirection',NULL),(106,'transitionDuration',NULL),(106,'transitionType',''),(107,'loop','0'),(107,'transitionDirection',NULL),(107,'transitionDuration',NULL),(107,'transitionType',''),(109,'loop','0'),(109,'transitionDirection',NULL),(109,'transitionDuration',NULL),(109,'transitionType',''),(110,'loop','0'),(110,'transitionDirection',NULL),(110,'transitionDuration',NULL),(110,'transitionType',''),(115,'loop','0'),(115,'transitionDirection',NULL),(115,'transitionDuration',NULL),(115,'transitionType',NULL),(118,'loop','0'),(118,'transitionDirection',NULL),(118,'transitionDuration',NULL),(118,'transitionType',NULL),(139,'loop','0'),(139,'transitionDirection',NULL),(139,'transitionDuration',NULL),(139,'transitionType',''),(187,'loop','0'),(187,'transitionDirection',NULL),(187,'transitionDuration',NULL),(187,'transitionType',NULL),(188,'loop','0'),(188,'transitionDirection',NULL),(188,'transitionDuration',NULL),(188,'transitionType',NULL),(189,'loop','0'),(189,'transitionDirection',NULL),(189,'transitionDuration',NULL),(189,'transitionType',NULL),(197,'loop','0'),(197,'transitionDirection',NULL),(197,'transitionDuration',NULL),(197,'transitionType',''),(198,'loop','0'),(198,'transitionDirection',NULL),(198,'transitionDuration',NULL),(198,'transitionType',''),(200,'loop','0'),(200,'transitionDirection',NULL),(200,'transitionDuration',NULL),(200,'transitionType','');
/*!40000 ALTER TABLE `regionoption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportschedule`
--

DROP TABLE IF EXISTS `reportschedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reportschedule` (
  `reportScheduleId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reportName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filterCriteria` text COLLATE utf8mb4_unicode_ci,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastSavedReportId` int NOT NULL DEFAULT '0',
  `lastRunDt` int NOT NULL DEFAULT '0',
  `previousRunDt` int NOT NULL DEFAULT '0',
  `userId` int NOT NULL,
  `isActive` int NOT NULL DEFAULT '1',
  `fromDt` int NOT NULL DEFAULT '0',
  `toDt` int NOT NULL DEFAULT '0',
  `createdDt` int NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`reportScheduleId`),
  KEY `userId` (`userId`),
  CONSTRAINT `reportschedule_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportschedule`
--

LOCK TABLES `reportschedule` WRITE;
/*!40000 ALTER TABLE `reportschedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `reportschedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requiredfile`
--

DROP TABLE IF EXISTS `requiredfile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `requiredfile` (
  `rfId` int NOT NULL AUTO_INCREMENT,
  `displayId` int NOT NULL,
  `type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemId` int DEFAULT NULL,
  `bytesRequested` bigint NOT NULL,
  `complete` tinyint NOT NULL DEFAULT '0',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint NOT NULL DEFAULT '0',
  `released` tinyint NOT NULL DEFAULT '1',
  `fileType` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realId` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`rfId`),
  KEY `displayId` (`displayId`,`type`),
  CONSTRAINT `requiredfile_ibfk_1` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`)
) ENGINE=InnoDB AUTO_INCREMENT=656 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requiredfile`
--

LOCK TABLES `requiredfile` WRITE;
/*!40000 ALTER TABLE `requiredfile` DISABLE KEYS */;
INSERT INTO `requiredfile` VALUES (19,10,'P',-1,0,1,'bundle.min.js',2357851,1,'bundle','1'),(20,10,'P',-100000000,0,1,'fonts.css',0,1,'fontCss','1'),(213,11,'P',-1,2357851,1,'bundle.min.js',2357851,1,'bundle','1'),(214,11,'P',-100000000,0,1,'fonts.css',0,1,'fontCss','1'),(284,10,'M',8,0,1,'8.jpg',221413,1,NULL,NULL),(293,11,'M',8,221413,1,'8.jpg',221413,1,NULL,NULL),(306,10,'L',73,0,1,'73.xlf',538,1,NULL,NULL),(307,10,'W',322,0,1,NULL,0,1,NULL,NULL),(322,11,'M',22,60990364,1,'22.mp4',60990364,1,NULL,NULL),(323,11,'M',20,204785,1,'20.jpg',204785,1,NULL,NULL),(324,11,'M',23,556164,1,'23.jpg',556164,1,NULL,NULL),(325,11,'M',9,150885,1,'9.jpg',150885,1,NULL,NULL),(326,11,'M',21,434397,1,'21.jpg',434397,1,NULL,NULL),(363,10,'M',25,0,1,'25.mp4',57794812,1,NULL,NULL),(400,10,'M',60,0,1,'60.mp4',15078782,1,NULL,NULL),(401,10,'M',49,0,1,'49.mp4',7385702,1,NULL,NULL),(402,10,'M',35,0,1,'35.mp4',6621875,1,NULL,NULL),(403,10,'M',53,0,1,'53.mp4',4820499,1,NULL,NULL),(404,10,'M',38,0,1,'38.mp4',24162791,1,NULL,NULL),(405,10,'M',29,0,1,'29.mp4',5909459,1,NULL,NULL),(406,10,'M',52,0,1,'52.mp4',13915628,1,NULL,NULL),(407,10,'M',44,0,1,'44.mp4',3689110,1,NULL,NULL),(408,10,'M',33,0,1,'33.mp4',4874033,1,NULL,NULL),(409,10,'M',51,0,1,'51.mp4',27888037,1,NULL,NULL),(410,10,'M',55,0,1,'55.mp4',12718979,1,NULL,NULL),(411,10,'M',56,0,1,'56.mp4',10812904,1,NULL,NULL),(412,10,'M',41,0,1,'41.mp4',26098035,1,NULL,NULL),(413,10,'M',58,0,1,'58.mp4',10609984,1,NULL,NULL),(414,10,'M',57,0,1,'57.mp4',7189828,1,NULL,NULL),(415,10,'M',47,0,1,'47.mp4',21819255,1,NULL,NULL),(416,10,'M',26,0,1,'26.mp4',13660234,1,NULL,NULL),(417,10,'M',45,0,1,'45.mp4',2674720,1,NULL,NULL),(418,10,'M',28,0,1,'28.mp4',10398215,1,NULL,NULL),(419,10,'M',31,0,1,'31.mp4',24735336,1,NULL,NULL),(420,10,'M',43,0,1,'43.mp4',8881254,1,NULL,NULL),(421,10,'M',59,0,1,'59.mp4',4985562,1,NULL,NULL),(422,10,'M',62,0,1,'62.mp4',2900408,1,NULL,NULL),(423,10,'M',54,0,1,'54.mp4',5316058,1,NULL,NULL),(424,10,'M',63,0,1,'63.mp4',17544602,1,NULL,NULL),(425,10,'M',61,0,1,'61.mp4',19966679,1,NULL,NULL),(426,10,'L',28,0,1,'28.xlf',14551,1,NULL,NULL),(427,10,'W',98,0,1,NULL,0,1,NULL,NULL),(456,12,'P',-1,2357851,1,'bundle.min.js',2357851,1,'bundle','1'),(457,12,'P',-100000000,0,1,'fonts.css',0,1,'fontCss','1'),(462,12,'M',13,111947,1,'13.jpg',111947,1,NULL,NULL),(463,12,'M',10,146403,1,'10.jpg',146403,1,NULL,NULL),(464,12,'M',12,106116,1,'12.jpg',106116,1,NULL,NULL),(465,12,'M',15,174219,1,'15.jpg',174219,1,NULL,NULL),(466,12,'M',17,357189,1,'17.png',357189,1,NULL,NULL),(467,12,'M',14,105611,1,'14.jpg',105611,1,NULL,NULL),(468,12,'M',11,135608,1,'11.jpg',135608,1,NULL,NULL),(469,12,'M',16,258957,1,'16.png',258957,1,NULL,NULL),(470,12,'M',19,4643506,1,'19.mp4',4643506,1,NULL,NULL),(471,12,'M',18,1570024,1,'18.mp4',1570024,1,NULL,NULL),(598,10,'M',21,0,0,'21.jpg',434397,1,NULL,NULL),(599,10,'M',9,0,0,'9.jpg',150885,1,NULL,NULL),(600,10,'M',12,0,0,'12.jpg',106116,1,NULL,NULL),(601,10,'L',87,0,0,'87.xlf',2542,1,NULL,NULL),(602,10,'W',371,0,0,NULL,0,1,NULL,NULL),(603,10,'L',86,0,0,'86.xlf',1560,1,NULL,NULL),(604,10,'W',378,0,0,NULL,0,1,NULL,NULL),(605,10,'P',-300000002,0,0,'clock_bg_modern_dark.png',24097,1,'asset','clock_bg_modern_dark'),(606,10,'P',-300000003,0,0,'clock_bg_modern_light.png',29976,1,'asset','clock_bg_modern_light'),(607,10,'W',379,0,0,NULL,0,1,NULL,NULL),(612,12,'L',92,5414,1,'92.xlf',5414,1,NULL,NULL),(615,11,'L',93,3418,1,'93.xlf',3418,1,NULL,NULL);
/*!40000 ALTER TABLE `requiredfile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resolution`
--

DROP TABLE IF EXISTS `resolution`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resolution` (
  `resolutionId` int NOT NULL AUTO_INCREMENT,
  `resolution` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` smallint NOT NULL,
  `height` smallint NOT NULL,
  `intended_width` smallint NOT NULL,
  `intended_height` smallint NOT NULL,
  `version` tinyint NOT NULL DEFAULT '1',
  `enabled` tinyint NOT NULL DEFAULT '1',
  `userId` int NOT NULL,
  PRIMARY KEY (`resolutionId`),
  KEY `userId` (`userId`),
  CONSTRAINT `resolution_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resolution`
--

LOCK TABLES `resolution` WRITE;
/*!40000 ALTER TABLE `resolution` DISABLE KEYS */;
INSERT INTO `resolution` VALUES (1,'1080p HD Landscape',800,450,1920,1080,2,1,1),(2,'720p HD Landscape',800,450,1280,720,2,1,1),(3,'1080p HD Portrait',450,800,1080,1920,2,1,1),(4,'720p HD Portrait',450,800,720,1280,2,1,1),(5,'4k cinema',800,450,4096,2304,2,1,1),(6,'Common PC Monitor 4:3',800,600,1024,768,2,1,1),(7,'4k UHD Landscape',450,800,3840,2160,2,1,1),(8,'4k UHD Portrait',800,450,2160,3840,2,1,1);
/*!40000 ALTER TABLE `resolution` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saved_report`
--

DROP TABLE IF EXISTS `saved_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `saved_report` (
  `savedReportId` int NOT NULL AUTO_INCREMENT,
  `saveAs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reportScheduleId` int NOT NULL,
  `generatedOn` int NOT NULL,
  `userId` int NOT NULL,
  `schemaVersion` tinyint NOT NULL DEFAULT '1',
  `fileName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint DEFAULT NULL,
  `md5` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`savedReportId`),
  KEY `userId` (`userId`),
  KEY `reportScheduleId` (`reportScheduleId`),
  CONSTRAINT `saved_report_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `saved_report_ibfk_3` FOREIGN KEY (`reportScheduleId`) REFERENCES `reportschedule` (`reportScheduleId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saved_report`
--

LOCK TABLES `saved_report` WRITE;
/*!40000 ALTER TABLE `saved_report` DISABLE KEYS */;
/*!40000 ALTER TABLE `saved_report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedule` (
  `eventId` int NOT NULL AUTO_INCREMENT,
  `eventTypeId` int NOT NULL,
  `campaignId` int DEFAULT NULL,
  `commandId` int DEFAULT NULL,
  `dayPartId` int NOT NULL DEFAULT '0',
  `userId` int NOT NULL,
  `fromDt` bigint DEFAULT NULL,
  `toDt` bigint DEFAULT NULL,
  `is_priority` tinyint NOT NULL,
  `displayOrder` int NOT NULL DEFAULT '0',
  `lastRecurrenceWatermark` bigint DEFAULT NULL,
  `syncTimezone` tinyint NOT NULL DEFAULT '0',
  `recurrence_type` enum('Minute','Hour','Day','Week','Month','Year') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recurrence_detail` int DEFAULT NULL,
  `recurrence_range` bigint DEFAULT NULL,
  `recurrenceRepeatsOn` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syncEvent` int NOT NULL DEFAULT '0',
  `recurrenceMonthlyRepeatsOn` tinyint NOT NULL DEFAULT '0',
  `shareOfVoice` smallint DEFAULT NULL,
  `isGeoAware` tinyint NOT NULL DEFAULT '0',
  `geoLocation` text COLLATE utf8mb4_unicode_ci,
  `actionTriggerCode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actionType` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actionLayoutCode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxPlaysPerHour` smallint NOT NULL DEFAULT '0',
  `parentCampaignId` int DEFAULT NULL,
  `syncGroupId` int DEFAULT NULL,
  `modifiedBy` int DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  `updatedOn` datetime DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataSetId` int DEFAULT NULL,
  `dataSetParams` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`eventId`),
  KEY `campaignId` (`campaignId`),
  KEY `userId` (`userId`),
  KEY `syncGroupId` (`syncGroupId`),
  KEY `dataSetId` (`dataSetId`),
  CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`syncGroupId`) REFERENCES `syncgroup` (`syncGroupId`),
  CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`dataSetId`) REFERENCES `dataset` (`dataSetId`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` VALUES (18,1,3,NULL,1,1,1737550200,1737550800,1,0,NULL,1,NULL,NULL,NULL,NULL,0,0,NULL,0,'','','navLayout',NULL,0,NULL,NULL,NULL,'2025-01-22 18:17:26',NULL,NULL,NULL,NULL),(23,1,10,NULL,3,1,1738002600,NULL,0,0,1738323000,1,'Day',1,1738758600,NULL,0,0,NULL,0,'','','navLayout',NULL,0,NULL,NULL,NULL,'2025-01-28 16:20:34',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule_criteria`
--

DROP TABLE IF EXISTS `schedule_criteria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedule_criteria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `eventId` int NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metric` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `eventId` (`eventId`),
  CONSTRAINT `schedule_criteria_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule_criteria`
--

LOCK TABLES `schedule_criteria` WRITE;
/*!40000 ALTER TABLE `schedule_criteria` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule_criteria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule_sync`
--

DROP TABLE IF EXISTS `schedule_sync`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedule_sync` (
  `eventId` int NOT NULL,
  `displayId` int NOT NULL,
  `layoutId` int NOT NULL,
  PRIMARY KEY (`eventId`,`displayId`),
  KEY `displayId` (`displayId`),
  KEY `layoutId` (`layoutId`),
  CONSTRAINT `schedule_sync_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`),
  CONSTRAINT `schedule_sync_ibfk_2` FOREIGN KEY (`displayId`) REFERENCES `display` (`displayId`),
  CONSTRAINT `schedule_sync_ibfk_3` FOREIGN KEY (`layoutId`) REFERENCES `layout` (`layoutId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule_sync`
--

LOCK TABLES `schedule_sync` WRITE;
/*!40000 ALTER TABLE `schedule_sync` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule_sync` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scheduleexclusions`
--

DROP TABLE IF EXISTS `scheduleexclusions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `scheduleexclusions` (
  `scheduleExclusionId` int NOT NULL AUTO_INCREMENT,
  `eventId` int NOT NULL,
  `fromDt` int NOT NULL,
  `toDt` int NOT NULL,
  PRIMARY KEY (`scheduleExclusionId`),
  KEY `eventId` (`eventId`),
  CONSTRAINT `scheduleexclusions_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scheduleexclusions`
--

LOCK TABLES `scheduleexclusions` WRITE;
/*!40000 ALTER TABLE `scheduleexclusions` DISABLE KEYS */;
/*!40000 ALTER TABLE `scheduleexclusions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedulereminder`
--

DROP TABLE IF EXISTS `schedulereminder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `schedulereminder` (
  `scheduleReminderId` int NOT NULL AUTO_INCREMENT,
  `eventId` int NOT NULL,
  `value` int NOT NULL,
  `type` int NOT NULL,
  `option` int NOT NULL,
  `reminderDt` int NOT NULL,
  `lastReminderDt` int NOT NULL,
  `isEmail` tinyint NOT NULL,
  PRIMARY KEY (`scheduleReminderId`),
  KEY `eventId` (`eventId`),
  CONSTRAINT `schedulereminder_ibfk_1` FOREIGN KEY (`eventId`) REFERENCES `schedule` (`eventId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedulereminder`
--

LOCK TABLES `schedulereminder` WRITE;
/*!40000 ALTER TABLE `schedulereminder` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedulereminder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `session` (
  `session_id` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_expiration` int unsigned NOT NULL DEFAULT '0',
  `lastAccessed` datetime DEFAULT NULL,
  `userId` int DEFAULT NULL,
  `isExpired` tinyint NOT NULL DEFAULT '1',
  `userAgent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remoteAddr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`session_id`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_history`
--

DROP TABLE IF EXISTS `session_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `session_history` (
  `sessionId` int NOT NULL AUTO_INCREMENT,
  `ipAddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userAgent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startTime` datetime DEFAULT NULL,
  `userId` int DEFAULT NULL,
  `lastUsedTime` datetime DEFAULT NULL,
  PRIMARY KEY (`sessionId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=415 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_history`
--

LOCK TABLES `session_history` WRITE;
/*!40000 ALTER TABLE `session_history` DISABLE KEYS */;
INSERT INTO `session_history` VALUES (1,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-20 12:24:44',0,'2024-12-20 12:24:44'),(2,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-20 12:24:49',1,'2024-12-20 12:43:17'),(3,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-20 12:44:18',0,'2024-12-20 12:44:18'),(4,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-20 12:44:18',0,'2024-12-20 12:44:18'),(5,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-23 18:50:06',0,'2024-12-23 18:50:06'),(6,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-23 18:50:13',1,'2024-12-23 19:22:59'),(7,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 11:05:00',0,'2024-12-24 11:05:00'),(8,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 11:05:03',1,'2024-12-24 11:54:31'),(9,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 11:19:20',0,'2024-12-24 11:21:09'),(10,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 11:21:15',1,'2024-12-24 12:03:31'),(11,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 11:29:11',0,'2024-12-24 11:29:11'),(12,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 11:29:16',2,'2024-12-24 11:34:11'),(13,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 11:34:18',2,'2024-12-24 12:03:15'),(14,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 12:07:20',0,'2024-12-24 12:08:27'),(15,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 12:10:14',1,'2024-12-24 13:26:42'),(16,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-24 15:43:08',1,'2024-12-24 18:41:36'),(17,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-26 10:03:33',0,'2024-12-26 10:03:43'),(18,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-26 10:03:47',1,'2024-12-26 11:00:44'),(19,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-27 09:50:11',0,'2024-12-27 16:05:48'),(20,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-27 16:05:52',1,'2024-12-27 17:32:18'),(21,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-27 17:32:23',1,'2024-12-27 18:33:47'),(22,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-31 11:04:34',0,'2024-12-31 11:04:34'),(23,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-31 11:04:38',1,'2024-12-31 11:47:25'),(24,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2024-12-31 11:47:30',1,'2024-12-31 12:07:43'),(25,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-02 10:18:10',0,'2025-01-02 10:18:24'),(26,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-02 10:18:28',1,'2025-01-02 10:54:44'),(27,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-02 11:17:07',1,'2025-01-02 14:17:59'),(28,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-02 17:18:30',1,'2025-01-02 17:54:31'),(29,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-02 18:37:26',1,'2025-01-02 18:51:26'),(30,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-03 10:17:58',0,'2025-01-03 10:17:58'),(31,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-03 10:18:01',1,'2025-01-03 11:54:01'),(32,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-03 14:59:03',1,'2025-01-03 15:35:20'),(33,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-03 15:37:32',1,'2025-01-03 17:36:40'),(34,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-03 17:39:38',1,'2025-01-03 18:33:15'),(35,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-04 17:56:29',0,'2025-01-04 17:56:45'),(36,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-04 17:56:29',0,'2025-01-04 17:56:29'),(37,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-04 17:56:29',0,'2025-01-04 17:56:29'),(38,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-04 17:56:50',1,'2025-01-04 18:30:22'),(39,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 10:15:33',0,'2025-01-06 10:15:33'),(40,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 10:15:36',1,'2025-01-06 11:47:27'),(41,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 11:47:32',1,'2025-01-06 12:35:47'),(42,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 12:35:51',1,'2025-01-06 12:59:51'),(43,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 12:59:54',1,'2025-01-06 15:36:40'),(44,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 13:00:29',0,'2025-01-06 15:18:38'),(45,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 15:18:42',1,'2025-01-06 16:03:00'),(46,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 15:36:43',1,'2025-01-06 16:04:04'),(47,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 16:03:06',1,'2025-01-06 16:03:16'),(48,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 16:03:23',1,'2025-01-06 17:20:21'),(49,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 16:04:12',1,'2025-01-06 16:04:22'),(50,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 16:04:27',1,'2025-01-06 16:09:51'),(51,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 16:09:59',1,'2025-01-06 16:44:37'),(52,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 16:44:41',1,'2025-01-06 19:01:24'),(53,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 17:20:30',1,'2025-01-06 17:21:16'),(54,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 17:21:23',1,'2025-01-06 17:22:43'),(55,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 17:22:52',1,'2025-01-06 17:23:16'),(56,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 17:23:24',1,'2025-01-06 17:24:28'),(57,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 17:24:36',1,'2025-01-06 17:25:11'),(58,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 17:25:16',1,'2025-01-06 17:26:19'),(59,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 17:26:23',1,'2025-01-06 17:26:58'),(60,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 17:27:04',1,'2025-01-06 17:37:50'),(61,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-06 17:50:52',1,'2025-01-06 18:57:33'),(62,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 10:20:05',0,'2025-01-07 10:39:56'),(63,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 10:40:07',1,'2025-01-07 11:11:30'),(64,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 10:50:22',0,'2025-01-07 10:50:22'),(65,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 10:50:56',1,'2025-01-07 11:03:29'),(66,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:03:40',1,'2025-01-07 11:07:54'),(67,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:08:01',1,'2025-01-07 11:08:26'),(68,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:08:37',1,'2025-01-07 11:10:59'),(69,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:11:05',1,'2025-01-07 11:47:22'),(70,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:11:35',1,'2025-01-07 11:14:33'),(71,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:14:38',1,'2025-01-07 11:14:48'),(72,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:14:53',1,'2025-01-07 11:16:34'),(73,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:16:43',1,'2025-01-07 11:16:56'),(74,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:17:06',1,'2025-01-07 11:22:43'),(76,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:22:59',0,'2025-01-07 11:23:19'),(79,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:24:14',0,'2025-01-07 11:24:15'),(82,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:24:43',0,'2025-01-07 11:24:44'),(83,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:24:51',1,'2025-01-07 11:25:06'),(84,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:25:19',1,'2025-01-07 11:26:06'),(86,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:26:47',0,'2025-01-07 11:26:54'),(87,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:27:04',1,'2025-01-07 11:34:41'),(90,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:35:32',0,'2025-01-07 11:35:32'),(91,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:35:40',1,'2025-01-07 11:35:40'),(93,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:35:54',0,'2025-01-07 11:35:54'),(95,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:39:39',0,'2025-01-07 11:40:16'),(96,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:40:25',1,'2025-01-07 11:45:09'),(98,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:47:13',0,'2025-01-07 11:47:15'),(101,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:47:31',0,'2025-01-07 11:47:31'),(102,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:47:38',1,'2025-01-07 11:55:39'),(103,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 11:55:47',1,'2025-01-07 11:55:51'),(104,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 12:30:01',1,'2025-01-07 12:39:44'),(105,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 12:46:16',0,'2025-01-07 12:46:16'),(106,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 12:46:31',1,'2025-01-07 13:01:23'),(109,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 13:03:05',0,'2025-01-07 13:03:34'),(110,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 13:03:43',1,'2025-01-07 13:09:05'),(113,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 13:09:40',0,'2025-01-07 13:11:24'),(114,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 13:11:35',1,'2025-01-07 13:11:35'),(115,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 13:11:51',1,'2025-01-07 13:11:51'),(116,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 13:12:01',1,'2025-01-07 13:12:01'),(117,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 13:12:14',1,'2025-01-07 13:12:14'),(119,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 13:12:28',0,'2025-01-07 14:29:53'),(120,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 14:31:24',1,'2025-01-07 14:31:51'),(122,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 14:32:21',0,'2025-01-07 14:32:21'),(123,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 14:32:31',1,'2025-01-07 14:32:44'),(125,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 14:32:59',0,'2025-01-07 14:32:59'),(126,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 14:33:22',1,'2025-01-07 14:35:35'),(128,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 14:35:57',0,'2025-01-07 14:36:43'),(129,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 14:36:52',1,'2025-01-07 14:53:11'),(132,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 14:53:52',0,'2025-01-07 14:59:54'),(133,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:00:04',1,'2025-01-07 15:20:24'),(135,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:20:47',0,'2025-01-07 15:20:47'),(136,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:20:56',1,'2025-01-07 15:21:09'),(138,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:21:25',0,'2025-01-07 15:21:25'),(139,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:21:39',1,'2025-01-07 15:21:45'),(141,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:21:57',0,'2025-01-07 15:23:28'),(142,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:23:36',1,'2025-01-07 15:23:42'),(144,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:23:56',0,'2025-01-07 15:23:56'),(145,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:24:20',1,'2025-01-07 15:24:32'),(147,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:26:43',0,'2025-01-07 15:26:43'),(148,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:26:49',1,'2025-01-07 15:30:30'),(150,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:30:41',0,'2025-01-07 15:30:41'),(151,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:30:48',1,'2025-01-07 15:31:36'),(153,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:31:58',0,'2025-01-07 15:32:48'),(154,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:32:57',1,'2025-01-07 15:34:28'),(157,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:37:30',0,'2025-01-07 15:37:30'),(158,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:37:38',1,'2025-01-07 15:37:43'),(159,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:37:51',1,'2025-01-07 15:37:56'),(160,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:38:06',1,'2025-01-07 15:38:33'),(161,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:38:41',1,'2025-01-07 15:38:44'),(162,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:38:52',1,'2025-01-07 15:44:56'),(163,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:45:03',1,'2025-01-07 15:45:03'),(164,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:46:37',1,'2025-01-07 15:46:39'),(165,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:46:46',1,'2025-01-07 15:47:07'),(168,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:47:55',0,'2025-01-07 15:47:55'),(169,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:48:35',1,'2025-01-07 15:48:43'),(171,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:49:26',0,'2025-01-07 15:49:42'),(172,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:49:51',1,'2025-01-07 15:50:43'),(175,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:51:35',0,'2025-01-07 15:51:35'),(176,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:51:42',1,'2025-01-07 15:51:46'),(177,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:52:02',1,'2025-01-07 15:52:02'),(178,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:52:18',1,'2025-01-07 15:52:23'),(179,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:52:32',1,'2025-01-07 15:52:36'),(180,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:52:43',1,'2025-01-07 15:55:59'),(181,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:52:50',0,'2025-01-07 15:52:50'),(182,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:52:57',1,'2025-01-07 15:55:56'),(183,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:56:06',1,'2025-01-07 15:58:53'),(184,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:56:18',1,'2025-01-07 16:14:53'),(185,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 15:59:11',1,'2025-01-07 16:15:11'),(186,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 16:15:17',1,'2025-01-07 16:15:21'),(187,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 16:15:28',1,'2025-01-07 16:15:31'),(188,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-07 16:19:02',1,'2025-01-07 18:38:51'),(189,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 09:38:49',0,'2025-01-08 10:35:43'),(190,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 09:38:49',0,'2025-01-08 09:38:49'),(191,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:32:14',0,'2025-01-08 10:35:33'),(192,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:35:39',1,'2025-01-08 10:38:11'),(194,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:35:52',0,'2025-01-08 10:35:52'),(196,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:36:01',0,'2025-01-08 10:36:02'),(198,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:36:12',0,'2025-01-08 10:36:12'),(199,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:36:27',1,'2025-01-08 10:37:58'),(201,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:38:08',0,'2025-01-08 10:38:49'),(203,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:38:21',0,'2025-01-08 10:38:38'),(204,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:38:44',1,'2025-01-08 10:40:17'),(206,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:38:58',0,'2025-01-08 10:40:06'),(207,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:40:13',1,'2025-01-08 12:02:56'),(209,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 10:40:26',0,'2025-01-08 12:03:30'),(211,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 12:03:03',0,'2025-01-08 12:03:15'),(212,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 12:03:22',1,'2025-01-08 14:12:26'),(214,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 12:03:42',0,'2025-01-08 12:03:42'),(216,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 14:12:34',0,'2025-01-08 14:12:53'),(217,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 14:13:01',1,'2025-01-08 14:49:11'),(219,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 15:58:47',0,'2025-01-08 15:58:52'),(220,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 15:58:58',1,'2025-01-08 17:09:20'),(222,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 17:34:33',0,'2025-01-08 17:34:34'),(223,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 17:34:39',1,'2025-01-08 18:31:30'),(224,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 17:54:14',0,'2025-01-08 17:54:14'),(225,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-08 17:54:25',2,'2025-01-08 18:31:09'),(226,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 10:11:02',0,'2025-01-09 10:11:02'),(227,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 10:11:09',1,'2025-01-09 10:52:51'),(229,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 10:53:03',0,'2025-01-09 10:53:03'),(230,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 10:53:09',1,'2025-01-09 12:51:13'),(231,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 10:53:16',0,'2025-01-09 10:53:16'),(233,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 10:53:25',0,'2025-01-09 10:53:25'),(235,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 10:53:34',0,'2025-01-09 10:53:34'),(237,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 12:51:24',0,'2025-01-09 12:51:25'),(238,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 12:51:30',1,'2025-01-09 12:55:03'),(240,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 12:55:18',0,'2025-01-09 12:55:18'),(241,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 12:55:23',1,'2025-01-09 14:21:25'),(243,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 15:34:14',0,'2025-01-09 15:34:14'),(244,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 15:34:21',1,'2025-01-09 16:30:38'),(246,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 16:49:18',0,'2025-01-09 16:49:18'),(247,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-09 16:49:26',1,'2025-01-09 18:37:37'),(248,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-10 10:06:06',0,'2025-01-10 10:06:07'),(249,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-10 10:06:13',1,'2025-01-10 12:03:17'),(251,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-10 12:03:27',0,'2025-01-10 12:03:27'),(252,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-10 12:03:32',1,'2025-01-10 14:27:13'),(254,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-10 14:27:23',0,'2025-01-10 14:27:23'),(255,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-10 14:27:31',1,'2025-01-10 17:30:44'),(257,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-10 17:30:51',0,'2025-01-10 17:30:51'),(258,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-10 17:30:58',1,'2025-01-10 18:28:43'),(259,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:03:04',0,'2025-01-12 12:03:04'),(260,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:03:04',0,'2025-01-12 12:03:04'),(261,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:03:04',0,'2025-01-12 12:05:47'),(262,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:05:55',1,'2025-01-12 12:10:22'),(263,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:10:29',1,'2025-01-12 12:10:33'),(264,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:10:41',1,'2025-01-12 12:12:06'),(265,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:10:47',0,'2025-01-12 12:10:47'),(266,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:10:54',1,'2025-01-12 12:11:54'),(267,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:12:01',1,'2025-01-12 12:35:39'),(268,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:12:13',1,'2025-01-12 12:12:41'),(270,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:12:50',0,'2025-01-12 12:12:50'),(272,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:13:05',0,'2025-01-12 12:13:40'),(273,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:13:49',1,'2025-01-12 12:13:49'),(276,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:14:10',0,'2025-01-12 12:14:10'),(277,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:14:18',1,'2025-01-12 12:14:24'),(279,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:15:09',0,'2025-01-12 12:15:13'),(280,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:15:20',1,'2025-01-12 12:15:24'),(283,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:15:44',0,'2025-01-12 12:15:44'),(284,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:15:49',1,'2025-01-12 12:15:53'),(286,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:16:58',0,'2025-01-12 12:16:58'),(287,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:17:10',1,'2025-01-12 12:17:27'),(289,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:21:47',0,'2025-01-12 12:21:47'),(290,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:21:54',1,'2025-01-12 12:21:54'),(292,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:22:11',0,'2025-01-12 12:22:11'),(293,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:22:25',1,'2025-01-12 12:22:33'),(295,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:23:32',0,'2025-01-12 12:23:32'),(296,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:23:40',1,'2025-01-12 12:24:04'),(298,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:24:21',0,'2025-01-12 12:24:21'),(299,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:24:29',1,'2025-01-12 12:25:11'),(301,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:25:22',0,'2025-01-12 12:25:43'),(302,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:25:51',1,'2025-01-12 12:25:51'),(304,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:26:02',0,'2025-01-12 12:26:02'),(305,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:26:08',1,'2025-01-12 12:26:44'),(307,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:27:23',0,'2025-01-12 12:27:23'),(308,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:28:17',1,'2025-01-12 12:28:24'),(309,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:28:39',1,'2025-01-12 12:32:17'),(311,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:32:39',0,'2025-01-12 12:32:39'),(312,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:32:52',1,'2025-01-12 12:33:01'),(313,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:33:08',1,'2025-01-12 12:33:32'),(314,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:33:39',1,'2025-01-12 12:33:46'),(315,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:33:52',1,'2025-01-12 12:34:01'),(316,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:34:14',1,'2025-01-12 12:35:07'),(317,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:35:13',1,'2025-01-12 12:36:23'),(318,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:36:05',1,'2025-01-12 12:36:29'),(319,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:36:35',1,'2025-01-12 12:36:40'),(320,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:36:45',1,'2025-01-12 12:38:38'),(321,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:37:41',1,'2025-01-12 12:41:04'),(322,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-12 12:41:10',1,'2025-01-12 12:42:04'),(323,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-14 12:56:24',0,'2025-01-14 12:56:25'),(324,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-14 13:01:56',1,'2025-01-14 13:02:04'),(325,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-16 09:55:13',0,'2025-01-16 09:55:14'),(326,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-16 09:55:19',1,'2025-01-16 11:47:03'),(327,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-16 11:57:52',1,'2025-01-16 14:07:13'),(328,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 09:42:58',0,'2025-01-17 09:42:59'),(329,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 09:43:06',1,'2025-01-17 10:41:14'),(330,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 10:41:54',0,'2025-01-17 10:41:54'),(331,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 10:41:54',0,'2025-01-17 10:41:54'),(333,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 10:45:11',0,'2025-01-17 10:45:11'),(334,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 10:45:11',0,'2025-01-17 10:45:12'),(336,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 10:45:20',0,'2025-01-17 10:45:20'),(337,'192.168.4.65','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 10:45:20',0,'2025-01-17 10:45:20'),(338,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 10:45:29',1,'2025-01-17 15:10:08'),(339,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-17 15:10:29',1,'2025-01-17 15:59:14'),(340,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-20 10:40:30',0,'2025-01-20 10:40:31'),(341,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-20 10:40:40',1,'2025-01-20 11:16:06'),(342,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 11:51:26',0,'2025-01-21 12:45:04'),(343,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 11:52:07',0,'2025-01-21 11:52:47'),(344,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 11:52:57',0,'2025-01-21 11:53:08'),(345,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 12:45:11',1,'2025-01-21 12:45:14'),(347,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 12:45:25',0,'2025-01-21 12:45:25'),(348,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 12:45:34',1,'2025-01-21 12:47:16'),(349,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 12:45:39',0,'2025-01-21 12:45:39'),(351,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 12:45:49',0,'2025-01-21 12:45:49'),(354,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 12:46:01',0,'2025-01-21 12:46:03'),(356,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 12:46:13',0,'2025-01-21 13:01:10'),(358,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 12:47:31',0,'2025-01-21 12:47:31'),(359,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 12:47:39',1,'2025-01-21 13:01:15'),(360,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 13:01:22',1,'2025-01-21 13:01:29'),(361,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 13:01:35',1,'2025-01-21 14:21:11'),(362,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 14:57:51',1,'2025-01-21 15:31:26'),(363,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 16:02:14',1,'2025-01-21 16:38:28'),(364,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 16:40:05',1,'2025-01-21 18:08:32'),(365,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-21 18:19:57',1,'2025-01-21 18:47:08'),(366,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-22 10:31:36',0,'2025-01-22 10:31:36'),(367,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-22 10:31:44',1,'2025-01-22 11:08:29'),(368,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-22 11:08:36',1,'2025-01-22 14:21:39'),(369,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-22 14:40:00',1,'2025-01-22 16:01:40'),(370,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-22 16:01:47',1,'2025-01-22 17:54:31'),(371,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-22 17:54:39',1,'2025-01-22 18:54:59'),(372,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-23 10:00:28',0,'2025-01-23 10:42:48'),(373,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-23 10:00:28',0,'2025-01-23 10:00:28'),(374,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-23 10:42:55',1,'2025-01-23 15:53:53'),(375,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-24 09:49:56',0,'2025-01-24 09:49:59'),(376,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-24 10:43:27',1,'2025-01-24 11:19:40'),(377,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-24 14:55:43',1,'2025-01-24 15:29:08'),(378,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-27 10:52:21',0,'2025-01-27 10:52:21'),(379,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-27 10:52:30',1,'2025-01-27 12:01:09'),(380,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-27 12:01:19',1,'2025-01-27 15:07:25'),(381,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-27 15:07:25',1,'2025-01-27 15:07:25'),(382,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-27 15:07:25',0,'2025-01-27 15:21:45'),(383,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-27 15:08:35',0,'2025-01-27 15:08:46'),(384,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-27 15:21:54',1,'2025-01-27 15:22:18'),(385,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-27 15:22:05',0,'2025-01-27 15:22:13'),(386,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-27 15:22:25',1,'2025-01-27 16:31:37'),(387,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-28 09:34:04',0,'2025-01-28 10:56:54'),(388,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-28 11:23:42',1,'2025-01-28 12:08:46'),(389,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-28 15:03:31',1,'2025-01-28 17:46:52'),(390,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-29 10:23:54',0,'2025-01-29 10:23:54'),(391,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-29 10:24:01',1,'2025-01-29 11:25:31'),(392,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-29 12:36:18',1,'2025-01-29 16:19:22'),(393,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-30 09:59:18',0,'2025-01-30 10:36:47'),(394,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-30 22:07:04',0,'2025-01-30 22:07:04'),(395,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-01-31 10:36:03',0,'2025-01-31 10:36:04'),(396,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-02-03 10:43:55',0,'2025-02-03 10:43:56'),(397,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-02-03 10:44:02',1,'2025-02-03 11:19:10'),(398,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','2025-02-04 09:51:23',0,'2025-02-04 09:51:23'),(399,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','2025-02-04 22:03:37',0,'2025-02-04 22:03:38'),(400,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','2025-02-05 10:15:55',0,'2025-02-05 12:09:47'),(401,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','2025-02-05 15:42:54',0,'2025-02-05 15:42:56'),(402,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36','2025-02-05 15:43:02',1,'2025-02-05 17:16:02'),(403,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-02-06 10:04:23',0,'2025-02-06 10:04:23'),(404,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-02-07 11:45:34',0,'2025-02-07 11:45:37'),(405,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-05 11:24:26',0,'2025-03-05 11:24:26'),(406,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-05 11:24:32',1,'2025-03-05 11:51:20'),(407,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-05 11:24:38',0,'2025-03-05 12:00:57'),(408,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-05 11:51:27',1,'2025-03-05 12:00:34'),(409,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-05 12:00:45',1,'2025-03-05 12:01:05'),(410,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-05 12:01:11',1,'2025-03-05 12:01:27'),(411,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-05 23:00:37',0,'2025-03-05 23:00:38'),(412,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-06 17:17:09',0,'2025-03-06 17:17:10'),(413,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-06 17:18:28',1,'2025-03-06 17:48:09'),(414,'::1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','2025-03-06 17:18:43',0,'2025-03-06 17:18:50');
/*!40000 ALTER TABLE `session_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setting` (
  `settingId` int NOT NULL AUTO_INCREMENT,
  `setting` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userSee` tinyint NOT NULL DEFAULT '1',
  `userChange` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`settingId`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES (3,'defaultUsertype','User',1,1),(7,'userModule','module_user_general.php',0,0),(11,'defaultTimezone','Asia/Kolkata',1,1),(18,'mail_to','mail@yoursite.com',1,1),(19,'mail_from','mail@yoursite.com',1,1),(30,'audit','emergency',1,1),(33,'LIBRARY_LOCATION','/var/www/html/cms412/images/',1,1),(34,'SERVER_KEY','5iSUwd',1,1),(35,'HELP_BASE','www.oasys.co',1,1),(36,'PHONE_HOME','1',1,1),(37,'PHONE_HOME_KEY','667fa02e9def6da0e301754b6577b123',0,0),(38,'PHONE_HOME_URL','https://xibo.org.uk/api/stats/track',0,0),(39,'PHONE_HOME_DATE','1737697120',0,0),(40,'SERVER_MODE','Production',1,1),(41,'MAINTENANCE_ENABLED','Off',1,1),(42,'MAINTENANCE_EMAIL_ALERTS','1',1,1),(44,'MAINTENANCE_LOG_MAXAGE','30',1,1),(45,'MAINTENANCE_STAT_MAXAGE','30',1,1),(46,'MAINTENANCE_ALERT_TOUT','12',1,1),(47,'SHOW_DISPLAY_AS_VNCLINK','',1,1),(48,'SHOW_DISPLAY_AS_VNC_TGT','_top',1,1),(49,'MAINTENANCE_ALWAYS_ALERT','0',1,1),(50,'SCHEDULE_LOOKAHEAD','1',1,0),(51,'REQUIRED_FILES_LOOKAHEAD','172800',1,1),(52,'REGION_OPTIONS_COLOURING','Media Colouring',1,1),(53,'LAYOUT_COPY_MEDIA_CHECKB','0',1,1),(54,'MAX_LICENSED_DISPLAYS','0',0,0),(55,'LIBRARY_MEDIA_UPDATEINALL_CHECKB','1',1,1),(56,'USER_PASSWORD_POLICY','',1,1),(57,'USER_PASSWORD_ERROR','',1,1),(59,'LIBRARY_SIZE_LIMIT_KB','0',1,0),(60,'MONTHLY_XMDS_TRANSFER_LIMIT_KB','0',1,0),(61,'DEFAULT_LANGUAGE','en_GB',1,1),(62,'TRANSITION_CONFIG_LOCKED_CHECKB','0',1,0),(63,'GLOBAL_THEME_NAME','compact',1,1),(64,'DEFAULT_LAT','51.504',1,1),(65,'DEFAULT_LONG','-0.104',1,1),(66,'SCHEDULE_WITH_VIEW_PERMISSION','0',1,1),(67,'SETTING_IMPORT_ENABLED','1',1,1),(68,'SETTING_LIBRARY_TIDY_ENABLED','1',1,1),(69,'SENDFILE_MODE','Off',1,1),(70,'EMBEDDED_STATUS_WIDGET','',1,0),(71,'PROXY_HOST','',1,1),(72,'PROXY_PORT','0',1,1),(73,'PROXY_AUTH','',1,1),(74,'DATE_FORMAT','Y-m-d H:i',1,1),(75,'DETECT_LANGUAGE','1',1,1),(76,'DEFAULTS_IMPORTED','0',0,0),(77,'FORCE_HTTPS','0',1,1),(78,'ISSUE_STS','0',1,1),(79,'STS_TTL','600',1,1),(81,'CALENDAR_TYPE','Gregorian',1,1),(82,'DASHBOARD_LATEST_NEWS_ENABLED','0',1,1),(83,'LIBRARY_MEDIA_DELETEOLDVER_CHECKB','1',1,1),(84,'PROXY_EXCEPTIONS','',1,1),(85,'INSTANCE_SUSPENDED','0',0,0),(87,'XMR_ADDRESS','tcp://localhost:5555',1,1),(88,'XMR_PUB_ADDRESS','',1,1),(89,'CDN_URL','',0,0),(90,'ELEVATE_LOG_UNTIL','1736668441',1,1),(91,'RESTING_LOG_LEVEL','emergency',1,1),(92,'TASK_CONFIG_LOCKED_CHECKB','0',0,0),(93,'WHITELIST_LOAD_BALANCERS','',1,1),(94,'DEFAULT_LAYOUT','74',1,1),(95,'DISPLAY_PROFILE_STATS_DEFAULT','0',1,1),(96,'DISPLAY_PROFILE_CURRENT_LAYOUT_STATUS_ENABLED','1',1,1),(97,'DISPLAY_PROFILE_SCREENSHOT_INTERVAL_ENABLED','1',1,1),(98,'DISPLAY_PROFILE_SCREENSHOT_SIZE_DEFAULT','200',1,1),(99,'LATEST_NEWS_URL','http://xibo.org.uk/feed',0,0),(100,'DISPLAY_LOCK_NAME_TO_DEVICENAME','0',1,1),(101,'mail_from_name','',1,1),(102,'SCHEDULE_SHOW_LAYOUT_NAME','0',1,1),(103,'DEFAULT_USERGROUP','1',1,1),(104,'PASSWORD_REMINDER_ENABLED','Off',1,1),(105,'DISPLAY_AUTO_AUTH','0',0,0),(106,'EVENT_SYNC','0',0,0),(107,'DEFAULT_TRANSITION_DURATION','1000',1,1),(108,'LAYOUT_STATS_ENABLED_DEFAULT','0',1,1),(109,'DISPLAY_PROFILE_AGGREGATION_LEVEL_DEFAULT','Individual',1,1),(110,'MEDIA_STATS_ENABLED_DEFAULT','Inherit',1,1),(111,'WIDGET_STATS_ENABLED_DEFAULT','Inherit',1,1),(112,'NAVIGATION_MENU_POSITION','vertical',1,1),(113,'TWOFACTOR_ISSUER','',1,1),(114,'PLAYLIST_STATS_ENABLED_DEFAULT','Inherit',1,1),(115,'DEFAULT_RESIZE_LIMIT','6000',1,1),(116,'DEFAULT_RESIZE_THRESHOLD','1920',1,1),(118,'DEFAULT_TRANSITION_IN','fadeIn',1,1),(119,'DEFAULT_TRANSITION_OUT','fadeOut',1,1),(120,'DEFAULT_LAYOUT_AUTO_PUBLISH_CHECKB','0',1,1),(121,'QUICK_CHART_URL','https://quickchart.io',1,1),(122,'DEFAULT_TRANSITION_AUTO_APPLY','0',1,1),(123,'SYSTEM_USER','1',1,1),(124,'DATASET_HARD_ROW_LIMIT','10000',1,1),(125,'DISPLAY_SCREENSHOT_TTL','0',1,1),(126,'DEFAULT_PURGE_LIST_TTL','7',1,1),(127,'DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER','30',1,1),(128,'DEFAULT_DYNAMIC_PLAYLIST_MAXNUMBER_LIMIT','100',1,1),(129,'REPORTS_EXPORT_SHOW_LOGO','1',1,1),(130,'FOLDERS_ALLOW_SAVE_IN_ROOT','1',1,1),(131,'DISPLAY_DEFAULT_FOLDER','',1,1),(132,'APK_VERSION_MODULE','Off',1,1),(133,'APK_VERSION','1.1',1,1),(134,'APK_DOWNLOAD_URL','https://cdma.oasys.co/signage/web/apk/dss_oasys-release.apk',1,1),(135,'BRIGHTNESS_SLIDER_MODULE','Off',1,1),(136,'VOLUME_SLIDER_MODULE','Off',1,1),(137,'APK_DOWNLOAD_URL_MODULE','Off',1,1),(138,'SECURITY_KEY_MODULE','Off',1,1),(139,'LEAVE_CALENDER_MODULE','Off',1,1),(140,'LICENCE_MODULE','Off',1,1),(141,'DEVICE_VOLUME_CONTROL','Off',1,1),(142,'DEVICE_OFF_DATE','2021-09-02',1,1),(143,'DEVICE_OFF_TIME','01:00:00',1,1),(144,'LICENCE_EXPIRY_DATE','2028-02-01',1,1),(145,'LICENCE_EXPIRY_TIME','15:15:00',1,1),(146,'DEVICE_LIMIT','5000',1,1),(147,'VOLUME_SLIDER_VALUE','0',1,1),(148,'BRIGHTNESS_SLIDER_VALUE','45',1,1);
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stat`
--

DROP TABLE IF EXISTS `stat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stat` (
  `statId` int NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statDate` int NOT NULL,
  `scheduleId` int NOT NULL,
  `displayId` int NOT NULL,
  `campaignId` int DEFAULT NULL,
  `layoutId` int DEFAULT NULL,
  `mediaId` int DEFAULT NULL,
  `widgetId` int DEFAULT NULL,
  `start` int NOT NULL,
  `end` int NOT NULL,
  `tag` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int NOT NULL,
  `count` int NOT NULL,
  `engagements` text COLLATE utf8mb4_unicode_ci,
  `parentCampaignId` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`statId`),
  KEY `statDate` (`statDate`),
  KEY `displayId` (`displayId`,`end`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stat`
--

LOCK TABLES `stat` WRITE;
/*!40000 ALTER TABLE `stat` DISABLE KEYS */;
/*!40000 ALTER TABLE `stat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stat_archive`
--

DROP TABLE IF EXISTS `stat_archive`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stat_archive` (
  `statId` int NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statDate` datetime DEFAULT NULL,
  `scheduleId` int NOT NULL,
  `displayId` int NOT NULL,
  `layoutId` int DEFAULT NULL,
  `mediaId` int DEFAULT NULL,
  `widgetId` int DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `tag` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`statId`),
  KEY `statDate` (`statDate`),
  KEY `displayId` (`displayId`,`end`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stat_archive`
--

LOCK TABLES `stat_archive` WRITE;
/*!40000 ALTER TABLE `stat_archive` DISABLE KEYS */;
/*!40000 ALTER TABLE `stat_archive` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Published'),(2,'Draft'),(3,'Pending Approval');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `syncgroup`
--

DROP TABLE IF EXISTS `syncgroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `syncgroup` (
  `syncGroupId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  `ownerId` int NOT NULL,
  `modifiedBy` int DEFAULT NULL,
  `syncPublisherPort` int NOT NULL DEFAULT '9590',
  `leadDisplayId` int DEFAULT NULL,
  `folderId` int NOT NULL DEFAULT '1',
  `permissionsFolderId` int NOT NULL DEFAULT '1',
  `syncSwitchDelay` int DEFAULT NULL,
  `syncVideoPauseDelay` int DEFAULT NULL,
  PRIMARY KEY (`syncGroupId`),
  KEY `folderId` (`folderId`),
  KEY `ownerId` (`ownerId`),
  KEY `leadDisplayId` (`leadDisplayId`),
  CONSTRAINT `syncgroup_ibfk_1` FOREIGN KEY (`folderId`) REFERENCES `folder` (`folderId`),
  CONSTRAINT `syncgroup_ibfk_2` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`),
  CONSTRAINT `syncgroup_ibfk_3` FOREIGN KEY (`leadDisplayId`) REFERENCES `display` (`displayId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `syncgroup`
--

LOCK TABLES `syncgroup` WRITE;
/*!40000 ALTER TABLE `syncgroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `syncgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tag` (
  `tagId` int NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isSystem` int NOT NULL DEFAULT '0',
  `options` text COLLATE utf8mb4_unicode_ci,
  `isRequired` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`tagId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'template',1,NULL,0),(2,'background',1,NULL,0),(3,'thumbnail',1,NULL,0),(4,'imported',1,NULL,0);
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `task` (
  `taskId` int NOT NULL AUTO_INCREMENT,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '2',
  `pid` int DEFAULT NULL,
  `options` text COLLATE utf8mb4_unicode_ci,
  `schedule` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastRunDt` int NOT NULL DEFAULT '0',
  `lastRunStartDt` int DEFAULT NULL,
  `lastRunMessage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastRunStatus` tinyint NOT NULL DEFAULT '0',
  `lastRunDuration` smallint NOT NULL DEFAULT '0',
  `lastRunExitCode` smallint NOT NULL DEFAULT '0',
  `isActive` tinyint NOT NULL,
  `runNow` tinyint NOT NULL DEFAULT '0',
  `configFile` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`taskId`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` VALUES (1,'Daily Maintenance','\\Xibo\\XTR\\MaintenanceDailyTask',2,NULL,'[]','0 0 * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/maintenance-daily.task'),(2,'Regular Maintenance','\\Xibo\\XTR\\MaintenanceRegularTask',2,0,'[]','*/5 * * * * *',0,NULL,NULL,0,0,0,1,1,'/tasks/maintenance-regular.task'),(3,'Email Notifications','\\Xibo\\XTR\\EmailNotificationsTask',2,NULL,'[]','*/5 * * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/email-notifications.task'),(4,'Stats Archive','\\Xibo\\XTR\\StatsArchiveTask',2,NULL,'{\"periodSizeInDays\":\"7\",\"maxPeriods\":\"4\",\"archiveStats\":\"On\"}','0 0 * * Mon',0,NULL,NULL,0,0,0,1,0,'/tasks/stats-archiver.task'),(5,'Remove old Notifications','\\Xibo\\XTR\\NotificationTidyTask',2,NULL,'{\"maxAgeDays\":\"7\",\"systemOnly\":\"1\",\"readOnly\":\"0\"}','15 0 * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/notification-tidy.task'),(6,'Fetch Remote DataSets','\\Xibo\\XTR\\RemoteDataSetFetchTask',2,NULL,'[]','30 * * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/remote-dataset.task'),(7,'Drop Player Cache','\\Xibo\\XTR\\DropPlayerCacheTask',2,NULL,'[]','0 0 1 1 *',0,NULL,NULL,0,0,0,0,0,'/tasks/drop-player-cache.task'),(8,'Sync Dynamic Playlists','\\Xibo\\XTR\\DynamicPlaylistSyncTask',2,NULL,'[]','* * * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/dynamic-playlist-sync.task'),(9,'Widget Sync','\\Xibo\\XTR\\WidgetSyncTask',2,NULL,'{}','*/3 * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/widget-sync.task'),(10,'Report Schedule','\\Xibo\\XTR\\ReportScheduleTask',2,NULL,'[]','*/5 * * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/report-schedule.task'),(11,'Statistics Migration','\\Xibo\\XTR\\StatsMigrationTask',2,NULL,'{\"killSwitch\":\"0\",\"numberOfRecords\":\"5000\",\"numberOfLoops\":\"10\",\"pauseBetweenLoops\":\"1\",\"optimiseOnComplete\":\"1\"}','*/10 * * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/stats-migration.task'),(12,'Schedule Reminder','\\Xibo\\XTR\\ScheduleReminderTask',2,NULL,'[]','*/5 * * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/schedule-reminder.task'),(13,'Image Processing','\\Xibo\\XTR\\ImageProcessingTask',2,NULL,'[]','*/5 * * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/image-processing.task'),(14,'Remove Old Screenshots','\\Xibo\\XTR\\RemoveOldScreenshotsTask',2,NULL,'[]','0 0 * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/remove-old-screenshots.task'),(15,'Media Orientation','\\Xibo\\XTR\\MediaOrientationTask',2,NULL,'[]','*/5 * * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/media-orientation.task'),(16,'Purge List Cleanup','\\Xibo\\XTR\\PurgeListCleanupTask',2,0,'[]','0 0 * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/purge-list-cleanup.task'),(17,'Campaign Scheduler','\\Xibo\\XTR\\CampaignSchedulerTask',2,0,'[]','45 * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/campaign-scheduler.task'),(18,'Widget Compatibility','\\Xibo\\XTR\\WidgetCompatibilityTask',2,0,'[]','* * * * * *',0,NULL,NULL,0,0,0,1,0,'/tasks/widget-compatibility.task');
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transition`
--

DROP TABLE IF EXISTS `transition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transition` (
  `transitionId` int NOT NULL AUTO_INCREMENT,
  `transition` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasDuration` tinyint NOT NULL,
  `hasDirection` tinyint NOT NULL,
  `availableAsIn` tinyint NOT NULL,
  `availableAsOut` tinyint NOT NULL,
  PRIMARY KEY (`transitionId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transition`
--

LOCK TABLES `transition` WRITE;
/*!40000 ALTER TABLE `transition` DISABLE KEYS */;
INSERT INTO `transition` VALUES (1,'Fade In','fadeIn',1,0,1,0),(2,'Fade Out','fadeOut',1,0,0,1),(3,'Fly','fly',1,1,1,1);
/*!40000 ALTER TABLE `transition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `userTypeId` int NOT NULL,
  `userName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastAccessed` datetime DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homePageId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'null',
  `retired` tinyint NOT NULL DEFAULT '0',
  `csprng` tinyint NOT NULL DEFAULT '0',
  `newUserWizard` tinyint NOT NULL DEFAULT '0',
  `firstName` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref1` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref2` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref3` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref4` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref5` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isPasswordChangeRequired` tinyint NOT NULL DEFAULT '0',
  `twoFactorTypeId` int NOT NULL DEFAULT '0',
  `twoFactorSecret` text COLLATE utf8mb4_unicode_ci,
  `twoFactorRecoveryCodes` text COLLATE utf8mb4_unicode_ci,
  `homeFolderId` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`userId`),
  KEY `userTypeId` (`userTypeId`),
  KEY `homeFolderId` (`homeFolderId`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userTypeId`) REFERENCES `usertype` (`userTypeId`),
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`homeFolderId`) REFERENCES `folder` (`folderId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,1,'root','$2y$10$9x2TrW.yCcpDQB59AtmmFOmu/SllcBUf2tdVKAd7Lq28b5A/hrm1q','2025-03-06 17:48:09','','statusdashboard.view',0,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL,1),(2,3,'displayuser','$2y$10$gBDqVxopTh/0iUf41HurLOZ21p7EnyRxnw.2mS7HxjbgCbNCDrsmW','2025-01-08 18:31:09','','statusdashboard.view',0,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useroption`
--

DROP TABLE IF EXISTS `useroption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `useroption` (
  `userId` int NOT NULL,
  `option` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`userId`,`option`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useroption`
--

LOCK TABLES `useroption` WRITE;
/*!40000 ALTER TABLE `useroption` DISABLE KEYS */;
INSERT INTO `useroption` VALUES (1,'applicationsGrid','{\"time\":1735018722897,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'campaignGrid','{\"time\":1736139245538,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'commandGrid','{\"time\":1735041903061,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'daypartGrid','{\"time\":1738061479960,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'displayGrid','{\"time\":1738559658963,\"start\":0,\"length\":10,\"order\":[[51,\"desc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'displayGroupGrid','{\"time\":1738559662508,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'displayProfileGrid','{\"time\":1735041944554,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'displaysGrid','{\"time\":1741261869732,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'editor','{\"snapOptions\":{\"snapToGrid\":false,\"snapGridGap\":20,\"snapToBorders\":true,\"snapToElements\":true},\"layerManagerOptions\":{\"visible\":false}}'),(1,'fontGrid','{\"time\":1736142021487,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'isAlwaysUseManualAddUserForm','0'),(1,'layoutGrid','{\"time\":1741261843853,\"start\":0,\"length\":10,\"order\":[[0,\"desc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'libraryGrid','{\"time\":1741261766661,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'logGrid','{\"time\":1736150476297,\"start\":0,\"length\":10,\"order\":[[0,\"desc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'logsGrid','{\"time\":1741261737944,\"start\":0,\"length\":10,\"order\":[[0,\"desc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'menuBoardGrid','{\"time\":1736139303948,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'moduleGrid','{\"time\":1737537939646,\"start\":0,\"length\":100,\"order\":[[6,\"desc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'moduleTemplateGrid','{\"time\":1735018648565,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'playerFaultsGrid','{\"time\":1738559655050,\"start\":0,\"length\":10,\"order\":[[2,\"desc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'playerSoftwareGrid','{\"time\":1735041913267,\"start\":0,\"length\":10,\"order\":[[2,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'playlistGrid','{\"time\":1738058348557,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'proofOfPlayGrid','{\"time\":1741261846617,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'rememberFolderTreeStateGlobally','0'),(1,'reportscheduleGrid','{\"time\":1736141381030,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'resolutionGrid','{\"time\":1736139250318,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'savedreportGrid','{\"time\":1736141377735,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'scheduleGrid','{\"time\":1741261860427,\"start\":0,\"length\":10,\"order\":[],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'sessionsGrid','{\"time\":1736312999917,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'showThumbnailColumn','1'),(1,'syncGroupGrid','{\"time\":1735901257965,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'taskGrid','{\"time\":1736142048069,\"start\":10,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'templateGrid','{\"time\":1738559735457,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(1,'toolbar','{\"filters\":{\"widgets\":{},\"global\":{},\"image\":{},\"audio\":{},\"video\":{},\"library\":{},\"playlists\":{},\"actions\":{},\"layout_templates\":{\"folder\":null,\"orientation\":\"landscape\"}},\"sort\":{\"widgets\":{\"sortCol\":\"\",\"sortDir\":\"asc\"},\"global\":{\"sortCol\":\"\",\"sortDir\":\"asc\"},\"image\":{\"sortCol\":\"\",\"sortDir\":\"asc\"},\"audio\":{\"sortCol\":\"\",\"sortDir\":\"asc\"},\"video\":{\"sortCol\":\"\",\"sortDir\":\"asc\"},\"library\":{\"sortCol\":\"\",\"sortDir\":\"asc\"},\"playlists\":{\"sortCol\":\"\",\"sortDir\":\"asc\"},\"actions\":{\"sortCol\":\"\",\"sortDir\":\"asc\"},\"layout_templates\":{\"sortCol\":\"\",\"sortDir\":\"asc\"}},\"openedMenu\":\"widgets\",\"openedSubMenu\":{},\"displayTooltips\":1,\"deleteConfirmation\":1,\"favouriteModules\":[],\"level\":2}'),(1,'transitionsGrid','{\"time\":1736142226833,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'useLibraryDuration','0'),(1,'userGrid','{\"time\":1738062374948,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(1,'userGroupGrid','{\"time\":1738062497916,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(2,'commandGrid','{\"time\":1735020154332,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(2,'displayGrid','{\"time\":1736339107218,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(2,'displayGroupGrid','{\"time\":1736339099455,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(2,'displayProfileGrid','{\"time\":1735020152171,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(2,'displaysGrid','{\"time\":1736339109832,\"start\":0,\"length\":10,\"order\":[[0,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(2,'hideNavigation','0'),(2,'logGrid','{\"time\":1735019989936,\"start\":0,\"length\":10,\"order\":[[0,\"desc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(2,'playerSoftwareGrid','{\"time\":1735020153776,\"start\":0,\"length\":10,\"order\":[[2,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(2,'reportscheduleGrid','{\"time\":1735020057614,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(2,'savedreportGrid','{\"time\":1735020058407,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}]}'),(2,'scheduleGrid','{\"time\":1735020056228,\"start\":0,\"length\":10,\"order\":[],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":false,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}'),(2,'syncGroupGrid','{\"time\":1735020150277,\"start\":0,\"length\":10,\"order\":[[1,\"asc\"]],\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true},\"columns\":[{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}},{\"visible\":true,\"search\":{\"search\":\"\",\"smart\":true,\"regex\":false,\"caseInsensitive\":true}}],\"childRows\":[]}');
/*!40000 ALTER TABLE `useroption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usertype` (
  `userTypeId` int NOT NULL AUTO_INCREMENT,
  `userType` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`userTypeId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertype`
--

LOCK TABLES `usertype` WRITE;
/*!40000 ALTER TABLE `usertype` DISABLE KEYS */;
INSERT INTO `usertype` VALUES (1,'Super Admin'),(2,'Group Admin'),(3,'User');
/*!40000 ALTER TABLE `usertype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widget`
--

DROP TABLE IF EXISTS `widget`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `widget` (
  `widgetId` int NOT NULL AUTO_INCREMENT,
  `playlistId` int NOT NULL,
  `ownerId` int NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int NOT NULL,
  `displayOrder` int NOT NULL,
  `calculatedDuration` int NOT NULL,
  `useDuration` tinyint NOT NULL DEFAULT '1',
  `fromDt` int NOT NULL,
  `toDt` int NOT NULL,
  `createdDt` int NOT NULL DEFAULT '0',
  `modifiedDt` int NOT NULL DEFAULT '0',
  `schemaVersion` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`widgetId`),
  KEY `playlistId` (`playlistId`),
  KEY `ownerId` (`ownerId`),
  CONSTRAINT `widget_ibfk_1` FOREIGN KEY (`playlistId`) REFERENCES `playlist` (`playlistId`),
  CONSTRAINT `widget_ibfk_2` FOREIGN KEY (`ownerId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=407 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widget`
--

LOCK TABLES `widget` WRITE;
/*!40000 ALTER TABLE `widget` DISABLE KEYS */;
INSERT INTO `widget` VALUES (16,21,1,'video',100,1,100,1,0,2147483647,1735042420,1735043697,1),(72,45,1,'video',0,1,30,0,0,2147483647,1735301589,1735301589,1),(73,45,1,'video',0,2,13,0,0,2147483647,1735301589,1735301589,1),(74,45,1,'video',0,3,20,0,0,2147483647,1735301589,1735301589,1),(75,45,1,'video',0,4,7,0,0,2147483647,1735301589,1735301589,1),(76,45,1,'video',0,5,33,0,0,2147483647,1735301589,1735301589,1),(77,45,1,'video',0,6,9,0,0,2147483647,1735301589,1735301589,1),(78,45,1,'video',0,7,21,0,0,2147483647,1735301589,1735301589,1),(79,45,1,'video',0,8,6,0,0,2147483647,1735301589,1735301589,1),(80,45,1,'video',0,9,8,0,0,2147483647,1735301589,1735301589,1),(81,45,1,'video',0,10,38,0,0,2147483647,1735301589,1735301589,1),(82,45,1,'video',0,11,22,0,0,2147483647,1735301589,1735301589,1),(83,45,1,'video',0,12,15,0,0,2147483647,1735301589,1735301589,1),(84,45,1,'video',0,13,36,0,0,2147483647,1735301589,1735301589,1),(85,45,1,'video',0,14,16,0,0,2147483647,1735301589,1735301589,1),(86,45,1,'video',0,15,14,0,0,2147483647,1735301589,1735301589,1),(87,45,1,'video',0,16,22,0,0,2147483647,1735301589,1735301589,1),(88,45,1,'video',0,17,21,0,0,2147483647,1735301589,1735301589,1),(89,45,1,'video',0,18,4,0,0,2147483647,1735301589,1735301589,1),(90,45,1,'video',0,19,16,0,0,2147483647,1735301589,1735301589,1),(91,45,1,'video',0,20,34,0,0,2147483647,1735301589,1735301589,1),(92,45,1,'video',0,21,19,0,0,2147483647,1735301589,1735301589,1),(93,45,1,'video',0,22,10,0,0,2147483647,1735301589,1735301589,1),(94,45,1,'video',0,23,16,0,0,2147483647,1735301589,1735301589,1),(95,45,1,'video',0,24,10,0,0,2147483647,1735301589,1735301589,1),(96,45,1,'video',0,25,29,0,0,2147483647,1735301589,1735301589,1),(97,45,1,'video',0,26,27,0,0,2147483647,1735301589,1735301589,1),(98,46,1,'text',49,1,49,1,0,2147483647,1735301589,1735301589,1),(117,48,1,'video',0,1,34,0,0,2147483647,1735301755,1735301755,1),(118,48,1,'video',48,2,48,1,0,2147483647,1735301755,1735301755,1),(119,48,1,'video',0,3,34,0,0,2147483647,1735301755,1735301755,1),(120,48,1,'video',55,4,55,0,0,2147483647,1735301755,1735301755,1),(121,48,1,'video',0,5,34,0,0,2147483647,1735301755,1735301755,1),(122,48,1,'video',484,6,484,1,0,2147483647,1735301755,1735301755,1),(123,48,1,'video',0,7,34,0,0,2147483647,1735301755,1735301755,1),(124,48,1,'video',45,8,45,1,0,2147483647,1735301755,1735301755,1),(125,48,1,'video',0,9,34,0,0,2147483647,1735301755,1735301755,1),(126,48,1,'video',89,10,89,1,0,2147483647,1735301755,1735301755,1),(127,48,1,'video',0,11,34,0,0,2147483647,1735301755,1735301755,1),(128,48,1,'video',22,12,22,1,0,2147483647,1735301755,1735301755,1),(129,48,1,'video',0,13,34,0,0,2147483647,1735301755,1735301755,1),(130,49,1,'video',0,1,51,0,0,2147483647,1735301269,1735302197,1),(131,50,1,'text',40,1,40,1,0,2147483647,1735301269,1735302217,1),(134,55,1,'image',10,1,10,1,0,2147483647,1735044218,1735303563,1),(135,55,1,'image',10,2,10,1,0,2147483647,1735044218,1735303563,1),(137,56,1,'text',40,1,40,1,0,2147483647,1735044536,1735303563,1),(138,55,1,'image',10,3,10,1,0,2147483647,1735303605,1735303617,1),(139,55,1,'image',10,4,10,1,0,2147483647,1735303610,1735303620,1),(157,65,1,'image',10,1,10,0,0,2147483647,1735623555,1735623555,1),(158,65,1,'image',10,2,10,0,0,2147483647,1735623558,1735623558,1),(159,65,1,'video',34,3,34,0,0,2147483647,1735623565,1735623565,1),(178,68,1,'video',0,1,30,0,0,2147483647,1735301589,1735800862,1),(179,68,1,'video',0,2,13,0,0,2147483647,1735301589,1735800862,1),(180,68,1,'video',0,3,20,0,0,2147483647,1735301589,1735800862,1),(181,68,1,'video',0,4,7,0,0,2147483647,1735301589,1735800862,1),(182,68,1,'video',0,5,33,0,0,2147483647,1735301589,1735800862,1),(183,68,1,'video',0,6,9,0,0,2147483647,1735301589,1735800862,1),(184,68,1,'video',0,7,21,0,0,2147483647,1735301589,1735800862,1),(185,68,1,'video',0,8,6,0,0,2147483647,1735301589,1735800862,1),(186,68,1,'video',0,9,8,0,0,2147483647,1735301589,1735800862,1),(187,68,1,'video',0,10,38,0,0,2147483647,1735301589,1735800862,1),(188,68,1,'video',0,11,22,0,0,2147483647,1735301589,1735800862,1),(189,68,1,'video',0,12,15,0,0,2147483647,1735301589,1735800862,1),(190,68,1,'video',0,13,36,0,0,2147483647,1735301589,1735800862,1),(191,68,1,'video',0,14,16,0,0,2147483647,1735301589,1735800862,1),(192,68,1,'video',0,15,14,0,0,2147483647,1735301589,1735800862,1),(193,68,1,'video',0,16,22,0,0,2147483647,1735301589,1735800862,1),(194,68,1,'video',0,17,21,0,0,2147483647,1735301589,1735800862,1),(195,68,1,'video',0,18,4,0,0,2147483647,1735301589,1735800862,1),(196,68,1,'video',0,19,16,0,0,2147483647,1735301589,1735800862,1),(197,68,1,'video',0,20,34,0,0,2147483647,1735301589,1735800862,1),(198,68,1,'video',0,21,19,0,0,2147483647,1735301589,1735800862,1),(199,68,1,'video',0,22,10,0,0,2147483647,1735301589,1735800862,1),(200,68,1,'video',0,23,16,0,0,2147483647,1735301589,1735800862,1),(201,68,1,'video',0,24,10,0,0,2147483647,1735301589,1735800862,1),(202,68,1,'video',0,25,29,0,0,2147483647,1735301589,1735800862,1),(203,68,1,'video',0,26,27,0,0,2147483647,1735301589,1735800862,1),(204,69,1,'text',49,1,49,1,0,2147483647,1735301589,1735800862,1),(255,80,1,'text',40,1,40,1,0,2147483647,1735802066,1735803094,1),(256,81,1,'video',0,1,11,0,0,2147483647,1735301587,1735803094,1),(257,81,1,'video',0,2,7,0,0,2147483647,1735301587,1735803094,1),(258,81,1,'video',0,3,19,0,0,2147483647,1735301587,1735803094,1),(259,81,1,'video',0,4,17,0,0,2147483647,1735301587,1735803094,1),(260,81,1,'video',0,5,16,0,0,2147483647,1735301587,1735803094,1),(261,81,1,'video',0,6,8,0,0,2147483647,1735301587,1735803094,1),(262,81,1,'video',0,7,20,0,0,2147483647,1735301587,1735803094,1),(263,81,1,'video',0,8,21,0,0,2147483647,1735301587,1735803094,1),(264,81,1,'video',0,9,15,0,0,2147483647,1735301587,1735803094,1),(265,81,1,'video',0,10,14,0,0,2147483647,1735301587,1735803094,1),(266,81,1,'video',0,11,37,0,0,2147483647,1735301587,1735803094,1),(267,81,1,'video',0,12,12,0,0,2147483647,1735301587,1735803094,1),(268,81,1,'video',0,13,133,0,0,2147483647,1735301587,1735803094,1),(269,81,1,'video',0,14,82,0,0,2147483647,1735301587,1735803094,1),(270,83,1,'text',50,1,50,1,0,2147483647,1735802251,1735803146,1),(271,84,1,'video',0,1,10,0,0,2147483647,1735301752,1735803146,1),(272,84,1,'video',0,2,12,0,0,2147483647,1735301752,1735803146,1),(273,84,1,'video',0,3,17,0,0,2147483647,1735301752,1735803146,1),(274,84,1,'video',0,4,7,0,0,2147483647,1735301752,1735803146,1),(275,84,1,'video',0,5,17,0,0,2147483647,1735301752,1735803146,1),(276,84,1,'video',0,6,33,0,0,2147483647,1735301752,1735803146,1),(277,84,1,'video',0,7,10,0,0,2147483647,1735301752,1735803146,1),(278,84,1,'video',0,8,7,0,0,2147483647,1735301752,1735803146,1),(279,84,1,'video',0,9,32,0,0,2147483647,1735301752,1735803146,1),(280,84,1,'video',0,10,15,0,0,2147483647,1735301752,1735803146,1),(281,84,1,'video',0,11,10,0,0,2147483647,1735301752,1735803146,1),(282,84,1,'video',0,12,14,0,0,2147483647,1735301752,1735803146,1),(283,84,1,'video',0,13,5,0,0,2147483647,1735301752,1735803146,1),(284,84,1,'video',0,14,11,0,0,2147483647,1735301752,1735803146,1),(285,84,1,'video',0,15,11,0,0,2147483647,1735301752,1735803146,1),(286,84,1,'video',0,16,17,0,0,2147483647,1735301752,1735803146,1),(287,84,1,'video',0,17,41,0,0,2147483647,1735301752,1735803146,1),(288,84,1,'video',0,18,8,0,0,2147483647,1735301752,1735803146,1),(289,87,1,'image',15,1,15,1,0,2147483647,1735301390,1736233222,1),(290,87,1,'image',30,2,30,1,0,2147483647,1735301390,1736233222,1),(292,90,1,'text',40,1,40,1,0,2147483647,1736233287,1736233398,1),(294,93,1,'global',40,1,40,1,0,2147483647,1736250174,1736250835,1),(296,97,1,'global',40,1,40,1,0,2147483647,1736250968,1736315287,1),(302,107,1,'image',10,1,10,0,0,2147483647,1736313346,1736313856,1),(303,107,1,'image',10,2,10,0,0,2147483647,1736313348,1736313856,1),(304,108,1,'text',40,1,40,1,0,2147483647,1736313389,1736313903,1),(305,110,1,'image',10,1,10,0,0,2147483647,1736313346,1736313923,1),(306,110,1,'image',10,2,10,0,0,2147483647,1736313348,1736313923,1),(307,111,1,'text',40,1,40,1,0,2147483647,1736313389,1736313923,1),(310,116,1,'video',10,1,10,0,0,2147483647,1736252573,1736314352,1),(311,118,1,'global',10,1,10,1,0,2147483647,1736314448,1736314489,1),(312,119,1,'video',10,1,10,0,0,2147483647,1736252573,1736314701,1),(313,120,1,'global',10,1,10,1,0,2147483647,1736314448,1736314709,1),(322,137,1,'global',40,1,40,1,0,2147483647,1736316273,1736321264,1),(323,139,1,'global',4,1,4,1,0,2147483647,1734677731,1736423136,1),(324,140,1,'text',10,1,10,1,0,2147483647,1734961195,1736423002,1),(377,188,1,'video',82,1,82,0,0,2147483647,1737527692,1737527692,1),(378,189,1,'clock-analogue',5,1,5,0,0,2147483647,1737527746,1737527746,2),(379,190,1,'countdown-clock',60,1,60,0,0,2147483647,1737527769,1737527769,2),(385,198,1,'image',10,1,10,0,0,2147483647,1737526755,1737538337,1),(386,198,1,'image',10,2,10,0,0,2147483647,1737526756,1737538337,1),(387,199,1,'video',21,1,21,0,0,2147483647,1737526778,1737538337,1),(388,199,1,'video',9,2,9,0,0,2147483647,1737526779,1737538337,1),(389,199,1,'image',10,3,10,0,0,2147483647,1737527643,1737538337,1),(390,201,1,'text',30,1,30,1,0,2147483647,1737538406,1737538460,1),(391,203,1,'image',10,1,10,0,0,2147483647,1735301391,1737548742,1),(392,203,1,'image',10,2,10,0,0,2147483647,1735301391,1737548742,1),(393,203,1,'image',10,3,10,0,0,2147483647,1735301391,1737548742,1),(394,203,1,'image',10,4,10,0,0,2147483647,1735301391,1737548742,1),(395,203,1,'image',10,5,10,0,0,2147483647,1735301391,1737548742,1),(396,203,1,'image',10,6,10,0,0,2147483647,1735301391,1737548742,1),(397,203,1,'image',10,7,10,0,0,2147483647,1735301391,1737548742,1),(398,203,1,'image',10,8,10,0,0,2147483647,1735301391,1737548742,1),(399,203,1,'video',0,9,164,0,0,2147483647,1735301391,1737548742,1),(400,203,1,'video',0,10,30,0,0,2147483647,1735301391,1737548742,1),(401,204,1,'video',0,1,20,0,0,2147483647,1735301391,1737611619,1),(402,204,1,'image',10,2,10,0,0,2147483647,1735301391,1737611619,1),(403,204,1,'image',10,3,10,0,0,2147483647,1735301391,1737611619,1),(404,204,1,'image',10,4,10,0,0,2147483647,1735301391,1737611619,1),(405,204,1,'image',10,5,10,0,0,2147483647,1735301391,1737611619,1),(406,204,1,'image',10,6,10,0,0,2147483647,1735301391,1737611619,1);
/*!40000 ALTER TABLE `widget` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgetdata`
--

DROP TABLE IF EXISTS `widgetdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `widgetdata` (
  `id` int NOT NULL AUTO_INCREMENT,
  `widgetId` int NOT NULL,
  `data` mediumtext COLLATE utf8mb4_unicode_ci,
  `displayOrder` mediumint NOT NULL,
  `createdDt` datetime DEFAULT NULL,
  `modifiedDt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `widgetId` (`widgetId`),
  CONSTRAINT `widgetdata_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgetdata`
--

LOCK TABLES `widgetdata` WRITE;
/*!40000 ALTER TABLE `widgetdata` DISABLE KEYS */;
/*!40000 ALTER TABLE `widgetdata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgethistory`
--

DROP TABLE IF EXISTS `widgethistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `widgethistory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `layoutHistoryId` int NOT NULL,
  `widgetId` int NOT NULL,
  `mediaId` int DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `layoutHistoryId` (`layoutHistoryId`),
  CONSTRAINT `widgethistory_ibfk_1` FOREIGN KEY (`layoutHistoryId`) REFERENCES `layouthistory` (`layoutHistoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgethistory`
--

LOCK TABLES `widgethistory` WRITE;
/*!40000 ALTER TABLE `widgethistory` DISABLE KEYS */;
INSERT INTO `widgethistory` VALUES (1,2,1,2,'global',''),(2,3,2,2,'global',''),(3,3,3,NULL,'rss-ticker',''),(4,4,4,2,'global',''),(5,5,7,NULL,'text',''),(6,5,6,2,'global',''),(7,10,15,3,'video',NULL),(8,6,9,NULL,'text',''),(9,6,8,2,'global',''),(10,14,17,4,'image',''),(11,14,19,6,'image',''),(12,14,20,2,'image',''),(13,21,42,22,'video',NULL),(14,21,43,20,'image',NULL),(15,21,44,23,'image',NULL),(16,21,45,8,'image',NULL),(17,21,46,9,'image',NULL),(18,21,47,21,'image',NULL),(19,19,31,NULL,'text',NULL),(20,19,29,8,'image',NULL),(21,19,30,9,'image',NULL),(22,17,26,NULL,'text',NULL),(23,17,25,7,'video',NULL),(24,24,28,NULL,'text',NULL),(25,24,27,7,'video',NULL),(26,15,24,NULL,'text',''),(27,15,21,4,'image',''),(28,15,22,6,'image',''),(29,15,23,2,'image',''),(30,25,71,NULL,'text',NULL),(31,25,57,40,'video',NULL),(32,25,58,24,'video',NULL),(33,25,59,39,'video',NULL),(34,25,60,32,'video',NULL),(35,25,61,48,'video',NULL),(36,25,62,27,'video',NULL),(37,25,63,46,'video',NULL),(38,25,64,34,'video',NULL),(39,25,65,37,'video',NULL),(40,25,66,50,'video',NULL),(41,25,67,30,'video',NULL),(42,25,68,36,'video',NULL),(43,25,69,42,'video',NULL),(44,25,70,25,'video',NULL),(45,33,155,21,'global',NULL),(46,27,99,64,'video',NULL),(47,27,100,67,'video',NULL),(48,27,101,76,'video',NULL),(49,27,102,78,'video',NULL),(50,27,103,79,'video',NULL),(51,27,104,71,'video',NULL),(52,27,105,81,'video',NULL),(53,27,106,75,'video',NULL),(54,27,107,74,'video',NULL),(55,27,108,77,'video',NULL),(56,27,109,73,'video',NULL),(57,27,110,80,'video',NULL),(58,27,111,72,'video',NULL),(59,27,112,70,'video',NULL),(60,27,113,69,'video',NULL),(61,27,114,68,'video',NULL),(62,27,115,66,'video',NULL),(63,27,116,65,'video',NULL),(64,31,154,NULL,'text',NULL),(65,31,140,40,'video',NULL),(66,31,141,24,'video',NULL),(67,31,142,39,'video',NULL),(68,31,143,32,'video',NULL),(69,31,144,48,'video',NULL),(70,31,145,27,'video',NULL),(71,31,146,46,'video',NULL),(72,31,147,34,'video',NULL),(73,31,148,37,'video',NULL),(74,31,149,50,'video',NULL),(75,31,150,30,'video',NULL),(76,31,151,36,'video',NULL),(77,31,152,42,'video',NULL),(78,31,153,25,'video',NULL),(79,36,219,NULL,'text',NULL),(80,36,205,40,'video',NULL),(81,36,206,24,'video',NULL),(82,36,207,39,'video',NULL),(83,36,208,32,'video',NULL),(84,36,209,48,'video',NULL),(85,36,210,27,'video',NULL),(86,36,211,46,'video',NULL),(87,36,212,34,'video',NULL),(88,36,213,37,'video',NULL),(89,36,214,50,'video',NULL),(90,36,215,30,'video',NULL),(91,36,216,36,'video',NULL),(92,36,217,42,'video',NULL),(93,36,218,25,'video',NULL),(94,35,160,64,'video',NULL),(95,35,161,67,'video',NULL),(96,35,162,76,'video',NULL),(97,35,163,78,'video',NULL),(98,35,164,79,'video',NULL),(99,35,165,71,'video',NULL),(100,35,166,81,'video',NULL),(101,35,167,75,'video',NULL),(102,35,168,74,'video',NULL),(103,35,169,77,'video',NULL),(104,35,170,73,'video',NULL),(105,35,171,80,'video',NULL),(106,35,172,72,'video',NULL),(107,35,173,70,'video',NULL),(108,35,174,69,'video',NULL),(109,35,175,68,'video',NULL),(110,35,176,66,'video',NULL),(111,35,177,65,'video',NULL),(112,37,220,40,'video',NULL),(113,37,221,24,'video',NULL),(114,37,222,39,'video',NULL),(115,37,223,32,'video',NULL),(116,37,224,48,'video',NULL),(117,37,225,27,'video',NULL),(118,37,226,46,'video',NULL),(119,37,227,34,'video',NULL),(120,37,228,37,'video',NULL),(121,37,229,50,'video',NULL),(122,37,230,30,'video',NULL),(123,37,231,36,'video',NULL),(124,37,232,42,'video',NULL),(125,37,233,25,'video',NULL),(126,37,235,NULL,'text',''),(127,38,236,64,'video',NULL),(128,38,237,67,'video',NULL),(129,38,238,76,'video',NULL),(130,38,239,78,'video',NULL),(131,38,240,79,'video',NULL),(132,38,241,71,'video',NULL),(133,38,242,81,'video',NULL),(134,38,243,75,'video',NULL),(135,38,244,74,'video',NULL),(136,38,245,77,'video',NULL),(137,38,246,73,'video',NULL),(138,38,247,80,'video',NULL),(139,38,248,72,'video',NULL),(140,38,249,70,'video',NULL),(141,38,250,69,'video',NULL),(142,38,251,68,'video',NULL),(143,38,252,66,'video',NULL),(144,38,253,65,'video',NULL),(145,38,254,NULL,'text',''),(146,23,56,NULL,'text',NULL),(147,23,54,8,'image',NULL),(148,23,55,9,'image',NULL),(149,12,11,NULL,'text',''),(150,12,10,2,'global',''),(151,44,293,10,'global',''),(152,52,301,NULL,'text',''),(153,52,299,10,'image',NULL),(154,52,300,9,'image',NULL),(155,50,297,64,'video',NULL),(156,47,295,11,'global',NULL),(157,58,315,8,'global',''),(158,59,316,8,'global',''),(159,60,317,8,'global',''),(160,61,318,8,'global',''),(161,62,319,8,'global',''),(162,63,320,8,'global',''),(163,64,321,8,'global',''),(164,42,133,NULL,'text',''),(165,42,132,2,'global',''),(184,73,354,26,'video',NULL),(185,73,355,29,'video',NULL),(186,73,352,21,'image',NULL),(187,73,353,9,'image',NULL),(188,73,351,NULL,'text',''),(189,74,359,26,'video',''),(190,74,360,29,'video',''),(191,74,357,21,'image',''),(192,74,358,9,'image',''),(193,74,356,NULL,'text',''),(194,75,364,26,'video',''),(195,75,365,29,'video',''),(196,75,362,21,'image',''),(197,75,363,9,'image',''),(198,75,361,NULL,'text',''),(199,76,369,26,'video',''),(200,76,370,29,'video',''),(201,76,367,21,'image',''),(202,76,368,9,'image',''),(203,76,366,NULL,'text',''),(204,78,374,26,'video',''),(205,78,375,29,'video',''),(206,78,376,12,'image',NULL),(207,78,372,21,'image',''),(208,78,373,9,'image',''),(209,78,371,NULL,'text',''),(210,20,32,13,'image',NULL),(211,20,33,10,'image',NULL),(212,20,34,12,'image',NULL),(213,20,35,15,'image',NULL),(214,20,36,17,'image',NULL),(215,20,37,14,'image',NULL),(216,20,38,11,'image',NULL),(217,20,39,16,'image',NULL),(218,20,40,19,'video',NULL),(219,20,41,18,'video',NULL),(220,22,48,22,'video',NULL),(221,22,49,20,'image',NULL),(222,22,50,23,'image',NULL),(223,22,51,8,'image',NULL),(224,22,52,9,'image',NULL),(225,22,53,21,'image',NULL);
/*!40000 ALTER TABLE `widgethistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgetoption`
--

DROP TABLE IF EXISTS `widgetoption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `widgetoption` (
  `widgetId` int NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`widgetId`,`type`,`option`),
  CONSTRAINT `widgetoption_ibfk_1` FOREIGN KEY (`widgetId`) REFERENCES `widget` (`widgetId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgetoption`
--

LOCK TABLES `widgetoption` WRITE;
/*!40000 ALTER TABLE `widgetoption` DISABLE KEYS */;
INSERT INTO `widgetoption` VALUES (16,'attrib','deleteOnExpiry','0'),(16,'attrib','enableStat','Inherit'),(16,'attrib','name',''),(72,'attrib','enableStat','Inherit'),(72,'attrib','mute','0'),(72,'attrib','uri','47.mp4'),(73,'attrib','enableStat','Inherit'),(73,'attrib','loop','0'),(73,'attrib','mute','0'),(73,'attrib','name',NULL),(73,'attrib','scaleType','aspect'),(73,'attrib','showFullScreen','0'),(73,'attrib','uri','49.mp4'),(74,'attrib','enableStat','Inherit'),(74,'attrib','mute','0'),(74,'attrib','uri','35.mp4'),(75,'attrib','enableStat','Inherit'),(75,'attrib','mute','0'),(75,'attrib','uri','53.mp4'),(76,'attrib','enableStat','Inherit'),(76,'attrib','mute','0'),(76,'attrib','uri','38.mp4'),(77,'attrib','enableStat','Inherit'),(77,'attrib','mute','0'),(77,'attrib','uri','29.mp4'),(78,'attrib','enableStat','Inherit'),(78,'attrib','loop','0'),(78,'attrib','mute','0'),(78,'attrib','name',NULL),(78,'attrib','scaleType','aspect'),(78,'attrib','showFullScreen','0'),(78,'attrib','uri','52.mp4'),(79,'attrib','enableStat','Inherit'),(79,'attrib','mute','0'),(79,'attrib','uri','44.mp4'),(80,'attrib','enableStat','Inherit'),(80,'attrib','mute','0'),(80,'attrib','uri','33.mp4'),(81,'attrib','enableStat','Inherit'),(81,'attrib','mute','0'),(81,'attrib','uri','51.mp4'),(82,'attrib','enableStat','Inherit'),(82,'attrib','mute','0'),(82,'attrib','uri','55.mp4'),(83,'attrib','enableStat','Inherit'),(83,'attrib','mute','0'),(83,'attrib','uri','56.mp4'),(84,'attrib','enableStat','Inherit'),(84,'attrib','mute','0'),(84,'attrib','uri','41.mp4'),(85,'attrib','enableStat','Inherit'),(85,'attrib','mute','0'),(85,'attrib','uri','58.mp4'),(86,'attrib','enableStat','Inherit'),(86,'attrib','mute','0'),(86,'attrib','uri','57.mp4'),(87,'attrib','enableStat','Inherit'),(87,'attrib','mute','0'),(87,'attrib','uri','60.mp4'),(88,'attrib','enableStat','Inherit'),(88,'attrib','mute','0'),(88,'attrib','uri','26.mp4'),(89,'attrib','enableStat','Inherit'),(89,'attrib','mute','0'),(89,'attrib','uri','45.mp4'),(90,'attrib','enableStat','Inherit'),(90,'attrib','mute','0'),(90,'attrib','uri','28.mp4'),(91,'attrib','enableStat','Inherit'),(91,'attrib','mute','0'),(91,'attrib','uri','31.mp4'),(92,'attrib','enableStat','Inherit'),(92,'attrib','mute','0'),(92,'attrib','uri','43.mp4'),(93,'attrib','enableStat','Inherit'),(93,'attrib','mute','0'),(93,'attrib','uri','59.mp4'),(94,'attrib','enableStat','Inherit'),(94,'attrib','mute','0'),(94,'attrib','uri','62.mp4'),(95,'attrib','enableStat','Inherit'),(95,'attrib','mute','0'),(95,'attrib','uri','54.mp4'),(96,'attrib','enableStat','Inherit'),(96,'attrib','mute','0'),(96,'attrib','uri','63.mp4'),(97,'attrib','enableStat','Inherit'),(97,'attrib','mute','0'),(97,'attrib','uri','61.mp4'),(98,'attrib','backgroundColor','#e3d5d5'),(98,'attrib','effect','marqueeLeft'),(98,'attrib','enableStat','Inherit'),(98,'attrib','lowerLimit','0'),(98,'attrib','marqueeInlineSelector',NULL),(98,'attrib','name',NULL),(98,'attrib','speed','4'),(98,'attrib','ta_text_advanced','0'),(98,'attrib','upperLimit','0'),(98,'attrib','xmds','1'),(98,'cdata','javaScript',''),(98,'cdata','styleSheet',''),(98,'cdata','text','<p><span style=\"font-size: 48px;\"><span style=\"color: #111111;\">Powered by&nbsp; Oasys DSS Demo layout..</span></span></p>\r\n'),(117,'attrib','enableStat','Inherit'),(117,'attrib','mute','0'),(117,'attrib','uri','88.mp4'),(118,'attrib','enableStat','Inherit'),(118,'attrib','loop','0'),(118,'attrib','mute','0'),(118,'attrib','scaleType','aspect'),(118,'attrib','showFullScreen','0'),(118,'attrib','transIn','fadeIn'),(118,'attrib','transInDuration','1000'),(118,'attrib','transOut','fadeOut'),(118,'attrib','transOutDuration','1000'),(118,'attrib','uri','86.mp4'),(119,'attrib','enableStat','Inherit'),(119,'attrib','mute','0'),(119,'attrib','uri','88.mp4'),(120,'attrib','enableStat','Inherit'),(120,'attrib','loop','0'),(120,'attrib','mute','0'),(120,'attrib','scaleType','aspect'),(120,'attrib','showFullScreen','0'),(120,'attrib','transIn','fadeIn'),(120,'attrib','transInDuration','1000'),(120,'attrib','transOut','fadeOut'),(120,'attrib','transOutDuration','1000'),(120,'attrib','uri','82.mp4'),(121,'attrib','enableStat','Inherit'),(121,'attrib','mute','0'),(121,'attrib','uri','88.mp4'),(122,'attrib','enableStat','Inherit'),(122,'attrib','loop','0'),(122,'attrib','mute','0'),(122,'attrib','scaleType','aspect'),(122,'attrib','showFullScreen','0'),(122,'attrib','transIn','fadeIn'),(122,'attrib','transInDuration','1000'),(122,'attrib','transOut','fadeOut'),(122,'attrib','transOutDuration','1000'),(122,'attrib','uri','84.mp4'),(123,'attrib','enableStat','Inherit'),(123,'attrib','mute','0'),(123,'attrib','uri','88.mp4'),(124,'attrib','enableStat','Inherit'),(124,'attrib','loop','0'),(124,'attrib','mute','0'),(124,'attrib','scaleType','aspect'),(124,'attrib','showFullScreen','0'),(124,'attrib','transIn','fadeIn'),(124,'attrib','transInDuration','1000'),(124,'attrib','transOut','fadeOut'),(124,'attrib','transOutDuration','1000'),(124,'attrib','uri','83.mp4'),(125,'attrib','enableStat','Inherit'),(125,'attrib','mute','0'),(125,'attrib','uri','88.mp4'),(126,'attrib','enableStat','Inherit'),(126,'attrib','loop','0'),(126,'attrib','mute','0'),(126,'attrib','scaleType','aspect'),(126,'attrib','showFullScreen','0'),(126,'attrib','transIn','fadeIn'),(126,'attrib','transInDuration','1000'),(126,'attrib','transOut','fadeOut'),(126,'attrib','transOutDuration','1000'),(126,'attrib','uri','87.mp4'),(127,'attrib','enableStat','Inherit'),(127,'attrib','mute','0'),(127,'attrib','uri','88.mp4'),(128,'attrib','enableStat','Inherit'),(128,'attrib','loop','0'),(128,'attrib','mute','0'),(128,'attrib','scaleType','aspect'),(128,'attrib','showFullScreen','0'),(128,'attrib','transIn','fadeIn'),(128,'attrib','transInDuration','1000'),(128,'attrib','transOut','fadeOut'),(128,'attrib','transOutDuration','1000'),(128,'attrib','uri','85.mp4'),(129,'attrib','enableStat','Inherit'),(129,'attrib','loop','0'),(129,'attrib','mute','0'),(129,'attrib','name',NULL),(129,'attrib','scaleType','aspect'),(129,'attrib','showFullScreen','0'),(129,'attrib','uri','88.mp4'),(130,'attrib','enableStat','Inherit'),(130,'attrib','mute','0'),(130,'attrib','uri','7.mp4'),(131,'attrib','backgroundColor',''),(131,'attrib','effect','marqueeLeft'),(131,'attrib','enableStat','Inherit'),(131,'attrib','lowerLimit','0'),(131,'attrib','name',''),(131,'attrib','speed','4'),(131,'attrib','ta_text_advanced','0'),(131,'attrib','upperLimit','0'),(131,'attrib','xmds','1'),(131,'cdata','javaScript',''),(131,'cdata','styleSheet',''),(131,'cdata','text','<p><span style=\"color:#ffffff;font-size:48px;\">Welcome to home..</span></p>'),(134,'attrib','deleteOnExpiry','0'),(134,'attrib','enableStat','Inherit'),(134,'attrib','name',''),(135,'attrib','deleteOnExpiry','0'),(135,'attrib','enableStat','Inherit'),(135,'attrib','name',''),(137,'attrib','backgroundColor','#dda8a8'),(137,'attrib','effect','marqueeLeft'),(137,'attrib','enableStat','Inherit'),(137,'attrib','name',''),(137,'attrib','speed','3'),(137,'cdata','javaScript',''),(137,'cdata','styleSheet',''),(137,'cdata','text','<p><span style=\"color:hsl(0,75%,60%);font-size:48px;\">Welcome to Digital Signage...</span></p>'),(138,'attrib','enableStat','Off'),(138,'attrib','name',''),(139,'attrib','enableStat','Off'),(139,'attrib','name',''),(178,'attrib','enableStat','Inherit'),(178,'attrib','mute','0'),(178,'attrib','uri','47.mp4'),(179,'attrib','enableStat','Inherit'),(179,'attrib','loop','0'),(179,'attrib','mute','0'),(179,'attrib','name',NULL),(179,'attrib','scaleType','aspect'),(179,'attrib','showFullScreen','0'),(179,'attrib','uri','49.mp4'),(180,'attrib','enableStat','Inherit'),(180,'attrib','mute','0'),(180,'attrib','uri','35.mp4'),(181,'attrib','enableStat','Inherit'),(181,'attrib','mute','0'),(181,'attrib','uri','53.mp4'),(182,'attrib','enableStat','Inherit'),(182,'attrib','mute','0'),(182,'attrib','uri','38.mp4'),(183,'attrib','enableStat','Inherit'),(183,'attrib','mute','0'),(183,'attrib','uri','29.mp4'),(184,'attrib','enableStat','Inherit'),(184,'attrib','loop','0'),(184,'attrib','mute','0'),(184,'attrib','name',NULL),(184,'attrib','scaleType','aspect'),(184,'attrib','showFullScreen','0'),(184,'attrib','uri','52.mp4'),(185,'attrib','enableStat','Inherit'),(185,'attrib','mute','0'),(185,'attrib','uri','44.mp4'),(186,'attrib','enableStat','Inherit'),(186,'attrib','mute','0'),(186,'attrib','uri','33.mp4'),(187,'attrib','enableStat','Inherit'),(187,'attrib','mute','0'),(187,'attrib','uri','51.mp4'),(188,'attrib','enableStat','Inherit'),(188,'attrib','mute','0'),(188,'attrib','uri','55.mp4'),(189,'attrib','enableStat','Inherit'),(189,'attrib','mute','0'),(189,'attrib','uri','56.mp4'),(190,'attrib','enableStat','Inherit'),(190,'attrib','mute','0'),(190,'attrib','uri','41.mp4'),(191,'attrib','enableStat','Inherit'),(191,'attrib','mute','0'),(191,'attrib','uri','58.mp4'),(192,'attrib','enableStat','Inherit'),(192,'attrib','mute','0'),(192,'attrib','uri','57.mp4'),(193,'attrib','enableStat','Inherit'),(193,'attrib','mute','0'),(193,'attrib','uri','60.mp4'),(194,'attrib','enableStat','Inherit'),(194,'attrib','mute','0'),(194,'attrib','uri','26.mp4'),(195,'attrib','enableStat','Inherit'),(195,'attrib','mute','0'),(195,'attrib','uri','45.mp4'),(196,'attrib','enableStat','Inherit'),(196,'attrib','mute','0'),(196,'attrib','uri','28.mp4'),(197,'attrib','enableStat','Inherit'),(197,'attrib','mute','0'),(197,'attrib','uri','31.mp4'),(198,'attrib','enableStat','Inherit'),(198,'attrib','mute','0'),(198,'attrib','uri','43.mp4'),(199,'attrib','enableStat','Inherit'),(199,'attrib','mute','0'),(199,'attrib','uri','59.mp4'),(200,'attrib','enableStat','Inherit'),(200,'attrib','mute','0'),(200,'attrib','uri','62.mp4'),(201,'attrib','enableStat','Inherit'),(201,'attrib','mute','0'),(201,'attrib','uri','54.mp4'),(202,'attrib','enableStat','Inherit'),(202,'attrib','mute','0'),(202,'attrib','uri','63.mp4'),(203,'attrib','enableStat','Inherit'),(203,'attrib','mute','0'),(203,'attrib','uri','61.mp4'),(204,'attrib','backgroundColor','#e3d5d5'),(204,'attrib','effect','marqueeLeft'),(204,'attrib','enableStat','Inherit'),(204,'attrib','lowerLimit','0'),(204,'attrib','marqueeInlineSelector',NULL),(204,'attrib','name',NULL),(204,'attrib','speed','4'),(204,'attrib','ta_text_advanced','0'),(204,'attrib','upperLimit','0'),(204,'attrib','xmds','1'),(204,'cdata','javaScript',''),(204,'cdata','styleSheet',''),(204,'cdata','text','<p><span style=\"font-size: 48px;\"><span style=\"color: #111111;\">Powered by&nbsp; Oasys DSS Demo layout..</span></span></p>\r\n'),(255,'attrib','backgroundColor','#b3a5a5'),(255,'attrib','effect','marqueeLeft'),(255,'attrib','enableStat','Inherit'),(255,'attrib','name',''),(255,'attrib','speed','4'),(255,'cdata','javaScript',''),(255,'cdata','styleSheet',''),(255,'cdata','text','<p><span style=\"color:hsl(0,75%,60%);font-size:48px;\">Digital Signage Combination layout</span></p>'),(256,'attrib','enableStat','Inherit'),(256,'attrib','loop','0'),(256,'attrib','mute','0'),(256,'attrib','name',NULL),(256,'attrib','scaleType','aspect'),(256,'attrib','showFullScreen','0'),(256,'attrib','uri','40.mp4'),(257,'attrib','enableStat','Inherit'),(257,'attrib','mute','0'),(257,'attrib','uri','24.mp4'),(258,'attrib','enableStat','Inherit'),(258,'attrib','mute','0'),(258,'attrib','uri','39.mp4'),(259,'attrib','enableStat','Inherit'),(259,'attrib','mute','0'),(259,'attrib','uri','32.mp4'),(260,'attrib','enableStat','Inherit'),(260,'attrib','mute','0'),(260,'attrib','uri','48.mp4'),(261,'attrib','enableStat','Inherit'),(261,'attrib','mute','0'),(261,'attrib','uri','27.mp4'),(262,'attrib','enableStat','Inherit'),(262,'attrib','mute','0'),(262,'attrib','uri','46.mp4'),(263,'attrib','enableStat','Inherit'),(263,'attrib','mute','0'),(263,'attrib','uri','34.mp4'),(264,'attrib','enableStat','Inherit'),(264,'attrib','mute','0'),(264,'attrib','uri','37.mp4'),(265,'attrib','enableStat','Inherit'),(265,'attrib','mute','0'),(265,'attrib','uri','50.mp4'),(266,'attrib','enableStat','Inherit'),(266,'attrib','mute','0'),(266,'attrib','uri','30.mp4'),(267,'attrib','enableStat','Inherit'),(267,'attrib','mute','0'),(267,'attrib','uri','36.mp4'),(268,'attrib','enableStat','Inherit'),(268,'attrib','mute','0'),(268,'attrib','uri','42.mp4'),(269,'attrib','enableStat','Inherit'),(269,'attrib','mute','0'),(269,'attrib','uri','25.mp4'),(270,'attrib','backgroundColor','#e1d5d5'),(270,'attrib','effect','marqueeLeft'),(270,'attrib','enableStat','On'),(270,'attrib','name',''),(270,'attrib','speed','4'),(270,'cdata','javaScript',''),(270,'cdata','styleSheet',''),(270,'cdata','text','<p><span style=\"color:hsl(30,75%,60%);font-size:48px;\">Digital Signage Child Layout...</span></p>'),(271,'attrib','enableStat','Inherit'),(271,'attrib','loop','0'),(271,'attrib','mute','0'),(271,'attrib','name',NULL),(271,'attrib','scaleType','aspect'),(271,'attrib','showFullScreen','0'),(271,'attrib','uri','64.mp4'),(272,'attrib','enableStat','Inherit'),(272,'attrib','mute','0'),(272,'attrib','uri','67.mp4'),(273,'attrib','enableStat','Inherit'),(273,'attrib','mute','0'),(273,'attrib','uri','76.mp4'),(274,'attrib','enableStat','Inherit'),(274,'attrib','mute','0'),(274,'attrib','uri','78.mp4'),(275,'attrib','enableStat','Inherit'),(275,'attrib','mute','0'),(275,'attrib','uri','79.mp4'),(276,'attrib','enableStat','Inherit'),(276,'attrib','mute','0'),(276,'attrib','uri','71.mp4'),(277,'attrib','enableStat','Inherit'),(277,'attrib','mute','0'),(277,'attrib','uri','81.mp4'),(278,'attrib','enableStat','Inherit'),(278,'attrib','mute','0'),(278,'attrib','uri','75.mp4'),(279,'attrib','enableStat','Inherit'),(279,'attrib','mute','0'),(279,'attrib','uri','74.mp4'),(280,'attrib','enableStat','Inherit'),(280,'attrib','mute','0'),(280,'attrib','uri','77.mp4'),(281,'attrib','enableStat','Inherit'),(281,'attrib','mute','0'),(281,'attrib','uri','73.mp4'),(282,'attrib','enableStat','Inherit'),(282,'attrib','mute','0'),(282,'attrib','uri','80.mp4'),(283,'attrib','enableStat','Inherit'),(283,'attrib','mute','0'),(283,'attrib','uri','72.mp4'),(284,'attrib','enableStat','Inherit'),(284,'attrib','mute','0'),(284,'attrib','uri','70.mp4'),(285,'attrib','enableStat','Inherit'),(285,'attrib','mute','0'),(285,'attrib','uri','69.mp4'),(286,'attrib','enableStat','Inherit'),(286,'attrib','mute','0'),(286,'attrib','uri','68.mp4'),(287,'attrib','enableStat','Inherit'),(287,'attrib','mute','0'),(287,'attrib','uri','66.mp4'),(288,'attrib','enableStat','Inherit'),(288,'attrib','mute','0'),(288,'attrib','uri','65.mp4'),(289,'attrib','align','center'),(289,'attrib','enableStat','Inherit'),(289,'attrib','name',NULL),(289,'attrib','scaleType','center'),(289,'attrib','uri','8.jpg'),(289,'attrib','valign','middle'),(290,'attrib','align','center'),(290,'attrib','enableStat','Inherit'),(290,'attrib','name',NULL),(290,'attrib','scaleType','center'),(290,'attrib','uri','9.jpg'),(290,'attrib','valign','middle'),(292,'attrib','backgroundColor','#ecbfbf'),(292,'attrib','effect','marqueeLeft'),(292,'attrib','enableStat','Inherit'),(292,'attrib','name',''),(292,'attrib','speed','4'),(292,'cdata','javaScript',''),(292,'cdata','styleSheet',''),(292,'cdata','text','<p><span style=\"background-color:hsl(0, 0%, 100%);color:hsl(0,0%,0%);font-size:48px;\">Welcome to digital signage...</span></p>'),(294,'attrib','enableStat','On'),(294,'attrib','itemsPerPage','1'),(294,'attrib','name',''),(294,'raw','elements','[{\"elements\":[{\"id\":\"global_library_image\",\"elementName\":\"\",\"elementId\":\"element_global_library_image_350779\",\"type\":\"global\",\"left\":1,\"top\":0,\"width\":1918,\"height\":960,\"layer\":0,\"rotation\":0,\"properties\":[{\"id\":\"imageReplace\"},{\"id\":\"opacity\",\"value\":100},{\"id\":\"objectFit\",\"value\":\"contain\"},{\"id\":\"alignId\",\"value\":\"center\"},{\"id\":\"valignId\",\"value\":\"middle\"},{\"id\":\"roundBorder\",\"value\":false},{\"id\":\"borderRadius\",\"value\":20},{\"id\":\"imageShadow\",\"value\":false},{\"id\":\"imageShadowColor\"},{\"id\":\"shadowX\",\"value\":1},{\"id\":\"shadowY\",\"value\":1},{\"id\":\"shadowBlur\",\"value\":2},{\"id\":\"assetId\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaId\":10,\"mediaName\":\"277.jpg\"},{\"id\":\"text\",\"elementName\":\"\",\"elementId\":\"element_text_960730\",\"type\":\"global\",\"left\":0,\"top\":959,\"width\":1920,\"height\":121,\"layer\":1,\"rotation\":0,\"properties\":[{\"id\":\"text\",\"value\":\"Welcome to Digital Signage...\"},{\"id\":\"fontFamily\",\"value\":\"\"},{\"id\":\"fontColor\",\"value\":\"#c51818\"},{\"id\":\"fitToArea\",\"value\":false},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fontSize\",\"value\":\"40\"},{\"id\":\"lineHeight\",\"value\":\"1.2\"},{\"id\":\"bold\",\"value\":false},{\"id\":\"italics\",\"value\":false},{\"id\":\"underline\",\"value\":false},{\"id\":\"textWrap\",\"value\":true},{\"id\":\"justify\",\"value\":false},{\"id\":\"showOverflow\",\"value\":true},{\"id\":\"textShadow\",\"value\":false},{\"id\":\"textShadowColor\",\"value\":\"\"},{\"id\":\"shadowX\",\"value\":\"1\"},{\"id\":\"shadowY\",\"value\":\"1\"},{\"id\":\"shadowBlur\",\"value\":\"2\"},{\"id\":\"horizontalAlign\",\"value\":\"center\"},{\"id\":\"verticalAlign\",\"value\":\"center\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Text\"}]}]'),(296,'attrib','enableStat','Off'),(296,'attrib','itemsPerPage','1'),(296,'attrib','name',''),(296,'raw','elements','[{\"elements\":[{\"id\":\"global_library_image\",\"elementName\":\"\",\"elementId\":\"element_global_library_image_707732\",\"type\":\"global\",\"left\":1,\"top\":0,\"width\":1920,\"height\":1081,\"layer\":0,\"rotation\":0,\"properties\":[{\"id\":\"imageReplace\"},{\"id\":\"opacity\",\"value\":100},{\"id\":\"objectFit\",\"value\":\"contain\"},{\"id\":\"alignId\",\"value\":\"center\"},{\"id\":\"valignId\",\"value\":\"middle\"},{\"id\":\"roundBorder\",\"value\":false},{\"id\":\"borderRadius\",\"value\":20},{\"id\":\"imageShadow\",\"value\":false},{\"id\":\"imageShadowColor\"},{\"id\":\"shadowX\",\"value\":1},{\"id\":\"shadowY\",\"value\":1},{\"id\":\"shadowBlur\",\"value\":2},{\"id\":\"assetId\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaId\":11,\"mediaName\":\"278.jpg\"},{\"id\":\"text\",\"elementName\":\"\",\"elementId\":\"element_text_309672\",\"type\":\"global\",\"left\":0,\"top\":985,\"width\":1920,\"height\":100,\"layer\":1,\"rotation\":0,\"properties\":[{\"id\":\"text\",\"value\":\"digital signage by oasys\"},{\"id\":\"fontFamily\",\"value\":\"\"},{\"id\":\"fontColor\",\"value\":\"#508cbb\"},{\"id\":\"fitToArea\",\"value\":false},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradientColor1\",\"value\":\"#222222\"},{\"id\":\"gradientColor2\",\"value\":\"#eeeeee\"},{\"id\":\"gradientType\",\"value\":\"linear\"},{\"id\":\"gradientAngle\",\"value\":\"0\"},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fontSize\",\"value\":\"40\"},{\"id\":\"lineHeight\",\"value\":\"1.2\"},{\"id\":\"bold\",\"value\":false},{\"id\":\"italics\",\"value\":false},{\"id\":\"underline\",\"value\":false},{\"id\":\"textWrap\",\"value\":true},{\"id\":\"justify\",\"value\":false},{\"id\":\"showOverflow\",\"value\":true},{\"id\":\"textShadow\",\"value\":false},{\"id\":\"textShadowColor\",\"value\":\"\"},{\"id\":\"shadowX\",\"value\":\"1\"},{\"id\":\"shadowY\",\"value\":\"1\"},{\"id\":\"shadowBlur\",\"value\":\"2\"},{\"id\":\"horizontalAlign\",\"value\":\"center\"},{\"id\":\"verticalAlign\",\"value\":\"center\"},{\"id\":\"elementName\",\"value\":\"\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Text\"}]}]'),(304,'attrib','backgroundColor','#dcacac'),(304,'attrib','effect','marqueeLeft'),(304,'attrib','enableStat','Inherit'),(304,'attrib','name',''),(304,'attrib','speed','4'),(304,'cdata','javaScript',''),(304,'cdata','styleSheet',''),(304,'cdata','text','<p><span style=\"color:hsl(0,0%,100%);font-size:48px;\">Welcome to Digital Signage...</span></p>'),(307,'attrib','backgroundColor','#dcacac'),(307,'attrib','effect','marqueeLeft'),(307,'attrib','enableStat','Inherit'),(307,'attrib','name',''),(307,'attrib','speed','4'),(307,'cdata','javaScript',''),(307,'cdata','styleSheet',''),(307,'cdata','text','<p><span style=\"color:hsl(0,0%,100%);font-size:48px;\">Welcome to Digital Signage...</span></p>'),(311,'attrib','enableStat','Off'),(311,'attrib','itemsPerPage','1'),(311,'attrib','name',''),(311,'raw','elements','[{\"elements\":[{\"id\":\"text\",\"elementName\":\"\",\"elementId\":\"element_text_23330\",\"type\":\"global\",\"left\":0,\"top\":915,\"width\":1920,\"height\":100,\"layer\":0,\"rotation\":0,\"properties\":[{\"id\":\"text\",\"value\":\"Powered by Digital signage\"},{\"id\":\"fontFamily\",\"value\":\"\"},{\"id\":\"fontColor\",\"value\":\"#b64e4e\"},{\"id\":\"fitToArea\",\"value\":false},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradientColor1\",\"value\":\"#222222\"},{\"id\":\"gradientColor2\",\"value\":\"#eeeeee\"},{\"id\":\"gradientType\",\"value\":\"linear\"},{\"id\":\"gradientAngle\",\"value\":\"0\"},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fontSize\",\"value\":\"40\"},{\"id\":\"lineHeight\",\"value\":\"1.2\"},{\"id\":\"bold\",\"value\":false},{\"id\":\"italics\",\"value\":false},{\"id\":\"underline\",\"value\":false},{\"id\":\"textWrap\",\"value\":true},{\"id\":\"justify\",\"value\":false},{\"id\":\"showOverflow\",\"value\":true},{\"id\":\"textShadow\",\"value\":false},{\"id\":\"textShadowColor\",\"value\":\"\"},{\"id\":\"shadowX\",\"value\":\"1\"},{\"id\":\"shadowY\",\"value\":\"1\"},{\"id\":\"shadowBlur\",\"value\":\"2\"},{\"id\":\"horizontalAlign\",\"value\":\"center\"},{\"id\":\"verticalAlign\",\"value\":\"center\"},{\"id\":\"elementName\",\"value\":\"\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Text\"}]}]'),(313,'attrib','enableStat','Off'),(313,'attrib','itemsPerPage','1'),(313,'attrib','name',''),(313,'raw','elements','[{\"elements\":[{\"id\":\"text\",\"elementName\":\"\",\"elementId\":\"element_text_23330\",\"type\":\"global\",\"left\":0,\"top\":915,\"width\":1910,\"height\":100,\"layer\":0,\"rotation\":0,\"properties\":[{\"id\":\"text\",\"value\":\"Powered by Digital signage\"},{\"id\":\"fontFamily\",\"value\":\"\"},{\"id\":\"fontColor\",\"value\":\"#b64e4e\"},{\"id\":\"fitToArea\",\"value\":false},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fontSize\",\"value\":\"40\"},{\"id\":\"lineHeight\",\"value\":\"1.2\"},{\"id\":\"bold\",\"value\":false},{\"id\":\"italics\",\"value\":false},{\"id\":\"underline\",\"value\":false},{\"id\":\"textWrap\",\"value\":true},{\"id\":\"justify\",\"value\":false},{\"id\":\"showOverflow\",\"value\":true},{\"id\":\"textShadow\",\"value\":false},{\"id\":\"textShadowColor\",\"value\":\"\"},{\"id\":\"shadowX\",\"value\":\"1\"},{\"id\":\"shadowY\",\"value\":\"1\"},{\"id\":\"shadowBlur\",\"value\":\"2\"},{\"id\":\"horizontalAlign\",\"value\":\"center\"},{\"id\":\"verticalAlign\",\"value\":\"center\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Text\"}]}]'),(322,'attrib','enableStat','Off'),(322,'attrib','itemsPerPage','1'),(322,'attrib','name',''),(322,'raw','elements','[{\"elements\":[{\"id\":\"global_library_image\",\"elementName\":\"\",\"elementId\":\"element_global_library_image_778037\",\"type\":\"global\",\"left\":0,\"top\":3,\"width\":1920,\"height\":1077,\"layer\":0,\"rotation\":0,\"properties\":[{\"id\":\"opacity\",\"value\":\"100\"},{\"id\":\"objectFit\",\"value\":\"contain\"},{\"id\":\"alignId\",\"value\":\"center\"},{\"id\":\"valignId\",\"value\":\"middle\"},{\"id\":\"roundBorder\",\"value\":false},{\"id\":\"borderRadius\",\"value\":\"20\"},{\"id\":\"imageShadow\",\"value\":false},{\"id\":\"imageShadowColor\",\"value\":\"\"},{\"id\":\"shadowX\",\"value\":\"1\"},{\"id\":\"shadowY\",\"value\":\"1\"},{\"id\":\"shadowBlur\",\"value\":\"2\"},{\"id\":\"elementName\",\"value\":\"\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaId\":8,\"mediaName\":\"272050.jpg\"},{\"id\":\"date_advanced\",\"elementName\":\"\",\"elementId\":\"element_date_advanced_678279\",\"type\":\"global\",\"left\":1540,\"top\":943,\"width\":380,\"height\":80,\"layer\":1,\"rotation\":0,\"properties\":[{\"id\":\"currentDate\",\"value\":true},{\"id\":\"offset\",\"value\":\"\"},{\"id\":\"date\",\"value\":\"\"},{\"id\":\"dateFormat\",\"value\":\"d/m/Y H:i:s\"},{\"id\":\"lang\",\"value\":\"en-gb\"},{\"id\":\"fontFamily\",\"value\":\"\"},{\"id\":\"fontColor\",\"value\":\"#6147cc\"},{\"id\":\"fitToArea\",\"value\":false},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fontSize\",\"value\":\"40\"},{\"id\":\"lineHeight\",\"value\":\"1.2\"},{\"id\":\"bold\",\"value\":false},{\"id\":\"italics\",\"value\":false},{\"id\":\"underline\",\"value\":false},{\"id\":\"textWrap\",\"value\":true},{\"id\":\"showOverflow\",\"value\":true},{\"id\":\"textShadow\",\"value\":false},{\"id\":\"textShadowColor\",\"value\":\"\"},{\"id\":\"shadowX\",\"value\":\"1\"},{\"id\":\"shadowY\",\"value\":\"1\"},{\"id\":\"shadowBlur\",\"value\":\"2\"},{\"id\":\"horizontalAlign\",\"value\":\"center\"},{\"id\":\"verticalAlign\",\"value\":\"center\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Date / Time\"},{\"id\":\"line\",\"elementName\":\"\",\"elementId\":\"element_line_609375\",\"type\":\"global\",\"left\":0,\"top\":747,\"width\":1920,\"height\":80,\"layer\":2,\"rotation\":0,\"properties\":[{\"id\":\"lineWidth\",\"value\":5},{\"id\":\"lineColor\",\"value\":\"#f9f9f9\"},{\"id\":\"lineStyle\",\"value\":\"solid\"},{\"id\":\"tip1Type\",\"value\":\"squared\"},{\"id\":\"tip2Type\",\"value\":\"squared\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Line\"},{\"id\":\"rectangle\",\"elementName\":\"test\",\"elementId\":\"element_rectangle_74544\",\"type\":\"global\",\"left\":12,\"top\":33,\"width\":539,\"height\":233,\"layer\":3,\"rotation\":0,\"properties\":[{\"id\":\"backgroundColor\",\"value\":\"#1775f6\"},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"roundBorder\",\"value\":false},{\"id\":\"borderRadius\",\"value\":\"20\"},{\"id\":\"outline\",\"value\":true},{\"id\":\"outlineColor\",\"value\":\"#f9f9f9\"},{\"id\":\"outlineWidth\",\"value\":\"8\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Rectangle\"},{\"id\":\"circle\",\"elementName\":\"test22\",\"elementId\":\"element_circle_324373\",\"type\":\"global\",\"left\":640,\"top\":16,\"width\":250,\"height\":250,\"layer\":4,\"rotation\":0,\"properties\":[{\"id\":\"backgroundColor\",\"value\":\"#1775f6\"},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fit\",\"value\":false},{\"id\":\"outline\",\"value\":true},{\"id\":\"outlineColor\",\"value\":\"#f9f9f9\"},{\"id\":\"outlineWidth\",\"value\":\"8\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Circle\"},{\"id\":\"rectangle\",\"elementName\":\"test3\",\"elementId\":\"element_rectangle_674073\",\"type\":\"global\",\"left\":1012,\"top\":57,\"width\":340,\"height\":209,\"layer\":5,\"rotation\":0,\"properties\":[{\"id\":\"backgroundColor\",\"value\":\"#1775f6\"},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"roundBorder\",\"value\":false},{\"id\":\"borderRadius\",\"value\":\"20\"},{\"id\":\"outline\",\"value\":true},{\"id\":\"outlineColor\",\"value\":\"#f9f9f9\"},{\"id\":\"outlineWidth\",\"value\":\"8\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Rectangle\"},{\"id\":\"ellipse\",\"elementName\":\"\",\"elementId\":\"element_ellipse_510020\",\"type\":\"global\",\"left\":1454,\"top\":50,\"width\":300,\"height\":200,\"layer\":6,\"rotation\":0,\"properties\":[{\"id\":\"backgroundColor\",\"value\":\"#1775F6\"},{\"id\":\"outline\",\"value\":true},{\"id\":\"outlineColor\",\"value\":\"#f9f9f9\"},{\"id\":\"outlineWidth\",\"value\":4}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Ellipse\"},{\"id\":\"triangle\",\"elementName\":\"test4\",\"elementId\":\"element_triangle_42967\",\"type\":\"global\",\"left\":106,\"top\":395,\"width\":250,\"height\":250,\"layer\":7,\"rotation\":0,\"properties\":[{\"id\":\"backgroundColor\",\"value\":\"#1775f6\"},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fit\",\"value\":false},{\"id\":\"outline\",\"value\":true},{\"id\":\"outlineColor\",\"value\":\"#f9f9f9\"},{\"id\":\"outlineWidth\",\"value\":\"8\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Triangle\"},{\"id\":\"pentagon\",\"elementName\":\"\",\"elementId\":\"element_pentagon_989342\",\"type\":\"global\",\"left\":1479,\"top\":395,\"width\":250,\"height\":250,\"layer\":8,\"rotation\":0,\"properties\":[{\"id\":\"backgroundColor\",\"value\":\"#1775f6\"},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fit\",\"value\":false},{\"id\":\"outline\",\"value\":true},{\"id\":\"outlineColor\",\"value\":\"#f9f9f9\"},{\"id\":\"outlineWidth\",\"value\":\"8\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Pentagon\"},{\"id\":\"hexagon\",\"elementName\":\"test6\",\"elementId\":\"element_hexagon_77623\",\"type\":\"global\",\"left\":76,\"top\":822,\"width\":280,\"height\":226,\"layer\":9,\"rotation\":0,\"properties\":[{\"id\":\"backgroundColor\",\"value\":\"#1775f6\"},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fit\",\"value\":false},{\"id\":\"outline\",\"value\":true},{\"id\":\"outlineColor\",\"value\":\"#f9f9f9\"},{\"id\":\"outlineWidth\",\"value\":\"8\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Hexagon\"},{\"id\":\"text\",\"elementName\":\"\",\"elementId\":\"element_text_916631\",\"type\":\"global\",\"left\":492,\"top\":870,\"width\":911,\"height\":153,\"layer\":10,\"rotation\":0,\"properties\":[{\"id\":\"text\",\"value\":\"Welome to Digital Signage\"},{\"id\":\"fontFamily\",\"value\":\"\"},{\"id\":\"fontColor\",\"value\":\"#f9f9f9\"},{\"id\":\"fitToArea\",\"value\":false},{\"id\":\"useGradient\",\"value\":false},{\"id\":\"gradient\",\"value\":\"{\\\"type\\\":\\\"linear\\\",\\\"color1\\\":\\\"#222222\\\",\\\"color2\\\":\\\"#eee\\\",\\\"angle\\\":0}\"},{\"id\":\"fontSize\",\"value\":\"40\"},{\"id\":\"lineHeight\",\"value\":\"1.2\"},{\"id\":\"bold\",\"value\":false},{\"id\":\"italics\",\"value\":false},{\"id\":\"underline\",\"value\":false},{\"id\":\"textWrap\",\"value\":true},{\"id\":\"justify\",\"value\":false},{\"id\":\"showOverflow\",\"value\":true},{\"id\":\"textShadow\",\"value\":false},{\"id\":\"textShadowColor\",\"value\":\"\"},{\"id\":\"shadowX\",\"value\":\"1\"},{\"id\":\"shadowY\",\"value\":\"1\"},{\"id\":\"shadowBlur\",\"value\":\"2\"},{\"id\":\"horizontalAlign\",\"value\":\"center\"},{\"id\":\"verticalAlign\",\"value\":\"center\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaName\":\"Text\"}]}]'),(323,'attrib','enableStat','Off'),(323,'attrib','itemsPerPage','1'),(323,'attrib','name',''),(323,'raw','elements','[{\"elements\":[{\"id\":\"global_library_image\",\"elementName\":\"\",\"elementId\":\"element_global_library_image_246858\",\"type\":\"global\",\"left\":-2,\"top\":3,\"width\":1920,\"height\":955,\"layer\":0,\"rotation\":0,\"properties\":[{\"id\":\"imageReplace\"},{\"id\":\"opacity\",\"value\":100},{\"id\":\"objectFit\",\"value\":\"contain\"},{\"id\":\"alignId\",\"value\":\"center\"},{\"id\":\"valignId\",\"value\":\"middle\"},{\"id\":\"roundBorder\",\"value\":false},{\"id\":\"borderRadius\",\"value\":20},{\"id\":\"imageShadow\",\"value\":false},{\"id\":\"imageShadowColor\"},{\"id\":\"shadowX\",\"value\":1},{\"id\":\"shadowY\",\"value\":1},{\"id\":\"shadowBlur\",\"value\":2},{\"id\":\"assetId\"}],\"isVisible\":true,\"effect\":\"noTransition\",\"mediaId\":2,\"mediaName\":\"Screenshot from 2024-12-18 11-41-51.png\"}]}]'),(324,'attrib','backgroundColor','#ebb0b0'),(324,'attrib','effect','marqueeLeft'),(324,'attrib','enableStat','Inherit'),(324,'attrib','name',''),(324,'attrib','speed','4'),(324,'cdata','javaScript',''),(324,'cdata','styleSheet',''),(324,'cdata','text','<p><span style=\"background-color:hsl(0,0%,0%);color:hsl(0,75%,60%);font-size:48px;\">Welcome to Oasys Digital Signage - Oasys டிஜிட்டல் சிக்னேஜுக்கு வரவேற்கிறோம்....</span></p><p>&nbsp;</p>'),(378,'attrib','enableStat','Inherit'),(379,'attrib','enableStat','Inherit'),(385,'attrib','enableStat','Off'),(385,'attrib','name',''),(385,'attrib','scaleType','stretch'),(386,'attrib','enableStat','Off'),(386,'attrib','name',''),(386,'attrib','scaleType','stretch'),(387,'attrib','enableStat','Off'),(387,'attrib','name',''),(387,'attrib','showFullScreen','1'),(388,'attrib','enableStat','Off'),(388,'attrib','name',''),(388,'attrib','showFullScreen','1'),(390,'attrib','backgroundColor','#e5aaaa'),(390,'attrib','effect','marqueeLeft'),(390,'attrib','enableStat','Inherit'),(390,'attrib','name',''),(390,'attrib','speed','4'),(390,'cdata','javaScript',''),(390,'cdata','styleSheet',''),(390,'cdata','text','<p><span style=\"color:#ffffff;font-size:48px;\">Welcome to Digital signage…</span></p>'),(391,'attrib','enableStat','Inherit'),(391,'attrib','scaleType','center'),(391,'attrib','uri','13.jpg'),(392,'attrib','enableStat','Inherit'),(392,'attrib','scaleType','center'),(392,'attrib','uri','10.jpg'),(393,'attrib','enableStat','Inherit'),(393,'attrib','scaleType','center'),(393,'attrib','uri','12.jpg'),(394,'attrib','enableStat','Inherit'),(394,'attrib','scaleType','center'),(394,'attrib','uri','15.jpg'),(395,'attrib','enableStat','Inherit'),(395,'attrib','scaleType','center'),(395,'attrib','uri','17.png'),(396,'attrib','enableStat','Inherit'),(396,'attrib','scaleType','center'),(396,'attrib','uri','14.jpg'),(397,'attrib','enableStat','Inherit'),(397,'attrib','scaleType','center'),(397,'attrib','uri','11.jpg'),(398,'attrib','enableStat','Inherit'),(398,'attrib','scaleType','center'),(398,'attrib','uri','16.png'),(399,'attrib','enableStat','Inherit'),(399,'attrib','mute','0'),(399,'attrib','uri','19.mp4'),(400,'attrib','enableStat','Inherit'),(400,'attrib','loop','0'),(400,'attrib','mute','0'),(400,'attrib','name',NULL),(400,'attrib','scaleType','aspect'),(400,'attrib','showFullScreen','0'),(400,'attrib','uri','18.mp4'),(401,'attrib','enableStat','Inherit'),(401,'attrib','loop','0'),(401,'attrib','mute','0'),(401,'attrib','name',NULL),(401,'attrib','scaleType','aspect'),(401,'attrib','showFullScreen','0'),(401,'attrib','uri','22.mp4'),(402,'attrib','align','center'),(402,'attrib','enableStat','Inherit'),(402,'attrib','name',NULL),(402,'attrib','scaleType','center'),(402,'attrib','uri','20.jpg'),(402,'attrib','valign','middle'),(403,'attrib','enableStat','Inherit'),(403,'attrib','scaleType','center'),(403,'attrib','uri','23.jpg'),(404,'attrib','enableStat','Inherit'),(404,'attrib','scaleType','center'),(404,'attrib','uri','8.jpg'),(405,'attrib','enableStat','Inherit'),(405,'attrib','scaleType','center'),(405,'attrib','uri','9.jpg'),(406,'attrib','enableStat','Inherit'),(406,'attrib','scaleType','center'),(406,'attrib','uri','21.jpg');
/*!40000 ALTER TABLE `widgetoption` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-03-06 18:15:52
