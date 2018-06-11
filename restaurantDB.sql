-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2018 at 12:25 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.5-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3wa-resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 1, '2018-05-30 17:54:52', '2018-05-30 17:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `cart_id`, `dish_id`, `created_at`, `updated_at`) VALUES
(97, 2, 4, '2018-05-30 17:39:34', '2018-05-30 17:39:34'),
(98, 2, 12, '2018-05-30 17:40:57', '2018-05-30 17:40:57'),
(99, 2, 4, '2018-05-30 17:40:57', '2018-05-30 17:40:57'),
(100, 2, 5, '2018-05-30 17:40:58', '2018-05-30 17:40:58'),
(101, 2, 5, '2018-05-30 17:40:58', '2018-05-30 17:40:58'),
(102, 2, 6, '2018-05-30 17:40:58', '2018-05-30 17:40:58'),
(103, 2, 4, '2018-05-30 17:40:59', '2018-05-30 17:40:59'),
(104, 4, 4, '2018-05-30 17:45:27', '2018-05-30 17:45:27'),
(105, 5, 4, '2018-05-30 17:46:45', '2018-05-30 17:46:45'),
(106, 6, 4, '2018-05-30 17:48:13', '2018-05-30 17:48:13'),
(107, 6, 4, '2018-05-30 17:48:14', '2018-05-30 17:48:14'),
(108, 7, 12, '2018-05-30 17:50:47', '2018-05-30 17:50:47'),
(109, 7, 12, '2018-05-30 17:50:47', '2018-05-30 17:50:47'),
(110, 7, 12, '2018-05-30 17:50:47', '2018-05-30 17:50:47'),
(111, 10, 4, '2018-05-30 17:54:09', '2018-05-30 17:54:09'),
(112, 11, 6, '2018-05-30 17:54:45', '2018-05-30 17:54:45'),
(113, 11, 6, '2018-05-30 17:54:46', '2018-05-30 17:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `main_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `title`, `description`, `image`, `price`, `main_id`, `created_at`, `updated_at`) VALUES
(4, 'culpa', 'Qui sit incidunt doloribus eum ipsam illum placeat. Sed consectetur laudantium beatae qui et. Voluptatem a quam iure at nam aperiam commodi.', 'https://lorempixel.com/600/600/food/?97348', 1.36, 3, '2018-05-08 07:05:40', '2018-05-08 07:05:40'),
(5, 'sunt', 'Autem voluptatibus dignissimos repudiandae qui fuga. Eum placeat in ut consequuntur rerum. Qui ab et id eum nobis minima nisi. Veniam odit sequi ab dolor est et consectetur.', 'https://lorempixel.com/600/600/food/?49938', 3.26, 2, '2018-05-08 07:05:40', '2018-05-08 07:05:40'),
(6, 'cupiditate', 'Architecto et sed id eum sunt. Pariatur aut non inventore iure ut nesciunt neque. Amet iure voluptatem tenetur in fugiat quia voluptatem. Ex blanditiis corrupti praesentium id aut in enim quia.', 'https://lorempixel.com/600/600/food/?32048', 2.55, 4, '2018-05-08 07:05:40', '2018-05-08 07:05:40'),
(9, 'dolor', 'Impedit libero iste ut pariatur sunt odit consequuntur ut. Et ipsa et qui saepe. Autem dignissimos dolorem rerum nihil et ut nesciunt eaque. Quae alias magni unde ipsa.', 'https://lorempixel.com/600/600/food/?65427', 6.66, 4, '2018-05-08 07:05:40', '2018-05-08 07:05:40'),
(10, 'aut', 'Dolores sed ratione labore natus vero hic. Consequatur id debitis ab saepe a quo. Ducimus voluptatum perspiciatis tenetur saepe optio.', 'https://lorempixel.com/600/600/food/?89780', 6.99, 3, '2018-05-08 07:05:40', '2018-05-08 07:05:40'),
(12, 'dolor', 'Impedit libero iste ut pariatur sunt odit consequuntur ut. Et ipsa et qui saepe. Autem dignissimos dolorem rerum nihil et ut nesciunt eaque. Quae alias magni unde ipsa.', 'https://lorempixel.com/600/600/food/?66637', 3.99, 5, '2018-05-08 07:27:57', '2018-05-30 16:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE `mains` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mains`
--

INSERT INTO `mains` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Karšti patiekalai', '2018-05-08 07:05:40', '2018-05-30 16:31:57'),
(3, 'Užkandžiai', '2018-05-08 07:05:40', '2018-05-30 16:45:00'),
(4, 'Desertai', '2018-05-08 07:05:40', '2018-05-08 07:05:40'),
(5, 'Sriubos', '2018-05-08 08:51:57', '2018-05-08 09:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_05_07_062544_create_mains_table', 1),
(4, '2018_05_07_063544_create_dishes_table', 1),
(9, '2018_05_10_074631_create_reservations_table', 2),
(11, '2018_05_15_074328_create_carts_table', 4),
(12, '2018_05_15_074447_create_cart_items_table', 4),
(13, '2018_05_15_122416_create_order_items_table', 5),
(14, '2018_05_11_073845_create_orders_table', 6),
(17, '2018_05_17_080452_add_shipped_to_orders_table', 7),
(18, '2018_05_17_103711_add_admin_to_users_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total_paid` double(8,2) NOT NULL,
  `shipped` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_paid`, `shipped`, `created_at`, `updated_at`) VALUES
(40, 1, 222.35, 0, '2018-05-17 03:18:38', '2018-05-17 06:35:18'),
(41, 1, 35.35, 0, '2018-05-17 03:36:31', '2018-05-17 08:11:54'),
(42, 1, 194.89, 0, '2018-05-17 03:56:13', '2018-05-30 16:36:13'),
(43, 1, 219.09, 0, '2018-05-17 14:24:11', '2018-05-30 16:36:05'),
(44, 1, 59.55, 1, '2018-05-29 16:59:03', '2018-05-30 16:36:24'),
(45, 1, 17.14, 0, '2018-05-30 17:41:06', '2018-05-30 17:41:06'),
(47, 1, 1.36, 0, '2018-05-30 17:46:17', '2018-05-30 17:46:17'),
(48, 1, 1.36, 0, '2018-05-30 17:46:52', '2018-05-30 17:46:52'),
(49, 1, 2.72, 0, '2018-05-30 17:48:18', '2018-05-30 17:48:18'),
(50, 1, 11.97, 1, '2018-05-30 17:53:08', '2018-05-30 17:55:29'),
(53, 1, 1.36, 0, '2018-05-30 17:54:12', '2018-05-30 17:54:12'),
(54, 1, 5.10, 0, '2018-05-30 17:54:49', '2018-05-30 17:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `dish_id`, `created_at`, `updated_at`) VALUES
(18, 40, 14, '2018-05-17 03:18:38', '2018-05-17 03:18:38'),
(19, 40, 13, '2018-05-17 03:18:38', '2018-05-17 03:18:38'),
(20, 40, 13, '2018-05-17 03:18:38', '2018-05-17 03:18:38'),
(21, 40, 5, '2018-05-17 03:18:38', '2018-05-17 03:18:38'),
(22, 41, 4, '2018-05-17 03:36:31', '2018-05-17 03:36:31'),
(23, 41, 12, '2018-05-17 03:36:31', '2018-05-17 03:36:31'),
(24, 42, 14, '2018-05-17 03:56:13', '2018-05-17 03:56:13'),
(25, 42, 13, '2018-05-17 03:56:13', '2018-05-17 03:56:13'),
(26, 42, 12, '2018-05-17 03:56:13', '2018-05-17 03:56:13'),
(27, 42, 4, '2018-05-17 03:56:13', '2018-05-17 03:56:13'),
(28, 43, 14, '2018-05-17 14:24:11', '2018-05-17 14:24:11'),
(29, 43, 13, '2018-05-17 14:24:11', '2018-05-17 14:24:11'),
(30, 43, 13, '2018-05-17 14:24:11', '2018-05-17 14:24:11'),
(31, 44, 13, '2018-05-29 16:59:03', '2018-05-29 16:59:03'),
(32, 45, 4, '2018-05-30 17:41:06', '2018-05-30 17:41:06'),
(33, 45, 12, '2018-05-30 17:41:06', '2018-05-30 17:41:06'),
(34, 45, 4, '2018-05-30 17:41:06', '2018-05-30 17:41:06'),
(35, 45, 5, '2018-05-30 17:41:06', '2018-05-30 17:41:06'),
(36, 45, 5, '2018-05-30 17:41:06', '2018-05-30 17:41:06'),
(37, 45, 6, '2018-05-30 17:41:06', '2018-05-30 17:41:06'),
(38, 45, 4, '2018-05-30 17:41:06', '2018-05-30 17:41:06'),
(39, 47, 4, '2018-05-30 17:46:17', '2018-05-30 17:46:17'),
(40, 48, 4, '2018-05-30 17:46:52', '2018-05-30 17:46:52'),
(41, 49, 4, '2018-05-30 17:48:18', '2018-05-30 17:48:18'),
(42, 49, 4, '2018-05-30 17:48:18', '2018-05-30 17:48:18'),
(43, 50, 12, '2018-05-30 17:53:08', '2018-05-30 17:53:08'),
(44, 50, 12, '2018-05-30 17:53:08', '2018-05-30 17:53:08'),
(45, 50, 12, '2018-05-30 17:53:08', '2018-05-30 17:53:08'),
(46, 53, 4, '2018-05-30 17:54:12', '2018-05-30 17:54:12'),
(47, 54, 6, '2018-05-30 17:54:49', '2018-05-30 17:54:49'),
(48, 54, 6, '2018-05-30 17:54:49', '2018-05-30 17:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('smolskis.d@gmail.com', '$2y$10$kwfSr0QiDG5HA1uNji3Yjel8KM.p9X.L9pjaEfvfz16zL3p9kUOau', '2018-05-17 08:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `people` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `surname`, `email`, `people`, `phone`, `date`, `time`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Dom', 'Smol', 'smolskis.d@gmail.com', '1', '223421423', '2018-05-03', '1:00am', 'dasd', '2018-05-17 09:33:46', '2018-05-17 09:33:46'),
(4, 'Dom', 'Smol', 'smolskis.d@gmail.com', '1', '223421423', '2018-05-03', '1:00am', 'dasd', '2018-05-17 09:34:34', '2018-05-17 09:34:34'),
(5, 'Dom', 'Smol', 'smolskis.d@gmail.com', '1', '223421423', '2018-05-03', '1:00am', 'dasd', '2018-05-17 09:38:13', '2018-05-17 09:38:13'),
(6, 'test', 'test1', 'smolskis.d@gmail.com', '6', '37064896095', '2018-05-10', '1:30am', 'test', '2018-05-17 09:38:47', '2018-05-30 18:06:43'),
(7, 'test', 'test1', 'smolskis.d@gmail.com', '1', '37064896095', '2018-05-10', '1:30am', 'test', '2018-05-17 09:41:42', '2018-05-17 09:41:42'),
(9, 'test11', 'testas', 'montvidas.arturas@gmail.com', '3', '+37064896095', '2018-05-17', '9:30am', 'test', '2018-05-17 10:05:29', '2018-05-30 18:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `date_of_birth`, `phone_number`, `email`, `admin`, `password`, `address`, `city`, `zip_code`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dominykas', 'Smolskis', '1993-05-17', '863601522', 'smolskis.d@gmail.com', 1, '$2y$10$cxg2TzA35cnIU0dh2Mn5qO6ha3AWVUsHX6i0Tg53Q/SFmj/YpmyJC', 'Dominyko g. 48-41', 'Vilnius', '09209', 'Lithuania', 'cpGocKN9GBTd4ZIjjftueDtFYWYFgiji3n1ratinCKbJBsbN36LnsGj9YAfg', '2018-05-08 07:06:18', '2018-05-30 16:44:43'),
(2, 'Giedrius', 'Giedraitis', '1993-12-05', '86365965', 'giedrius@mail.com', 0, '$2y$10$A2IMgk3ZeOfb8PSeAQHjkeQoWYMm8tfH7NSJNP6Kjcol9RJmd3H2K', 'Vilniaus g. 10-2', 'Vilnius', '09222', 'Lithuania', 'UFHd7lWqBurlxo8FarLBotvsEA6D6aS5RFsfTfLnASa6qJoyXWOqkV5z8HAx', '2018-05-08 10:17:05', '2018-05-30 18:23:16'),
(4, 'Petras', 'Petraitis', '1993-05-05', '863656985', 'petras@gmail.com', 0, '$2y$10$YkjZdkNn0vx1tUKXmBgP1.CpbrRoAqK/RyOz8rBJgC6KSl2fhROxS', 'tokyo street 50-2', 'Tokyo', '99999', 'Japan', NULL, '2018-05-08 10:38:13', '2018-05-30 16:43:58'),
(5, 'Jonas', 'Jonaitis', '1993-12-05', '863601522', 'jonas@mail.com', 0, '$2y$10$n6H9dWFJhaluCPSDMYgjB.lbejT1hjQ5x08aSf3PdtzrivQ8TR4lO', 'Jono g. 15-2', 'Vilnius', '41566', 'Lithuania', 'FK4PoMI7OzKwWFIM1bRYE6cuBFMBi9F88czqLiXLule68YNHphpqtIRAgSy0', '2018-05-10 05:09:01', '2018-05-30 16:43:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dishes_main_id_foreign` (`main_id`);

--
-- Indexes for table `mains`
--
ALTER TABLE `mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `mains`
--
ALTER TABLE `mains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_main_id_foreign` FOREIGN KEY (`main_id`) REFERENCES `mains` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
