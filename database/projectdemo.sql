-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 05:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fid` int(11) NOT NULL,
  `Category` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fid`, `Category`, `fname`, `price`) VALUES
(16, 'Breakfast & Starters', 'Poha', 200),
(17, 'Breakfast & Starters', 'Paneer Chilly', 1200),
(19, 'Breakfast & Starters', 'Chips', 200),
(20, 'Breakfast & Starters', 'Dhokla', 600),
(21, 'Breakfast & Starters', 'Fafda Jalebi', 600),
(24, 'Dinner', 'Chole Bhature', 800),
(25, 'Dinner', 'Risotto', 600),
(26, 'Dinner', 'Pav Bhaji', 1000),
(27, 'Dinner', 'Panjabi Full Dish', 1200),
(28, 'Coffee & Drinks', 'Hot Chocolate Coffee', 400),
(29, 'Coffee & Drinks', 'Cold Coffee', 800),
(30, 'Coffee & Drinks', 'Cold Coco', 400),
(32, 'Coffee & Drinks', 'Coconut Mojito', 1000),
(33, 'Dinner', 'pani puri', 200),
(38, 'Dinner', 'pizza', 1500),
(39, 'Dinner', 'pizza', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `bath` varchar(255) NOT NULL,
  `wifi` varchar(10) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_image`, `category`, `capacity`, `bath`, `wifi`, `ac`, `price`) VALUES
(2, 'uploads/19.jpg', 'Executive Suite', '3 Bed', '2 Bath', 'yes', 'ac', 7000),
(5, 'uploads/21.jpg', 'Executive Suite', '3 Bed', '2 Bath', 'yes', 'ac', 6500),
(6, 'uploads/25.jpg', 'Super Deluxe', '3 Bed', '2 Bath', 'yes', 'ac', 7000),
(7, 'uploads/lake-house.jpg', 'Super Deluxe', '3 Bed', '2 Bath', 'yes', 'ac', 6000),
(8, 'uploads/premium-room.jpg', 'Junior Suite', '3 Bed', '2 Bath', 'yes', 'ac', 6500),
(9, 'uploads/6.jpg', 'Junior Suite', '3 Bed', '2 Bath', 'yes', 'ac', 6500),
(10, 'uploads/5.jpg', 'Executive Suite', '2 Bed', '1 Bath', 'yes', 'Non-ac', 3500),
(11, 'uploads/11.jpg', 'Executive Suite', '2 Bed', '1 Bath', 'yes', 'Non-ac', 4500),
(12, 'uploads/10.jpg', 'Executive Suite', '2 Bed', '1 Bath', 'yes', 'Non-ac', 4000),
(13, 'uploads/11.jpg', 'Executive Suite', '2 Bed', '1 Bath', 'yes', 'Non-ac', 4500),
(20, 'uploads/4.jpg', 'Executive Suite', '2 Bed', '1 Bath', 'yes', 'ac', 7000),
(21, 'uploads/4.jpg', 'Super Deluxe', '3 Bed', '2 Bath', 'yes', 'ac', 6500),
(22, 'uploads/9.jpg', 'Executive Suite', '2 Bed', '2 Bath', 'yes', 'ac', 6500);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `Username` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`Username`, `Email`, `phone_no`, `Address`, `Lastname`, `Password`) VALUES
('qw', 'wec@gmial.com', 87788787, 'freveer', 'fdedrv', '8888'),
('dev', 'dev@gmail.com', 2147483647, 'surat', 'chaniyara', '282828'),
('admin', 'dsh-admin@gmail.com', 2147483647, '101,vivekanand collage surat.', 'sandip/dev/sakshi/hency', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
