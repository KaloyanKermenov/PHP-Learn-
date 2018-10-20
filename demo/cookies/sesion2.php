<php? session_start();

    echo $_SESSION['greeting']

?>





<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
  <body>
       

    <form action="form_process.php" method="post">
        <input type="text" name="username" placeholder="Enter Name">
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
      
        
        
        
    
</body>
</html>