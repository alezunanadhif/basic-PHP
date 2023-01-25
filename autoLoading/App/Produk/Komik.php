<?php

class Komik extends Produk implements Cek
{
    private $jmlHalaman;

    public function __construct($judul, $penerbit, $penulis, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfo()
    {
        
        
            $str = "{$this->judul} | {$this->getLabel()} - (RP . $this->harga)";

            return $str;
        

    }

    public function getInfoProduk()
    {
        $str = "komik : " . $this->getInfo() . " ~ {$this->jmlHalaman} halaman.";

        return $str;
    }
}
