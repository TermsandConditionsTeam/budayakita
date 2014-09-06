-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2014 at 04:35 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `budayakita`
--

-- --------------------------------------------------------

--
-- Table structure for table `budaya`
--

CREATE TABLE IF NOT EXISTS `budaya` (
  `id_budaya` int(11) NOT NULL AUTO_INCREMENT,
  `nama_budaya` varchar(100) NOT NULL,
  `lat_bud` float NOT NULL,
  `long_bud` float NOT NULL,
  `sejarah` text NOT NULL,
  `nama_file_video` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  PRIMARY KEY (`id_budaya`),
  KEY `id_provinsi` (`id_provinsi`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `budaya`
--

INSERT INTO `budaya` (`id_budaya`, `nama_budaya`, `lat_bud`, `long_bud`, `sejarah`, `nama_file_video`, `id_kategori`, `id_provinsi`) VALUES
(1, 'Taman Mini Indonesia Indah, Kota Jakarta Timur, DKI Jakarta, Indonesia', -6.30245, 106.895, '', '', 1, 11),
(2, 'Saung Angklung Udjo, Bandung, Jawa Barat, Indonesia', -6.89797, 107.655, '', '', 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `chekin`
--

CREATE TABLE IF NOT EXISTS `chekin` (
  `id_checkIn` int(11) NOT NULL AUTO_INCREMENT,
  `id_tab_user` int(11) NOT NULL,
  `id_budaya` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_checkIn`),
  KEY `id_tab_user` (`id_tab_user`),
  KEY `id_budaya` (`id_budaya`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment_bud`
--

CREATE TABLE IF NOT EXISTS `comment_bud` (
  `id_comm_bud` int(11) NOT NULL AUTO_INCREMENT,
  `id_budaya` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_tab_user` int(11) NOT NULL,
  PRIMARY KEY (`id_comm_bud`),
  KEY `id_tab_user` (`id_tab_user`),
  KEY `id_budaya` (`id_budaya`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment_per`
--

CREATE TABLE IF NOT EXISTS `comment_per` (
  `id_comm_per` int(11) NOT NULL AUTO_INCREMENT,
  `id_permainan` int(11) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `id_tab_user` int(11) NOT NULL,
  PRIMARY KEY (`id_comm_per`),
  KEY `id_tab_user` (`id_tab_user`),
  KEY `id_permainan` (`id_permainan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_budaya` int(11) NOT NULL,
  PRIMARY KEY (`id_event`),
  KEY `id_budaya` (`id_budaya`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tanggal`, `id_budaya`) VALUES
(1, 'A Little Fairy Tale', '2014-08-05', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file_gallery` varchar(100) NOT NULL,
  `nama_gallery` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_budaya` int(11) NOT NULL,
  PRIMARY KEY (`id_gallery`),
  KEY `id_budaya` (`id_budaya`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `nama_file_gallery`, `nama_gallery`, `tanggal`, `id_budaya`) VALUES
(1, 'IMG_1515', 'Pembukaan Direktur Saung Udjo', '2014-09-05', 2),
(2, 'IMG_1520', 'Pembukaan dari ''t Magisch Theatertje', '2014-09-05', 2),
(3, 'IMG_1529', 'Witch sedang berbicara pada Gago', '2014-09-05', 2),
(4, 'IMG_1533', 'Pemberian apresiasi dari Saung Udjo', '2014-09-05', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `nama_file_icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `nama_file_icon`) VALUES
(1, 'Museum', 'map-marker-building(32xx)'),
(2, 'Seni Musik', 'map-marker-busana(32xx)');

-- --------------------------------------------------------

--
-- Table structure for table `lencana`
--

CREATE TABLE IF NOT EXISTS `lencana` (
  `id_lencana` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lencana` varchar(50) NOT NULL,
  `nama_file_icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id_lencana`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lencana`
--

INSERT INTO `lencana` (`id_lencana`, `nama_lencana`, `nama_file_icon`) VALUES
(1, 'FTF', 'badge-first_check-in'),
(2, 'New Comer', 'badge-newcomer');

-- --------------------------------------------------------

--
-- Table structure for table `permainan`
--

CREATE TABLE IF NOT EXISTS `permainan` (
  `id_permainan` int(11) NOT NULL AUTO_INCREMENT,
  `lat_per` float NOT NULL,
  `long_per` float NOT NULL,
  `nama_per` varchar(100) NOT NULL,
  `nama_file_icon` varchar(100) NOT NULL,
  `favorite` int(11) NOT NULL,
  `clue` text NOT NULL,
  `difficult` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_tab_user` int(11) NOT NULL,
  PRIMARY KEY (`id_permainan`),
  KEY `id_tab_user` (`id_tab_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(30) NOT NULL,
  `nama_ibukota` varchar(30) NOT NULL,
  `lat` float NOT NULL,
  `long` float NOT NULL,
  KEY `id_provinsi` (`id_provinsi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `nama_ibukota`, `lat`, `long`) VALUES
(1, 'Aceh', 'Banda Aceh', 5.55, 95.3167),
(2, 'Sumatera Utara', 'Medan', 3.59154, 98.6693),
(3, 'Sumatera Barat', 'Padang', -0.95, 100.353),
(4, 'Riau', 'Pekanbaru', -0.5335, 101.447),
(5, 'Jambi', 'Jambi', -1.59, 103.61),
(6, 'Sumatera Selatan', 'Palembang', -2.99093, 104.757),
(7, 'Bengkulu', 'Bengkulu', -3.79207, 102.262),
(8, 'Lampung', 'Bandar Lampung', -4.55858, 105.407),
(9, 'Kepulauan Bangka Belitung', 'Pangkal Pinang', -5.44789, 105.265),
(10, 'Kepulauan Riau', 'Tanjungpinang', 0.91792, 104.446),
(11, 'DKI Jakarta', 'Jakarta', -6.20876, 106.846),
(12, 'Jawa Barat', 'Bandung', -6.91486, 107.608),
(13, 'Jawa Tengah', 'Semarang', -6.96667, 110.417),
(14, 'D I Yogyakarta', 'Yogyakarta', -7.79707, 110.371),
(15, 'Jawa Timur', 'Surabaya', -7.26424, 112.746),
(16, 'Banten', 'Serang', -6.12, 106.15),
(17, 'Bali', 'Denpasar', -8.65, 115.217),
(18, 'Nusa Tenggara Barat', 'Mataram', -8.58195, 116.117),
(19, 'Nusa Tenggara Timur', 'Kupang', -10.1788, 123.598);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_depan` varchar(10) NOT NULL,
  `nama_belakang` varchar(10) NOT NULL,
  `id_tab_user` int(11) NOT NULL AUTO_INCREMENT,
  `login_time` int(11) NOT NULL,
  PRIMARY KEY (`id_tab_user`),
  KEY `id_tab_user` (`id_tab_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`password`, `email`, `nama_depan`, `nama_belakang`, `id_tab_user`, `login_time`) VALUES
('d1143b3cd3a2c73f06cc9a9a8cd86a16', 'rifqithomigame@gmail.com', 'rifqi', 'thomi', 15, 4),
('d1143b3cd3a2c73f06cc9a9a8cd86a16', 'ahmadrosyq@gmail.com', 'ahmad', 'rosyiq', 16, 1),
('d1143b3cd3a2c73f06cc9a9a8cd86a16', 'rifqithomigame@yahoo.com', 'rey', 'zenki', 17, 2),
('d1143b3cd3a2c73f06cc9a9a8cd86a16', 'rifqithomi@gmail.com', 'rifqi', 'thomi', 22, 3),
('d1143b3cd3a2c73f06cc9a9a8cd86a16', 'rifqithomi@yahoo.co.id', 'rifqi', 'thomi', 23, 1),
('d1143b3cd3a2c73f06cc9a9a8cd86a16', 'rifqithomi@live.com', 'rifqi', 'thomi', 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_have_lencana`
--

CREATE TABLE IF NOT EXISTS `user_have_lencana` (
  `id_tab_user` int(11) NOT NULL,
  `id_lencana` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_tab_user`,`id_lencana`),
  KEY `id_tab_user` (`id_tab_user`),
  KEY `id_lencana` (`id_lencana`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_have_lencana`
--

INSERT INTO `user_have_lencana` (`id_tab_user`, `id_lencana`, `tanggal`) VALUES
(15, 2, '2014-08-31'),
(16, 2, '2014-08-31'),
(17, 2, '2014-08-31'),
(22, 2, '2014-09-01'),
(23, 2, '2014-09-02'),
(24, 2, '2014-09-04');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budaya`
--
ALTER TABLE `budaya`
  ADD CONSTRAINT `fk_kat1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prov1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chekin`
--
ALTER TABLE `chekin`
  ADD CONSTRAINT `fk_bud4` FOREIGN KEY (`id_budaya`) REFERENCES `budaya` (`id_budaya`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_us4` FOREIGN KEY (`id_tab_user`) REFERENCES `user` (`id_tab_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment_bud`
--
ALTER TABLE `comment_bud`
  ADD CONSTRAINT `fk_bud5` FOREIGN KEY (`id_budaya`) REFERENCES `budaya` (`id_budaya`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_us3` FOREIGN KEY (`id_tab_user`) REFERENCES `user` (`id_tab_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment_per`
--
ALTER TABLE `comment_per`
  ADD CONSTRAINT `fk_per` FOREIGN KEY (`id_permainan`) REFERENCES `permainan` (`id_permainan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_us2` FOREIGN KEY (`id_tab_user`) REFERENCES `user` (`id_tab_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_bud2` FOREIGN KEY (`id_budaya`) REFERENCES `budaya` (`id_budaya`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `fk_bud1` FOREIGN KEY (`id_budaya`) REFERENCES `budaya` (`id_budaya`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permainan`
--
ALTER TABLE `permainan`
  ADD CONSTRAINT `fk_us1` FOREIGN KEY (`id_tab_user`) REFERENCES `user` (`id_tab_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_have_lencana`
--
ALTER TABLE `user_have_lencana`
  ADD CONSTRAINT `fk_len` FOREIGN KEY (`id_lencana`) REFERENCES `lencana` (`id_lencana`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_tab_user`) REFERENCES `user` (`id_tab_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
