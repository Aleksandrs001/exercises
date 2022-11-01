<?php

//1####

function message($word)
{
    echo $word. " codelex";
}

message("hello");

echo PHP_EOL;

?>
//2####
<?php

function numbers($a, $b)
{

    echo $a* $b;
}
numbers(10,5);

echo PHP_EOL;

//3####

$persons = new stdClass();
$persons-> name = "Alice";
$persons-> surname = "Armstrong";
$persons-> age = 22;

function validating(stdClass $persons): string {
    if ($persons-> age >= 18) {
        return $persons-> name . " " . $persons-> surname . " has reached age of 18" .PHP_EOL;
    } else {
        return $persons-> name . " " . $persons-> surname  . " has NO reached age of 18".PHP_EOL;
    }
}
echo validating($persons);
?>
//4####
<?php
$persons =
    [
        (object)
    [
        "name" => "Billy",
        "surname" => "Milligan",
        "age" => 30
    ],
        (object)
    [
        "name" => "Chris",
        "surname" => "Harris",
        "age" => 17
    ]
    ];

foreach ($persons as $person ) {
    echo validating($person);
}
?>
//5####
<?php
$fruits =
    [
    (object)["fruit" => "Coconut" , "weight" => 25],
    (object)["fruit" => "Chery", "weight" => 5],
    (object)["fruit" => "Apple", "weight" => 9],
    (object)["fruit" => "Mango", "weight" => 15]
    ];

$shipCost =
    (object)["low" => 1, "high" => 2];

function checkFruits ($fruits, $shipCost): string
{
    if ($fruits->weight < 10)
    {
        return "To ship " . $fruits->fruit . ' ' . "cost will be " . $shipCost->low . "Eur" . PHP_EOL;
    } else {
        return "To ship " . $fruits->fruit . ' ' . "cost will be " . $shipCost->high . "Eur" . PHP_EOL;
    }
}

foreach ($fruits as $eachFruit)
{
    echo checkFruits($eachFruit, $shipCost);
}
?>
//6####
<?php
$numbers = [1, 2, 3, 4.7, '5'];

array_walk($numbers,
    function (&$value)
    {
        if (is_numeric($value))
        {
            $value = $value * 2;
            echo $value." ";
        }
    }
);
?>
//7####