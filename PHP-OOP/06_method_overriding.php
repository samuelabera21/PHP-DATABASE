<?php
class Shape
{
    public function area(): string
    {
        return "Area not defined";
    }
}

class Rectangle extends Shape
{
    public function __construct(private int $width, private int $height)
    {
    }

    public function area(): string
    {
        return (string) ($this->width * $this->height);
    }
}

$rectangle = new Rectangle(5, 4);
echo $rectangle->area();
