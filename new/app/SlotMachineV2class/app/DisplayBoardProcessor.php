<?php

namespace App;

class DisplayBoardProcessor
{

    public array $emptyToSymbol;
    public array $answer;
    public int $totalOngame;
    public int $cost;
    public int $win;
    public float $wincoff;


    public function SuperGame($emptyToSymbol): array
    {
        $this->totalOngame=0;
        $this->cost=0;
        $this->win=0;
        $this->wincoff=0;


        $answer =[];
        $this->answer=$answer;
        $this->emptyToSymbol= $emptyToSymbol;
        if ($this->emptyToSymbol[8] === $this->emptyToSymbol[9] && $this->emptyToSymbol[8] === $this->emptyToSymbol[10] && $this->emptyToSymbol[9] === $this->emptyToSymbol[10] && $this->emptyToSymbol[9] === $this->emptyToSymbol[11] &&
            $this->emptyToSymbol[4] === $this->emptyToSymbol[5] && $this->emptyToSymbol[4] === $this->emptyToSymbol[6] && $this->emptyToSymbol[5] === $this->emptyToSymbol[6] && $this->emptyToSymbol[5] === $this->emptyToSymbol[7] &&
            $this->emptyToSymbol[0] === $this->emptyToSymbol[1] && $this->emptyToSymbol[0] === $this->emptyToSymbol[2] && $this->emptyToSymbol[1] === $this->emptyToSymbol[2] && $this->emptyToSymbol[1] === $this->emptyToSymbol[3]
        ) {
            $this->totalOngame=0;
            $this->cost=10;
            $this->win=50;
            $this->wincoff=5.33;

            return $this->answer=["winner UP Center Down 4x per line line JACK POT"];

        } // 4 in string
        elseif (
            $this->emptyToSymbol[0] === $this->emptyToSymbol[1] && $this->emptyToSymbol[0] === $this->emptyToSymbol[2] && $this->emptyToSymbol[1] === $this->emptyToSymbol[2] && $this->emptyToSymbol[1] === $this->emptyToSymbol[3] ||
            $this->emptyToSymbol[4] === $this->emptyToSymbol[5] && $this->emptyToSymbol[4] === $this->emptyToSymbol[6] && $this->emptyToSymbol[5] === $this->emptyToSymbol[6] && $this->emptyToSymbol[5] === $this->emptyToSymbol[7] ||
            $this->emptyToSymbol[8] === $this->emptyToSymbol[9] && $this->emptyToSymbol[8] === $this->emptyToSymbol[10] && $this->emptyToSymbol[9] === $this->emptyToSymbol[10] && $this->emptyToSymbol[9] === $this->emptyToSymbol[11]
        ) {$this->totalOngame=0;
            $this->cost=10;
            $this->win=50;
            $this->wincoff=2.33;
            return $this->answer=["winner 4x per line SUPER"] ;

        } // 3 in string
        elseif ($this->emptyToSymbol[0] === $this->emptyToSymbol[1] && $this->emptyToSymbol[0] === $this->emptyToSymbol[2] || $this->emptyToSymbol[1] === $this->emptyToSymbol[2] && $this->emptyToSymbol[1] === $this->emptyToSymbol[3] ||
            $this->emptyToSymbol[4] === $this->emptyToSymbol[5] && $this->emptyToSymbol[4] === $this->emptyToSymbol[6] || $this->emptyToSymbol[5] === $this->emptyToSymbol[6] && $this->emptyToSymbol[5] === $this->emptyToSymbol[7] ||
            $this->emptyToSymbol[8] === $this->emptyToSymbol[9] && $this->emptyToSymbol[8] === $this->emptyToSymbol[10] || $this->emptyToSymbol[9] === $this->emptyToSymbol[10] && $this->emptyToSymbol[9] === $this->emptyToSymbol[11]
        ) {
            $this->totalOngame=0;
            $this->cost=10;
            $this->win=50;
            $this->wincoff=1.33;
           return  $this->answer=["winner 3x per line"] ;

        }
        return $this->emptyToSymbol;
    }
    public function thiefMoney(int $totalOnGame, int $cost, int $win, float $winCoff): float
    {
        return $totalOnGame - $cost*4 + ($win * $winCoff);
    }


}
