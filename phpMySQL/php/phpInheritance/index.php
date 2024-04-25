<?php
class Vehicle {
    protected $make;
    protected $model;
    protected $year;
    protected $rentalPrice;

    public function __construct($make, $model, $year, $rentalPrice) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->rentalPrice = $rentalPrice;
    }

    public function displayDetails() {
        echo "Make: {$this->make}<br>";
        echo "Model: {$this->model}<br>";
        echo "Year: {$this->year}<br>";
        echo "Rental Price: {$this->rentalPrice} per day<br>";
    }
}

class Car extends Vehicle {
    protected $numSeats;

    public function __construct($make, $model, $year, $rentalPrice, $numSeats) {
        parent::__construct($make, $model, $year, $rentalPrice);
        $this->numSeats = $numSeats;
    }

    public function displayDetails() {
        parent::displayDetails();
        echo "Number of Seats: {$this->numSeats}<br>";
    }
}

class Truck extends Vehicle {
    protected $payloadCapacity;

    public function __construct($make, $model, $year, $rentalPrice, $payloadCapacity) {
        parent::__construct($make, $model, $year, $rentalPrice);
        $this->payloadCapacity = $payloadCapacity;
    }

    public function displayDetails() {
        parent::displayDetails();
        echo "Payload Capacity: {$this->payloadCapacity} lbs<br>";
    }
}

$car = new Car("Toyota", "Corolla", 2020, 50, 5);
echo "<h2>Car Details</h2>";
$car->displayDetails();

$truck = new Truck("Ford", "F-150", 2019, 80, 2000);
echo "<h2>Truck Details</h2>";
$truck->displayDetails();
?>