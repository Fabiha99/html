-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 02:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Name` varchar(30) NOT NULL,
  `ID` int(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Section` varchar(30) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Name`, `ID`, `Gender`, `Email`, `Username`, `Password`, `Course`, `Section`, `image`) VALUES
('Fabiha Khaled', 2, 'Female', 'fabihakhaled111@gmail.com', 'Fabiha99', '$2y$12$XURZarGoV/dwE9Js6JsRief', 'Physics', 'F', 'Capture.PNG'),
('Rahim Khan', 3, 'Female', 'fabihakhaled111@gmail.com', 'Male', '$2y$12$anHjupIT/8WnpvUz7fLi..w', 'Chemistry', 'F', 'Capture2.PNG'),
('Mr.Shamim', 5, 'Male', 'shamim@aiub.edu', 'Shamim99', '$2y$12$VWg6M85TxYkkoLqBb7qVzeS', 'English2', 'C', 'Capture2.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Surname` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `Surname`, `Username`, `Password`, `image`) VALUES
(2, 'James', 'Hannigan', 'jimmy', '12345', NULL),
(3, 'jim1', 'jim', 'jim1', 'jim1', NULL),
(4, 'jim2', 'jim', 'jim2', 'jim2', NULL),
(5, 'Fabiha ', 'Khaled', 'Fabiha99', '$2y$12$8xKFwMNnyD6Jl/5n09kfxOM/mV5/Wgnrm', ''),
(6, 'Fabiha ', 'Khaled', 'Fabiha99', '$2y$12$531ywAmc3uy129ZkxHEEwOgAHwuj13uXm', 'Capture2.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
