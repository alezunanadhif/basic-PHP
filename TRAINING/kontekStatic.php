<?php

class Kata {
    public static function Pertama() {
        echo "Hai ";
    }

    public static function Kedua() {
        echo static::Pertama() . "Dunia";
    }
}

Kata::Kedua();