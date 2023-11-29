<?php 
$no_kursi = $_POST["no-kursi-value"];
$kode_jadwal = $_GET['kode_jadwal'];
$no_tiket = $_GET['no_tiket'];
$kode_bus = $_GET['kode_bus'];
$no_pol = $_GET['no_pol'];
$asal = $_GET['asal'];
$tujuan = $_GET['tujuan'];
$tanggal = $_GET['tanggal'];
$waktu = $_GET['waktu'];
$harga = $_GET['harga'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiket</title>
  <link rel="stylesheet" href="../css/tiket.css">
  <script src="../js/functions.js" defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jsbarcode/3.6.0/JsBarcode.all.min.js"></script>
</head>
<body>
  <main class="container">
    <div class="main-content-title">
      Tiket Anda
    </div>
    <div class="main-content-box">
      <div class="left-section">
        <div class="row-one">

            <!-- ISI INFO-DATA BERASAL DARI DATABASE PHP -->

            <div class="info-wrapper">
              <div class="info-title">Kode Jadwal :</div>
              <div class="info-data" id="kode-jadwal"><?=$kode_jadwal?></div>
            </div>
            <div class="info-wrapper">
              <div class="info-title">No Tiket :</div>
              <div class="info-data" id="no-tiket"><?=$no_tiket?></div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">No Kursi :</div>
              <div class="info-data" id="no-kursi"><?php echo $no_kursi?></div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">Kode Bus :</div>
              <div class="info-data" id="kode-bus"><?=$kode_bus?></div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">No Polisi Bus :</div>
              <div class="info-data"><?=$no_pol?>
              </div>
            </div>
          
        </div>
        <div class="row-two">
          <table>
            <tr>
              <!-- TD KE TIGA DIISI OLEH DATABASE -->
              <td>Kota Asal</td>
              <td>:</td>
              <td><?=$asal?></td>
            </tr>
            <tr>
              <td>Kota Tujuan</td>
              <td>:</td>
              <td><?=$tujuan?></td>
            </tr>
            <tr>
            <tr>
              <td>Tgl. Berangkat</td>
              <td>:</td>
              <td><?=$tanggal?></td>
            </tr>
            <tr>
              <td>Jam Berangkat</td>
              <td>:</td>
              <td><?=$waktu?></td>
            </tr>
          </table>
        </div>
        
        <!-- diisi database -->
        <div class="row-three">
            <div class="barcode-wrapper">
              <canvas id="barcode" download>
              </canvas>
            </div>
            <div class="harga-tiket-wrapper">
              <p class="rp">Rp.</p>
              <p class="nominal"><?=$harga?></p>
            </div>
        </div>
      </div>
      <!-- akhir -->
      <div class="middle-section">
        <div class="line">
        </div>
      </div>
      <div class="right-section">
        <div class="info-wrapper">
          <div class="info-title">Kode Jadwal :</div>
              <div class="info-data"><?=$kode_jadwal?>
              </div>
            </div>
            <div class="info-wrapper">
              <div class="info-title">No Tiket :</div>
              <div class="info-data"><?=$no_tiket?>
              </div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">No Kursi :</div>
              <div class="info-data"><?=$no_kursi?>
              </div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">Kode Bus :</div>
              <div class="info-data"><?=$kode_bus?>
              </div>
            </div>
            <div class="info-wrapper">
              <div class="info-title">No Polisi Bus :</div>
              <div class="info-data"><?=$no_pol?>
              </div>
            </div>   
      </div>
    </div>
    <div class="cetak-button">
      <button >Cetak Tiket</button>
    </div>
  </main>
  <script>
    

function cetakTiket() {
	const btn = document.querySelector("button");
	btn.addEventListener("click", () => {
		const btnArea = document.querySelector(".cetak-button");
		btnArea.style.visibility = "hidden";
		window.print();
		btnArea.style.visibility = "visible";
	});
}

function generateBarCode() {
	let kodeJadwal = document.querySelector("#kode-jadwal").innerText;
	let noTiket = document.querySelector("#no-tiket").innerText;
	let noKursi = document.querySelector("#no-kursi").innerText;
	let kodeBus = document.querySelector("#kode-bus").innerText;

	let text = kodeJadwal + "-" + noTiket + "-" + noKursi + "-" + kodeBus;
	JsBarcode("#barcode", text);

	return generateBarCode;
}

generateBarCode();
cetakTiket();


  </script>
</body>
</html>