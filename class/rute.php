<?php
require_once 'database.php';
class Rute extends Database{
    public function tampilRute(){
        $sql = "SELECT id, asal, tujuan, kelas, harga FROM rute";
        $data = mysqli_query($this->koneksi, $sql);
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }
    public function tambahRute($asal, $tujuan, $kelas, $harga){
        $sql = "INSERT INTO rute (id, asal, tujuan, kelas, harga) VALUES (NULL, $asal, $tujuan, $kelas, $harga)";
        mysqli_query($this->koneksi, $sql);
        // if($stmt=$this->prepare($sql)):
        //     $stmt->bind_param("ssss", $param_asal, $param_tujuan, $param_kelas, $param_harga);
        //     $param_asal = $asal;
        //     $param_tujuan = $tujuan;
        //     $param_kelas = $kelas;
        //     $param_harga = $harga;
        //     if( $stmt->execute()):
        //         return true;
        //     else:
        //         return false;
        //     endif;
        // endif;
    }
    public function detailRute($id){
        $sql = "SELECT id, asal, tujuan, kelas, harga FROM rute WHERE id=$id";
        $data = mysqli_query($this->koneksi, $sql);
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
        // if($stmt=$this->prepare($sql)):
        //     $stmt->bind_param("i", $param_data);
        //     $param_data = $data;
        //     if( $stmt->execute() ):
        //         $stmt->store_result();
        //         $stmt->bind_result($this->id, $this->asal, $this->tujuan, $this->kelas, $this->harga);
        //         $stmt->fetch();
        //         if( $stmt->execute()):
        //             return true;
        //         else:
        //             return false;
        //         endif;
        //     endif;
        // endif;
        // $stmt->close();    
    }
    public function editRute($asal, $tujuan, $kelas, $harga, $id){
        $sql = "UPDATE rute SET asal=$asal, tujuan=$tujuan, kelas=$kelas, harga=$harga WHERE id=$id";
        mysqli_query($this->koneksi, $sql);
        // if($stmt=$this->prepare($sql)):
        //     $stmt->bind_param("ssssi", $param_asal, $param_tujuan, $param_kelas, $param_harga, $param_data);
        //     $param_asal = $asal;
        //     $param_tujuan = $tujuan;
        //     $param_kelas = $kelas;
        //     $param_harga = $harga;
        //     $param_data = $data;
        //     if( $stmt->execute()):
        //         return true;
        //     else:
        //         return false;
        //     endif;
        // endif;
        // $stmt->close();
    }
    public function hapusRute($id){
        $sql = "DELETE FROM rute WHERE id=$id";
        mysqli_query($this->koneksi, $sql);
        // if($stmt=$this->prepare($sql)):
        //     $stmt->bind_param("i", $param_data);
        //     $param_data = $data;
        //     if( $stmt->execute()):
        //         return true;
        //     else:
        //         return false;
        //     endif;
        // endif;
        // $stmt->close();    
    }
}

?>