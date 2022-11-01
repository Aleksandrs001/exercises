<?php

$plateNumber = "LT9971";
switch ($plateNumber) {
    case "LT9970";
        echo "that too my car plate number ";
        break;
    case "LT9971";
        echo "that is my car plate number " . $plateNumber;
        break;
    default:
        echo "Error! Not my car plate number";
        break;

}
echo PHP_EOL;
?>
