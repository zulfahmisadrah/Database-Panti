<!DOCTYPE html>
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
			<div class="brand">
				<a href="index.php">DATABASE PANTI ASUHAN</a>
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
							<a href="index.php" data-toggle="collapse" class="active"><i class="lnr lnr-home"></i> <span>Rumah Panti</span></a>
						</li>
						<li>
							<a href="#subBlog" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Pengurus</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subBlog" class="collapse ">
								<ul class="nav">
									<li><a href="data-pengurus.php">Data Pengurus</a></li>
									<li><a href="tambah-pengurus.php">Tambah Pengurus</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPanti" data-toggle="collapse" class="collapsed"><i class="lnr lnr-database"></i> <span>Anak Asuh</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPanti" class="collapse ">
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
						<li class="active">Panti Asuhan A</li>
					</ul>
					<h1 class="page-title">Panti Asuhan A</h1>

					<div class="row">
						<div class="col-md-6">
							<div class="widget widget-mini-bar">
								<span style="font-size: 14px;">
									<i class="fa fa-home text-primary mb-2 fa-2x"></i><br>
									<h4>Gambar Panti Asuhan A</h4>
								</span>
								<hr width="80%">
								<img src="image/LKSAMahdiyat.jpeg" style="width:100%;" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="widget">
								<span style="font-size: 14px;0" class="widget-mini-bar">
									<h4 style="font-size: 20px; font-weight: bold;text-align: center">Data Panti Asuhan A</h4>
								</span>
								<hr width="80%">
								<?php
									include("koneksi.php");
									$query="SELECT * FROM rumah_panti";
									$hasil= mysqli_query($link, $query);
									$data = mysqli_fetch_assoc($hasil);
								?>
								<div class="form-group row">
									<label for="#alamat" class="col-sm-4 col-form-label font-weight-bold text-dark">Alamat</label>
									<div class="col-sm-8">
									<p id="alamat" class="col-form-label"><span>: </span><?php echo $data['alamat']; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="#alamat" class="col-sm-4 col-form-label font-weight-bold text-dark">Jumlah Anak</label>
									<div class="col-sm-8">
									<p id="alamat" class="col-form-label"><span>: </span><?php echo $data['jumlah_anak']; ?> Anak</p>
									</div>
								</div>
								<div class="form-group row">
									<label for="#alamat" class="col-sm-4 col-form-label font-weight-bold text-dark">Tahun Terbentuk</label>
									<div class="col-sm-8">
									<p id="alamat" class="col-form-label"><span>: </span><?php echo $data['tahun_terbentuk']; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="#alamat" class="col-sm-4 col-form-label font-weight-bold text-dark">Kepala Panti</label>
									<div class="col-sm-8">
									<p id="alamat" class="col-form-label"><span>: </span><?php echo $data['kepala_panti']; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="#alamat" class="col-sm-4 col-form-label font-weight-bold text-dark">No. Telepon</label>
									<div class="col-sm-8">
									<p id="alamat" class="col-form-label"><span>: </span><?php echo $data['no_telepon']; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="#alamat" class="col-sm-4 col-form-label font-weight-bold text-dark">No. Rekening</label>
									<div class="col-sm-8">
									<p id="alamat" class="col-form-label"><span>: </span><?php echo $data['no_rekening']; ?></p>
									</div>
								</div>
								<div class="form-group row">
									<label for="#alamat" class="col-sm-4 col-form-label font-weight-bold text-dark">Kas Panti</label>
									<div class="col-sm-8">
									<p id="alamat" class="col-form-label"><span>: </span>Rp.<?php echo $data['kas_panti']; ?></p>
									</div>
								</div>
								
							</div>
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
	<script src="assets/vendor/Flot/jquery.flot.js"></script>
	<script src="assets/vendor/Flot/jquery.flot.resize.js"></script>
	<script src="assets/vendor/Flot/jquery.flot.time.js"></script>
	<script src="assets/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
	<script src="assets/scripts/klorofilpro-common.js"></script>

	<script>
	$(function() {

		// visit chart
		var plot, visit;

		visit = [
			[gt(2013, 1, 1), 200],
			[gt(2013, 2, 1), 300],
			[gt(2013, 3, 1), 360],
			[gt(2013, 4, 1), 340],
			[gt(2013, 5, 1), 440],
			[gt(2013, 6, 1), 600],
			[gt(2013, 7, 1), 1050]
		];

		plot = $.plot($('#visit-chart'), [{
				data: visit,
				label: "Visits"
			}],

			{
				series: {
					lines: {
						show: true,
						lineWidth: 2,
						fill: false
					},
					points: {
						show: true,
						lineWidth: 3,
						fill: true,
						fillColor: "#fff"
					},
					shadowSize: 0
				},
				grid: {
					hoverable: true,
					clickable: true,
					borderWidth: 0,
					tickColor: "#fff",

				},
				colors: ["#fff"],
				xaxis: {
					mode: "time",
					timezone: "browser",
					minTickSize: [1, "day"],
					timeformat: "%a",
					font: {
						color: "#fff"
					},
					tickColor: "transparent",
					autoscaleMargin: 0.02
				},
				yaxis: {
					font: {
						color: "#fff"
					},
					tickColor: "transparent",
					ticks: 8,
				},
				legend: {
					show: false
				},
				tooltip: {
					show: true,
					cssClass: 'flotTip-blue',
					content: '%s: %y'
				}
			}
		);

		// get day function
		function gt(y, m, d) {
			return new Date(y, m - 1, d).getTime();
		}
	});
	</script>
</body>

</html>
