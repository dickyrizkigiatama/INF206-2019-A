<?php

include "koneksi.php"; 

// $varGambar = $_POST["image"];

$id = $_POST["id"];
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

      $hasil = $conn->query("UPDATE perusahaan SET id='$id',
      gambar='$namafoto', nama='$varJudul', deskripsi='$varIsi', alamat='$varalamat',
      notelp='$varnotelp', syarat1='$var1', syarat2='$var2', syarat3='$var3',
      syarat4='$var4', syarat5='$var5'
      where id = $id ");
      if ($hasil) {
        echo "<script>alert('Berhasil menginput data perusahaan!')</script>";
      }else{
        echo "<script>alert('Gagal menginput data perusahaan!')</script>";
      }
     
    }else{
        $hasil = $conn->query("UPDATE perusahaan SET id='$id',
      nama='$varJudul', deskripsi='$varIsi', alamat='$varalamat',
      notelp='$varnotelp', syarat1='$var1', syarat2='$var2', syarat3='$var3',
      syarat4='$var4', syarat5='$var5'
      where id = $id ");
        if ($hasil) {
            echo "<script>alert('Berhasil menginput data perusahaan tanpa logo!')</script>";
        }else{
            echo "<script>alert('Gagal menginput data perusahaan tanpa foto!')</script>";
        }
    }

   


?>

<script>
    location.replace("edit_detail.php");
</script>