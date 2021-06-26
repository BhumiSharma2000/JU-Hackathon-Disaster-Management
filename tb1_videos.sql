-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 05:33 AM
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
-- Database: `sapds`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb1_videos`
--

CREATE TABLE `tb1_videos` (
  `v_id` int(6) UNSIGNED NOT NULL,
  `vid_url` varchar(200) NOT NULL,
  `description` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_videos`
--

INSERT INTO `tb1_videos` (`v_id`, `vid_url`, `description`, `timestamp`) VALUES
(8, 'https://www.youtube.com/embed/oRiLLd2hX0E', 'jdblkwewk', '2019-07-18 03:00:48'),
(9, 'https://www.youtube.com/embed/A5Lp2GJHVnM', 'qqqqqaaaaaaaaaa', '2019-07-18 03:24:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb1_videos`
--
ALTER TABLE `tb1_videos`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb1_videos`
--
ALTER TABLE `tb1_videos`
  MODIFY `v_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
