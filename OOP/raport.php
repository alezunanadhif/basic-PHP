<?php

// class raport {

//     public $mtk, $indo, $pjok;

//     const A = 90;
//     const B = 80;
//     const C = 70;

//     public function cetakRaport($nama) {
//         if ($this->mtk >= self::A){
//         $nilaiMTK = "A";
//     } elseif ($this->mtk >= self::B){
//         $nilaiMTK = "B";
//     } elseif ($this->mtk >= self::C){
//         $nilaiMTK = "C";
//     } elseif ($this->mtk == null){
//         $nilaiMTK = "Tidak Ada Data Nilai";
//     } else {
//         $nilaiMTK = "Anda di Bawah Rata Rata";
//     }

//     if ($this->indo >= self::A){
//         $nilaiINDO = "A";
//     } elseif ($this->indo >= self::B){
//         $nilaiINDO = "B";
//     } elseif ($this->indo >= self::C){
//         $nilaiINDO = "C";
//     } elseif ($this->indo == null){
//         $nilaiINDO = "Tidak Ada Data Nilai";
//     } else {
//         $nilaiINDO = "Anda di Bawah Rata Rata";
//     }

//     if ($this->pjok >= self::A){
//         $nilaiPJOK = "A";
//     } elseif ($this->pjok >= self::B){
//         $nilaiPJOK = "B";
//     } elseif ($this->pjok >= self::C){
//         $nilaiPJOK = "C";
//     } elseif ($this->pjok == null){
//         $nilaiPJOK = "Tidak Ada Data Nilai";
//     } else {
//         $nilaiPJOK = "Anda di Bawah Rata Rata";
//     }

//     // return semua nilai
//     return "Nilai Matematika $nama adalah $nilaiMTK" . PHP_EOL . "Nilai Bahasa Indonesia $nama adalah $nilaiINDO" . PHP_EOL . "Nilai PJOK $nama adalah $nilaiPJOK";

// }
// }

// $nadhif = new raport;
// $nadhif->mtk = 80;
// $nadhif->indo = 75;
// $nadhif->pjok = 100;
// echo $nadhif->cetakRaport("Nadhiff");



class ulangan {

    private $mtki, $indoi, $pjoki;

    const A = 90;
    const B = 80;
    const C = 70;

    public function __construct($mtki, $indoi, $pjoki)
    {
        $this->mtki = $mtki;
        $this->indoi = $indoi;
        $this->pjoki = $pjoki;
    }

    public function __destruct()
    {
        echo "Objek Telah Di Hapus";
    }

    public function cetakRaporti($name) {
        if ($this->mtki >= self::A){
        $nilaiMTKI = "A";
    } elseif ($this->mtki >= self::B){
        $nilaiMTKI = "B";
    } elseif ($this->mtki >= self::C){
        $nilaiMTKI = "C";
    } elseif ($this->mtki == null){
        $nilaiMTKI = "Tidak Ada Data Nilai";
    } else {
        $nilaiMTKI = "di Bawah Rata Rata";
    }

    if ($this->indoi >= self::A){
        $nilaiINDOI = "A";
    } elseif ($this->indoi >= self::B){
        $nilaiINDOI = "B";
    } elseif ($this->indoi >= self::C){
        $nilaiINDOI = "C";
    } elseif ($this->indoi == null){
        $nilaiINDOI = "Tidak Ada Data Nilai";
    } else {
        $nilaiINDOI = "di Bawah Rata Rata";
    }

    if ($this->pjoki >= self::A){
        $nilaiPJOKI = "A";
    } elseif ($this->pjoki >= self::B){
        $nilaiPJOKI = "B";
    } elseif ($this->pjoki >= self::C){
        $nilaiPJOKI = "C";
    } elseif ($this->pjoki == null){
        $nilaiPJOKI = "Tidak Ada Data Nilai";
    } else {
        $nilaiPJOKI = "di Bawah Rata Rata";
    }

    // return semua nilai
    return "Nilai Matematika $name adalah $nilaiMTKI" . PHP_EOL . "Nilai Bahasa Indonesia $name adalah $nilaiINDOI" . PHP_EOL . "Nilai PJOK $name adalah $nilaiPJOKI" . PHP_EOL;

}
}

$rakhuy = new ulangan(80, 90, 66);
// Bug PHP 
$rakhuy->__construct(100,100,100);
echo $rakhuy->cetakRaporti("Rakhuyy");
unset($rakhuy);