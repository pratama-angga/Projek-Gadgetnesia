<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Masuk</title>
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container">
		<h1>Gadgetnesia</h1>
		<form method="post" action="submitlogin.php">
			<label>Nama Pengguna :</label><br>
			<input type="text" name="username"><br>
			<label>Kata Sandi :</label><br>
			<input type="password" name="pass"><br>
		</form>
		<form action="homepage_user.php">
			<button type="submit" name="submit" value="submit">Masuk</button><br>
		</form>
		<form action="register.php">
			<button>Belum punya akun?</button><br>
			<label><a href="homepageguest.php" style="text-decoration: none; color: #000">Kembali</a></label>
		</form>
	</div>
</body>
</html>