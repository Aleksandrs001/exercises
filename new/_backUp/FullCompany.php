<?php declare(strict_types=1);

class FullCompany
{
    private array $fullCompany;

    public function __construct(array $fullCompany)
    {
        $this->fullCompany = $fullCompany;
    }

    public function getFullCompany(): string
    {
        return implode(";", $this->fullCompany);
    }

    public function getName(): string
    {
        return $this->fullCompany['name'];
    }

    public function getRegistrationCode(): string
    {
        return $this->fullCompany['regcode'];
    }

}