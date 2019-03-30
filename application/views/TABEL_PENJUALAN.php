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
		<h3 class="text-center" style="text-align: center;">Tanggal : <?php if($tanggal!='0000-00-00'){ ?><?php echo $tanggal," ", "s/d"," ", $tanggal_akhir; ?><?php }else{ echo $tanggal_satuan;}?></h3>
		<!-- <h3 class="text-center" style="text-align: center; "><?php if (Tanggal) {
			# code...
		} ?></h3> -->
		<div class="row">
			<div class="col-md-12 text-center">
				<table class="table table-bordered table-hover" border="1">
					<caption class="text-dark" style="font-weight: bold; ">
						<h4>SUB TOTAL = Kuantitas * Harga Barang <br> GRAND TOTAL = Hasil Penjumlahan Kuantitas / Hasil Penjumlahan Sub Total 
						</h4>
					</caption>
					<thead>
						<tr>
							<th>No</th>
							<th>Tanggal</th>
							<th>Barang</th>
							<th>Kuantitas</th>
							<th>Harga barang</th>
							<th>Sub Total</th>
						</tr>
					</thead>

					<?php 
					$harga_barang2 = 0;
					$total_harga = 0;
					$total_kuantitas = 0;
					$no = 1;
						foreach ($barang as $key => $row) {
							?>
							<tbody>
								<tr>
									<th><?php echo $no++; ?></th>
									<th><?php echo $row->tanggal; ?></th>
									<th><?php echo $row->barang; ?></th>
									<th class="text-right"><?php $angka_format = number_format($row->kuantitas,0,",",".");
									echo $angka_format; ?></th>
									<th class="text-right"><?php $angka_format = number_format($row->harga_barang,0,",",".");
									 echo $angka_format; ?></th>
									<!-- sub total -->
									<th class="text-right"><?php $angka_format = number_format($row->total_harga,0,",",".");
									echo $angka_format; ?></th>
								</tr>
							</tbody>

							<?php 
							//utk grand total
							$harga_barang2 += $row->total_harga;
							$total_kuantitas += $row->kuantitas;
						}
						
					 ?>
					 <tfoot>
						<tr style="font-weight: bold;">
							<td colspan="3" class="text-left">Grandtotal</td>
							<td class="text-right"><?php $angka_format = number_format($total_kuantitas,0,",",".");
							 echo $angka_format; ?></td>
							<td></td>
							<!-- <td><<?php echo $sum_jumlah->jumlah; ?></td> -->
							<td class="text-right" colspan="1"><?php echo number_format($harga_barang2,0,",","."); ?></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
		
		
		


		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
	</body>
</html>