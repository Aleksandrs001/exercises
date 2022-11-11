<?php
require_once "SavingsAccount.php";

$person = new SavingsAccount(readline("How much money is in the account?".PHP_EOL),
    readline("Enter the annual interest rate".PHP_EOL),
    readline("How long has the account been opened?".PHP_EOL));


for($i = 1; $i <= $person->getMonths(); $i++) {
    $y = readline("Enter amount deposited for $i month: ");
    $x = readline("Enter amount withdrawn for $i month: ");

    $person->addBalance($y);
    $person->removeBalance($x);
    $person->sumOfTransactions($y, $x);
    $person->addInterestToSum();

}

echo "Total deposited: $" . number_format($person->getDeposited(), 2) . PHP_EOL;
echo "Total withdrawn: $" . number_format($person->getWithdraw(), 2) . PHP_EOL;
echo "Interest earned: $" . number_format($person->getEndBalance()
        - ($person->getBalance() + $person->getDeposited() - $person->getWithdraw()), 2 ) .PHP_EOL;
echo "Ending balance: $" . number_format($person->getEndBalance(), 2).PHP_EOL;