<!DOCTYPE html>
<html>
<head>
	<title>Login Data Karyawan</title>
</head>
<body>
	<center>
	<form action="loginctrl.php" method="POST" style="margin-top: 300px;">
		<h1>Login</h1>
		<label>Username :</label>
		<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
		<br/>
		<br/>
		<label>Password :</label>
		<input type="password" name="password" placeholder="masukkan password" required="">
		<br>
		<br>
		<button type="submit">Masuk</button>
	</form>
	<!-- Menampung jika ada pesan -->
	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
	</center>
</body>
</html>