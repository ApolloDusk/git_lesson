<?php
require './CalculationClass.php';

$Calculation = new CalculationClass();
var_dump($Calculation->tax(100));
var_dump($Calculation->tax(350));
var_dump($Calculation->tax(800));
