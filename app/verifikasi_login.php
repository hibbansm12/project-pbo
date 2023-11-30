<?php
include "../class/karyawan.php";
$karya1 = new Karyawan();

$action = $_GET['action'];

if($action=="login"){
    $user = $_POST['user'];
    $pw = $_POST['pw'];
    $karya1->login($user, $pw);
}
if($action=="logout"){
    $karya1->logout();
}
?>