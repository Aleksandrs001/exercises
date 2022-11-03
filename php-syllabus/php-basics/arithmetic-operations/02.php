<?php

function checkOddEven($number)
{
    if ($number % 2 == 0) {
        echo $number . " Even Number, bye!\n";
    } else {
        echo $number . " Odd Number, bye!\n" ;
    }
}

checkOddEven(5);
checkOddEven(4);
