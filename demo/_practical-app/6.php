<?php

if(isset($_POST['submit'])){
    
$username = $_POST['username'];
$password = $_POST['password'];
    
$connection = mysqli_connect('localhost','root','','prapp'); 
    if($connection){
        echo "We are connected";
    } else {
        die("Database connection failed");
    }
    
    $query = "SELECT * FROM practical app";
    
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die("   fail ");
    }
}
    
//    $query = "INSERT INTO users(username,password)";
//    $query .="VALUES ('$username','$password')";
//    
//    $result = mysqli_query($connection,$query);
//    
//    if(!$result) {
//        die('Query Failed'.mysqli_error());
//    }
//    
//}
?>



<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

        <form action="6.php" method="post">
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


	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>