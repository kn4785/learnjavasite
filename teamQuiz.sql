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
-- Table structure for table `teamQuiz`
--

CREATE TABLE `teamQuiz` (
  `id` int(20) NOT NULL,
  `question` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `a1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `a4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `correct` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teamQuiz`
--

INSERT INTO `teamQuiz` (`id`, `question`, `a1`, `a2`, `a3`, `a4`, `correct`) VALUES
(1, 'What is the code for a main method? ', 'public static void main(String[] args) ', 'public void static main(String[] args) ', 'private static void main(String[] args) ', 'public void static main([] args)', 'public static void main(String[] args) '),
(2, 'Which of the following is not a primitive data type? ', 'boolean', 'double', 'String', 'char', 'String'),
(3, 'What is the output of this code: System.out.println(“Good morning, Joe”);\r\n', '“Good morning, Joe”', 'Good morning, Joe', 'Good morning Joe', '(“Good morning, Joe”)', 'Good morning, Joe'),
(4, 'Which is not a basic element Java syntax?', 'Case Sensitivity', 'Uppercase Class Names', 'Program name is different from Class Name', 'Lowercase Method Names', 'Program name is different from Class Name'),
(5, 'Which method (public void methodName) allows you to change what a variable is? \r\n', 'Main Method', 'Accessor ', 'Abstract', 'Mutator', 'Mutator'),
(6, 'How do you instantiate a public Bike() default constructor? \r\n', 'Bike b1 = new Bike();', 'Bike = new Bike();', 'Bike b1 = new Bike(30, 8 ,10); ', 'new Bike();', 'Bike b1 = new Bike();'),
(7, 'Which is not required when creating a for loop? ', 'Initial Condition', 'Testing Condition', 'A Boolean', 'Increment/Decrement Statement', 'A Boolean'),
(8, 'What type of loop always runs the code inside it once even if the condition statement is not met?\r\n', 'For', 'Do While', 'While', 'If-Else', 'Do-While'),
(9, 'If there are 3 true cases in an Else-If Statement or Switch Statement with a total of 5 cases how many would cases would execute?', '0', '1', '3', '5', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teamQuiz`
--
ALTER TABLE `teamQuiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teamQuiz`
--
ALTER TABLE `teamQuiz`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
