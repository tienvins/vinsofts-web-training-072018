<?php  
	class controller_add_edit_teams{
		public $model;
		public function __construct(){
			$this->model 			= new model();

			$act 					= isset($_GET["act"]) ? $_GET["act"] : "";
			$id  					= isset($_GET["id"]) ? $_GET["id"] : 0;

			switch ($act) {
				case "edit":
					$form_action 	= "index.php?controller=add_edit_teams&act=do_edit&id=$id";
					// $arr 			= $this->model->get_a_record("select * from tbl_teams where pk_team_id=$id");
					$rows= $this->model->table(teams)->find(['_id'=> new MongoDB\BSON\ObjectID($id)]);
					foreach($rows as $arr){}

				break;
				case "do_edit":
					$name 		= $_POST["name"];
					$description 	= $_POST["description"];
					$leader_id 		= $_POST["leader_id"];
					// $this->model->execute("update tbl_teams set name='$name',description='$description',leader_id=$leader_id where pk_team_id=$id");
					$this->model->table(teams)->updateOne(['_id'=>new MongoDB\BSON\ObjectId($id)],['$set'=>['name'=>$name,'description'=>$description,'leader_id'=>$leader_id]]);
					//header ("location:index.php?controller=teams");
					//echo "update tbl_teams set name='$name',description='$description',logo='$logo',leader_id=$leader_id where pk_teams_id=$id";
					//----------------
					//upload ảnh
					$logo 		= $_FILES["logo"]["name"];
					if($logo 	   != ""){
						//--------------
						// $old_img 	= $this->model->get_a_record("select logo from tbl_teams where pk_team_id=$id");

						$old_img = $this->model->table(teams)->find(['_id'=> new MongoDB\BSON\ObjectID($id)],['logo'=>1]);

						unlink("public/upload/teams/".$old_img->logo);
						//--------------
						$tmp 		= $_FILES["logo"]["tmp_name"];
						$logo 	= time().$logo;
						move_uploaded_file($tmp,"public/upload/teams/$logo");
						// $this->model->execute("update tbl_teams set logo='$logo' where pk_team_id=$id");
						$this->model->table(teams)->updateOne(['_id'=>new MongoDB\BSON\ObjectId($id)],['$set'=>['logo'=>$logo]]);
					}
					//----------------
					header("location:index.php?controller=teams");
				break;
				case "add":
					$form_action 	= "index.php?controller=add_edit_teams&act=do_add";
				break;
				case "do_add":
					$name        = $_POST["name"];
					$description = $_POST["description"];
					$leader_id   = $_POST["leader_id"];
					//ảnh
					$logo 		= time().$_FILES["logo"]["name"];
					if($logo != ""){
						$tmp  = $_FILES["logo"]["tmp_name"];
						$logo = time().$logo;

						move_uploaded_file($tmp,"public/upload/teams/$logo");
					}
					// $this->model->execute("insert into tbl_teams (name,description,logo,leader_id) values ('$name','$description','$logo',$leader_id)");
					$arr = $this->model->table(teams)->insertOne(['name'=>$name,'description'=>$description,'leader_id'=>$leader_id,'logo'=>$logo]);

					header ("location:index.php?controller=teams");
				break;
				
			}

			include "view/view_add_edit_teams.php";
		}
	}
	new controller_add_edit_teams();
?>