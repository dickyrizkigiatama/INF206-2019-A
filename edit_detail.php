<?php
require_once "koneksi.php";
$lihat  = $conn->query("select * from perusahaan");
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
									<li><a href="tambah_list_perusahaan.php">Beranda</a></li>
									<li><a href="#">Admin</a></li>
									<li><a href="list_pendaftar.php">List pendaftaran</a></li>
									<li><a href="#">Edit</a></li>
									<li><a href="../../rpl/INF206-2019-A/login">Keluar</a></li>
								</ul>
						</nav>

    <!-- Main -->
		<div id="main">
			<div>
				<header>
					<center>
						<h1>Daftar Perusahaan Asuransi MasiN<br /></h1>
						<h2>Manajemen Asuransi Nelayan <br></h2>
                    </center>
                    <br><br>
                </header>
                    <section><center>
							<h3>Table Perusahaan Asuransi</h3>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
                                                <th><center>No</center></th>
                                                <th><center>Nama Perusahaan</center></th>
                                                <th><center>Deskripsi</center></th>
                                                <th><center>Alamat</center></th>
                                                <th><center>No Telepon</center></th>
                                                <th><center>Syarat 1</center></th>
                                                <th><center>Syarat 2</center></th>
                                                <th><center>Syarat 3</center></th>
                                                <th><center>Syarat 4</center></th>
                                                <th><center>Syarat 5</center></th>
                                                <th><center>Logo Perusahaan</center></th>
                                                <th><center>Edit</center></th>
												</tr>
											</thead>
											<tbody>
                                                <?php
                                                $no = 1;
                                                while ($pendaftar = $lihat->fetch_assoc()){
                                                echo "
												<tr>
													<td><center>".$no."</center></td>
													<td><center>".$pendaftar['nama']."</center></td>
                                                    <td><center>".$pendaftar['deskripsi']."</center></td>
                                                    <td><center>".$pendaftar['alamat']."</center></td>
                                                    <td><center>".$pendaftar['notelp']."</center></td>
                                                    <td><center>".$pendaftar['syarat1']."</center></td>
                                                    <td><center>".$pendaftar['syarat2']."</center></td>
                                                    <td><center>".$pendaftar['syarat3']."</center></td>
                                                    <td><center>".$pendaftar['syarat4']."</center></td>
                                                    <td><center>".$pendaftar['syarat5']."</center></td>
                                                    <td><center>".$pendaftar['gambar']."</center></td>
                                                    <td><center><a href='form_edit_detail.php?id=".$pendaftar['id']."'>Ubah</a> | <a href='act_hapus_edit_detail.php?id=".$pendaftar['id']."'>Hapus</a></center></td>
                                                </tr>
                                                ";
                                                $no++;
                                                }
                                                ?>
											</tbody>
											<!-- <tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot> -->
										</table>
                                    </div>
                                </div></center>
                        </section>		
                    </div

    <!--== Tabel Pendaftar Asuransi Start ==-->
    <!-- <br><br>
    <section id="pricing-page-area" class="secpad section-padding">
        <div class="container con">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    
                    </div>
                    <br><br>
                </div>
                <table class="table">
                    <thead class=" thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tempat, Tanggal Lahir</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kode Pos</th>
                            <th scope="col">Kota/Kabupaten</th>
                            <th scope="col">Nomor HP</th>
                            <th scope="col">Alamat E-mail</th>
                        </tr>
                </table>
                <br><br>
            </div>
        </div>
    </section> -->
    <!--== Tabel Pendaftar Asuransi End ==-->

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