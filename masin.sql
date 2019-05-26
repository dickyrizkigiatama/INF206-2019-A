-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 07:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masin`
--

-- --------------------------------------------------------

--
-- Table structure for table `lihat`
--

CREATE TABLE `lihat` (
  `image` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(60000) NOT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lihat`
--

INSERT INTO `lihat` (`image`, `judul`, `isi`, `href`) VALUES
('images/sinarmas.png', 'Asura', 'PT Asuransi Sinar Mas didirikan pada tanggal 27 Mei 1985, PT. Asuransi Sinar Mas (ASM)\r\n								merupakan salah satu perusahaan asuransi umum terbesar di Indonesia.', 'generic.html'),
('images/bpjs.png', 'BPJS Ketenagakerjaan', 'BPJS Ketenagakerjaan (Badan Penyelenggara Jaminan Sosial Ketenagakerjaan) merupakan\r\n								program publik yang memberikan perlindungan bagi tenaga kerja untuk mengatasi risiko\r\n								sosial ekonomi tertentu dan penyelenggaraan nya menggunakan mekanisme asuransi sosial.', 'generic.html'),
('images/askrindo.png', 'Askrindo', 'PT. (Persero) Asuransi Kredit Indonesia atau PT. Askrindo (Persero) merupakan salah satu\r\n								Badan Usaha Milik Negara (BUMN) yang bergerak dalam asuransi/penjaminan, Berdiri tanggal\r\n								6 April 1971 untuk mengemban misi dalam pemberdayaan Usaha Mikro, Kecil dan Menengah\r\n								(UMKM) guna menunjang pertumbuhan perekonomian Indonesia.', 'generic.html'),
('images/axa.png', 'AXA Mandiri Insurance', 'PT AXA Mandiri Financial Services (AXA Mandiri) adalah perusahaan asuransi jiwa ternama\r\n								di Indonesia yang sudah beroperasi sejak Desember 2003. PT AXA Mandiri menyediakan\r\n								produk kombinasi asuransi dan investasi yang disebut unit linked yaitu Mandiri Investasi\r\n								Sejahtera dan Mandiri Rencana Sejahtera serta asuransi atau perlindungan terhadap\r\n								kecelakaan lalu lintas, perlindungan kesehatan, perlindungan pembayaran premi dan\r\n								perlindungan terhadap penyakit kritis.', 'generic.html'),
('images/allianz.png', 'Allianz Life Indonesia', 'Allianz hadir sejak tahun 1981 melalui kantor perwakilannya di Jakarta. Tahun 1989, PT\r\n								Asuransi Allianz Utama Indonesia resmi beroperasi memberikan pelayanan di bidang\r\n								asuransi umum. Di tahun 1996, Allianz melengkapi pelayanan asuransinya di Indonesia\r\n								dengan mendirikan PT Asuransi Allianz Life Indonesia yang bergerak di bidang asuransi\r\n								jiwa, kesehatan, dan dana pensiun. Pada tahun 2006, kedua perusahaan memulai bisnis\r\n								asuransi Syariah.', 'generic.html'),
('images/aspan.png', 'Aspan General Insurance', 'PT. ASURANSI PURNA ARTANUGRAHA, selanjutnya disebut dengan Asuransi ASPAN, didirikan pada\r\n								tanggal 10 Juni 1991, Kegiatan usaha Asuransi ASPAN pada mulanya menangani segmen bisnis\r\n								Marine Hull dan Personal Accident penumpang kapal PT. PELNI. Seiring dengan berjalannya\r\n								waktu, Asuransi ASPAN kemudian berkembang sesuai dengan portofolio usaha seperti\r\n								sekarang ini. Dalam perkembangannya, perusahaan secara bertahap berusaha untuk dapat\r\n								memperkuat struktur modal perusahaan dengan meningkatkan modal di sektor perusahaan.', 'generic.html'),
('images/jiwasraya.png', 'Asuransi Jiwasraya', 'Jiwasraya dibangun dari sejarah teramat panjang. Bermula dari NILLMIJ, Nederlandsch\r\n								Indiesche Levensverzekering en Liffrente Maatschappij van 1859, tanggal 31 Desember\r\n								1859. Perusahaan asuransi jiwa yang pertama kali ada di Indonesia didirikan dengan akta\r\n								Notaris William Hendry Herklots Nomor 185.Kini Perseroan yang lebih populer dengan nama\r\n								Asuransi Jiwasraya ini telah memasuki usia 145 tahun. Sepanjang itu pula kinerjanya\r\n								terus ditempa demi meraih kepercayaan masyarakat. Sinergi antara tujuan mulia dengan\r\n								kekuatan bisnis, mampu mengantar Jiwasraya menjadi perusahaan asuransi yang andal dan\r\n								terpercaya.', 'generic.html'),
('images/tripa.png', 'Asuransi Tri Pakarta', 'PT Asuransi Tri Pakarta (TRIPA) adalah Perusahaan asuransi umum yang didirikan pada\r\n								tanggal 21 Agustus 1978 oleh insan Bank Negara Indonesia.', 'generic.html'),
('images/bumiputera.png', 'Bumiputera 1912', 'AJB Bumiputera 1912 adalah perusahaan asuransi terkemuka di Indonesia.\r\n								Didirikan 103 tahun yang lalu untuk memenuhi kebutuhan spesifik masyarakat Indonesia,\r\n								AJB Bumiputera 1912 telah berkembang untuk mengikuti perubahan kebutuhan masyarakat.\r\n								Pendekatan modern, produk yang beragam, serta teknologi mutakhir yang ditawarkan\r\n								didukung oleh nilai-nilai tradisional yang melandasi pendirian AJB Bumiputera 1912', 'generic.html'),
('images/prudential.png', 'Prudential Insurance', 'Didirikan pada tahun 1995, PT Prudential Life Assurance (Prudential Indonesia) merupakan\r\n								bagian dari Prudential plc, sebuah grup perusahaan jasa keuangan terkemuka di Inggris.\r\n								Sebagai bagian dari Grup yang berpengalaman lebih dari 168 tahun di industri asuransi\r\n								jiwa, Prudential Indonesia memiliki komitmen untuk mengembangkan bisnisnya di Indonesia.', 'generic.html'),
('images/aia.png', 'AIA Financial Indonesia', 'AIA Financial merupakan salah satu perusahaan asuransi jiwa terkemuka di Indonesia dan\r\n								merupakan perusahaan asuransi jiwa yang terdaftar dan serta diawasi oleh Otoritas Jasa\r\n								Keuangan. AIA Financial merupakan anak perusahaan dari AIA Group. AIA menawarkan\r\n								berbagai produk asuransi, termasuk asuransi dengan prinsip syariah, yang meliputi\r\n								asuransi jiwa, asuransi kesehatan, asuransi kecelakaan diri, asuransi yang dikaitkan\r\n								dengan investasi, program kesejahteraan karyawan, program pesangon, dan program Dana\r\n								Pensiun (DPLK).', 'generic.html'),
('images/aca.png', 'ACA Asuransi', 'PT. Asuransi Central Asia (ACA) berdiri pada tanggal 29 Agustus 1956 dengan nama Maskapai\r\n								Asuransi Oriental N.V. Pada tanggal 5 Agustus 1958 nama perusahaan berubah menjadi PT\r\n								Asuransi Central Asia (ACA). Sejak berdiri hingga saat ini, ACA telah memainkan peran\r\n								yang tak terpisahkan dalam pembangunan perekonomian Indonesia. ACA meneruskan tradisi\r\n								selama lebih dari 52 tahun memberikan kontribusi dalam asuransi dan perekonomian\r\n								khususnya asuransi umum.', 'generic.html');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'ali', 'ali123', 'admin'),
(2, 'usman', 'usman123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
