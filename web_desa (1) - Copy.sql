-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 01:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_desa`
--

DELIMITER $$
--
-- Functions
--
CREATE FUNCTION `autoInc` () RETURNS INT(10) BEGIN
        DECLARE getCount INT(10);

        SET getCount = (
            SELECT id_user_detail
            FROM user ORDER BY ID DESC LIMIT 1) + 1;

        RETURN getCount;
    END$$

CREATE FUNCTION `autoInc_user_detail` () RETURNS INT(11) NO SQL
BEGIN
        DECLARE getCount INT(10);

        SET getCount = (
            SELECT id_user_detail
            FROM user ORDER BY ID DESC LIMIT 1);

        RETURN getCount;
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_bantuan`
--

CREATE TABLE `kategori_bantuan` (
  `id_kategori_bantuan` int(11) NOT NULL,
  `kategori_bantuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_bantuan`
--

INSERT INTO `kategori_bantuan` (`id_kategori_bantuan`, `kategori_bantuan`) VALUES
(1, 'Belum Ada Kategori'),
(2, 'Bantuan Langsung Tunai'),
(3, 'Bantuan Dana Bupati\r\n'),
(4, 'TIdak Mendapat Bantuan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kelas_ekonomi`
--

CREATE TABLE `kategori_kelas_ekonomi` (
  `id_kategori_kelas_ekonomi` int(11) NOT NULL,
  `kategori_kelas_ekonomi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_kelas_ekonomi`
--

INSERT INTO `kategori_kelas_ekonomi` (`id_kategori_kelas_ekonomi`, `kategori_kelas_ekonomi`) VALUES
(1, 'Belum Ada Kategori'),
(2, 'Mampu'),
(3, 'Tidak Mampu');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(250) NOT NULL,
  `foto_kegiatan` varchar(250) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `foto_kegiatan`, `keterangan`, `tgl_kegiatan`, `id_penulis`, `created_at`) VALUES
(5, 'Gotong Royong', '4242c1f292fb50177492336833874018.jpeg', 'penduduk Indonesia dikenal sebagai penduduk yang ramah di mata bangsa lain. Di samping itu juga, Indonesia terkenal dengan budaya gotong royong, khususnya di pedesaan. Budaya gotong royong sangat kental dengan masyarakat desa. Gotong royong (solidaritas sosial) merupakan bentuk kepedulian atau keprihatinan seseorang terhadap orang lain, sehingga ia rela memberikan waktu, tenaga atau pikirannya untuk orang lain. Budaya inilah yang masih dipegang oleh masyarakat desa di Indonesia pada umumnya. Sebagai contoh, di desa tempat saya  berada yaitu di Desa Lamajang', '2022-03-09', 1, '2022-03-09'),
(6, 'Penyerahan Bantuan Desa', '75824109d37cd1db6cc418fe24436120.jpeg', 'penduduk Indonesia dikenal sebagai penduduk yang ramah di mata bangsa lain. Di samping itu juga, Indonesia terkenal dengan budaya gotong royong, khususnya di pedesaan. Budaya gotong royong sangat kental dengan masyarakat desa. Gotong royong (solidaritas sosial) merupakan bentuk kepedulian atau keprihatinan seseorang terhadap orang lain, sehingga ia rela memberikan waktu, tenaga atau pikirannya untuk orang lain. Budaya inilah yang masih dipegang oleh masyarakat desa di Indonesia pada umumnya. Sebagai contoh, di desa tempat saya  berada yaitu di Desa Lamajang', '2022-03-10', 1, '2022-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `id_rt` int(11) NOT NULL,
  `nomor_rt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`id_rt`, `nomor_rt`) VALUES
(1, 'Belum Ada RT'),
(2, '001'),
(3, '002'),
(4, '003'),
(5, '004'),
(6, '005'),
(7, '006'),
(8, '007'),
(9, '008'),
(10, '009'),
(11, '010'),
(12, '011'),
(13, '012'),
(14, '013'),
(15, '014');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `nama`, `email`, `subject`, `message`, `created_at`) VALUES
(11, 'Taufiiqul Hakim', 'taufiiqulhakim23@gmail.com', 'Dana Bantuan Desa', 'Saya tidak mendapat bantuan desa, tolong admin verifikasi', '2022-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `status_verifikasi`
--

CREATE TABLE `status_verifikasi` (
  `id_status_verifikasi` int(11) NOT NULL,
  `status_verifikasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_verifikasi`
--

INSERT INTO `status_verifikasi` (`id_status_verifikasi`, `status_verifikasi`) VALUES
(1, 'Belum Diverifikasi'),
(2, 'Telah Diverfikasi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `id_user_level` int(10) NOT NULL,
  `id_user_detail` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `no_hp`, `id_user_level`, `id_user_detail`) VALUES
(1, 'admin_utama', 'admin123', 'admin_utama@gmail.com', '082912716726', 1, 1),
(2, 'admin_pkh', 'admin123', 'admin_pkh@gmail.com', '08126712', 2, 2),
(3, 'admin_rt', 'admin123', 'admin_rt@gmail.com', '01821726712', 3, 3),
(19, 'admin_rt_01', 'admin123', 'admin_rt_01@gmail.com', '0812781728', 3, 5),
(24, 'admin_rt_02', 'admin123', 'admin_rt_02@gmail.com', '0812781728', 3, 10),
(25, 'admin_rt_03', 'admin123', 'admin_rt_03@gmail.com', '0812781728', 3, 11),
(26, 'admin_rt_04', 'admin123', 'admin_rt_04@gmail.com', '0812781728', 3, 12),
(27, 'admin_rt_05', 'admin123', 'admin_rt_05@gmail.com', '0812781728', 3, 13),
(33, 'admin_rt_06', 'admin123', 'admin_rt_06@gmail.com', '08126712612', 3, 14),
(34, 'admin_rt_07', 'admin123', 'admin_rt_07@gmail.com', '08128912712', 3, 15),
(35, 'admin_rt_08', 'admin123', 'admin_rt_08@gmail.com', '0865124513162', 3, 16),
(36, 'admin_rt_09', 'admin123', 'admin_rt_09@gmail.com', '0812781728712', 3, 17),
(37, 'admin_rt_10', 'admin123', 'admin_rt_10@gmail.com', '08127817127182', 3, 18),
(38, 'admin_rt_11', 'admin123', 'admin_rt_11@gmail.com', '089126162716', 3, 19),
(39, 'admin_rt_12', 'admin123', 'admin_rt_12@gmail.com', '081721627617', 3, 20),
(40, 'admin_rt_13', 'admin123', 'admin_rt_13@gmail.com', '0819271726112', 3, 21),
(41, 'admin_rt_14', 'admin123', 'admin_rt_14@gmail.com', '08125342521', 3, 22),
(42, 'admin_rt_15', 'admin123', 'admin_rt_15@gmail.com', '089763425212', 3, 23),
(46, 'malian123', 'malian123', 'malian123@gmail.com', '0812781728', 4, 24),
(48, 'Taufiiqulhakim', 'Iipkoko@34', 'taufiiqulhakim23@gmail.com', '0812781728', 4, 25),
(52, 'Kresna', 'kresna123', 'kresna123@gmail.com', '0812781728', 4, 26),
(53, 'Irfan', 'irfan123', 'taufiiqulhakim23@gmail.com', '0812781728', 4, 27),
(54, 'Rian', 'rian123', 'rian23@gmail.com', '0812712671', 4, 28),
(55, 'jalal123', 'jalal123', 'jalal@gmail.com', '081271627812', 4, 29);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `id_rt` int(11) DEFAULT NULL,
  `id_kategori_bantuan` int(11) DEFAULT NULL,
  `id_kategori_kelas_ekonomi` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto_ktp` varchar(250) NOT NULL,
  `id_status_verifikasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `pekerjaan`, `id_rt`, `id_kategori_bantuan`, `id_kategori_kelas_ekonomi`, `keterangan`, `foto_ktp`, `id_status_verifikasi`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(5, '', '', '', '0000-00-00', '', 'L', '', 2, 2, 1, '', '', 1),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, NULL, '', 1),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 1, NULL, '', 1),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 1, NULL, '', 1),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, 1, NULL, '', 1),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, '', 1),
(24, 'Malian', '017828912671', 'Palembang', '2022-03-11', 'Jl. Sekip', 'L', 'Pengajar, Programmer', 2, 3, 2, 'Bagus', '6c97c5153f000218f0f0000ef647bcfa.jpg', 2),
(25, 'Taufiiqulhakim', '061827182871812', 'Palembang', '2022-03-13', 'Jl. Sekip', 'L', 'Pengajar, Programmer', 1, 2, 2, 'baik', 'e1416dc7b1aea5b12b0352258027f0ff.jpg', 2),
(26, 'Kresna Vespri', '06127172717281', 'Palembang', '2022-03-14', 'Jl. Sekip', 'L', 'Pengajar, Programmer', 6, 3, 2, 'Baik', 'e97e16103cd7ae61b97ad8b1c7d7fd89.png', 2),
(27, 'Muhammad Irfan', '06128781728121', 'Palembang', '2022-03-14', 'Jl. Sekip', 'L', 'Pengajar, Programmer', 2, 2, 3, 'Bantuan Bupati', 'b90dd6910160135a870afdd3cfb684d7.png', 2),
(28, 'RianHariyadi', '061827812', 'Palembang', '2022-03-14', 'Jl. Sekip', 'L', 'PNS', 1, 3, 2, 'bagus', '8585d36b90f277a5cd38bf0475e8e506.png', 1),
(29, 'Jalal', '061827182817218', 'Plaju', '2022-03-15', 'Jl. Plaju Raya utama', 'L', 'Pengusaha', 2, 2, 2, 'bagus', '48778d7667ae45f975d414276b19daa81.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id_user_level`, `user_level`) VALUES
(1, 'admin utama'),
(2, 'admin pkh'),
(3, 'admin rt'),
(4, 'masyarakat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_bantuan`
--
ALTER TABLE `kategori_bantuan`
  ADD PRIMARY KEY (`id_kategori_bantuan`);

--
-- Indexes for table `kategori_kelas_ekonomi`
--
ALTER TABLE `kategori_kelas_ekonomi`
  ADD PRIMARY KEY (`id_kategori_kelas_ekonomi`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id_rt`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  ADD PRIMARY KEY (`id_status_verifikasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id_user_detail`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_bantuan`
--
ALTER TABLE `kategori_bantuan`
  MODIFY `id_kategori_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_kelas_ekonomi`
--
ALTER TABLE `kategori_kelas_ekonomi`
  MODIFY `id_kategori_kelas_ekonomi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `id_rt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `status_verifikasi`
--
ALTER TABLE `status_verifikasi`
  MODIFY `id_status_verifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
