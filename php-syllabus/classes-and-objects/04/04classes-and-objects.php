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

    public function getRating(): string
    {
        return $this->rating;
    }

    public static function getPG(array $movies):array
    {
        $filteredMovies = [];
        foreach ($movies as $movie) {
            if ($movie->getRating() === "PG") {
                $filteredMovies[] = $movie;
            }
        }
        return $filteredMovies;
    }
}

$movies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),
    new Movie("Glass", "Buena Vista International", "PG13"),
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia pictures", "PG"),
];


$moviesPg = Movie::getPG($movies);







