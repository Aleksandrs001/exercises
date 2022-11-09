<?php

//Create a class called Date that includes: three pieces of information as instance variables — a month,
// a day and a year.
//Your class should have a constructor that initializes the three instance variables and assumes that the
// values provided are correct. Provide a set and a get for each instance variable.
//Provide a method DisplayDate that displays the month, day and year separated by forward slashes /.
//Write a test application named DateTest that demonstrates class Date capabilities.

class Date
{
    private int $day;
    private int $month;
    private int $year;

    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setDay(int $newDay): void
    {
        $this->day = $newDay;
    }

    public function setMonth(int $newMonth): void
    {
        $this->month = $newMonth;
    }

    public function setYear(int $newYear): void
    {
        $this->year = $newYear;
    }

    public function displayDate(): string
    {
        return $this->day . '/' . $this->month . '/' . $this->year;
    }
}

$dates = [
    new Date(5, 0, 2024),
];

echo "Dates before editing:";
foreach ($dates as $date) {
    echo $date->displayDate() . PHP_EOL;
}

$dates[0]->setDay(31);
echo "Set the day of the 1st date to {$dates[0]->getDay()}".PHP_EOL;
$dates[0]->setMonth(12);
echo "Set the month of the 2nd date to {$dates[0]->getMonth()}".PHP_EOL;
$dates[0]->setYear(2023);
echo "Set the year of the 3rd date to {$dates[0]->getYear()}".PHP_EOL;
echo "Dates after editing: ". PHP_EOL;
foreach ($dates as $date) {
    echo $date->displayDate() . PHP_EOL;
}