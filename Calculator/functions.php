<?php

function calculate($num01, $num02, $oper){
    $answer;

    switch ($oper){
        case "+":
            $answer = $num01 + $num02;
            break;
        case "-":
            $answer = $num01 - $num02;
            break;
        case "*":
            $answer = $num01 * $num02;
            break;
        case "/":
            $answer = $num01 / $num02;
            break;
        default:
            $answer = "Error!";
            break;
    }
    return $answer;
}

$num01 = $_POST['num1'];
$num02 = $_POST['num2'];
$oper = $_POST['oper'];

echo "Answer: " . calculate($num01,$num02,$oper);


