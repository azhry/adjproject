-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 10:26 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adj_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `pass`) VALUES
(1, 'azhary', '985fabf8f96dc1c4c306341031569937');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE IF NOT EXISTS `art` (
  `id_art` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `usia` varchar(3) NOT NULL,
  `suku` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `asal` text NOT NULL,
  `gaji` varchar(11) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `keterampilan` text NOT NULL,
  `pengalaman` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id_art`, `nama`, `usia`, `suku`, `jenis_kelamin`, `asal`, `gaji`, `agama`, `status`, `pendidikan`, `keterampilan`, `pengalaman`) VALUES
(1, 'hahahahaaaaaa', '324', 'Lampung', 'Perempuan', 'semarang', '20000000324', 'Katolik', '', 'Sekolah Menengah Pertama', '["ngoding","dsfds","ewrewre"]', 2343),
(2, 'jsakdjkasdlkj', '50', 'jawa', 'Perempuan', 'any', '20000000', 'islam', 'bekerja', 'tidak_sekolah', '["ngoding","\\"ngoding\\""]', 0),
(3, 'ewwww', '50', 'jawa', 'Laki-laki', 'any', '20000000', 'islam', 'tidak bekerja', 'tidak sekolah', '["ngoding","\\"ngoding\\""]', 0),
(4, '1212', '50', 'jawa', 'Laki-laki', 'any', '20000000', 'islam', 'tidak bekerja', 'tidak sekolah', '["ngoding","\\"ngoding\\""]', 0),
(5, 'testingNAMA', '49', 'sunda', 'Perempuan', 'surabaya', '3750000', 'budha', 'tidak bekerja', 'sma', '["ngoding","\\"ngoding\\""]', 9),
(6, 'test', '50', 'banten', 'Laki-laki', 'medan', '3000000', 'katolik', 'tidak bekerja', 'sd', '["asdas","asdsds","fdgfdgfd"]', 9),
(7, 'hahahahaaaaaa', '502', 'NTT', 'Perempuan', 'banjarmasin', '2220000000', 'Budha', 'tidak bekerja', 'Sekolah Menengah Pertama', '["dsfdsf","sdfdsf","sdfdsf"]', 10);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id_chat` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `chat` text NOT NULL,
  `pengirim` enum('admin','pengguna') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `id_pengguna`, `id_admin`, `chat`, `pengirim`) VALUES
(4, 4, 1, 'Haaay ganteng', 'pengguna'),
(5, 4, 1, 'Hay jugaaa sayang', 'admin'),
(6, 4, 1, 'gi ngpain?', 'pengguna'),
(7, 4, 1, 'gy mencintai mhuu ', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id_info` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `waktu` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id_info`, `judul`, `isi`, `gambar`, `waktu`) VALUES
(11, 'asa1', '<p>\r\n	date(&#39;Y-m-d&#39;)</p>\r\n', 'artikel_03', '2016-12-24 15:21:33'),
(12, 'Dota 211', '<div>\r\n	Algoritma genetika</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Algoritma genetika pertama kali dikemukakan oleh John Holland awal tahun 1975. Algoritma ini banyak dipakai dalam aplikasi bisnis, teknik maupun aplikasi lainnya. Algoritma genetika ini dimulai dengan kumpulan-kumpulan solusi yang dibangkitkan secara acak. Yang kemudian akan diseleksi dengan nilai fitness. Sebenarnya prinsip algoritma genetika ini terinspirasi dari teori evolusi Charles Darwin yaitu setiap mahluk hidup akan menurunkan satu atau beberapa karakter ke anak atau keturunannya (Bambrik,1997). Dalam proses tersebut bisa terdapat variasi karena didalam algoritma genetika terdapat proses mutasi sehingga keturunannya memiliki kelebihan atau kekurangan dari induknya. Setiap mahluk hidup akan mengalami seleksi alam, sehingga mahluk hidup yang dapat beradaptasi dengan baik yang mampu bertahan sampai generasi selanjutnya. Semakin bagus atau sesuai fitness dari sebuah solusi, maka semakin besar kemungkinan individu untuk dipilih. Proses ini akan terjadi secara berulang-ulang sampai kondisi tertentu terpenuhi.</div>\r\n<div>\r\n	Algoritma Genetika adalah algoritma yang memanfaatkan proses seleksi alamiah yang dikenal dengan proses evolusi. Dalam proses evolusi, individu secara terus-menerus mengalami perubahan gen untuk menyesuaikan dengan lingkungan hidupnya. Proses seleksi alamiah ini melibatkan perubahan gen yang terjadi pada individu melalui proses perkembangbiakan.</div>\r\n', 'artikel_34', '2016-12-24 17:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_yayasan`
--

CREATE TABLE IF NOT EXISTS `kepala_yayasan` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepala_yayasan`
--

INSERT INTO `kepala_yayasan` (`id_user`, `username`, `pass`) VALUES
(1, 'apranta', '202cb962ac59075b964b07152d234b70'),
(2, 'kuku', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_konsumen` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  `isi_komentar` text NOT NULL,
  `waktu` datetime NOT NULL,
  `id_info` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_pengguna`, `id_konsumen`, `id_art`, `isi_komentar`, `waktu`, `id_info`, `status`) VALUES
(4, 4, 4, 0, 'ksdfjskldfd', '2017-01-10 15:18:46', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE IF NOT EXISTS `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `anak` text NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `username`, `pass`, `nama`, `alamat`, `anak`, `agama`, `jenis_kelamin`, `email`, `no_telp`) VALUES
(4, 'azhary', '985fabf8f96dc1c4c306341031569937', 'Azhary Arliansyah', 'Griya Sejahtera', '[{"nama":"Anak 1","usia":"100"},{"nama":"Anak 2","usia":"70"},{"nama":"Anak 3","usia":"50"}]', 'islam', 'laki-laki', 'arliansyah_azhary@yahoo.com', '081996073896');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  `nama_art` varchar(255) NOT NULL,
  `mulai_kerja` date NOT NULL,
  `akhir_kerja` date NOT NULL,
  `waktu_laporan` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_art`, `nama_art`, `mulai_kerja`, `akhir_kerja`, `waktu_laporan`) VALUES
(1, 2, 'jsakdjkasdlkj', '0000-00-00', '0000-00-00', '2016-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `order_art`
--

CREATE TABLE IF NOT EXISTS `order_art` (
  `id_order` int(11) NOT NULL,
  `id_art` int(11) NOT NULL,
  `id_konsumen` int(11) NOT NULL,
  `mulai_kerja` datetime NOT NULL,
  `akhir_kerja` datetime NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id_art`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `fk_id_admin_chat` (`id_admin`),
  ADD KEY `fk_id_pengguna` (`id_pengguna`) USING BTREE;

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `kepala_yayasan`
--
ALTER TABLE `kepala_yayasan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `fk_id_pengguna_komentar` (`id_pengguna`),
  ADD KEY `fk_id_konsumen_komentar` (`id_konsumen`),
  ADD KEY `fk_id_art_komentar` (`id_art`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `fk_id_art_laporan` (`id_art`);

--
-- Indexes for table `order_art`
--
ALTER TABLE `order_art`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_id_art` (`id_art`),
  ADD KEY `fk_id_konsumen` (`id_konsumen`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kepala_yayasan`
--
ALTER TABLE `kepala_yayasan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_art`
--
ALTER TABLE `order_art`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `konsumen` (`id_konsumen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_admin_chat` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_id_konsumen_komentar` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `fk_id_art_laporan` FOREIGN KEY (`id_art`) REFERENCES `art` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_art`
--
ALTER TABLE `order_art`
  ADD CONSTRAINT `fk_id_art` FOREIGN KEY (`id_art`) REFERENCES `art` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_konsumen` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
