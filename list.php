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
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daftar Warga</title>

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
								<h3 class="panel-title">Daftar Warga</h3>
							</div>
							<div class="panel-body">
							<?php if(isset($_GET['msg'])){?>
								<div class="alert alert-info">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong><span class="glyphicon glyphicon-info-sign"></span></strong> <?php echo base64_decode($_GET['msg']); ?>
								</div>
							<?php }; ?>
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>No</th><th>Nama</th><th>Status</th><th>Pekerjaan</th><th>Umur</th><th width="88"></th>
											</tr>
										</thead>
										<tbody>
										<?php
										// mengirim query
										$sql = "SELECT * FROM tbl_warga ORDER BY id";
										$query = mysql_query($sql);
										// cek data ada atau tidak ada
										$num = mysql_num_rows($query);
										if ($num > 0)
										{
										// mengambil hasil query dan me-looping dengan while
										while ($data = mysql_fetch_array ($query)) {?>
										<tr>
											<td><?php echo $data['id']; ?></td>
											<td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['status']; ?></td>
											<td><?php echo $data['pekerjaan']; ?></td>
											<td><?php echo $data['umur']; ?></td>
											<td>
												<div class="btn-group" role="group" aria-label="...">
												  <div class="btn-group" role="group" aria-label="...">
												  <a href="edit.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-warning" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
												  <a onclick="return confirm('Apakah anda yakin?')" href="actions/delete.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-danger" title="Hapus"><span class="glyphicon glyphicon-remove"></span></a>
												</div>
												</div>
											</td>
										</tr>

										<?php } }else{?>
										<tr>
											<td colspan="6" class="text-center text-muted">Belum ada data warga di database.</td>
										</tr>
										<?php } ?>
										</tbody>
										<tfoot>
											<tr><td colspan="6"><a href="add.php" class="btn btn-primary">Tambah data</a></td></tr>
										</tfoot>
									</table>
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
<?php
// Menutup koneksi database
mysql_close();
 ?>