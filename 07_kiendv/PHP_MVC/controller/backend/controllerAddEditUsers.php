<?php  
	class controllerAddEditUsers extends controller {
		public function __construct() {
			parent::__construct();
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				case "add":
					$form_action = "admin.php?controller=AddEditUsers&action=do_add";
					$listteam = $this->model->fetch("select * from teams order by id desc");
					include "view/backend/viewAddEditUsers.php";
					break;
				case "do_add":
					$name = $_POST["name"];
					$email = $_POST["email"];
					$email_personal = $_POST["email_personal"];
					$password = $_POST["password"];
					$gender = $_POST["gender"];
					$date_of_birth = $_POST["date_of_birth"];
					$identify_id = $_POST["identify_id"];
					$phone_number = $_POST["phone_number"];
					$current_address = $_POST["current_address"];
					$permanent_address = $_POST["permanent_address"];
					$graduate_from = $_POST["graduate_from"];
					$salary = $_POST["salary"];
					$bank_account_number = $_POST["bank_account_number"];
					$hobby = $_POST["hobby"];
					$family_description = $_POST["family_description"];
					$language_skills = $_POST["language_skills"];
					$leave_days = $_POST["leave_days"];
					$role_id = $_POST["role_id"];
					$team_id = $_POST["team_id"];
					$status = isset($_POST["status"]) ? 1 : 0;
					$uploaddir      =   "public/upload/users";
		            $fileinfo       =   PATHINFO($_FILES['image']['name']);
		            $newfilename    =   "image_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
		            $filetmp        =   $_FILES['image']['tmp_name'];
		            if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true)
		                $image      =   "$uploaddir/$newfilename";
					$this->model->execute("insert into users(name,email,email_personal,password,image,gender,date_of_birth,identify_id,phone_number,current_address,permanent_address,graduate_from,salary,bank_account_number,hobby,family_description,language_skills,leave_days,role_id,team_id,status) values('$name','$email','$email_personal','$password','$image','$gender','$date_of_birth','$identify_id','$phone_number','$current_address','$permanent_address','$graduate_from','$salary','$bank_account_number','$hobby','$family_description','$language_skills','$leave_days','$role_id','$team_id','$status')");
					Header( "HTTP/1.1 301 Moved Permanently" );
 					Header( "Location: admin.php?controller=Users" );
					break;
				case "edit":
					$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
					$form_action = "admin.php?controller=AddEditUsers&action=do_edit&id=$id";
					$listteam = $this->model->fetch("select * from teams order by id desc");
					$data = $this->model->fetch_one("select * from users where id = $id");
					$arr = $this->model->fetch("select * from users");
					include "view/backend/viewAddEditUsers.php";
					break;
				case "do_edit":
					$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
					$name = $_POST["name"];
					$email = $_POST["email"];
					$email_personal = $_POST["email_personal"];
					$password = $_POST["password"];
					$gender = $_POST["gender"];
					$date_of_birth = $_POST["date_of_birth"];
					$identify_id = $_POST["identify_id"];
					$phone_number = $_POST["phone_number"];
					$current_address = $_POST["current_address"];
					$permanent_address = $_POST["permanent_address"];
					$graduate_from = $_POST["graduate_from"];
					$salary = $_POST["salary"];
					$bank_account_number = $_POST["bank_account_number"];
					$hobby = $_POST["hobby"];
					$family_description = $_POST["family_description"];
					$language_skills = $_POST["language_skills"];
					$leave_days = $_POST["leave_days"];
					$role_id = $_POST["role_id"];
					$team_id = $_POST["team_id"];
					$status = $_POST["status"];
					if ($_FILES["image"]["name"] != "") {
						$uploaddir      =   "public/upload/users";
			            $fileinfo       =   PATHINFO($_FILES['image']['name']);
			            $newfilename    =   "image_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
			            $filetmp        =   $_FILES['image']['tmp_name'];
			            if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true){
			            	$remove_image = $this->model->fetch_one("select image from users where id = $id");
							if ($remove_image->image != "" && file_exists($remove_image->image)) {
								unlink($remove_image->image);
							}
			                $image      =   "$uploaddir/$newfilename";
			            }
			            $this->model->execute("update users set image='$image' where id = $id");
			        }
					$this->model->execute("update users set name='$name',email='$email',email_personal='$email_personal',password='$password',gender='$gender',date_of_birth='$date_of_birth',identify_id='$identify_id',phone_number='$phone_number',current_address='$current_address',permanent_address='$permanent_address',graduate_from='$graduate_from',salary='$salary',bank_account_number='$bank_account_number',hobby='$hobby',family_description='$family_description',language_skills='$language_skills',leave_days='$leave_days',role_id='$role_id',team_id='$team_id',status='$status' where id = $id");
					Header( "HTTP/1.1 301 Moved Permanently" );
 					Header( "Location: admin.php?controller=Users" );
					break;
				default:
					# code...
					break;
			}
		}
	}
	new controllerAddEditUsers();
?>