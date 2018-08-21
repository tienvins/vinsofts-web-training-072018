<?php  
	class controllerLogout extends controller {
		public function __construct() {
			unset($_SESSION["username"]);
			echo "<script>location.reload()</script>";
		}
	}
	new controllerLogout();
?>