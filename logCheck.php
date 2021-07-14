<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:loginForm.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
</head>
<body>
	<h1> Selamat datang <?php echo $_SESSION['nama']; ?></h1>
    <h5>username & password : lambang</h5>
</body>
</html>