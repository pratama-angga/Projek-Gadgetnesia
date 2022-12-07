<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Daftar</title>
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container">
		<h1>Gadgetnesia</h1>
		<form method="post" action="submitregister.php">
			<label>Nama Pengguna</label><br>
			<input type="text" name="username"><br>
			<label>Kata Sandi</label><br>
			<input type="password" name="pass1"><br>
			<label>Ulangi Kata Sandi</label><br>
			<input type="password" name="pass2">
			<button type="submit" name="submit" value="submit">Daftar</button><br>
		</form>
		<form action="login.php">
			<button>Sudah punya akun?</button><br>
			<label><a href="homepageguest.php" style="text-decoration: none; color: #000">Kembali</a></label>
		</form>
	</div>
</body>
</html>