<?php

interface cek {
    public function getInfoProduk();
}


abstract class produk {
    protected $harga,
            $judul,
            $penerbit,
            $penulis;

            public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penerbit", $harga = 0)
            {
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
            }


            public function getLabel() 
            {
                return "$this->penulis, $this->penerbit ";
            }

            

            abstract public function getInfo();
            

}


class komik extends produk implements cek
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


class game extends produk implements cek
{
    private $waktuMain;


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

$buku1 = new komik("Naruto", "Shonen Jump", "Masashi Kishimoto", 30000 , 100);
echo $buku1->getInfo();
echo PHP_EOL;
$game1 = new game("Mobile Legends", "Orang", "Moontoon", 10, 45);
echo $game1->getInfoProduk();

?>