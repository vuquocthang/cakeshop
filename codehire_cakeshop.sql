-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 02:12 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codehire_cakeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'root', '$2a$06$e5XoRLsG51Y.qn2YRPdzFuIY8wvUg83vfzkYgdl7G4Gr8Px5Xyavq', 'FGwQUrozaMu3sQ9ttxuaaQJJ10BY8eg1ybaeHwHCQ1xmi57IACfnZS2TpSrr', '0000-00-00 00:00:00', '2017-05-14 16:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
  `id` int(10) unsigned NOT NULL,
  `catalogName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `catalogStatus` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `catalogName`, `catalogStatus`, `created_at`, `updated_at`) VALUES
(1, 'Bánh Kem', 1, '2017-05-11 13:31:10', '2017-05-11 17:37:50'),
(2, 'Bánh Ngọt', 1, '2017-05-11 14:14:12', '2017-05-11 17:37:52'),
(3, 'Bánh Gato', 1, '2017-05-11 14:15:04', '2017-05-11 14:15:04'),
(4, 'Nguyên Liệu', 1, '2017-05-11 16:07:24', '2017-05-11 16:07:24'),
(5, 'Dụng Cụ Làm Bánh', 1, '2017-05-11 16:07:33', '2017-05-11 16:07:33'),
(6, 'Bánh Kem 2', 0, '2017-05-11 17:38:00', '2017-05-11 17:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(65, '2014_10_12_000000_create_users_table', 1),
(66, '2014_10_12_100000_create_password_resets_table', 1),
(67, '2017_05_11_171411_create_catalog_table', 1),
(68, '2017_05_11_171538_create_product_table', 1),
(69, '2017_05_11_172753_create_admin_table', 1),
(70, '2017_05_11_173135_create_user_table', 1),
(75, '2017_05_11_174121_create_order_table', 3),
(76, '2017_05_13_015537_create_orderdetail_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL,
  `userId` int(10) unsigned NOT NULL,
  `orderDate` date NOT NULL,
  `orderStatus` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `userId`, `orderDate`, `orderStatus`, `created_at`, `updated_at`) VALUES
(4, 4, '2017-05-14', 1, '2017-05-14 16:41:45', '2017-05-14 17:06:53'),
(5, 4, '2017-05-15', 1, '2017-05-14 17:09:00', '2017-05-14 17:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE IF NOT EXISTS `orderdetail` (
  `id` int(10) unsigned NOT NULL,
  `productId` int(10) unsigned NOT NULL,
  `orderId` int(10) unsigned NOT NULL,
  `detailQuantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `productId`, `orderId`, `detailQuantity`, `created_at`, `updated_at`) VALUES
(4, 10, 4, 1, '2017-05-14 16:41:45', '2017-05-14 16:41:45'),
(5, 2, 5, 4, '2017-05-14 17:09:00', '2017-05-14 17:09:00'),
(6, 6, 5, 3, '2017-05-14 17:09:00', '2017-05-14 17:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `catalogId` int(10) unsigned NOT NULL,
  `productImageLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `productStatus` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productName`, `catalogId`, `productImageLink`, `productPrice`, `productDescription`, `productStatus`, `created_at`, `updated_at`) VALUES
(1, 'CUPCAKE VANI DÂU', 1, '1494541331.png', 50000, 'đây là mô tả', 0, '2017-05-11 15:00:51', '2017-05-11 17:38:37'),
(2, 'BÁNH KEM BẠC HÀ', 1, '1494546462.png', 90000, 'Bánh Kem Bạc Hà', 1, '2017-05-11 15:23:44', '2017-05-11 16:47:42'),
(3, 'Cupcake vani', 1, '1494546523.jpg', 50000, 'Mô tả', 1, '2017-05-11 16:48:43', '2017-05-11 16:48:43'),
(4, 'BÁNH TORRIJA', 1, '1494546564.png', 50000, 'Mô tả', 1, '2017-05-11 16:49:24', '2017-05-11 16:49:24'),
(5, 'CUPCAKE VANI DÂU', 2, '1494546600.png', 50000, 'Mô tả', 1, '2017-05-11 16:50:00', '2017-05-11 16:50:00'),
(6, 'CUPCAKE CHERRY', 2, '1494546645.png', 50000, 'Mô tả', 1, '2017-05-11 16:50:45', '2017-05-11 16:50:45'),
(7, 'BÁNH KEM DÂU', 2, '1494546701.png', 50000, 'Mô tả', 1, '2017-05-11 16:51:41', '2017-05-11 16:51:41'),
(8, 'CHOCOLATE NHÂN KEM', 3, '1494546748.png', 50000, 'Mô tả', 1, '2017-05-11 16:52:28', '2017-05-11 16:52:28'),
(9, 'MOCHI KEM TƯƠI', 2, '1494546786.png', 50000, 'Mô tả', 1, '2017-05-11 16:53:06', '2017-05-11 16:53:06'),
(10, 'CUPCAKE VANI DÂU', 3, '1494549539.png', 50000, 'Mô tả', 1, '2017-05-11 17:38:59', '2017-05-11 17:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL,
  `userEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userPassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userFullName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userPhoneNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userNote` text COLLATE utf8_unicode_ci,
  `userStatus` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userEmail`, `userPassword`, `userFullName`, `userPhoneNumber`, `userAddress`, `userNote`, `userStatus`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vuquocthang63@gmail.com', '123456', 'quốc thắng vũ', '01694470593', 'vuquocthang63@gmail.com', NULL, 1, NULL, '2017-05-12 22:32:43', '2017-05-12 22:32:43'),
(2, 'vuquocthang34@gmail.com', '111111', 'quốc thắng vũ', '01694470593', '1', NULL, 1, NULL, '2017-05-12 22:45:11', '2017-05-12 22:45:11'),
(3, 'vuquocthang64@gmail.com', '111111', 'quốc thắng vũ', '1694470593', 'Ha Noi', NULL, 1, NULL, '2017-05-13 01:26:33', '2017-05-13 01:26:33'),
(4, 'vuquocthang65@gmail.com', '111111', 'Vu Quoc Thang', '0123456789', 'Ha Noi', NULL, 1, NULL, '2017-05-13 23:46:20', '2017-05-13 23:46:20'),
(5, 'vuquocthang66@gmail.com', '123456', 'Vu Quoc Thang', '0123456789', 'tp Ho Chi Minh', NULL, 1, NULL, '2017-05-14 17:09:49', '2017-05-14 17:09:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_username_unique` (`username`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_userid_foreign` (`userId`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderdetail_productid_foreign` (`productId`),
  ADD KEY `orderdetail_orderid_foreign` (`orderId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_catalogid_foreign` (`catalogId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_useremail_unique` (`userEmail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_orderid_foreign` FOREIGN KEY (`orderId`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderdetail_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_catalogid_foreign` FOREIGN KEY (`catalogId`) REFERENCES `catalog` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
