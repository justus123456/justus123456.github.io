-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 02:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dob` datetime NOT NULL,
  `email` varchar(300) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `profileimg` varchar(50) NOT NULL,
  `user_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `phone`, `dob`, `email`, `user_role`, `profileimg`, `user_password`) VALUES
(6, 'Justus', 'Idodo', '08137234319', '2022-07-20 00:00:00', 'justusidodo@gmail.com', 'user', 'profile_user_image6.png', '$2y$10$w90oyv64FHFg1JEYmji8Kecvet51AkXu36f.x3mw1eOCUh5QRDjIu'),
(7, 'paul', 'james', '098374776673', '2022-07-30 00:00:00', 'james@gmail.com', 'admin', '', '$2y$10$OULJ8/xVgIkmYZmfYoX86O2l3yQ/L032fZf/bLvLgY/uHwLk6aCIm');

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `price` varchar(200) NOT NULL,
  `food_status` varchar(30) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
