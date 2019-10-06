<?php
$firstNumber = $_GET['x1'];
$secondNumber = $_GET['x2'];

$result =  $firstNumber . ' ' . $_GET['operation'] . ' ' . $secondNumber . ' = ';

switch ($_GET['operation']) {
    case "+":
       $result .= $firstNumber + $secondNumber;
       break;

    case "-":
        $result .= $firstNumber - $secondNumber;
        break;

    case "*":
        $result .= $firstNumber * $secondNumber;
        break;

    case "/":
        $result .= $firstNumber / $secondNumber;
        break;
}
return $result;
