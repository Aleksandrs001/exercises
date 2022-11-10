<?php


class Element
{

    private string $name;
    //elements, kurš tiek sakauts, kurš zaudē
    private Element $beats;

    //elements ->papīrs, šķēres, akmens
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getBeats(): Element
    {
        return $this->beats;
    }

    public function setBeats(Element $element): void
    {
        $this->beats = $element;
    }
}