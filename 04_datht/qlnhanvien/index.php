<?php 
	require('backend/config/database.php');
	$db= new database();
	$con= $db->connectDB();
	session_start();
	ob_start();
	if (isset($_GET['controller'],$_GET['action'],$_SESSION['user'])) {
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	}
	else if (isset($_GET['controller'])&& !isset($_GET['action'])&& isset($_SESSION['user']) ) {
		$controller=$_GET['controller'];
		$action='index';
	}else if (!isset($_GET['controller'],$_GET['action'])&&isset($_SESSION['user'])) {
		$controller='home';
		$action='index';

	}
	else{
		$controller= 'user';
		$action= 'login';
	}
	
	if ($controller=='user'&&(($action=='login')||($action=='register'))) {
		require('backend/views/layout2.php');
	}else{
		require('backend/views/layout.php');
	}
	
?>