<?php
	include "restful_api.php";
	class teamsApi extends restful_api {
		function __construct(){
			parent::__construct();
		}
		function show() {
			$id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;			
			if ($this->method == 'GET'){
				// Hãy viết code xử lý LẤY dữ liệu ở đây
				// trả về dữ liệu bằng cách gọi: $this->response(200, $data)
				if ($id == 0) {
					$arr = $this->model->fetch("select * from teams") ;
				}
				else
					$arr = $this->model->fetch_one("select * from teams where id = $id") ;
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
				$create =  $this->model->execute("insert into teams(name,description,logo,leader_id) values('$name','$description','$logo','$leader_id')");	
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
				// header('Content-Type: application/json');
				echo "abc";
				echo json_encode($response);
			}
		}
		function update() {
			if ($this->method == 'POST'){
				$id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"] : 0;
				$name = $_POST["name"];
				$description = $_POST["description"];
				$leader_id = $_POST["leader_id"];
				$image = $_POST["image"];

				$update = $this->model->execute("update teams set name='$name',description='$description',leader_id='$leader_id',logo='$image' where id = $id");
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
				$id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;
				$this->model->execute("delete from teams where id = $id");
				header('Content-Type: application/json');			
			}
			echo json_encode(["result"=>"Xoa thanh cong"]);
		}
	}
	new teamsApi();
?>