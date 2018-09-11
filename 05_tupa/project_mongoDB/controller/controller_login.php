<?php  
	include_once "model/model.php";
	class controller_login{
		public $model;
		public function __construct(){
			$this->model 				  	= new model();
			//-------------------
			//nếu user ấn nút submit
			if($_SERVER["REQUEST_METHOD"] 	== "POST"){
				$email 				  	= $_POST["email"];
				$password 			  	= $_POST["password"];
				//kiểm tra đăng nhập
				// $check = $this->model->get_a_record("select email,password from tbl_user where email='$email'");
				$check = $this->model->table(users)->count(['email'=>$email,'password'=>$password]);
				if($check==1){
						$_SESSION["email"] = $email;
						header('location:index.php');
				}
				else{
					echo "sai tên đăng nhập or mật khẩu";
				}
			}
			//-------------------
			include "view/view_login.php";
		}
	}
	new controller_login();
?>