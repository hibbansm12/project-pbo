<?php
class Database{
    private $host = "localhost",
            $user = "root", 
            $pass = "", 
            $db = "ticketing_bus";
    protected $koneksi;
    public function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (mysqli_connect_errno()){
            echo "Koneksi database gagal". mysqli_connect_error();
        }
    }
}
?>