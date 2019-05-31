<!DOCTYPE HTML>
<html>

<head>
	<title>MAsiN</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/assets/css/main.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
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
			<?php if ($user['role'] == "user") : ?>
				<ul>
					<li><a href="#">Beranda</a></li>
					<li><a href="#"><?= $user['username']; ?></a></li>
					<li><a href="<?= base_url('login/logout') ?>">Keluar</a></li>
				</ul>
			<?php elseif ($user['role'] == "admin") : ?>
				<!-- <ul>
						<li><a href="#">Beranda</a></li>
						<li><a href="#"><?= $user['username'];?></a></li>
						<li><a href="#">List pendaftaran</a></li>
						<li><a href="#">Edit</a></li>
						<li><a href="<?= base_url('/login/logout')?>">Keluar</a></li>
					</ul> -->
					<script>
   	 						location.replace("tambah_list_perusahaan.php");
					</script>
			<?php endif; ?>
		</nav>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>
					<center>
					<h1>Selamat Datang di Web MAsiN<br /></h1>
					<h2>Manajemen Asuransi Nelayan <br></h2>
					<p>MAsiN merupakan web mendaftar asuransi untuk nelayan. Web ini mempermudah nelayan mendaftar
						asuransi, mengetahui syarat mendaftar dan lokasi dari berbagai perusahaan penyedia
						jasa asuransi.
					</p>
						<a href="<?= base_url('form_pendaftaran_asuransi.php'); ?>">
							<button type="submit" class="btn btn-outline-light">DAFTAR SEKARANG</button>
						</a>
					</center>
				</header>
				<section class="tiles">
					<?php foreach ($semuaperusahaan as $per) : ?>
						<article class="style">
							<span class="image">
								<a href="<?= base_url('homeuser/detail/' . $per['id']); ?>">
									<img src="<?= base_url('images/' . $per['gambar']); ?>" alt="" />
								</a>
							</span>
							<!-- <a href="generic.html"> -->
							<center>
							<h2><?= $per['nama']; ?></h2>
							</center>
							<!-- <div class="content">
								<p><?= $per['deskripsi']; ?></p>
							</div> -->
							</a>
						</article>
					<?php endforeach; ?>
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