<?php
/*
| -------------------------------------------------------------------
| PENGATURAN KONEKSI DATABASE
| -------------------------------------------------------------------
| File ini berisi pengaturan yang dibutuhkan untuk mengakses database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| PENJELASAN VARIABLE
| -
|	['hostname'] Nama Host-Server dimana database berada.
|	['username'] Username yang digunakan untuk koneksi database.
|	['password'] Password yang digunakan untuk koneksi database.
|	['database'] Nama database yang ingin digunakan, yang telah dibuatkan sebelumnya
|
| -------------------------------------------------------------------
| UNTUK PENGGUNA XAMPP DENGAN PENGATURAN DEFAULT
| -
|	['hostname'] localhost.
|	['username'] root.
|	['password'] kosongkan.
*/

$hostname = "localhost";
$username = "general";
$password = "123456";
$database = "zadmin_desa";

/*
| -------------------------------------------------------------------
| PENGECEKAN KONEKSI DATABASE
| -------------------------------------------------------------------
| mysql_connect(). Fungsi ini digunakan untuk mengkoneksikan script php dengan database mysql
| mysql_error(). Fungsi ini digunakan untuk menampilkan pesan error dari operasi mysql.
| mysql_select_db(). Fungsi ini digunakan untuk memilih nama database yang akan diakses dengan script php
| mysql_close() digunakan untuk menutup koneksi ke server database MySQL
| -
| Jika koneksi tidak berhasil (!) maka akan muncul peringatan 'Connection error, because ...'
| Jika koneksi berhasil dibuat maka selanjutkan akan diteruskan dengan memilih nama database yang akan diakses.
|
*/

if (!mysql_connect($hostname, $username, $password))
{
	echo "Connection error, because" . mysql_error();
}
else
{
	if (!mysql_select_db($database)) {
		echo "Error select database, because " . mysql_error();
	}
}
?>