-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 07:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examples`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff_db`
--

CREATE TABLE `staff_db` (
  `ID` int(255) UNSIGNED NOT NULL,
  `FULL_NAME` varchar(255) DEFAULT NULL,
  `USER_NAME` varchar(255) DEFAULT NULL,
  `TYPE` varchar(255) NOT NULL,
  `isBackOfficer` tinyint(1) NOT NULL,
  `AGE` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_db`
--

INSERT INTO `staff_db` (`ID`, `FULL_NAME`, `USER_NAME`, `TYPE`, `isBackOfficer`, `AGE`) VALUES
(1, 'Nguyễn Văn A', 'vana', 'J', 0, 0),
(2, 'Nguyễn Văn B', 'VanB12346', 'J', 0, 0),
(3, 'Nguyễn Văn A', 'Van_E', 'C', 0, 0),
(5, 'Nguyễn Thanh P', 'Phupro0302', 'BO', 1, 0),
(6, 'Nguyễn Văn Back', 'backofficer', 'BO', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff_db`
--
ALTER TABLE `staff_db`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_db`
--
ALTER TABLE `staff_db`
  MODIFY `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
