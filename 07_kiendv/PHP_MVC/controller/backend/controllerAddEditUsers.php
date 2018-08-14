<?php  
	class controllerAddEditUsers extends controller {
		public function __construct() {
			parent::__construct();
			include "view/backend/viewAddEditUsers.php";
		}
	}
	new controllerAddEditUsers();
?>