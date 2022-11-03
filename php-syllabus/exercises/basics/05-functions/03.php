<?php


$persons = new stdClass();
$persons->name = "Alice";
$persons->surname = "Armstrong";
$persons->age = 22;

function validating(stdClass $persons): string
{
    if ($persons->age >= 18) {
        return $persons->name . " " . $persons->surname . " has reached age of 18" . PHP_EOL;
    } else {
        return $persons->name . " " . $persons->surname . " has NO reached age of 18" . PHP_EOL;
    }
}

echo validating($persons);

?>