<?php

function numbers($first, $second): bool
{
    if ($first == 15 || $second == 15) {
        return "true";
    } elseif ($first + $second == 15) {
        return "true";
    } elseif ($first - $second == 15) {
        return "true";
    } else {
        return "false";
    }

}

echo PHP_EOL;
numbers($first=5, $second=10);
numbers($first=25, $second=10);
numbers($first=15, $second=5);
numbers($first=5, $second=15);


