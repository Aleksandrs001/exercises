<?php

class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->price = $startPrice;
        $this->amount = $amount;

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setPrice(int $newPrice): void
    {
        $this->price = $newPrice;
    }

    public function setAmount(int $newQuantity): void
    {
        $this->amount = $newQuantity;
    }

}

$products = [
    new Product("Logitech mouse", 70.00, 14),
    new Product("iPhone 5s", 999.99, 3),
    new Product("Epson EB-U05", 440.46, 1),
];

$products[1]->setPrice(-50);
$products[1]->setAmount(-1);

foreach ($products as $product) {
    echo "{$product->getName()}, price: {$product->getPrice()} EUR, amount: {$product->getAmount()}" . PHP_EOL;
}