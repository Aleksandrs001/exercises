<?php

//1####

$number = 10;
$string= "10";

if($number == $string)
{
    echo "same";
}
echo PHP_EOL;


//2####

$numberEx2= 50;
$min = 1;
$max= 100;

if (($min <= $numberEx2) && ($numberEx2 <= $max))
{
    echo "true";
}

echo PHP_EOL;

//3####

$string= "hello";
if($string== "hello")
{
    echo "world";
}
echo PHP_EOL;

//4####

$number= 122;
$x= 100;
$y= 300;
if($x<= $number && $y>= $number && $number % 2 == 0  )
{
    echo "3 condition OK!";
}

echo PHP_EOL;

//5####

$int= 50;
$y= 1;
$z= 51;
if($int >= $y&& $int <=$z)
{
    echo "correct";
}


echo PHP_EOL;

//6####
$plateNumber= "LT9971";
switch ($plateNumber)
{
    case "LT9970";
        echo "Error not this number";
        break;
    case "LT9971";
        echo "that is my car plate number " .$plateNumber;
        break;
}
echo PHP_EOL;


//7####

$number= 55;

switch (true)
{
    case ($number < 50):
        echo "low" ;
        break;
    case (($number >= 50) && ($number < 100)):
        echo "medium";
        break;
    case ($number >= 100):
        echo "high";
        break;
}

echo PHP_EOL;

?>