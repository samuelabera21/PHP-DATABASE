<?php
abstract class Shape
{
    abstract public function area(): float;
}

class Rectangle extends Shape
{
    public function __construct(private float $width, private float $height)
    {
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(5, 4);
echo $rectangle->area();
