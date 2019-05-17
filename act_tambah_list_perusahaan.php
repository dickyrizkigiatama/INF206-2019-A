<?php

include "koneksi.php"; 

$varGambar = $_POST["image"];
$varJudul = $_POST["judul"];
$varIsi = $_POST["isi"];

$insert = $conn->query("insert into lihat 
                (image, judul, isi) 
                values ('$varGambar','$varJudul','$varIsi')");

if ($insert){
    echo "<script>alert('Berhasil menginput data perusahaan!')</script>";
}
else {
    echo "<script>alert('Gagal menginput data perusahaan!')</script>";
}

?>

<script>
    location.replace("tambah_list_perusahaan.php");
</script>