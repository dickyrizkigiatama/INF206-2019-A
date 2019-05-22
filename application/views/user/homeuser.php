<!DOCTYPE HTML>
<html>

<head>
	<title>MAsiN</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="inner">

				<!-- Logo -->
				<a href="index.html" class="logo">
					<span class="symbol"><img src="images/1.png" alt="" /></span><span class="title">MAsiN</span>
				</a>

				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<?php if($user['role'] == "user") : ?>
				<ul>
					<li><a href="#">Beranda</a></li>
					<li><a href="#"><?= $user['username'];?></a></li>
					<li><a href="#">Keluar</a></li>
				</ul>
				<?php elseif($user['role'] == "admin") : ?>
					<ul>
						<li><a href="#">Beranda</a></li>
						<li><a href="#"><?= $user['username'];?></a></li>
						<li><a href="#">List pendaftaran</a></li>
						<li><a href="#">Edit</a></li>
						<li><a href="#">Keluar</a></li>
					</ul>
			<?php endif;?>
		</nav>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>
					<h1>Selamat Datang di Web MAsiN<br /></h1>
					<h2>Manajemen Asuransi Nelayan <br></h2>
					<p>MAsiN merupakan web mendaftar asuransi untuk nelayan. Web ini mempermudah nelayan mendaftar
						asuransi, mengetahui syarat mendaftar dan lokasi dari berbagai perusahaan penyedia
						jasa asuransi. </p>
				</header>
				<section class="tiles">
					<article class="style1">
						<span class="image">
							<a href="<?= base_url('home/detail'); ?>">
								<img src="assets/images/sinarmas.png" alt="" />
							</a>
							
						</span>
						<!-- <a href="generic.html"> -->
						<h2>Asura</h2>
						<div class="content">
							<p>PT Asuransi Sinar Mas didirikan pada tanggal 27 Mei 1985, PT. Asuransi Sinar Mas (ASM)
								merupakan salah satu perusahaan asuransi umum terbesar di Indonesia.</p>
						</div>
						</a>
					</article>
					<article class="style2">
						<span class="image">
							<a href="<?= base_url('home/detail'); ?>">
								<img src="images/bpjs.png" alt="" />
							</a>
						</span>
						<!-- <a href="generic.html"> -->
						<h2>BPJS Ketenagakerjaan</h2>
						<div class="content">
							<p>BPJS Ketenagakerjaan (Badan Penyelenggara Jaminan Sosial Ketenagakerjaan) merupakan
								program publik yang memberikan perlindungan bagi tenaga kerja untuk mengatasi risiko
								sosial ekonomi tertentu dan penyelenggaraan nya menggunakan mekanisme asuransi sosial.
							</p>
						</div>
						</a>
					</article>
					<article class="style3">
						<span class="image">
							<a href="<?= base_url('home/detail'); ?>">
								<img src="images/askrindo.png" alt="" />
							</a>
						</span>
						<!-- <a href="generic.html"> -->
						<h2>Askrindo</h2>
						<div class="content">
							<p>PT. (Persero) Asuransi Kredit Indonesia atau PT. Askrindo (Persero) merupakan salah satu
								Badan Usaha Milik Negara (BUMN) yang bergerak dalam asuransi/penjaminan, Berdiri tanggal
								6 April 1971 untuk mengemban misi dalam pemberdayaan Usaha Mikro, Kecil dan Menengah
								(UMKM) guna menunjang pertumbuhan perekonomian Indonesia.</p>
						</div>
						</a>
					</article>
					<article class="style4">
						<span class="image">
							<a href="<?= base_url('home/detail'); ?>">
								<img src="images/axa.png" alt="" />
							</a>
							
						</span>
						<!-- <a href="generic.html"> -->
						<h2>AXA Mandiri Insurance</h2>
						<div class="content">
							<p>PT AXA Mandiri Financial Services (AXA Mandiri) adalah perusahaan asuransi jiwa ternama
								di Indonesia yang sudah beroperasi sejak Desember 2003. PT AXA Mandiri menyediakan
								produk kombinasi asuransi dan investasi yang disebut unit linked yaitu Mandiri Investasi
								Sejahtera dan Mandiri Rencana Sejahtera serta asuransi atau perlindungan terhadap
								kecelakaan lalu lintas, perlindungan kesehatan, perlindungan pembayaran premi dan
								perlindungan terhadap penyakit kritis. </p>
						</div>
						</a>
					</article>
					<article class="style5">
						<span class="image">
							<img src="images/allianz.png" alt="" />
						</span>
						<!-- <a href="generic.html"> -->
						<h2>Allianz Life Indonesia</h2>
						<div class="content">
							<p>Allianz hadir sejak tahun 1981 melalui kantor perwakilannya di Jakarta. Tahun 1989, PT
								Asuransi Allianz Utama Indonesia resmi beroperasi memberikan pelayanan di bidang
								asuransi umum. Di tahun 1996, Allianz melengkapi pelayanan asuransinya di Indonesia
								dengan mendirikan PT Asuransi Allianz Life Indonesia yang bergerak di bidang asuransi
								jiwa, kesehatan, dan dana pensiun. Pada tahun 2006, kedua perusahaan memulai bisnis
								asuransi Syariah.</p>
						</div>
						</a>
					</article>
					<article class="style6">
						<span class="image">
							<img src="images/aspan.png" alt="" />
						</span>
						<!-- <a href="generic.html"> -->
						<h2>Aspan General Insurance</h2>
						<div class="content">
							<p>PT. ASURANSI PURNA ARTANUGRAHA, selanjutnya disebut dengan Asuransi ASPAN, didirikan pada
								tanggal 10 Juni 1991, Kegiatan usaha Asuransi ASPAN pada mulanya menangani segmen bisnis
								Marine Hull dan Personal Accident penumpang kapal PT. PELNI. Seiring dengan berjalannya
								waktu, Asuransi ASPAN kemudian berkembang sesuai dengan portofolio usaha seperti
								sekarang ini. Dalam perkembangannya, perusahaan secara bertahap berusaha untuk dapat
								memperkuat struktur modal perusahaan dengan meningkatkan modal di sektor perusahaan.</p>
						</div>
						</a>
					</article>
					<article class="style2">
						<span class="image">
							<img src="images/jiwasraya.png" alt="" />
						</span>
						<!-- <a href="generic.html"> -->
						<h2>Asuransi Jiwasraya</h2>
						<div class="content">
							<p>Jiwasraya dibangun dari sejarah teramat panjang. Bermula dari NILLMIJ, Nederlandsch
								Indiesche Levensverzekering en Liffrente Maatschappij van 1859, tanggal 31 Desember
								1859. Perusahaan asuransi jiwa yang pertama kali ada di Indonesia didirikan dengan akta
								Notaris William Hendry Herklots Nomor 185.Kini Perseroan yang lebih populer dengan nama
								Asuransi Jiwasraya ini telah memasuki usia 145 tahun. Sepanjang itu pula kinerjanya
								terus ditempa demi meraih kepercayaan masyarakat. Sinergi antara tujuan mulia dengan
								kekuatan bisnis, mampu mengantar Jiwasraya menjadi perusahaan asuransi yang andal dan
								terpercaya.
							</p>
						</div>
						</a>
					</article>
					<article class="style3">
						<span class="image">
							<img src="images/tripa.png" alt="" />
						</span>
						<!-- <a href="generic.html"> -->
						<h2>Asuransi Tri Pakarta</h2>
						<div class="content">
							<p>PT Asuransi Tri Pakarta (TRIPA) adalah Perusahaan asuransi umum yang didirikan pada
								tanggal 21 Agustus 1978 oleh insan Bank Negara Indonesia. </p>
						</div>
						</a>
					</article>
					<article class="style1">
						<span class="image">
							<img src="images/bumiputera.png" alt="" />
						</span>
						<!-- <a href="generic.html"> -->
						<h2>Bumiputera 1912</h2>
						<div class="content">
							<p>AJB Bumiputera 1912 adalah perusahaan asuransi terkemuka di Indonesia.

								Didirikan 103 tahun yang lalu untuk memenuhi kebutuhan spesifik masyarakat Indonesia,
								AJB Bumiputera 1912 telah berkembang untuk mengikuti perubahan kebutuhan masyarakat.
								Pendekatan modern, produk yang beragam, serta teknologi mutakhir yang ditawarkan
								didukung oleh nilai-nilai tradisional yang melandasi pendirian AJB Bumiputera 1912</p>
						</div>
						</a>
					</article>
					<article class="style5">
						<span class="image">
							<img src="images/prudential.png" alt="" />
						</span>
						<!-- <a href="generic.html"> -->
						<h2>Prudential Insurance</h2>
						<div class="content">
							<p>Didirikan pada tahun 1995, PT Prudential Life Assurance (Prudential Indonesia) merupakan
								bagian dari Prudential plc, sebuah grup perusahaan jasa keuangan terkemuka di Inggris.
								Sebagai bagian dari Grup yang berpengalaman lebih dari 168 tahun di industri asuransi
								jiwa, Prudential Indonesia memiliki komitmen untuk mengembangkan bisnisnya di Indonesia.
							</p>
						</div>
						</a>
					</article>
					<article class="style6">
						<span class="image">
							<img src="images/aia.png" alt="" />
						</span>
						<!-- <a href="generic.html"> -->
						<h2>AIA Financial Indonesia</h2>
						<div class="content">
							<p>AIA Financial merupakan salah satu perusahaan asuransi jiwa terkemuka di Indonesia dan
								merupakan perusahaan asuransi jiwa yang terdaftar dan serta diawasi oleh Otoritas Jasa
								Keuangan. AIA Financial merupakan anak perusahaan dari AIA Group. AIA menawarkan
								berbagai produk asuransi, termasuk asuransi dengan prinsip syariah, yang meliputi
								asuransi jiwa, asuransi kesehatan, asuransi kecelakaan diri, asuransi yang dikaitkan
								dengan investasi, program kesejahteraan karyawan, program pesangon, dan program Dana
								Pensiun (DPLK).</p>
						</div>
						</a>
					</article>
					<article class="style4">
						<span class="image">
							<img src="images/aca.png" alt="" />
						</span>
						<!-- <a href="generic.html"> -->
						<h2>ACA Asuransi</h2>
						<div class="content">
							<p>PT. Asuransi Central Asia (ACA) berdiri pada tanggal 29 Agustus 1956 dengan nama Maskapai
								Asuransi Oriental N.V. Pada tanggal 5 Agustus 1958 nama perusahaan berubah menjadi PT
								Asuransi Central Asia (ACA). Sejak berdiri hingga saat ini, ACA telah memainkan peran
								yang tak terpisahkan dalam pembangunan perekonomian Indonesia. ACA meneruskan tradisi
								selama lebih dari 52 tahun memberikan kontribusi dalam asuransi dan perekonomian
								khususnya asuransi umum.</p>
						</div>
						</a>
					</article>
				</section>
			</div>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<center>
				<div class="inner">
					<section>
						<h2>Hubungi Kami di :</h2>
						<ul class="icons">

							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a>
							</li>
							<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
							<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
					</section>
					<ul class="copyright">
						<li>&copy; Manajemen Asuransi Nelayan</li>
						<li>MAsiN</li>
					</ul>
				</div>
			</center>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/browser.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/breakpoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/util.js"></script>
	<script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>
