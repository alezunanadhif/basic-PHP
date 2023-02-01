<?php

//isi code

echo "Hello World";
echo "\n";
echo 1;
echo "\n";

echo "nilai Integer : ";
var_dump(1234);

echo "nilai Float : ";
var_dump(1.700);

echo "Benar : ";
var_dump(true);

echo "Salah : ";
var_dump(false);

echo "Nama\t Saya\t ALZNDF";

echo "\n";

echo <<<contoh
uyy nama saya ALZNDF dan ini adik saya ALZNDFP
kami tak kembar seiras lah tapi itu takk apaaa
contoh;

echo "\n";

$alamat = "Asahan";
$alamat = null;
var_dump($alamat);
echo $alamat;

$arr = [1,2,3,4,5,6,7,8,9,10];
var_dump($arr);

$arr2 = array(1,2,3,4,5,6,7,8,9,10);
var_dump($arr);

$arr_str = ["satu", "dua", "tiga"];
var_dump($arr_str);

echo "\n";

unset($arr2[9]);
var_dump($arr2);

echo count($arr2);

$data_diri = array(
    "nama" => "ALZNDF",
    "alamat" => "Kisaran",
    "umur" => 15,
    "hobi" => "Main"
);
var_dump($data_diri);

echo $data_diri["nama"];

$data_diri["tinggi"] = "162cm";
var_dump($data_diri);

$data_siswa = array(
    "nama" => "ALZNDF",
    "umur" => 15,
    "alamat" => array(
        "no_rumah" => "12",
        "jalan" => "suluk",
        "kota" => array("Kisaran","Bunut"),
    ),
);
var_dump($data_siswa);

echo "\n";

echo "Hai Im " . $data_siswa["nama"];

echo "\n";


echo "Alamat Saya Ada di Jalan " . $data_siswa["alamat"]["jalan"];

echo "\n";

echo "nama saya adalah " . $data_siswa["nama"] . " saya tinggal di jalan " . $data_siswa["alamat"]["jalan"] . " di kota " . $data_siswa["alamat"]["kota"][0];

echo "\n";

define("APP", "HELLO APK");

echo APP . PHP_EOL;

$a = 10;
$b = 3;

$result = $a + $b;
echo $result;

echo "\n";

$result_modulus = $a % $b;
echo $result_modulus;

echo "\n";

$mie = 10000;
$sprite = 5000;
$boba = 15000;

$result_makan = $mie + $sprite;
echo $result_makan;

echo "\n";

$result_total = 0;
$result_total += $mie;
$result_total += $sprite;
$result_total += $boba;
$result_total -= $sprite;
echo $result_total;

var_dump("1" == 1);
var_dump("2" === 1);
var_dump("2" != 1);
var_dump(1 <> 1);

$p = 10;
$q = 20;

var_dump($p < $q);

var_dump(false && false);
var_dump(true and true);
var_dump(true || false);
var_dump(true or false);
var_dump(!true);
var_dump(true xor false);

var_dump(true && true);
var_dump(true && false);

var_dump(true || false);
var_dump(true || true);

var_dump(true xor false);
var_dump(true xor true);

var_dump(!true);
var_dump(!false);

$z = 20;
$inc = $z++;
$pre_inc = ++$z;

echo $pre_inc;

echo "\n";

$dec = $z--;
$pre_dec = --$z;

echo $pre_dec;

$first = array(
    "first_name" => "Alezuna",
    "last_name" => "Nadhif",
);

$last = array(
    "first_name" => "Alezuna",
    "last_name" => "Nadhifp",
);

var_dump($first + $last);

$express = "Hello World";
$express = null;

$nnn = $express;

function number() {
    return 90;
};

$nnn = number();
echo $nnn;

echo "\n";

function echop() {
    echo "Hello World";
    echo "\n";
    echo "Hello World";
};

echop();

$int_to_string = (string)100;
var_dump($int_to_string);

$string_to_int = (int)"100";
var_dump($string_to_int);

$int_to_float = (float)$int_to_string;
var_dump($int_to_float);

$nn = "ALZNDF";
echo $nn[0];

$nama_lengkap = "ALZNDF NADHIF";

echo "nama lengkap saya adalah " . PHP_EOL . $nama_lengkap;

echo "\n";

$nilai = 67;
$kkm = 65;

if ($nilai >= 67 && $kkm >= 65) {
    echo "Kamu Berhasil" . PHP_EOL;
} else {
    echo "Kamu Remedial" . PHP_EOL;
}

// if else

$minimal = 90;
$skor = 91;

if ($minimal >= 90 && $skor >= 90){
    echo "Kamu Mendapat Nilai A+";
} elseif ($minimal >= 80 && $skor >= 80){
    echo "Kamu Mendapat Nilai A";
} elseif ($minimal >= 70 && $skor >= 70){
    echo "Kamu Mendapat Nilai B";
} elseif ($minimal >= 60 && $skor >= 60){
    echo "Kamu Mendapat Nilai C";
} else {
    echo "Kamu Mendapat Nilai E";
}

echo "\n";

$usaha = "100";

switch ($usaha) {
    case "100":
        echo "Good Job and Very Very Good" . PHP_EOL;
        break;
    case "90":
    case "80":
    case "70":
        echo "Very Good" . PHP_EOL;
        break;
    case "60":
    case "50":
        echo "Not Bad" . PHP_EOL;
        break;
    default:
        echo "Nice Try" . PHP_EOL;
}

?>