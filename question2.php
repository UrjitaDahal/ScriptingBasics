<?php

class Bicycle
{
    // Public properties
    public $brand;
    public $model;
    public $year;
    public $description;
    public $weight; // Stored in grams by default

    // Constructor
    public function __construct($brand, $model, $year, $weight, $description = "Used bicycle")
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->description = $description;
        $this->weight = $weight; // Set weight in grams
    }

    // Getter method for bike information
    public function getInfo()
    {
        return "{$this->brand} {$this->model} ({$this->year})";
    }

    // Getter method for weight
    public function getWeight($inKilograms = false)
    {
        if ($inKilograms) {
            return $this->weight / 1000 . " kg";
        } else {
            return $this->weight . " grams";
        }
    }

    // Setter method for weight
    public function setWeight($weightInGrams)
    {
        $this->weight = $weightInGrams;
    }
}

// Create two Bicycle objects
$bike1 = new Bicycle("Trek", "Domane SL6", 2022, 8500); // Weight is in grams
$bike2 = new Bicycle("Giant", "Defy Advanced Pro", 2023, 7900, "Brand new road bike");

// Print each bike's information
echo "Bike 1: " . $bike1->getInfo() . "\n<br>";
echo "Bike 2: " . $bike2->getInfo() . "\n<br>";

// Print each bike's weight in kilograms
echo "Bike 1 Weight (kg): " . $bike1->getWeight(true) . "\n<br>";
echo "Bike 2 Weight (kg): " . $bike2->getWeight(true) . "\n<br>";

// Print each bike's weight in grams
echo "Bike 1 Weight (grams): " . $bike1->getWeight(false) . "\n<br>";
echo "Bike 2 Weight (grams): " . $bike2->getWeight(false) . "\n<br>";
?>