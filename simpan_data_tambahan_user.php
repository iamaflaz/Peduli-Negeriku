<?php
    session_start();
    include ('config.php');
    $koneksi = new Database();
    $email = $_SESSION['email'];
    $cekdir = is_dir("foto_user");
    if($cekdir){
        opendir("foto_user");
    }else{
        mkdir("foto_user");
        chmod("foto_user",0755);
        opendir("foto_user");
    }

    $daftar_tipe = array("jpeg","jpg","png","PNG");
    $nama_file = $_FILES['ktpimg']['name'];
    $pecah = explode(".", $nama_file);
    $ekstensi = $pecah[1];
    if(in_array($ekstensi, $daftar_tipe)) {
        $lokasi_foto = $_FILES['ktpimg']['tmp_name'];
        $nama_foto = $_FILES['ktpimg']['name'];
        $dir_foto = "foto_user/$nama_foto";
        move_uploaded_file($lokasi_foto, $dir_foto);
        $koneksi->tambahDataTambahan($email, $_POST['nama'], $_POST['telepon'], $dir_foto, $_POST['tanggal_lahir'], $_POST['jenis_kelamin'], $_POST['pekerjaan'], $_POST['alamat'], $_POST['biodata']);
        header('location: galang_dana.php');
//    }else{
//        header('location: edit_tambahan_data.php');
//    }
    }
?>