<?php
require_once "koneksi.php";
$lihat = $conn->query("select * from lihat");
// $lihat ubah menjadi $simpan
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Detail Perusahaan Asuransi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
								<center>
								<a href="form_edit_detail.php" class="button primary">Ubah</a>
									<img src="<?=$simpan['image']?>" alt="" /><br>
								</center>
								<h2><?=$simpan['judul']?></h2>
								<p><?=$simpan['isi']?></p>
								<p><?=$simpan['tujuan']?></p>
								<p><?=$simpan['sk']?></p>
								<p>Alamat :</p>
								<p><?=$simpan['alamat']?></p>
						</div>
					</div>
					
				<!-- Footer -->
					<footer id="footer">
						<center><div class="inner">
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
								<li>&copy; Manajemen Asuransi Nelayan</li><li>MAsiN</li>
							</ul>
						</div></center>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>