<!-- @format -->
<?php
require_once '../class/rute.php';
require_once '../class/karyawan.php';

session_start();
$nama = $_SESSION['nama'];
$jabatan = $_SESSION['jabatan'];

$h1 = new Rute();

$asal = $_POST['pilih-agen-asal'];
$tujuan = $_POST['pilih-agen-tujuan'];
$tanggal = $_POST['tanggal'];
$kursi = $_POST['jumlah-kursi'];
$kelas = $_POST['kelas-bus'];

// if (isset($_POST)) {
// 	$waktu = $_POST['choice'];
// }
$harga = $h1->detailHarga($asal, $tujuan, $kelas) * $kursi;
$bus = $h1->cariBus($asal, $tujuan, $kelas);
$kode_bus = $bus[0];
$no_pol = $bus[1];
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
	<header class="navbar">
		<div class="left-section">
			<img src="../images/user.png" alt="user-logo" class="user-logo">
			<div class="user-info">
				<div class="username">
					<?php echo $nama; ?>
				</div>
				<div class="tipe-user">
					<?php echo $jabatan; ?>
				</div>
			</div>
		</div>
		<!-- akhir -->
		<ul>
			<li>
				<a href="pesan_tiket.php" class="navbar-menu">pesan tiket</a>
			</li>
			<!-- <li><a href="#" class="navbar-menu">perjalanan</a></li> -->
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
				<div class="titik-keberangkatan"><?php echo $asal; ?></div>
				<img src="../images/v9_19.png" alt="">
				<div class="titik-tiba"><?php echo $tujuan; ?></div>
				<ul>
					<div class="tanggal-keberangkatan">
						<li><?php echo $tanggal; ?></li>
					</div>
					<div class="kelas">
						<li><?php echo $kelas; ?></li>
					</div>
					<div class="jumlah-kursi">
						<li><?php echo $kursi . " Kursi"; ?></li>
					</div>
				</ul>
			</div>
		</div>
		<div class="right-section">
			<a href="pesan_tiket.php">Ubah Pencarian</a>
		</div>
	</div>
	<main class="content-wrapper">
		<form action="booking.php?kode_bus=<?= $kode_bus ?>&no_pol=<?= $no_pol ?>&asal=<?= $asal ?>&tujuan=<?= $tujuan ?>&tanggal=<?= $tanggal ?>&harga=<?= $harga ?>" method="post">
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
							<input type="radio" name="choice" id="choice1" value="07:00" required />
						</div>
						<div class="choice-row-wrapper">
							<label for="choice2">10:00</label>
							<input type="radio" name="choice" id="choice2" value="10:00:00" />
						</div>
						<div class="choice-row-wrapper">
							<label for="choice3">13:00</label>
							<input type="radio" name="choice" id="choice3" value="13:00:00" />
						</div>
						<div class="choice-row-wrapper">
							<label for="choice4">16:00</label>
							<input type="radio" name="choice" id="choice4" value="16:00:00" />
						</div>
						<div class="choice-row-wrapper">
							<label for="choice5">19:00</label>
							<input type="radio" name="choice" id="choice5" value="19:00:00" />
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
							<p class="extra-choice-info-row-2"><?php echo $asal; ?></p>
						</div>
					</div>
					<div class="extra-choice-card">
						<img src="../images/v9_41.png" alt="titik tiba icon" />
						<div class="extra-choice-info">
							<p class="extra-choice-info-row-1">Titik Tiba</p>
							<p class="extra-choice-info-row-2"><?php echo $tujuan; ?></p>
						</div>
					</div>
					<div class="extra-choice-card">
						<img src="../images/v9_52.png" alt="total harga icon" />
						<div class="extra-choice-info">
							<p class="extra-choice-info-row-1">Total Harga</p>
							<p class="extra-choice-info-row-2">Rp. <span id="harga"><?php echo number_format($harga, 2, ',', '.'); ?></span></p>
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