<?php

// for (; ;  ) {
//     echo "GW GANTENG BETT" . PHP_EOL;
// }

// $nilai = 0;

// for (; $nilai <= 10;){
//     echo "Nilai Loop Ke - $nilai";
//     echo "\n";
//     ++$nilai;
// }

// for (; $nilai < 10;){
//     echo "Nilai Yang Ke - $nilai";
//     echo "\n";
//     ++$nilai;
// }

// for ($a = 2; $a <= 6; ++$a){
//     echo "nilai ke - $a";
//     echo "\n";
// }

// $a = 2;
// while ($a <= 10){
//     echo "While Ke - $a";
//     echo "\n";
//     $a++;
// }

// $names = ["Elina", "Hasna", "Zahra"];

// for ($i = 0; $i < count($names); $i++) {
//     echo "Data ke $i = $names[$i]" . PHP_EOL;
// }

// function greating() {
//     echo "Hallo Cees Awak" . PHP_EOL;
//     echo "Cemm Mana Kabar Kau Lekk" . PHP_EOL;
// }

// greating();

// function saySomething($pesan, $name) {
//     echo "Senang Bertemu Dengan Kamu $pesan" . PHP_EOL;
//     echo "Nama Kamu Pasti $name" . PHP_EOL;
// }

// saySomething("Kawan", "Rakha");

// function dataDiri($nama, $address, $age, $hobby) {
//     echo "Hai Perkenalkan Nama Saya $nama Saya Tinggal di $address Saya Berumur $age tahun hehehe saya Masih Bocil dan saya Memiliki Hobi Berupa $hobby." . PHP_EOL;
// }

// dataDiri("Nadhif", "North Sumatera", "15", "Main PEES");

// $ismun = ["Rehan", "Aisy", "Nadhif"];
// $alamat = ["Jakarta", "Cikarang", "Bekasi"];

// function dataSaya($nama, $address, $age, $hobby) {
//     echo "Hai Perkenalkan Nama Saya $nama Saya Tinggal di $address Saya Berumur $age tahun hehehe saya Masih Bocil dan saya Memiliki Hobi Berupa $hobby." . PHP_EOL;
// }

// dataSaya($ismun[1], $alamat[2], "Lima Belas", "Buat Game");

// $data = [
//     $ismun = ["Rehan", "Aisy", "Nadhif"],
//     $alamat = ["Jakarta", "Cikarang", "Bekasi"],
//     $umur = [15, 16, 17],
//     $hobi = ["Belajar", "Memancing", "Membaca"]
// ];

// function dataNadhif($nama, $address, $age, $hobby) {
//     echo "Nama Saya $nama Saya Tinggal di $address Saya Berumur $age tahun dan Hobi Saya $hobby." . PHP_EOL;
// }

// dataNadhif($data[0][2], $data[1][0], $data[2][2], $data[3][1]);

// function hitung(int $h1, int $h2) {
//     $total = $h1 + $h2;
//     $hasil = $total + ($h1 * $h2);
//     return  $hasil;
// }

// echo hitung(1, 2);

// function ayyashBego() {
//     echo "GW AYYASH dan GW BEGO" . PHP_EOL;
//     echo "GW JUGA BADUNG COGGGG" . PHP_EOL;
// }

// ayyashBego();

// function regnoSejarah() {
//     echo "HALO ALL GW REGNO SALKEN" , PHP_EOL;
//     echo "GUWE AHLI SEJARAH DI IDN" . PHP_EOL;
// }

// regnoSejarah();

date_default_timezone_set("Asia/jakarta") . PHP_EOL;

echo date("D, d m y") . PHP_EOL;

?>