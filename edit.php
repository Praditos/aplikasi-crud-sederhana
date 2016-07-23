<?php
// start session
session_start();
// cek sudah login atau belum
if(!isset($_SESSION['username']) && empty($_SESSION['username']))
{
	$msg = "Kamu harus login terlebih dahulu!";
	header("location:login.php?msg=" . base64_encode($msg));
}

// menyertakan file database, untuk membuat koneksi ke mysql
include 'config/database.php';
// menerima id dari submit form dengan method GET
$id     = $_GET['id'];
// membuat query dengan bahsa sql
$query  = "SELECT * FROM tbl_warga WHERE id = '$id'";
// mengirim query ke mysql server
$item   = mysql_query($query);
// mengambil hasil dari query berupa array (assoc)
$result = mysql_fetch_assoc($item);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edit Data</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Aplikasi Data Warga</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Dashboard</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="list.php">Data Warga</a></li>
								<li><a href="add.php">Tambah data</a></li>
								<li><a href="search.php">Pencarian data</a></li>

							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div id="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Input data warga</h3>
							</div>
							<div class="panel-body">
								<form action="actions/update.php" method="POST" class="form-horizontal" role="form">
								<input type="hidden" name="id" value="<?php echo $result['id']?>">
										<div class="form-group">
											<label for="nama" class="control-label col-md-2">Nama</label>
											<div class="col-md-10">
												<input type="text" value="<?php echo $result['nama']?>" name="nama" required="required" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label for="nama" class="control-label col-md-2">Status</label>
											<div class="col-md-10">
												<select name="status" id="status" class="form-control">
													<option value="Menikah" <?php if($result['status'] == 'Menikah'){?>selected <?php } ?>>Menikah</option>
													<option value="Belum Menikah" <?php if($result['status'] == 'Belum Menikah'){?>selected <?php } ?>>Belum Menikah</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="nama" class="control-label col-md-2">Pekerjaan</label>
											<div class="col-md-10">
												<input type="text" value="<?php echo $result['pekerjaan']?>" name="pekerjaan" required="required" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label for="nama" class="control-label col-md-2">Umur</label>
											<div class="col-md-10">
												<input type="number" value="<?php echo $result['umur']?>" name="umur" required="required" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-10 col-sm-offset-2">
												<a href="list.php" class="btn btn-warning">Back</a>
												<button type="submit" class="btn btn-primary">Save</button>
											</div>
										</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<nav class="navbar navbar-default navbar-fixed-bottom">
				  <div class="container">
				    <div class="row">
				    	<div class="col-md-12">
							<p class="credit">Copyright &copy; Ahmad Sanusi 2016</p>
				    	</div>
				    </div>
				  </div>
				</nav>
				</footer>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>
<?php
// Menutup koneksi database
mysql_close();
?>