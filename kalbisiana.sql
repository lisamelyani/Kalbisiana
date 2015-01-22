-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2015 at 07:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kalbisiana`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id_artikel` int(100) NOT NULL,
  `nim` int(10) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tipe` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `nim`, `judul`, `isi`, `tipe`, `tanggal`, `status`) VALUES
(2, 2012100200, 'sukses cepat', 'hai kita mau sukses cepat', 'Business', '2015-01-10 18:40:24', ''),
(3, 2012100200, 'sukses cepat', 'hkjdflxldsdjskf', 'Business', '2015-01-10 18:42:50', 'PENDING'),
(4, 2012100200, 'minggu ceria', 'hari minggu yang ceria ditemani dengan tugas yang super banyak', 'Lifestyle', '2015-01-11 13:06:24', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `bio` text NOT NULL,
  `foto` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gender`, `status`, `bio`, `foto`, `level`) VALUES
('2012100111', 'Admin', '', '$2a$10$MauTaupasswordsayahahOgHX8BcVV6z3UfSZwHdE0.0jIVSMkOzy', '', '', '', '', 1),
('2012100123', 'desi', 'desi@gmail.com', '$2a$10$tebakpasswordsayahahae1YJNKCNDMIW.nEgUIxyvRqhQa1rWIXS', 'Female', 'Lecturer', 'lisa', 'gambar/gambar02.jpg', 0),
('2012100200', 'Lisa Melyani', 'lisamelyani@gmail.com', '$2a$10$tebakpasswordsayahahae09kiZWfJVl6VcstONiNsk.1oXoR1kuG', 'Female', 'College Student', 'Keep Fighting!!!', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id_artikel` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
