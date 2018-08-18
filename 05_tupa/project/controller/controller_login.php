<?php  
	include_once "model/model.php";
	class controller_login{
		public $model;
		public function __construct(){
			$this->model 				  	= new model();
			//-------------------
			//nếu user ấn nút submit
			if($_SERVER["REQUEST_METHOD"] 	== "POST"){
				$c_email 				  	= $_POST["c_email"];
				$c_password 			  	= $_POST["c_password"];
				//kiểm tra đăng nhập
				$check 					  	= $this->model->get_a_record("select c_email,c_password from tbl_user where c_email='$c_email'");
				if(isset($check->c_email)){
					if($check->c_password 	== md5($c_password) ){
						//gán vào session
						$_SESSION["c_email"] = $c_email;
						//quay trở lại trang index
						header('location:index.php');
					}
				}
				else{echo "ok";}
			}
			//-------------------
			include "view/view_login.php";
		}
	}
	new controller_login();
?>