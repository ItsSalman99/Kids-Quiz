-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 03:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinequiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_timings` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `batch_timings`, `teacher`, `course`, `created_at`, `updated_at`) VALUES
(1, '9 TO 11', 'sir arsalan', 'php core', '2021-11-13 16:11:49', '2021-11-13 16:11:49'),
(2, '3 TO 5', 'sir talha', 'web designing', '2021-11-14 03:08:39', '2021-11-14 03:08:39'),
(3, '5 TO 7', 'Sir Ali', 'Microsoft Office', '2021-11-14 13:25:26', '2021-11-14 13:25:26'),
(4, '1 To 3', 'Sir Zuhaib', '.NET (MVC)', '2021-11-16 09:17:45', '2021-11-16 09:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_marks` int(11) NOT NULL,
  `exam_note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`, `exam_duration`, `exam_marks`, `exam_note`, `active`, `created_at`, `updated_at`) VALUES
(4, 'HTML 5', '30', 50, 'each question carry each marks', 1, '2021-11-14 05:32:12', '2021-11-16 09:03:16'),
(5, 'Angular js', '35', 40, 'each question carry each marks', 1, '2021-11-16 09:06:51', '2021-11-16 09:07:00'),
(6, 'Laravel 8', '20', 30, 'this is laravel exam for students', 1, '2021-11-16 09:13:14', '2021-11-16 09:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_11_13_150220_create_exams_table', 2),
(4, '2021_11_13_164805_create_questions_table', 3),
(5, '2021_11_13_165022_create_options_table', 3),
(6, '2021_11_13_204202_create_batches_table', 4),
(7, '2021_11_14_074018_add_batch_id_to_table_users', 5),
(8, '2021_11_14_130327_create_schedule_exams_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `option1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option4` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_id`, `option1`, `option2`, `option3`, `option4`, `created_at`, `updated_at`) VALUES
(18, 7, 'Mozilla Firefox', 'Opera', 'Both of the above.', 'None of the above.', '2021-11-16 09:04:10', '2021-11-16 09:04:10'),
(19, 8, 'All of the above.', 'Cookies are limited to about 4 KB of data .', 'thereby sending data unencrypted over the internet.', 'thereby slowing down your web application by transmitting data', '2021-11-16 09:05:16', '2021-11-16 09:05:16'),
(20, 9, 'item', 'itemprop', 'itemcheck', 'itemgroup', '2021-11-16 09:06:12', '2021-11-16 09:06:12'),
(21, 10, 'It is a software Code that stores the data.', 'None of the above.', 'it is a software Code that controls the interactions', 'that renders the user interface.', '2021-11-16 09:09:41', '2021-11-16 09:09:41'),
(22, 11, 'filter filter is a function which takes text as input.', 'used to filter the array to a subset of it based on provided', 'Both of the above.', 'None of the above.', '2021-11-16 09:11:09', '2021-11-16 09:11:09'),
(23, 12, 'average()', 'avg()', 'median()', 'avg_val()', '2021-11-16 09:14:21', '2021-11-16 09:14:21'),
(24, 13, 'Initialize a Laraval application', 'Call laravel library functions', 'Load the configuration files', 'Load laravel classes and models', '2021-11-16 09:14:58', '2021-11-16 09:14:58'),
(25, 14, 'cache:flush', 'cache:clear', 'cache:forget', 'cache:remove', '2021-11-16 09:16:13', '2021-11-16 09:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `right_answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `exam_id`, `question`, `right_answer`, `created_at`, `updated_at`) VALUES
(7, 4, 'Which of the following browser supports HTML5 in its latest version?', 'Both of the above.', '2021-11-16 09:04:10', '2021-11-16 09:04:10'),
(8, 4, 'Which of the following is true about Cookies?', 'All of the above.', '2021-11-16 09:05:16', '2021-11-16 09:05:16'),
(9, 4, 'Which of the following attribute is used to group items?', 'itemprop', '2021-11-16 09:06:12', '2021-11-16 09:06:12'),
(10, 5, 'What is controller in MVC?', 't is a software Code that controls the interactions', '2021-11-16 09:09:41', '2021-11-16 09:09:41'),
(11, 5, 'Which of the following is true about filter filter?', 'used to filter the array to a subset of it based on provided', '2021-11-16 09:11:08', '2021-11-16 09:11:08'),
(12, 6, 'Which method returns the average value of a given key ?', 'average()', '2021-11-16 09:14:21', '2021-11-16 09:14:21'),
(13, 6, 'Bootstrap directory in Laravel is used to', 'Load the configuration files', '2021-11-16 09:14:58', '2021-11-16 09:14:58'),
(14, 6, 'Artisan command to flush the application cache:', 'cache:clear', '2021-11-16 09:16:13', '2021-11-16 09:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_exams`
--

CREATE TABLE `schedule_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_exams`
--

INSERT INTO `schedule_exams` (`id`, `exam_id`, `batch_id`, `created_at`, `updated_at`) VALUES
(3, 4, 1, '2021-11-16 09:23:20', '2021-11-16 09:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `batch_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_img`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `batch_id`) VALUES
(1, 'abdul rehman', 'admin@admin.com', '1636814709.avatar-1.png', NULL, '$2y$10$thsohabiX3/YVCoIidVc2uzcJxlwSbpZvcGAjxbKuLvZgDL5utlHG', NULL, '2021-11-12 13:33:19', '2021-11-13 09:45:09', NULL),
(29, 'sir arsalan', 'arsalanrazzaq613@gmail.com', '1636904536.aaaaaaaaaaaa.jfif', NULL, '$2y$10$3OZagC8IyHQQOenuKRhKXusuRrPK05DqfcBxtYWWeSpSH4kMUGR16', NULL, '2021-11-14 10:42:16', '2021-11-14 10:42:16', NULL),
(31, 'zain mubashhir', 'Student1326579', NULL, NULL, NULL, NULL, '2021-11-14 11:14:12', '2021-11-14 11:14:12', 1),
(32, 'Rayyan Suahil', 'Student1541224', NULL, NULL, NULL, NULL, '2021-11-16 09:18:29', '2021-11-16 09:18:29', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `schedule_exams`
--
ALTER TABLE `schedule_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_exams_batch_id_foreign` (`batch_id`),
  ADD KEY `schedule_exams_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_batch_id_foreign` (`batch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedule_exams`
--
ALTER TABLE `schedule_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule_exams`
--
ALTER TABLE `schedule_exams`
  ADD CONSTRAINT `schedule_exams_batch_id_foreign` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_exams_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_batch_id_foreign` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
