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

foreach ($persons as $person) {
    echo validating($person);
}
echo PHP_EOL;

?>