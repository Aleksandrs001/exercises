<?php


class Element
{
    private $name;

    public function __construct($name)
    {

        $this->name = $name;
    }

    public function getBeatsNames(): array
    {
        $names = [];
        foreach ($this->getBeats() as $beats) {
            $names[] = $beats->getName();
        }
        return $names;
    }

    public function getBeats(): ?array
    {
        return $this->beats;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function setBeats(array $elements): void
    {
        $this->beats = $elements;
    }
}