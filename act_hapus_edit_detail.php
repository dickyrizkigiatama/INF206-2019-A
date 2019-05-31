<?php
include "koneksi.php";

$id = $_GET["id"];

$delete = $conn->query("DELETE FROM perusahaan WHERE id = '$id'");

if ($delete){
    echo "<script>alert('Berhasil menghapus data perusahaan!')</script>";
}
else {
    echo "<script>alert('Gagal menghapus data perusahaan!')</script>";
}

?>
<script>
    location.replace("edit_detail.php");
</script>