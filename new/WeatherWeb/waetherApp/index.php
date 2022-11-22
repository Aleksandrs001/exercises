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
</head>
<body>
<?php
if (!$_GET) {
    $apiProcessor = new ApiProcessor("Riga");
    $cityInfo = new Weather($apiProcessor->getWeatherData());
    $icon = $cityInfo->getIcon() . ".png";
    echo "<img src='app/icons/$icon' alt='app/icons/unknown.png'/>";
    echo "In {$cityInfo->getName()} now:<B> {$cityInfo->getTemp()}c</B> degree.";
    echo "<br>MaxTemp will be: {$cityInfo->getMaxTemp()}c, MinTemp will be: {$cityInfo->getMinTemp()}c.
<br>Humidity level: {$cityInfo->getHumidity()}% <br>Presure: {$cityInfo->getPressure()}hPa";
}
?>
<?php
if ($_GET) {
    $apiProcessor = new ApiProcessor($_GET["cityName"]);
    $cityInfo = new Weather($apiProcessor->getWeatherData());
    $icon = $cityInfo->getIcon() . ".png";
    echo "<img src='app/icons/$icon' alt='app/icons/unknown.png'/>";
    echo "In {$cityInfo->getName()} now: <B> {$cityInfo->getTemp()}c</B> degree.";
    echo "<br>MaxTemp will be: {$cityInfo->getMaxTemp()}c, MinTemp will be: {$cityInfo->getMinTemp()}c.
<br>Humidity level: {$cityInfo->getHumidity()}% <br>Presure: {$cityInfo->getPressure()}hPa";
}
?>
<br>
<br>
| <a href="/?cityName=Riga">Riga</a> | <a href="/?cityName=Vilnius">Vilnius</a> | <a
        href="/?cityName=Tallinn">Tallinn</a> |
<br>

<form method="get">
    <label>
        <input type="text" name="cityName" value="" placeholder="Search city:">
    </label>
</form>


</body>
</html>
