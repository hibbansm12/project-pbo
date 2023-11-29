<?php
require_once '../class/rute.php';
$conn = mysqli_connect('localhost', 'root', '', 'ticketing_bus');

$kode_jadwal = "J".rand(10,999);
$no_tiket = rand(10,999);
$waktu = $_POST['choice'];
$kode_bus = $_GET['kode_bus'];
$no_pol = $_GET['no_pol'];
$asal = $_GET['asal'];
$tujuan = $_GET['tujuan'];
$tanggal = $_GET['tanggal'];
$harga = $_GET['harga'];

if (isset($_POST['submit'])) {
	if ($_POST['no-kursi-value']) {
		$no_kursi = $_POST['no-kursi-value'];
		$sql = "INSERT INTO status_kursi(kode_bus, no_kursi) VALUES ('$kode_bus','$no_kursi')"; 
		mysqli_query($conn, $sql);
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking</title>
  <link rel="stylesheet" href="../css/booking.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
</head>
<body>
  <form action="cetak_tiket.php?kode_jadwal=<?=$kode_jadwal?>&no_tiket=<?=$no_tiket?>&kode_bus=<?=$kode_bus?>&no_pol=<?=$no_pol?>&asal=<?=$asal?>&tujuan=<?=$tujuan ?>&tanggal=<?=$tanggal?>&waktu=<?=$waktu?>&harga=<?=$harga?>" method="POST">
    <main class="content">
      <div class="left-section">
        <div class="display-kursi-bus-wrapper">
          <div class="left-bottom-section">
          <div class="seats">
				<div class="seat-left-section">
					<div class="seat-row">
					<div class="seat">
						<input type="radio" name="bus-seat" id="A1" value="A1" />
						<label for="A1" ><span>A1</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="A2" value="A2" />
						<label for="A2" ><span>A2</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="B1" value="B1" />
						<label for="B1" ><span>B1</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="B2" value="B2" />
						<label for="B2" ><span>B2</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="C1" value="C1" />
						<label for="C1" ><span>C1</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="C2" value="C2" />
						<label for="C2" ><span>C2</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="D1" value="D1" />
						<label for="D1" ><span>D1</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="D2" value="D2" />
						<label for="D2" ><span>D2</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="E1" value="E1" />
						<label for="E1" ><span>E1</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="E2" value="E2" />
						<label for="E2" ><span>E2</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="F1" value="F1" />
						<label for="F1" ><span>F1</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="F2" value="F2" />
						<label for="F2" ><span>F2</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="G1" value="G1" />
						<label for="G1" ><span>G1</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="G2" value="G2" />
						<label for="G2" ><span>G2</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="H1" value="H1" />
						<label for="H1" ><span>H1</span></label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="H2" value="H2" />
						<label for="H2" ><span>H2</span></label>
					</div>
				</div>
			</div>
			<div class="seat-right-section">
				<div class="seat-row">
					<div class="seat">
						<input type="radio" name="bus-seat" id="A3" value="A3" />
						<label for="A3" >A3</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="A4" value="A4" />
						<label for="A4" >A4</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="B3" value="B3" />
						<label for="B3" >B3</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="B4" value="B4" />
						<label for="B4" >B4</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="C3" value="C3" />
						<label for="C3" >C3</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="C4" value="C4" />
						<label for="C4" >C4</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="D3" value="D3" />
						<label for="D3" >D3</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="D4" value="D4" />
						<label for="D4" >D4</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="E3" value="E3" />
						<label for="E3" >E3</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="E4" value="E4" />
						<label for="E4" >E4</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="F3" value="F3" />
						<label for="F3" >F3</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="F4" value="F4" />
						<label for="F4" >F4</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="G3" value="G3" />
						<label for="G3" >G3</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="G4" value="G4" />
						<label for="G4" >G4</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="H3" value="H3" />
						<label for="H3" >H3</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="H4" value="H4" />
						<label for="H4" >H4</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="I1" value="I1" />
						<label for="I1" >I1</label>
					</div>
					<div class="seat">
						<input type="radio" name="bus-seat" id="I2" value="I2" />
						<label for="I2" >I2</label>
					</div>
							</div>		
						</div>
					</div>
          </div>
        </div>
      </div>
    <div></div>
    <div class="right-section">
      <div class="right-top-wrapper">
        <div class="right-top-section">
          <div class="tiket-info">

          <!-- CLASS TIKET-INFO-CONTENT DIISI OLEH PHP DATABASE -->

            <div class="tiket-info-title">
              Kode Jadwal :
            </div>
            <div class="tiket-info-content">
			<?= $kode_jadwal; ?>
            </div>
          </div>
          <div class="tiket-info">
            <div class="tiket-info-title">
              No Tiket :
            </div>
            <div class="tiket-info-content">
			<?= $no_tiket; ?>
            </div>
          </div>
          <div class="tiket-info">
            <div class="tiket-info-title">
              No Kursi :
            </div>
            <input type="hidden" id="no-kursi-value" name="no-kursi-value">
						<div class="tiket-info-content" id="no-kursi">
							-
						</div>
          </div>
          <div class="tiket-info">
            <div class="tiket-info-title">
              Kode Bus :
            </div>
            <div class="tiket-info-content">
            <?php echo $kode_bus; ?>
            </div>
          </div>
          <div class="tiket-info">
            <div class="tiket-info-title">
              No Polisi Bus :
            </div>
            <div class="tiket-info-content">
			<?php echo $no_pol; ?>
            </div>
          </div>
        </div>
        <table>
          <tr>
            <td>Kota Asal</td>
            <td>:</td>
            <td><?php echo $asal; ?></td>
          </tr>
          <tr>
            <td>Kota Tujuan</td>
            <td>:</td>
            <td><?php echo $tujuan; ?></td>
          </tr>
          <tr>
            <td>Tgl. Keberangkatan</td>
            <td>:</td>
            <td><?php echo $tanggal; ?></td>
          </tr>
          <tr>
            <td>Jam Keberangkatan</td>
            <td>:</td>
            <td><?=$waktu?></td>
          </tr>
        </table>
        <!-- AKHIR DARI PHP DATABASE -->
      </div>
      <div class="right-bottom-section">
        <div class="group-btn-wrapper">
          <button type="submit" name="submit" class="js-click-link">Isi</button>
          <a href="pesan_tiket.php"><div>Batal</div></a>
        </div>
        <div class="keterangan-wrapper">
          <div class="keterangan-row">
            <div class="warna orange">
            </div>
            <div class="text">
              Tersedia 
            </div>
          </div>
          <div class="keterangan-row">
            <div class="warna putih">
            </div>
            <div class="text">
              Terisi 
            </div>
          </div>
          <div class="keterangan-row">
            <div class="text">
              * Pilih No kursi pada Box di sebelah kiri. 
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</form>
<script>
	function isiKursi() {
	const btn = document.querySelector(".js-click-link");
	const inputHolder = document.querySelector("#no-kursi-value");

	btn.addEventListener("click", () => {
		const NoKursi = document.querySelector("input[type=radio]:checked");
		const getInfoKursi = document.querySelector("#no-kursi");
		const value =  NoKursi.value;
		
		inputHolder.setAttribute("value", value);
		NoKursi.classList.add("reserved");
		NoKursi.setAttribute("disabled", "");
		getInfoKursi.innerText = value;		
	});
}

function infoKursi() {
	const NoKursi = document.querySelectorAll("input[type=radio]");
	const getInfoKursi = document.querySelector("#no-kursi");
	NoKursi.forEach((input) => {
		input.addEventListener("click", () => {
			const getKursiValue = input.value;

			getInfoKursi.innerText = getKursiValue;
		});
	});
}

isiKursi();
infoKursi();

    $(document).ready(function() {
        // Function to load and display seats
        const NoKursi = document.querySelectorAll('input[type=radio]');
        function loadSeats() {
            $.ajax({
                type: 'GET',
                url: 'get_seats.php', // Server-side script to fetch seat data
                success: function(seats) {
                    displaySeats(seats);
                },
                error: function(err) {
                    console.error('Error loading seats: ', err);
                }
            });
        }

        // Function to display seats
        function displaySeats(seats) {
        	const NoKursi = document.querySelectorAll("input[type=radio]");
            // Loop through seats and create HTML elements
            seats.forEach(function(seat) {
                console.log(seat);
                console.log(seat);
                NoKursi.forEach(function(nk) {
                    if(seat.no_kursi === nk.value) {
                        console.log(seat.no_kursi === nk.value);
                        nk.classList.add("reserved");
		               		  nk.setAttribute("disabled", "");
                    }
                    console.log(seat.no_kursi === nk.value);
                    console.log(nk.value);
                })
            });
        }

        loadSeats();
    });

</script>
</body>
</html>