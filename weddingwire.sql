-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 05:49 PM
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
(1, 0, 'Photography', 0, 1, 'photography', 1, '2019-11-09 02:43:13', '2019-11-09 04:26:16', NULL, '', '', 'photography', 'photography', 'photography', 0),
(2, 0, 'Catering', 0, 2, 'catering', 1, '2019-11-09 03:28:53', '2019-11-09 04:26:16', NULL, '', '', 'photography', 'photography', 'kgiuiu', 1),
(3, 2, 'Food', 0, 1, 'food', 1, '2019-11-09 03:41:39', '2019-11-09 03:42:27', NULL, '', '', 'huh', 'ljoj', 'hgigy', 0),
(4, 2, 'Demo', 0, 2, 'demo', 1, '2019-11-09 03:44:29', '2019-11-09 03:44:39', NULL, '', '', 'Test', 'Test', 'Test', 0);

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
(4, '2019_11_10_114533_create_vendor_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$vR9Oj5Bbl.QAsnS5D7GeR.LgD/gTOO9Sqpl17GScWUZeO07dbTXii', 'admin', 'images/admin/1573300284FjMT2Z48qQkwwC8b18a9-3.jpg', 'uvomYfL6GIc08jmm7W0MkqwF4JxBSGIuYr03dim0NqwiSpIoKrE2FC224KNx', '2019-11-09 00:19:35', '2019-11-09 06:21:51'),
(15, 'Narinder', 'bajwa7696346232@gmail.com', NULL, '$2y$10$H0pYff.vGBEv0BJxMp3LZuh/cMLJp83xOePdQulB19Sb5UZk0kw2i', 'user', NULL, NULL, '2019-11-09 12:26:01', '2019-11-09 12:26:01'),
(16, 'Test', 'test@g.com', NULL, '$2y$10$d6McgdUf77JzyOy2nO8IWOL4b8zgMwjULMM.kYmE22FC4ffQqD3ri', 'user', NULL, NULL, '2019-11-09 12:30:41', '2019-11-09 12:30:41'),
(17, 'Test', 'testt@g.com', NULL, '$2y$10$/W7PA4hwkja5j/VQsebKpeWeyx/uew4DgiLGAHpsW1Ih40ck.6YDi', 'user', NULL, NULL, '2019-11-09 12:31:51', '2019-11-09 12:31:51'),
(18, 'Yeee', 'yene@g.com', NULL, '$2y$10$VmNgoM/Bo5zrNPaKnGhzQuj/u44lFuZ42wknQM36Kz.qPhdadVPdm', 'user', NULL, 'iM6k4ydzxyEABt7qKOR5lYUMu8p92nvnMdNG3sSs087qFxHle5fBnIu0krXH', '2019-11-09 12:36:31', '2019-11-09 12:36:31'),
(20, 'Narinder', 'bajwa9876470491@gmail.com', '2019-11-10 06:29:56', '$2y$10$Ftn9jwBjCvgaYUIOh0UFiebvxluBv.M7H6dzUTe7YTLG07R9NS4Ta', 'vendor', NULL, 'R2fDdDSwg0vfA5UwKiwoYNhmehGCMf6fpAafjGVUynfMMkaB5LNanPV1Ag3n', '2019-11-10 06:28:51', '2019-11-10 06:29:56');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
