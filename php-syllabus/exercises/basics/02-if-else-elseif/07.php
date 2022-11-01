<?php

function testNumbers($number)
{
    switch ($number) {
        case ($number < 50):
            echo "low";
            echo PHP_EOL;
            break;
        case (($number >= 50) && ($number < 100)):
            echo "medium";
            echo PHP_EOL;
            break;

        case ($number >= 100):
            echo "high";
            echo PHP_EOL;
            break;
    }
}

echo PHP_EOL;

testNumbers($number = 45);
testNumbers($number = 50);
testNumbers($number = 150);

?>