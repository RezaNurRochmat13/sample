-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2018 at 03:44 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemeriksaan`
--

CREATE TABLE `tbl_pemeriksaan` (
  `idkomisioning` int(11) NOT NULL,
  `idpel` varchar(100) DEFAULT NULL,
  `erormeter` varchar(100) DEFAULT NULL,
  `erorR` varchar(100) DEFAULT NULL,
  `erorS` varchar(100) DEFAULT NULL,
  `erorT` varchar(100) DEFAULT NULL,
  `jenisCT` varchar(100) DEFAULT NULL,
  `arusCT` varchar(100) DEFAULT NULL,
  `rasioCT` varchar(100) DEFAULT NULL,
  `segelkwh` varchar(100) DEFAULT NULL,
  `segelterminal` varchar(100) DEFAULT NULL,
  `segelboxapp` varchar(100) DEFAULT NULL,
  `segelgardu` varchar(100) DEFAULT NULL,
  `segelpembatas` varchar(100) DEFAULT NULL,
  `tglperiksa` date DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `petugas` varchar(155) DEFAULT NULL,
  `ba` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemeriksaan`
--

INSERT INTO `tbl_pemeriksaan` (`idkomisioning`, `idpel`, `erormeter`, `erorR`, `erorS`, `erorT`, `jenisCT`, `arusCT`, `rasioCT`, `segelkwh`, `segelterminal`, `segelboxapp`, `segelgardu`, `segelpembatas`, `tglperiksa`, `keterangan`, `petugas`, `ba`, `created_at`) VALUES
(3, 'PELANGGAN1', '92329327387', '5562', '777373', '838388', 'ssdsd', 'nsdshdhs', 'sssasa', 'sdsd', 'nssdhhsdh', 'sjjsjjsj', 'wrefefe', 'hfhhfh', '2017-10-12', 'dhdhhdh', 'hdhhdhdh', 'wewewewe', '2018-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plg`
--

CREATE TABLE `tbl_plg` (
  `idpel` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(100) DEFAULT NULL,
  `tarif` varchar(50) DEFAULT NULL,
  `daya` varchar(50) DEFAULT NULL,
  `fkm` varchar(50) DEFAULT NULL,
  `tipe_meter` varchar(50) DEFAULT NULL,
  `merk_meter` varchar(50) DEFAULT NULL,
  `kelas_meter` varchar(50) DEFAULT NULL,
  `vnominal_meter` varchar(50) DEFAULT NULL,
  `inominal_meter` varchar(50) DEFAULT NULL,
  `noseri_meter` varchar(50) DEFAULT NULL,
  `tahun_meter` varchar(50) DEFAULT NULL,
  `merk_ct` varchar(50) DEFAULT NULL,
  `tipe_ct` varchar(50) DEFAULT NULL,
  `rasio_ct` varchar(50) DEFAULT NULL,
  `kelas_ct` varchar(50) DEFAULT NULL,
  `noseri_ct` varchar(50) DEFAULT NULL,
  `merk_vt` varchar(50) DEFAULT NULL,
  `tipe_vt` varchar(50) DEFAULT NULL,
  `rasio_vt` varchar(50) DEFAULT NULL,
  `kelas_vt` varchar(50) DEFAULT NULL,
  `noseri_vt` varchar(50) DEFAULT NULL,
  `foto_ct1` varchar(50) DEFAULT NULL,
  `foto_ct2` varchar(50) DEFAULT NULL,
  `foto_ct3` varchar(50) DEFAULT NULL,
  `foto_vt1` varchar(50) DEFAULT NULL,
  `foto_vt2` varchar(50) DEFAULT NULL,
  `foto_vt3` varchar(50) DEFAULT NULL,
  `foto_meter1` varchar(50) DEFAULT NULL,
  `foto_meter2` varchar(50) DEFAULT NULL,
  `foto_meter3` varchar(50) DEFAULT NULL,
  `koordinat_x` varchar(50) DEFAULT NULL,
  `koordinat_y` varchar(50) DEFAULT NULL,
  `tgl_update` date DEFAULT NULL,
  `foto_pembatas1` varchar(50) DEFAULT NULL,
  `foto_pembatas2` varchar(50) DEFAULT NULL,
  `foto_pembatas3` varchar(50) DEFAULT NULL,
  `foto_box1` varchar(50) DEFAULT NULL,
  `foto_box2` varchar(50) DEFAULT NULL,
  `foto_box3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_plg`
--

INSERT INTO `tbl_plg` (`idpel`, `nama`, `alamat`, `no_telp`, `tarif`, `daya`, `fkm`, `tipe_meter`, `merk_meter`, `kelas_meter`, `vnominal_meter`, `inominal_meter`, `noseri_meter`, `tahun_meter`, `merk_ct`, `tipe_ct`, `rasio_ct`, `kelas_ct`, `noseri_ct`, `merk_vt`, `tipe_vt`, `rasio_vt`, `kelas_vt`, `noseri_vt`, `foto_ct1`, `foto_ct2`, `foto_ct3`, `foto_vt1`, `foto_vt2`, `foto_vt3`, `foto_meter1`, `foto_meter2`, `foto_meter3`, `koordinat_x`, `koordinat_y`, `tgl_update`, `foto_pembatas1`, `foto_pembatas2`, `foto_pembatas3`, `foto_box1`, `foto_box2`, `foto_box3`) VALUES
('PELANGGAN1', 'Agus', 'Pakem', '0867546864', '50000', '900', '600', 'sassaas', 'asasas', 'snansasa', 'sasasasa', 'asasas', 'asasas', '2017', 'sasasa', 'assasa', 'asasasas', 'sasasasa', '2345678', 'dsdsdsd', 'sasasasa', 'sasasasa', 'asasasas', 'sasasas', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', '10.0099877', '68.7663672', '2017-10-12', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png', 'slider-cat.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `KodeUnit` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `last_login` varchar(50) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9', 1),
(7, 'admin2', '33aab3c7f01620cade108f488cfd285c0e62c1ec', 0),
(8, 'admin2', '5bae372e69f5293eda5b478a2663f5330fe41631', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  ADD PRIMARY KEY (`idkomisioning`);

--
-- Indexes for table `tbl_plg`
--
ALTER TABLE `tbl_plg`
  ADD PRIMARY KEY (`idpel`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  MODIFY `idkomisioning` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
