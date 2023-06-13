-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2023 pada 15.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bernady`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cluster`
--

CREATE TABLE `cluster` (
  `id_cluster` int(11) NOT NULL,
  `foto_cluster` varchar(100) NOT NULL,
  `nama_cluster` varchar(100) NOT NULL,
  `blok` varchar(100) NOT NULL,
  `jumlah_unit` int(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `harga_dp` varchar(100) NOT NULL,
  `filter` varchar(11) NOT NULL,
  `jenis_cluster` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cluster`
--

INSERT INTO `cluster` (`id_cluster`, `foto_cluster`, `nama_cluster`, `blok`, `jumlah_unit`, `harga`, `harga_dp`, `filter`, `jenis_cluster`) VALUES
(33, 'ALI97743.JPG', 'Boulevard Magnolia', 'BM', 300, 'Rp 900.000.000', 'Rp 90.000.000', '.boulevard', 'Subsidi'),
(34, 'ALI97737.JPG', 'Camelia', 'C', 80, 'Rp 800.000.000', 'Rp 80.000.000', '.camelia', 'Subsidi'),
(36, 'ALI97744.JPG', 'Edge Gardenia', 'EG', 59, 'Rp 1.100.000.000', 'Rp 110.000.000', '.edge', 'Non-Subsidi'),
(37, 'ALI97748.JPG', 'New Edge Gardenia', 'NEG', 79, 'Rp 1.500.000.000', 'Rp 150.000.000', '.newedge', 'Non-Subsidi'),
(38, 'Pinewood-Magna.jpeg', 'Pinewood Magna', 'PM', 100, 'Rp 1.000.000.000', 'Rp 100.000.000', '.pinewood', 'Non-Subsidi'),
(39, 'Pinewood 1.jpeg', 'Pinewood Prime', 'PP', 50, 'Rp 1.200.000.000', 'Rp 120.000.000', '.pinewood', 'Non-Subsidi'),
(40, 'Pinewood 3.jpeg', 'Pinewood Varsa', 'PV', 50, 'Rp 1.400.000.000', 'Rp 140.000.000', '.pinewood', 'Non-Subsidi'),
(41, 'Pinewood 4.jpeg', 'Pinewood Millenial', 'PM', 39, 'Rp 1.000.000.000', 'Rp 100.000.000', '.pinewood', 'Non-Subsidi'),
(42, 'Pinewood 5.jpeg', 'Pinewood Terra', 'PT', 60, 'Rp 1.500.000.000', 'Rp 150.000.000', '.pinewood', 'Non-Subsidi'),
(43, 'Pinewood.jpeg', 'Pinewood Terra +', 'PTP', 39, 'Rp 1.800.000.000', 'Rp 180.000.000', '.pinewood', 'Non-Subsidi'),
(44, 'Plumeria-Type-C.jpeg', 'Plumeria', 'P', 110, 'Rp 2.000.000.000', 'Rp 200.000.000', '.plumeria', 'Non-Subsidi'),
(45, 'QBIX-Type-A.jpeg', 'QBIX', 'Q', 150, 'Rp 1.200.000.000', 'Rp 120.000.000', '.qbix', 'Non-Subsidi'),
(46, 'Ruko-Avenue.jpeg', 'Ruko Avenue 3', 'RK', 20, 'Rp 1.500.000.000', 'Rp 150.000.000', '.ruko', 'Non-Subsidi'),
(47, 'SOHO.jpeg', 'SOHO', 'SH', 15, 'Rp 900.000.000', 'Rp 90.000.000', '.soho', 'Non-Subsidi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_detail_pemesanan` int(11) NOT NULL,
  `id_pemesanan_rumah` int(11) NOT NULL,
  `detail_blok` varchar(100) NOT NULL,
  `jumlah_dp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_detail`
--

CREATE TABLE `level_detail` (
  `id_level` tinyint(4) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level_detail`
--

INSERT INTO `level_detail` (`id_level`, `level`) VALUES
(1, 'admin_konten'),
(2, 'admin_keuangan'),
(3, 'pemilik'),
(4, 'customer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_dp`
--

CREATE TABLE `pembayaran_dp` (
  `id_pembayaran_dp` int(11) NOT NULL,
  `id_pemesanan_rumah` int(11) NOT NULL,
  `tgl_pembayaran_dp` date NOT NULL,
  `bukti_pembayaran_dp` varchar(100) NOT NULL,
  `status_dp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_inhouse`
--

CREATE TABLE `pembayaran_inhouse` (
  `id_pembayaran_inhouse` int(11) NOT NULL,
  `id_pemesanan_rumah` int(11) NOT NULL,
  `tgl_pembayaran_inhouse` date NOT NULL,
  `bukti_pembayaran_inhouse` varchar(100) NOT NULL,
  `status_inhouse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_rumah`
--

CREATE TABLE `pemesanan_rumah` (
  `id_pemesanan_rumah` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp_pemesan` varchar(15) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `fotocopy_ktp` varchar(100) NOT NULL,
  `jenis_pembayaran` varchar(100) NOT NULL,
  `jml_cicilan_dp` int(100) NOT NULL,
  `jml_cicilan_inhouse` int(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan_rumah`
--

INSERT INTO `pemesanan_rumah` (`id_pemesanan_rumah`, `nama_pemesan`, `alamat`, `no_telp_pemesan`, `id_cluster`, `tgl_pemesanan`, `fotocopy_ktp`, `jenis_pembayaran`, `jml_cicilan_dp`, `jml_cicilan_inhouse`, `id_user`) VALUES
(35, 'Muti', 'banyuwangi', '123456', 33, '2023-05-18', 'WhatsApp Image 2023-05-17 at 11.41.24.jpg', 'InHouse', 0, 0, 5),
(38, 'Muti', 'banyuwangi', '321654', 43, '2023-05-18', 'WhatsApp_Image_2023-05-17_at_11.41.24-removebg-preview.png', 'InHouse', 0, 0, 5),
(50, 'Muti', 'jember', '987654321', 37, '2023-05-20', 'Screenshot (1186).png', 'KPR', 0, 0, 5),
(54, 'Muti', 'tanggul', '987654321', 36, '2023-05-20', 'Boulevard-Magnolia.jpeg', 'KPR', 0, 0, 5),
(55, 'Muti', 'tanggul', '45613789', 41, '2023-05-20', 'Pinewood 1.jpeg', 'InHouse', 4, 0, 5);

--
-- Trigger `pemesanan_rumah`
--
DELIMITER $$
CREATE TRIGGER `pemesanan_rumah` AFTER INSERT ON `pemesanan_rumah` FOR EACH ROW BEGIN
UPDATE cluster SET jumlah_unit = jumlah_unit - 1
WHERE id_cluster = new.id_cluster;
END
$$
DELIMITER ;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proggres`
--

CREATE TABLE `proggres` (
  `id` int(2) NOT NULL,
  `id_pemesanan` int(2) NOT NULL,
  `id_user` int(2) NOT NULL,
  `status` enum('Pengerjaan','Selesai','','') NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proggres`
--

INSERT INTO `proggres` (`id`, `id_pemesanan`, `id_user`, `status`, `keterangan`, `foto`, `tanggal`) VALUES
(29, 35, 5, 'Pengerjaan', 'atap', 'ALI97737.JPG', '2023-06-12'),
(30, 35, 5, 'Pengerjaan', 'uuuu', 'ALI97737.JPG', '2023-06-12'),
(31, 50, 6, 'Selesai', 'Selesao', 'ALI97511.JPG', '2023-06-12'),
(32, 50, 6, 'Selesai', 'Selesao', 'ALI97513.JPG', '2023-06-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `serah_terima`
--

CREATE TABLE `serah_terima` (
  `id_serah_terima` int(11) NOT NULL,
  `id_pemesanan_rumah` int(11) NOT NULL,
  `no_surat_bangunan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpan_cluster`
--

CREATE TABLE `simpan_cluster` (
  `id_simpan` int(11) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpan_cluster`
--

INSERT INTO `simpan_cluster` (`id_simpan`, `id_cluster`, `id_user`) VALUES
(80, 34, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spesifikasi_teknis`
--

CREATE TABLE `spesifikasi_teknis` (
  `id_spesifikasi` int(5) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  `pondasi` varchar(300) NOT NULL,
  `dinding` varchar(300) NOT NULL,
  `rangka_atap` varchar(300) NOT NULL,
  `kusen` varchar(300) NOT NULL,
  `plafond` varchar(300) NOT NULL,
  `air` varchar(300) NOT NULL,
  `listrik` varchar(300) NOT NULL,
  `jumlah_kamar` varchar(100) NOT NULL,
  `luas_tanah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spesifikasi_teknis`
--

INSERT INTO `spesifikasi_teknis` (`id_spesifikasi`, `id_cluster`, `pondasi`, `dinding`, `rangka_atap`, `kusen`, `plafond`, `air`, `listrik`, `jumlah_kamar`, `luas_tanah`) VALUES
(36, 33, 'Pondasi menerus batu kali', 'Pasangan bata di plester, Finish cat + Plamir dicat', 'Rangka galvalum, Penutup genteng flat beton dicat', 'Kusen alumunium adinized', 'Rangka hollow, Penutup gypsumboard adonized', 'PDAM', 'PLN 2200 Watt', '2 Kamar Tidur', '1500 x 700'),
(37, 47, 'Pondasi menerus batu kali', 'Pasangan bata di plester, Finish cat + finishing', 'Rangka galvalum, Penutup genteng flat beton dicat', '-', 'Rangka hollow, Penutup gypsumboard dicat', 'PDAM', 'PLN 2200 Watt', '3', '300 x 700'),
(38, 46, 'Pondasi Batu Kali dan Beton Bertulang / Footplat', 'Keramik', 'Baja Ringan ', 'Alumunium Blackcoat', '-', 'PDAM', '2200 Watt', '-', '60 M2'),
(39, 45, 'Footplat, Pondasi Menerus batu kali (diperkuat)', 'Pasangan bata di plester, Finish cat + finishing cat tembok, Setara Woodplank coating', 'Metalsheet Non Corsive Ecolips', '-', 'Rangka hollow, Penutup gypsumboard ', 'PDAM', 'PLN 2200 Watt', '2', '3 x 15 M'),
(40, 44, 'Pondasi menerus batu kali', 'Pasangan bata di plester, Finish cat + finishing', 'Rangka galvalum, Penutup genteng flat beton dicat', '-', 'Rangka hollow, Penutup gypsumboard dicat', 'PDAM', 'PLN 2200 Watt', '2', '600 x 1200'),
(41, 43, 'Beton Coplesloof', 'Bataringan', 'Galvalum Metaldeck', 'Alumunium', '-', 'PDAM', 'PLN 2200 Watt', '3', '700 x 1200'),
(42, 42, 'Beton Coplesloof', 'Bataringan', 'Metalsheet Non Corsive ', 'Alumunium with coating', '-', 'AMRCNDSTD/SETARA', 'PLN 2200 Watt', '2', '700 x 1200'),
(43, 41, 'Beton Coplesloof', 'Bataringan', 'Metaldeck Non Corsive ', 'Alumunium with coating', '-', 'AMRCNDSTD/SETARA', 'PLN 2200 Watt', '2', '700 x 1500'),
(44, 40, 'Beton Coplesloof', 'Bataringan', 'Metaldeck Non Corsive ', 'Alumunium with coating', '-', 'AMRCNDSTD/SETARA', 'PLN 2200 Watt', '3', '700 x 1200'),
(45, 39, 'Beton Coplesloof', 'Bataringan', 'Metaldeck Non Corsive ', 'Alumunium with coating', '-', 'AMRCNDSTD/SETARA', 'PLN 2200 Watt', '3 + 1', '700 x 1200'),
(46, 38, 'Beton Coplesloof', 'Bataringan', 'Metaldeck Non Corsive ', 'Alumunium with coating', '-', 'AMRCNDSTD/SETARA', 'PLN 2200 Watt', '3', '700 x 1200'),
(47, 37, 'Pondasi menerus batu kali', 'Pasangan bata di plester, Finish cat + Plamir dicat', 'Rangka galvalum, Penutup genteng flat beton dicat', 'Alumunium', '-', 'PDAM', 'PLN 1300 Watt', '2', '600 x 1200'),
(48, 36, 'Pondasi menerus batu kali', 'Pasangan bata di plester, Finish cat + Plamir dicat', 'Rangka galvalum, Penutup genteng flat beton dicat', 'Alumunium', 'Rangka hollow, Penutup gypsumboard dicat', 'PDAM', 'PLN 1300 Watt', '3', '600 x 1300'),
(49, 34, 'Pondasi menerus batu kali', 'Pasangan bata di plester, Finish cat + finishing', 'Rangka galvalum, Penutup genteng flat beton dicat', 'Alumunium brown 4\"', 'Rangka hollow, Penutup gypsumboard dicat', 'PDAM', 'PLN 2200 Watt', '3', '600 x 1300');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanah_kosong`
--

CREATE TABLE `tanah_kosong` (
  `id` int(11) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanah_kosong`
--

INSERT INTO `tanah_kosong` (`id`, `id_cluster`, `jumlah`) VALUES
(1, 33, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `level` tinyint(2) NOT NULL,
  `cluster_simpan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`id_user`, `user_email`, `user_password`, `user_fullname`, `level`, `cluster_simpan`) VALUES
(2, 'adminkonten@gmail.com', 'adminkonten', 'Admin Konten', 1, ''),
(3, 'adminkeuangan@gmail.com', 'adminkeuangan', 'Admin Keuangan', 2, ''),
(4, 'pemilik@gmail.com', 'pemilik', 'Pemilik', 3, ''),
(5, 'muti@gmail.com', 'muti123', 'Muti', 4, ''),
(6, 'budi@gmail.com', 'budi123', 'Budi', 4, ''),
(7, 'p@gmail.com', 'p', 'p', 2, ''),
(8, 'ilham@gmail.com', '123', 'Ilham', 4, ''),
(9, 'dela@gmail.com', 'dela123', 'Dela', 4, ''),
(10, 'ardella@gmail.com', '123', 'ardella@gmail.com', 4, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indeks untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id_detail_pemesanan`),
  ADD KEY `id_pemesanan_rumah` (`id_pemesanan_rumah`);

--
-- Indeks untuk tabel `level_detail`
--
ALTER TABLE `level_detail`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `pembayaran_dp`
--
ALTER TABLE `pembayaran_dp`
  ADD PRIMARY KEY (`id_pembayaran_dp`),
  ADD KEY `id_pemesanan_rumah` (`id_pemesanan_rumah`) USING BTREE;

--
-- Indeks untuk tabel `pembayaran_inhouse`
--
ALTER TABLE `pembayaran_inhouse`
  ADD PRIMARY KEY (`id_pembayaran_inhouse`),
  ADD KEY `id_pemesanan_rumah` (`id_pemesanan_rumah`) USING BTREE;

--
-- Indeks untuk tabel `pemesanan_rumah`
--
ALTER TABLE `pemesanan_rumah`
  ADD PRIMARY KEY (`id_pemesanan_rumah`),
  ADD UNIQUE KEY `id_cluster` (`id_cluster`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `proggres`
--
ALTER TABLE `proggres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `serah_terima`
--
ALTER TABLE `serah_terima`
  ADD PRIMARY KEY (`id_serah_terima`),
  ADD KEY `id_pemesanan_rumah` (`id_pemesanan_rumah`) USING BTREE;

--
-- Indeks untuk tabel `simpan_cluster`
--
ALTER TABLE `simpan_cluster`
  ADD PRIMARY KEY (`id_simpan`),
  ADD KEY `id_cluster` (`id_cluster`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `spesifikasi_teknis`
--
ALTER TABLE `spesifikasi_teknis`
  ADD PRIMARY KEY (`id_spesifikasi`),
  ADD KEY `id_cluster` (`id_cluster`) USING BTREE;

--
-- Indeks untuk tabel `tanah_kosong`
--
ALTER TABLE `tanah_kosong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cluster` (`id_cluster`);

--
-- Indeks untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cluster`
--
ALTER TABLE `cluster`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id_detail_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `level_detail`
--
ALTER TABLE `level_detail`
  MODIFY `id_level` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_dp`
--
ALTER TABLE `pembayaran_dp`
  MODIFY `id_pembayaran_dp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_inhouse`
--
ALTER TABLE `pembayaran_inhouse`
  MODIFY `id_pembayaran_inhouse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_rumah`
--
ALTER TABLE `pemesanan_rumah`
  MODIFY `id_pemesanan_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `proggres`
--
ALTER TABLE `proggres`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `serah_terima`
--
ALTER TABLE `serah_terima`
  MODIFY `id_serah_terima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `simpan_cluster`
--
ALTER TABLE `simpan_cluster`
  MODIFY `id_simpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT untuk tabel `spesifikasi_teknis`
--
ALTER TABLE `spesifikasi_teknis`
  MODIFY `id_spesifikasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `tanah_kosong`
--
ALTER TABLE `tanah_kosong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`id_pemesanan_rumah`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran_dp`
--
ALTER TABLE `pembayaran_dp`
  ADD CONSTRAINT `pembayaran_dp_ibfk_1` FOREIGN KEY (`id_pemesanan_rumah`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran_inhouse`
--
ALTER TABLE `pembayaran_inhouse`
  ADD CONSTRAINT `pembayaran_inhouse_ibfk_1` FOREIGN KEY (`id_pemesanan_rumah`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan_rumah`
--
ALTER TABLE `pemesanan_rumah`
  ADD CONSTRAINT `pemesanan_rumah_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `proggres`
--
ALTER TABLE `proggres`
  ADD CONSTRAINT `proggres_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`),
  ADD CONSTRAINT `proggres_ibfk_3` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `serah_terima`
--
ALTER TABLE `serah_terima`
  ADD CONSTRAINT `serah_terima_ibfk_1` FOREIGN KEY (`id_pemesanan_rumah`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `simpan_cluster`
--
ALTER TABLE `simpan_cluster`
  ADD CONSTRAINT `simpan_cluster_ibfk_1` FOREIGN KEY (`id_cluster`) REFERENCES `cluster` (`id_cluster`) ON DELETE CASCADE,
  ADD CONSTRAINT `simpan_cluster_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `spesifikasi_teknis`
--
ALTER TABLE `spesifikasi_teknis`
  ADD CONSTRAINT `spesifikasi_teknis_ibfk_1` FOREIGN KEY (`id_cluster`) REFERENCES `cluster` (`id_cluster`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tanah_kosong`
--
ALTER TABLE `tanah_kosong`
  ADD CONSTRAINT `tanah_kosong_ibfk_1` FOREIGN KEY (`id_cluster`) REFERENCES `cluster` (`id_cluster`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_detail_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level_detail` (`id_level`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
