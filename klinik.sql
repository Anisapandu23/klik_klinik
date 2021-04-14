-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 11:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(30) NOT NULL,
  `nama_dokter` varchar(80) NOT NULL,
  `spesialis` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('01020304', 'Lisnur', 'Kandungan', 'Jl. Serayu No.46 Kecamatan Tegal Timur ', '0857575757'),
('01020305', 'Nurmilawati', 'Kandungan', 'Jl. Blanak No.3 Tegal Sari Kecamatan Tegal Barat Kota Tegal', '0283356678'),
('u', 'u', 'u', 'u', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(70) NOT NULL,
  `keterangan_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `keterangan_obat`) VALUES
('1592199895', 'Paracetamol', 'Obat Penurun Panas dan Demam'),
('1592199906', 'Ibu Profen', 'Obat Penurun Panas dan Demam'),
('1592199921', 'Amoxycillin', 'Anti Biotik'),
('1592632467', 'Salep 88', 'Obat Kulit');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nomor_identitas` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama`, `jk`, `alamat`, `no_telp`) VALUES
('1588780806', '787998282929', 'Rudy Salam', 'Laki-Laki', 'Jl. Blanak No.3 Tegal Sari Kecamatan Tegal Barat Kota Tegal', '087834567'),
('1588780950', '267556262626', 'Sulastri', 'Perempuan', 'Jl. Gajah Mada No. 56 Rt. 07 Rw. 10 Tegal', '0858787878'),
('1591114868', '1234567890', 'Santi', 'Perempuan', 'Jl. Glatik No.30 Tegal', '09876540987'),
('1591115214', '789098765456789', 'Gunadarma', 'Laki-Laki', 'Tegal Saja', '93039204345'),
('1591125970', '0987654345678', 'Yanuar', 'Laki-Laki', 'Jl. Beo Randugunting Tegal', '34567890789');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poliklinik` varchar(50) NOT NULL,
  `nama_poliklinik` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poliklinik`, `nama_poliklinik`, `gedung`) VALUES
('1588863490', 'Poliklinik Kandungan', 'C'),
('1588968658', 'Bedah Sentral', 'B'),
('1589310339', 'Poli Kebidanan', 'D'),
('1589310357', 'Poli Ibu dan Anak', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poliklinik` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poliklinik`, `tgl_periksa`) VALUES
('1588969303', '1588780806', 'Pusing', '01020304', 'Mencret Akut Staium 4', '1588863490', '2020-12-31'),
('1589310134', '1588780950', 'Pening', '01020305', 'Sakit Kepala', '1588863490', '2020-05-12'),
('1591126372', '1591125970', 'Pusing', '01020305', 'Panas Dingin', '1588968658', '2020-06-02'),
('1592076729', '1588780950', 'coba dulu', '01020304', 'coba ka yah', '1588863490', '2020-06-13'),
('1592077494', '1588780950', 'ora uwe uwit', '01020304', 'pengangguran', '1588863490', '2020-06-13'),
('1592814995', '1588780950', 'Laper', '01020304', 'Belum Makan', '1589310357', '2020-06-22'),
('1592819510', '1588780806', 'Mubeng', '01020304', 'Pusing', '1588863490', '2020-06-22'),
('1592820563', '1591115214', 'Pusing', '01020304', 'Mencret Akut Staium 4', '1588863490', '2020-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` varchar(50) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id`, `id_rm`, `nama_obat`, `tgl_periksa`) VALUES
('1592819560', '1588969303', 'Paracetamol, Ibu Profen', '2020-06-22'),
('1592819674', '1592076729', 'Paracetamol', '2020-06-22'),
('1592820085', '1591126372', 'Paracetamol, Ibu Profen, Amoxycillin, Salep 88', '2020-06-22'),
('1592820494', '1588969303', 'Paracetamol, Amoxycillin', '2020-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `id_level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`) VALUES
(1591080742, 'ruli', '0570cf61102cebd52f556930814f14cb', 'ruli', 0),
(1591082903, 'andika', '53946da7c681ce37f4296f1a268d2c4a', 'Andika Bhayangkara', 0),
(1591126201, 'fahmi', '41851c2c39e9729d51870dc74e098950', 'M.Fahmi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poliklinik`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_pasien_2` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_poli` (`id_poliklinik`);

--
-- Indexes for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD KEY `id_rm` (`id_rm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1591126202;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_poliklinik`) REFERENCES `tb_poliklinik` (`id_poliklinik`),
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`);

--
-- Constraints for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
