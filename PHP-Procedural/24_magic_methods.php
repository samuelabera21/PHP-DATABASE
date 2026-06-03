<?php
class MagicBox
{
    public function __construct(private string $item)
    {
    }

    public function __toString(): string
    {
        return $this->item;
    }
}

$box = new MagicBox("Laptop");
echo $box;
