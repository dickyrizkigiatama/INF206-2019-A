<?php
session_start();
include "koneksi.php"; 

// $varGambar = $_POST["image"];
$varJudul = $_POST["nama"];
$varIsi = $_POST["deskripsi"];

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
                                (gambar, nama, deskripsi) 
                                VALUES ('$namafoto','$varJudul','$varIsi')");
      if ($hasil) {
        echo "<script>alert('Berhasil menginput data perusahaan!')</script>";
      }else{
        echo "<script>alert('Gagal menginput data perusahaan!')</script>";
      }
     
    }else{
        $hasil = $conn->query("INSERT INTO perusahaan 
                                (nama, deskripsi) 
                                VALUES ($varJudul','$varIsi')");
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