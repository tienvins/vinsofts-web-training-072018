<?php  
	class controllerAddEditTeams extends controller {
		public function __construct() {
			parent::__construct();
			$action = isset($_GET["action"]) ? $_GET["action"] : "";
			switch ($action) {
				case "add":
					$form_action = "admin.php?controller=AddEditTeams&action=do_add";
					$arr = $this->model->table(users)->find();
					include "view/backend/viewAddEditTeams.php";
					break;
				case "do_add":
					$name = $_POST["name"];
					$description = $_POST["description"];
					$leader_id = $_POST["leader_id"];

					$uploaddir      =   "public/upload/teams";
		            $fileinfo       =   PATHINFO($_FILES['image']['name']);
		            $newfilename    =   "logo_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
		            $filetmp        =   $_FILES['image']['tmp_name'];
		            if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true)
		                $logo      =   "$uploaddir/$newfilename";

		            // $result = json_encode(['error' => "Something is wrong :("]);
		            if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$url = 'http://localhost/vinsofts-web-training-072018/07_kiendv/PHP_MVC/APIs/api/teamsApi.php/create';
						$data = array('name' => $name, 'description' => $description, 'leader_id' => $leader_id, 'image' => $logo);
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
					}
					// var_dump(json_decode($result));
					Header( "HTTP/1.1 301 Moved Permanently" );
 					Header( "Location: admin.php?controller=Teams" );
					break;

				case "edit":
					$id = isset($_GET["id"]) ? $_GET["id"] : 0;
					$form_action = "admin.php?controller=AddEditTeams&action=do_edit&id=$id";
					$data = $this->model->table(teams)->find([
						'_id' => new MongoDB\BSON\ObjectID($id)
					]) -> toArray();
					$arr = $this->model->table(users)->find();
					include "view/backend/viewAddEditTeams.php";
					break;
				case "do_edit":
					$id = isset($_GET["id"]) ? $_GET["id"] : 0;
					$name = $_POST["name"];
					$description = $_POST["description"];
					$leader_id = $_POST["leader_id"];
					$image = "";
					if ($_FILES["image"]["name"] != "") {
						$uploaddir      =   "public/upload/teams";
			            $fileinfo       =   PATHINFO($_FILES['image']['name']);
			            $newfilename    =   "logo_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
			            $filetmp        =   $_FILES['image']['tmp_name'];
			            if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true){
			            	$remove_image = $this->model->table(teams)->find([
								'_id' => new MongoDB\BSON\ObjectID($id)
							]) -> toArray();
							if ($remove_image[0]->logo != "" && file_exists($remove_image[0]->logo)) {
								unlink($remove_image[0]->logo);
							}
			                $image      =   "$uploaddir/$newfilename";
			            }
			        }
			        $result = json_encode(["error" => "Something is wrong :("]);

			        if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$url = 'http://localhost/vinsofts-web-training-072018/07_kiendv/PHP_MVC/APIs/api/teamsApi.php/update?id='.$id;
						$data = array('name' => $name, 'description' => $description, 'leader_id' => $leader_id, 'image' => $image);
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
					}
			        var_dump(json_encode($result));
					Header( "HTTP/1.1 301 Moved Permanently" );
 					Header( "Location: admin.php?controller=Teams" );
					break;
				default:
					# code...
					break;
			}
		}
	}
	new controllerAddEditTeams();
?>