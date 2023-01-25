<?php

class Produks {
    private $judul, $penulis, $penerbit, $harga;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis | $this->penerbit";
    }

    public function getInfoProduks() {
        $str = "{$this->judul} | {$this->getLabel()} - (Rp. $this->harga)";
        return $str;
    }
}

class Komiks extends Produks {

    private $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent:: __construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduks()
    {
        $str = "Komik : " . parent::getInfoProduks() . "~ {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Games extends Produks {

    private $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent:: __construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduks()
    {
        $str = "Game : " . parent::getInfoProduks() . "~ {$this->waktuMain} Jam";
        return $str;
    }
}

$komik1 = new Komiks("YTTA", "Tangan", "Gramedia", 10000, 123);
echo $komik1->getInfoProduks();

echo PHP_EOL;

$game1 = new Games("p", "p", "p", 123000, 12);
echo $game1->getInfoProduks(); 