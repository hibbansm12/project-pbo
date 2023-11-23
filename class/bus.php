<?php

class Bus {
  private $id_bus,
          $no_pol, 
          $kapasitas, 
          $kelas;
  // Construct
  public function __construct($no_pol, $kapasitas, $kelas) {
    $this->no_pol = $no_pol;
    $this->kapasitas = $kapasitas;
    $this->kelas = $kelas;
  }
  // Getter
  public function getIdBus() {
    return $this->id_bus;
  }

  public function getNoPol() {
    return $this->no_pol;
  }

  public function getKapasitas() {
    return $this->kapasitas;
  }

  public function getKelas() {
    return $this->kelas;
  }
  // Setter
  public function setNoPol($no_pol) {
    $this->no_pol = $no_pol;
  }

  public function setKapasitas($kapasitas) {
    $this->kapasitas = $kapasitas;
  }
  public function setKelas($kelas) {
    $this->kelas = $kelas;
  }
}