<?php
include 'restful_api.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}
	function demo_danh_sach_nhan_vien(){
		$con 	= new mysqli('localhost','root','cuong2901','ql_ns');
		mysqli_set_charset($con, 'UTF8');
		$sql     = "select * from  Teams" ;
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
			$con  = mysqli_connect('localhost', 'root', 'cuong2901','ql_ns');
			$id   = $_GET['id'];
			$sql  	= "DELETE FROM Users where id='$id'";
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
			$con 	 	 = mysqli_connect('localhost', 'root', 'cuong2901','ql_ns');
			mysqli_set_charset($con, 'UTF8');
			$name 		 = $_POST['name'];
			$description = $_POST['description'];
			$logo = $_POST['logo'];
			$leader_id = $_POST['leader_id'];
			$sql  		 = "INSERT into Teams (team_name,description,logo,leader_id) values('{$name}','{$description}','{$logo}',{$leader_id})";
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
	function demo_dang_nhap(){
    
    if($this->method=="POST")
    {
      $con = new mysqli('localhost','root','cuong2901','ql_ns');
      mysqli_set_charset($con,"UTF8");

      $sql     = "select email, password from Users where email='".$_POST['email']."' and password='".$_POST['password']."'";
      $res  = mysqli_num_rows(mysqli_query($con,$sql));
      $this->response(200,$res);
    }
  }
  function demo_dang_ky(){
  	if($this->method=="POST")
  	{

  		$con = new mysqli('localhost','root','cuong2901','ql_ns');
      mysqli_set_charset($con,"UTF8");
            $email 		 = $_POST['email'];
            $password 		 = $_POST['password'];
			$sql  		 = "INSERT into Users (email,password) values('{$email}','{$password}')";
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
