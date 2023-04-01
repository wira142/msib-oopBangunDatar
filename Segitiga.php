<?php

require_once "AbstractBandungDatar.php";

class Segitiga extends AbstractBangunDatar
{
  public $alas, $tinggi;
  private $nama_bidang = "Segitiga";

  public function __construct($alas, $tinggi)
  {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
  }

  public function namaBidang()
  {
    return $this->nama_bidang;
  }
  public function luasBidang()
  {
    $result = (1 / 2) * $this->alas * $this->tinggi;
    return $result;
  }
  public function kelilingBidang()
  {
    $sisi_miring = sqrt(pow($this->tinggi, 2) + pow(($this->alas / 2), 2));
    $result = $this->alas + $sisi_miring + $sisi_miring;
    return $result;
  }
}
