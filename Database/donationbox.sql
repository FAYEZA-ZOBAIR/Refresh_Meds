-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 10:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donationbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dis_id` int(11) NOT NULL,
  `dis_name` varchar(100) NOT NULL,
  `div_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dis_id`, `dis_name`, `div_id`) VALUES
(1, 'Agra',1),
(2, 'Aligarh',2),
(3, 'Allahabad',17),
(4, 'Ambedkar Nagar',3),
(5, 'Amethi (Chatrapati Sahuji Mahraj Nagar)',3),
(6, 'Amroha (J.P. Nagar)',14),
(7, 'Auraiya',10),
(8, 'Azamgarh',4),
(9, 'Baghpat',12),
(10, 'Bahraich',7),
(11, 'Ballia',4),
(12, 'Balrampur',7),
(13, 'Banda',17),
(14, 'Barabanki',3),
(15, 'Bareilly',5),
(16, 'Basti',6),
(17, 'Bhadohi',17),
(18, 'Bijnor',14),
(19, 'Budaun',5),
(20, 'Bulandshahr',12),
(21, 'Chandauli',18),
(22, 'Chitrakoot',17),
(23, 'Deoria',8),
(24, 'Etah',2),
(25, 'Etawah',10),
(26, 'Faizabad',17),
(27, 'Farrukhabad',10),
(28, 'Fatehpur',15),
(29, 'Firozabad',1),
(30, 'Gautam Buddha Nagar',12),
(31, 'Ghaziabad',12),
(32, 'Ghazipur',18),
(33, 'Gonda',7),
(34, 'Gorakhpur',8),
(35, 'Hamirpur',17),
(36, 'Hapur (Panchsheel Nagar)',12),
(37, 'Hardoi',11),
(38, 'Hathras',2),
(39, 'Jalaun',9),
(40, 'Jaunpur',18),
(41, 'Jhansi',9),
(42, 'Kannauj',10),
(43, 'Kanpur Dehat',10),
(44, 'Kanpur Nagar',10),
(45, 'Kanshiram Nagar (Kasganj)',2),
(46, 'Kaushambi',15),
(47, 'Kushinagar (Padrauna)',8),
(48, 'Lakhimpur - Kheri',11),
(49, 'Lalitpur',9),
(50, 'Lucknow',11),
(51, 'Maharajganj',8),
(52, 'Mahoba',7),
(53, 'Mainpuri',1),
(54, 'Mathura',1),
(55, 'Mau',4),
(56, 'Meerut',12),
(57, 'Mirzapur',13),
(58, 'Moradabad',14),
(59, 'Muzaffarnagar',16),
(60, 'Pilibhit',5),
(61, 'Pratapgarh',15),
(62, 'RaeBareli',11),
(63, 'Rampur',14),
(64, 'Saharanpur',16),
(65, 'Sambhal (Bhim Nagar)',14),
(66, 'Sant Kabir Nagar',6),
(67, 'Shahjahanpur',5),
(68, 'Shamali (Prabuddh Nagar)',16),
(69, 'Shravasti',7),
(70, 'Siddharth Nagar',6),
(71, 'Sitapur',11),
(72, 'Sonbhadra',13),
(73, 'Sultanpur',3),
(74, 'Unnao',11),
(75, 'Varanasi',18);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `div_id` int(11) NOT NULL,
  `div_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`div_id`, `div_name`) VALUES
(1, 'Agra Division'),
(2, 'Aligarh Division'),
(3, 'Ayodhya Division'),
(4, 'Azamgarh Division'),
(5, 'Bareilly Division'),
(6, 'Basti Division'),
(7, 'Chitrakoot division'),
(8, 'Devipatan division');
(9, 'Gorakhpur division');
(10, 'Jhansi division');
(11, 'Kanpur division');
(12, 'Lucknow division');
(13, 'Meerut division');
(14, 'Mirzapur division');
(15, 'Moradabad division');
(16, 'Prayagraj division');
(17, 'Saharanpur division');
(18, 'Varanasi division');

-- --------------------------------------------------------

--
-- Table structure for table `process_meds`
--

CREATE TABLE `process_meds` (
  `volu_email` varchar(100) NOT NULL,
  `p_meds_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `thana`
--

CREATE TABLE `thana` (
  `tha_id` int(11) NOT NULL,
  `tha_name` varchar(100) NOT NULL,
  `dis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thana`
--

INSERT INTO `thana` (`tha_id`, `tha_name`, `dis_id`) VALUES
(1, 'AKRABAD', 1),
(2, 'ATRAULI', 2),
(3, 'BANNA DEVI', 3),
(4, 'BARLA', 4),
(5, 'CHANDOUS', 5),
(6, 'CHHARRA', 6),
(7, 'CIVIL LINES', 7),
(8, 'DANDON', 8),
(9, 'DELHI GATE', 9),
(10, 'GANGIRI', 10),
(11, 'GABHANA', 11),
(12, 'GANDHI PARK', 12),
(13, 'GONDA', 13),
(14, 'HARDUAGANJ', 14),
(15, 'IGLASH', 15),
(16, 'JAWAN', 16),
(17, 'KHAIR', 17),
(18, 'KOTWALI', 18),
(19, 'KWARSI', 1),
(20, 'LODHA', 2),
(21, 'MANDRAK', 3),
(22, 'PALI MUKIMPUR', 4),
(23, 'PISAWAN', 5),
(24, 'SASANI GATE', 6),
(25, 'TAPPAL', 7),
(26, 'VIJAYGARH', 8),
(27, 'MAHILA THANA', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_meds_donation`
--

CREATE TABLE `user_med_donation` (
  `user_email` varchar(100) NOT NULL,
  `med_name` varchar(100) NOT NULL,
  `med_type` varchar(100) NOT NULL,
  `med_quantity` varchar(100) NOT NULL,
  `med_quantity_a` varchar(100) NOT NULL,
  `med_ddate` varchar(100) NOT NULL,
  `med_edate` varchar(100) NOT NULL,
  `med_location` varchar(100) NOT NULL,
  `med_pic` varchar(100) NOT NULL,
  `med_validation_type` varchar(100) NOT NULL,
  `med_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `user_money_donation`
--

CREATE TABLE `user_money_donation` (
  `user_email` varchar(100) NOT NULL,
  `money_ddate` varchar(100) NOT NULL,
  `money_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_pic` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--


-- --------------------------------------------------------

--
-- Table structure for table `volunteer_profile`
--

CREATE TABLE `volunteer_profile` (
  `v_firstname` varchar(100) NOT NULL,
  `v_lastname` varchar(100) NOT NULL,
  `v_email` varchar(100) NOT NULL,
  `v_institution` varchar(100) NOT NULL,
  `v_division` varchar(100) NOT NULL,
  `v_district` varchar(100) NOT NULL,
  `v_location` varchar(100) NOT NULL,
  `v_bdate` varchar(100) NOT NULL,
  `v_gender` varchar(100) NOT NULL,
  `v_time` varchar(100) NOT NULL,
  `v_phone` varchar(100) NOT NULL,
  `v_pass` varchar(100) NOT NULL,
  `v_pic` varchar(100) NOT NULL,
  `v_type` varchar(100) NOT NULL,
  `v_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

----------------------------------------------------
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`div_id`);

--
-- Indexes for table `thana`
--
ALTER TABLE `thana`
  ADD PRIMARY KEY (`tha_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_email`);

--
-- Indexes for table `volunteer_profile`
--
ALTER TABLE `volunteer_profile`
  ADD PRIMARY KEY (`v_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dis_id` int(74) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `div_id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `thana`
--
ALTER TABLE `thana`
  MODIFY `tha_id` int(27) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_meds_donation`
--
ALTER TABLE `user_meds_donation`
  MODIFY `meds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

