<?php

if(isset($_POST['submit'])){
    
    
    
$username = $_POST['username'];
$password = $_POST['password'];
    
$connection = mysqli_connect('localhost','root','','loginapp'); 
    
    if($connection){
        echo "We are connected";
    } else {
        die("Database connection failed");
    }
    
    
    
    
    
//    if ($username && $password){
//    echo $username;
//    echo $password;
//    }else {
//        echo 'nooooo';
//    }
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
  
<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-contol">
            </div>
             
            <div class="form group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-contol">
            </div>
            
            <input class="btn btn-primery" type="submit" name="submit" value="submit">
            
        </form>
        
    </div>
</div>
   
   
   
    
</body>
</html>