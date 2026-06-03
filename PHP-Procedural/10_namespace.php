<?php
namespace App\Models;

class Product
{
    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$product = new Product("Laptop");
echo $product->getName();
