<?php 
	class controller_add_edit_teams extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			
			switch($act){
				case "edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
         			$form_action="admin.php?controller=add_edit_teams&act=do_edit&id=$id";
          				$arr = $this->model->fetch_one("select * from tbl_teams where pk_teams_id=$id");
          			include "view/backend/view_add_edit_teams.php";
          			
       			break;
       			case "do_edit":
	       			$id = isset($_GET["id"])?$_GET["id"]:0;
			        $name     = $_POST["name"];
			        $description   = $_POST["description"];
			        $leader_id     = $_POST["leader_id"];
			        $this->model->execute("update tbl_teams set name='$name',description='$description',leader_id=$leader_id, where pk_teams_id=$id");
			          //header ("location:admin.php?controller=teams");
			          //echo "update tbl_teams set name='$name',description='$description',logo='$logo',leader_id=$leader_id where pk_teams_id=$id";
			          //----------------
			          //upload ảnh
			        $logo="";
			        $logo = $_FILES["logo"]["name"];
			        if($logo != ""){
			            //--------------
			          $old_img = $this->model->fetch_one("select * from tbl_teams where pk_teams_id=$id");
			            unlink("public/upload/".$old_img->logo);
			            //--------------
			            $tmp = $_FILES["logo"]["tmp_name"];
			            $logo = time().$logo;
			            move_uploaded_file($tmp,"public/upload/$logo");
			            $this->model->execute("update tbl_teams set logo='$logo' where pk_teams_id=$id");
         			 }
          //----------------
         			 header("location:admin.php?controller=teams");
          			// $url    = 'admin.php?controller=teams';
             //      	echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $url . '">';
                break;
				case "add":
					$form_action = "admin.php?controller=add_edit_teams&act=do_add";
					header("location:admin.php?controller=teams");
					include "view/backend/view_add_edit_teams.php";

				break;
				case "do_add":

					// $name = $_POST["name"];
					// $logo = "";
					// $description = $_POST["description"];
					// $leader_id = $_POST["leader_id"];
					
					// $this->model->execute("insert into tbl_teams(name,description,logo,leader_id) values('$name','$description','$logo',$leader_id)");
					// $url    = 'admin.php?controller=teams';
     //              	echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $url . '">';
					// // header('location:admin.php?controller=teams');
				 	  $name     = $_POST["name"];
			          $description   = $_POST["description"];
			          $leader_id     = $_POST["leader_id"];
          //ảnh
			          $logo   = time().$_FILES["logo"]["name"];
			          if($logo != ""){
			            $tmp   = $_FILES["logo"]["tmp_name"];
			            $logo = time().$logo;

			            move_uploaded_file($tmp,"public/upload/$logo");
			          }
			          var_dump($logo);
			          $this->model->execute("insert into tbl_teams (name,description,logo,leader_id) values ('$name','$description','$logo',$leader_id)");

			          header ("location:admin.php?controller=teams");

			          // $url    = 'admin.php?controller=teams';
			          // echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $url . '">';


			
				break;
			}
		}
	}
	new controller_add_edit_teams();
 ?>