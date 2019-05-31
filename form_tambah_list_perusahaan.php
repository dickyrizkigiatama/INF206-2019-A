<?php
session_start();
require_once "koneksi.php";

$simpan  = $conn->query("select * from perusahaan");
$array=array(
	"style1",
	"style2",
	"style3",
	"style4",
	"style5",
	"style6",
	"style2",
	"style3",
	"style1",
	"style5",
	"style6",
	"style4"
);
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>MAsiN</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
									<li><a href="tambah_list_perusahaan.php">Beranda</a></li>
									<li><a href="#">Admin</a></li>
									<li><a href="list_pendaftar.php">List pendaftaran</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="../../rpl/INF206-2019-A/login">Keluar</a></li>
								</ul>
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
							jasa asuransi. </p>
					</center>
				</header>
				<section class="inner">
					<form action="act_tambah_list_perusahaan.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label >Logo Perusahaan *(jpg/png)</label>
							<input required type="file" class="form-control" placeholder="Enter Logo Perusahaan" name="gambar">
						</div><br>
						<div class="form-group">
							<label >Nama Perusahaan</label>
							<input required type="text" class="form-control" placeholder="Enter Nama Perusahaan" name="nama">
						</div><br>
						<div class="form-group">
							<label >Informasi Umum</label>
							<input required type="text" class="form-control" placeholder="Enter Informasi Umum" name="deskripsi">
						</div><br>
						<div class="form-group">
							<label >Alamat</label>
							<input required type="text" class="form-control" placeholder="Enter Alamat Asuransi" name="alamat">
						</div><br>
						<div class="form-group">
							<label >No Telepon</label>
							<input required type="text" class="form-control" placeholder="Enter No Telepon Asuransi" name="notelp">
						</div><br>
						<div class="form-group">
							<label >Syarat 1 :</label>
							<input required type="text" class="form-control" placeholder="Enter Syarat" name="syarat1">
						</div><br>
						<div class="form-group">
							<label >Syarat 2 :</label>
							<input type="text" class="form-control" placeholder="Enter Syarat Jika Ada" name="syarat2">
						</div><br>
						<div class="form-group">
							<label >Syarat 3:</label>
							<input type="text" class="form-control" placeholder="Enter Syarat Jika Ada" name="syarat3">
						</div><br>
						<div class="form-group">
							<label >Syarat 4:</label>
							<input type="text" class="form-control" placeholder="Enter Syarat Jika Ada" name="syarat4">
						</div><br>
						<div class="form-group">
							<label >Syarat 5:</label>
							<input type="text" class="form-control" placeholder="Enter Syarat Jika Ada" name="syarat5">
						</div>
						<br>
						<center>
						<button type="submit" class="btn btn-primary">Tambah</button>
						</center>
					</form>
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
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>