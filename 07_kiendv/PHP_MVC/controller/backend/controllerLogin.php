<?php  
	class controllerLogin extends controller{
		public function __construct(){
			parent::__construct();
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$url = 'http://localhost/vinsofts/07_kiendv/PHP_MVC/APIs/api/loginApi.php/login';
				$data = array('username' => $_POST["username"], 'password' => $_POST["password"]);

				// use key 'http' even if you send the request to https://...
				$options = array(
				    'http' => array(
				        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				        'method'  => 'POST',
				        'content' => http_build_query($data)
				    )
				);
				$context  = stream_context_create($options);
				$result = file_get_contents($url, false, $context);
				if($result==1)
				{
					$_SESSION["username"]=$_POST["username"];
					header("location:admin.php");
				}
			}
			include "view/backend/viewLogin.php";
		}
	}
	new controllerLogin();
?>