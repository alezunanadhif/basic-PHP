<?php

class contohStatic {

    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka ++ . " kali";
    }
}

echo contohStatic::$angka;
echo PHP_EOL;
echo contohStatic::halo();
echo PHP_EOL;
echo contohStatic::halo();
echo PHP_EOL;
echo contohStatic::halo();
echo PHP_EOL;

$contoh1 = new contohStatic;
echo $contoh1->halo() . PHP_EOL;
echo $contoh1->halo() . PHP_EOL;
echo $contoh1->halo() . PHP_EOL;

$contoh2 = new contohStatic;
echo $contoh2->halo() . PHP_EOL;
echo $contoh2->halo() . PHP_EOL;
echo $contoh2->halo() . PHP_EOL;