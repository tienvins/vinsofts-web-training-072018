<?php  
	class controller_teams{
		public $model;
		public function __construct(){
			$this->model 		= new model();
			$act 				= isset($_GET["act"]) ? $_GET["act"] : "" ;
			$id 				= isset($_GET["id"]) ? $_GET["id"] : 0;
			switch($act){
				case "delete":
					//--------------
					// $old_img 	= $this->model->get_a_record("select logo from tbl_teams where pk_team_id=$id");
					$old_img = $this->model->table(teams)->find(['_id'=> new MongoDB\BSON\ObjectID($id)],['logo'=>1]);
					unlink("public/upload/teams/".$old_img->logo);
					//--------------
					// $this->model->execute("delete from tbl_teams where pk_team_id=$id");
					$this->model->table(teams)->deleteOne(['_id'=> new MongoDB\BSON\ObjectId($id)]);
					header("location:index.php?controller=teams");
				break;
			}

			
			// $arr 				= $this->model->get_all("select tbl_teams.*,tbl_user.name as name_user from tbl_teams inner join tbl_user on tbl_teams.leader_id=tbl_user.pk_user_id");


			$data = $this->model->table(teams)->find();
			include "view/view_teams.php";
		}
	}
	new controller_teams();
?>