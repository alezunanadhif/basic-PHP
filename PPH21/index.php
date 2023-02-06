<?php

require_once "App\init.php";

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);
$calculator = new PPH21Calculator($first, $second, $third, $fourth);
echo $calculator->calculate(25000000) . PHP_EOL;
echo $calculator->calculate(3000000000) . PHP_EOL;