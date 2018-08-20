<?php
include 'restful_api.php';
class api extends restful_api {
	function __construct(){
		parent::__construct();
	}
	function demo_danh_sach_nhan_vien(){
		$con 	= new mysqli('localhost','root','123456','vinsofts-tupa');
		mysqli_set_charset($con, 'UTF8');
		$sql     = "select pk_user_id,c_name,c_phone_number from  tbl_user" ;
		$result  = $con->query($sql);
		$data = [];
		if($result){
			while($row = $result->fetch_object()){
				array_push($data, $row);
			}
			echo json_encode($data);
		}
		else{
			echo "khong co du lieu";
		}
	}
	function demo_xoa_nhan_vien()
	{
		if($this->method == 'DELETE'){
			$con  = mysqli_connect('localhost', 'root', '123456','vinsofts-tupa');
			$id   = $_GET['id'];
			$sql  	= "DELETE FROM tbl_user where pk_user_id='$id'";
			$res = [];
			if( $con->query($sql)){
				$res["MESSAGE"]="delete sucsses ";
				$res["STATUS"]=200;
			}else{
				$res["MESSAGE"] = "delete fail";
				$res["STATUS"]  = 404;
			}
			header('Content-Type: application/json');
			echo json_encode($res);
		}
	}
	function demo_them_phong_ban()
	{
		if($this->method == 'POST'){
			$con 	 	 = mysqli_connect('localhost', 'root', '123456','vinsofts-tupa');
			mysqli_set_charset($con, 'UTF8');
			$name 		 = $_POST['name'];
			$description = $_POST['description'];
			$sql  		 = "INSERT into tbl_teams (c_name,c_description,c_logo,leader_id) values('{$name}','{$description}'";
			if( $con->query($sql)){
				$res["MESSAGE"] = "insert sucsses ";
				$res["STATUS"]	= 200;
			}else{
				$res["MESSAGE"]	= "insert fail";
				$res["STATUS"]	= 404;
			}
		header('Content-Type: application/json');
			echo json_encode($res);
		}
	}
}
$user_api = new api();
?>