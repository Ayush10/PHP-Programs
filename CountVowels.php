<?php

$word = "educations";
$vowels = array('a','e','i','o','u');
$len = strlen($word);
$count = 0;

$i = 0;

for ($i = 0; $i < $len; $i++) {
    if (in_array($word[$i], $vowels)) {
        $count++;
    }
}

echo "The number of vowels in the word educations is " . $count . ".";