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


function daftarAsuransi(){
    global $koneksi;
    $namadepan = htmlspecialchars($data["nama_depan"]);
    $namabelakang = htmlspecialchars($data["nama_belakang"]);
    $tempatlahir = htmlspecialchars($data["tempat_lahir"]);
    $tanggallahir = htmlspecialchars($data["tanggal_lahir"]);
}
=======
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
>>>>>>> Anggi
}