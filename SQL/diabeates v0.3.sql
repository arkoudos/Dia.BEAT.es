-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 10:41 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `contactdata`
--

CREATE TABLE `contactdata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactdata`
--

INSERT INTO `contactdata` (`id`, `user`, `message`) VALUES
(1, '2', 'test1'),
(2, '2', 'test2'),
(3, '2', 'test3'),
(6, 't', 'test'),
(7, 't', 'test5');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(1, 'γεμιστα', '2021-05-13 00:00:00', '2021-05-14 00:00:00'),
(2, 'φασολια', '2021-05-13 00:00:00', '2021-05-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

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

CREATE TABLE `sugardata` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `sugar` int(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `ypog` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sugardata`
--

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
(157, '1', 210, '2.2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
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
  `speciality` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`eidos`, `username`, `password`, `name`, `surname`, `reg_date`, `email`, `age`, `weight`, `height`, `type`, `measure`, `number`, `address`, `speciality`) VALUES
('user', '1', '$2y$10$rCQ92GWNS0e22uqKEB4wEOnDanjUleMB6Z7zwLvDgx/UDHvShYEiK', '1', '1', '2021-05-12 18:10:40', '1@1', 1, 1, 1, 'Άλλο', 'mmol/L', 0, '', ''),
('doctor', '2', '$2y$10$DEaeTQs0tm224J7Qi46hEOOX7gjveToHRzVwUs3lZ26vThhY4iXt.', '2', '2', '2021-05-12 18:12:20', '2@2', 2, 0, 0, '', '', 2, '2', '2'),
('user', '3', '$2y$10$D/aLSeRHxUgSpweCVmA8h.LHnXhTarKzA6AtGrBs3dHDVQRvfDFgK', '33', '3', '2021-05-12 18:34:54', '3@3', 345, 3, 3, 'Άλλο', 'mg/dL', 0, '', ''),
('doctor', '4', '$2y$10$/mOtG/ryRlgkT0kIZqTig.ZQAzVFuRXBfmkvEhIQhEzafXzxhge72', '4', '4', '2021-05-12 18:33:14', '4@4', 4, 0, 0, '', '', 4, '4', '4'),
('user', '5', '$2y$10$A7XmZ/xNPCllG9v0zZQr8.8Fw0Wbuv8T3Enap2a9tng8iK.4GQOnK', '5', '5', '2021-05-12 20:02:39', '5@5', 5, 5, 5, '', 'mmol/L', 0, '', ''),
('doctor', 't', '$2y$10$ya6pZejyvMpwDCcMRr5B7.6E7P7qgICPQvMYpwVrpfgSvx/DIQbFG', 't', 't', '2021-05-12 21:24:59', 't@t', 45, 0, 0, '', '', 345, 'sdfgbv', 'gfdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdata`
--
ALTER TABLE `contactdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `contactdata`
--
ALTER TABLE `contactdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sugardata`
--
ALTER TABLE `sugardata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

DROP TABLE measurement ;
CREATE TABLE measurement (
   id int(11) NOT NULL AUTO_INCREMENT,
   diabetic VARCHAR(35) NOT NULL,
   measurement FLOAT(5,2) NOT NULL,
   start_event datetime NOT NULL,
   end_event   datetime NOT NULL,
   PRIMARY KEY (id,diabetic),
   FOREIGN KEY (diabetic) REFERENCES user(username)
   ON DELETE CASCADE ON UPDATE CASCADE
) engine=InnoDB;