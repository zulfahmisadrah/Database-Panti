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
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo-minified-dark.png">
</head>

<body id="logindaftar">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div id="daftarform">
			<div class="main-content">
				<div class="container-fluid">
						<div class=" text-center ">
							<div class="panel">
								<div class="panel-heading">
									<div class="logo text-center"><img src="assets/img/logo-infernity-m.png" alt="Infernity Logo"></div>
								</div>
								<div class="panel-body">
			            <form class="form-auth-small" action="tambahAkunAdmin.php" method="post">
			            	<div class="form-group">
		                  <label for="signin-email" class="control-label sr-only">Nama</label>
		                  <input name="nama" type="text" class="form-control" id="signin-email" placeholder="Nama">
		                </div>
			            	<div class="form-group">
		                  <label for="signin-email" class="control-label sr-only">Username</label>
		                  <input name="username" type="text" class="form-control" id="signin-email" placeholder="Username">
		                </div>
			            	<div class="form-group">
		                  <label for="signin-email" class="control-label sr-only">Email</label>
		                  <input name="email" type="email" class="form-control" id="signin-email" placeholder="Email">
		                </div>
		                <div class="form-group">
		                  <label for="signin-password" class="control-label sr-only">Password</label>
		                  <input name="password" type="password" class="form-control" id="signin-password" placeholder="Password">
		                </div>
		                <div class="form-group">
		                  <label for="signin-password" class="control-label sr-only">Konfirmasi Password</label>
		                  <input name="konfirmasi_password" type="password" class="form-control" id="signin-password" placeholder="Konfirmasi Password">
		                </div>
		                <button name="submit" type="submit" class="btn btn-primary btn-lg btn-block">DAFTAR</button>
                  	<div class="bottom text-center">
                  		<span class="helper-text element-right">Sudah memiliki akun? <a href="login-admin.php">Login</a></span>
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
