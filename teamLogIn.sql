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
-- Table structure for table `teamLogIn`
--

CREATE TABLE `teamLogIn` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teamLogIn`
--

INSERT INTO `teamLogIn` (`username`, `password`) VALUES
('Blake', '$2y$10$ld.v7zwVAhkjc9LX/izPt./jbXOWajC8yZad/OvRT9aMMb8bm5kzW'),
('Hansel', '$2y$10$X3ev5KzFJp7XCZ0kO5uIeOgLYp/pEyzusGn4W1HuCeqhKjT2Aynsa'),
('kim', '$2y$10$oTG1JBoGyVGks2S4Wcgo6uqHBrtyqj/lLSgQwjwzrI9es3sKl6tWC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teamLogIn`
--
ALTER TABLE `teamLogIn`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
