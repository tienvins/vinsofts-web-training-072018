<?php
    class c_login extends controller{
		public function __construct(){
			parent::__construct();
			$tb="";
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if($this->m_users->login($_POST)>0){
					$_SESSION["email"] = $_POST['email'];
                	header("location:index.php");
				}
				else{
					$tb="Email hoặc Password không đúng.";
				}
            }
            include "views/v_login.php";
		}
	}
	new c_login();
?>