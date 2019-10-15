-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2019 at 08:14 PM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kn4785`
--

-- --------------------------------------------------------

--
-- Table structure for table `userQuiz`
--

CREATE TABLE `userQuiz` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `score` double NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userQuiz`
--

INSERT INTO `userQuiz` (`username`, `score`, `timeStamp`) VALUES
('blake', 0.4444444444444444, '2019-04-22 21:54:32'),
('blake', 0.6666666666666666, '2019-04-22 22:37:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userQuiz`
--
ALTER TABLE `userQuiz`
  ADD PRIMARY KEY (`username`,`timeStamp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
