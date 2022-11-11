<?php


class Game
{

    private Player $attacker;
    private Player $defender;


    public function __construct(Player $attacker, Player $defender)
    {
        $this->attacker = $attacker;
        $this->defender = $defender;
    }

    public function getWinner(): ?Player
    {
        if (in_array($this->defender->getElement()->getName(), $this->attacker->getElement()->getBeatsNames())) {
            return $this->attacker;
        }
        if ($this->attacker->getElement()->getName() === $this->defender->getElement()->getName()) {
            return null;
        }
        return $this->defender;
    }
}