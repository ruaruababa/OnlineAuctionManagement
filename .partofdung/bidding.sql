-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 06:05 AM
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
-- Database: `bt1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_products`
--

CREATE TABLE `add_products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `desp` varchar(255) NOT NULL,
  `date_end` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_products`
--

INSERT INTO `add_products` (`p_id`, `p_name`, `category`, `price`, `image`, `desp`, `date_end`) VALUES
(7, 'sample design', 'Painting', '3500', 'audi.jpg', 'Looking good', '0000-00-00'),
(5, 'Android Logo', 'Mat Painting', '25000', 'Android_logo.jpg', 'Nice Logo', '0000-00-00'),
(6, 'Umberla', 'Mat Painting', '800', 'umberla.jpg', 'Nice Design', '0000-00-00'),
(12, 'iphone 13', 'dienthoai', '499', 'iphone.jpg', 'New phone ', '0000-00-00'),
(13, 'Hp', 'laptop', '700', 'laptop.jpg', 'very good', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `pwd`) VALUES
('admin', 'admin123'),
('dinhduy', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE `bidding` (
  `bid_id` int(3) NOT NULL,
  `date` date NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL,
  `bid_price` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `add` varchar(100) NOT NULL,
  `ph` bigint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`bid_id`, `date`, `product_name`, `category`, `price`, `bid_price`, `name`, `email`, `add`, `ph`) VALUES
(6, '2014-04-01', 'sample design', 'Painting', '3500', '4200', 'Sujith', 'sujith@gmail.com', 'Kerala', 9845475987),
(2, '2014-04-03', 'sample design', 'Painting', '3500', '4000', 'sailesh', 'sailu@gmail.com', 'Coimbatore', 8122549775),
(5, '2014-04-02', 'Android Logo', 'Mat Painting', '25000', '3200', 'sailesh', 'sailu@gmail.com', 'Sulur', 8122549775),
(4, '2014-04-03', 'Android Logo', 'Mat Painting', '25000', '3200', 'sujith', 'sujit@gmail.com', 'Coimbatore', 987454212),
(8, '2021-10-30', 'Umberla', 'Mat Painting', '800', '1000', 'duy', 'dinhduy2012001@gmail.com', 'thai binh', 921581712),
(9, '2021-10-31', 'iphone 13', 'dienthoai', '499', '500', 'duy', 'dinhduy2012001@gmail.com', 'thai binh', 921581712),
(10, '2021-10-31', 'Android Logo', 'Mat Painting', '25000', '30000', 'duy', 'dinhduy2012001@gmail.com', 'thai binh', 921581712),
(11, '2021-10-31', 'Hp', 'laptop', '700', '800', 'duy', 'dinhduy2012001@gmail.com', 'thai binh', 921581712);

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
(21, 'dinh', 'duy', 'dinhduy2012001@gmail.com', '$2y$10$dKUfVZ0.u3N.p2.7meGHN.EPJaMsWMHoCIZ0HXUA5hvH4Cj4Fhlzy', '2001-10-20', 'male', 'thai binh', '0921581712', '294ad15bcc36721a4dd03d0580b68f46', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_products`
--
ALTER TABLE `add_products`
  ADD PRIMARY KEY (`p_id`);

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
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bidding`
--
ALTER TABLE `bidding`
  MODIFY `bid_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
