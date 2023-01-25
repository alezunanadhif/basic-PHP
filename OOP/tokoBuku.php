<?php

// class buku {

//     public   $judul = "How To Be Anonymous ?",
//              $penulis = "Anonymous Team",
//              $harga = "$666",
//              $jumlahHalaman = 666,
//              $penerbit = "Gramedia";

//         public function membeliBuku() {
//             echo "buku yang anda beli berjudulkan $this->judul harga buku yang anda beli berharga $this->harga dengan penulis ternama yaitu $this->penulis dengan spesifikasi jumlah halaman yaitu $this->jumlahHalaman halaman dan di terbitkan oleh $this->penerbit";
//         }

// }

// $buku1 = new buku;
// $buku1->judul = "The Secret of Anonymous";
// $buku1->penulis = "Anonymous";
// $buku1->harga = "$555";

// $buku2 = new buku;
// $buku2->judul = "Hacking Tutorial";
// $buku2->penulis = "Rakhuyy";
// $buku2->harga = 123.000;
// $buku2->jumlahHalaman = 123;
// $buku2->penerbit = "CiCit";

// $buku3 = new buku;

// var_dump($buku1);
// $buku1->membeliBuku();

class rumah {

    public  $pintu = "Kayu Kuat",
            $jumlahKamar = 4,
            $kamarMandi = 3,
            $tingkatRumah = 2,
            $kolamIkan = 1,
            $jumlahIkan = 12;

        public function menambahIkan($newIkan) {
            $total = $this->jumlahIkan + $newIkan;
            echo "Jumlah Ikan Sekarang Adalah $total Ikan" . PHP_EOL;
        }

}

$rumahMinimalis = new rumah;
$rumahMinimalis->jumlahIkan = 17;
$rumahMinimalis->menambahIkan(3);

var_dump($rumahMinimalis);

?>