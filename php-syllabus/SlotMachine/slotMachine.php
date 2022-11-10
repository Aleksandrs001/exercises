<?php

$board = [
    ["row" => 0, "column" => 0], ["row" => 1, "column" => 0], ["row" => 2, "column" => 0],["row" => 3, "column" => 0],
    ["row" => 0, "column" => 1], ["row" => 1, "column" => 1], ["row" => 2, "column" => 1],["row" => 3, "column" => 1],
    ["row" => 0, "column" => 2], ["row" => 1, "column" => 2], ["row" => 2, "column" => 2],["row" => 3, "column" => 2],
];
$b = ["","","","", "","","","", "","","",""];
function displayBoard($b)
{
    echo "| $b[0] | $b[1] | $b[2] | $b[3] |\n";
    echo " ---+---+---+---\n";
    echo "| $b[4] | $b[5] | $b[6] | $b[7] |\n";
    echo " ---+---+---+---\n";
    echo "| $b[8] | $b[9] | $b[10] | $b[11] |\n";
}
$gameSym=["#","@","#","%","*"];

$cost=10;
$win=0;
$winCoff=1;
function thiefMoney(int $totalOnGame, int $cost ,int $win,float $winCoff): float
{
    return $totalOnGame - $cost +($win*$winCoff);
}
echo "One spin cost $cost$\n";

$totalOnGame=(int) readline("Place money on balance : ");


echo PHP_EOL;


if ($totalOnGame<=39) {
exit("Your balance is too Low.\n");
}
displayBoard($b);

   $input=null;

    do {
        $rS0 = array_rand($gameSym);
        $rS1 = array_rand($gameSym);
        $rS2 = array_rand($gameSym);

        $output = $input++ . readline("<<< enter >>>");

        if ($input == 1) {
            $b[0] = $gameSym[$rS0];
            $b[4] = $gameSym[$rS1];
            $b[8] = $gameSym[$rS2];
            echo "First Spin  -$cost$\n";

        } elseif ($input == 2) {
            $b[1] = $gameSym[$rS0];
            $b[5] = $gameSym[$rS1];
            $b[9] = $gameSym[$rS2];
            echo "Second Spin -$cost$\n";

        } elseif ($input == 3) {
            $b[2] = $gameSym[$rS0];
            $b[6] = $gameSym[$rS1];
            $b[10] = $gameSym[$rS2];
            echo "Third Spin  -$cost$\n";

        } elseif ($input == 4) {
            $b[3] = $gameSym[$rS0];
            $b[7] = $gameSym[$rS1];
            $b[11] = $gameSym[$rS2];
            echo "Fourth Spin -$cost$\n";
            $totalOnGame-=thiefMoney($totalOnGame, $cost=40, $win,$winCoff);


        }
        displayBoard($b);

        echo PHP_EOL;

    } while ($input <= 3);
             //supergame
    if ($b[8] === $b[9] && $b[8] === $b[10] && $b[9] === $b[10] && $b[9] === $b[11] &&
        $b[4] === $b[5] && $b[4] === $b[6] && $b[5] === $b[6] && $b[5] === $b[7] &&
        $b[0] === $b[1] && $b[0] === $b[2] && $b[1] === $b[2] && $b[1] === $b[3]
    ){
        echo "winner UP Center Down 4x per line line SUPER\n";
        $totalOnGame += thiefMoney($totalOnGame,$cost=0, $win=50,$winCoff=1.33);
        echo"Total money: $totalOnGame$";
    }
    // 4 in string
    elseif (
        $b[0] === $b[1] && $b[0] === $b[2] && $b[1] === $b[2] && $b[1] === $b[3]||
        $b[4] === $b[5] && $b[4] === $b[6] && $b[5] === $b[6] && $b[5] === $b[7]||
        $b[8] === $b[9] && $b[8] === $b[10] && $b[9] === $b[10] && $b[9] === $b[11]
    ) {
        echo "winner 4x per line SUPER\n";
        $totalOnGame += thiefMoney($totalOnGame,$cost=0, $win=50,$winCoff=1.33);
        echo"Total money: $totalOnGame$";
    }
        // 3 in string
    elseif ($b[0] === $b[1] && $b[0] === $b[2] || $b[1] === $b[2] && $b[1] === $b[3] ||
        $b[4] === $b[5] && $b[4] === $b[6] || $b[5] === $b[6] && $b[5] === $b[7] ||
        $b[8] === $b[9] && $b[8] === $b[10] || $b[9] === $b[10] && $b[9] === $b[11]
    ) {
        echo "winner 3x per line\n";
        $totalOnGame += thiefMoney($totalOnGame,$cost=0, $win=50,$winCoff=1.33);
        echo"Total money: $totalOnGame$";

    }else
    {

        echo"Total money: $totalOnGame$";

    }

    //much more win position!!!need time=(
    //4x 3 lines
    //4x 2 lines
    //3x 3 lines
    //3x 2 lines
    //combos

echo PHP_EOL;

aaa
