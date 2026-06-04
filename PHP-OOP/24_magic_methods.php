<?php
class MagicBox
{
    public function __construct(private string $item)
    {
    }

    public function __toString(): string
    {
        return "Magic item: {$this->item}";
    }
}

$box = new MagicBox("Book");
echo $box;
