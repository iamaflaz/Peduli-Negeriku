<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galang Dana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills justify-content-center" id="tabGalang" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="diajukan-tab" data-bs-toggle="tab" data-bs-target="#diajukan" type="button" role="tab" aria-controls="diajukan" aria-selected="true">Diajukan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="aktif-tab" data-bs-toggle="tab" data-bs-target="#aktif" type="button" role="tab" aria-controls="aktif" aria-selected="false">Aktif</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fundraising-tab" data-bs-toggle="tab" data-bs-target="#fund-tab-pane" type="button" role="tab" aria-controls="fund-tab-pane" aria-selected="false">Fundraiser</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="diajukan" role="tabpanel" aria-labelledby="diajukan-tab">
                            <div class="card mb-3" style="max-width: 700px">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Nama Galang Dana</h5>
                                            <p class="card-text">Keterangan Galang Dana</p>
                                            <p class="card-text"><small class="text-body">Status</small></p>
                                            <button class="btn btn-primary"><a href="#" class="text-white text-decoration-none">Lihat Detail</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="aktif" role="tabpanel" aria-labelledby="aktif-tab">
                            <div class="card mb-3" style="max-width: 700px">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Nama Galang Dana</h5>
                                            <p class="card-text">Keterangan Galang Dana</p>
                                            <p class="card-text"><small class="text-body">Status</small></p>
                                            <button class="btn btn-primary"><a href="#" class="text-white text-decoration-none">Lihat Detail</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fund-tab-pane" role="tabpanel" aria-labelledby="fundraising-tab">
                            <div class="card mb-3" style="max-width: 700px">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Nama Galang Dana</h5>
                                            <p class="card-text">Keterangan Galang Dana</p>
                                            <p class="card-text"><small class="text-body">Status</small></p>
                                            <button class="btn btn-primary"><a href="#" class="text-white text-decoration-none">Lihat Detail</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Floating Button   -->
                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-primary rounded-5"><a class="text-decoration-none text-white" href="#">+ Galang Dana</a></button>
                    </div>                    <!--  Floating Button END  -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
