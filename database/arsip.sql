-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2021 pada 18.27
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bagian`
--

CREATE TABLE `tb_bagian` (
  `id_bagian` int(4) NOT NULL,
  `nama_bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

--
-- Dumping data untuk tabel `tb_bagian`
--

INSERT INTO `tb_bagian` (`id_bagian`, `nama_bagian`) VALUES
(1, 'GM Refinery Unit III - Plaju'),
(2, 'Production'),
(3, 'CD & GP'),
(4, 'CD& L'),
(6, 'Shift Superintendent'),
(7, 'Polypropylene'),
(8, 'Utilities'),
(9, 'Oil Movement'),
(10, 'Laboratory'),
(11, 'Refinery Planning & Optimization'),
(12, 'Refinery Planning'),
(13, 'Supply Chain & Dist.'),
(14, 'Budget & Performance'),
(15, 'Maintenance Planning & Support'),
(16, 'Planning & Schedulling'),
(17, 'Stationary & Statutory Insp. Engineer'),
(18, 'Electrical & Instrument Engineer'),
(19, 'RE Inspection Engineer'),
(20, 'Maintenance Execution'),
(21, 'Maintenance Area 1'),
(22, 'Maintenance Area 2'),
(23, 'Maintenance Area 3'),
(24, 'Workshop'),
(25, 'General Maintenance'),
(26, 'Turn Around'),
(27, 'Equipment Overhaul'),
(28, 'Sched. Mat. & Service Support'),
(29, 'Engineering & Development'),
(30, 'Process Engineering'),
(31, 'Project Engineering'),
(32, 'Energy Con & Loss Control'),
(33, 'Quality Management'),
(34, 'Procurement'),
(35, 'Inventory Control'),
(36, 'Purchasing'),
(37, 'Warehousing'),
(38, 'Contract Office'),
(39, 'HSE'),
(40, 'Environment'),
(41, 'Fire & Insurance'),
(42, 'Safety'),
(43, 'Occupational Health'),
(44, 'OPI'),
(45, 'Service Asset Management'),
(46, 'LEGAL'),
(47, 'Security'),
(48, 'Finance RU III'),
(49, 'MARINE REGION II'),
(50, 'IT RU III - PLAJU'),
(51, 'Medical Sumbagsel'),
(52, 'Comm & Relations Sumbagsel'),
(53, 'Internal Audit Sumbagsel'),
(54, 'Unit HR RU III'),
(55, 'BP Refinery'),
(56, 'Industrial Relation'),
(57, 'HR Operation'),
(58, 'OS Management'),
(59, 'Reliability'),
(60, 'Equipment Realibility'),
(61, 'Plant Realibility'),
(62, 'Asset Management'),
(63, 'Maintenance Area 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cip`
--

CREATE TABLE `tb_cip` (
  `id_cip` int(10) NOT NULL,
  `no_pendaftaran` varchar(50) NOT NULL,
  `nama_gugus` varchar(255) NOT NULL,
  `jenis_gugus` varchar(30) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kebijakan`
--

CREATE TABLE `tb_kebijakan` (
  `id_kebijakan` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `nama_pejabat` varchar(255) NOT NULL,
  `file_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

--
-- Dumping data untuk tabel `tb_kebijakan`
--

INSERT INTO `tb_kebijakan` (`id_kebijakan`, `judul`, `keterangan`, `nama_pejabat`, `file_pdf`) VALUES
(1, 'safsfafsfasfaqvsbv', 'gahfhjgfajfhjagfjajfghagfjajhfjahfg', 'Billy billy', '614b54d473908_file pdf 2.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komet`
--

CREATE TABLE `tb_komet` (
  `id_komet` int(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `narasumber` varchar(255) NOT NULL,
  `no_pekerja` varchar(255) NOT NULL,
  `fungsi` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `file_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rtm`
--

CREATE TABLE `tb_rtm` (
  `id_rtm` int(10) NOT NULL,
  `tanggal_rtm` date NOT NULL,
  `nama_pejabat` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `file_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sk`
--

CREATE TABLE `tb_sk` (
  `id_sk` int(10) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `tmt_berlaku` date NOT NULL,
  `berakhir` date NOT NULL,
  `file_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

--
-- Dumping data untuk tabel `tb_sk`
--

INSERT INTO `tb_sk` (`id_sk`, `no_surat`, `tentang`, `user`, `tmt_berlaku`, `berakhir`, `file_pdf`) VALUES
(1, 'adnadaadajaj/232ada/2021', 'hjbffhgshfhgsfhgs', 'GM Refinery Unit III - Plaju', '2021-09-22', '2021-09-24', '614b4d4589017_file pdf 2.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sp`
--

CREATE TABLE `tb_sp` (
  `id_sp` int(10) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `user` varchar(50) NOT NULL,
  `tmt_berlaku` date NOT NULL,
  `berakhir` date NOT NULL,
  `file_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

--
-- Dumping data untuk tabel `tb_sp`
--

INSERT INTO `tb_sp` (`id_sp`, `no_surat`, `tentang`, `user`, `tmt_berlaku`, `berakhir`, `file_pdf`) VALUES
(4, 'adnjaj/232ada/2021', 'fdjgdjgjhhghhhjghghg', 'GM Refinery Unit III - Plaju', '2021-09-22', '2022-02-23', '614b496661bfc_file pdf 2 - Copy - Copy.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stk`
--

CREATE TABLE `tb_stk` (
  `id_stk` int(10) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `no_dokumen` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `revisi` varchar(5) NOT NULL,
  `tmt_berlaku` date NOT NULL,
  `kadaluarsa` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `file_pdf` varchar(255) NOT NULL,
  `file_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

--
-- Dumping data untuk tabel `tb_stk`
--

INSERT INTO `tb_stk` (`id_stk`, `bagian`, `jenis`, `kategori`, `no_dokumen`, `judul`, `revisi`, `tmt_berlaku`, `kadaluarsa`, `keterangan`, `file_pdf`, `file_word`) VALUES
(1, 'GM Refinery Unit III - Plaju', 'Pedoman', 'Normal', '12345./ada/2021', 'Tes upload 1', '0', '2021-09-20', '2024-09-20', 'tes upload 1 nichhh', 'file pdf.pdf', 'file word.docx'),
(13, 'Supply Chain & Dist.', 'TKO', 'Critical', '67823./gada/2021', 'safsfafsfasfaqvsbv', '3', '2021-09-22', '2024-09-22', '', 'file pdf 2 - Copy.pdf', 'file word 2 (1).doc'),
(14, 'Maintenance Planning & Support', 'TKI', 'Normal', '12345./ada/2021', 'abcde', '8', '2021-09-22', '2024-09-22', 'kkkk', 'file pdf 2.pdf', 'file word 2.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bagian`
--
ALTER TABLE `tb_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indeks untuk tabel `tb_cip`
--
ALTER TABLE `tb_cip`
  ADD PRIMARY KEY (`id_cip`);

--
-- Indeks untuk tabel `tb_kebijakan`
--
ALTER TABLE `tb_kebijakan`
  ADD PRIMARY KEY (`id_kebijakan`);

--
-- Indeks untuk tabel `tb_sk`
--
ALTER TABLE `tb_sk`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indeks untuk tabel `tb_sp`
--
ALTER TABLE `tb_sp`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indeks untuk tabel `tb_stk`
--
ALTER TABLE `tb_stk`
  ADD PRIMARY KEY (`id_stk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bagian`
--
ALTER TABLE `tb_bagian`
  MODIFY `id_bagian` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `tb_cip`
--
ALTER TABLE `tb_cip`
  MODIFY `id_cip` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kebijakan`
--
ALTER TABLE `tb_kebijakan`
  MODIFY `id_kebijakan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sk`
--
ALTER TABLE `tb_sk`
  MODIFY `id_sk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_sp`
--
ALTER TABLE `tb_sp`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_stk`
--
ALTER TABLE `tb_stk`
  MODIFY `id_stk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
