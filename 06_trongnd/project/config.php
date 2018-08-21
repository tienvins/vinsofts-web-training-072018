<?php  
	$hostname 		= "localhost";
	$user 			= "root";
	$password 		= "hanoi1";
	$database		= "vinsofts";
	$db 			= mysqli_connect($hostname,$user,$password,$database);
	mysqli_set_charset($db,"UTF8");
?>