<?php 
	require('backend/config/database.php');
	$db= new database();
	$con= $db->connectDB();
	ob_start();
	if (isset($_GET['controller'],$_GET['action'])) {
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}
	else if (isset($_GET['controller'])&&(!isset($_GET['action']))) {
		$controller=$_GET['controller'];
		$action=$_GET['index'];
	}
	else{
		$controller= 'home';
		$action= 'index';
	}
	require('backend/views/layout.php');
	
	
?>