<?php

echo preg_replace_callback('/[a-z]+/i', function (array $match) {
return 'PHP' === $match[0] ? 'OOP' : $match[0];
}, 'Saya Belajar PHP') . PHP_EOL;

$noname = function ($nama) {
    echo $nama . PHP_EOL;
};

$noname("NADHIF");

$nonumber = function (int $number) {
    echo $number / 2 . PHP_EOL;
};

$nonumber(9);

$word = "and no one knows";

$nooneknows = function () use ($word) {
    echo $word . PHP_EOL;
};

$nooneknows();

$noClass = new class {
    public function getName() {
        echo "Halo Saya Nadhif" . PHP_EOL;
    }
};

$noClass->getName();

class Hewan {
    public function getNamaHewan() {
        return "Kambing" . PHP_EOL;
    }
}

$p = new class extends Hewan {

};

echo $p->getNamaHewan();