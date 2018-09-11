<?php
	include "restful_api.php";
	class teamsApi extends restful_api {
		function __construct(){
			parent::__construct();
		}
		function show() {
			$id = isset($_GET['id']) ? $_GET['id'] : 0;
			// var_dump($id);
			// die();
			if ($this->method == 'GET'){
				// Hãy viết code xử lý LẤY dữ liệu ở đây
				// trả về dữ liệu bằng cách gọi: $this->response(200, $data)
				if ($id == 0) {
					$arr = $this->model->table(teams)->find()->toArray();
				}
				else
					$arr = $this->model->table(teams)->find([
						'_id' => new MongoDB\BSON\ObjectID($id)
					]) -> toArray();
				if($arr){
					$this->response(200, $arr);
				}
				else{
					echo "NULL";
				}
			}
		}
		function create() {
			if ($this->method == 'POST'){
				// global $db;
				// $sql = " insert into teams(name,description,logo,leader_id) values('$name','$description','$logo','$leader_id') ";
				$name = $_POST["name"];
				$description = $_POST["description"];
				$leader_id = $_POST["leader_id"];
				$logo = $_POST["image"];
				$create =  $this->model->table(teams)->insertOne([
					'name' => $name,
					'description' => $description,
					'leader_id' => $leader_id,
					'logo' => $logo
				]);	
				if($create)
				{
					$response=array(
						'status' => 1,
						'status_message' =>'Product Added Successfully.'
					);
				}
				else
				{
					$response=array(
						'status' => 0,
						'status_message' =>'Product Addition Failed.'
					);
				}
				echo json_encode($response);
			}
		}
		function update() {
			if ($this->method == 'POST'){
				$id = isset($_GET["id"]) ? $_GET["id"] : 0;
				$name = $_POST["name"];
				$description = $_POST["description"];
				$leader_id = $_POST["leader_id"];
				$image = $_POST["image"];

				$update = $this->model->table(teams)->updateOne(
					[
						'_id' => new MongoDB\BSON\ObjectID($id)
					],
					[
						'$set' =>
						[
							'name' => $name,
							'description' => $description,
							'leader_id' => $leader_id,
							'logo' => $image
						]
					]
				);
				if($update)
				{
					$response=array(
						'status' => 1,
						'status_message' =>'Product Added Successfully.'
					);
				}
				else
				{
					$response=array(
						'status' => 0,
						'status_message' =>'Product Addition Failed.'
					);
				}
				header('Content-Type: application/json');
				echo json_encode($response);
			}
		}
		function delete() {
			if ($this->method == 'DELETE'){
				$id = isset($_GET['id']) ? $_GET['id'] : 0;
				$this->model->table(teams)->deleteOne([
					'_id' => new MongoDB\BSON\ObjectID($id)
				]);
				header('Content-Type: application/json');			
			}
			echo json_encode(["result"=>"Xoa thanh cong"]);
		}
	}
	new teamsApi();
?>