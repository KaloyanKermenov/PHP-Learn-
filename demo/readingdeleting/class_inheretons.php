<?php

class Car {
    
    var $wheels = 4;
    var $hood = 1;
    var $engine =1;
    var $doors = 2;
    
  function MoveWheels(){
    $this->wheels = 10;
      
  } 
    function CreateDoors(){
        $this->doors = 6;
    }
    
}

$bmw = new Car();

class Plane extends Car {
    
    var $wheels = 20;
    
}

$jet = new Plane();
echo $jet->wheels;


?> 