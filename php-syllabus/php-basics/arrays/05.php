<?php
$board= [
    [" "," "," "],
    [" "," "," "],
    [" "," "," "],
];

$combinations=[
    // Horizontal
    [[0,0],[0,1],[0,2]],
    [[1,0],[1,1],[1,2]],
    [[2,0],[2,1],[2,2]],
    //Vertical
    [[0,0],[1,0],[0,2]],
    [[1,0],[1,1],[2,1]],
    [[0,2],[1,2],[2,2]],
    //Diagonal
    [[0,0],[1,1],[2,2]],
    [[0,2],[1,1],[2,0]],

];

function displayBoard(array$board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
}

echo "Lets the game begin!\n";

displayBoard($board);

$playerA="X";
$playerB="O";

$currentPlayer= $playerA;

$turns = 0;


while(true) {
    $turns++;

    $userChoice = readline(" $currentPlayer, choose your location (Row, column) (include )\n");
    [$row, $column]= explode(" ", $userChoice);

    if ($row == null || $column == null){
        displayBoard($board);
        echo "invalid input";
        continue;
    }

    if ($board[$row][$column]==" "){
        $board[$row][$column]=$currentPlayer;
    } else {
        displayBoard($board);
        echo "Cell is already filled\n";
        continue;
    }
    echo PHP_EOL;
    displayBoard($board);

    foreach ($combinations as $combination){
        $conditionCounter=0;

        foreach ($combination as $position){
            [$row,$column]= $position;
            if($board[$row][$column] !==$currentPlayer){
                break;
            }
            $conditionCounter++;
        }

        if($conditionCounter==3){
            echo "Player $currentPlayer wins!\n";
        }
    }
    $isTie=false;
    foreach ($board as $element)
        if($turns === 9){
            echo "Tie!";
            exit;
        }
    $currentPlayer= $currentPlayer=== $playerA? $playerB: $playerA;
}