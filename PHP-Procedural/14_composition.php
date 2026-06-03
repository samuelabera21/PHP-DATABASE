<?php
class Engine
{
    public function start(): string
    {
        return "Engine started";
    }
}

class Car
{
    private Engine $engine;

    public function __construct()
    {
        $this->engine = new Engine();
    }

    public function drive(): string
    {
        return $this->engine->start() . " and car is moving";
    }
}

$car = new Car();
echo $car->drive();
