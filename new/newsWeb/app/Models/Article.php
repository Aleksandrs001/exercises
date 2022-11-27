<?php

namespace App\Models;

class Article
{
    private string $title;
    private string $url;
    private string $description;
    private ?string $picture;

    public function __construct(string $title, string $url, string $description, ?string $picture = null)
    {

        $this->title = $title;
        $this->url = $url;
        $this->description = $description;
        $this->picture = $picture;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }
}
