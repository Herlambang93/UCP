<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Detail Karyawan</title>
  </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Detail Karyawan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto"> <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Tambah Karyawan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>            
          </ul>        
        </div>
    </div>
    </nav>

     <?php
    include 'config.php';
    $id = $_GET['id'];
    $karyawan = mysqli_query($koneksi, "select * from karyawan where id = '$id'");
    while ($data = mysqli_fetch_assoc($karyawan)){
    ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a> / Detail Karyawan / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profil Karyawan</p>
                </div>
                <div class="card-body fw-bold">
                    <p>Nama : <?php echo $data['nama'] ?></p>
                    <p>NoKTP : <?php echo $data['noktp'] ?></p>
                    <p>NoTelp: <?php echo $data['notelp'] ?></p>
                    <p>TahunMasuk: <?php echo $data['tahunmasuk'] ?></p>
                    <p>JumlahMasaKerja: <?php echo $data['jumlahmasakerja'] ?></p>
                    <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">CETAK</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>