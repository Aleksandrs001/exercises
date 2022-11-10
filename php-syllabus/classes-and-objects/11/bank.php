<?php

class Bank
{
    private Account $person1;
    private Account $person2;



    public function __construct(Account  $person1, Account $person2)
    {
        $this->person1= $person1;
        $this->person2= $person2;


    }
  public  function transfer(Account $from, Account $to, float $howMuch): float
    {
        $nonem= $this->person1->setWithdrawal($howMuch);

    return $this->person2->setDeposit($nonem);;
    }



}

