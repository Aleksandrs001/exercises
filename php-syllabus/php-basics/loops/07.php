<?php

$desiredSum = (int)readline("Desired sum: ");

do {
    $dice1 = rand(1, 6);
    $dice2 = rand(1, 6);
    $diceSum = $dice1 + $dice2;
    echo "$dice1 and $dice2 = $diceSum\n";
} while ($desiredSum != $diceSum);
echo PHP_EOL;