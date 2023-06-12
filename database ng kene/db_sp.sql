-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 12:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `user` varchar(16) NOT NULL,
  `pass` varchar(16) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`user`, `pass`, `level`) VALUES
('admin', 'admin', ''),
('putu', 'putu1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diagnosa`
--

CREATE TABLE `tb_diagnosa` (
  `kode_diagnosa` varchar(16) NOT NULL,
  `nama_diagnosa` varchar(256) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosa`
--

INSERT INTO `tb_diagnosa` (`kode_diagnosa`, `nama_diagnosa`, `keterangan`) VALUES
('[A001]', 'Asma (Tidak Menular)', 'Asma Disebabkan oleh'),
('[A002]', 'Cacingan (Menular)', 'Cacingan Disebabkan'),
('[A003]', 'Asam Urat (Tidak Menular)', 'Asam urat disebabkan'),
('[A004]', 'Muntaber (Menular)', 'Muntaber disebabkan\r\n'),
('[A005]', 'Cacar (Menular)', 'Cacar disebabkan oleh'),
('[A006]', 'Amandel (Menular)', 'Amandel disebabkan oleh'),
('[A007]', 'Tipes (Menular)', 'Disebabkan oleh'),
('[A008]', 'Katarak (Tidak Menular)', 'Katarak Disebabkan Oleh'),
('[A009]', 'TBC (Menular)', 'Tbc Disebabkan Oleh'),
('[A010]', 'Maag (Tidak Menular)', 'Maag Disebabkan Oleh'),
('[A011]', 'Demam  Berdarah (Menular)', 'Demam berdarah disebabkan oleh'),
('[A012]', 'Bronkhitis (Menular)', 'Bronkhitis disebabkan oleh'),
('[A013]', 'Rematik (Tidak Menular)', 'Rematik disebabkan oleh'),
('[A014]', 'Darah Tinggi (Tidak Menular)', 'Darah tinggi disebabkan oleh'),
('[A015]', 'Myalgia (Tidak Menular)', 'Myalgia disebabkan oleh'),
('[A016]', 'Paru-Paru (menular)', 'Penyakit Paru-Paru disebabkan oleh'),
('[A017]', 'Migrain (Tidak Menular)', 'Migrain disebabkan oleh'),
('[A018]', 'Ginjal (Tidak Menular)', 'Penyakit Ginjal disebabkan oleh'),
('[A019]', 'Jantung (Tidak Menular)', 'Penyakit Jantung disebabkan oleh'),
('[A020]', 'Sakit Lambung (Menular)', 'Penyakit lambung disebabkan oleh'),
('[A021]', 'Sakit Sendi (Tidak Menular)', 'Sakit Sendi disebabkan oleh'),
('[A022]', 'Diabetes (Tidak Menular)', 'Diabetes Disebabkan Oleh'),
('[A023]', 'Ispa (Menular]', 'Ispa disebabkan oleh'),
('[A024]', 'Influensa (Menular)', 'Influensa disebabkan oleh'),
('[A025]', 'Kusta (Menular)', 'Kusta Disebabkan Oleh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(8) NOT NULL,
  `nama_gejala` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('[B001]', 'Batuk-Batuk'),
('[B002]', 'Sembelit'),
('[B003]', 'Betis Bengkak'),
('[B004]', 'Sakit perut'),
('[B005]', 'Panas'),
('[B006]', 'Tengorokan Sakit'),
('[B007]', 'Demam'),
('[B008]', 'Melihat tidak jelas'),
('[B009]', 'Batuk Dahak'),
('[B010]', 'Sakit Lambung'),
('[B011]', 'Demam Tinggi'),
('[B012]', 'Nyeri Kaki'),
('[B013]', 'Pusing'),
('[B014]', 'Pegal'),
('[B015]', 'Dada Sakit'),
('[B016]', 'Sakit Kepala'),
('[B017]', 'Sakit Pinggang'),
('[B018]', 'Sakit Lutut'),
('[B019]', 'Berat Badan Turun'),
('[B020]', 'Kulit Bercak Putih'),
('[B021]', 'Sesak'),
('[B022]', 'Mual'),
('[B023]', 'Sering BAB'),
('[B024]', 'Gatal-Gatal'),
('[B025]', 'Bengkak pada Tenggorokan'),
('[B026]', 'Diare'),
('[B027]', 'Kesulitan Melihat di Malam'),
('[B028]', 'Bintik merah pada kulit'),
('[B029]', 'Pergelangan tangan nyeri'),
('[B030]', 'Tensi darah tinggi'),
('[B031]', 'Bengkak dipinggang'),
('[B032]', 'Batuk darah'),
('[B033]', 'Lelah'),
('[B034]', 'Bahu Sakit'),
('[B035]', 'Sakit Kaki'),
('[B036]', 'Hidung Tersumbat'),
('[B037]', 'Merah'),
('[B038]', 'Kesemutan'),
('[B039]', 'Mual dan Mutah'),
('[B040]', 'Suara Bindeng'),
('[B041]', 'Kurang Cairan'),
('[B042]', 'Berkabut'),
('[B043]', 'Badan Sakit'),
('[B044]', 'Kencing Sakit'),
('[B045]', 'Keringat Dingin'),
('[B046]', 'Buang Air Kecil Sakit'),
('[B047]', 'Sakit Betis'),
('[B048]', 'Kadar Gula Tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_relasi`
--

CREATE TABLE `tb_relasi` (
  `ID` int(11) NOT NULL,
  `kode_diagnosa` varchar(16) NOT NULL,
  `kode_gejala` varchar(16) NOT NULL,
  `mb` double NOT NULL,
  `md` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_relasi`
--

INSERT INTO `tb_relasi` (`ID`, `kode_diagnosa`, `kode_gejala`, `mb`, `md`) VALUES
(0, '[A001]', '[B001]', 0.78, 0.21),
(1, '[A001]', '[B021]', 0.96, 0.03),
(2, '[A001]', '[B005]', 0.93, 0.03),
(4, '[A002]', '[B002]', 0.92, 0.07),
(5, '[A002]', '[B022]', 0.92, 0.03),
(6, '[A002]', '[B007]', 0.96, 0.03),
(7, '[A003]', '[B003]', 1, 0),
(8, '[A003]', '[B014]', 1, 0),
(9, '[A003]', '[B038]', 0.96, 0.03),
(10, '[A004]', '[B004]', 0.96, 0.03),
(11, '[A004]', '[B023]', 1, 0),
(12, '[A004]', '[B039]', 0.92, 0.07),
(13, '[A005]', '[B005]', 1, 0),
(15, '[A005]', '[B024]', 0.92, 0.07),
(21, '[A005]', '[B028]', 0.96, 0.03);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `tb_diagnosa`
--
ALTER TABLE `tb_diagnosa`
  ADD PRIMARY KEY (`kode_diagnosa`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `kode_diagnosa` (`kode_diagnosa`),
  ADD KEY `kode_gejala` (`kode_gejala`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  ADD CONSTRAINT `tb_relasi_ibfk_1` FOREIGN KEY (`kode_diagnosa`) REFERENCES `tb_diagnosa` (`kode_diagnosa`),
  ADD CONSTRAINT `tb_relasi_ibfk_2` FOREIGN KEY (`kode_gejala`) REFERENCES `tb_gejala` (`kode_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
