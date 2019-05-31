<!DOCTYPE HTML>
<html>

<head>
	<title>Detail Perusahaan</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="<?= base_url() ?>assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="inner">
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
			<ul>
				<li><a href="../">Beranda</a></li>
				<li><a href="<?= base_url('login/logout') ?>">Keluar</a></li>	
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				
				<center>
				<h1><?= $perusahaan['nama'] ?></h1>
				<!-- <div class="title">
				<a href="#" class="logo">
					<span class="symbol">
					<img src="<?= base_url('images/' . $perusahaan['gambar']) ?>" alt="" />
					</span>
				</a>
				</div> -->
				</center>
				<h4>Deskripsi & Tujuan Perusahaan</h4>
				<p><?= $perusahaan['deskripsi'] ?></p>
				<h4>Syarat dan Ketentuan :</h4>
				<p><?= $perusahaan['syarat1'] ?></p>
				<p><?= $perusahaan['syarat2'] ?></p>
				<p><?= $perusahaan['syarat3'] ?></p>
				<p><?= $perusahaan['syarat4'] ?></p>
				<p><?= $perusahaan['syarat5'] ?> </p>
				<br>
				<h4>Alamat :</h4>
				<p><?= $perusahaan['alamat'] ?></p>
				<br>
				<h4>No Telp :</h4>
				<p><?= $perusahaan['notelp'] ?> </p>
				
				<center>
					<a href="../../form_pendaftaran_asuransi.php" class="button primary">Daftar Asuransi</a><br>
					<a href="../" class="button">Kembali ke Beranda</a>
				</center>
			</div>
		</div>
		
		

		<!-- Footer -->
		<footer id="footer">
			<center>
				<div class="inner">
					<section>
						<h2>Follow</h2>
						<ul class="icons">
							<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
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
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/js/browser.min.js"></script>
	<script src="<?= base_url() ?>assets/js/breakpoints.min.js"></script>
	<script src="<?= base_url() ?>assets/js/util.js"></script>
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>