<?php declare(strict_types=1);


namespace App;


class Weather
{
    private \stdClass $weatherData;

    public function __construct(\stdClass $weatherData)
    {
        $this->weatherData = $weatherData;

        return $this->weatherData;
    }


    public function getName(): string
    {
        return $this->weatherData->name;
    }


    public function getTemp(): float
    {
        return $this->weatherData->main->temp;
    }


    public function getMaxTemp(): float
    {
        return $this->weatherData->main->temp_max;
    }


    public function getMinTemp(): float
    {
        return $this->weatherData->main->temp_min;
    }


    public function getPressure(): int
    {
        return $this->weatherData->main->pressure;
    }


    public function getHumidity(): int
    {
        return $this->weatherData->main->humidity;
    }

    public function getIcon(): string
    {
        return $this->weatherData->weather[0]->icon;
    }
}
