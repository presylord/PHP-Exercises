<?php

declare(strict_types=1);
include 'autoload-class.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$oper = $_POST['oper'];

$result = new Calc($oper, (int)$num1, (int)$num2);
echo $result->calculate();
