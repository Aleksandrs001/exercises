<?php


$selection = readline("Geometry Calculator\n" .
    "1. Calculate the Area of a Circle\n" .
    "2. Calculate the Area of a Rectangle\n" .
    "3. Calculate the Area of a Triangle\n" .
    "4. Quit\n" .
    "Enter your choice (1-4) : ");
echo PHP_EOL;

if ($selection == 1) {
    $radius= readline("Radius : ");
 //   echo "Error: Entered number is negative" . PHP_EOL;
    echo "Area Of Circle is : ". circle($radius) ."\n";
    exit;

} elseif ($selection == 2) {
    $length = readline("Enter length : ");
    $width = readline("Enter width: ");
    echo "Area of Rectangle is : " . rectangle($length, $width) . "\n";
}
    if ($length < 0 || $width < 0) {
        //echo "Error: Entered number is negative" . PHP_EOL;


} elseif ($selection == 3) {

    echo triangle() . PHP_EOL;
} elseif ($selection == 4) {

    echo "Quit\n";
} else {
    echo "Error- entered is number out of range\n";
}

 function circle($radius)
    {
        return  $radius * pi() * 2;
    }
   function rectangle($length, $width)
    {

        return $length * $width;
    }

     function triangle()
     {
         $base = readline("Base : ");
         $height = readline("Height : ");
         if ($base < 0 || $height < 0) {
             echo "Error: Entered number is negative" . PHP_EOL;
             exit;
         }
         return "Area of Triangle : " . $base * $height * 0.5 . PHP_EOL;
     }

