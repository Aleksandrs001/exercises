// Game ####

$words=["codelex", "bigbadabum", "school" ];

$word= $words[array_rand($words)];
$letters= str_split($word);
$correctWord= str_split(str_repeat("*", strlen($word)));

echo implode("",$correctWord);
echo PHP_EOL;

$guesses= 0;
$maxGuesses= strlen($word) +3;

while ($guesses < $maxGuesses && in_array("*", $correctWord))
{
    $letter= readline("Enter letter: ");
    $letterPosition= array_keys($letters, $letter);
    if(count($letterPosition)>0)
    {
        foreach ($letterPosition as $position){
            $correctWord[$position]= $letter;
        }
    }
    echo implode("", $correctWord);
    Echo PHP_EOL;

    $guesses++;
}
echo in_array("*", $correctWord) ? "You lose": "Congratulation, you win";
echo  PHP_EOL;
?>
