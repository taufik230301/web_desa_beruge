-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 04:44 AM
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
CREATE DEFINER=`root`@`localhost` FUNCTION `autoInc` () RETURNS INT(10) BEGIN
        DECLARE getCount INT(10);

        SET getCount = (
            SELECT id_user_detail
            FROM user ORDER BY ID DESC LIMIT 1) + 1;

        RETURN getCount;
    END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `autoInc_user_detail` () RETURNS INT(11) NO SQL
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
(3, 'Bantuan Dana Bupati\r\n');

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
(5, 'Gotong Royong', '4242c1f292fb50177492336833874018.png', 'Gotong Royong', '2022-03-09', 1, '2022-03-09');

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
(4, 'Taufiiqulhakim', 'Iipkoko@34', 'taufiiqulhakim23@gmail.com', '0812781728', 4, 4),
(19, 'admin_rt_01', 'admin123', 'admin_rt_01@gmail.com', '0812781728', 3, 5),
(20, 'kresna123', 'kresna12', 'kresna123@gmail.com', '0812781728', 4, 6),
(21, 'Zaki12', 'zaki123', 'zaki12@gmail.com', '08129819821', 4, 7),
(22, 'Heru', 'heru123', 'haru23@gmail.com', '01821291892', 4, 8),
(23, 'Hendra', 'hendra123', 'hendra@gmail.com', '0812781721', 4, 9),
(24, 'admin_rt_02', 'admin123', 'admin_rt_02@gmail.com', '0812781728', 3, 10),
(25, 'admin_rt_03', 'admin123', 'admin_rt_03@gmail.com', '0812781728', 3, 11),
(26, 'admin_rt_04', 'admin123', 'admin_rt_04@gmail.com', '0812781728', 3, 12),
(27, 'admin_rt_05', 'admin123', 'admin_rt_05@gmail.com', '0812781728', 3, 13),
(29, 'aziz12', 'aziz23', 'aziz25@gmail.com', '081271281', 4, 15),
(30, 'malian12', 'malian123', 'malian123@gmail.com', '0812781728', 4, 16);

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
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `alamat`, `jenis_kelamin`, `pekerjaan`, `id_rt`, `id_kategori_bantuan`, `id_kategori_kelas_ekonomi`, `keterangan`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Taufiiqulhakim', '16172121298192', 'Palembang', '2022-02-10', 'Jl.Belanti', 'L', 'Programmer', 1, 1, 2, 'Bagus'),
(5, '', '', '', '0000-00-00', '', 'L', '', 2, 2, 1, ''),
(6, 'Kresna Vespri', '1929102', 'Palembang', '2022-03-08', 'Jl. Sekip', 'L', 'Pengajar, Programmer', 2, 3, 3, 'Bgus'),
(7, 'Zaki Tirta', '0128918921', 'Kenten', '2022-03-16', 'Jl. Sekip', 'L', 'Siswa', 2, 2, 3, 'Bagus'),
(8, 'Heru M', '06182718728172', 'Bukit', '2022-03-08', 'Bagus', 'L', 'Programmer', 3, 2, 3, 'Bagus'),
(9, 'Hendra Nasution', '061827187281', 'Palembang', '2022-03-08', 'Jl. Sekip', 'L', 'PNS', 3, 2, 2, 'Bagus'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, 1, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, 1, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, 1, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, 1, NULL),
(15, 'Aziz Akbar', '0617267126712', 'Tg Raja', '0000-00-00', 'Jl. Sekip', 'L', 'PNS', 2, 1, 1, 'Bagus'),
(16, 'Malian', '061727817821', 'Sekip', '2022-03-09', 'Jl. Sekip', 'L', 'Pengajar, Programmer', 2, 1, 1, 'Bagus');

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
  MODIFY `id_kategori_bantuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_kelas_ekonomi`
--
ALTER TABLE `kategori_kelas_ekonomi`
  MODIFY `id_kategori_kelas_ekonomi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `id_rt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
