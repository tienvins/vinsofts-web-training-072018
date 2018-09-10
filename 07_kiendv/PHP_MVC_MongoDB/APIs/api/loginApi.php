<?php
	include "restful_api.php";
	class loginApi extends restful_api {
		function __construct(){
			parent::__construct();
		}
		function login() {
			if ($this->method == "POST") {
				$username = $_POST["username"];
				$password = $_POST["password"];
				$check = $this->model->fetch_one(" select username,password from admins where username='$username' ");
				if (isset($check->username)) {
					if ($password == $check->password) {
						$this->response(200,1);
					}
				}
			}
		}
	}
	new loginApi();
?>