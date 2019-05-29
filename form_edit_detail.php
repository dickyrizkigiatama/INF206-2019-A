<?php
require_once "koneksi.php";
$lihat  = $conn->query("select * from lihat");
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
									<li><a href="list_pendaftar.php">List pendaftaran</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="../../rpl/INF206-2019-A/login">Keluar</a></li>
								</ul>
						</nav>

				<!-- Main -->
					<center>
					<div id="main">
						<div class="inner">
							<img src="<?=$tampil['image']?>" alt="" />
						</div>
					</div>
					</center>

					<!--form edit main-->
					<div id="main">
						<div class="inner">
							<form action="act_ubah_detail_perusahaan.php" method="POST">
								<div class="form-group">
									<label >Logo Perusahaan :</label>
									<input required type="file" class="form-control" placeholder="Enter Nama Perusahaan" value="<?php echo $simpan['image'] ?>"  accept="image/*">
								</div>
								<div class="form-group">
									<label >Nama Perusahaan :</label>
									<input required type="text" class="form-control" placeholder="Enter Nama Perusahaan" value="<?php echo $simpan['judul'] ?>">
								</div>
								<div class="form-group">
										<label >Informasi Umum :</label>
										<input required type="text" class="form-control" placeholder="Enter Informasi Umum" name="isi" value="<?php echo $simpan['isi'] ?>">
									</div>
								<div class="form-group">
									<label >Tujuan Perusahaan Asuransi :</label>
									<input required type="text" class="form-control" placeholder="Enter Tujuan" name="nama" value="<?php echo $simpan['tujuan'] ?>">
								</div>
								<div class="form-group">
									<label >Syarat dan Ketentuan :</label>
									<input required type="text" class="form-control" placeholder="Syarat dan Ketentuan" name="jurusan" value="<?php echo $simpan['sk'] ?>">
								</div>
								<div class="form-group">
										<label >Alamat:</label>
										<input required type="text" class="form-control" placeholder="Alamat terbaru" name="jurusan" value="<?php echo $simpan['alamat'] ?>">
								</div>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</form>
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