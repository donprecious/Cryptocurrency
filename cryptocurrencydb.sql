-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 20, 2018 at 01:19 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cryptocurrencydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `crypto_balances`
--

DROP TABLE IF EXISTS `crypto_balances`;
CREATE TABLE IF NOT EXISTS `crypto_balances` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cryptocurrency_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crypto_balance` decimal(20,6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `crypto_balances_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crypto_balances`
--

INSERT INTO `crypto_balances` (`id`, `user_id`, `cryptocurrency_type`, `crypto_balance`) VALUES
(2, 2, 'LTC', '1.600000'),
(3, 2, 'BTC', '0.300362'),
(4, 2, 'ETH', '4.000000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_08_132436_create_crypto_balances_table', 1),
(4, '2018_12_08_132607_create_transaction_types_table', 1),
(5, '2018_12_08_132637_create_transactions_table', 1),
(6, '2018_12_10_134231_create_usd_balances_table', 1),
(7, '2018_12_10_172729_change_columns_to_primary_key', 1),
(8, '2018_12_11_223439_create_token_orders_table', 2),
(9, '2018_12_12_074352_create_order_confirmations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_confirmations`
--

DROP TABLE IF EXISTS `order_confirmations`;
CREATE TABLE IF NOT EXISTS `order_confirmations` (
  `confirm_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`confirm_id`),
  KEY `order_confirmations_user_id_foreign` (`user_id`),
  KEY `order_confirmations_order_id_foreign` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `token_orders`
--

DROP TABLE IF EXISTS `token_orders`;
CREATE TABLE IF NOT EXISTS `token_orders` (
  `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `is_crypto` tinyint(1) NOT NULL,
  `currency_symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1008 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `token_orders`
--

INSERT INTO `token_orders` (`order_id`, `user_id`, `quantity`, `is_crypto`, `currency_symbol`, `status`, `created_at`, `updated_at`) VALUES
(15, 2, 500, 0, 'USD', 'PENDING', '2018-12-12 05:38:52', '2018-12-12 05:38:52'),
(16, 2, 500, 0, 'USD', 'PENDING', '2018-12-12 05:39:49', '2018-12-12 05:39:49'),
(17, 2, 500, 0, 'USD', 'PENDING', '2018-12-12 05:42:02', '2018-12-12 05:42:02'),
(1003, 2, 500, 0, 'USD', 'PENDING', '2018-12-12 05:52:57', '2018-12-12 05:52:57'),
(1004, 2, 400, 0, 'USD', 'PENDING', '2018-12-14 20:32:14', '2018-12-14 20:32:14'),
(1005, 2, 400, 0, 'USD', 'PENDING', '2018-12-14 21:19:38', '2018-12-14 21:19:38'),
(1006, 2, 400, 0, 'USD', 'PENDING', '2018-12-15 12:25:11', '2018-12-15 12:25:11'),
(1007, 2, 500, 0, 'USD', 'PENDING', '2018-12-19 14:45:07', '2018-12-19 14:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `Trans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `transaction_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cryptoType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` decimal(8,2) NOT NULL,
  `price_usd` decimal(8,2) NOT NULL,
  `price_per_coin_usd` decimal(10,0) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Trans_id`),
  KEY `transactions_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Trans_id`, `user_id`, `transaction_type`, `cryptoType`, `token`, `price_usd`, `price_per_coin_usd`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Buy token', 'LTC', '0.40', '20.00', '49038', 'Transaction Created', '2018-12-18 19:27:06', '2018-12-18 19:27:06'),
(3, 2, 'Buy token', 'BTC', '0.03', '100.00', '3245', 'Transaction Created', '2018-12-19 10:17:55', '2018-12-19 10:17:55'),
(4, 2, 'Sell', 'BTC', '0.01', '300.00', '3200', 'Transaction Created', '2018-12-19 10:43:14', '2018-12-19 10:43:14'),
(5, 2, 'Sell', 'BTC', '0.01', '300.00', '3200', 'Transaction Created', '2018-12-19 10:45:19', '2018-12-19 10:45:19'),
(6, 2, 'Sell', 'BTC', '0.20', '300.00', '3200', 'Transaction Created', '2018-12-19 10:46:31', '2018-12-19 10:46:31'),
(7, 2, 'Sell', 'BTC', '0.20', '300.00', '3200', 'Transaction Created', '2018-12-19 10:47:30', '2018-12-19 10:47:30'),
(8, 2, 'Sell', 'BTC', '1.20', '300.00', '3200', 'Transaction Created', '2018-12-19 10:51:40', '2018-12-19 10:51:40'),
(9, 2, 'Sell', 'BTC', '0.02', '300.00', '3200', 'Transaction Created', '2018-12-19 10:52:12', '2018-12-19 10:52:12'),
(10, 2, 'Sell', 'BTC', '0.02', '300.00', '3200', 'Transaction Created', '2018-12-19 10:52:13', '2018-12-19 10:52:13'),
(11, 2, 'Sell', 'BTC', '1.00', '300.00', '3200', 'Transaction Created', '2018-12-19 13:28:13', '2018-12-19 13:28:13'),
(12, 2, 'Buy token', 'BTC', '0.02', '89.00', '3824', 'Transaction Created', '2018-12-19 14:13:44', '2018-12-19 14:13:44'),
(13, 2, 'Buy token', 'BTC', '0.00', '1.20', '3829', 'Transaction Created', '2018-12-19 14:15:33', '2018-12-19 14:15:33'),
(14, 2, 'Buy token', 'ETH', '0.10', '10.00', '104', 'Transaction Created', '2018-12-19 14:17:14', '2018-12-19 14:17:14'),
(15, 2, 'Buy token', 'BTC', '0.02', '60.00', '3794', 'Transaction Created', '2018-12-19 17:05:51', '2018-12-19 17:05:51'),
(16, 2, 'Sell', 'LTC', '0.00', '300.00', '3200', 'Transaction Created', '2018-12-19 17:10:36', '2018-12-19 17:10:36'),
(17, 2, 'Sell', 'LTC', '1.00', '300.00', '3200', 'Transaction Created', '2018-12-19 17:11:07', '2018-12-19 17:11:07'),
(18, 2, 'Sell', 'LTC', '0.40', '300.00', '3200', 'Transaction Created', '2018-12-20 11:59:20', '2018-12-20 11:59:20'),
(19, 2, 'Buy token', 'BTC', '0.30', '1217.83', '4055', 'Transaction Created', '2018-12-20 12:15:29', '2018-12-20 12:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_types`
--

DROP TABLE IF EXISTS `transaction_types`;
CREATE TABLE IF NOT EXISTS `transaction_types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_types`
--

INSERT INTO `transaction_types` (`id`, `name`, `description`) VALUES
(1, 'Buy', 'Place a buy order, i.e Buy a crytocurrency token');

-- --------------------------------------------------------

--
-- Table structure for table `usdbalances`
--

DROP TABLE IF EXISTS `usdbalances`;
CREATE TABLE IF NOT EXISTS `usdbalances` (
  `user_id` int(11) NOT NULL,
  `Balance_usd` decimal(8,2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usdbalances`
--

INSERT INTO `usdbalances` (`user_id`, `Balance_usd`) VALUES
(2, '2601.97');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, 'iyeritufu@gmail.com', NULL, '$2y$10$LOYh9.LNghOTozrNMyuhrOtG9NlO5mmaZuNlzQ22Plu0VAOtDdwwO', 'cbM7d2AdNSi3SUpIyzOrGJgc0EshnoY5zpskWcwRLeptHioNTgE7luo8HecU', '2018-12-10 16:38:06', '2018-12-10 16:38:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
