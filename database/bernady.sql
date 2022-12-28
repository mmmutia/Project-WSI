-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 04:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
(1, '', 'Boulevard Magnolia', 'A-BM', 0, 'Rp 400.000.000', 'Rp 40.000.000', 'boulevard'),
(2, '', 'Camelia Type A', 'B-CA', 0, 'Rp 500.000.000', 'Rp 50.000.000', 'camelia'),
(3, '', 'Camelia Type B', 'B-CB', 0, 'Rp 500.000.000', 'Rp 50.000.000', 'camelia'),
(4, '', 'Camelia Type C', 'B-CC', 0, 'Rp 500.000.000', 'Rp 50.000.000', 'camelia'),
(5, '', 'Edge Gardenia', 'C-EG', 0, 'Rp 600.000.000', 'Rp 60.000.000', 'gardenia'),
(6, '', 'New Edge Gardenia', 'D-NEG', 0, 'Rp 700.000.000', 'Rp 70.000.000', 'edge'),
(7, '', 'Pinewood Prime', 'E-PP', 0, 'Rp 1.000.000.000', 'Rp 100.000.000', 'pinewood'),
(8, '', 'Pinewood Millenial', 'E-PMI', 0, 'Rp 200.000.000', 'Rp 20.000.000', 'pinewood'),
(9, '', 'Pinewood Terra', 'E-PT', 0, 'Rp 800.000.000', 'Rp 80.000.000', 'pinewood'),
(10, '', 'Pinewood Magna', 'E-PMA', 0, 'Rp 800.000.000', 'Rp 80.000.000', 'pinewood'),
(11, '', 'Pinewood Varsa', 'E-PV', 0, 'Rp 800.000.000', 'Rp 80.000.000', 'pinewood'),
(12, '', 'Plumeria Type A', 'F-PA', 0, 'Rp 700.000.000', 'Rp 70.000.000', 'plumeria'),
(13, '', 'Plumeria Type B', 'F-PB', 0, 'Rp 700.000.000', 'Rp 70.000.000', 'plumeria'),
(14, '', 'Plumeria Type C', 'F-PC', 0, 'Rp 700.000.000', 'Rp 70.000.000', 'plumeria'),
(15, '', 'Plumeria Type D', 'F-PD', 0, 'Rp 700.000.000', 'Rp 70.000.000', 'plumeria'),
(16, '', 'QBIX', 'G-QB', 0, 'Rp 800.000.000', 'Rp 80.000.000', 'qbix'),
(17, '', 'SOHO', 'H-SH', 0, 'Rp 800.000.000', 'Rp 80.000.000', 'soho'),
(18, '', 'Ruko Avenue 3', 'I-RK', 0, 'Rp 1.000.000.000', 'Rp 100.000.000', 'ruko');

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
-- Dumping data for table `pemesanan_rumah`
--

INSERT INTO `pemesanan_rumah` (`id_pemesanan_rumah`, `nama_pemesan`, `alamat`, `no_telp_pemesan`, `id_cluster`, `tgl_pemesanan`, `nup`, `fotocopy_ktp`, `jenis_pembayaran`, `jumlah_dp`, `detail_blok`, `id_user`) VALUES
(1, 'Mutia Budi Utami', 'JL. TAMANSURUH', '082359338615', 1, '2022-12-09', '', '242868975_3144954972453045_3878055506550562439_n.jpg', 'InHouse', '', '', 5),
(8, 'Anjas', 'Anjas', '', 3, '0000-00-00', '', '', '', '', '', 6),
(9, 'Ilham Ibnu Ahmad', 'Leces', '081', 12, '2022-12-26', '', '', '', '', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `proggres`
--

CREATE TABLE `proggres` (
  `id` int(2) NOT NULL,
  `id_pemesanan_rumah` int(2) NOT NULL,
  `id_user` int(2) NOT NULL,
  `status` enum('Pengerjaan','Selesai','','') NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proggres`
--

INSERT INTO `proggres` (`id`, `id_pemesanan_rumah`, `id_user`, `status`, `keterangan`, `foto`, `tanggal`) VALUES
(14, 1, 5, 'Pengerjaan', 'hahahah', 'testaja.jpg', '2022-12-26'),
(16, 1, 5, 'Pengerjaan', 'ahah', 'testaja.jpg', '2022-12-26'),
(17, 1, 5, 'Pengerjaan', 'otol', 'testaja.jpg', '2022-12-26'),
(18, 1, 5, 'Pengerjaan', 'toltoltol', 'ah.jpg', '2022-12-26'),
(19, 1, 5, 'Pengerjaan', 'toltoltoltol', 'ah.jpg', '2022-12-26'),
(21, 1, 5, 'Pengerjaan', 'Renov', 'Pamflet OPREC HIMANIKA.png', '2022-12-28');

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

--
-- Dumping data for table `simpan_cluster`
--

INSERT INTO `simpan_cluster` (`id_simpan`, `id_cluster`, `id_user`) VALUES
(8, 2, 5),
(10, 15, 5);

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
  ADD PRIMARY KEY (`id_nup`);

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
  ADD KEY `id_cluster` (`id_cluster`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `proggres`
--
ALTER TABLE `proggres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemesanan` (`id_pemesanan_rumah`),
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
  MODIFY `id_pemesanan_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Constraints for table `pemesanan_rumah`
--
ALTER TABLE `pemesanan_rumah`
  ADD CONSTRAINT `pemesanan_rumah_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`),
  ADD CONSTRAINT `pemesanan_rumah_ibfk_3` FOREIGN KEY (`id_cluster`) REFERENCES `cluster` (`id_cluster`);

--
-- Constraints for table `proggres`
--
ALTER TABLE `proggres`
  ADD CONSTRAINT `proggres_ibfk_1` FOREIGN KEY (`id_pemesanan_rumah`) REFERENCES `pemesanan_rumah` (`id_pemesanan_rumah`),
  ADD CONSTRAINT `proggres_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`);

--
-- Constraints for table `simpan_cluster`
--
ALTER TABLE `simpan_cluster`
  ADD CONSTRAINT `simpan_cluster_ibfk_1` FOREIGN KEY (`id_cluster`) REFERENCES `cluster` (`id_cluster`),
  ADD CONSTRAINT `simpan_cluster_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id_user`);

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_detail_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level_detail` (`id_level`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
