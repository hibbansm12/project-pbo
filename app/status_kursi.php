<?php
$no_kursi = $_POST["no-kursi-value"];
$kode_jadwal = $_POST['kode_jadwal'];
$no_tiket = $_POST['no_tiket'];
$kode_bus = $_POST['kode_bus'];
$no_pol = $_POST['no_pol'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$harga = $_POST['harga'];

$koneksi = mysqli_connect("localhost", "root", "", "ticketing_bus");
$sql = "INSERT INTO status_kursi(kode_bus, kode_kursi) VALUES ('$kode_bus', '$no_kursi')";
mysqli_query($koneksi, $sql);
header("Location: cetak_tiket.php?kode_jadwal=$kode_jadwal&no_tiket=$no_tiket&kode_bus=$kode_bus&no_pol=$no_pol&asal=$asal&tujuan=$tujuan &tanggal=$tanggal&waktu=$waktu&harga=$harga&no_kursi=$no_kursi");
