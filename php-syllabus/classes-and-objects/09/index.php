<?php
require_once "09classes-and-objects.php";

$ben = new BankAccount('Benson', 17.25);
echo $ben->showUserNameAndBalance();

$tom = new BankAccount('Ford', -17.50);
echo $tom->showUserNameAndBalance();