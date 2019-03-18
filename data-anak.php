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
							<a href="#subPengurus" data-toggle="collapse" class="collapsed" ><i class="lnr lnr-user"></i> <span>Pengurus</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPengurus" class="collapse ">
								<ul class="nav">
									<li><a href="data-pengurus.php" >Data Pengurus</a></li>
									<li><a href="tambah-pengurus.php">Tambah Pengurus</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subAnak" data-toggle="collapse" class="active" aria-expanded="true"><i class="lnr lnr-database"></i> <span>Anak Asuh</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subAnak" class="collapse in">
								<ul class="nav">
									<li><a href="data-anak.php" class="active">Data Anak Asuh</a></li>
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
						<li><a href="#"></i>Anak Asuh</a></li>
						<li class="active">Data Anak Asuh</li>
					</ul>
					<h1 class="page-title">Data Anak Asuh</h1>
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
									<h3 class="panel-title">Daftar Anak Asuh Panti Asuhan A</h3>
								<?php } ?>
									<div class="navbar-form navbar-right" style="margin:0">
										<a href="tambah-anak.php" class="btn btn-primary navbar-form"><i class="fa fa-plus"></i>Tambah Anak Asuh</a>
										<form action="data-anak.php" method="get" class="navbar-form navbar-right search-form">
											<input name="cari" type="text" value="" class="form-control" placeholder="Cari data anak...">
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
													<th><center>Nama</center></th>
													<th><center>Nama Ayah</center></th>
													<th><center>Nama Ibu</center></th>
													<th><center>Jenis Kelamin</center></th>
													<th><center>Tanggal Lahir</center></th>
													<th><center>Usia</center></th>
													<th><center>Pendidikan</center></th>
													<th><center>Hobi</center></th>
													<th style="width: 100px"><center>Action</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												if (isset($_GET['cari'])) {
													$paginasi = false;
													include("koneksi.php");
													$cari = $_GET['cari'];
													$query = "SELECT * FROM anak_panti WHERE nama LIKE '%$cari%' OR nama_ayah LIKE '%$cari%' OR nama_ibu LIKE '%$cari%' OR jenis_kelamin LIKE '%$cari%' OR tanggal_lahir LIKE '%$cari%' OR usia LIKE '%$cari%' OR pendidikan LIKE '%$cari%' OR hobi LIKE '%$cari%'";
													$hasil = mysqli_query($link, $query);
													if (mysqli_num_rows($hasil)>0) {
														$i = 1;
														while	($data = mysqli_fetch_array($hasil)) {
															echo "<tr>";
															echo "<td>$i</td>"; $i++;
															echo "<td>" . $data['nama'] . "</td>";
															echo "<td>" . $data['nama_ayah'] . "</td>";
															echo "<td>" . $data['nama_ibu'] . "</td>";
															echo "<td>" . $data['jenis_kelamin'] . "</td>";
															echo "<td>" . $data['tanggal_lahir'] . "</td>";
															echo "<td>" . $data['usia'] . " Tahun</td>";
															echo "<td>" . $data['pendidikan'] . "</td>";
															echo "<td>" . $data['hobi'] . "</td>";
															?>
																<td>
																	<div class="d-flex justify-content-center">
																	<a href="" id="action" class="btn btn-warning" data-toggle="modal" data-target="#sunting<?php echo $data['id_anak']; ?>" ><i class="fa fa-pencil"></i></a>
																	<a href="" id="action" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $data['id_anak']; ?>"><i class="fa fa-trash"></i></a>
																	</div>
																</td>
															</tr>
															<!-- POPUP SUNTING -->
															<div class="modal fade" id="sunting<?php echo $data['id_anak']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-lg" role="document">
																	<div class="modal-content">
																		<button type="button" class="close-button" data-dismiss="modal">
																			<i class="fa fa-times"></i>
																		</button>
																		<div class="modal-header">
																			<h4 class="modal-title" id="exampleModalLabel">
																				<i class="fa fa-pencil"></i> Sunting Anak Asuh
																			</h4>
																		</div>
																		<div class="modal-body" id="popup-sunting">
																			<form action="updateDataAnak.php?id=<?php echo $data['id_anak']; ?>" method="post" enctype="multipart/form-data">
																				<div class="form-group">
																					<label for="contact-name" class="control-label">Nama</label>
																					<input name="nama" value="<?php echo $data['nama']; ?>" type="text" class="form-control" id="contact-name" placeholder="Nama Anak Asuh">
																				</div>
																				<div class="form-group">
																					<label for="contact-name" class="control-label">Nama Ayah</label>
																					<input name="nama_ayah" value="<?php echo $data['nama_ayah']; ?>" type="text" class="form-control" id="contact-name" placeholder="Nama Ayah">
																				</div>
																				<div class="form-group">
																					<label for="contact-name" class="control-label">Nama Ibu</label>
																					<input name="nama_ibu" value="<?php echo $data['nama_ibu']; ?>" type="text" class="form-control" id="contact-name" placeholder="Nama Ibu">
																				</div>
																				<div class="form-group">
																					<label for="exampleFormControlSelect1" class="control-label">Jenis Kelamin</label>
																					<select name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" class="form-control" id="exampleFormControlSelect1">
																						<option value="<?php echo $data['jenis_kelamin']; ?>" class="active"><?php echo $data['jenis_kelamin']; ?></option>
																						<option value="Laki-laki">Laki-laki</option>
																						<option value="Perempuan">Perempuan</option>
																					</select>
																				</div>
																				<div class="form-group">
																					<label for="contact-name" class="control-label">Tanggal Lahir</label>
																					<input name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" type="date" class="form-control" id="contact-name" placeholder="Tanggal Lahir">
																				</div>
																				<div class="form-group">
																					<label  class="control-label">Pendidikan</label>
																					<select name="pendidikan" value="<?php echo $data['pendidikan']; ?>" class="form-control" id="exampleFormControlSelect1">
																						<option value="<?php echo $data['pendidikan']; ?>" class="active"><?php echo $data['pendidikan']; ?></option>
																						<option value="SD">SD</option>
																						<option value="SMP">SMP</option>
																						<option value="SMA">SMA</option>
																						<option value="Sarjana">Sarjana</option>
																					</select>
																				</div>
																				<div class="form-group">
																					<label for="contact-name" class="control-label">Hobi</label>
																					<input name="hobi" value="<?php echo $data['hobi']; ?>" type="text" class="form-control" id="contact-name" placeholder="ex. Sepak bola, membaca, ...">
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
															<div class="modal fade" id="hapus<?php echo $data['id_anak']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-lg" role="document" id="modal-small">
																	<div class="modal-content">
																		<button type="button" class="close-button" data-dismiss="modal">
																			<i class="fa fa-times"></i>
																		</button>
																		<div class="modal-header">
																			<h4 class="modal-title" id="exampleModalLabel">
																				<i class="fa fa-trash"></i> Hapus Data Anak Asuh
																			</h4>
																		</div>
																		<div class="modal-body" id="popup-hapus">
																			<p class="text-center">Yakin ingin menghapus data tersebut?</p>
																			<div class="text-center">
																				<!-- data-toggle="modal" data-target="#berhasil-hapus" data-dismiss="modal" -->
																				<a href="hapusDataAnak.php?id=<?php echo $data['id_anak']; ?>" type="button" class="btn btn-primary" style="margin-right: 20px">Ya</a>
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
												$query = "SELECT * FROM anak_panti";
												$hasil = mysqli_query($link, $query);
												if (mysqli_num_rows($hasil)>0) {
													$query  = "SELECT * FROM anak_panti LIMIT $posisi,$batas";
													$hasil = mysqli_query($link,$query);
													$no = $posisi + 1;
													while	($data = mysqli_fetch_assoc($hasil)) {
														echo "<tr>";
														echo "<td>$no</td>"; $no++;
														echo "<td>" . $data['nama'] . "</td>";
														echo "<td>" . $data['nama_ayah'] . "</td>";
														echo "<td>" . $data['nama_ibu'] . "</td>";
														echo "<td>" . $data['jenis_kelamin'] . "</td>";
														echo "<td>" . $data['tanggal_lahir'] . "</td>";
														echo "<td>" . $data['usia'] . " Tahun</td>";
														echo "<td>" . $data['pendidikan'] . "</td>";
														echo "<td>" . $data['hobi'] . "</td>";
														?>
															<td>
																<div class="d-flex justify-content-center">
																<a href="" id="action" class="btn btn-warning" data-toggle="modal" data-target="#sunting<?php echo $data['id_anak']; ?>" ><i class="fa fa-pencil"></i></a>
																<a href="" id="action" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $data['id_anak']; ?>"><i class="fa fa-trash"></i></a>
																</div>
															</td>
														</tr>
														<!-- POPUP SUNTING -->
														<div class="modal fade" id="sunting<?php echo $data['id_anak']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-lg" role="document">
																<div class="modal-content">
																	<button type="button" class="close-button" data-dismiss="modal">
																		<i class="fa fa-times"></i>
																	</button>
																	<div class="modal-header">
																		<h4 class="modal-title" id="exampleModalLabel">
																			<i class="fa fa-pencil"></i> Sunting Anak Asuh
																		</h4>
																	</div>
																	<div class="modal-body" id="popup-sunting">
																		<form action="updateDataAnak.php?id=<?php echo $data['id_anak']; ?>" method="post" enctype="multipart/form-data">
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Nama</label>
																				<input name="nama" value="<?php echo $data['nama']; ?>" type="text" class="form-control" id="contact-name" placeholder="Nama Anak Asuh">
																			</div>
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Nama Ayah</label>
																				<input name="nama_ayah" value="<?php echo $data['nama_ayah']; ?>" type="text" class="form-control" id="contact-name" placeholder="Nama Ayah">
																			</div>
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Nama Ibu</label>
																				<input name="nama_ibu" value="<?php echo $data['nama_ibu']; ?>" type="text" class="form-control" id="contact-name" placeholder="Nama Ibu">
																			</div>
																			<div class="form-group">
																				<label for="exampleFormControlSelect1" class="control-label">Jenis Kelamin</label>
																				<select name="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" class="form-control" id="exampleFormControlSelect1">
																					<option value="<?php echo $data['jenis_kelamin']; ?>" class="active"><?php echo $data['jenis_kelamin']; ?></option>
																					<option value="Laki-laki">Laki-laki</option>
																					<option value="Perempuan">Perempuan</option>
																				</select>
																			</div>
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Tanggal Lahir</label>
																				<input name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" type="date" class="form-control" id="contact-name" placeholder="Tanggal Lahir">
																			</div>
																			<div class="form-group">
																				<label  class="control-label">Pendidikan</label>
																				<select name="pendidikan" value="<?php echo $data['pendidikan']; ?>" class="form-control" id="exampleFormControlSelect1">
																					<option value="<?php echo $data['pendidikan']; ?>" class="active"><?php echo $data['pendidikan']; ?></option>
																					<option value="SD">SD</option>
																					<option value="SMP">SMP</option>
																					<option value="SMA">SMA</option>
																					<option value="Sarjana">Sarjana</option>
																				</select>
																			</div>
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Hobi</label>
																				<input name="hobi" value="<?php echo $data['hobi']; ?>" type="text" class="form-control" id="contact-name" placeholder="ex. Sepak bola, membaca, ...">
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
														<div class="modal fade" id="hapus<?php echo $data['id_anak']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-lg" role="document" id="modal-small">
																<div class="modal-content">
																	<button type="button" class="close-button" data-dismiss="modal">
																		<i class="fa fa-times"></i>
																	</button>
																	<div class="modal-header">
																		<h4 class="modal-title" id="exampleModalLabel">
																			<i class="fa fa-trash"></i> Hapus Data Anak Asuh
																		</h4>
																	</div>
																	<div class="modal-body" id="popup-hapus">
																		<p class="text-center">Yakin ingin menghapus data tersebut?</p>
																		<div class="text-center">
																			<!-- data-toggle="modal" data-target="#berhasil-hapus" data-dismiss="modal" -->
																			<a href="hapusDataAnak.php?id=<?php echo $data['id_anak']; ?>" type="button" class="btn btn-primary" style="margin-right: 20px">Ya</a>
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
												$query2     = mysqli_query($link, "select * from anak_panti");
												$jmldata    = mysqli_num_rows($query2);
												$jmlhalaman = ceil($jmldata/$batas);

												$previous = $halaman - 1;
												if ($previous > 0){
													echo "<li><a href='data-anak.php?halaman=$previous'><i class='fa fa-angle-left'></i><span class='sr-only'>Previous</span></a></li>";
												}
												for($i=1;$i<=$jmlhalaman;$i++) {
													if ($i != $halaman){
														echo " <li><a href=\"data-anak.php?halaman=$i\">$i</a></li>";
													} else {
														echo " <li class='active'><a>$i</a><li>";
													}
												}
												$next = $halaman + 1;
												if ($next <= $jmlhalaman){
													echo "<li><a href='data-anak.php?halaman=$next'><i class='fa fa-angle-right'></i><span class='sr-only'>Next</span></a></li>";
												}
												echo "<br><br>Total Anak Asuh : <b>$jmldata</b>";
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
