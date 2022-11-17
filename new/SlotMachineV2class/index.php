<?php

use App\DisplayBoard;
use App\DisplayBoardProcessor;

require_once "vendor/autoload.php";

$emptyToSymbol = [" ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " "];

$dispayBoardClass = new DisplayBoard();
$dispayBoardClass->displayBoard($emptyToSymbol);
$displayBoardProcessor = new DisplayBoardProcessor();
$gameSymbols = $dispayBoardClass->getGameSymbols();

$cost = 10;

echo "One spin cost $cost$" . PHP_EOL;

$totalOnGame = (int)readline("Place money on balance 'min 40$': ");

echo PHP_EOL;

if ($totalOnGame <= 39) {
    exit("Your balance is too Low." . PHP_EOL);
}
$dispayBoardClass->displayBoard($emptyToSymbol);
$output = readline("<<< enter >>>");

$emptyToSymbol[0] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];
$emptyToSymbol[4] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];
$emptyToSymbol[8] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];

echo "First Spin  -$cost$" . PHP_EOL . PHP_EOL;
$dispayBoardClass->displayBoard($emptyToSymbol);

sleep(1);
$emptyToSymbol[1] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];
$emptyToSymbol[5] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];
$emptyToSymbol[9] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];

echo "Second Spin -$cost$" . PHP_EOL . PHP_EOL;
$dispayBoardClass->displayBoard($emptyToSymbol);

sleep(1);
$emptyToSymbol[2] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];
$emptyToSymbol[6] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];
$emptyToSymbol[10] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];

echo "Third Spin  -$cost$" . PHP_EOL . PHP_EOL;
$dispayBoardClass->displayBoard($emptyToSymbol);

sleep(1);
$emptyToSymbol[3] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];
$emptyToSymbol[7] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];
$emptyToSymbol[11] = $dispayBoardClass->getGameSymbols()[array_rand($dispayBoardClass->getGameSymbols())];
echo "Fourth Spin -$cost$" . PHP_EOL . PHP_EOL;

$dispayBoardClass->displayBoard($emptyToSymbol);

echo PHP_EOL;

 $displayBoardProcessor->SuperGame($emptyToSymbol);
echo implode(" ",$displayBoardProcessor->answer).PHP_EOL;

$totalOnGame=$displayBoardProcessor->thiefMoney($totalOnGame, $cost, $displayBoardProcessor->win, $displayBoardProcessor->wincoff);
echo "Total money:$totalOnGame$" . PHP_EOL;
