<?php 

	// echo "<br>day la routes ->controller";
	// echo "<br>controller-> ".$controller;
	require_once('backend/model/master.php');
	require_once('backend/controller/'.$controller.'.php');
	
	switch ($controller) {
		case 'home':
			$controller= new Home();
			
			break;
		case 'user':
			$controller= new User();
			
			include 'backend/model/m_user.php';
			
			break;
		
		default:
			
			break;
	}
	$controller->{$action}();

 ?>

