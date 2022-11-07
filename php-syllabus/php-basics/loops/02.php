<?php

$first = 5;
$second = 5;

$pow = 1;
for ($i = 1; $i <= $second; $i++) {
    $pow *= $first;
}
echo "Input number of terms:$pow".PHP_EOL;
