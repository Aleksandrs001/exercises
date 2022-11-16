<?php

namespace App;

class DisplayBoard
{



    public function displayBoard(array $b):array
    {
        $b1 =$b;
        echo "| {$b1[0]} | {$b1[1]} | {$b1[2]} | {$b1[3]} |" . PHP_EOL;
        echo " ---+---+---+---" . PHP_EOL;
        echo "| {$b1[4]} | {$b1[5]} | {$b1[6]} | {$b1[7]} |" . PHP_EOL;
        echo " ---+---+---+---" . PHP_EOL;
        echo "| {$b1[8]} | {$b1[9]} | {$b1[10]} | {$b1[11]} |" . PHP_EOL;
        return $b1;
    }



    public function getGameSymbols():array
    {
        return ["#", "$", "%", "7", "@",];
    }

}