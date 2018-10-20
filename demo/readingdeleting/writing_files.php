<?php 

$file = "example.txt";

if($handle = fopen($file, 'w')){
	
	fwrite($handle, 'I love PHP and this realyy good stuff');
			
fclose($handle);
	
}else{
	echo "is not goodle"
}



?>