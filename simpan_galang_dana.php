<?php
session_start();
include ('config.php');
$koneksi = new Database();
$email = $_SESSION['email'];
$cekdir = is_dir("foto_donasi");
if($cekdir){
    opendir("foto_donasi");
}else{
    mkdir("foto_donasi");
    chmod("foto_donasi",0755);
    opendir("foto_donasi");
}

$daftar_tipe = array("jpeg","jpg","png");
$nama_file = $_FILES['donasiimg']['name'];
$pecah = explode(".", $nama_file);
$ekstensi = $pecah[1];
if(in_array($ekstensi, $daftar_tipe)){
    $lokasi_foto = $_FILES['donasiimg']['tmp_name'];
    $nama_foto = $_FILES['donasiimg']['name'];
    $dir_foto = "foto_donasi/$nama_foto";
    move_uploaded_file($lokasi_foto, $dir_foto);
    $koneksi->tambahGalangDana($email, $_POST['judul'],$_POST['keterangan'], $_POST['nomor_rekening'], $_POST['target'],$dir_foto, $_POST['batas_waktu']);
    header('location: galang_dana.php');
}
else{
    header('location: tambah_galang_dana.php');
}
?>