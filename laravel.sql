-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 07:27 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `name` varchar(255) NOT NULL,
  `item` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_qty` varchar(255) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `grandtotal` int(11) DEFAULT NULL,
  `invoice_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_qty`, `total`, `grandtotal`, `invoice_name`) VALUES
(23, 'professional web developer', '10000', '2', 20000, 20500, 'ebook'),
(24, 'Pone Nya Khin', '2000', '3', 6000, 6400, 'nobel'),
(25, 'Pepsi', '1000', '10', 10000, 11000, 'drink'),
(26, 'Oishi', '200', '50', 10000, 11000, 'Fast Food'),
(27, 'Necklace', '50000', '1', 50000, 52000, 'Jewellery'),
(34, 'All Star', '15000', '2', 30000, 30600, 'Shoe'),
(35, 'fghj', '678', '25', 16950, 17628, 'rtghjk'),
(36, 'Aircon', '350000', '1', 350000, 385000, 'Electronic'),
(37, 'Microwave Urban', '35000', '2', 70000, 71400, 'Electronic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `remember_token`) VALUES
(5, 'hninnhninn', 'swaltaweain528@gmail.com', '', '', '$2y$10$3UPuISoJtToDxi.rtWXC4umFoVUnbZ8AtQNTuSUPLm3E.ys5dtHGu', ''),
(6, 'Hninn Thazin Myint', 'hninn@gmail.com', '', '', '$2y$10$S7pZnlEFOlbagGca1NPIweVd0bCUc9cHGnuVSwGExu.n6REu0PL6a', ''),
(7, 'Si Thu', 'sithu@gmail.com', '09783128404', 'Monywa', '$2y$10$sQ2i98sHFDcHMzwkVowkWuJWnGqpTkAiMAToWT2rvdGjKP/B4ZMBi', 'mZcemkA8b952KuJEFZMoIBpc2I4RlZeTKLlO0ivvXGJD5Bo31emv65EotGCd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
