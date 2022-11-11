<?php

class EnergyDrinks{

    private int $customers = 12467;
    private float $energyDrinks = 0.14;
    private float $citrusDrinks = 0.64;

    public function getCustomers(): int
    {
        return $this->customers;
    }

    public function getCitrusDrinks(): float
    {
        return $this->citrusDrinks;
    }

    public function getEnergyDrinks(): float
    {
        return $this->energyDrinks;
    }

    public function calculateEnergyDrinks()
    {
        return $this->getCustomers() * $this->getEnergyDrinks();
    }

    public function calculateTCitrusDrinks()
    {
        return $this->getCustomers() * $this->getCitrusDrinks() ;
    }
}





