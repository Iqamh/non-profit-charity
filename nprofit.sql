-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 08:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nprofit`
--

-- --------------------------------------------------------

--
-- Table structure for table `causes`
--

CREATE TABLE `causes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goals` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `creator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `causes`
--

INSERT INTO `causes` (`id`, `title`, `description`, `image`, `goals`, `donation`, `start`, `end`, `creator`, `created_at`, `updated_at`) VALUES
(1, 'Coba', 'adnaondo', 'images/Screenshot 2023-06-17 094350.jpg', NULL, NULL, '2023-07-16', '2023-07-18', 'Admin', '2023-07-16 08:33:59', '2023-07-16 09:43:56'),
(3, 'COba Lai', '3e2edq', 'images/Screenshot 2023-06-17 094637.jpg', '2500000', NULL, '2023-07-20', '2023-07-31', 'Admin', '2023-07-16 08:37:42', '2023-07-16 08:37:42'),
(4, 'earum', 'Non consequatur eos illo ad est sit illum. At molestiae similique provident iusto quidem provident hic. Est vel exercitationem labore rerum quam. Enim rerum iste nam tempore sunt est. Tempore eos numquam eveniet molestiae unde.', NULL, '558208', NULL, '2023-08-01', '2003-01-24', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(5, 'dolore', 'Suscipit ut dolorum quidem nihil consequuntur sint reiciendis consectetur. Totam laborum cupiditate alias culpa. Provident eos facilis dolor reiciendis. Sint rerum neque molestias sit distinctio.', NULL, '504210', NULL, '2023-08-10', '1996-02-28', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(6, 'minima', 'Hic non voluptatem est aliquid et. Et totam hic inventore delectus. Qui sequi in assumenda iure voluptas voluptatem.', NULL, '855037', NULL, '2023-08-12', '2005-08-04', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(7, 'adipisci', 'Qui cum maiores qui et fuga. Omnis aut suscipit deleniti earum repellat. Voluptates aut quo reiciendis nostrum officia aliquid adipisci. Consequuntur omnis quod explicabo quo. Sed quis exercitationem omnis.', NULL, '817948', NULL, '2023-07-30', '2021-10-23', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(8, 'rem', 'Facere minus itaque magnam qui. Reprehenderit culpa expedita nihil. Omnis aut sit est aut aspernatur.', NULL, '194707', NULL, '2023-08-03', '2003-07-13', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(9, 'aut', 'In amet sit nulla voluptates perspiciatis aut. Sed qui quia ut asperiores aut dolorem nihil optio. Laboriosam ab ea qui quidem laudantium rerum sed. Natus libero ex quaerat laudantium fugiat qui doloremque perspiciatis.', NULL, '515184', NULL, '2023-08-02', '2007-07-13', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(10, 'blanditiis', 'Vero dolorem dolores incidunt aut quasi nulla ratione esse. Rerum ipsum placeat officiis enim est. Ea magnam sunt et aliquid voluptatibus ipsum.', NULL, '897130', NULL, '2023-08-13', '2008-07-13', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(11, 'cupiditate', 'Quae molestias ab voluptatem iusto. Tempore voluptatum atque sit et repellendus rerum. Hic eos qui alias blanditiis. Incidunt praesentium ut eaque.', NULL, '165824', NULL, '2023-07-29', '1976-04-29', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(12, 'sed', 'Eum sed deserunt molestiae alias consequatur nesciunt et. Molestiae in dolores dolor voluptatem aut. Qui in et at dicta. Odio rerum veniam voluptate distinctio voluptas.', NULL, '195155', NULL, '2023-08-02', '2003-02-19', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(13, 'ab', 'Nihil sequi at perferendis consequatur consequuntur corporis aut voluptatibus. Placeat dolores consequatur quaerat et iste omnis. Quia molestiae laboriosam officiis ex soluta dolores rerum. Quibusdam porro quis et repellendus quia aut temporibus.', NULL, '366857', NULL, '2023-07-20', '1979-09-08', 'Iqbal Abd', '2023-07-16 10:29:41', '2023-07-16 10:29:41'),
(14, 'id', 'Reiciendis eos et et debitis reiciendis. Quis enim est reiciendis voluptatem et harum. Voluptatibus amet tempora molestiae sint aut delectus.', NULL, '306145', NULL, '2023-07-25', '1986-01-31', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(15, 'maiores', 'Beatae asperiores eaque laborum autem excepturi in. Neque minus ea et hic. Numquam a officiis unde sed quia itaque vel autem. Maiores natus ea voluptatem qui.', NULL, '54038', NULL, '2023-07-23', '2008-05-04', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(16, 'magnam', 'Magni saepe quasi eos laudantium. Commodi sint et consequatur odit quaerat ut itaque. Cumque aliquid dolorem voluptatem est consequatur.', NULL, '459252', NULL, '2023-08-01', '1972-07-05', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(17, 'vel', 'Et fugit eveniet quibusdam nulla minus consequuntur aut. Optio autem perspiciatis aliquid molestias beatae ea velit. Corrupti quia ea qui ratione voluptatem vero doloremque. Libero eius dolorem minus soluta aspernatur consequatur.', NULL, '982587', NULL, '2023-07-21', '1994-03-27', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(18, 'ea', 'Deserunt harum ut delectus. Quia rerum consequatur rerum pariatur quis. Nemo sapiente sed molestiae excepturi veritatis at magni aspernatur.', NULL, '151293', NULL, '2023-07-18', '1998-10-07', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(19, 'qui', 'Eaque neque sint sed tempore ut numquam reprehenderit. Qui velit quasi voluptatem omnis beatae dolor. Qui cum asperiores commodi voluptatum aut aut. Magni laboriosam error aut nobis similique.', NULL, '460317', NULL, '2023-07-29', '2000-12-11', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(20, 'quis', 'Quia minima commodi nihil modi. Quis qui placeat enim cum. Rem et aut voluptatem occaecati error dolor.', NULL, '773475', NULL, '2023-07-27', '2011-11-17', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(21, 'autem', 'Et aliquam omnis ad reiciendis ullam consequatur. Excepturi magnam est quis dolorem optio ipsum voluptatem optio. Dolorum dolor id magni ab dolorem iure dolor. Quia qui mollitia voluptas eos voluptas animi provident.', NULL, '57707', NULL, '2023-08-05', '1972-07-26', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(22, 'rerum', 'Animi velit a voluptatibus eos voluptatibus. Accusamus est architecto enim expedita reprehenderit. Quam quas veniam consequatur est reprehenderit ullam enim beatae. Similique dignissimos magni possimus quia laudantium magni.', NULL, '676907', NULL, '2023-07-30', '1979-02-16', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(23, 'dicta', 'Enim iste voluptatibus sunt quidem eos. Corrupti aliquam reiciendis in dolore doloribus. Labore consequatur voluptates impedit quod eveniet dolor.', NULL, '663514', NULL, '2023-08-15', '2019-04-20', 'Iqbal Abd', '2023-07-16 10:37:01', '2023-07-16 10:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `sum` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `address`, `description`, `image`, `start`, `end`, `sum`, `created_at`, `updated_at`) VALUES
(27, 'ab', '7437 Juana Junction Apt. 851Brookbury, FL 85498-8039', 'Tempora ut accusamus deserunt nemo esse corporis rem. Itaque nesciunt ullam ea velit. Quaerat et ut dolorem fuga. Voluptatem dolor nihil labore accusamus modi inventore ex.', 'images/Screenshot 2023-07-15 211009.jpg', '2023-07-18', '2003-04-07', NULL, '2023-07-16 10:37:01', '2023-07-16 10:43:37'),
(28, 'dolor', '695 Kaia Plaza\nClaudineview, VT 65201-7078', 'Omnis repudiandae illo ut odio quia possimus corporis. Blanditiis rerum soluta laboriosam molestias et hic at. Debitis odio ex quibusdam quia et.', NULL, '2023-07-31', '1993-06-30', NULL, '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(29, 'eos', '9114 Mueller Estates\nNew Wilfridview, OK 50320-3092', 'Quo nesciunt blanditiis harum. Aut rerum rerum quam soluta nulla et doloribus in. Aperiam voluptatibus corporis ut nostrum rem ut. Consequatur perferendis iure facere tempora deserunt nam.', NULL, '2023-07-31', '1994-02-18', NULL, '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(30, 'sint', '8854 Goyette Lights Suite 224\nJesseville, AZ 01247', 'Consequuntur omnis ea tempora architecto. Impedit nemo consequatur nam ut ipsum consectetur aut. Et maiores suscipit laudantium dolor.', NULL, '2023-07-19', '1980-03-24', NULL, '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(31, 'deserunt', '32300 Eugenia Heights\nNitzschemouth, FL 82258-7041', 'Aut accusantium animi porro excepturi et. Porro ut nemo excepturi ipsum. Nobis non expedita ratione vitae consequatur reprehenderit.', NULL, '2023-08-11', '1978-03-01', NULL, '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(32, 'culpa', '1526 Hagenes View Apt. 440\nNolanview, IL 10354-7254', 'Quod exercitationem laudantium fugiat id aut voluptatem eius expedita. Aut incidunt unde repellendus mollitia. Sunt porro ratione modi consequatur corporis doloremque et debitis.', NULL, '2023-08-03', '1979-09-20', NULL, '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(33, 'et', '9414 Billie Fork\nEast Vivianneton, MA 93900', 'Quae nemo et praesentium omnis. Sed voluptas voluptates nihil dolor sequi. Est dolore fuga voluptas at neque. Et ipsa et inventore maxime quis.', NULL, '2023-08-10', '2019-06-01', NULL, '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(34, 'voluptatem', '6061 Stamm Passage Suite 404\nWest Bartholomeborough, AZ 18443', 'Amet placeat eligendi et sunt hic repellendus. Commodi voluptatem suscipit sit sed est fugiat eos ex. Exercitationem excepturi impedit qui laudantium aliquam sunt dolore vero. Quia omnis totam mollitia debitis odit et nihil.', NULL, '2023-07-22', '1994-03-07', NULL, '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(35, 'consectetur', '919 Tracey Radial\nWest Cleta, SD 11863', 'Nihil doloribus quaerat omnis qui explicabo nisi. Nisi cum illum laboriosam qui aut et ut. Est fuga doloremque perspiciatis.', NULL, '2023-07-25', '2007-05-22', NULL, '2023-07-16 10:37:01', '2023-07-16 10:37:01'),
(36, 'fugit', '4083 Jast Vista\nAustintown, OK 09934-8902', 'Natus qui cupiditate placeat dolore adipisci voluptatibus incidunt. Qui aut expedita veritatis error asperiores nihil cum. Veniam atque rerum impedit molestiae fuga. Laborum culpa nulla sunt non. Reprehenderit est quasi neque nulla.', NULL, '2023-07-23', '1987-10-02', NULL, '2023-07-16 10:37:01', '2023-07-16 10:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_07_15_051327_events', 1),
(13, '2023_07_15_051435_causes', 1),
(14, '2023_07_15_051508_galleries', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Iqbal Abd', 'iqbal.abd86@gmail.com', '1', NULL, NULL, '$2y$10$JgZ1uFjn6VOkyycxr2rW5O.guQPsCLkSGjDOb2QiT/GiiMwHYz0vS', NULL, '2023-07-15 09:01:09', '2023-07-15 09:01:09'),
(12, 'Gracie Ritchie', 'dabbott@example.org', '0', '+16898002884', NULL, '$2y$10$pfX9dIoyzlnqF5aiy1xZl.avmixZLPEAiXmLRXG4kEk/QFZukBb9u', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02'),
(13, 'Riley Schinner', 'julio18@example.com', '1', '(225) 705-6115', NULL, '$2y$10$52cm/pgWa5zA9uvdT2elvuPkrEPCAxIaK1WJ6S8cZnRKOAmse9KEO', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02'),
(14, 'Miss Reva Heidenreich', 'sibyl.paucek@example.org', '0', '+15759550693', NULL, '$2y$10$5S7WvhpkH69awrxslWXxCOO7punc59brMD9T8U8XDqzudzXzKwaqS', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02'),
(15, 'Stephany Kohler', 'murazik.orville@example.net', '0', '+1-641-939-5004', NULL, '$2y$10$ELnvGvup054g/vTD9.btzeIQv4oW6ym5jSALnOtVsWKHWOBUG8aXy', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02'),
(16, 'Naomie Renner III', 'reynolds.valentin@example.com', '1', '772.410.2165', NULL, '$2y$10$2hgAtRZu.3agc.5GHRzeuOWLY33wCo6pCUxdS9Fhg8JzEB6hWGv6.', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02'),
(17, 'Carrie Spinka', 'qschinner@example.com', '1', '1-847-719-4211', NULL, '$2y$10$rv2G3HLo4YzHFb6YQa8QCub8Mr2YSjGAP18e/xIuxrvtLpo.8l93C', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02'),
(18, 'Lazaro McLaughlin', 'rachel.braun@example.net', '0', '+13343392645', NULL, '$2y$10$vsxI3aGX9vFlrspfeqRYUOrpG5rnAiESiKGjNiuyWOAQhInBzg352', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02'),
(19, 'Alex Casper', 'nrosenbaum@example.net', '0', '256.774.0983', NULL, '$2y$10$ezEr9YnXHvBhcbwu6MXE5OYpHA4bmKhF3LX.I3vDljMHsDnbkdZk6', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02'),
(20, 'Raheem Koss', 'ulittle@example.com', '0', '+1 (838) 879-1152', NULL, '$2y$10$hTK7w74iRCnE2TXDQaLfeeGULoV85EYlxzAv60iK7j8m/gpRXrVou', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02'),
(21, 'Arlie Lowe', 'ignatius.lubowitz@example.org', '1', '680-246-3598', NULL, '$2y$10$Vwh7tMJR.xL6PB/80/sk0eBvEWBkpbYK9nWxZlvKXpDEGoGHo5oPm', NULL, '2023-07-16 10:37:02', '2023-07-16 10:37:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `causes`
--
ALTER TABLE `causes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `causes`
--
ALTER TABLE `causes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
