<?php

require_once "07dog.php";
require_once "07dogTest.php";

    $lady= new Dog("Lady",Dog::FEMALE);
    $sam= new Dog("Sam",Dog::MALE);
    $molly= new Dog( "Molly",Dog::FEMALE);
    $rocky= new Dog("Rocky",Dog::MALE, $molly, $sam);
    $max= new Dog("Max",Dog::MALE, $lady, $rocky);
    $sparky= new Dog("Sparky",Dog::MALE);
    $buster= new Dog( "Buster",Dog::MALE, $lady, $sparky);
    $coco= new Dog("Coco",Dog::FEMALE, $molly,$buster);


$dogs= [
    $max,
    $rocky,
    $sparky,
    $sam,
    $lady,
    $molly,
    $buster,
    $coco
];

foreach ($dogs as $dog){
    echo "{$dog->getName()} : {$dog->getGender()}. ";
    if(!is_null ($dog->getMother())){
        echo "Mother: ". $dog->getMother()->getName();
    }
    if(!is_null ($dog->getFather())){
        echo "Father: ". $dog->getFather()->getName();
    }
    echo PHP_EOL;
}