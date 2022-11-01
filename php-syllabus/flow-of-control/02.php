<?php


//todo print if number is positive or negative

$number= readline("Enter number : ");
if($number>0){
    echo $number." : Is positive number.".PHP_EOL;
}
elseif ($number <0){
    echo $number." : Is negative number.".PHP_EOL;
}
elseif ($number==0){
    echo "Zero".PHP_EOL;
}
?>
