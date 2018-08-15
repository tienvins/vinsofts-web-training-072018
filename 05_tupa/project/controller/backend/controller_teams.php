<?php  
	class controller_teams{
		public $model;
		public function __construct(){
			$this->model = new model();
			$act = isset($_GET["act"]) ? $_GET["act"] : "" ;
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			switch($act){
				case "delete":
					$this->model->execute("delete from tbl_teams where pk_team_id=$id");
					header("location:admin.php?controller=teams");
				break;
			}

			$arr = $this->model->get_all("select * from tbl_teams order by pk_team_id asc");
			// $arr1 = $this->model->get_all("select * from tbl_teams inner join tbl_teams on tbl_teams.team_id=tbl_teams.pk_team_id order by pk_teams_id desc")
			include "view/backend/view_teams.php";
		}
	}
	new controller_teams();
?>