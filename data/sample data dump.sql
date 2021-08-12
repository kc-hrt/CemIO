# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.38)
# Database: openCemetery
# Generation Time: 2016-06-25 15:54:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table blocks
# ------------------------------------------------------------

LOCK TABLES `blocks` WRITE;
/*!40000 ALTER TABLE `blocks` DISABLE KEYS */;

INSERT INTO `blocks` (`id`, `section_id`, `cemetery_ID`, `block`, `block_desc`)
VALUES
	(1,1,1,'1','Block 1'),
	(2,1,1,'2','Block 2'),
	(3,1,1,'3','Block 3'),
	(4,1,1,'4','Block 4'),
	(5,1,1,'5','Block 5'),
	(6,1,1,'6','Block 6 (Road)'),
	(7,1,1,'7','Block 7'),
	(8,1,1,'8','Block 8'),
	(9,1,1,'9','Block 9'),
	(10,1,1,'10','Block 10'),
	(11,1,1,'11','Block 11'),
	(12,1,1,'12','Block 12'),
	(13,1,1,'13','Block 13'),
	(14,1,1,'14','Block 14'),
	(15,1,1,'15','Block 15'),
	(16,1,1,'16','Block 16'),
	(17,1,1,'17','Block 17'),
	(18,1,1,'18','Block 18'),
	(19,1,1,'19','Block 19'),
	(20,1,1,'20','Block 20'),
	(21,1,1,'21','Block 21'),
	(22,1,1,'22','Block 22'),
	(23,1,1,'23','Block 23'),
	(24,1,1,'24','Block 24'),
	(25,1,1,'25','Block 25'),
	(26,1,1,'26','Block 26'),
	(27,1,1,'27','Block 27'),
	(28,1,1,'28','Block 28'),
	(29,1,1,'29','Block 29'),
	(30,1,1,'30','Block 30'),
	(31,1,1,'31','Block 31'),
	(32,1,1,'32','Block 32'),
	(33,1,1,'33','Block 33'),
	(34,1,1,'34','Block 34'),
	(35,1,1,'35','Block 35'),
	(36,1,1,'36','Block 36'),
	(37,1,1,'37','Block 37'),
	(38,1,1,'38','Block 38'),
	(39,1,1,'39','Block 39'),
	(40,1,1,'40','Block 40'),
	(41,1,1,'41','Block 41'),
	(42,1,1,'42','Block 42'),
	(43,1,1,'43','Block 43'),
	(44,1,1,'44','Block 44'),
	(45,1,1,'45','Block 45'),
	(46,1,1,'46','Block 46'),
	(47,1,1,'47','Block 47'),
	(48,1,1,'48','Block 48'),
	(49,1,1,'49','Block 49'),
	(50,1,1,'50','Block 50'),
	(51,1,1,'51','Block 51'),
	(52,1,1,'52','Block 52'),
	(53,1,1,'53','Block 53'),
	(54,1,1,'54','Block 54'),
	(55,1,1,'55','Block 55'),
	(56,1,1,'56','Block 56'),
	(57,1,1,'57','Block 57'),
	(58,1,1,'58','Block 58'),
	(59,1,1,'59','Block 59'),
	(60,1,1,'60','Block 60'),
	(61,1,1,'61','Block 61'),
	(62,1,1,'62','Block 62'),
	(63,1,1,'63','Block 63'),
	(64,1,1,'64','Block 64'),
	(65,1,1,'65','Block 65'),
	(66,1,1,'66','Block 66'),
	(67,1,1,'67','Block 67'),
	(68,1,1,'68','Block 68'),
	(69,1,1,'69','Block 69'),
	(70,1,1,'70','Block 70'),
	(71,1,1,'71','Block 71'),
	(72,1,1,'72','Block 72'),
	(73,1,1,'73','Block 73'),
	(74,1,1,'74','Block 74'),
	(75,1,1,'75','Block 75'),
	(76,1,1,'76','Block 76'),
	(77,1,1,'77','Block 77'),
	(78,1,1,'78','Block 78'),
	(79,1,1,'79','Block 79'),
	(80,1,1,'80','Block 80'),
	(81,1,1,'81','Block 81'),
	(82,1,1,'82','Block 82'),
	(83,1,1,'83','Block 83'),
	(84,1,1,'84','Block 84'),
	(85,1,1,'85','Block 85'),
	(86,1,1,'86','Block 86'),
	(87,1,1,'87','Block 87'),
	(88,1,1,'88','Block 88'),
	(89,1,1,'89','Block 89'),
	(90,1,1,'90','Block 90'),
	(91,1,1,'91','Block 91'),
	(92,1,1,'92','Block 92'),
	(93,1,1,'93','Block 93'),
	(94,1,1,'94','Block 94'),
	(95,1,1,'95','Block 95'),
	(96,1,1,'96','Block 96'),
	(97,1,1,'97','Block 97'),
	(98,1,1,'98','Block 98'),
	(99,1,1,'99','Block 99'),
	(100,1,1,'100','Block 100'),
	(101,1,1,'101','Block 101'),
	(102,1,1,'102','Block 102'),
	(103,1,1,'103','Block 103'),
	(104,1,1,'104','Block 104'),
	(105,1,1,'105','Block 105'),
	(106,1,1,'106','Block 106'),
	(107,1,1,'107','Block 107'),
	(108,1,1,'108','Block 108'),
	(109,1,1,'109','Block 109'),
	(110,1,1,'110','Block 110'),
	(111,1,1,'111','Block 111'),
	(112,1,1,'112','Block 112'),
	(113,1,1,'113','Block 113'),
	(114,1,1,'114','Block 114'),
	(115,1,1,'115','Block 115'),
	(116,1,1,'116','Block 116'),
	(117,1,1,'117','Block 117'),
	(118,1,1,'118','Block 118'),
	(119,1,1,'119','Block 119'),
	(120,1,1,'120','Block 120'),
	(121,1,1,'121','Block 121'),
	(122,1,1,'122','Block 122'),
	(123,1,1,'123','Block 123'),
	(124,1,1,'124','Block 124'),
	(125,1,1,'125','Block 125'),
	(126,1,1,'126','Block 126'),
	(127,1,1,'127','Block 127'),
	(128,1,1,'128','Block 128'),
	(129,1,1,'129','Block 129'),
	(130,1,1,'130','Block 130'),
	(131,1,1,'131','Block 131'),
	(132,1,1,'132','Block 132'),
	(133,1,1,'133','Block 133'),
	(134,1,1,'134','Block 134'),
	(135,1,1,'135','Block 135'),
	(136,1,1,'136','Block 136'),
	(137,1,1,'137','Block 137'),
	(138,1,1,'138','Block 138'),
	(139,1,1,'139','Block 139'),
	(140,1,1,'140','Block 140'),
	(141,1,1,'141','Block 141'),
	(142,1,1,'142','Block 142'),
	(143,1,1,'143','Block 143'),
	(144,1,1,'144','Block 144'),
	(145,1,1,'145','Block 145'),
	(146,1,1,'146','Block 146'),
	(147,1,1,'147','Block 147'),
	(148,1,1,'148','Block 148'),
	(149,1,1,'149','Block 149'),
	(150,1,1,'150','Block 150');

/*!40000 ALTER TABLE `blocks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cemetery
# ------------------------------------------------------------

LOCK TABLES `cemetery` WRITE;
/*!40000 ALTER TABLE `cemetery` DISABLE KEYS */;

INSERT INTO `cemetery` (`id`, `cemetery_name`, `cemetery_description`)
VALUES
	(1,'Hart Cemetery','Hart Cemetery, Hart Texas');

/*!40000 ALTER TABLE `cemetery` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table deceased
# ------------------------------------------------------------

LOCK TABLES `deceased` WRITE;
/*!40000 ALTER TABLE `deceased` DISABLE KEYS */;

INSERT INTO `deceased` (`id`, `property_id`, `firstname`, `middlename`, `lastname`, `prefix`, `suffix`, `sex`, `birth_date`, `death_date`, `burial_date`, `birthplace`, `address`, `city`, `state`, `zip`, `deathplace`, `cause`, `race`, `fun_dir_id`, `mort`, `ssn`, `notes`, `obituary`, `headstone_type`, `headstone_material`, `headstone_image`)
VALUES
	('o9bk2e','0101-007-01','James','L.','Lee',NULL,'','Male','0000-00-00','0000-00-00',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL),
	('o9blws','0101-007-02','Rebba','Lee','Doman',NULL,'','Female','1929-03-08','2004-12-23',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL),
	('o9bm0a','0101-007-03','Juan','','Rangel',NULL,'','Male','0000-00-00','1966-08-02',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL),
	('o9bm7t','0101-007-04','Baby','','Rubalacaba',NULL,'','','1966-09-01','1966-09-01',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL),
	('o9bmaq','0101-007-05','Rowena','','Rubalacaba',NULL,'','','1960-12-18','1963-02-21',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL),
	('o9bmbu','0101-007-06','Santos','','Niebes',NULL,'Jr.','','1965-08-03','1965-08-03',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL),
	('o9bmdi','0101-007-07','Petra','','Rubalacaba',NULL,'','','1918-05-02','1965-08-08',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL),
	('o9bmf4','0101-007-08','Jessie','','Rubalacaba',NULL,'','','1900-08-20','1978-02-23',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL),
	('o9bmg1','0101-007-09','Mary','','Rubalacaba',NULL,'','','0000-00-00','1995-05-20',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL),
	('o9bmhf','0101-007-10','Bessie','MacRubalacaba','Menchaco',NULL,'','','0000-00-00','1992-10-05',NULL,'',NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `deceased` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table headstone
# ------------------------------------------------------------



# Dump of table lot_type
# ------------------------------------------------------------

LOCK TABLES `lot_type` WRITE;
/*!40000 ALTER TABLE `lot_type` DISABLE KEYS */;

INSERT INTO `lot_type` (`id`, `lot_type`, `lot_description`)
VALUES
	(1,'Standard','Standard Ground Level');

/*!40000 ALTER TABLE `lot_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nametable1
# ------------------------------------------------------------

LOCK TABLES `nametable1` WRITE;
/*!40000 ALTER TABLE `nametable1` DISABLE KEYS */;

INSERT INTO `nametable1` (`id`, `lname`, `fname`)
VALUES
	(21410,'Block 1','1'),
	(21411,'Block 2','1'),
	(21412,'Block 3','1'),
	(21413,'Block 4','1'),
	(21414,'Block 5','1'),
	(21415,'Block 6','1'),
	(21416,'Block 7','1'),
	(21417,'Block 8','1'),
	(21418,'Block 9','1'),
	(21419,'Block 10','1'),
	(21420,'Block 11','1'),
	(21421,'Block 12','1'),
	(21422,'Block 13','1'),
	(21423,'Block 14','1'),
	(21424,'Block 15','1'),
	(21425,'',''),
	(21426,'montgomery','testical');

/*!40000 ALTER TABLE `nametable1` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table people
# ------------------------------------------------------------



# Dump of table property
# ------------------------------------------------------------

LOCK TABLES `property` WRITE;
/*!40000 ALTER TABLE `property` DISABLE KEYS */;

INSERT INTO `property` (`id`, `owner_id`, `cemetery_id`, `section`, `block`, `lot`, `lot_type`, `deed_book`, `deed_page`, `deed_url`, `lat`, `lng`, `map_url`, `photo_url`, `headimg_url`, `notes`)
VALUES
	('0101-007-01',NULL,1,1,7,'1','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	('0101-007-02',NULL,1,1,7,'2','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	('0101-007-03',NULL,1,1,7,'3','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	('0101-007-04',NULL,1,1,7,'4','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	('0101-007-05',NULL,1,1,7,'5','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	('0101-007-06',NULL,1,1,7,'6','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	('0101-007-07',NULL,1,1,7,'7','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	('0101-007-08',NULL,1,1,7,'8','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	('0101-007-09',NULL,1,1,7,'9','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),
	('0101-007-10',NULL,1,1,7,'10','Standard',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'');

/*!40000 ALTER TABLE `property` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sections
# ------------------------------------------------------------

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;

INSERT INTO `sections` (`id`, `cemetery_id`, `section_name`, `section_description`)
VALUES
	(1,1,'Main','Main Section');

/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
