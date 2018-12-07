-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2017 pada 23.58
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kelurahancina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `nip` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`nip`, `username`, `password`, `status`) VALUES
('123123', 'awd', '1f73402c644002a7ea3c9532e8ba4139', 'admin'),
('1301144205', 'hary', '1b1464a2413c5dfbf6a472213ba535d6', 'admin'),
('1301144285', 'ikan', '86b19a0013a70a10e5c46bfd2b0b8504', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akte`
--

CREATE TABLE `tbl_akte` (
  `nama` varchar(100) NOT NULL,
  `no_surat` int(100) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `jk_anak` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anak_ke` int(100) NOT NULL,
  `no_suratrs` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nik_ibu` int(100) NOT NULL,
  `nik_ayah` int(100) NOT NULL,
  `ttd_pejabat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_akte`
--

INSERT INTO `tbl_akte` (`nama`, `no_surat`, `nama_anak`, `jk_anak`, `tempat_lahir`, `tgl_lahir`, `agama`, `anak_ke`, `no_suratrs`, `alamat`, `nik_ibu`, `nik_ayah`, `ttd_pejabat`) VALUES
('Kurniawan', 18, 'Sinta ', 'Laki-Laki', 'Solo', '05/30/2017', 'Islam', 2, 123, 'Sultan Agung', 141515, 515151, 'Sarifudin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_belummenikah`
--

CREATE TABLE `tbl_belummenikah` (
  `nama` varchar(100) NOT NULL,
  `nik` int(100) NOT NULL,
  `no_surat` int(100) NOT NULL,
  `maksud` varchar(100) NOT NULL,
  `ttd_pejabat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_belummenikah`
--

INSERT INTO `tbl_belummenikah` (`nama`, `nik`, `no_surat`, `maksud`, `ttd_pejabat`) VALUES
('Hamadan', 124124, 1412, 'Minta uang', 'Sarifudin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ceksurat`
--

CREATE TABLE `tbl_ceksurat` (
  `no_surat` int(100) NOT NULL,
  `nik` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ceksurat`
--

INSERT INTO `tbl_ceksurat` (`no_surat`, `nik`, `nama`, `tgl_pengajuan`, `jenis_surat`, `status`) VALUES
(123, 12313, 'Hariyana', '2017-05-17', 'Surat Pengantar', 'Proses'),
(123, 41414, 'Menarsi', '2017-05-17', 'Surat Pengantar', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datainfrastruktur`
--

CREATE TABLE `tbl_datainfrastruktur` (
  `kode_aset` varchar(200) NOT NULL,
  `nama_aset` varchar(200) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `tgl_pembelian` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_datainfrastruktur`
--

INSERT INTO `tbl_datainfrastruktur` (`kode_aset`, `nama_aset`, `jumlah`, `harga`, `tgl_pembelian`, `kondisi`) VALUES
('BRG-002', 'Piano', 2, '15000000', '05/10/2017', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datakelahiran`
--

CREATE TABLE `tbl_datakelahiran` (
  `nama_lengkap` varchar(200) NOT NULL,
  `no_kk` int(50) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `st_kk` varchar(200) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `kewarganegaraan` varchar(200) NOT NULL,
  `disabilitas` varchar(200) NOT NULL,
  `gol_darah` varchar(50) NOT NULL,
  `nik_ayah` int(50) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `tp_lahir_ayah` varchar(200) NOT NULL,
  `tgl_lahir_ayah` varchar(200) NOT NULL,
  `negara_ayah` varchar(200) NOT NULL,
  `agama_ayah` varchar(200) NOT NULL,
  `pekerjaan_ayah` varchar(200) NOT NULL,
  `alamat_ayah` varchar(200) NOT NULL,
  `nik_ibu` int(50) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `tp_lahir_ibu` varchar(200) NOT NULL,
  `tgl_lahir_ibu` varchar(200) NOT NULL,
  `negara_ibu` varchar(200) NOT NULL,
  `agama_ibu` varchar(200) NOT NULL,
  `pekerjaan_ibu` varchar(200) NOT NULL,
  `alamat_ibu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_datakelahiran`
--

INSERT INTO `tbl_datakelahiran` (`nama_lengkap`, `no_kk`, `jenis_kelamin`, `st_kk`, `tempat_lahir`, `tgl_lahir`, `alamat`, `agama`, `kewarganegaraan`, `disabilitas`, `gol_darah`, `nik_ayah`, `nama_ayah`, `tp_lahir_ayah`, `tgl_lahir_ayah`, `negara_ayah`, `agama_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nik_ibu`, `nama_ibu`, `tp_lahir_ibu`, `tgl_lahir_ibu`, `negara_ibu`, `agama_ibu`, `pekerjaan_ibu`, `alamat_ibu`) VALUES
('Hariyanto', 123, 'Laki-Laki', 'awd', 'awd', '12312', 'awd', 'awd', 'awd', 'awd', 'a', 12414, 'awd', 'awd', '12123', 'awd', 'awd', 'awd', 'ad', 123, 'adw', 'awd', '2213', 'ad', 'awd', 'awd', 'awd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datakematian`
--

CREATE TABLE `tbl_datakematian` (
  `no_kk` int(50) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `no_ktp` int(50) NOT NULL,
  `st_kk` varchar(200) NOT NULL,
  `st_pernikahan` varchar(200) NOT NULL,
  `no_ktp_pasangan` int(50) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `kewarganegaraan` varchar(200) NOT NULL,
  `disabilitas` varchar(200) NOT NULL,
  `gol_darah` varchar(50) NOT NULL,
  `nik_ayah` int(50) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `nik_ibu` int(50) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `tempat_meninggal` varchar(100) NOT NULL,
  `sebab_meninggal` varchar(300) NOT NULL,
  `tgl_meninggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_datakematian`
--

INSERT INTO `tbl_datakematian` (`no_kk`, `nama_lengkap`, `no_ktp`, `st_kk`, `st_pernikahan`, `no_ktp_pasangan`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `pendidikan`, `pekerjaan`, `kewarganegaraan`, `disabilitas`, `gol_darah`, `nik_ayah`, `nama_ayah`, `nik_ibu`, `nama_ibu`, `tempat_meninggal`, `sebab_meninggal`, `tgl_meninggal`) VALUES
(123123, 'Inakos', 2313, 'Anak', 'Belum Kawin(Perawan)', 12123, 'awdawd', '05/24/2017', 'Laki-Laki', 'adawd', 'isl', 'SLTA/Sederajat', 'adawd', 'wni', 'Tidak Cacat', 'A', 123123, 'ssawd', 123123, 'awawd', 'adawd', 'awdaw', '06/01/2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datapegawai`
--

CREATE TABLE `tbl_datapegawai` (
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `usia` int(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_datapegawai`
--

INSERT INTO `tbl_datapegawai` (`nama`, `nip`, `jeniskelamin`, `usia`, `telp`, `email`, `tempat_lahir`, `tgl_lahir`, `foto`) VALUES
('Kurniawan', '123123', 'Laki-Laki', 22, '192194', 'kurniawan@gmail.com', 'aadaw', '05/03/2017', 'pegawai_1495006300'),
('Hariyanto', '1301144205', 'Laki-Laki', 20, '081221301460', 'hariyantodjz@gmail.com', 'Ujung Pandang', '01/28/1997', 'pegawai_1495042659'),
('Arian Rifqi', '1301144285', 'Laki-Laki', 19, '081222324', 'arian@gmail.com', 'Makassar', '28/01/1998', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_domisili`
--

CREATE TABLE `tbl_domisili` (
  `nama` varchar(100) NOT NULL,
  `no_surat` int(100) NOT NULL,
  `jenis_domisili` varchar(100) NOT NULL,
  `ttd_pejabat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_domisili`
--

INSERT INTO `tbl_domisili` (`nama`, `no_surat`, `jenis_domisili`, `ttd_pejabat`) VALUES
('Hariyanto', 441, 'Pribadi', 'Sarifudin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ektp`
--

CREATE TABLE `tbl_ektp` (
  `nama` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `ttd_pejabat` varchar(100) NOT NULL,
  `tgl_pengajuan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ektp`
--

INSERT INTO `tbl_ektp` (`nama`, `nik`, `no_surat`, `ttd_pejabat`, `tgl_pengajuan`, `status`) VALUES
('Hariyana', '12313', '123', 'Sarifuddin', '05/17/2017', 'Proses'),
('Menarsi', '41414', '123', 'Sarifuddin', '05/17/2017', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_formatnosurat`
--

CREATE TABLE `tbl_formatnosurat` (
  `id` int(100) NOT NULL,
  `jsurat` varchar(100) NOT NULL,
  `nosurat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_formatnosurat`
--

INSERT INTO `tbl_formatnosurat` (`id`, `jsurat`, `nosurat`) VALUES
(1, 'Surat Kematian', '130/KCN/BB-099');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_infokelurahan`
--

CREATE TABLE `tbl_infokelurahan` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `time` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_infokelurahan`
--

INSERT INTO `tbl_infokelurahan` (`id`, `judul`, `isi`, `penulis`, `tanggal`, `time`, `status`, `gambar`) VALUES
(31, 'Profil Kelurahan Cina', '<p style=\"text-align:justify\">Kelurahan Cina berlokasi di Pammana, Wajo, Sulawesi Selatan. Berdiri sejak November 2014, Amshir Andi Timbang dilantik menjadi lurah Cina.</p>\r\n', 'hary', '2017-05-17', '1495045005', 'publish', 'info_1495045005.png'),
(32, 'Pelatihan Konten Android Kelurahan Cina', '<p style=\"text-align:justify\">Pelatihan Android akan diadakan di Kelurahan Cina yang difasilitasi oleh Telkom University. Pelatihan ini diharapkan meningkatkan minat warga Kelurahan Cina untuk mengembangkan bakat IT di era digital yang saat ini sudah berkembang sangat pesat. Oleh karena itu dengan adanya pelatihan ini akan menjadi langkah awal bagi Kelurahan Cina untuk mengembangkan warganya agar lebih mengerti akan pengetahuan IT.&nbsp;</p>\r\n', 'hary', '2017-05-17', '1495046090', 'publish', 'info_1495046090.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_infokependudukan`
--

CREATE TABLE `tbl_infokependudukan` (
  `nama_lengkap` varchar(200) NOT NULL,
  `nik` int(100) NOT NULL,
  `no_kk` int(50) NOT NULL,
  `no_ktp` int(50) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `usia` int(100) NOT NULL,
  `st_kk` varchar(200) NOT NULL,
  `st_pernikahan` varchar(200) NOT NULL,
  `no_ktp_pasangan` int(50) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kd_pos` int(20) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `penghasilan` varchar(200) NOT NULL,
  `kewarganegaraan` varchar(200) NOT NULL,
  `disabilitas` varchar(200) NOT NULL,
  `gol_darah` varchar(50) NOT NULL,
  `nik_ayah` int(50) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `tp_lahir_ayah` varchar(200) NOT NULL,
  `tgl_lahir_ayah` varchar(200) NOT NULL,
  `negara_ayah` varchar(200) NOT NULL,
  `agama_ayah` varchar(200) NOT NULL,
  `pekerjaan_ayah` varchar(200) NOT NULL,
  `alamat_ayah` varchar(200) NOT NULL,
  `nik_ibu` int(50) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `tp_lahir_ibu` varchar(200) NOT NULL,
  `tgl_lahir_ibu` varchar(200) NOT NULL,
  `negara_ibu` varchar(200) NOT NULL,
  `agama_ibu` varchar(200) NOT NULL,
  `pekerjaan_ibu` varchar(200) NOT NULL,
  `alamat_ibu` varchar(200) NOT NULL,
  `tgl_penginputan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_infokependudukan`
--

INSERT INTO `tbl_infokependudukan` (`nama_lengkap`, `nik`, `no_kk`, `no_ktp`, `jenis_kelamin`, `usia`, `st_kk`, `st_pernikahan`, `no_ktp_pasangan`, `tempat_lahir`, `tgl_lahir`, `alamat`, `kd_pos`, `no_telp`, `agama`, `pendidikan`, `pekerjaan`, `penghasilan`, `kewarganegaraan`, `disabilitas`, `gol_darah`, `nik_ayah`, `nama_ayah`, `tp_lahir_ayah`, `tgl_lahir_ayah`, `negara_ayah`, `agama_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nik_ibu`, `nama_ibu`, `tp_lahir_ibu`, `tgl_lahir_ibu`, `negara_ibu`, `agama_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `tgl_penginputan`) VALUES
('Hariyanto', 123123, 123, 737, 'Laki-Laki', 20, 'awd', 'awd', 123, 'awd', '12312', 'awd', 123, 12, 'awd', 'awd', 'ad', '112124', 'awd', 'awd', 'a', 12414, 'awd', 'awd', '12123', 'awd', 'awd', 'awd', 'ad', 123, 'adw', 'awd', '2213', 'ad', 'awd', 'awd', 'awd', '2017-05-17'),
('asda', 1231, 1231, 12412, 'Perempuan', 20, 'Kepala Keluaga', 'Belum Kawin(Perawan)', 123132, 'adawd', '05/23/2017', 'dawdawd', 123, 123123, 'Islam', 'SLTA/Sederajat', 'awdawd', '123123', 'wni', 'Tidak Cacat', 'A', 1232, 'adawd', 'ad', '', 'wni', 'Islam', 'awd', 'gagag', 2315, 'agag', 'afaw', '', 'wni', 'Islam', 'awdawd', 'aawd', '2017-05-16'),
('Kurniawan Wira', 131415, 9881, 94814, 'Laki-Laki', 22, 'Anak', 'Belum Kawin(Perjaka)', 0, 'awdaw', '05/16/2017', 'awd', 123, 123123, 'Islam', 'SLTA/Sederajat', 'awd', '123122', 'wni', 'Tidak Cacat', 'A', 123123, 'awdawd', 'awdawd', '', 'wni', 'Islam', 'awdadw', 'awgg', 1516, 'fgahh', 'hah', '', 'wni', 'Islam', 'ahjj', 'hasdaw', '2017-04-18'),
('Arian', 12345677, 98293, 9238231, 'Laki-Laki', 19, 'Anak', 'Belum Kawin(Perawan)', 123, 'awdadw', '05/12/2017', 'adawd', 1245, 121515616, 'Islam', 'SLTA/Sederajat', 'sadw', '1212', 'wni', 'Tidak Cacat', 'A', 123123, 'jakdjaw', 'kmawd', '', 'wni', 'Islam', 'awdawd', 'kawmdka', 12123, 'akdmakwdm', 'akmdwaw', '', 'wni', 'Islam', 'awdawd', 'agagg', '2017-05-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_listmutasi`
--

CREATE TABLE `tbl_listmutasi` (
  `nik` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(100) NOT NULL,
  `jenis_mutasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_listmutasi`
--

INSERT INTO `tbl_listmutasi` (`nik`, `nama`, `alamat`, `no_telp`, `jenis_mutasi`) VALUES
(1415, 'Hariyanto', 'Makassar', 812, 'Mutasi Keluar'),
(123123, 'Arian', 'awds', 123, 'Mutasi Masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mutasidatang`
--

CREATE TABLE `tbl_mutasidatang` (
  `no_surat` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nik` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(100) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `tgl_pindah` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `jenis_pindah` varchar(100) NOT NULL,
  `penanda_tangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mutasidatang`
--

INSERT INTO `tbl_mutasidatang` (`no_surat`, `nama_lengkap`, `nik`, `alamat`, `no_telp`, `alasan`, `tgl_pindah`, `klasifikasi`, `jenis_pindah`, `penanda_tangan`) VALUES
('1234', 'Arian', 123123, 'awds', 123, 'Pendidikan', '05/02/2017', '', '', 'Sarifuddin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mutasikeluar`
--

CREATE TABLE `tbl_mutasikeluar` (
  `no_surat` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nik` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(100) NOT NULL,
  `alasan` varchar(100) NOT NULL,
  `alamat_tujuan` varchar(200) NOT NULL,
  `dusun_tujuan` varchar(200) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kel_desa` varchar(200) NOT NULL,
  `kode_pos` int(100) NOT NULL,
  `tgl_pindah` varchar(100) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  `jenis_pindah` varchar(100) NOT NULL,
  `penanda_tangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mutasikeluar`
--

INSERT INTO `tbl_mutasikeluar` (`no_surat`, `nama_lengkap`, `nik`, `alamat`, `no_telp`, `alasan`, `alamat_tujuan`, `dusun_tujuan`, `provinsi`, `kabupaten`, `kecamatan`, `kel_desa`, `kode_pos`, `tgl_pindah`, `klasifikasi`, `jenis_pindah`, `penanda_tangan`) VALUES
(1231233, 'Hariyanto', 1415, 'Makassar', 812, '', 'awdawd', 'agagag', '', '', '', '', 1414, '05/18/2017', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengaduan`
--

CREATE TABLE `tbl_pengaduan` (
  `no_ktp` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `waktu_input` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengaduan`
--

INSERT INTO `tbl_pengaduan` (`no_ktp`, `nama`, `isi`, `waktu_input`) VALUES
(12412, 'Niko Satria', 'Kerusuhan di lorong 1 rt 05', '1495036631'),
(123123, 'Hariyanto', 'Sampah banyak berserakan di lorong 2 rt 1\r\n', '1495036692'),
(123132, 'Arian', 'Kerusakan Jalan rt 1', '1495036601');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_akte`
--
ALTER TABLE `tbl_akte`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `tbl_ceksurat`
--
ALTER TABLE `tbl_ceksurat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_datainfrastruktur`
--
ALTER TABLE `tbl_datainfrastruktur`
  ADD PRIMARY KEY (`kode_aset`);

--
-- Indexes for table `tbl_datakelahiran`
--
ALTER TABLE `tbl_datakelahiran`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `tbl_datakematian`
--
ALTER TABLE `tbl_datakematian`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `tbl_datapegawai`
--
ALTER TABLE `tbl_datapegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbl_domisili`
--
ALTER TABLE `tbl_domisili`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `tbl_ektp`
--
ALTER TABLE `tbl_ektp`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_formatnosurat`
--
ALTER TABLE `tbl_formatnosurat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_infokelurahan`
--
ALTER TABLE `tbl_infokelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_infokependudukan`
--
ALTER TABLE `tbl_infokependudukan`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `tbl_listmutasi`
--
ALTER TABLE `tbl_listmutasi`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_mutasidatang`
--
ALTER TABLE `tbl_mutasidatang`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_mutasikeluar`
--
ALTER TABLE `tbl_mutasikeluar`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  ADD PRIMARY KEY (`no_ktp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_formatnosurat`
--
ALTER TABLE `tbl_formatnosurat`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_infokelurahan`
--
ALTER TABLE `tbl_infokelurahan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
