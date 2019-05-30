<?php

include "koneksi.php"; 

$namadepan = $_POST["nama_depan"];
$namabelakang = $_POST["nama_belakang"];
$tempatlahir = $_POST["tempat_lahir"];
$tanggallahir = $_POST["tanggal_lahir"];
$alamat = $_POST["alamat"];
$kota = $_POST["kota/kabupaten"];
$provinsi = $_POST["provinsi"];
$kodepos = $_POST["kodepos"];
$telprumah = $_POST["telp_rumah"];
$email = $_POST["email"];
$agama = $_POST["agama"];
$jeniskelamin = $_POST["jenis_kelamin"];
$nohp = $_POST["no_hp"];
$pekerjaan = $_POST["pekerjaan"];
$pilihasuransi = $_POST["pilih_asuransi"];
$jenisid = $_POST["jenis_id"];
$noid = $_POST["no_id"];
$fotodiri = $_POST["foto_diri"];

$insert = $conn-> query("INSERT INTO daftar_asuransi 
                        (nama_depan, nama_belakang, tempat_lahir, tanggal_lahir, alamat, kota, provinsi, kodepos, telp_rumah, email, agama, jenis_kelamin, no_hp, pekerjaan, pilih_asuransi, jenis_id, no_id, foto_diri) 
                        VALUES ('$namadepan','$namabelakang','$tempatlahir','$tanggallahir','$alamat','$kota','$provinsi','$kodepos','$telprumah','','$email','$agama','$jenis_kelamin','$nohp','$pekerjaan','$pilihasuransi','$jenisid','$noid','$fotodiri')
                        ");

if ($insert){
    echo "<script>alert('Berhasil menginput data perusahaan!')</script>";
}
else {
    echo "<script>alert('Gagal menginput data perusahaan!')</script>";
}

?>

<script>
    location.replace("form_pendaftaran_asuransi.php");
</script>