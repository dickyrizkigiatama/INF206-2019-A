
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
						<h1>Formulir Pendaftaran Asuransi<br /></h1>
						<h3>Manajemen Asuransi Nelayan <br></h3>
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
                                        <input type="text" name="nama_depan" id="demo-name" value="" placeholder="Nama depan" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Nama Belakang :</h4>
                                        <input type="text" name="nama_belakang" id="demo-name" value="" placeholder="Nama belakang" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Tempat Lahir :</h4>
                                        <input type="text" name="tempat_tempatlahir" id="demo-name" value="" placeholder="Tempat lahir" />
                                    </div>
                                    
                                    <div class="col-6 col-12-xsmall">
                                        <h4>Tanggal Lahir :</h4>
                                        <input type="date" name="tanggal_lahir" id="demo-name" value="" placeholder="Tanggal lahir" />
                                    </div>
                                    
                                    <div class="col-6 col-12-xsmall">
                                        <h4>Alamat :</h4>
                                        <input type="text" name="alamat" id="demo-name" value="" placeholder="Alamat" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Kota/Kabupaten :</h4>
                                        <input type="text" name="kota" id="demo-name" value="" placeholder="Kota/Kabupaten" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Provinsi :</h4>
                                        <select name="provinsi" id="demo-category">
                                            <option value="">- Pilih Provinsi -</option>
                                            <option value="aceh">Aceh</option>
                                            <option value="bali">Bali</option>
                                            <option value="banten">Banten</option>
                                            <option value="bengkulu">Bengkulu</option>
                                            <option value="gorontalo">Gorontalo</option>
                                            <option value="jakarta">Jakarta</option>
                                            <option value="jambi">Jambi</option>
                                            <option value="jabar">Jawa Barat</option>
                                            <option value="jateng">Jawa Tengah</option>
                                            <option value="jatim">Jawa Timur</option>
                                            <option value="kalbar">Kalimantan Barat</option>
                                            <option value="kalsel">Kalimantan Selatan</option>
                                            <option value="kalteng">Kalimantan Tengah</option>
                                            <option value="kaltim">Kalimantan Timur</option>
                                            <option value="kalut">Kalimantan Utara</option>
                                            <option value="belitung">Kepulauan Bangka Belitung</option>
                                            <option value="kriau">Kepulauan Riau</option>
                                            <option value="lampung">Lampung</option>
                                            <option value="maluku">Maluku</option>
                                            <option value="maluku utara">Maluku Utara</option>
                                            <option value="ntb">Nusa Tenggara Barat</option>
                                            <option value="ntt">Nusa Tenggara Timur</option>
                                            <option value="papua">Papua</option>
                                            <option value="papua barat">Papua Barat</option>
                                            <option value="riau">Riau</option>
                                            <option value="sulbar">Sulawesi Barat</option>
                                            <option value="sulsel">Sulawesi Selatan</option>
                                            <option value="sultengah">Sulawesi Tengah</option>
                                            <option value="sultenggara">Sulawesi Tenggara</option>
                                            <option value="sulutara">Sulawesi Utara</option>
                                            <option value="sumbar">Sumatera Barat</option>
                                            <option value="sumsel">Sumatera Selatan</option>
                                            <option value="sumut">Sumatera Utara</option>
                                            <option value="yogya">Yogyakarta</option>
                                            
                                        </select>
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Kode Pos : </h4>
                                        <input type="text" name="kodepos" id="demo-name" value="" placeholder="Kode pos" />
                                    </div>
                                    
                                    <div class="col-6 col-12-xsmall">
                                        <h4>No Telepon Rumah :</h4>
                                        <input type="text" name="telp_rumah" id="demo-name" value="" placeholder="" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                        <h4>Email :</h4>
                                        <input type="email" name="email" id="demo-email" value="" placeholder="Email" />
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
                                    
                                    <div class="col-6">
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
                                        <input type="text" name="pekerjaan" id="demo-name" value="" placeholder="Nelayan" />
                                    </div>
                                    
                                    <div class="col-12">
                                        <select name="pilih_asuransi" id="demo-category">
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

                                    <div class="col-6">
                                    <h4>Jenis Identitas :</h4>
                                        <input type="radio" id="demo-priority-low" name="demo-priority">
                                        <label for="demo-priority-low">KTP</label>

                                        <input type="radio" id="demo-priority-normal" name="demo-priority">
                                        <label for="demo-priority-normal">Passport</label>

                                        <input type="radio" id="demo-priority-low" name="demo-priority">
                                        <label for="demo-priority-low">SIM</label>
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                    <h4>No Identitas :</h4>
                                        <input type="text" name="no_id" id="demo-name" value="" placeholder="Nomor Induk Kependudukan" />
                                    </div>

                                    <div class="col-6 col-12-xsmall">
                                    <h4>Foto Diri :</h4>
                                        <input type="file" name="foto_diri" id="demo-name" value="" />
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
