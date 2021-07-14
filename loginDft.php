<?php
include "config.php";
if(isset($_POST['daftar'])){
    $nama = $_POST ['nama'];
    $password = md5( $_POST['password']);
    $email = $_POST ['email'];    
    $sql = "insert into login (nama, password, email) values('$nama','$password','$email')";
    $conn = mysqli_query($koneksi, $sql);
    if($conn){
        header("location: login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="style.css" />

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<title>Data Karyawan</title>
	</head>
	<body style="background-color: snow">
		
		<div class="container" id="login">
			<div class="card">
				<div class="card-body">
					<h4 class="text-center" style="color:black">Data Karyawan</h4>
					<form method="post" action="">
					
						<div class="mb-3 mt-3">
							<label for="Nama" class="form-label">Nama</label>
							<input type="Nama" class="form-control" id="Nama" name="Nama" required />
						</div>
						<div class="mb-3 mt-3">
							<label for="Email" class="form-label">Email</label>
							<input type="Email" class="form-control" id="Email" aria-describedby="EmailHelp" name="Email" required />
						</div>
						<div class="mb-3">
							
							<label for="Password" class="form-label">Password</label>
							<input type="hint" class="form-control" id="Password" name="Password" required />
							<div id="EmailHelp" class="form-text">Masukkan Password yang Sesuai</div>
						</div>
						<div id="button">
							<button type="submit" class="btn btn-primary" style="color: #fbfbfb; background-color: #be768d" name="daftar">Daftar</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		<footer class="container" id="footer">20191040025 - Muhammad Herlambang</footer>
		
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>