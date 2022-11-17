<?php declare(strict_types=1);
require_once "vendor/autoload.php";
use App\Weather;

$cityName= readline("Write city: ");

$b=new Weather($cityName);

echo "In {$b->getName()} now: {$b->getTemp()}c degree.\nMaxTemp will be: {$b->maxTemp()}c, MinTemp will be: {$b->minTemp()}c\nHumidity level: {$b->getHumidity()}% \nPresure: {$b->getPressure()}hPa".PHP_EOL;