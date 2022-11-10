<?php

class BankAccount
{
    private string $accountName;
    private float $balance = 0;

    public function __construct(string $name, float $balance)
    {
        $this->accountName = $name;
        $this->balance = $balance;
    }

    function showUserNameAndBalance(): string
    {
        if ($this->balance < 0) {
            return $this->accountName . ", -$" . number_format(abs($this->balance), 2) . PHP_EOL;
        } else {
            return $this->accountName . ', $' . number_format($this->balance, 2) . PHP_EOL;
        }
    }
}

$ben = new BankAccount('Benson', 17.25);
echo $ben->showUserNameAndBalance();

$tom = new BankAccount('Ford', -17.50);
echo $tom->showUserNameAndBalance();


