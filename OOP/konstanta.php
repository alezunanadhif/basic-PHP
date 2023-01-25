<?php

// class lingkaran {
//     private $jari;
//     const PI = 3.14;

//     public function hitungLuas($jari) {
//         return self::PI * $jari * $jari;
//     }
// }

// $lingkaran1 = new lingkaran;
// echo $lingkaran1->hitungLuas(7);

// class mobil {
//     public const roda = 4;
// }

// class ujian {
//     const A = 90;
//     const B = 80;
//     const C = 70;

//     public function getRaport($nilai) {

//         if($nilai >= self::A) {
//             return "Kamu Dapat Nilai A";
//         } elseif ($nilai >= self::B) {
//             return "Kamu Dapat Nilai B";
//         } elseif ($nilai >= self::C) {
//             return "Kamu Dapat Nilai C";
//         } elseif ($nilai == null) {
//             return "Kamu Belum Memasukkan Nilai";
//         } else {
//             return "Kamu di Bawah Rata Rata";
//         }

//     }
// }

// $rakha = new ujian;
// echo PHP_EOL;
// echo $rakha->getRaport(80);

class raport {
    const A = 90;
    const B = 80;
    const C = 70;

    public function nilai($mtk, $indo, $pjok) {
        if($mtk >= self::A) {
            return "Kamu Dapat Nilai A";
        } elseif ($mtk >= self::B) {
            return "Kamu Dapat Nilai B";
        } elseif ($mtk >= self::C) {
            return "Kamu Dapat Nilai C";
        } elseif ($mtk == null) {
            return "Kamu Belum Memasukkan Nilai";
        } else {
            return "Kamu di Bawah Rata Rata";
        }

        if($indo >= self::A) {
            return "Kamu Dapat Nilai A";
        } elseif ($indo >= self::B) {
            return "Kamu Dapat Nilai B";
        } elseif ($indo >= self::C) {
            return "Kamu Dapat Nilai C";
        } elseif ($indo == null) {
            return "Kamu Belum Memasukkan Nilai";
        } else {
            return "Kamu di Bawah Rata Rata";
        }

        if($pjok >= self::A) {
            return "Kamu Dapat Nilai A";
        } elseif ($pjok >= self::B) {
            return "Kamu Dapat Nilai B";
        } elseif ($pjok >= self::C) {
            return "Kamu Dapat Nilai C";
        } elseif ($pjok == null) {
            return "Kamu Belum Memasukkan Nilai";
        } else {
            return "Kamu di Bawah Rata Rata";
        }
    }

}

$nadhif = new raport;
echo $nadhif->nilai(100, 90, 80);

?>