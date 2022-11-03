<?php

$data = [
    ["row" => 0, "column" => 0], ["row" => 1, "column" => 0], ["row" => 2, "column" => 0],
    ["row" => 0, "column" => 1], ["row" => 1, "column" => 1], ["row" => 2, "column" => 1],
    ["row" => 0, "column" => 2], ["row" => 1, "column" => 2], ["row" => 2, "column" => 2]
];

$b = [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '];

function display_board($b)
{

    echo " $b[0] | $b[1] | $b[2] \n ";
    echo "---+---+---\n";
    echo " $b[3] | $b[4] | $b[5] \n";
    echo "---+---+---\n";
    echo " $b[6] | $b[7] | $b[8] \n";

}

$playerOne = "X";
$playerTwo = "O";
$turn = $playerOne;
display_board($b);

for ($i = 0; $i < 9; $i++)
{
    do {
        $inputOne = (int)readline("$turn Turn| Enter Row: ");
        $inputTwo = (int)readline("$turn Turn| Enter Column: ");
        $input = [array("row" => $inputOne, "column" => $inputTwo)];
        $x = "end";

        if ($input[0] == $data[0]) {
            if ($b[0] == "0" || $b[0] == "X") {
                $x = "repeat";
                echo "Wrong Input\n";
            } else $b[0] = $turn;
        } elseif ($input[0] == $data[1]) {
            if ($b[1] == "0" || $b[1] == "X") {
                echo "Wrong Input\n";
                $x = "repeat";
            } else $b[1] = $turn;
        } elseif ($input[0] == $data[2]) {
            if ($b[2] == "0" || $b[2] == "X") {
                echo "Wrong Input\n";
                $x = "repeat";
            } else $b[2] = $turn;
        } elseif ($input[0] == $data[3]) {
            if ($b[3] == "0" || $b[3] == "X") {
                echo "Wrong Input\n";
                $x = "repeat";
            } else $b[3] = $turn;
        } elseif ($input[0] == $data[4]) {
            if ($b[4] == "0" || $b[4] == "X") {
                echo "Wrong Input\n";
                $x = "repeat";
            } else $b[4] = $turn;
        } elseif ($input[0] == $data[5]) {
            if ($b[5] == "0" || $b[5] == "X") {
                echo "Wrong Input\n";
                $x = "repeat";
            } else $b[5] = $turn;
        } elseif ($input[0] == $data[6]) {
            if ($b[6] == "0" || $b[6] == "X") {
                echo "Wrong Input\n";
                $x = "repeat";
            } else $b[6] = $turn;
        } elseif ($input[0] == $data[7]) {
            if ($b[7] == "0" || $b[7] == "X") {
                echo "Wrong Input\n";
                $x = "repeat";
            } else $b[7] = $turn;
        } elseif ($input[0] == $data[8]) {
            if ($b[8] == "0" || $b[8] == "X") {
                echo "Wrong Input\n";
                $x = "repeat";
            } else $b[8] = $turn;
        } else {
            $x = "repeat";
            echo "Wrong Input\n";
        }

        echo "\n";

        display_board($b);

    } while ($x == "repeat");

    $win = "";

    if ($b[0] == "X" && $b[1] == "X" && $b[2] == "X") {
        $win = $turn;
    } elseif ($b[0] == "O" && $b[1] == "O" && $b[2] == "O") {
        $win = $turn;
    }
    if ($b[3] == "X" && $b[4] == "X" && $b[5] == "X") {
        $win = $turn;
    } elseif ($b[3] == "O" && $b[4] == "O" && $b[5] == "O") {
        $win = $turn;
    }
    if ($b[6] == "X" && $b[7] == "X" && $b[8] == "X") {
        $win = $turn;
    } elseif ($b[6] == "O" && $b[7] == "O" && $b[8] == "O") {
        $win = $turn;
    }
    if ($b[0] == "X" && $b[3] == "X" && $b[6] == "X") {
        $win = $turn;
    } elseif ($b[0] == "O" && $b[3] == "O" && $b[6] == "O") {
        $win = $turn;
    }
    if ($b[1] == "X" && $b[4] == "X" && $b[7] == "X") {
        $win = $turn;
    } elseif ($b[1] == "O" && $b[4] == "O" && $b[7] == "O") {
        $win = $turn;
    }
    if ($b[2] == "X" && $b[5] == "X" && $b[8] == "X") {
        $win = $turn;
    } elseif ($b[2] == "O" && $b[5] == "O" && $b[8] == "O") {
        $win = $turn;
    }
    if ($b[0] == "X" && $b[4] == "X" && $b[8] == "X") {
        $win = $turn;
    } elseif ($b[0] == "O" && $b[4] == "O" && $b[8] == "O") {
        $win = $turn;
    }
    if ($b[2] == "X" && $b[4] == "X" && $b[6] == "X") {
        $win = $turn;
    } elseif ($b[2] == "O" && $b[4] == "O" && $b[6] == "O") {
        $win = $turn;
    }
    if ($win == $turn) {
        echo "Player $turn win!\n";
        exit;
    }

    $turn = ($turn == $playerOne) ? $playerTwo : $playerOne;
    if ($i == 8) {
        echo "Tie!\n";
    }
}
