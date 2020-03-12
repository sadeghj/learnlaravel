-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2020 at 02:29 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testprojects`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dcription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ostan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shahr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `commenttext` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fileimage` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_12_074314_create_comments_table', 0),
(5, '2020_03_12_074314_create_failed_jobs_table', 0),
(6, '2020_03_12_074314_create_password_resets_table', 0),
(7, '2020_03_12_074314_create_photos_table', 0),
(8, '2020_03_12_074314_create_posts_table', 0),
(9, '2020_03_12_074314_create_roles_table', 0),
(10, '2020_03_12_074314_create_taggables_table', 0),
(11, '2020_03_12_074314_create_tags_table', 0),
(12, '2020_03_12_074314_create_users_table', 0),
(13, '2020_03_12_074314_create_videos_table', 0),
(14, '2020_03_12_074316_add_foreign_keys_to_comments_table', 0),
(16, '2020_03_12_105703_create_table_address', 2),
(17, '2020_03_12_111547_create_address_table', 0),
(18, '2020_03_12_111547_create_comments_table', 0),
(19, '2020_03_12_111547_create_failed_jobs_table', 0),
(20, '2020_03_12_111547_create_password_resets_table', 0),
(21, '2020_03_12_111547_create_photos_table', 0),
(22, '2020_03_12_111547_create_posts_table', 0),
(23, '2020_03_12_111547_create_roles_table', 0),
(24, '2020_03_12_111547_create_taggables_table', 0),
(25, '2020_03_12_111547_create_tags_table', 0),
(26, '2020_03_12_111547_create_users_table', 0),
(27, '2020_03_12_111547_create_videos_table', 0),
(28, '2020_03_12_111549_add_foreign_keys_to_comments_table', 0),
(29, '2020_03_12_112536_create_address_table', 0),
(30, '2020_03_12_112536_create_comments_table', 0),
(31, '2020_03_12_112536_create_failed_jobs_table', 0),
(32, '2020_03_12_112536_create_password_resets_table', 0),
(33, '2020_03_12_112536_create_photos_table', 0),
(34, '2020_03_12_112536_create_posts_table', 0),
(35, '2020_03_12_112536_create_roles_table', 0),
(36, '2020_03_12_112536_create_taggables_table', 0),
(37, '2020_03_12_112536_create_tags_table', 0),
(38, '2020_03_12_112536_create_users_table', 0),
(39, '2020_03_12_112536_create_videos_table', 0),
(40, '2020_03_12_112537_add_foreign_keys_to_comments_table', 0),
(41, '2020_03_12_112713_create_address_table', 0),
(42, '2020_03_12_112713_create_comments_table', 0),
(43, '2020_03_12_112713_create_failed_jobs_table', 0),
(44, '2020_03_12_112713_create_password_resets_table', 0),
(45, '2020_03_12_112713_create_photos_table', 0),
(46, '2020_03_12_112713_create_posts_table', 0),
(47, '2020_03_12_112713_create_roles_table', 0),
(48, '2020_03_12_112713_create_taggables_table', 0),
(49, '2020_03_12_112713_create_tags_table', 0),
(50, '2020_03_12_112713_create_users_table', 0),
(51, '2020_03_12_112713_create_videos_table', 0),
(52, '2020_03_12_112714_add_foreign_keys_to_comments_table', 0),
(53, '2020_03_12_112919_create_address_table', 0),
(54, '2020_03_12_112919_create_comments_table', 0),
(55, '2020_03_12_112919_create_failed_jobs_table', 0),
(56, '2020_03_12_112919_create_password_resets_table', 0),
(57, '2020_03_12_112919_create_photos_table', 0),
(58, '2020_03_12_112919_create_posts_table', 0),
(59, '2020_03_12_112919_create_roles_table', 0),
(60, '2020_03_12_112919_create_taggables_table', 0),
(61, '2020_03_12_112919_create_tags_table', 0),
(62, '2020_03_12_112919_create_users_table', 0),
(63, '2020_03_12_112919_create_videos123_table', 0),
(64, '2020_03_12_112921_add_foreign_keys_to_comments_table', 0);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `imageable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `imageable_type` varchar(100) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `imageable_id`, `imageable_type`, `path`, `created_at`, `updated_at`) VALUES
(9, 11, 'App\\User', 'asdasd', '2020-02-18 18:56:13', '2020-02-18 18:54:52'),
(13, 0, '', 'phototest1.png', '2020-02-18 22:04:23', '2020-02-18 18:34:23'),
(14, 11, 'App\\User', 'phototest1.png', '2020-02-18 18:15:26', '2020-02-18 18:15:26'),
(15, 1, 'App\\Models\\Posts', 'phototest1.png', '2020-02-18 18:22:27', '2020-02-18 18:22:27'),
(16, 1, 'App\\Models\\Posts', 'phototest2.png', '2020-02-18 21:52:37', '2020-02-18 18:22:29'),
(17, 1, 'App\\Models\\Posts', 'phototest3.png', '2020-02-19 03:39:47', '2020-02-19 03:39:47'),
(18, 12, 'App\\User', 'phototest14.png', '2020-02-19 03:46:21', '2020-02-19 03:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'update test ', 'qsdqdqdqwd', '2020-02-18 19:39:45', '2020-02-18 16:09:45'),
(2, 'test2', 'dqdqwdq', '2020-02-18 19:00:10', '2020-02-18 18:47:52'),
(3, 'tinker test', 'post adding by tinker', '2020-02-18 16:00:10', '2020-02-18 16:00:10'),
(4, ' test2 add with tinker', 'test2 content', '2020-02-18 16:04:47', '2020-02-18 16:04:47'),
(7, 'many to many create2', 'test post many to many plymorphic2', '2020-02-19 04:05:44', '2020-02-19 04:05:44'),
(8, 'new post with tinker', 'new contents', '2020-02-19 06:24:13', '2020-02-19 06:24:13'),
(9, 'ali is good boy', 'ali test comment in tinker', '2020-02-19 06:29:31', '2020-02-19 06:29:31'),
(12, 'adwq', 'qweq', '2020-03-11 08:43:44', '2020-03-11 08:43:44'),
(15, 'test', 'test 2', '2020-03-11 08:52:13', '2020-03-11 08:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `discryption` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `discryption`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', NULL, '2020-02-05 00:00:00', NULL),
(2, 'Admin', NULL, '2020-02-05 00:00:00', NULL),
(3, 'Subscriber', NULL, '2020-02-05 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `taggable_id` int(11) DEFAULT NULL,
  `taggable_type` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`id`, `tags_id`, `taggable_id`, `taggable_type`) VALUES
(1, 1, 1, 'App\\Models\\Videos'),
(2, 2, 1, 'App\\Models\\Posts'),
(4, 2, 1, 'APP\\Models\\Videos'),
(7, 1, 1, 'App\\Models\\Posts'),
(8, 3, 7, 'App\\Models\\Posts');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'tutorial', '2020-02-13 04:03:22', '2020-02-13 04:03:22'),
(2, 'web', '2020-02-13 04:03:42', '2020-02-13 04:03:42'),
(3, 'android\r\n', '2020-02-13 04:03:51', '2020-02-13 04:03:51'),
(4, 'java', '2020-02-13 04:04:06', '2020-02-13 04:04:06'),
(5, 'Ui Ux', '2020-02-13 04:04:20', '2020-02-13 04:04:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `path`) VALUES
(11, 'sadegh', 'sadeghj.work@gmail.com', NULL, '$2y$10$LE9VF69sNP9x0kh5cy9KvurDaxHmtmEiJd0Smkth3rtcNQQCesgIK', NULL, '2020-02-18 15:16:02', '2020-02-18 15:16:02', NULL, NULL),
(12, 'sadeghj', 'sadeghj.work@gmail.com2', NULL, '$2y$10$xxQy0wilDTsLOysAEckvleMWyYA8iy18p7RDO1cmXuMoF94A0hyj.', NULL, '2020-02-18 15:16:28', '2020-02-18 15:16:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos123`
--

CREATE TABLE `videos123` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `path` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos123`
--

INSERT INTO `videos123` (`id`, `name`, `path`, `created_at`, `updated_at`) VALUES
(1, 'php.mp4', '', '2020-02-13 04:00:40', '2020-02-13 04:00:40'),
(2, 'laravel.mp4', '', '2020-02-13 04:00:51', '2020-02-13 04:00:51'),
(3, 'mvc.mp4', '', '2020-02-13 04:02:18', '2020-02-13 04:02:18'),
(4, 'test.mp4', '', '2020-02-13 04:02:28', '2020-02-13 04:02:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comments_users` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_photos_users` (`imageable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos123`
--
ALTER TABLE `videos123`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `videos123`
--
ALTER TABLE `videos123`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
