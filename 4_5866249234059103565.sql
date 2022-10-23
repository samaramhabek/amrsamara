-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 مارس 2022 الساعة 23:54
-- إصدار الخادم: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amrsamara`
--

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2022_02_18_162641_create_users_table', 1),
(27, '2022_02_18_162731_create_posts_table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imge_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `posts`
--

INSERT INTO `posts` (`id`, `imge_name`, `name`, `description`, `address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'video.jpg', 'sale', '\0', 'egypt', 3, NULL, NULL),
(2, '4.jpg', 'rent', 'this is house for rent is very good', 'syria', 3, NULL, NULL),
(3, 'contact.jpg', 'sale', 'klmklmkl', 'syria', 2, '2022-02-26 01:09:14', '2022-02-26 01:09:14'),
(4, '1.jpg', 'rent', 'knmkilon;hub', 'egypt', 2, '2022-02-26 01:11:13', '2022-02-26 01:11:13'),
(5, '2.jpg', 'sale', 'klmklmkl', 'egypt', 2, '2022-02-26 01:27:21', '2022-02-26 01:27:21'),
(6, '4.jpg', 'sale', 'fhxkygfiyygh;oh;ohg.gh/', 'حمدانية', 2, '2022-02-26 01:35:07', '2022-02-26 01:35:07'),
(7, 'bg.jpg', 'sale', 'kfjkleJRMFKLAERF jltrn/skl', 'syria', 3, NULL, NULL),
(8, 'bj.jpg', 'sale', 'fhxkygfiyygh;oh;ohg.gh/', 'syria', 2, '2022-03-09 04:32:38', '2022-03-09 04:32:38');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SorGEwVYPf', 'G1t31xF8fG@gmail.com', NULL, '$2y$10$ADV7OkLwkRLks0f.enb2pudXE3e.oaSyEEzZwGW6jBQcWY1mjQZVi', NULL, NULL, NULL),
(2, 'ebR1glrIst', 'HKjESaEM2U@gmail.com', NULL, '$2y$10$pIrTrIhPzf.JZWdh8DKLxOsvSRQgHZSX5.vwwCcMBoS6rIsM/isvO', NULL, NULL, NULL),
(3, 'RlX6wvI649', '4sfdq8HyqT@gmail.com', NULL, '$2y$10$KhM6MLYuF4vDfxeX6Den0uxRkk3lQ0nE5Pc560AyfOPIRIDrBeBS2', NULL, NULL, NULL),
(4, '2FvmIcxn1y', 'WrSeuu7YuO@gmail.com', NULL, '$2y$10$wd06bz9VcJL1EmG3A2IMLe5aC/HeZefqK5Fu7rE55Zbm82INt/ir6', NULL, NULL, NULL),
(5, 'hHB13gUolU', 'giFT5N9YKt@gmail.com', NULL, '$2y$10$7hA3L10CNK2OCw2liK5mj./D/I0TSJrhGT7VaYXtgrOU98QJrdYXy', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
