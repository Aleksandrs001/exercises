<?php

/**
////////////////\\\\\\\\\\\\\\\\
////////////********\\\\\\\\\\\\
////////****************\\\\\\\\
////************************\\\\
********************************
*/
$zvaigznite= "*";
$slash= '/';
$slashOther='\\';
//strlen();
$x=0;
$y=0;
$firstFor=30;
$counterZv=0;

        for ($j = 0; $j <= 30; $j++) {
        echo $slash;
        sleep(1);
            $firstFor.="a";
            if($j==30){
            for ($i = 0; $i <= strlen($firstFor); $i++) {
                echo $zvaigznite;
                sleep(2/3);

                }
            }
        }echo PHP_EOL;

