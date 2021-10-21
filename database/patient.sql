-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 08:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlybenhvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientid` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateofbirth` datetime NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
(1, 'A', 'Nguyễn Văn', '2021-10-21 08:25:08', 'Nam', '0123456789', 'nguyenvana@gmail.com', 170, 68, 'A', '2021-10-21 08:25:08', '2021-10-21 08:25:08'),
(2, 'B', 'Nguyễn Văn', '2021-10-21 08:26:56', 'Nữ', '098765421', 'nguyenvanb@gmail.com', 160, 58, 'B', '2021-10-21 08:26:56', '2021-10-21 08:26:56'),
(3, 'C', 'Nguyễn Văn', '2021-10-21 08:28:32', 'Nam', '098172364', 'nguyenvanc@gmail.com', 180, 70, 'O', '2021-10-21 08:28:32', '2021-10-21 08:28:32'),
(4, 'D', 'Nguyễn Văn', '2021-10-21 08:29:25', 'Nam', '0238469112', 'nguyenvand@gmail.com', 178, 78, 'A', '2021-10-21 08:29:25', '2021-10-21 08:29:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
