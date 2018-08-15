<?php
	session_start();
	ob_start();
	include "config.php";
	include "app/model.php";
	include "app/controller.php";
	if (isset($_SESSION["username"]) == false) {
		include "controller/backend/controllerLogin.php";
	}
	else {
		$controller = isset($_GET["controller"])?$_GET["controller"]: "";
		$controller = $controller != "" ? "controller$controller.php": "";
		include "view/backend/viewLayout.php";
	}
?>