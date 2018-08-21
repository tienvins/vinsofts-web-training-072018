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
					$old_img 	= $this->model->get_a_record("select c_logo from tbl_teams where pk_team_id=$id");
					unlink("public/upload/teams/".$old_img->c_logo);
					//--------------
					$this->model->execute("delete from tbl_teams where pk_team_id=$id");
					header("location:index.php?controller=teams");
				break;
			}

			//$arr = $this->model->get_all("select * from tbl_teams order by pk_team_id asc");
			$arr 				= $this->model->get_all("select tbl_teams.*,tbl_user.c_name as name_user from tbl_teams inner join tbl_user on tbl_teams.leader_id=tbl_user.pk_user_id");
			// $arr1 = $this->model->get_all("select * from tbl_teams inner join tbl_teams on tbl_teams.team_id=tbl_teams.pk_team_id order by pk_teams_id desc")
			include "view/view_teams.php";
		}
	}
	new controller_teams();
?>