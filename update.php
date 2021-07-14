<?php
    include './config.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $noktp = $_POST['noktp'];
    $notelp = $_POST['notelp'];
    $tahunmasuk = $_POST['tahunmasuk'];
    $jumlahmasakerja = date("Y") - $tahunmasuk;


    mysqli_query($koneksi, "update karyawan set nama='$nama', noktp='$noktp', notelp='$notelp', tahunmasuk=' $tahunmasuk', jumlahmasakerja='$jumlahmasakerja' where id='$id'");
    header("location:index.php");
?>