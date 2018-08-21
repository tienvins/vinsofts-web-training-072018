<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "employees";
	$db = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($db,"utf8");
?>