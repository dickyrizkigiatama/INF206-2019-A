<?php
session_start();
require_once "koneksi.php";
$judul = $_GET['judul'];

$simpan = $conn->query("SELECT * FROM lihat WHERE judul = $judul ");
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
								<ul>
									<li><a href="#">Beranda</a></li>
									<li><a href="#">Admin</a></li>
									<li><a href="#">List pendaftaran</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="../../rpl/INF206-2019-A/login">Keluar</a></li>
								</ul>
						</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
								<center>
								<a href="form_edit_detail.php" class="button primary">Ubah</a>
								
									<img src="images/<?=$simpan['gambar']?>" alt="" /><br>
								</center>
								<div class="form-group">
                    <label >Nama</label>
                    <input required type="text" class="form-control" placeholder="Enter Name" name="judul" value="<?php echo $simpan['judul'] ?>">
                </div>
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