<!doctype html>
<html lang="en">

<head>
	<title>Admin | INFERNITY</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

</head>

<body id="logindaftar">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div id="loginform">
			<div class="main-content">
				<div class="container-fluid">
					<div class=" text-center ">
						<div class="panel">
							<div class="panel-heading">
								<div class="logo text-center"><h2>Login Admin</h2></div>
							</div>
							<div class="panel-body">
							<form class="form-auth-small" action="verif_admin.php" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<span class="helper-text element-right">Tidak memiliki akun? <a href="daftar-admin.php">Daftar</a></span>
								</div>
									<button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom text-center">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="lupa-password.php">Lupa password?</a></span>
								</div>
							</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
