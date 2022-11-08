<?php
class Piglet
{

    public static function start(): void
    {
        echo "Welcome to Piglet".PHP_EOL;

        $score = 0;

        while(true) {
            $roll = rand(1, 6);

            echo "You rolled " . $roll . PHP_EOL;

            if ($roll === 1){
                $score = 0;
                break;
            }
            $score += $roll;

            do{
                $userSelection = readline("Roll again? y/n : ");
            } while($userSelection !== "y" && $userSelection !== "n");

            if ($userSelection === "n") {
                break;
            }
        }
        echo "You got $score points.".PHP_EOL ;
    }
}

$start = new Piglet();
$start->start();
