<?php


class Game
{

    private Player $player1;
    private Player $player2;


    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;

    }

    public function getWinner(): ?Player
    {
        if ($this->player1->getSelectedElement()->getName() === $this->player2->getSelectedElement()->getName()) {
            return null;
        }
        if ($this->player1->getSelectedElement()->getBeats()->getName() === $this->player2->getSelectedElement()->getName()) {
            return $this->player1;
        }
        return $this->player2;
    }

}