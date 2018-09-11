<?php  
	class controllerAddEditUsers extends controller {
		public function __construct() {
			parent::__construct();
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				case "add":
					$form_action = "admin.php?controller=AddEditUsers&action=do_add";
					$listteam = $this->model->table(teams)->find();
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
					$this->model->table(users)->insertOne([
						'name' => $name,
						'email' => $email,
						'email_personal' => $email_personal,
						'password' => $password,
						'image' => $image,
						'gender' => $gender,
						'date_of_birth' => $date_of_birth,
						'identify_id' => $identify_id,
						'phone_number' => $phone_number,
						'current_address' => $current_address,
						'permanent_address' => $permanent_address,
						'graduate_from' => $graduate_from,
						'salary' => $salary,
						'bank_account_number' => $bank_account_number,
						'hobby' => $hobby,
						'family_description' => $family_description,
						'language_skills' => $language_skills,
						'leave_days' => $leave_days,
						'role_id' => $role_id,
						'team_id' => $team_id,
						'status' => $status
					]);
					Header( "HTTP/1.1 301 Moved Permanently" );
 					Header( "Location: admin.php?controller=Users" );
					break;
				case "edit":
					$id = isset($_GET["id"]) ? $_GET["id"] : 0;
					$form_action = "admin.php?controller=AddEditUsers&action=do_edit&id=$id";
					$listteam = $this->model->table(teams)->find();
					$data = $this->model->table(users)->find(['_id' => new MongoDB\BSON\ObjectID($id)])->toArray();
					include "view/backend/viewAddEditUsers.php";
					break;
				case "do_edit":
					$id = isset($_GET["id"]) ? $_GET["id"] : 0;
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
			            	$remove_image = $this->model->table(users)->find([
			            		'_id' => new MongoDB\BSON\ObjectID($id)
			            	])-> toArray();
							if ($remove_image[0]->image != "" && file_exists($remove_image[0]->image)) {
								unlink($remove_image[0]->image);
							}
			                $image      =   "$uploaddir/$newfilename";
			            }
			            $this->model->table(users)->updateOne(
			            	[
			            		'_id' => new MongoDB\BSON\ObjectID($id)
			            	],
			            	[
				            	'$set' =>
				            	[
				            		'image' => $image,
				            	]
				            ]
			            );
			        }

					$this->model->table(users)->updateOne(
						[
							'_id' => new MongoDB\BSON\ObjectID($id)
						],
						[
							'$set' =>
							[
								'name' => $name,
								'email' => $email,
								'email_personal' => $email_personal,
								'password' => $password,
								'gender' => $gender,
								'date_of_birth' => $date_of_birth,
								'identify_id' => $identify_id,
								'phone_number' => $phone_number,
								'current_address' => $current_address,
								'permanent_address' => $permanent_address,
								'graduate_from' => $graduate_from,
								'salary' => $salary,
								'bank_account_number' => $bank_account_number,
								'hobby' => $hobby,
								'family_description' => $family_description,
								'language_skills' => $language_skills,
								'leave_days' => $leave_days,
								'role_id' => $role_id,
								'team_id' => $team_id,
								'status' => $status
							]
						]
					);
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