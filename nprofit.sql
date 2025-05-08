-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2023 pada 09.51
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `causes`
--

CREATE TABLE `causes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `goals` varchar(255) DEFAULT NULL,
  `donation` varchar(255) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `creator` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `causes`
--

INSERT INTO `causes` (`id`, `title`, `description`, `image`, `goals`, `donation`, `start`, `end`, `creator`, `created_at`, `updated_at`) VALUES
(65, 'Tubuh Cahyo Melemah Penglihatan Telah Menghilang', 'membantu oprasi cahyo', 'images/Tubuh Cahyo Melemah Penglihatan Telah Menghilang.jpg.png', '756467', '15000', '2023-08-02', '2023-08-29', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:31:45'),
(66, 'Bantu Hadiahkan Kaki Palsu', 'membantu ibu qosidah mendapatkan kaki palsu', 'images/Bantu Hadiahkan Kaki Palsu.jpeg.png', '857330', '857330', '2023-08-13', '2023-08-28', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:32:39'),
(67, 'Bantu infrastruktur di perdalaman', 'Bantu infrastruktur di perdalaman.jpeg', 'images/Bantu infrastruktur di perdalaman.jpeg.png', '137444', NULL, '2023-07-22', '2023-09-14', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:33:12'),
(68, '10000 Quran Untuk Korban Bencana', '10000 Quran Untuk Korban Bencana.jpeg', 'images/10000QuranUntukKorbanBencana.jpeg', '578957', NULL, '2023-08-04', '2023-09-13', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:33:36'),
(69, 'Bantu Ambon Bangkit Dari Bencana', 'Bantu Ambon Bangkit Dari Bencana.jpeg', 'images/Bantu Ambon Bangkit Dari Bencana.jpeg.png', '318761', NULL, '2023-07-23', '2023-09-01', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:34:02'),
(70, 'Beri makan kucing terlantar', 'Beri makan kucing terlantar', 'images/Beri makan kucing terlantar.jpeg.png', '688664', NULL, '2023-08-12', '2023-09-02', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:34:32'),
(71, 'Celengan Beasiswa Narasi', 'Celengan Beasiswa Narasi', 'images/Celengan Beasiswa Narasi.jpeg.png', '556903', NULL, '2023-08-05', '2023-09-10', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:35:19'),
(72, 'Donasi Anak Idap Kanker Darah', 'Donasi Anak Idap Kanker Darah', 'images/Donasi Anak Idap Kanker Darah.jpg.png', '476983', NULL, '2023-07-29', '2023-08-23', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:35:51'),
(73, 'Donasi Rizki Kejang Kejang Akibat kanker', 'Donasi Rizki Kejang Kejang Akibat kanker', 'images/Donasi Rizki Kejang Kejang Akibat kanker.jpg.png', '570951', NULL, '2023-08-01', '2023-08-23', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:36:40'),
(74, 'Gadis Belia, Terbakar Sekujur Tubuh', 'Gadis Belia, Terbakar Sekujur Tubuh', 'images/Gadis Belia, Terbakar Sekujur Tubuh.jpeg.png', '939278', NULL, '2023-07-25', '2023-08-27', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:37:11'),
(75, 'Kursi Roda Untuk Disabilitas', 'Kursi Roda Untuk Disabilitas', 'images/Kursi Roda Untuk Disabilitas.jpeg.png', '356104', NULL, '2023-07-22', '2023-09-15', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:37:42'),
(76, 'Patungan Pendidikan Di Belajaraya 2023', 'Patungan Pendidikan Di Belajaraya 2023', 'images/Patungan Pendidikan Di Belajaraya 2023.jpeg.png', '25099', NULL, '2023-08-12', '2023-09-07', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:38:15'),
(77, 'Peduli Bencana DI Indonesia', 'Peduli Bencana DI Indonesia', 'images/Peduli Bencana DI Indonesia.jpeg.png', '94915', NULL, '2023-08-05', '2023-09-11', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:38:47'),
(78, 'Peduli Hewan Sekitar', 'Peduli Hewan Sekitar', 'images/Peduli Hewan Sekitar.jpeg.png', '802472', NULL, '2023-08-10', '2023-09-10', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:39:21'),
(79, 'Sedekah Jariyah Pangan Yatim Dhuafa', 'Sedekah Jariyah Pangan Yatim Dhuafa', 'images/Sedekah Jariyah Pangan Yatim Dhuafa.jpeg.png', '771676', NULL, '2023-07-25', '2023-09-01', 'Iqbal Abd', '2023-07-20 07:30:37', '2023-07-22 00:40:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donates`
--

CREATE TABLE `donates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_nama` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `donation_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `donates`
--

INSERT INTO `donates` (`id`, `u_nama`, `title`, `donation_amount`, `created_at`, `updated_at`) VALUES
(5, 'Balls', 'dolorum', '5000', '2023-07-20 16:36:20', '2023-07-20 16:36:20'),
(6, 'Balls', 'dolorum', '5000', '2023-07-20 16:36:26', '2023-07-20 16:36:26'),
(7, 'Balls', 'ab', '857330', '2023-07-20 16:38:58', '2023-07-20 16:38:58'),
(9, 'Iqbal Abd', 'ab', NULL, '2023-07-21 02:10:47', '2023-07-21 02:10:47'),
(10, 'Iqbal Abd', 'ab', NULL, '2023-07-21 02:10:47', '2023-07-21 02:10:47'),
(11, 'not today', 'dolorum', '5000', '2023-07-21 02:12:06', '2023-07-21 02:12:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `address`, `description`, `image`, `start`, `end`, `created_at`, `updated_at`) VALUES
(106, 'Relawan international humanity foundation', 'jl.sidosermo indah', 'Relawan international humanity foundation', 'images/Relawan international humanity foundation.jpeg.png', '2023-08-16', '2023-09-10', '2023-07-20 07:29:51', '2023-07-22 00:17:07'),
(107, 'Relawan Bencana Banjir', 'dusun balaraja', 'Relawan Bencana Banjir', 'images/Relawan Bencana Banjir.jpeg.png', '2023-08-01', '2023-08-20', '2023-07-20 07:29:51', '2023-07-22 00:18:04'),
(108, 'Relawan Muslim Charity', 'jl. ampel', 'Relawan Muslim Charity', 'images/Relawan Muslim Charity.jpeg.png', '2023-08-15', '2023-09-05', '2023-07-20 07:29:51', '2023-07-22 00:19:23'),
(109, 'relawan covid 19', '3526 Estefania ExtensionNorth Hipolito, MT 33473-3607', 'relawan covid 19 yang terdampak', 'images/relawan covd 19.jpeg.png', '2023-08-15', '2023-09-14', '2023-07-20 07:29:51', '2023-07-22 00:20:27'),
(110, 'Relawan Komunitas PetaBencana', '635 Itzel RiverSouth Dock, VA 41253-2674', 'Relawan Komunitas PetaBencana', 'images/Relawan Komunitas PetaBencana.id.jpeg.png', '2023-08-02', '2023-09-03', '2023-07-20 07:29:51', '2023-07-22 00:21:22'),
(111, 'Be the part for inspiring them together', '5450 Kuhic ViaductNorth Cortneystad, AZ 75431-7068', 'relawan pembantu sekolah', 'images/Be the part for inspiring them together.jpg.png', '2023-08-01', '2023-09-17', '2023-07-20 07:29:51', '2023-07-22 00:22:28'),
(112, 'Open Recruitment Volunteer Bencana Banjir', '85490 Von ParkSouth Efren, WI 31384-4225', 'Open Recruitment Volunteer Bencana Banjir', 'images/Open Recruitment Volunteer Bencana Banjir.jpg.png', '2023-08-07', '2023-08-27', '2023-07-20 07:29:51', '2023-07-22 00:26:54'),
(113, 'sosialisasi kepada siswa berkebutuhan khusus', '87056 Donnelly IslandWest Chadd, AK 22940-4623', 'sosialisasi kepada siswa berkebutuhan khusus', 'images/sosialisasi kepada siswa berkebutuhan khusus.jpeg.png', '2023-08-10', '2023-08-20', '2023-07-20 07:29:51', '2023-07-22 00:29:16'),
(114, 'Volunteer Mengajar Di Bali', '372 Goldner StreetLucilefort, AL 91525', 'Volunteer Mengajar Di Bali', 'images/Volunteer Mengajar Di Bali.jpeg.png', '2023-08-13', '2023-09-16', '2023-07-20 07:29:51', '2023-07-22 00:29:49'),
(115, 'Volunteer Mengajar Di Medan', '75811 Jerrell Land Suite 903Marquardtborough, FL 26784-4936', 'Volunteer Mengajar Di Medan', 'images/Volunteer Mengajar Di Medan.jpeg.png', '2023-08-08', '2023-08-20', '2023-07-20 07:29:51', '2023-07-22 00:30:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `activity`, `created_at`, `updated_at`) VALUES
(19, 'images/ad819ed3c30a9ade807392c942053def.png', 'molestias', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(20, 'images/57fbb1bda8e95c4aa92bda7f0ab872af.png', 'magnam', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(21, 'images/e1e662e6d2464b19814e8f19295101bd.png', 'iste', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(22, 'images/644b6fe5b138c1e3783cdd3dd2528076.png', 'consectetur', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(23, 'images/5a236ccd11e91069f1c35b0a44f1a4ba.png', 'consectetur', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(24, 'images/26a00da88bda173232410b3093bce0a7.png', 'dolorem', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(25, 'images/cd602c9fc1d783cfa94f207f46708b88.png', 'vero', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(26, 'images/84b3ed28da6218e898a1aa489a491453.png', 'aperiam', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(27, 'images/a0b61ade27bcd6382ae9ac763069b12d.png', 'vero', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(28, 'images/b4029f57f7c9219dac3e8ecb45719bb1.png', 'aperiam', '2023-07-20 07:31:12', '2023-07-20 07:31:12'),
(29, 'images/250e92bb7e845381564b1e05384f0812.png', 'magnam', '2023-07-20 07:31:12', '2023-07-20 07:31:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_07_15_051327_events', 1),
(13, '2023_07_15_051435_causes', 1),
(14, '2023_07_15_051508_galleries', 1),
(15, '2023_07_20_210459_volunteer', 2),
(16, '2023_07_20_223933_donates', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Iqbal Abd', 'iqbal.abd86@gmail.com', '1', NULL, NULL, '$2y$10$JgZ1uFjn6VOkyycxr2rW5O.guQPsCLkSGjDOb2QiT/GiiMwHYz0vS', NULL, '2023-07-15 09:01:09', '2023-07-15 09:01:09'),
(23, 'Albertha Stoltenberg', 'bsimonis@example.com', '0', '+1.240.352.6838', NULL, '$2y$10$zdDorouX/.drMmGgrhV/q.IM9tsgTWEPM8e1DzUjrybazfYOVDDQ2', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(24, 'Ilene Ruecker', 'fokuneva@example.org', '1', '1-814-459-3908', NULL, '$2y$10$hXMVLjmLPFXOhvvjIwIGle9z1.TKn323b/4LJp9c2FzrV0rNBAXpW', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(25, 'Darrell Barrows', 'monahan.keara@example.com', '0', '(435) 997-3103', NULL, '$2y$10$qXGG11flCd.tx6yDIOy/uuEffaefSUUXtfLr/sS0swx2tEW/m6nu6', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(26, 'Marilou Zemlak', 'hilpert.gerry@example.net', '1', '+17692494202', NULL, '$2y$10$0utGe2Qta9LQTxzl0FHr8eoT0A6D6tXspUj0aqrg6hL5pNYgAGkeG', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(27, 'April Torphy', 'oabbott@example.com', '1', '(727) 602-6387', NULL, '$2y$10$mIcmV2PCkT3/l6NiqBqcKOBaRM7guY8Wzrv8Gn2hA9UpAb8AgL50a', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(28, 'Gonzalo Kohler', 'ugrady@example.net', '1', '1-743-237-6228', NULL, '$2y$10$GB6xQV6psPtolqc/3o0BtuVL0hvd378jAzeh2bXfe.f3/yc0uCD4O', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(29, 'Guadalupe Ernser', 'mohr.tillman@example.org', '1', '580.225.4175', NULL, '$2y$10$1rXoqDi77q6jvzhR5t/0f.T.Em7OMpBhLSghdYLcMMQ1NM6ryeQ2C', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(30, 'Berta Larson', 'albert.torphy@example.org', '0', '+1-828-316-1100', NULL, '$2y$10$BX0FzcYCYVExjIUV0rPWnuwcn/f7bnuq1pyl.T15bpx7sxwHvENQm', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(31, 'Dedric Crooks', 'alfonzo26@example.com', '0', '1-949-966-5641', NULL, '$2y$10$O0QUUWBFDmWmL6ZhvE1GZOLxZ0fBHkrKeqac9JVxyJpUVv7QJa9be', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(32, 'Gregory Prohaska', 'lynch.vita@example.net', '1', '+1-901-275-6464', NULL, '$2y$10$7xw4s.chdILYRz5CkoN4cuIjqt9PDw7kq/RiEtZFWbdyasxK3mKWO', NULL, '2023-07-20 07:31:13', '2023-07-20 07:31:13'),
(33, 'Balls', 'blah@gmail.com', '0', NULL, NULL, '$2y$10$Uq018NLfiO1FmuUxx9AGoexPBavPmeBy/e9NIQ5UzJj6zJ/3ju3Qy', NULL, '2023-07-20 07:37:34', '2023-07-20 07:37:34'),
(34, 'not today', 'blahhh@gmail.com', '0', NULL, NULL, '$2y$10$4JC1ITV534JnKxI3VSfjfOgSzKKkhs3fEyjWMA9UT5bCaconTpU0K', NULL, '2023-07-21 02:11:46', '2023-07-21 02:11:46'),
(35, 'stany', 'cakrabayuu28@gmail.com', '0', NULL, NULL, '$2y$10$nbK9/.voDHF6w5WMX1qzJ.tYxJ9FUf4ZZn3aQCRD6lulJJtSe20TW', NULL, '2023-07-22 00:04:56', '2023-07-22 00:04:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_nama` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `volunteers`
--

INSERT INTO `volunteers` (`id`, `u_nama`, `title`, `nama`, `email`, `phone`, `address`, `reason`, `file`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Balls', 'voluptatem', 'not today', 'blah@gmail.com', '0457664', 'hesoyam', 'knbkjn', 'file/11 - PUR - PBO - Interface & Abstract Class (Modul Praktikum).pdf', '0', '2023-07-20 16:01:57', '2023-07-20 16:01:57'),
(5, 'Balls', 'commodi', 'Bro', 'bruh@gmail.com', '0323231134', 'dnkanfejnfjei', 'bjbjbj', 'file/PF - Laravel Authentication.pdf', '0', '2023-07-20 16:02:32', '2023-07-20 16:02:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `causes`
--
ALTER TABLE `causes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `volunteer_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `causes`
--
ALTER TABLE `causes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `donates`
--
ALTER TABLE `donates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
