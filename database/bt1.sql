-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 02:16 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_products`
--

CREATE TABLE `add_products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `date_start` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `desp` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_end` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_products`
--

INSERT INTO `add_products` (`p_id`, `p_name`, `category`, `price`, `date_start`, `image`, `desp`, `user_id`, `date_end`) VALUES
(25, 'BMW', 'car', 50000, '0000-00-00', 'bmw.jpg', 'Super car', 21, '0000-00-00'),
(24, 'Note10 pro', 'mobile', 300, '0000-00-00', 'note10.jpg', 'Xiaomi note 10', 21, '0000-00-00'),
(20, 'iphone', 'mobile', 500, '0000-00-00', 'iphone.jpg', '1212', 21, '0000-00-00'),
(23, 'poco x3 pro', 'mobile', 250, '0000-00-00', 'pocox3.jpg', 'Xiaomi Gaming', 21, '0000-00-00'),
(22, 'hp15', 'laptop', 499, '0000-00-00', 'laptop.jpg', 'updtae', 21, '0000-00-00'),
(21, 'iphone', 'car', 700, '0000-00-00', 'iphone.jpg', '900', 21, '0000-00-00'),
(26, 'BMW', 'car', 50000, '0000-00-00', 'bmw.jpg', 'Super car', 21, '0000-00-00'),
(31, 'samsung', 'tivi', 500, '2021-11-03', 'samsung.jpg', 'OLed', 24, '2021-11-11'),
(28, 'hp15', 'mobile', 100, '2021-11-02', 'bmw.jpg', '1212', 21, '2021-11-27'),
(30, 'samsung', 'tivi', 300, '2021-11-03', 'samsung.jpg', 'oled', 21, '2021-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(20) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `pwd`) VALUES
('dinhduy', '$2y$10$7Edvh5r5rSurw4ck7O/iUuCQkKlk6G5m3lS0WThNRCvZ/UgqhW1E6'),
('giang', '$2y$10$ye4Gh7kQ2PGL34WGBRbm2uPMHqjOdzlIIOcee/pB33u.COl9H6jBy');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `bid_id` int(3) NOT NULL,
  `date` date NOT NULL,
  `p_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `bid_price` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `add` varchar(100) NOT NULL,
  `ph` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`bid_id`, `date`, `p_id`, `product_name`, `category`, `price`, `bid_price`, `user_id`, `name`, `email`, `add`, `ph`) VALUES
(9, '2021-10-31', 0, 'iphone 13', 'dienthoai', 499, 500, 0, 'duy', 'dinhduy2012001@gmail.com', 'thai binh', '921581712'),
(11, '2021-10-31', 0, 'Hp', 'laptop', 700, 800, 0, 'duy', 'dinhduy2012001@gmail.com', 'thai binh', '921581712'),
(12, '2021-10-31', 0, 'Hp', 'laptop', 700, 1000, 0, 'duy', 'dinhduy2012001@gmail.com', 'thai binh', '921581712'),
(13, '2021-10-31', 0, 'iphone 13', 'dienthoai', 499, 600, 0, 'duy', 'dinhduy2012001@gmail.com', 'thai binh', '921581712'),
(14, '2021-10-31', 0, 'hp15', 'dienthoai', 100, 500, 0, 'duy', 'dinhduy2012001@gmail.com', 'thai binh', '921581712'),
(15, '2021-10-31', 0, 'iphone 14', 'dienthoai', 499, 500, 0, 'duy', 'dinhduy2012001@gmail.com', 'thai binh', '0921581712'),
(16, '2021-11-01', 0, 'iphone 14', 'dienthoai', 499, 5000, 0, 'duy', 'dinhduy2012001@gmail.com', 'thai binh', '0921581712'),
(20, '2021-11-01', 0, 'hp15', 'laptop', 499, 509, 0, 'duy', 'dinhduy2012001@gmail.com', 'thai binh', '0921581712'),
(26, '2021-11-03', 0, 'hp15', 'mobile', 100, 110, 0, 'duy', 'dinhduy2012001@gmail.com', '1212', '2121  '),
(25, '2021-11-01', 0, 'Note10 pro', 'mobile', 300, 310, 0, 'duy', 'spider20102001@gmail.com', '121', '121  '),
(27, '2021-11-04', 0, 'iphone', 'car', 700, 800, 0, 'duy', 'dinhduy2012001@gmail.com', '1212', '2121  '),
(28, '2021-11-04', 0, 'BMW', 'car', 50000, 51000, 0, 'duy', 'dinhduy2012001@gmail.com', '1212', '2121  '),
(29, '2021-11-04', 28, 'hp15', 'mobile', 499, 509, 21, 'duy', 'dinhduy2012001@gmail.com', '1212', '2121  ');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `f_name`, `l_name`, `email`, `pass`, `dob`, `gender`, `address`, `phone`, `code`, `status`) VALUES
(21, 'dinh', 'duy', 'dinhduy2012001@gmail.com', '$2y$10$/XzBsBFWihx4SRBmADNXI.LF3h3OyZF7qhUVOGd.NMXhKuBQVKAJO', '2001-10-20', 'male', '1212', '2121  ', '294ad15bcc36721a4dd03d0580b68f46', 1),
(24, 'dinh', 'duy', 'spider20102001@gmail.com', '$2y$10$R6c4np61ZehKbST33MO1JuKMlI8nUd0ELaypf07trV/QWdrcdzFHK', '2001-10-20', 'male', 'thai binh', '0921581712', '5a12931cd53a437bdf184d79b44028f3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_products`
--
ALTER TABLE `add_products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bidding`
--
ALTER TABLE `bidding`
  ADD PRIMARY KEY (`bid_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_products`
--
ALTER TABLE `add_products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `bid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

