<?php

$min = 1;
$max = 100;
$random = rand($min, $max);
//echo "tst $random" .PHP_EOL; //for testing
$guess = 0;

$maxGuesses = 1;                                                                               //in future=) change numbers of odds

while ($maxGuesses > $guess) {
    $userGuess = (int)readline("I'm thinking of a number between 1-100. Try to guess it :");
    if ($guess == 2) {                                                                         /* in future change int to maxGuesses int -1 */
        echo "Sorry out of guesses. I was thinking of $random." . PHP_EOL;
    } elseif (!$userGuess == is_integer(1 - 100)) {
        echo "Not a number." . PHP_EOL;
        die;
    } elseif ($userGuess == $random) {
        echo "You guessed it! What are the odds?!?" . PHP_EOL;
    } elseif ($userGuess < $random) {
        echo "Sorry, you are too low. I was thinking of " . $random . ". " . PHP_EOL;           //if more that one odds, get off "I was thinking of " .$random ."." "
    } elseif ($userGuess > $random) {
        echo "Sorry, you are too high. I was thinking of " . $random . "." . PHP_EOL;            //if more that one odds, get off "I was thinking of " .$random ."."     "
    }

    $guess++;
}
