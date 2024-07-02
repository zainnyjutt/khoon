-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 10:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(100) NOT NULL,
  `name` varchar(1100) NOT NULL,
  `email` varchar(1100) NOT NULL,
  `phone` varchar(1100) NOT NULL,
  `cnic` varchar(1100) NOT NULL,
  `dob` varchar(1100) NOT NULL,
  `blood_group` varchar(1100) NOT NULL,
  `last_do_date` varchar(1100) NOT NULL,
  `country` varchar(1100) NOT NULL,
  `province` varchar(1100) NOT NULL,
  `city` varchar(1100) NOT NULL,
  `address` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `email`, `phone`, `cnic`, `dob`, `blood_group`, `last_do_date`, `country`, `province`, `city`, `address`) VALUES
(1, 'a', 'admin@gmail.com', 'a', 'a', '2024-05-23', 'AB+', '2024-05-06', 'Pakistan', 'Khyber Pakhtunkhwa', 'Dadu', 'Pipe Stop,Township,Lahore'),
(2, 'rfe', 'zainnyjutt007@gmail.com', '03708062338', '3421213231453', '2024-05-03', 'B+', '2024-05-17', 'Pakistan', 'Sindh', 'Lahore', 'Pipe Stop,Township,Lahore'),
(3, 'cd', 'cd@gamil.com', 'd', 'cd', '2024-05-14', 'B+', '2024-05-16', 'Pakistan', 'Punjab', 'Abbottabad', 'Pipe Stop,Township,Lahore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
