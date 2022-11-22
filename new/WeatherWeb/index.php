<?php declare(strict_types=1);


require_once "vendor/autoload.php";


use App\ApiProcessor;
use App\Weather;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="box">
    <p class="title"
    <?php

    $cityName = $_GET['cityName'] ?? "Riga";
    $apiProcessor = new ApiProcessor($cityName);
    $cityInfo = new Weather($apiProcessor->getWeatherData());
    echo "<br>In {$cityInfo->getName()} now:  {$cityInfo->getTemp()}c degree.";
    echo "<br>MaxTemp will be: {$cityInfo->getMaxTemp()}c, MinTemp will be: {$cityInfo->getMinTemp()}c.
<br>Humidity level: {$cityInfo->getHumidity()}% <br>Presure: {$cityInfo->getPressure()}hPa";
    $icon = $cityInfo->getIcon() . ".png";
    echo "<img src='app/icons/$icon' alt='app/icons/unknown.png'/>";

    ?>
</div>
| <a href="/?cityName=Riga">Riga</a> | <a href="/?cityName=Vilnius">Vilnius</a> | <a
        href="/?cityName=Tallinn">Tallinn</a> |

<form method="get">
    <label>
        <input type="text" name="cityName" value="" placeholder="Search city:">
    </label>
</form>
</body>
</html>