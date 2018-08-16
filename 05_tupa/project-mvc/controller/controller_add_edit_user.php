<?php  
	class controller_add_edit_user{
		public $model;
		public function __construct(){
			$this->model = new model();

			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;

			switch ($act) {
				case "edit":
					$form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";
					$arr = $this->model->get_a_record("select * from tbl_user where pk_user_id=$id");
				break;
				case "do_edit":
					$c_name 				= $_POST["c_name"];
					$c_email 				= $_POST["c_email"];
					$c_email_personal 		= $_POST["c_email_personal"];
					$c_password 			= $_POST["c_password"];
					$c_remember_token 		= $_POST["c_remember_token"];
					$c_gender 				= $_POST["c_gender"];
					$c_date_of_birth 		= $_POST["c_date_of_birth"];
					$c_identify_id 			= $_POST["c_identify_id"];
					$c_phone_number 		= $_POST["c_phone_number"];
					$c_current_address 		= $_POST["c_current_address"];
					$c_permanent_address 	= $_POST["c_permanent_address"];
					$c_graduate_from 		= $_POST["c_graduate_from"];	
					$c_salary 				= $_POST["c_salary"];
					$c_bank_account_number 	= $_POST["c_bank_account_number"];
					$c_hobby 				= $_POST["c_hobby"];
					$c_family_description 	= $_POST["c_family_description"];
					$c_language_skills 		= $_POST["c_language_skills"];
					$c_leave_days 			= $_POST["c_leave_days"];
					$role_id 				= $_POST["role_id"];
					$team_id 				= $_POST["team_id"];
					$c_status 				= $_POST["c_status"];
					$this->model->execute("update tbl_user set c_name='$c_name',c_email='$c_email',c_email_personal='$c_email_personal',c_password='$c_password',c_remember_token ='$c_remember_token',c_gender=$c_gender,c_date_of_birth='$c_date_of_birth',c_identify_id='$c_identify_id',c_phone_number=$c_phone_number,c_current_address='$c_current_address',c_permanent_address='$c_permanent_address',c_graduate_from=$c_graduate_from,c_salary=$c_salary,c_bank_account_number='$c_bank_account_number',c_hobby='$c_hobby',c_family_description='$c_family_description',c_language_skills='$c_language_skills',c_leave_days=$c_leave_days,role_id=$role_id,team_id=$team_id,c_status=$c_status where pk_user_id=$id ");
					//----------------
					//upload ảnh
					$c_img = $_FILES["c_img"]["name"];
					if($c_img != ""){
						//--------------
						$old_img = $this->model->get_a_record("select c_img from tbl_user where pk_user_id=$id");
						unlink("public/upload/user/".$old_img->c_img);
						//--------------
						$tmp = $_FILES["c_img"]["tmp_name"];
						$c_img = time().$c_img;
						move_uploaded_file($tmp,"public/upload/user/$c_img");
						$this->model->execute("update tbl_user set c_img='$c_img' where pk_user_id=$id");
					}
					//----------------
					header("location:admin.php?controller=user");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_user&act=do_add";
				break;
				case "do_add":
					$c_name 				= $_POST["c_name"];
					$c_email 				= $_POST["c_email"];
					$c_email_personal 		= $_POST["c_email_personal"];
					$c_password 			= $_POST["c_password"];
					if($c_password != ""){
						$c_password = md5($c_password);
					}
					$c_remember_token 		= $_POST["c_remember_token"];
					$c_gender 				= $_POST["c_gender"];
					$c_date_of_birth 		= $_POST["c_date_of_birth"];
					$c_identify_id 			= $_POST["c_identify_id"];
					$c_phone_number 		= $_POST["c_phone_number"];
					$c_current_address 		= $_POST["c_current_address"];
					$c_permanent_address 	= $_POST["c_permanent_address"];
					$c_graduate_from 		= $_POST["c_graduate_from"];	
					$c_salary 				= $_POST["c_salary"];
					$c_bank_account_number 	= $_POST["c_bank_account_number"];
					$c_hobby 				= $_POST["c_hobby"];
					$c_family_description 	= $_POST["c_family_description"];
					$c_language_skills 		= $_POST["c_language_skills"];
					$c_leave_days 			= $_POST["c_leave_days"];
					$role_id 				= $_POST["role_id"];
					$team_id 				= $_POST["team_id"];
					$c_status 				= $_POST["c_status"];
					//ảnh
					$c_img 	= time().$_FILES["c_img"]["name"];
					if($c_img != ""){
						$tmp 	= $_FILES["c_img"]["tmp_name"];
						$c_img = time().$c_img;

						move_uploaded_file($tmp,"public/upload/user/$c_img");
					}
					$this->model->execute("insert into tbl_user (c_name,c_email,c_email_personal,c_password,c_remember_token,c_gender,c_date_of_birth,c_identify_id,c_phone_number,c_current_address,c_permanent_address,c_graduate_from,c_salary,c_bank_account_number,c_hobby,c_family_description,c_language_skills,c_leave_days,role_id,team_id,c_status,c_img) values ('$c_name','$c_email','$c_email_personal','$c_password','$c_remember_token',$c_gender,'$c_date_of_birth','$c_identify_id',$c_phone_number,'$c_current_address','$c_permanent_address',$c_graduate_from,$c_salary,'$c_bank_account_number','$c_hobby','$c_family_description','$c_language_skills',$c_leave_days,$role_id,$team_id,$c_status,'$c_img')");

					header("location:admin.php?controller=user");
				break;
			}

			include "view/view_add_edit_user.php";
		}
	}
	new controller_add_edit_user();
?>