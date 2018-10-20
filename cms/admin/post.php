<?php include "includes/admin_header.php"; ?>
<div id="wrapper">

<!-- Navigation -->
<?php include"includes/admin_navigation.php" ?>






<div id="page-wrapper">

	<div class="container-fluid">
			<h1 class="page-header">
									Blank Page
									<small>Subheading</small>
							</h1>
							
							


<?php

if(isset($_GET['source'])){
	
	$source = $_GET['source'];
	
}else{
	$source ='';
}
	
	switch($source){
			
			case 'add_post';
			include "includes/add_post.php";
			break;
			
			case '23';
			echo 'nice';
			break;
			
			case '1';
			echo 'nice';
			break;
			
		default:
			
			include "includes/view_all_posts.php";
			//code hre
		break;	
			
	}
	
	
	
	
	
	
	
	

?>


			<!-- Page Heading -->
			<div class="row">
					<div class="col-lg-12">
						
						
							
					</div>
			</div>
			<!-- /.row -->

	</div>
	<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
<?php  include "includes/admin_footer.php" ?>