<?php

$number = 5000;
$count = 0;

for ($i = 1; $i <= $number; $i++) {
    if ($number % $i === 0) {
        $count++;
        if ($count > 2) {
            break;
        }
    }

}

if ($count === 2) {
    echo 'Number is prime.';
} else {
    echo 'Number is not prime.';
}
