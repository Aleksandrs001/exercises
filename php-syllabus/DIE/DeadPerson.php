<?php
declare(strict_types=1);


class DeadPerson
{
    private string $date;
    private string $reason;
    private string $typeOfDead;

    public function __construct(string $date, string $reason, string $typeOfDead)
    {
        $this->date = $date;
        $this->reason = $reason;
        $this->typeOfDead = $typeOfDead;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @return string
     */
    public function getTypeOfDead(): string
    {
        return $this->typeOfDead;
    }



}
