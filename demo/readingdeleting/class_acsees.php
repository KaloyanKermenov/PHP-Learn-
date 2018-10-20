<?php

class Car {
    
    public $wheels = 4;
    protected $hood = 1;
    private $engine =1;
    var $doors = 2;
    
  function ShowProperty(){
    $this->wheels = 10;
      
  }  
    
}

$bmw =new Car();

echo $bmw->wheels




?> 