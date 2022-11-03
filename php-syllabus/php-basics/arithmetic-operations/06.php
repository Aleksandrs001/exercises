<?php

$min = 1;
$max = 110;

while ($min < $max) {
    for ($i = 1; $i <= 11; $i++) {
        if ($min % 21 == 0) {
            echo "CozaWoza" . " ";
            $min++;
        } else if ($min % 15 == 0) {
            echo "CozaLoza" . " ";
            $min++;
        } else if ($min % 3 == 0) {
            echo "Coza" . " ";
            $min++;
        } else if ($min % 5 == 0) {
            echo "Loza" . " ";
            $min++;
        } else if ($min % 7 == 0) {
            echo "Woza" . " ";
            $min++;
        } else {
            echo "" . $min . " ";
            $min++;
        }
    }
    echo " \n" ;
}
