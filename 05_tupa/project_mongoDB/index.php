<?php  
	session_start();
	ob_start();
	include "config.php";
	include "model/model.php";
	if(isset($_SESSION["email"]) == false)
		include "controller/controller_login.php";
	else{
		$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
		$controller = "controller/controller_$controller.php";
		include "view/master1.php";
	}
?>