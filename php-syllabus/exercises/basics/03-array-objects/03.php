<?php

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

var_dump($person->name, $person->surname, $person->age);

echo $person->name, " ", $person->surname, " ", $person->age;

echo PHP_EOL;