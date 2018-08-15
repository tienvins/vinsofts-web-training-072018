<?php  
	class controllerUsers extends controller
	{
		public function __construct(){
			parent::__construct();
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				case 'delete':
					$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
					echo $id;
					$this->model->execute("delete from users where id=$id");
					Header( "HTTP/1.1 301 Moved Permanently" );
 					Header( "Location: admin.php?controller=Users" );
					break;
				
				default:
					# code...
					break;
			}
			$data = $this->model->fetch("select * from users order by id asc");
			include "view/backend/viewUsers.php";
		}
	}
	new controllerUsers();
?>