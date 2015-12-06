-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2015 at 03:11 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbckk`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kategori`
--

CREATE TABLE IF NOT EXISTS `t_kategori` (
`id_kategori` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE IF NOT EXISTS `t_transaksi` (
`id_transaksi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nominal` int(20) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `t_transaksi`
--

INSERT INTO `t_transaksi` (`id_transaksi`, `id_user`, `nominal`, `kategori`, `deskripsi`, `waktu`) VALUES
(3, 0, 7000, 'yeay', 'berhasil', '2015-11-30 13:53:54'),
(4, 0, 2000, 'nabung', 'nabung aja', '2015-11-30 13:54:43'),
(5, 0, 8999, 'bebas', 'bebas', '2015-11-30 14:07:18'),
(6, 0, 7000, 'budi', 'hore', '2015-11-30 14:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE IF NOT EXISTS `t_user` (
`id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `email`, `pass`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
