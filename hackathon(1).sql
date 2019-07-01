-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 03:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `nama_email` varchar(100) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_jml` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama_email`, `product_img`, `product_name`, `product_jml`, `product_price`, `product_total`) VALUES
(1, 'adamherry1234@gmail.com', 'nutrisi.jpg', 'Hiroponik Nutrisi', 1, 25000, 25000),
(2, 'adamherry1234@gmail.com', 'merge.jpg', 'Nutrisi Hidroponik Dan Rockwool', 1, 135000, 135000),
(3, 'adamherry1234@gmail.com', 'rockwool.jpg', 'Rockwool', 1, 120000, 120000),
(4, 'adamherry1234@gmail.com', 'nutrisi.jpg', 'Hiroponik Nutrisi', 1, 25000, 25000),
(5, 'adamherry1234@gmail.com', 'nutrisi.jpg', 'Hiroponik Nutrisi', 1, 25000, 25000),
(6, 'adam@gmail.com', 'Nutrisi Hidroponik Dan Rockwool', 'merge.jpg', 1, 135000, 135000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_img`, `price`) VALUES
(1, 'Padi', 'tanaman1.jpg', 135000),
(2, 'Melon', 'tanaman2.jpg', 26000),
(3, 'Semangka', 'tanaman3.jpg', 27000),
(4, 'Bengkuang', 'tanaman4.png', 25000),
(5, 'jagung', 'tanaman5.jpg', 57000),
(6, 'Labu', 'tanaman6.jpg', 38000),
(7, 'Cabai Rawit', 'tanaman7.jpg', 21000),
(8, 'Cabai Merah', 'tanaman8.jpg', 21000),
(9, 'Cabai Dewata/Setan', 'tanaman9.jpg', 22000),
(10, 'Tomat', 'tanaman10.jpg', 34000),
(11, 'Wortel', 'tanaman11.jpg', 27000),
(12, 'Kol', 'tanaman12.jpg', 18000),
(13, 'Pare', 'tanaman13.jpg', 38000),
(14, 'Terong', 'tanaman14.jpg', 27000),
(15, 'Kacang Tanah', 'tanaman15.jpg', 23000),
(16, 'Bayam', 'tanaman16.jpg', 25000),
(17, 'Rak Model 1', 'rak1.jpg', 250000),
(18, 'Rak Model 2', 'rak2.jpg', 250000),
(19, 'Rak Model 3', 'rak3.jpg', 250000),
(20, 'Rak Model 4', 'rak4.jpg', 250000),
(21, 'Rak Model 5', 'rak5.jpg', 250000),
(22, 'Rak Model 6', 'rak6.jpg', 250000),
(23, 'Rak Model 7', 'rak7.jpg', 250000),
(24, 'Rak Model 8', 'rak8.jpg', 250000),
(25, 'Rak Model 9', 'rak9.jpg', 250000),
(26, 'Rak Model 10', 'rak10.jpg', 250000),
(27, 'Rak Model 11', 'rak11.jpg', 250000),
(28, 'Rak Model 12', 'rak12.jpg', 250000),
(29, 'Rak Model 13', 'rak13.jpg', 250000),
(30, 'Rak Model 14', 'rak14.jpg', 250000),
(31, 'Rak Model 15', 'rak15.jpg', 250000),
(32, 'Rak Model 16', 'rak16.jpg', 250000),
(33, 'pot Model 1', 'pot1.jpg', 100000),
(34, 'pot Model 2', 'pot2.jpg', 100000),
(35, 'pot Model 3', 'pot3.jpg', 100000),
(36, 'pot Model 4', 'pot4.jpg', 100000),
(37, 'pot Model 5', 'pot5.jpg', 100000),
(38, 'pot Model 6', 'pot6.jpg', 100000),
(39, 'pot Model 7', 'pot7.jpg', 100000),
(40, 'pot Model 8', 'pot8.jpg', 100000),
(41, 'pot Model 9', 'pot9.jpg', 100000),
(42, 'pot Model 10', 'pot10.jpg', 100000),
(43, 'pot Model 11', 'pot1.jpg', 100000),
(44, 'pot Model 12', 'pot12.jpg', 100000),
(45, 'pot Model 13', 'pot13.jpg', 100000),
(46, 'pot Model 14', 'pot14.jpg', 100000),
(47, 'pot Model 15', 'pot15.jpg', 100000),
(48, 'pot Model 16', 'pot16.jpg', 100000),
(49, 'Hiroponik Nutrisi', 'nutrisi.jpg', 25000),
(50, 'Rockwool', 'rockwool.jpg', 120000),
(51, 'Nutrisi Hidroponik Dan Rockwool', 'merge.jpg', 135000),
(52, 'Nutrisi Hidroponik Dan Rockwool', 'merge.jpg', 135000);

-- --------------------------------------------------------

--
-- Table structure for table `products_pot`
--

CREATE TABLE `products_pot` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_pot`
--

INSERT INTO `products_pot` (`id`, `product_name`, `product_img`, `price`) VALUES
(1, 'Pot Model 1', 'pot1.jpg', 100000),
(2, 'Pot Model 2', 'pot2.jpg', 50000),
(3, 'Pot Model 3', 'pot3.jpg', 100000),
(4, 'Pot Model 4', 'pot14.jpg', 50000),
(5, 'Pot Model 5', 'pot15.jpg', 100000),
(6, 'Pot Model 6', 'pot6.jpg', 50000),
(7, 'Pot Model 7', 'pot7.jpg', 100000),
(8, 'Pot Model 8', 'pot8.jpg', 50000),
(9, 'Pot Model 9', 'pot9.jpg', 100000),
(10, 'Pot Model 10', 'pot10.jpg', 50000),
(11, 'Pot Model 11', 'pot11.jpg', 100000),
(12, 'Pot Model 12', 'pot12.jpg', 50000),
(13, 'Pot Model 13', 'pot13.jpg', 100000),
(14, 'Pot Model 14', 'pot14.jpg', 50000),
(15, 'Pot Model 15', 'pot15.jpg', 100000),
(16, 'Pot Model 16', 'pot16.jpg', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `products_rak`
--

CREATE TABLE `products_rak` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_rak`
--

INSERT INTO `products_rak` (`id`, `product_name`, `product_img`, `price`) VALUES
(1, 'Rak Model 1', 'rak1.jpg', 100000),
(2, 'Rak Model 2', 'rak2.jpg', 50000),
(3, 'Rak Model 3', 'rak3.jpg', 100000),
(4, 'Rak Model 4', 'rak4.jpg', 50000),
(5, 'Rak Model 5', 'rak5.jpg', 100000),
(6, 'Rak Model 6', 'rak6.jpg', 50000),
(7, 'Rak Model 7', 'rak7.jpg', 100000),
(8, 'Rak Model 8', 'rak8.jpg', 50000),
(9, 'Rak Model 9', 'rak9.jpg', 100000),
(10, 'Rak Model 10', 'rak10.jpg', 50000),
(11, 'Rak Model 11', 'rak11.jpg', 100000),
(12, 'Rak Model 12', 'rak12.jpg', 50000),
(13, 'Rak Model 13', 'rak13.jpg', 100000),
(14, 'Rak Model 14', 'rak14.jpg', 50000),
(15, 'Rak Model 15', 'rak15.jpg', 100000),
(16, 'Rak Model 16', 'rak16.jpg', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akun_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `akun_type`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(2, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(8, 'adam', 'adamherry1234@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(9, 'adam', 'adam@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(10, 'adam', 'asda@adsd.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(11, 'adam', 'adamadamherry@yahoo.co.id', '8fa5b2f82bbda204f44735cedb798dba', 'user'),
(12, 'adam herry', 'adamherry123456@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(13, 'adam', 'maulana@gmail.com', '8fa5b2f82bbda204f44735cedb798dba', 'user'),
(14, 'Saya Mau Beli', 'blibli@gmail.com', 'edd2a1dd47d5b9e467382f78f43b94ef', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_pot`
--
ALTER TABLE `products_pot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_rak`
--
ALTER TABLE `products_rak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `products_pot`
--
ALTER TABLE `products_pot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products_rak`
--
ALTER TABLE `products_rak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
