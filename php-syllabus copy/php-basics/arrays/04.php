<?php


$first = array(45, 87, 39, 32, 93, 86, 12, 44, 75, 50);
$second = $first;
$replace = array(9 => -7);
$first = array_replace($first, $replace);

echo "Array 1: ";

foreach ($first as $firstTest) {
    echo $firstTest . " ";

}
echo PHP_EOL;
echo "Array 2: ";
foreach ($second as $secondTest) {
    echo $secondTest . " ";
}
echo PHP_EOL;

?>
