<?php  
	class controller_aaa{
		public function __construct(){
			$this->model = new model();
			include "view/view_aaa.php";
		}
	}
	new controller_aaa();
?>