<?php

require_once "App\init.php";

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);
$calculator = new PPH21Calculator($first, $second, $third, $fourth);

$penghasilanAkhir = $calculator->calculate(70000000);
echo "Penghasilan Akhir Rp. " . number_format($penghasilanAkhir) . PHP_EOL;