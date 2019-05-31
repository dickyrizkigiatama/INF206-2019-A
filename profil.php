<?php
session_start();
require_once "koneksi.php";
$lihat  = $conn->query("select * from pendaftar ");
// $lihat ubah menjadi $simpan
?>
<!doctype html>
<html lang="en">

<head>
		<title>Detail Perusahaan Asuransi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>


<body>
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
                    <li><input type="button" onclick="window.print()" value="Cetak Formulir Pendaftaran" class="btn btn-block btn-primary" id="btn-print" /></li>
                    <li><a href="login">Keluar</a></li>	
                </ul>
            </nav>

                    <!--form edit main-->
					<div id="main"  id="print-area-2">
						<div class="inner">
                        <center>
						<h1>Profil Diri Anda<br /></h1>
						<h2>Manajemen Asuransi Nelayan</h2>
					    </center>
                        <div class="row">
                            <div class="col-12">
                                <table class="table">
                                    <!-- <tr>
                                        <td>Foto</td>
                                        <td><span><img src="images/Pendaftar/.$data['foto']." alt="" /></span></td>
                                    </tr> -->
                                    <?php
                                        $data = $lihat->fetch_assoc();
                                        echo "
                                    <tr>
                                        <td>ID Pendaftaran</td>
                                        <td><center>".$data['id_asuransi']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td><center>".$data['nama']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><center>".$data['email']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td><center>".$data['alamat']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td><center>".$data['agama']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat/Tanggal Lahir</td>
                                        <td><center>".$data['ttl']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td><center>".$data['jk']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>No HP</td>
                                        <td><center>".$data['nohp']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan</td>
                                        <td><center>".$data['pekerjaan']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>Asuransi Terdaftar</td>
                                        <td><center>".$data['asuransi']."</center></td>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <td><center>".$data['nik']."</center></td>
                                    </tr>
                                    ";
                                    ?>
                                </table>

                                <p><strong>Perhatian :</strong></p>
                                <ul class="text-justify">
                                    <li>Dengan mendaftar, berarti anda telah setuju terhadap seluruh syarat & ketentuan perusahaan asuransi</li>
                                    <li>Syarat & ketentuan dapat berubah sewaktu-waktu</li>
                                    <li>Jika terjadi salah penginputan data sewaktu mendaftar, harap menghubungi call center MAsiN</li>

                                </ul>
                                <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
                                <!-- <a class="no-print btn btn-sm btn-warning" href="javascript:printDiv('print-area-2');" ><span class="glyphicon glyphicon-print"></span> Print</a> -->
                                <center>
                                <input type="button" onclick="window.print()" value="Cetak Formulir Pendaftaran" class="btn btn-block btn-primary" id="btn-print" />
                                </center>
                        </div>
                    </div>
                </div>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>js/popper.min.js"></script>
            <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>js/qrcode.min.js"></script>

            <script type="text/javascript">
                new QRCode(document.getElementById("qrCode"), "<?= base_url('index.php/home/customer/') . $data['id'] ?>");


                window.onafterprint = function(event) {
                    window.open("<?= base_url('index.php/customer') ?>")
                };

            </script>

            <script type="text/javascript">
                
                function printDiv(elementId) {
                var a = document.getElementById('print-area-2').value;
                var b = document.getElementById(elementId).innerHTML;
                window.frames["print_frame"].document.title = document.title;
                window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
                window.frames["print_frame"].window.focus();
                window.frames["print_frame"].window.print();
            }
            </script>
</body>

</html>