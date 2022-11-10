
<?php


class SavingsAccount{
    private float $balance;
    private float $endBalance;

    private float $interestRate;
    private float $months;

    private float $deposited = 0;
    private float $withdraw = 0;

    public function __construct($amount, $interestRate, $months)
    {
        $this->balance = $amount;
        $this->interestRate = $interestRate;
        $this->months = $months;
        $this->endBalance = $amount;
    }

    public function addInterestToSum() {
        $this->endBalance += $this->endBalance * ($this->interestRate / 12);

    }

    public function sumOfTransactions($deposit, $withdraw) {
        $this->deposited += $deposit;
        $this->withdraw += $withdraw;
    }

    public function addBalance($amount) {
        $this->endBalance += $amount;
    }
    public function removeBalance($amount) {
        $this->endBalance -= $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getEndBalance(): float
    {
        return $this->endBalance;
    }

    public function getDeposited(): float
    {
        return $this->deposited;
    }

    public function getWithdraw(): float
    {
        return $this->withdraw;
    }

    public function getMonths(): float
    {
        return $this->months;
    }

}



