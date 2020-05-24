<?php

class Car
{

    public $color;
    public $name;

    function helloFromCar()
    {
        echo "Hello From Car Class" . PHP_EOL;
    }
}


$car1 = new Car();
$car1->name = "Ferrai";
$car1->color = "Red";
$car1->helloFromCar();

echo "This is a Car $car1->name" . PHP_EOL;

$car2 = new Car();
$car2->name = "Lambo";
$car2->color = "Red";
$car2->helloFromCar();

echo "This is a Car $car2->name" . PHP_EOL;
