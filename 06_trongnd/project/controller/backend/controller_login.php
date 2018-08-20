<?php 
	class controller_login extends controller{
		public function __construct(){
			parent::__construct();
			//--------------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				//ham mysql_escape_string se chuyen ky tu ' thanh \'
				//hoac ham str_replace(search, replace, subject)
				$name = ($_POST["name"]);
				$password = ($_POST["password"]);
				//ham md5 la ham ma hoa 1 chieu
				$password = md5($password);
				//kiem tra dang nhap
				$check = $this->model->fetch_one("select name,password from tbl_user where name='$name'");
				if($check["name"] != ""){
					//kiem tra password
					if($check["password"] == ($password)){
						//dang nhap thanh cong
						$_SESSION["name"] = $name;
					}
				}
				header('location:admin.php');
			}
			//--------------
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
 ?>