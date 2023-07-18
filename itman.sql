-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2023 pada 18.25
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Bdu', 'asdj@aksd.co', 'LASKDL', '2022-05-26 05:31:06', '2022-05-26 05:31:06'),
(2, 'asfasfa', 'asfaf@gmaam.om', 'afsagdsv', '2022-05-26 05:37:13', '2022-05-26 05:37:13'),
(3, 'aku', 'aku@gmail.com', 'alhamdulillah', '2022-05-26 05:40:39', '2022-05-26 05:40:39'),
(5, 'gua siapa', 'guaaja@yaudah.iya', 'ah elah deh', '2022-05-28 06:12:51', '2022-05-28 06:12:51'),
(6, 'nanda', 'nanda@gmail.co', 'rusak laptop tidak nyyyala', '2022-10-17 06:44:06', '2022-10-17 06:44:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_25_140915_create_services_table', 1),
(6, '2022_05_25_142604_create_orders_table', 1),
(7, '2022_05_26_121842_create_messages_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `service_id`, `user_id`, `status`, `total_price`, `created_at`, `updated_at`) VALUES
(1, '[2,3]', '1', 'new', '10400000', '2022-05-25 10:21:17', '2022-05-25 10:21:17'),
(2, '[3]', '2', 'new', '10400000', '2022-05-25 10:28:51', '2022-05-25 10:28:51'),
(3, '[3]', '2', 'new', '100000', '2022-05-25 10:35:31', '2022-05-25 10:35:31'),
(4, '[2,4]', '2', 'new', '10300000', '2022-05-25 17:37:22', '2022-05-25 17:37:22'),
(5, '[3]', '2', 'new', '100000', '2022-05-26 05:06:22', '2022-05-26 05:06:22'),
(6, '[2,3,4]', '2', 'new', '10400000', '2022-05-26 06:20:52', '2022-05-26 06:20:52'),
(7, '[2,4]', '4', 'new', '10300000', '2022-05-26 11:54:13', '2022-05-26 11:54:13'),
(8, '[3]', '2', 'new', '100000', '2022-05-28 06:12:27', '2022-05-28 06:12:27'),
(9, '[2,4]', '5', 'new', '10300000', '2022-05-28 06:47:25', '2022-05-28 06:47:25'),
(10, '[2,4]', '2', 'new', '10300000', '2022-05-30 02:35:03', '2022-05-30 02:35:03'),
(11, '[2,4]', '6', 'new', '10300000', '2022-08-12 11:28:12', '2022-08-12 11:28:12'),
(12, '[3]', '7', 'new', '100000', '2022-10-17 06:43:41', '2022-10-17 06:43:41'),
(13, '[2,3,4]', '7', 'new', '10400000', '2022-10-17 06:46:07', '2022-10-17 06:46:07'),
(14, '[2,3]', '7', 'new', '400000', '2022-10-17 06:46:14', '2022-10-17 06:46:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Network Installation & Troubleshooting', 'Install computer networks such as local area networks (LANs), wide area networks (WANs), the Internet, intranets, and other data communications systems. Install server hardware and software infrastructure. Set up user accounts and passwords. Monitor network usage and security. Manage email, spam, and virus protection.', '300000', '1653495697.jpeg', '2022-05-25 09:21:37', '2022-05-25 09:21:37'),
(3, 'PC Installation & Setting', 'The professionals deal with creating, assembling, installing and maintaining computer systems. The primary role is to address the hardware and software issues.', '100000', '1653497218.jpg', '2022-05-25 09:46:58', '2022-05-25 09:46:58'),
(4, 'Applications Development (web, mobile, AI)', 'Build and maintain both web and mobile applications for our organization Collaborate with the rest of the team to ensure applications align with the organization’s goals, as well as customer needs Oversee the performance of applications to ensure they’re always running properly Improve our overall application development process and continuously find ways to advance our apps Daily and Monthly Responsibilities Build software that fulfills specific needs Find solutions to security threats, viruses, or errors that might hinder the performance of applications Carry out regular security and performance checks Remain current on technology trends to keep our software as innovative as possible Stay on track of the application lifecycle to ensure necessary updates are completed on time', '10000000', '1653497424.jpg', '2022-05-25 09:50:24', '2022-05-25 09:50:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'admin@admin.com', '2022-05-25 07:52:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', 'gSBdhU20T9DEV8ZgIKAJmhEHSGiNlmyWgegA07rpHr5ElC0Xfv7D3gPL4cJu', '2022-05-25 07:52:53', '2022-05-25 07:52:53'),
(2, 'Zaki Tegar Alamsyah', 'zak@gmail.com', NULL, '$2y$10$EGYbjgaas0KDDfnKJVEhN.elS5Bg1FBpi/ElxMwVK7u0YZ6eVXCom', 'user', NULL, '2022-05-25 08:44:46', '2022-05-25 08:44:46'),
(3, 'Kopi Nako Sawangan', 'kopinako@gmail.com', NULL, '$2y$10$KtIHKqxe.zUZhn26N0SbGuOxU5ZZ8opx.OmjoaOPoyredu2JZab7y', 'user', NULL, '2022-05-26 06:21:52', '2022-05-26 06:21:52'),
(4, 'Farida Hafsah', 'iday@gmail.com', NULL, '$2y$10$rYcRCapNdwspawurgxzVRuzY52Uk6end.4OVgZhYMY3J6myOG4TEq', 'user', NULL, '2022-05-26 11:52:20', '2022-05-26 11:52:20'),
(5, 'yaudah', 'yaudah@gmail.com', NULL, '$2y$10$lVSAGJVd.irBZtEGODPst.s63Xr0iDMeuq9oaHeA8q7Bf8psOArdG', 'user', NULL, '2022-05-28 06:46:47', '2022-05-28 06:46:47'),
(6, 'Dipa Anggraeni Lesmana', 'dimaanggraeni@gmail.com', NULL, '$2y$10$cM7cf6/3lKV9HVGAgdHhEerYHpOSKXPVT94nnOPZVGYZCA/Qb3LDy', 'user', NULL, '2022-08-12 11:22:26', '2022-08-12 11:22:26'),
(7, 'ananda', 'nanda@gmail.co', NULL, '$2y$10$xbuEt5kSqnO3PDJO3spNQeIYiZ6X00XfvOaDNeXFP1DcX.r14qQYm', 'user', NULL, '2022-10-17 06:43:17', '2022-10-17 06:43:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
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
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
