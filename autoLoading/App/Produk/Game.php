<?php

class Game extends Produk implements Cek
{
    private $waktuMain;


    public function getInfo()
    {
        
        $str = "{$this->judul} | {$this->getLabel()} - (RP . $this->harga)";

        return $str;
    }

    public function __construct($judul, $penerbit, $penulis, $harga, $waktuMain)
    {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->waktuMain = $waktuMain;

    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} jam.";
        return $str;
    }
}