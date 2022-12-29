-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 04:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
-- Table structure for table `cluster`
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
-- Dumping data for table `cluster`
--

INSERT INTO `cluster` (`id_cluster`, `foto_cluster`, `nama_cluster`, `blok`, `jumlah_unit`, `harga`, `harga_dp`, `filter`) VALUES
(4, '', 'Magnolia', 'A-BN', 200, 'Rp 900.000.000', 'Rp 90.000.000', '');

-- --------------------------------------------------------

--
-- Table structure for table `level_detail`
--

CREATE TABLE `level_detail` (
  `id_level` tinyint(4) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level_detail`
--

INSERT INTO `level_detail` (`id_level`, `level`) VALUES
(1, 'admin_konten'),
(2, 'admin_keuangan'),
(3, 'pemilik'),
(4, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `message_kontak`
--

CREATE TABLE `message_kontak` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject_kontak` varchar(50) NOT NULL,
  `message_kontak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nup`
--

CREATE TABLE `nup` (
  `id_nup` int(11) NOT NULL,
  `id_pemesanan_rumah` int(11) NOT NULL,
  `nup` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_dp`
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
-- Table structure for table `pembayaran_inhouse`
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
-- Table structure for table `pemesanan_rumah`
--

CREATE TABLE `pemesanan_rumah` (
  `id_pemesanan_rumah` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp_pemesan` varchar(15) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `nup` varchar(50) NOT NULL,
  `fotocopy_ktp` varchar(100) NOT NULL,
  `jenis_pembayaran` varchar(100) NOT NULL,
  `jumlah_dp` varchar(100) NOT NULL,
  `detail_blok` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `pemesanan_rumah`
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
-- Table structure for table `proggres`
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

-- --------------------------------------------------------

--
-- Table structure for table `serah_terima`
--

CREATE TABLE `serah_terima` (
  `id_serah_terima` int(11) NOT NULL,
  `id_pemesanan_rumah` int(11) NOT NULL,
  `id_pembayaran_dp` int(11) NOT NULL,
  `no_surat_bangunan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `simpan_cluster`
--

CREATE TABLE `simpan_cluster` (
  `id_simpan` int(11) NOT NULL,
  `id_cluster` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spesifikasi_teknis`
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

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
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
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user`, `user_email`, `user_password`, `user_fullname`, `level`, `cluster_simpan`) VALUES
(2, 'adminkonten@gmail.com', 'adminkonten', 'Admin Konten', 1, ''),
(3, 'adminkeuangan@gmail.com', 'adminkeuangan', 'Admin Keuangan', 2, ''),
(4, 'pemilik@gmail.com', 'pemilik', 'Pemilik', 3, ''),
(5, 'muti@gmail.com', 'muti123', 'Muti', 4, ''),
(6, 'budi@gmail.com', 'budi123', 'Budi', 4, ''),
(7, 'p@gmail.com', 'p', 'p', 2, ''),
(8, 'ilham@gmail.com', '123', 'Ilham', 4, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`id_cluster`);

--
-- Indexes for table `level_detail`
--
ALTER TABLE `level_detail`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `nup`
--
ALTER TABLE `nup`
  ADD PRIMARY KEY (`id_nup`),
  ADD KEY `id_pemesanan_rumah` (`id_pemesanan_rumah`);

--
-- Indexes for table `pembayaran_dp`
--
ALTER TABLE `pembayaran_dp`
  ADD PRIMARY KEY (`id_pembayaran_dp`),
  ADD UNIQUE KEY `id_pemesanan_rumah` (`id_pemesanan_rumah`);

--
-- Indexes for table `pembayaran_inhouse`
--
ALTER TABLE `pembayaran_inhouse`
  ADD PRIMARY KEY (`id_pembayaran_inhouse`),
  ADD UNIQUE KEY `id_pemesanan_rumah` (`id_pemesanan_rumah`);

--
-- Indexes for table `pemesanan_rumah`
--
ALTER TABLE `pemesanan_rumah`
  ADD PRIMARY KEY (`id_pemesanan_rumah`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cluster` (`id_cluster`);

--
-- Indexes for table `proggres`
--
ALTER TABLE `proggres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `serah_terima`
--
ALTER TABLE `serah_terima`
  ADD PRIMARY KEY (`id_serah_terima`),
  ADD UNIQUE KEY `id_pemesanan_rumah` (`id_pemesanan_rumah`),
  ADD UNIQUE KEY `id_pembayaran_dp` (`id_pembayaran_dp`);

--
-- Indexes for table `simpan_cluster`
--
ALTER TABLE `simpan_cluster`
  ADD PRIMARY KEY (`id_simpan`),
  ADD KEY `id_cluster` (`id_cluster`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `spesifikasi_teknis`
--
ALTER TABLE `spesifikasi_teknis`
  ADD PRIMARY KEY (`id_spesifikasi`),
  ADD UNIQUE KEY `id_cluster` (`id_cluster`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cluster`
--
ALTER TABLE `cluster`
  MODIFY `id_cluster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `level_detail`
--
ALTER TABLE `level_detail`
  MODIFY `id_level` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nup`
--
ALTER TABLE `nup`
  MODIFY `id_nup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran_dp`
--
ALTER TABLE `pembayaran_dp`
  MODIFY `id_pembayaran_dp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran_inhouse`
--
ALTER TABLE `pembayaran_inhouse`
  MODIFY `id_pembayaran_inhouse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanan_rumah`
--
ALTER TABLE `pemesanan_rumah`
  MODIFY `id_pemesanan_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `proggres`
--
ALTER TABLE `proggres`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `serah_terima`
--
ALTER TABLE `serah_terima`
  MODIFY `id_serah_terima` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `simpan_cluster`
--
ALTER TABLE `simpan_cluster`
  MODIFY `id_simpan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `spesifikasi_teknis`
--
ALTER TABLE `spesifikasi_teknis`
  MODIFY `id_spesifikasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nup`
--
ALTER TABLE `nup`
  ADD CONSTRAINT `nup_ibfk_1` FOREIGN KEY (`id_pemesanan_rumah`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran_dp`
--
ALTER TABLE `pembayaran_dp`
  ADD CONSTRAINT `pembayaran_dp_ibfk_1` FOREIGN KEY (`id_pemesanan_rumah`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran_inhouse`
--
ALTER TABLE `pembayaran_inhouse`
  ADD CONSTRAINT `pembayaran_inhouse_ibfk_1` FOREIGN KEY (`id_pemesanan_rumah`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan_rumah`
--
ALTER TABLE `pemesanan_rumah`
  ADD CONSTRAINT `pemesanan_rumah_ibfk_3` FOREIGN KEY (`id_cluster`) REFERENCES `cluster` (`id_cluster`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_rumah_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`);

--
-- Constraints for table `proggres`
--
ALTER TABLE `proggres`
  ADD CONSTRAINT `proggres_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`),
  ADD CONSTRAINT `proggres_ibfk_3` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON UPDATE CASCADE;

--
-- Constraints for table `serah_terima`
--
ALTER TABLE `serah_terima`
  ADD CONSTRAINT `serah_terima_ibfk_2` FOREIGN KEY (`id_pembayaran_dp`) REFERENCES `pembayaran_dp` (`id_pembayaran_dp`) ON UPDATE CASCADE,
  ADD CONSTRAINT `serah_terima_ibfk_3` FOREIGN KEY (`id_pemesanan_rumah`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`) ON UPDATE CASCADE;

--
-- Constraints for table `simpan_cluster`
--
ALTER TABLE `simpan_cluster`
  ADD CONSTRAINT `simpan_cluster_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`),
  ADD CONSTRAINT `simpan_cluster_ibfk_2` FOREIGN KEY (`id_cluster`) REFERENCES `cluster` (`id_cluster`);

--
-- Constraints for table `spesifikasi_teknis`
--
ALTER TABLE `spesifikasi_teknis`
  ADD CONSTRAINT `spesifikasi_teknis_ibfk_1` FOREIGN KEY (`id_cluster`) REFERENCES `cluster` (`id_cluster`) ON UPDATE CASCADE;

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_detail_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level_detail` (`id_level`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
