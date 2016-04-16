-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2015 at 03:52 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siassmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(3) NOT NULL auto_increment,
  `nip` char(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `jenken` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `mengajar` date NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `login_hash` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_guru`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `kota`, `tgl`, `jenken`, `agama`, `alamat`, `mengajar`, `pendidikan`, `golongan`, `jabatan`, `gambar`, `username`, `password`, `login_hash`) VALUES
(1, '6666666', 'Sugiarto', 'Tegal', '2014-12-23', 'laki-laki', 'islam', 'Tegall', '2014-12-24', 's3', '--- Pilih Golongan ---', 'Guru', '', 'sugi', '97b315c743bf8b962043876ed04855fe', 'guru'),
(3, '1212121', 'Suhendriwati', 'Tegal', '1993-12-03', 'laki-laki', 'islam', 'tegal', '2014-12-10', 's4', '--- Pilih Golongan ---', 'Guru', '', 'jamroh', 'cbd0567866adbd64f51689d88618db67', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `inputnilai`
--

CREATE TABLE IF NOT EXISTS `inputnilai` (
  `id` int(5) NOT NULL auto_increment,
  `tahun` varchar(10) NOT NULL,
  `semester` varchar(7) NOT NULL,
  `pelajaran` varchar(20) NOT NULL,
  `kkm` char(3) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `walikelas` varchar(20) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Dumping data for table `inputnilai`
--

INSERT INTO `inputnilai` (`id`, `tahun`, `semester`, `pelajaran`, `kkm`, `kelas`, `walikelas`, `nip`) VALUES
(138, '2014-2015', 'Genap', 'Bahasa Inggris', '100', 'IX B', 'Suhendriwati', '1212121'),
(136, '', '', '', '', '', '', ''),
(137, '2014-2015', 'Genap', 'Matematika', '90', 'IX C', 'Sugiarti', '3478329092344'),
(135, '2014-2015', 'Genap', 'Penjaskes', '88', 'IX B', 'Suhendriwati', '1212121'),
(134, '2014-2015', 'Genap', 'Bahasa Inggris', '100', 'IX C', 'Sugiarti', '3478329092344'),
(131, '2011-2012', 'Genap', 'Bahasa Inggris', '100', 'IX A', 'Dalban', '3478329034343'),
(132, '2011-2012', 'Genap', 'Bahasa Mandarin', '90', 'IX C', 'Sugiarti', '3478329092344'),
(133, '2011-2012', 'Genap', 'Penjaskes', '88', 'IX C', 'Sugiarti', '3478329092344');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(3) NOT NULL auto_increment,
  `namakelas` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `walikelas` varchar(20) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY  (`id_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `namakelas`, `jurusan`, `walikelas`, `nip`) VALUES
(10, 'IX B', 'SSN', 'Suhendriwati', '1212121'),
(11, 'IX C', 'SSN', 'Sugiarti', '3478329092344'),
(12, 'IX A', 'SSN', 'Dalban', '3478329034343'),
(13, 'IX D', 'SSN', 'Suhendriwati', '2222222222'),
(14, 'IX F', 'SSN', 'Suhendriwati', '2222222222'),
(16, 'VIII A', 'SSN', 'Suhendriwati', '2222222222'),
(17, 'IX E', 'SSN', 'Dalban', '3478329034343'),
(18, 'IX Y', 'SSN', 'Suhendriwati', '1212121');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(10) NOT NULL auto_increment,
  `id_siswa` int(5) NOT NULL,
  `id_pelajaran` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_guru` int(5) NOT NULL,
  `nilai_uh1` char(5) NOT NULL,
  `nilai_rm1` char(5) NOT NULL,
  `nilai_uh2` char(5) NOT NULL,
  `nilai_rm2` char(5) NOT NULL,
  `nilai_uh3` char(5) NOT NULL,
  `nilai_rm3` char(5) NOT NULL,
  `nilai_uh4` char(5) NOT NULL,
  `nilai_rm4` char(5) NOT NULL,
  `nilai_uh5` char(5) NOT NULL,
  `nilai_rm5` char(5) NOT NULL,
  `rata_uh` char(5) NOT NULL,
  `nilai_tugas1` char(5) NOT NULL,
  `nilai_tugas2` char(5) NOT NULL,
  `nilai_tugas3` char(5) NOT NULL,
  `nilai_tugas4` char(5) NOT NULL,
  `rata_tugas` char(5) NOT NULL,
  `nilai_harian` char(5) NOT NULL,
  `nilai_us` char(5) NOT NULL,
  `rerata` char(5) NOT NULL,
  `rapor` char(5) NOT NULL,
  `kkmm` char(5) NOT NULL,
  `ket` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `nilai`
--


-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(3) NOT NULL auto_increment,
  `namapegawai` varchar(30) NOT NULL,
  `pengertian` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `namapegawai`, `pengertian`) VALUES
(1, 'IA', 'Pangkat Juru Muda'),
(7, 'IB', 'Pangkatlah');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
  `id_pelajaran` int(3) NOT NULL auto_increment,
  `namapelajaran` varchar(20) NOT NULL,
  `kkm` char(3) NOT NULL,
  PRIMARY KEY  (`id_pelajaran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `namapelajaran`, `kkm`) VALUES
(6, 'Penjaskes', '88'),
(9, 'Matematika', '90'),
(10, 'Bahasa Inggris', '100'),
(11, 'IPS', '90');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id_sekolah` int(3) NOT NULL auto_increment,
  `nama` varchar(30) NOT NULL,
  `nss` char(20) NOT NULL,
  `nis` char(20) NOT NULL,
  `ntsn` char(20) NOT NULL,
  `skpd` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor` char(13) NOT NULL,
  `fax` char(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `tahun` varchar(9) NOT NULL,
  `semester` varchar(6) NOT NULL,
  PRIMARY KEY  (`id_sekolah`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama`, `nss`, `nis`, `ntsn`, `skpd`, `alamat`, `nomor`, `fax`, `email`, `profile`, `tahun`, `semester`) VALUES
(1, 'SMP Harapan Bersama Tegal Jawa', '20.103.65.03.000', '20.103.65.03.000', '1', 'Dinas Pemuda', 'Jalan Karanganyar Bandasari Tegal No. 14', '0283-9983335', '0283-9983335', 'smpkreasindotegall@gmail.com', 'Semangat dalam belajar', '2014-2015', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(3) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `ni` int(10) NOT NULL,
  `nisn` int(10) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `tgl` date NOT NULL,
  `jenken` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `status` varchar(20) NOT NULL,
  `anakke` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(13) NOT NULL,
  `sekolahasal` varchar(20) NOT NULL,
  `kelas` varchar(6) NOT NULL,
  `padatanggal` date NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `alamatortu` varchar(40) NOT NULL,
  `hportu` varchar(13) NOT NULL,
  `pekerjaanayah` varchar(20) NOT NULL,
  `pekerjaanibu` varchar(20) NOT NULL,
  `wali` varchar(30) NOT NULL,
  `alamatwali` varchar(40) NOT NULL,
  `hpwali` varchar(13) NOT NULL,
  `pekerjaanwali` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(40) NOT NULL,
  `login_hash` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `name`, `ni`, `nisn`, `kota`, `tgl`, `jenken`, `agama`, `status`, `anakke`, `alamat`, `hp`, `sekolahasal`, `kelas`, `padatanggal`, `ayah`, `ibu`, `alamatortu`, `hportu`, `pekerjaanayah`, `pekerjaanibu`, `wali`, `alamatwali`, `hpwali`, `pekerjaanwali`, `gambar`, `username`, `password`, `login_hash`) VALUES
(10, 'Muhamad Suhendro', 121331, 123456789, 'Tegal', '2000-12-12', 'laki', 'islam', 'Anak Tiri', 'Dua', 'Desa Wangandawa', '087873929223', 'SD N 1 Wangandawa', 'IX B', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'siswa'),
(20, 'Muhamad tobiin', 2323232, 1212121, 'Bumijawa', '2000-12-12', 'laki', 'islam', 'Anak Kandung', 'II', 'Bumijawa', '0000000000000', 'SD N Sokatengah 2', 'IX B', '2014-12-10', 'Warsoni', 'Solekha', 'Bumijawa', '9000000000000', 'Buruh Tani', 'IRT', 'Markasan', 'Tegal', '9999999999999', 'Swasta', 'aku berdasi.jpg', 'tobi', 'd41d8cd98f00b204e9800998ecf8427e', 'siswa'),
(11, 'Muhamad Jacob', 23455, 1234, '', '2000-12-12', 'laki', 'islam', '', '', '', '087830390977', '', 'IX C', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `id_jadwal` int(5) NOT NULL auto_increment,
  `id_guru` int(3) NOT NULL,
  `id_pelajaran` int(3) NOT NULL,
  `id_kelas` int(3) NOT NULL,
  PRIMARY KEY  (`id_jadwal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_guru`, `id_pelajaran`, `id_kelas`) VALUES
(1, 3, 6, 18),
(5, 1, 9, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `login_hash` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `username`, `password`, `login_hash`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator'),
(2, 'Nadif Al Hasan', 'nadif', '485d229cb225a02a31173805d2885c4e', ''),
(3, 'Sugiarto', 'sugi', '97b315c743bf8b962043876ed04855fe', 'guru'),
(4, 'Suhendro', 'hendro', '66cb5177a2d8017b6e71983e95659388', 'walikelas'),
(5, 'Moh. Tobiin', 'tobi', 'e0dd692dcb560bc04bfa1cbfaca9ecff', 'siswa'),
(6, 'Sofwaturrahmah', 'ova', '689ecd8b1b536d35873574932f56bfb5', 'guru'),
(7, 'Siti Maghfirroh Kusn', 'siti', '1df5ce1b9fb45d1c3b8cf8a686470cc3', 'guru');
