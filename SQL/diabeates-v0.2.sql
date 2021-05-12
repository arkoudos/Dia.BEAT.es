-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 11:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diabeates`
--
CREATE DATABASE IF NOT EXISTS `diabeates` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `diabeates`;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `id` int(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `ydat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

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
(14, 'Σαλάτα με 1 μικρό τόνο νερού ή 90 gr γαρίδες + 1/2 φλυτζάνι καλαμπόκι', 30),
(15, '1 μικρό μπιφτέκι κοτόπουλο με 1 μέτρια πατάτα jacket(180 gr)', 30),
(16, '90 gr καλαμαράκια κοκκινιστά με 1 φλυτζάνι Ρύζι(150 gr)', 30);

-- --------------------------------------------------------

--
-- Table structure for table `sugardata`
--

DROP TABLE IF EXISTS `sugardata`;
CREATE TABLE `sugardata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `sugar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sugardata`
--

INSERT INTO `sugardata` (`id`, `user`, `sugar`) VALUES
(1, '2', 100),
(2, '2', 100),
(3, '2', 256),
(4, '2', 235),
(5, '2', 365);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL DEFAULT 'unknown',
  `surname` varchar(35) NOT NULL DEFAULT 'unknown',
  `reg_date` datetime NOT NULL,
  `email` varchar(30) NOT NULL DEFAULT 'unknown'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `surname`, `reg_date`, `email`) VALUES
('2', '$2y$10$mqCSzN50keRqaftBpPZAEeAYi7j5GQwtt3VqIGy1xvpVjHWIk3Dh6', '2', '2', '2021-04-20 10:50:26', '2@2'),
('christosky', '$2y$10$M.wzBI6/Uu5ZbeS7.pjrwOcTLJKzWalUh25Qlvls7uCSab8FOss/C', 'christos', 'kyriacou', '2021-04-18 16:34:10', '1@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugardata`
--
ALTER TABLE `sugardata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sugardata`
--
ALTER TABLE `sugardata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
