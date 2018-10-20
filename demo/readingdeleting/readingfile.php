<?php 

$file = "example.txt";

if($handle = fopen($file, 'r')){
	
echofwrite($handle, 'I love PHP and this realyy good stuff');
			
$content = fread($handle,10);// each bite equals a charecter
	
}else{
	echo "is not goodle"
}



?>