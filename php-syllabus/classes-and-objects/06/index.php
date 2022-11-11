<?php
include_once "06classes-and-objects.php";

$drinks = new EnergyDrinks();
echo "Total number of people surveyed - " . $drinks->getCustomers() . "." .PHP_EOL;
echo "Approximately " . round($drinks->calculateEnergyDrinks(),) . " bought at least one energy drink.".PHP_EOL;
echo  round($drinks->calculateTCitrusDrinks()). " of those " . "prefer citrus flavored energy drinks.".PHP_EOL;
