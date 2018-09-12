<?php  
	class controller_add_edit_user{
		public $model;
		public function __construct(){
			$this->model 					= new model();

			$act 							= isset($_GET["act"]) ? $_GET["act"] : "";
			$id 							= isset($_GET["id"]) ? $_GET["id"] : 0;

			switch ($act) {
				case "edit":
					$form_action 			= "index.php?controller=add_edit_user&act=do_edit&id=$id";
					// $arr 					= $this->model->get_a_record("select * from tbl_user where pk_user_id=$id");
					$rows= $this->model->table(users)->find(['_id'=> new MongoDB\BSON\ObjectID($id)]);
					foreach($rows as $arr){}
				break;
				case "do_edit":
					$name                = $_POST["name"];
					$email               = $_POST["email"];
					$email_personal      = $_POST["email_personal"];
					$password            = $_POST["password"];
					$remember_token      = $_POST["remember_token"];
					$gender              = $_POST["gender"];
					$date_of_birth       = $_POST["date_of_birth"];
					$identify_id         = $_POST["identify_id"];
					$phone_number        = $_POST["phone_number"];
					$current_address     = $_POST["current_address"];
					$permanent_address   = $_POST["permanent_address"];
					$graduate_from       = $_POST["graduate_from"];	
					$salary              = $_POST["salary"];
					$bank_account_number = $_POST["bank_account_number"];
					$hobby               = $_POST["hobby"];
					$family_description  = $_POST["family_description"];
					$language_skills     = $_POST["language_skills"];
					$leave_days          = $_POST["leave_days"];
					$role_id             = $_POST["role_id"];
					$team_id             = $_POST["team_id"];
					$status              = $_POST["status"];
					$this->model->table(users)->updateOne(['_id'=>new MongoDB\BSON\ObjectId($id)],['$set'=>['name'=>$name,'email'=>$email,'email_personal'=>$email_personal,'password'=>$password,'remember_token'=>$remember_token,'gender'=>$gender,'date_of_birth'=>$date_of_birth,'identify_id'=>$identify_id,'phone_number'=>$phone_number,'current_address'=>$current_address,'permanent_address'=>$permanent_address,'graduate_from'=>$graduate_from,'salary'=>$salary,'bank_account_number'=>$bank_account_number,'hobby'=>$hobby,'family_description'=>$family_description,'language_skills'=>$language_skills,'leave_days'=>$leave_days,'role_id'=>$role_id,'team_id'=>$team_id,'status'=>$status]]);
					//----------------
					//upload ảnh
					$img    = $_FILES["img"]["name"];
					if($img != ""){
						//--------------
						$old_img = $this->model->table(users)->find(['_id'=> new MongoDB\BSON\ObjectID($id)],['img'=>1]);
						unlink("public/upload/user/".$old_img->img);
						//--------------
						$tmp 				= $_FILES["img"]["tmp_name"];
						$img 				= time().$img;
						move_uploaded_file($tmp,"public/upload/user/$img");
						$this->model->table(users)->updateOne(['_id'=>new MongoDB\BSON\ObjectId($id)],['$set'=>['img'=>$img]]);
					}
					//----------------
					header("location:index.php?controller=user");
				break;
				case "add":
					$form_action 			= "index.php?controller=add_edit_user&act=do_add";
				break;
				case "do_add":
					$name                = $_POST["name"];
					$email               = $_POST["email"];
					$email_personal      = $_POST["email_personal"];
					$password            = $_POST["password"];
					// if($password      != ""){
					// 	$password        = md5($password);
					// }
					$remember_token      = $_POST["remember_token"];
					$gender              = $_POST["gender"];
					$date_of_birth       = $_POST["date_of_birth"];
					$identify_id         = $_POST["identify_id"];
					$phone_number        = $_POST["phone_number"];
					$current_address     = $_POST["current_address"];
					$permanent_address   = $_POST["permanent_address"];
					$graduate_from       = $_POST["graduate_from"];	
					$salary              = $_POST["salary"];
					$bank_account_number = $_POST["bank_account_number"];
					$hobby               = $_POST["hobby"];
					$family_description  = $_POST["family_description"];
					$language_skills     = $_POST["language_skills"];
					$leave_days          = $_POST["leave_days"];
					$role_id             = $_POST["role_id"];
					$team_id             = $_POST["team_id"];
					$status              = $_POST["status"];
					//ảnh
					$img 					= time().$_FILES["img"]["name"];
					if($img 			   != ""){
						$tmp 				= $_FILES["img"]["tmp_name"];
						$img 				= time().$img;

						move_uploaded_file($tmp,"public/upload/user/$img");
					}
					$arr = $this->model->table(users)->insertOne(['name'=>$name,'email'=>$email,'email_personal'=>$email_personal,'password'=>$password,'remember_token'=>$remember_token,'gender'=>$gender,'date_of_birth'=>$date_of_birth,'identify_id'=>$identify_id,'phone_number'=>$phone_number,'current_address'=>$current_address,'permanent_address'=>$permanent_address,'graduate_from'=>$graduate_from,'salary'=>$salary,'bank_account_number'=>$bank_account_number,'hobby'=>$hobby,'family_description'=>$family_description,'language_skills'=>$language_skills,'leave_days'=>$leave_days,'role_id'=>$role_id,'team_id'=>$team_id,'status'=>$status,'img'=>$img]);

					header("location:index.php?controller=user");
				break;
			}

			include "view/view_add_edit_user.php";
		}
	}
	new controller_add_edit_user();
?>