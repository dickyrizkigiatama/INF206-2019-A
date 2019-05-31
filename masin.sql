-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 06:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
('images/aca.png', 'ACA Asuransi', 'PT. Asuransi Central Asia (ACA) berdiri pada tanggal 29 Agustus 1956 dengan nama Maskapai\r\n								Asuransi Oriental N.V. Pada tanggal 5 Agustus 1958 nama perusahaan berubah menjadi PT\r\n								Asuransi Central Asia (ACA). Sejak berdiri hingga saat ini, ACA telah memainkan peran\r\n								yang tak terpisahkan dalam pembangunan perekonomian Indonesia. ACA meneruskan tradisi\r\n								selama lebih dari 52 tahun memberikan kontribusi dalam asuransi dan perekonomian\r\n								khususnya asuransi umum.', 'generic.html'),
('LOGO HMIF.png', 'Unsyiah Donor Darah', 'MAsiN merupakan web mendaftar asuransi untuk nelayan. Web ini mempermudah nelayan mendaftar asuransi, mengetahui syarat mendaftar dan lokasi dari berbagai perusahaan penyedia jasa asuransi.', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_asuransi` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `ttl` date NOT NULL,
  `jk` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `asuransi` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_asuransi`, `id`, `nama`, `email`, `alamat`, `agama`, `ttl`, `jk`, `nohp`, `pekerjaan`, `asuransi`, `nik`, `foto`) VALUES
(1, 0, 'Maulana Hizbullah', 'hizbullahmaulana1@gmail.com', 'langsa', 'islam', '2019-05-08', 'Laki-Laki', '082360164696', 'nelayan', 'Asuransi Jiwasraya', '121212121212', 'LOGO RESMI UNSYIAH.png'),
(2, 0, 'faris', 'faris@gmail.com', 'Banda Aceh', 'islam', '2019-05-09', 'Laki-Laki', '082360164696', 'nelayan', 'ACA Asuransi', '1313131313131', 'LOGO HMIF.png'),
(3, 0, 'dicki', 'dicki@gmail.com', 'takengon', 'islam', '2019-05-14', 'Perempuan', '082360164696', 'nelayan', 'Asuransi Jiwasraya', '141414141414', 'LOGO HMTP.tif');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `alamat` varchar(2555) NOT NULL,
  `notelp` int(50) NOT NULL,
  `syarat1` varchar(255) NOT NULL,
  `syarat2` varchar(255) NOT NULL,
  `syarat3` varchar(255) NOT NULL,
  `syarat4` varchar(255) NOT NULL,
  `syarat5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `gambar`, `nama`, `deskripsi`, `alamat`, `notelp`, `syarat1`, `syarat2`, `syarat3`, `syarat4`, `syarat5`) VALUES
(1, 'sinarmas.png', 'PT Asuransi Sinar Mas', 'PT Asuransi Sinar Mas didirikan pada tanggal 27 Mei 1985 dengan nama PT. Asuransi Kerugian Sinar Mas Dipta dengan surat No. Kep-2562/MD 1986. Pada tahun 1991, Perusahaan  berubah nama menjadi PT. Asuransi Sinar Mas. PT. Asuransi Sinar Mas (ASM) merupakan salah satu perusahaan asuransi umum terbesar di Indonesia. Sepanjang perjalanannya, ASM menunjukkan pertumbuhan yang berkesinambungan. Premi bruto dan total asset Perusahaan secara konsisten meningkat dari tahun ke tahun, termasuk di tahun-tahun dimana terjadi goncangan ekonomi global. Dalam asuransi, terdapat satu proses yang disebut dengan klaim. Klaim merupakan suatu proses yang dilakukan oleh Tertanggung (nasabah) untuk meminta ganti rugi kepada Penanggung (Perusahaan Asuransi) atas kerusakan/kerugian yang dialami atas suatu obyek yang diasuransikan.', 'Jl. Sri Ratu Safiatuddin No 45 Lt 3 Kelurahan Peunayong Kecamatan Kuta Alam, Landom, Lueng Bata, Banda Aceh City, Aceh 23122\r\n             ', 65134498, 'Pas foto ukuran  3×4 1 lembar', 'KITAS atau KITAP (khusus WNA)', 'Fotokopi Akta Kelahiran Anak yang menjadi tanggungan', 'Fotokopi Buku Nikah', 'Fotokopi KK'),
(2, 'bpjs.png', 'BPJS Ketenagakerjaan', 'Jaminan pemeliharaan kesehatan di Indonesia sebenarnya sudah ada sejak zaman kolonial Belanda. Dan setelah kemerdekaan, pada tahun 1949, setelah pengakuan kedaulatan oleh Pemerintah Belanda, upaya untuk menjamin kebutuhan pelayanan kesehatan bagi masyarakat, khususnya pegawai negeri sipil beserta keluarga, tetap dilanjutkan. Prof. G.A. Siwabessy, selaku Menteri Kesehatan yang menjabat pada saat itu, mengajukan sebuah gagasan untuk perlu segera menyelenggarakan program asuransi kesehatan semesta (universal health insurance) yang saat itu mulai diterapkan di banyak negara maju dan tengah berkembang pesat. Hal ini berawal pada tahun 2004 saat pemerintah mengeluarkan UU Nomor 40 Tahun 2004 tentang Sistem Jaminan Sosial Nasional (SJSN) dan kemudian pada tahun 2011 pemerintah menetapkan UU Nomor 24 Tahun 2011 tentang Badan Penyelenggara Jaminan Sosial (BPJS) serta menunjuk PT Askes (Persero) sebagai penyelenggara program jaminan sosial di bidang kesehatan, sehingga PT Askes (Persero) pun berubah menjadi BPJS Kesehatan', 'Jl. Tengku M. Daud Beureuh No. 152, Beurawe, Kuta Alam, Kota Banda Aceh, Aceh 24415\r\nNo Telp (0651) 23045\r\n', 65123045, 'Fotokopi KTP', 'Fotokopi Buku Nikah', 'Fotokopi Akta Kelahiran Anak yang menjadi tanggungan', 'KITAS atau KITAP (khusus WNA)', 'Fotokopi KK'),
(3, 'askrindo.png', 'Askrindo', 'PT. (Persero) Asuransi Kredit Indonesia atau PT. Askrindo (Persero) merupakan salah satu Badan Usaha Milik Negara (BUMN) yang bergerak dalam asuransi/penjaminan, tidak dapat dipisahkan dari pembangunan ekonomi Bangsa dan Negara Republik Indonesia. Sejak pemerintah menyusun dan menetapkan REPELITA I tahun 1969, yang salah satu sasaran pokok rencana tersebut adalah pemerataan hasil-hasil pembangunan dalam bidang kesempatan berusaha, pendapatan masyarakat dan sekaligus merangsang pertumbuhan lapangan kerja. Dalam rangka mencapai sasaran ini pemerintah mengambil langkah konkrit antara lain dengan mengembangkan usaha kecil dan menengah dengan cara mengatasi salah satu aspek usaha yang penting yaitu aspek pembiayaan. Berdiri tanggal 6 April 1971 berdasarkan Peraturan Pemerintah Republik Indonesia Nomor 1/1971 tanggal 11 Januari 1971, untuk mengemban misi dalam pemberdayaan Usaha Mikro, Kecil dan Menengah (UMKM) guna menunjang pertumbuhan perekonomian Indonesia. Peran PT. Askrindo (Persero) dalam pemberdayaan UMKM adalah sebagai lembaga penjamin atas kredit yang disalurkan oleh perbankan kepada UMKM.', 'Gedung Perkantoran Aceh Square, Jl. Teungku Imum Lueng Bata, Blang Cut, Lueng Bata, Blang Cut, Lueng Bata, Kota Banda Aceh, Aceh 23248\r\nNo Telp 065129465\r\n', 65129465, 'Pas foto ukuran  3×4 1 lembar', 'Fotokopi KK', 'Fotokopi KTP', 'KITAS atau KITAP (khusus WNA)', 'Fotokopi Buku Nikah'),
(4, 'axa.png', 'AXA Mandiri Insurance', 'PT AXA Mandiri Financial Services (AXA Mandiri) adalah perusahaan asuransi jiwa ternama di Indonesia yang sudah beroperasi sejak Desember 2003. PT AXA Mandiri menyediakan produk kombinasi asuransi dan investasi yang disebut unit linked yaitu Mandiri Investasi Sejahtera dan Mandiri Rencana Sejahtera serta asuransi atau perlindungan terhadap kecelakaan lalu lintas, perlindungan kesehatan, perlindungan pembayaran premi dan perlindungan terhadap penyakit kritis.', 'banda aceh', 0, 'kjjjh', 'hjhgjhg', 'ghjjgh', 'ghjjhg', 'gjhjhg'),
(5, 'allianz.png', 'Allianz Life Indonesia', 'Allianz hadir sejak tahun 1981 melalui kantor perwakilannya di Jakarta. Tahun 1989, PT	Asuransi Allianz Utama Indonesia resmi beroperasi memberikan pelayanan di bidang asuransi umum. Di tahun 1996, Allianz melengkapi pelayanan asuransinya di Indonesia dengan mendirikan PT Asuransi Allianz Life Indonesia yang bergerak di bidang asuransi\r\njiwa, kesehatan, dan dana pensiun. Pada tahun 2006, kedua perusahaan memulai bisnis asuransi Syariah.', 'banda aceh', 0, 'ghjhjg', 'hgjsd', 'rfeerf', 'frefre', 'frerfe'),
(6, 'aspan.png', 'Aspan General Insurance', 'PT. ASURANSI PURNA ARTANUGRAHA, selanjutnya disebut dengan Asuransi ASPAN, didirikan pada tanggal 10 Juni 1991, Kegiatan usaha Asuransi ASPAN pada mulanya menangani segmen bisnis Marine Hull dan Personal Accident penumpang kapal PT. PELNI. Seiring dengan berjalannya waktu, Asuransi ASPAN kemudian berkembang sesuai dengan portofolio usaha seperti sekarang ini. Dalam perkembangannya, perusahaan secara bertahap berusaha untuk dapat memperkuat struktur modal perusahaan dengan meningkatkan modal di sektor perusahaan.', 'banda aceh', 0, 'ferfer', 'reffre', 'erfre', 'erferf', 'errferef'),
(7, 'jiwasraya.png', 'Asuransi Jiwasraya', 'Jiwasraya dibangun dari sejarah teramat panjang. Bermula dari NILLMIJ, Nederlandsch Indiesche Levensverzekering en Liffrente Maatschappij van 1859, tanggal 31 Desember 1859. Perusahaan asuransi jiwa yang pertama kali ada di Indonesia didirikan dengan akta Notaris William Hendry Herklots Nomor 185.Kini Perseroan yang lebih populer dengan nama Asuransi Jiwasraya ini telah memasuki usia 145 tahun. Sepanjang itu pula kinerjanya terus ditempa demi meraih kepercayaan masyarakat. Sinergi antara tujuan mulia dengan kekuatan bisnis, mampu mengantar Jiwasraya menjadi perusahaan asuransi yang andal dan terpercaya.', 'banda aceh', 0, 'erferf', 'erfrfe', 'refre', 'erffer', 'erferf'),
(8, 'tripa.png', 'Asuransi Tri Pakarta', 'PT Asuransi Tri Pakarta (TRIPA) adalah Perusahaan asuransi umum yang didirikan pada tanggal 21 Agustus 1978 oleh insan Bank Negara Indonesia.', 'banda aceh', 0, 'reffer', 'erfrfe', 'freerf', 'efrfer', 'erffer'),
(9, 'bumiputera.png', 'Bumiputera 1912', 'AJB Bumiputera 1912 adalah perusahaan asuransi terkemuka di Indonesia. Didirikan 103 tahun yang lalu untuk memenuhi kebutuhan spesifik masyarakat Indonesia, AJB Bumiputera 1912 telah berkembang untuk mengikuti perubahan kebutuhan masyarakat. Pendekatan modern, produk yang beragam, serta teknologi mutakhir yang ditawarkan didukung oleh nilai-nilai tradisional yang melandasi pendirian AJB Bumiputera 1912', 'banda aceh', 0, 'erffer', 'ferefr', 'erferf', 'erffer', 'eqwqwe'),
(10, 'prudential.png', 'Prudential Insurance', 'Didirikan pada tahun 1995, PT Prudential Life Assurance (Prudential Indonesia) merupakan bagian dari Prudential plc, sebuah grup perusahaan jasa keuangan terkemuka di Inggris. Sebagai bagian dari Grup yang berpengalaman lebih dari 168 tahun di industri asuransi jiwa, Prudential Indonesia memiliki komitmen untuk mengembangkan bisnisnya di Indonesia.', 'banda aceh', 0, 'ewqeqw', 'qweewq', 'qwewqe', 'qweqew', 'eqwewq'),
(11, 'aia.png', 'AIA Financial Indonesia', 'AIA Financial merupakan salah satu perusahaan asuransi jiwa terkemuka di Indonesia dan merupakan perusahaan asuransi jiwa yang terdaftar dan serta diawasi oleh Otoritas Jasa Keuangan. AIA Financial merupakan anak perusahaan dari AIA Group. AIA menawarkan berbagai produk asuransi, termasuk asuransi dengan prinsip syariah, yang meliputi asuransi jiwa, asuransi kesehatan, asuransi kecelakaan diri, asuransi yang dikaitkan dengan investasi, program kesejahteraan karyawan, program pesangon, dan program Dana Pensiun (DPLK).', 'banda aceh', 0, 'dfgfdg', 'fgbfg', 'nghngh', 'vcvcx', 'vxcvcx'),
(12, 'aca.png', 'ACA Asuransi', 'PT. Asuransi Central Asia (ACA) berdiri pada tanggal 29 Agustus 1956 dengan nama Maskapai Asuransi Oriental N.V. Pada tanggal 5 Agustus 1958 nama perusahaan berubah menjadi PT Asuransi Central Asia (ACA). Sejak berdiri hingga saat ini, ACA telah memainkan peran yang tak terpisahkan dalam pembangunan perekonomian Indonesia. ACA meneruskan tradisi selama lebih dari 52 tahun memberikan kontribusi dalam asuransi dan perekonomian khususnya asuransi umum.', 'banda aceh', 0, 'dsadsa', 'sdaasd', 'sdaasd', 'dasdas', 'sdasda'),
(15, 'LOGO HMIF.png', 'informatika', 'Unsyiah Donor Darah', '', 0, '', '', '', '', '');

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
(2, 'usman', 'usman123', 'user'),
(4, 'putramaghfirah', '$2y$10$lrpULQxBBe1hKmL9m71b/uqWbOsTK6FB8VG3jO46/j5NB16YVjOHy', 'user'),
(5, 'dicky', '$2y$10$ia5.MnO8.Xepegvw1FO9x.xwwasUBqjuGpXHkUO9iZbtFyTecCc1W', 'user'),
(6, 'hizbullahmaulana1@gmail.com', '$2y$10$Ni5/A0TeedU65X/s8bPZ/O7kp1SXKdEu3c/VxOTh9Kr.8FhWss5/G', 'admin'),
(8, 'maulana', '$2y$10$BAn60BRw0GoYT1k6HzxAtexfOKattkI66GC28hfUFEqHak06nWaAG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_asuransi`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_asuransi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
