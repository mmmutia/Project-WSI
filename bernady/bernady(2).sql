-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 15.49
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
  `filter` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cluster`
--

INSERT INTO `cluster` (`id_cluster`, `foto_cluster`, `nama_cluster`, `blok`, `jumlah_unit`, `harga`, `harga_dp`, `filter`) VALUES
(9, 'Pinewood-Magna.jpeg', 'Pinewood Magna', 'AB', 199, 'Rp. 850.000.000', 'Rp. 80.500.000', '.pinewood'),
(10, 'Boulevard-Magnolia.jpeg', 'Boulevard Magnolia', 'BC', 199, 'Rp. 800.000.000', 'Rp. 80.000.000', '.boulevard'),
(11, 'Camelia-Type-A.jpeg', 'Camelia', 'CA', 200, 'Rp. 500.000.000', 'Rp. 50.000.000', '.camelia'),
(12, 'Edge-Gardenia.jpeg', 'Edge Gardenia', 'DR', 200, 'Rp. 750.000.000', 'Rp. 70.500.000', '.gardenia'),
(13, 'New-Edge-Gardenia.jpeg', 'New Edge Gardenia', 'FG', 250, 'Rp. 800.000.000', 'Rp. 80.000.000', '.edge'),
(14, 'Plumeria-Type-C.jpeg', 'Plumeria', 'TR', 300, 'Rp. 600.000.000', 'Rp. 60.000.000', '.plumeria'),
(15, 'QBIX-Type-A.jpeg', 'QBIX', 'BP', 300, 'Rp. 850.000.000', 'Rp. 80.500.000', '.qbix'),
(16, 'Ruko-Avenue.jpeg', 'Ruko', 'DE', 200, 'Rp. 900.000.000', 'Rp. 90.000.000', '.ruko'),
(20, 'actor.png', 'Cluster Ardella', 'AA', 10, '5.000.000', '1.000.000', 'rumah trend');

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

--
-- Dumping data untuk tabel `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id_detail_pemesanan`, `id_pemesanan_rumah`, `detail_blok`, `jumlah_dp`) VALUES
(16, 26, 'G-TY12', 'Rp 80.000.000'),
(22, 25, 'Y2222', '140000');

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
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan_rumah`
--

INSERT INTO `pemesanan_rumah` (`id_pemesanan_rumah`, `nama_pemesan`, `alamat`, `no_telp_pemesan`, `id_cluster`, `tgl_pemesanan`, `fotocopy_ktp`, `jenis_pembayaran`, `id_user`) VALUES
(25, 'Dela', 'Jember', '08123456789', 10, '2023-01-03', 'Futuristic Line and Geometry Shape Gaming Background Wallpaper with Shiny Purple and Blue Color.jpg', 'InHouse', 9),
(26, 'Muti', 'probolinggo', '085467890', 9, '2023-01-03', 'Laptop_Screen_Clipart_Transparent_PNG_Hd__Laptop_With_Transparent_Screen__Laptop__Macbook__Apple_PNG', 'InHouse', 5);

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
(27, 25, 9, 'Pengerjaan', 'Tahap pemasangan genting', 'Gambar Elemen Keyboard Komputer Putih Sederhana, Clipart Komputer Hitam Dan Putih, Papan Ketik, Putih PNG Transparan dan Clipart untuk Unduhan Gratis.jpg', '2023-01-03'),
(28, 26, 5, 'Pengerjaan', 'WOkeh', 's4.jpg', '2023-05-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `serah_terima`
--

CREATE TABLE `serah_terima` (
  `id_serah_terima` int(11) NOT NULL,
  `id_pemesanan_rumah` int(11) NOT NULL,
  `no_surat_bangunan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `serah_terima`
--

INSERT INTO `serah_terima` (`id_serah_terima`, `id_pemesanan_rumah`, `no_surat_bangunan`) VALUES
(7, 25, '123456789'),
(8, 26, '13-167867-87675346534635'),
(11, 25, '12345678'),
(12, 26, 'Aku Sayang Qotrun');

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
(78, 9, 5),
(79, 11, 5);

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
(9, 10, 'Menerus batu kali', 'Pasangan bata di plaster Finish cat + Plamir dicat', 'Rangka galvalum, Penutup genteng flat beton dicat', '-', 'Rangka hollow, Penutup gypsumboard adonized', 'PDAM', 'PLN', '2 kamar tidur', '60 m²'),
(10, 11, 'Menerus batu kali', 'Pasangan bata di plaster Finish cat + Plamir dicat', 'Rangka galvalum, Penutup genteng flat beton dicat', 'Aluminium brown 4', 'Rangka hollow', 'PDAM', 'PLN', '3 Kamar Tidur', '126 m'),
(11, 12, 'Menerus batu kali', 'Pasangan bata di plaster Finish cat + Plamir dicat', 'Rangka galvalum, Penutup genteng flat beton dicat', 'Aluminium ', 'Rangka hollow', 'PDAM', 'PLN 1300 watt', '3 kamar tidur', '78 m²'),
(12, 13, 'Menerus batu kali', 'Pasangan bata di plaster Finish cat + Plamir dicat', 'Rangka galvalum, Penutup genteng flat beton dicat', 'Aluminium ', 'Rangka hollow', 'PDAM', 'PLN 1300 watt', '2 kamar tidur', '60 m²'),
(13, 14, 'Menerus batu kali', 'Bata merah di plester, Finish aci + Plamir di cat', 'galvalum', 'Aluminium brown 4', 'Rangka hollow', 'PDAM', 'PLN 2200 watt', '3 Kamar Tidur', '84 m²'),
(14, 15, 'Footplat, Pondasi Menerus batu kali (diperkuat)', 'Pasangan bata di plaster Finish cat + Plamir dicat', 'Metalsheet Non Corosive Ecoclips', 'Aluminium evap.coating', 'Rangka hollow', 'PDAM', 'PLN 2200 watt', '2 kamar tidur', '65 m²'),
(15, 16, 'Batu kali dan beton bertulang', 'Pasangan bata di plaster Finish cat + Plamir dicat', 'Baja ringan', 'Aluminium BlackCoat', '-', 'PDAM', 'PLN 2200 watt', '-', '60 m²'),
(35, 9, 'dwad', 'awda', 'awda', 'awda', 'adwd', 'awd', 'awd', 'awd', 'bbb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
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
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cluster` (`id_cluster`);

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
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id_pemesanan_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `proggres`
--
ALTER TABLE `proggres`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `serah_terima`
--
ALTER TABLE `serah_terima`
  MODIFY `id_serah_terima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `simpan_cluster`
--
ALTER TABLE `simpan_cluster`
  MODIFY `id_simpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `spesifikasi_teknis`
--
ALTER TABLE `spesifikasi_teknis`
  MODIFY `id_spesifikasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  ADD CONSTRAINT `pemesanan_rumah_ibfk_1` FOREIGN KEY (`id_cluster`) REFERENCES `cluster` (`id_cluster`) ON DELETE CASCADE,
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
-- Ketidakleluasaan untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_detail_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level_detail` (`id_level`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
