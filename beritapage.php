<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Negeriku</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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
  <!-- Main -->

  <main>
    <div class="container">
      <div class="row">
        <div class="wrapper">
          <div class="main">
            <div class="hot-post">
              <div class="thumbnail">
                <img src="img/2.jpg" alt="thumbnail">
                <div class="caption">
                    <p>Berita</p>
                    <p class="bold">Ribuan rumah warga direndam banjir</p>
                    <p>Banjir ini disebabkan curah hujan yang tinggi</p>
                </div>
              </div>
            
            </div>
          </div>
          <div class="sidebar">
            <div class="sidebar-widget">
                <h1 class="sidebar-title">Event</h1>
                <div class="sidebar-post">
                    <h2><a href="#" class="sidebar-posts-title">Gotong-Royong</a></h2>
                    <p>Pemerintah kota Semarang sepakat akan melaksanakan Gotong-Royong diarea kota</p>
                </div>
                <div class="sidebar-post">
                    <h2><a href="event.php" class="sidebar-posts-title">Pelatihan Mitigasi Bencana</a></h2>
                    <p>Pelatihan Mitigasi Bencana BPBD Semarang untuk menghadapi berbagai jenis bencana</p>
                </div>
                <div class="sidebar-post">
                    <h2><a href="#" class="sidebar-posts-title">Dibutuhkan Relawan</a></h2>
                    <p>Pemerintah kota Semarang sepakat akan melaksanakan Gotong-Royong diarea kota</p>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Trending  -->

  <section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="trending">
                <h2>Trending</h2>
            </div>
            <div class="wrapper1">
                <div class="single-post">
                    <div class="post-thumbnail1">
                        <img src="img/3.jpeg" alt="thumbnail">
                    </div>
                    <div class="post-bio">
                        <h3><a href="isiberita.php" class="post-title">Fakta Gempa Bawean</a></h3>
                        <p>Gempa  yang terjadi pada 22 Maret lalu diwilayah Jawa Timur</p>
                    </div>
                </div>
                <div class="single-post">
                    <div class="post-thumbnail2">
                        <img src="img/4.jpeg" alt="thumbnail">
                    </div>
                    <div class="post-bio">
                        <h3><a href="#" class="post-title">Awas Curah Hujan Tinggi</a></h3>
                        <p>BMKG Jawa Tengah merilis peringatan dini curah hujan tinggi</p>
                    </div>
                </div>
                <div class="single-post">
                    <div class="post-thumbnail3">
                        <img src="img/5.jpg" alt="thumbnail">
                    </div>
                    <div class="post-bio">
                        <h3><a href="#" class="post-title">Alternatif Jalur Mudik</a></h3>
                        <p>Sejumlah ruas jalan di Semarang dan Demak, belum bebas dari banjir</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="artikel">
   
  <div class="container ">
    <div class="row">
      <div class="trending">
                <h2>Artikel</h2>
            </div>
      <div class="wrapper">
        <div class="artikel-inti">
          <div class="row">
            <div class="col-md-6">
              <div class="artikel-judul">
                <img src="img/artikel.jpg" alt="judul">
              </div>
            </div>
            <div class="col-md-6">
              <div class="artikel-bio">
                <h3><a href="#" class="artikel-title">Apakah Selat Muria Dapat Terwujud Kembali?</a></h3>
                <p>Banjir di Kabupaten Demak, Jawa Tengah, disebut yang terparah dalam 30 tahun terakhir lantaran magnitudenya jauh lebih luas</p>
              </div>
            </div>
          </div>
        </div>
        <div class="artikel-inti">
          <div class="row">
            <div class="col-md-6">
              <div class="artikel-judul">
                <img src="img/artikel1.jpg" alt="judul">
              </div>
            </div>
            <div class="col-md-6">
              <div class="artikel-bio">
                <h3><a href="isiartikel.php" class="artikel-title">Awal 2024, Ada 5 Bencana Alam Besar Terjadi di Dunia</a></h3>
                <p>Deretan bencana alam menerjang beberapa negara pada awal tahun 2024. Berbagai bencana tersebut telah merenggut banyak nyawa.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="artikel-inti">
          <div class="row">
            <div class="col-md-6">
              <div class="artikel-judul">
                <img src="img/artikel3.jpeg" alt="judul">
              </div>
            </div>
            <div class="col-md-6">
              <div class="artikel-bio">
                <h3><a href="#" class="artikel-title">10 Jenis Fenomena Alam di Bumi dan Penjelasannya</a></h3>
                <p>Fenomena alam merujuk pada segala peristiwa yang terjadi secara alami di muka bumi. Karena itulah, fenomena alam cenderung mendeskripsikan peristiwa yang tidak disebabkan oleh manusia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<footer class="text-center text-lg-start" style="background-color:#1E4269; margin-top:50px">

<div class="container p-4">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
      <img src="assets/navbar.png" style="width:450px; height:auto"alt="">
    </div>
    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
    </div>
    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
      <h5 class="text-uppercase" style="color:white">Contact</h5>

      <ul class="list-unstyled mb-0" style="color:white">

            <div class="lokasi d-flex gap-3">
              <p>Tembalang City</p>
            </div>
            <div class="telepon d-flex gap-3">
              <p>0893451911110</p> 
            </div>
            <div class="email d-flex gap-3">
              <p>bismillahajateam</p>
            </div>
          </div>
      </ul>

    <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="color:white">
      <h5 class="text-uppercase">About</h5>

      <ul class="list-unstyled mb-0">

            <div class="lokasi d-flex gap-3">
              <i class="bi bi-geo-alt-fill"></i>
              <p>Bersama-sama mari berbagi untuk membangun harapan menuju masa depan yang lebih baik.</p>
            </div>
            
          </div>
      </ul>  
  </div>
</div>

<!-- Copyright -->
<div class="text-center p-3" style="color:black; background-color:white">
  © 2020 Copyright : Bismillah Aja Team

</div>
<!-- Copyright -->
</footer>







    
</body>
</html>