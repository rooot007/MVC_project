-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2016 at 11:43 PM
-- Server version: 10.0.28-MariaDB-1.cba
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power_device_zzz_com_ua`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `list` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availablity` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `list`, `name`, `category_id`, `code`, `price`, `availablity`, `image`, `short_description`, `description`, `status`) VALUES
(39, 0, '<p>Тест 1</p>', 10, 2, 100, 1, '["phpeeEk1D","php4HukBD","phpa4ctbD"]', '<p>Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1</p>', '<p>Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1 Тест 1</p>', 1),
(40, 1, '<p>ТЕСТ 2</p>', 10, 39, 52, 1, '["phpRJW9Ix","phpK5O9Qa","phpn1ifZN","phpk9Sr7q"]', '<p>ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2</p>', '<p>ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2ТЕСТ 2</p>', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
