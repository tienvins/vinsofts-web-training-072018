<?php  
	class controllerDashboard extends controller {
		public function __construct() {
			parent::__construct();
			include "view/backend/viewDashboard.php";
		}
	}
	new controllerDashboard();
?>