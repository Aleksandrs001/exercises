<?php

function lenOfNum($number)
{
    if(strrpos($number, '.')>0 ||strrpos($number, '.')<0){
                echo("Number is float\n");
                return;
    }
    elseif ((int) $number > 0) {
        echo $number . " : Is positive number. With : " .strlen($number) ." digits" . PHP_EOL;
    } elseif ($number < 0) {
        echo $number . " : Is negative number." . PHP_EOL;
    } elseif ($number == 0) {
        echo "Zero" . PHP_EOL;
    }
}

lenOfNum(-25.3).PHP_EOL;
lenOfNum(+25).PHP_EOL;
lenOfNum(9999).PHP_EOL;
lenOfNum(-25.1).PHP_EOL;

?>
