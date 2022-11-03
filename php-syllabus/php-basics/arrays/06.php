<?php

$answer = "again";
$answerA = "again";
$words = ["leviathan", "hello", "car", "dog", "mouse", "chopper"];

while ($answerA == $answer)
{
    $word = $words[array_rand($words)];
    $letters = str_split($word);
    $correctWord = str_split(str_repeat("-", strlen($word)));
    $misses = "";
    $guess = "";
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-";
    echo PHP_EOL;
    echo "Word:   " . implode("", $correctWord);
    echo PHP_EOL;
    echo "Misses: ";
    echo PHP_EOL;

    $guesses = 0;
    $maxGuesses = strlen($word) + 3;
    while ($guesses < $maxGuesses && in_array("-", $correctWord)) {
        $letter = readline("Guess:  ");
        $letterPosition = array_keys($letters, $letter);

        if (count($letterPosition) == 0) {
            $misses .= $letter;
        }
        if (count($letterPosition) > 0) {
            foreach ($letterPosition as $position) {
                $correctWord[$position] = $letter . $guess;
            }
        }
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-";
        echo PHP_EOL;
        echo "Word:   " . implode("", $correctWord);
        echo PHP_EOL;
        echo "Misses: " . $misses;
        echo PHP_EOL;
        $guesses++;
    }
    echo in_array("-", $correctWord) ? PHP_EOL . "You lose;(" . PHP_EOL . "It was a word: " . $word : "YOU GOT IT!";
    echo PHP_EOL;
    $answer = readline('Play "again" or "quit"? ');
    if (!$answer == $answerA) {
        break;
    }
}
echo PHP_EOL;

?>


