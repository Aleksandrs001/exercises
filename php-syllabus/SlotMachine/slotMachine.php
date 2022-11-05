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
$a1=0;
$b2=0;
$c3=0;
$d4=0;
$win=0;
$winCoff=1;

echo "One spin cost $cost$\n";

$moneyOnCount=(int) readline("Place money on balance : ");

$totalOnGame= $moneyOnCount;

echo PHP_EOL;

function thiefMoney(int $totalOnGame, int $cost ,int $win,float $winCoff): float
{
    return $totalOnGame - $cost +($win*$winCoff);
}
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
        if($totalOnGame<=5) {
            $input = 6;
            echo "Your balance is to low!\n";
            die;
        }
        elseif ($input == 1) {
            $b[0] = $gameSym[$rS0];
            $b[4] = $gameSym[$rS1];
            $b[8] = $gameSym[$rS2];
            $a1+= thiefMoney($totalOnGame, $cost, $win,$winCoff);
            echo "First Spin  -$cost$\n";
            echo "Total balance:$a1$ ".PHP_EOL;


        } elseif ($input == 2) {
            $b[1] = $gameSym[$rS0];
            $b[5] = $gameSym[$rS1];
            $b[9] = $gameSym[$rS2];
            $b2+=  thiefMoney($a1, $cost, $win,$winCoff);
            $secondRound= "Second Spin -$cost$\n";
            echo "Total balance:$b2$ ".PHP_EOL;

        } elseif ($input == 3) {
            $b[2] = $gameSym[$rS0];
            $b[6] = $gameSym[$rS1];
            $b[10] = $gameSym[$rS2];
            $c3+= thiefMoney($b2, $cost, $win,$winCoff);
            echo "Third Spin  -$cost$\n";
            echo "Total balance: $c3$ ".PHP_EOL;

        } elseif ($input == 4) {
            $b[3] = $gameSym[$rS0];
            $b[7] = $gameSym[$rS1];
            $b[11] = $gameSym[$rS2];
            $d4+=thiefMoney($c3, $cost, $win,$winCoff);
            echo "Fourth Spin -$cost$\n";
            echo "Total balance:$d4$ ".PHP_EOL;

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
        echo"Total money: ". thiefMoney($d4,$cost=0, $win=500,$winCoff=5)."$";
    }
    // 4 in string
    elseif (
        $b[0] === $b[1] && $b[0] === $b[2] && $b[1] === $b[2] && $b[1] === $b[3]||
        $b[4] === $b[5] && $b[4] === $b[6] && $b[5] === $b[6] && $b[5] === $b[7]||
        $b[8] === $b[9] && $b[8] === $b[10] && $b[9] === $b[10] && $b[9] === $b[11]
    ) {
        echo "winner 4x per line SUPER\n";
        echo"Total money: ".thiefMoney($d4,$cost=0, $win=50,$winCoff=1.33)."$";
    }
        // 3 in string
    elseif ($b[0] === $b[1] && $b[0] === $b[2] || $b[1] === $b[2] && $b[1] === $b[3] ||
        $b[4] === $b[5] && $b[4] === $b[6] || $b[5] === $b[6] && $b[5] === $b[7] ||
        $b[8] === $b[9] && $b[8] === $b[10] || $b[9] === $b[10] && $b[9] === $b[11]
    ) {
        echo "winner 3x per line\n";
        echo"Total money: ".thiefMoney($d4,$cost=0, $win=30,$winCoff=1.2)."$";
    }else
    {
        echo"Total money: ".thiefMoney($d4,$cost=0, $win=1,$winCoff)."$";
    }

    //much more win position!!!need time=(
    //4x 3 lines
    //4x 2 lines
    //3x 3 lines
    //3x 2 lines
    //combos

echo PHP_EOL;


