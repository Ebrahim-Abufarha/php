<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;
    
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
?>