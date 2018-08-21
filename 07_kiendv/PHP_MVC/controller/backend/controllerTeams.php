<?php  
	class controllerTeams extends controller
	{
		public function __construct(){
			parent::__construct();
			$content = file_get_contents("http://localhost/vinsofts/07_kiendv/PHP_MVC/APIs/api/teamsApi.php/show");
			$arr = json_decode($content,true);
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				case 'delete':
					$id = $_GET["id"];
					$remove_image = $this->model->fetch_one("select logo from teams where id = $id");
					if ($remove_image->logo != "" && file_exists($remove_image->logo)) {
						unlink($remove_image->logo);
					}
					if ($_SERVER["REQUEST_METHOD"] == "GET") {
						$url = 'http://localhost/vinsofts/07_kiendv/PHP_MVC/APIs/api/teamsApi.php/delete?id='.$id;
						$data = array('key1' => "value1", 'key2' => "value2");
						// use key 'http' even if you send the request to https://...
						$options = array(
						    'http' => array(
						        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
						        'method'  => 'DELETE',
						        'content' => http_build_query($data)
						    )
						);
						$context  = stream_context_create($options);
						$result = file_get_contents($url, false, $context);
					}
					// Header( "HTTP/1.1 301 Moved Permanently" );
 					Header( "Location: admin.php?controller=Teams" );
					break;
				
				default:
					# code...
					break;
			}

			include "view/backend/viewTeams.php";
		}
	}
	new controllerTeams();
?>