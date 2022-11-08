<?php

$minNum = (int)readline("Min? ");
$maxNum = (int)readline("Max? ");

for ($i = $minNum; $i <= $maxNum; $i++) {
    for ($x = $i; $x <= $maxNum; $x++) {
        echo $x;
    }
    for ($y = 0; $y < $i - $minNum; $y++) {
        echo $minNum + $y;
    }
    echo PHP_EOL;
}
