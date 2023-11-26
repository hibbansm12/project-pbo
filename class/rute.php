<?php
require_once 'database.php';
class Rute extends Database{
    public function tampilRute(){
        $sql = "SELECT * FROM rute";
        $data = mysqli_query($this->koneksi, $sql);
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }
    public function tambahRute($asal, $tujuan, $kelas, $harga){
        $sql = "INSERT INTO rute (id, asal, tujuan, kelas, harga) VALUES (NULL, $asal, $tujuan, $kelas, $harga)";
        $query =  mysqli_query($this->koneksi, $sql);

        
    }
    public function detailHarga($asal, $tujuan, $kelas){
        $sql = "SELECT * FROM rute WHERE asal='$asal' AND tujuan='$tujuan' AND kelas='$kelas'";
        $query = mysqli_query($this->koneksi, $sql);
        $data = mysqli_fetch_assoc($query);
        $harga = $data['harga'];
        return $harga; 
    }
    public function editRute($asal, $tujuan, $kelas, $harga, $id){
        $sql = "UPDATE rute SET asal=$asal, tujuan=$tujuan, kelas=$kelas, harga=$harga WHERE id=$id";
        mysqli_query($this->koneksi, $sql);
    }
    public function hapusRute($id){
        $sql = "DELETE FROM rute WHERE id=$id";
        $result = mysqli_query($this->koneksi, $sql);
        return $result;
    }
}

?>