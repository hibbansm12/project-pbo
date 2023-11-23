<?php
require_once '../class/rute.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Tiket</title>
  <link rel="stylesheet" href="../css/pesan_tiket.css">
</head>
<body>
    <header class="navbar">
			<ul>
				<li>
					<a href="#" class="navbar-menu">pesan tiket</a>
				</li>
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
		</header>
    <main class="content">
      <div class="content-box-title">
        <img src="../images/Ticket.png" alt="logo tiket">
        <p class="content-box-title-text">Cari Tiket</p>
      </div>
      <div class="content-box-main">

				<!-- PENGISIAN FORM -->

				<form action="perjalanan.php" method="post">
					<div class="content-box-main-card">
						<img src="../images/v9_37.png" alt="">
						<div class="card-info">
							<label class="card-info-title" for="pilih-agen-asal">Asal</label>
							<select name="pilih-agen-asal" id="pilih-agen-asal" class="tiket-choice" required>
								<option value="Tasikmalaya">Tasikmalaya</option>
								<option value="Bandung">Bandung</option>
								<option value="Jakarta">Jakarta</option>
							</select>
						</div>
					</div>
					<div class="content-box-main-card">
						<img src="../images/v9_41.png" alt="">
						<div class="card-info">
							<label class="card-info-title" for="pilih-agen-asal">Tujuan</label>
							<select name="pilih-agen-tujuan" id="pilih-agen-tujuan" class="tiket-choice" required>
								<option value="Bandung">Bandung</option>
								<option value="Jakarta">Jakarta</option>
							</select>
						</div>
					</div>
					<div class="content-box-main-card bottom">
					<img src="../images/Calendar.png" alt="">
						<div class="card-info">
							<label class="card-info-titl e">Pergi</label>
							<p class="input-wrapper">
								<input type="date" name="tanggal" id="tanggal" class="date-choice" required>
							</p>
						</div>
					</div>
					<div class="content-box-main-card bottom">
					<img src="../images/v15_31.png" alt="">
						<div class="card-info">
							<label class="card-info-title" for="jumlah-kursi">Jumlah Kursi</label>
							<p class="input-wrapper">
								<input type="text" name="jumlah-kursi" id="jumlah-kursi" minlength="1" maxlength="2"
								placeholder="1-34" required>
								<span></span>	
							</p>
						</div>
					</div>
					<div class="content-box-main-card bottom">
					<img src="../images/Bus.png" alt="">
						<div class="card-info">
							<label class="card-info-title" for="kelas-bus">Kelas</label>
							<select name="kelas-bus" id="kelas-bus" required>
								<option value="reguler">Reguler</option>
								<option value="eksekutif">Eksekutif</option>
							</select>
						</div>
					</div>
					<div class="content-box-main-card button">
						<button type="submit">
							<img src="../images/kaca.png" alt="">
							<p class="btn-info">
									Cari Tiket
							</p>
						</button>
					</div>


					<!-- AKHIR PENGISISAN FORM -->

				</form>
      </div>
    </main>
</body>
</html>