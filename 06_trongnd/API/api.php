<?php
include 'restful_api.php';

class api extends restful_api {

	function __construct(){
		parent::__construct();
	}
	function demo_danh_sach_nhan_vien(){
		//keet noi
		$con 	 = new mysqli('localhost','root','hanoi1','qlnv');
		mysqli_set_charset($con, 'UTF8');
		//sql de show ca bang tbl_user
		$sql     = "select * from  tbl_user" ;
		$result  = $con->query($sql);
		$data    = [];
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
			$con  = mysqli_connect('localhost', 'root', 'hanoi1','qlnv');
			mysqli_set_charset($con, 'UTF8');
			//lay id truyeen tren URL
			$id   = $_GET['id'];
			$sql  = "DELETE FROM tbl_user where pk_user_id='$id'";
			$res  = [];
			if( $con->query($sql)){
				$res["MESSAGE"]  ="delete sucsses ";
				$res["STATUS"]   =200;
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
			$con 	 	 = mysqli_connect('localhost', 'root', 'hanoi1','qlnv');
			mysqli_set_charset($con, 'UTF8');
			$name 		 = $_POST['name'];
			$description = $_POST['description'];
			$logo		 = $_POST['logo'];
			$leader_id   = $_POST['leader_id'];
			$sql  		 = "INSERT into tbl_teams (name,description,logo,leader_id) values('{$name}','{$description}','{$logo}','{$leader_id}')";
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
		  $con 	     = new mysqli('localhost','root','hanoi1','qlnv');
		  mysqli_set_charset($db,"UTF8");
		  
		  $sql       = "select name, password from tbl_user where name='".$_POST['name']."' and password='".md5($_POST['password'])."'";
		  //$res       = mysqli_num_rows(mysqli_query($con,$sql));
		  if( mysqli_num_rows($con->query($sql))>0){
				$res["MESSAGE"] = "insert sucsses ";
				$res["STATUS"]	= 200;
			}else{
				$res["MESSAGE"]	= "insert fail";
				$res["STATUS"]	= 404;
			}
		
		}

		header('Content-Type: application/json');
		echo json_encode($res);
	  }
	  function demo_dang_ky()
	{
		// thêm nhân viên do database tất cả để none :v 
		if($this->method == 'POST'){
			$con 	 	 = mysqli_connect('localhost', 'root', 'hanoi1','qlnv');
			mysqli_set_charset($con, 'UTF8');
			$name 		 = $_POST['name'];
			$description = $_POST['description'];
			$logo		 = $_POST['logo'];
			$leader_id   = $_POST['leader_id'];
			$sql  		 = "INSERT into tbl_teams (name,description,logo,leader_id) values('{$name}','{$description}','{$logo}','{$leader_id}')";
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
