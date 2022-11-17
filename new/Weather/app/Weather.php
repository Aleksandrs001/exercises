<?php declare(strict_types=1);

namespace App;

class Weather
{
    private \stdClass $weatherData;

    public function __construct(string $cityName)
    {

        $apiKey = "31dcf96ad369f721ea36b18ee3398d06";
        $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q={$cityName}&appid={$apiKey}&units=metric";

       return $this->weatherData =json_decode(file_get_contents($apiUrl, true));
    }

    public function getName():string
    {
        return $this->weatherData->name;
    }

    public function getTemp():float
    {
        return $this->weatherData->main->temp;
    }

    public function getPressure():int
    {
        return $this->weatherData->main->pressure;
    }

    public function getHumidity():int
    {
        return $this->weatherData->main->humidity;
    }

    public function minTemp():float
    {
        return $this->weatherData->main->temp_min;
    }

    public function maxTemp():float
    {
        return $this->weatherData->main->temp_max;
    }

}

