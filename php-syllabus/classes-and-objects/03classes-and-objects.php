<?php
require_once "Odometer.php";
require_once "FuelGuage.php";
require_once "car.php";

$car= new Car(
    new FuelGauge(10),
    new Odometer(),


);

while ($car->getFuelGauge()->getAmount() > 0) {
    echo "We drove 1km" . PHP_EOL;
    $car->drive();
    echo "FuelGauge: {$car->getFuelGauge()->getAmount()} / Odometer: {$car->getOdometr()->getMileage()}";
    sleep(1);
    echo PHP_EOL;

}

