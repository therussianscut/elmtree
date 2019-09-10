-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2019 at 10:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smccann11`
--

-- --------------------------------------------------------

--
-- Table structure for table `itemsforsale`
--

CREATE TABLE `itemsforsale` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `itemtype` varchar(255) NOT NULL,
  `itemdescription` varchar(500) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `path` varchar(150) NOT NULL DEFAULT 'Placeholder.png',
  `available` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `itemsforsale`
--

INSERT INTO `itemsforsale` (`id`, `userid`, `itemtype`, `itemdescription`, `price`, `path`, `available`) VALUES
(1059, 141, 'book', 'Learning PHP book', '15.50', '6028beginning_php.jpg', '2019-03-10'),
(1063, 142, 'book', 'Chamber of Secrets', '15.50', '1931chamberofsecrets.jpg', '2019-03-10'),
(1064, 143, 'Services', 'Dog Walking', '15.00', '7390dog_walking.jpg', '2019-03-10'),
(1066, 143, 'Clothes', 'Formal Dress', '75.00', '8186formal_dress.jpg', '2019-03-10'),
(1067, 144, 'Clothes', 'Formal Evening Wear', '150.00', '6973formal_dress_2.jpg', '2019-03-10'),
(1068, 144, 'electronics', 'Hitachi Television', '399.99', '3589hitachi_tv.jpg', '2019-03-10'),
(1069, 144, 'Services', 'Private Hairdressing', '55.55', '3417hairdresser.jpg', '2019-03-05'),
(1070, 144, 'electronics', 'iPhoneX', '899.99', '6027iphoneX.jpg', '2019-03-10'),
(1077, 146, 'book', 'The Lion, The Witch and The Wardrobe', '6.10', '7809lion_witch_wardrode.jpg', '2019-03-10'),
(1078, 146, 'electronics', 'MacBook Pro', '999.99', '7795macbook.jpg', '2019-03-10'),
(1079, 147, 'Services', 'Lawnmowing', '20.00', '8443mowing_lawn.jpg', '2019-03-10'),
(1080, 147, 'book', 'Pelican Brief', '4.50', '8320pelican_brief.jpg', '2019-03-10'),
(1081, 148, 'electronics', 'Samsung S10', '799.99', '7749samsung_s10.jpg', '2019-03-10'),
(1083, 148, 'Services', 'Window Cleaning', '22.22', '8058window_cleaning.jpg', '2019-03-10'),
(1084, 146, 'Services', 'House Cleaningnnnnnnnnnn', '11.99', '530house_cleaning.jpg', '2019-03-10'),
(1085, 141, 'electronics', 'Beats Headphones', '299.99', '8810beats_headphones.jpg', '2019-03-10'),
(1086, 145, 'electronics', 'HP Laptop', '999.99', '3677laptop.jpg', '2019-03-10'),
(1088, 145, 'Clothes', 'Jeans', '32.99', '1143jeans.jpg', '2019-03-10'),
(1089, 148, 'Clothes', 'Red Trousers', '55.99', '2366trousers.jpg', '2019-03-10'),
(1098, 152, 'electronics', 'iphone66666', '39.99', '46234045iphoneX.jpg', '2019-03-20'),
(1099, 152, 'Services', 'services', '98.00', '20673385golf_caddy.jpg', '2019-03-20'),
(1100, 145, 'book', 'bookcccc', '52.33', '4419java_book.jpg', '2019-03-20'),
(1101, 142, 'electronics', 'iphone6 plus', '66.77', '44774045iphoneX.jpg', '2019-03-20'),
(1102, 152, 'electronics', 'phone phone phone', '3.99', '62524045iphoneX.jpg', '2019-03-20'),
(1103, 157, 'book', 'A book to read', '10.59', '40336028beginning_php.jpg', '2019-03-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemsforsale`
--
ALTER TABLE `itemsforsale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemsforsale`
--
ALTER TABLE `itemsforsale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1104;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemsforsale`
--
ALTER TABLE `itemsforsale`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
