<?php

$keyboardNums= [
    [2, "A", "B", "C"],
    [3, "D", "E", "F"],
    [4, "G", "H", "I"],
    [5, "J", "K", "L"],
    [6, "M", "N", "O"],
    [7, "P", "Q", "R", "S"],
    [8, "T", "U", "V"],
    [9, "W", "X", "Y", "Z"]
];
$wordInp = strtoupper(readline("Enter word : "));
$wordMas = str_split($wordInp);

for ($i = 0; $i < count($wordMas); $i++) {
    for ($j = 0; $j < count($keyboardNums); $j++) {
                  if (array_search($wordMas[$i], $keyboardNums[$j]) == 1) {
                echo $keyboardNums[$j][0];
            } else if (array_search($wordMas[$i], $keyboardNums[$j]) == 2) {
                echo $keyboardNums[$j][0], $keyboardNums[$j][0];
            } else if (array_search($wordMas[$i], $keyboardNums[$j]) == 3) {
                echo $keyboardNums[$j][0], $keyboardNums[$j][0], $keyboardNums[$j][0];
            } else if (array_search($wordMas[$i], $keyboardNums[$j]) == 4) {
                echo $keyboardNums[$j][0], $keyboardNums[$j][0], $keyboardNums[$j][0], $keyboardNums[$j][0];
        }
    }
}
echo PHP_EOL;


