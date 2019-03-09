<!DOCTYPE html>
<html>
	<head>
		<title>Rekap Penjualan</title>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/css/bootstrap.min.css") ?>">
	
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

	<div class="container">
		<h2 class="text-center" style="text-align: center; margin-top: 50px;">Rekap Penjualan</h2>
		<h3 class="text-center" style="text-align: center;">Tanggal : <?php echo $tanggal; ?></h3>
		<div class="row">
			<div class="col-md-12 text-center">
				<table class="table table-bordered table-hover" border="1">
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Barang</th>
						<th>Kuantitas</th>
						<th>Harga barang</th>
						<th>Sub Total</th>
					</tr>

					<?php 
					$harga_barang2 = 0;
					$total_harga = 0;
					$no = 1;
						foreach ($barang as $key => $row) {
							?>

							<tr>
								<th><?php echo $no++; ?></th>
								<th><?php echo $row->tanggal; ?></th>
								<th><?php echo $row->barang; ?></th>
								<th><?php echo $row->kuantitas; ?></th>
								<th style="text-align: right;"><?php echo number_format($row->harga_barang); ?></th>
								<th style="text-align: right;"><?php echo number_format($row->total_harga); ?></th>
							</tr>

							<?php 
							//utk grand total
							$harga_barang2 += $row->total_harga;
						}
						
					 ?>
					<tr style="font-weight: bold;">
						<td colspan="5" class="text-left">Grandtotal Harga</td>
						<!-- <td></td>
						<td></td>
						<td><<?php echo $sum_jumlah->jumlah; ?></td> -->
						<td style="text-align: right;"><?php echo number_format($harga_barang2);  ?></td>
					</tr>
				</table>

				<div class="container">
					<h4 style="text-align: left; color: black; width: 1300px; margin-top: 50px;">SUB TOTAL = Kuantitas * Harga Barang <br> GRAND TOTAL = Hasil + Seluruh Sub Total</h4>
				</div>
			
			</div>
		</div>
	</div>
		
		
		


		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
	</body>
</html>