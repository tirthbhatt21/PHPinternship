-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 12:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_tbl`
--

CREATE TABLE `st_tbl` (
  `st_id` int(11) NOT NULL,
  `st_name` char(20) NOT NULL,
  `st_gender` text NOT NULL,
  `st_dob` date NOT NULL,
  `st_email` varchar(20) NOT NULL,
  `st_mobile` bigint(10) NOT NULL,
  `st_address` varchar(50) NOT NULL,
  `st_password` varchar(20) NOT NULL,
  `st_area` varchar(20) NOT NULL,
  `st_pincode` int(10) NOT NULL,
  `st_blodgroup` varchar(10) NOT NULL,
  `is_delete` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st_tbl`
--

INSERT INTO `st_tbl` (`st_id`, `st_name`, `st_gender`, `st_dob`, `st_email`, `st_mobile`, `st_address`, `st_password`, `st_area`, `st_pincode`, `st_blodgroup`, `is_delete`) VALUES
(1, 'Tirth', 'Male', '2021-06-12', 'tirthbhatt210@gmail.', 123456789, 'Rajghruh Park,Vvnagar', '147', 'Abc', 388120, 'A+', '0'),
(2, 'Shivani', 'Female', '2001-02-28', 'tirthbhatt210@gmail.', 965652224, 'Rajghruh Park,Vvnagar', 'shivani', 'vvn', 388120, 'B+', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_tbl`
--
ALTER TABLE `st_tbl`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_tbl`
--
ALTER TABLE `st_tbl`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
