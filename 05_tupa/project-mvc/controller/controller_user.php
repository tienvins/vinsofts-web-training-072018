<?php  
	class controller_user{
		public $model;
		public function __construct(){
			$this->model = new model();

			$act = isset($_GET["act"]) ? $_GET["act"] : "" ;
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			switch($act){
				case "delete":
					$this->model->execute("delete from tbl_user where pk_user_id=$id");
					header("location:admin.php?controller=user");
				break;
			}

			$arr = $this->model->get_all("select tbl_user.*,tbl_teams.c_name as name_team  from tbl_user inner join tbl_teams on tbl_user.team_id=tbl_teams.pk_team_id order by pk_user_id desc");
			include "view/view_user.php";
		}
	}
	new controller_user();
?>