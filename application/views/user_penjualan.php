<!DOCTYPE html>
<html>
	<head>
		<title>Penjualan</title>
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
		<div class="container" style="width: 500px; margin-top: 50px;">
				<table class="table">
					<h1 class="text-center">Penjualan</h1>
					<br>
					<form action="<?php echo base_url(); ?>index.php/Penjualan/masuk_data" method="post">
						<tr>
							<th>Tanggal</th>
								<td><input type="date" name="tanggal" class="form-control" value="<?php echo $this->session->userdata('tanggal'); ?>"></td>
						</tr>
						<tr>
							<th>Nama Barang</th>
								<td><input type="text" name="barang" class="form-control" required autofocus maxlength="20"></td>
						</tr>
						<tr>
							<th>Kuantitas</th>
								<td><input type="text" name="kuantitas" class="form-control" required autofocus maxlength="20"></td>
						</tr>
						<tr>
							<th>Harga Barang</th>
								<td><input type="text" name="harga_barang" class="form-control" required autofocus maxlength="20"></td>
						</tr>
						<tr>
							<td><button type="submit" name="simpan" class="btn btn-primary">Submit</button></td>
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