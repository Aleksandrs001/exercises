<?php

class FizzBuzz
{
    public function userNumber(int $userChoice)
    {
        $space = "";
        for ($i = 1; $i <= $userChoice; $i++) {
            switch (true) {
                case ($i % 5 == 0 && $i % 3 == 0):
                    $space .= "FizzBuzz ";
                    break;
                case ($i % 5 == 0):
                    $space .= "Buzz ";
                    break;
                case ($i % 3 == 0):
                    $space .= "Fizz ";
                    break;
                default:
                    $space .= $i . "  ";
            }
            if ($i % 20 == 0 || $i == $userChoice) {
                $this->newLine($space);
                $space = "";
            }
        }
    }

    public function newLine(string $space):void
    {
        echo $space . PHP_EOL;
    }
}
$userChoice = (int)readline("Your Number: ");
if($userChoice== ""){
    exit("Only Number\n");

}
$fizzBuzz = new FizzBuzz();
$fizzBuzz->userNumber($userChoice);
