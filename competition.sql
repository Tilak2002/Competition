-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 07:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `competition`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `srno` int(255) NOT NULL,
  `rollno` int(255) NOT NULL,
  `activity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`srno`, `rollno`, `activity`) VALUES
(1, 1, 'singing'),
(2, 1, 'dancing'),
(3, 2, 'reading'),
(4, 2, 'writing'),
(5, 2, 'playing'),
(6, 3, 'dancing'),
(7, 4, 'Reading'),
(8, 4, 'coding'),
(12, 6, 'Singing'),
(15, 10, 'Dancing');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `srno` int(255) NOT NULL,
  `rollno` int(255) NOT NULL,
  `physics` varchar(255) NOT NULL,
  `chemistry` varchar(255) NOT NULL,
  `maths` varchar(255) NOT NULL,
  `biology` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`srno`, `rollno`, `physics`, `chemistry`, `maths`, `biology`) VALUES
(1, 1, '55', '65', '78', ''),
(2, 2, '65', '25', '33', ''),
(3, 3, '99', '58', '65', '58'),
(4, 4, '99', '98', '97', '87'),
(7, 6, '65', '65', '85', ''),
(10, 10, '66', '32', '65', '23');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `email`, `mobile`, `password`, `cpassword`) VALUES
('Tilak', '20cp002@gmail.com', '9998978799', 'til123', 'til123'),
('megh', 'abc@gmail.com', '2147483647', 'Ban10@123', 'Ban10@123'),
('mann', 'mann@gmail.com', '6353288373', 'Mann@123', 'Mann@123'),
('Megh123', 'medhrshah@gmail.com', '2147483647', 'Ban10@123', 'Ban10@123'),
('meghshah', 'meghsah@gmail.com', '9998978799', 'Megh@123', 'Megh@123'),
('mnb', 'mnb@gmail.com', '9871234560', 'mnb@234', 'mnb@234'),
('Megh', 'qwe@gmail.com', '9876543210', 'Abc@123', 'Abc@123'),
('qwer', 'qwer@cvb.mnb', '78945263', 'mnb@123', 'mnb@123'),
('Megh', 'zxc@gmail.com', '78945612', 'abc@987', 'Abc@987');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`) VALUES
(1, 'Megh Rajeshkumar Shah'),
(2, 'Tilak Bhavinkumar Brahmbhatt'),
(3, 'Mann Nayankumar Desai'),
(4, 'Nishadh Nirajkumar Shah'),
(6, 'Shrey Bhavinkumar Purohit'),
(10, 'Vihar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`srno`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`srno`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `rollno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`rollno`);

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
