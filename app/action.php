<?php
require_once '../class/rute.php';

$data = new Rute();
$action = $_GET['action'];

if ($action == 'tambah') {
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $kelas = $_POST['kelas-armada'];
    $harga = $_POST['harga'];
    $data->tambahRute($asal, $tujuan, $kelas, $harga);
    header('location: dashboard.php');
} elseif ($action == 'edit') {
    $id = $_GET['id'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $kelas = $_POST['kelas-armada'];
    $harga = $_POST['harga'];
    $data->editRute($asal, $tujuan, $kelas, $harga, $id);
    header('location: dashboard.php');
} elseif ($action == 'hapus') {
    $id = $_GET['id'];
    $data->hapusRute($id);
    $pesan = "Rute berhasil dihapus";
    echo "<script type='text/javascript'>alert('$pesan');window.history.back()</script>";
}
?>