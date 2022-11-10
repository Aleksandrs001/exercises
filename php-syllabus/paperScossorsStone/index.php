<?php


require_once 'elements.php';
require_once 'game.php';
require_once 'player.php';

$paper = new Element("Paper");
$scissors = new Element("Scissors");
$rock = new Element("Rock");

$rock->setBeats($scissors);
$paper->setBeats($rock);
$scissors->setBeats($paper);

$elements = [
    $paper,
    $scissors,
    $rock
];

foreach ($elements as $key => $element) {
    echo "{$key}.{$element->getName()}" . PHP_EOL;
}

$selection = (int)readline('Enter element: ');
$selectedElement = $elements[$selection];
$opponentElement = $elements[array_rand($elements)];


$player1 = new Player("You", $selectedElement);
$player2 = new Player("Computer", $opponentElement);

echo $player1->getSelectedElement()->getName() . " VS " . $player2->getSelectedElement()->getName() . PHP_EOL;

$game = new Game($player1, $player2);
$winner = $game->getWinner();

if ($winner == null) {
    echo "The game is a tie!";
    exit;
}

echo "The winner is " . $winner->getName() . "!!!" . PHP_EOL;


