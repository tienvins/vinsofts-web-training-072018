<?php
    class c_login extends controller{
		public function __construct(){
			parent::__construct();
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$email = $_POST["email"];
				$password = $_POST["password"];
				// $check = $this->model->get_one(" select email,password from users where email='$email'");
				// if (isset($check->email)) {
				// 	if ($password == $check->password) {
				// 		$_SESSION["email"] = $email;
                //         header("location:index.php");
				// 	}
				// 	else {
				// 		header("location:index.php?success=invalid");
				// 	}
				// }
			    // else{
                //     header("location:index.php?success=invalid");
				// }		   
				
				if($this->m_users->login($email,$password)==1){
					$_SESSION["email"] = $email;
                	header("location:index.php");
				}
            }
            include "views/v_login.php";
		}
	}
	new c_login();
?>