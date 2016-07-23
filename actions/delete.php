<?php
/*
| -------------------------------------------------------------------
| PROSES SIMPAN DATA
| -------------------------------------------------------------------
| include(). Fungsi ini digunakan untuk memanggil dan menyertakan file php
| mysql_query(). Fungsi ini digunakan untuk mengirim query ke mysql server.
| header($location). Fungsi ini digunakan untuk men-redirect halaman.
| -
| Jika mysql_query() berhasil maka halaman akan diredirect kehalaman/file list.php
| Jika mysql_query() tidak berhasil maka selanjutkan akan ditampilkan pesan error.
|
*/

include '../config/database.php';

$sql = "DELETE FROM tbl_warga WHERE id='$_GET[id]'";

if(mysql_query($sql))
{
	$notif = 'Berhasil menghapus data!';

	header('location:../list.php?msg=' . base64_encode($notif));
}
else
{
	echo "Gagal menghapus data, karena " . mysql_error();
}

// Menutup koneksi database
mysql_close();

 ?>