<?php
session_start();
require_once "koneksi.php";
$lihat  = $conn->query("select * from pendaftar");
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
                        <li><a href="../">Beranda</a></li>
                        <li><a href="login">Keluar</a></li>	
                    </ul>
                </nav>

				<!-- Main -->
					<center>
					<div id="main">
						<div class="inner">
                        <header>
					    <center>
						<h1>Selamat Datang di Pendaftaran Asuransi MasiN<br /></h1>
						<h2>Manajemen Asuransi Nelayan <br></h2>
					    </center>
				        </header>
						</div>
					</div>
					</center>

					<!--form edit main-->
					<div id="main">
						<div class="inner">
							<form action="act_pendaftaran_asuransi.php" method="POST" enctype="multipart/form-data">
                                <div class="row gtr-uniform">
                                    <div class="col-6 col-12-xsmall">
                                    <h4>Nama :</h4>
                                        <input required type="text" name="nama" class="form-control" placeholder="Nama" />
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                    <h4>Email :</h4>
                                        <input required type="email" name="email" class="form-control" placeholder="Email" />
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                    <h4>Alamat :</h4>
                                        <input required type="text" name="alamat" class="form-control" placeholder="Alamat" />
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                    <h4>Agama :</h4>
                                        <input required type="text" name="agama" class="form-control" placeholder="Agama" />
                                    </div>
                                    
                                    <div class="col-6 col-12-xsmall">
                                    <h4>Tanggal Lahir :</h4>
                                        <input required type="date" name="ttl" class="form-control" placeholder="Alamat" />
                                    </div>
                                    
                                    <div class="col-4">
                                    <h4>Jenis kelamin :</h4>
                                        <span>
                                            <input required type="radio" id="demo-priority-low" value="Laki-Laki" name="jk" checked />
                                            <label for="demo-priority-low">Laki-Laki</label>
                                        </span>
                                        <span>
                                            <input required type="radio" id="demo-priority-normal" value="Perempuan" name="jk" />
                                            <label for="demo-priority-normal">Perempuan</label>
                                        </span>    
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                    <h4>No.HP :</h4>
                                        <input required type="text" name="nohp" class="form-control" placeholder="08xxxxxxxxxx" />
                                    </div>
                                    
                                    <div class="col-6 col-12-xsmall">
                                    <h4>Pekerjaan :</h4>
                                        <input required type="text" name="pekerjaan" class="form-control" placeholder="Nelayan" />
                                    </div>
                                    
                                    <div class="col-12">
                                        <select required name="asuransi" id="asuransi">
                                            <option value="">- Pilih Asuransi Terbaikmu -</option>
                                            <option value="Asuransi Sinarmas1">Asuransi Sinarmas</option>
                                            <option value="BPJS Ketenagakerjaan">BPJS Ketenagakerjaan</option>
                                            <option value="AXA Mandiri Insurance">AXA Mandiri Insurance</option>
                                            <option value="Allianz Life Indonesia">Allianz Life Indonesia</option>
                                            <option value="Aspan General Insurance">Aspan General Insurance</option>
                                            <option value="Asuransi Jiwasraya">Asuransi Jiwasraya</option>
                                            <option value="Asuransi Tri Pakarta">Asuransi Tri Pakarta</option>
                                            <option value="Bumiputera 1912">Bumiputera 1912</option>
                                            <option value="Prudential Insurance">Prudential Insurance</option>
                                            <option value="AIA Financial Indonesia">AIA Financial Indonesia</option>
                                            <option value="ACA Asuransi">ACA Asuransi</option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                    <h4>NIK :</h4>
                                        <input required type="text" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                    <h4>Foto Diri :</h4>
                                        <input required type="file" name="foto" id="demo-name" value="" />
                                    </div>
                                </div><br><br>
                                <center>
                                    <div class="inner">
                                        <span class="actions">
                                            <input type="submit" value="Daftar" class="primary" />
                                            <a href="form_pendaftaran_asuransi.php"><input type="reset" value="Reset" /></a>
                                        </span><br><br>
                                        <a href="homeuser" class="button">Kembali ke Beranda</a>
                                    </div>
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