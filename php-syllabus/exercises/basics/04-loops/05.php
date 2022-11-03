<?php

$persons =
    [
        "pers1" => "John", "Smith", 33, 12.01,
        "pers2" => "Daiga", "Ozolinja", 19, 15.09,
        "pers3" => "Baiba", "Miksta", 22, 22.05,
    ];
foreach ($persons as $data) {
    echo ($data) . PHP_EOL;
}