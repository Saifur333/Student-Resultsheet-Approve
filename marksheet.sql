-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 11:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marksheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_user`
--

CREATE TABLE `adm_user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_position` varchar(20) NOT NULL,
  `user_pic` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adm_user`
--

INSERT INTO `adm_user` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_username`, `user_password`, `user_position`, `user_pic`, `role_id`) VALUES
(3, 'Saif', '01309080748', 'saif@gmail.com', 'saif', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user_1614749959_595605522.png', 1),
(4, 'Saifur Rahman Saif', '01309080748', 'saifurnstuiit223344@gmail.com', 'saifur', '81dc9bdb52d04dc20036dbd8313ed055', '', 'user_1615018260_216332182.png', 1),
(5, 'Sumon Sir', '01309080748', 'saif@gmail.com', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'director', 'user_1614749959_595605522.png', 1),
(6, 'karim', '01309080748', 'karim@gmail.com', 'karim', '81dc9bdb52d04dc20036dbd8313ed055', 'faculty-member', 'user_1614749959_595605522.png', 1),
(7, 'Rahim vai', '01309080748', 'rahim@gmail.com', 'rahim', '81dc9bdb52d04dc20036dbd8313ed055', 'section-officer', 'user_1614749959_595605522.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `final_marksheet`
--

CREATE TABLE `final_marksheet` (
  `std_id` int(11) NOT NULL,
  `std_roll` varchar(10) NOT NULL,
  `std_bangla` varchar(50) NOT NULL,
  `std_english` varchar(50) NOT NULL,
  `std_math` varchar(50) NOT NULL,
  `std_physics` varchar(50) NOT NULL,
  `std_chemistry` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_marksheet`
--

INSERT INTO `final_marksheet` (`std_id`, `std_roll`, `std_bangla`, `std_english`, `std_math`, `std_physics`, `std_chemistry`) VALUES
(1, 'ASH1825031', '87', '90', '99', '89', '98'),
(2, 'ASH1825004', '99', '99', '99', '99', '99'),
(3, 'ASH1825004', '99', '99', '99', '99', '99'),
(8, 'ASH1825015', '87', '90', '99', '99', '99');

-- --------------------------------------------------------

--
-- Table structure for table `stdresult`
--

CREATE TABLE `stdresult` (
  `std_id` int(11) NOT NULL,
  `std_roll` varchar(11) NOT NULL,
  `std_bangla` int(3) NOT NULL,
  `std_english` int(3) NOT NULL,
  `std_math` int(3) NOT NULL,
  `std_physics` int(3) NOT NULL,
  `std_chemistry` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stdresult`
--

INSERT INTO `stdresult` (`std_id`, `std_roll`, `std_bangla`, `std_english`, `std_math`, `std_physics`, `std_chemistry`) VALUES
(4, 'ASH1825031', 87, 90, 99, 89, 98),
(5, 'ASH1825004', 87, 90, 99, 89, 98),
(6, 'ASH1825004', 99, 99, 99, 99, 99),
(7, 'ASH1825020', 87, 90, 99, 89, 98),
(13, 'ASH1825020', 87, 99, 99, 89, 0),
(14, 'ASH1825031', 99, 90, 99, 89, 98),
(15, 'ASH1825003', 22, 90, 99, 89, 98),
(19, 'ASH1825031', 87, 90, 99, 89, 98),
(20, 'ASH18250317', 87, 90, 99, 89, 98),
(21, 'ASH1825001M', 87, 90, 99, 89, 98),
(22, 'ASH18250318', 87, 90, 99, 89, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_user`
--
ALTER TABLE `adm_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `final_marksheet`
--
ALTER TABLE `final_marksheet`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `stdresult`
--
ALTER TABLE `stdresult`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_user`
--
ALTER TABLE `adm_user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `final_marksheet`
--
ALTER TABLE `final_marksheet`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stdresult`
--
ALTER TABLE `stdresult`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
