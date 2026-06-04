<?php
class Animal
{
    public function speak(): string
    {
        return "Animal sound";
    }
}

class Dog extends Animal
{
    public function speak(): string
    {
        return "Bark";
    }
}

$dog = new Dog();
echo $dog->speak();
