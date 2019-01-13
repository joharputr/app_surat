-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2019 pada 13.49
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

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
-- Struktur dari tabel `buat_surat`
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
-- Dumping data untuk tabel `buat_surat`
--

INSERT INTO `buat_surat` (`id`, `no_surat`, `nama1`, `nama2`, `nip1`, `nip2`, `pangkat1`, `jabatan1`, `pangkat2`, `jabatan2`, `tugas`, `unit`, `waktu`, `lokasi`, `tanggal`, `plh`, `keterangan`) VALUES
(7, '', 'Agus Sudaryatno, S.Kom, MM', 'Anang Ariane, S.Si, M.Sc', '196101201980031001 ', '198706112008121001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'PMG Pertama', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-01-10', '', ''),
(8, '', 'Agus Sudaryatno, S.Kom, MM', 'Desy Rumayanti Setyo, A.Md', '196101201980031001 ', '198312142008122001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'Pengadministrasian Umum', '', 'Stasiun Klimatologi Kelas IV Mlati', '', '', '0000-00-00', '', 'telah melaksanakan Magang/PKL (Praktek Kerja Lapangan) Pengelolaan Arsip Dinamis (Arsip Aktif) di Kantor Stasiun Klimatologi Kelas IV Mlati dan Arsip Inaktif di Kantor Stasiun Geofisika Kelas I Yogyakarta.'),
(9, '', 'Agus Sudaryatno, S.Kom, MM', 'Desy Rumayanti Setyo, A.Md', '196101201980031001 ', '198312142008122001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'Pengadministrasian Umum', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-01-25', '', 'coba aja'),
(10, '', 'Agus Sudaryatno, S.Kom, MM', 'Anang Ariane, S.Si, M.Sc', '196101201980031001 ', '198706112008121001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'Pengadministrasian Umum', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-01-11', '', 'mencoba'),
(11, 'KP.003/939/SMN/XII/2018', 'Agus Sudaryatno, S.Kom, MM', 'Desy Rumayanti Setyo, A.Md', '196101201980031001 ', '198312142008122001', 'Pembina/IV.a', 'Kepala Stasiun Klimatologi Kelas IV Mlati', 'Penata Muda/III.a', 'Pengadministrasian Umum', 'Menghadiri Apel Penutupan Posko Angkutan Udara Natal 2018 dan Tahun Baru 2019', 'Stasiun Klimatologi Kelas IV Mlati', '08.00 WIB s.d. selesai', 'Lapangan NDB PT. Angkasa Pura I (Persero)', '2019-01-10', 'PLH. Kepala,', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `surat_id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`, `surat_id`, `nama`, `tgl_surat`) VALUES
(1, '1.jpg', 0, 'Celanamu', '2019-01-05'),
(2, '2.gif', 1, 'Hayabusa', '2019-01-11'),
(3, 'Anitoki_Gamers__06_720p_2F55F0B4_0.mkv_snapshot_23_.47_2017_.08_.20_09_.20_.04_.jpg', 1, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(15, 'bmkg', 'bmkg', 'bmkg'),
(16, 'haya', '12345', 'Hayabusa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_surat`
--

CREATE TABLE `tb_jenis_surat` (
  `surat_id` int(11) NOT NULL,
  `no_agenda` varchar(255) NOT NULL,
  `tgl_terima` date NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `kode_arsip2` varchar(255) NOT NULL,
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
-- Dumping data untuk tabel `tb_jenis_surat`
--

INSERT INTO `tb_jenis_surat` (`surat_id`, `no_agenda`, `tgl_terima`, `kode_arsip`, `kode_arsip2`, `no_surat`, `tgl_surat`, `pengirim`, `perihal`, `lampiran`, `sifat_surat`, `penjabat_disposisi`, `disposisi`, `asli_copy`, `informasi_disposisi`, `gambar`) VALUES
(1, '001', '2019-01-07', '', 'p001', 'PMSC-KSO-API-NYIA-MTG-0467', '2019-01-23', 'PMSC NYIA', 'Undangan Rapat Navigasi Penerbangan', '-', 'Penting', 'Kasklim Mlati', 'Tata Usaha', 'surat asli', '  ', 'default.jpg'),
(2, '001', '2019-01-07', 'UM.202', '', '005/001', '2019-01-08', 'johar', 'Undangan Rapat Navigasi Penerbangan', '-', 'Biasa', 'Kasklim Mlati', 'Tata Usaha, Kapok Datin, Kapok Obs', 'surat asli', '', '2.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keluar`
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
-- Dumping data untuk tabel `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`surat_id`, `no_agenda`, `kode_arsip`, `kode_arsip2`, `tgl_surat`, `no_surat`, `tujuan`, `perihal`, `asli_copy`, `keterangan`, `gambar`) VALUES
(1, '001', 'KP.003', '', '2019-01-17', 'KP.003/939/SMN/XII/2018', 'Anang Ariane', 'bimbingan', 'surat asli', '  ', 'default.jpg'),
(2, '001', 'PR.202', '', '2019-01-11', 'KP.003/939/SMN/XII/2018', 'Anang Ariane', 'bimbingan', 'surat copy', '  ', '2.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buat_surat`
--
ALTER TABLE `buat_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`surat_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buat_surat`
--
ALTER TABLE `buat_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
