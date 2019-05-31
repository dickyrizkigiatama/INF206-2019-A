<?php
session_start();
include "koneksi.php"; 

// $varGambar = $_POST["image"];
$varJudul = $_POST["nama"];
$varIsi = $_POST["deskripsi"];
$varalamat = $_POST["alamat"];
$varnotelp = $_POST["notelp"];
$var1 = $_POST["syarat1"];
$var2 = $_POST["syarat2"];
$var3 = $_POST["syarat3"];
$var4 = $_POST["syarat4"];
$var5 = $_POST["syarat5"];


$namafoto = $_FILES['gambar']['name'];
$lokasifoto = $_FILES['gambar']['tmp_name'];

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
      move_uploaded_file($lokasifoto, "images/".$namafoto);

      $hasil = $conn->query("INSERT INTO perusahaan 
        (gambar, nama, deskripsi, alamat, notelp, syarat1, syarat2, syarat3, syarat4, syarat5) 
        VALUES ('$namafoto','$varJudul','$varIsi','$varalamat','$varnotelp','$var1','$var2','$var3','$var4','$var5')");
      if ($hasil) {
        echo "<script>alert('Berhasil menginput data perusahaan!')</script>";
      }else{
        echo "<script>alert('Gagal menginput data perusahaan!')</script>";
      }
     
    }else{
        $hasil = $conn->query("INSERT INTO perusahaan 
              (nama, deskripsi, alamat, notelp, syarat1, syarat2, syarat3, syarat4, syarat5) 
              VALUES ($varJudul','$varIsi','$varalamat','$varnotelp','$var1','$var2','$var3','$var4','$var5')");
        if ($hasil) {
            echo "<script>alert('Berhasil menginput data perusahaan tanpa logo!')</script>";
        }else{
            echo "<script>alert('Gagal menginput data perusahaan!')</script>";
        }
    }

   


?>

<script>
    location.replace("tambah_list_perusahaan.php");
</script>