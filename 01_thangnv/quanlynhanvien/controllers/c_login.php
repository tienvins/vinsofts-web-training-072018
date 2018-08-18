<?php
    class c_login extends controller{
		public function __construct(){
			parent::__construct();
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				if($this->m_users->login($_POST)==1){
					$_SESSION["email"] = $_POST['email'];
                	header("location:index.php");
				}
            }
            include "views/v_login.php";
		}
	}
	new c_login();
?>