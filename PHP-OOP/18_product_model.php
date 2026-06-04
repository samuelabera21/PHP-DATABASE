<?php
class ProductModel
{
    public function __construct(
        public string $title,
        public float $price
    ) {
    }

    public function summary(): string
    {
        return "{$this->title}: {$this->price}";
    }
}

$product = new ProductModel("Phone", 12000);
echo $product->summary();
