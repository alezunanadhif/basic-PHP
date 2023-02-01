<?php

class Variadic
{

    public static function add(int ...$numbers)
{
    return array_sum($numbers);
}
}

$numbers = [1, 2, 3, 4];
echo Variadic::add(...$numbers) . PHP_EOL;