<?php 
	class controller_logout extends controller{
		public function __construct(){
			//huy session
			unset($_SESSION["name"]);
			echo "<script>location.reload()</script>";
		}
	}
	new controller_logout();
 ?>