<?php


class Odometer
{
    private int $mileage;

    public function __construct(int $mileage = 0)
    {
        $this->mileage = $mileage;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function increment(int $amount = 1): void
    {
        if ($amount < 0) return;
        $this->mileage += $amount;
    }
}