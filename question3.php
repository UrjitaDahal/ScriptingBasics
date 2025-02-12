<?php

class Student
{
    // Public properties
    public $name;
    public $surname;
    public $country;

    // Private and protected properties
    private $tuition = 5000; // Default tuition value
    protected $indexNumber = "12345"; // Default index number

    // Getter for name
    public function getName()
    {
        return $this->name;
    }

    // Getter for surname
    public function getSurname()
    {
        return $this->surname;
    }

    // Public method
    public function helloWorld()
    {
        return "Hello World";
    }

    // Protected method
    protected function helloFamily()
    {
        return "Hello Family";
    }

    // Private method
    private function helloMe()
    {
        return "Hello me!";
    }

    // Private getter for tuition
    private function getTuition()
    {
        return $this->tuition;
    }

    // Method to access private tuition value for demonstration purposes
    public function displayTuition()
    {
        return "Tuition: " . $this->getTuition();
    }
}

// Subclass PartTimeStudent
class PartTimeStudent extends Student
{
    // Public method to access protected helloFamily method
    public function helloParent()
    {
        return $this->helloFamily();
    }
}

// Main program
// Create Student object
$student = new Student();
$student->name = "urjita";
$student->surname = "dahal";
$student->country = "nepal";

echo "Student Name: " . $student->getName() . "\n<br>";
echo "Student Surname: " . $student->getSurname() . "\n<br>";
echo "Student Country: " . $student->country . "\n<br>";
echo $student->helloWorld() . "\n<br>";
echo $student->displayTuition() . "\n<br>";

// Create PartTimeStudent object
$partTimeStudent = new PartTimeStudent();
$partTimeStudent->name = "Joshua";
$partTimeStudent->surname = "Hong";
$partTimeStudent->country = "USA";

echo "\nPart-Time Student Name: " . $partTimeStudent->getName() . "\n<br>";
echo "Part-Time Student Surname: " . $partTimeStudent->getSurname() . "\n<br>";
echo $partTimeStudent->helloWorld() . "\n<br>";
echo "Calling helloParent(): " . $partTimeStudent->helloParent() . "\n<br>";
?>