<?php

$fromNumber = 1;
$tooNumber = 100;

$rangeOfNumbers = range($fromNumber, $tooNumber);
$sumOfNumbers = array_sum($rangeOfNumbers);
$averageNumber = $sumOfNumbers / count($rangeOfNumbers);

echo "Sum of $fromNumber to $tooNumber is $sumOfNumbers" . PHP_EOL;
echo "The average is $averageNumber" . PHP_EOL;
