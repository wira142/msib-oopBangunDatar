<?php

require_once "AbstractBandungDatar.php";

class PersegiPanjang extends AbstractBangunDatar
{
  public $panjang, $lebar;
  private $nama_bidang = "Persegi Panjang";

  public function __construct($panjang, $lebar)
  {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }

  public function namaBidang()
  {
    return $this->nama_bidang;
  }
  public function luasBidang()
  {
    $result = $this->panjang * $this->lebar;
    return $result;
  }
  public function kelilingBidang()
  {
    $result = 2 * ($this->panjang + $this->lebar);
    return $result;
  }
}
