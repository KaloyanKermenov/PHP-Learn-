<?php

class Car {
    
  function MoveWheels(){
    echo "WheelsMove";
      
  }  
    
}

if (method_exists("Car","MoveWheels")){
    echo "yeeeh";
} else {
    echo "no";
}



?> 