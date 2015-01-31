-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2015 at 09:32 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `nim`, `judul`, `isi`, `tipe`, `tanggal`, `status`) VALUES
(2, 2012100200, 'sukses cepat', 'hai kita mau sukses cepat', 'Business', '2015-01-10 18:40:24', ''),
(3, 2012100200, 'sukses cepat', 'hkjdflxldsdjskf', 'Business', '2015-01-10 18:42:50', 'PENDING'),
(4, 2012100200, 'minggu ceria', 'hari minggu yang ceria ditemani dengan tugas yang super banyak', 'Lifestyle', '2015-01-11 13:06:24', 'PENDING'),
(5, 2012100200, 'dingin', 'pagi dingin', 'Sport', '2015-01-15 08:25:07', 'PENDING'),
(6, 2012100200, 'dsjfhk', 'hjsdkf,', 'Business', '2015-01-15 11:04:10', 'PENDING'),
(7, 2012100184, 'detik detik menuju kebebasan setelah uas WEB', 'Sedikit banget', 'Business', '2015-01-30 13:28:10', 'PENDING');

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
('0', 'Admin', '', '$2a$10$tebakpasswordsayahahaemf/dohz7WQtT.BOSYmPmV3kMCs1P8jW', 'Female', 'Lecturer', '', 'gambar/', 1),
('2012100018', 'Rofiatul Karomah', 'rofiakaromah@gmail.comm', '$2a$10$tebakpasswordsayahahaeKdkmq1OaS2RPO1tfXnt0PFA4tV7Amzy', 'Female', 'Lecturer', 'Tetap semangat menatap masa depan', 'gambar/fia.jpg', 2),
('2012100152', 'Disya Rizky Anindya', 'disyarizkyanindya@gmail.com', '$2a$10$tebakpasswordsayahahaegwxCh7I8dItV1QCc5TdM2ANy560bcEW', 'Female', 'College Student', 'Hidup itu indah jika kau nikmati', 'gambar/disya.jpg', 2),
('2012100184', 'David Meibert', 'daviddragon@gmail.com', '$2a$10$tebakpasswordsayahahae20ekBvVZNm8pn4RUpzV/cMQPOf2gGAG', 'Male', 'College Student', 'Hidup itu style G Dragon', 'gambar/david.jpg', 2),
('2012100200', 'Lisa Melyani', 'lisamelyani@gmail.com', '$2a$10$tebakpasswordsayahahaeK9zfD74jVd0VG.oIFTxB7WuzOuSH7au', 'Female', 'College Student', 'tetap tersenyum walau capek banget', 'gambar/2012100200.jpg', 2),
('2012100203', 'Grady Askarika', 'abcdefgrady@gmail.com', '$2a$10$tebakpasswordsayahahae/I6s73skakrh0BHaxYUA3Lp63qs2l42', 'Male', 'College Student', 'Tetap Asik aja', 'gambar/grady.jpg', 2);

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
MODIFY `id_artikel` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
