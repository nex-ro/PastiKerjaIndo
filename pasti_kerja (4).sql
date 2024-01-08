-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 01:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasti_kerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id_apply` int(11) NOT NULL,
  `id_pengambil` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id_apply`, `id_pengambil`, `id_lowongan`, `status`, `cv`) VALUES
(1, 1, 1, 'Ditolak', 'assets/cv/basis_dimensi1.pdf'),
(2, 1, 1, 'waiting', 'assets/cv/Catatan_UAS.pdf'),
(3, 1, 1, 'waiting', 'assets/cv/Catatan_UAS_(1).pdf'),
(4, 1, 1, 'waiting', 'assets/cv/basis_dimensi2.pdf'),
(5, 1, 1, 'waiting', 'assets/cv/Catatan_UAS1.pdf'),
(6, 1, 1, 'waiting', 'assets/cv/Catatan_UAS_(1)1.pdf'),
(7, 1, 2, 'waiting', 'assets/cv/png2pdf.pdf');

--
-- Triggers `apply`
--
DELIMITER $$
CREATE TRIGGER `history_trigger` BEFORE DELETE ON `apply` FOR EACH ROW BEGIN
    INSERT INTO history_apply (id_apply, id_pengambil, id_lowongan,  status)
    VALUES (OLD.id_apply, OLD.id_pengambil, OLD.id_lowongan,  OLD.status);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id_exp` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `durasi` varchar(255) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_apply`
--

CREATE TABLE `history_apply` (
  `id_apply` int(11) NOT NULL,
  `id_pengambil` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_history` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_apply`
--

INSERT INTO `history_apply` (`id_apply`, `id_pengambil`, `id_lowongan`, `status`, `id_history`, `created`) VALUES
(8, 10, 1, 'waiting', 1, '2024-01-08 00:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `lowongan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `requirement` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `lowongan`, `status`, `requirement`, `lokasi`, `kategori`, `type`, `id_user`, `salary`, `desc`) VALUES
(1, 'Marketing', 'open', 's1 Economy', 'Los Angles', 'Bidang Ekonomi', 'Fulltime', 11, 'Rp.2.000.000 - Rp.3.000.000', 'Dapat mengerti tentang Digital marketing'),
(2, 'Teler', 'open', 'Berparas Cantik', 'Jakarta', 'Bidang Ekonomi', 'Part time', 12, 'Rp.1.000.000 - Rp.2.000.000', 'dapat bekerja dari 9 to 5'),
(3, 'Peneliti', 'closed', 'S2 Food Science', 'Arab', 'Bidang Teknik dan Industry', 'Fulltime', 11, '&gt; Rp.5.000.000', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `notifikasi` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_history` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`notifikasi`, `id_user`, `id_history`, `created`) VALUES
('Sedang Diproses ', 10, 1, '2024-01-08 00:24:05'),
('Kamu Diterima. Marketing Silahkan Chat : <a target=\"_blank\" href=\"https://wa.me/085322688223\" class=\"btn btn-info btn-sm\" style=\"font-size: 12px;\"><i style=\"font-size: 16px;\" class=\"bx bxs-message\"></i> Chat WA</a>', 10, 2, '2024-01-08 00:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nama_pendidikan` varchar(255) NOT NULL,
  `gelar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id_project` int(255) NOT NULL,
  `nama_project` varchar(255) NOT NULL,
  `link_project` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `noHp` varchar(255) NOT NULL,
  `profilePicture` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `lisensi_sertifikasi` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `id_google` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jenis_kelamin`, `email`, `lokasi`, `pass`, `noHp`, `profilePicture`, `role`, `lisensi_sertifikasi`, `desc`, `id_google`) VALUES
(1, 'Deri', '', 'deri22ti@mahasiswa.pcr.ac.id', 'Not Set', '', '', 'https://lh3.googleusercontent.com/a/ACg8ocKXAnQrUHahPW51iqPjh_yHmEuz4bw4PpcB4KGATRI1Bfo=s96-c', 'user', '', '', '105102150618011049416'),
(9, 'DERI kho', 'male', 'udil22ti@mahasiswa.pcr.ac.id', '', '$2y$10$Oxa8XdlOngDcT0B9nGcXr.NYX6g3EApqkguRGkINFJfQut6ZVmOka', '085322688223', 'laptop 14-cf2xxx.jpg', 'user', '', '', ''),
(10, 'Deri', '', 'derixkho@gmail.com', 'Not Set', '', '', 'https://lh3.googleusercontent.com/a/ACg8ocK9cyMO4Lb3oi6rcHwwoAEg59r7mw6a5BpwDulGLgcCW_8=s96-c', 'user', '', 'fawfafawwawfaasaaw', ''),
(11, 'Coka Cola', '', 'Coke@gmail.com', 'Los Angles', '$2y$10$mZfdljrcI5NJ5iPZ47/a4uMWwNnBluu7Pi6zB1M9RmLNVl8W3Q5be', '085322688223', 'download.png', 'company', '', '', ''),
(12, 'BCA', '', 'BCA@gmail.com', 'Jakarta', '$2y$10$Ar52HanN5/4aOq9WYBxOPeW/6lRInepbJPzHxsjwVjkYInKP1IPbm', '085322688223', 'bca.png', 'company', '', '', ''),
(13, 'Telkomsel', '', 'telkomsel@gmail.com', 'riau', '$2y$10$/SvyTX6h3AVGCh/o28N6Y.5wM6pJHniO94MqzpqKF9x/sCvhAd/pC', '085322688223', 'telkom.png', 'company', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id_apply`),
  ADD KEY `fk_pengambil` (`id_pengambil`),
  ADD KEY `fk_lowongan_pemberi` (`id_lowongan`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_exp`),
  ADD KEY `fk_id_exp` (`id_user`);

--
-- Indexes for table `history_apply`
--
ALTER TABLE `history_apply`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `fk_id_low` (`id_user`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `fk_id_pend` (`id_user`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id_apply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_apply`
--
ALTER TABLE `history_apply`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `fk_lowongan_pemberi` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`),
  ADD CONSTRAINT `fk_pengambil` FOREIGN KEY (`id_pengambil`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `fk_id_exp` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `fk_id_low` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `fk_id_pend` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
