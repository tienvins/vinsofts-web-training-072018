<?php
	include "APIs/api/restful_api.php";
	$name = $_GET['apiname'];
	if (file_exists($name)) {
		include "APIs/api/".$name."api.php";
	}
	else
		echo "false";
	
?>