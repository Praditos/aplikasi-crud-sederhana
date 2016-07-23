<?php
/*
| -------------------------------------------------------------------
| Logout
| -------------------------------------------------------------------
| session_start(). Fungsi ini digunakan untuk membuat sekaligus memulai session.
| isset(). Fungsi ini digunakan untuk mengecek ada atau tidak nya variable.
| header($location). Fungsi ini digunakan untuk men-redirect halaman.
| -
|
*/
session_start();

if (isset($_SESSION['username']) && !empty($_SESSION['username']))
{
	session_destroy();

	$msg = "Kamu berhasil logout!";
	header("location:../login.php?msg=" . base64_encode($msg));
}
else
{
	$msg = "Kamu gagal logout!";
	header("location:../index.php?msg=" . base64_encode($msg));
}

 ?>