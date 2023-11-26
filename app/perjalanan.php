<!-- @format -->
<?php
// $asal = $_POST['pilih-agen-asal'];
// $tujuan = $_POST['pilih-agen-tujuan'];
// $tanggal = $_POST['tanggal'];
// $kursi = $_POST['jumlah-kursi'];
// $harga = 100000 * $kursi;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Pembelian Tiket</title>
		<link rel="stylesheet" href="../css/perjalanan.css" />
		<script src="/js/functions.js" defer></script>
	</head>
	<body>
		<!-- diisi database -->
		<header class="navbar">
		<div class="left-section">
			<img src="../images/user.png" alt="user-logo" class="user-logo">
			<div class="user-info">
				<div class="username">
					wawan03
				</div>
				<div class="tipe-user">
					Petugas
				</div>
			</div>
		</div>
		<!-- akhir -->
		<ul>
			<li><a href="pesan_tiket.php" class="navbar-menu">pesan tiket</a></li>
			<li><a href="perjalanan.php" class="navbar-menu">perjalanan</a></li>
			<li>
				<div class="dropdown">
					<button class="dropdown-btn">KELAS ARMADA</button>
					<div class="dropdown-content">
						<a href="reguler.php">Reguler</a>
						<a href="eksekutif.php">Eksekutif</a>
					</div>
				</div>
			</li>
		</ul>
		<div class="right-section">
			<a href="login.php" class="logout"><span>Logout</span></a>
		</div>
	</header>



		<!-- diisi dari form page pesan tiket -->
		<div class="pemesanan-tiket-bar">
			<div class="left-section">
				<p class="name-bar">Pilih Bus</p>
				<div class="pemesanan-tiket-info">
					<div class="titik-keberangkatan">asdsad<?php // echo $asal;?></div>
					<img src="../images/v9_19.png" alt="">
					<div class="titik-tiba">adasd<?php //echo $tujuan;?></div>
					<ul>
						<div class="tanggal-keberangkatan"><li>asdads<?php // echo $tanggal;?></li></div>
						<div class="jumlah-kursi"><li>asdasd<?php // echo $kursi;?></li></div>
						<div class="kelas"><li>adsad<?php //echo $kelas;?></li></div>
					</ul>
				</div>
			</div>
			<div class="right-section">
				<a href="pesan_tiket.php">Ubah Pencarian</a>
			</div>
		</div>
		<main class="content-wrapper">
			<form action="">
				<main class="content-wrapper">
			<form action="">
				<div class="content-name">
					Pilih Waktu Keberangkatan
				</div>

				<!-- PENGISIAN FORM -->
				<div class="content-box">
						<div class="choice-box">
							<div class="choice-menu">
								<p class="choice-menu-name">Waktu Keberangkatan</p>
								<div class="choice-row-wrapper">
									<label for="choice1">07:00</label>
									<input type="radio" name="choice" id="choice1" value="" />
								</div>
								<div class="choice-row-wrapper">
									<label for="choice2">10:00</label>
									<input type="radio" name="choice" id="choice2" value="" />
								</div>
								<div class="choice-row-wrapper">
									<label for="choice3">13:00</label>
									<input type="radio" name="choice" id="choice3" value="" />
								</div>
								<div class="choice-row-wrapper">
									<label for="choice4">16:00</label>
									<input type="radio" name="choice" id="choice4" value="" />
								</div>
								<div class="choice-row-wrapper">
									<label for="choice5">19:00</label>
									<input type="radio" name="choice" id="choice5" value="" />
								</div>
								<br>
							</div>
						</div>
						<div class="extra-choice-box">
							<div class="extra-choice-card">
								<img src="../images/v9_37.png" alt="titik keberangkatan icon" />

								<!-- diisi dari form sebelumnya -->
								<div class="extra-choice-info">
									<p class="extra-choice-info-row-1">Titik Keberangkatan</p>
									<p class="extra-choice-info-row-2"><?php echo $asal;?></p>
								</div>
							</div>
							<div class="extra-choice-card">
								<img src="../images/v9_41.png" alt="titik tiba icon" />
								<div class="extra-choice-info">
									<p class="extra-choice-info-row-1">Titik Tiba</p>
									<p class="extra-choice-info-row-2"><?php echo $tujuan;?></p>
								</div>
							</div>
							<div class="extra-choice-card">
								<img src="../images/v9_52.png" alt="total harga icon" />
								<div class="extra-choice-info">
									<p class="extra-choice-info-row-1" >Total Harga</p>
									<p class="extra-choice-info-row-2">Rp. <span id="harga"><?php echo number_format($harga,2,',','.');?></span></p>
								</div>
							</div>
							<div class="btn extra-choice-card">
								<button type="submit">Pesan Tiket</button>
							</div>
						</div>
				</div>
			</form>

			<!-- AKHIR DARI FORM -->

		</main>
	</body>
</html>
