<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Peduli Negeriku</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="assets/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="assets/script.js" defer></script>
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

    <!-- Beranda -->
    <section>
      <div id="beranda" class="container text-center my-5">
        <div class="row">
          <div class="col aja">
            <h1>Peduli Negeriku</h1>
            <p>Kami bertekad untuk memastikan setiap dolar didonasikan dengan efektif dan efisien, mendukung program-program relevan yang memberikan manfaat maksimal bagi komunitas yang kami layani.</p>
            <a href="aboutus.php" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
          </div>
          <div class="col">
            <img src="assets/images/beranda.png" />
          </div>
        </div>
      </div>
    </section>
    <!-- Beranda End -->

    <!-- Donasi -->
    <section>
      <div id="donasi" class="container my-5">
        <div class="title">
          <h2><b>Donasi</b></h2>
        </div>
        <div id="carouselDonasi" class="carousel slide">
          <div class="carousel-inner p-3">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/donasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Capai Ketinggian 2 Meter, Bantu Warga Terdampak Banjir Demak</h5>
                      <p class="card-text">Ketinggian air di wilayah Kecamatan Karanganyar, Kabupaten Demak  terdampak banjir dilaporkan turun hingga 50cm pada Kamis (21/3).  Sebelumnya, air menggenangi wilayah Kecamatan Karanganyar hingga  setinggi 200cm. </p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                      </div>
                      <a href="#" class="btn btn-primary mt-5">Donasi Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/donasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Capai Ketinggian 2 Meter, Bantu Warga Terdampak Banjir Demak</h5>
                      <p class="card-text">Ketinggian air di wilayah Kecamatan Karanganyar, Kabupaten Demak  terdampak banjir dilaporkan turun hingga 50cm pada Kamis (21/3).  Sebelumnya, air menggenangi wilayah Kecamatan Karanganyar hingga  setinggi 200cm. </p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                      </div>
                      <a href="#" class="btn btn-primary mt-5">Donasi Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/donasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Capai Ketinggian 2 Meter, Bantu Warga Terdampak Banjir Demak</h5>
                      <p class="card-text">Ketinggian air di wilayah Kecamatan Karanganyar, Kabupaten Demak  terdampak banjir dilaporkan turun hingga 50cm pada Kamis (21/3).  Sebelumnya, air menggenangi wilayah Kecamatan Karanganyar hingga  setinggi 200cm. </p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                      </div>
                      <a href="#" class="btn btn-primary mt-5">Donasi Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/donasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Capai Ketinggian 2 Meter, Bantu Warga Terdampak Banjir Demak</h5>
                      <p class="card-text">Ketinggian air di wilayah Kecamatan Karanganyar, Kabupaten Demak  terdampak banjir dilaporkan turun hingga 50cm pada Kamis (21/3).  Sebelumnya, air menggenangi wilayah Kecamatan Karanganyar hingga  setinggi 200cm. </p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                      </div>
                      <a href="#" class="btn btn-primary mt-5">Donasi Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/donasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Capai Ketinggian 2 Meter, Bantu Warga Terdampak Banjir Demak</h5>
                      <p class="card-text">Ketinggian air di wilayah Kecamatan Karanganyar, Kabupaten Demak  terdampak banjir dilaporkan turun hingga 50cm pada Kamis (21/3).  Sebelumnya, air menggenangi wilayah Kecamatan Karanganyar hingga  setinggi 200cm. </p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                      </div>
                      <a href="#" class="btn btn-primary mt-5">Donasi Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/donasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Capai Ketinggian 2 Meter, Bantu Warga Terdampak Banjir Demak</h5>
                      <p class="card-text">Ketinggian air di wilayah Kecamatan Karanganyar, Kabupaten Demak  terdampak banjir dilaporkan turun hingga 50cm pada Kamis (21/3).  Sebelumnya, air menggenangi wilayah Kecamatan Karanganyar hingga  setinggi 200cm. </p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                      </div>
                      <a href="#" class="btn btn-primary mt-5">Donasi Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/donasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Capai Ketinggian 2 Meter, Bantu Warga Terdampak Banjir Demak</h5>
                      <p class="card-text">Ketinggian air di wilayah Kecamatan Karanganyar, Kabupaten Demak  terdampak banjir dilaporkan turun hingga 50cm pada Kamis (21/3).  Sebelumnya, air menggenangi wilayah Kecamatan Karanganyar hingga  setinggi 200cm. </p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                      </div>
                      <a href="#" class="btn btn-primary mt-5">Donasi Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/donasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Capai Ketinggian 2 Meter, Bantu Warga Terdampak Banjir Demak</h5>
                      <p class="card-text">Ketinggian air di wilayah Kecamatan Karanganyar, Kabupaten Demak  terdampak banjir dilaporkan turun hingga 50cm pada Kamis (21/3).  Sebelumnya, air menggenangi wilayah Kecamatan Karanganyar hingga  setinggi 200cm. </p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                      </div>
                      <a href="#" class="btn btn-primary mt-5">Donasi Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/donasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Capai Ketinggian 2 Meter, Bantu Warga Terdampak Banjir Demak</h5>
                      <p class="card-text">Ketinggian air di wilayah Kecamatan Karanganyar, Kabupaten Demak  terdampak banjir dilaporkan turun hingga 50cm pada Kamis (21/3).  Sebelumnya, air menggenangi wilayah Kecamatan Karanganyar hingga  setinggi 200cm. </p>
                      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                      </div>
                      <a href="#" class="btn btn-primary mt-5">Donasi Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselDonasi" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselDonasi" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- Donasi End -->

    <!-- Event -->
    <section>
      <div id="event" class="container my-5">
        <div class="title">
          <h2><b>Event</b></h2>
        </div>
        <div id="carouselEvent" class="carousel slide">
          <div class="carousel-inner p-3">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/event.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pelatihan Pencegahan dan Mitigasi Bencana</h5>
                      <p class="card-text">Badan Penanggulangan Bencana Daerah (BPBD) Kalimantan Selatan  melaksanakan pelatihan pencegahan dan mitigasi bencana Provinsi  Kalimantan Selatan Tahun 2022 di kawasan kantor BPBD di Banjarbaru.</p>
                      
                      <a href="#" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/event.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pelatihan Pencegahan dan Mitigasi Bencana</h5>
                      <p class="card-text">Badan Penanggulangan Bencana Daerah (BPBD) Kalimantan Selatan  melaksanakan pelatihan pencegahan dan mitigasi bencana Provinsi  Kalimantan Selatan Tahun 2022 di kawasan kantor BPBD di Banjarbaru.</p>
                      
                      <a href="#" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/event.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pelatihan Pencegahan dan Mitigasi Bencana</h5>
                      <p class="card-text">Badan Penanggulangan Bencana Daerah (BPBD) Kalimantan Selatan  melaksanakan pelatihan pencegahan dan mitigasi bencana Provinsi  Kalimantan Selatan Tahun 2022 di kawasan kantor BPBD di Banjarbaru.</p>
                      
                      <a href="#" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/event.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pelatihan Pencegahan dan Mitigasi Bencana</h5>
                      <p class="card-text">Badan Penanggulangan Bencana Daerah (BPBD) Kalimantan Selatan  melaksanakan pelatihan pencegahan dan mitigasi bencana Provinsi  Kalimantan Selatan Tahun 2022 di kawasan kantor BPBD di Banjarbaru.</p>
                      
                      <a href="#" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/event.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pelatihan Pencegahan dan Mitigasi Bencana</h5>
                      <p class="card-text">Badan Penanggulangan Bencana Daerah (BPBD) Kalimantan Selatan  melaksanakan pelatihan pencegahan dan mitigasi bencana Provinsi  Kalimantan Selatan Tahun 2022 di kawasan kantor BPBD di Banjarbaru.</p>
                      
                      <a href="#" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/event.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pelatihan Pencegahan dan Mitigasi Bencana</h5>
                      <p class="card-text">Badan Penanggulangan Bencana Daerah (BPBD) Kalimantan Selatan  melaksanakan pelatihan pencegahan dan mitigasi bencana Provinsi  Kalimantan Selatan Tahun 2022 di kawasan kantor BPBD di Banjarbaru.</p>
                      
                      <a href="#" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/event.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pelatihan Pencegahan dan Mitigasi Bencana</h5>
                      <p class="card-text">Badan Penanggulangan Bencana Daerah (BPBD) Kalimantan Selatan  melaksanakan pelatihan pencegahan dan mitigasi bencana Provinsi  Kalimantan Selatan Tahun 2022 di kawasan kantor BPBD di Banjarbaru.</p>
                      
                      <a href="#" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/event.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pelatihan Pencegahan dan Mitigasi Bencana</h5>
                      <p class="card-text">Badan Penanggulangan Bencana Daerah (BPBD) Kalimantan Selatan  melaksanakan pelatihan pencegahan dan mitigasi bencana Provinsi  Kalimantan Selatan Tahun 2022 di kawasan kantor BPBD di Banjarbaru.</p>
                      
                      <a href="#" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 25rem;">
                    <img src="assets/images/event.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pelatihan Pencegahan dan Mitigasi Bencana</h5>
                      <p class="card-text">Badan Penanggulangan Bencana Daerah (BPBD) Kalimantan Selatan  melaksanakan pelatihan pencegahan dan mitigasi bencana Provinsi  Kalimantan Selatan Tahun 2022 di kawasan kantor BPBD di Banjarbaru.</p>
                      
                      <a href="#" class="selengkapnya">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselEvent" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselEvent" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- Event End -->

  <!-- Footer -->
  <footer class="text-center text-lg-start" style="background-color:#1E4269;">

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>
