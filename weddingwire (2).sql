-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 09:49 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddingwire`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `description`, `slug`, `image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'amenity', 'amenity desc', 'amenity', NULL, NULL, 1, '2019-11-13 04:03:18', '2019-11-13 04:29:07'),
(2, 'ams', 'desc', 'am', NULL, NULL, 1, '2019-11-13 04:04:25', '2019-11-13 04:22:33'),
(3, 'amity', 'desct', 'amity', NULL, NULL, 1, '2019-11-13 04:07:59', '2019-11-13 04:07:59'),
(4, 'amen', 'descf', 'amen', NULL, 'amenity', 1, '2019-11-13 04:30:49', '2019-11-13 05:16:43'),
(5, 'ff', 'ss', 'ff', NULL, NULL, 1, '2019-11-13 04:33:53', '2019-11-13 04:33:53'),
(6, 'ames', 'ds', 'ames', NULL, 'amenity', 1, '2019-11-13 04:34:50', '2019-11-13 04:34:50'),
(7, 'ne', 's', 'ne', NULL, 'game', 1, '2019-11-13 04:43:32', '2019-11-13 05:15:39'),
(8, 'gg', 'ff', 'gg', NULL, 'amenity', 1, '2019-11-13 04:43:45', '2019-11-13 04:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent` int(11) DEFAULT '0',
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subparent` int(11) DEFAULT '0',
  `sorting` int(11) DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `featured` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent`, `label`, `subparent`, `sorting`, `slug`, `status`, `created_at`, `updated_at`, `description`, `image`, `thumbnail_image`, `meta_title`, `meta_tag`, `meta_description`, `featured`) VALUES
(1, 0, 'Photography', 0, 24, 'photography', 1, '2019-11-09 02:43:13', '2019-11-13 05:20:48', NULL, '', '', 'photography', 'photography', 'photography', 0),
(2, 0, 'Catering', 0, 25, 'catering', 1, '2019-11-09 03:28:53', '2019-11-13 05:21:43', NULL, '', '', 'photography', 'photography', 'kgiuiu', 1),
(3, 2, 'Food', 0, 2, 'food', 1, '2019-11-09 03:41:39', '2019-11-13 05:21:43', NULL, '', '', 'huh', 'ljoj', 'hgigy', 0),
(4, 2, 'Demo', 0, 1, 'demo', 1, '2019-11-09 03:44:29', '2019-11-13 05:21:43', NULL, '', '', 'Test', 'Test', 'Test', 0),
(5, 0, 'Transportation', 0, 1, 'transportation', 1, '2019-11-13 02:48:49', '2019-11-13 05:20:47', NULL, '', '', 'Transportation', 'Transportation', 'Transportation', 1),
(6, 0, 'Balloons', 0, 2, 'balloons', 1, '2019-11-13 02:49:07', '2019-11-13 05:20:47', NULL, '', '', 'Balloons', 'Balloons', 'Balloons', 1),
(7, 0, 'Bands', 0, 3, 'bands', 1, '2019-11-13 02:49:22', '2019-11-13 05:20:47', NULL, '', '', 'Bands', 'Bands', 'Bands', 1),
(8, 0, 'Catering/ Beverages', 0, 4, 'catering-beverages', 1, '2019-11-13 02:49:53', '2019-11-13 05:20:47', NULL, '', '', 'Catering/ Beverages', 'Catering/ Beverages', 'Catering/ Beverages', 1),
(9, 0, 'Churches/Temples', 0, 5, 'churches-temples', 1, '2019-11-13 02:50:23', '2019-11-13 05:20:47', NULL, '', '', 'Churches/Temples', 'Churches/Temples', 'Churches/Temples', 1),
(10, 0, 'Musicians/Instrumentalist', 0, 6, 'musicians-instrumentalist', 1, '2019-11-13 02:50:46', '2019-11-13 05:20:47', NULL, '', '', 'Musicians/Instrumentalist', 'Musicians/Instrumentalist', 'Musicians/Instrumentalist', 1),
(11, 0, 'Venues', 0, 7, 'venues', 1, '2019-11-13 02:51:29', '2019-11-13 05:20:47', NULL, '', '', 'Venues', 'Venues', 'Venues', 1),
(12, 0, 'Flowers/Florist', 0, 8, 'flowers-florist', 1, '2019-11-13 02:51:44', '2019-11-13 05:20:47', NULL, '', '', 'Flowers/Florist', 'Flowers/Florist', 'Flowers/Florist', 1),
(13, 0, 'Clothing/Dressing and Jewelries', 0, 9, 'clothing-dressing-and-jewelries', 1, '2019-11-13 02:52:02', '2019-11-13 05:20:47', NULL, '', '', 'Clothing/Dressing and Jewelries', 'Clothing/Dressing and Jewelries', 'Clothing/Dressing and Jewelries', 1),
(14, 0, 'Beauty and Health', 0, 10, 'beauty-and-health', 1, '2019-11-13 02:52:35', '2019-11-13 05:20:47', NULL, '', '', 'Beauty and Health', 'Beauty and Health', 'Beauty and Health', 1),
(15, 0, 'Staffing/Officiants', 0, 11, 'staffing-officiants', 1, '2019-11-13 02:52:54', '2019-11-13 05:20:47', NULL, '', '', 'Staffing/Officiants', 'Staffing/Officiants', 'Staffing/Officiants', 1),
(16, 0, 'Photography/Videography', 0, 12, 'photography-videography', 1, '2019-11-13 02:53:14', '2019-11-13 05:20:47', NULL, '', '', 'Photography/Videography', 'Photography/Videography', 'Photography/Videography', 1),
(17, 0, 'Party/Event Rental', 0, 13, 'party-event-rental', 1, '2019-11-13 02:53:35', '2019-11-13 05:20:47', NULL, '', '', 'Party/Event Rental', 'Party/Event Rental', 'Party/Event Rental', 1),
(18, 0, 'DJ/Entertainment/MC', 0, 14, 'dj-entertainment-mc', 1, '2019-11-13 02:56:51', '2019-11-13 05:20:47', NULL, '', '', 'DJ/Entertainment/MC', 'DJ/Entertainment/MC', 'DJ/Entertainment/MC', 1),
(19, 0, 'Entertainer', 0, 15, 'entertainer', 1, '2019-11-13 03:33:22', '2019-11-13 05:20:47', NULL, '', '', 'Entertainer', 'Entertainer', 'Entertainer', 1),
(20, 0, 'Event Planner', 0, 16, 'event-planner', 1, '2019-11-13 03:34:21', '2019-11-13 05:20:47', NULL, '', '', 'Event Planner', 'Event Planner', 'Event Planner', 1),
(21, 0, 'Funeral Service', 0, 17, 'funeral-service', 1, '2019-11-13 03:34:36', '2019-11-13 05:20:47', NULL, '', '', 'Funeral Service', 'Funeral Service', 'Funeral Service', 1),
(22, 0, 'Printing/Stationary Services', 0, 18, 'printing-stationary-services', 1, '2019-11-13 03:34:51', '2019-11-13 05:20:47', NULL, '', '', 'Printing/Stationary Services', 'Printing/Stationary Services', 'Printing/Stationary Services', 1),
(23, 0, 'Lodging', 0, 19, 'lodging', 1, '2019-11-13 03:35:02', '2019-11-13 05:20:47', NULL, '', '', 'Lodging', 'Lodging', 'Lodging', 1),
(24, 0, 'Cake', 0, 20, 'cake', 1, '2019-11-13 03:35:12', '2019-11-13 05:20:47', NULL, '', '', 'Cake', 'Cake', 'Cake', 1),
(25, 0, 'Decoration', 0, 21, 'decoration', 1, '2019-11-13 03:35:23', '2019-11-13 05:20:47', NULL, '', '', 'Decoration', 'Decoration', 'Decoration', 1),
(26, 0, 'Favors/Gift Registry', 0, 22, 'favors-gift-registry', 1, '2019-11-13 03:35:38', '2019-11-13 05:20:48', NULL, '', '', 'Favors/Gift Registry', 'Favors/Gift Registry', 'Favors/Gift Registry', 1),
(27, 0, 'SECURITY', 0, 23, 'security', 1, '2019-11-13 03:35:52', '2019-11-13 05:20:48', NULL, '', '', 'SECURITY', 'SECURITY', 'SECURITY', 1),
(28, 5, 'Sam', 0, 1, 'sam', 1, '2019-11-13 10:36:27', '2019-11-13 10:36:48', NULL, '', '', 'Sam', 'Sam', 'Sam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_variations`
--

CREATE TABLE `category_variations` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_variations`
--

INSERT INTO `category_variations` (`id`, `parent`, `category_id`, `variant_id`, `type`, `created_at`, `updated_at`) VALUES
(104, NULL, 7, 8, 'amenity', '2019-11-13 09:15:12', '2019-11-13 09:15:12'),
(105, NULL, 7, 7, 'game', '2019-11-13 09:15:12', '2019-11-13 09:15:12'),
(117, NULL, 6, 4, 'event', '2019-11-13 09:16:10', '2019-11-13 09:16:10'),
(118, NULL, 6, 6, 'amenity', '2019-11-13 09:16:10', '2019-11-13 09:16:10'),
(119, NULL, 6, 8, 'amenity', '2019-11-13 09:16:10', '2019-11-13 09:16:10'),
(120, NULL, 6, 7, 'game', '2019-11-13 09:16:10', '2019-11-13 09:16:10'),
(121, NULL, 5, 1, 'event', '2019-11-13 09:16:13', '2019-11-13 09:16:13'),
(122, NULL, 5, 4, 'amenity', '2019-11-13 09:16:13', '2019-11-13 09:16:13'),
(123, NULL, 5, 7, 'game', '2019-11-13 09:16:13', '2019-11-13 09:16:13'),
(124, NULL, 8, 3, 'event', '2019-11-13 09:16:25', '2019-11-13 09:16:25'),
(125, NULL, 8, 7, 'event', '2019-11-13 09:16:26', '2019-11-13 09:16:26'),
(126, NULL, 8, 6, 'amenity', '2019-11-13 09:16:26', '2019-11-13 09:16:26'),
(127, NULL, 8, 7, 'game', '2019-11-13 09:16:26', '2019-11-13 09:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tests', 'Testing', 'test', NULL, 1, '2019-11-12 14:00:41', '2019-11-12 15:03:28'),
(2, 'Wedding', 'Wedding', 'wedding', NULL, 1, '2019-11-13 03:36:46', '2019-11-13 03:36:46'),
(3, 'Reception', 'Reception', 'reception', NULL, 1, '2019-11-13 03:37:17', '2019-11-13 03:37:17'),
(4, 'Baby Shower', 'Baby Shower', 'baby-shower', NULL, 1, '2019-11-13 03:38:50', '2019-11-13 03:38:50'),
(5, 'Retreat/ Team Building', 'Retreat/ Team Building', 'retreat-team-building', NULL, 1, '2019-11-13 03:38:58', '2019-11-13 03:38:58'),
(6, 'Date Night', 'Date Night', 'date-night', NULL, 1, '2019-11-13 03:39:10', '2019-11-13 03:39:10'),
(7, 'Birth Day', 'Birth Day', 'birth-day', NULL, 1, '2019-11-13 03:39:21', '2019-11-13 03:39:21'),
(8, 'Hot', 'Hot Des', 'hot', NULL, 1, '2019-11-13 15:05:42', '2019-11-13 15:05:42');

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
(3, '2019_11_09_040849_create_categories_table', 1),
(4, '2019_11_10_114533_create_vendor_categories_table', 2),
(5, '2019_11_12_172559_create_events_table', 3),
(6, '2019_11_12_172713_create_amenities_table', 3),
(7, '2019_11_13_091032_create_vendor_category_meta_datas_table', 4),
(8, '2019_11_13_111529_create_category_variations_table', 5),
(9, '2019_11_13_201236_create_seasons_table', 6);

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
('bajwa9876470492@gmail.com', '$2y$10$w6Nzc11m9jJ5qxqsW7JhTuEFwHq0udXcINIVH3bdaNNbZnp.Tqb1m', '2019-11-12 10:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `name`, `description`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hots', 'Hot Des', 'hots', NULL, 1, '2019-11-13 15:07:45', '2019-11-13 15:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `role`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$vR9Oj5Bbl.QAsnS5D7GeR.LgD/gTOO9Sqpl17GScWUZeO07dbTXii', 'admin', 'images/admin/1573645323TGCUAduttOoNN0NQAJYl-220px-User_icon_2.svg.png', 'xNrfbygrd2WETeOaVqS9jEJCNTTHNnRlxRdxVZpK97twwjZaRWEWAKWXvlFG', '2019-11-09 00:19:35', '2019-11-13 06:12:03'),
(31, 'Narinder Bajwa', 'Narinder', 'Bajwa', 'bajwa7696346232@gmail.com', '2019-11-12 07:02:09', '$2y$10$he8YxmZeBwdKAMqcbtQ0/.aJqTWo1Nxpm/WCKXK2XaEZAAJUE7Hc.', 'vendor', NULL, 'xxcjZrA0Ww8qifTrSKaMFgLh059F3ab6pyFXx0dUpB7bboDqEgpPqRMcd1y0', '2019-11-12 06:11:13', '2019-11-12 11:31:55'),
(32, 'Narinder Bajwa', 'Narinder', 'Bajwa', 'bajwa9876470492@gmail.com', NULL, '$2y$10$tiBVNqE4PMLEbmyfMNH9/eXn4rkSKw0uHTNdeFJEALg2yBdwB04JG', 'user', NULL, NULL, '2019-11-12 06:25:25', '2019-11-12 06:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_categories`
--

CREATE TABLE `vendor_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_categories`
--

INSERT INTO `vendor_categories` (`id`, `parent`, `user_id`, `category_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 31, 1, 1, '2019-11-12 07:08:21', '2019-11-12 07:08:21'),
(2, 0, 31, 3, 1, '2019-11-12 07:08:21', '2019-11-12 07:08:21'),
(3, 0, 31, 2, 1, '2019-11-12 07:08:21', '2019-11-12 07:08:21'),
(4, 3, 31, 3, 1, '2019-11-12 07:08:21', '2019-11-12 07:08:21'),
(5, 3, 31, 4, 1, '2019-11-12 07:08:21', '2019-11-12 07:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_category_meta_datas`
--

CREATE TABLE `vendor_category_meta_datas` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent` int(11) DEFAULT '0',
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyValue` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_category_meta_datas`
--

INSERT INTO `vendor_category_meta_datas` (`id`, `parent`, `key`, `type`, `keyValue`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 0, 'video', 'videoGallery', '{\"title\":\"demo\",\"link\":\"https:\\/\\/www.youtube.com\\/embed\\/Bey4XXJAqS8\"}', 31, 1, '2019-11-13 05:13:23', '2019-11-13 05:13:23'),
(5, 0, 'aboutus_slider_images', 'imageGallery', 'images/vendors/gallery/1573647610Fm9PclNaVBEolm5aIgZ1-download-_3_.jpeg', 31, 1, '2019-11-13 06:50:10', '2019-11-13 06:50:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_variations`
--
ALTER TABLE `category_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_category_meta_datas`
--
ALTER TABLE `vendor_category_meta_datas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `category_variations`
--
ALTER TABLE `category_variations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor_category_meta_datas`
--
ALTER TABLE `vendor_category_meta_datas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
