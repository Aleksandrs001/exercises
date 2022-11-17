<?php declare(strict_types=1);

namespace App;

class Weather
{
    private $weatherData;

    public function __construct($cityName)
    {

        $apiKey = "31dcf96ad369f721ea36b18ee3398d06";
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$cityName}&appid={$apiKey}&units=metric";

       return $this->weatherData =json_decode(file_get_contents($apiUrl, true));
    }

    public function getName()
    {
        return $this->weatherData->name;
    }

    public function getTemp()
    {
        return $this->weatherData->main->temp;
    }

    public function getPressure()
    {
        return $this->weatherData->main->pressure;
    }

    public function getHumidity()
    {
        return $this->weatherData->main->humidity;
    }

    public function minTemp()
    {
        return $this->weatherData->main->temp_min;
    }

    public function maxTemp()
    {
        return $this->weatherData->main->temp_max;
    }

}

