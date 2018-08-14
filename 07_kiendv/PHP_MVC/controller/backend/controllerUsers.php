<?php  
	class controllerUsers extends controller
	{
		public function __construct(){
			parent::__construct();
			$data = $this->model->fetch("select * from users order by id asc");
			include "view/backend/viewUsers.php";
		}
	}
	new controllerUsers();
?>