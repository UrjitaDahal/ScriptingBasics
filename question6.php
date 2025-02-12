<?php

// User class
class User
{
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false;

    public function __construct($name, $surname, $username)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }

    public function printFullName()
    {
        $fullName = "{$this->name} {$this->surname}<br>";
        if ($this->is_admin) {
            $fullName .= " (admin)";
        }
        return $fullName;
    }
}

// Customer class extending User
class Customer extends User
{
    private $city;
    private $state;
    private $country;

    public function __construct($name, $surname, $username, $city, $state, $country)
    {
        parent::__construct($name, $surname, $username);
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    // Getter and Setter for City
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    // Getter and Setter for State
    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    // Getter and Setter for Country
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function location()
    {
        return "{$this->city}, {$this->state}, {$this->country}<br>";
    }
}

// AdminUser class extending User
class AdminUser extends User
{
    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

// Create User object
$user = new User("urjita", "Dahal", "urjita123");
echo "Full Name: " . $user->printFullName() . "<br>";
echo "Is Admin: " . ($user->isAdmin() ? "Yes" : "No") . "<br>";

// Create Customer object
$customer = new Customer("Joshua", "hong", "joshuji", "Los Angeles", "California", "USA");
echo "Full Name: " . $customer->printFullName() . "<br>";
echo "Is Admin: " . ($customer->isAdmin() ? "Yes" : "No") . "<br>";
echo "Location: " . $customer->location() . "<br>";

// Create AdminUser object
$admin = new AdminUser("beth", "Johnson", "beth234");
echo "Full Name: " . $admin->printFullName() . "<br>";
echo "Is Admin: " . ($admin->isAdmin() ? "Yes" : "No") . "<br>";
?>
