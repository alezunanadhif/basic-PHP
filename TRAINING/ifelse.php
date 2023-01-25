<?php

// if

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

// switch statement

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