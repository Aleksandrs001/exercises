<?php

class Movie
{
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStudio(): string
    {
        return $this->studio;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public static function getPG(array $movies): array
    {
        $foundMovies = [];
        foreach ($movies as $movie) {
            if ($movie->rating === "PG") {
                $foundMovies[] = $movie;
            }
        }
        return $foundMovies;
    }
}

$movies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),
    new Movie("Glass", "Buena Vista International", "PG13"),
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
];

echo "The list of PG rated movies:".PHP_EOL;
foreach (Movie::getPG($movies) as $movie) {
    echo "Movie: {$movie->getTitle()}, studio: {$movie->getStudio()}, rating: {$movie->getRating()}".PHP_EOL;
}