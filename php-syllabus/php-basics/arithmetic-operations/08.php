<?php

$employee1 = new stdClass();
$employee1->name = "Daiga";
$employee1->basePay = 7.50;
$employee1->hours = 35;

$employee2 = new stdClass();
$employee2->name = "Dace";
$employee2->basePay = 8.20;
$employee2->hours = 47;

$employee3 = new stdClass();
$employee3->name = "Ivars";
$employee3->basePay = 10;
$employee3->hours = 73;

function payStatement($employee): string
{
    return dataFromObjects($employee->name, $employee->basePay, $employee->hours);
}

function dataFromObjects(string $names, int $payInHour, int $weekHours): string
{
    $stateMinPay = 8;
    $baseHours = 40;
    $overTimePay = 1.5;
    $stateOverTimePay = $stateMinPay * $overTimePay;
    $maxHoursPerWeek = 60;
    $paymentAfterHours = 0;

    if ($payInHour < $stateMinPay) {
        $result = "Error, $names  base pay smaller than state pay\n";
    } else if ($weekHours > $maxHoursPerWeek) {
        $result = "Error, $names  too much hours per week\n";
    } else {
        if ($weekHours > $baseHours) {
            $paymentAfterHours = ($weekHours - $baseHours) * $stateOverTimePay;
        }
        $earnings = $payInHour * $baseHours + $paymentAfterHours;
        $result = $names . ", total pay: {$earnings}$\n";
    }
    return $result;
}

echo payStatement($employee1);
echo payStatement($employee2);
echo payStatement($employee3);


