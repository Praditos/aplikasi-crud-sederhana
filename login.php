<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Selamat datang di aplikasi desa</title>

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
	<body class="body-login">

		<nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Portal Aplikasi Desa</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		      <ul class="nav navbar-nav navbar-right">
		        <li><p class="navbar-text">Already have an account?</p></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
					<ul id="login-dp" class="dropdown-menu">
						<li>
							 <div class="row">
									<div class="col-md-12">
										 <form class="form" role="form" method="post" action="actions/login.php" accept-charset="UTF-8" id="login-nav">
												<div class="form-group">
													 <label class="sr-only" for="exampleInputEmail2">Email address</label>
													 <input type="email" name="username" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
												</div>
												<div class="form-group">
													 <label class="sr-only" for="exampleInputPassword2">Password</label>
													 <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
		                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
												</div>
												<div class="form-group">
													 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
												</div>
												<div class="checkbox">
													 <label>
													 <input type="checkbox"> keep me logged-in
													 </label>
												</div>
										 </form>
									</div>
							 </div>
						</li>
					</ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="panel panel-primary panel-welcome">
			<div class="panel-body">
				<h3>Selamat datang di Aplikasi Warga!</h3>
				<?php if(!empty($_GET['msg'])){ ?>
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<span class="glyphicon glyphicon-info-sign"></span> <?php echo base64_decode($_GET['msg']) ?>
				</div>
				<?php }; ?>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quidem perferendis non. Accusamus facilis quidem suscipit. Exercitationem ducimus repellat fugiat cum vel, enim in illum tempora, placeat esse fuga iusto!</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quidem perferendis non. Accusamus facilis quidem suscipit. Exercitationem ducimus repellat fugiat cum vel, enim in illum tempora, placeat esse fuga iusto! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo officiis, rerum, nisi minima vitae non pariatur itaque, esse perferendis consequatur expedita odit saepe, iusto. Ut error at laudantium delectus consequatur!</p>

				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores temporibus, cumque recusandae porro at ad culpa ducimus officiis provident, placeat consequuntur? Autem neque ipsum, aut nostrum odit! Consequuntur, qui!</p>
					<small>Ahmad Sanusi</small>
				</blockquote>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quidem perferendis non. Accusamus facilis quidem suscipit. Exercitationem ducimus repellat fugiat cum vel, enim in illum tempora, placeat esse fuga iusto!</p>
			</div>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>