<<<<<<< HEAD
<?php
$koneksi=mysqli_connect("localhost","root","","masin");
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $simpan=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($simpan)==1){
        $role= mysqli_fetch_assoc($simpan);
        if($role['role']=="user"){
            header("Location: List Perusahaan sisi Nelayan.php");
            exit;
        }else{
            header("Location: generic.html");
            exit;
        }
    }else{
        header("Location: masukUser.html");
        exit;
    }
}else{
    header("Location: masukUser.html");
    exit;
}

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

    $gambar = upload();
    if (!$gambar){
        return false;
    }

    $query = "INSERT INTO daftar_asuransi VALUES ('$namadepan','$belakang','$tempatlahir','$tanggallahir','$alamat','$kota','$provinsi','$kodepos','$telprumah','','$email','$agama','$jenis_kelamin','$nohp','$pekerjaan','$pilihasuransi','$jenisid','$noid','$fotodiri')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
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