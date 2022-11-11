<?php declare(strict_types=1);

require_once 'Element.php';
require_once 'Game.php';
require_once 'Player.php';

const ROCK = "rock";
const PAPER = "paper";
const SCISSORS = "scissors";
const LIZZARD = "lizard";
const SPOCK = "spock";

$rock = new Element(ROCK);
$paper = new Element(PAPER);
$scissors = new Element(SCISSORS);
$lizard = new Element(LIZZARD);
$spock = new Element(SPOCK);

$rock->setBeats([$scissors, $lizard]);
$paper->setBeats([$rock, $spock]);
$scissors->setBeats([$paper, $lizard]);
$lizard->setBeats([$paper, $spock]);
$spock->setBeats([$rock, $scissors]);

$elements = [
    $rock,
    $paper,
    $scissors,
    $lizard,
    $spock
];

echo "Rock Paper Scissors Lizard Spock game" . PHP_EOL;
$playerName = "Me";
$opponentName = "PC";
$player = new Player($playerName);
$opponent = new Player($opponentName);
do {
    $game = new Game($player, $opponent);
    foreach ($elements as $key => $element) {
        echo "[" . ($key + 1) . "]" . $element->getName() . PHP_EOL;
    }
    do {
        $selection = (int)readline("Select your hand (1-" . (count($elements)) . "): ");
    } while ($selection < 1 || $selection > count($elements));
    $selection--;

    $player->setElement($elements[$selection]);
    $opponent->setElement($elements[array_rand($elements)]);

    echo "{$player->getName()} selected: {$player->getElement()->getName()}\n";
    echo "{$opponent->getName()} selected: {$opponent->getElement()->getName()}\n";

    $winner = $game->getWinner();

    if ($winner === null) {
        echo "The game was a tie!\n";
    } else {
        echo "{$winner->getName()} won!\n";
    }

    $again = strtolower(readline("Play again? (y/n): "));
} while ($again === "y" || $again === "yes");




