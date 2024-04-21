<?php
    include ('config.php');
    $koneksi = new Database();
    $koneksi->daftar($_POST['nama'], $_POST['email'],$_POST['telepon'], $_POST['password']);
    header('location:masuk.php');
?>
