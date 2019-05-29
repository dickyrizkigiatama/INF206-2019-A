<?php
session_start();
require_once "koneksi.php";

$simpan  = $conn->query("select * from lihat");
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
	"style4",
	"style1",
	"style2",
	"style3"

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
									<li><a href="#">Beranda</a></li>
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
						<a href="form_tambah_list_perusahaan.php" class="button primary">Tambah Perusahaan</a>
					</center>
				</header>
				<section class="tiles">
					<?php $i=1;while($tampil=mysqli_fetch_assoc($simpan)):?>
						<article class="<?= $array[$i++];?>">
							<span class="image"><?php echo "
								<a href='edit_detail.php?judul=".$tampil['judul']."'>"; ?>
									<img src="images/<?=$tampil['gambar']?>" alt="" />
								</a>
							</span>
								<h2><?=$tampil['judul']?></h2>
								<div class="content">
									<p><?=$tampil['isi']?></p>
								</div>
							<!-- </a> -->
						</article>
					<?php endwhile;?>
				</section>
			</div>
		</div>

		<!-- <a href='ubah_mahasiswa.php?nim=".$mahasiswa['NIM']."'>Ubah</a>  -->
		
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