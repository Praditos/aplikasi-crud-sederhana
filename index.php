<?php
// start session
session_start();
// cek sudah login atau belum
if(!isset($_SESSION['username']) && empty($_SESSION['username']))
{
	$msg = "Kamu harus login terlebih dahulu!";
	header("location:login.php?msg=" . base64_encode($msg));
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Dashboard</title>

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
								<li><a href="list.php">Data warga</a></li>
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
								<h3 class="panel-title">Dashboard</h3>
							</div>
							<div class="panel-body">
							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Howdy <?php echo $_SESSION['username']; ?>! </strong> Selamat datang di aplikasi crud data warga, dengan aplikasi ini anda bisa membuat daftar informasi data warga, mengedit dan menghapus data warga.
							</div>

							<div class="row">
								<div class="col-md-2">
									<a href="add.php" title="Tambah data" class="btn btn-large btn-block btn-primary big-icon"><span class="glyphicon glyphicon-plus"></span><br>Tambah Data Warga</a>
								</div>
								<div class="col-md-2">
									<a href="list.php" title="Lihat daftar warga" class="btn btn-large btn-block btn-primary big-icon"><span class="glyphicon glyphicon-list-alt"></span><br>Lihat Data Warga</a>
								</div>
								<div class="col-md-2">
									<a href="search.php" title="Pencarian data" class="btn btn-large btn-block btn-primary big-icon"><span class="glyphicon glyphicon-search"></span><br>Cari Data Warga</a>
								</div>
								<div class="col-md-2">
									<a href="actions/logout.php" title="keluar" onclick="return confirm('Apakah yakin keluar?')" class="btn btn-large btn-block btn-primary big-icon"><span class="glyphicon glyphicon-off"></span><br>Keluar</a>
								</div>
							</div>
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