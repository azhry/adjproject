-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 05:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
  `keterampilan` int(50) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id_art`, `nama`, `usia`, `suku`, `jenis_kelamin`, `asal`, `gaji`, `agama`, `status`, `pendidikan`, `keterampilan`) VALUES
(1, 'hahahah', '50', 'jawa', 'Laki-laki', 'any', '20000000', 'islam', 'bekerja', 'tidak_sekolah', 2),
(2, 'jsakdjkasdlkj', '50', 'jawa', 'Perempuan', 'any', '20000000', 'islam', 'bekerja', 'tidak_sekolah', 0),
(3, 'ewwww', '50', 'jawa', 'Laki-laki', 'any', '20000000', 'islam', 'tidak bekerja', 'tidak sekolah', 0),
(4, '1212', '50', 'jawa', 'Laki-laki', 'any', '20000000', 'islam', 'tidak bekerja', 'tidak sekolah', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id_chat`, `id_pengguna`, `id_admin`, `chat`, `pengirim`) VALUES
(1, 1, 1, 'asdsd', 'pengguna'),
(2, 1, 1, 'test', 'admin'),
(3, 1, 1, 'hoho', 'admin');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `username`, `pass`, `nama`, `alamat`, `anak`, `agama`, `jenis_kelamin`, `email`, `no_telp`) VALUES
(1, 'azhary', '202cb962ac59075b964b07152d234b70', 'Azhary Arliansyah', 'Griya Sejahtera', '[{"nama":"anak 1","usia":"22"},{"nama":"anak 2","usia":"11"}]', 'islam', 'Laki-laki', 'arliansyah_azhary@yahoo.com', '081996200096'),
(2, 'az', '202cb962ac59075b964b07152d234b70', 'Azhary Ganteng', 'Griya Sejahtera', '[{"nama":"anak 1","usia":"22"},{"nama":"anak 2","usia":"11"}]', 'Islam', 'Laki-laki', 'azhary_arliansyah@outlook.com', '+6281996073896');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_art`
--

INSERT INTO `order_art` (`id_order`, `id_art`, `id_konsumen`, `mulai_kerja`, `akhir_kerja`, `order_date`) VALUES
(1, 2, 1, '2016-11-10 13:59:48', '2018-11-10 13:59:48', '2016-11-10 13:59:48'),
(2, 1, 1, '2016-11-29 15:58:12', '2016-12-29 15:58:12', '2016-11-29 15:58:12'),
(4, 4, 1, '2016-12-15 00:00:00', '2016-12-14 00:00:00', '2016-12-19 00:00:00');

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
 ADD PRIMARY KEY (`id_chat`);

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
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
 ADD PRIMARY KEY (`id_konsumen`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
 ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `order_art`
--
ALTER TABLE `order_art`
 ADD PRIMARY KEY (`id_order`), ADD KEY `fk_id_art` (`id_art`), ADD KEY `fk_id_konsumen` (`id_konsumen`);

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
MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_art`
--
ALTER TABLE `order_art`
MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_art`
--
ALTER TABLE `order_art`
ADD CONSTRAINT `fk_id_art` FOREIGN KEY (`id_art`) REFERENCES `art` (`id_art`),
ADD CONSTRAINT `fk_id_konsumen` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen` (`id_konsumen`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
