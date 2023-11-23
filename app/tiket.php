<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiket</title>
  <link rel="stylesheet" href="tiket.css">
  <script src="functions.js" defer></script>
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
              <div class="info-data" id="kode-jadwal">V18</div>
            </div>
            <div class="info-wrapper">
              <div class="info-title">No Tiket :</div>
              <div class="info-data" id="no-tiket">0017</div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">No Kursi :</div>
              <div class="info-data" id="no-kursi">B4</div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">Kode Bus :</div>
              <div class="info-data" id="kode-bus">V36</div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">No Polisi Bus :</div>
              <div class="info-data">test
              </div>
            </div>
          
        </div>
        <div class="row-two">
          <table>
            <tr>
              <!-- TD KE TIGA DIISI OLEH DATABASE -->
              <td>Kota Asal</td>
              <td>:</td>
              <td>Tasikmalaya</td>
            </tr>
            <tr>
              <td>Terminal</td>
              <td>:</td>
              <td>Indihiang</td>
            </tr>
            <tr>
              <td>Kota Tujuan</td>
              <td>:</td>
              <td>Bandung</td>
            </tr>
            <tr>
              <td>Terminal</td>
              <td>:</td>
              <td>Cibiru</td>
            </tr>
            <tr>
              <td>Tgl. Berangkat</td>
              <td>:</td>
              <td><?php echo date("Y/m/d"); ?></td>
            </tr>
            <tr>
              <td>Jam Berangkat</td>
              <td>:</td>
              <td><?php echo date("H:m:s"); ?></td>
            </tr>
          </table>
        </div>
        
        <div class="row-three">
          <script>barcode();</script>
            <div class="barcode-wrapper">
              <canvas id="barcode" download>
              </canvas>
            </div>
            <div class="harga-tiket-wrapper">
              <p class="rp">Rp.</p>
              <p class="nominal">100000</p>
            </div>
        </div>
      </div>
      <div class="middle-section">
        <div class="line">
        </div>
      </div>
      <div class="right-section">
        <div class="info-wrapper">
          <div class="info-title">Kode Jadwal :</div>
              <div class="info-data">test
              </div>
            </div>
            <div class="info-wrapper">
              <div class="info-title">No Tiket :</div>
              <div class="info-data">test
              </div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">No Kursi :</div>
              <div class="info-data">test
              </div>
            </div>
          
            <div class="info-wrapper">
              <div class="info-title">Kode Bus :</div>
              <div class="info-data">test
              </div>
            </div>
            <div class="info-wrapper">
              <div class="info-title">No Polisi Bus :</div>
              <div class="info-data">test
              </div>
            </div>   
      </div>
    </div>
    <div class="cetak-button">
      <button onclick="cetakTiket()">Cetak Tiket</button>
    </div>
  </main>
</body>
</html>