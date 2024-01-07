-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 11:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodpost`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `restname` varchar(50) NOT NULL,
  `Dateofpost` date NOT NULL,
  `pincode` int(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` int(50) NOT NULL,
  `post` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `username`, `restname`, `Dateofpost`, `pincode`, `address`, `contact`, `post`) VALUES
(4, 'new1', 'xyz', '2033-03-23', 655, 'hgyg', 66565, 'hgjhh\r\n'),
(5, 'tejasvi', 'xyz', '2022-12-31', 5646546, 'uyfyf', 6464, 'iiyguygu'),
(6, 'tejasvi', 'tejasvi rest', '2055-04-01', 65, 'tfytfy', 0, 'new post'),
(7, 'Family', 'Family Tree', '2022-04-26', 400602, 'Vishodh CHSL, Kanchanpusp Complex, Kavesar, Thane (W)', 2147483647, 'There is leftover food for around 10 people.');

-- --------------------------------------------------------

--
-- Table structure for table `ngodata`
--

CREATE TABLE `ngodata` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `ngoname` varchar(50) NOT NULL,
  `datep` date DEFAULT NULL,
  `pin` int(10) NOT NULL,
  `address` text NOT NULL,
  `contact` int(50) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngodata`
--

INSERT INTO `ngodata` (`id`, `username`, `ngoname`, `datep`, `pin`, `address`, `contact`, `post`) VALUES
(1, 'ngo2', 'help em', '2055-05-22', 56465, 'hjhjhgjh', 4545656, 'new post'),
(2, 'Goonj', 'Goonj', '2022-04-27', 400604, 'Thane', 982314567, 'We will need food for 10 people.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngodata`
--
ALTER TABLE `ngodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ngodata`
--
ALTER TABLE `ngodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
