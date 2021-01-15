<?php

$number = 7;
$count = 0;

for ($i = 1; $i <= $number; $i++) {
    if ($number % $i === 0) {
        $count++;
    }

}

if ($count === 2) {
    echo 'Number is prime.';
} else {
    echo 'Number is not prime.';
}
