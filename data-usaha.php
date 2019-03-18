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
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	
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
							<a href="index.php"><i class="lnr lnr-home"></i> <span>Rumah Panti</span></a>
						</li>
						<li>
							<a href="#subPengurus" data-toggle="collapse" class="collapsed" ><i class="lnr lnr-user"></i> <span>Pengurus</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPengurus" class="collapse ">
								<ul class="nav">
									<li><a href="data-pengurus.php" >Data Pengurus</a></li>
									<li><a href="tambah-pengurus.php">Tambah Pengurus</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subAnak" data-toggle="collapse" class="collapsed"><i class="lnr lnr-database"></i> <span>Anak Asuh</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subAnak" class="collapse ">
								<ul class="nav">
									<li><a href="data-anak.php" >Data Anak Asuh</a></li>
									<li><a href="tambah-anak.php">Tambah Anak Asuh</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subUsaha" data-toggle="collapse" class="active" aria-expanded="true"><i class="lnr lnr-layers"></i> <span>Usaha</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subUsaha" class="collapse in">
								<ul class="nav">
									<li><a href="data-usaha.php" class="active">Data Usaha</a></li>
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
						<li><a href="#"></i>Usaha</a></li>
						<li class="active">Data Usaha</li>
					</ul>
					<h1 class="page-title">Data Usaha</h1>
					<div class="row">
						<div class="col-md-12">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<?php
									if (isset($_GET['cari'])) {
										$cari = $_GET['cari'];
	 								?>
									<h3 class="panel-title">Cari kata kunci : <?php echo $cari; ?></h3>
								<?php } else { ?>
									<h3 class="panel-title">Daftar Usaha Panti Asuhan A</h3>
								<?php } ?>
									<div class="navbar-form navbar-right" style="margin:0">
										<a href="tambah-usaha.php" class="btn btn-primary navbar-form"><i class="fa fa-plus"></i>Tambah Usaha</a>
										<form action="data-usaha.php" method="get" class="navbar-form navbar-right search-form">
											<input name="cari" type="text" value="" class="form-control" placeholder="Cari data usaha...">
											<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
										</form>
									</div>
									
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th><center>No.</center></th>
													<th><center>Nama Usaha</center></th>
													<th><center>Jenis Usaha</center></th>
													<th><center>Penanggung Jawab</center></th>
													<th><center>Pendapatan</center></th>
													<th style="width: 100px"><center>Action</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												if (isset($_GET['cari'])) {
													$paginasi = false;
													include("koneksi.php");
													$cari = $_GET['cari'];
													$query = "SELECT * FROM usaha_panti WHERE nama_usaha LIKE '%$cari%' OR jenis_usaha LIKE '%$cari%' OR pj LIKE '%$cari%' OR pendapatan LIKE '%$cari%'";
													$hasil = mysqli_query($link, $query);
													if (mysqli_num_rows($hasil)>0) {
														$i = 1;
														while	($data = mysqli_fetch_array($hasil)) {
															echo "<tr>";
															echo "<td>$i</td>"; $i++;
															echo "<td>" . $data['nama_usaha'] . "</td>";
															echo "<td>" . $data['jenis_usaha'] . "</td>";
															echo "<td>" . $data['pj'] . "</td>";
															echo "<td>Rp." . $data['pendapatan'] . "</td>";
															?>
																<td>
																	<div class="d-flex justify-content-center">
																	<a href="" id="action" class="btn btn-warning" data-toggle="modal" data-target="#sunting<?php echo $data['id_usaha']; ?>" ><i class="fa fa-pencil"></i></a>
																	<a href="" id="action" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $data['id_usaha']; ?>"><i class="fa fa-trash"></i></a>
																	</div>
																</td>
															</tr>
															<!-- POPUP SUNTING -->
															<div class="modal fade" id="sunting<?php echo $data['id_usaha']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-lg" role="document">
																	<div class="modal-content">
																		<button type="button" class="close-button" data-dismiss="modal">
																			<i class="fa fa-times"></i>
																		</button>
																		<div class="modal-header">
																			<h4 class="modal-title" id="exampleModalLabel">
																				<i class="fa fa-pencil"></i> Sunting Usaha
																			</h4>
																		</div>
																		<div class="modal-body" id="popup-sunting" style="height:330px">
																			<form action="updateDataUsaha.php?id=<?php echo $data['id_usaha']; ?>" method="post" enctype="multipart/form-data">
																				<div class="form-group">
																					<label for="contact-name" class="control-label">Nama Usaha</label>
																					<input name="nama_usaha" value="<?= $data['nama_usaha'];?>" type="text" class="form-control" id="contact-name" placeholder="Nama Usaha">
																				</div>
																				<div class="form-group">
																					<label for="exampleFormControlSelect1" class="control-label">Jenis Usaha</label>
																					<select name="jenis_usaha" value="<?= $data['jenis_usaha'];?>" class="form-control" id="exampleFormControlSelect1">
																						<option  value="<?= $data['jenis_usaha'];?>" class="active"><?= $data['jenis_usaha'];?></option>
																						<option value="Produk">Produk</option>
																						<option value="Jasa">Jasa</option>
																					</select>
																				</div>
																				<div class="form-group">
																					<label  class="control-label">Penanggung Jawab</label>
																					<?php 
																						include("koneksi.php");
																						$query2 = "SELECT nama FROM pengurus_panti";
																						$hasil2 = mysqli_query($link, $query2);
																					?>
																					<select name="pj" class="form-control" id="exampleFormControlSelect1">
																						<option value="<?= $data['pj'];?>" class="active"><?= $data['pj'];?></option>
																						<?php
																							while($data2 = mysqli_fetch_array($hasil2)): ?>
																						<option value="<?= $data2['nama']?>"><?= $data2['nama']?></option>
																						<?php endwhile; ?>
																					</select>
																				</div>
																				<div class="form-group">
																					<label for="contact-name" class="control-label">Pendapatan</label>
																					<input name="pendapatan" value="<?= $data['pendapatan'];?>" type="text" class="form-control" id="contact-name" placeholder="ex. 1000000">
																				</div>
																		</div>
																		<div class="modal-footer">
																			<button name="submit" type="submit" class="btn btn-primary">
																				Simpan
																			</button>
																		</div>
																			</form>
																	</div>
																</div>
															</div>
															<!-- END POPUP SUNTING -->
															<!-- POPUP HAPUS -->
															<div class="modal fade" id="hapus<?php echo $data['id_usaha']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-lg" role="document" id="modal-small">
																	<div class="modal-content">
																		<button type="button" class="close-button" data-dismiss="modal">
																			<i class="fa fa-times"></i>
																		</button>
																		<div class="modal-header">
																			<h4 class="modal-title" id="exampleModalLabel">
																				<i class="fa fa-trash"></i> Hapus Data Usaha
																			</h4>
																		</div>
																		<div class="modal-body" id="popup-hapus">
																			<p class="text-center">Yakin ingin menghapus data tersebut?</p>
																			<div class="text-center">
																				<!-- data-toggle="modal" data-target="#berhasil-hapus" data-dismiss="modal" -->
																				<a href="hapusDataUsaha.php?id=<?php echo $data['id_usaha']; ?>" type="button" class="btn btn-primary" style="margin-right: 20px">Ya</a>
																				<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- END POPUP HAPUS -->
														<?php
															}
														}
													} else {
												?>
												<?php
												$paginasi = true;
												include("koneksi.php");
												// Langkah 1. Tentukan batas,cek halaman & posisi data
												$batas   = 5;
												if (isset($_GET['halaman'])) {
													$halaman = $_GET['halaman'];
												}
												if(empty($halaman)){
												 $posisi  = 0;
												 $halaman = 1;
												}
												else{
													$posisi  = ($halaman-1) * $batas;
												}

												// Langkah 2. Sesuaikan query dengan posisi dan batas
												$query = "SELECT * FROM usaha_panti";
												$hasil = mysqli_query($link, $query);
												if (mysqli_num_rows($hasil)>0) {
													$query  = "SELECT * FROM usaha_panti LIMIT $posisi,$batas";
													$hasil = mysqli_query($link,$query);
													$no = $posisi + 1;
													while	($data = mysqli_fetch_assoc($hasil)) {
														echo "<tr>";
														echo "<td>$no</td>"; $no++;
														echo "<td>" . $data['nama_usaha'] . "</td>";
														echo "<td>" . $data['jenis_usaha'] . "</td>";
														echo "<td>" . $data['pj'] . "</td>";
														echo "<td>Rp." . $data['pendapatan'] . "</td>";
														?>
															<td>
																<div class="d-flex justify-content-center">
																<a href="" id="action" class="btn btn-warning" data-toggle="modal" data-target="#sunting<?php echo $data['id_usaha']; ?>" ><i class="fa fa-pencil"></i></a>
																<a href="" id="action" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $data['id_usaha']; ?>"><i class="fa fa-trash"></i></a>
																</div>
															</td>
														</tr>
														<!-- POPUP SUNTING -->
														<div class="modal fade" id="sunting<?php echo $data['id_usaha']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-lg" role="document">
																<div class="modal-content">
																	<button type="button" class="close-button" data-dismiss="modal">
																		<i class="fa fa-times"></i>
																	</button>
																	<div class="modal-header">
																		<h4 class="modal-title" id="exampleModalLabel">
																			<i class="fa fa-pencil"></i> Sunting Usaha
																		</h4>
																	</div>
																	<div class="modal-body" id="popup-sunting" style="height:330px">
																		<form action="updateDataUsaha.php?id=<?php echo $data['id_usaha']; ?>" method="post" enctype="multipart/form-data">
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Nama Usaha</label>
																				<input name="nama_usaha" value="<?= $data['nama_usaha'];?>" type="text" class="form-control" id="contact-name" placeholder="Nama Usaha">
																			</div>
																			<div class="form-group">
																				<label for="exampleFormControlSelect1" class="control-label">Jenis Usaha</label>
																				<select name="jenis_usaha" value="<?= $data['jenis_usaha'];?>" class="form-control" id="exampleFormControlSelect1">
																					<option  value="<?= $data['jenis_usaha'];?>" class="active"><?= $data['jenis_usaha'];?></option>
																					<option value="Produk">Produk</option>
																					<option value="Jasa">Jasa</option>
																				</select>
																			</div>
																			<div class="form-group">
																				<label  class="control-label">Penanggung Jawab</label>
																				<?php 
																					include("koneksi.php");
																					$query2 = "SELECT nama FROM pengurus_panti";
																					$hasil2 = mysqli_query($link, $query2);
																				?>
																				<select name="pj" class="form-control" id="exampleFormControlSelect1">
																					<option value="<?= $data['pj'];?>" class="active"><?= $data['pj'];?></option>
																					<?php
																						while($data2 = mysqli_fetch_array($hasil2)): ?>
																					<option value="<?= $data2['nama']?>"><?= $data2['nama']?></option>
																					<?php endwhile; ?>
																				</select>
																			</div>
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Pendapatan</label>
																				<input name="pendapatan" value="<?= $data['pendapatan'];?>" type="text" class="form-control" id="contact-name" placeholder="ex. 1000000">
																			</div>
																	</div>
																	<div class="modal-footer">
																		<button name="submit" type="submit" class="btn btn-primary">
																			Simpan
																		</button>
																	</div>
																		</form>
																</div>
															</div>
														</div>
														<!-- END POPUP SUNTING -->
														<!-- POPUP HAPUS -->
														<div class="modal fade" id="hapus<?php echo $data['id_usaha']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-lg" role="document" id="modal-small">
																<div class="modal-content">
																	<button type="button" class="close-button" data-dismiss="modal">
																		<i class="fa fa-times"></i>
																	</button>
																	<div class="modal-header">
																		<h4 class="modal-title" id="exampleModalLabel">
																			<i class="fa fa-trash"></i> Hapus Data Usaha
																		</h4>
																	</div>
																	<div class="modal-body" id="popup-hapus">
																		<p class="text-center">Yakin ingin menghapus data tersebut?</p>
																		<div class="text-center">
																			<!-- data-toggle="modal" data-target="#berhasil-hapus" data-dismiss="modal" -->
																			<a href="hapusDataUsaha.php?id=<?php echo $data['id_usaha']; ?>" type="button" class="btn btn-primary" style="margin-right: 20px">Ya</a>
																			<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- END POPUP HAPUS -->
													<?php
														}
													}
												}
													?>
											</tbody>
										</table>
									</div>
									<div class="text-center">
										<ul class="pagination">
											<!-- Langkah 3: Hitung total data dan halaman serta link 1,2,3  -->
											<?php
											if ($paginasi) {
												$query2     = mysqli_query($link, "select * from usaha_panti");
												$jmldata    = mysqli_num_rows($query2);
												$jmlhalaman = ceil($jmldata/$batas);

												$previous = $halaman - 1;
												if ($previous > 0){
													echo "<li><a href='data-usaha.php?halaman=$previous'><i class='fa fa-angle-left'></i><span class='sr-only'>Previous</span></a></li>";
												}
												for($i=1;$i<=$jmlhalaman;$i++) {
													if ($i != $halaman){
														echo " <li><a href=\"data-usaha.php?halaman=$i\">$i</a></li>";
													} else {
														echo " <li class='active'><a>$i</a><li>";
													}
												}
												$next = $halaman + 1;
												if ($next <= $jmlhalaman){
													echo "<li><a href='data-usaha.php?halaman=$next'><i class='fa fa-angle-right'></i><span class='sr-only'>Next</span></a></li>";
												}
												echo "<br><br>Total Usaha : <b>$jmldata</b>";
											}
											?>
										</ul>
									</div>
								</div>
							</div>
							<!-- END BORDERED TABLE -->
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
