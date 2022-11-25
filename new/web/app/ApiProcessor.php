<?php


namespace App;

use App\model\Weather;
use Dotenv;

class ApiProcessor
{

    public \stdClass $weatherData;
    public Weather $data;

    public function __construct($cityName)
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$cityName}&appid={$dotenv->load()['SECRET_KEY']}&units=metric";
        $this->weatherData = json_decode(file_get_contents($apiUrl, true));
        return $this->weatherData;
    }
}
