<?php 
class car {

    private $make;
    private $model;
    private $year;


public function setcar($make, $model, $year){
$this->make = $make;
$this->model = $model;
$this->year = $year;
}

public function getcar(){
    return "car:$this->make $this->model $this->year";
}

}

$car1 = new car();
$car1 -> setcar("Toyota","Corolla",2013);
$car2=new car();
$car2->setcar("Hyonday","tocson",2015);
echo $car1->getcar(),"<br>";
echo $car2->getcar(),"<br>";
?>