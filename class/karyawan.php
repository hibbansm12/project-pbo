<?php
require_once 'database.php';
class Karyawan extends Database{
  public function login($user, $pw){
    $sql = "SELECT * FROM karyawan WHERE user='$user' AND pw='$pw'";
    $query = mysqli_query($this->koneksi, $sql);
    $data = mysqli_fetch_assoc($query);
    if($data){
      $nama = $data['nama'];
      $jabatan = $data['jabatan'];

      session_start();
      $_SESSION['nama'] = $nama;
      $_SESSION['jabatan'] = $jabatan;
      if($jabatan == "Admin"){
        header("Location: dashboard.php");
      }else if($jabatan == "Petugas"){
        header("Location: pesan_tiket.php");
      }
    }else{
      // pesan salah
      $pesan = "Username atau Password Salah";
      echo "<script type='text/javascript'>alert('$pesan');window.history.back()</script>";
    }
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