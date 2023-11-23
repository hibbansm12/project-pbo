<?php
require_once 'rute.php';

$data = new Rute();
$action = $_GET['action'];
$id = $_GET['id'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$kelas = $_POST['kelas'];
$harga = $_POST['harga'];

if ($action == 'tambah') {
    $data->tambahRute($asal, $tujuan, $kelas, $harga);
    header('location: dashboard.php');
} elseif ($action == 'edit') {
    $data->editRute($asal, $tujuan, $kelas, $harga, $id);
} elseif ($action == 'hapus') {
    $data->hapusRute($id);
}
?>