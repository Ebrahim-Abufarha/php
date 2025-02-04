<?php
class Vehicle {
    public $type;
    
    public function __construct($type) {
        $this->type = $type;
    }
    
    public function move() {
        return "The vehicle is moving";
    }
}

class CarVehicle extends Vehicle {
    public function move() {
        return "The car is driving on the road";
    }
}

class Bike extends Vehicle {
    public function move() {
        return "The bike is speeding on the track";
    }
}

$car = new CarVehicle("Land");
$bike = new Bike("Land");

echo $car->move() . "<br>";
echo $bike->move() . "<br>";
?>