<?php

// Define the Shape interface
interface Shape
{
    public function calculateArea();
}

// Circle class implementing Shape interface
class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        if ($radius <= 0) {
            throw new Exception("Radius must be greater than 0.");
        }
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getRadius()
    {
        return $this->radius;
    }
}

// Square class implementing Shape interface
class Square implements Shape
{
    private $side;

    public function __construct($side)
    {
        if ($side <= 0) {
            throw new Exception("Side must be greater than 0.");
        }
        $this->side = $side;
    }

    public function calculateArea()
    {
        return pow($this->side, 2);
    }

    public function getSide()
    {
        return $this->side;
    }
}

// Using the classes
try {
    $circle = new Circle(5);
    echo "Circle with radius " . $circle->getRadius() . " has an area of  " . $circle->calculateArea() . " \n<br>";

    $square = new Square(4);
    echo "Square with side  " . $square->getSide() . "  has an area of  " . $square->calculateArea() . " \n<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>