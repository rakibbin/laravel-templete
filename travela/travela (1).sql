-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 05:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travela`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `photo`, `title1`, `title2`, `content`, `created_at`, `updated_at`) VALUES
(1, 'about-img.jpg', 'ABOUT US', 'Welcome to Travela', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum, doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam assumenda? Id atque iste consectetur. Commodi odit ab saepe!  Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero numquam perferendis provident placeat molestiae quia?', '2024-03-12 04:21:50', '2024-03-12 04:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `bloges`
--

CREATE TABLE `bloges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `btn` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bloges`
--

INSERT INTO `bloges` (`id`, `photo`, `date`, `title1`, `title2`, `content`, `btn`, `created_at`, `updated_at`) VALUES
(1, 'destination-4.jpg', '28 Jan 2050', 'Posted By: Royal Hamblin', 'Adventures Trip', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos', 'Read More', '2024-03-18 22:36:06', '2024-03-18 23:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `conatacts`
--

CREATE TABLE `conatacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conatacts`
--

INSERT INTO `conatacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Sojib', 'admin@admin.com', 'English', 'The contact form is currently inactive.', '2024-03-19 22:36:41', '2024-03-19 22:36:41'),
(2, 'Ruhol Amin', 'ruhulamin@gmail.com', 'Bangla', 'The contact form is currently inactive.', '2024-03-19 22:40:07', '2024-03-19 22:40:07'),
(3, 'Kodor', 'kodo@gmail.com', 'Math', 'The contact form is currently inactive.', '2024-03-19 22:40:39', '2024-03-19 22:40:39'),
(4, 'Sojib', 'limon0178440@gmail.com', 'Arabiq', 'The contact form is currently inactive.', '2024-03-19 22:41:44', '2024-03-19 22:41:44'),
(5, 'Shihab', 'soynik86@gmail.com', 'Bangla', 'The contact form is currently inactive.', '2024-03-19 22:42:14', '2024-03-19 22:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `dest` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `kids` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `date`, `dest`, `person`, `kids`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'Rayhan Khan', 'admin@gmail.com', '2024-03-18', '3', '2', '2', 'amr vai', '2024-03-18 04:04:37', '2024-03-18 04:04:37'),
(2, 'Nesar Uddin', 'nesaruddin@gmail.com', '2024-03-07', '2', '3', '1', 'mejo vai', '2024-03-18 06:32:21', '2024-03-18 06:32:21'),
(3, 'Nesar Uddin', 'nesaruddin@gmail.com', '2024-03-16', '3', '1', '1', 'fasdg', '2024-03-18 06:46:43', '2024-03-18 06:46:43'),
(4, 'forhad', 'admin2@admin.com', '2024-03-19', '1', '1', '1', 'sdfhsdfjh', '2024-03-18 23:32:59', '2024-03-18 23:32:59'),
(5, 'Helal Uddin', 'hela@gmail.com', '2024-03-20', '2', '2', '1', 'amet consectetur adipisicing eli', '2024-03-19 21:16:04', '2024-03-19 21:16:04'),
(6, 'Shihab', 'shihab@gmail.com', '2024-03-16', '2', '3', '3', 'amet consectetur adipisicing eli', '2024-03-19 21:16:49', '2024-03-19 21:16:49'),
(7, 'Sojib', 'sazib@gmail.com', '2024-03-19', '2', '2', '2', 'dff', '2024-03-19 22:43:55', '2024-03-19 22:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_03_162319_create_navbars_table', 2),
(6, '2024_03_04_060113_create_services_table', 3),
(7, '2024_03_12_092641_create_abouts_table', 4),
(8, '2024_03_14_115312_create_packages_table', 5),
(9, '2024_03_17_063832_create_packages_table', 6),
(10, '2024_03_18_095009_create_messages_table', 7),
(11, '2024_03_18_100621_create_subscribes_table', 8),
(12, '2024_03_19_040020_create_bloges_table', 9),
(13, '2024_03_20_032903_create_conatacts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `btn` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbars`
--

INSERT INTO `navbars` (`id`, `photo`, `title1`, `title2`, `content`, `btn`, `created_at`, `updated_at`) VALUES
(3, 'carousel-3.jpg', 'EXPLORE THE WORLD', 'Find Your Perfect Tour At Travel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Discover Now', '2024-03-04 06:58:22', '2024-03-12 02:37:31'),
(4, 'carousel-2.jpg', 'Explore The World', 'Find Your Perfect Tour At Travel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Discover Now', '2024-03-04 07:04:14', '2024-03-04 07:04:14'),
(6, 'carousel-1.jpg', 'EXPLORE THE WORLD', 'Find Your Perfect Tour At Travel', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Discover Now', '2024-03-17 01:44:22', '2024-03-17 01:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `title3` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `title4` varchar(100) NOT NULL,
  `title5` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `title6` varchar(100) NOT NULL,
  `title7` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `photo`, `title1`, `title2`, `title3`, `price`, `title4`, `title5`, `content`, `title6`, `title7`, `created_at`, `updated_at`) VALUES
(2, 'packages-3.jpg', 'Thayland', '3 days', '3 Person', 55550.00, 'Thayland Trip', 'Hotel Deals', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Read More', 'Book Now', '2024-03-17 01:33:39', '2024-03-17 01:33:39'),
(3, 'packages-2.jpg', 'Venice - Italy', '3 days', '2 Person', 50000.00, 'The New California', 'Hotel Details', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Read More', 'Book Now', '2024-03-17 01:35:35', '2024-03-17 01:35:35'),
(4, 'packages-4.jpg', 'Thayland', '3 days', '2 Person', 60000.00, 'Thayland Trip', 'Hotel Details', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Read More', 'Book Now', '2024-03-17 01:58:11', '2024-03-17 01:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `content`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'WorldWide Tours rk', 'rk Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.', 'world.png', '2024-03-12 02:19:33', '2024-03-12 04:34:31'),
(2, 'Hotel Reservation', 'Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.', 'Download hotel icon  symbol sign for free.jpg', '2024-03-12 02:20:21', '2024-03-12 02:20:21'),
(3, 'Travel Guides', 'Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.', 'user.png', '2024-03-12 02:21:13', '2024-03-12 02:21:13'),
(6, 'Event Management', 'Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore consequuntur voluptate rem reiciendis, omnis sequi harum earum.', 'setting.png', '2024-03-18 21:35:37', '2024-03-18 21:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'rakibkhan1772@gamil.com', '2024-03-18 04:27:04', '2024-03-18 04:27:04'),
(9, 'rakibkhan1772@gamil.com', '2024-03-18 05:19:46', '2024-03-18 05:19:46'),
(10, 'rakibkhan1772@gamil.com', '2024-03-18 05:20:35', '2024-03-18 05:20:35'),
(13, 'zahid94dc@gmail.com', '2024-03-18 06:58:18', '2024-03-18 06:58:18'),
(14, 'zahid94dc@gmail.com', '2024-03-18 06:58:45', '2024-03-18 06:58:45'),
(21, 'mabruruhul@gmail.com', '2024-03-19 21:22:49', '2024-03-19 21:22:49'),
(22, 'mabrurruhul@gmail.com', '2024-03-19 21:23:58', '2024-03-19 21:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloges`
--
ALTER TABLE `bloges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conatacts`
--
ALTER TABLE `conatacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloges`
--
ALTER TABLE `bloges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conatacts`
--
ALTER TABLE `conatacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
