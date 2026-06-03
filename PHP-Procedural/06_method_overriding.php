<?php
class Animal
{
    public function sound(): string
    {
        return "Animal sound";
    }
}

class Dog extends Animal
{
    public function sound(): string
    {
        return "Bark";
    }
}

$dog = new Dog();
echo $dog->sound();
