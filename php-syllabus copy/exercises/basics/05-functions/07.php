<?php

$person = new stdClass();
$person->name = "Ivars";
$person->money = 200;
$person->licence = ["B", "C"];

function createWeapon(string $name, string $licence, int $price): stdClass
{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->licence = $licence;
    $weapon->price = $price;
    return $weapon;
}

$weapons = [
    createWeapon("Pistol", "A", 100),
    createWeapon("AK47", "C", 250),
    createWeapon("Knife", "B", 50),
    createWeapon("Epic bazooka", "B", 500),
];
$licenceText = implode(",", $person->licence);

echo "Welcome, {$person->name} ({$person->money}$) Licence:[{$licenceText}]";

echo PHP_EOL;
echo PHP_EOL;

foreach ($weapons as $key => $weapon) {
    echo "[{$key}] {$weapon->name} ({$weapon->price}$) [{$weapon->licence}]" . PHP_EOL;
}

$selection = (int)readline("Enter weapon to purchase: ");

$selectedWeapon = $weapons[$selection];

if ($selectedWeapon === null) {
    echo "Invalid selection.";
    exit;
}
if ($person->money < $selectedWeapon->price) {
    echo "Nopelni vairak!";
    exit;

}
if (!in_array($selectedWeapon->licence, $person->licence)) {
    echo "Invalid licence.";
    exit;
}

$person->money -= $selectedWeapon->price;

echo "Thanks you for purhasing {$selectedWeapon->name}.";
echo PHP_EOL;

