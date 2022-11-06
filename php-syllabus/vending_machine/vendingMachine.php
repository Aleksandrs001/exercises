<?php

$money=(int) 10;//readline( "Give me your money: ");

if($money == ""||$money<3){
echo "Fake money abort operation".PHP_EOL;
    exit;
}
echo "Now you have on balance:$money".PHP_EOL;

function createWeldMachinen(string $name, float $price ): stdClass
{
    $weldMachinen = new stdClass();
    $weldMachinen->name = $name;
    $weldMachinen->price = $price;
    return $weldMachinen;
}
    $weldMachinen=[
        createWeldMachinen("Coffee", 3.33),
        createWeldMachinen("Cocao",  3.12),
        createWeldMachinen("Tea",    2.37),
        createWeldMachinen("Water",  1.55),
    ];

function getCoins(int $value, int $count ): stdClass
{
    $coins = new stdClass();
    $coins->value= $value;
    $coins->count=$count;
    return $coins;
}
$coins=[
    getCoins(200,1),
    getCoins(100,2),
    getCoins(50,8),
    getCoins(20,9),
    getCoins(10,1),
    getCoins(2,1),
    getCoins(1,1),
];


foreach ($weldMachinen as $key1=> $machinen) {
    $key = $key1 + 1;
    echo "[$key] $machinen->name $machinen->price" . PHP_EOL;
}

$selection = 1;// readline("Your choice:");
$selectedDrink= $weldMachinen[$selection-1];

    if($selection == null||$selection == ""){
        echo "Invalid Selection.";
        exit;
    }
    if ($selection == 1) {
        echo "Wait your $selectedDrink->name drink getting ready.\n";
        $money-=  $weldMachinen[0]->price;

    }
    if ($selection  == 2) {
        echo "Wait your $selectedDrink->name drink getting ready.\n";
        $money-= (float) $weldMachinen[1]->price;;

    }
    if ($selection  == 3) {
        echo "Wait your $selectedDrink->name drink getting ready.\n";
        $money-= (float) $weldMachinen[2]->price;;

    }
    if ($selection  == 4) {
        echo "Wait your $selectedDrink->name drink getting ready.\n";
        $money-= (float)$weldMachinen[3]->price;;
}

echo "Your charge will be: $money eur\n";

$moneyCounter=$money*100;

if(intdiv($moneyCounter, 200)&&$coins[0]->count>=1) {
    $a = intdiv($moneyCounter, 200);
    $coins[0]->count--;
    $moneyCounter-=($a*200);
    echo "you get $a coin/s of 2eur".PHP_EOL;

}
if(intdiv($moneyCounter, 100)) {
    $a = intdiv($moneyCounter, 100);
    echo PHP_EOL."you get $a coin/s of 1eur".PHP_EOL;
    $moneyCounter-=($a*100);
     $coins[1]->count--;

}
if(intdiv($moneyCounter, 50)) {
    $a = intdiv($moneyCounter, 50);
    echo "you get $a coin/s of 50cents".PHP_EOL;
    $moneyCounter-=($a*50);
    $coins[2]->count--;

}
if(intdiv($moneyCounter, 20)) {
    $a = intdiv($moneyCounter, 20);
    echo "you get $a coin/s of 20cent" . PHP_EOL;
    $moneyCounter -= ($a * 20);
    $coins[3]->count--;
}
if(intdiv($moneyCounter, 10)) {
    $a = intdiv($moneyCounter, 10);
    echo "you get $a coin/s of 10cents".PHP_EOL;
    $moneyCounter-=($a*10);
    $coins[4]->count--;

}

if(intdiv($moneyCounter, 5)) {
    $a = intdiv($moneyCounter, 5);
    echo "you get $a coin/s of 5cents".PHP_EOL;
    $moneyCounter-=($a*5);
    $coins[5]->count--;

}
if(intdiv($moneyCounter, 2)) {
    $a = intdiv($moneyCounter, 2);
    echo "you get $a coin/s of 2cents".PHP_EOL;
    $moneyCounter-=($a*2);
    $coins[6]->count--;

}if(intdiv($moneyCounter, 1)) {
    $a = intdiv($moneyCounter, 1);
    echo "you get $a coin/s of 1cent".PHP_EOL;
    $moneyCounter-=($a*1);
    $coins[7]->count--;

}

echo "$moneyCounter coins left".PHP_EOL;
echo "<<<<<".($coins[0]->count).">>>>>";