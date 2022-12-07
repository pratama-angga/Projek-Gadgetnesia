<?php
//menjalankan session selalu diletakan di awal
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['pass'];

//mencari password terenskripsi berdasarkan username
$query = "SELECT * FROM tbl_user WHERE username = '$username'";
$hasil = mysqli_query($db_koneksi,$query);
$data = mysqli_fetch_array($hasil);

//format pengacak harus sama dengan format si submitregister.php
$pengacak = "p3ng4c4k";

//cek kesesuaian password terenkripsi dari form login
//dengan password terenkripsi dari database
$passmd = md5($pengacak . md5($password));
if ($passmd == $data['password']) {
	
	//menyimpan username dan level ke dalam session
	$_SESSION['level'] = $data['level'];
	$_SESSION['username'] == $data['username'];

	//menampilkan menu ke halaman akses
	echo "<h2>Login Sukses</h2>";
	header('Location: coba.php');
}
else echo "<h2>Login Gagal</h2>";
?>