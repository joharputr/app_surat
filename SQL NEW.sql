-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 02:32 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `buat_surat`
--

CREATE TABLE `buat_surat` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `nama1` varchar(255) NOT NULL,
  `nama2` varchar(255) NOT NULL,
  `nip1` varchar(255) NOT NULL,
  `nip2` varchar(255) NOT NULL,
  `pangkat1` varchar(255) NOT NULL,
  `jabatan1` varchar(255) NOT NULL,
  `pangkat2` varchar(255) NOT NULL,
  `jabatan2` varchar(255) NOT NULL,
  `tugas` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `plh` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buat_surat`
--

INSERT INTO `buat_surat` (`id`, `no_surat`, `nama1`, `nama2`, `nip1`, `nip2`, `pangkat1`, `jabatan1`, `pangkat2`, `jabatan2`, `tugas`, `unit`, `waktu`, `lokasi`, `tanggal`, `plh`, `keterangan`) VALUES
(7, '', 'Agus Sudaryatno, S.Kom, MM', 'Anang Ariane, S.Si, M.Sc', '196101201980031001 ', '198706112008121001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'PMG Pertama', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-01-10', '', ''),
(8, '', 'Agus Sudaryatno, S.Kom, MM', 'Desy Rumayanti Setyo, A.Md', '196101201980031001 ', '198312142008122001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'Pengadministrasian Umum', '', 'Stasiun Klimatologi Kelas IV Mlati', '', '', '0000-00-00', '', 'telah melaksanakan Magang/PKL (Praktek Kerja Lapangan) Pengelolaan Arsip Dinamis (Arsip Aktif) di Kantor Stasiun Klimatologi Kelas IV Mlati dan Arsip Inaktif di Kantor Stasiun Geofisika Kelas I Yogyakarta.'),
(9, '', 'Agus Sudaryatno, S.Kom, MM', 'Desy Rumayanti Setyo, A.Md', '196101201980031001 ', '198312142008122001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'Pengadministrasian Umum', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-01-25', '', 'coba aja'),
(10, '', 'Agus Sudaryatno, S.Kom, MM', 'Anang Ariane, S.Si, M.Sc', '196101201980031001 ', '198706112008121001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'Pengadministrasian Umum', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-01-11', '', 'mencoba'),
(11, 'KP.003/939/SMN/XII/2018', 'Agus Sudaryatno, S.Kom, MM', 'Desy Rumayanti Setyo, A.Md', '196101201980031001 ', '198312142008122001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'Pengadministrasian Umum', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-01-10', 'PLH. Kepala,', '');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `surat_id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`, `surat_id`, `nama`, `tgl_surat`) VALUES
(1, '1.jpg', 1, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(15, 'bmkg', '123', 'bmkg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `surat_id` int(11) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `kode_arsip2` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `perihal` text NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`surat_id`, `no_agenda`, `kode_arsip`, `kode_arsip2`, `tgl_surat`, `no_surat`, `tujuan`, `perihal`, `asli_copy`, `keterangan`, `gambar`) VALUES
(6, '', '', '', '0000-00-00', '', '', '', 'surat asli', '    ', '6.jpg'),
(7, '', '', '', '2019-01-11', '', '', '', 'surat asli', '  ', '7.png'),
(8, '', '', '', '2019-01-05', '', '', '', 'surat asli', '', ''),
(9, '', '', '', '0000-00-00', '', '', '', 'surat asli', '', ''),
(10, '', '', '', '0000-00-00', '', '', '', 'surat asli', '', ''),
(11, '1', 'PL.203', '', '2019-01-11', '100', 'yoguakarta', 'bimbingan', 'surat asli', 'www', ''),
(12, '', '', '', '0000-00-00', '', '', '', 'surat asli', '', ''),
(13, '', '', '', '0000-00-00', '', '', '', 'surat asli', '', ''),
(14, '001', 'KP.019', '', '2019-01-12', '1234567', 'yoguakarta', 'bimbingan', 'surat asli', 'ssss', ''),
(15, 'w', '', '', '0000-00-00', '', '', '', 'surat asli', '', ''),
(16, 'w', '', '', '0000-00-00', '', '', '', 'surat asli', '', ''),
(17, '', '', '', '0000-00-00', '', '', '', 'surat asli', '', ''),
(18, '', '', '', '0000-00-00', '', '', '', 'surat asli', '', ''),
(19, '', '', '', '2019-01-03', '', '', '', 'surat asli', '', ''),
(20, '', '', '', '2019-01-03', '', '', '', 'surat asli', '', ''),
(21, '', '', '', '0000-00-00', '', '', '', 'surat asli', '', ''),
(22, '11', 'KU.105', '', '2019-01-10', '', '', '', 'surat asli', '', ''),
(23, '', '', '', '2019-01-27', '', '', '', 'surat asli', '', ''),
(24, '', '', '', '2019-01-03', '', '', '', 'surat asli', '', ''),
(25, '', '', '', '2019-02-05', '', '', '', 'surat asli', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_masuk`
--

CREATE TABLE `tb_surat_masuk` (
  `surat_id` int(11) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `tgl_terima` date NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `perihal` text NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `sifat_surat` varchar(255) NOT NULL,
  `penjabat_disposisi` varchar(255) NOT NULL,
  `disposisi` varchar(255) NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `informasi_disposisi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat_masuk`
--

INSERT INTO `tb_surat_masuk` (`surat_id`, `no_agenda`, `tgl_terima`, `kode_arsip`, `no_surat`, `tgl_surat`, `pengirim`, `perihal`, `lampiran`, `sifat_surat`, `penjabat_disposisi`, `disposisi`, `asli_copy`, `informasi_disposisi`, `gambar`) VALUES
(14, '', '2019-01-05', 'KP.013', '', '0000-00-00', '', '', '', 'Biasa', '', '', 'surat asli', '  ', '14.png'),
(15, '', '2019-01-03', 'KU.106', '', '0000-00-00', '', '', '', 'Biasa', '', '', 'surat asli', '  ', '15.JPG'),
(16, '', '2019-01-19', '', '', '0000-00-00', '', '', '', 'Penting', '', '0', 'surat asli', '', ''),
(17, '', '0000-00-00', '', '', '0000-00-00', '', 'dd', '', 'Biasa', '', '0', 'surat asli', '', ''),
(18, '001', '2019-01-03', 'PR.203', '100', '2019-01-18', 'Johar', 'bimbingan', 'satu bendel', 'Biasa', 'dekan', '0', 'surat asli', 'ee', ''),
(19, '', '2019-03-04', '', '', '0000-00-00', '', '', '', 'Biasa', '', '0', 'surat asli', '', ''),
(20, '', '2019-02-25', '', '', '0000-00-00', '', '', '', 'Biasa', '', '0', 'surat asli', '', ''),
(21, '', '2019-01-03', '', '', '0000-00-00', '', '', '', 'Biasa', '', '0', 'surat asli', '', ''),
(22, '', '2019-04-04', '', '', '0000-00-00', '', '', '', 'Biasa', '', '0', 'surat asli', '', ''),
(23, '', '2019-04-04', '', '', '0000-00-00', '', '', '', 'Biasa', '', '0', 'surat asli', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buat_surat`
--
ALTER TABLE `buat_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indexes for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD PRIMARY KEY (`surat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buat_surat`
--
ALTER TABLE `buat_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
