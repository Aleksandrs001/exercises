<?php


$selection =(int) readline("Geometry Calculator\n" .
    "1. Calculate the Area of a Circle\n" .
    "2. Calculate the Area of a Rectangle\n" .
    "3. Calculate the Area of a Triangle\n" .
    "4. Quit\n" .
    "Enter your choice (1-4) : ");
echo PHP_EOL;

if ($selection == 1) {
    $radius=(int) readline("Radius : ");
    echo "Area Of Circle is : ". circle($radius) ."\n";

    } elseif ($selection == 2) {
    $length =(int) readline("Enter length : ");
    $width =(int) readline("Enter width: ");
    echo "Area of Rectangle is : " . rectangle($length, $width) . "\n";

} elseif ($selection == 3) {
        $base =(int) readline("Base : ");
        $height =(int) readline("Height : ");
    echo "Area of Triangle : " .triangle($base , $height) . "\n";

} elseif ($selection == 4) {
    echo "Quit\n";
} else {
    echo "Error- entered is number out of range\n";
}

 function circle(int $radius): int
    {
        return  $radius * pi() * 2;
    }
   function rectangle(int $length, int $width): int
    {
        return $length * $width;
    }
     function triangle(int $base , int  $height): float
     {
         return  $base * $height * 0.5 ;
     }
