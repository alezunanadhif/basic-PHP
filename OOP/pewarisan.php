<?php

// class MobilP {

//     private $jenis;

//     public function setJenisMobil($jenisMobil) {
//         $this->jenis = $jenisMobil;
//     }

//     public function getJenisMobil() {
//         return $this->jenis;
//     }
// }

// class mobilSedan extends MobilP {

// }

// $mobil1 = new MobilP;
// $mobil1->setJenisMobil("Sedan");

// $mobil2 = new mobilSedan;
// $mobil2->setJenisMobil("JEEP");
// echo $mobil2->getJenisMobil() . PHP_EOL;

// echo "\n";

// class Kelas {
//     private $jmlSiswa, $tv, $meja, $kursi, $papanTulis;

//     public $namaKelas;

//     public function __construct($Kelas)
//     {
//         $this->namaKelas = $Kelas;
//     }

//     public function setProfile($jmlSiswa, $tv, $meja, $kursi, $papanTulis) {
//         $this->jmlSiswa = $jmlSiswa;
//         $this->tv = $tv;
//         $this->meja = $meja;
//         $this->kursi = $kursi;
//         $this->papanTulis = $papanTulis;
//     }

//     public function getProfileClass() {
//         return "ini adalah kelas $this->namaKelas, di sini kami berjumlah $this->jmlSiswa manusia, memiliki tv yang berjumlah $this->tv buah untuk kami belajar, memiliki meja yang di buat dari bahan $this->meja, lalu kuri yang $this->kursi, dan papan tulis berwarna $this->papanTulis" . PHP_EOL;
//     }
// }

// class SMP extends Kelas {
//     public function setDataSMP($jmlSiswa, $tv, $meja, $kursi, $papanTulis) {
//         $data_parent = parent::setProfile($jmlSiswa, $tv, $meja, $kursi, $papanTulis);
//     }
// }

// class SMK extends Kelas {
//     public function profile() {
//         parent::getProfileClass();

//         return "meja terbuat dari $this->";
//     }
// }

// $xRPL = new SMK("RPL");
// $xRPL->setProfile(16, 1, "Kayu", "Empuk", "Putih");
// echo $xRPL->getProfileClass() . PHP_EOL;

// $ixSMP = new SMP("9 SMP");
// $ixSMP->setDataSMP(20, 2, "palstik", "keras wkwk", "putih abu-abu");
// echo $ixSMP->getProfileClass() . PHP_EOL;

// $xiTKJ = new SMK("11 TKJ");
// $xiTKJ->setProfile(12, 5, "keramik", "padat", "putih bersih");
// echo $xiTKJ->getProfileClass() . PHP_EOL;