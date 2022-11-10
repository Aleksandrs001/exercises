<?php


class Player
{
    private string $name;
    private Element $selectedElement;

    public function __construct($name, Element $selectedElement)
    {
        $this->name = $name;
        $this->selectedElement = $selectedElement;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSelectedElement(): Element
    {
        return $this->selectedElement;
    }

}