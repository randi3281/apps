/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: randigro_main
-- ------------------------------------------------------
-- Server version	10.11.8-MariaDB-0ubuntu0.24.04.1

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
-- Table structure for table `accititaties`
--

DROP TABLE IF EXISTS `accititaties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accititaties` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accititaties`
--

LOCK TABLES `accititaties` WRITE;
/*!40000 ALTER TABLE `accititaties` DISABLE KEYS */;
/*!40000 ALTER TABLE `accititaties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ackampus`
--

DROP TABLE IF EXISTS `ackampus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ackampus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `nama_kampus` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ackampus`
--

LOCK TABLES `ackampus` WRITE;
/*!40000 ALTER TABLE `ackampus` DISABLE KEYS */;
INSERT INTO `ackampus` VALUES
(1,'uingusdur','UIN K.H. Abdurrahman Wahid'),
(2,'itsnupkl','ITSNU Pekalongan');
/*!40000 ALTER TABLE `ackampus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aclogin`
--

DROP TABLE IF EXISTS `aclogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aclogin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `keslog` int(3) NOT NULL,
  `minkode` int(100) DEFAULT NULL,
  `kampus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aclogin`
--

LOCK TABLES `aclogin` WRITE;
/*!40000 ALTER TABLE `aclogin` DISABLE KEYS */;
INSERT INTO `aclogin` VALUES
(1,NULL,NULL,'w','11111111',222222,3,NULL,NULL),
(3,NULL,NULL,'e','1234',1,3,NULL,NULL),
(4,NULL,NULL,'s','2',2,3,NULL,NULL),
(5,NULL,NULL,'q','1',1,3,NULL,NULL),
(6,NULL,NULL,'tr','2',2,3,NULL,NULL),
(7,NULL,NULL,'wq','2',2,3,NULL,NULL),
(8,NULL,NULL,'we','2',1,3,NULL,NULL),
(9,NULL,NULL,'12fwq','2',1,3,NULL,NULL),
(11,NULL,NULL,'de','1',1,3,NULL,NULL),
(12,NULL,NULL,'randi','23122002',231220,3,NULL,'uingusdur'),
(13,NULL,NULL,'Ummi','123',123456,3,NULL,NULL),
(14,NULL,NULL,'afif','23122002',231220,3,NULL,'itsnupkl'),
(15,NULL,NULL,'ue','u',123456,3,NULL,NULL),
(16,NULL,NULL,'anfi3281','23122002',123456,3,NULL,NULL),
(20,NULL,NULL,'tes','23122002',231220,3,NULL,'itsnupkl'),
(21,NULL,NULL,'zada123','zada1234',321123,3,NULL,'itsnupkl'),
(22,NULL,NULL,'faliq56','87654321',654321,3,NULL,'uingusdur'),
(23,NULL,NULL,'Qoriaina','qoriaina',140102,3,NULL,'uingusdur'),
(24,NULL,NULL,'Faiz3114','Faizah31',143103,3,NULL,'uingusdur'),
(25,NULL,NULL,'Ladzidz123','Jatibarang ',123456,3,NULL,'uingusdur'),
(26,NULL,NULL,'rofiaqil21','@Rofiaqil21',210902,3,NULL,'uingusdur'),
(27,NULL,NULL,'kav123','#123saia',260092,3,NULL,'uingusdur'),
(28,NULL,NULL,'Fatima13','ftmtz0409',40920,3,NULL,'uingusdur'),
(29,NULL,NULL,'hamsa1','hamsalim',654321,3,NULL,'uingusdur'),
(30,NULL,NULL,'kiwkiw','kiwkiwkiw',111111,3,NULL,'itsnupkl'),
(31,NULL,NULL,'Qoriaina','qoriaina',140102,3,NULL,'uingusdur'),
(32,NULL,NULL,'mizan30','mizannep30',300402,3,NULL,'uingusdur'),
(33,NULL,NULL,'chusnawid12','wisuda2024',202402,3,NULL,'uingusdur'),
(34,NULL,NULL,'dia','12345678',123456,-1,NULL,'itsnupkl'),
(35,NULL,NULL,'irwan28','Lahir28072001*',280701,3,NULL,'uingusdur'),
(36,NULL,NULL,'ana123','anazukha1511',123456,3,NULL,'uingusdur'),
(37,NULL,NULL,'ika123','12345678',123456,3,NULL,'uingusdur'),
(38,NULL,NULL,'sintanurul21','halizah21',999999,3,NULL,'itsnupkl'),
(39,NULL,NULL,'adelia','adel0026',172506,3,NULL,'itsnupkl'),
(40,NULL,NULL,'Neyla28','Rajwaa28',455455,3,NULL,'uingusdur'),
(41,NULL,NULL,'Agung123','08April2000',123456,3,NULL,'uingusdur');
/*!40000 ALTER TABLE `aclogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acrepo`
--

DROP TABLE IF EXISTS `acrepo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acrepo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `repositori` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acrepo`
--

LOCK TABLES `acrepo` WRITE;
/*!40000 ALTER TABLE `acrepo` DISABLE KEYS */;
INSERT INTO `acrepo` VALUES
(5,'Skripsi Mode Serius','anfi3281',NULL,NULL),
(12,'jurnal','zada123',NULL,NULL),
(13,'Disertasiku','faliq56',NULL,NULL),
(15,'Proposalkuu','rofiaqil21',NULL,NULL),
(16,'kav','kav123',NULL,NULL),
(17,'Bismillahskripsi','Fatima13',NULL,NULL),
(19,'tahu krispi','kiwkiw',NULL,NULL),
(20,'roti kripsi','kiwkiw',NULL,NULL),
(21,'Skripsi','randi',NULL,NULL),
(22,'Metode Penelitian Bahasa Artikel','randi',NULL,NULL),
(23,'skripsilah','mizan30',NULL,NULL),
(24,'skripsisaya','chusnawid12',NULL,NULL),
(25,'KKNMB Artikel Opini','randi',NULL,NULL),
(26,'Permainan Bahasa Arab','randi',NULL,NULL),
(27,'tugas pkn','dia',NULL,NULL),
(28,'Skripsi Irwan','irwan28',NULL,NULL),
(29,'semangatku','Qoriaina',NULL,NULL),
(30,'skripsi','ana123',NULL,NULL),
(31,'Proposal','hamsa1',NULL,NULL),
(32,'Pelatihan LBM KTI 11 Juni 2023','randi',NULL,NULL),
(34,'KKN Kolaborasi Nusantara','randi',NULL,NULL),
(35,'Skripsi saya','ika123',NULL,NULL),
(36,'katalog digital','sintanurul21',NULL,NULL),
(38,'tugasgk','adelia',NULL,NULL),
(39,'My Skripsi','Neyla28',NULL,NULL),
(40,'Laporan PPL','randi',NULL,NULL),
(41,'Artikel PKM 2023','randi',NULL,NULL),
(42,'Skripsi ITSNU','randi',NULL,NULL),
(43,'Skripsiku','Agung123',NULL,NULL);
/*!40000 ALTER TABLE `acrepo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acsession`
--

DROP TABLE IF EXISTS `acsession`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acsession` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sessionlog1` bigint(30) NOT NULL,
  `sessionlog2` bigint(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `urutansesi` int(1) NOT NULL,
  `repo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=313 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acsession`
--

LOCK TABLES `acsession` WRITE;
/*!40000 ALTER TABLE `acsession` DISABLE KEYS */;
INSERT INTO `acsession` VALUES
(60,NULL,NULL,631915,0,'Ummi',2,NULL),
(61,NULL,NULL,4833706,0,'Ummi',3,NULL),
(73,NULL,NULL,5377480,0,'ue',1,NULL),
(74,NULL,NULL,6214243,0,'ue',2,NULL),
(75,NULL,NULL,9226549,0,'ue',3,NULL),
(91,NULL,NULL,2185452,0,'e',3,NULL),
(113,NULL,NULL,7279517,0,'w',1,NULL),
(114,NULL,NULL,9579443,0,'anfi3281',2,NULL),
(115,NULL,NULL,4657761,0,'anfi3281',3,NULL),
(119,NULL,NULL,9743337,0,'w',2,NULL),
(122,NULL,NULL,6513647,0,'w',3,NULL),
(155,NULL,NULL,782878472,0,'afif',1,NULL),
(156,NULL,NULL,215371523,859761738,'afif',2,'Skripsi saya'),
(159,NULL,NULL,227383894,198772541,'afif',3,'Skripsi saya'),
(170,NULL,NULL,349925499,696149541,'zada123',3,'jurnal'),
(178,NULL,NULL,169172256,281466798,'faliq56',3,'Disertasiku'),
(181,NULL,NULL,742799556,567783582,'Qori Aina',1,NULL),
(191,NULL,NULL,667922937,0,'Faiz3114',3,NULL),
(192,NULL,NULL,733826313,444231213,'rofiaqil21',3,'Proposalkuu'),
(193,NULL,NULL,613617415,0,'kav123',1,NULL),
(194,NULL,NULL,794949993,894798739,'kav123',2,'kav'),
(195,NULL,NULL,356885229,215799376,'kav123',3,'kav'),
(196,NULL,NULL,824418142,718293977,'Fatima13',3,'Bismillahskripsi'),
(200,NULL,NULL,262429254,517782383,'kiwkiw',3,'tahu krispi'),
(202,NULL,NULL,167654974,0,'Qori Aina',2,NULL),
(203,NULL,NULL,537111452,0,'Qoriaina',2,NULL),
(204,NULL,NULL,966314364,0,'Qori Aina',3,NULL),
(209,NULL,NULL,814326483,563155928,'mizan30',3,'skripsilah'),
(219,NULL,NULL,475593587,654128913,'dia',3,'tugas pkn'),
(220,NULL,NULL,152577279,838932232,'chusnawid12',1,'skripsisaya'),
(221,NULL,NULL,181338611,0,'chusnawid12',2,NULL),
(222,NULL,NULL,322225227,212596742,'chusnawid12',3,'skripsisaya'),
(227,NULL,NULL,229327191,958431779,'irwan28',1,'Skripsi Irwan'),
(229,NULL,NULL,563714863,474385397,'irwan28',2,'Skripsi Irwan'),
(230,NULL,NULL,414325971,577111176,'irwan28',3,'Skripsi Irwan'),
(233,NULL,NULL,828869954,492895929,'Qoriaina',3,'semangatku'),
(234,NULL,NULL,949331744,763863538,'ana123',2,'skripsi'),
(235,NULL,NULL,295711379,962699159,'ana123',3,'skripsi'),
(247,NULL,NULL,672988543,728914532,'ika123',3,'Skripsi saya'),
(255,NULL,NULL,377437886,591569826,'hamsa1',1,'Proposal'),
(261,NULL,NULL,376486237,246437577,'sintanurul21',1,'katalog digital'),
(263,NULL,NULL,193922617,299568292,'adelia',1,'tugasgk'),
(264,NULL,NULL,995259722,396944224,'sintanurul21',2,'katalog digital'),
(265,NULL,NULL,715122226,731551358,'sintanurul21',3,'katalog digital'),
(268,NULL,NULL,175149441,323915249,'adelia',2,'tugasgk'),
(269,NULL,NULL,995417475,185779735,'adelia',3,'tugasgk'),
(286,NULL,NULL,944939965,538128291,'Neyla28',3,'My Skripsi'),
(292,NULL,NULL,628671194,982388788,'hamsa1',2,'Proposal'),
(293,NULL,NULL,156286421,821222456,'hamsa1',3,'Proposal'),
(303,NULL,NULL,893232941,0,'Agung123',1,NULL),
(304,NULL,NULL,638812949,455677897,'Agung123',2,'Skripsiku'),
(308,NULL,NULL,275291733,347728152,'Agung123',3,'Skripsiku'),
(310,NULL,NULL,658737289,939898354,'randi',1,'Skripsi ITSNU'),
(311,NULL,NULL,676568942,946772868,'randi',2,'Skripsi ITSNU'),
(312,NULL,NULL,681449845,369128211,'randi',3,'Skripsi ITSNU');
/*!40000 ALTER TABLE `acsession` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anfiniti_dataweb`
--

DROP TABLE IF EXISTS `anfiniti_dataweb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anfiniti_dataweb` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login_id` bigint(20) unsigned NOT NULL,
  `nama_web` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `anfiniti_dataweb_login_id_foreign` (`login_id`),
  CONSTRAINT `anfiniti_dataweb_login_id_foreign` FOREIGN KEY (`login_id`) REFERENCES `anfiniti_login` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anfiniti_dataweb`
--

LOCK TABLES `anfiniti_dataweb` WRITE;
/*!40000 ALTER TABLE `anfiniti_dataweb` DISABLE KEYS */;
INSERT INTO `anfiniti_dataweb` VALUES
(1,20,'sag','dsa','2023-08-18 23:34:41','2023-08-18 23:34:41',NULL,'1692430481.png'),
(2,20,'sag','shasd','2023-08-19 00:01:09','2023-08-19 00:01:09',NULL,'1692432068.png'),
(3,20,'cek','k','2023-08-19 00:03:26','2023-08-19 00:03:26',NULL,'1692432206.png'),
(4,20,'hmmm','m','2023-08-19 00:27:36','2023-08-19 00:27:36',NULL,'1692433656.png'),
(22,25,'Youtube','youtube.com','2023-08-31 04:49:26','2023-08-31 04:51:53',NULL,'1693486166.svg'),
(23,25,'facebook','facebook.com','2023-08-31 04:51:35','2023-08-31 04:51:53',NULL,'1693486295.svg'),
(32,26,'sikadu','sikadu.uingusdur.ac.id','2023-09-03 19:57:10','2023-09-03 19:57:10',NULL,'1693799830.png'),
(33,27,'github','github.com','2023-09-04 05:09:52','2023-09-04 05:09:52',NULL,'1693832992.png'),
(34,28,'toram id','toram-id.info','2023-09-05 21:47:13','2023-09-05 21:47:13',NULL,'1693979233.png'),
(35,28,'nextjs','nextjs.org','2023-09-05 21:49:41','2023-09-05 21:49:41',NULL,'1693979381.png'),
(38,1,'ArenHost','arenhost.id/client/clientarea.php','2023-09-13 05:36:12','2023-12-05 19:35:44',NULL,'1701833744.png'),
(39,1,'Bootstrap','getbootstrap.com/docs/5.3/getting-started/introduction/','2023-09-13 05:40:46','2023-12-05 19:34:18',NULL,'1701833658.png'),
(40,1,'Canva','canva.com','2023-09-13 05:42:53','2023-12-18 04:43:36',NULL,'1701833622.png'),
(41,1,'ChatGPT','chat.openai.com/','2023-09-21 03:39:12','2023-12-05 19:37:03',NULL,'1701833823.png'),
(42,1,'WA','web.whatsapp.com/','2023-09-22 18:07:59','2024-02-08 01:44:03',NULL,'1701830617.png'),
(43,1,'Turnitin','www.turnitin.com/','2023-09-22 18:10:30','2023-12-05 18:46:04',NULL,'1701830764.png'),
(44,1,'Laravel Malasngoding','www.malasngoding.com/category/laravel/','2023-09-22 18:11:48','2024-01-13 23:36:05',NULL,'1701833331.png'),
(45,1,'OneDrive','onedrive.live.com/','2023-09-22 18:12:36','2023-12-05 19:27:30',NULL,'1701833250.png'),
(46,1,'YouTube','www.youtube.com/','2023-09-22 18:13:29','2023-12-02 22:36:00',NULL,'1701585356.png'),
(47,1,'GMail','mail.google.com','2023-09-22 18:14:15','2023-12-05 19:32:33',NULL,'1701833553.png'),
(48,1,'Sikadu','sikadu.uingusdur.ac.id/','2023-09-22 18:15:20','2023-12-05 19:26:47',NULL,'1701833207.png'),
(49,1,'Simitnu','simitnu.itsnupekalongan.ac.id/','2023-09-22 18:16:07','2023-12-05 19:25:44',NULL,'1701833144.png'),
(51,1,'JQuery','releases.jquery.com/','2023-09-22 18:22:25','2023-12-05 19:30:02',NULL,'1701833402.png'),
(52,1,'Uji Kompre','pba-ftik.uingusdur.ac.id/daftar/pendaftaran-ujian-komprehensif','2023-09-22 18:24:07','2023-12-05 18:44:45',NULL,'1701830685.png'),
(53,1,'SKKM Ajukan','docs.google.com/forms/d/e/1FAIpQLSdU4ioTC9INcUAY74wP40K5IvENxH-nxsBWRggDze30aYEtHg/viewform','2023-09-22 18:25:15','2023-12-05 18:47:16',NULL,'1701830836.png'),
(54,1,'SKKM Status','docs.google.com/spreadsheets/d/1KQsL07ajd5wQfofK_4NjO9HDPD-X-ZadoFbgMTtgQ2g/edit#gid=0','2023-09-22 18:26:19','2023-12-05 18:46:49',NULL,'1701830809.png'),
(55,1,'GTranslate','translate.google.co.id/','2023-09-22 18:27:25','2023-12-05 19:30:25',NULL,'1701833425.png'),
(56,1,'Bit.ly','bit.ly','2023-09-22 18:28:19','2023-12-05 19:35:24',NULL,'1701833716.png'),
(57,1,'Anficititate','apps.anfi.my.id/anficititate','2023-09-22 18:29:36','2023-12-05 19:36:18',NULL,'1701833778.png'),
(58,1,'GitHub','github.com/','2023-09-22 18:30:22','2023-12-05 19:32:57',NULL,'1701833577.png'),
(59,1,'SKBT Ajukan','pba-ftik.uingusdur.ac.id/daftar/pendaftaran-skbt','2023-09-22 18:31:29','2023-12-05 18:48:25',NULL,'1701830905.png'),
(60,1,'GScholar','scholar.google.com/','2023-09-22 18:32:25','2023-12-05 19:31:49',NULL,'1701833509.png'),
(61,1,'GoClassroom','classroom.google.com/','2023-09-22 18:33:18','2023-12-05 19:32:10',NULL,'1701833530.png'),
(62,29,'whatsapp','web.whatsapp.com','2023-09-25 21:42:05','2023-09-25 21:42:05',NULL,'1695706925.png'),
(64,1,'LinkedIn','linkedin.com/','2023-10-02 20:47:32','2023-12-05 19:28:14',NULL,'1701833294.png'),
(70,30,'Adira ToDoList','bit.ly/TODOLIST_ADIRA','2023-12-05 02:02:09','2023-12-05 02:02:09',NULL,'1701770529.png'),
(71,30,'Adira New Service Desk','servicedesk.adira.co.id','2023-12-05 02:02:51','2023-12-05 02:02:51',NULL,'1701770571.png'),
(72,30,'Adira WebMail','webmail.adira.co.id','2023-12-05 02:20:58','2023-12-05 02:20:58',NULL,'1701771658.png'),
(73,30,'Adira Intranet','intranet.adira.co.id','2023-12-05 02:21:20','2023-12-05 02:21:20',NULL,'1701771679.png'),
(74,1,'Shopee','shopee.co.id','2023-12-05 19:38:01','2023-12-05 19:38:01',NULL,'1701833881.png'),
(75,1,'Tokopedia','tokopedia.com','2023-12-05 19:38:34','2023-12-05 19:38:34',NULL,'1701833914.png'),
(76,1,'TurnitinUK','turnitinuk.com','2023-12-06 05:16:15','2023-12-06 05:16:15',NULL,'1701868575.png'),
(78,30,'Visoionet Mail','mailz.visionet.co.id','2024-01-02 17:44:45','2024-01-02 17:45:06',NULL,'1704246285.png'),
(79,30,'Visionet Portal','vportal.visionet.co.id','2024-01-02 17:45:38','2024-01-02 17:45:38',NULL,'1704246338.png'),
(80,1,'Laravel Web','laravel.com','2024-01-13 23:35:19','2024-01-13 23:35:53',NULL,'1705217719.png'),
(81,1,'Google Cloud','console.cloud.google.com/','2024-01-14 14:08:31','2024-01-14 14:08:31',NULL,'1705270111.png'),
(82,1,'Google Drive','drive.google.com','2024-01-21 05:01:24','2024-01-21 05:01:24',NULL,'1705838484.png'),
(83,1,'Microsoft Oulook','outlook.live.com/','2024-01-21 21:50:13','2024-01-21 21:50:13',NULL,'1705899013.png'),
(84,1,'Visionet Mail','mailz.visionet.co.id/','2024-01-21 21:56:27','2024-01-21 21:56:27',NULL,'1705899387.png'),
(85,1,'Instagram','instagram.com','2024-01-29 19:02:09','2024-02-12 06:43:04','2024-02-12 06:43:04','1706580129.png'),
(86,30,'Visionet ESS','ess.visionet.co.id/Main.zul','2024-01-31 04:03:14','2024-01-31 04:03:14',NULL,'1706698994.png'),
(87,30,'PRM Visionet (Password)','prm.visionet.co.id','2024-02-07 23:28:00','2024-02-07 23:28:00',NULL,'1707373680.png'),
(88,1,'Smart Campus Unisbank','www.unisbank.ac.id/sc/','2024-02-13 21:57:35','2024-02-13 21:57:35',NULL,'1707886655.png'),
(89,1,'E-Learning Unisbank','elearning.unisbank.ac.id/','2024-02-13 22:05:19','2024-02-13 22:05:19',NULL,'1707887119.png'),
(90,34,'test','test.com','2024-02-27 03:13:34','2024-02-27 03:13:34',NULL,'1709028814.jpg'),
(91,35,'Bokep','www.youtube.com/results?search_query=the+beatles+get+back+getback','2024-09-06 06:50:13','2024-09-06 06:50:13',NULL,'1725605413.jpg'),
(92,1,'Scite AI','scite.ai','2024-09-11 04:28:32','2024-09-11 04:28:32',NULL,'1726028912.png'),
(93,1,'Docker Hub','hub.docker.com','2024-09-17 03:41:05','2024-09-17 03:41:05',NULL,'1726544465.png');
/*!40000 ALTER TABLE `anfiniti_dataweb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anfiniti_login`
--

DROP TABLE IF EXISTS `anfiniti_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anfiniti_login` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `anfiniti_login_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anfiniti_login`
--

LOCK TABLES `anfiniti_login` WRITE;
/*!40000 ALTER TABLE `anfiniti_login` DISABLE KEYS */;
INSERT INTO `anfiniti_login` VALUES
(1,'randi','$2y$10$.k06W2nntKpDJVikqj.oGu67et5usqZ2Sw94.hLH8TUEVbKakOiUy','2023-08-17 15:09:31','2023-08-26 23:15:03'),
(2,'wkwk','1','2023-08-17 15:43:43','2023-08-17 15:43:43'),
(3,'h','j','2023-08-17 15:51:00','2023-08-17 15:51:00'),
(4,'k','$2y$10$Z1qiGDecSJfy21IanbDi6eZtZDs6ZHXVrj4FoFIDC64tOU1jTzoBC','2023-08-17 18:40:40','2023-08-17 18:40:40'),
(5,'sdfh','$2y$10$TKEKP8aAsSWFCF0U0qzQke44sDfZDQthRjhE/boLe/TVv5UDfABAq','2023-08-17 18:41:49','2023-08-17 18:41:49'),
(6,'kjkj','$2y$10$uUS.fhGYpVSeICOlpQnuxOCc8zvpzrSTWNj3eCx2J9ggxqhrxj5JC','2023-08-17 19:16:07','2023-08-17 19:16:07'),
(8,'randia','$2y$10$Et2P7uZ0p92ablKsFyF19ONq9HSFQRtv30qLol0VYUbg73nE8TmsK','2023-08-17 19:32:23','2023-08-17 19:32:23'),
(18,'uiuiui','$2y$10$.n8yuwHmsh/y1ROKpkWntey0rNXnvRGS/8YIXnaNt4WrAj0crZ4oS','2023-08-18 17:02:14','2023-08-18 17:02:14'),
(19,'afif','$2y$10$YQ.lQNsGZNzxkCJdMxjhCePK0LH/.ssLCgiD4Fgy3z/67DbyyTyqO','2023-08-18 17:03:25','2023-08-18 17:03:25'),
(20,'anfi3281','$2y$10$TovG3kODTZehpU8wjr3equlou2.8fuA4MUlhLqp2UFmyF0U7nSNji','2023-08-18 17:21:59','2023-08-18 17:21:59'),
(21,'baru','$2y$10$7UIV/cqW180uDyhYaoPGDeRiZPXziVuFGHFQVjPrBlLO7icYwAlCO','2023-08-27 16:00:50','2023-08-27 16:00:50'),
(22,'budi','$2y$10$4NIJ1EmkFQ59WZx5PINsBO./WA3jDPpGIaFvwal3C9pxLVi7Kw1Rq','2023-08-28 00:19:41','2023-08-28 00:19:41'),
(23,'ai','$2y$10$c/6tElhppP7BNdnzMHUWSOQxmUGH3ONt9XUnT7bGP2UuRBsDpPgk.','2023-08-28 20:07:49','2023-08-28 20:07:49'),
(24,'sleinary','$2y$10$jEA6RLqqXNbdfKyvhODq/eiiSG1hRIGG87e1smo8MZSD1lgWtMIwq','2023-08-30 05:58:18','2023-08-30 05:58:18'),
(25,'naufal','$2y$10$e9ReRkWbjN1.ZKzlg5CN4ejSgPLkEjbBZgcEctpPV5l8VgPESwnta','2023-08-31 04:47:36','2023-08-31 04:47:36'),
(26,'new','$2y$10$MdoAsWiFGuzYW4d7H7Uod.hu0z1QcYKYK5WzpeMFVJjqUPJxU/Com','2023-09-03 19:55:57','2023-09-03 19:55:57'),
(27,'fitri_03yuliastuti','$2y$10$Kjz6jysC5JLnnf1btaSBaeGre8ttQsjaR0sTy50mENXr4RdRxzd7K','2023-09-04 05:04:56','2023-09-04 05:04:56'),
(28,'r','$2y$10$MshzjTGkmAU7GroNDKMy7.PoanZh0wGJKTNC60unxjS4bIaeWL/k6','2023-09-05 21:46:28','2023-09-05 21:46:28'),
(29,'gyhdesignergraphic','$2y$10$PCGGSFcX2zmxXXbxSwwpr.p4PZJaSM55p716lypDSMe3HnMsewSoK','2023-09-25 21:39:33','2023-09-25 21:39:33'),
(30,'randiadira','$2y$10$QSa1KOryAX/i70QJ8ntageXYcDiuiHX1W/rQlGWy1D/DSiHajbJi.','2023-12-05 01:59:13','2024-06-02 20:57:37'),
(31,'ardanvf','$2y$10$tFQcXElEiLo/0gy8m3dJyu1mkT89BxcaWWn27G9y0pIz3NJOlt8ae','2024-01-08 00:08:23','2024-01-08 00:08:23'),
(32,'ekojoss','$2y$10$Rb7A2avsfbfxXyWuXXdn.Ocf7BVbfT/Uo2kQP0pex7rINi0xe1KHG','2024-01-15 12:37:45','2024-01-15 12:37:45'),
(33,'mustaqim','$2y$10$kTW.d4j3WV9VcYBxGkgjDuwq1ZN11QED8dr.qel3lqHPeq4Y25FOS','2024-01-22 00:46:43','2024-01-22 00:46:43'),
(34,'velltempest','$2y$10$zQimd2VjROYC7oG/7sx2PuNvKGm6BF6fzQMhDQf38dnyary/iqVJS','2024-02-27 03:12:34','2024-02-27 03:12:34'),
(35,'randiganteng','$2y$10$ZvTTW9jYA5fcsil61DcFL.TciKkoEUCH57uMFCUpBfRWz8NLgjioW','2024-09-06 06:49:14','2024-09-06 06:49:14');
/*!40000 ALTER TABLE `anfiniti_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anfiniti_session`
--

DROP TABLE IF EXISTS `anfiniti_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anfiniti_session` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login_id` bigint(20) unsigned NOT NULL,
  `sesi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `anfiniti_session_login_id_foreign` (`login_id`),
  CONSTRAINT `anfiniti_session_login_id_foreign` FOREIGN KEY (`login_id`) REFERENCES `anfiniti_login` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anfiniti_session`
--

LOCK TABLES `anfiniti_session` WRITE;
/*!40000 ALTER TABLE `anfiniti_session` DISABLE KEYS */;
INSERT INTO `anfiniti_session` VALUES
(8,20,'bKmU7n2FRlCtxdYu6quIvfpQSH5JpP30Jndv4AxXXI6WZlKlVgLkMXy1mHAKv2lrkmyHEVZUa0F0JgbVYwrOCEwgHlcH95IyGYZc','2023-08-18 19:11:37','2023-08-18 19:11:37','$2y$10$wSk9aQtjyaTwQV7ieBmLGOXjFtFwxxAl.U.fWtzLVAEd5W3oWF3Fy'),
(9,20,'bPZDIcareoyCQKele5nPzmFBWDQHwMWXgfFeE4SWhr0xM754C8WfaWYR1OeIm75fMalYdKxfjtSsv6xlWYfXZ3LgHsIOEFqC2Zub','2023-08-18 20:27:33','2023-08-18 20:27:33','$2y$10$QE3gWhzonxg1WAL7JEr/CODFH0Z5mP1e/4hXBFIxto.MgSKkVZ3c6'),
(10,20,'FHOMBSfFpLkCJSak4VOGZfgbONxx69TtvVkgZbM54Iekg4x9ZoSxuBc3hdkepziHuFtXPw8UeEcszVPBQZr4adwBZHxmfocAomSA','2023-08-18 21:05:19','2023-08-18 21:05:19','$2y$10$ZRg24cxHaz0w5ucbRoCdF.l2DEhiZpTcwKhIbJu2LY854DzBNWtiO'),
(11,20,'z12DML1My6LmcAOYbZEQdbg6TPRmjE5G5FMqC6bzZH6zHFU9bzOFtGmOl31bDARZadsDfuod0RsDDWOOhzWVS0L8fwNAbKHYsPEG','2023-08-18 21:48:20','2023-08-18 21:48:20','$2y$10$FvXZEcSvfvGXxDyu/CC4NO1Q0psOpQ6m9Sm8k9Oz7gIKDrIM5rQVG'),
(12,20,'JNy9w7yx5FAPMugMbOp7OouS1d7RY80qDiRlMwjWr96In8ab6KOVpsZ4V5xIjDEviWjrtB4WIqRU44CWQ61KnqFWbfM0McAgJFXy','2023-08-18 21:55:48','2023-08-18 21:55:48','$2y$10$.6Rp/NAQ1IldVYKhrQi2iuqHUSuqkNkBKHoXqaZWDcDbLWKY0UWkm'),
(13,20,'eorwETdw5gL2sIrGiTZlQ8ncnzkj3wcZzyDtIK34Dj8ItBeBplcsrhqFw9rwsJqPwKWtXkL4NBLVMhb7F0OpgidmdBoETb5tl1rD','2023-08-18 21:56:01','2023-08-18 21:56:01','$2y$10$7D2EqglhOCItFScFy7AzQ.JK.p03jgJVpXDPWkrMcMOCbGSZqnLkm'),
(14,20,'3qW6XUWSyi34spZ0oAgqaSB5xSlnOyKTpMZR04Pggx6mKhgQMZwWYNouw6CnOJcZnYKkAguWKpu5xxXmHfEHOgQ6aqBLvIWBc7g3','2023-08-18 22:02:50','2023-08-18 22:02:50','$2y$10$JpdjgkRdrqYs6UAqUfBr.OZ/9kTheFLevcdvG8yaU78GkupRMCbyS'),
(15,20,'fR8PEiMtj5IkI69Ba4ZXqfc3TKrl2E8vp1WlccZV6MxTjQ7f8eFi2MycyGQxwhJN3NxdAniKqytJcLvmWNKfAwuRpjlPxa3d4yFD','2023-08-18 22:41:03','2023-08-18 22:41:03','$2y$10$6hVXWBXo5vuzCQEX4wLpee920Ws6hT65YVz26GLJfsfIcNL5TdgRq'),
(16,20,'WrVUJk51GzfQmw2OMUIhtSANVyAqOn5vDNzDo7gaSIa1qEL9BtH6Cx28FHej43eelGH10ecyJw6q3BMOPiqTZfVevL59YfVj1l6k','2023-08-19 00:00:54','2023-08-19 00:00:54','$2y$10$1hgenCGb66Sxqgh4VTUPH.VxThvyCP.zXkOZIWpCWtZjVAQhRlzWu'),
(17,20,'WmFamdhbxDkrm9dNi3Dsaq0C9snzdL9KGdINo8y58lcWFtsx31mpStf4sMucoabWzxRJyyv17unHeRjZydcBjl3lqBRzArgmGHB3','2023-08-19 00:46:27','2023-08-19 00:46:27','$2y$10$WKBZOiggVOIKd2ItJ3/po.fwVVvqf1GLUczp1XcOF6gHMvsG4Ianu'),
(18,20,'EjDGcfrAEMEN3MhlZ2XfxCk3VNzuryZMT049bDxLz1FDJDekONf9CmUU3ThkKuG30tsRUyIaMRYV9rEqAQYHQ967wRMTbzvTVjNw','2023-08-19 00:56:37','2023-08-19 00:56:37','$2y$10$rp2rZEvurg3Z6IefLDLVJeq2BQdX70yfDvaiPvRtaEshB7WAaAjom'),
(19,1,'GSFTLAfoX4jO3VpgOp7WRwBbaxpaQj50AYg4Wa3lpoJviUnRPmWe5pyLt8EhIacTkZVygZ0ngx6EHItlPMIs8izzRPpsshdT2pQ6','2023-08-26 23:15:11','2023-08-26 23:15:11','$2y$10$ETb18ycNzP5gyXU7eDrWqeBCdef8DeRAQtKDsRGoPyhfpYVXypMGK'),
(20,1,'iluuUajNa0zHDdVVwHgliRfdjiqS5hc52XRe79SkPxjRBlbL0T6euIi9kWsmV5LzsB7QQfCppzluVVs9hkZ0p8xhFRFJ8GTgegRg','2023-08-26 23:16:12','2023-08-26 23:16:12','$2y$10$eQhjRYQgHpi5uTVgE8zfg.tUB1DQiPltD.scVLR5EL6DuJ9QA0q9.'),
(21,1,'Na8Wv3SZSo2cI3RFe9rC7dliMHfpLUdDnuOeY4XPJgRrEaxYPpyDJ7w2eEkfbvtLjUSzirwCg21DzhCGqiZQOYNJSpnq7ADdxtaZ','2023-08-26 23:21:52','2023-08-26 23:21:52','$2y$10$eJrjy31./3uRgBotm.PxF.Kh6ltHbczxRGFGXpx9pnv.8lYGZsd7i'),
(22,1,'iRIkjltM7meJvdVDtMQ4sZ22gPpV11UQVlam5NRI9zJI4FG85iAMdDdLu8t4ipDzc3QuJEVTrkHU2kBqLSLdl9n7zwPJ0ykNgYoS','2023-08-27 15:54:56','2023-08-27 15:54:56','$2y$10$iFjV6FcXymJQOJCWybeNdO/b/TfHCFu5.2zgc9bliiFd3.IY8781a'),
(23,1,'6DsPUMWu2S17IZNyWUjH4TneBs8pTwepMNa8MkfZBmwzGcRwhUEG7oSUyT2BRvKyy0BcBttzCMMOQMZF24f44K0A6fqvG4MwWZWk','2023-08-27 15:59:07','2023-08-27 15:59:07','$2y$10$hgK7B350Cwp7Df1ewVd6R.FxBRjaTjhRHYgfJC.lWn54.XoMiRkzi'),
(24,20,'Zlbaw7pacXsTHVmQ18wwsALoKLIQ7ipE7bUiTlkDOeLz77Oes1aXE1xXoL0lNN46do4aS1E0eKBuq50yJj8PeQQkKEkZyuiy9ARz','2023-08-27 15:59:58','2023-08-27 15:59:58','$2y$10$a7ZfZf/tLJxxok4iOC4p6eTuhRFK3oO75lB.bQmUVU7IHxU228fcG'),
(25,21,'XJ83OG8MIowTyrGScPNQoYMwpafwzAfm3qBhrYLwB1cbD9GRxfLQq5zAAbMOb6fXzPSX7vgGw7RrP3BcIikUznB0qeeRdqnRdBgn','2023-08-27 16:00:58','2023-08-27 16:00:58','$2y$10$4L7Q12glBTlo/M9Qx.GM3.ukLa8LK0WCQbAN6zTeyh9FQTHzGzSdG'),
(26,1,'OoXymeppCl8GALoaVKyOweaFG5TTNSH5NXIs7nafu02tg5vJoQs2Wh5aOUbhyjCOAdt79g9UVPRdEtOdq8HGy8KsLqyYmVMxSH2c','2023-08-27 16:02:50','2023-08-27 16:02:50','$2y$10$DgcV4yXfz/RsiR9b.9NRFuLoa01ZplBJps.qSQxzNWs9SqyBlCdrq'),
(27,22,'G8Y6RzGxLKLWIzW85NjikestwYoVqddkbPXh8O1pHmUsrIzBoC5wjErG7PeP1cYTotRvF51OFMi4ruWKxfYtJFnWuKRo9yAuzLOi','2023-08-28 00:19:50','2023-08-28 00:19:50','$2y$10$GCG82Cp0uFTCPus.IxyUmug1a0GLhYv5O1SQRE2vjJ7rnoVrqeIaC'),
(28,1,'bzKBwduXfg7be69YirsCc7e0eYNsBnoVz2ChiZeNSPe3rUaUFMD67fex1p0LdWWOwh7oWBrx4MWq9nOFG7zBiZN8G4OAxY9xn5Hj','2023-08-28 00:20:05','2023-08-28 00:20:05','$2y$10$u.DAHwPBG8A5RcsV3jafv.19Zr7r8PiskiYV6u2jIa0coBMq0WOaC'),
(29,1,'iVwwYqlbHO4ApPHBpS6Jzh7SKPHln7rTzX1KqQniGZQslg298PKvgc9bbgQa8Lv6qpllZscXQQkLD2B0kgro7Az7Gm2qSy2M4PME','2023-08-28 00:26:57','2023-08-28 00:26:57','$2y$10$QvCNMnS0xYXeR6cbK2SjtuPn/X1eHctW5NSh/w922p.Hu8r2ZNTiW'),
(30,1,'4hJaqyqEv3lZGJmC5lUVDNW763qyIrIVNjhKqKdwDJMwKievFKFAqOsQzkU2EMt8bjiaUaQxnKlEmvvNRBoLfICzW6YpY2iBTcdc','2023-08-28 18:32:49','2023-08-28 18:32:49','$2y$10$J.Kun/Sdp2BZdjkKHn8Tkuwu3kSmEQPeQoHQblEvsA2GIiUsk9Vvy'),
(31,23,'dGOjTkoUvvM4x3cI3sFyVbH5GnuoZkrIWuOify8hdxC7ueQCplwBVdmh0u3iZF5mJHYGv6TTSGO6BKAvEEPK66LTDmvdbPKtMFBr','2023-08-28 20:08:04','2023-08-28 20:08:04','$2y$10$bu.u0562n6iun7y5P9eqVOqnm6OgkEhlIZlq7nUBcUVyvnyMAMdV.'),
(32,1,'VQzy0wI6KOE0plJc3ojWVROQ5rwqQaq8qFUfiwtMWd7MTgyDR8UkHbjQLXQS4BOefs3VKl75LurNNSLrk4Upu9fF0pxIEaG37Q2l','2023-08-30 05:53:51','2023-08-30 05:53:51','$2y$10$/I80T3/10U5RkVLaLVkN6eOrk1VmbFjsi14K7LD7QumM1RSWfCXHG'),
(33,24,'BAa1hkxanGwdQ6W5bl5g918ec26dMY8cO8yqUmpfS2aSVkVHlrybc4bhzjJKtRWlSUBqB5l8srwWD0TQXVp0mGEz4gTWBFzHOx4b','2023-08-30 05:58:41','2023-08-30 05:58:41','$2y$10$OY.qXvA.LkQtZ5NiuiPHv.A181V8HkZ0B4N7fZSJna2MwjLtTOSiC'),
(34,25,'nQ5JS2fOeNM5Baf0AQJjuvaDjOzmj61ISFYrQsDjACjQTgGcaIFAcQ0UQeKhzISovwzpiu9LBCEiH424i5OfkSUK6I61KYOPIUC6','2023-08-31 04:47:58','2023-08-31 04:47:58','$2y$10$m.da6EjPuyWw6Tw4Ym3ET.6NxYra/V2fItQxPJCYQbxVeDymFNyWe'),
(35,1,'BWxl1e2oMqoEdcWEEPgd41DtmJjFPg6ODzuVLBHoWjRDda1p9Q99GRLgWerEKc3qbY5ZEIne4lMEsXznVB7cuKVN5c5sb886lUHP','2023-08-31 04:48:12','2023-08-31 04:48:12','$2y$10$n1huiAaT40ZEnnUGnoyoUOsjYVu89.MwdxzX7uo/sefShe6xN6.su'),
(36,1,'6OZLPGugswx0PqUb2LhEQkuu6rXIG82rn0R0kgGhokrKEeXWnYjsEk1e3LwV4ym3UWPoGtisXg3bw7Zx5QLS6XH2ya87tMsaczba','2023-08-31 22:04:20','2023-08-31 22:04:20','$2y$10$Nu22Zu0Q/N1RY8Iu.Xjbk.GE5s0fzwa4kjlKFo5QY7K4QH95wQFk2'),
(37,1,'YM5eZ5py3xEad7jKJCBFxskluJA07FAdaeSmL8b3TklSaLbsPUEV8gCeFGMoqkiRVXBnlBqf8n8WMWcDp5MvCbsC321b8px4a8HW','2023-09-03 17:58:39','2023-09-03 17:58:39','$2y$10$ea0WVv.a2jWD8VoFURWAYuXcoljGyRdJzBgvVTF3S6.n8LCp.unaK'),
(38,26,'PndjQLFl3QX41aiCAIM36e7F1f0tVfh8s5mA7czp2LOKsomb1OWgv7sG2AwteDJPspNeQSQglZKrMMr9Crz1ZHWR6PkNvKIdQqgo','2023-09-03 19:56:12','2023-09-03 19:56:12','$2y$10$vsKh2ts3zGQLDih8VnGOgOt4Jq8jTMJ0aWgVhcreYGQ93bivLuhTq'),
(39,1,'wlxs4NHHvvpPZKJl1uzG3YknMcSAOzfyAUr1j0x3TXyPcNeNzh9b8XI0NzSwSMWMKdQc7Aq6Ywuy4x3Bzj0wpKgsVctQ85gVpSDz','2023-09-03 20:42:43','2023-09-03 20:42:43','$2y$10$eR0TAq7XWFrxVCU7mtayOeNslxJyuyUJU1COYUKfWykYxRYwFgN4e'),
(40,1,'2yJSxTBKxQDXFODR287Tyki5CjrROOt89JYtRxF8l5OgLhDiCQRh3FJ6p7WbH9cdaqrSm3mFLieTCja1mG4Crdto87XveLYtErNp','2023-09-04 01:22:01','2023-09-04 01:22:01','$2y$10$mX5oZpc7xRB2yhEsMwhID.2DPk6QWk/KmGYGiGUmyqIDFk0F3uTaK'),
(41,1,'unhoJlbypXWwf4EiRk8FHCmomLItFNqLAdF81U5lQVaMQlzbvPDZLlBRCjbDDHr117b6AE2lPaSIPt8IrNcMvPhVnbDxHcDSMFHq','2023-09-04 01:22:03','2023-09-04 01:22:03','$2y$10$YFtrQfnJgPy/oWdAC365J.7TdZV7xFd2BatBQVKxDlTpbv94eY5Wi'),
(42,27,'aygQ2JLJ1gk3rgUlvuQBJ04EMHaeiXXJZe3RbTIrvuPzuLHvzcOLPP7deueXbhUSclcTV9YFvtY6i4NvJJITd21wIakf7gvM6vfY','2023-09-04 05:06:33','2023-09-04 05:06:33','$2y$10$tvmNSUppNOC0m4pW9.9nBe6/s20t2L.quHdPSq4f.y8Htt/Sgfgem'),
(43,28,'zbG88g0iVUwIP23MRURhNvQyXllNeIqwkCVWsZqgoonJLXjN3CHwTU4EunUuITVltOdZA3Jvm83NguT7sjlHdHLT6b0sHXxuybmc','2023-09-05 21:46:42','2023-09-05 21:46:42','$2y$10$ayUGOwra1xSZptE0VSf0S.ezyrpfUrThI8obq2/MoErOUzPFP4fx2'),
(44,1,'9mGMliUq4YziVYILknQN64LhXOofd3r0mDzt9etI9GyEFCXb8CrG8D5gX376jnoIOTJza4UHbLxrGcSmypaDGyoEKNcVkVDLpF3v','2023-09-07 15:16:28','2023-09-07 15:16:28','$2y$10$UEzKtu8Q6yQUvUrZgwDWqeyUoPea9zPrGN6jz4beWpUMQDdtATKEG'),
(45,1,'18Qt0cN88finFDoDqCc66nuOiO6Wm6IfBAw4UyPeJztHJe00gxRbP7Y5lKz7gtmvpMZaeqO3NBlwolvnIKSIchAhomWKKlAradKt','2023-09-12 21:46:33','2023-09-12 21:46:33','$2y$10$h1Q9ams.hUcBKOG1R4IVq.rVgi3XD3hybchUwHUF3QPNgUEsC6Diy'),
(46,1,'pYwUJKEfU4HrfqQZEu6A4T6zYK2dkIM66KKiDkL41k6gsKAsbNKRzMxuGF3MIlJamWRHadYhTIKqtbFA8n4ZOUj6e9mnOD9kwdMS','2023-09-13 01:13:29','2023-09-13 01:13:29','$2y$10$7pq3l7yFViU1IRvuQDhL4.eO2SWXWhxWox.JWTiPsECJDn7TmYT5C'),
(47,1,'LssTL49Y2J5yK9yDC3UQbDccK3ohrCcCJYNVoehSa7JvwBeQOchINU8WV1mR8RykOsXStLRmn4J45kJLb9TGV1TLo2Qu4iOUL0vd','2023-09-13 02:31:03','2023-09-13 02:31:03','$2y$10$VGJ9uSlxThjvPuNxioA.1e/00MRMQmWX.MleCzEHeX5O79EQCnpOC'),
(48,1,'W9ps9YhSigW8QL6HWj3dmhGwAaUSYDQXFmoTlTcvLyAv5tVlhHtQCEDxM0YMGhrUs9RmBklECVdu5bDHIOnvHqB7S40be9PJEwkc','2023-09-13 19:51:52','2023-09-13 19:51:52','$2y$10$vz0Y0YZuCeRDpSGHWgJaL.A0D/47ayN3xDEOzkQ93rTyehGZ3ZOuq'),
(49,1,'RIVnvYCAmRgHUsnftGwqgQRjYQ2ohh9ennsoYFx6riqEvhp7RDizd5XSL2jjI9PNNdP7h3cgHqSS9XhnL8sK6UDTLOgDU7bsfI3M','2023-09-18 17:09:38','2023-09-18 17:09:38','$2y$10$nzCL5ci9gpJBKi0mnbmlBeqDtuqRjGZdOTa4RCb6wZ/wLuva9nLm2'),
(50,29,'vljYCHqfGivvGMaEOaHjsnjb2XG27itBeK8S9W5Jc98QgDQMGxtPGHNx5MGOST9RAgVjadmHIkoznbJYT0rRcEwQVlAKfPf716C0','2023-09-25 21:40:14','2023-09-25 21:40:14','$2y$10$z.VVSih.FDNXWNuw/kImA.20QUhUZ/U8SbnAoKQKQD0VTVDPzfTRe'),
(51,1,'18Vtd01uy9QoxEnFvUraue36DzlT8swIiPSV5YhFEl3RTF2VFnbzWxoiue1LJSgwWJeQlCLHkaJxzAJV5rrz4pJ9GAOwn2SMV4O5','2023-09-30 18:23:03','2023-09-30 18:23:03','$2y$10$JO8.RGg2.4N9kS9dKDBnM.NnX4nVR79kMq06fISOqR8He40DSlI7K'),
(52,1,'BMBVkrqfxgkYVRcjyeK99aROeAOfdJYOsxlyu2yHcxwXKbsXsCo4Dws9klK2bC6o0QCdDdzjcUNHJwmUDf2IMfgapuKMa03h6YVN','2023-10-02 20:07:58','2023-10-02 20:07:58','$2y$10$F4v2F24OLYpt4r5ns/OfO.DiVibTH4Q/nqPE1wtexANMuKh/317YC'),
(53,1,'4YP9z7cPWtb1Vy5NL0JqeRbYavzBZcEaEUGj8rc9vz7rDqy3qZlQ8koADEivs0X24IWm9nVSvamgegYXCVfzuyqAYwaHEp0UapAg','2023-12-01 23:13:36','2023-12-01 23:13:36','$2y$10$7qSgXEh5DI9ObnA0bne2vuctt9mIppUydcqt4PNZKB9rsDmZzNiMm'),
(54,1,'NdjRWPB6Q04D74EWoLVRGkrmkDdDbU6Yk50Fjqrt3ui3S534RHYSMLGzVXVp4S1lOaD7Ru9RZg0AFIxVu2hIN4hiRZuEJVLulh3H','2023-12-02 19:10:25','2023-12-02 19:10:25','$2y$10$sOqYjnudMt.7BroTQ8J32.R/54Egp53oBmM28D2pdUsojJaSb7Cca'),
(55,1,'rAaBqDSitPUjt8G3s60g7KwtOTPmZBbVKYN5JfsjlEzcQ5Mgr31tREE3G8KES6GYoTSh5VHUXJ4JybGGGFBaI4E0EmRBoS09M8Af','2023-12-02 19:56:39','2023-12-02 19:56:39','$2y$10$SVNCSi/wgqa.MHFLW2R0Y.CYOaAjfCcSg.mJ2jzv0hYAAKrGz5Mn.'),
(56,1,'N3j1sQCHUsEz2JxCKlMmvxevZ5szN4Vhv93D9XLqdRU0ZjXmKYW3GkBl714J5VwAZsXhRO7tWjBWLtc31Apxi1lMXcIY0c7XrLfT','2023-12-03 05:44:29','2023-12-03 05:44:29','$2y$10$1tc4G1t.ALzuBvMYIsdBWOR3bs5fesNfSJs/coWeaQwsrVdHUYUfe'),
(57,1,'7ju1cGJ4KXTufncur3Q9zWgEHQ3AeQdCSstVgy2BfVBQgbNMoLnfZBU9dpesBsx1khNhNFx4LUeyS5WKiVwGgXNneeAOpGqJAJQL','2023-12-03 17:39:28','2023-12-03 17:39:28','$2y$10$VJSpv9XBPMfbxbxDoWXRJuI5se/3OB0RSGMOaoaZzd7JSEDLWgoMa'),
(58,30,'zee7UhFFQjSl1trDgwZRBXFwrGrcoa1wVjjAYlXcCXuEuMJDBFwz0ByaaWEbvgNEDQBzN5ql9nSV4gNevTbgVP9nbEXvJZCz3yje','2023-12-05 01:59:26','2023-12-05 01:59:26','$2y$10$Bb7KqnyDj8wmCmlj7gz/7.JKguxnOlmo.7KAHkkdFnbLy5yESsFmG'),
(59,1,'jN8Ak0DwQ4qc588PMdwh4tkB6ciAbyEKqAithDPHCA2h8gRBJd3H757nppqRdYpxxuOm7C1gpWc0HWCII2sPxcYGwzRyJuCz08cO','2023-12-05 01:59:52','2023-12-05 01:59:52','$2y$10$MbGgtSGFoxHgzCca1Hk7ze7eWx0GzSuEaWMSYwidMEX8p5cjGB/xS'),
(60,30,'5AUMclkKH9RxcpiuxfBVH5hGHzKwzox552zupbBiqLB20M1HvvH2xDkK2BchuA9lHLVZ0giwEEyP2MGfQ2uHKnFGLgaq8qPe6aY1','2023-12-05 18:16:43','2023-12-05 18:16:43','$2y$10$UZHWq39/5Lukxt4StpaEsO.JJaPBzXnhuiQUOnNSE0d0mxs4SWkFa'),
(61,1,'9d5tlL3dFvxexG9oXDHHqKoFlaNeuCSzOxkx18tyc0LplHdhcKzWNxVcuIQltAjLYOE3SzyZEQiTtnF7BdqdykAcaVInyMGa2YsN','2023-12-05 18:33:56','2023-12-05 18:33:56','$2y$10$GAHtM9V7pQJS.VaG7co7l.zUrDdWfY5ChklFHfHve52E0tno/OK/O'),
(62,1,'0qafbxY2g9Z0uSuoQg7UXOQzL6IWm1mdcq7YaTZofGzZSf787jy4eUmFLyAYPl8C5RVbHpqTiPofUQ6WSMUbXgh4zABDEeHB9171','2023-12-09 22:29:35','2023-12-09 22:29:35','$2y$10$Dp3nzkCKy45MKjgRiyK9s.x482gpmUA/VGcUHp1NsyXytsYdswgMm'),
(63,1,'nXJw5w4mwxbrKnffPywz91WFZtFEwECR0Z2Cq4NHann73DUANMqZcCaVBz6Y4AupCX1PZKgnzWRE7m2480F1qSj19Rv2o23p3FL0','2023-12-16 00:07:19','2023-12-16 00:07:19','$2y$10$ZiMW0e/3tOCq4wHzoMW/iOrR6KZT.1q7n/oB3RR5gMPNw/ida9kj2'),
(64,1,'E5TKJPFEph9Rijxh572laCJtx5eSuoy9WVJu58F9EZ93II1rKYKOFtI3mA5aiISVM0fRqNeTDefzqG2HqE604ykJ4hi127DicqUU','2023-12-20 13:27:25','2023-12-20 13:27:25','$2y$10$W07jnQqBW7aD0q7HvP.SfuAZIE1fDs3syJOqrYc1bqViJvHL1skD6'),
(65,30,'iqXowNglA0Ada6jChoV2nnPFZjHOgNfsemZPBsPibxYoDpCM2XQW4h94kZezObS1RvIunhDR9VmsRu0Vs5iyua4SjHEvje6gJdGr','2023-12-21 19:52:00','2023-12-21 19:52:00','$2y$10$r509wRqbCkvdCQ9a9T0I/ejqKP3Jk1zU.iXawmEPhJ.PqAM437/da'),
(66,1,'WpkVUHtDA8nqBBcuiN8YDLlKKVaXzZQ78uhmCAfiwWI18UbVsTqXeVnAuZr5ABKKkQAK4ksKzG96tubvdDEU9DsbozvW0lDz4TjK','2023-12-23 04:26:28','2023-12-23 04:26:28','$2y$10$/ywbn4gYJB54q.6WYTX6Iuj/zSsTtzPiT7DCW1sl7DlBLt3.p8Wje'),
(67,30,'YdbAiBpLA2GBmZ8lohZFaiMcbuCete96p700ArQjbjQRfn44mYeUDsjGNvUat1P1bgpiO6oBCuhwQauY7MXmXtHR7Nn0STpa8WXr','2023-12-23 20:35:01','2023-12-23 20:35:01','$2y$10$8/76lLtFVsFWWY8H0gg4d.wgtPSflOVeWliiGcK4xIujxCoy9p/M2'),
(68,1,'WWl6iAdedhJflvrbXbYWgaWNS3aYryzhQuaYyIqNPoBpVK82d6NrQpZrmqzCYt8TMVvnPobtTR4jDJX646Erd83tiFVlP8SAVTzQ','2023-12-23 20:35:30','2023-12-23 20:35:30','$2y$10$wtVx6XInMqtt7Jsky6Zt1uBNP/bkbkvcEh12SsB4w0MTIsg03FR2m'),
(69,1,'gOfP3th9OPwaV4nmgzqhBEF69SvrcVpGaknItN2Goeer4v5aX7aegwZHadkVj52mfK8fp3Rgay09YVeySgtL63JsTCfH11zMWHwk','2023-12-30 05:19:54','2023-12-30 05:19:54','$2y$10$OK2dy.OjOEoQnWJWrMv7LO9clqoIzLcigXMXQx6xDbAESU19xVbRC'),
(70,1,'Lyf6WADDXHx5IKsEytpcbyyM3g9fYfJwxViTjmuQrCBEtPzgddPrmoNE9Fy1WnKIqhnBvSFYdpmjix5W5mgIRC7wOO39YD70a0e3','2024-01-01 04:53:29','2024-01-01 04:53:29','$2y$10$.lb/1UqB7Jt521XgW9z3KORX2j9CbhB1mRnv0QUmhR7jgyj.hymLi'),
(71,30,'PHZzgu5BRxiNv6ewrJjXD2Egb1Pn6cJMdskyCbKLqLHDXnn5UPZeWWsZ1Mghg1mwnPTnJtGjzQhKVLUisK7gbzmgNvTYrUNn9V1V','2024-01-03 19:06:02','2024-01-03 19:06:02','$2y$10$lnCWuZWbNS1Q56WWxGZ1Iu90vDxPyetVLkng7z0t0wmpcm.CT5uRy'),
(72,30,'VO88RvGPjgzaDNvniPZlVGKqI24hHsS8PiDLOPYzZD6WHMNYICuGQekPckTWJLpvGlqzHxhUrUwVvr0lzIHtsmUwHIUAUQaNVwfp','2024-01-05 20:20:57','2024-01-05 20:20:57','$2y$10$myAyjl3O8qfolGAZgy5oWuD3HWn/S.tnVneu7Nm3TrpbqcE.QnCDK'),
(73,31,'4D6IoSgufMTtUZFvC4NbamtXtidEg3E69HulV5ejPsFRXSH90NndRFr8PCGMS7VJBeoxTAjH44v1aJejFIZR3oGJdy89QZcCnTEV','2024-01-08 00:08:39','2024-01-08 00:08:39','$2y$10$JdWLyLBEGko2SmKbG3.m8.OeTuvNlwllt5XCd01iM.4gv3N8ICQGm'),
(74,32,'3Zh404uzaMjmaZgJpROoQTc2RJw473kSLqxhTLn5vTYlGHajA8qmRyRyf7OcnL4Fh9M9n6ixnk1xIQltLsMDwuiEA8WJGjOt6abx','2024-01-15 12:37:53','2024-01-15 12:37:53','$2y$10$MqJ1rx6OxCI9VTa0SP5dvegjdiGzz8q.s2OvPqSUqggCfRtWyYA26'),
(75,1,'2NM4nk2vGvRP7h9ox8oK8VWxZOFgJ4QfVtebr6xgyFMffTc27fR00f9C1HNxGz95Z1QHqn6OEdroQX9mEs0SJGg1kUJYasgsfXci','2024-01-18 07:30:59','2024-01-18 07:30:59','$2y$10$whCgBlUJB4H/6WFfBcq9QuYRHHXPEsGTShIxuz2VSVyFmIY6Y3loK'),
(76,1,'y99L3xayLwcVgR4EHsqZPORZYJpKOabR1piENPtFo5bBaJUnNr9Ul7tkwKZwi0NuTF9tL4oWx7VGgX6rV3cNJIj8srPYODhJhSno','2024-01-21 19:53:12','2024-01-21 19:53:12','$2y$10$ZK9px8ubezFKMgcykfIKl.Zjg7TSHX2z7Agjf0XkfD6DqMJYz.Zra'),
(77,33,'xlIB8xsPtxnN5aOjEF5u136FoFZstRbgLJLZ3SEwrjR45VywPG8D4lbgyRS3noNl6VOaFZLG07EC66jMz2sdIFRzLCOPTc37yqf3','2024-01-22 00:47:10','2024-01-22 00:47:10','$2y$10$HNtgoKnOnOXfDU4QxNIKrO7MpM4mc0OADZPygPRW4McDpZ6KSgZPW'),
(78,1,'n47cWC9ef9oLgzQ1PdZ5MiaFgD7D9BuGsnOgjtu3u5E8EnvkQb8BVHIC1sgAhyAO4tNUMy5EDXQDG6jm2yUtmPtrPBLIC56Xc02d','2024-01-28 15:25:38','2024-01-28 15:25:38','$2y$10$h0VquVTiBvPdlQSbhRuxeeUJ9KIMSTXiiHLIDo2KhgKdqOhboz3FS'),
(79,30,'j7ZZWMdTlsyEEYtuIDEm1Yg9z9uLoj2YP5HMM1FUL4oIqZa5zxlTzgi32VjVQTW6bSvxJklt5jBFLvpPXy0C8QxKpYDa9ncMfx91','2024-01-28 15:30:18','2024-01-28 15:30:18','$2y$10$Tqlfwmv/GGbPHCWvtyWHtOq93F7iOZmlVvzy4PtJxWnUPm7fwxrV6'),
(80,1,'iKGnXr17yNTJqd0KDDUV2SzGfJp1gSnO3tKpH9g6z3M31x6YYw72sGxU7yOzw0Kxzm1zyqnAteOmtAHwFRTV6aj0xVcvo7BrHbFD','2024-01-29 16:24:36','2024-01-29 16:24:36','$2y$10$mnIRkIA/RvBygKG6Ru24I.t371q0EMaWv6awFle2qNHWmNJObRCFa'),
(81,30,'TqAaxx8rTBDdxOMWrrMOB4wuYPoOjBepNLXhNeSXgfo1i3pEHjMURtjMIWRdbpbYMYvb1iYE4s2th02iJEzENRykgcDgjBzez1lV','2024-01-29 23:28:05','2024-01-29 23:28:05','$2y$10$OG3uQVtjOw4.hNBIPaTe8OLdqsxrtEAzKJf6dtHIRK.2LrQ1h4VOG'),
(82,1,'B4ZCaVAaEELk1Q426TrUUeGnETp3I02e3voYsTEl0LouUoQyxZBwLD9UhWL3FOddfR3ARWw4Uh3fnHkn8E8QoLYQhKp9djNQ3liq','2024-01-30 15:29:31','2024-01-30 15:29:31','$2y$10$W7KnBkbAzJfIh2S5sVefoeED9JKk9GcyzeKVuTb6oXcKzL351JRNe'),
(83,30,'zUD4n8dLH1re4AFHBeSs53Sfx0qsbVFZJlrsmrbM0uBO45VfYJU92AgbZvfTRzWrg22oNeTWFU7R3OUUCmvnKa18GSyidG4cGoYp','2024-01-31 03:56:30','2024-01-31 03:56:30','$2y$10$FTmcezZoOsirnJepOJPeluRC15xt0k.JRDDhL.ua93ZPDxXwgHfA.'),
(84,1,'asPuKW5iEZy28Wmua0XshZqEyQ9mftUrPNsUdDsZ7VviXUALGPLvRCVDD8cmohjwCWOYoABy7Wjsyz2OmrGAZUubl1GqcLxmmkP0','2024-02-06 20:51:39','2024-02-06 20:51:39','$2y$10$DE.ROIvXB/3PYTk5zsVc.uVT8ORJm.YePcFoL0iIwJHRCKr.qwZBy'),
(85,30,'F4hsrYTSVLfq0KBvDs3ipVD8U6pXn1v7MhcO5WCLaFms9EiOG0U93GAgQOhrQY0WrfwiqZJaz7U0GwMyHbLeg50X6W12ZE3LQZ83','2024-02-07 23:21:39','2024-02-07 23:21:39','$2y$10$kk2IC6Q8IyT1Gg/y9OAHj.S1VPhoW23piHrE8YPxP8p8..tMCG0Ba'),
(86,1,'uWml0bVA4ZyAx21Aydh3oqeBGztFYyxC93kfgW4YCGEowNlL3tfg08QGtjMNbCqX2Fd0j0MNtv8dIC3xHNSPF2sJZIEPdvZj4cs2','2024-02-08 00:55:27','2024-02-08 00:55:27','$2y$10$PzYN5blmwNZcInI9n7liUuYiyHrmxXIs0Ozq7R5meM7CB7BF3FoYy'),
(87,1,'zbA6Pnyrq2zXMhKzAWHPC122lQZkVsYSZSkSuKoR0J7kLoqi0gRb0ScMYlP84HfmfUPC6LA5OuXw1l3k0Tozdhr4AvOGQuBygAZg','2024-02-10 00:38:38','2024-02-10 00:38:38','$2y$10$MPWl30MHHtrLWQHl8PLSreLeVW6fMlHn1vulXPJw6CTU/DHtVZdVG'),
(88,30,'TD5tFF44rA6kYLSYISVTNfMxof6h3kiaZovEFKbfJH8BNGcUtaCRsv1VPfLGIyxQmYZNRHiuVobtNTCxelTG8gtYwYF3fvnQbNU2','2024-02-12 06:49:45','2024-02-12 06:49:45','$2y$10$Rcp/2ovIvf447wBPtNmk8eSYUZj82pJtnE8ux62P9M.5nC3V3dIHi'),
(89,1,'whOEwGwPIzccXziQPC70d2f36mqorOehCGqYZoZI0qgsetEsHPLZLvqFKfYLUnLve27ZRxdtinHu5ZW0ydeS6E4Hq4cAalxVlhLL','2024-02-19 16:37:47','2024-02-19 16:37:47','$2y$10$gwaVom4U3RV4QxodT6BhCun.BLxgsvauQf35huUpRAlp3WAbg9fMa'),
(90,1,'4reR0JrqYBUy54VJ7lG5WHfbxuTQHukXxA6hljxAJzNVsQxNc6fSvFgGZPPuvdrnbhbgyTnse4yWfVXnqZjFUtsmqkTLxyV0Vi52','2024-02-24 03:24:16','2024-02-24 03:24:16','$2y$10$3R75JIrrgarP2KNQRkdKPuqDF9Pewq0y8SfDNS40IHA19s5ikpmZm'),
(91,30,'tIugEQOB10zWK1VQmTtraXhnFdzjOf2GMUcjRTSBK9gdLhigQu1iE8bO1epMkr7UefnGpWesoTq8HgLxx65H33q5hgOmLtBhLYLM','2024-02-25 17:35:15','2024-02-25 17:35:15','$2y$10$dpCbsrxg8stcUzfdzpWA4ebv9MCBxUQu7B/Yjh.qPmoH0XYh6y3wa'),
(92,30,'GPNsSvhQLRDqqsIU0zYeEonoRdMGUAaDMJ1hnbrZOeVEhBEGuTKDps7a0Nc1SU5pj6bXPVaVNQGSGWb8sAGk7lSlr5hESsB2xE23','2024-02-25 18:33:14','2024-02-25 18:33:14','$2y$10$zbuCxlK0j.pKzLMKuSxg3eoNy4DzSQncsNlRZ.CPYEz5Z3ha07PI2'),
(93,34,'nUvq55TFDWDp8MFU6Q2rdb6aRi3uXNx9lMcVkPPKGrMjyRvxlkjHjBmH2IZfo8kOEpO0vozzM5U0FoMsLTwr6Lz1SvO9E0U7QcTE','2024-02-27 03:12:40','2024-02-27 03:12:40','$2y$10$PXICIcFuaxQ1gEhDNldSF.C2KLDVqPZ.8kuKV2x/xmSslWPO/FicG'),
(94,1,'dkkVd6NVRCjF1q2a114ydhpoWg4cUgrEcbNC2hRmYy3bfePDtIiHtG8YDp4bF12XE6l5cqMeVOjOGoQZ46au8D6QlQefOPR66Gws','2024-03-01 18:28:20','2024-03-01 18:28:20','$2y$10$cC61kAMv5xkLyr6OE6y0f.HXHc2AKZWdalR8PGy6X7zdu7KGt2xOO'),
(95,1,'X58ZYFE05hLuBLsiznADmnb59aEmEpVIeAoVFE4yEFoFT7Dq1HWtFrC6dslQtO17uyux5KSknJqTWb4WFFVEGTvN10NW1eeiK8Ho','2024-03-04 18:11:12','2024-03-04 18:11:12','$2y$10$.fSLf54P5Kt546dBUvyvGO9XOjDTR1vsLoiJoNfLBZ4WP8HBfpm52'),
(96,1,'QvZfQZqeWJ1bX0MxgFGLf6FvziBmF1i2b0wXcDDg1lMM7MqTGmuujokmcHSeoW0ySoN91JScWDzZwKAWv4X4L2kal6inVJVXN1c8','2024-03-08 05:04:07','2024-03-08 05:04:07','$2y$10$WmqaVxFMvBqaTOiqmM61L.N8g7RyQ7MyzuJ25qVG6tNnq8R260QIC'),
(97,30,'57uBTPAa4SRpxrtdCxVI6WLpmGwPbNoOaWPmpTQnkPObKgkHLO8QF1RiYbu6hwojATyDtN1slvvQt9nx6pT6djfb9DQ7CGzA5DMT','2024-03-08 15:00:00','2024-03-08 15:00:00','$2y$10$ageiB18HDWtCSlUoIAtuzuiKds6ORSGtHXUtQY.a1Ce31vlglHQKq'),
(98,1,'6p9zP1oEYldt45wEh3vBbtfDie1zolXdpo1eKzAyJB0EYA5vIi5WaQ5TS9R5YzQ7wmtIWPysx9Xw1v3b1ve9i1cNW86fssHj1Oj9','2024-03-18 05:19:55','2024-03-18 05:19:55','$2y$10$VlsaqClQWdevvCP6FiM2/.wIWlItrgbzn8S1RQ/DEPruorPmxicDu'),
(99,30,'JFR7L1vLtihUV1Vewlb5rkNKb4m1JsCxYCToTZKFX7VQrUQoIJIjFnZOI1BNJTNrFR5EUbFkcQCcA3Bve74d1rzy6FcYVqLhLUED','2024-03-19 19:41:42','2024-03-19 19:41:42','$2y$10$rFfP0WHfAqhjq5Mf1U/iHunFZtjTh/4j.YeAjkDiIFnAq9teEEy1y'),
(100,1,'FPxR4A9BddaJfFEzIl4FXnGUX6vEIVnCGSGvuz6UlhWjKipuSW63kvDhW2Abf58MIF2hFntrKdmOjIBXifVWJyY1icWLgocZhjE1','2024-03-19 21:15:16','2024-03-19 21:15:16','$2y$10$9myWFttkUq.X5cqb/Qm7furX9SeDJOCB/CBc2ZjVdgiVObQBq5uUC'),
(101,30,'SZiMXRFgSriwIdYjnQUZSWDK4N0MfrtrsxRv0EtyvkgYsuqRxQPfzIOQ6MjB4JSmDKiGiOma4DMKASpy13voC8FRf6sffmJsjdHX','2024-03-21 19:05:42','2024-03-21 19:05:42','$2y$10$15jwdzuZqG/syGkDsM/aMOPa4HqBHsludNA6389EiYX4enjsiyM2O'),
(102,1,'gaJLirKBRwkM8tbyRmoEPDCOuKke3IiRP77WmSlp4s8RtNaN4h0ywgrId1YhrIODwyG9sUpjJUD1cAJknSNPb7rh7JWUjkCJ2mfd','2024-03-28 03:43:26','2024-03-28 03:43:26','$2y$10$X4Vrzi3W8v93CoYRCfmSiOgiPbCyFZCkkTQbaXNwD4AgGPKpAr13G'),
(103,1,'RjTydaAT64R7xyLkdqCLMM6dzQ6YRhsCU7GaPTETacSpskSEcN8pcvqrZwcbeAo2wjvXzEOwYRFrDE1JdtGMS1F26kB1LZMNLUrD','2024-04-12 04:18:29','2024-04-12 04:18:29','$2y$10$b5H22CVpSSz2nbk1s4O2quv0JhXPiOyJcba4b0NhnpiZg2Azr1a/i'),
(104,1,'7LvcslgnnO7eblx219rouWxganGmpqx5yiToqehUP01mNHEf4IIkWUuubgsb7qTSRNnAT9KNsJyqigAzoWJM13InXvo1jVYmMMEy','2024-04-28 21:11:11','2024-04-28 21:11:11','$2y$10$esuRqt3T8jGUkIZltDDF6e4XxUYUi8vqd/xSbJGRLd1xQX3oUDucK'),
(105,30,'9gfBRXeXPSSJyCTIsw3pGcKIigO9XknxloXFrrJM1iX0b9jw2dkflcBZYeGhBPVWgep9nDn2Pdj0nyH3CJ7wOzS9m7DvLuFlv44T','2024-06-02 20:58:58','2024-06-02 20:58:58','$2y$10$wFL2MFMlogluhdSXmZ2EZ.0glYPVMHdzdGyioP1NbB4oh1LCfvH1S'),
(106,30,'YmdID0qf2wI5gWes9VRtpxfnzm540dvDVfGKZajje5HDCyqqBk1OQq1LhyVOJ93zwe2WIPmA1t2WIMwJqLarwez2cfdIoMJB8SBw','2024-06-11 00:42:22','2024-06-11 00:42:22','$2y$10$U5etu6ahVwbTgxHLIvzTveVQlNift.nDEQ9eQWOTkLfCyHLk15F4.'),
(107,1,'9HCbpsh9h8hl6pcHP41rBXRxfFztd5KPfhBuk6fa2okyepdgvZaukvzPJPDGIdklGDKmUQGKTvshjjDwJFapJbUXWMzYGWO8GuZE','2024-06-28 06:59:06','2024-06-28 06:59:06','$2y$10$yytuGANTdwaOLLF.V2F/gueO6kEE0dQn8QAQNiE.562bA/0tDLTa6'),
(108,30,'sCPAWCaNbItICu1gdkhLqRCvSMT4hvcCaV1u6g4pGBcHEJUOl6bMNUAm7uiAjpA6e2xNoQndL1c2QK6QBJCyqmmvh42amHBSXue7','2024-07-07 22:36:23','2024-07-07 22:36:23','$2y$10$wcobpyEL9iez5LRSpa69guo2QwB2HrSHQVBPRCdJRhTyyKwzF4ie6'),
(109,30,'8gY4bc6sBcbCwMMT78hm6LEfqfLZGKnpnYd5fj0HW6QSniqNJkqrs8BToapfiYReKh4wCJIV3LKI7P8dNZo8MdBxNptvBadKXO4C','2024-07-12 17:52:33','2024-07-12 17:52:33','$2y$10$iNBy85LOj1vNlogSPhy30.wubQHUmlMVv39UhgbtNHsGUgfFBpAZi'),
(110,30,'slGlQucZNwXoHfnHrQimVtPYmYWNi7vqUxYsRnXjZ1EekbNXBFQDRypm7wiSScpauKLJxkT00zhYdtpjo0Zl1qw16BJQgbDPGbSM','2024-07-15 03:39:19','2024-07-15 03:39:19','$2y$10$iOfbf6h2TERtZDPnm9CfNOTC7LYF7HrxXH0Dfigu/7o.d3A9qklx6'),
(111,1,'tvekNZaGJ0XFNXFCDXMEP1v2Cf3IcMLsWJr2j9iXLZMy2FjMBqqTYId47ShzxrFPZk3Ij9dcIncZ7gr070kzra2bJrQQPsL3CELz','2024-08-01 14:45:19','2024-08-01 14:45:19','$2y$10$aXuYUanv/SKvsUZUUEBMJOiniXS/7Wdgmg0lL4zUF0jEt3XESfQCS'),
(112,1,'8UHqO7vjhJWQBuXFuvalIXu8pvbLn3EZqgSNmCBhB2EtKNCjqAGdezFLIfUT5zfK2Vz3Hi9eqgBvwCNbx4Vh00ER4th2nF57Lgb2','2024-08-25 02:23:20','2024-08-25 02:23:20','$2y$10$5.Mvik2.0z1Dsao5qFFOBeVXCLqz9Jwbq6zs.2yiRahD1RlsOsElu'),
(113,1,'6lOF2ESDMxkaXYDCw3ddVTuNddKQLQsw8HiBBma6V9KmJdedZOzoCjJZ4fFdQJdf3ysslpl7lCzrFYfTQWXcBYRs6MMj1V7UrWiw','2024-08-29 20:44:56','2024-08-29 20:44:56','$2y$10$SMUgB1LuhlrbZRwJ3/Qa5efRZKO8gw8ISdBxiz7LonlCkVOLfs/eK'),
(114,1,'H26RFYPSmI78iwdcdRyhXpfRIXWRC7B1KPndM7G5UuLddnszoI65xWWMiA87pSwftEojGtHCTI8Z2r49Atsg3Fo4aVTFscERcKQn','2024-08-30 00:48:21','2024-08-30 00:48:21','$2y$10$H.xFF83TVt1ImaGr3.NfXuvjPqD369hxV70yT/N2xGU5koi5uAKq2'),
(115,1,'Bd0zJmdMlzrKD6HDjBad7Z5twJKTq0UPq1TeIO5hwshqIUx438atOGWCi7Y86NNaqGzDMlp8lE4Po0fF1Al3kHUXKJCuItux8AzR','2024-08-30 00:54:03','2024-08-30 00:54:03','$2y$10$wM.KmZLX5dervb2eJ6ya.eel9A3qiE0ulI3F0S0/f4lGY8hqzaEdO'),
(116,1,'geB6WN97rs8Hg7cvQrpG9tp5wcH9fAdugqGrhgk2Xv7TGXdx9Y80WDKutkFPi2NuLKZUCUNXhQvn6mA7TvKCgYfz2MkW5BgM8Flo','2024-09-06 06:30:21','2024-09-06 06:30:21','$2y$10$hPjwzTxqxSdhnnqVmTVrd.r/H.z8tWfUHnKCDqOakbtjdLb0X6il6'),
(117,35,'4h76YxPI1hsnFR3hhte49qMM8XUCPyvD1cZmxxsh1ogBCiE5Fro5GlwBt7Yyq6uRsvm95FMR0ErtPmEvZHIljm4trY5YAnm4JgQH','2024-09-06 06:49:28','2024-09-06 06:49:28','$2y$10$ZaRGjixhqo76Zl3Ur5Cy4.b91greDMnwM/CTrXxIqzuEqnstGgee.'),
(118,1,'XDOpL3FBm7wr9DHw0gdz3xZI9D9Q9YAnZHAy5Deg9dRNuH24DHz9Mt9yITMeqihT2IdlzYrGiP2C07PpnFWurbW67sL8jcTxINmK','2024-09-06 13:00:35','2024-09-06 13:00:35','$2y$10$Ug2maY88BEDsaQO68ky6DOnOUOQb3IXVf/E0iphVjKhWAaxxoshFe'),
(119,1,'j33j5xqw5wrXdDpfGTItnnkzE4I1d5fwItWgD40hUulbpKaTbmB4iGJuNlajuZBh4UjOl7WoNRVOvKMzsNrwpAaMG3VZ8Ub9p1wu','2024-09-06 23:10:31','2024-09-06 23:10:31','$2y$10$BxfFEcJGgRzwe5bHe0N8A.WuiZFoH3z3oVpNe5tWyNVg6HTFhoQfq'),
(120,1,'FGWpOnN1cbYbfkdEwpauH9JCE6owFhrV5EluV9WGrvfOTLrXqwOYHgqFmiBONsbAVWYCRmfenA0zcPzWXVXXmFunJaVj28k3iCNH','2024-09-16 23:18:31','2024-09-16 23:18:31','$2y$10$BTrdFtKkK3JzOQ.6cozwTufQWKjxk2IbbcZgohnuFwSbzra3oQcOu');
/*!40000 ALTER TABLE `anfiniti_session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anggota_hadiahs`
--

DROP TABLE IF EXISTS `anggota_hadiahs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anggota_hadiahs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `anggota_id` int(10) unsigned NOT NULL,
  `hadiah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota_hadiahs`
--

LOCK TABLES `anggota_hadiahs` WRITE;
/*!40000 ALTER TABLE `anggota_hadiahs` DISABLE KEYS */;
/*!40000 ALTER TABLE `anggota_hadiahs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anggotas`
--

DROP TABLE IF EXISTS `anggotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anggotas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggotas`
--

LOCK TABLES `anggotas` WRITE;
/*!40000 ALTER TABLE `anggotas` DISABLE KEYS */;
/*!40000 ALTER TABLE `anggotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area_user_aplikasi`
--

DROP TABLE IF EXISTS `area_user_aplikasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area_user_aplikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) DEFAULT NULL,
  `area_user` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area_user_aplikasi`
--

LOCK TABLES `area_user_aplikasi` WRITE;
/*!40000 ALTER TABLE `area_user_aplikasi` DISABLE KEYS */;
INSERT INTO `area_user_aplikasi` VALUES
(1,2220006,'Cabang Pekalongan','2024-09-06 06:30:06','2024-09-06 06:30:06'),
(2,101210072,'Cabang Pekalongan','2024-09-06 06:30:06','2024-09-06 06:30:06'),
(3,12345678,'Cabang Tegal','2024-09-06 07:10:25','2024-09-06 07:10:25');
/*!40000 ALTER TABLE `area_user_aplikasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casnitiakuns`
--

DROP TABLE IF EXISTS `casnitiakuns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casnitiakuns` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `casnitiakuns_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casnitiakuns`
--

LOCK TABLES `casnitiakuns` WRITE;
/*!40000 ALTER TABLE `casnitiakuns` DISABLE KEYS */;
INSERT INTO `casnitiakuns` VALUES
(1,'Randi Afif','anfi3281@gmail.com','2024-09-06 07:37:27','2024-09-06 07:37:27');
/*!40000 ALTER TABLE `casnitiakuns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casnitihistories`
--

DROP TABLE IF EXISTS `casnitihistories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casnitihistories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `casnitiakun_id` bigint(20) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `paket` int(11) NOT NULL,
  `jenis1` varchar(255) NOT NULL,
  `nilai1` int(11) NOT NULL,
  `jenis2` varchar(255) NOT NULL,
  `nilai2` int(11) NOT NULL,
  `jenis3` varchar(255) NOT NULL,
  `nilai3` int(11) NOT NULL,
  `jenis4` varchar(255) NOT NULL,
  `nilai4` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `casnitihistories_casnitiakun_id_foreign` (`casnitiakun_id`),
  CONSTRAINT `casnitihistories_casnitiakun_id_foreign` FOREIGN KEY (`casnitiakun_id`) REFERENCES `casnitiakuns` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casnitihistories`
--

LOCK TABLES `casnitihistories` WRITE;
/*!40000 ALTER TABLE `casnitihistories` DISABLE KEYS */;
/*!40000 ALTER TABLE `casnitihistories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casnitikategorisoals`
--

DROP TABLE IF EXISTS `casnitikategorisoals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casnitikategorisoals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casnitikategorisoals`
--

LOCK TABLES `casnitikategorisoals` WRITE;
/*!40000 ALTER TABLE `casnitikategorisoals` DISABLE KEYS */;
/*!40000 ALTER TABLE `casnitikategorisoals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casnitisoals`
--

DROP TABLE IF EXISTS `casnitisoals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casnitisoals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `casnitisubkategorisoal_id` bigint(20) unsigned NOT NULL,
  `nomorsoalumum` int(11) NOT NULL,
  `nomorsoalkhusus` int(11) NOT NULL,
  `soal` text NOT NULL,
  `ja` text NOT NULL,
  `jb` text NOT NULL,
  `jc` text NOT NULL,
  `jd` text NOT NULL,
  `je` text NOT NULL,
  `js` text NOT NULL,
  `alasan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `casnitisoals_casnitisubkategorisoal_id_foreign` (`casnitisubkategorisoal_id`),
  CONSTRAINT `casnitisoals_casnitisubkategorisoal_id_foreign` FOREIGN KEY (`casnitisubkategorisoal_id`) REFERENCES `casnitisubkategorisoals` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casnitisoals`
--

LOCK TABLES `casnitisoals` WRITE;
/*!40000 ALTER TABLE `casnitisoals` DISABLE KEYS */;
/*!40000 ALTER TABLE `casnitisoals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `casnitisubkategorisoals`
--

DROP TABLE IF EXISTS `casnitisubkategorisoals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `casnitisubkategorisoals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `casnitikategorisoal_id` bigint(20) unsigned NOT NULL,
  `subkategorisoal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `casnitisubkategorisoals_casnitikategorisoal_id_foreign` (`casnitikategorisoal_id`),
  CONSTRAINT `casnitisubkategorisoals_casnitikategorisoal_id_foreign` FOREIGN KEY (`casnitikategorisoal_id`) REFERENCES `casnitikategorisoals` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `casnitisubkategorisoals`
--

LOCK TABLES `casnitisubkategorisoals` WRITE;
/*!40000 ALTER TABLE `casnitisubkategorisoals` DISABLE KEYS */;
/*!40000 ALTER TABLE `casnitisubkategorisoals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentonetomanies`
--

DROP TABLE IF EXISTS `commentonetomanies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commentonetomanies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `postonetomany_id` bigint(20) unsigned NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `commentonetomanies_postonetomanie_id_foreign` (`postonetomany_id`),
  CONSTRAINT `commentonetomanies_postonetomanie_id_foreign` FOREIGN KEY (`postonetomany_id`) REFERENCES `postonetomanies` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentonetomanies`
--

LOCK TABLES `commentonetomanies` WRITE;
/*!40000 ALTER TABLE `commentonetomanies` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentonetomanies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `daftarsiswa`
--

DROP TABLE IF EXISTS `daftarsiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftarsiswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftarsiswa`
--

LOCK TABLES `daftarsiswa` WRITE;
/*!40000 ALTER TABLE `daftarsiswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `daftarsiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_barang`
--

DROP TABLE IF EXISTS `data_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal_perolehan` date DEFAULT NULL,
  `asset` varchar(255) DEFAULT NULL,
  `kode_fa_fams` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `outlet_pencatatan` varchar(255) DEFAULT NULL,
  `outlet_actual` varchar(255) DEFAULT NULL,
  `type_barang` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `komputer_nama` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `kondisi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `sophos` varchar(255) DEFAULT NULL,
  `landesk` varchar(255) DEFAULT NULL,
  `capex_or_selisih` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_barang`
--

LOCK TABLES `data_barang` WRITE;
/*!40000 ALTER TABLE `data_barang` DISABLE KEYS */;
INSERT INTO `data_barang` VALUES
(1,'2011-12-23','310000012076','C 0097 0501 1112 02910','SERVER, HP DL SERIES','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Server','Lantai 1','...','administrator',NULL,'AF-DOMPKLNGAN01','10.71.44.7','Baik, Terpakai',NULL,'CN71380Q0J','Tidak','Tidak','Capex','Januari','2024','2024-03-31 23:30:25','2024-03-31 23:30:25','Cabang Pekalongan'),
(2,'2011-12-23','310000012076','C 0097 0501 1112 02910','SERVER, HP DL SERIES','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Server','Lantai 1','...','administrator',NULL,'AF-DOMPKLNGAN01','10.71.44.7','Baik, Terpakai',NULL,'CN71380Q0J','Tidak','Tidak','Capex','Januari','2024','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan'),
(3,'2011-12-23','310000012098','C 0097 0501 1112 03045','SWITCH, 48 PORT HP PROCURVE 2610','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Switch 48','Lantai 1','...','server - Sw1',NULL,NULL,NULL,'Baik, Terpakai',NULL,'CN129ZU0HK','Tidak','Tidak','Capex','Januari','2024','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan'),
(4,'2011-12-23','310000012099','C 0097 0501 1112 03046','SWITCH, 48 PORT HP PROCURVE 2610','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Switch 48','Lantai 2','...','server - Sw2',NULL,NULL,NULL,'Baik, Terpakai',NULL,'CN129ZU0CM','Tidak','Tidak','Capex','Januari','2024','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan'),
(5,'2011-12-23','310000012111','C 0097 0501 1112 03092','RACK, 42U','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Others','Lantai 1','...','server - Rack42',NULL,NULL,NULL,'Baik, Terpakai',NULL,'TDK ADA S/N','Tidak','Tidak','Capex','Januari','2024','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan'),
(6,'2011-12-23','310000012121','C 0097 0501 1112 03151','RACK, 15U','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Others','Lantai 2','...','server - Rack15',NULL,NULL,NULL,'Baik, Terpakai',NULL,'TDK ADA SN','Tidak','Tidak','Capex','Januari','2024','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan'),
(7,'2014-12-23','310000010536','C 0097 0501 1412 00771','KOMPUTER, HP THIN CLIENT T 510','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','TC','Lantai 1','...',NULL,NULL,NULL,NULL,'Rusak','depan ruang server','CNW44407BC','Tidak','Tidak','Capex','Januari','2024','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan');
/*!40000 ALTER TABLE `data_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_barang_now`
--

DROP TABLE IF EXISTS `data_barang_now`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_barang_now` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal_perolehan` date DEFAULT NULL,
  `asset` varchar(255) DEFAULT NULL,
  `kode_fa_fams` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `outlet_pencatatan` varchar(255) DEFAULT NULL,
  `outlet_actual` varchar(255) DEFAULT NULL,
  `type_barang` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `komputer_nama` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `kondisi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `sophos` varchar(255) DEFAULT NULL,
  `landesk` varchar(255) DEFAULT NULL,
  `capex_or_selisih` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area_user` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_barang_now`
--

LOCK TABLES `data_barang_now` WRITE;
/*!40000 ALTER TABLE `data_barang_now` DISABLE KEYS */;
INSERT INTO `data_barang_now` VALUES
(1,'2011-12-23','3100000120761','C 0097 0501 1112 02910','SERVER, HP DL SERIES','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Server','Lantai 1','...','administrator',NULL,'AF-DOMPKLNGAN01','10.71.44.7','Baik, Terpakai',NULL,'CN71380Q0J','Tidak','Tidak','Capex','2024-03-31 23:30:25','2024-09-09 03:50:26','Cabang Pekalongan',NULL,NULL),
(2,'2011-12-23','310000012076','C 0097 0501 1112 02910','SERVER, HP DL SERIES NEW','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Server','Lantai 1','...','administrator',NULL,'AF-DOMPKLNGAN01','10.71.44.7','Baik, Terpakai',NULL,'CN71380Q0J','Tidak','Tidak','Capex','2024-03-31 23:37:19','2024-09-09 03:52:17','Cabang Pekalongan',NULL,NULL),
(3,'2011-12-23','310000012098','C 0097 0501 1112 03045','SWITCH, 48 PORT HP PROCURVE 2610','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Switch 48','Lantai 1','...','server - Sw1',NULL,NULL,NULL,'Baik, Terpakai',NULL,'CN129ZU0HK','Tidak','Tidak','Capex','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan',NULL,NULL),
(4,'2011-12-23','310000012099','C 0097 0501 1112 03046','SWITCH, 48 PORT HP PROCURVE 2610','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Switch 48','Lantai 2','...','server - Sw2',NULL,NULL,NULL,'Baik, Terpakai',NULL,'CN129ZU0CM','Tidak','Tidak','Capex','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan',NULL,NULL),
(5,'2011-12-23','310000012111','C 0097 0501 1112 03092','RACK, 42U','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Others','Lantai 1','...','server - Rack42',NULL,NULL,NULL,'Baik, Terpakai',NULL,'TDK ADA S/N','Tidak','Tidak','Capex','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan',NULL,NULL),
(6,'2011-12-23','310000012121','C 0097 0501 1112 03151','RACK, 15U','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','Others','Lantai 2','...','server - Rack15',NULL,NULL,NULL,'Baik, Terpakai',NULL,'TDK ADA SN','Tidak','Tidak','Capex','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan',NULL,NULL),
(7,'2014-12-23','310000010536','C 0097 0501 1412 00771','KOMPUTER, HP THIN CLIENT T 510','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','TC','Lantai 1','...',NULL,NULL,NULL,NULL,'Rusak','depan ruang server','CNW44407BC','Tidak','Tidak','Capex','2024-03-31 23:37:19','2024-03-31 23:37:19','Cabang Pekalongan',NULL,NULL);
/*!40000 ALTER TABLE `data_barang_now` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
-- Table structure for table `footnote`
--

DROP TABLE IF EXISTS `footnote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `footnote` (
  `jumlahfootnoteyangada` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `kataPertama` varchar(255) DEFAULT NULL,
  `repositori` varchar(100) DEFAULT NULL,
  `penulis_1` varchar(255) DEFAULT NULL,
  `penulis_2` varchar(255) DEFAULT NULL,
  `penulis_3` varchar(255) DEFAULT NULL,
  `penerjemah` varchar(100) DEFAULT NULL,
  `judul` longtext DEFAULT NULL,
  `sumber` longtext DEFAULT NULL,
  `volume` varchar(11) DEFAULT NULL,
  `nomor` varchar(100) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `halaman_awal` varchar(100) DEFAULT NULL,
  `halaman_akhir` varchar(100) DEFAULT NULL,
  `jumlah_penulis` int(11) DEFAULT NULL,
  `jenis` int(100) DEFAULT NULL,
  `judul_web` varchar(100) DEFAULT NULL,
  `deskripsi_web` varchar(100) DEFAULT NULL,
  `bulan` varchar(100) DEFAULT NULL,
  `link_web` varchar(100) DEFAULT NULL,
  `tanggal_diakses_web` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `jenisBuku` varchar(100) DEFAULT NULL,
  `asing` int(1) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `jenisWawancara` varchar(100) DEFAULT NULL,
  `waktu` varchar(100) DEFAULT NULL,
  `acara` varchar(100) DEFAULT NULL,
  `judulAcara` varchar(100) DEFAULT NULL,
  `penyelenggaraAcara` varchar(100) DEFAULT NULL,
  `cetakan` varchar(100) DEFAULT NULL,
  `jilid` varchar(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `hari` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`jumlahfootnoteyangada`)
) ENGINE=InnoDB AUTO_INCREMENT=273 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footnote`
--

LOCK TABLES `footnote` WRITE;
/*!40000 ALTER TABLE `footnote` DISABLE KEYS */;
INSERT INTO `footnote` VALUES
(108,1,'faliq56','Faliq','Disertasiku','Faliq',NULL,NULL,'Randi','Free Fire OKE','HMPS PBA','1','1',2022,'1','90',1,3,NULL,NULL,NULL,NULL,NULL,'Pekalongan','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(109,1,'Qori Aina','Rahman',NULL,'Anwar Abd. Rahman',NULL,NULL,NULL,'Sejarah ilmu nahwu dan perkembangannya','Jurnal Adabiyah','X','1',2010,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(110,1,'kiwkiw','kiwkiw','tahu krispi','kiwkiw',NULL,NULL,NULL,'aku tidak bisa di download di sini adalah salah satu dari mereka yang tidak bisa di download di sini adalah','Wikipedia yang menjadi siswa yang tidak','81','7',1998,'1','8',1,1,NULL,NULL,'08',NULL,NULL,'Pekalongan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(115,1,'randi','Kuraedah','Skripsi','Sitti Kuraedah',NULL,NULL,NULL,'Aplikasi Maharah Kitabah dalam Pembelajaran Bahasa Arab','Jurnal Al-Ta\'dib','VIII','2',2015,'83',NULL,1,1,NULL,NULL,'Juli - Desember',NULL,NULL,'Kendari',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(118,1,'randi','Adawiyah','Skripsi','Yayah Robiatul Adawiyah',NULL,NULL,NULL,'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab','Community Development Journal','II','2',2021,'283',NULL,4,1,NULL,NULL,'Juni',NULL,NULL,'Probolinggo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(119,1,'randi','Puspitasari','Skripsi','Anggun Diah Puspitasari','Andre Noevi Rahmanto','Jumiyanto Widodo',NULL,'Pengaruh Penggunaan Media Aplikasi Typing Master dan Motivasi Belajar Siswa Terhadap Keterampilan Mengetik 10 Jari pada Kelas XI Jurusan Administrasi Perkantoran di SMK N 1 Karanganyar','Jurnal Informasi dan Komunikasi Administrasi Perkantoran','III','1',2019,'1','9',3,1,NULL,NULL,'Februari',NULL,NULL,'Surakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(120,1,'randi','Arabic Typing Tutor','Skripsi','NOQTA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Arabic Typing Tutor','Developer’s Description',NULL,'https://download.cnet.com/Arabic-Typing-Tutor/3000-2279_4-10962267.html','8 Februari 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023',NULL),
(121,2,'randi','Adawiyah','Skripsi','Yayah Robiatul Adawiyah',NULL,NULL,NULL,'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab','Community Development Journal','II','2',2021,'282','287',4,1,NULL,NULL,'Juni',NULL,NULL,'Probolinggo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(123,2,'randi','Kamus Besar Bahasa Indonesia (KBBI)','Skripsi','Badan Pengembangan dan Pembinaan Bahasa,  Kemdikbud',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Kamus Besar Bahasa Indonesia (KBBI)','Kata dasar > latih',NULL,'https://kbbi.web.id/latih','7 Maret 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017',NULL),
(124,5,'randi','Dermawan','Skripsi','Decky Dermawan','Deasy Aseanty',NULL,NULL,'Pengaruh Pelatihan Sumber Daya Manusia Terhadap Produktivitas Kinerja Karyawan di Hotel Amaris Jakarta','Seminar Nasional Cendekiawan',NULL,NULL,2015,'653',NULL,2,7,NULL,NULL,NULL,NULL,NULL,'Jakarta',NULL,NULL,'Prodi Manajemen, Fakultas Ekonomi, Universitas Trisakti',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(125,6,'randi','Dermawan','Skripsi','Decky Dermawan','Deasy Aseanty',NULL,NULL,'Pengaruh Pelatihan Sumber Daya Manusia Terhadap Produktivitas Kinerja Karyawan di Hotel Amaris Jakarta','Seminar Nasional Cendekiawan',NULL,NULL,2015,'654',NULL,2,7,NULL,NULL,NULL,NULL,NULL,'Jakarta',NULL,NULL,'Prodi Manajemen, Fakultas Ekonomi, Universitas Trisakti',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(127,8,'randi','Irianto','Skripsi','Jusuf Irianto',NULL,NULL,NULL,'Prinsip Prinsip Dasar Manajemen Pelatihan (Dari Analisis Kebutuhan sampai Evaluasi Program Pelatihan','Insan Cendekia','1','1',2001,'13',NULL,1,3,NULL,NULL,NULL,NULL,NULL,'Surabaya','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(128,9,'randi','Susanti','Skripsi','Nurul Susanti',NULL,NULL,NULL,'Analisis Pelatihan Kerja Pegawai pada Dinas Pemadam Kebakaran Kota Pekanbaru (Kasus pada Kantor Induk Cempaka)','Other Thesis',NULL,NULL,2018,'12',NULL,1,7,NULL,NULL,NULL,NULL,NULL,'Riau',NULL,NULL,'Universitas Islam Riau',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(129,10,'randi','Kamus Besar Bahasa Indonesia (KBBI)','Skripsi','Badan Pengembangan dan Pembinaan Bahasa,  Kemdikbud',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Kamus Besar Bahasa Indonesia (KBBI)','Kata dasar > tik^2',NULL,'https://kbbi.web.id/tik-2','8 Maret 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016',NULL),
(130,11,'randi','Kamus Besar Bahasa Indonesia (KBBI)','Skripsi','Badan Pengembangan dan Pembinaan Bahasa,  Kemdikbud',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Kamus Besar Bahasa Indonesia (KBBI)','Kata dasar',NULL,'https://kbbi.web.id/mengetik','8 Maret 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019',NULL),
(131,12,'randi','Kamus Besar Bahasa Indonesia (KBBI)','Skripsi','Badan Pengembangan dan Pembinaan Bahasa,  Kemdikbud',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Kamus Besar Bahasa Indonesia (KBBI)','Kata dasar > tik^2',NULL,'https://kbbi.web.id/tik-2','8 Maret 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016',NULL),
(132,13,'randi','Sulastri','Skripsi','Tuti Sulastri',NULL,NULL,NULL,'Analisis Mengetik Cepat 10 Jari menggunakan Teknologi Komputer Berbasis Aplikasi Software Rapidtyping','JURNAL LPKIA','IV','2',2014,'13','14',1,1,NULL,NULL,'Juni',NULL,NULL,'Bandung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(133,14,'randi','Supriatna','Skripsi','Agus Supriatna',NULL,NULL,NULL,'Peningkatan Keterampilan Touch Typing Bahasa Arab pada Keyboard Komputer dengan Metode Drill Berbasis Memori Kinestetik','Prosiding Seminar Ilmiah Bahasa dan Sastra Arab','I',NULL,2022,'4',NULL,1,1,NULL,NULL,'Agustus',NULL,NULL,'Subang',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(134,15,'randi','Abdurahman','Skripsi','Hasan Abdurahman','Asep Ririh Riswaya',NULL,NULL,'Aplikasi Pinjaman Pembayaran Secara Kredit pada Bank Yudha Bhakti','Jurnal Computech & Bisnis','VIII','2',2014,'62',NULL,2,1,NULL,NULL,'Desember',NULL,NULL,'Bandung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(136,1,'randi','Hendri','Skripsi','Muspika Hendri',NULL,NULL,NULL,'Pembelajaran Keterampilan Berbicara Bahasa Arab Melalui Pendekatan Komunkatif','POTENSIA: Jurnal Kependidikan Islam','III','2',2017,'197',NULL,1,1,NULL,NULL,'Juli - Desember',NULL,NULL,'Riau',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(137,2,'randi','Puspitasari','Skripsi','Anggun Diah Puspitasari','Andre Noevi Rahmanto','Jumiyanto Widodo',NULL,'Pengaruh Penggunaan Media Aplikasi Typing Master dan Motivasi Belajar Siswa Terhadap Keterampilan Mengetik 10 Jari pada Kelas XI Jurusan Administrasi Perkantoran di SMK N 1 Karanganyar','Jurnal Informasi dan Komunikasi Administrasi Perkantoran','III','1',2019,'1','9',3,1,NULL,NULL,'Februari',NULL,NULL,'Surakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(138,7,'randi','Adawiyah','Skripsi','Yayah Robiatul Adawiyah',NULL,NULL,NULL,'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab','Community Development Journal','II','2',2021,'282',NULL,4,1,NULL,NULL,'Juni',NULL,NULL,'Probolinggo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(139,16,'randi','Kamus Besar Bahasa Indonesia (KBBI)','Skripsi','Badan Pengembangan dan Pembinaan Bahasa,  Kemdikbud',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Kamus Besar Bahasa Indonesia (KBBI)','Kata dasar > perangkat',NULL,'https://kbbi.web.id/perangkat','8 Maret 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016',NULL),
(140,17,'randi','Rapid Typing','Skripsi','RapidTyping Software',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Rapid Typing','Typing Tutor',NULL,'https://rapidtyping.com/','8 Maret 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2018',NULL),
(141,18,'randi','Rapid Typing','Skripsi','RapidTyping Software',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Rapid Typing','Arabic Typing Tutor',NULL,'https://rapidtyping.com/best-typing-tutors/arabic-typing-tutor.html','8 Maret 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020',NULL),
(142,19,'randi','Adawiyah','Skripsi','Yayah Robiatul Adawiyah',NULL,NULL,NULL,'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab','Community Development Journal','II','2',2021,'282','287',4,1,NULL,NULL,'Juni',NULL,NULL,'Probolinggo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(143,20,'randi','Puspitasari','Skripsi','Anggun Diah Puspitasari','Andre Noevi Rahmanto','Jumiyanto Widodo',NULL,'Pengaruh Penggunaan Media Aplikasi Typing Master dan Motivasi Belajar Siswa Terhadap Keterampilan Mengetik 10 Jari pada Kelas XI Jurusan Administrasi Perkantoran di SMK N 1 Karanganyar','Jurnal Informasi dan Komunikasi Administrasi Perkantoran','III','1',2019,'1','9',3,1,NULL,NULL,'Februari',NULL,NULL,'Surakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(144,21,'randi','Kuraedah','Skripsi','Sitti Kuraedah',NULL,NULL,NULL,'Aplikasi Maharah Kitabah dalam Pembelajaran Bahasa Arab','Jurnal Al-Ta\'dib','VIII','2',2015,'82','98',1,1,NULL,NULL,'Juli - Desember',NULL,NULL,'Kendari',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(145,22,'randi','Suliyanto','Skripsi','Suliyanto',NULL,NULL,NULL,'Metode Penelitian Bisnis untuk Skripsi, Tesis, & Disertasi','ANDI',NULL,NULL,2018,'155',NULL,1,3,NULL,NULL,NULL,NULL,NULL,'Yogyakarta','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(146,23,'randi','Suliyanto','Skripsi','Suliyanto',NULL,NULL,NULL,'Metode Penelitian Bisnis untuk Skripsi, Tesis, & Disertasi','ANDI',NULL,NULL,2018,'156',NULL,1,3,NULL,NULL,NULL,NULL,NULL,'Yogyakarta','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(147,25,'randi','Ascarya Solution','Skripsi','Ascarya Academia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Ascarya Solution','Macam-macam Metode Analisis Data Kuantitatif',NULL,'https://ascarya.or.id/metode-analisis-data-kuantitatif/','8 Maret 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'24 Agustus 2022',NULL),
(148,24,'randi','Suliyanto','Skripsi','Suliyanto',NULL,NULL,NULL,'Metode Penelitian Bisnis untuk Skripsi, Tesis, & Disertasi','ANDI',NULL,NULL,2018,'156',NULL,1,3,NULL,NULL,NULL,NULL,NULL,'Yogyakarta','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(149,11,'randi','Adlini','Metode Penelitian Bahasa Artikel','Miza Nina Adlini',NULL,NULL,NULL,'Metode Penelitian Kualitatif Studi Pustaka','EDUMASPUL Jurnal Pendidikan','VI','1',2022,'974','980',4,1,NULL,NULL,NULL,NULL,NULL,'Medan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(150,1,'randi','Aknuranda','Metode Penelitian Bahasa Artikel','Ismiarta Aknuranda','Almira Syawli','Budi Darma Setiawan',NULL,'Comparative Evaluation of Usability between QWERTY-Based Arabic and Non-QWERTY-Based Arabic Keyboard Layout: Empirical Evidence','Journal of Information Technology and Computer Science','V','2',2020,'177',NULL,3,1,NULL,NULL,NULL,NULL,NULL,'Malang',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(151,1,'randi','Hendri','Metode Penelitian Bahasa Artikel','Muspika Hendri',NULL,NULL,NULL,'Pembelajaran Keterampilan Berbicara Bahasa Arab Melalui Pendekatan Komunkatif','POTENSIA: Jurnal Kependidikan Islam','III','2',2017,'197',NULL,1,1,NULL,NULL,NULL,NULL,NULL,'Riau',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(152,1,'randi','Kuraedah','Metode Penelitian Bahasa Artikel','Sitti Kuraedah',NULL,NULL,NULL,'Aplikasi Maharah Kitabah dalam Pembelajaran Bahasa Arab','Jurnal Al-Ta\'dib','VIII','2',2015,'83',NULL,1,1,NULL,NULL,NULL,NULL,NULL,'Kendari',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(153,1,'randi','Adawiyah','Metode Penelitian Bahasa Artikel','Yayah Robiatul Adawiyah',NULL,NULL,NULL,'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab','Community Development Journal','II','2',2021,'283',NULL,4,1,NULL,NULL,NULL,NULL,NULL,'Probolinggo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(154,1,'randi','Puspitasari','Metode Penelitian Bahasa Artikel','Anggun Diah Puspitasari','Andre Noevi Rahmanto','Jumiyanto Widodo',NULL,'Pengaruh Penggunaan Media Aplikasi Typing Master dan Motivasi Belajar Siswa Terhadap Keterampilan Mengetik 10 Jari pada Kelas XI Jurusan Administrasi Perkantoran di SMK N 1 Karanganyar','Jurnal Informasi dan Komunikasi Administrasi Perkantoran','III','1',NULL,'1','9',3,1,NULL,NULL,NULL,NULL,NULL,'Surakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(155,2,'randi','Arabic Typing Tutor','Metode Penelitian Bahasa Artikel','NOQTA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Arabic Typing Tutor','Developer’s Description',NULL,'https://download.cnet.com/Arabic-Typing-Tutor/3000-2279_4-10962267.html','8 Februari 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023',NULL),
(156,6,'randi','Adawiyah','Metode Penelitian Bahasa Artikel','Yayah Robiatul Adawiyah',NULL,NULL,NULL,'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab','Community Development Journal','II','2',2021,'282','287',4,1,NULL,NULL,NULL,NULL,NULL,'Probolinggo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(157,7,'randi','Puspitasari','Metode Penelitian Bahasa Artikel','Anggun Diah Puspitasari','Andre Noevi Rahmanto','Jumiyanto Widodo',NULL,'Pengaruh Penggunaan Media Aplikasi Typing Master dan Motivasi Belajar Siswa Terhadap Keterampilan Mengetik 10 Jari pada Kelas XI Jurusan Administrasi Perkantoran di SMK N 1 Karanganyar','Jurnal Informasi dan Komunikasi Administrasi Perkantoran','III','1',NULL,'1','9',3,1,NULL,NULL,NULL,NULL,NULL,'Surakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(158,8,'randi','Adawiyah','Metode Penelitian Bahasa Artikel','Yayah Robiatul Adawiyah',NULL,NULL,NULL,'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab','Community Development Journal','II','2',2021,'282','287',4,1,NULL,NULL,NULL,NULL,NULL,'Probolinggo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(159,9,'randi','Puspitasari','Metode Penelitian Bahasa Artikel','Anggun Diah Puspitasari','Andre Noevi Rahmanto','Jumiyanto Widodo',NULL,'Pengaruh Penggunaan Media Aplikasi Typing Master dan Motivasi Belajar Siswa Terhadap Keterampilan Mengetik 10 Jari pada Kelas XI Jurusan Administrasi Perkantoran di SMK N 1 Karanganyar','Jurnal Informasi dan Komunikasi Administrasi Perkantoran','III','1',NULL,'1','9',3,1,NULL,NULL,NULL,NULL,NULL,'Surakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(160,10,'randi','Kuraedah','Metode Penelitian Bahasa Artikel','Sitti Kuraedah',NULL,NULL,NULL,'Aplikasi Maharah Kitabah dalam Pembelajaran Bahasa Arab','Jurnal Al-Ta\'dib','VIII','2',2015,'82','98',1,1,NULL,NULL,NULL,NULL,NULL,'Kendari',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(161,12,'randi','Arabic Typing Tutor','Metode Penelitian Bahasa Artikel','NOQTA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Arabic Typing Tutor','Developer’s Description',NULL,'https://download.cnet.com/Arabic-Typing-Tutor/3000-2279_4-10962267.html','25 Mei 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023',NULL),
(162,13,'randi','Kerjanya','Metode Penelitian Bahasa Artikel','Ebta Setiawan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Kerjanya','Unduh Arabic Typing Tutor (gratis) / Download Arabic Typing Tutor',NULL,'https://www.kerjanya.net/faq/7705-unduh-arabic-typing-tutor-gratis-download-arabic-typing-tutor.html','25 Mei 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'28 Maret 2014',NULL),
(163,14,'randi','Kerjanya','Metode Penelitian Bahasa Artikel','Ebta Setiawan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Kerjanya','Unduh Arabic Typing Tutor (gratis) / Download Arabic Typing Tutor',NULL,'https://www.kerjanya.net/faq/7705-unduh-arabic-typing-tutor-gratis-download-arabic-typing-tutor.html','25 Mei 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'28 Maret 2014',NULL),
(164,1,'chusnawid12','Unsi','skripsisaya','Baiq Tuhfatul Unsi',NULL,NULL,NULL,'Pembelajaran Mufrodat Bahasa Arab Melalui Penerapan Metode Driill','http://www.jurnal.iaibafa.ac.id/index.php/murobbi/article/view/237/172','IV','1',2020,'72',NULL,1,1,NULL,NULL,'Maret',NULL,NULL,'Jombang',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(165,1,'chusnawid12','Qomaruddin','skripsisaya','Ahmad Qomaruddin',NULL,NULL,NULL,'Penerapan Metode Bernyanyi dalam Pembelajaran Mufrodat','https://ejournal.iaiig.ac.id/index.php/TWD/article/viewFile/14/20','I','2',2017,'274','275',1,1,NULL,NULL,NULL,NULL,NULL,'Purwokerto',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(166,1,'chusnawid12','M.Pd.','skripsisaya','Nurul Kusnah, S.Ag., M.Pd.',NULL,NULL,NULL,'Teknik Pembelajaran Mutahir',NULL,NULL,NULL,2018,'7','8',1,1,NULL,NULL,NULL,NULL,NULL,'Lamongan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(167,1,'randi','Faruq','KKNMB Artikel Opini','Umar Al Faruq','Dwi Noviani',NULL,NULL,'Pendidikan Moderasi Beragama sebagai Perisai Radikalisme di Lembaga Pendidikan','Jurnal TAUJIH Jurnal Pendidikan Islam','XIV','1',2021,'60',NULL,2,1,NULL,NULL,'Januari-Juni',NULL,NULL,'Ogan Ilir',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(168,1,'randi','Sutrisno','KKNMB Artikel Opini','Edy Sutrisno',NULL,NULL,NULL,'Aktualisasi Moderasi Beragama di Lembaga Pendidikan','Jurnal Bimas Islam','XII','1',2019,'323',NULL,1,1,NULL,NULL,'Desember',NULL,NULL,'Malang',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(169,2,'randi','Abidin','KKNMB Artikel Opini','Achmad Zainal Abidin',NULL,NULL,NULL,'Nilai-nilai Moderasi Beragama dalam Permendikbud No. 37 Tahun 2018','JIRA Jurnal Inovasi dan Riset Akademik','II','5',2021,'733',NULL,1,1,NULL,NULL,'Mei',NULL,NULL,'Surabaya',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(170,6,'randi','Mutradlo','KKNMB Artikel Opini','Muhamad Mutradlo',NULL,NULL,'Risma Wahyu H. dan Ratna Safitri','Pendidikan Moderasi Beragama: Membangun Harmoni, Memajukan Negeri','Orasi Pengukuhan Profesor Riset Bidang Agama dan Tradisi Kegamaan, Kementerian Agama RI','1','1',2021,'1',NULL,1,3,NULL,NULL,NULL,NULL,NULL,'Jakarta','karangan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(171,1,'randi','Haryani','KKNMB Artikel Opini','Elma Haryani',NULL,NULL,NULL,'Pendidikan Moderasi Beragama untuk Generasi Milenia: Studi Kasus \'Lone Wolf\' pada Anak di Medan','EDUKASI: Jurnal Penelitian Pendidikan Agama dan Keagamaan','XVIII','2',2020,'146',NULL,1,1,NULL,NULL,'Agustus',NULL,NULL,'Jakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(172,1,'randi','Liando','KKNMB Artikel Opini','Mayske Rinny Liando','Hadirman',NULL,NULL,'Praktik Kultur Moderasi Beragama dalam Lembaga Pendidikan Muhammadiyah (Studi di SMA Muhammadiyah Manado)','Edukasi Islami: Jurnal Pendidikan Islam','XI','1',2022,'380',NULL,2,1,NULL,NULL,'Februari',NULL,NULL,'Manado',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(173,1,'randi','patinews.com','Permainan Bahasa Arab','Atika Mulyasari',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'patinews.com','Melatih Kemahiran Bahasa Arab dengan Permainan Bahasa Arab',NULL,'https://www.patinews.com/melatih-kemahiran-berbahasa-arab-dengan-permainan-bahasa/','28 Mei 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'14 September 2021',NULL),
(174,1,'randi','Warson','Permainan Bahasa Arab','Ahmad Warson',NULL,NULL,NULL,'Kamus Al-Munawir Arab-Indonesia','Pustaka Progressif','2',NULL,2002,NULL,NULL,1,3,NULL,NULL,NULL,NULL,NULL,'Surabaya','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(175,1,'randi','Ainin','Permainan Bahasa Arab','Moch Ainin',NULL,NULL,NULL,'Metodologi Penelitian Bahasa Arab','Hilal Pusataka',NULL,NULL,2007,NULL,NULL,1,3,NULL,NULL,NULL,NULL,NULL,'Pasuruan','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(176,1,'randi','Fanani','Permainan Bahasa Arab','Achmad Fanani',NULL,NULL,NULL,'Ice Breaking dalam Proses Belajar Mengajar','Jurnal Buana Pendidikan','VI','11',2010,'69',NULL,1,1,NULL,NULL,'Oktober',NULL,NULL,'Surabaya',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(178,1,'chusnawid12','M.Pd.','skripsisaya','Dr. Nusa Putra, S.Fil., M.Pd.',NULL,NULL,NULL,'Metode Penelitian Kualitatif Pendidikan',NULL,NULL,NULL,2012,'41',NULL,1,1,NULL,NULL,NULL,NULL,NULL,'Depok',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(179,2,'chusnawid12','M.Pd.I','skripsisaya','Fathur Rohman, M.Pd.I',NULL,NULL,NULL,'Metodologi Pembelajaran Bahasa Arab',NULL,NULL,NULL,2015,'261',NULL,1,1,NULL,NULL,'Oktober',NULL,NULL,'Malang',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(180,6,'chusnawid12','Muna','skripsisaya','Wa Muna',NULL,NULL,NULL,'Metodologi Pembelajaran Bahasa Arab Teori dan Aplikasi',NULL,NULL,NULL,2011,'147','148',1,1,NULL,NULL,NULL,NULL,NULL,'Yogyakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(181,7,'chusnawid12','Saleha','skripsisaya','Fiki Putri Saleha',NULL,NULL,NULL,'Pengaruh Metode Bernyanyi Terhadap Kemampuan Menghafal Mufrodat dalam Pembelajaran Bahasa Arab Siswa Kelas II Ali Bin Abi Thalib MI Ma\'arif Candran Godean Tahun Ajaran 2019/2020',NULL,NULL,NULL,2020,'1','2',1,1,NULL,NULL,NULL,NULL,NULL,'Yogyakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(182,1,'irwan28','Irwan','Skripsi Irwan','Irwan',NULL,NULL,NULL,'Implementasi Pembelajara Nahwu','Jurnal Hunafa','IV','3',2022,'3','5',1,1,NULL,NULL,'Desember',NULL,NULL,'Malang',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(184,1,'ana123','Zukhairoh','skripsi','Ana Zukhairoh','Qoriaina',NULL,NULL,'Media','Pembelajaran','II','1',2001,'8','9',2,1,NULL,NULL,NULL,NULL,NULL,'Jakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(185,1,'ana123','Jamilah','skripsi','Nasiul Jamilah','Guntur','Amiruddin',NULL,'Pengembangan Media Pembelajaran Power Point Ispring PresenterPada Materi Kosakata Bahasa Arab','al-Mahara','V','1',2019,'142',NULL,3,1,NULL,NULL,NULL,NULL,NULL,'Lampung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(186,1,'hamsa1','Yaumi','Proposal','Dr. Muhammad Yaumi',NULL,NULL,NULL,'Media dan Teknologi Pembelajaran','Prenada Media Group','1',NULL,2018,'7','8',1,3,NULL,NULL,NULL,NULL,NULL,'Jakarta','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(187,1,'hamsa1','Setyono','Proposal','Setyono',NULL,NULL,NULL,'Pengembangan Buku Saku Materi Pemanasan Global Untuk SMP','Unnes Journal of Biology Education','IV','1',2013,'118','126',4,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(188,1,'hamsa1','Rahmawati','Proposal','Laifa Rahmawati','Jumadi','Jaslin Ikhsan','Eko Arianto, M.Eng','E-Learning&Konsep Belajar Mandiri','Penebar Media Pustaka','1',NULL,2018,'19','21',3,3,NULL,NULL,NULL,NULL,NULL,'Yogyakarta','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(190,1,'hamsa1','Djamaluddin','Proposal','Ahdar Djamaluddin','Wardana',NULL,NULL,'Belajar dan Pembelajaran 4 Pilar Peningkatan Kompetensi Pedagogis','CV. Kaaffah Learning Center','1',NULL,2019,'5','6',2,3,NULL,NULL,NULL,NULL,NULL,'Sulawesi Selatan','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(191,2,'hamsa1',NULL,'Proposal',NULL,NULL,NULL,NULL,'Oxford Learner\'s Pocket Dictionary',NULL,NULL,NULL,2003,'330',NULL,1,11,NULL,NULL,NULL,NULL,NULL,'New York',NULL,NULL,'Oxford University Press',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(193,2,'hamsa1','Muslimah','Proposal','Muslimah',NULL,NULL,NULL,'PENGEMBANGAN POCKET BOOK\r\nSEBAGAI MEDIA BELAJAR MANDIRI BAHASA ARAB \r\nSISWA KELAS VIII SMP IT ABU BAKAR YOGYAKARTA','Skripsi UIN Sunan Kalijaga',NULL,NULL,2013,NULL,NULL,1,7,NULL,NULL,NULL,NULL,NULL,'Yogyakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(194,6,'hamsa1','Utami','Proposal','Munifah Yeni Utami',NULL,NULL,NULL,'PENGEMBANGAN MEDIA POCKET BOOK UNTUK MENINGKATKAN \r\nPENGUASAAN MUFRODAT SISWA KELAS VII MTS IBNUL QOYYIM \r\nPUTRI YOGYAKARTA TAHUN AJARAN 2015/2016','Skripsi UIN Sunan Kalijaga',NULL,NULL,2016,'-','-',1,7,NULL,NULL,NULL,NULL,NULL,'Yogyakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(195,7,'hamsa1','Mulyawati','Proposal','Inne Mulyawati',NULL,NULL,NULL,'PENGEMBANGAN MEDIA POCKET BOOK UNTUK PEMBELAJARAN \r\nKOSAKATA BAHASA PRANCIS LEVEL A1','Skripsi Universitas Negeri Yogyakarta',NULL,NULL,2019,NULL,NULL,1,7,NULL,NULL,NULL,NULL,NULL,'Yogyakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(196,1,'randi','Pane','Pelatihan LBM KTI 11 Juni 2023','Akhiril Pane',NULL,NULL,NULL,'Urgensi Bahasa Arab; Bahasa Arab sebagai Alat Komunikasi Agama Islam','KOMUNIKOLOGI Jurnal Pengembangan Ilmu Komunikasi dan Sosial','II','1',2018,'79',NULL,1,1,NULL,NULL,NULL,NULL,NULL,'Universitasi Islam Negeri Sumatera Utara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(197,1,'randi','Setiyadi','Pelatihan LBM KTI 11 Juni 2023','Alif Cahya Setiyadi',NULL,NULL,NULL,'Dialek Bahasa Arab Tinjauan Dialektologis','Jurnal At-Ta\'dib','VI','1',2011,'127',NULL,1,1,NULL,NULL,'Juni',NULL,NULL,'Ponorogo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(198,1,'randi','Sagala','Pelatihan LBM KTI 11 Juni 2023','Richard Sambera Sagala',NULL,NULL,NULL,'Pengembangan Bahan Ajar Sistem Kontrol Terprogram : Modul Terintegerasi Jobsheet (MTJ)','Skripsi S1 Pendidikan Teknik Elektro',NULL,NULL,2020,'12',NULL,1,7,NULL,NULL,NULL,NULL,NULL,'Bandung',NULL,NULL,'Departemen Pendidikan Teknik Elektro Universitas Pendidikan Indonesia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(201,1,'randi','Yunginger','KKN Kolaborasi Nusantara','Raghel Yunginger','Sri Sutarni Arifin',NULL,NULL,'Pemberdayaan Masyarakat Desa Berbasis Tipology SDGs Desa sebagai Unggulan Desa dalam Mencapai Target SDGs di Desa Hutadaa','Laporan KKN Tematik Desa Membangun Tahap 1',NULL,NULL,2021,'ii',NULL,2,7,NULL,NULL,NULL,NULL,NULL,'Gorontalo',NULL,NULL,'LP2M Universitas negeri Gorontalo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(205,1,'randi','Kementerian PPN/Bappenas','KKN Kolaborasi Nusantara','Admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Kementerian PPN/Bappenas','Kolaborasi dalam Mencapai Pembangunan Berkelanjutan (TPB/SDGs) di Indonesia',NULL,'sdgs.bappenas.go.id/kolaborasi-dalam-mencapai-tujuan-pembangunan-berkelanjutan-tpbsdgs-di-indonesia/','13 Juni 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'23 Desember 2018',NULL),
(206,1,'randi','Yunginger','KKN Kolaborasi Nusantara','Raghel Yunginger','Amirudin Dako',NULL,NULL,'Strategi Program Kampung Iklim Berbasis Bottom Up Participative dalam Mendorong Pencapaian Target SDGs di Desa Hutadaa','Jurnal Sibermas (Sinergi Pemberdayaan Masyarakat)','X','2',2022,'415','421',2,1,NULL,NULL,NULL,NULL,NULL,'Gorontalo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(207,1,'randi','Hasanuddin','KKN Kolaborasi Nusantara','Hasanuddin',NULL,NULL,NULL,'Peningkatan Kapasitas Pengelolaan Sumber Daya Lokal Berbasis SDGs Desa Tongkonunuk Sulawesi Tengah','Jambura Journal of Husbandry and Agriculture Sommunity Serve (JJHCS)','I','2',2022,'68','72',4,1,NULL,NULL,'Juli',NULL,NULL,'Gorontalo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(208,2,'randi','Boekoesoe','KKN Kolaborasi Nusantara','Lintje Boekoesoe','Tri Septian Maksum',NULL,NULL,'Optimalisasi Pembangunan Desa dalam Mewujudkan SDGs Desa','Jurnal Sibemas (Sinergi Pemberdayaan Masyarakat)','I','1',2022,'209','218',2,1,NULL,NULL,NULL,NULL,NULL,'Gorontalo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(213,8,'hamsa1','Fatmawati','Proposal','Komang Fatmawati',NULL,NULL,NULL,'Etika Pendidikan Formal, Informal, dan Non-Formal','Jaya Pangus Press','1',NULL,2017,'26','27',4,3,NULL,NULL,NULL,NULL,NULL,'Denpasar','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(214,9,'hamsa1','Adawiyah','Proposal','Arabiatul Adawiyah',NULL,NULL,NULL,'Implikasi Pendidikan NonFormal Pada Remaja','Equilibrium Pendidikan Sosiologi','IV','2',2016,'2',NULL,1,1,NULL,NULL,'November',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(215,10,'hamsa1','Nur \'Aini Ramdhaniah','Proposal','Nur \'Aini Ramdhaniah','Ilham Salamun Alim',NULL,NULL,NULL,'Asrama An-Nur Pekalongan',NULL,NULL,2023,NULL,NULL,NULL,8,NULL,NULL,'Juni',NULL,NULL,'Pekalongan',NULL,NULL,NULL,'siswa','Wawancara Pribadi',NULL,NULL,NULL,NULL,NULL,NULL,'20',NULL),
(216,11,'hamsa1','Karima Dina Febri','Proposal','Karima Dina Febri','Ilham Salamun Alim',NULL,NULL,NULL,'Asrama An-Nur Pekalongan',NULL,NULL,2023,NULL,NULL,NULL,8,NULL,NULL,'Juni',NULL,NULL,'Pekalongan',NULL,NULL,NULL,'Santri','Wawancara Penelitian',NULL,NULL,NULL,NULL,NULL,NULL,'20',NULL),
(217,12,'hamsa1','Hanan Andi Fahrezi','Proposal','Hanan Andi Fahrezi','Ilham Salamun Alim',NULL,NULL,NULL,'Asrama An-Nur Pekalongan',NULL,NULL,2023,NULL,NULL,NULL,8,NULL,NULL,'Juni',NULL,NULL,'Pekalongan',NULL,NULL,NULL,'Santri','Wawancara Penelitian',NULL,NULL,NULL,NULL,NULL,NULL,'20',NULL),
(218,13,'hamsa1','Ali','Proposal','Jauhar Ali',NULL,NULL,NULL,'PENGEMBANGAN POCKETBOOK PEMBELAJARAN MUFRADÂT BERBASIS ANTI \r\nRADIKALISME BAGI MAHASISWA JURUSAN PENDIDIKAN BAHASA ARAB','Journal of Arabic Learning and Teaching','II','10',2021,NULL,NULL,1,1,NULL,NULL,'November',NULL,NULL,'Pekalongan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(219,14,'hamsa1','Djamaluddin','Proposal','Ahdar Djamaluddin','Wardana',NULL,NULL,'Belajar dan Pembelajaran 4 Pilar Peningkatan Kompetensi Pedagogis','CV Kaaffah Learning Center Sulawesi Selatan','1',NULL,2019,'12',NULL,2,3,NULL,NULL,NULL,NULL,NULL,'Yogyakarta','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(220,15,'hamsa1','Khofifah','Proposal','Siti Khofifah',NULL,NULL,NULL,'PENGEMBANGAN MEDIA BUKU SAKU DALAM PEMBELAJARAN \r\nBAHASA ARAB KELAS IV DI MADRASAH IBTIDAIYAH \r\nNURUL HUDA NGANJUK','Tesis Magister bahasa Arab',NULL,NULL,2019,NULL,NULL,1,7,NULL,NULL,NULL,NULL,NULL,'Tulungagung',NULL,NULL,'IAIN Tulungagung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(222,16,'hamsa1','Ali','Proposal','Muhammad Ali','Muhammad Asrori',NULL,NULL,'Metodologi dan Aplikasi Riset Pendidikan','PT Bumi Aksara',NULL,NULL,2014,'105',NULL,2,3,NULL,NULL,NULL,NULL,NULL,'Jakarta','normal',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(223,17,'hamsa1','Cahyadi','Proposal','Rahmat Arofah Hari Cahyadi',NULL,NULL,NULL,'Pengembangan Bahan Ajar Berbasis\r\n ADDIE Model','HALAQA: ISLAMIC\r\n EDUCATION JOURNAL','III','1',2019,'36',NULL,1,1,NULL,NULL,'Juni',NULL,NULL,'Surabaya',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(225,1,'sintanurul21','Yule','katalog digital','Brown, G. Yule',NULL,NULL,NULL,'Analisis Wacana',NULL,NULL,NULL,1996,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,'Jakarta: Gramedia',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(226,1,'sintanurul21','(Eds.).','katalog digital','Cohen, H., & Lefebvre, C. (Eds.).',NULL,NULL,NULL,'Handbook of Categorization in Cognitive Science','Elsevier',NULL,NULL,2005,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(229,1,'randi','Alford','Grafika Komputer Aeni','P. Alford','S.J. Page',NULL,NULL,'Marketing Technology for Adoption by Small Business','The Service Industries Journal','XXXV','1',2015,'655','669',2,1,NULL,NULL,NULL,NULL,NULL,'Bournemouth',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(230,2,'sintanurul21','Search Engine Land','katalog digital','Anna Crowe',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'Search Engine Land','What is SEM – Search Engine Marketing?',NULL,'searchengineland.com/','3 Juli 2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'7 Maret 2023',NULL),
(234,2,'sintanurul21','Berners-Lee','katalog digital','Tim Berners-Lee',NULL,NULL,NULL,'Information Management : A Proposal',NULL,NULL,NULL,1989,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(235,2,'sintanurul21','Norman','katalog digital','Don Norman',NULL,NULL,NULL,'The Design of Everyday Things : Revised and Expanded Edition','Basic Books',NULL,NULL,2013,'21',NULL,1,1,NULL,NULL,NULL,NULL,NULL,'New York',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(236,6,'sintanurul21','Wardhana','katalog digital','Wardhana',NULL,NULL,NULL,'Strategi Digital marketing dan Implikasinya pada Keunggulan Bersaing UKM di Indonesia',NULL,NULL,NULL,2015,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(239,1,'Neyla28','Hamid','My Skripsi','Moh. Azhar Hamid',NULL,NULL,NULL,'Panduan Meningkatkan Kecerdasan Emosional','PT. Profesional Publishing',NULL,NULL,2017,'23','33',1,3,NULL,NULL,NULL,NULL,NULL,'Kuala Lumpur','normal',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(249,1,'randi','Hasnah','Laporan PPL','Mulia Hasnah',NULL,NULL,NULL,'Eksistensi Mahasiswa PPL dalam Meningkatkan Motivasi Belajar Pendidikan Agama Islam','PELITA Jurnal Pendidikan dan Keguruan','I','1',2023,'2',NULL,1,1,NULL,NULL,NULL,NULL,NULL,'Soppeng',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(250,2,'randi','Saifuddin','Laporan PPL','Ahmad Saifuddin',NULL,NULL,NULL,'Eksistensi Kurikulum Pesantren dan Kebijakan Pendidikan','Jurnal Pendidikan Agama Islam','III','1',2015,'212',NULL,1,1,NULL,NULL,'Mei',NULL,NULL,'Nganjuk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(251,2,'randi','Luthfi','Laporan PPL','Rois Luthfi',NULL,NULL,NULL,'Evaluasi Kebijakan Full Day School terhadap Eksistensi Madrasah Diniyah','Ejournal, Cakrawla: Studi Manajemen Pendidikan Islam dan Studi Sosial','IV','1',2020,'156',NULL,1,1,NULL,NULL,NULL,NULL,NULL,'Yogyakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(252,1,'randi','Fuadah','Laporan PPL','Dinik Nurul Fuadah',NULL,NULL,NULL,'Eksistensi Laboratorium Pendidikan Agama Islam dalam Materi Perawatan Jenazah di Sekolah Menengah Kejuruan 5 Jember','Skripsi Sarjana Pendidikan Agama Islam',NULL,NULL,2021,'5',NULL,1,7,NULL,NULL,NULL,NULL,NULL,'Jember',NULL,NULL,'Institut Agama Islam Negeri Jember',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(253,18,'hamsa1','Shofiyani','Proposal','Amrini Shofiyani','Siti Khoirotun Nisa',NULL,NULL,'Buku Saku Bahasa Arab Berbasis Metode Komunikatif Untuk Meningkatkan Kualitas Maharoh Kalam (Di Lembaga Bahasa Arab Dan Inggris Denanyar)','Jurnal Education and Development Institut Pendidikan Tapanuli Selatan','XI','2',2023,NULL,NULL,2,1,NULL,NULL,'Mei',NULL,NULL,'2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(254,1,'randi','Senjani','Artikel PKM 2023','Yayu Putri Senjani',NULL,NULL,NULL,'Peran Sistem Manajemen pada BUMDes dalam Peningkatan Pendapatan Asli Desa','Kumawula : Jurnal Pengabdian Kepada Masyarakat','II','1',2019,'26',NULL,1,1,NULL,NULL,'April',NULL,NULL,'Yogyakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(255,1,'randi','Titioka','Artikel PKM 2023','Baretha M Titioka',NULL,NULL,NULL,'Pengelolaan Keuangan BUMDes di Kabupaten Kepulauan Aru','Jurnal Pengabdian Masyarakat Jamak (Manajemen & Akuntansi)','III','1',2020,'197','216',4,1,NULL,NULL,'Juni',NULL,NULL,'Maluku',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(256,2,'randi','Talalu','Artikel PKM 2023','Taufik R. Talalu','Citra Fransisca Indah Lestari Dano Putri','Ibnuh Vanli Mokodompit',NULL,'Metode Utama Komunikasi Pemasaran Atraksi Wisata Badan Usaha Milik Desa (BUMDes)','Ettisal Journal of Communication','VI','2',2021,'53','62',3,1,NULL,NULL,'Desember',NULL,NULL,'Gorontalo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(257,2,'randi','Sya\'roni','Artikel PKM 2023','Deden Abdul Wahab Sya\'roni',NULL,NULL,NULL,'Implementasi Aplikasi Smart Asset dalam Memanfaatkan Teknologi Informasi Komunikasi sebagai Sarana Peningkatan Tata Kelola BUMDes dan Industri Rumah Tangga untuk Memajukan Perekonomian Desa Pagerwangi Kec. Lembang Kab. Bandung Barat di Era Adaptasi Kebiasaan Baru','ABDIKAMSIA: Pengabdian kepada Masyarakat Sistem Informasi Akuntansi','I','2',2023,'43','55',4,1,NULL,NULL,'Desember',NULL,NULL,'Bandung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(260,1,'randi','Rotikan','Skripsi ITSNU','Reymon Rotikan',NULL,NULL,NULL,'Sistem Informasi Absensi Berbasis Web untuk Kegiatan Konferensi','Jurnal Ilmiah Sisfotenika','VI','1',2016,'46','55',1,1,NULL,NULL,'Januari',NULL,NULL,'Sulawesi Utara',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(266,1,'Agung123','hidayat','Skripsiku','nandang sarif hidayat',NULL,NULL,NULL,'Analisis Kesalahan Dan Konstraftif Dalam Pembelajaran bahasa Arab','Kutubkhanah: Jurnal Penelitian Sosial Keagamaan','XVII','2',2014,'160','161',1,1,NULL,NULL,'Juli-Desember',NULL,NULL,'Riau',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(267,2,'Agung123','Silalahi','Skripsiku','Ulber Silalahi',NULL,NULL,NULL,'Metode Penelitian Sosial',NULL,NULL,NULL,2009,'284','285',1,1,NULL,NULL,NULL,NULL,NULL,'Bandung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(270,1,'Agung123','Silalahi','Skripsiku','Ulber Silalahi',NULL,NULL,NULL,'Metode Penelitian Sosial',NULL,NULL,NULL,2009,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,'Bandung',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(271,2,'Agung123','Ghoni','Skripsiku','M. Djunaidi Ghoni','Fauzan Almanshur',NULL,NULL,'Metode Penelitian Kualitatif','Ar-Ruzz Media',NULL,NULL,2012,NULL,NULL,2,1,NULL,NULL,NULL,NULL,NULL,'Yogyakarta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `footnote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hadiahs`
--

DROP TABLE IF EXISTS `hadiahs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hadiahs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_hadiah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hadiahs`
--

LOCK TABLES `hadiahs` WRITE;
/*!40000 ALTER TABLE `hadiahs` DISABLE KEYS */;
/*!40000 ALTER TABLE `hadiahs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `janganmenyerahs`
--

DROP TABLE IF EXISTS `janganmenyerahs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `janganmenyerahs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `janganmenyerahs`
--

LOCK TABLES `janganmenyerahs` WRITE;
/*!40000 ALTER TABLE `janganmenyerahs` DISABLE KEYS */;
/*!40000 ALTER TABLE `janganmenyerahs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kota`
--

DROP TABLE IF EXISTS `kota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kota` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(255) NOT NULL,
  `jarak` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kota`
--

LOCK TABLES `kota` WRITE;
/*!40000 ALTER TABLE `kota` DISABLE KEYS */;
/*!40000 ALTER TABLE `kota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswi`
--

DROP TABLE IF EXISTS `mahasiswi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_mhs` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswi`
--

LOCK TABLES `mahasiswi` WRITE;
/*!40000 ALTER TABLE `mahasiswi` DISABLE KEYS */;
/*!40000 ALTER TABLE `mahasiswi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mengulang_pegawai`
--

DROP TABLE IF EXISTS `mengulang_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mengulang_pegawai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pegawai_nama` varchar(50) NOT NULL,
  `pegawai_jabatan` varchar(50) NOT NULL,
  `pegawai_umur` int(11) NOT NULL,
  `pegawai_alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mengulang_pegawai`
--

LOCK TABLES `mengulang_pegawai` WRITE;
/*!40000 ALTER TABLE `mengulang_pegawai` DISABLE KEYS */;
/*!40000 ALTER TABLE `mengulang_pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2014_10_12_100000_create_password_resets_table',1),
(4,'2019_08_19_000000_create_failed_jobs_table',1),
(5,'2019_12_14_000001_create_personal_access_tokens_table',1),
(6,'2023_03_21_093333_create_pegawai_table',1),
(7,'2023_03_22_000415_create_daftarsiswa_table',1),
(8,'2023_03_24_035756_create_accititaties_table',1),
(9,'2023_03_24_035804_create_acrepo_table',1),
(10,'2023_03_24_035809_create_acsession_table',1),
(11,'2023_03_24_035816_create_aclogin_table',1),
(12,'2023_03_24_035824_create_accaptcha_table',1),
(13,'2023_05_28_133414_create_pegawai2s_table',2),
(14,'2023_05_28_133422_create_pegawai3s_table',2),
(15,'2023_05_29_231742_create_siswas_table',2),
(16,'2023_07_12_002109_create_kotas_table',2),
(17,'2023_08_13_131956_create_anfiniti_logins_table',2),
(18,'2023_08_13_134441_create_anfiniti_sessions_table',2),
(19,'2023_08_13_134523_create_anfiniti_datawebs_table',2),
(20,'2023_08_18_031907_add_unique_constraint_to_username_column_in_anfiniti_login_table',3),
(21,'2023_08_19_020925_tambah_kolom_username_ke_anfiniti_session',4),
(22,'2023_08_19_021528_tambah_kolom_username_ke_anfiniti_session',5),
(23,'2023_08_19_071007_add_gambar_to_anfiniti_dataweb',6),
(26,'2023_08_27_231459_add_deleted_at_to_anfiniti_dataweb_table',7),
(27,'2023_11_20_033604_create_pegawai_table',8),
(28,'2023_11_21_040415_create_mahasiswa_table',8),
(29,'2023_11_21_041747_rename_mahasiswa_table',8),
(30,'2023_11_21_042930_rename_column_mahasiswa_table',8),
(31,'2023_11_21_062935_create_perpustakaans_table',8),
(32,'2023_11_21_083506_create_rpegawais_table',8),
(33,'2023_11_22_072628_add_column_at_rpegawai_tables',8),
(34,'2023_11_30_064328_create_penggunas_table',8),
(35,'2023_11_30_064335_create_telepons_table',8),
(36,'2023_11_30_070956_create_artikels_table',8),
(37,'2023_11_30_104502_rename_artikel_to_artikels',8),
(38,'2023_11_30_104512_create_tags_tables',9),
(39,'2023_11_30_134125_create_anggotas_table',9),
(40,'2023_11_30_134130_create_hadiahs_table',9),
(41,'2023_11_30_134134_create_anggota_hadiahs_table',9),
(42,'2023_12_01_034906_change_foreign_key__article_id_to_tag_table',10),
(43,'2024_01_13_140254_create_janganmenyerahs_table',11),
(44,'2024_08_24_232210_create_usersbelajarmiddleware_table',11),
(45,'2024_02_13_142117_create_user_manajemens_table',12),
(46,'2024_02_15_161607_add_kukis_to_user_manajemen_table',12),
(47,'2024_03_29_161908_create_penghapusan_now_table',12),
(48,'2024_03_29_161908_create_penghapusan_table',12),
(49,'2024_03_29_162257_create_mutasis_now_table',12),
(50,'2024_03_29_162257_create_mutasis_table',12),
(51,'2024_03_29_162822_create_data_barang_now_table',12),
(52,'2024_03_29_162822_create_data_barang_table',12),
(53,'2024_03_31_231406_change_column_tanggal_perolehan',12),
(54,'2024_03_31_231410_change_column_tanggal_perolehan',12),
(55,'2024_04_03_064202_add_column_area_user',12),
(56,'2024_04_03_064211_add_column_area_user',12),
(57,'2024_04_03_142154_drop_bulan_tahun',12),
(58,'2024_04_03_142422_add_area_user',12),
(59,'2024_04_03_142611_add_area_user',12),
(60,'2024_04_03_142613_add_area_user',12),
(61,'2024_04_03_143104_area_table',12),
(62,'2024_04_03_152844_time_stamp',12),
(63,'2024_04_18_140004_change_varchar_tanggal_perolehan_to_date',12),
(64,'2024_04_18_141109_change_varchar_tanggal_perolehan_to_date',12),
(65,'2024_04_18_141118_change_varchar_tanggal_perolehan_to_date',12),
(66,'2024_04_18_141122_change_varchar_tanggal_perolehan_to_date',12),
(67,'2024_08_31_102556_create_useronetoones_table',12),
(68,'2024_08_31_102604_create_profileonetoones_table',12),
(69,'2024_09_01_132650_create_postonetomanies_table',12),
(70,'2024_09_01_132702_create_commentonetomanies_table',12),
(71,'2024_09_01_135347_rename_postonetomanie_id_to_postonetomany_id_in_commentcontomanies_table',12),
(72,'2024_09_01_231050_create_postmanytomanies_table',12),
(73,'2024_09_01_231056_create_tagmanytomanies_table',12),
(74,'2024_09_01_231137_craete_post_tag_table',12),
(75,'2024_09_01_232924_rename_post_tag_table_to_postmanytomany_tagmanytomany',12),
(76,'2024_09_02_113556_create_kategorisoals_table',12),
(77,'2024_09_02_113604_create_subkategorisoals_table',12),
(78,'2024_09_02_113623_create_soals_table',12),
(79,'2024_09_02_123420_create_casnitiakuns_table',12),
(80,'2024_09_02_123421_create_casnitihistories_table',12),
(81,'2024_09_02_125751_alter_casnitihistories_change_nilai_columns',12),
(82,'2024_09_14_134017_add_bulan_tahun_to_data_barang_now_table',13),
(83,'2024_09_14_134043_add_bulan_tahun_to_mutasi_now_table',13),
(84,'2024_09_14_134056_add_bulan_tahun_to_penghapusan_now_table',13),
(85,'2024_09_15_043011_add_tanggal_perolehan_to_mutasi_table',13),
(86,'2024_09_15_074225_update_null_outlet_columns_in_penghapusan_table',14);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mutasi`
--

DROP TABLE IF EXISTS `mutasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mutasi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal_perolehan` date DEFAULT NULL,
  `asset` varchar(255) DEFAULT NULL,
  `kode_fa` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `outlet_actual` varchar(255) DEFAULT NULL,
  `type_barang` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `user_domain` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `komputer_nama` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `kondisi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `sophos` varchar(255) DEFAULT NULL,
  `landesk` varchar(255) DEFAULT NULL,
  `mutasi_asal` varchar(255) DEFAULT NULL,
  `mutasi_tujuan` varchar(255) DEFAULT NULL,
  `keterangan_mutasi` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mutasi`
--

LOCK TABLES `mutasi` WRITE;
/*!40000 ALTER TABLE `mutasi` DISABLE KEYS */;
INSERT INTO `mutasi` VALUES
(1,NULL,'3100000353301',NULL,'KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN-KH. MANSUR','PC','Lantai 1','Customer Service Staff',NULL,'10010855',NULL,'10.71.44.174','Baik, Terpakai',NULL,'7H6M0V3',NULL,'Iya','IT HO','PEKALONGAN-KH. MANSUR','','Januari','2024',NULL,'2024-09-15 07:48:09','Cabang Pekalongan'),
(2,NULL,'310000035331','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN-KH. MANSUR','PC','Lantai 1','Customer Service Staff','Fia Ulfa','10069680','PCDL23470096','10.71.44.172','Baik, Terpakai','','5H6M0V3','Ya','Ya','IT HO','PEKALONGAN-KH. MANSUR','','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(3,NULL,'310000035332','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN-KH. MANSUR','PC','Lantai 1','Teller','Yuli Aminin','10033004','PCDL234039','10.71.44.150','Baik, Terpakai','','5T6M0V3','Ya','Ya','IT HO','PEKALONGAN-KH. MANSUR','','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(4,NULL,'310000035333','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN-KH. MANSUR','PC','Lantai 1','Teller','Atri Fazrina Cahya Ningga','10088721','PCDL234040','10.71.44.151','Baik, Terpakai','','CZ5M0V3','Ya','Ya','IT HO','PEKALONGAN-KH. MANSUR','','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(5,NULL,'310000035334','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN - PEMALANG','PC','Lantai 1','Customer Service Staff','Iyis Susanti','10001499','PCDL23460314','10.71.182.155','Baik, Terpakai','','FH6M0V3','Ya','Ya','IT HO','PEKALONGAN - PEMALANG','','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(6,NULL,'310000035335','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN - PEMALANG','PC','Lantai 1','Teller','Tri Wahyu Agustin','10030277','PCDL23460315','10.71.182.154','Baik, Terpakai','','HR6M0V3','Ya','Ya','IT HO','PEKALONGAN - PEMALANG','','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(7,NULL,'310000036791','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN-KH. MANSUR','PC','Lantai 2','Data Admin Staff','Ariyani','10002734','PCDL23460301','10.71.44.62','Baik, Terpakai','','26DYKW3','Ya','Ya','IT HO','PEKALONGAN-KH. MANSUR','','Januari','2024',NULL,NULL,'Cabang Pekalongan');
/*!40000 ALTER TABLE `mutasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mutasi_now`
--

DROP TABLE IF EXISTS `mutasi_now`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mutasi_now` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `asset` varchar(255) DEFAULT NULL,
  `kode_fa` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `outlet_actual` varchar(255) DEFAULT NULL,
  `type_barang` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `user_domain` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `komputer_nama` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `kondisi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `sophos` varchar(255) DEFAULT NULL,
  `landesk` varchar(255) DEFAULT NULL,
  `mutasi_asal` varchar(255) DEFAULT NULL,
  `mutasi_tujuan` varchar(255) DEFAULT NULL,
  `keterangan_mutasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area_user` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mutasi_now`
--

LOCK TABLES `mutasi_now` WRITE;
/*!40000 ALTER TABLE `mutasi_now` DISABLE KEYS */;
INSERT INTO `mutasi_now` VALUES
(2,'310000035331','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN-KH. MANSUR','PC','Lantai 1','Customer Service Staff','Fia Ulfa','10069680','PCDL23470096','10.71.44.172','Baik, Terpakai','','5H6M0V3','Ya','Ya','IT HO','PEKALONGAN-KH. MANSUR','',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(3,'310000035332','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN-KH. MANSUR','PC','Lantai 1','Teller','Yuli Aminin','10033004','PCDL234039','10.71.44.150','Baik, Terpakai','','5T6M0V3','Ya','Ya','IT HO','PEKALONGAN-KH. MANSUR','',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(4,'310000035333','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN-KH. MANSUR','PC','Lantai 1','Teller','Atri Fazrina Cahya Ningga','10088721','PCDL234040','10.71.44.151','Baik, Terpakai','','CZ5M0V3','Ya','Ya','IT HO','PEKALONGAN-KH. MANSUR','',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(5,'310000035334','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN - PEMALANG','PC','Lantai 1','Customer Service Staff','Iyis Susanti','10001499','PCDL23460314','10.71.182.155','Baik, Terpakai','','FH6M0V3','Ya','Ya','IT HO','PEKALONGAN - PEMALANG','',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(6,'310000035335','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN - PEMALANG','PC','Lantai 1','Teller','Tri Wahyu Agustin','10030277','PCDL23460315','10.71.182.154','Baik, Terpakai','','HR6M0V3','Ya','Ya','IT HO','PEKALONGAN - PEMALANG','',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(7,'310000036791','','KOMPUTER, DELL OPTIPLEX 3000','PEKALONGAN-KH. MANSUR','PC','Lantai 2','Data Admin Staff','Ariyani','10002734','PCDL23460301','10.71.44.62','Baik, Terpakai','','26DYKW3','Ya','Ya','IT HO','PEKALONGAN-KH. MANSUR','',NULL,NULL,'Cabang Pekalongan',NULL,NULL);
/*!40000 ALTER TABLE `mutasi_now` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
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
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegawai2`
--

DROP TABLE IF EXISTS `pegawai2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai2`
--

LOCK TABLES `pegawai2` WRITE;
/*!40000 ALTER TABLE `pegawai2` DISABLE KEYS */;
/*!40000 ALTER TABLE `pegawai2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegawai3s`
--

DROP TABLE IF EXISTS `pegawai3s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai3s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai3s`
--

LOCK TABLES `pegawai3s` WRITE;
/*!40000 ALTER TABLE `pegawai3s` DISABLE KEYS */;
/*!40000 ALTER TABLE `pegawai3s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penghapusan`
--

DROP TABLE IF EXISTS `penghapusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penghapusan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal_perolehan` date DEFAULT NULL,
  `asset` varchar(255) DEFAULT NULL,
  `kode_fa_fams` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `acquis_val` varchar(255) DEFAULT NULL,
  `accum_dep` varchar(255) DEFAULT NULL,
  `book_val` varchar(255) DEFAULT NULL,
  `outlet_pencatatan` varchar(255) DEFAULT NULL,
  `outlet_actual` varchar(255) DEFAULT NULL,
  `type_barang` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `komputer_nama` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `kondisi` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `sophos` varchar(255) DEFAULT NULL,
  `landesk` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penghapusan`
--

LOCK TABLES `penghapusan` WRITE;
/*!40000 ALTER TABLE `penghapusan` DISABLE KEYS */;
INSERT INTO `penghapusan` VALUES
(1,'2011-12-23','310000010536','C 0097 0501 1412 00771','KOMPUTER, HP THIN CLIENT T 510','6069250.00','-6069250.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','TC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','CNW44407BC','Tidak','Tidak','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(2,'2011-12-23','310000010537','C 0097 0501 1412 00772','KOMPUTER, HP THIN CLIENT T 510','6069250.00','-6069250.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN - PEMALANG','TC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan DAS','CNW444073D','Tidak','Tidak','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(3,'2011-12-23','310000010615','C 0097 0501 1608 00595','KOMPUTER, LENOVO THIN CLIENT M600','5594333.00','-5594333.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','TC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','PCOBZ4BE','Tidak','Tidak','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(4,'2011-12-23','310000010618','C 0097 0501 1608 00598','KOMPUTER, LENOVO THIN CLIENT M600','5594333.00','-5594333.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','TC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','PCOBKK23V','Tidak','Tidak','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(5,'2011-12-23','310000011296','C 0408 0501 1004 00013','KOMPUTER, ACER M265','4924530.00','-4924530.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','PC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','PSV88060240040B2232700','Tidak','Tidak','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(6,'2011-12-23','310000011297','C 0408 0501 1007 00014','KOMPUTER, THINKCENTRE M58E E5400','4707905.00','-4707905.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','PC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','R84D1D0','Tidak','Tidak','Januari','2024',NULL,NULL,'Cabang Pekalongan'),
(7,'2014-12-23','310000011298','C 0408 0501 1007 00015','KOMPUTER, THINKCENTRE M58E E5400','4707905.00','-4707905.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','PC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','R84D1D1','Ya','Ya','Januari','2024',NULL,NULL,'Cabang Pekalongan');
/*!40000 ALTER TABLE `penghapusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penghapusan_now`
--

DROP TABLE IF EXISTS `penghapusan_now`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penghapusan_now` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal_perolehan` date DEFAULT NULL,
  `asset` varchar(255) DEFAULT NULL,
  `kode_fa_fams` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `acquis_val` varchar(255) DEFAULT NULL,
  `accum_dep` varchar(255) DEFAULT NULL,
  `book_val` varchar(255) DEFAULT NULL,
  `outlet_pencatatan` varchar(255) NOT NULL,
  `outlet_actual` varchar(255) NOT NULL,
  `type_barang` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `komputer_nama` varchar(255) DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `kondisi` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `sophos` varchar(255) DEFAULT NULL,
  `landesk` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `area_user` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penghapusan_now`
--

LOCK TABLES `penghapusan_now` WRITE;
/*!40000 ALTER TABLE `penghapusan_now` DISABLE KEYS */;
INSERT INTO `penghapusan_now` VALUES
(1,'2011-12-23','310000010536','C 0097 0501 1412 00771','KOMPUTER, HP THIN CLIENT T 510','6069250.00','-6069250.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','TC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','CNW44407BC','Tidak','Tidak',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(2,'2011-12-23','310000010537','C 0097 0501 1412 00772','KOMPUTER, HP THIN CLIENT T 510','6069250.00','-6069250.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN - PEMALANG','TC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan DAS','CNW444073D','Tidak','Tidak',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(3,'2011-12-23','310000010615','C 0097 0501 1608 00595','KOMPUTER, LENOVO THIN CLIENT M600','5594333.00','-5594333.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','TC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','PCOBZ4BE','Tidak','Tidak',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(4,'2011-12-23','310000010618','C 0097 0501 1608 00598','KOMPUTER, LENOVO THIN CLIENT M600','5594333.00','-5594333.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','TC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','PCOBKK23V','Tidak','Tidak',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(5,'2011-12-23','310000011296','C 0408 0501 1004 00013','KOMPUTER, ACER M265','4924530.00','-4924530.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','PC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','PSV88060240040B2232700','Tidak','Tidak',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(6,'2011-12-23','310000011297','C 0408 0501 1007 00014','KOMPUTER, THINKCENTRE M58E E5400','4707905.00','-4707905.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','PC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','R84D1D0','Tidak','Tidak',NULL,NULL,'Cabang Pekalongan',NULL,NULL),
(7,'2014-12-23','310000011298','C 0408 0501 1007 00015','KOMPUTER, THINKCENTRE M58E E5400','4707905.00','-4707905.00','0','PEKALONGAN-KH. MANSUR','PEKALONGAN-KH. MANSUR','PC','Lantai 1',NULL,NULL,NULL,NULL,NULL,'Rusak','depan ruang server','R84D1D1','Ya','Ya',NULL,NULL,'Cabang Pekalongan',NULL,NULL);
/*!40000 ALTER TABLE `penghapusan_now` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perpustakaan`
--

DROP TABLE IF EXISTS `perpustakaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perpustakaan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perpustakaan`
--

LOCK TABLES `perpustakaan` WRITE;
/*!40000 ALTER TABLE `perpustakaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `perpustakaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postmanytomanies`
--

DROP TABLE IF EXISTS `postmanytomanies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postmanytomanies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postmanytomanies`
--

LOCK TABLES `postmanytomanies` WRITE;
/*!40000 ALTER TABLE `postmanytomanies` DISABLE KEYS */;
/*!40000 ALTER TABLE `postmanytomanies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postmanytomany_tagmanytomany`
--

DROP TABLE IF EXISTS `postmanytomany_tagmanytomany`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postmanytomany_tagmanytomany` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `postmanytomany_id` bigint(20) unsigned NOT NULL,
  `tagmanytomany_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_tag_postmanytomany_id_foreign` (`postmanytomany_id`),
  KEY `post_tag_tagmanytomany_id_foreign` (`tagmanytomany_id`),
  CONSTRAINT `post_tag_postmanytomany_id_foreign` FOREIGN KEY (`postmanytomany_id`) REFERENCES `postmanytomanies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `post_tag_tagmanytomany_id_foreign` FOREIGN KEY (`tagmanytomany_id`) REFERENCES `tagmanytomanies` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postmanytomany_tagmanytomany`
--

LOCK TABLES `postmanytomany_tagmanytomany` WRITE;
/*!40000 ALTER TABLE `postmanytomany_tagmanytomany` DISABLE KEYS */;
/*!40000 ALTER TABLE `postmanytomany_tagmanytomany` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postonetomanies`
--

DROP TABLE IF EXISTS `postonetomanies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postonetomanies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postonetomanies`
--

LOCK TABLES `postonetomanies` WRITE;
/*!40000 ALTER TABLE `postonetomanies` DISABLE KEYS */;
/*!40000 ALTER TABLE `postonetomanies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profileonetoones`
--

DROP TABLE IF EXISTS `profileonetoones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profileonetoones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `useronetoone_id` bigint(20) unsigned NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profileonetoones_useronetoone_id_foreign` (`useronetoone_id`),
  CONSTRAINT `profileonetoones_useronetoone_id_foreign` FOREIGN KEY (`useronetoone_id`) REFERENCES `useronetoones` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profileonetoones`
--

LOCK TABLES `profileonetoones` WRITE;
/*!40000 ALTER TABLE `profileonetoones` DISABLE KEYS */;
/*!40000 ALTER TABLE `profileonetoones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rpegawai`
--

DROP TABLE IF EXISTS `rpegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rpegawai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rpegawai`
--

LOCK TABLES `rpegawai` WRITE;
/*!40000 ALTER TABLE `rpegawai` DISABLE KEYS */;
/*!40000 ALTER TABLE `rpegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tagmanytomanies`
--

DROP TABLE IF EXISTS `tagmanytomanies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tagmanytomanies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tagmanytomanies`
--

LOCK TABLES `tagmanytomanies` WRITE;
/*!40000 ALTER TABLE `tagmanytomanies` DISABLE KEYS */;
/*!40000 ALTER TABLE `tagmanytomanies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) NOT NULL,
  `article_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tags_article_id_index` (`article_id`),
  CONSTRAINT `tags_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telepon`
--

DROP TABLE IF EXISTS `telepon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telepon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor_telepon` varchar(20) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telepon`
--

LOCK TABLES `telepon` WRITE;
/*!40000 ALTER TABLE `telepon` DISABLE KEYS */;
/*!40000 ALTER TABLE `telepon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_manajemen`
--

DROP TABLE IF EXISTS `user_manajemen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_manajemen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `kukis` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_manajemen`
--

LOCK TABLES `user_manajemen` WRITE;
/*!40000 ALTER TABLE `user_manajemen` DISABLE KEYS */;
INSERT INTO `user_manajemen` VALUES
(1,'Randi Afif',2220006,'$2y$10$pm2zBP/K6JTlZNHY.KrmTOLQZ1ANtnpFYtHXDWOK.F7NyscgxhKVa','pengguna','Cabang Pekalongan',NULL,NULL,'2024-09-15 07:48:22'),
(2,'admin',101210072,'$2y$10$tWrSYfRTT0pYKVwce4zBhOt8H5pRLWcoKIk/tTzP/h5F/vM2PchJC','admin','Cabang Pekalongan',NULL,NULL,'2024-09-15 07:47:29'),
(3,'budi',12345678,'$2y$10$8O4rXY5r5wFp1QvpqqBUrei8NPvObrfijtbF/R6Cvco8SYWR7JphC','pengguna','Cabang Tegal',NULL,'2024-09-06 07:10:25','2024-09-06 07:15:25');
/*!40000 ALTER TABLE `user_manajemen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `useronetoones`
--

DROP TABLE IF EXISTS `useronetoones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `useronetoones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `useronetoones_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `useronetoones`
--

LOCK TABLES `useronetoones` WRITE;
/*!40000 ALTER TABLE `useronetoones` DISABLE KEYS */;
/*!40000 ALTER TABLE `useronetoones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usersbelajarmiddleware`
--

DROP TABLE IF EXISTS `usersbelajarmiddleware`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usersbelajarmiddleware` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','mahasiswa') NOT NULL DEFAULT 'mahasiswa',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usersbelajarmiddleware_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usersbelajarmiddleware`
--

LOCK TABLES `usersbelajarmiddleware` WRITE;
/*!40000 ALTER TABLE `usersbelajarmiddleware` DISABLE KEYS */;
/*!40000 ALTER TABLE `usersbelajarmiddleware` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-17  4:50:26
