<?php


class video
{
    private string $title;
    private ?float $rating;
    private bool $available;
    private array $ratings = [];

    public function __construct(string $title, bool $available = true, float $rating = null)
    {
        $this->title = $title;
        $this->rating = $rating;
        $this->available = $available;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function getAvailability(): string
    {
        if ($this->available == true) return "Available";
        return "Unavailable";
    }

    public function calculateRating(): float
    {
        return $this->rating = array_sum($this->ratings) / count($this->ratings);
    }

    public function printRating(): string
    {
        if ( $this->rating == 0) return "N/A";
        return $this->rating . '%';
    }

    public function setAvailability(): bool
    {
        if ($this->available == false) return $this->available = true;
        return $this->available = false;
    }

    public function returnVideo(): bool
    {
        return $this->available = true;
    }

    public function rateVideo(): int
    {
        $givenRating =(int) readline("Rate video (0%-100%): ");
        return $this->ratings[] = $givenRating;
    }
}