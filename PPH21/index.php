<?php

// require_once "App\init.php";
require __DIR__ . '/vendor/autoload.php';

use App\Calculate\FirstRuleCalculator;
use App\Calculate\SecondRuleCalculator;
use App\Calculate\ThirdRuleCalculator;
use App\Calculate\FourthRuleCalculator;
use App\Calculate\PPH21Calculator;

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);
$calculator = new PPH21Calculator($first, $second, $third, $fourth);

$gaji = 70000000;
$pph21 = $calculator->calculate($gaji);
$penghasilanAkhir = $gaji - $pph21;

echo "Penghasilan Awal Rp. " . $gaji . PHP_EOL;
echo "Pajak PPH21 Rp. " . number_format($pph21) . PHP_EOL;
echo "Penghasilan Akhir Rp. " . number_format($penghasilanAkhir) . PHP_EOL;