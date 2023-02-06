<?php

class FourthRuleCalculator extends AbstractCalculator
{
public function maxPkp(): float
{
return 99999999;
}
public function minPkp(): float
{
return 50000000;
}
public function taxPercentage(): float
{
return 0.3;
}
}
