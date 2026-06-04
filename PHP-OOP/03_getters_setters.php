<?php
class Product
{
    private string $name = "";

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$product = new Product();
$product->setName("Laptop");
echo $product->getName();
