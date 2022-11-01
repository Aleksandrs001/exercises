<?php

$weight = readline("Enter your weight (kg):");
$height = readline("Enter your height (cm):");

$kgToPounds = $weight * 2.20462;
$cmToInches = $height * 3.93701 / 10;

function testBMI($weight, $height)
{
    $bmiMin = 18.5;
    $bmiMax = 25;
    $bmi = $weight * 703 / pow($height, 2);
    if ($bmi < $bmiMin) {
        echo "Person is considered underweight. BMI level is: " . substr($bmi, 0, 4) . PHP_EOL;
    } elseif ($bmi > $bmiMax) {
        echo "Person is considered overweight. BMI level is: " . substr($bmi, 0, 4) . PHP_EOL;
    } else {
        echo "Person has considered optimal BMI level. BMI level is: " . substr($bmi, 0, 4) . PHP_EOL;
    }
    return $bmi;
}
testBMI($kgToPounds, $cmToInches);

?>




