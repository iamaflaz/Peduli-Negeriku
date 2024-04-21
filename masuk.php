<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk Galang Dana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>


<!-- Custom styles for this template -->
<link href="style.css" rel="stylesheet">

<body class="d-flex align-items-center py-4 bg-body-tertiary">
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-signin mt-4">
                <form method="post" action="autentikasi.php">
                    <h1 class="h3 mb-2  fw-normal">Masuk</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan E-Mail" required>
                        <label for="email">Alamat E-mail</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button>
                </form>
                <small class="d-block text-center mt-3 ">Belum punya akun?<a href="daftar.php">Yuk Daftar Sekarang</a></small>
            </main>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>