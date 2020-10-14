-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Jun 2019 pada 11.55
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketing_coban`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `client_table`
--

CREATE TABLE `client_table` (
  `id_client` int(10) UNSIGNED NOT NULL,
  `nama_client` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgllahir_client` date DEFAULT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlp_client` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dealing_table`
--

CREATE TABLE `dealing_table` (
  `id_dealing` int(10) UNSIGNED NOT NULL,
  `id_sales` int(11) DEFAULT NULL,
  `tgl_LKO` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_penawaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_table`
--

CREATE TABLE `fasilitas_table` (
  `id_fasilitas` int(10) UNSIGNED NOT NULL,
  `id_program` int(11) DEFAULT NULL,
  `nama_fasilitas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_fasilitas` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `followup_table`
--

CREATE TABLE `followup_table` (
  `id_followup` int(10) UNSIGNED NOT NULL,
  `id_penawaran` int(11) DEFAULT NULL,
  `id_sales` int(11) DEFAULT NULL,
  `tgl_followup` date DEFAULT NULL,
  `responden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan_table`
--

CREATE TABLE `keterangan_table` (
  `id_ket` int(10) UNSIGNED NOT NULL,
  `id_program` int(11) DEFAULT NULL,
  `nama_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_ket` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_07_144153_sales_table', 1),
(4, '2019_02_07_144346_client_table', 2),
(5, '2019_02_07_144422_program_table', 2),
(6, '2019_02_07_144512_fasilitas_table', 3),
(7, '2019_02_07_144614_keterangan_table', 3),
(8, '2019_02_07_144709_penawaran_table', 3),
(9, '2019_02_07_144742_followup_table', 3),
(10, '2019_02_07_144822_dealing_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penawaran_table`
--

CREATE TABLE `penawaran_table` (
  `id_penawaran` int(10) UNSIGNED NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_sales` int(11) DEFAULT NULL,
  `id_program` int(11) NOT NULL,
  `tgl_penawaran` date NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `media` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_table`
--

CREATE TABLE `program_table` (
  `id_program` int(10) UNSIGNED NOT NULL,
  `nama_program` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargapax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimalpax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_table`
--

CREATE TABLE `sales_table` (
  `id_sales` int(10) UNSIGNED NOT NULL,
  `nama_sales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp_sales` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admincoban@gmail.com', '$2y$10$qDR0J9lG93zuNwuDcw3xBeNNbDRnjGEsJ4RH8.hjkPDfNpBI.Q6I2', 'bjtYxRVJO7cYzUsrBYvgKbPHjMwEVLH4HmkiKagkr9QJcfe7pdVhqvEpo0mG', '2019-02-12 23:35:45', '2019-02-12 23:35:45'),
(2, 'iritio', 'irit@gmail.com', '$2y$10$Ciz/aokrEq6CtQavPmFuFe57KUyGxbSgCQSsKw.OgxPI8GjiPoi82', 'Wjq2F94yrHwNL2StK7CqIg6LRLgOUn5KacGW9kOhVVAVOWxZeC532q930dU0', '2019-06-05 15:47:58', '2019-06-05 15:47:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `client_table`
--
ALTER TABLE `client_table`
  ADD PRIMARY KEY (`id_client`);

--
-- Indeks untuk tabel `dealing_table`
--
ALTER TABLE `dealing_table`
  ADD PRIMARY KEY (`id_dealing`);

--
-- Indeks untuk tabel `fasilitas_table`
--
ALTER TABLE `fasilitas_table`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `followup_table`
--
ALTER TABLE `followup_table`
  ADD PRIMARY KEY (`id_followup`);

--
-- Indeks untuk tabel `keterangan_table`
--
ALTER TABLE `keterangan_table`
  ADD PRIMARY KEY (`id_ket`);

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
-- Indeks untuk tabel `penawaran_table`
--
ALTER TABLE `penawaran_table`
  ADD PRIMARY KEY (`id_penawaran`);

--
-- Indeks untuk tabel `program_table`
--
ALTER TABLE `program_table`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `sales_table`
--
ALTER TABLE `sales_table`
  ADD PRIMARY KEY (`id_sales`);

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
-- AUTO_INCREMENT untuk tabel `client_table`
--
ALTER TABLE `client_table`
  MODIFY `id_client` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dealing_table`
--
ALTER TABLE `dealing_table`
  MODIFY `id_dealing` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_table`
--
ALTER TABLE `fasilitas_table`
  MODIFY `id_fasilitas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `followup_table`
--
ALTER TABLE `followup_table`
  MODIFY `id_followup` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `keterangan_table`
--
ALTER TABLE `keterangan_table`
  MODIFY `id_ket` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penawaran_table`
--
ALTER TABLE `penawaran_table`
  MODIFY `id_penawaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `program_table`
--
ALTER TABLE `program_table`
  MODIFY `id_program` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sales_table`
--
ALTER TABLE `sales_table`
  MODIFY `id_sales` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
