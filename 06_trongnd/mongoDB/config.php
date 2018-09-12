<?php  
	use MongoDB\Client;
    require "./vendor/autoload.php";
    $con= new Client();
    $db= $con->inventory;
?>