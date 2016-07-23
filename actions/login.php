<?php
/*
| -------------------------------------------------------------------
| Login
| -------------------------------------------------------------------
| session_start(). Fungsi ini digunakan untuk membuat sekaligus memulai session.
| isset(). Fungsi ini digunakan untuk mengecek ada atau tidak nya variable.
| header($location). Fungsi ini digunakan untuk men-redirect halaman.
| base64_encode() Fungsi ini digunakan untuk meng-encode/enkripsi kalimat.
| -
|
*/
session_start();

if (isset($_POST['username']))
{
	$username = "admin@admin.com";
	$password = "admin";

	if ($_POST['username'] == $username && $_POST['password'] == $password){
		$_SESSION['username'] = "Administrator";
		header("location:../index.php");
	}
	else
	{
		$msg = "Username atau Password salah, silahkan coba lagi!";
		header("location:../login.php?msg=" . base64_encode($msg));
	}
}
else
{
	$msg = "there not submitted form!";
	header("location:../login.php?msg=" . base64_encode($msg));
}

 ?>