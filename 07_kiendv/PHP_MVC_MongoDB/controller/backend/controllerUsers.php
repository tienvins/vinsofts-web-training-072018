<?php  
	class controllerUsers extends controller
	{
		public function __construct(){
			parent::__construct();
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				case 'delete':
					$id = isset($_GET["id"]) ? $_GET["id"] : 0;
					$remove_image = $this->model->table(users)->find([
						'_id' => new MongoDB\BSON\ObjectID($id)
					])-> toArray();
					if ($remove_image[0]->image != "" && file_exists($remove_image[0]->image)) {
						unlink($remove_image[0]->image);
					}
					$this->model->table(users)->deleteOne([
						'_id' => new MongoDB\BSON\ObjectID($id)
					]);
					Header( "HTTP/1.1 301 Moved Permanently" );
 					Header( "Location: admin.php?controller=Users" );
					break;
				
				default:
					# code...
					break;
			}
			$data = $this->model->table(users)->find();
			$data1 = $this->model->table(users)->find();
			include "view/backend/viewUsers.php";
		}
	}
	new controllerUsers();
?>