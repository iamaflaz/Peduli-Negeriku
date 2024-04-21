<?php
    include ('config.php');
    session_start();
    $email= $_SESSION['email'];
    $koneksi = new Database();
    if($koneksi->cekKosong($email) == true){
        header('Location: edit_tambahan_data.php');
    }else{
        header('Location: tambah_galang_dana.php');
    }
?>