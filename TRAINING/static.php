<?php

class contohStatic {

    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka ++ . " kali";
    }
}

// echo contohStatic::$angka . PHP_EOL;

// echo contohStatic::halo() . PHP_EOL;
// echo contohStatic::halo() . PHP_EOL;
// echo contohStatic::halo() . PHP_EOL;

// $contoh1 = new contohStatic;
// echo $contoh1->halo() . PHP_EOL;
// echo $contoh1->halo() . PHP_EOL;
// echo $contoh1->halo() . PHP_EOL;

// $contoh2 = new contohStatic;
// echo $contoh2->halo() . PHP_EOL;
// echo $contoh2->halo() . PHP_EOL;
// echo $contoh2->halo() . PHP_EOL;

class StringMutator
{
public static function bold(string $word): string
{
return sprintf('<b>%s</b>', $word);
}
public static function italic(string $word): string
{
return sprintf('<i>%s</i>', $word);
}
public static function boldItalic(string $word): string
{
return self::italic(self::bold($word));
}
}
class ChildStringMutator extends StringMutator
{
public static function bold(string $word): string
{
return '<b>STATIC LATE BINDINGS</b>';
}
}

echo ChildStringMutator::boldItalic('Muhamad Surya Iksanudin') . PHP_EOL;
echo StringMutator::italic("RAKUY") . PHP_EOL;
