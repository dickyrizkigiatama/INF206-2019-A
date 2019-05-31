<?php
include "koneksi.php";

$id_asuransi = $_GET["id_asuransi"];

$delete = $conn->query("DELETE FROM pendaftar WHERE id_asuransi = '$id_asuransi'");

if ($delete){
    echo "<script>alert('Berhasil menghapus data pendaftar!')</script>";
}
else {
    echo "<script>alert('Gagal menghapus data pendaftar!')</script>";
}

?>
<script>
    location.replace("list_pendaftar.php");
</script>