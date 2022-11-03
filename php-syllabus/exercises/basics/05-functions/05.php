<?php


$fruits =
    [
        (object)["fruit" => "Coconut", "weight" => 25],
        (object)["fruit" => "Chery", "weight" => 5],
        (object)["fruit" => "Apple", "weight" => 9],
        (object)["fruit" => "Mango", "weight" => 15]
    ];

$shipCost =
    (object)["low" => 1, "high" => 2];

function checkFruits($fruits, $shipCost): string
{
    if ($fruits->weight < 10) {
        return "To ship " . $fruits->fruit . ' ' . "cost will be " . $shipCost->low . "Eur" . PHP_EOL;
    } else {
        return "To ship " . $fruits->fruit . ' ' . "cost will be " . $shipCost->high . "Eur" . PHP_EOL;
    }
}

foreach ($fruits as $eachFruit) {
    echo checkFruits($eachFruit, $shipCost);
}

?>