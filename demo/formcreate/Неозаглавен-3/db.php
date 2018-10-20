<?php
$connection = mysqli_connect('localhost','root','','loginapp'); 
    
    if($connection){
        echo "We ";
    } else {
        die("Database connection failed");
    }
?>


