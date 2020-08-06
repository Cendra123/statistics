-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2020 pada 05.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statistik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_07_13_164314_role', 1),
(5, '2020_07_13_165249_metode', 1);

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
-- Struktur dari tabel `tbl_method`
--

CREATE TABLE `tbl_method` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_method`
--

INSERT INTO `tbl_method` (`id`, `name`, `description`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Apakah Dua Kelompok Data Saling Berpasangan?', 'Dua kelompok data dianggap saling berpasangan jika kedua kelompok data tersebut berasal dari satu kelompok populasi. Video dibawah ini berisi tentang ilustrasi antara kelompok saling berpasangan dan kelompok tidak saling berpasangan. ', 'https://www.youtube.com/watch?v=i63bdOJvnwc', '2020-07-26 15:59:50', '2020-07-26 16:00:00'),
(2, 'Data Berskala Apa?', 'Skala data terdiri dari empat jenis yaitu nominal, ordinal, interval, dan rasio. Penjelasan lengkap silahkan klik video di bawah ini', 'https://www.youtube.com/watch?v=Mg3sxwwodzw', '2020-07-26 15:59:50', '2020-07-26 16:00:00'),
(3, 'Apakah Data Berdistribusi Normal?', 'Data dianggap berdistribusi normal apabila nilai signifikansi dari uji normalitas lebih besar dari nilai eror yang ditentukan (p>α). Bagaimana cara analisis uji normalitas dengan menggunakan SPSS? Silahkan klik video dibawah ini', '', '2020-07-26 15:59:50', '2020-07-26 16:00:00'),
(4, 'UJI T SAMPEL BERPASANGAN', 'Uji statistik yang sebaiknya Anda gunakan adalah UJI T SAMPEL BERPASANGAN. Klik video dibawah ini untuk mempelajari langkah-langkah Uji T Sampel Berpasangan dengan menggunakan SPSS', '', '2020-07-26 15:59:50', '2020-07-26 16:00:00'),
(5, 'UJI WILCOXON', 'Uji statistik yang sebaiknya Anda gunakan adalah UJI WILCOXON. Klik video dibawah ini untuk mempelajari langkah-langkah Uji Wilcoxon dengan menggunakan SPSS', '', '2020-07-26 15:59:50', '2020-07-26 16:00:00'),
(6, 'UJI CHI SQUARE', 'Uji statistik yang sebaiknya Anda gunakan adalah UJI CHI SQUARE. Klik video dibawah ini untuk mempelajari langkah-langkah Uji Chi Square dengan menggunakan SPSS', '', '2020-07-26 15:59:50', '2020-07-26 16:00:00'),
(7, 'UJI T SAMPEL BEBAS', 'Uji statistik yang sebaiknya Anda gunakan adalah UJI T SAMPEL BEBAS. Klik video dibawah ini untuk mempelajari langkah-langkah Uji T Sampel Bebas menggunakan SPSS', '', '2020-07-26 15:59:50', '2020-07-26 16:00:00'),
(8, 'UJI MANN WHITNEY', 'Uji statistik yang sebaiknya Anda gunakan adalah UJI MANN WHITNEY. Klik video dibawah ini untuk mempelajari langkah-langkah Uji Mann Whitney dengan menggunakan SPSS', '', '2020-07-26 15:59:50', '2020-07-26 16:00:00'),
(9, 'UJI HOMOGENITAS', 'Analisis nilai signifikansi homogenitas varians harus dilakukan sebelum membaca hasil analisis T Sampel Bebas. Data dianggap bervarians homogen apabila nilai signifikansi dari Levene\'s Test lebih besar dari nilai eror yang ditentukan (p>α). Bagaimana cara analisis Levene\'s Test dengan menggunakan SPSS? Silahkan klik video dibawah ini', '', '2020-07-26 15:59:50', '2020-07-26 16:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_option`
--

CREATE TABLE `tbl_option` (
  `id` int(11) NOT NULL,
  `id_role_now` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `id_role_then` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_option`
--

INSERT INTO `tbl_option` (`id`, `id_role_now`, `class`, `id_role_then`, `text`) VALUES
(1, 1, 'btn-primary btn-lg btn-custom', 2, 'Ya'),
(2, 1, 'btn-danger btn-lg btn-custom', 3, 'Tidak'),
(3, 2, 'btn-primary btn-lg btn-custom', 4, 'Rasio'),
(6, 3, 'btn-primary btn-lg btn-custom', 7, 'Rasio'),
(9, 4, 'btn-primary btn-lg btn-custom', 10, 'Berdistribusi Normal'),
(10, 4, 'btn-danger btn-lg btn-custom', 11, 'Tidak Berdistribusi Normal'),
(11, 7, 'btn-primary btn-lg btn-custom', 12, 'Normal'),
(12, 7, 'btn-danger btn-lg btn-custom', 13, 'Heterogen'),
(13, 12, 'btn-primary btn-lg btn-custom', 14, 'Homogen'),
(14, 12, 'btn-danger btn-lg btn-custom', 15, 'Heterogen'),
(15, 2, 'btn-info btn-lg btn-custom', 4, 'Interval'),
(16, 3, 'btn-info btn-lg btn-custom', 7, 'Interval'),
(17, 2, 'btn-warning btn-lg btn-custom', 5, 'Ordinal'),
(19, 3, 'btn-warning btn-lg btn-custom', 8, 'Ordinal'),
(20, 3, 'btn-danger btn-lg btn-custom', 9, 'Nominal'),
(21, 2, 'btn-danger btn-lg btn-custom', 6, 'Nominal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_metode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `id_metode`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(2, 2, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(3, 2, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(4, 3, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(5, 5, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(6, 6, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(7, 3, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(8, 8, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(9, 6, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(10, 4, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(11, 5, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(12, 9, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(13, 8, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(14, 7, '2020-07-26 16:00:06', '2020-07-26 16:00:11'),
(15, 7, '2020-07-26 16:00:06', '2020-07-26 16:00:11');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indeks untuk tabel `tbl_method`
--
ALTER TABLE `tbl_method`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_option`
--
ALTER TABLE `tbl_option`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_method`
--
ALTER TABLE `tbl_method`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_option`
--
ALTER TABLE `tbl_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
