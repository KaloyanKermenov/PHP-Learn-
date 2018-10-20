<?php 

if (isset($_POST['submit'])){
    $name = array("EDWIN","Maria","mohad","peter","samid","ivan","top");
    $minimun = 5;
    $maximin = 10;
    
        $username = $_POST['username'];
       $password = $_POST['password'];
    
  
    if(strlen($username) < $minimun) {
        
        echo "Username has to be longer than five";
        
    }
    
    if(!in_array($username,$name)){
        echo"Sorry You are not allowed";
    } else {
        echo"Welcome";
    }
    
    
    
    
    if(strlen($username) > $maximin) {
        
        echo "Can not to be longer than five";
        
    }
    
}

?>
