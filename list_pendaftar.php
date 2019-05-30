<?php
require_once "koneksi.php";
$lihat  = $conn->query("select * from lihat");
// $lihat ubah menjadi $simpan
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>List Pendaftar Asuransi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    
	<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
            <div class="preloader-spinner">
                <div class="loader-content">
                    <img src="assets/images/preloader.gif" alt="JSOFT">
                </div>
            </div>
        </div>
        <!--== Preloader Area End ==-->

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
				<header>
					<center>
						<h1>Pendaftar Asuransi MasiN<br /></h1>
						<h2>Manajemen Asuransi Nelayan <br></h2>
                    </center>
                    <br><br>
                </header>
                    <section><center>
							<h3>Table Pendaftar Asuransi</h3>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tempat, Tanggal Lahir</th>
                                                <th>Pekerjaan</th>
                                                <th>Alamat</th>
                                                <th>Kode Pos</th>
                                                <th>Kota/Kabupaten</th>
                                                <th>Nomor HP</th>
                                                <th>Alamat E-mail</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Anggi</td>
                                                    <td>Banda Aceh, 29/9/1999</td>
                                                    <td>mahasiswa</td>
                                                    <td>Peniti</td>
                                                    <td>-</td>
                                                    <td>banda Aceh</td>
                                                    <td>082360164696</td>
                                                    <td>anggi@gmail.com</td>
												</tr>
												<tr>
                                                <td>2</td>
													<td>Anggi</td>
                                                    <td>Banda Aceh, 29/9/1999</td>
                                                    <td>mahasiswa</td>
                                                    <td>Peniti</td>
                                                    <td>-</td>
                                                    <td>banda Aceh</td>
                                                    <td>082360164696</td>
                                                    <td>anggi@gmail.com</td>
												</tr>
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
