<?php
session_start();
unset($_SESSION['status_login']);
unset($_SESSION['username']);
unset($_SESSION['passsword']);
session_destroy();
header('location:index.php');
?>

<div align="center">
    <h2>Admin telah berhasil logout..</h2>
</div>