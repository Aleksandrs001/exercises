<?php


namespace App;

use Dotenv;


class ApiProcessor
{

    public $weatherData;

    public function __construct($cityName)
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $apiKey = $dotenv->load()['SECRET_KEY'];
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$cityName}&appid={$apiKey}&units=metric";
        $this->weatherData = json_decode(file_get_contents($apiUrl, true));
        return $this->weatherData;
    }


    public function getWeatherData(): \stdClass
    {
        return $this->weatherData;
    }
}