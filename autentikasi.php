<?php
include "config.php";
$db = new Database();

$email = $_POST['email'];
$password = $_POST['password'];

// Memanggil fungsi login untuk mendapatkan informasi user
$user = $db->login($email);

// Periksa apakah user ditemukan
if ($user) {
    $sandi = $user['password'];

    if ($sandi == $password) {
        session_start();
        $_SESSION["email"] = $email;
        header('location: galang_dana.php');
        exit; // Pastikan untuk keluar dari skrip setelah melakukan redirect
    } else {
        echo "Password salah. Coba lagi.";
        header('location:masuk.php');
        exit; // Pastikan untuk keluar dari skrip setelah melakukan redirect
    }
} else {
    // User tidak ditemukan
    echo "Data user tidak ada.";
    header('location:login.php');
    exit; // Pastikan untuk keluar dari skrip setelah melakukan redirect
}
?>
