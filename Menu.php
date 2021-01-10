<?php

$firstNumber = 5;
$secondNumber = 10;

$operator = array('Add', 'Sub', 'Mul', 'Div');
$result = '';

if (is_numeric($firstNumber) && is_numeric($secondNumber)) {
    switch ($operator[3]) {
        case 'Add':
            $result = $firstNumber + $secondNumber;
            echo "First Number + Second Number: " . $result;
            break;
        case 'Sub':
            $result = $firstNumber - $secondNumber;
            echo "First Number - Second Number: " . $result;
            break;
        case 'Mul':
            $result = $firstNumber * $secondNumber;
            echo "First Number * Second Number: " . $result;
            break;
        case 'Div':
            $result = $firstNumber / $secondNumber;
            echo "First Number / Second Number: " . $result;
            break;

        default:
            echo 'Invalid operation';

    }
}