<?php  
	ob_start();
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
					$pk_team_id = $_POST["pk_team_id"];
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_logo = $_POST["c_logo"];
					$leader_id = $_POST["leader_id"];
					$this->model->execute("update tbl_teams set c_name='$c_name',c_description='$c_description',c_logo='$c_logo',leader_id=$leader_id where pk_team_id=$id");
					header ("location:admin.php?controller=teams");
					//echo "update tbl_teams set c_name='$c_name',c_description='$c_description',c_logo='$c_logo',leader_id=$leader_id where pk_teams_id=$id";
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_teams&act=do_add";
				break;
				case "do_add":
					$pk_team_id = $_POST["pk_team_id"];
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$leader_id = $_POST["leader_id"];
					//ảnh
					$uploaddir      =   "public/upload/teams";
	                $fileinfo       =   PATHINFO($_FILES['c_logo']['name']);
	                $newfilename    =   "image_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
	                $filetmp        =   $_FILES['c_logo']['tmp_name'];
	                if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true){
	                    echo "oke";
	                    $c_logo           =   "$uploaddir/$newfilename";
	                }
	                else{
	                    echo "Something is Fucking Wrong";
	                }
					$this->model->execute("insert into tbl_teams (pk_team_id,c_name,c_description,c_logo,leader_id) values ($pk_team_id,'$c_name','$c_description','$c_logo',$leader_id)");

					header ("location:admin.php?controller=teams");
				break;
				
			}

			include "view/backend/view_add_edit_teams.php";
		}
	}
	new controller_add_edit_teams();
?>