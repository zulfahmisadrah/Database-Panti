<!doctype html>
<html lang="en">

<head>
	<title>Database Panti Asuhan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.min.css">

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div >
				<a class="brand" href="index.php">DATABASE PANTI ASUHAN</a>
			</div>
			<div class="container-fluid">
				<div id="tour-fullwidth" class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o"></i> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="logout-admin.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="index.php"><i class="lnr lnr-home"></i> <span>Rumah Panti</span></a>
						</li>
						<li>
							<a href="#subPengurus" data-toggle="collapse" class="active"><i class="lnr lnr-user"></i> <span>Pengurus</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPengurus" class="collapse in">
								<ul class="nav">
									<li><a href="data-pengurus.php" >Data Pengurus</a></li>
									<li><a href="tambah-pengurus.php" class="active">Tambah Pengurus</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subAnak" data-toggle="collapse" class="collapsed" aria-expanded="true"><i class="lnr lnr-database"></i> <span>Anak Asuh</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subAnak" class="collapse ">
								<ul class="nav">
									<li><a href="data-anak.php">Data Anak Asuh</a></li>
									<li><a href="tambah-anak.php">Tambah Anak Asuh</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subUsaha" data-toggle="collapse" class="collapsed"><i class="lnr lnr-layers"></i> <span>Usaha</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subUsaha" class="collapse ">
								<ul class="nav">
									<li><a href="data-usaha.php">Data Usaha</a></li>
									<li><a href="tambah-usaha.php">Tambah Usaha</a></li>
								</ul>
							</div>
						</li>
						<li><a href="data-donatur.php"><i class="lnr lnr-users"></i> <span>Data Donatur</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
						<li><a href="#"></i>Pengurus</a></li>
						<li class="active">Tambah Pengurus</li>
					</ul>
					<h1 class="page-title">Tambah Pengurus</h1>
					<div class="row">
						<div class="col-md-12">
							<!-- PENGURUS FORM -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Data Pengurus Panti Asuhan A</h3>
								</div>
								<div class="panel-body">
									<form action="tambahDataPengurus.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="contact-name" class="control-label">Nama</label>
											<input name="nama" type="text" class="form-control" id="contact-name" placeholder="Nama Pengurus">
										</div>
										<div class="form-group">
											<label for="exampleFormControlSelect1" class="control-label">Jenis Kelamin</label>
											<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
												<option class="active">--Pilih Salah Satu--</option>
												<option value="Pria">Pria</option>
												<option value="Wanita">Wanita</option>
											</select>
										</div>
										<div class="form-group">
											<label  class="control-label">Jabatan</label>
											<select name="jabatan" class="form-control" id="exampleFormControlSelect1">
												<option class="active">--Pilih Salah Satu--</option>
												<option value="Kepala">Kepala</option>
												<option value="Sekretaris">Sekretaris</option>
												<option value="Bendahara">Bendahara</option>
												<option value="Anggota">Anggota</option>
											</select>
										</div>
										<div class="form-group">
											<label for="contact-name" class="control-label">No. HP</label>
											<input name="telepon" type="text" class="form-control" id="contact-name" placeholder="ex. 08xxxxxxxx">
										</div>
										<div class="custom-file">
											<label for="exampleInputFile">Foto</label>
											<input name="foto" type="file" class="customFile" class="custom-file-input">
											<p class="help-block">Upload foto diri pengurus (Size Max. 2 MB)</p>
										</div>
										<button name="submit" type="submit" class="post btn btn-primary"><i class="fa fa-save"></i>SIMPAN</button>
									</form>
								</div>
							</div>
							<!-- END PENGURUS FORM -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>

	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofilpro-common.js"></script>
</body>

</html>