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

numbers(5, 10);
numbers(25, 10);
numbers(15, 5);
numbers(5, 15);
//var_dump(numbers(5, 10));
//var_dump(numbers(5,5));
?>

