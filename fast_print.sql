-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2023 pada 09.48
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fast_print`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(22, 'L QUEENLY', '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(23, 'L MTH AKSESORIS (IM)', '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(24, 'L MTH TABUNG (LK)', '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(25, 'SP MTH SPAREPART (LK)', '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(26, 'CI MTH TINTA LAIN (IM)', '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(27, 'L MTH AKSESORIS (LK)', '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(28, 'S MTH STEMPEL (IM)', '2023-11-30 01:28:42', '2023-11-30 01:28:42');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_28_140657_create_categories_table', 1),
(6, '2023_11_28_140703_create_statuses_table', 1),
(7, '2023_11_28_140750_create_products_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id_produk`, `nama_produk`, `harga`, `kategori_id`, `status_id`, `created_at`, `updated_at`) VALUES
(66, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', 1000, 23, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(67, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', 1000, 23, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(68, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 12500, 23, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(69, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 12500, 23, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(70, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 1000, 23, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(71, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 13000, 23, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(72, 'ALUMUNIUM FOIL PET SHEET 250mm IM', 1000, 23, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(73, 'ARM PENDEK MODEL U', 13000, 23, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(74, 'ARM SUPPORT KECIL', 13000, 24, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(75, 'ARM SUPPORT KOTAK PUTIH', 13000, 23, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(76, 'ARM SUPPORT PENDEK POLOS', 13000, 24, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(77, 'ARM SUPPORT S IM', 1000, 23, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(78, 'ARM SUPPORT T (IMPORT)', 13000, 23, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(79, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 10000, 24, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(80, 'BLACK LASER TONER FP-T3 (100gr)', 13000, 23, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(81, 'BODY PRINTER CANON IP2770', 500, 25, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(82, 'BODY PRINTER T13X', 15000, 25, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(83, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', 10000, 26, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(84, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', 10000, 26, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(85, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', 1500, 26, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(86, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', 1500, 26, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(87, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', 1500, 26, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(88, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', 1000, 26, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(89, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', 1500, 26, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(90, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', 1500, 26, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(91, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', 1000, 26, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(92, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', 1500, 26, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(93, 'BOTOL KOTAK 100ML LK', 1000, 27, 7, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(94, 'BOTOL 10ML IM', 1000, 28, 8, '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(95, 'Oil Filter 30-60', 2000, 22, 7, '2023-11-30 01:37:09', '2023-11-30 01:37:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuses`
--

CREATE TABLE `statuses` (
  `id_status` bigint(20) UNSIGNED NOT NULL,
  `nama_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `statuses`
--

INSERT INTO `statuses` (`id_status`, `nama_status`, `created_at`, `updated_at`) VALUES
(7, 'bisa dijual', '2023-11-30 01:28:42', '2023-11-30 01:28:42'),
(8, 'tidak bisa dijual', '2023-11-30 01:28:42', '2023-11-30 01:28:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `products_kategori_id_foreign` (`kategori_id`),
  ADD KEY `products_status_id_foreign` (`status_id`);

--
-- Indeks untuk tabel `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id_status`);

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
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id_status` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `categories` (`id_kategori`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id_status`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
