<?php

require_once('./vendor/autoload.php');

use SebastianBergmann\Money\Currency;
use SebastianBergmann\Money\Money;

// Create Money object that represents 1 EUR
$m = new Money(100, new Currency('EUR'));

// Access the Money object's monetary value
//print $m->getAmount();

// Access the Money object's monetary value converted to its base units
//print $m->getConvertedAmount();


$coord = new Coordinate(2,3);

$coord->printPosition();