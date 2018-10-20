<?php

$name = 'SomeName';
$value = 100;
$expritation = time() + (60*60*24*7);

setcookie($name,$value,$expritation);

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
  <body>
      <?php
      if(isset($_COOKIE["SomeName"])){
          
          $someOne = $_COOKIE["SomeName"];
          echo "someOne";
          
      }else{
       $someOne = "";   
      }
      
      ?>

    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter Name">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
      
        
        
        
    
</body>
</html>