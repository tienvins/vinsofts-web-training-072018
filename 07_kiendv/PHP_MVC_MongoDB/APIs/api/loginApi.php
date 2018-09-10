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
				$check = $this->model->table(admins)->find([
					'username' => $username
				]) -> toArray();
				if (isset($check[0]->username)) {
					if ($password == $check[0]->password) {
						$this->response(200,1);
					}
				}
			}
		}
	}
	new loginApi();
?>