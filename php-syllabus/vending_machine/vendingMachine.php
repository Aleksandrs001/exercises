<?php
function formatEuro(int $money): string
{
    return number_format(($money / 100), 2) . " eur";
}

$money  = (int)readline( "Give me your money: ");

if ($money == "" || $money < 3) {
    echo "Fake money abort operation" . PHP_EOL;
    exit;
}

echo "Now you have on balance: ".$money *100 .".cents" . PHP_EOL;

function createWeldMachinen(string $name, int $price): stdClass
{
    $kafijasPasaule = new stdClass();
    $kafijasPasaule->name = $name;
    $kafijasPasaule->price = $price;
    return $kafijasPasaule;
}

$kafijasPasaule = [
    createWeldMachinen("Coffee", 333),
    createWeldMachinen("Cocao", 312),
    createWeldMachinen("Tea", 237),
    createWeldMachinen("Water", 155),
];

$coins = [
    200 => 5,
    100 => 0,
    50 => 1,
    20 => 0,
    10 => 2,
    5 => 3,
    2 => 5,
    1 => 8,
];

foreach ($kafijasPasaule as $key0 => $machinen) {
    $key = $key0 + 1;
    echo "[{$key}] $machinen->name " . formatEuro($machinen->price). PHP_EOL;
}
echo  PHP_EOL;
$keypad[] = $key;
$selection = (int)readline("Your choice:");

$selectedDrink = $kafijasPasaule[$selection - 1]->price;

if ($selection == null || $selection == "") {
    echo "Invalid Selection.";
    exit;
}
if ($selection == count($keypad)) {
    echo "Wait your {$kafijasPasaule[$selection-1]->name} drink getting ready.\n";
    $money -= $kafijasPasaule[$selection - 1]->price;
}

echo PHP_EOL;
echo "Your charge will be: " . $money/100 ."eur". PHP_EOL;
echo PHP_EOL;

$reminder = $money;

while ($reminder > 0) {
    foreach ($coins as $coin => $amount) {
        if ($amount <= 0) {
            continue;
        }

        $coinAmount = intdiv($reminder, $coin);
        $coins[$coin] -= $coinAmount;

        $x = $amount - $coinAmount;

        if ($x < 0) $coinAmount += $x;

        if ($coinAmount > 0) {
            $reminder -= $coin * $coinAmount;
            echo "Your charge will be: $coin cents. x $coinAmount coin/s" . PHP_EOL;
        }
    }

    if ($reminder > 0) {
        echo "Failed to give back reminder.";
        break;
    }
}




