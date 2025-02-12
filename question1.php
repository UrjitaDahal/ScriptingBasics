<?php

// Define the Vehicle interface
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

// Define the Car class
class Car implements Vehicle {
    // Private properties (Encapsulation)
    private $make;
    private $model;
    private $year;

    // Constructor
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter and setter for $make
    public function getMake() {
        return $this->make;
    }
    public function setMake($make) {
        $this->make = $make;
    }

    // Getter and setter for $model
    public function getModel() {
        return $this->model;
    }
    public function setModel($model) {
        $this->model = $model;
    }

    // Getter and setter for $year
    public function getYear() {
        return $this->year;
    }
    public function setYear($year) {
        $this->year = $year;
    }

    // Methods
    public function start() {
        echo "Car started.\n<br>";
    }

    public function displayInfo() {
        echo "Car Info: Make - {$this->make}, Model - {$this->model}, Year - {$this->year}<br>\n";
    }

    // Get description method
    public function getDescription() {
        return "This is a car: {$this->make} {$this->model}, {$this->year}.<br>";
    }

    // Implementing Vehicle interface methods
    public function startEngine() {
        echo "Engine started.\n";
    }

    public function stopEngine() {
        echo "Engine stopped.\n";
    }
}

// Define the ElectricCar class that extends Car
class ElectricCar extends Car {
    // New property
    private $batteryCapacity;

    // Constructor
    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year); // Call parent constructor
        $this->batteryCapacity = $batteryCapacity;
    }

    // Getter and setter for $batteryCapacity
    public function getBatteryCapacity() {
        return $this->batteryCapacity;
    }
    public function setBatteryCapacity($batteryCapacity) {
        $this->batteryCapacity = $batteryCapacity;
    }

    // New method for ElectricCar
    public function charge() {
        echo "Charging the electric car with battery capacity of {$this->batteryCapacity} kWh. \n<br>";
    }

    // Override the getDescription method
    public function getDescription() {
        return "This is an electric car: {$this->getMake()} {$this->getModel()}, {$this->getYear()} with a battery capacity of {$this->batteryCapacity} kWh.<br>\n";
    }
}

// Example usage

// Create a Car object
$car = new Car("Toyota", "Corolla", 2020);
$car->start();
$car->displayInfo();
echo $car->getDescription() . "\n";
$car->startEngine();
$car->stopEngine();

echo "\n";

// Create an ElectricCar object
$electricCar = new ElectricCar("Tesla", "Model S", 2022, 100);
$electricCar->start();
$electricCar->displayInfo();
$electricCar->charge();
echo $electricCar->getDescription() . "\n";
$electricCar->startEngine();
$electricCar->stopEngine();
?>