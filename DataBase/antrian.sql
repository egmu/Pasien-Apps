-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 09.19
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `id_kategori`
--

CREATE TABLE `id_kategori` (
  `id_kategori` int(16) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `id_kategori`
--

INSERT INTO `id_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1623306864),
('m130524_201442_init', 1623306869),
('m190124_110200_add_verification_token_column_to_user_table', 1623306869);

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitor`
--

CREATE TABLE `monitor` (
  `id_antrian_now` int(11) NOT NULL,
  `nama` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `monitor`
--

INSERT INTO `monitor` (`id_antrian_now`, `nama`) VALUES
(1, 'klinik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `last_login` datetime NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_antrian_locket`
--

CREATE TABLE `tb_antrian_locket` (
  `id_antrian_locket` int(10) NOT NULL,
  `urutan` int(5) NOT NULL,
  `tgl_antrian` date NOT NULL,
  `no_rm` int(15) NOT NULL,
  `perkiraan_waktu` time NOT NULL,
  `status_pasien` varchar(20) NOT NULL,
  `poli_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_antrian_locket`
--

INSERT INTO `tb_antrian_locket` (`id_antrian_locket`, `urutan`, `tgl_antrian`, `no_rm`, `perkiraan_waktu`, `status_pasien`, `poli_id`) VALUES
(1, 1, '2021-06-14', 1, '00:00:01', '0', 9),
(2, 1, '2021-06-08', 1, '00:00:01', '1', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_antrian_now`
--

CREATE TABLE `tb_antrian_now` (
  `id_antrian_now` int(5) NOT NULL,
  `tgl_antrian` date NOT NULL,
  `locket_pendaftaran` int(5) NOT NULL,
  `poli_umum` int(5) NOT NULL,
  `poli_gigi` int(5) NOT NULL,
  `poli_tb_kista` int(5) NOT NULL,
  `poli_kandungan` int(5) NOT NULL,
  `poli_kb` int(5) NOT NULL,
  `poli_mtbs` int(5) NOT NULL,
  `poli_jiwa` int(5) NOT NULL,
  `poli_lansis` int(5) NOT NULL,
  `imunisasi` int(5) NOT NULL,
  `laboratorium` int(5) NOT NULL,
  `pojok_gizi` int(5) NOT NULL,
  `klinik_senitasi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_antrian_now`
--

INSERT INTO `tb_antrian_now` (`id_antrian_now`, `tgl_antrian`, `locket_pendaftaran`, `poli_umum`, `poli_gigi`, `poli_tb_kista`, `poli_kandungan`, `poli_kb`, `poli_mtbs`, `poli_jiwa`, `poli_lansis`, `imunisasi`, `laboratorium`, `pojok_gizi`, `klinik_senitasi`) VALUES
(1, '2021-06-08', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_antrian_poli`
--

CREATE TABLE `tb_antrian_poli` (
  `id_antrian_poli` int(10) NOT NULL,
  `urutan` int(5) NOT NULL,
  `tgl_antrian` date NOT NULL,
  `perkiraan_waktu` time NOT NULL,
  `no_rm` int(15) NOT NULL,
  `poli_tujuan` varchar(36) DEFAULT NULL,
  `status_antrian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_antrian_poli`
--

INSERT INTO `tb_antrian_poli` (`id_antrian_poli`, `urutan`, `tgl_antrian`, `perkiraan_waktu`, `no_rm`, `poli_tujuan`, `status_antrian`) VALUES
(2, 1, '2021-06-07', '00:00:01', 1, 'Poli MTBS', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar_kategori`
--

CREATE TABLE `tb_daftar_kategori` (
  `id_daftar_kategori` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `detail_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftar_kategori`
--

INSERT INTO `tb_daftar_kategori` (`id_daftar_kategori`, `id_kategori`, `detail_kategori`) VALUES
(1, 1, 'sajik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_info`
--

CREATE TABLE `tb_info` (
  `id_info` int(11) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `detail1` varchar(600) NOT NULL,
  `detail2` varchar(600) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_info`
--

INSERT INTO `tb_info` (`id_info`, `id_kategori`, `judul`, `detail1`, `detail2`, `gambar`) VALUES
(1, 1, 'Penyakit', 'sa', 'sa', 's');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_info_kategori`
--

CREATE TABLE `tb_info_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_info_kategori`
--

INSERT INTO `tb_info_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `no_rm` int(10) NOT NULL,
  `nama_pasien` varchar(25) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `hub_keluarga` varchar(20) NOT NULL,
  `jenis_pasien` varchar(20) NOT NULL,
  `no_bpjs` int(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(5) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_index` varchar(15) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_pernikahan` varchar(20) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`no_rm`, `nama_pasien`, `nama_kk`, `hub_keluarga`, `jenis_pasien`, `no_bpjs`, `tgl_lahir`, `umur`, `jenis_kelamin`, `alamat`, `no_index`, `pendidikan`, `pekerjaan`, `agama`, `status_pernikahan`, `telepon`, `tgl_masuk`, `tgl_akhir`, `token`) VALUES
(1, 'ramdhan', 'rian', 'mmantan', 'rawat', 233322, '2021-06-22', 20, '0', 'ksdejefs', '1', 'sd', 'guru', 'islam', 'wdd', '122221106', '2021-06-29', '2021-06-23', '22233');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_poli`
--

CREATE TABLE `tb_poli` (
  `id_poli` int(10) NOT NULL,
  `nama_poli` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `nama_poli`) VALUES
(11, 'Imunisasi'),
(14, 'klinik Sanitasi'),
(12, 'Labolatorium'),
(13, 'Pojok Gizi'),
(3, 'Poli Gizi'),
(9, 'Poli Jiwa'),
(6, 'Poli Kandungan'),
(7, 'Poli Kb'),
(5, 'Poli Kusta'),
(10, 'Poli Lansia'),
(8, 'Poli MTBS'),
(4, 'Poli Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekam_medis`
--

CREATE TABLE `tb_rekam_medis` (
  `id_rekam_medis` int(200) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `no_rm` int(10) NOT NULL,
  `anamnesa` varchar(100) NOT NULL,
  `blk` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `terapi` varchar(50) NOT NULL,
  `askep` varchar(50) NOT NULL,
  `kie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekam_medis`
--

INSERT INTO `tb_rekam_medis` (`id_rekam_medis`, `tgl_periksa`, `no_rm`, `anamnesa`, `blk`, `diagnosa`, `terapi`, `askep`, `kie`) VALUES
(1, '2021-06-10', 1, 'sia', '22', 'nyeri pinggang', 'pijat', 'q', 'w');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'Admin1', '3bJJS0k9LryCfimSzZJS8ZzLXkKaLVXT', '$2y$13$emplkaiiUvE.Yowjsz6QA.8i9GW7gk601Mjd5oeeEajt02VQ//y3S', NULL, 'admin1@gmail.com', 10, 1623307167, 1623307167, NULL),
(2, 'Admin2', 'eDycN6x-FMh2v1VWcTvYbCuVd6_Ala9u', '$2y$13$x61IkMgidj4lEYOCAhmuaOwR8cAwmdgz3fD/S8KtpTZSUhjWmtbv2', NULL, 'admin2@gmail.com', 10, 1623560456, 1623560456, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `id_kategori`
--
ALTER TABLE `id_kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id_antrian_now`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `nama_admin` (`nama_admin`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `tb_antrian_locket`
--
ALTER TABLE `tb_antrian_locket`
  ADD PRIMARY KEY (`id_antrian_locket`),
  ADD KEY `poli_id` (`poli_id`);

--
-- Indeks untuk tabel `tb_antrian_now`
--
ALTER TABLE `tb_antrian_now`
  ADD PRIMARY KEY (`id_antrian_now`);

--
-- Indeks untuk tabel `tb_antrian_poli`
--
ALTER TABLE `tb_antrian_poli`
  ADD PRIMARY KEY (`id_antrian_poli`),
  ADD KEY `no_rm` (`no_rm`),
  ADD KEY `poli_tujuan` (`poli_tujuan`);

--
-- Indeks untuk tabel `tb_daftar_kategori`
--
ALTER TABLE `tb_daftar_kategori`
  ADD PRIMARY KEY (`id_daftar_kategori`),
  ADD UNIQUE KEY `detail_kategori` (`detail_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_info_kategori`
--
ALTER TABLE `tb_info_kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`no_rm`),
  ADD UNIQUE KEY `no_bpjs` (`no_bpjs`),
  ADD KEY `umur` (`umur`),
  ADD KEY `nama_pasien` (`nama_pasien`);

--
-- Indeks untuk tabel `tb_poli`
--
ALTER TABLE `tb_poli`
  ADD PRIMARY KEY (`id_poli`),
  ADD KEY `nama_poli` (`nama_poli`);

--
-- Indeks untuk tabel `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD PRIMARY KEY (`id_rekam_medis`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `id_kategori`
--
ALTER TABLE `id_kategori`
  MODIFY `id_kategori` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id_antrian_now` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_antrian_locket`
--
ALTER TABLE `tb_antrian_locket`
  MODIFY `id_antrian_locket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_antrian_now`
--
ALTER TABLE `tb_antrian_now`
  MODIFY `id_antrian_now` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_antrian_poli`
--
ALTER TABLE `tb_antrian_poli`
  MODIFY `id_antrian_poli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_daftar_kategori`
--
ALTER TABLE `tb_daftar_kategori`
  MODIFY `id_daftar_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_info_kategori`
--
ALTER TABLE `tb_info_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `no_rm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_poli`
--
ALTER TABLE `tb_poli`
  MODIFY `id_poli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  MODIFY `id_rekam_medis` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `monitor_ibfk_1` FOREIGN KEY (`id_antrian_now`) REFERENCES `tb_antrian_now` (`id_antrian_now`);

--
-- Ketidakleluasaan untuk tabel `tb_antrian_poli`
--
ALTER TABLE `tb_antrian_poli`
  ADD CONSTRAINT `tb_antrian_poli_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `tb_pasien` (`no_rm`),
  ADD CONSTRAINT `tb_antrian_poli_ibfk_2` FOREIGN KEY (`poli_tujuan`) REFERENCES `tb_poli` (`nama_poli`);

--
-- Ketidakleluasaan untuk tabel `tb_daftar_kategori`
--
ALTER TABLE `tb_daftar_kategori`
  ADD CONSTRAINT `tb_daftar_kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `id_kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  ADD CONSTRAINT `tb_info_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_info_kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD CONSTRAINT `tb_rekam_medis_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `tb_pasien` (`no_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
