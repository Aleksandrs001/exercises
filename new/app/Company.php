<?php declare(strict_types=1);

namespace App;

class Company
{
    private string $name;
    private string $registrationCode;
    private string $type;
    private string $typeText;

    public function __construct(string $name, string $registrationCode,string $type,string $typeText)
    {

        $this->name = $name;
        $this->registrationCode = $registrationCode;
        $this->type = $type;
        $this->typeText = $typeText;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getRegistrationCode(): string
    {
        return $this->registrationCode;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTypeText(): string
    {
        return $this->typeText;
    }


}