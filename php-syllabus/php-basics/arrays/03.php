<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];


//todo check if an array contains a value user entered

$enteredNum = readline("Enter the value to search for: ");

if (in_array($enteredNum, $numbers)) {
    echo "This number is in number array.\n";
} else
    echo "This number NOT in number array.\n";
