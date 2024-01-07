-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 11:48 PM
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
-- Database: `ngore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(250) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('Digesh', 'DG@123'),
('Vaishnavi', 'VN@123'),
('Tejasvi', 'TM@123');

-- --------------------------------------------------------

--
-- Table structure for table `ngoregister`
--

CREATE TABLE `ngoregister` (
  `id` int(50) NOT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Head` varchar(500) DEFAULT NULL,
  `Contact` bigint(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(600) DEFAULT NULL,
  `Pincode` bigint(10) DEFAULT NULL,
  `photo` varchar(250) NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngoregister`
--

INSERT INTO `ngoregister` (`id`, `Name`, `Head`, `Contact`, `Email`, `Address`, `Pincode`, `photo`, `Username`, `Password`, `status`) VALUES
(1, 'help em', 'myself', 868646, 'fd@gmail.com', 'kjhfgfjj', 654654, '', 'ngonew', '123', 'approved'),
(2, 'ngo2', 'some1', 8466868, 'hgh@gmail.com', 'ytgfhghj', 6546456, '', 'ngo2', '123', 'approved'),
(3, 'Goonj', 'R. M. Kulkarni', 9832651740, 'goonj@gmail.com', 'Thane', 400604, 'upload/IJET-27952.pdf', 'Goonj', 'Goonj@123', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `rest_user`
--

CREATE TABLE `rest_user` (
  `id` int(50) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Head` varchar(250) NOT NULL,
  `Contact` bigint(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(600) NOT NULL,
  `Pincode` bigint(10) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rest_user`
--

INSERT INTO `rest_user` (`id`, `Name`, `Head`, `Contact`, `Email`, `Address`, `Pincode`, `photo`, `Username`, `Password`, `status`) VALUES
(1, 'digesh rest', 'digesh', 9619040970, 'mgm120it3176a@gmail.com', 'fnjbjhvjhvjhj', 400067, '', 'new1', 'new', 'approved'),
(2, 'Tejasvi rest', 'tejasvi', 9619040970, 'fd@gmail.com', '38', 400067, '', 'Tejasvi', '123', 'approved'),
(3, 'Balaji Food Court', 'M.R. IYER', 7893216540, 'balaji@gmail.com', 'Thane', 400602, 'upload/IJET-27952.pdf', 'balaji', 'Balaji@123', 'approved'),
(5, 'Family Tree', 'A. B. Sharma', 9966441177, 'familytree@gmail.com', 'Thane', 400602, 'upload/IJET-27952.pdf', 'Family', 'Family@123', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngoregister`
--
ALTER TABLE `ngoregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest_user`
--
ALTER TABLE `rest_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ngoregister`
--
ALTER TABLE `ngoregister`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rest_user`
--
ALTER TABLE `rest_user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
