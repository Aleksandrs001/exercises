<?php
include_once "Account.php";
include_once "bank.php";


$bartosAccount = new Account("Barto's account", 100.00);
$bartosSwissAccount = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state" . PHP_EOL;
echo $bartosAccount->getBalance() . PHP_EOL;
echo $bartosSwissAccount->getBalance() . PHP_EOL;

$bartosAccount->setWithdrawal(20) . PHP_EOL;
echo "Barto's account balance is now: " . $bartosAccount->getBalance() . PHP_EOL;
$bartosSwissAccount->setDeposit(200) . PHP_EOL;
echo "Barto's Swiss account balance is now: " . $bartosSwissAccount->getBalance() . PHP_EOL;

echo "Final state" . PHP_EOL;
//echo $bartosAccount.PHP_EOL;
//echo $bartosSwiss_account.PHP_EOL;

$mattAccount = new Account("Matt's account", 1000);
$myAccount = new Account("My account", 100);
echo PHP_EOL;
echo PHP_EOL;

echo "Matt account has on balance: ".$mattAccount->getBalance().PHP_EOL;
echo "My account has on balance: ".$myAccount->getBalance().PHP_EOL;


$bank= new Bank ($mattAccount, $myAccount);

$a= new Account("A", 100);
$b= new Account("B", 0);
$c= new Account("C", 0);

$bank2= new Bank($a, $b);
$bank3= new Bank ($b, $c);

$bank2->transfer($a, $b, 50);
$bank-> transfer($b,$c, 25 );

echo PHP_EOL;
echo PHP_EOL;
echo "Account" .$a->getName()." Has balance: ". $a->getBalance() .PHP_EOL ;
echo "Account" .$b->getName()." Has balance: ". $b->getBalance() .PHP_EOL ;
echo "Account" .$c->getName()." Has balance: ". $c->getBalance() .PHP_EOL;
