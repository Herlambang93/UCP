<?php
// Include konenksi database
include './config.php';

//menangkap data di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$noktp = $_POST['noktp'];
$notelp = $_POST['notelp'];
$tahunmasuk = $_POST['tahunmasuk'];
$jumlahmasakerja =  date("Y")-$tahunmasuk;

//Menginput data ke database
mysqli_query($koneksi, "insert into karyawan (id,nama,noktp,notelp,tahunmasuk,jumlahmasakerja)values('','$nama', '$noktp', '$notelp', '$tahunmasuk', '$jumlahmasakerja')");


//Mengembalikan ke halaman awal
header("location:./index.php");
