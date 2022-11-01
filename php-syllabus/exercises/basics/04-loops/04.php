<?php

$numbers = new stdClass();
$numbers->int = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for ($i = 0; $i <= count($numbers->int); $i++) {
    if ($i % 3 == 0) {
        echo $i;
    }
}
echo PHP_EOL;
?>
