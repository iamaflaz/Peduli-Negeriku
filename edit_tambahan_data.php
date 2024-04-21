<?php
    session_start();
    $email = $_SESSION['email'];
    include "config.php";
    $db = new Database();
    $data = $db->tampilDataUser($email);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.19/sweetalert2.min.css">
    <style>
        /* Custom CSS untuk penampilan yang lebih rapi */
        .container {
            margin-top: 20px;
        }

        .card {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="mb-3">
        <button onclick="window.history.back()" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
            </svg> Back</button>
    </div>
    <form id="userDataForm" method="post" action="simpan_data_tambahan_user.php" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Data Diri</h1>
                        <div class="mb-3">
                            <label for="nama" id="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" value="<?php echo $data[0]["nama"];?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="telepon" id="telepon" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" aria-describedby="telepon" value="<?php echo $data[0]["telepon"];?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="ktpimg" class="form-label">Upload KTP</label>
                            <input type="file" class="form-control" id="ktpimg" name="ktpimg" placeholder="Upload KTP (PNG, JPG, JPEG)" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1>Data Tambahan</h1>
                        <div class="mb-3">
                            <label for="tanggal-lahir" id="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal-lahir" aria-describedby="tanggal-lahir">
                        </div>
                        <div class="mb-3">
                            <label for="jenis-kelamin" id="jenis-kelamin" class="form-label">Jenis-kelamin</label>
                            <select class="form-select" id="jenis-kelamin" name="jenis_kelamin" aria-labelledby="jenis-kelamin">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan" id="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="pekerjaan">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" id="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" aria-describedby="alamat"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="biodata" id="biodata" class="form-label">Biodata</label>
                            <textarea class="form-control" name="biodata" id="biodata" aria-describedby="biodata"></textarea>
                        </div>
                        <button class="btn btn-primary float-end" type="submit" onclick=validateForm()>Selesai</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<!-- SweetAlert JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.19/sweetalert2.all.min.js"></script>
</body>
</html>
