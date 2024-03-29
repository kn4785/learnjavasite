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
-- Table structure for table `teamSurvey`
--

CREATE TABLE `teamSurvey` (
  `userID` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` smallint(6) DEFAULT NULL,
  `siteref` enum('teacher','internet','friend','other') COLLATE utf8_unicode_ci DEFAULT NULL,
  `myRange` tinyint(4) DEFAULT NULL,
  `feature` enum('exercises','quizzes','lessons','other') COLLATE utf8_unicode_ci DEFAULT NULL,
  `eres` enum('eres1','eres2','eres3') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teamSurvey`
--

INSERT INTO `teamSurvey` (`userID`, `name`, `age`, `siteref`, `myRange`, `feature`, `eres`) VALUES
(1, 'regina bass', 18, 'friend', 5, 'exercises', 'eres1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teamSurvey`
--
ALTER TABLE `teamSurvey`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teamSurvey`
--
ALTER TABLE `teamSurvey`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
