<?php
require_once '../class/rute.php';
require_once '../class/karyawan.php';

$data = new Rute();
$data->tampilRute();

session_start();
$nama = $_SESSION['nama'];
$jabatan = $_SESSION['jabatan'];
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
        <p><?php echo $nama; ?></p>
        <p><?php echo $jabatan; ?></p></div>
      <div class="right-section">
        <a href="verifikasi_login.php?action=logout">Log Out</a>
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
        <td><a href="edit.php?id=<?php echo $bus['id']?>" class="edit">edit</a></td>
        <td><a href="action.php?action=hapus&id=<?php echo $bus['id']?>" onclick="return confirm('Apakah Anda yakin ingin mengapus rute ini?')" class="hapus">hapus</a></td>
        <?php }; ?>
      </tr>
    </table>
    <!-- akhir diisi php -->
    <br>
    <a href="tambah.php">Tambah Rute</a>
  </main>
</body>
</html>