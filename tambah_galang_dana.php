<?php
session_start();
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Galang Dana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 <!--navbar-->
 <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #1E4269;">
        <div class="container-fluid">
            <a>
                <img src="assets/navbar.png" alt="" width="200">
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 mx-auto d-flex gap-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" style="color: #ffffff; margin-right: 100px">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donasi.php" style="color: #ffffff; margin-right: 100px">Donasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="beritapage.php" style="color: #ffffff; margin-right: 100px">Blog</a>
                    </li>
                </ul>
                <a href="daftar.php">
                <button id="loginButton" class="btn btn-outline-primary ms-4 me-2" type="submit"
                    style="color: #ffffff">Login</button>
                </a>

            </div>
        </div>
    </nav>

<div class="container">
    
    <?php
    include "config.php";
    $db = new Database();
    $data = $db->tampilDataUser($email);
    ?>
    <h1 class="mt-4">Form Galang Dana</h1>
    <form id="fundraisingForm" method="post" action="simpan_galang_dana.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data[0]["email"]; ?>" required>
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="nomor-rekening" class="form-label">Nomor Rekening</label>
            <input type="text" class="form-control" id="nomor-rekening" name="nomor_rekening" required>
        </div>
        <div class="mb-3">
            <label for="target" class="form-label">Target (IDR)</label>
            <input type="text" class="form-control" id="target" name="target" required>
        </div>
        <div class="mb-3">
            <label for="donasiimg" class="form-label">Foto</label>
            <input type="file" class="form-control" id="donasiimg" name="donasiimg" required>
        </div>
        <div class="mb-3">
            <label for="batas-waktu" class="form-label">Batas Waktu</label>
            <input type="date" class="form-control" id="batas-waktu" name="batas_waktu" min="<?php echo date('Y-m-d'); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
