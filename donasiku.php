<?php
    include "config.php";
    $db = new Database();
    $data = $db->tampilGalangDanaSemua(1);
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Peduli Negeriku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
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

<main class="container">

    <div class="row g-5">
        <div class="col-md-8 col-lg-8" >
            <img class="figure-img mt-4" src="<?php echo $data[0]['foto']; ?>" alt="gambar-donasi">

            <h3 class="pb-4 mb-4 fst-italic border-bottom">
               <?php echo $data[0]['judul'];?>
            </h3>

            <article class="blog-post" style="text-align: justify">
                <?php echo $data[0]['keterangan'];?>
            </article>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-body-tertiary rounded">
                    <h1 class="mt-4">Leaderboard</h1>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Banyak Donasi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>John Doe</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jane Smith</td>
                            <td>950</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Michael Johnson</td>
                            <td>900</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Alice Brown</td>
                            <td>850</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Emily Wilson</td>
                            <td>800</td>
                        </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-primary"><a class="text-white text-decoration-none" href="#">Yuk Ikutan</a></button>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
