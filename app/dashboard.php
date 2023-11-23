<?php
require_once '../class/rute.php';
require_once 'verifikasi_login.php';

$data = new Rute();
$data->tampilRute();

$nama = $k1['nama'];
$jabatan = $k1['jabatan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
  <header class="navbar-wrapper">
    <nav class="navbar-content">
      <div class="left-section">
        <p><?php echo $nama ?></p>
        <p><?php echo $jabatan ?></p></div>
      <div class="right-section">
        <a href="#">Log Out</a>
      </div>
    </nav>
  </header>
  <main class="container">
    <table cellspacing="0">
      <tr class="head">
        <th>Nomor</th>
        <th>Asal</th>
        <th>Tujuan</th>
        <th>Kelas Armada</th>
        <th>Harga</th>
        <th colspan="2">Aksi</th>
      </tr>

      <!-- DIISI PHP DATABASE -->
      <?php
          $no = 1;
          foreach ($data->tampilRute() as $bus){
        ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $bus['asal'] ?></td>
        <td><?php echo $bus['tujuan'] ?></td>
        <td><?php echo $bus['kelas'] ?></td>
        <td><?php echo $bus['harga']?></td>
        <td><a href="action.php/action=edit" class="edit">edit</a></td>
        <td><a href="action.php/action=hapus" class="hapus">hapus</a></td>
        <?php }; ?>
      </tr>
    </table>
    <!-- akhir diisi php -->
    <br>
    <a href="#">Tambah Data</a>
  </main>
</body>
</html>