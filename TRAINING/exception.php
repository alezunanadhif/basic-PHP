<?php

use FTP\Connection as FTPConnection;

class Connection
{
public function connect()
{
throw new RuntimeException('Anda harus mengimplementasikan method connect() sesuai dengan database driver yang Anda gunakan.');
}
}

try {
    $err = new Connection;
    $err->connect();
} catch (RuntimeException $e) {
    echo $e->getMessage();
    echo PHP_EOL;
}

class Errorable
{
public static function calculate(int $number)
{
    if ($number == 0) {
        throw new DivisionByZeroError("ERROR ! kamu memasukkan angka 0");
    } else {
        return "kamu memasukkan angka $number";
    }

    return ($number % 0);
}
}

try {
    Errorable::calculate(7);
} catch (RuntimeException $e) {
    echo "harusnya tidak tampil" . PHP_EOL;
} catch (DivisionByZeroError $e) {
    echo $e->getMessage() . PHP_EOL;
} finally {
    echo "error tidak ada yang sesuai";
}

// echo 'Ini tetap dieksekusi'. PHP_EOL;