<?php
require_once '../class/karyawan.php';

$user = $_POST['username'];
$pw = $_POST['password'];

$karya1 = new Karyawan();
$k1 = $karya1->login($user, $pw);
?>