<?php  
	class controllerAddEditUsers extends controller {
		public function __construct() {
			parent::__construct();
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				case "add":
					$form_action = "admin.php?controller=AddEditUsers&action=do_add";
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


					// $uploads_dir = '/public/upload';
					// $tmp_name = $_FILES["image"]["tmp_name"];
			  //       // basename() may prevent filesystem traversal attacks;
			  //       // further validation/sanitation of the filename may be appropriate
			  //       $image = basename($_FILES["image"]["name"]);
			  //       move_uploaded_file($tmp_name, "$uploads_dir/$image");
					// $uploaddir      =   "PHP_MVC/public/upload";
		   //          $fileinfo       =   PATHINFO($_FILES['image']['name']);
		   //          $newfilename    =   "LOGO_TEAM_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
		   //          $filetmp        =   $_FILES['image']['tmp_name'];
		   //          if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true){
		   //              echo "oke";
		   //              $image           =   "$uploaddir/$newfilename";
		   //          }
		   //          else{
		   //              echo "tuoi gi upload";
		   //          }
		   //          var_dump($filetmp);
		   //          die();
					// $name_image="";

					// $uploads_dir = '/public/upload';
					// $tmp_name = $_FILES["image"]["tmp_name"];
			  //       // basename() may prevent filesystem traversal attacks;
			  //       // further validation/sanitation of the filename may be appropriate
			  //       $name_image = basename($_FILES["image"]["name"]);
			  //       move_uploaded_file($tmp_name, "$uploads_dir/$name_image");
					$image = "";
					if ($_FILES["image"]["name"] != "") {
						$image_tmp = time().$_FILES["image"]["tmp_name"];
				        // basename() may prevent filesystem traversal attacks;
				        // further validation/sanitation of the filename may be appropriate
				        $image = basename($_FILES["image"]["name"]);
				        move_uploaded_file($image_tmp, "07_kiendv/PHP_MVC/public/upload/$image");
					}
					
					$this->model->execute("insert into users(name,email,email_personal,password,image,gender,date_of_birth,identify_id,phone_number,current_address,permanent_address,graduate_from,salary,bank_account_number,hobby,family_description,language_skills,leave_days,role_id,team_id,status) values('$name','$email','$email_personal','$password','$image','$gender','$date_of_birth','$identify_id','$phone_number','$current_address','$permanent_address','$graduate_from','$salary','$bank_account_number','$hobby','$family_description','$language_skills','$leave_days','$role_id','$team_id','$status')");
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