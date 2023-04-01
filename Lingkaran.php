<?php

require_once "AbstractBandungDatar.php";

class Lingkaran extends AbstractBangunDatar
{
  public $jari_jari;
  private $nama_bidang = "Lingkaran";

  public function __construct($jari_jari)
  {
    $this->jari_jari = $jari_jari;
  }

  public function namaBidang()
  {
    return $this->nama_bidang;
  }
  public function luasBidang()
  {
    $result = 3.14 * $this->jari_jari * $this->jari_jari;
    return $result;
  }
  public function kelilingBidang()
  {
    $result = 3.14 * 2 * $this->jari_jari;
    return $result;
  }
}
