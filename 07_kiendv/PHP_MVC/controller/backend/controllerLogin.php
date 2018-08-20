<?php  
	class controllerLogin extends controller{
		public function __construct(){
			parent::__construct();
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$username = $_POST["username"];
				$password = $_POST["password"];
				$check = $this->model->fetch_one(" select username,password from admins where username='$username' ");
				if (isset($check->username)) {
					if ($password == $check->password) {
						$_SESSION["username"] = $username;
						header("location:admin.php");
					}
					else {
						header("location:admin.php?success=invalid");
					}
				}
			else
				header("location:admin.php?success=invalid");
			}
			include "view/backend/viewLogin.php";
		}
	}
	new controllerLogin();
?>