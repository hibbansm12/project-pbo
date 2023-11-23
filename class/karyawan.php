<?php
require_once 'database.php';
class Karyawan extends Database{
  public function tampilKaryawan(){
    $sql = "SELECT * FROM karyawan";
    $data = mysqli_query($this->koneksi, $sql);
    $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
    return $rows;
  }
  public function login($user, $pw){
    $sql = "SELECT nama, jabatan FROM karyawan WHERE user='$user' AND pw='$pw'";
    $data = mysqli_query($this->koneksi, $sql);
    $jumlah = mysqli_num_rows($data);
    $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
    if( $jumlah > 0){
      header("Location: dashboard.php");
      return $rows;
    }
    // if($jumlah > 0){
    //   session_start();
    //   $_SESSION['user'] = $user;
    //   header('Location: dashboard.php');
    // } else{
    //   // pesan salah
    //   $pesan = "Username atau Password Salah";
    //   echo "<script type='text/javascript'>alert('$pesan'); ";
    //   // window.history.back()</script>
    // }
  }
  public function logout() {
    // memulai session
    session_start();
    // menghapus session
    session_destroy();
    // mengarahkan user ke halaman login
    header("Location: login.php");
  }
}