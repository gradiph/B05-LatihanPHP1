<?php $mysqli=mysqli_connect('localhost','root','','tbl_penjualan'); ?>
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


		<h2 style="text-align: center; margin-top: 50px;">Rekap Penjualan
			<?php
			$angka = 6;
			//kalau $angka habis dibagi 2, $ganjil = 'genap'. jika tidak, $ganjil = 'ganjil'

			
			$ganjil = $angka % 2 == 0 ? '': ($angka > 5 ? 'ganjil di atas 5' : 'ganjil 5 ke bawah');

			echo $ganjil;
			?>
		</h2>
		<!-- <h3 style="text-align: center;">Tanggal : <?php echo $tanggal; ?></h3> -->
		<?php
			$host = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($host,"tbl_penjualan");
			$panggil_data = mysqli_query($host,"SELECT * FROM penjualan where date(tanggal)='$tanggal' order by barang, kuantitas, harga_barang")
		?>
		<table border="1" cellspacing="0" cellpadding="3" style="width: 800px" align="center" class="text-center">
			<thead>
				<tr>
					<th>NO</th>
					<th>TANGGAL</th>
					<th>NAMA BARANG</th>
					<th>KUANTITAS</th>
					<th>HARGA BARANG</th>
					<th>SUB TOTAL</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no=1;
					$tabel1 = array();
					//hasil query disimpan ke dalam $tabel1 dgn format array assoc
					while ($tabel = mysqli_fetch_assoc($panggil_data)) {
						$tabel1[]= $tabel;
					}
					//inisialisasi variabel
					$no=1;
					$subtotal_kuantitas=0;
					$subtotal_harga_barang=0;
					$grand_kuantitas=0;
					$grand_harga_barang=0;
						//utk menngeksekusi perbaris tabel. Mulai dari menghitung sub total dan menampilkan data perbarisnya
						foreach ($tabel1 as $key => $tab) {
							$subtotal_kuantitas += $tab['kuantitas'];
							$subtotal_harga_barang += $tab ['harga_barang'];
							?>
							<tr style="text-align: center;">
								<td><?php echo $no++; ?></td>
								<td><?php echo $tab['tanggal'] ?></td>
								<td><?php echo $tab['barang'] ?></td>
								<td><?php echo $tab['kuantitas'] ?></td>
								<td><?php echo $tab['harga_barang'] ?></td>
								<td style="text-align: right;">
									<b><?php echo $tab['harga_barang'] * $tab['kuantitas'] ?></b>
								</td>
							</tr>
							<?php
								
								if (@$tabel1 [$key+1]['kuantitas'] != $tab ['kuantitas']);
								{
									
							?>
							<?php
								//reset variabel penghitung sub total
								$subtotal_kuantitas=0;
								$subtotal_harga_barang=0;
							}
							//Grand Total
							$grand_kuantitas += $tab['kuantitas'];
							$grand_harga_barang += $tab['harga_barang'];

					}

				?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5" class="text-left">
							<b>GRAND TOTAL</b>
						</td>
						<!-- <td style="text-align: right;">
							<b><?php echo $grand_kuantitas; ?></b>
						</td> -->
						<td style="text-align: right;">
							<b><?php echo $grand_kuantitas + $grand_harga_barang; ?></b>
						</td>
					</tr>
				</tfoot>
		</table>
		
		<div class="container">
		<h4 style="text-align: left; color: black; width: 1300px; margin-top: 50px;">SUB TOTAL = Kuantitas * Harga Barang <br> GRAND TOTAL = Hasil + Seluruh Sub Total</h4>
		</div>
		
		


		<!-- Javascript -->
		<script src="<?php echo base_url ("assets/vendor/jQuery 3.3.1/jquery.min.js") ?>"></script>
		<!-- Jquery -->
		<script src="<?php echo base_url ("assets/vendor/Bootstrap v4.1.1/js/bootstrap.bundle.min.js") ?>"></script>
	</body>
</html>