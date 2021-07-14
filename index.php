<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    
    <title>Data Karyawan</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand " href="#">Data karyawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto"> <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Tambah Data karyawan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="login.php">Login</a>
            </li>
            
        </div>
    </div>
    </nav>
    <div class="container data-mahasiswa mt-5">
        <!---Button trigger modal-->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
            Tambah Data
        </button>
        <!-- Modal -->
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
            <!--Kita membuat form dengan method post untuk memanggil file store.php-->
                <form method="post" action="create.php" name="form">
                    <!-- heading modal -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahDataLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">
                        <!--Input nama-->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Karyawan" name="nama" required>
                        </div>
                        <!--Input nim-->
                        <div class="mb-3">
                            <label for="NIM" class="form-label">No.KTP</label>
                            <input type="text" class="form-control" id="noktp" placeholder="Masukkan No.KTP Karyawan" name="noktp" required>
                        </div>
                        <!--Input alamat-->
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">No.Telp</label>
                            <textarea type="text" class="form-control" id="notelp" placeholder="Masukkan No.Telp Karyawan" name="notelp" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Tahun Masuk</label>
                            <textarea type="text" class="form-control" id="tahunmasuk" placeholder="Masukkan Tahun Masuk Karyawan" name="tahunmasuk" required></textarea>
                        </div>                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---Akhir Modal-->
    <table class="table table-striped" id="tablekaryawan">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">NO.KTP</th>
            <th scope="col">No.Telpon</th>
            <th scope="col">Tahun Masuk</th>
            <th scope="col">Jumlah Masa Kerja</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';
            $no = 1;
            $karyawan = mysqli_query($koneksi, "select * from karyawan");
            while($data = mysqli_fetch_array($karyawan)){            
        ?>
        <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo $data['nama']; ?></td>                      
            <td><?php echo $data['noktp']; ?></td>
            <td><?php echo $data['notelp']; ?></td>
            <td><?php echo $data['tahunmasuk']; ?></td>
            <td><?php echo $data['jumlahmasakerja']; ?></td>
            <td>
                <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">DETAIL</a>
                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>                
                <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Anda Yakin Akan Menghapus Data Karyawan Ini ?')">DELETE</a>
            </td>
        </tr>
        <?php
         }
        ?>
        
        </div>
       
        
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>=
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tablekaryawan').DataTable();
        } );
    </script>
</body>
</html>


