<?php  
	// $hostname 		= "localhost";
	// $user 			= "root";
	// $password 		= "123456";
	// $database		= "vinsofts-tupa";
	// $db 			= mysqli_connect($hostname,$user,$password,$database);
	// mysqli_set_charset($db,"UTF8");
	use MongoDB\Client;
    require "./vendor/autoload.php";
    $con= new Client();
    $db= $con->qlnv;
?>