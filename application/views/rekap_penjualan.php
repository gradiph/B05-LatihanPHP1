<!DOCTYPE html>
<html>
	<head>
		<title>Rekap Penjualan</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/css/bootstrap.min.css") ?>">
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		<!-- Css -->
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		<!-- font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url ("assets/vendor/fontawesome-free-5.5.0-web/css/fontawesome.min.css") ?>">
	</head>
	<body>
		
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse container" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-light" href="<?php echo base_url();?>index.php/Penjualan/index">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="<?php echo base_url();?>index.php/Penjualan/penjualan_halaman_dua">Penjualan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="<?php echo base_url();?>index.php/Penjualan/rekap_penjualan">Rekap Penjualan</a>
					</li>
				</ul>
			</div>
		</nav>
		
		<!-- Isi -->
		<div class="container text-center py-3" style="width: 500px; margin-top: 50px;">
		<table class="table" style="width: 500px;">
			<caption class="text-dark" style="font-weight: bold;">Input Tanggal Rentang Waktu Tertentu</caption>
			<h2 class="text-center py-3">Rekap Penjualan</h2>
			<form action="<?php echo base_url(); ?>index.php/Penjualan/TABEL_PENJUALAN" method="get">
			<tr>
				<th><label for="input_tanggal_satuan">Tanggal - Satuan</label></th>
					<td><input type="date" name="tanggal_satuan" id="input_tanggal_satuan" class="form-control" value=""></td>

			</tr>
			
			<tr>
				<th><label for="input-tanggal">Tanggal</th>
				<td><input type="date" name="tanggal" id="input-tanggal" value="0000-00-00" class="form-control"></td>
				<th class="text-dark" style="font-weight: bold;">-</th>
				<th><label for="tanggal_akhir">Tanggal Akhir</th>
				<th><input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control" value="0000-00-00"></th>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" class="btn btn-primary"></td>
			</tr>
			</form>
		</table>
		</div>
		
		
		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
	</body>
</html>