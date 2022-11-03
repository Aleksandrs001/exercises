<?php

function checkOddEven($number)
{
    if ($number % 2 == 0) {
        echo $number . " Even Number, bye!" . PHP_EOL;
    } else {
        echo $number . " Odd Number, bye!" . PHP_EOL;
    }
}

checkOddEven(5);
checkOddEven(4);
echo PHP_EOL;