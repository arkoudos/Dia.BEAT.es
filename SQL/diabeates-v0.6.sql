-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for diabeates
DROP DATABASE IF EXISTS `diabeates`;
CREATE DATABASE IF NOT EXISTS `diabeates` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `diabeates`;

-- Dumping structure for table diabeates.contactdata
DROP TABLE IF EXISTS `contactdata`;
CREATE TABLE IF NOT EXISTS `contactdata` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- Dumping data for table diabeates.contactdata: ~9 rows (approximately)
DELETE FROM `contactdata`;
/*!40000 ALTER TABLE `contactdata` DISABLE KEYS */;
INSERT INTO `contactdata` (`id`, `user`, `message`) VALUES
	(1, '2', 'test1'),
	(2, '2', 'test2'),
	(3, '2', 'test3'),
	(10, '', 'try2'),
	(11, '', 'gfbfgbhg'),
	(12, '1', 'dfb'),
	(13, '1', 'test3'),
	(14, '1', 'test56'),
	(15, 't', 'test'),
	(16, '1', 'ww');
/*!40000 ALTER TABLE `contactdata` ENABLE KEYS */;

-- Dumping structure for table diabeates.donatedata
DROP TABLE IF EXISTS `donatedata`;
CREATE TABLE IF NOT EXISTS `donatedata` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `card` int(255) NOT NULL,
  `donateamount` int(255) NOT NULL,
  `cvv` int(255) NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table diabeates.donatedata: ~13 rows (approximately)
DELETE FROM `donatedata`;
/*!40000 ALTER TABLE `donatedata` DISABLE KEYS */;
INSERT INTO `donatedata` (`id`, `user`, `card`, `donateamount`, `cvv`, `date`) VALUES
	(1, '1', 0, 250, 0, 0),
	(2, '1', 0, 25000, 0, 0),
	(3, '1', 0, 0, 0, 0),
	(4, '1', 2585255, 2500, 0, 0),
	(5, '1', 2147483647, 32, 0, 0),
	(6, '1', 45, -50, 0, 0),
	(7, '1', 2342, 23345, 345, 0),
	(8, '1', 4, 255, 436, 0),
	(9, '1', 234, 324, 345, 0),
	(10, '1', 435, 4534, 435345, 43543),
	(11, '1', 50, 50, 50, 50),
	(12, 't', 180, 80, 234, 234),
	(13, '1', 13, 10, 8, 0);
/*!40000 ALTER TABLE `donatedata` ENABLE KEYS */;

-- Dumping structure for table diabeates.events
DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table diabeates.events: ~2 rows (approximately)
DELETE FROM `events`;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
	(1, 'γεμιστα', '2021-05-13 00:00:00', '2021-05-14 00:00:00'),
	(4, 'burger', '2021-05-14 00:00:00', '2021-05-15 00:00:00');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

-- Dumping structure for table diabeates.food
DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `food` varchar(255) NOT NULL,
  `ydat` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Dumping data for table diabeates.food: ~16 rows (approximately)
DELETE FROM `food`;
/*!40000 ALTER TABLE `food` DISABLE KEYS */;
INSERT INTO `food` (`id`, `food`, `ydat`) VALUES
	(1, 'Nescafe με ένα ποτήρι γάλα(240ml)', 15),
	(2, '60 gr κοτόπουλο φιλέτο με λευκή σάλτσα με 1 και 1/3 φλυτζάνι Ρύζι (200 gr)', 60),
	(3, '90 gr σολομό στον φούρνο με 1 και 1/3 φλυτζάνι Ρύζι (200 gr)', 60),
	(4, '1,5 φλυτζάνι Φακόρυζο (270 gr) ', 45),
	(5, '1 μπάρα δημητριακών ολικής αλέσεως ', 15),
	(6, 'Παϊδάκια στην σχάρα με 2 φλυτζάνια Πουργούρι(320 gr)', 60),
	(7, '1 κεσεδάκι γιαούρτι φρούτου(200 gr)', 18),
	(8, '2 φέτες ψωμί ολικής αλέσεως', 30),
	(9, '2 μερίδες φρούτου ', 30),
	(10, '1 αλμυρή κρέπα', 30),
	(11, 'Παγωτό (φόρμα με 1 μπάλα)', 30),
	(12, 'Γύρο κοτόπουλο σε πίττα με τζατζίκι', 30),
	(13, 'Σαλάτα με 6 καβουροπόδαρα', 15),
	(14, '1 μικρό μπιφτέκι κοτόπουλο με 1 μέτρια πατάτα jacket(180 gr)', 30),
	(15, '90 gr καλαμαράκια κοκκινιστά με 1 φλυτζάνι Ρύζι(150 gr)', 30),
	(16, 'Νερό', 0);
/*!40000 ALTER TABLE `food` ENABLE KEYS */;

-- Dumping structure for table diabeates.helpdata
DROP TABLE IF EXISTS `helpdata`;
CREATE TABLE IF NOT EXISTS `helpdata` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `help` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table diabeates.helpdata: ~3 rows (approximately)
DELETE FROM `helpdata`;
/*!40000 ALTER TABLE `helpdata` DISABLE KEYS */;
INSERT INTO `helpdata` (`id`, `help`, `user`) VALUES
	(1, 'dfghhgfh', '2'),
	(4, 'try2', '1'),
	(5, 'try3', '1');
/*!40000 ALTER TABLE `helpdata` ENABLE KEYS */;

-- Dumping structure for table diabeates.measurement
DROP TABLE IF EXISTS `measurement`;
CREATE TABLE IF NOT EXISTS `measurement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diabetic` varchar(35) DEFAULT NULL,
  `measurement` float(5,2) NOT NULL,
  `start_event` datetime DEFAULT NULL,
  `end_event` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Dumping data for table diabeates.measurement: ~12 rows (approximately)
DELETE FROM `measurement`;
/*!40000 ALTER TABLE `measurement` DISABLE KEYS */;
INSERT INTO `measurement` (`id`, `diabetic`, `measurement`, `start_event`, `end_event`) VALUES
	(14, NULL, 200.00, '2021-05-26 00:00:00', '2021-05-27 00:00:00'),
	(15, NULL, 180.00, '2021-05-27 10:00:00', '2021-05-27 10:30:00'),
	(16, NULL, 300.00, '2021-05-27 11:30:00', '2021-05-27 12:00:00'),
	(17, NULL, 280.00, '2021-05-27 12:00:00', '2021-05-27 12:30:00'),
	(18, NULL, 320.00, '2021-05-27 13:00:00', '2021-05-27 13:30:00'),
	(19, NULL, 220.00, '2021-05-27 14:00:00', '2021-05-27 14:30:00'),
	(20, NULL, 140.00, '2021-05-27 15:00:00', '2021-05-27 15:30:00'),
	(21, NULL, 210.00, '2021-05-27 16:00:00', '2021-05-27 16:30:00'),
	(22, NULL, 132.00, '2021-05-27 17:00:00', '2021-05-27 17:30:00'),
	(23, NULL, 500.00, '2021-05-25 00:00:00', '2021-05-26 00:00:00'),
	(24, NULL, 800.00, '2021-05-19 00:00:00', '2021-05-20 00:00:00'),
	(25, NULL, 25.00, '2021-05-31 00:00:00', '2021-06-01 00:00:00');
/*!40000 ALTER TABLE `measurement` ENABLE KEYS */;

-- Dumping structure for table diabeates.sugardata
DROP TABLE IF EXISTS `sugardata`;
CREATE TABLE IF NOT EXISTS `sugardata` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `sugar` int(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `ypog` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=utf8;

-- Dumping data for table diabeates.sugardata: ~88 rows (approximately)
DELETE FROM `sugardata`;
/*!40000 ALTER TABLE `sugardata` DISABLE KEYS */;
INSERT INTO `sugardata` (`id`, `user`, `sugar`, `ans`, `ypog`) VALUES
	(126, '2', 100, '0', 0),
	(127, '2', 140, '0.8', 0),
	(128, '2', 180, '1.6', 0),
	(129, '2', 200, '2', 0),
	(130, '2', 390, '5.8 - ΚΙΝΔΥΝΟΣ ', 0),
	(133, '2', 3800, '74 - ΚΙΝΔΥΝΟΣ ', 0),
	(137, '2', 101, '0.02', 0),
	(139, '2', 105, '0.1', 0),
	(140, '2', 108, '0.16', 0),
	(142, '2', 80, '0', 20),
	(143, '2', 80, '0', 20),
	(144, '2', 70, '0', 30),
	(145, '', 150, '1', 0),
	(146, '', 200, '2', 0),
	(147, '', 12, '0', 88),
	(148, '', 121, '0.42', 0),
	(149, '', 200, '2', 0),
	(150, '2', 250, '3', 0),
	(151, '1', 900, '16 - ΚΙΝΔΥΝΟΣ ', 0),
	(152, '1', 40, '0', 60),
	(153, '1', 380, '5.6 - ΚΙΝΔΥΝΟΣ ', 0),
	(154, '1', 250, '3', 0),
	(155, '1', 40, '0', 60),
	(156, '1', 140, '0.8', 0),
	(157, '1', 210, '2.2', 0),
	(158, '1', 5, '0', 95),
	(159, '1', 150, '1', 0),
	(160, '1', 193, '1.86', 0),
	(161, '1', 79, '0', 21),
	(162, '1', 390, '5.8 - ΚΙΝΔΥΝΟΣ ', 0),
	(163, '1', 600, '10 - ΚΙΝΔΥΝΟΣ ', 0),
	(164, '1', 70, '0', 30),
	(165, '1', 70, '0', 30),
	(166, '1', 150, '1', 0),
	(167, '1', 79, '0', 21),
	(168, '1', 79, '0', 21),
	(169, '1', 429, '6.58 - ΚΙΝΔΥΝΟΣ ', 0),
	(170, '1', 40, '0', 60),
	(171, '1', 40, '0', 60),
	(172, '1', 182, '1.64', 0),
	(173, '1', 70, '0', 30),
	(174, '1', 60, '0', 40),
	(175, '1', 60, '0', 40),
	(176, '1', 45, '0', 55),
	(177, '1', 60, '0', 40),
	(178, '1', 55, '0', 45),
	(179, '1', 50, '0', 50),
	(180, '1', 40, '0', 60),
	(181, '1', 50, '0', 50),
	(182, '1', 40, '0', 60),
	(183, '1', 50, '0', 50),
	(184, '1', 10, '0', 90),
	(185, '1', 70, '0', 30),
	(186, '1', 18, '0', 82),
	(187, '1', 14, '0', 86),
	(188, '1', 4, '0', 96),
	(189, '1', 5, '0', 95),
	(190, '1', 20, '0', 80),
	(191, '1', 15000, '298 - ΚΙΝΔΥΝΟΣ ', 0),
	(192, '1', 160, '1.2', 0),
	(193, '1', 800, '14 - ΚΙΝΔΥΝΟΣ ', 0),
	(194, '1', 150, '1', 0),
	(195, '1', 70, '0', 30),
	(196, '1', 70, '0', 30),
	(197, '1', 120, '0.4', 0),
	(198, '1', 70, '0', 30),
	(199, '1', 0, '0', 100),
	(200, '1', 100, '0', 0),
	(201, '1', 120, '0.4', 0),
	(202, '1', 80, '0', 20),
	(203, '1', 170, '1.4', 0),
	(204, '1', 60, '0', 40),
	(205, '1', 0, '0', 100),
	(206, '1', 80, '0', 20),
	(207, '1', 0, '0', 100),
	(208, '1', 80, '0', 20),
	(209, '1', 804, '14.08 - ΚΙΝΔΥΝΟΣ ', 0),
	(210, '1', 90, '0', 10),
	(211, '1', 85, '0', 15),
	(212, '1', 150, '1', 0),
	(213, '1', 220, '2.4', 0),
	(214, '1', 0, '0', 100),
	(215, '1', 150, '1', 0),
	(216, '1', 180, '1.6', 0),
	(217, '1', 70, '0', 30),
	(218, '1', 95, '0', 5),
	(219, '1', 80, '0', 20),
	(220, '1', 80, '0', 20),
	(221, '1', 200, '2', 0),
	(222, '1', 2147483647, '199999999998 - ΚΙΝΔΥΝΟΣ ', 0),
	(223, '1', 10, '0', 90),
	(224, '1', 1821, '34.42 - ΚΙΝΔΥΝΟΣ ', 0);
/*!40000 ALTER TABLE `sugardata` ENABLE KEYS */;

-- Dumping structure for table diabeates.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `eidos` varchar(255) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL DEFAULT 'unknown',
  `surname` varchar(35) NOT NULL DEFAULT 'unknown',
  `reg_date` datetime NOT NULL,
  `email` varchar(30) NOT NULL DEFAULT 'unknown',
  `age` int(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `height` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `measure` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `foodprog` varchar(255) NOT NULL,
  `exprog` varchar(255) NOT NULL,
  `activated` enum('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table diabeates.user: ~8 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`eidos`, `username`, `password`, `name`, `surname`, `reg_date`, `email`, `age`, `weight`, `height`, `type`, `measure`, `number`, `address`, `speciality`, `foodprog`, `exprog`, `activated`) VALUES
	('user', '1', '$2y$10$rCQ92GWNS0e22uqKEB4wEOnDanjUleMB6Z7zwLvDgx/UDHvShYEiK', 'w', 'w', '2021-05-12 18:10:40', 'w@w', 45, 54, 54, '2', 'mmol/L', 0, 'test', '', '', '', 'true'),
	('doctor', '2', '$2y$10$DEaeTQs0tm224J7Qi46hEOOX7gjveToHRzVwUs3lZ26vThhY4iXt.', '2', '2', '2021-05-12 18:12:20', '2@2', 2, 0, 0, '', '', 2, '2', '2', '', '', 'true'),
	('user', '3', '$2y$10$D/aLSeRHxUgSpweCVmA8h.LHnXhTarKzA6AtGrBs3dHDVQRvfDFgK', '33', '3', '2021-05-12 18:34:54', '3@3', 345, 3, 3, 'Άλλο', 'mg/dL', 0, '', '', '', '', 'true'),
	('user', '33', '$2y$10$A1LCCqNERBT8oqLD6VZ.kOpgd12FOkob/2r1Pg.uZymrGTyfpJxdK', '33', '33', '2021-05-27 20:55:15', '33@33', 33, 33, 33, '2', 'mmol/L', 0, '33', '', 'program1', 'program3', 'true'),
	('doctor', '4', '$2y$10$/mOtG/ryRlgkT0kIZqTig.ZQAzVFuRXBfmkvEhIQhEzafXzxhge72', '4', '4', '2021-05-12 18:33:14', '4@4', 4, 0, 0, '', '', 4, '4', '4', '', '', 'true'),
	('user', '5', '$2y$10$A7XmZ/xNPCllG9v0zZQr8.8Fw0Wbuv8T3Enap2a9tng8iK.4GQOnK', '5', '5', '2021-05-12 20:02:39', '5@5', 5, 5, 5, '', 'mmol/L', 0, '', '', '', '', 'true'),
	('admin', 'admin', '$2y$10$dFLfmUVM7OxTULD8dzYWieYL7FUxviT9jF2r.9/8GlhdUrAeIuJXW', 'admin', 'admin', '2021-06-02 15:31:40', 'admin@admin', 0, 0, 0, '', '', 0, 'admin', 'admin', '', '', 'false'),
	('doctor', 't', '$2y$10$ya6pZejyvMpwDCcMRr5B7.6E7P7qgICPQvMYpwVrpfgSvx/DIQbFG', 'b', 'b', '2021-05-12 21:24:59', 'b@b', 987, 0, 0, '', 'mmol/L', 0, 'ih;kj', 'iuhoj', '', '', 'true');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
