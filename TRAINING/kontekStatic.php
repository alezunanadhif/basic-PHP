<?php

class Kata {
    public function pertama() {
        echo "Hai ";
    }

    public static function kedua() {
        (new self)->pertama();
        echo "Dunia ";
    }
}

Kata::kedua();