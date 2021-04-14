-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 08:54 PM
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
('01020305', 'Nurmilawati', 'Penyakit Dalam', 'Jl. Abimanyu No.45 Slerok Tegal', '0852525252'),
('01020306', 'Dardiri', 'Penyakit Dalam', 'Jl. Ruslani HS. II Kemandungan Tegal', '0852525244'),
('01020307', 'Yanuar', 'Anak', 'Slawi Kulon', '08525252478');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(70) NOT NULL,
  `keterangan_obat` text NOT NULL,
  `stok` int(50) NOT NULL,
  `exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `keterangan_obat`, `stok`, `exp`) VALUES
('0', '0', '0', -12, '2020-09-03'),
('1592199895', 'Paracetamol', 'Obat Penurun Panas dan Demam', 98, '2020-09-02'),
('1592199906', 'Ibu Profen', 'Obat Penurun Panas dan Demam', 98, '2021-06-04'),
('1592199921', 'Amoxycillin', 'Anti Biotik', 98, '2020-09-02'),
('1592632467', 'Salep 88', 'Obat Kulit', 98, '2021-05-07'),
('1597857227', 'Promag', 'Obat Sakit Lambung', 98, '2021-07-14'),
('1601578009', 'Rohto', 'Obat Mata', 98, '2020-10-01');

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
  `no_telp` varchar(30) NOT NULL,
  `ps` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama`, `jk`, `alamat`, `no_telp`, `ps`, `tgl_lhr`) VALUES
('1599036029', '787998282929', 'ABDULLAH', 'Laki-Laki', 'Jl. Serayu No.46 Kecamatan Tegal Timur ', '0857575757', 'Pasien Umum', '2019-01-03'),
('1599036093', '67556262626', 'SANTI', 'Perempuan', 'Jl. Beo Randugunting Tegal', '0283356678', 'D3 Akuntansi', '2000-07-05'),
('1600333968', '787998282929', 'NUR', 'Perempuan', 'Jl. Serayu No.46 Kecamatan Tegal Timur ', '0857575757', 'D3 Akuntansi', '2004-03-17'),
('1600969336', '123456', 'Fahmi', 'Laki-Laki', 'TEGAL', '0283356678', 'D3 Teknik Komputer', '1996-07-28');

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
('1589310357', 'Poli Ibu dan Anak', 'F'),
('1599379419', 'Poli Umum', 'H');

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
  `riwayat` varchar(70) NOT NULL,
  `obat1` varchar(50) NOT NULL,
  `obat2` varchar(50) NOT NULL,
  `obat3` varchar(50) NOT NULL,
  `obat4` varchar(50) NOT NULL,
  `obat5` varchar(50) NOT NULL,
  `obat6` varchar(50) NOT NULL,
  `tindakan` varchar(70) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poliklinik`, `riwayat`, `obat1`, `obat2`, `obat3`, `obat4`, `obat5`, `obat6`, `tindakan`, `tgl_periksa`) VALUES
('1601577077', '1600333968', 'Pusing', '01020304', 'Mencret Akut Staium 4', '1588863490', 'Kepaduk', '1592199895', '1592199906', '1592199921', '1592199921', '1597857227', '0', '', '2020-10-01'),
('1601578164', '1600333968', 'Pusing', '01020304', 'Vertigo', '1588863490', 'Vertigo', '1592199895', '1592199906', '1592199921', '1592632467', '1597857227', '1601578009', 'Terapi Wicara', '2020-10-01'),
('1601578436', '1599036029', 'Mumet Rada Serak', '01020306', 'Keselek', '1599379419', 'tidak ada', '1592199895', '1592199906', '1592199921', '1592632467', '1597857227', '1601578009', 'Oksigen', '2020-10-01');

--
-- Triggers `tb_rekammedis`
--
DELIMITER $$
CREATE TRIGGER `obat1` AFTER INSERT ON `tb_rekammedis` FOR EACH ROW BEGIN
	UPDATE tb_obat SET stok=stok-1
	WHERE id_obat=NEW.obat1 OR id_obat=NEW.obat2 OR id_obat=NEW.obat3 OR id_obat=NEW.obat4 OR id_obat=NEW.obat5 OR id_obat=NEW.obat6; 
END
$$
DELIMITER ;

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
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_poliklinik`) REFERENCES `tb_poliklinik` (`id_poliklinik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
