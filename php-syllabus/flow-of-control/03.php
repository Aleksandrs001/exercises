<?php

$number= 555;
    if(strrpos($number, '.')>0 || strrpos($number, '.')<0){
                echo($number." : Number is float".PHP_EOL);
    }
    elseif ( $number > 0) {
        echo $number . " : Is positive number. With : " .strlen($number) ." digits" . PHP_EOL;
    } elseif ($number < 0) {
        echo $number . " : Is negative number." . PHP_EOL;
    } elseif ($number == 0) {
        echo "Zero" . PHP_EOL;
    }
