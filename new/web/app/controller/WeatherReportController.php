<?php

namespace App\controller;

use App\ApiProcessor;
use App\model\Weather;

class WeatherReportController
{

    public ApiProcessor $new;

    public function __construct($method)
    {

        $this->new = new ApiProcessor($method);
        return $this->getNew();
    }

    public function getNew(): array
    {
        $aa = new Weather($this->new->weatherData);
        return [$aa->getName(), $aa->getTemp(), $aa->getMinTemp(), $aa->getMaxTemp(), $aa->getHumidity(), $aa->getPressure(), $aa->getIcon()];
    }
}

