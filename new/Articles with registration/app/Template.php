<?php

namespace App;


class Template
{
    private string $path;
    private array $params;

    public function __construct(string $path, array $params = [])
    {

        $this->path = $path;
        $this->params = $params;

    }


    public function getPath(): string
    {
        return $this->path;
    }

    public function getParams(): array
    {

        return $this->params;
    }
}