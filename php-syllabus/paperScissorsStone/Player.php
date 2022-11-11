<?php


class Player
{
    private string $name;
    private Element $element;

    public function __construct(string $name)
    {
        $this->name = $name;

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getElement(): ?Element
    {
        return $this->element;
    }

    /**
     * @param Element $element
     */
    public function setElement(Element $element): void
    {
        $this->element = $element;
    }
}