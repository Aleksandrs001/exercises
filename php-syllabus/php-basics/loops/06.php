<?php


class AsciiFigure
{
    const CONSTANT =4;
    public function start(): void
    {
        $select =(int) readline("Enter Number: ");
        if(!$select==is_numeric(1))
        {
            exit("Not a number".PHP_EOL);
        }
        echo PHP_EOL;
        $this->char($select);
    }

    public function char(int $size): void
    {
        $width = ($size - 1) * 4;

        for ($i = 0; $i < $size; $i++)
        {
            echo str_repeat("/", $width - $i * self::CONSTANT);
            echo str_repeat("*", 2 * $i * self::CONSTANT);
            echo str_repeat("\\", $width - $i * self::CONSTANT);
            echo PHP_EOL;
        }
    }
}

$start = new AsciiFigure();
$start->start();

