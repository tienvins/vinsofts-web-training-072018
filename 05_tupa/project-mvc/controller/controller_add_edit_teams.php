<?php  
	class controller_add_edit_teams{
		public $model;
		public function __construct(){
			$this->model = new model();

			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;

			switch ($act) {
				case "edit":
					$form_action = "admin.php?controller=add_edit_teams&act=do_edit&id=$id";
					$arr = $this->model->get_a_record("select * from tbl_teams where pk_team_id=$id");
				break;
				case "do_edit":
					$c_name 		= $_POST["c_name"];
					$c_description 	= $_POST["c_description"];
					$leader_id 		= $_POST["leader_id"];
					$this->model->execute("update tbl_teams set c_name='$c_name',c_description='$c_description',leader_id=$leader_id where pk_team_id=$id");
					//header ("location:admin.php?controller=teams");
					//echo "update tbl_teams set c_name='$c_name',c_description='$c_description',c_logo='$c_logo',leader_id=$leader_id where pk_teams_id=$id";
					//----------------
					//upload ảnh
					$c_logo = $_FILES["c_logo"]["name"];
					if($c_logo != ""){
						//--------------
						$old_img = $this->model->get_a_record("select c_logo from tbl_teams where pk_team_id=$id");
						unlink("public/upload/teams/".$old_img->c_logo);
						//--------------
						$tmp = $_FILES["c_logo"]["tmp_name"];
						$c_logo = time().$c_logo;
						move_uploaded_file($tmp,"public/upload/teams/$c_logo");
						$this->model->execute("update tbl_teams set c_logo='$c_logo' where pk_team_id=$id");
					}
					//----------------
					header("location:admin.php?controller=teams");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_teams&act=do_add";
				break;
				case "do_add":
					$c_name 		= $_POST["c_name"];
					$c_description 	= $_POST["c_description"];
					$leader_id 		= $_POST["leader_id"];
					//ảnh
					$c_logo 	= time().$_FILES["c_logo"]["name"];
					if($c_logo != ""){
						$tmp 	= $_FILES["c_logo"]["tmp_name"];
						$c_logo = time().$c_logo;

						move_uploaded_file($tmp,"public/upload/teams/$c_logo");
					}
					$this->model->execute("insert into tbl_teams (c_name,c_description,c_logo,leader_id) values ('$c_name','$c_description','$c_logo',$leader_id)");

					header ("location:admin.php?controller=teams");
				break;
				
			}

			include "view/view_add_edit_teams.php";
		}
	}
	new controller_add_edit_teams();
?>