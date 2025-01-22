-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 06:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `family_name` text NOT NULL,
  `major` text NOT NULL,
  `address` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `degree` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `tell_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `first_name`, `middle_name`, `family_name`, `major`, `address`, `date_of_birth`, `degree`, `age`, `tell_number`) VALUES
(1, 'Ward', 'Minwer', 'Alsalim', 'سفاح', 'الفضاء', '2000-11-16', 90, 24, 789123456),
(2, 'ِAyman', 'Mohammed', 'Abu Rumman', 'سفاح', 'الفضاء', '1999-11-20', 85, 24, 789234567),
(3, 'Raghad', 'Mohammed', 'Al Hassan', 'سفاحه', 'الفضاء', '2001-01-10', 95, 22, 789345678),
(4, 'Omar', 'Hussein', 'Salem', 'Engineering', 'North Avenue', '1998-07-30', 88, 25, 789456789),
(5, 'Laila', 'Ahmed', 'Ali', 'Biology', 'West Road', '2002-03-25', 92, 21, 789567890),
(6, 'Fadi', 'Yaser', 'Saleh', 'Chemistry', 'East Street', '2000-12-15', 87, 23, 789678901),
(7, 'Hana', 'Amjad', 'Khalil', 'Law', 'South Avenue', '1997-08-18', 93, 26, 789789012),
(8, 'Khalid', 'Naser', 'Tariq', 'Art', 'Central Park', '2001-06-12', 89, 22, 789890123),
(9, 'Yara', 'Sami', 'Zaid', 'Medicine', 'Green Street', '2003-04-05', 96, 20, 789901234),
(10, 'Zaid', 'Fahad', 'Othman', 'Business', 'Red Lane', '1999-09-09', 91, 24, 789012345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
