<?php


$numbers = [1, 2, 3, 4.7, '5'];

array_walk($numbers,
    function (&$value) {
        if (is_numeric($value)) {
            $value = $value * 2;
            echo $value . " ";
        }
    }
);
