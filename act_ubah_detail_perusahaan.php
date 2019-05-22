<?php

include "koneksi.php"; 

$Logo = $_POST["image"];
$Judul = $_POST["judul"];
$Isi = $_POST["isi"];
$Tujuan = $_POST["tujuan"];
$Sk = $_POST["sk"];
$Alamat = $_POST["alamat"];

$insert = $conn->query("UPDATE lihat SET image='$Logo', judul='$Judul', isi='$Isi', tujuan='$Tujuan', sk='$Sk', alamat='$Alamat' WHERE judul=$Judul ");

if ($insert){
    echo "<script>alert('Berhasil mengubah data perusahaan!')</script>";
}
else {
    echo "<script>alert('Gagal mengubah data perusahaan!')</script>";
}

?>

<script>
    location.replace("edit_detail.php");
</script>