<?php
require_once "koneksi.php";
$id = $_GET['id'];

$lihat  = $conn->query("select * from perusahaan where id = $id");
$simpan = $lihat->fetch_assoc();
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
									<li><a href="edit_detail">Edit</a></li>
									<li><a href="../../rpl/INF206-2019-A/login">Keluar</a></li>
								</ul>
						</nav>

				<!-- Main -->
					<center>
					<div id="main">
						<div class="inner">
						
								<h1>Edit Detail Perusahaan Asuransi MasiN<br /></h1>
								<h2>Manajemen Asuransi Nelayan</h2>
						
							<!-- <img src="<?=$tampil['image']?>" alt="" /> -->
						</div>
					</div>
					</center>
					
					<!--form edit main-->
					<div id="main">
						<div class="inner">
							<form action="act_ubah_detail_perusahaan.php" method="POST" enctype="multipart/form-data">
								
									<input type="hidden" class="form-control" placeholder="Enter Logo Perusahaan" hidden name="id" value="<?php echo $simpan['id'] ?>">

								<div class="form-group">
									<label >Logo Perusahaan *(jpg/png)</label>
									<input type="file" class="form-control" placeholder="Enter Logo Perusahaan" name="gambar" value="<?php echo $simpan['gambar'] ?>" >
								</div><br>
								<div class="form-group">
									<label >Nama Perusahaan</label>
									<input required type="text" class="form-control" placeholder="Enter Nama Perusahaan" name="nama" value="<?php echo $simpan['nama'] ?>">
								</div><br>
								<div class="form-group">
									<label >Informasi Umum</label>
									<input required type="text" class="form-control" placeholder="Enter Informasi Umum" name="deskripsi" value="<?php echo $simpan['deskripsi'] ?>">
								</div><br>
								<div class="form-group">
									<label >Alamat</label>
									<input required type="text" class="form-control" placeholder="Enter Alamat Asuransi" name="alamat" value="<?php echo $simpan['alamat'] ?>">
								</div><br>
								<div class="form-group">
									<label >No Telepon</label>
									<input required type="text" class="form-control" placeholder="Enter No Telepon Asuransi" name="notelp" value="<?php echo $simpan['notelp'] ?>">
								</div><br>
								<div class="form-group">
									<label >Syarat 1 :</label>
									<input required type="text" class="form-control" placeholder="Enter Syarat" name="syarat1" value="<?php echo $simpan['syarat1'] ?>">
								</div><br>
								<div class="form-group">
									<label >Syarat 2 :</label>
									<input type="text" class="form-control" placeholder="Enter Syarat Jika Ada" name="syarat2"  value="<?php echo $simpan['syarat2'] ?>">
								</div><br>
								<div class="form-group">
									<label >Syarat 3:</label>
									<input type="text" class="form-control" placeholder="Enter Syarat Jika Ada" name="syarat3"  value="<?php echo $simpan['syarat3'] ?>">
								</div><br>
								<div class="form-group">
									<label >Syarat 4:</label>
									<input type="text" class="form-control" placeholder="Enter Syarat Jika Ada" name="syarat4"  value="<?php echo $simpan['syarat4'] ?>">
								</div><br>
								<div class="form-group">
									<label >Syarat 5:</label>
									<input type="text" class="form-control" placeholder="Enter Syarat Jika Ada" name="syarat5"  value="<?php echo $simpan['syarat5'] ?>">
								</div>
								<br>
								<center>
								<button type="submit" class="btn btn-primary">ubah</button>
								</center>
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