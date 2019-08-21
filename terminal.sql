-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jul 2017 pada 03.21
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `terminal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_izin_insidentil`
--

CREATE TABLE IF NOT EXISTS `tbl_izin_insidentil` (
  `no_izin_insidentil` int(20) NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `bulan_berlaku` date NOT NULL,
  `tahun_berlaku` date NOT NULL,
  `tgl_kadarwasa` date NOT NULL,
  `bulan_kadarwasa` date NOT NULL,
  `tahun_kadarwasa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kedatangan`
--

CREATE TABLE IF NOT EXISTS `tbl_kedatangan` (
`no` int(10) NOT NULL,
  `tgl_kedatangan` date NOT NULL,
  `bulan_kedatangan` date NOT NULL,
  `tahun_kedatangan` date NOT NULL,
  `no_kendaraan` int(20) NOT NULL,
  `nama_po` text NOT NULL,
  `jenis_pelayanan` text NOT NULL,
  `trayek` text NOT NULL,
  `------` text NOT NULL,
  `no_kp_regular` int(20) NOT NULL,
  `no_kp_cadangan` int(20) NOT NULL,
  `no_izin_insidentil` int(20) NOT NULL,
  `jenis_kendaraan` text NOT NULL,
  `kelas_pelayanan` text NOT NULL,
  `kapasitas_tempat_duduk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kp_cadangan`
--

CREATE TABLE IF NOT EXISTS `tbl_kp_cadangan` (
  `no_kp_cadangan` int(20) NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `bulan_berlaku` date NOT NULL,
  `tahun_berlaku` date NOT NULL,
  `tgl_kadarwasa` date NOT NULL,
  `bulan_kadarwasa` date NOT NULL,
  `tahun_kadarwasa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kp_regular`
--

CREATE TABLE IF NOT EXISTS `tbl_kp_regular` (
  `no_kp_regular` int(20) NOT NULL,
  `tgl_berlaku` date NOT NULL,
  `bulan_berlaku` date NOT NULL,
  `tahun_berlaku` date NOT NULL,
  `tgl_kadarwasa` date NOT NULL,
  `bulan_kadarwasa` date NOT NULL,
  `tahun_kadarwasa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(9, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_izin_insidentil`
--
ALTER TABLE `tbl_izin_insidentil`
 ADD PRIMARY KEY (`no_izin_insidentil`);

--
-- Indexes for table `tbl_kedatangan`
--
ALTER TABLE `tbl_kedatangan`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_kp_cadangan`
--
ALTER TABLE `tbl_kp_cadangan`
 ADD PRIMARY KEY (`no_kp_cadangan`);

--
-- Indexes for table `tbl_kp_regular`
--
ALTER TABLE `tbl_kp_regular`
 ADD PRIMARY KEY (`no_kp_regular`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kedatangan`
--
ALTER TABLE `tbl_kedatangan`
MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
