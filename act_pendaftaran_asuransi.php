<?php
session_start();
include "koneksi.php"; 

// $varGambar = $_POST["image"];
$varnama = $_POST["nama"];
$varemail = $_POST["email"];
$varalamat = $_POST["alamat"];
$varagama = $_POST["agama"];
$varttl = $_POST["ttl"];
$varjk = $_POST["jk"];
$varnohp = $_POST["nohp"];
$varpekerjaan = $_POST["pekerjaan"];
$varasuransi = $_POST["asuransi"];
$varnik = $_POST["nik"];

$namafoto = $_FILES['foto']['name'];
$lokasifoto = $_FILES['foto']['tmp_name'];

// $insert = $conn->query("insert into lihat 
//                 (image, judul, isi) 
//                 values ('$varGambar','$varJudul','$varIsi')");

// if ($insert){
//     echo "<script>alert('Berhasil menginput data perusahaan!')</script>";
// }
// else {
//     echo "<script>alert('Gagal menginput data perusahaan!')</script>";
// }


//jika foto dirubah
    if (!empty($lokasifoto)) {
      move_uploaded_file($lokasifoto, "images/Pendaftar/".$namafoto);

      $hasil = $conn->query("INSERT INTO pendaftar 
        (nama, email, alamat, agama, ttl, jk, nohp, pekerjaan, asuransi, nik, foto) 
        VALUES ('$varnama','$varemail','$varalamat','$varagama','$varttl','$varjk','$varnohp','$varpekerjaan',
        '$varasuransi','$varnik','$namafoto')");
      if ($hasil) {
        echo "<script>alert('Anda berhasil terdaftar pada perusahaan!')</script>";
      }else{
        echo "<script>alert('Anda gagal terdaftar pada perusahaan')</script>";
      }
     
    }else{
        $hasil = $conn->query("INSERT INTO pendaftar 
        (nama, email, alamat, agama, ttl, jk, nohp, pekerjaan, asuransi, nik) 
        VALUES ('$varnama','$varemail','$varalamat','$varagama','$varttl','$varjk','$varnohp','$varpekerjaan',
        '$varasuransi','$varnik')");
        if ($hasil) {
            echo "<script>alert('Anda berhasil terdaftar pada perusahaan! tanpa foto!')</script>";
        }else{
            echo "<script>alert('Gagal menginput data perusahaan!')</script>";
        }
    }

   


?>

<script>
    location.replace("profil.php");
</script>