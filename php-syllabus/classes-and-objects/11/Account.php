<?php


class Account
{
    private string $name;
    private float $balance;


    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @return float $balance
     */
    public function setWithdrawal($nonem): float
    {
        $this->balance-=$nonem;//75
        return $nonem ;//25
    }

    /**
     * @param float $balance
     */
    public function setDeposit($atnak): float
    {
        $this->balance += $atnak;
     return  $atnak ;
    }

}