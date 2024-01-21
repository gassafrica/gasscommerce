-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 12:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `shop_db`

-- --------------------------------------------------------

-- Table structure for table `admins`
CREATE TABLE IF NOT EXISTS `admins` (
  `id` INT(100) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admins` (`name`, `password`) VALUES
('admin', 'loginadmin');

-- --------------------------------------------------------

-- Table structure for table `cart`
CREATE TABLE IF NOT EXISTS `cart` (
  `id` INT(100) NOT NULL AUTO_INCREMENT,
  `user_id` INT(100) NOT NULL,
  `pid` INT(100) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `price` INT(10) NOT NULL,
  `quantity` INT(10) NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Table structure for table `messages`
CREATE TABLE IF NOT EXISTS `messages` (
  `id` INT(100) NOT NULL AUTO_INCREMENT,
  `user_id` INT(100) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `number` VARCHAR(12) NOT NULL,
  `message` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Table structure for table `orders`
CREATE TABLE IF NOT EXISTS `orders` (
  `id` INT(100) NOT NULL AUTO_INCREMENT,
  `user_id` INT(100) NOT NULL,
  `name` VARCHAR(20) NOT NULL,
  `number` VARCHAR(10) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `method` VARCHAR(50) NOT NULL,
  `address` VARCHAR(500) NOT NULL,
  `total_products` VARCHAR(1000) NOT NULL,
  `total_price` INT(100) NOT NULL,
  `placed_on` DATE NULL DEFAULT NULL,
  `payment_status` VARCHAR(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

-- Table structure for table `products`
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT(100) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `details` VARCHAR(500) NOT NULL,
  `price` INT(10) NOT NULL,
  `image_01` VARCHAR(100) NOT NULL,
  `image_02` VARCHAR(100) NOT NULL,
  `image_03` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Table structure for table `users`
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(100) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Table structure for table `wishlist`
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` INT(100) NOT NULL AUTO_INCREMENT,
  `user_id` INT(100) NOT NULL,
  `pid` INT(100) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `price` INT(100) NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Indexes for dumped tables

-- Indexes for table `admins`
ALTER TABLE `admins` ADD PRIMARY KEY (`id`);

-- Indexes for table `cart`
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `messages`
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `orders`
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `products`
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `users`
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `wishlist`
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT for dumped tables

-- AUTO_INCREMENT for table `admins`
ALTER TABLE `admins`
  MODIFY `id` INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- AUTO_INCREMENT for table `cart`
ALTER TABLE `cart`
  MODIFY `id` INT(100) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `messages`
ALTER TABLE `messages`
  MODIFY `id` INT(100) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `orders`
ALTER TABLE `orders`
  MODIFY `id` INT(100) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `products`
ALTER TABLE `products`
  MODIFY `id` INT(100) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `users`
ALTER TABLE `users`
  MODIFY `id` INT(100) NOT NULL AUTO_INCREMENT;

-- AUTO_INCREMENT for table `wishlist`
ALTER TABLE `wishlist`
  MODIFY `id` INT(100) NOT NULL AUTO_INCREMENT;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
