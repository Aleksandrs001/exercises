<?php

//1####

$numbers= [10, 50, 70];
echo $numbers[0] + $numbers[1] + $numbers[2];

echo PHP_EOL;

//2####

$person =
    [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
    ];

echo $person["name"];
//var_dump(["name"]);
echo PHP_EOL;
echo $person["surname"];
//var_dump(["surname"]);
echo PHP_EOL;
echo $person["age"];
//var_dump($person["age"]);
echo PHP_EOL;

//3####

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

//var_dump($person->name, $person ->surname, $person->age);

echo $person->name, " " , $person ->surname, " " ,$person->age;

echo PHP_EOL;

//4####
 $items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
 echo $items[0][1]["name"]," ", $items[0][1]["surname"]," ", $items[0][1]["age"];
echo PHP_EOL;

//5####

$items2 = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
echo $items2[0][0]["name"]," & ", $items2[0][1]["name"]," ", $items2[0][1]["surname"], "`s";

echo PHP_EOL;

?>