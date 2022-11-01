<?php

$selection = readline("Geometry Calculator\n" .
    "1. Calculate the Area of a Circle\n" .
    "2. Calculate the Area of a Rectangle\n" .
    "3. Calculate the Area of a Triangle\n" .
    "4. Quit\n" .
    "Enter your choice (1-4) : ");
echo PHP_EOL;

if ($selection == 1) {
    echo phpphpMath::Circle() . PHP_EOL;
} elseif ($selection == 2) {
    echo phpphpMath::Rectangle() . PHP_EOL;
} elseif ($selection == 3) {
    echo phpphpMath::Triangle() . PHP_EOL;
} elseif ($selection == 4) {
    echo "Quit\n";
} else {
    echo "Error- entered is number out of range\n";
}

class Math
{
    public static function Circle()
    {
        $radius = readline("Radius : ");
        if ($radius < 0) {
            echo "Error: Entered number is negative" . PHP_EOL;
            exit;
        }
        return "Area Of Circle is : " . $radius * pi() * 2 . PHP_EOL;
    }

    public static function Rectangle()
    {
        $length = readline("Enter length : ");
        $width = readline("Enter width: ");
        if ($length < 0 || $width < 0) {
            echo "Error: Entered number is negative" . PHP_EOL;
            exit;
        }
        return "Area of Rectangle is : " . $length * $width . PHP_EOL;
    }

    public static function Triangle()
    {
        $base = readline("Base : ");
        $height = readline("Height : ");
        if ($base < 0 || $height < 0) {
            echo "Error: Entered number is negative" . PHP_EOL;
            exit;
        }
        return "Area of Triangle : " . $base * $height * 0.5 . PHP_EOL;
    }
}
?>