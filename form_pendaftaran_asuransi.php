<?php
require_once "koneksi.php";
$lihat  = $conn->query("SELECT * FROM lihat");
// $lihat ubah menjadi $simpan
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Formulir Pendaftaran Asuransi</title>
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
                            <li><a href="<?= base_url('/login/logout')?>">Keluar</a></li>
                        </ul>
                        <?php elseif($user['role'] == "admin") : ?>
                            <ul>
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#"><?= $user['username'];?></a></li>
                                <li><a href="#">List pendaftaran</a></li>
                                <li><a href="#">Edit</a></li>
                                <li><a href="<?= base_url('/login/logout')?>">Keluar</a></li>
                            </ul>
                    <?php endif;?>
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
							<form method="post" action="#">
                                <div class="row gtr-uniform">
                                    <div class="col-6 col-12-xsmall">
                                        <h4>Nama Depan :</h4>
                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Nama depan" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Nama Belakang :</h4>
                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Nama belakang" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Tempat Lahir :</h4>
                                        <input type="text" name="demo-tempatlahir" id="demo-name" value="" placeholder="Tempat lahir" />
                                    </div>
                                    
                                    <div class="col-6 col-12-xsmall">
                                        <h4>Tanggal Lahir :</h4>
                                        <input type="date" name="demo-name" id="demo-name" value="" placeholder="Tanggal lahir" />
                                    </div>
                                    
                                    <div class="col-6 col-12-xsmall">
                                        <h4>Alamat :</h4>
                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Alamat" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Kota/Kabupaten :</h4>
                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Kota/Kabupaten" />
                                    </div>

                                    <div class="col-12">
                                        <h4>Provinsi :</h4>
                                        <select name="demo-category" id="demo-category">
                                            <option value="">- Pilih Provinsi -</option>
                                            <option value="1">Aceh</option>
                                            <option value="1">Bali</option>
                                            <option value="1">Banten</option>
                                            <option value="1">Bengkulu</option>
                                            <option value="1">Gorontalo</option>
                                            <option value="1">Jakarta</option>
                                            <option value="1">Jambi</option>
                                            <option value="1">Jawa Barat</option>
                                            <option value="1">Jawa Tengah</option>
                                            <option value="1">Jawa Timur</option>
                                            <option value="1">Kalimantan Barat</option>
                                            <option value="1">Kalimantan Selatan</option>
                                            <option value="1">Kalimantan Tengah</option>
                                            <option value="1">Kalimantan Timur</option>
                                            <option value="1">Kalimantan Utara</option>
                                            <option value="1">Kepulauan Bangka Belitung</option>
                                            <option value="1">Kepulauan Riau</option>
                                            <option value="1">Lampung</option>
                                            <option value="1">Maluku</option>
                                            <option value="1">Maluku Utara</option>
                                            <option value="1">Nusa Tenggara Barat</option>
                                            <option value="1">Nusa Tenggara Timur</option>
                                            <option value="1">Papua</option>
                                            <option value="1">Papua Barat</option>
                                            <option value="1">Riau</option>
                                            <option value="1">Sulawesi Barat</option>
                                            <option value="1">Sulawesi Selatan</option>
                                            <option value="1">Sulawesi Tengah</option>
                                            <option value="1">Sulawesi Tenggara</option>
                                            <option value="1">Sulawesi Utara</option>
                                            <option value="1">Sumatera Barat</option>
                                            <option value="1">Sumatera Selatan</option>
                                            <option value="1">Sumatera Utara</option>
                                            <option value="1">Yogyakarta</option>
                                            
                                        </select>
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Kode Pos : </h4>
                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Kode pos" />
                                    </div>
                                    
                                    <div class="col-6 col-12-xsmall">
                                        <h4>No Telepon Rumah :</h4>
                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Email :</h4>
                                        <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                    <h4>Agama :</h4>
                                        <select name="agama" id="" size="1">
                                            <option value="">- Pilih Agama -</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="budha">Budha</option>
                                        </select> 
                                    </div>
                                    
                                    <div class="col-4">
                                    <h4>Jenis kelamin :</h4>
                                        <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                        <label for="demo-priority-low">Laki-Laki</label>

                                        <input type="radio" id="demo-priority-normal" name="demo-priority">
                                        <label for="demo-priority-normal">Perempuan</label>
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                    <h4>No.HP :</h4>
                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="08xxxxxxxxxx" />
                                    </div>
                                    
                                    <div class="col-6 col-12-xsmall">
                                    <h4>Pekerjaan :</h4>
                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Nelayan" />
                                    </div>
                                    
                                    <div class="col-12">
                                        <select name="demo-category" id="demo-category">
                                            <option value="">- Pilih Asuransi Terbaikmu -</option>
                                            <option value="1">Asuransi Sinarmas</option>
                                            <option value="1">BPJS Ketenagakerjaan</option>
                                            <option value="1">AXA Mandiri Insurance</option>
                                            <option value="1">Allianz Life Indonesia</option>
                                            <option value="1">Aspan General Insurance</option>
                                            <option value="1">Asuransi Jiwasraya</option>
                                            <option value="1">Asuransi Tri Pakarta</option>
                                            <option value="1">Bumiputera 1912</option>
                                            <option value="1">Prudential Insurance</option>
                                            <option value="1">AIA Financial Indonesia</option>
                                            <option value="1">ACA Asuransi</option>
                                        </select>
                                    </div>

                                    <div class="col-4">
                                    <h4>Jenis Identitas :</h4>
                                        <input type="radio" id="demo-priority-low" name="demo-priority">
                                        <label for="demo-priority-low">KTP</label>

                                        <input type="radio" id="demo-priority-normal" name="demo-priority">
                                        <label for="demo-priority-normal">Passport</label>

                                        <input type="radio" id="demo-priority-low" name="demo-priority">
                                        <label for="demo-priority-low">SIM</label>
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                    <h4>NIK :</h4>
                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Nomor Induk Kependudukan" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                    <h4>Foto Diri :</h4>
                                        <input type="file" name="demo-name" id="demo-name" value="" />
                                    </div>

                                </div>
                            </form>
                        </div>
                        <center>
                            <div class="inner">
                                <span class="actions">
                                    <input type="submit" value="Daftar" class="primary" />
                                    <a href="form_pendaftaran_asuransi.php"><input type="reset" value="Reset" /></a>
                                </span>
                            </div>
                        </center>
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
