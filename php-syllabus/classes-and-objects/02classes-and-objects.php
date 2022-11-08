<?php

class Point
{
    public int $x;
    public int $y;

    public function __construct(int $firstX, int $secondY)
    {
        $this->x = $firstX;
        $this->y = $secondY;
    }

    public function swapPoints(object $p1, object $p2)
    {
        $changeX = $p1->x;
        $changeY = $p1->y;
        $p1->x = $p2->x;
        $p1->y = $p2->y;
        $p2->x = $changeX;
        $p2->y = $changeY;
    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")".PHP_EOL;
echo "(" . $p2->x . ", " . $p2->y . ")".PHP_EOL;