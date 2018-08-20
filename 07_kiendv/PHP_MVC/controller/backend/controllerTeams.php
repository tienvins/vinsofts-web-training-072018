<?php  
	class controllerTeams extends controller
	{
		public function __construct(){
			parent::__construct();
			include "view/backend/viewTeams.php";
		}
	}
	new controllerTeams();
?>