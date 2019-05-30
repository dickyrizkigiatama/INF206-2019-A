<?php
    $DB_NAME = 'masin';
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASS = '';
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    if (mysqli_connect_errno($conn)) {
        echo "Failed to connect to mySQL: " . mysqli_connect_error();
    }

    date_default_timezone_set("Asia/Jakarta");

function daftarAsuransi(){
    global $koneksi;
    $namadepan = htmlspecialchars($data["nama_depan"]);
    $namabelakang = htmlspecialchars($data["nama_belakang"]);
    $tempatlahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggallahir = htmlspecialchars($data["tanggal_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota/kabupaten"]);
    $provinsi = htmlspecialchars($data["provinsi"]);
    $kodepos = htmlspecialchars($data["kodepos"]);
    $telprumah = htmlspecialchars($data["telp_rumah"]);
    $email = htmlspecialchars($data["email"]);
    $agama = htmlspecialchars($data["agama"]);
    $jeniskelamin = htmlspecialchars($data["jenis_kelamin"]);
    $nohp = htmlspecialchars($data["no_hp"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan"]);
    $pilihasuransi = htmlspecialchars($data["pekerjaan"]);
    $jenisid = htmlspecialchars($data["jenis_id"]);
    $noid = htmlspecialchars($data["no_id"]);
    $fotodiri = htmlspecialchars($data["foto_diri"]);

    $foto_diri = upload();
    if (!$foto_diri){
        return false;
    }

    $query = "INSERT INTO daftar_asuransi VALUES ('$namadepan','$belakang','$tempatlahir','$tanggallahir','$alamat','$kota','$provinsi','$kodepos','$telprumah','','$email','$agama','$jenis_kelamin','$nohp','$pekerjaan','$pilihasuransi','$jenisid','$noid','$fotodiri')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function upload(){
    $namaFile = $_FILES['foto_diri']['name'];
    $ukuranFile = $_FILES['foto_diri']['size'];
    $error = $_FILES['foto_diri']['error'];
    $tmpName = $_FILES['foto_diri']['tmp_name'];

    //cek apakah tidak ada foto_diri yang diupload
    if ($error === 4){
        echo "<script>
            alert('gambar belum diupload');
            </script>";
        return false;
    }

    //cek apakah data yang diupload adalah gambar
    $eksGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $eksGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar');
        </script>";
    return false;
    }

    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}