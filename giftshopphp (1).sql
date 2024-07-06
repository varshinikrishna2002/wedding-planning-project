-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 01:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftshopphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminname` varchar(30) NOT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(5) NOT NULL,
  `bookingdate` varchar(50) DEFAULT NULL,
  `customername` varchar(30) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `productname` varchar(30) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `quantity` varchar(5) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `bookingdate`, `customername`, `emailid`, `contact`, `city`, `address`, `productname`, `price`, `quantity`, `total`, `status`, `type`, `image`, `message`) VALUES
(127, '<br />\r\n<b>Notice</b>:  Undefined index: bookingda', '<br />\r\n<b>Notice</b>:  Undefi', '<br />\r\n<b>Notice</b>:  Undefi', '<br />\r\n<b', '<br />\r\n<b>Notice</b', '<br />\r\n<b>Notice</b>:  Undefined index: address in <b>C:xampphtdocsloveboxpayment.php</b> on line <', '<br />\r\n<b>Notice</b>:  Undefi', '<br />\r\n<b', '<br /', '<br />\r\n<b', 'pending', 'ordinary', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `categoryname` varchar(40) DEFAULT NULL,
  `image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `image`) VALUES
(6, 'Teddy Bears', 'uploadimage/nnnn.jpg'),
(7, 'watches', 'uploadimage/11.jpg'),
(8, 'Mugs', 'uploadimage/22.jpg'),
(9, 'Hand Bags', 'uploadimage/0000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(5) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `ymsg` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `name`, `image`, `category`, `price`, `description`) VALUES
(6, 'Teddy', 'personalisedimage/tt.jpg', '6', '7890', '...........................................');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `category`, `price`, `description`) VALUES
(6, 'ceramic mug', 'uploadimage/BTP.webp', '8', '345', 'ceramic coffee,tea mug'),
(8, 'side bags', 'uploadimage/aa.jpg', '9', '300', 'stylish hand bag for women'),
(10, 'hug and feel teddy ', 'uploadimage/iiii.jpg', '6', '790', 'soft polyester teddy bear'),
(11, 'frantic teddy bear toy', 'uploadimage/rrr.jpg', '6', '899', 'brown small teddy bear'),
(12, 'arvel teddy', 'uploadimage/nnnn.jpg', '6', '344', 'arvel loveable ,huggable teddy bear');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `pid` int(11) NOT NULL,
  `bookingdate` varchar(50) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`pid`, `bookingdate`, `customername`, `emailaddress`, `productname`, `price`, `quantity`, `total`) VALUES
(10, '18-06-21', 'brinda', 'brinda@gmail.com', 'hug and feel teddy ', 790, 1, 790),
(10, '18-06-21', 'brinda', 'brinda@gmail.com', 'hug and feel teddy ', 790, 1, 790),
(6, '18-06-21', 'brinda', 'brinda@gmail.com', 'ceramic mug', 345, 1, 345),
(6, '18-06-21', 'brinda', 'brinda@gmail.com', 'Teddy', 7890, 1, 7890);

-- --------------------------------------------------------

--
-- Table structure for table `siteuser`
--

CREATE TABLE `siteuser` (
  `username` varchar(40) DEFAULT NULL,
  `pwd` varchar(10) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `emailid` varchar(50) NOT NULL,
  `contact` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siteuser`
--

INSERT INTO `siteuser` (`username`, `pwd`, `city`, `address`, `emailid`, `contact`) VALUES
('bhavana', '234', 'bangalore', 'cubbonpett', 'bhavana@gmail.com', '9675432134'),
('brinda', '123', 'bangalore', 'cubbonpet', 'brinda@gmail.com', '7019634464'),
('geetha', 'geta', 'bangalore', 'rr nagar', 'geta@gmail.com', '8675432567'),
('sangeetha', 'sangi', 'bangalore', 'cubbonpet', 'sangetha@gmail.com', '9675432134');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminname`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteuser`
--
ALTER TABLE `siteuser`
  ADD PRIMARY KEY (`emailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
