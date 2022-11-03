<?php

$fromNumber = 1;
$tooNumber = 10;
$rangeOfNumbers = range($fromNumber, $tooNumber);
$mltOfNumbers = array_product($rangeOfNumbers);

echo "From number $fromNumber to $tooNumber is $mltOfNumbers";
echo PHP_EOL;
